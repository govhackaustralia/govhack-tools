Below is a whole bunch of information to help you prepare hackfest entries. These tools can be used to make entries like: mobile apps, web apps, data visualisations/inforgraphics

govhack library

- http://hpneo.github.com/gmaps/examples.html 
- android datviz
  - http://code.google.com/p/afreechart/ http://code.google.com/p/snowdon/ http://code.google.com/p/chartdroid/ http://androidplot.com/ http://code.google.com/p/achartengine/
- https://graphics.stanford.edu/wikis/cs448b-12-fall/ data viz theory
- https://mixpanel.com/education/understanding-the-first-five-minutes
- http://drawingbynumbers.org/toolsandresources
- http://wmbriggs.com/blog/?p=6465
- http://ofps.oreilly.com/titles/9781449339739/k_00000002.html list of d3 alternatives
- http://craigkerstiens.com/2012/10/01/understanding-postgres-performance/
- https://github.com/clips/pattern for easy NLP/network analysis/data mining
- https://github.com/theodi/open-data-tech-review/wiki othr cleanup/linked data toola
- http://www.opentripplanner.org/apidoc/rest.plan.html 
- http://selection.datavisualization.ch/ data viz tools catalog
- http://www.slideshare.net/OReillyStrata/visualizing-networks-beyond-the-hairball
- http://blog.sciencenet.cn/blog-554179-622011.html SNA tools catalog
- https://github.com/jacomyal/osdc2012-sigmajs-demo sigmajs filtering/searching
- manipulating data - grep/find replace/sed/regex
- d3 tools and tutorial http://enjalot.com/ http://news.ycombinator.com/item?id=4608440 
  - Why d3 is the way it is and how to make charts http://bost.ocks.org/mike/chart/
  - how to make an xkcd chart http://bl.ocks.org/3914862
- http://blog.josephwilk.net/ruby/latent-semantic-analysis-in-ruby.html similar terms usually found together
- data viz
- http://k2company.com/blog/2012/09/06/toolbox-for-learning-machine-learning-and-data-science/
- http://williamparry.blogspot.com.au/2011/04/putting-data-into-google-fusion-tables.html google fusion tutorial
- andrewharvey4.wordpress.com postgis/asgs tutorial
- http://www.slideshare.net/maxdemarzi/etl-into-neo4j 
- http://www.twotorials.com/ for R
  - http://www.r-bloggers.com/gradient-word-clouds/ http://www.rstudio.com/shiny/ http://blog.ouseful.info/2012/11/28/quick-shiny-demo-exploring-nhs-winter-sit-rep-data/ https://github.com/timelyportfolio/shiny-d3-plot https://github.com/trestletech/shiny-sandbox/tree/master/grn
  - http://is-r.tumblr.com/post/38240018815/making-prettier-network-graphs-with-sna-and-igraph
  - http://www.r-bloggers.com/video-simpler-tricks-and-tools-help-debugging-git-latex-and-workflow-with-r-by-prof-rob-hyndman/
  - http://yihui.name/knitr/ makes reports including google widgets/charts/maps via http://www.r-bloggers.com/googlevis-0-3-2-is-released-better-integration-with-knitr/
  - http://chartsnthings.tumblr.com/post/36978271916/r-tutorial-simple-charts http://flowingdata.com/2012/12/17/getting-started-with-charts-in-r/
- http://dydra.com/ 
- http://selection.datavisualization.ch/ data viz tools list
- http://nodexl.codeplex.com/ network graphs for excel
- http://sunfoundation.tumblr.com/ 
- css framework like bootstrap or zurb foundation
- analysing - linked data tools
  - http://govcampau.wikispaces.com/useful+tools 
  - http://linkeddata.org/home 
- analysing - unstructured/nlp incl overviewer, opennlp/nltk, lucene/solr
  - http://www.r-bloggers.com/simple-text-mining-with-r/ 

# Hosted Developer Tools {#hosted-developer-tools}

### Sourceforge

Subversion, Git, Mercurial, Bazaar, CVS, issue tracker, wiki, release file downloads. Unlimited free use for open source projects.

