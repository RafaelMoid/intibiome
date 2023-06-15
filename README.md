# The Brooklyn Brothers Brasil
## Wordpress Developer - Segunda etapa do processo seletivo!

<a href="#english"> English Version </a>

Olá humano, eu me chamo Rafael e vou te ajudar com a documentação dos processos e funcionamentos do site contido neste repositorio.
Nós vamos passar pelas seções de Tecnologias usadas e a justificativa para suas escolhas, Detalhamento do desenvolvimento dos Elementos, Seções e componentes do projeto e um bonus lá no final se você gostou de me conhecer que quer saber mais sobre mim.


Lembrando que todo esse material vai estar traduzido para a lingua inglesa logo abaixo e no fim teremos um video tutorial de bonus, que até então tem sido um diferencial na entrega de projetos web com CMS usando o WordPress.

### Tecnologias usadas nesse projeto
<ul>
    <li><a href="#sass">SASS</a></li>
    <li><a href="#acf">ACF</a></li>
    <li><a href="#CPTUI">Custom Post Type UI</a></li>
    <li><a href="#npm">NPM</a></li>
</ul>

#### <h1 id="sass">SASS - Syntactically Awesome Style Sheets</h1>
<p>
    O CSS com super poderes.</br>
    Escolhi utilizar o SASS nesse projeto pela facilidade com que ele me permite criar variaveis de estilo, componentiza seções e grupos de estilo com facilidade com @mixins e a facilidade de instalar e converter tudo com uma simples linha de código com o famoso: "npm install -g sass".
    </br></br>
    Você pode verificar todo o código pré processado no diretorio ./assets/sass e o CSS compilado em ./assets/css no arquivo.
    Ao acessar o diretorio do SASS você já vai poder perceber uma coisa, todos os componentes reutilizados e páginas estão separados em páginas e componentes reutilizados, os arquivos com o _ na frente como o _footer.scss será importado no arquivo main.scss que por sua vez será o unico arquivo que sofrera a complicação resultando no arquivo main.css e main.css.map com apenas a seguinte linha de códido: "sass --watch ./assets/sass/main.scss:./assets/css/main.css"
    </br></br>
    Ao acessar o arquivo main.scss você vai poder ver a forma como eu fiz o resete no css para normatizar a página, conseguira encontrar também as estilizações globais do site e a tradução do Design System do XD em variaveis de estilo e mixins para responsividade.
</p>
 </br></br>

#### <h1 id="acf">ACF - Advanced Custom Field</h1>
<p>O ACF é o plugin mais difundido comercialmente para o desenvolvimento de CMS usando WordPress, com ele eu consigo criar diversos campos de adição de conteudo simplificado, onde eu consigo via WordPress criar campos para o usuario inserir informação e coletar essa informação no tema com uso de PHP fazendo todo o trantamento e normatização do código.</p>
 </br></br>

#### <h1 id="CPTUI">Custom Post Type UI</h1>
<p>
    O Custom Post Type UI é o plugin que eu tenho usado nos ultimos projetos para acelerar a criação de custom post types, eu poderia desenvolver esse código via functions.php porém para poder acelerar a entrega optei por usar o plugin, ainda se fará necessario o uso de PHP para iterar sobre os itens e as páginas archive.php e single-produto.php então espero que o uso dessa tecnologia não seja um impeditivo e caso vocês costumem fazer sem o uso do plugin eu posso faze-lo.
    </br></br>
    Caso seja necessario fazer isso via functions.php basta falar comigo que eu te mostro o código, beleza?
</p>
 </br></br>

 #### <h1 id="npm">NPM -  Node Package Manager</h1>
<p>
    É uma biblioteca e registro para pacotes de software JavaScript. O npm também possui ferramentas de linha de comando para ajudá-lo a instalar os diferentes pacotes e gerenciar suas dependências.
    </br></br>
    Nesse projeto em especifico usamos ela para instalar o SASS, porém existem diversas bibliotecas JavaScript por ai para as mais diversas finalidades, sejam icones, processadores CSS como Styled Components ou Animações com a Animate.js
</p>
</br></br>

# <h1 id="english">English version</h1>
Hello human, my name is Rafael and I will help you with the documentation of the processes and functioning of the site contained in this repository.
We're going to go through the Technologies used sections and the rationale for their choices, Element development details, Project sections and components and a bonus at the end if you enjoyed meeting me and want to know more about me.
</br></br>
At the end we will have a bonus video tutorial, which until now has been a differential in the delivery of web projects with CMS using WordPress.

### Tecnologias usadas nesse projeto
<ul>
    <li><a href="#sassEN">SASS</a></li>
    <li><a href="#acfEN">ACF</a></li>
    <li><a href="#CPTUIEN">Custom Post Type UI</a></li>
    <li><a href="#npmEN">NPM</a></li>
</ul>

#### <h1 id="sassEN">SASS - Syntactically Awesome Style Sheets</h1>
<p>
    The superpowered CSS</br>
    I chose to use SASS in this project because of the ease with which it allows me to create style variables, easily componentize sections and style groups with @mixins and the ease of installing and converting everything with a simple line of code with the famous: "npm install -g sass".
    </br></br>
    You can check out all the preprocessed code in the ./assets/sass directory and the compiled CSS in ./assets/css in the file.
    When accessing the SASS directory you will already be able to notice one thing, all the reused components and pages are separated into pages and reused components, the files with the _ in front like _footer.scss will be imported in the main.scss file which in turn this time will be the only file that suffers the complication resulting in the main.css and main.css.map file with only the following line of code: "sass --watch ./assets/sass/main.scss:./assets/css/ main.css"
    </br></br>
    At main.scss file you will be able to see how I reset the css to normalize the page, you will also be able to find the global stylizations of the site and the translation of the XD Design System into style variables and mixins for responsiveness.
</p>
 </br></br>

#### <h1 id="acfEN">ACF - Advanced Custom Field</h1>
<p>At brasilean web market ACF is the most commercially widespread plugin for developing CMS using WordPress, with it I can create several fields for adding simplified content, where I can via WordPress create fields for the user to enter information and collect this information in the theme using PHP doing all the processing and standardization of the code.</p>
 </br></br>

#### <h1 id="CPTUIEN">Custom Post Type UI</h1>
<p>
    The Custom Post Type UI is the plugin that I have been using in the last few projects to speed up the creation of custom post types, I could develop this code via functions.php but in order to speed up the delivery I chose to use the plugin, it will still be necessary to use of PHP to iterate over items and pages archive.php and single-product.php so I hope that the use of this technology is not an impediment and if you usually do without using the plugin I can do it.
    </br></br>
    If you need to do this via functions.php, just talk to me and I'll show you the code, ok?
</p>
 </br></br>

 #### <h1 id="npmEN">NPM -  Node Package Manager</h1>
<p>
    It is a library and registry for JavaScript software packages. npm also has command line tools to help you install the different packages and manage their dependencies.
    </br></br>
    In this specific project we used it to install SASS, but there are several JavaScript libraries out there for the most diverse purposes, whether icons, CSS processors such as Styled Components or Animations with Animate.js
</p>
</br></br>