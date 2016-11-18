function criarMenu (secao,classe,arquivo,nivel) {
/*
Parâmetros:
secao - nome da secao (geral ou nome de secao). Tem de ser um dos nomes referenciados nos cases abaixo.
classe - nome da classe css do menu: menuhorizontal ou menuvertical.
arquivo - nome do próprio arquivo que chama a função ou nome do arquivo mestre (arquivo introdutório da seção à qual pertence o arquivo que chama).
nivel - nível em que o arquivo está na hierarquia dos diretórios. O diretório raiz é o 0. 
*/
var fundodestaque;
(classe=="menuhorizontal")? fundodestaque="#c66" : fundodestaque="#33c";
switch (secao) { 
  case "geral":
    var paginas = new Array (
      "", "index.html", "Página Inicial",
      "criacaoweb/", "criacaoweb.html", "Criação de Websites",
      "programacao/", "programacao.html", "Noções de SQL",
      "", "downloads.html", "Downloads",
      "", "links.html", "Links úteis",
      "horacafe/", "horacafe.html", "Hora do Café",
      "", "contato.html", "Entrar em Contato"
    );
	  break;
  case "criacaoweb":
    var paginas = new Array (
	    "", "",	"Tutoriais",
      "criacaoweb/", "htmlbasico.html", "HTML Básico",
		  "criacaoweb/", "cssbasico.html", "CSS Básico",
		  "criacaoweb/", "jsbasico.html", "JavaScript Básico",
		  "criacaoweb/", "xmlbasico.html", "XML Básico",			
		  "", "", "Guias de Referência",						
		  "criacaoweb/", "htmlguiaref.html", "Elementos HTML",			
		  "criacaoweb/", "cssguiaref.html", "Propriedades CSS",
			"criacaoweb/", "cssguiarefselet.html", "Seletores CSS",
		  "criacaoweb/", "tabcores.html", "Tabela de Cores HTML/CSS",
		  "criacaoweb/", "tabcaractesp.html", "Tabela de Caracteres Especiais",
		  "criacaoweb/", "path.html", "Como especificar o path"
    );
	  break;
  case "programacao":
    var paginas = new Array (
      "programacao/sqlexemplos/", "criartab.html", "Criação de Tabelas",
		  "programacao/sqlexemplos/", "alterartab.html", "Alteração de Tabelas"
    );
	  break;
  case "horacafe":
    var paginas = new Array (
		  "", "", "Variedades",	
      "horacafe/luizbento/", "luizbento.html", "Artigos do Luiz Bento",
		  "horacafe/zeliabento/", "zeliabento.html", "Óleo sobre tela por Zélia Bento",
		  "horacafe/", "culinaria.html", "Culinária",
		  "horacafe/", "piadas.html", "Piadas",	
			"horacafe/", "coisaslingua.html", "Coisas de nossa língua",
			"horacafe/futebol/", "futebol.html", "Futebol",	
      "", "", "Probabilidades nas loterias",						
			"horacafe/loterias/", "lotmegasena.html", "Mega-Sena",
			"horacafe/loterias/", "lotduplasena.html", "Dupla-Sena",
      "horacafe/loterias/", "lotquina.html", "Quina",
      "horacafe/loterias/", "lotofacil.html", "Lotofácil",						
      "horacafe/loterias/", "lotomania.html", "Lotomania",	
      "horacafe/loterias/", "lotqualquer.html", "Qualquer loteria"													
    );
	  break;
  case "loterias":
    var paginas = new Array (
		  "", "", "Probabilidades nas loterias",
      "horacafe/loterias/", "lotmegasena.html", "Mega-Sena",
			"horacafe/loterias/", "lotduplasena.html", "Dupla-Sena",
      "horacafe/loterias/", "lotquina.html", "Quina",
      "horacafe/loterias/", "lotofacil.html", "Lotofácil",						
      "horacafe/loterias/", "lotomania.html", "Lotomania",
      "horacafe/loterias/", "lotqualquer.html", "Qualquer loteria"					
    );
	  break;		
}
document.write ("<ul class=\"" + classe + "\">");
for (i=0;i<paginas.length; i++) {
 if (i%3==0) {
 			   if (classe=="menuvertical" && paginas[i]=="")
				 document.write ("<li style=\"background-color:#996;\">" + paginas[i+2] + "</li>"); else { 
    switch (nivel) { 
      case 0: 
        (paginas[i+1]!=arquivo)? document.write ("<li>" + "<a href=\"" + paginas[i] + paginas[i+1] + "\">" + paginas[i+2] + "</a></li>") : document.write ("<li style=\"background-color:" +  fundodestaque +  "\">" + "<a href=\"" + paginas[i] + paginas[i+1] + "\">" + paginas[i+2] + "</a></li>");
        break;
      case 1: 
        (paginas[i+1]!=arquivo)? document.write ("<li>" + "<a href=\"../" + paginas[i] + paginas[i+1] + "\">" + paginas[i+2] + "</a></li>") : document.write ("<li style=\"background-color:" + fundodestaque + "\">" + "<a href=\"../" + paginas[i] + paginas[i+1] + "\">" + paginas[i+2] + "</a></li>");
        break;
      case 2: 
          (paginas[i+1]!=arquivo)? document.write ("<li>" + "<a href=\"../../" + paginas[i] + paginas[i+1] + "\">" + paginas[i+2] + "</a></li>") : document.write ("<li style=\"background-color:" + fundodestaque + "\">" + "<a href=\"../../" + paginas[i] + paginas[i+1] + "\">" + paginas[i+2] + "</a></li>");
        break;
      case 3: 
        (paginas[i+1]!=arquivo)? document.write ("<li>" + "<a href=\"../../../" + paginas[i] + paginas[i+1] + "\">" + paginas[i+2] + "</a></li>") : document.write ("<li style=\"background-color:"  + fundodestaque +  "\">" + "<a href=\"../../../" + paginas[i] + paginas[i+1] + "\">" + paginas[i+2] + "</a></li>");
        break;															
    }
  }
}}
document.write ("</ul>");
}

