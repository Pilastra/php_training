function abrirJanela(endereco) 
/* Esta função abre uma página em outra janela. É importante para não se usar, no elemento a, o atributo target="_blank", já que este, embora não seja desaprovado, não se enquadra na DTD strict.
*/
{
  window.open(endereco);
}

function criarRodape(alturaVideoBase, faixa, pontoponto) 
/*
Parâmetros:
alturaVideoBase - Altura da resolução de vídeo utilizada quando da avaliação da faixa.
faixa - Quando positiva, refere-se ao espaço que sobra na página quando de sua visualização. Quando negativa, refere-se ao conteúdo excedente que precisa da barra de rolagem vertical.
pontoponto - ponto-ponto-barra (um ou mais) a ser inserido na frente do path nos atributos que o pedem. Colocar "../", "../../", etc. Páginas do diretório raiz deve informar "".
Variáveis:
m - margem
alturaVideoAtual - Altura da resolução de vídeo atual. Apurada com screen.height.
*/
{
var m, alturaVideoAtual = screen.height;

m = faixa - alturaVideoBase + alturaVideoAtual;

document.write ("<div id=\"rodape\"" + " ");
if (faixa > 0 && m > 0)
document.write ("style=\"margin-top:" +  m + "px\"");
if (faixa < 0 && m < 0 && alturaVideoAtual > alturaVideoBase)
document.write ("style=\"margin-top:" +  Math.abs(m) + "px\"");

document.write (">");
document.write (


"<a href=\"http://jigsaw.w3.org/css-validator/validator?uri=" + document.URL + "\"><img src=\"" + pontoponto + "imagensgerais/valid-css-blue.png\" alt=\"Valid CSS!\" title=\"Valid CSS!\" height=\"31\" width=\"88\"></a>" +


"<a href=\"http://validator.w3.org/check?uri=referer\"><img src=\"" + pontoponto + "imagensgerais/valid-html401-blue.png\" alt=\"Valid HTML 4.01 Strict\" title=\"Valid HTML 4.01 Strict\" height=\"31\" width=\"88\"></a><div><a href=\"" + pontoponto + "mapasite.html\" >| Mapa do Site | </a> Copyright © 2006 Abpsoft. Todos os direitos reservados." + "</div></div>"
);
}