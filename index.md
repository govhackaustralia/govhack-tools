# The GovHack Toolkit

This page provides all the information you'll need to prepare your GovHack entries, and a wealth of links to tools, techniques, and libraries to help you build an awesome project. You can use these resources to build any sort of project - mobile apps, web apps, APIs, data visualisations/infographics, and more. You're not limited to using the resources and tools in this page, but your actual entries must meet the [competition eligibility rules](http://www.govhack.org/competition-rules-code-of-conduct/).

If you're new to GovHack (or are just a little unclear on the process involved) we strongly encourage you to read the [Anatomy of GovHack project](#anatomy-of-govhack-project) section at the top of this page to find out all about the process of registering, preparing, and submitting your entry.

Beyond that, you'll find a range of useful resources from [technical considerations]() in publishing your entry, resources for working with [geospatial]() or [tabular]() data, to extracting good data from [messy unstructured sources](), and much more besides.

> @TODO Links


# Document @TODOs
* GovHack Toolkit or GovHack Guide?
* Loot anything good in the last version that hasn't yet been pulled across
* Does it make more sense as two separate documents: One a guide to the GovHack competition, one a list of resources?
* Run it past some participants for input
* Helen will also review for writing, consistency, and all of that good stuff
* NationalMap, Mashery, and Socrata got junked - they belong on the Data page.
* Is there a better place / pitch for the Data Scientist section?
* The Web Application section got junked. Can advise about Bootstrap, Foundation, et al. somewhere else
* Where to put advanced webby stuff e.g. https://groups.google.com/a/chromium.org/forum/#!topic/blink-dev/UdGlL9PtBLo
* Check for consistency of terms used (entries vs projects, et cetera)
* Screenshots and company/project logos
* Integrating and formatting for govhack.org
* <a href="#">Buttons? ></a>
* Fix formatting on the YouTube videos
* Rename "Technical Considerations"?
* Review content (e.g. tools) that weren't directly reworded
* Review tools sections for newer tools!
* The web and mobile examples sections were junked (inc. The Open Budget). Are they useful in this context?
* Review "Developer tools for your computer"
* Stick Vagrant/Docker/Fig somewhere
* Talk with H about porting some of the perth.govhack.org content over to a sort of GovHack Orientation Thingo (along w/ the top of this doc)
* Make it easier / more prominent to leave feedback
* Run past a couple of participants for feedback on layout, UX, and content.
* Something about spatial for Android and iOS
* Add http://mapstarter.com/
* Highcharts et cetera
* Plot.ly, Create.ly, et cetera
* Loot http://geothought.blogspot.com.au/2015/03/review-of-foss4g-na-2015.html for more shiny spatial tools. Oh so many shiny!
* Link the data viz and web mapping sections.
* Mention https://github.com/sorrycc/awesome-javascript and stuff
* FME
* http://community.pentaho.com/projects/data-integration/
* Python geospatial viz http://ioam.github.io/holoviews/
* [Datawrapper](https://datawrapper.de/) Create charts and maps in just four steps. This tool reduces the time you need to create visualizations from hours to minutes.
* OpenRefine in "Scraping data"
* High-level link to https://github.com/quozd/awesome-dotnet for various popular languages ("If you can't find..look here"). Orrrrr should we - longer-term - just contribute to those rather than making so many words around them in the toolkit?
* Ping Nick Evershed re the visualisation sections


# Anatomy of a GovHack project

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


# Mentors

GovHack is supported by an awesome group of mentors from a wide range of disciplines who've volunteered to provide assistance to teams. We'll also have mentors who provide insider advice about the datasets (data custodians), and others who have expertise in a wide range of technologies and skills (tech mentors) to help you and your team get the best outcomes possible during the competition.

Check out the [GovHack Mentors page](http://www.govhack.org/mentors/) for more information on how to get in touch with your awesome mentors.

> "Help me, Obi Wan Kenobi. You're my only hope." -- Princess Leia


# Technical considerations

## Putting your project on the web

We've already spoken about how you can submit your project source materials, but you'll more than likely also need a place to host your application on the web.

### Virtual servers

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

Lastly, we have to mention [Heroku](https://www.heroku.com/) and its great PAAS offerings.


### Static website hosting

If your project, by virtue of its nature, doesn't already have a web presence (e.g. it's a mobile app or a game) then you're very likely going to need host a static website somewhere (i.e. A pile of HTML, CSS, and JavaScript) to give your project a home.

Probably the easiest and fastest way to achieve that at the moment is via [GitHub Pages](https://pages.github.com/) that hosts a website straight out of your GitHub repository. In addition to that, GitHub Pages provides the option to generate a project site from a collection of pre-built themes and to point your own custom domain at your site.

If you prefer to start from scratch (on GitHub Pages or elsewhere) [Bootstrap](http://getbootstrap.com/) and [Foundation](http://foundation.zurb.com/) are the two preeminent responsive frontend web frameworks around these days that cut away a lot of the work of making a site look pretty so you can concentrate on content (and your awesome GovHack project).

Beyond GitHub you could also look at hosting your site for free on [Azure](http://azure.microsoft.com/en-us/documentation/articles/web-sites-publish-source-control/) or creating a static site [on Heroku](http://www.lemiffe.com/how-to-deploy-a-static-page-to-heroku-the-easy-way/).


## Having the right tools for the job

So by now you've got your project idea taking shape, and have probably thought a little about your hosting infrastructure, but how do you turn this idea into reality and what tools do you need?

Well, given the greatly compressed timespan of GovHack anything that can help keep you as responsive flexible - dare I say, [agile](http://www.allaboutagile.com/what-is-agile-10-key-principles/). Use the physical resources you have to hand - pens, butchers paper, post-it notes, a whiteboard (if you can purloin one) to help give your project planning a tangible, physical presence.

> @TODO An Agile image

### Source control and issue tracking

We're assuming that everyone [already uses some form of source control system](http://kevgriffin.com/the-non-techie-guide-to-source-control/) (Git, Mercurial, maybe SVN) already. If not, get thee to [GitHub](https://github.com/), [GitLab](https://about.gitlab.com/), or [Bitbucket](https://bitbucket.org/) and grab a copy of their respective desktop applications if your code editor doesn't integrate that particular flavour of version control (it probably does).

For provider-independent source control clients both the [Tortoise family](http://tortoisesvn.net/) of software and [SourceTree](http://www.sourcetreeapp.com/) are well worth a look.

We've lumped issue tracking for bugs, feature requests, research questions, et cetera in here as well just because almost all good hosted source control providers these days build in some sort of issue trackig functionality. No need to reinvent the wheel or go elsewhere!

### Project management

Honestly, your best project management tool for GovHack is probably a whiteboard, or butchers paper blutacked to a wall, with different coloured post-it notes. It gives your an immediate, physical, tangible thing to get up and interact with, look at, scribble on, and easily rearrange that no digital system is going to come close to giving you.

But if you really want a digital solution then take a look at [Pivotal Tracker](http://www.pivotaltracker.com/), [Trello](https://trello.com/), or [Matterhorn](https://matterhorn.io/).

### Code editors

You've all got your own favourite code editor or [IDE](http://en.wikipedia.org/wiki/Integrated_development_environment "Integrated development environment"), right? A hackathon is probably not the best time to learn a whole pile of new keyboard shortcuts, but if you're looking for inspiration go and check out [Atom](https://atom.io/), [Orion](http://eclipse.org/orion/), [Sublime Text 3](http://www.sublimetext.com/3), and [Brackets](http://brackets.io/).

With honourary mentions going to [Eclipse](https://eclipse.org/downloads/) and [Visual Studio](http://www.visualstudio.com/) if you're after a larger, more fully-featured editor that excels at particular languages or ecosystems.


# Preparing for GovHack

Whilst you're not allowed to actually work on your project until the weekend of GovHack itself that doesn't mean you can't be preparing and learning new skills and tools beforehand.

## Become a data scientist in an hour
> "Look at me: still talking when there's [data] science to do!" -- GLaDOS

There's so much more to working with data than taking your nicely formatted CSV file and throwing it at a software package that will generate pretty graphs, or widgets, or maps out of it. That's just the easy bit - what does your data **actually** mean?

There are three basic rules to follow when doing data science:

1. *Have a hypothesis* - Always start with a basic hypothesis and keep it forefront in your mind. Don't let yourself get distracted by the shiny tools and end up realising you've made something pretty that doesn't actually answer your original question or prove your hypothesis.

2. *Have the right tools* - Find the right tools for the job - keep on scrolling down for a wealth of tools for dealing with all sorts of different types of data.

3. *Analyse and present your findings* - Be upfront and honest in presenting your project. Did you meet your original goal? Was your original hypothesis valid? How did you iterate to get to the final version?

If you'd like to strengthen your knowledge in any of the facets of data science check out these handy resources:

### Data Science
* The *"Understanding Data"* and *"Delivering Data"* chapters of the (free) [Data Journalism Handbook](http://datajournalismhandbook.org/).

### Visualisation
* [Visualize This: The FlowingData Guide to Design, Visualization, and Statistics](https://booko.com.au/works/955519) by Nathan Yau
* [Data Analysis with Open Source Tools](https://booko.com.au/works/1168452) by Philipp K. Janert
* [Data and visualization blogs worth following](http://flowingdata.com/2012/04/27/data-and-visualization-blogs-worth-following/) (FlowingData)

### Statistics
* [Think Stats: Probability and Statistics for Programmers](https://booko.com.au/works/3475110)

> [![](img/How-to-participate-in-GovHack_html_m6a65720f-300x199.gif "Data Journalism Diagram")](img/How-to-participate-in-GovHack_html_m6a65720f.gif)</dt>
> Illustration from Data Journalism Handbook, CC BY-SA 3.0</dd>

## Hone your programming skills

> @TODO


## Designing for humans

> @TODO


## On the importance of APIs

There's a good chance that your project is going to need some sort of API to connect up your backend layer or data store to your frontend interface (be it web-based or otherwise). But APIs are hard, right? Not any more! Where once we used to have to roll our own APIs and handle the lowest level operations ourselves now there are a bevvy of tools and resources to help you make an awesome API quickly.

### APIs as a Service

Services like [Mashery](http://www.mashery.com/), [Apigee](https://apigee.com/about/), [ApiAxle](http://apiaxle.com/), [3scale](http://www.3scale.net/) provide a quick and easy means to bootstrap your API and provide a range of neat features on the side like analytics and easy inspection and diagnosis of API errors.

### Building and designing your own API

If you need to dig a little further down and actually build your own API it's worth taking a bit of time to think about the design of your API. There are some great resources are such as the API Evangelist's guide to [Providing and Consuming APIs](http://apievangelist.com/) and Atlassian's [REST API Design Guidelines](https://developer.atlassian.com/docs/atlassian-platform-common-components/rest-api-development/atlassian-rest-api-design-guidelines-version-1).

[apiblueprint](http://apiblueprint.org/) is well worth a look as a tool that provides both a means of quickly designing an API, as well as automatically generating nice looking documentation.

> Flask?

#### Documenting your API

Documenting your API well is crucial if you expect anyone else to use it (including other developers on your team) and the tools available are myriad.

For REST APIs in general check out [Swagger](http://swagger.io/) or [iodocs](https://github.com/mashery/iodocs). In PHP-land [Symfony](http://symfony.com/) (see also - [REST APIs with Symfony2: The Right Way](http://williamdurand.fr/2012/08/02/rest-apis-with-symfony2-the-right-way/)) and [Slim](http://www.slimframework.com/) are worth a look

In Rails-land take a look at [Apipie-rails](https://github.com/Apipie/apipie-rails).


# Data visualisation and infographics for fun and profit

Data visualisation encompasses a broad range of fields, techniques, and tools for creating visual representation of data for human consumption. The geographic and tabular data fields have rich toolsets for visualising their particular types of data, so keep on scrolling if you're after some specific tools.

For now, read on for some of the theory behind data visualisation, some material to inspire, and lists of visualisation tools.

### The theory of it all

For advice on the use of colour check out Paul Tol's advice on [good colour schemes](http://www.r-bloggers.com/the-paul-tol-21-color-salute/) and the Fink Lab's [collection of colour schemes](http://flinklabs.com/labs/colors/).

The School of Data has a set of [data visualization guidelines](http://schoolofdata.org/2013/04/26/data-visualization-guidelines-by-gregor-aisch-international-journalism-festival/) by Gregor Aisch that are worth a read.

So too are the slidedecks for [Stanford CS448B: Visualisation](http://www.graphics.stanford.edu/courses/cs448b-04-winter/), who have now moved to be the University of Washigton's [Interactive Data Lab](http://idl.cs.washington.edu/).

Lastly, Juice Analytics has good roundup at [Data Storytelling: The Ultimate Collection of Resources](http://www.juiceanalytics.com/writing/the-ultimate-collection-of-data-storytelling-resources/).

### Resources for inspiring

If you're stuck for inspiration check out the [Sunlight Foundation's Tumblr](http://sunfoundation.tumblr.com/) or Design Your Way's post of [23 inforgraphics to inspire](http://www.designyourway.net/blog/inspiration/data-visualization-designs-that-should-inspire-you-23-infographics/).

Also worth a look are [Information is Beautiful](http://www.informationisbeautiful.net/), [infosthetics](http://infosthetics.com/), and [Visual Complexity](http://www.visualcomplexity.com/vc/).

And finally Avinash Kaushik's post on [Data Visualization Inspiration: Analysis To Insights To Action, Faster!](http://www.kaushik.net/avinash/data-visualization-inspiration-analysis-insights-action-faster/) uses six short stories of data visualisation done well to inspire.

### Resources for building

If you're not sure exactly what tool you're after and like staring at lists of tools waiting for something to leap out at you then check these out!

* Visualising Data's [Essential Collection of Visualisation Resources](http://www.visualisingdata.com/index.php/2011/07/part-6-the-essential-collection-of-visualisation-resources/)
* Drawing By Number's [Visualisation Tools and Resources](https://drawingbynumbers.org/toolsandresources)
* datavisualisation.ch's [selection of tools for visualisation](http://selection.datavisualization.ch/)

#### Web visualisation libraries

We couldn't mention data vis without giving a nod to [D3.js](http://d3js.org/) (Data Driven Documents) for creating interactive and amazingly detailed visualisations - find out more about [Why D3.js is So Great for Data Visualization](http://blog.visual.ly/why-d3-js-is-so-great-for-data-visualization/). Bewarned though, the learning is quite steep as you're starting out, but the web is full of thousand of D3.js examples that you should have no problems hacking into the shape you want (such as [word clouds](http://www.jasondavies.com/wordcloud/), [real-time filtering of barcharts](http://square.github.com/crossfilter/), and [bubble trees for comparing sizes](https://github.com/okfn/bubbletree), and [many, many more](http://bl.ocksplorer.org)). Check out these couple of great tutorials [Towards Reusable Charts](http://bost.ocks.org/mike/chart/) and [Data-Driven Documents, Defined](http://datadrivenjournalism.net/resources/data_driven_documents_defined).

Beyond D3.js have a look at [Google Charts](https://developers.google.com/chart/), [jit](http://philogb.github.io/jit/), [three.js](http://threejs.org/), [polychart.js](http://www.polychartjs.com/), [PhiloGL](http://www.senchalabs.org/philogl/), and [Flotr2](http://www.humblesoftware.com/flotr2/) for a range of great web vis libraries.

#### Visualisation as a Service

For some quick out-of-the-box charting [plot.lt](https://plot.ly/) and [infogr.am](https://infogr.am/) both offer great charting as a service tools for easy prototyping without having to write any code.

#### Desktop tools

If you're playing with data vis on the desktop you'll find a lot of the tools are commercial in nature, but [Tableau](http://www.tableau.com/) is worth a look (as well as the School of Data tutorial [Analysing Datasets with Tableau Public](http://schoolofdata.org/2013/04/27/ddjschool-tutorial-analysing-datasets-with-tableau-public/)).

### Bonus: Android native charting libraries

If you're in need of toolts for building charts and graphs on android have a look at [Androidplot](http://androidplot.com/), [ChartDroid](https://code.google.com/p/chartdroid/), or [achartengine](https://code.google.com/p/achartengine/).


# Mobile development

### Device agnostic mobile web development

If your project involves development for mobile devices you've got a choice to make: take a web-based approach or pick a platform and develop a native app. The former will likely be the quicker approach (unless you're a gun Android/iOS developer already) and give you a chance of getting something workable hacked together in time.

On the hybrid web-native side of the equation [PhoneGap](http://phonegap.com/), [Cordova](http://cordova.apache.org/), and [Ionic](http://ionicframework.com/) are all excellent tools for writing apps in HTML, CSS, and JavaScript that can be packaged up to run as native apps on any device.

If you want to stick with the pure web app approach [Sencha Touch](http://www.sencha.com/products/touch) and [jQuery Mobile](http://jquerymobile.com/) are both easy to pick up and use.

### Backend frameworks for native apps

Going down the path of native application development can give you a really slick looking project, but it does give you a lot more to consider than a simple web app might. [Helios](http://helios.io/) and [Parse](https://www.parse.com/) are two backend framworks that'll take care of analytics, notifications, social sign on, and more.


# Working with geographic data and maps

Geographic data is any dataset that has a location element to it - usually provided as latitude and longitude coordinates - that describes a set of points, lines, or polygons, or a picture (raster) with other non-geographic attributes attached to them. A lot of datasets fall under the category of geographic data (aka spatial data) - from bus stops, postcodes, and cycle paths to polling places, satellite or aerial photography, and mineral deposits.

Google Maps [may have popularised mapping](http://www.theguardian.com/technology/2015/feb/08/google-maps-10-anniversary-iphone-android-street-view), but actually working with the data that underlies a map requires some specialist tools and knowledge.

If you're new to working with spatial data then we **highly recommend** reading Tom MacWright's truly excellent [mapschool: a free introduction to geo](http://mapschool.io/) site. You can skim through it in about half an hour and get up to speed on the basics of spatial data, learn about the common data types, and likely pick up some knowledge that will save you a lot of frustration down the line.

> @TODO GeoJson/TopoJson, GitHub viewing
> @TODO Principles of components need for spatial [here](http://georabble.org/2012/05/31/the-boundary-mappers-cookbook/)

### Finding datasets

> @TODO Link to relevant spatial section of the GovHack Data page
>
> Point at the ABS Geography site (asga2pgsql), Census
>
> There are a variety of base layers like [AGRI aerial imagery of Australia](http://agri.openstreetmap.org/) or WMS services like [GIS Lab WMS](http://irs.gis-lab.info/) or the [OSM TMS Service](http://www.gdal.org/frmt_wms_openstreetmap_tms.xml). Check out the [Geoscience Australia Geo Dataset search and preview](http://www.ga.gov.au/search/index.html#/showMap). ASGS from ABS including suburbs/postcodes [Andrew Harvey](https://andrewharvey4.wordpress.com/2012/04/15/loading-the-asgs-into-postgresql-in-preperation-for-the-abs-2011-census-data-release/). You can also get KML layers for various statistical measures on the [ABS TableBuilder tool](http://www.abs.gov.au/websitedbs/censushome.nsf/home/tablebuilder).
>
> @TODO GA FIND

### Converting between data formats

So you've found the dataset you want, but it's in some bizarre and possibly arcane format (Shapefiles, MapInfo TAB file - I'm looking at you! [on behalf of the entire spatial industry I apologise for these two formats still existing]) and you want to convert it to something more developer friendly and modern (e.g. GeoJSON, CSV, KML).

For small datasets (< 10mb) [MyGeoData](http://converter.mygeodata.eu/) will let you convert between most formats. For anything beyond 10mb you'll want to reach for the [GDAL](http://www.gdal.org/ "Geospatial Data Abstraction Library") command-line tools - GDAL is a fantastic open source project that has been embedded in a lot of the software in the spatial world. To translate vector data in GDAL reach for the [ogr2ogr](http://www.gdal.org/ogr2ogr.html) command (if you're on Windows [ogr2gui](http://www.ogr2gui.ca/en/index.php) is available too), for raster (picture) data [gdal_translate](http://www.gdal.org/gdal_translate.html) will convert almost anything to almost anything else.

If command-line tools aren't your thing skip down a bit to the section on QGIS for a cross-platform GUI built on, amongst other things, GDAL.

Oh - and there are GDAL bindings available for [Perl](http://trac.osgeo.org/gdal/wiki/GdalOgrInPerl), [Python](http://trac.osgeo.org/gdal/wiki/GdalOgrInPython), [Java](http://trac.osgeo.org/gdal/wiki/GdalOgrInJava), [C#/.NET](http://trac.osgeo.org/gdal/wiki/GdalOgrInCsharp), [Ruby](http://trac.osgeo.org/gdal/wiki/GdalOgrInRuby), and [R](http://trac.osgeo.org/gdal/wiki/GdalOgrInR). Scroll on down to the [Language bindings](#Language_bindings) section for more suggestions of libraries to use in your favourite language.

### Geocoding - turning an address into coordinates

Your geocoding needs will likely fall into one of two categories: Needing to geocode an address provided by the user vs needing to batch geocode a set of addresses in a dataset.

The School of Data has two great introductory posts [Geocoding Part 1: Introduction to Geocoding](http://schoolofdata.org/2013/02/19/geocoding-part-i-introduction-to-geocoding/) and [Geocoding Part 2: Geocoding Data in a Google Docs Spreadsheet](http://schoolofdata.org/2013/02/19/geocoding-part-ii-geocoding-data-in-a-google-docs-spreadsheet/).

In the former case, your quickest and easiest option is to make use of the [Google Geocoding API](https://developers.google.com/maps/documentation/geocoding/) built on top of Google Maps. Examples are available of a [simple geocoding call](https://developers.google.com/maps/documentation/javascript/examples/geocoding-simple) and an [address search with auto-complete functionality](https://developers.google.com/maps/documentation/javascript/examples/places-searchbox). Caveat emptor - the [Google Maps Terms of Service](https://developers.google.com/maps/terms) do require that the results of geocoding requests are displayed in some fashion on top of a Google Map and limits you to 2,500 requests/day.

There are some free / open source RESTful APIs for geocoding, which you could happily either wrap a UI around or issue batch requests to yourself. These include the [MapQuest Nominatim Search API](http://developer.mapquest.com/web/products/open/nominatim), the [MapBox Geocoding API](https://www.mapbox.com/developers/api/v3/geocoding/), and the [GeoNames Search API](http://www.geonames.org/export/web-services.html).

If you're after a more set-and-forget geocoding service that will geocode a whole file of addresses with having to fiddle with making your own API calls then take a look at [CartoDB's](http://docs.cartodb.com/cartodb-editor.html#geocoding-data) geocoding functionality - and [Google Fusion Tables](https://support.google.com/fusiontables/answer/1012281?hl=en) is still kicking around in "experimental" mode ([tutorial here](http://mdl.library.utoronto.ca/guides-help/geocoding-tutorial-using-google-fusion-tables)).

Lastly, the Python library [geopy](https://github.com/geopy/geopy) provides a convenient API wrapper around almost every geocoding service known to humanity.

### Analysis

Unless the spatial part of your project is only for window dressing you're probably going to need to do some analysis between it and other datasets. For instance - you might need to group one of your spatial datasets (like public transport usage) by another (like suburbs) to generate some summary statistics on usage.

You *could* hack together some code yourself to work it out, but really there are some far better and far far more powerful options available to you.

#### PostGIS

[PostGIS](http://postgis.net/) is an extension for [PostgreSQL](http://www.postgresql.org/) providing spatial capabilities for both vector and raster data. In spatial database-land it is unequalled in the [sheer range of functions](http://postgis.net/docs/reference.html) it makes available, their ease of use, and speed (it's written in C).

Seriously, don't waste your time with any other database.

[Getting up and running is easy](http://postgis.net/install) on any platform, with installers available for Windows, `brew install` or [Postgres.app](http://postgresapp.com/) on OSX, and packages available for all of the major Linux distros. For those inclined to Docker there are [Dockerfiles available](https://registry.hub.docker.com/search?q=postgis&searchfield=).

If you need more than `psql` on the command-line, [pgAdmin](http://www.pgadmin.org/) is available across all operating systems (and often comes bundled with PostgreSQL anyway).

Oh - and [Amazon RDS for PostgreSQL](http://aws.amazon.com/rds/postgresql/) comes with PostGIS already installed if for some reason you need that level of scalability.

##### MySQL? SQL Server? et al.

These are not the spatial databases you're looking for...

Ok, fine - **technically** you do have spatial functionality in some of the other popular databases.

[SQL Server](https://msdn.microsoft.com/en-us/library/bb964712.aspx), [MySQL](http://dev.mysql.com/doc/refman/5.0/en/spatial-extensions.html), [Azure SQL](http://www.sqlskills.com/blogs/bobb/azure-sql-database-v12-preview-spatial-fully-functional/), [GeoDB](https://github.com/jdeolive/geodb) or [HatBox](http://hatbox.sourceforge.net/derbyquickstart.html) for [H2](http://h2database.com/), [neo4j-spatial](https://github.com/neo4j-contrib/spatial) for neo4j, and [DynamoDB](https://aws.amazon.com/blogs/aws/new-geo-library-for-dynamodb/) all have spatial support of some kind.

Quite [a few words](http://stackoverflow.com/a/22576304) have [been written](http://www.bostongis.com/PrinterFriendly.aspx?content_name=sqlserver2008_postgis_mysql_compare) comparing [spatial databases](http://www.bostongis.com/PrinterFriendly.aspx?content_name=sqlserver2008r2_oracle11gr2_postgis15_compare), so you might want to take a look before committing yourself to one or another.

tl;dr Avoid MySQL for anything spatial!

#### QGIS

PostGIS may give you the heavy lifting power to do analysis, but staring at database rows trying to make sense of your results can be made so much easier by visualising them. Enter [QGIS](http://www2.qgis.org/en/site/) - a free and open source cross-platform Geographic Information System with the ability to create, edit, visualise, analyse, and publish spatial information.

Thanks to being built on top of [GDAL](http://www.gdal.org/ "Geospatial Data Abstraction Library") (amongst others) QGIS is capable of reading and writing almost any format of spatial data that you can throw at it - including direct connections to PostGIS databases.

> @TODO ArcGIS, GRASSGIS, uDIG, et cetera

#### Language bindings: R (Arrr!), Python, .NET, Ruby, et al.

> @TODO Rename? Need to fix the link in the "Converting between data formats" section if so.

If you need to delve down into working with spatial data at the code-level you've got a really rich set of tools at your disposal.

##### Python

It's not too much of an exaggeration to say that Python is **the** language for doing anything spatial. It has an incredibly rich array of good libraries - far too many to list here - for analysing and manipulating every kind of spatial data under the sun, as well as the means of connecting in to any flavour of spatial data store you care to throw at it.

For some general words on working with spatial data in Python check out [Manipulimization of whatchamacallems?](http://sgillies.net/blog/986/manipulimization-of-whatchamacallems/) and [GIS with Python, Shapely, and Fiona](http://www.macwright.org/2012/10/31/gis-with-python-shapely-fiona.html).

And even if Python isn't exactly your cup of tea it's still very much worth a look if it can fit anywhere in your workflow.

For working with vector data check out [Shapely](http://toblerity.org/shapely/manual.html) (manipulation and querying geometry), [Fiona](https://github.com/Toblerity/Fiona) (a Python API into GDAL/OGR), [pysal](http://pysal.readthedocs.org/en/latest/) (for spatial analysis).

On the raster side of the equation head straight to [Rasterio](https://github.com/sgillies/rasterio).

Honourary mentions to [pandas](http://pandas.pydata.org/) (if you need to munge and otherwise play with GeoJSON or CSV files), and [cartopy](http://scitools.org.uk/cartopy/documentation.html) and [nodebox-opengl](http://www.cityinabottle.org/nodebox/) if you need to make pretty pictures or animations.

There's a more complete list of a bunch of other great Python spatial libraries [over here](http://spatialdemography.org/essential-python-geospatial-libraries/) that's well worth a read.

We should mention - pretty much anything you can do here you can also achieve with the tools available in a GUI in an application like QGIS.

##### Java

Ok, so we may have exaggerated Python being the only awesome language for spatial data. Java is almost equally as awesome as Python, with a similarly rich ecosystem of libraries and applications ([GeoServer](http://geoserver.org/) the popular spatial data server is primarily Java-based).

For playing with vectors cast your eyes over [Spatial4j](https://github.com/spatial4j/spatial4j) (general purpose geospatial data library), [JTS (Java Topology Suite)](http://www.vividsolutions.com/jts/JTSHome.htm) (do things with geometry!), or [Apache SIS](http://sis.apache.org/)

For everything and anything check out [GeoTools](http://geotools.org/) - the Swiss Army Knife of spatial in Java-land for reading/querying/analysing/rendering vector and raster spatial data.

##### R (Arrr!)

As a primer you should check out [Starting Analysis and Visualisation of Spatial Data with R](http://www.r-bloggers.com/starting-analysis-and-visualisation-of-spatial-data-with-r/).

Surprise! There's actually a great StackExchange question [on this very topic](http://gis.stackexchange.com/questions/45327/tutorials-to-handle-spatial-data-in-r). In addition to the resources listed therein, James Chesire has a great (and quite accessible) write-up on his blog at [R Spatial Tips](http://spatial.ly/r/). Robin Edwards also has some great words and examples about [3D Mapping in R](http://www.r-bloggers.com/3d-mapping-in-r/).

And there's also [spatstat](http://spatstat.github.io/) if you want to delve down into spatial statistics and analysis.

##### .NET

You'll find pretty reasonable support for spatial data in .NET-land with the likes of:

[Geo](https://github.com/sibartlett/Geo) - a powerful little .NET 4.0+ library for querying and manipulating vector data.

[NetTopologySuite](https://github.com/NetTopologySuite/NetTopologySuite) - a port of the aforementioned popular JTS (Java Topology Suite) library for querying and analysing vector data.

[SharpMap](https://sharpmap.codeplex.com/) - a geo app framework for vector and raster data that includes its own rendering engine.

[MapWindow](http://www.mapwindow.org/) - an all in one desktop GIS tool + an ActiveX control for mapping + a C# library for handling vector data.

##### Ruby

Your options are not quite as rich here - but have a look at [geokit](https://github.com/geokit/geokit), [georuby](https://github.com/nofxx/georuby/), and [RGeo](https://github.com/rgeo/rgeo).

Daniel Azuma's series of blog posts on doing [geospatial in Ruby](http://daniel-azuma.com/articles/georails) is going to be worth your time.

##### Some other random tools

In recent times a few really handy and modern little web tools have popped up for doing simple and/or common tasks with spatial data.

[geojson.io](http://geojson.io/) for quickly and easily creating, viewing, and sharing vector data as GeoJSON (and other common formats).

[Ogre](http://ogre.adc4gis.com/) as a web client to the ogr2ogr utility in GDAL. Easily convert between vector formats!

[GIS Convert](https://www.gisconvert.com/) for easily converting between spatial and spatial-like formats.

[GeoGig](http://geogig.org/) if you want to apply the principles of Git to spatial data.

[epsg.io](http://epsg.io/) if you've found some data but it's not in a standard projection (e.g. latitude and longitude, web mercator) then find the "EPSG" code and stick it in here to find out more about it.

[GitSpatial](https://github.com/JasonSanford/gitspatial) if you just want to wrap a spatial API around your GitHub-hosted GeoJSON data.

[TopoJSON](https://github.com/mbostock/topojson) an extension for GeoJSON that encodes topology tl;dr it'll make your GeoJSON up to 80% smaller.

And an honourary mention to [Shape2Earth](http://shape2earthengine.com/shape2earth/Home.html) for allowing the easy creation of maps for Google Earth.


### Making maps: In which we play at being cartographers

Righto, so you've got some data and need to provide a map for your users to view and interact with all of your lovely new data. Good news, you're spoilt for choice! (Are you detecting a theme here?)

Web mapping loosely falls into two categories:

1. JavaScript libraries that will let you build and customise the map interface (2D and/or 3D) to your heart's content, but require you to host the data, or plug it into other people's web mapping services.

2. Software as a Service platforms that provide simple and powerful GUIs for the creation of maps and support hosting of all sorts of different data formats.

And, of course, there's some grey area between the two - with many libraries supporting standard web mapping protocols like WMS, WMTS, and WFS - and with several of the SaaS platforms providing their own JavaScript client libraries to allow users to craft their own map interfaces.

These days a lot of the modern libraries and platforms have been optimisied to work well on mobile devices, and in some cases have separate libraries for developing native apps on iOS and Android.

Oh, and if you're completely new to web mapping check out [mapschool: a free introduction to geo](http://mapschool.io/) to get yourself up to speed on the concepts behing web mapping. The New York Public Library also has a great, and pretty exhaustive runthrough, of making your first web map: [From Paper Maps to the Web: A DIY Digital Maps Primer](http://www.nypl.org/blog/2015/01/05/web-maps-primer).

#### MaaS (Maps as a Service)

At presents there are two main players in the SaaS mapping space: [CartoDB](http://cartodb.com/) and [MapBox](https://www.mapbox.com/).

They both do a great job of covering the basics of map building with quick and easy tools for uploading data and push-button interfaces that abstract away alot of the more complex spatial side of spatial data. They both also have generous free usage tiers.

CartoDB tends to focus more on the "make really pretty vector maps" side of the equation, with great visualisation tools like [Torque](http://blog.cartodb.com/torque-is-live-try-it-on-your-cartodb-maps-today/) (beautiful animations with time series data), powerful and simple [push-button visualisation of data](http://cartodb.com/visualize/), and a wonderful [SQL API](http://docs.cartodb.com/cartodb-platform/sql-api.html) for interacting directly with their PostGIS backend from the client. Oh - and they also have [some support for 3D](http://cartodb.com/case-studies/3d-bogota/) and can handle huge datasets, like [colouring every river in the US](http://cartodb.com/gallery/river-direction/).

And lastly, CartoDB comes with a powerful [point-and-click map building GUI](http://docs.cartodb.com/cartodb-editor.html#visualizations) or, if you need more control, the [CartoDB.js](http://docs.cartodb.com/cartodb-platform/cartodb-js.html) library exposes all of the same functionality. Oh, and did we mention that it's open source and you can [run your own CartoDB instance](https://github.com/CartoDB/cartodb)?

[MapBox](https://www.mapbox.com/) focuses slightly more on the traditionally geospatial side of things, with a powerful desktop map designer, [MapBox Studio](https://www.mapbox.com/mapbox-studio/) (which can process raster as well as vector data), some great work on [tools for processing](https://www.mapbox.com/blog/landsat-live-live/) [satellite imagery](https://www.mapbox.com/blog/processing-landsat-8/), developing the  [vector tiling](https://www.mapbox.com/developers/vector-tiles/) standard, and pushing the boundaries of web mapping with [MapBox GL](https://www.mapbox.com/mapbox-gl/). On top of all of that they also maintain [iOS](https://www.mapbox.com/mapbox-ios-sdk/) and [Android](https://www.mapbox.com/mapbox-android-sdk/) SDKs, the [Mapbox.js](https://www.mapbox.com/mapbox.js/api/) library; and APIs for [surface heights](https://www.mapbox.com/developers/api/surface/), [geocoding](https://www.mapbox.com/developers/api/geocoding/), and [directions](https://www.mapbox.com/developers/api/directions/).

And a couple of honorary mentions:

[GeoServer](http://geoserver.org/) is an open source spatial data server that may be worth you're look if you're having to deal with larger or more complex datasets that CartoDB/MapBox can't handle - or can't handle without charging you for the pleasure. GeoServer also has support for more advanced functionality like WCS and WPS for extracting raw data from rasters on-the-fly, or writing proceses to perform geospatial analysis on-the-fly. You can run GeoServer on its own, or in combination with other packages via the [OpenGeo Suite](http://boundlessgeo.com/solutions/opengeo-suite/) or [GeoNode](http://geonode.org/).

ESRI's ArcGIS software suite is worth a brief mention as the main commercial provider of geospatial software in the world, including its SaaS [ArcGIS Online](https://www.arcgis.com/home/) platform - which provides a 60-day free trial, after which you're required to pay (handsomely).


#### JavaScript mapping libraries

These past few years have seen an explosion in the numbers of JavaScript libraries for creating rich web mapping interfaces.

[OpenLayers](http://openlayers.org/) is probably the most mature player on the stage, and has recently undergone a ground-up rewrite of the library to simplify the API and leverage modern web technologies like WebGL, Canvas, and the full capabilities of HTML5 and CSS3. It even has support for true 3D web mapping via its [OL3-Cesium](http://openlayers.org/ol3-cesium/) plugin which seamlessly integrates the [Cesium](https://cesium.agi.com/) WebGL 3D globe library.

[Leaflet](http://leafletjs.com/), the relatively new kid on the block, started as a protest against other web mapping libraries that required a fair amount of knowledge of geopsatial data to use effectively. As such, it is a super simple API and a more limited range of features than the likes of OpenLayers (but has a large library of community-developed plugins that can help address that gap).

[ModestMaps](http://modestmaps.com/) is an even simpler library again than Leaflet, with a simple API and a focus on the core functionality of producing interactive maps easily.

[Turf](https://www.mapbox.com/blog/turf-gis-for-web-maps/) has been developed by the MapBox team and bills itself as "GIS for web maps" with support for common geospatial operations like buffering, contours, hexbinning, et cetera performed all in the client. Turf also integrates easily with Leaflet and MapBox.js.

##### SVG-powered mapping data visualisations

If you're looking at maps as more of a data visualisation tool then the subcategory of web mapping libraries that play in the SVG space are probably more appropriate for your needs.

Well we couldn't not mention [D3.js](http://d3js.org/) in talking about data visualisation. Michael Bowman's [Designing Beautiful Maps with D3.js](http://bowmanmc.github.io/designing_maps/) talk is worth a look to familiarise yourself with the topic, and then head on over to this [truly exhaustive list](http://bl.ocksplorer.org/#/search/d3.geo) of examples of using D3 for maps on [bl.ocksplorer.org](http://bl.ocksplorer.org).

The team behind the graphing library Highcharts have a separate [Highmaps](http://www.highcharts.com/maps/demo) library that makes creating mapping data visualisations a breeze.

Lastly [Polymaps](http://polymaps.org/) is a bit of a hybrid library in that it provides image and vector-tiled maps via SVG, so you can mix up your choice of basemap (OpenStreetMap, Bing, et cetera) with your image and vector data easily.

##### Web mapping frameworks

The last sub-category of web mapping library worth a mention are the rich web mapping frameworks that exist to provide a whole UI framework around the map itself (i.e. map toolbars, layer trees and controls, advanced data query UIs, et cetera).

First and foremost is the beautiful, modern, and AngularJS-based framework [map.geo.admin.ch](https://github.com/geoadmin/mf-geoadmin3) that the Swiss Federal Office of Topography has open sourced for all to use - check out [a demo](http://map.geo.admin.ch/).

If you're a Sencha fan the [GeoExt](http://geoext.org/) library is worth a look - though note that there are different versions for ExtJS 3 and ExtJS 4/5. In a similar vein you'll find both [GeoMOOSE](http://www.geomoose.org/) and [MapBender](http://mapbender3.org).

And lastly, [MapFish](http://mapfish.org/), a lighter framework than its cousins, and based on the older version of OpenLayers, but with a standalone Java library for printing web maps in [MapFish Print](http://www.mapfish.org/doc/print/).



# Working with tabular data

At its simplest tabular data is data that is stored in rows and columns, either in a flat file or a database, and is usually comprised of simple alphanumeric values. CSV/TSV, JSON, XLS(X), and XML are some of the more common formats you'll find tabular data in, though unfortunately it does still often appear in non machine-readable formats like PDF and DOC and most first be extracted and cleaned before being used.

## Converting between data formats

There's a good chance that you're going to want to convert your data from the format you've found into something a little more modern and useful (like JSON). [Mr. Data Converter](http://shancarter.github.io/mr-data-converter/) is a simple web-based tool for coverting from Excel, CSV, and TSV to JSON, HTML, MySQL, PHP, Python, Ruby, and more.

For batching up the conversion process to run across many datasets consider the [dataconvert](http://okfnlabs.org/dataconverters/#source-data-formats-supported) command-line tool developed by [OKFN Labs](http://okfnlabs.org/) for converting from CSV, XLS(X), and JSON to CSV.

If you need even more control consider the Python libraries [pandas](http://pandas.pydata.org/) (which provides a whole data analysis and modelling framework as well), [tablib](https://tablib.readthedocs.org/en/latest/), or any of the [Science and Data Analysis](https://github.com/vinta/awesome-python#science-and-data-analysis) libraries listed on [Awesome Python](https://github.com/vinta/awesome-python).

## Cleaning your data

If your data has had humans involved in entering it then it's probably fully of all sorts of small variations in how the data have been entered that you'll need to clean up before it becomes machine-readable. Fortunately, there are a couple of great tools.

[OpenRefine](http://openrefine.org/) (formerly Google Refine) is a powerful desktop tool for cleaning messy data, transforming it between different tabular data formats, and even integrates with web services via some simple connectors so you can, for example, geocode a bunch if addresses using Google direclty in OpenRefine. Check out the School of Data's simple [tutorial on using OpenRefine](http://schoolofdata.org/2013/07/15/openrefinelodrefine-a-power-tool-for-cleaning-data/) to see it in action.

Depending on how badly munged your data is a simple old spreadsheet application may get you most of the way to having clean data - as per the excellent [A Gentle Introduction to Data Cleaning](http://schoolofdata.org/courses/#IntroDataCleaning) series from the School of Data. Their [Cleaning Data with Spreadsheets](http://schoolofdata.org/handbook/recipes/cleaning-data-with-spreadsheets/) walkthrough may also fit the bill.

If out-of-the-box tools aren't cutting it and you need to dive into code take a look back at some of the Python libraries, like [pandas](http://pandas.pydata.org/), that we recommended in [Converting between data formats](#Converting_between_data_formats). If you're feeling brave take a look at [dedupe](https://github.com/datamade/dedupe), which leverages machine-learning to perform de-duplication and cleansing of data.

And if all else fails you can always fall back to reliable command-line tools like grep, awk, and sed combined with regular expressions. If you need to upskill your regex foo [Debuggex](https://www.debuggex.com/) and [Regexpr](http://regexper.com/) should set you on the right path.

## Analysing tabular data

So you've got a nice clean dataset and now you want to do some analysis on it to understand if reality matches your hypothesis!

### Spreadsheets

Sometimes the simplest tools are the best and a spreadsheet is all you need - Excel, afte rall, is the world's most widely used IDE!

The School of Data has an excellent tutorial [Using Excel to do precision data journalism](http://schoolofdata.org/2013/04/24/using-excel-to-do-precision-journalism-an-update-from-the-school-of-data-journalism-in-perugia/). If you really need to get back to first principles their [Data Fundamentals](http://schoolofdata.org/courses/#DataFundamentals) series would be well worth a look.

The Sunlight Foundation has a set of good videos as an intro to [Data Visualisation in Google Docs](http://training.sunlightfoundation.com/module/data-visualizations-google-docs/) which also covers analysis. And finally, check out [this rundown of Excel plugins](http://www.clickz.com/clickz/column/2265548/5-free-excel-addins-to-help-digital-marketers-decipher-big-data) for analysing and visualising data.

### Databases

When datasets get larger, or the analysis requirements get more complex, you'll probably find yourself reaching for a database to do the heavy lifting.

The School of Data has a neat little tutorial on [Using SQL for Lightweight Data Analysis](http://schoolofdata.org/2013/03/26/using-sql-for-lightweight-data-analysis/) that'll get you started. If you're playing in PostgreSQL you may find its [window functions](http://www.postgresql.org/docs/9.4/static/tutorial-window.html) of great use to perform calculations across sets within your data.

For a deep dive on data analysis in PostgreSQL, R, and Python check out [this blog post](R, Python, PostgreSQL (and more): A data science workflow example) from Zev Ross.

### R (Arrr!)

R provides a platform for advanced data analysis to let you discover and visualise trends even in large datasets. If you're new to R you should start with [The Guerilla Guide to R](http://www.r-bloggers.com/the-guerilla-guide-to-r/), [basic statistics and graphs in R](https://people.ifm.liu.se/marjon/R_intro_solutions.pdf), and the [official Introduction to R](http://cran.r-project.org/doc/manuals/R-intro.html). To ease the learning curve check out some of the IDEs for R - [RStudio](http://www.rstudio.com/), [Rattle](http://rattle.togaware.com/), and [Deducer](http://www.deducer.org/pmwiki/pmwiki.php?n=Main.DeducerManual).

The true value of R lies in its huge array of libraries and addons, such as [bigvis](http://blog.revolutionanalytics.com/2013/04/visualize-large-data-sets-with-the-bigvis-package.html) (visualise up to 10 million data points in mere seconds) and the big list of [10 R packages I wish I knew about earlier](http://blog.yhathq.com/posts/10-R-packages-I-wish-I-knew-about-earlier.html).

To get started with charting in R check out the handy [Getting Started with Charts in R](http://flowingdata.com/2012/12/17/getting-started-with-charts-in-r/) guide, [Simple charts in R tutorial](http://chartsnthings.tumblr.com/post/36978271916/r-tutorial-simple-charts), or some fun [putting pictures of Pokemon where their power level is on an X/Y axis](http://www.r-bloggers.com/to-plot-them-is-my-real-test/).

When it comes to sharing your analysis with the world check out [Knitr](http://yihui.name/knitr/), for quick and easy report generation, [googleVis](https://github.com/mages/googleVis) for making R and Google Charts talk nicely, and [Shiny](http://shiny.rstudio.com/) for a full-blown web app framework for R to turn your awesome analyses into a shiny interactive web app (such as [this demo](http://blog.ouseful.info/2012/11/28/quick-shiny-demo-exploring-nhs-winter-sit-rep-data/)).

## Visualising tabular data

We've already touched on visualisation in previous section on [Resources for building data visualisations](http://localhost:9000/#data-visualisation-and-infographics-for-fun-and-profit-resources-for-building).



# Scraping data from PDFs and the web

So, somebody gave you a scanned photocopy of the document as PDF? Or a website has some great data, but it's hidden behind an awful JavaScript-heavy interface? No fear - there's some great tools at your disposal to scrape that data and get it into a nicely machine-readable format.

As always, the School of Data have an excellent series on the ins and outs of extracting data from PDFs and scraping websites - [A gentle Introduction into Extracting Data](http://schoolofdata.org/courses/#GentleIntroExtractingData) - with many useful recommendations of the best tools to use for the job.

tl;dr? Well there are a few standout tools...

[Tabula](http://tabula.technology/) is getting a lot of notice for making the process of extracting tabular data from PDFs a (relative) breeze. Download, install, point it at some PDFs and it'll extract any tabula data in them to a nicely machine-readable CSV or XLS file for you. For a more indepth view have a read through [Introducing Tabula](https://source.opennews.org/en-US/articles/introducing-tabula/) (Source news).

[Apache Tika](http://tika.apache.org/), the older man in the scraping PDFs market, is great for extracting text and metadata from a pile of document formats (PDF, XLS, PPT, ...) - even PDFs containing text in scanned images. OUseful, the Practical Data Journalism blog, has a good walkthroguh of [Getting Text Out Of Anything (docs, PDFs, Images) Using Apache Tika](http://blog.ouseful.info/2015/02/09/getting-text-of-anything-docs-pdfs-images-using-apache-tika/).

Worth a mention as well is [PDF Tables](https://pdftables.com/) a web-based tool from the folks behind ScraperWiki that pretty much does what it says on the box - pulls tabular data out of any PDFs you provide.

On the website scraping end of the equation there are a few desktop and web-based tools around - [import.io](https://import.io/), [UiPath](http://www.uipath.com/automate/screen-scraping) (free trial), [Kimono](https://www.kimonolabs.com/), and [80legs](http://80legs.com/) - but sometimes you just need to write code to do it properly.

[Morph.io](https://morph.io/), which arose out of the demise of ScraperWiki, offers a lightweight scraping framework (Python, PHP, Ruby, or Perl) and a whole web platform and community around scrapers (think Heroku for web scraping).

In Python-land there's [Scrapy](http://scrapy.org/) - a neat framework for extracting data from the web with a strong community and easily extensible codebase. You can think of Scrapy as being the next level up from libraries like [BeautifulSoup](http://www.crummy.com/software/BeautifulSoup/) and [lxml](http://lxml.de/) (which excel at parsing HTML and XML) in that it incorporates higher level concepts of scraping like spiders, selectors, and items.

[This Quora post](http://www.quora.com/What-are-some-good-free-web-scrapers-scraping-techniques) has a good thread with suggestions for scraping frameworks in a variety of languages.



# Working with unstructured text

Unstructured data covers much of the data you will come across - from data buried in PDFs and web sites, to mining data from social networks, but it all requires analysis to extract meaning. There are many tools for getting at the data - see the previous section on [scraping data](#Scraping_data_from_PDFs_and_the_web) for a range of tools - but the Sunlight Foundation's [Text Analysis in Transparency](http://overview.ap.org/blog/2013/05/video-text-analysis-in-transparency/) talk is a great introduction to that world of text analysis and natural language processing.


## Extracting meaning from text

Once you have your data in a nicer format you may well need to tackle the problem of pulling something meaningful out of it. Fortunately, there are a lot of good analysis and natural language processing libraries around these days that will allow you to [automatically find the meaningful keywords in a body of text](http://thetokenizer.com/2013/05/09/efficient-way-to-extract-the-main-topics-of-a-sentence/).

Natural language processing may be a bit of a heavy topic to dive into during a hackathon, but if you're feeling brave there are a few [good](http://www.vikparuchuri.com/blog/natural-language-processing-tutorial/) [tutorials](http://idibon.com/natural-language-processing-tutorial-with-ebert/) on the subject to get you started (if you'd like some more academic articles check [this StackOverflow question](http://stackoverflow.com/questions/11892128/tutorials-for-natural-language-processing)).

As always, there are web-based tools - such as [TextRazor](http://www.textrazor.com/) and [Yahoo Content Analysis](https://developer.yahoo.com/contentanalysis/) - that may be able to save you the trouble of diving into code and learning too much about the theory and practice of NLP whilst time is tight.

There are a surprising number of good NLP libraries around for all of the major languages though:

Java has [OpenNLP](https://opennlp.apache.org/) and [Apache UIMA](http://uima.apache.org/); Python has [NLTK](http://www.nltk.org/), [pattern](https://github.com/clips/pattern), and [TextBlob](http://textblob.readthedocs.org/en/dev/); and [this StackOverflow question](http://stackoverflow.com/questions/22904025/java-or-python-for-natural-language-processing) has a good dicussion of NLP libraries for both languages.

In .NET-land the Standford NLP Group have made parts of [their software available](http://sergey-tihon.github.io/Stanford.NLP.NET/), and [SharpNLP](https://sharpnlp.codeplex.com/) and [Adodit NLP](http://nlp.abodit.com/) are worth a look too.

Beyond the world of NLP you might consider going straight to a search engine that provides similar text interrogation capabilities along with a database to store your data and APIs to query it. [Solr](http://lucene.apache.org/solr/) and [Elastic](https://www.elastic.co/) (formerly ElasticSearch) are pretty well know in this space - but [Sphinx](http://sphinxsearch.com/) and [Constellio](http://constellio.com/?lang=en) are worthy entries.

Lastly, for a spot of lightweight text mining [Latent Semantic Analysis in Ruby](http://blog.josephwilk.net/ruby/latent-semantic-analysis-in-ruby.html) and [Simple Text Mining with R](http://www.r-bloggers.com/simple-text-mining-with-r/) will point you in the right direction.


## Visualising unstructured text

Being able to visualise unstructured information is key to making sense of it - be it a word tree of a text blob, a whole web page, or a social media feed - tools like [Word Tree](http://www.jasondavies.com/wordtree/), [Overview](https://www.overviewproject.org/), and even [Google Charts](https://developers.google.com/chart/interactive/docs/gallery/wordtree) will help you turn out some quick visualisations. On the academic end of the spectrum the National Science Foundation have made their [Jigsaw](http://www.cc.gatech.edu/gvu/ii/jigsaw/) toolbox available.

Check out [See Text in Whole New Way: Text Visualization Tools](https://blogs.princeton.edu/etc/2012/08/16/see-text-in-whole-new-waytext-visualization-tools/) from Princeton University for a range of other tools.



# Graph databases (for exploring networks and relationships)

Graph databases were conceived of as a means to make the task of exploring the connections and networks between entities much easier. Whereas in more traditional databases we would have used a from of link table to represent the relationships between entities, that relationship is implicit in a graph database with every entity containing direct pointers to its adjacent entities without the need to expensively compute indexes.

One of the more obvious uses for graph databases are to store and analyse the relationships between people - think Facebook, Twitter, or any web property with a concept of followers or memberships. If you have a problem where you need to quickly and efficiently know how X is connected to Y and via whom, than graph databases are worth a look.

**Tangent Alert!!** While we're talking about networks and relationships we should introduce the concept of "linked data". If you haven't run across the term before (or have, but still don't understand what it means) check out [Linked Data – for the enlightened non-geek reader (or dummies) (or managers)](http://hangingtogether.org/?p=1943) and [A dummy’s introduction to linked data (me being the dummy)](http://mediastandardstrust.org/blog/a-dummys-introduction-to-linked-data-me-being-the-dummy/).

The GovCamp wiki has a [long list of tools](http://govcampau.wikispaces.com/useful+tools) surrounding linked data that may be of use - [Svgvizler](http://dev.data2000.no/sgvizler/) (for SPARQL graphing), [RelFinder](http://www.visualdataweb.org/relfinder.php) (for RDF visual exploration), and [SPARQL Editor](http://openuplabs.tso.co.uk/demos/sparqleditor) (for interactive SPARQL query building) are useful too.


## Graph Databases

[Neo4j](http://neo4j.com/) is the popular kid on the graph database block and has a wealth of supporting tools and documentation; and a great community.

Getting your data into Neo4j can be as straightforward as throwing a spreadsheet containing your data, along with instructions on how to construct the relationships between the entities in your data, at Neo4j. For details and in-depth instructions see [Importing data into Neo4j – the spreadsheet way](http://neo4j.com/blog/importing-data-into-neo4j-the-spreadsheet-way/) and [Gmail Email analysis with Neo4j – and spreadsheets](http://neo4j.com/blog/gmail-email-analysis-with-neo4j-and-spreadsheets/). Alternatively, you can use the [new in-built ETL functionality](http://www.slideshare.net/maxdemarzi/etl-into-neo4j) from Neo4j 2.1 to load your CSV formatted data in directly - check out the official guide on [importing from PostgreSQL to Neo4j](Import Data Into Neo4j).

But sometimes you just can't escape [writing some code](http://www.slideshare.net/maxdemarzi/etl-into-neo4j) to get the job done, and to that end the official Neo4j website has [curated a list of libaries](http://neo4j.com/developer/language-guides/) for many of the major languages. Neo4j also has a [REST batch import API](http://neo4j.com/docs/milestone/rest-api-batch-ops.html) if you want to get right down to the coalface.

Neo4j isn't the be all and end all of graph databases, and we'd be remiss if we didn't mention the likes of [OrientDB](http://www.orientechnologies.com/), [Titan](http://thinkaurelius.github.io/titan/), and [Stardog](http://stardog.com/).

Many of the graph databases you'll come into contact with can be queried via a common syntax called [Gremlin](https://github.com/tinkerpop/gremlin/wiki) - where Gremlin is to graph databases as SQL is to traditional RDBMS dabatases. Applications can then be written on top of Gremlin, as you would SQL, and become database largely agnostic. Gremlin also supports a simple data browser application to test execution of queries.


## Analysis

### NetworkX (Python)

[NetworkX](http://networkx.lanl.gov/index.html) (from the Los Alamos National Laboratory) is a social network analysis library for Python. With a large range of advanced analysis functions built-in (e.g. finding communities within a graph), and good support for importing data into graph databases. For more see [Introduction to Social Network Analysis with NetworkX](http://www.cl.cam.ac.uk/~cm542/teaching/2011/stna-pdfs/stna-lecture11.pdf).

### R (Arrr!)

**Of course** there are R packages for graph databases!

[Social Network Analysis in R](http://www.slideshare.net/ianmcook/social-network-analysis-in-r),
[Making prettier network graphs with sna and igraph](http://is-r.tumblr.com/post/38240018815/making-prettier-network-graphs-with-sna-and-igraph), and
[RNeo4j](http://nicolewhite.github.io/RNeo4j/) should get you pointing in the right direction.


## Visualisation

Graph databases represent complex networks, so it turns out creating useful visualisation can be a tad hard - for an intro to the subject see [Visualising Networks: Beyond the Hairball](http://www.slideshare.net/OReillyStrata/visualizing-networks-beyond-the-hairball).

### Tree and hierarchy visualisation

What if your network isn't actually a network and more like a tree or straight hierarchy (i.e. it has no interconnections between entities)?

Congratulations, you can use tree visualisations! It'll be faster and far more visually effective than any other options.

[TreeViz](http://www.randelshofer.ch/treeviz/) is a good start if you just need to run it locally (it's a Java app), but D3.js [can also visualise trees](http://bl.ocks.org/mbostock/4063550) (see [this tutorial](http://blog.pixelingene.com/2011/07/building-a-tree-diagram-in-d3-js/) for step-by-step instructions). D3.js also supports enclosure diagrams (aka circle packing) that [may better represet](http://bl.ocks.org/mbostock/4063530) your tree structure than an actual tree would.

### Flow visualisation

But sometimes you care less about the connections in your network and more about the weight those connections have (e.g. the # emails sent between connections) - well for that you want a flow visualisation like a [sankey diagram](http://bost.ocks.org/mike/sankey/) that will visualise the magnitude of flow between nodes in a network

### Other visualisation tools

[NodeXL](http://nodexl.codeplex.com/) for Excel allows you to visualise networks/graphs quickly from right inside Excel.

[Gephi](http://gephi.github.io/) is a great desktop tool for interactive visualisation and exploration platform for networks and hierarchial systems. It comes with many good automatic layout algorithims (even for huge graphs) and can easily handle many types of input file, including [spreadshets of Tweets](http://dfreelon.org/2013/04/26/spreadsheet-converts-tweets-for-social-network-analysis-in-gephi/).

[Cytoscape](http://www.cytoscape.org/) is like Gephi, but more on the 'platform' end of the spectrum. It was originally designed for use in the biological sciences, but has evolved to become a general tool for complex network analysis and visualisation. Cytoscape supports a rich ecosystem of (Java) plugins (aka "Apps") that allow you to customise and extend the base functionality.

[Cytoscape.js](https://github.com/cytoscape/cytoscape.js) Like Cytoscape, but written in JavaScript!

[sigma.js](http://sigmajs.org/) is a simple and elegant JavaScript library solely designed to be aweosme at graph drawing. Give it a JSON blob and it'll spit out a nice looking Canvas or WebGL visualisation of the network. And it also speaks the same formats that Neo4J, Gephi, et cetera can export. Sigma.js also supports [filtering and searching](https://github.com/jacomyal/osdc2012-sigmajs-demo) the visualisations it generates.



# Legalese
The text of this toolkit is open for reuse under a [Creative Commons Attribution](https://creativecommons.org/licenses/by/3.0/au/deed.en) license and improvements and suggestions are encouraged by submitting them on [GitHub](http://github.com/govhackaustralia/govhack-tools/issues).