function criarMenuSequencia(secao,arquivo) {
/*
Parâmetros:
secao - nome da secao. Tem de ser um dos nomes referenciados nos cases abaixo.
arquivo - nome do próprio arquivo que chama a função.
*/
var pag=0, arquivomestre, indice, anterior, seguinte;
switch (secao) { 
  case "luizbento":
	  arquivomestre="luizbento.html"; indice="Artigos do Luiz Bento"; anterior="Artigo Anterior"; seguinte="Próximo Artigo";
    var paginas = new Array (
      "lbousadia.html",
      "lbfazendeiros.html",
      "lbcliente.html",
      "lbpedra.html",
      "lbteuolhar.html",
      "lbalgodao.html",
      "lbestrada.html",
      "lbsapeca.html",
      "lbexistencialismo.html",
      "lbdepoissorin.html",
      "lbagnostico.html",
      "lbagenda.html",
      "lbcicinha.html",
      "lbcapitalista.html",
      "lbdepressao.html",
      "lbneologismo.html",
      "lbfantastico.html",
      "lbpivete.html",
      "lbvidaeterna.html",
      "lbserfeliz.html",
      "lbespiritoporco.html",
      "lbcoracao.html",
      "lbnatal.html",
      "lbpupilas.html",
      "lbaniversario.html",
      "lbinedito.html",
      "lbadeusamigo.html",
      "lbbaderneiros.html",
      "lbbocal.html",
      "lbsevocenaotem.html",
      "lbsoucontra.html"     
    );
		break;
  case "zeliabento":
	  arquivomestre="zeliabento.html"; indice="Óleo sobre tela por Zélia Bento"; anterior="Quadro Anterior"; seguinte="Próximo Quadro";
    var paginas = new Array (
      "zbponte.html",
      "zbfazboaesp.html",
			"zbbambuzal.html",
			"zbcoposleite.html",
			"zborquidea.html",
			"zbrosas.html",
			"zbriachoazul.html",			
      "zbdivina.html",
			"zbdivinadet1.html",
			"zbdivinadet2.html",
			"zbdivinadet3.html"
		);
		break;	
  case "futebol":
	  arquivomestre="futebol.html"; indice="Clubes de Futebol"; anterior="Clube Anterior"; seguinte="Próximo Clube";
    var paginas = new Array (
      "cruzeiro.html",
      "atleticomg.html",
			"americamg.html",
			"goias.html",
			"vilanovago.html",
			"bahia.html",
			"vitoria.html",
			"gremio.html",
			"internacional.html",
			"juventude.html"
		);
		break;
}
  for (i=0;i<=paginas.length-1; i++) {
    pag=i;
    if (paginas[i]==arquivo) break;
  }
  document.write ("<ul class=\"menuhorizontal\" style=\"float: right; position: relative; top: 5px;\">");
	document.write ("<li style=\"background-color: #33c\"><a href=\"" +  arquivomestre +   "\">" + indice +  "</a></li>");	
  if (pag!=0) document.write ("<li style=\"background-color: #369\"><a href=\"" + paginas[pag-1] + "\">" + anterior + "</a></li>");
  if (pag!=paginas.length-1) document.write ("<li style=\"background-color: #369\"><a href=\"" + paginas[pag+1] + "\">" + seguinte + "</a></li>"); 
  document.write ("</ul>");	
}
