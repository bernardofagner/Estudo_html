IDE - Dream Weaver (Pago)

***AULA 1 - INTRODUÇÃO***

HTML é uma linguagem de marcação de texto que é interpretada pelo navegador.

Associado ao HTML, utilizamos o CSS, que é uma tecnologia
de personalização visual das páginas HTML.

As páginas HTML são renderizadas no brouser e são criadas em qualquer
editor de texto comum.

Para a renderização da página ser possível, basta salvar o arquivo com a extensão
.html (pagina.html).

Existem editores exclusivos para HTML como: htmlkit e coffecup

================================================================================
***AULA 2 e 3 - ESTRUTURA BÁSICA***

(X)HTML - eXtensible HiperText MarkupLanguage

Demonstração da estrutura básica de um projeto em HTML

Toda informação entre os sinais de maior e menor são chamados de TAG's, as TAGs
só podem ser declaradas com letras minúscilas. Toda TAG aberta deve ser fechada.

A sintaxe é a seguinte: <h> </h>
A TAG também pode ser fechada dentro da TAG de abertura: <a />. Neste segundo caso,
deve-se deixar um espaço em branco separando a letra "a" da barra"/".

É boa prática identar as TAGs mais internas de uma TAG mais externa

A TAG "head" guarda todas as informações que devem ser fornecidas ao navegador
A TAG "title" é obrigatória na área da TAG "head"

================================================================================
***AULA 4 e 5 - CABEÇALHOS E PARÁGRAFOS***

o conteúdo da TAG "title" será o nome da página no navegador, deve ser claro
e/ou intuitivo como: Página Principal, por exemplo. Evitar caracteres especiais.

O brouse interpreta as TAGs h1..h6 de uma forma diferente, pois tratam-se de TAG's
que representam títulos e subtítulos, ou seja, é uma marcação semântica e que
usa os elementos da linguagem em conformidade como  significado de seus
elementos e que nos auxiliará o tempo todo.

A TAG <br /> pode ser utilizada entre trechos de texto para forçar a quebra de
linha do mesmo.

As TAG's podem ter atributos, o atributo da TAG vai dentro da TAG de abertura.
<h1 align="center"> Texto </h1>. Neste exemplo, a TAG h1 tem o atributo align que
indica que o conteúdo dao TAG deve ser centralizado na página.

================================================================================
***AULA 6 e 7 - ELEMENTOS INLINE***

São elementos de marcação que não formam bloco separado de conteúdo, a formatação ocorre
no meio do texto.

================================================================================
***AULA 8 - CORES***

As cores podem ser representadas no padrão Red Green Blue (RGB) de três formas.

* DECIMAL: 234, 321, 255 (O valor máximo para esse padrão é 255)

* HEXADECIMAL: FFAA98 (O valor máxio para este padrão é FFFFFF)
as duas primeiras letras representam tons de Red, as duas segundas letras
representam o padrão Green e as ultimas duas letras representam o padrão Blue

* NOMES: blue, white, darkblue;

O padrão da Web é representar as cores no padrão HEXADECIMAL

================================================================================
***AULA 9, 10 E 11 - IMAGENS***

Adiciona imagens ao texto. Imagens são elementos inline, o valor do atributo <src>
deve receber como valor o endereço do diretório onde a magens e encontra. o endereço
relativo do diretório da imagem pode ser informado a partir do diretório onde o arquivo
.html está localizado. Se o arquivo html etiver na pasta "Projeto" e aimagem também, basta passar como valor para o atributo <src> o nome da imagm. Se a imagem estiver salva
em uma pasta chamada "img" dentro da pasta "Projetos", deve-se passar o valor:
"img/nomedafoto.extensao".

Para retornar ´diretórios a partir do diretorio do arquivo .html, basta adicionar
<../> para cada nível que se quer retornar até encontrar o diretorio da foto, exemplo:
Diretorio atual: C:user/Zahara/Downloads
"../nomedafoto.extensao" (retornou até o diretorio C:user/Zahara e achou a foto)

O atributo <alt> deve ser utilizado para rotular a imagem, caso o brouser não consiga
renderizar a imagem ele ainda irá exibir o nome da foto conforme o valor que o atributo
<alt> recebeu.

O padrão da internet recomenda a criação de um diretório dedicado ao armazenamento das
imagens, separando-as dos arquivos fonte do projeto

