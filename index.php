<!-- A FAIRE

1. Optimisation du code.
2. Creation du theme Dark & Light.
3. insersion de bouton pour modif theme.

-->

<?php   include 'include/header.html';  ?>

  <section>    
    <article id="home">
      <div class="row">
        <div class="col">
          <aside>
            <h1>Hello,</h1>
            <h1>Je suis Eléazar-Dan,</h1>
            <h1>Développeur web</h1>
            <p style="margin-left: 8em;">Full Stack / en Formation</p>
          </aside>
          </div>
        </div>
      </article>
    </section>

    <section>
      <article id="portfolio">
        <div class="row" >
          <div class="col col-3">
            <aside>
              <h2>Mon Portfolio</h2>
             <p>Une petite galerie de projets récents choisis par mes soins.<br> Ils ont tous été realisé par mes soins.</p>
            </aside>
          </div>
          <div class="col col-9">
            <div class="display">
              <div class="tablet">
                <div class="trim">
                  <iframe title="tablet" id="tablet" src="http://gat-orane/">
                  </iframe>
                </div>
              </div>
              <div class="desktop">
                <div class="trim">
                  <iframe title="desktop" id="desktop" src="http://gat-orane/">
                  </iframe>
                </div>
              </div>
              <div class="mobile">
                <div class="trim">
                  <iframe title="mobile" id="mobile" src="http://gat-orane/">
                  </iframe>
                </div>
              </div>
            </div>
          </div>
        </div>  
        <div class="row">
          <div class="col">
            <div class="menu-site">
              <ul><button type="button" class="btn btn-outline-primary"> Site _ </button></ul>
              <ul><button type="button" class="btn btn-outline-primary"> Site _ </button></ul>
              <ul><button type="button" class="btn btn-outline-primary"> Site _ </button></ul>
              <ul><button type="button" class="btn btn-outline-primary"> Site _ </button></ul>
              <ul><button type="button" class="btn btn-outline-primary"> Site _ </button></ul>
            </div>
          </div>
        </div>        
      </article>
    </section>

    <section>    
      <article id="myself">
        <div class="row">
          <div class="col">
            <aside>
              <h2>Moi ...</h2>
              <p>Depuis toujours, je suis passionné par le Web.<br>
               Pendant plus d'une décennie, j'ai eu de nombreuses occasions de travailler dans un vaste éventail de technologies Web, ce qui m'a permis d'accumuler une quantité importante d'expériences diverses.<br> 
               Travaillant pour des entreprises et des particuliers du monde entier, j'ai rencontré et appris de personnes incroyables et ambitieuses.<br>
               Je travaille actuellement à distance avec une clientèle indépendante sélectionnée, ouverte à de nouvelles opportunités.</p>
            </aside>
          </div>
        </div>
      </article>
    </section>

      <section>    
        <article id="contact">
          <div class="row">
            <div class="col">
              <aside class="row">
                <h2>Me contacter</h2>
                <div class="col-5">
                 <p>Je suis intéressé par les opportunités de freelance.<br> 
                  Cependant, si vous avez d'autres demandes ou questions,<br>
                  n'hésitez pas à utiliser le formulaire.</p>
                </div>
                <div class="col-2"></div>
                <div class="col-5">
                <div class="e-loadholder">
                  <div class="m-loader">
                  <span class="e-text">Loading</span>
                  </div>
                  </div>
                  <div id="particleCanvas-Blue"></div>
                  <div id="particleCanvas-White"></div>
                </div>
              </aside>
              </div>
            </div>
          </article>
        </section>

        <?php   include 'include/footer.html';  ?>