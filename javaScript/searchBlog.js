var posts;
var jsonData = [
  {
    "titulo": "Parabéns Agricultor",
    "imagem": "prancheta",
    "descricao": "Para comemorar os 100 anos da criação do ministério da Agricultura, o presidente Juscelino Kubitschek determinou, em 1960, que no em 28 de julho passasse a ser comemorado o Dia do Agricultor.<br/><br/>A agricultura está presente em diversas atividades do dia-a-dia, sobretudo dos brasileiros. Grande parte dos alimentos que está em sua mesa, mesmo que você não imagine, passou pelas mãos de um agricultor – ele é o responsável por cultivar grãos, sementes e hortaliças. De acordo com pesquisa do Sebrae, 71%25 dos donos de microempresas estão no campo.<br/><br/>As folhas fresquinhas de alface do almoço, aquele cafézinho delicioso no fim da tarde ou aquele docinho depois do jantar? É tudo graças ao agricultor. É como diz o velho ditado, se o campo não planta, a cidade não janta.<br/><br/>Para não nos esquecermos da importância desta tão importante profissão, não só no dia de hoje, a Agro TI separou 4 motivos para entendermos melhor a importância dos agricultores.<br/><br/>Confira:<br/><b>1 - Setor primário da economia brasileiro</b><br/>A agricultura é uma das principais fontes de capital para o Brasil. Em 2013, representou 22,8%25 do PIB (Produto Interno Bruto) do país. O Brasil é grande produtor e exportador de cacau, laranja, cana-de-açúcar, milho, soja, entre outros muitos produtos. Portanto, imagine se o agricultor resolver não trabalhar mais? A economia correria grandes riscos e, certamente o mundo passaria fome. Não é exagero algum dizer que, o agricultor alimenta toda uma população.<br/><br/><b>2 – Agricultura no topo do mundo</b><br/>Os números da agricultura colocam o Brasil no topo do mundo! Como exemplo, temos a soja. Nosso país é o maior produtor do grão no planeta, com produção quase 10%25 maior que a dos Estados Unidos. A área de soja plantada no Brasil é pouco maior que o tamanho do Estado de São Paulo.<br/><br/><b>3- Geram mais empregos</b><br/>Além dos milhões de empregos gerados diretamente pela agricultura, o setor estimula a criação de vagas em diversas outras áreas. Na indústria têxtil, por exemplo, o algodão necessário para a confecção de roupas depende de uma boa safra e do trabalho do agricultor. Tudo começa ou passa pela agricultura!<br/><br/><b>4 – Eles cuidam da nossa terra</b><br/>O profissional de agricultura respeita os recursos naturais com que trabalha. Da água ao solo e, principalmente, tem uma preocupação singular com a qualidade dos alimentos e produtos que entrega e vende.<br/><br/><b>5 – Nos momentos mais difíceis, eles ainda assim estão lá</b><br/>Mesmo na pandemia de Covid-19 os agricultores não pararam e seguem na missão de alimentar, preservar e, acima de tudo, dedicar amor à atividade todos os dias. Agricultura é resultado de muita dedicação e paixão. Os agricultores possuem uma inexplicável conexão com a terra e respeito ao que ela oferece.<br/>É preciso que, as pessoas não apenas olhem para os recordes de produção, mas que entendam a importância do produtor e não abandonem esse setor, porque o Brasil depende do seu sucesso.<br/>O agricultor desempenha um papel fundamental para toda a sociedade. É por meio do seu trabalho que milhares de pessoas têm acesso a alimentos e outros insumos fundamentais para o desenvolvimento de centenas de atividades diferentes. Reforçamos a parceria com os produtores brasileiros, entregando alta produtividade, tecnologia e transformando os desafios em grandes e excelentes oportunidades.<br/>Admiramos o agricultor que acredita e aposta no uso de novas tecnologias. Inovação vem, antes de tudo, de muita pesquisa e desenvolvimento e, temos muito orgulho em fazer parte deste tão importante processo.<br/><br/><i>Parabéns agricultor</i>, seguimos juntos com força para impulsionar a economia do nosso país.",
    "dataDaPostagem": "28/07/2022",
    "horaDaPostagem": "08:00AM"
  }
];







function coutingPagination() {
  const numOfNews = jsonData.length;


  var totalOfPages = numOfNews / 6;
  totalOfPages = Math.trunc(totalOfPages);
  if(numOfNews % 6 > 0) {
    totalOfPages += 1;
  }
  return totalOfPages;
}

function insertingNumOfPagItens() {
  var element = document.getElementById("paginationItens");

  for(let i = 1; i <= coutingPagination(); i++) {
    var newNumber = document.createElement("a");
    newNumber.appendChild(document.createTextNode(i));
    element.appendChild(newNumber);
  }
}

function createPages() {
  const totalOfPages = coutingPagination();
  const paginationArea = document.getElementById("paginationItens");

  for (const elm of paginationArea.getElementsByTagName('a')) {
    elm.addEventListener('click', (ev) => console.log(ev.target.textContent));
  }

  const newJsonArray = [jsonData[0], jsonData[1]];
  printData(newJsonArray);
}


function printData(Arr) {
  const htmlString = Arr.map((post) => {
    return `
    <li class="post">
      <div class="flex_container  left_float">
        <div class="flex_container1 post_img left_float">
          <img id="thisImg"src="../BlogContent/imagensDoBlog/${post.imagem}.png" alt="">
        </div>
        <div class="flex_container1 posRel post_title_and_content header_title left_float" style="margin-left: 5%">
            <ul>
              <li class="post_title" id="post_title_id">${post.titulo}</li>
              <li class="post_date" >${post.dataDaPostagem}</li>
              <li class="post_content" id="postCnt">${post.descricao}</li>
              <li class="read_more">
                <a href="./noticia.html?image='${post.imagem}'&title='${post.titulo}'&descr='${post.descricao}'&postDate='${post.dataDaPostagem}'&postTime='${post.horaDaPostagem}'
                ">Ler mais</a>
              </li>
            </ul>

        </div>
      </div>
    </li>
    `;
  }).join('');

  posts.innerHTML = htmlString;
}


// it is a case insensitive search
function search(ev) {
  var key = ev.target.value;
  posts.innerText = null;

  printData(jsonData.filter((data)=>{
    var regex = new RegExp(key, "i");
    return data.titulo.match(regex);
  }));
}

window.onload = function() {
  posts = document.getElementById("posts");
  printData(jsonData);
  coutingPagination();
  insertingNumOfPagItens();

  new ResizeObserver(resizeObserverCheck).observe(document.getElementById("thisImg"));
  resizeObserverCheck();
}