Pesquisar todos os atributos da TAG <img>!

O formato .jpg geralmente é muito complexo, dessa forma o arquivo de imagem pode ficar
muito grande (tipo 790kb, 3,2MB), o que pode diminuir o desempenho da página, pois o
carregamento da imagem na página torna-se mais lento.

O ideal é abrir a imagem em um editor de imagens (tipo Photoshop, Gimp, Picasa) e
reduzir a resolução da imagem (de 1280px para 300px, por exemplo).

Se a imagem for editda e ter sua extensão alterada para.gif é possivel remover o
plano de fundo da mesma.

================================================================================
***AULA 12 e 13 - LISTAS***

Listas são recursos que auxiliam na listagem, enumeração, e organização de itens.
Pode ser usada para a criação de layout de menus também.

* LISTA NÃO ORDENADA
a tag <ul> conteudo </ul> representa a definição de uma lista desordenada e o termo
<li> item 01 </li> representa um item da lista e vai dentro do escopo da <ul> </ul>,
exemplo:
<ul>
	<li> Item 01 </li>
	<li> Item 02 </li>
</ul>

* LISTA ORDENADA
a tag <ol> conteudo </ol> representa a definição de uma lista ordenada e o termo
<li> item 01 </li> representa um item da lista e vai dentro do escopo da <ol> </ol>,
exemplo:
<ol>
	<li> Item 01 </li>
	<li> Item 02 </li>
</ol>

* LISTA DE DEFINIÇÃO
São listas que são usadas para definir/descrever alguma informação, como em um dicionário
a tag <dl> conteudo </dl> representa a definição de uma lista de definição e o termo
<dt> item 01 </dt> representa um item da lista e vai que vai receber uma definição, e
o termo <dd> O item 1 é... </dd> representa a definição em si.
exemplo:
<dl>
	<dt> item 1 </dt>
		<dd> O item 1 é isso... </dd>
		<dd> O item 1 tambem é aquilo... </dd>
	<dt> item 2 </dt>
			<dd> O item 2 é isso... </dd>
			<dd> O item 2 tambem é aquilo... </dd>
</dl>

================================================================================
***AULA 14 - ELEMENTOS EM BLOCO***

Os elementos em blocos são sempre exibidos como se sempre estivesse uma quebra de
linha antes e depois da TAG.

Enquanto o selementos inline aparecem em linha, dentro do fluxo de texto da linha na
página.

================================================================================
***AULA 15, 16, 17 e 18 - LINKS***

Links são âncoras para outros locais, podem ser outras páginas ou outros locais dentro
de uma mesma página.

A TAG <a /> representa o estabelecimento de um link. Os links são elementos inline.

Ela possui o atributo 'href=' que vai fazer a ligação com o endereço fornecido.
Ex: <a href="https://www.google.com.br">

* LINKS EXTERNOS
Este tipo de link é usado para referências externas ao documento.html
A TAG <a /> precisa de parâmetros obrigatórios.

Ela possui o atributo 'href=' que vai fazer a ligação com o endereço fornecido. Ex:
<a href="https://www.google.com.br">

A TAG possui um atributo 'target=' que quando utilizado passando o valor "_blank"
faz com que a página linkada seja aberta em outra aba ou janela. Ex:
<a href="https://www.google.com.br" target="_blank">

* IMAGENS COMO LINKS

O atributo 'href' recebe o endereço da página que será acessada
quando o usuário clicar na imagem que representa o link, e em vez de se ter
um texto associado ao link, teremos uma imagem associada a ele.

O atributo 'title=' pode ser usado para exibir informações sobre o link quando o
mouse for posicionado sobre a imagem  que representa o link.

a TAG que inclui a imagem no documento vai no corpo da TAG:
<a href="endereço web">
	TAG <img> aqui
</a>

Ex:
<a href="https://www.google.com.br" target="_blank" title="Link para Google">
    <img src="img/google01.jpg" style="width: 100px;" alt="Google Chrome" >
</a>

* LINKS INTERNOS
Este tipo de link é usado para referências internas ao documento.html, ou seja,
fazer referencias a outras páginas do próprio site. A TAG <a></a> precisa de
parâmetros obrigatórios. É muito utilizado para a criação de menus de navegação
dentro do site!

É necessário identificar as TAG's que serão referenciadas por meio do atributo
'id=>' para que o link possa encontrar a posição correta a ser exibidado dentro
texto .

