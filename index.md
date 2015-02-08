# The GovHack Guide

This page provides all the information you'll need to prepare your GovHack entries, and a wealth of links to tools, techniques, and libraries to help you build an awesome project. You can use these resources to build any sort of project - mobile apps, web apps, data visualisations/infographics, and more. You're not limited to using the resources and tools in this page, but your actual entries must meet the [competition eligibility rules](http://www.govhack.org/competition-rules-code-of-conduct/).

If you're new to GovHack (or are just a little unclear on the process involved) we strongly encourage you to read the [Anatomy of GovHack project](#anatomy-of-govhack-project) section at the top of this page to find out all about the process of registering, preparing, and submitting your entry.

Beyond that, you'll find a range of useful resources from [technical considerations]() in publishing your entry, resources for working with [geospatial]() or [tabular]() data, to extracting good data from [messy unstructured sources](), and much more besides.

> @TODO Links


# Document @TODO
* GovHack Toolkit or GovHack Guide?
* Run it past some participants for input
* NationalMap, Mashery, and Socrata got junked - they belong on the Data page.
* Is there a better place / pitch for the Data Scientist section?
* The Web Application section got junked. Can advise about Bootstrap, Foundation, et al. somewhere else
* Where to put advanced webby stuff e.g. https://groups.google.com/a/chromium.org/forum/#!topic/blink-dev/UdGlL9PtBLo
* Check for consistency of terms used (entries vs projects, et cetera)
* Screenshots and company/project logos
* Integrating and formatting for govhack.org


# Anatomy of GovHack project

We only have three firm requirements for your GovHack project:

* That you register your team and fill our your project information,
* that you submit a 3 minute video by the end of the competition (5:30PM AEST Sunday), and
* that you make your project source code and assets available online under an open license.

It's useful to bear in mind that the competition judges will be focused on the tangible outcomes of your project, so making your team page a snazzy and useful resource with information about your project, screenshots, your 3 minute video, and anything else that shows off how *awesome* your project is is actually REALLY important :)

> @TODO Amusing anatomy image in the sidebar
>
> @TODO Link to info on open licenses

## Register your project and team

Firstly, get one of your team to sign up and register your team on the [HackerSpace](http://hackerspace.govhack.org). You *need to have registered* your team and created your project by by 2pm Saturday (local time), but you're free to continue editing and improving it until the competition closes.

If you experience any issues with registering your team, or have any questions about what is required of you, seek out one of your friendly local GovHack organisers and they'll give you a hand.

<iframe width="560" height="315" src="https://www.youtube.com/embed/SnBsC06EF44" frameborder="0" allowfullscreen></iframe>

## Prepare your video

The second most important part of your project (apart from the actual project itself) is the 3 minute video you'll make to show off your project to the competition judges. Your video can be anything from a screencast of your project being used to a mini-movie with live action, voiceovers, and actors (read: team members and bribeable friends)!

If you're including a screencast component check out software like [Screenr](http://www.screenr.com/) and [ActivePresenter](http://atomisystems.com/activepresenter/free-edition/) that will allow you to record demos of your application.

For mixing clips together the [YouTube Video Editor](https://www.youtube.com/editor) is super user-friendly; though [VLC](http://www.videolan.org/vlmc) or [LWKS](http://www.lwks.com/) may also be handy.

To help with storyboarding your video grab this huge pack of [free storyboarding illustrations](https://dribbble.com/shots/1083617-430-FREE-storyboard-illustrations).

Videos can be hosted wherever you like as long as it's web accessible - but most participants end up using YouTube (and it makes it a little easier for us to organise all of the videos after the event!).

<iframe width="560" height="315" src="https://www.youtube.com/embed/K-GiOtHN4FY" frameborder="0" allowfullscreen></iframe>

And again, if you are unsure about what you need to do, or just need a bit of help with your video, hunt down one of your local GovHack organisers and they'll be happy to help.

> @TODO Are there any new (free) tools available?


## Submit your project

The last tenet of GovHack is that you submit all of your source code and assets (data, documents, art assets, et cetera) and make the available under an open license. Typically this will comprise the source code for a web or mobile application, but for other types of works (e.g. 3D printed jewlery) that can be your notes and evidence of your prototypes.

The key point to remember is that your source material needs to demonstrate to the competition judges that the end result was your own work, and that it is possible for another person, with the right knowledge and equipment, to replicate that work.

You're free to submit your source materials in any fashion, but typically we find people like to use [GitHub](https://github.com/) or [BitBucket](https://bitbucket.org/). Both of these services are free for open source projects and have user-friendly web and desktop applications to allow even novice users to create, submit, and edit their source material.

Check out our short video on getting set up with GitHub for GovHack:

<iframe width="420" height="315" src="https://www.youtube.com/embed/gQsC-msLW2E" frameborder="0" allowfullscreen></iframe>

> @TODO Open license links and info


# Data

We have a whole page dedicated to the Government (and other) datasets that you'll be using in your project. Check out the [GovHack Data page](http://www.govhack.org/data) for all of the details.

> @TODO Does this even need to be here?


# Mentors (Help me, Obi Wan Kenobi. You're my only hope.)

GovHack is supported by an awesome group of mentors from a wide range of disciplines who've volunteered to provide assistance to teams. We'll also have mentors who provide insider advice about the datasets (data custodians), and others who have expertise in a wide range of technologies and skills (tech mentors) to help you and your team get the best outcomes possible during the competition.

Check out the [GovHack Mentors page](http://www.govhack.org/mentors/) for more information on how to get in touch with your awesome mentors.


# Technical considerations

## Putting your project on the web

We've already spoken about how you can submit your project source materials, but you'll more than likely also need a place to host your application on the web.

### Virtual servers and hosting

If you're building any sort of web-connected application (be it web, mobile, or a desktop application) you'll need a server to host it on. These days virtual servers are a dime a dozen (and often significantly cheaper than that) - be they a blank box with command line access that you setup yourself (aka [IAAS](http://en.wikipedia.org/wiki/Infrastructure_as_a_service "Infrastructure as a service")), or a [PAAS](http://en.wikipedia.org/wiki/Platform_as_a_service "Platform as a service") solution that gives you click-button access to databases, caching layers, system utilities, monitoring, and analytics services - all with a nice GUI to keep you from having to delve into command line hell.

#### Amazon Web Services

Thanks to the generous support of Amazon Web Services we've got $100 vouchers for each GovHack team. Simply [fill out this form](http://www.govhack.org/amazon-web-services/), including your AWS account number and your team page URL from HackerSpace.

There is also a free tier of usage available to all new AWS accounts, see the [AWS Free Tier page](http://aws.amazon.com/free/?nc1=h_l3_su) for more information. If you're part of a startup company you might like to sign up for [AWS Activate](http://aws.amazon.com/about-aws/whats-new/2014/05/14/announcing-new-features-in-aws-activate-startup-blog-startup-spotlight-and-the-amazon-toolbox/).

Those new to AWS should check out the [Getting Started with AWS guide](http://aws.amazon.com/getting-started/).

#### NeCTAR

The [National Research Cloud](http://nectar.org.au/research-cloud) (aka NeCTAR) is just like Amazon Web Services, however it is run on open source software ([OpenStack](https://www.openstack.org/)) and is for use by academics and researchers in Australia. In physical terms, NeCTAR spans [eight data centres](https://www.nectar.org.au/news/where-are-nectar-cloud-node-sites-located) around Australia (located at top ranked Higher Education Institutions) which have combined to provide the largest Federated Academic Cloud in the world at 30,000 cores.

Any university student/staff with a valid .edu.au email address can logon right now and use two "small instances / cores" for three months for free. After the initial three month period there is a simple "allocation tab" on the dashboard where you can apply for longer usage or more compute cycles. The allocation form is a simple one page description of your research and how you are using the cloud for that research.

#### Azure, Google Compute Engine, et al.

Trying to list all of the options for virtual server hosting would be a fool's errand, so here are just some of the most popular [IAAS](http://en.wikipedia.org/wiki/Infrastructure_as_a_service "Infrastructure as a service") and [PAAS](http://en.wikipedia.org/wiki/Platform_as_a_service "Platform as a service") options at the moment.

Google offers two services in this space - [Google Compute Engine](https://cloud.google.com/compute/) (IAAS) and [Google App Engine](https://cloud.google.com/appengine/) (PAAS). If containerised application development on Docker is your thing they also have [Google Container Engine](https://cloud.google.com/container-engine/) (in alpha) available.

Speaking of Docker - [Joyent](https://www.joyent.com/) offers some pretty slick support for Docker along with its traditional [IAAS and PAAS offerings](https://www.joyent.com/partners).

For smaller scale IAAS-type services both [DigitalOcean](https://www.digitalocean.com/) and [Linode](https://www.linode.com/) have great offerings from $5/month.

We'd be remiss if we didn't mentions Microsoft's really rather excellent [Azure](http://azure.microsoft.com/en-gb/) IAAS/PAAS services. You don't even need to be inside the .NET ecosystem to take advantage of them (though it does help a bit).

Lastly, we have to mention [Heroku](https://www.heroku.com/) and its great little PAAS offerings.


### Static website hosting

> @TODO

## Having the right tools for the job

> @TODO

### Source control and issue tracking

> @TODO

### Project management

> @TODO

### Code editors

> @TODO

### Issue tracking

> @TODO


# Become a data scientist in an hour

> @TODO

# Roll you own API

> @TODO

# Of infographics and data visualisation

> @TODO


# Working with geographic data and maps

> @TODO

## Finding datasets

> @TODO

## Converting between data formats

> @TODO

## Geocoding - turn an address into a location

> @TODO

## Analysing your data

> @TODO

### QGIS

> @TODO

### R (Arrr!)

> @TODO

### PostGIS

> @TODO

## Visualising your data

> @TODO

### Web mapping libraries

> @TODO

### Maps as a Service

> @TODO

### Desktop tools

> @TODO


# Working with tabular data

> @TODO

## Finding datasets

> @TODO

## Converting between data formats

> @TODO

## Cleaning your data

> @TODO

## Analysing your data

> @TODO

### Spreadsheets

> @TODO

### Databases

> @TODO

### R (Arrr!)

> @TODO

## Visualising your data

> @TODO

### Web viz tools

> @TODO

### Desktop tools

> @TODO


# Unstructured data (aka Somebody gave us data as a scanned photocopy of a Word doc...)

> @TODO

## Scraping your data

> @TODO

## Analysing your data

> @TODO

## Visualising your data

> @TODO


# Advanced analysis

> @TODO

## Graph data (aka relationship networks)

> @TODO

### R (Arrr!)

> @TODO

### Databases

> @TODO

### Visualising

> @TODO


# Some useful tools for developing in...

> @TODO

## Python

> @TODO
Beautiful Tools


# Legalese
The text of this toolkit is open for reuse under a [Creative Commons Attribution](https://creativecommons.org/licenses/by/3.0/au/deed.en) licence and improvements and suggestions are encouraged by submitting them on [GitHub](http://github.com/govhackaustralia/govhack-tools/issues).





#GovHack Toolkit
Welcome to the GovHack toolkit. This page provides all the information you need to prepare hackfest entries.
These tools can be used to make entries like mobile apps, web apps and data visualisations/infographics.

The text of this toolkit is open for reuse under a Creative Commons Attribution licence and improvements are encouraged via Git http://github.com/maxious/govhack-tools or via email patches to govhack@lambdacomplex.org

# How to register and submit your entry
## Registering your team
Coming Soon: how to use the website "Hacker Space" to register and find teams.

## Preparing your submission

You should record a 3 minute speech and mix images/text to accompany.
[Screenr] (http://www.screenr.com/) , [ActivePresenter Free Edition](http://atomisystems.com/activepresenter/free-edition/) and other screencasting tools allow you to demo apps.
To mix together clips, you can use youtube video editor http://www.youtube.com/editor or local software like http://www.videolan.org/vlmc/ or http://www.lwks.com/
You can use graphics for example [storyboards with these free icons](http://dribbble.com/shots/1083617-430-FREE-storyboard-illustrations)

You also need to submit your "source material". For an application this may be source code, for another work it might be your notes or prototypes.
The key thing here is that your source material demonstrates to the judges that some of the end result was your own work and that it is possible for another person to replicate that work.

# General References


## The basics of being a data scientist

*   Have a hypothesis - even if you're making a tool/api that helps people with their questions too, remember what the objective of that is.
*   Find the people and tools you need to prove/show/find. This rest of this page will help with the latter.
*   Analyse and present results -  were they what you expected? Do they help explain to others what you have found out?
Can present as a interactive data visualisation or a web/mobile application or just a infographic/motion graphics video that tells a story.

[![](img/How-to-participate-in-GovHack_html_m6a65720f-300x199.gif "Data Journalism Diagram")](img/How-to-participate-in-GovHack_html_m6a65720f.gif)</dt>
Illustration from Data Journalism Handbook, CC BY-SA 3.0</dd>

The best high level reference is the 'Understanding Data' and 'Delivering Data' chapters of the Data Journalism Handbook which is available online for free at
[datajournalismhandbook.org](http://datajournalismhandbook.org/)

You can learn the technical skills from scratch in Visualize This: The FlowingData Guide to Design, Visualization, and Statistics by Nathan Yau or for more advanced
practical advice check out Data Analysis with Open Source Tools by Philipp K. Janert
For further reading in this space
[http://flowingdata.com/2012/04/27/data-and-visualization-blogs-worth-following/](http://flowingdata.com/2012/04/27/data-and-visualization-blogs-worth-following/)


**Statistics**

A great guide to statistics is
[Think Stats](http://greenteapress.com/thinkstats/html/index.html)

**Programming**

Programming is valuable skill for manipulating and displaying data.
Basic tutorials for a variety of languages are available for free online or you can learn interactively with websites like [Codecademy for JavaScript](http://www.codecademy.com/#!/exercises/0), [Learn Python](http://www.learnpython.org/) or [Try Ruby](http://tryruby.org/)

For web applications and visualisations, you'll need a basic understanding of JavaScript in order to configure pre made libraries like jQuery. A good source for Javascript information is the [Mozilla Development Network Javascript Page](https://developer.mozilla.org/en/JavaScript)

**Accessibility/User Experience**

Following accessibility guidelines not only make a application accessible but make it a better experience for all users! Even if not making an app, good to consider these things to do and not do when designing for humans: [http://www.w3.org/TR/WCAG/](http://www.w3.org/TR/WCAG/)



# Developer Tools For Your Computer
No matter what kind of application you have for the data, there are many tools you can use to better collaborate and manage your project.

### Source Control
Using a version control system like Git or Subversion allows you to keep many different versions of what you have been working on so you can collaborate with others or simply back up your files so you don't lose them!

[![](img/Screenshot-at-2012-04-29-172132-300x235.png "Git Screenshot")](http://progit.org/book/)

There are [tutorials on git](http://progit.org/book/) and GUIs to help you like [TortoiseGit for Windows](http://code.google.com/p/tortoisegit/) and [Atlassian SourceTree for Windows and OSX](http://sourcetreeapp.com/) (or if you prefer the console [tig](http://blogs.atlassian.com/2013/05/git-tig/))
There is also a [manual for Subversion](http://svnbook.red-bean.com/) and a [similar GUI for Subversion](http://tortoisesvn.net/)


### Task Tracking

Issue/task trackers allow you to outline the tasks required for your project and assign them to people to do.

[Trello](https://trello.com/) and [Workflowy](https://workflowy.com/) are free, lightweight project management tools suitable for a rapid project!

## Virtual Servers
Many free services to try out virtual/cloud servers before scaling up: https://www.chunkhost.com/ or heroku or https://www.appfog.com/pricing/
If your wifi starts to get congested, you can use [mosh](http://mosh.mit.edu/) to improve the performance of SSH under reduced network performance.


## Hosted Developer Tools

Can get many tools (source control, issue tracking) combined into one service cloud hosted so there's no setup required.

### Github / BitBucket
Github provides Git but [Subversion (svn)](https://github.com/blog/626-announcing-svn-support) and [Mercurial (hg)](http://hg-git.github.io/) interfaces are also available. Github provide their own GUI for Windows/OSX or you can use a variety of Git capable tools https://github.com/
Similarly Atlassian provide BitBucket accessible via Git and Mercurial (hg) https://bitbucket.org/

### Sourceforge

Subversion, Git, Mercurial, Bazaar, CVS, issue tracker, wiki, release file downloads. Unlimited free use for open source projects.

You can create your own Sourceforge project at [http://sourceforge.net/](http://sourceforge.net/)

### Google Code Project Hosting

Git, Mercurial, and Subversion code. Issue tracker, wiki, release file downloads. Unlimited free use for open source projects.

You can host your Google Code project and get access to developer tools, APIs and documentation at [http://code.google.com/](http://code.google.com/)


# Applications of data hacking

## API Development


So an API isn't just an XML file!
A good web based data API:

*   Is logically organised
*   Can filter returned data
*   Can return results in different open formats (CSV/JSON etc.)
*   Is efficient and responsive by using caching and databases appropriately
*   Handles errors gracefully
*   Monitors and controls access (to show benefit realised of API and prevent abuse)
*   Provides appropriate documentation with examples

Some people like sensis [http://](http://developers.sensis.com.au/)[developers.sensis.com.<wbr>au</wbr>](http://developers.sensis.com.au/)[/](http://developers.sensis.com.au/) use a provider like[http://](http://mashery.com/)[mashery.com](http://mashery.com/)[/](http://mashery.com/) or [https](https://apigee.com/)[://](https://apigee.com/)[apigee.com](https://apigee.com/) or [http://](http://apiaxle.com/)[apiaxle.com](http://apiaxle.com/)[/](http://apiaxle.com/) or [http://www.3scale.net/](http://www.3scale.net/) which handles making a good API for them.

Atlassian have a great page on what makes a good API https://developer.atlassian.com/display/REST/Atlassian+REST+API+Design+Guidelines+version+1)

HowTo.gov has a bunch of api resources about choosing SOAP vs. REST etc. http://www.howto.gov/mobile/apis-in-government

API documentation is important too! Traditionally for SOAP APIs, you use WSDL but for REST try [Swagger](http://swagger.wordnik.com/) or [iodocs](https://github.com/mashery/iodocs)
Many web app frameworks can generate the documentation for you. For example Symfony for PHP http://symfony.com/ https://github.com/FriendsOfSymfony/FOSRestBundle http://williamdurand.fr/2012/08/02/rest-apis-with-symfony2-the-right-way/ https://github.com/nelmio/NelmioApiDocBundle https://github.com/liip/LiipHelloBundle
Or for Ruby on Rails there is is https://github.com/elc/rapi_doc https://github.com/Pajk/apipie-rails

For example [Stripe's API](http://amberonrails.com/building-stripes-api/) or previous GovHack entrant [WeatheredOak](http://www.govhack.org/2012/06/02/weatheredoak/)


## Infographics and Data Visualisation

Infographics try to contextualise charts and graphs to tell a story. Data vis builds on this to find new ways to design insight.

Most of the categories to follow have visualisation tools specific to their purpose.

You can find some data visualisation tools below:

[Essential Colletion](http://www.visualisingdata.com/index.php/2011/07/part-6-the-essential-collection-of-visualisation-resources/)
              [Drawing By Numbers Tools and Resources](http://drawingbynumbers.org/toolsandresources)
               - http://selection.datavisualization.ch/ data viz tools catalog
Also check out [http://thejit.org](http://thejit.org/) &amp; [http://www.senchalabs.org/<wbr>philogl/</wbr>](http://www.senchalabs.org/philogl/) (contributed by Matt Adcock)

A good infographic should use visual art concepts and [good color schemes](http://www.r-bloggers.com/the-paul-tol-21-color-salute/). See the [data visualisation guidelines from the international journalism festival](http://schoolofdata.org/2013/04/26/data-visualization-guidelines-by-gregor-aisch-international-journalism-festival/)
For more information on the theory of data visualisation check out the [Stanford CS448B notes](https://graphics.stanford.edu/wikis/cs448b-12-fall/) or [The Ultimate Collection of Data Storytelling Resources](http://www.juiceanalytics.com/writing/the-ultimate-collection-of-data-storytelling-resources/)

Some examples of data visualisation can be seen on [the Sunlight Foundation tumblr](http://sunfoundation.tumblr.com/) or at the GovHack alumn [The Open Budget](http://www/.theopenbudget.org)


## Web Applications

With the rise of HTML5 technologies it is easier than ever to make a web application for engaging use of data.
It's easy to quickly make a good looking and accessible webpage if you use a CSS framework like Bootstrap or Zurb Foundation.
There are a variety of bootstrap themes like [Flat-UI](http://designmodo.com/flat-free/)

Check out the visualisation tools listed in the data sections for web application tools like these [CSS Dashboard gauges](http://www.larentis.eu/donuts/)

### Examples


#### PlanningAlerts

[![Planning Alerts Screenshot](img/How-to-participate-in-GovHack_html_2f0199ff1-300x221.png "Planning Alerts Screenshot")](img/How-to-participate-in-GovHack_html_2f0199ff1.png)Description: Planning Alerts takes data from local government development applications and sends alerts to users based on what applications are lodged in their area.

Programming Language: Ruby

Source Control: [Git](https://github.com/openaustralia/planningalerts-app)

Issue Tracking: [Atlassian JIRA](http://tickets.openaustraliafoundation.org.au/browse/PA/)

#### LobbyLens

[![](img/129-Screenshot-LobbyClue_-_Chromium-300x180.png "LobbyLens screenshot")](img/129-Screenshot-LobbyClue_-_Chromium.png)

Description: Displays connections between government contracts, business details, politician responsibilities, lobbyists, clients of lobbyists, political donors and the location of these entities.

Programing Language: PHP

Source Control: SVN (Subversion)

Issue Tracking: A whiteboard

#### bus.lambdacomplex.org

[![](img/How-to-participate-in-GovHack_html_3789acae-300x253.jpg "Bus.lambda screenshot")](img/How-to-participate-in-GovHack_html_3789acae.jpg)

Description: Online Canberra Bus Timetables and Trip Planner.

Programing Language: PHP/Ruby

Source Control: Git

Issue Tracking: Github

## Mobile

If you want to get stared quickly with mobile application development, it's worth considering cross platform frameworks like http://www.sencha.com/products/touch http://phonegap.com/ http://cordova.apache.org/

For a simple mobile app, a web application with a framewrok like jQuery Mobile can work quite well (as used on directory.gov.au)

For data visualisation, there are a variety of graph widgets http://code.google.com/p/afreechart/ http://code.google.com/p/snowdon/ http://code.google.com/p/chartdroid/ http://androidplot.com/ http://code.google.com/p/achartengine/

You may wish to consider backend frameworks like http://helios.io/ or https://www.parse.com/

### Examples

Bureau of Meteorology Water Storage App http://icelab.com.au/work/bureau-of-meteorology/

NZ Gov budget http://www.treasury.govt.nz/budget/app


# Geographical Data Tools

Check out the [GeoRabble Boundary Mapper's Cookbook](http://georabble.org/2012/05/31/the-boundary-mappers-cookbook/) to see how you can tie all these things together!


## Key datasets
There are a variety of base layers like AGRI aerial imagery of Australia http://agri.openstreetmap.org/ or WMS services like http://irs.gis-lab.info/ wms or http://www.gdal.org/frmt_wms_openstreetmap_tms.xml

Check out the [Geoscience Australia Geo Dataset search and preview](http://www.ga.gov.au/search/index.html#/showMap)

ASGS from ABS including suburbs/postcodes andrewharvey4.wordpress.com postgis/asgs tutorial
You can also get KML layers for various statistical measures on the ABS TableBuilder tool.

## Wrangling

### Converting
There are many spatial data formats and often the one your tool requires is not the one the dataset is provided in.
You can convert spatial datasets online with http://converter.mygeodata.eu/vector or locally using GDAL (which better for >10 megabyte datasets)

### Geocoding

See this [introduction to geocoding](http://schoolofdata.org/2013/02/19/geocoding-part-i-introduction-to-geocoding/)

Google Maps APIs allow you to convert an address to map co-ordinates (geocoding) but you must display on a Google Map. The easiest way to do is with a Google Spreadsheet/Fusion Table http://schoolofdata.org/2013/02/19/geocoding-part-ii-geocoding-data-in-a-google-docs-spreadsheet/

If you need geocoding for more than display (working out the distance between points etc) or you don't want to use Google Maps, Cloudmade offers free OpenStreetMap based geocoding http://developers.cloudmade.com/projects/show/geocoding-http-api

## Analysis

### R
http://www.r-bloggers.com/starting-analysis-and-visualisation-of-spatial-data-with-r/
http://www.r-bloggers.com/3d-mapping-in-r/

### PostGIS

[![](img/postgisexample-300x130.jpg "postgisexample")](img/postgisexample.jpg)PostGIS is an extension for the PostgreSQL database server that allows you to store and manipulate geospatial data on a large scale. For example finding which points are in an area or what points are closest . It is also very useful for storing geospatial data because it can convert between all major formats including ESRI Shape files and Google Earth/Maps KML.

### Quantum GIS

[![](img/How-to-participate-in-GovHack_html_m50afbe88-300x160.jpg "QGIS Screenshot")](img/How-to-participate-in-GovHack_html_m50afbe88.jpg)QGIS is a graphical desktop application that allows viewing and editing of geospatial data. Some good base maps are available by adding the WMS layer/server [http://irs.gis-lab.info/](http://irs.gis-lab.info/)

See this [Creating a Map in QGIS tutorial](http://schoolofdata.org/2013/04/27/creating-a-map-using-qgis/)

## Visualisation

### Layar and other augmented reality tools
[Layar](http://www.layar.com/) provides a platform for exploring a dataset by travelling to the actual locations of the data and looking through a smartphone. Custom markers (2D or 3D) seem to float in the air and can be clicked on for more information. You can even trigger an event like playing music when within a certain range of a location.

### Google Fusion Tables/ChartsBin/[OpenHeatMap](http://www.openheatmap.com/)

[![](img/fusiontablesscreenshot-300x168.jpg "fusiontablesscreenshot")](img/fusiontablesscreenshot.jpg)Input numerical values and areas to a spreadsheet and maps are produced where the areas are colored on a scale of the values

http://www.peteraldhous.com/CAR/Making_maps_with_Google_Fusion_Tables.pdf tutorial or http://support.google.com/fusiontables/topic/2592754?hl=en&ref_topic=27020 for google help files

### [Cartographer.js](http://cartographer.visualmotive.com/)

[![](img/cartographerjs-300x187.png "cartographerjs screenshot")](img/cartographerjs.png)Input data as JSON and interactive maps are produced.
You can also try d3 maps: http://bost.ocks.org/mike/map/


### OpenLayers/Google Maps/[Leaflet](http://leaflet.cloudmade.com/)

[![](img/How-to-participate-in-GovHack_html_512fcbe1-300x173.jpg "OpenLayers Screenshot")](img/How-to-participate-in-GovHack_html_512fcbe1.jpg)Display points and different layers. Leaflet is the easiest to use if you just want to show points with popups when clicked on.
There are wrappers for Google maps like http://hpneo.github.com/gmaps/examples.html and Mapstraction that can make it easier to use too.

If you need to customise the base map, try TileMill. See the [THE INSANELY ILLUSTRATED GUIDE TO YOUR FIRST DATA-DRIVEN TILEMILL MAP](http://dataforradicals.com/the-insanely-illustrated-guide-to-your-first-tile-mill-map/)

### NASA World Wind/Google Earth

[![](img/How-to-participate-in-GovHack_html_4dda24a4-300x261.jpg "WorldWind screenshot")](img/How-to-participate-in-GovHack_html_4dda24a4.jpg)Google Earth provides 3\. viewing of KML/GML files which represent points and shapes, both through a desktop application and a web plugin. These can be extended with interactive features that allow you to view by timeline or have animated tours between different points. You can also develop and customise your own viewer with the open source [NASA World Wind toolkit.](http://goworldwind.org/demos/)

###

# Tabular Data Tools

## Wrangling

### data access
#### Relational IO platform

- Datasets from the new data.gov.au CKAN repository
- Datasets from data.act.gov.au Socrata repository
- Access to NLAs Trove API
- Select data from data.nsw.gov.au (csv based)
- Datasets from data.vic.gov.au (csv based)
- Datasets from data.qld.gov.au (csv based)
- Access to web services such as Flickr image search, Twitter Search API, Bing search API, Google Search API, Google geocoding, Textrazor language analysis.

Teams will get their own read-only SQL-powered workspace that will give them access to all the above datasets / services allowing them to join and mashup data quickly and easily.


### conversion
Converting between formats like json/xml or csv can be done online with http://shancarter.com/data_converter/

### correction
Tabular data may have duplicate entries or incorrect formats (varying ways to enter dates/phonenumbers etc.). There are tools to quickly fix common problems:

[DataWrangler](http://vis.stanford.edu/wrangler/)/[Google Refine](http://code.google.com/p/google-refine/)

[![](img/google_refine_interface.png "google_refine_interface")](img/google_refine_interface.png)Clean up duplicate or inconsistent data entries.

For the more adventureous, [Dedupe](https://github.com/open-city/dedupe) allows you to train a computer to deduplicate similarly named entities automatically.

You can also use general purpose file manipulation tools like grep/awk/sed. These work best when you instruct them what search/change you need using Regular Expressions (RegEx) which you can learn more about at http://www.regexper.com/ and http://www.debuggex.com/?re=&str=

## Analysis

### Excel / Google Docs

Great basic analysis and viewing but older versions can be limited to 6500 rows. Eg [http://www.tcij.org/training-material/car/data-mining/3474](http://www.tcij.org/training-material/car/data-mining/3474) or [http://training.sunlightfoundation.com/module/data-visualizations-google-docs/](http://training.sunlightfoundation.com/module/data-visualizations-google-docs/)

 See this [Excel Data Journalism tutorial](http://schoolofdata.org/2013/04/24/using-excel-to-do-precision-journalism-an-update-from-the-school-of-data-journalism-in-perugia/) or [Excel addons for enhanced visualisation and analysis](http://www.clickz.com/clickz/column/2265548/5-free-excel-addins-to-help-digital-marketers-decipher-big-data)

### PostgreSQL/MySQL

[![](img/How-to-participate-in-GovHack_html_209ee972.jpg "SQL screenshot")](img/How-to-participate-in-GovHack_html_209ee972.jpg)Next step up, large datasets can be manipulated/extracted efficiently for example [http://www.postgresql.org/docs/8.4/static/tutorial-window.html](http://www.postgresql.org/docs/8.4/static/tutorial-window.html) , no built-in data visualisation though.

See this [SQL for lightweight data analysis tutorial](http://schoolofdata.org/2013/03/26/using-sql-for-lightweight-data-analysis/)

### R Statistical Language

[![](img/rstudio-windows-300x249.png "rstudio-windows")](img/rstudio-windows.png)
R provides a platform for advanced data analysis which can find and visualise trends even in large datasets. Some reference resources to learn the language [R basic statistics and graphs](https://people.ifm.liu.se/marjon/R_intro_solutions.pdf) [http://cran.r-project.org/doc/manuals/R-intro.html ](http://cran.r-project.org/doc/manuals/R-intro.html) [Guerilla Guide to R](http://www.r-bloggers.com/the-guerilla-guide-to-r/)
There are also some addons that provide graphical interfaces that make it easier to use such as Rattle [http://rattle.togaware.com/](http://rattle.togaware.com/) , RStudio [http://rstudio.org/](http://rstudio.org/) or Deducer [http://www.deducer.org/pmwiki/pmwiki.php?n=Main.DeducerManual](http://www.deducer.org/pmwiki/pmwiki.php?n=Main.DeducerManual)

  R's value lies in the wide array of libraries and addons you can use. For example [BigVis](http://blog.revolutionanalytics.com/2013/04/visualize-large-data-sets-with-the-bigvis-package.html) lets you visualise 10 Million data points in 5 seconds on an ordinary computer.
  Be sure to checkout the list of ["10 R packages I wish I knew about earlier"](http://blog.yhathq.com/puosts/10-R-packages-I-wish-I-knew-about-earlier.html)

ggplot2 is the typical graphical output of R and is very powerful. See these tutorials for instructions: http://chartsnthings.tumblr.com/post/36978271916/r-tutorial-simple-charts http://flowingdata.com/2012/12/17/getting-started-with-charts-in-r/
You can do some very creative plotting for example [putting pictures of Pokemon where their power level is on an X/Y axis](http://www.r-bloggers.com/to-plot-them-is-my-real-test/) or [a 2D plot with histograms for each dimension](http://www.r-bloggers.com/2d-plot-with-histograms-for-each-dimension-2013-edition/)

To share your analysis with the world you can use [KnittR](http://yihui.name/knitr/) which to make reports. These can include google widgets/charts/maps with the [googlevis](http://www.r-bloggers.com/googlevis-0-3-2-is-released-better-integration-with-knitr/) package.

  For advanced interactive visualisation you can use [Shiny](http://www.rstudio.com/shiny/) which allows visitors to you page to adjust the R charts.
  Examples of Shiny use include:
   http://blog.ouseful.info/2012/11/28/quick-shiny-demo-exploring-nhs-winter-sit-rep-data/ https://github.com/timelyportfolio/shiny-d3-plot https://github.com/trestletech/shiny-sandbox/tree/master/grn



## Visualisation

### WYSIWYG visualisation tools

[Tableau Desktop](http://www.tableausoftware.com/)
Create visualisations from various data formats by dragging and dropping. Free trial available on website. [![](img/Tableau-Screenshot-300x190.jpg "Tableau Screenshot")](img/Tableau-Screenshot.jpg)

See this [Tableau Desktop Tutorial](http://schoolofdata.org/2013/04/27/ddjschool-tutorial-analysing-datasets-with-tableau-public/)

There are also web based tools like [plot.ly](http://plot.ly) and [infogr.am](http://infogr.am)

### Web page (Javascript) graphs
[Flotr2](http://www.humblesoftware.com/flotr2/)/[Google Chart Tools](https://developers.google.com/chart/)
[![](img/How-to-participate-in-GovHack_html_m11006fce-300x199.jpg "flotr2 screenshot")](img/How-to-participate-in-GovHack_html_m11006fce.jpg)Javascript based charts for webpages.
http://www.polychartjs.com/ Allows facetting and easy use of JSON data sets.

### D3.js (Data-Driven Documents)

[![](img/How-to-participate-in-GovHack_html_m90d8020-300x277.jpg "d3 screenshot")](img/How-to-participate-in-GovHack_html_m90d8020.jpg)Javascript visualisations that are more interactive or intricate than charts. Can be hard to learn but there are examples and easier to use premade visualisations such as [word clouds](http://www.jasondavies.com/wordcloud/), [realtime filtering of barcharts](http://square.github.com/crossfilter/), or [bubble trees for comparing amount sizes](https://github.com/okfn/bubbletree).
See these tutorials to get started: http://datadrivenjournalism.net/resources/data_driven_documents_defined http://bost.ocks.org/mike/chart/


# Unstructured (Text) Data Tools
Most of the world's data isn't structured because it is contained in documents (webpages, tweets etc.). Sometimes it is possible to structure it, sometimes there are tools that are better suited it unstructured data.
[Text analysis can be very valuable for transparency](http://overview.ap.org/blog/2013/05/video-text-analysis-in-transparency/)
## Wrangling
For extracting data from webpages, checkout Scraperwiki pytemplate scrapy

PDFs - http://source.mozillaopennews.org/en-US/articles/introducing-tabula/ for text PDFs or http://www.reporterslab.org/dochive/ for images (common in scanned document PDFs)

If there is no way to form a table structure to be able to apply tabular data techniques , you need a more sophisticated analysis as detailed below.

## Analysing
Natural Language Processing libraries like OpenNLP for Java or NLTK / [Pattern](https://github.com/clips/pattern) for Python allow you to extract information from text. For example, [finding the important keywords in a sentence automatically](http://thetokenizer.com/2013/05/09/efficient-way-to-extract-the-main-topics-of-a-sentence/)

One of the most useful techniques found in these libraries is Named entity recognition which extracts the subjects named in a piece of text. You can find online services that will interpret text for you without having to install any libraries or write any code such as [Yahoo Content Analysis](http://developer.yahoo.com/contentanalysis/) or [TextRazor](http://www.textrazor.com/).

A search engine just for your dataset can also help. Tools like Apache Lucene/Solr or ElasticSearch can help you index and search large datasets in new ways.

For light weight analysis, try R or Ruby: http://www.r-bloggers.com/simple-text-mining-with-r/ http://blog.josephwilk.net/ruby/latent-semantic-analysis-in-ruby.html

## Visualising

You can make word trees of blocks of text, webpages or twitter account and share them http://www.jasondavies.com/wordtree/

"Overview automatically sorts thousands of documents into topics and sub-topics, by reading the full text of each one." Simply make a CSV file with two columns, id and text. 10,000 documents is a good limit for the current state of the system. https://www.overviewproject.org/

For larger document sets or for alternative visualisations, try Jigsaw a desktop based application. http://www.cc.gatech.edu/gvu/ii/jigsaw/



# Graph (relationships and networks) Data Tools
Graph data can be very valuable for finding communities, hubs and connections between entities (the 6 degrees of separation). This is through the techniques of Social Network Analysis.

You can also find "linked data", [tools for use are listed here](http://logd.tw.rpi.edu/tools_technologies) as well as [sgvizler](http://code.google.com/p/sgvizler/) for sparql graphing, [RelFinder for RDF exploration](http://www.visualdataweb.org/relfinder.php) and [Flint SPARQL editor](http://openuplabs.tso.co.uk/demos/sparqleditor). For more linked data tools, see the [govcamp useful tools wiki](http://govcampau.wikispaces.com/useful+tools)

## Analysis

### R
R statistical language can be used for social network analysis too http://www.slideshare.net/ianmcook/social-network-analysis-in-r http://is-r.tumblr.com/post/38240018815/making-prettier-network-graphs-with-sna-and-igraph


### Graph Databases

[![](img/webadmin-data-300x127.png "Neo4\. web admin screenshot")](img/webadmin-data.png)Help understand relationships - how is X connected to Y and via what other entities they both are connected to.
Imports and exports can be done by [writing a java program](http://www.slideshare.net/maxdemarzi/etl-into-neo4j) or [spreadsheet](http://blog.neo4j.org/2013/03/importing-data-into-neo4j-spreadsheet.html) (for example, [Gmail contacts](http://blog.neo4j.org/2013/04/gmail-email-analysis-with-neo4j-and_24.html)). The fastest way to import data into Neo4j is the [REST batch import API](http://docs.neo4j.org/chunked/milestone/rest-api-batch-ops.html)

There are other graph databases worth considering like [OrientDB](http://www.orientdb.org/) or [Titan](http://thinkaurelius.github.com/titan/)
Major graph databases like these can be accessed using a common syntax called Gremlin or by writing a simple Java/Python/Ruby application. Queries can be tested in the built in data browser.



### [NetworkX](http://networkx.lanl.gov/index.html)

[![](img/chess_masters-300x300.png "NetworkX")](img/chess_masters.png)

NetworkX is a social network analysis library for python. Many advanced analyses built in like finding communities within a graph. Also good for converting data into graphs.

See this [introduction to Social Network Analysis with NetworkX](http://www.cl.cam.ac.uk/~cm542/teaching/2011/stnapdfs/stna-lecture11.pdf)


## Visualisation

Proper visualisation of networks can be hard as described in this presentation [Visualising Networks: Beyond the Hairball](http://www.slideshare.net/OReillyStrata/visualizing-networks-beyond-the-hairball)

###  Tree/Hierarchy visualisation
Sometimes when you analyse a network what you actually have is a tree/hierarchy with no interconnections.
In these cases, it's faster and more visually effective to use a Tree visualisation.
You can run [TreeViz](http://www.randelshofer.ch/treeviz/) locally or use [d3 on a website](http://bl.ocks.org/mbostock/4063550), [step by step instructions for creating tree data for d3](http://blog.pixelingene.com/2011/07/building-a-tree-diagram-in-d3-js/)
d3 also includes [treemaps - bubbles inside bubbles](http://bl.ocks.org/mbostock/4063530)

### Flow Visualisations
Sometimes it's more about the magnitude (money? amount of communication?) of the connections between nodes.
A sankey diagram can easily visualise this http://bost.ocks.org/mike/sankey/

### NodeXL for Microsoft Excel

 [NodeXL](http://nodexl.codeplex.com/) allows you to visualise networks/graphs quickly inside Excel.

### [Graphviz](http://www.graphviz.org/)

[![](img/How-to-participate-in-GovHack_html_7579906d-300x184.png "Graphviz Screenshot")](img/How-to-participate-in-GovHack_html_7579906d.png)Classic directed graph visualisation tool, can even [generate images online without installing](http://ashitani.jp/gv/) or use in webpages with [javascript port of software](http://code.google.com/p/canviz/). File format ["dot" very easy to learn](http://en.wikipedia.org/wiki/DOT_language)

### Gephi

[![](img/How-to-participate-in-GovHack_html_74d01d05-300x195.jpg "Gephi Screenshot")](img/How-to-participate-in-GovHack_html_74d01d05.jpg)Desktop graph editor and renderer. Many good automatic layout algorithms even for very large graphs.

Many tools can produce input files for Gephi including Graph Databases and [a Excel Spreadsheet to map twitter social networks](http://dfreelon.org/2013/04/26/spreadsheet-converts-tweets-for-social-network-analysis-in-gephi/)

If you need to distribute or customise Gephi-like functionality [Cytoscape](http://www.cytoscape.org/) provides a framework (looks much like Gephi user interface) to develop advanced interactive network visualisations in Java, including filtering and clustering.

### [sigma.js](http://sigmajs.org/)

[![](img/How-to-participate-in-GovHack_html_m6006eaf3-300x130.jpg "Sigma.js Screenshot")](img/How-to-participate-in-GovHack_html_m6006eaf3.jpg)Javascript graph viewer for displaying graphs on webpages without any other plugins/applications required. It can use GEXF files exported from tools like neo4j, gephi or NetworkX.
 It's also possible to [filter/search the displayed network in sigma.js](https://github.com/jacomyal/osdc2012-sigmajs-demo)

[Cytoscape.js](https://github.com/cytoscape/cytoscape.js) can also be used for interactive web-based network visualisation.
