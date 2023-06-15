# The Brooklyn Brothers Brasil
## Wordpress Developer - Segunda etapa do processo seletivo!

<a href="#detalhamento-de-processos"> English Version </a>

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
<p>
    O Duplicator foi o plugin de transferencia demandado no desafio apesar de eu preferir o All in One Wp migration usarei este por questão de demanda e como disse acima
    estou aberto a me adaptar a cultura dos times de desenvolvimento sem resistencia.
</p>
 </br></br>

 #### <h1 id="npm">NPM -  Node Package Manager</h1>
<p>
    É uma biblioteca e registro para pacotes de software JavaScript. O npm também possui ferramentas de linha de comando para ajudá-lo a instalar os diferentes pacotes e gerenciar suas dependências.
    </br></br>
    Nesse projeto em especifico usamos ela para instalar o SASS, porém existem diversas bibliotecas JavaScript por ai para as mais diversas finalidades, sejam icones, processadores CSS como Styled Components ou Animações com a Animate.js
</p>
</br></br>