Seja o título <h1> Titulo da Pagina </h1>:

Usamos a TAG <a> para criar uma referencia a este subtítulo da seguinte forma:
Ex:
<a id="topo"> <h1> Titulo da Pagina </h1> </a> no ponto do texto onde o subtitulo esta
alocado. Agora basta criar o link que irá ser vinculado com esta referência criada.
<a href="#topo"> Clique aqui</a>

Ou podemos inserir o id="topo" na própria TAG h1:

Ex:
<h1 id="topo" align="center"> Lorem Ypsun2 </h1>
e criar o link que irá ser vinculado com esta referência criada.
<a href="#topo"> Clique aqui</a>

Se quisermos acessar um ponto específico em uma outra página por meio de um link basta
adicionar uma âncora no elemento da página que se quer visitar via link, dando a ele
um id e adicionar o ponto da página a ser acessado na criação do link, Ex:
<a href="paginaLinkada.html#pesquisa"> </a> </li>
O link acima acessa o documento "paginaLinkada.html" no ponto específico "pesquisa".

================================================================================
***AULA 19 - MAPEAMENTO DE IMAGENS (LINKS)***

Mapear imagens se trata de inserir links em partes específicas de uma imagen.
 para isso deve-se usar a TAG <map> </map>. Ela possui um atributo 'name' que
 indicar que aquele mapeamento está relacionado a uma imagem. Ex:
 <map name="nome_do_map1"> </map>. A imagem alvo também deve ter o atributo
 'usemap="#nome_do_map1"' para indicar que ela está sendo mapeada, não se esqueça
 de usar o símbolo '#' antes do nome do mapeamento.

 Exemplo de mapeamento:

<img src="img/formas.gif" usemap="#formas" alt="Formas Geometricas" />
<map name="formas">
  <area shape="rect" coords="214,104,424,318" href="paginaLinkada.html" alt="Formas Geometricas" />
  <area shape="circle" coords="107,192, 54" href="paginaLinkada.html" alt="Formas Geometricas" />
  <area shape="poly" coords="103,344,42,450,165,450" href="http://www.youtube.com" alt="Forma Triangular" />
</map>

O atributo 'shape' define a forma do link, neste caso retangular
O atributo 'coords' delimita a área em que o link permanece ativo,
o valor 214,104 é a coordenada do canto superior esquerdo da imagem
enquanto a coordenada 424,318 é a coordenada do canto inferior direito dela
O atributo 'href' indica qual o caminho do redirecionamento ao clicar no link
O atributo 'alt' informa um nome alternativo para o elemento <img> caso a imagem
não possa ser renderizada no brouser
O atributo 'shape' deve receber valores de cordenadas diferentes conforme a forma
que o link assumirá! A forma circle, deve receber 3 valores apenas (centroH,cetroV,raio)
sendo H-horizontal e V-vertical
O valor 'poly' pode ser informado quando a area do link possuir uma forma mais complexa que
quadrada ou circular, como um triângulo. Basta informar as coordenadas dos três lados do
mesmo

================================================================================
***AULA 20 - MAPEAMENTO DE IMAGENS (LINKS)***

Divs são elementos em blocos  e spans são elementos inline.
Ambos são elementos genéricos, não foram criados para atender a marcação semântica
como <h1>, <p> e assim por diante.
Quando temos uma estrutura onde não se tem nenhuma TAG específica para marcar
semanticamente aquela estrutura. Podemos usar as divs e spans para marcar este
grupo de conteúdo.

Divs são containers genéricos de elementos, usados para montar as sessões lógicas
e organizar o layout das páginas. COm excessão das divs, nenhum elemento em
bloco deve conter outro elemento em bloco.

Os spans servem para definir um layout específico para um texto. O span é um
container genérico em linha.

================================================================================
***AULA 21 - TABELAS***

* Exemplos no arquivo "tabelas.html"

São estruturas com dados tabulares. São por excelência o identificador e diferencial
entre a antiga marcação HTML e a nova forma de marcação dos web sites.

As tabelas eram usadas para fazer layout, mas isso não é o ideal.

Tabelas devem ser usadas para apresentar dados tabulares, informações de medidas,
lista de preço, treinamentos, informações que ficam melhor apresentadas em forma tabular.