You can create your own Sourceforge project at [http://sourceforge.net/](http://sourceforge.net/)

### Google Code Project Hosting

Git, Mercurial, and Subversion code. Issue tracker, wiki, release file downloads. Unlimited free use for open source projects.

You can host your Google Code project and get access to developer tools, APIs and documentation at [http://code.google.com/](http://code.google.com/)



# The basics of being a data scientist

*   Have a hypothesis – even if you&#8217;re making a tool/api that helps people with their questions too, remember what the objective of that is.
*   Find the people and tools you need to prove/show/find. This rest of this page will help with the latter.
*   Analyse and present results – were they what you expected? Do they help explain to others what you have found out? Can present as a interactive data visualisation or a web/mobile application or just a infographic/motion graphics video that tells a story.
Please note, there are a combination of Analysis and Visualisation tools in each of the major categories below.

# API Development {#api-development}


So an API isn&#8217;t just an XML file ![;)](http://www.govhack.org/wp-includes/images/smilies/icon_wink.gif) 

A good web based data API:

*   Is logically organised
*   Can filter returned data
*   Can return results in different open formats (CSV/JSON etc.)
*   Is efficient and responsive by using caching and databases appropriately
*   Handles errors gracefully
*   Monitors and controls access (to show benefit realised of API and prevent abuse)
*   Provides appropriate documentation with examples

Some people like sensis [http://](http://developers.sensis.com.au/)[developers.sensis.com.<wbr>au</wbr>](http://developers.sensis.com.au/)[/](http://developers.sensis.com.au/) use a provider like[http://](http://mashery.com/)[mashery.com](http://mashery.com/)[/](http://mashery.com/) or [https](https://apigee.com/)[://](https://apigee.com/)[apigee.com](https://apigee.com/) or [http://](http://apiaxle.com/)[apiaxle.com](http://apiaxle.com/)[/](http://apiaxle.com/) or [http://www.3scale.net/](http://www.3scale.net/) which handles making a good API for them.

Atlassian have a great page on what makes a good API [https](https://developer.atlassian.com/display/REST/Atlassian+REST+API+Design+Guidelines+version+1)[://](https://developer.atlassian.com/display/REST/Atlassian+REST+API+Design+Guidelines+version+1)[developer.atlassian.<wbr>com</wbr>](https://developer.atlassian.com/display/REST/Atlassian+REST+API+Design+Guidelines+version+1)[/display/REST/](https://developer.atlassian.com/display/REST/Atlassian+REST+API+Design+Guidelines+version+1)[Atlassian](https://developer.atlassian.com/display/REST/Atlassian+REST+API+Design+Guidelines+version+1)[+<wbr>REST+API+Design+Guidelines+<wbr>version+1</wbr></wbr>](https://developer.atlassian.com/display/REST/Atlassian+REST+API+Design+Guidelines+version+1)





# Data Visualisation {#data-visualisation}

Most of the categories to follow have visualisation tools specific to their purpose.

You can find some data visualisation &#8220;essential&#8221\. tools below:

[http://www.visualisingdata.com/index.php/2011/07/part-6-the-essential-collection-of-visualisation-resources/](http://www.visualisingdata.com/index.php/2011/07/part-6-the-essential-collection-of-visualisation-resources/)

Also check out [http://thejit.org](http://thejit.org/) &amp; [http://www.senchalabs.org/<wbr>philogl/</wbr>](http://www.senchalabs.org/philogl/) (contributed by Matt Adcock)



# Augmented Reality Tools {#augmented-reality-tools}

### buildAR

buildAR was the world&#8217;s first AR Content Management System with the first early version launched back in 200\. as a bit of a test to see if people were interested in being able to create their own augmented experiences. MOB Labs officially launched the new improved buildAR at the Augmented Reality event in Silicon Valley in May 2011.

[http://buildAR.com](http://buildar.com/) (normally a 1\. day free trial but GovHack attendees on the day will get a fully activated account for a month. If you are a GovHack attendee want full access now to play, just sign up for a trial and then forward your GovHack Eventbrite registration email to govhack [at] buildar.com and they&#8217;ll set you up for the free month fully activated account within a couple of days.

### Other AR tools and references

theAWEsomeWEB &#8211\. Future of the Augmented Web [http://theAWEsomeWEB.com](http://theawesomeweb.com/)

Layar &#8211\. AR Browser - [http://layar.com](http://layar.com/)

Junaio &#8211\. AR Browser - [http://junaio.com](http://junaio.com/)

Aurasma &#8211\. AR Browser - [http://aurasma.com/](http://aurasma.com/)

Vuforia &#8211\. NFT based AR SDK - [http://qualcomm.com/solutions/<wbr>augmented-reality</wbr>](http://qualcomm.com/solutions/augmented-reality)

String &#8211\. Marker based AR SDK - [http://poweredbystring.com/](http://poweredbystring.com/)

[pointcloud.io](http://pointcloud.io/) - SLAM based AR SDK - [http://pointcloud.io/](http://pointcloud.io/)

ARToolkit &#8211\. Marker based AR SDK - [http://en.wikipedia.org/wiki/<wbr>ARToolKit</wbr>](http://en.wikipedia.org/wiki/ARToolKit)

FLARToolkit &#8211\. Marker based AR SDK - [http://saqoo.sh/a/en/<wbr>flartoolkit/start-up-guide</wbr>](http://saqoo.sh/a/en/flartoolkit/start-up-guide)

Kooaba &#8211\. Visual search platform - [http://kooaba.com](http://kooaba.com/)

Catchoom &#8211\. Visual search platform - [http://catchoom.com/](http://catchoom.com/)

Google Googles &#8211\. Visual search app - [http://www.google.com/mobile/<wbr>goggles/#text</wbr>](http://www.google.com/mobile/goggles/#text)

Vuzix 920AR &#8211\. Wearable display - [http://www.vuzix.com/consumer/<wbr>products_wrap920ar.html</wbr>](http://www.vuzix.com/consumer/products_wrap920ar.html)

Project Glass &#8211\. Googles wearable display project - [http://www.youtube.com/watch?<wbr>v=9c6W4CCU9M4</wbr>](http://www.youtube.com/watch?v=9c6W4CCU9M4)

Mixed Reality &#8211\. Nokia&#8217;s vision for wearable displays [http://www.youtube.com/watch?<wbr>v=CGwvZWyLiBU</wbr>](http://www.youtube.com/watch?v=CGwvZWyLiBU)

City Lens &#8211\. Nokia&#8217;s latest AR app - [http://www.youtube.com/watch?<wbr>v=63lNPkl-EPE&amp;feature=youtu.be</wbr>](http://www.youtube.com/watch?v=63lNPkl-EPE&amp;feature=youtu.be)

AR &#8211\. Wikipedia page - [http://en.wikipedia.org/wiki/<wbr>Augmented_reality</wbr>](http://en.wikipedia.org/wiki/Augmented_reality)

Steve Mann &#8211\. Wearable Computing Pioneer - [http://en.wikipedia.org/wiki/<wbr>Steve_Mann</wbr>](http://en.wikipedia.org/wiki/Steve_Mann)

Thad Starner &#8211\. Wearable Computing Pioneer [http://en.wikipedia.org/wiki/<wbr>Thad_Starner</wbr>](http://en.wikipedia.org/wiki/Thad_Starner)

Mark Weiser &#8211\. Father of Pervasive Computing [http://en.wikipedia.org/wiki/<wbr>Mark_Weiser</wbr>](http://en.wikipedia.org/wiki/Mark_Weiser)


# Geographical Data Tools {#geographical-data-tools}

Check out the[ GeoRabble Boundary Mapper&#8217;s Cookbook](http://georabble.org/2012/05/31/the-boundary-mappers-cookbook/) to see how you can tie all these things together!

## Analysis

### PostGIS

[![](http://www.govhack.org/wp-content/uploads/postgisexample-300x130.jpg "postgisexample")](http://www.govhack.org/wp-content/uploads/postgisexample.jpg)PostGIS is an extension for the PostgreSQL database server that allows you to store and manipulate geospatial data on a large scale. For example finding which points are in an area or what points are closest . It is also very useful for storing geospatial data because it can convert between all major formats including ESRI Shape files and Google Earth/Maps KML.

### Quantum GIS

[![](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_m50afbe88-300x160.jpg "QGIS Screenshot")](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_m50afbe88.jpg)QGIS is a graphical desktop application that allows viewing and editing of geospatial data. Some good base maps are available by adding the WMS layer/server [http://irs.gis-lab.info/](http://irs.gis-lab.info/)

## Visualisation

### Google Fusion Tables/ChartsBin/[OpenHeatMap](http://www.openheatmap.com/)

[![](http://www.govhack.org/wp-content/uploads/fusiontablesscreenshot-300x168.jpg "fusiontablesscreenshot")](http://www.govhack.org/wp-content/uploads/fusiontablesscreenshot.jpg)Input a numerical values and areas to a spreadsheet and maps are produced

### [Cartographer.js](http://cartographer.visualmotive.com/)

[![](http://www.govhack.org/wp-content/uploads/cartographerjs-300x187.png "cartographerjs screenshot")](http://www.govhack.org/wp-content/uploads/cartographerjs.png)Input data as JSON and maps are produced.



### OpenLayers/Google Maps/[Leaflet](http://leaflet.cloudmade.com/)

[![](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_512fcbe1-300x173.jpg "OpenLayers Screenshot")](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_512fcbe1.jpg)Display points and different layers. Leaflet is the easiest to use if you just want to show points with popups when clicked on.

### NASA World Wind/Google Earth

[![](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_4dda24a4-300x261.jpg "WorldWind screenshot")](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_4dda24a4.jpg)Google Earth provides 3\. viewing of KML/GML files which represent points and shapes, both through a desktop application and a web plugin. These can be extended with interactive features that allow you to view by timeline or have animated tours between different points. You can also develop and customise your own viewer with the open source [NASA World Wind toolkit.](http://goworldwind.org/demos/)

### 

# Tabular Data Tools {#tabular-data-tools}

## Analysis

### Excel / Calc

Great basic analysis and viewing. Older versions can be limited to 6500\. or so rows. Eg [http://www.tcij.org/training-material/car/data-mining/3474](http://www.tcij.org/training-material/car/data-mining/3474)

### [DataWrangler](http://vis.stanford.edu/wrangler/)/[Google Refine](http://code.google.com/p/google-refine/)

[![](http://www.govhack.org/wp-content/uploads/google_refine_interface.png "google_refine_interface")](http://www.govhack.org/wp-content/uploads/google_refine_interface.png)Clean up duplicate or inconsistent data entries.

### PostgreSQL/MySQL

[![](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_209ee972.jpg "SQL screenshot")](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_209ee972.jpg)Next step up, large datasets can be manipulated/extracted efficiently for example [http://www.postgresql.org/docs/8.4/static/tutorial-window.html](http://www.postgresql.org/docs/8.4/static/tutorial-window.html) , no built-in data visualisation though.

[Miso Dataset](http://misoproject.com/dataset/)

[![](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_m53b7ee38-293x300.png "miso screenshot")](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_m53b7ee38.png)Javascript data transformation library – especially good if you want to use the output for javascript interactive visualisations because the transformations can be done on-the-fly by users.

### R Statistical Language

[![](http://www.govhack.org/wp-content/uploads/rstudio-windows-300x249.png "rstudio-windows")](http://www.govhack.org/wp-content/uploads/rstudio-windows.png)Advanced data analysis, can find and visualise trends in large datasets. Some reference resources to learn the language [http://cran.r-project.org/doc/manuals/R-intro.html ](http://cran.r-project.org/doc/manuals/R-intro.html)There are also some addons that provide graphical interfaces that make it easier to use such as Rattle [http://rattle.togaware.com/](http://rattle.togaware.com/) , RStudio [http://rstudio.org/](http://rstudio.org/) or Deducer [http://www.deducer.org/pmwiki/pmwiki.php?n=Main.DeducerManual](http://www.deducer.org/pmwiki/pmwiki.php?n=Main.DeducerManual)

## Visualisation

### [Tableau Desktop](http://www.tableausoftware.com/)

Create visualisations from various data formats by dragging and dropping. Free trial available on website. [![](http://www.govhack.org/wp-content/uploads/Tableau-Screenshot-300x190.jpg "Tableau Screenshot")](http://www.govhack.org/wp-content/uploads/Tableau-Screenshot.jpg)

### [Flotr2](http://www.humblesoftware.com/flotr2/)/[Google Chart Tools](https://developers.google.com/chart/)

[![](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_m11006fce-300x199.jpg "flotr2 screenshot")](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_m11006fce.jpg)Javascript based charts for webpages.

### D3.js (Data-Driven Documents)

[![](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_m90d8020-300x277.jpg "d3 screenshot")](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_m90d8020.jpg)Javascript visualisations that are more interactive or intricate than charts. Can be hard to learn but there are examples and easier to use premade visualisations such as [word clouds](http://www.jasondavies.com/wordcloud/), [realtime filtering of barcharts](http://square.github.com/crossfilter/), or [bubble trees for comparing amount sizes](https://github.com/okfn/bubbletree).

### Processing.js

# Graph (relationships and networks) Data Tools {#graph-relationships-and-networks-data-tools}

## Analysis

### Neo4j

[![](http://www.govhack.org/wp-content/uploads/webadmin-data-300x127.png "Neo4\. web admin screenshot")](http://www.govhack.org/wp-content/uploads/webadmin-data.png)Help understand relationships – how is X connected to Y and via what other entities they both are connected to. Imports and exports

can be done using a preexisting tool like Gremlin or by writing a simple Java/Python/Ruby application. Queries can be tested in the built in data browser.

### [NetworkX](http://networkx.lanl.gov/index.html)

[![](http://www.govhack.org/wp-content/uploads/chess_masters-300x300.png "NetworkX")](http://www.govhack.org/wp-content/uploads/chess_masters.png)

NetworkX is a social network analysis library for python. Many advanced analyses built in like finding communities within a graph. Also good for converting data into graphs.

### Palantir

Palantir make a good computer forensics tool, which they will showcase and give GovHack attendees access to for GovHack data analysis purposes. For more information check out:

[http://palantir.com.au/](http://palantir.com.au/)

## Visualisation

### [Graphviz](http://www.graphviz.org/)

[![](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_7579906d-300x184.png "Graphviz Screenshot")](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_7579906d.png)Classic directed graph visualisation tool, can even [generate images online without installing](http://ashitani.jp/gv/) or use in webpages with [javascript port of software](http://code.google.com/p/canviz/). File format [“dot” very easy to learn](http://en.wikipedia.org/wiki/DOT_language)

### Gephi

[![](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_74d01d05-300x195.jpg "Gephi Screenshot")](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_74d01d05.jpg)Desktop graph editor and renderer. Many good automatic layout algorithms even for very large graphs.

### [sigma.js](http://sigmajs.org/)

[![](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_m6006eaf3-300x130.jpg "Sigma.js Screenshot")](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_m6006eaf3.jpg)Javascript graph viewer, can use GEXF files exported from tools like neo4j, gephi and NetworkX.



Below is some additional information including a few previous GovHack projects to get you thinking ![:)](http://www.govhack.org/wp-includes/images/smilies/icon_smile.gif)  More examples are available at [http://mashupaustralia.org/](http://mashupaustralia.org/).

# Previous Project Examples {#previous-project-examples}

## PlanningAlerts

[![Planning Alerts Screenshot](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_2f0199ff1-300x221.png "Planning Alerts Screenshot")](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_2f0199ff1.png)Description: Planning Alerts takes data from local government development applications and sends alerts to users based on what applications are lodged in their area.

Programming Language: Ruby

Source Control: [Git](https://github.com/openaustralia/planningalerts-app)

Issue Tracking: [Atlassian JIRA](http://tickets.openaustraliafoundation.org.au/browse/PA/)

## LobbyLens

[![](http://www.govhack.org/wp-content/uploads/129-Screenshot-LobbyClue_-_Chromium-300x180.png "LobbyLens screenshot")](http://www.govhack.org/wp-content/uploads/129-Screenshot-LobbyClue_-_Chromium.png)

Description: Displays connections between government contracts, business details, politician responsibilities, lobbyists, clients of lobbyists, political donors and the location of these entities.

Programing Language: PHP

Source Control: SVN (Subversion)

Issue Tracking: A whiteboard

## Bus.lambdacomplex.org

[![](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_3789acae-300x253.jpg "Bus.lambda screenshot")](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_3789acae.jpg)

Description: Online Canberra Bus Timetables and Trip Planner.

Programing Language: PHP/Ruby

Source Control: Git

Issue Tracking: Github

# General Data Hacking and Programming References {#general-data-hacking-and-programming-references}


[![](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_m6a65720f-300x199.gif "Data Journalism Diagram")](http://www.govhack.org/wp-content/uploads/How-to-participate-in-GovHack_html_m6a65720f.gif)</dt>
Illustration from Data Journalism Handbook, CC BY-SA 3.0</dd>


The best high level reference is the “Understanding Data” and “Delivering Data” chapters of the Data Journalism Handbook which is available online for free at

[datajournalismhandbook.org](http://datajournalismhandbook.org/)

You can learn the technical skills from scratch in Visualize This: The FlowingData Guide to Design, Visualization, and Statistics by Nathan Yau or for more advanced

practical advice check out Data Analysis with Open Source Tools by Philipp K. Janert

For further reading in this space

[http://flowingdata.com/2012/04/27/data-and-visualization-blogs-worth-following/](http://flowingdata.com/2012/04/27/data-and-visualization-blogs-worth-following/)

**Statistics**

[http://greenteapress.com/thinkstats/html/index.html](http://greenteapress.com/thinkstats/html/index.html)

**Programming**

Programming is valuable skill for manipulating and displaying data.

Basic tutorials for a variety of languages are available for free online or you can learn

interactively with websites like [http://www.codecademy.com/](http://www.codecademy.com/#!/exercises/0\. for JavaScript or [http://www.learnpython.org/ ](http://www.learnpython.org/)or [http://tryruby.org](http://tryruby.org/)

[https://developer.mozilla.org/en/JavaScript](https://developer.mozilla.org/en/JavaScript) &#8211\. especially for web applications and visualisations, you&#8217;ll need a basic understanding of JS. Common libraries like prototype or jQuery can help

**Accessibility/User Experience**

WCAG guidelines not only make a web app accessible but make it a better experience for all users! Even if not making an app, good to consider these things to do and not do: [http://www.w3.org/TR/WCAG/](http://www.w3.org/TR/WCAG/)



#[Developer Tools For Your Computer]{#developer-tools-for-your-computer}

### Source Control &#8211\. Git / Subversion

[![](http://www.govhack.org/wp-content/uploads/Screenshot-at-2012-04-29-172132-300x235.png "Git Screenshot")](http://progit.org/book/)

[http://progit.org/book/](http://progit.org/book/)

[http://svnbook.red-bean.com/](http://svnbook.red-bean.com/)

[http://tortoisesvn.net/](http://tortoisesvn.net/)

[http://code.google.com/p/tortoisegit/](http://code.google.com/p/tortoisegit/)

### Task Tracking - [Trac](http://trac.edgewall.org/) / [Redmine](http://www.redmine.org/) / [Bugzilla](http://www.bugzilla.org/)

## [![](http://www.govhack.org/wp-content/uploads/trac-300x207.png "trac screenshot")](http://www.govhack.org/wp-content/uploads/trac.png)

Issue/task trackers allow you to outline the tasks required for your project and assign them to people to do.
