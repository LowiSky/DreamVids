window.requestAnimationFrame = (function() {
    return window.requestAnimationFrame ||
        window.webkitRequestAnimationFrame ||
        window.mozRequestAnimationFrame ||
        function(callback) {
            window.setTimeout(callback, 1000 / 60);
    };
})();

var messagesList = document.getElementById("messages-list"),
    messagesDiscution = document.getElementById("messages-discution"),

    discutionInfos = document.getElementById("discution-infos"),
    createForm = document.getElementById("create-form"),

    messageRightContent = document.getElementById("message-right-content"),
    messageText = document.getElementById("message-text"),
    messageSubmit = document.getElementById("message-submit"),

    createInputTitle = document.getElementById("create-input-title"),
    createInputMembers = document.getElementById("create-input-members"),
    createSubmit = document.getElementById("create-submit"),

    discutionId = null;

var scrolling = false,
    scrollSpeed = 0;

function scrollDown() {
    if (!scrolling) {
        scrollInterval();
    }
}

function scrollInterval() {
    scrolling = true;
    speed = Math.abs(messagesDiscution.scrollTop + messagesDiscution.offsetHeight - messagesDiscution.scrollHeight) / 20 + 1;
    scrollSpeed += scrollSpeed < speed ? speed / 15 : -speed / 5;

    messagesDiscution.scrollTop += scrollSpeed;

    if (messagesDiscution.scrollTop + messagesDiscution.offsetHeight < messagesDiscution.scrollHeight) {
        requestAnimationFrame(scrollInterval);
    } else {
        scrollSpeed = 0;
        scrolling = false;
    }
}

function addMessageInList(message) {
    var li = document.createElement('li');
    li.id = "message-" + message.id;

    li.addEventListener('click', function(event) {
        for (var i = 0; i < messagesList.childNodes.length; i++) {
            messagesList.childNodes[i].className = messagesList.childNodes[i].className.replace("current", "");
        }

        loadDiscution(this.id.replace("message-", ""));
        this.className = "current";
    }, false);

    var avatar = document.createElement('span');
    avatar.className = "avatar";
    avatar.style.backgroundImage = 'url(' + message.avatar + ')';
    li.appendChild(avatar);

    var h3 = document.createElement('h3');
    h3.innerHTML = message.title;
    li.appendChild(h3);

    var members = document.createElement('span');
    members.className = "members";
    for (var m = 0; m < message.members.length; m++) {
        if (m == 0) {
            members.innerHTML += message.members[m];
        } else if (m < message.members.length - 1) {
            members.innerHTML += ', ' + message.members[m];
        } else {
            members.innerHTML += ' et ' + message.members[m];
        }
    }
    li.appendChild(members);

    var p = document.createElement('p');
    p.innerHTML = message.text;
    li.appendChild(p);

    messagesList.appendChild(li);
}

function addMessageInDiscution(message) {
    var li = document.createElement('li');
    li.id = "answer-" + message.id;

    if (message.my) {
        li.className = "right";
    } else {
        li.className = "left";
    }

    var infos = document.createElement('a');
    infos.className = "infos";
    infos.href = "@" + message.pseudo;

    var avatar = document.createElement('a');
    avatar.className = "avatar";
    avatar.style.backgroundImage = 'url(' + message.avatar + ')';
    infos.appendChild(avatar);

    var pseudo = document.createElement('p');
    pseudo.innerHTML = message.pseudo;
    infos.appendChild(pseudo);

    li.appendChild(infos);

    var div = document.createElement('div');
    div.innerHTML = message.text;
    li.appendChild(div);

    messagesDiscution.appendChild(li);
}

function loadMessagesInList() {
    ajax.post("ajax/messagesList.php").then(function(result) {
        messagesList.innerHTML = "";

        messages = JSON.parse(result.responseText);

        if (!messages.length) {
            alert("Pas de messages");
        } else {
            for (var i = 0; i < messages.length; i++) {
                addMessageInList(messages[i]);
            }
        }
    });
}

loadMessagesInList();

function loadDiscution(id) {
    discutionId = id;

    ajax.post("ajax/messageDiscution.php", {
        "idDiscution": id
    }).then(function(result) {
        messagesDiscution.innerHTML = "";
        messagesDiscution.scrollTop = 0;

        discution = JSON.parse(result.responseText);

        infos = discution.infos;

        discutionInfos.innerHTML = "";
        discutionInfos.className = discutionInfos.className.replace("none", "");
        createForm.className += " none";

        var h1 = document.createElement('h1');
        h1.innerHTML = infos.title;
        discutionInfos.appendChild(h1);

        var members = document.createElement('span');
        members.className = "members";
        for (var m = 0; m < infos.members.length; m++) {
            if (m == 0) {
                members.innerHTML += infos.members[m];
            } else if (m < infos.members.length - 1) {
                members.innerHTML += ', ' + infos.members[m];
            } else {
                members.innerHTML += ' et ' + infos.members[m];
            }
        }
        discutionInfos.appendChild(members);

        messages = discution.messages;

        if (messages.length) {
            for (var i = 0, length = messages.length; i < length; i++) {
                addMessageInDiscution(messages[i]);
            }
        }

        messageRightContent.className = messageRightContent.className.replace("none", "");
        scrollDown();
    });
}

messageSubmit.addEventListener('click', function(event) {
    ajax.post("ajax/sendMessage.php", {
        "idDiscution": discutionId,
        "text": messageText.value
    }).then(function(result) {
        addMessageInDiscution(JSON.parse(result.responseText));
    });

    messageText.value = "";
    messageText.focus();
}, false);

function createDiscution(members) {
    createInputTitle.value = "";
    createInputMembers.value = members ? members : "";

    discutionInfos.className += " none";
    createForm.className = createForm.className.replace("none", "");
}

createSubmit.addEventListener('click', function() {
    discutionInfos.className = discutionInfos.className.replace("none", "");
    createForm.className += " none";

    ajax.post("ajax/createDiscution.php", {
        "subject": createInputTitle,
        "members": createInputMembers
    }).then(function(result) {
        loadDiscution(result.responseText);
        loadMessagesInList();
    });
}, false);