A tabela é construida com a TAG <table> "Conteudo da tabela" </table>,
cada linha da tabela é construida com a TAG "table row" = <tr> "conteúdo da linha" </tr>
Dentro de cada limha construimos as colunas da tabela, ou seja, cada coluna da tabela
é criada com a TAG "table data" = <td> </td>.

As tabelas possuem atributos, o atributo 'border' define uma borda para a tabela e recebe
como valor um numero inteiro que representa a expessura das bordas em pixels.

O atributo 'cellpadding' indica a distância (em pixels) entre o conteúdo e a borda da celula
da tabela, e também recebe um valor inteiro como parâmetro.

O atributo 'cellspacing' indica a distância (em pixels) de uma célula para outra na tabela,
e também recebe m valor inteiro como parâmetro. Por padrão p cellspacing tradicional tem
valor = 1.

A TAG <td> </td> possui atributos de formatação como o 'align="valor"' Mas o ideal é deixar
a personalizaçã destes elementos para o CSS.

As celulas das tabelas podem ser esticadas na vertica ou na horizontal.

O atributo 'colspan' é o atributo que estica a coluna na horizonta. Ele recebe um valor
inteiro que representa a quantidade de colunas que a célula ocupará após ser esticada.


================================================================================
***AULA 22, 23, 24, 25 e 26 - FORMULÁRIOS***

* Exemplos no arquivo "formularios.html"

Formulários são utilizados para fornnecer interação com usuários. São páginas web que
possibilitam uma interação do sistema com o internauta. Ele possui campos de entrada que
permitem aos usuários fornecerem informações ao sistema.

Para instanciarmos um formulários usamos a TAG <form></form> ela será o container de
controle do formulário. Ela possui dois atributos muito importantes, são:
'action' que informa o local para onde os dados devem ser enviados para serem processados
por uma linguagem no servidor, criando assim scripts dinâmicos para processar estas informações
como Java, c# e outros.

O segundo atributo pe chamado 'method' que indica qual é o método de envio das informações:
post: envia as informações de modo que ninguém vê que as informações estão sendo enviadas
get: encaminha as informações pela URL da página, a página coloca todos os dados do formulário na URL.

Cada campo do formulário tem controles

a TAG <input> define alguns tipos de controle  serem renderizados. Como o atributo 'text' que é
utilizado para informar uma linha de texto simples no formulário. Enquanto o atributo 'text' nos
apresenta o texto que está sendo digitado, o atributo 'password' não revela o que está sendo escrito.
O atributo 'radio' exibe um botão na tela que será utilizado como opção que o usuário irá escolher,
somente poderá escolher uma dente diversas opções. O atributo 'name' determina o grupo do dado que
está sendo recebido e o atributo 'value' recebe um caractere que representa a identificação da escolha
do usuário quando o botão 'radio' for acessado. Caso o conteúdo do atributo 'value' não seja informado'
ele será automaticamente definido usando o conteúdo da TAG como "valor" do atributo e será esta a
informacao de referencia a aquela opção que será enviado.

O atributo 'checkbox' exibe uma caixa que pode ser marcada pelo usuário, assim como o atributo 'radio'
a diferença é que no checkbox, é possível marcar mais de uma opção.

A TAG  <select></select> é usado para se ter uma lista de opções pre-definidas no formulário
O documento: formularios.html possui exemplos de uso de formulário. a TAG <option> </option>
vai no corpo da TAG <select></select> e representa as opções que estarão disponíveis na lista
de seleção.

Uma outra opção de <select></select> são selects agrupados. Para agrupar seletores usamos a TAG
<optgroup></optgroup> que delimita cada grupo de itens a serem selecionados e vai no corpo da TAG
<select></select>. No corpo da TAG <optgroup></optgroup> vao as opções apresentadas graças a TAG
<option> </option>.

A TAG <textarea></textarea> permite que o usuário insira um texto no formulário. No corpo desta TAG
pode-se colocar uma frase para identificar o conteúdo da caixa de texto criada. o atributo 'cols' pode
ser usado para aumentar a largura da caixa de texto e recebe como valor a quantidade de colunas de
caracteres que a caixa de texto suportar=a antes de inserir uma quebra de linha no texto. O atributo
'rows' possui a mesma função do anterior mas aplicado às linhas da caixa de texto.


