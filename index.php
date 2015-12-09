<!DOCTYPE html>
<html>
    <head>
        <title>Inneke Van Mechelen</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

        <link href="css/circle.css" rel="stylesheet">
        <link href="css/innekevanmechelen.css" rel="stylesheet" type="text/css"/>

        <script type="text/javascript">
            $(document).ready(function () {

                $("nav ul li a[href^='#']").on('click', function (e) {

                    // prevent default anchor click behavior
                    e.preventDefault();

                    // store hash
                    var hash = this.hash;

                    // animate
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 300, function () {

                        // when done, add hash to url
                        // (default click behaviour)
                        window.location.hash = hash;
                    });

                });

            });
        </script>

    </head>
    <body>

        <nav>
            <ul class="clearfix">
                <li><a href="#wie">Wie</a></li>
                <li><a href="#curriculum">Curriculum</a></li>
                <li><a href="#kennis">Kennis</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>                              
        </nav>

        <header>
            <h1>Inneke Van Mechelen</h1>
            <h2>webdevelopper / duizendpoot</h2>
        </header>

        <section id="wie">

            <h1><span class="ribbon rb-wit"><span class="content">wie</span></span></h1>

            <article class="span1 row">
                <div class="wie col-md-6">                    
                    <blockquote><p>Analytisch, leergierig, duizendpoot.  Kunsthistoricus van opleiding, patroontekenaar/creatief geval in bijberoep, webontwikkelaar in wording.</p></blockquote>
                    <p>Een moeilijke professionele zoektocht in de culturele- en modewereld en een steeds duidelijker wordende neus voor analytische denken overgoten met een portie creativiteit leidde mij naar een opleiding tot webontwikkelaar.
                        Veelzijdigheid en een zoektocht naar groeimogelijkheden zijn de sleutelwoorden voor mijn professionele ambities.  Mijn ontstilbare honger naar kennis en mijn uitgebreide interessewereld hoop ik hierbij te kunnen inzetten.</p>
                </div>
                <div class="foto"></div>
            </article>
        </section>

        <section id="curriculum">
            <h1><span class="ribbon rb-oranje"><span class="content">curriculum</span></span></h1>

            <div class="span1 row">
                <article class="opleidingen cf">
                    <h2 class="hidden-lg hidden-md">Opleidingen</h2>
                    <div class="boek col-md-6"><span class="hidden-sm hidden-xs fa-stack fa-4x"><i class="hidden-sm hidden-xs fa fa-circle fa-stack-2x"></i><i class="hidden-sm hidden-xs  fa fa-book fa-stack-1x"></i></span></div>

                    <div class="col-md-6">
                        <div class="studie row">   
                            <div class="periode col-md-3"><p>2015</p></div>
                            <div class="col-md-9">
                                <h3>VDAB Haasrode</h3>
                                <h4>PHP-Ontwikkelaar</h4>
                            </div>
                        </div> 

                        <div class="studie row">
                            <div class="periode col-md-3"><p>2013 - 2014</p></div>
                            <div class="col-md-9">
                                <h3><a href="#">VDAB Webleren</a></h3>
                                <h4>InDesign</h4> 
                                <h4>Typografie en Lay-out</h4>  
                                <h4>SQL</h4> 
                            </div>                           
                        </div>

                        <div class="studie row">
                            <div class="periode col-md-3"><p>2012</p></div>
                            <div class="col-md-9">
                                <h3>VDAB Anderlecht</h3>
                                <h4>Manuel en CAD-CAM patroontekenen</h4>
                            </div>                         
                        </div>
                    </div>                    
                </article>

                <article class="studies cf">
                    <h2 class="hidden-lg hidden-md">Studies</h2>
                    <div class="hoed pull-right"><span class="hidden-sm hidden-xs fa-stack fa-4x"><i class="hidden-sm hidden-xs fa fa-circle fa-stack-2x"></i><i class="hidden-sm hidden-xs fa fa-graduation-cap fa-stack-1x"></i></span></div>

                    <div class="col-md-6">

                        <div class="studie row">   
                            <div class="periode col-md-3"><p>2010 - 2012</p></div>
                            <div class="col-md-9">
                                <h3>CVO VTI Leuven</h3>
                                <h4>Specifieke Lerarenopleiding</h4>                        
                                <p>Leerkracht secundair onderwijs</p>
                            </div>
                        </div>

                        <div class="studie row">
                            <div class="periode col-md-3"><p>2006 - 2010</p></div>
                            <div class="col-md-9">
                                <h3>Katholieke Universiteit Leuven</h3>
                                <h4>Kunstwetenschappen</h4>
                                <p>Master in de Kunstwetenschappen</p>
                            </div>
                        </div>

                        <div class="studie row">  
                            <div class="periode col-md-3"><p>2004 - 2006</p></div>
                            <div class="col-md-9">
                                <h3>Koninklijke Academie voor Schone Kunsten Antwerpen</h3>
                                <h4>Theatervormgeving</h4>
                            </div>                       
                        </div>


                        <div class="studie row">
                            <div class="periode col-md-3"><p>1997 - 2003</p></div>
                            <div class="col-md-9">
                                <h3><a href="#">Sint-Albertuscollege Haasrode</a></h3>
                                <h4>Latijn-Wiskunde</h4>                        
                                <p>Secundair onderwijs</p>
                            </div>
                        </div>                    
                    </div>
                </article>

                <article class="werken cf">
                    <h2 class="hidden-lg hidden-md">Werkervaring</h2>
                    <div class="koffer col-md-6"><span class="hidden-sm hidden-xs fa-stack fa-4x"><i class="hidden-sm hidden-xs fa fa-circle fa-stack-2x"></i><i class="hidden-sm hidden-xs fa fa-suitcase fa-stack-1x"></i></span></div>
                    <div class="col-md-6">

                        <div class="werk row">
                            <div class="periode col-md-3"><p>2013 - heden</p></div>
                            <div class="col-md-9">
                                <h3><a href="#">Coupe Maison</a></h3>
                                <h4>Freelancer</h4>                        
                                <p>Begeleider creatieve workshops (naaien), fotografie, grafisch ontwerp</p>
                            </div>
                        </div>

                        <div class="werk row">   
                            <div class="periode col-md-3"><p>juli 2013 - juni 2015</p></div>
                            <div class="col-md-9">
                                <h3>KBC Bank</h3>
                                <h4>Administratief bediende</h4>                        
                                <p>Administratief bediende plannen en pensioensparen.  Dagelijkse verwerking van gegevens.  Uitwerken van procedures.</p>
                                <p>Interimcontract</p>
                            </div>                
                        </div>

                        <div class="werk row">    
                            <div class="periode col-md-3"><p>maart 2013 - april 2015</p></div>
                            <div class="col-md-9">
                                <h3>Indicator</h3>
                                <h4>Administratief bediende</h4>                        
                                <p>Verwerken van klantgegevens in ERP-systeem.</p>
                                <p>Interimcontract</p>
                            </div>
                        </div>

                        <div class="werk row"> 
                            <div class="periode col-md-3"><p>maart 2011 - november 2011</p></div>
                            <div class="col-md-9">
                                <h3>Vlaams Ministerie voor Onderwijs</h3>
                                <h4>Godsdienstleerkracht</h4>                        
                                <p>Alle jaren ASO-BSO-TSO</p>
                                <p>Tijdelijke opdrachten in:<br>
                                    VTI Leuven, Maria Assumptalyceum Laken, Zaventems Vrij Onderwijs</p>
                            </div>
                        </div>

                        <div class="werk row">     
                            <div class="periode col-md-3"><p>oktober 2010 - februari 2011</p></div>
                            <div class="col-md-9">
                                <h3>Koninklijke Musea voor Kunst en Geschiedenis</h3>
                                <h4>Gids</h4>
                                <p>Tenstoonstelling "Tussen Hemel en Hel"</p>
                                <p>Freelance</p></div>                        
                        </div>

                        <div class="werk row">
                            <div class="periode col-md-3"><p>september 2010 - februari 2011</p></div>
                            <div class="col-md-9">
                                <h3>Christelijke Mutualiteit</h3>
                                <h4>Administratief bediende</h4>
                                <p>Uitbetalen medische getuigschriften met ERP-systeem.</p>
                                <p>Interimcontract</p>
                            </div>                        
                        </div>
                    </div>
                </article>
            </div>        
        </section>

        <section id="kennis">

            <h1><span class="ribbon rb-grijs"><span class="content">kennis</span></span></h1>

            <article id="informatica">
                <div class="span1 clearfix">
                    <h2>Skills developement</h2>

                    <div class="percent">
                        <div>
                            <div class="c100 p71 grootte">
                                <span>71%</span>
                                <div class="slice">
                                    <div class="bar"></div>
                                    <div class="fill"></div>
                                </div>
                            </div>                        
                        </div>
                        <p>HTML5/CSS3</p>
                    </div>

                    <div class="percent">
                        <div>
                            <div class="c100 p63 grootte">
                                <span>63%</span>
                                <div class="slice">
                                    <div class="bar"></div>
                                    <div class="fill"></div>
                                </div>
                            </div>                        
                        </div>
                        <p>SQL</p>
                    </div>

                    <div class="percent">
                        <div>
                            <div class="c100 p61 grootte">
                                <span>61%</span>
                                <div class="slice">
                                    <div class="bar"></div>
                                    <div class="fill"></div>
                                </div>
                            </div>                        
                        </div>
                        <p>PHP</p>
                    </div>

                    <div class="percent">
                        <div>
                            <div class="c100 p0 grootte">
                                <span>0%</span>
                                <div class="slice">
                                    <div class="bar"></div>
                                    <div class="fill"></div>
                                </div>
                            </div>                        
                        </div>
                        <p>Javascript</p>
                    </div>

                    <div class="percent">
                        <div>
                            <div class="c100 p0 grootte">
                                <span>0%</span>
                                <div class="slice">
                                    <div class="bar"></div>
                                    <div class="fill"></div>
                                </div>
                            </div>                        
                        </div>
                        <p>Knockout</p>
                    </div>

                    <div class="percent">
                        <div>
                            <div class="c100 p0 grootte">
                                <span>0%</span>
                                <div class="slice">
                                    <div class="bar"></div>
                                    <div class="fill"></div>
                                </div>
                            </div>                        
                        </div>
                        <p>jQuery</p>
                    </div>

                    <div class="percent">
                        <div>
                            <div class="c100 p0 grootte">
                                <span>0%</span>
                                <div class="slice">
                                    <div class="bar"></div>
                                    <div class="fill"></div>
                                </div>
                            </div>                        
                        </div>
                        <p>Symfony</p>
                    </div>

                    <div class="percent">
                        <div>
                            <div class="c100 p15 grootte">
                                <span>15%</span>
                                <div class="slice">
                                    <div class="bar"></div>
                                    <div class="fill"></div>
                                </div>
                            </div>                        
                        </div>
                        <p>CMS</p>
                    </div>

                </div>

            </article>

            <article id="grafisch">
                <div class="span1">
                    <h2>Skills grafisch</h2>
                    <div class="center">

                        <div class="percent">
                            <div>
                                <div class="c100 p78 grootte">
                                    <span>78%</span>
                                    <div class="slice">
                                        <div class="bar"></div>
                                        <div class="fill"></div>
                                    </div>
                                </div>                        
                            </div>
                            <div class="skill">
                                <p>Inkscape</p>
                            </div>
                        </div>

                        <div class="percent">
                            <div>
                                <div class="c100 p40 grootte">
                                    <span>40%</span>
                                    <div class="slice">
                                        <div class="bar"></div>
                                        <div class="fill"></div>
                                    </div>
                                </div>                        
                            </div>
                            <div class="skill">
                                <p>Gimp</p>
                            </div>
                        </div>

                        <div class="percent">
                            <div>
                                <div class="c100 p33 grootte">
                                    <span>33%</span>
                                    <div class="slice">
                                        <div class="bar"></div>
                                        <div class="fill"></div>
                                    </div>
                                </div>                        
                            </div>
                            <div class="skill">
                                <p>Scribus</p>
                            </div>
                        </div>

                        <div class="percent">
                            <div>
                                <div class="c100 p48 grootte">
                                    <span>48%</span>
                                    <div class="slice">
                                        <div class="bar"></div>
                                        <div class="fill"></div>
                                    </div>
                                </div>                        
                            </div>
                            <div class="skill">
                                <p>Illustrator</p>
                            </div>
                        </div>

                        <div class="percent">
                            <div>
                                <div class="c100 p42 grootte">
                                    <span>42%</span>
                                    <div class="slice">
                                        <div class="bar"></div>
                                        <div class="fill"></div>
                                    </div>
                                </div>                        
                            </div>
                            <div class="skill">
                                <p>Photoshop</p>
                            </div>
                        </div>

                        <div class="percent">
                            <div>
                                <div class="c100 p40 grootte">
                                    <span>40%</span>
                                    <div class="slice">
                                        <div class="bar"></div>
                                        <div class="fill"></div>
                                    </div>
                                </div>                        
                            </div>
                            <div class="skill">
                                <p>InDesign</p>
                            </div>
                        </div>

                        <div class="percent">
                            <div>
                                <div class="c100 p71 grootte">
                                    <span>71%</span>
                                    <div class="slice">
                                        <div class="bar"></div>
                                        <div class="fill"></div>
                                    </div>
                                </div>                        
                            </div>
                            <div class="skill">
                                <p>Lightroom</p>
                            </div>
                        </div>


                    </div>
                </div>
            </article>

            <article id="talen">
                <div class="span1">
                    <h2>Talen</h2>
                    <div>
                        <span class="taal">Nederlands:</span>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                    </div>
                    <div>
                        <span class="taal">Frans:</span>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle-thin"></i>
                        <i class="fa fa-circle-thin"></i>
                    </div>
                    <div>
                        <span class="taal">Engels:</span>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle-thin"></i>
                        <i class="fa fa-circle-thin"></i>
                    </div>
                    <div>
                        <span class="taal">Duits:</span>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle"></i>
                        <i class="fa fa-circle-thin"></i>
                        <i class="fa fa-circle-thin"></i>
                        <i class="fa fa-circle-thin"></i>
                        <i class="fa fa-circle-thin"></i>
                    </div>
                </div>
            </article>

        </section>

        <section id="portfolio">

            <h1><span class="ribbon rb-oranje"><span class="content">portfolio</span></span></h1>

            <div class="span1 portfolio">
                <a href="webontwikkelaar/webontwikkelaar.html"><div class="link webontwikkelaar"></div></a>
                <div class="center"><p>Oefening HTML/CSS</p></div>
            </div>

        </section>

        <footer id="contact">

            <h1><span class="ribbon rb-grijs"><span class="content">contact</span></span></h1>

            <form class="form-horizontal" role="form" method="post" action="mailform.php">
                <div class="form-group">
                    <label class="control-label col-sm-offset-1 col-sm-2">Naam:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="naam" required placeholder="Jouw naam">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-offset-1 col-sm-2">E-mail:</label>
                    <div class="col-sm-6">
                        <input type="email"  class="form-control" name="email" required placeholder="Jouw e-mailadres">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-offset-1 col-sm-2">Bericht:</label>
                    <div class="col-sm-6">
                        <textarea name="bericht" class="form-control" required placeholder="Jouw bericht"></textarea>
                    </div>
                </div>
                <div class="form-group">        
                    <div class="col-sm-offset-1 col-sm-10">
                        <button type="submit" name="submit" class="btn btn-default">Verzenden</button>
                    </div>
                </div>
            </form>

            <div class="logos">
                <a href="https://www.linkedin.com/in/inneke-van-mechelen-51142b53"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x"></i></span></a>
                <a href="https://github.com/InnekeVM/"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-github-alt fa-stack-1x"></i></span></a>
            </div>

        </footer>

    </body>
</html>
