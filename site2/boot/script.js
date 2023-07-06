// script.js

// Função para obter os dados do banco de dados
function getAcontecimentos() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var acontecimentos = JSON.parse(this.responseText);
            exibirAcontecimentos(acontecimentos);
        }
    };
    xhttp.open("GET", "obter_acontecimentos.php", true);
    xhttp.send();
}

// Função para exibir os acontecimentos na linha do tempo
function exibirAcontecimentos(acontecimentos) {
    var timelineDiv = document.getElementById("timeline");

    for (var i = 0; i < acontecimentos.length; i++) {
        var eventoDiv = document.createElement("div");
        eventoDiv.innerHTML = "<h3>" + acontecimentos[i].titulo + "</h3>" +
                              "<p>" + acontecimentos[i].descricao + "</p>" +
                              "<p>Data: " + acontecimentos[i].data + "</p>";

        timelineDiv.appendChild(eventoDiv);
    }
}

// Chamada da função para obter os dados e exibir na linha do tempo
getAcontecimentos();
