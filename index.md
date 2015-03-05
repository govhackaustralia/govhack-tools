# The GovHack Toolkit

This page provides all the information you'll need to prepare your GovHack entries, and a wealth of links to tools, techniques, and libraries to help you build an awesome project. You can use these resources to build any sort of project - mobile apps, web apps, APIs, data visualisations/infographics, and more. You're not limited to using the resources and tools in this page, but your actual entries must meet the [competition eligibility rules](http://www.govhack.org/competition-rules-code-of-conduct/).

If you're new to GovHack (or are just a little unclear on the process involved) we strongly encourage you to read the [Anatomy of GovHack project](#anatomy-of-govhack-project) section at the top of this page to find out all about the process of registering, preparing, and submitting your entry.

Beyond that, you'll find a range of useful resources from [technical considerations]() in publishing your entry, resources for working with [geospatial]() or [tabular]() data, to extracting good data from [messy unstructured sources](), and much more besides.

> @TODO Links


# Document @TODO
* GovHack Toolkit or GovHack Guide?
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

Oh, and if you're a JavaScript ninja check out [D3.js](http://d3js.org/), [jit](http://philogb.github.io/jit/), [three.js](http://threejs.org/), or [PhiloGL](http://www.senchalabs.org/philogl/) for all of your visualisation needs.

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

[epsg.io](http://epsg.io/) if you're (un)fortunate enough to have to care about a non-standard projection for your data.

[GitSpatial](https://github.com/JasonSanford/gitspatial) if you just want to wrap a spatial API around your GitHub-hosted GeoJSON data.

[TopoJSON](https://github.com/mbostock/topojson) an extension for GeoJSON that encodes topology tl;dr it'll make your GeoJSON up to 80% smaller.

And an honourary mention to [Shape2Earth](http://shape2earthengine.com/shape2earth/Home.html) for allowing the easy creation of maps for Google Earth.

### Making maps: In which we play at being cartographers

#### Web mapping libraries

> @TODO

> TileMill, OpenLayers (3), Mapbox, MapboxGL, Turf GIS, CartoDB, Torque, Leaflet, ArcGIS Online, ...

> [From Paper Maps to the Web: A DIY Digital Maps Primer](http://www.nypl.org/blog/2015/01/05/web-maps-primer)

#### Maps as a Service

> @TODO

#### Desktop tools

> @TODO


# Working with tabular data

> @TODO

## Finding datasets

> @TODO

## Converting between data formats

> @TODO

## Cleaning your data

> @TODO

> @TODO Pandas (tabular)

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


# Working with unstructured data

> @TODO
>
> "Somebody gave us data as a scanned photocopy of a Word doc?!"

## Scraping your data

> @TODO
> http://blog.ouseful.info/2015/02/09/getting-text-of-anything-docs-pdfs-images-using-apache-tika/

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
