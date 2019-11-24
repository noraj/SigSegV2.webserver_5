<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="css/bulmaswatch_yeti.min.css">
  </head>
  <body>
    <nav class="navbar is-dark">
      <div class="navbar-brand">
        <a class="navbar-item" href="#">
        </a>
        <a class="navbar-item is-hidden-desktop" href="#" target="_blank">
          <span class="icon" style="color: #333;">
            <i class="fa fa-github"></i>
          </span>
        </a>
        <a class="navbar-item is-hidden-desktop" href="#" target="_blank">
          <span class="icon" style="color: #55acee;">
            <i class="fa fa-twitter"></i>
          </span>
        </a>
        <div class="navbar-burger burger" data-target="navMenuExample11">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div id="navMenuExample11" class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item " href="#">
            Home
          </a>
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link  is-active" href="#">
              Docs
            </a>
            <div class="navbar-dropdown ">
              <a class="navbar-item " href="#">
                Overview
              </a>
              <a class="navbar-item " href="#">
                Modifiers
              </a>
              <a class="navbar-item " href="#">
                Grid
              </a>
              <a class="navbar-item " href="#">
                Form
              </a>
              <a class="navbar-item " href="#">
                Elements
              </a>
              <a class="navbar-item is-active" href="#">
                Components
              </a>
              <a class="navbar-item " href="#">
                Layout
              </a>
              <hr class="navbar-divider">
              <div class="navbar-item">
                <div>version
                  <p class="has-text-info is-size-6-desktop">0.4.3</p>
                </div>
              </div>
            </div>
          </div>
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link " href="#blog/">
              Blog
            </a>
            <div id="blogDropdown" class="navbar-dropdown " data-style="width: 18rem;">
              <a class="navbar-item" href="/2017/03/10/new-field-element/">
                <div class="navbar-content">
                  <p>
                    <small class="has-text-info">10 Mar 2017</small>
                  </p>
                  <p>New field element (for better controls)</p>
                </div>
              </a>
              <a class="navbar-item" href="/2016/04/11/metro-ui-css-grid-with-bulma-tiles/">
                <div class="navbar-content">
                  <p>
                    <small class="has-text-info">11 Apr 2016</small>
                  </p>
                  <p>Metro UI CSS grid with Bulma tiles</p>
                </div>
              </a>
              <a class="navbar-item" href="/2016/02/09/blog-launched-new-responsive-columns-new-helpers/">
                <div class="navbar-content">
                  <p>
                    <small class="has-text-info">09 Feb 2016</small>
                  </p>
                  <p>Blog launched, new responsive columns, new helpers</p>
                </div>
              </a>
              <a class="navbar-item" href="#blog/">
                More posts
              </a>
              <hr class="navbar-divider">
              <div class="navbar-item">
                <div class="navbar-content">
                  <div class="level is-mobile">
                    <div class="level-left">
                      <div class="level-item">
                        <strong>Stay up to date!</strong>
                      </div>
                    </div>
                    <div class="level-right">
                      <div class="level-item">
                        <a class="button is-rss is-small" href="#atom.xml">
                          <span class="icon is-small">
                            <i class="fa fa-rss"></i>
                          </span>
                          <span>Subscribe</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="navbar-item has-dropdown is-hoverable">
            <div class="navbar-link">
              More
            </div>
            <div id="moreDropdown" class="navbar-dropdown ">
              <a class="navbar-item " href="#extensions/">
                <div class="level is-mobile">
                  <div class="level-left">
                    <div class="level-item">
                      <p>
                        <strong>Extensions</strong>
                        <br>
                        <small>Side projects to enhance Bulma</small>
                      </p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="navbar-end">
          <a class="navbar-item" href="#" target="_blank">
            Github
          </a>
          <a class="navbar-item" href="#" target="_blank">
            Twitter
          </a>
          <div class="navbar-item">
            <div class="field is-grouped">
              <p class="control">
                <a id="twitter" class="button">
                  <span>Tweet</span>
                </a>
              </p>
              <p class="control">
                <a class="button is-primary" href="#">
                  <span class="icon">
                    <i class="fa fa-download"></i>
                  </span>
                  <span>Download</span>
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <section class="section">
      <div class="container">
        <h1 class="title">Campaign funding goal</h1>
        <progress class="progress is-primary is-large" value="60" max="100">900 000$</progress>
        <h1 class="title">Money due</h1>
        <progress class="progress is-large is-dark" max="100">60%</progress>
        <div class="box">
          <article class="media">
            <div class="media-left">
              <figure class="image is-64x64"> <img alt="Image" src="img/128.jpg">
              </figure>
            </div>
            <div class="media-content">
              <div class="content">
                <p> <strong> John Smith </strong> <small> @johnsmith </small> <small> 31m </small>
                  <br>Give me my money back or I write a backdoor on vim to infect your website.
                </p>
              </div>
              <nav class="level">
                <div class="level-left">
                  <a class="level-item">
                    <span class="icon is-small"> <i class="fa fa-reply"> </i> </span>
                  </a>
                  <a class="level-item">
                    <span class="icon is-small"> <i class="fa fa-retweet"> </i> </span>
                  </a>
                  <a class="level-item">
                    <span class="icon is-small"> <i class="fa fa-heart"> </i> </span>
                  </a>
                </div>
              </nav>
            </div>
          </article>
        </div>
      </div>
    </section>
  </body>
</html>