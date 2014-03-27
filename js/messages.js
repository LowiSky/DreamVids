var messagesList = document.getElementById("messages-list"),
    messagesDiscution = document.getElementById("messages-discution"),
    discutionInfos = document.getElementById("discution-infos");

ajax.post("ajax/messagesList.php").then(function(result) {
    messagesList.innerHTML = "";

    messages = JSON.parse(result.responseText);

    if (!messages.length) {
        alert("Pas de messages");
    } else {
        for (var i = 0; i < messages.length; i++) {
            message = messages[i];

            var li = document.createElement('li');
            li.id = "message-" + message.id;

            li.addEventListener('click', function(event) {
                for (var i = 0; i < messagesList.childNodes.length; i++) {
                    messagesList.childNodes[i].className = messagesList.childNodes[i].className.replace("current", "")
                }

                loadDiscution(this.id.replace("message-", ""));
                li.className = "current";
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
    }
});

function loadDiscution(id) {
    ajax.post("ajax/messageDiscution.php", {
        "idDiscution": id
    }).then(function(result) {
        messagesDiscution.innerHTML = "";

        discution = JSON.parse(result.responseText);

        infos = discution.infos;

        discutionInfos.innerHTML = "";

        var h1 = document.createElement('h1');
        h1.innerHTML = infos.title;
        discutionInfos.appendChild(h1);

        var members = document.createElement('span');
        members.className = "members";
        for (var m = 0; m < infos.members.length; m++) {
            console.log('yolo');
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

        if (!messages.length) {
            alert("Pas de messages");
        } else {
            for (var i = 0, length = messages.length; i < length; i++) {
                message = messages[i];

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
        }
    });
}