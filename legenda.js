import polos from "./mapadata.js"


const mapaIframe = document.querySelector("iframe[title='mapa']");
console.log(mapaIframe);

const legenda = document.querySelector("[legenda]");
legenda.append(document.createElement("ul"));

const lista_legenda = legenda.querySelector("ul");
const municipios = polos();

let aux;
for (const cod_municipio in municipios) {

    aux = document.createElement("li");
    console.log(aux.setAttribute("cod-municipio", `${cod_municipio}`));
    aux.innerHTML = municipios[cod_municipio].nome;
    lista_legenda.append(aux);
}

mapaIframe.onload = () => {
    
    (function a (document, window){

        lista_legenda.querySelectorAll("li").forEach( p => {

            p.addEventListener("mouseover", (e) => {
                let id = e.target.getAttribute("cod-municipio");
                document.querySelector('#mun_' + id).style.fill = "#2F95F5";
            });
            
            p.addEventListener("mouseout", (e) => {
                let id = e.target.getAttribute("cod-municipio");
                document.querySelector('#mun_' + id).style.fill = municipios[id].cor;
            });

        });
    })(mapaIframe.contentDocument, mapaIframe.contentWindow);

}


