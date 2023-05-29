import polos from "./mapadata.js"

(function (win, doc) {

    'use strict';

    const lista_de_municipios = polos();

    const cor_mouse_hover = "#2F95F5";

// Adicionando o modal de informações

    let info_modal = doc.querySelector("[info]");

    doc.body.addEventListener("mousemove", (e) => {
        info_modal.style.top = `${e.pageY}px`;
        info_modal.style.left = `${e.pageX}px`;
    });

    const showInfo = (municipio, desc) => {
        doc.body.style.cursor = "none";
        info_modal.querySelector("h1").innerText = municipio;
        info_modal.querySelector("p").innerText = desc;
        info_modal.style.display = "inline-block";
    }

    const hideInfo = () => {
        doc.body.style.cursor = "auto";
        info_modal.style.display = "none";
    }

    // Adicionando Event Listeners

    for (const cod_municipio in lista_de_municipios) {

        doc.querySelector(`#mun_${cod_municipio}`).style.fill = lista_de_municipios[cod_municipio].cor;

        doc.querySelector(`#mun_${cod_municipio}`).addEventListener('mouseenter', (e) => {
            let id = e.target.id;
            doc.querySelector('#' + id).style.fill = cor_mouse_hover;

            showInfo(`Polo de ${lista_de_municipios[cod_municipio].nome}`, lista_de_municipios[cod_municipio].desc);
        });

        doc.querySelector(`#mun_${cod_municipio}`).addEventListener('mouseout', (e) => {
            let id = e.target.id;
            doc.querySelector('#' + id).style.fill = lista_de_municipios[cod_municipio].cor;

            hideInfo();
        });

    }
}
)(window, document);