o atributo 'label' é utilizado para dar rotular as TAGs que não possuem uma identificação implícita, como
a TAG <input> cujo rótulo é o valor do atributo 'value'.

Podemos usar a TAG para associar um nome a uma TAG explicitamente por meio do atributo 'for' da TAG <label>
passando como valor para este atributo o "id" da TAG a ser associada. Visualmente esta associação não tem
implicação no formulário, mas ela possibilita maior acessibilidade aos navegadores.

A TAG <fieldtset></fieldset> tem por objetivo estruturar os formulários, ele se destina a agrupar um conjunto
de TAGs que tem finalidades relacionadas. O corpo desta TAG recebe as TAGs que devem ser relacionadas.
A TAG <legend></legend> vai no inicio do corpo do <fieldtset></fieldset> e é utilizada para identificar
aquele grupo de controladores (TAGs).

É possivel navegar pelos campos do formulário utilizando a tecla TAAB, isso é o que se chama de acessibilidade.
Podemos alterar a ordem de navegação pelo formulário alterando a sequencia de navegação através da tecla TAAB.
Pra isso devemos utilizar o atributo 'tabindex' que recebe como valor um número inteiro que representa sua
posição squencial na ordem de navegação através da tecla TAAB. este atributo pertence às TAGs do formulario.

O atributo 'accesskey' é utilizado para vincular uma tecla do teclado a um campo do formulário' e recebe como valor
uma letra em minusculo.

O atributo 'disabled' retira o controle do usuário em algum campo do formulário. Ele recebe como valor a palavra
"disabled". Mas caso o controle possua algum valor, este valor não será envaiado como um dado do formulário.

O atributo 'readonly' retira o controle do usuário em algum campo do formulário. Ele recebe como valor a palavra
"readonly". Mas caso o controle possua algum valor, este valor será envaiado como um dado do formulário.

O atributo 'type' da TAG <input> pode recebero valor "hiden" para enviar uma informação no campo do atributo
'value' escondida, ou seja, sem que a mesma seja apresentada no formulário.

================================================================================
***AULA 27 - CARACTERES ESPECIAIS E ENCODING***

Existe um tipo de codificação para cada idioma, mas na internet em geral, o padrão a ser adotado é o UTF-8. Para utilizarmos este padrão nos nossos projetos, basta inserirmos uma instrução especial dentro da TAG <head></head> que é a seguinte:
<meta charset="utf-8">. Fica assim:

<head>
	<meta charset="utf-8">
</head>

O resto da aula foi sobre acentos e caracteres especiais.

================================================================================
***AULA 28 - W3C VERSÕES***

Veremos detalhes que transformam XHTML em HTML.

Estudaremos Doctipes, novas extensões para os arquivos, validações e certificações.

Versões de HTML: O site W3C.org define os padrões de codificação para a web e o site w3schools.com também possui informações extremanente importantes sobre programação web. A W3C sugere diversos padrões para a Web e possui muita conceituação nesta área. Utilizar o padrão de codificação W3C torna seus códicos em códigos de respeito.

HTML e CSS são o conhecimento mais básico sobre programação web, a partir desta introdução pode-se aprimorar ainda mais os conhecimentos sobre desenvolvimento web por meio de Javascript, Ruby e outras linguagens.

Na w3 Schools pode-se encontrar muito material sobre tecnoligias de programação web. O HTML 5 possui diversas vantagens, pode-se construir sistemas muito eficientes com este estilo de HTML, mas nem todos os browsers possuem suporte a este tipo de HTML. O XHTML é o HTML indicado pela W3Schools porque todos os brousers o suportam. O XHTML é uma extensão do HTML comum.

================================================================================
***AULA 29, 30 e 31 - DOCTYPES***

Doctypes, Document Types Definitions, (DTD's) é o cunjunto de definições para o tipo de documento que está sendo construido. 
A TAG <!DOCTYPE> é a primeira TAG de um arquivo XHTML ou HTML5.
Existem 3 tipos de Doctypes:
STRICT: Utilizado por codificadores profissionais, deve-se seguir as convenções de programação atuais, não se tolera uso de TAGs que cairam em desuso.

TRANSITIONAL: Doctype mais maleável, permite utilização de TAGs obsoletas.

FRAMESET: Não recomendada pois permite a utilização de frames de páginas, o que pode diminuir a acessibilidade ao seu portal.

Pesquise a declaração de cada uma delas no W3 Schools.

