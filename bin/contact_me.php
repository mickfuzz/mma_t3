




<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>myprogrammingblog.com/UI Components/contact form/bin/contact_me.php at master · myprogrammingblog/myprogrammingblog.com · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <meta property="fb:app_id" content="1401488693436528"/>

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="myprogrammingblog/myprogrammingblog.com" name="twitter:title" /><meta content="Code snippets from myprogrammingblog.com" name="twitter:description" /><meta content="https://avatars.githubusercontent.com/u/1151507" name="twitter:image:src" />
<meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars.githubusercontent.com/u/1151507" property="og:image" /><meta content="myprogrammingblog/myprogrammingblog.com" property="og:title" /><meta content="https://github.com/myprogrammingblog/myprogrammingblog.com" property="og:url" /><meta content="Code snippets from myprogrammingblog.com" property="og:description" />

    <meta name="hostname" content="github-fe119-cp1-prd.iad.github.net">
    <meta name="ruby" content="ruby 2.1.0p0-github-tcmalloc (87c9373a41) [x86_64-linux]">
    <link rel="assets" href="https://github.global.ssl.fastly.net/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035/">
    <link rel="xhr-socket" href="/_sockets" />


    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="59F1C96A:5371:5612064:53121716" name="octolytics-dimension-request_id" />
    

    
    
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="QLEN4nVSwPuugkn9pSvCPL281xJXphFbTh2EiWebeMc=" name="csrf-token" />

    <link href="https://github.global.ssl.fastly.net/assets/github-3eb3754d4f9f6036875199a01278c6ad6cc3d2ad.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://github.global.ssl.fastly.net/assets/github2-cb91aec5b799e43ecbc2cb6ac665bc7289f0d01e.css" media="all" rel="stylesheet" type="text/css" />
    
    


      <script crossorigin="anonymous" src="https://github.global.ssl.fastly.net/assets/frameworks-75c3712476c7af863873362d0cdf06a94a4b4fa3.js" type="text/javascript"></script>
      <script async="async" crossorigin="anonymous" src="https://github.global.ssl.fastly.net/assets/github-0a9d4e294873972a56136b7a78254286688653c2.js" type="text/javascript"></script>
      
      <meta http-equiv="x-pjax-version" content="21b0158f79edcff84dd6f271606bd753">

        <link data-pjax-transient rel='permalink' href='/myprogrammingblog/myprogrammingblog.com/blob/2cc4962d9678238bc4cbbe25603bb75bc06d9155/UI%20Components/contact%20form/bin/contact_me.php'>

  <meta name="description" content="Code snippets from myprogrammingblog.com" />

  <meta content="1151507" name="octolytics-dimension-user_id" /><meta content="myprogrammingblog" name="octolytics-dimension-user_login" /><meta content="12226129" name="octolytics-dimension-repository_id" /><meta content="myprogrammingblog/myprogrammingblog.com" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="12226129" name="octolytics-dimension-repository_network_root_id" /><meta content="myprogrammingblog/myprogrammingblog.com" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/myprogrammingblog/myprogrammingblog.com/commits/master.atom" rel="alternate" title="Recent Commits to myprogrammingblog.com:master" type="application/atom+xml" />

  </head>


  <body class="logged_out  env-production linux vis-public page-blob tipsy-tooltips">
    <div class="wrapper">
      
      
      
      


      
      <div class="header header-logged-out">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/">
      <span class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions">
        <a class="button primary" href="/join">Sign up</a>
      <a class="button signin" href="/login?return_to=%2Fmyprogrammingblog%2Fmyprogrammingblog.com%2Fblob%2Fmaster%2FUI%2520Components%2Fcontact%2520form%2Fbin%2Fcontact_me.php">Sign in</a>
    </div>

    <div class="command-bar js-command-bar  in-repository">

      <ul class="top-nav">
          <li class="explore"><a href="/explore">Explore</a></li>
        <li class="features"><a href="/features">Features</a></li>
          <li class="enterprise"><a href="https://enterprise.github.com/">Enterprise</a></li>
          <li class="blog"><a href="/blog">Blog</a></li>
      </ul>
        <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">

<input type="text" data-hotkey=" s" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
    
      data-repo="myprogrammingblog/myprogrammingblog.com"
      data-branch="master"
      data-sha="6836039593504fe3d3d0a6164779b5a678830792"
  >

    <input type="hidden" name="nwo" value="myprogrammingblog/myprogrammingblog.com" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target" role="button" aria-haspopup="true">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container" aria-hidden="true">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item js-this-repository-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item js-all-repositories-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="help tooltipped tooltipped-s" aria-label="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

</form>
    </div>

  </div>
</div>




          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        

<ul class="pagehead-actions">


  <li>
    <a href="/login?return_to=%2Fmyprogrammingblog%2Fmyprogrammingblog.com"
    class="minibutton with-count js-toggler-target star-button tooltipped tooltipped-n"
    aria-label="You must be signed in to use this feature" rel="nofollow">
    <span class="octicon octicon-star"></span>Star
  </a>

    <a class="social-count js-social-count" href="/myprogrammingblog/myprogrammingblog.com/stargazers">
      23
    </a>

  </li>

    <li>
      <a href="/login?return_to=%2Fmyprogrammingblog%2Fmyprogrammingblog.com"
        class="minibutton with-count js-toggler-target fork-button tooltipped tooltipped-n"
        aria-label="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-git-branch"></span>Fork
      </a>
      <a href="/myprogrammingblog/myprogrammingblog.com/network" class="social-count">
        126
      </a>
    </li>
</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="repo-label"><span>public</span></span>
          <span class="mega-octicon octicon-repo"></span>
          <span class="author">
            <a href="/myprogrammingblog" class="url fn" itemprop="url" rel="author"><span itemprop="title">myprogrammingblog</span></a>
          </span>
          <span class="repohead-name-divider">/</span>
          <strong><a href="/myprogrammingblog/myprogrammingblog.com" class="js-current-repository js-repo-home-link">myprogrammingblog.com</a></strong>

          <span class="page-context-loader">
            <img alt="Octocat-spinner-32" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      <div class="repository-with-sidebar repo-container new-discussion-timeline js-new-discussion-timeline  ">
        <div class="repository-sidebar clearfix">
            

<div class="sunken-menu vertical-right repo-nav js-repo-nav js-repository-container-pjax js-octicon-loaders">
  <div class="sunken-menu-contents">
    <ul class="sunken-menu-group">
      <li class="tooltipped tooltipped-w" aria-label="Code">
        <a href="/myprogrammingblog/myprogrammingblog.com" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-gotokey="c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_tags repo_branches /myprogrammingblog/myprogrammingblog.com">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

        <li class="tooltipped tooltipped-w" aria-label="Issues">
          <a href="/myprogrammingblog/myprogrammingblog.com/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-gotokey="i" data-selected-links="repo_issues /myprogrammingblog/myprogrammingblog.com/issues">
            <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
            <span class='counter'>7</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>

      <li class="tooltipped tooltipped-w" aria-label="Pull Requests">
        <a href="/myprogrammingblog/myprogrammingblog.com/pulls" aria-label="Pull Requests" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-gotokey="p" data-selected-links="repo_pulls /myprogrammingblog/myprogrammingblog.com/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class='counter'>3</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


    </ul>
    <div class="sunken-menu-separator"></div>
    <ul class="sunken-menu-group">

      <li class="tooltipped tooltipped-w" aria-label="Pulse">
        <a href="/myprogrammingblog/myprogrammingblog.com/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="pulse /myprogrammingblog/myprogrammingblog.com/pulse">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Graphs">
        <a href="/myprogrammingblog/myprogrammingblog.com/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_graphs repo_contributors /myprogrammingblog/myprogrammingblog.com/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Network">
        <a href="/myprogrammingblog/myprogrammingblog.com/network" aria-label="Network" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-selected-links="repo_network /myprogrammingblog/myprogrammingblog.com/network">
          <span class="octicon octicon-git-branch"></span> <span class="full-word">Network</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
    </ul>


  </div>
</div>

              <div class="only-with-full-nav">
                

  

<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone">
  <h3><strong>HTTPS</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/myprogrammingblog/myprogrammingblog.com.git" readonly="readonly">

    <span aria-label="copy to clipboard" class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/myprogrammingblog/myprogrammingblog.com.git" data-copied-hint="copied!"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone">
  <h3><strong>Subversion</strong> checkout URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/myprogrammingblog/myprogrammingblog.com" readonly="readonly">

    <span aria-label="copy to clipboard" class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/myprogrammingblog/myprogrammingblog.com" data-copied-hint="copied!"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


<p class="clone-options">You can clone with
      <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>
      or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <span class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
    <a href="https://help.github.com/articles/which-remote-url-should-i-use">
    <span class="octicon octicon-question"></span>
    </a>
  </span>
</p>



                <a href="/myprogrammingblog/myprogrammingblog.com/archive/master.zip"
                   class="minibutton sidebar-button"
                   title="Download this repository as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          


<!-- blob contrib key: blob_contributors:v21:cdb118af8a7f9a0041d3d1b8df9a8533 -->

<p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

<a href="/myprogrammingblog/myprogrammingblog.com/find/master" data-pjax data-hotkey="t" class="js-show-file-finder" style="display:none">Show File Finder</a>

<div class="file-navigation">
  

<div class="select-menu js-menu-container js-select-menu" >
  <span class="minibutton select-menu-button js-menu-target" data-hotkey="w"
    data-master-branch="master"
    data-ref="master"
    role="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-remove-close js-menu-close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/myprogrammingblog/myprogrammingblog.com/blob/master/UI%20Components/contact%20form/bin/contact_me.php"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/myprogrammingblog/myprogrammingblog.com" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">myprogrammingblog.com</span></a></span></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/myprogrammingblog/myprogrammingblog.com/tree/master/UI%20Components" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">UI Components</span></a></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/myprogrammingblog/myprogrammingblog.com/tree/master/UI%20Components/contact%20form" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">contact form</span></a></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/myprogrammingblog/myprogrammingblog.com/tree/master/UI%20Components/contact%20form/bin" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">bin</span></a></span><span class="separator"> / </span><strong class="final-path">contact_me.php</strong> <span aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="UI Components/contact form/bin/contact_me.php" data-copied-hint="copied!"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


  <div class="commit file-history-tease">
    <img alt="Anatoly Spektor" class="main-avatar js-avatar" data-user="1151507" height="24" src="https://2.gravatar.com/avatar/9bad32e973441a90bb241589358b749e?d=https%3A%2F%2Fidenticons.github.com%2F85ac5d7b8f74a013c7d8c6a1ac602125.png&amp;r=x&amp;s=140" width="24" />
    <span class="author"><a href="/myprogrammingblog" rel="author">myprogrammingblog</a></span>
    <time class="js-relative-date" data-title-format="YYYY-MM-DD HH:mm:ss" datetime="2013-08-27T11:01:30-07:00" title="2013-08-27 11:01:30">August 27, 2013</time>
    <div class="commit-title">
        <a href="/myprogrammingblog/myprogrammingblog.com/commit/2cc4962d9678238bc4cbbe25603bb75bc06d9155" class="message" data-pjax="true" title="Formatting">Formatting</a>
    </div>

    <div class="participation">
      <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>1</strong> contributor</a></p>
      
    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list">
          <li class="facebox-user-list-item">
            <img alt="Anatoly Spektor" class=" js-avatar" data-user="1151507" height="24" src="https://2.gravatar.com/avatar/9bad32e973441a90bb241589358b749e?d=https%3A%2F%2Fidenticons.github.com%2F85ac5d7b8f74a013c7d8c6a1ac602125.png&amp;r=x&amp;s=140" width="24" />
            <a href="/myprogrammingblog">myprogrammingblog</a>
          </li>
      </ul>
    </div>
  </div>

<div class="file-box">
  <div class="file">
    <div class="meta clearfix">
      <div class="info file-name">
        <span class="icon"><b class="octicon octicon-file-text"></b></span>
        <span class="mode" title="File Mode">file</span>
        <span class="meta-divider"></span>
          <span>26 lines (24 sloc)</span>
          <span class="meta-divider"></span>
        <span>0.798 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
              <a class="minibutton disabled tooltipped tooltipped-w" href="#"
                 aria-label="You must be signed in to make or propose changes">Edit</a>
          <a href="/myprogrammingblog/myprogrammingblog.com/raw/master/UI%20Components/contact%20form/bin/contact_me.php" class="button minibutton " id="raw-url">Raw</a>
            <a href="/myprogrammingblog/myprogrammingblog.com/blame/master/UI%20Components/contact%20form/bin/contact_me.php" class="button minibutton js-update-url-with-hash">Blame</a>
          <a href="/myprogrammingblog/myprogrammingblog.com/commits/master/UI%20Components/contact%20form/bin/contact_me.php" class="button minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->
          <a class="minibutton danger disabled empty-icon tooltipped tooltipped-w" href="#"
             aria-label="You must be signed in to make or propose changes">
          Delete
        </a>
      </div><!-- /.actions -->
    </div>
        <div class="blob-wrapper data type-php js-blob-data">
        <table class="file-code file-diff tab-size-8">
          <tr class="file-code-line">
            <td class="blob-line-nums">
              <span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>

            </td>
            <td class="blob-line-code"><div class="code-body highlight"><pre><div class='line' id='LC1'><span class="o">&lt;?</span><span class="nx">php</span></div><div class='line' id='LC2'><span class="c1">// check if fields passed are empty</span></div><div class='line' id='LC3'><span class="k">if</span><span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;name&#39;</span><span class="p">])</span>  		<span class="o">||</span></div><div class='line' id='LC4'>&nbsp;&nbsp;&nbsp;<span class="k">empty</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;email&#39;</span><span class="p">])</span> 		<span class="o">||</span></div><div class='line' id='LC5'>&nbsp;&nbsp;&nbsp;<span class="k">empty</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;message&#39;</span><span class="p">])</span>	<span class="o">||</span></div><div class='line' id='LC6'>&nbsp;&nbsp;&nbsp;<span class="o">!</span><span class="nb">filter_var</span><span class="p">(</span><span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;email&#39;</span><span class="p">],</span><span class="nx">FILTER_VALIDATE_EMAIL</span><span class="p">))</span></div><div class='line' id='LC7'>&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC8'>	<span class="k">echo</span> <span class="s2">&quot;No arguments Provided!&quot;</span><span class="p">;</span></div><div class='line' id='LC9'>	<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC10'>&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC11'><br/></div><div class='line' id='LC12'><span class="nv">$name</span> <span class="o">=</span> <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;name&#39;</span><span class="p">];</span></div><div class='line' id='LC13'><span class="nv">$email_address</span> <span class="o">=</span> <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;email&#39;</span><span class="p">];</span></div><div class='line' id='LC14'><span class="nv">$message</span> <span class="o">=</span> <span class="nv">$_POST</span><span class="p">[</span><span class="s1">&#39;message&#39;</span><span class="p">];</span></div><div class='line' id='LC15'><br/></div><div class='line' id='LC16'><span class="c1">// create email body and send it	</span></div><div class='line' id='LC17'><span class="nv">$to</span> <span class="o">=</span> <span class="s1">&#39;me@myprogrammingblog.com&#39;</span><span class="p">;</span> <span class="c1">// put your email</span></div><div class='line' id='LC18'><span class="nv">$email_subject</span> <span class="o">=</span> <span class="s2">&quot;Contact form submitted by:  </span><span class="si">$name</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC19'><span class="nv">$email_body</span> <span class="o">=</span> <span class="s2">&quot;You have received a new message. </span><span class="se">\n\n</span><span class="s2">&quot;</span><span class="o">.</span></div><div class='line' id='LC20'>				  <span class="s2">&quot; Here are the details:</span><span class="se">\n</span><span class="s2"> </span><span class="se">\n</span><span class="s2">Name: </span><span class="si">$name</span><span class="s2"> </span><span class="se">\n</span><span class="s2"> &quot;</span><span class="o">.</span></div><div class='line' id='LC21'>				  <span class="s2">&quot;Email: </span><span class="si">$email_address</span><span class="se">\n</span><span class="s2"> Message </span><span class="se">\n</span><span class="s2"> </span><span class="si">$message</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC22'><span class="nv">$headers</span> <span class="o">=</span> <span class="s2">&quot;From: contacts@myprogrammingblog.com</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC23'><span class="nv">$headers</span> <span class="o">.=</span> <span class="s2">&quot;Reply-To: </span><span class="si">$email_address</span><span class="s2">&quot;</span><span class="p">;</span>	</div><div class='line' id='LC24'><span class="nb">mail</span><span class="p">(</span><span class="nv">$to</span><span class="p">,</span><span class="nv">$email_subject</span><span class="p">,</span><span class="nv">$email_body</span><span class="p">,</span><span class="nv">$headers</span><span class="p">);</span></div><div class='line' id='LC25'><span class="k">return</span> <span class="k">true</span><span class="p">;</span>			</div><div class='line' id='LC26'><span class="cp">?&gt;</span><span class="x"></span></div></pre></div></td>
          </tr>
        </table>
  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="http://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2014 <span title="0.02836s from github-fe119-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped tooltipped-w" aria-label="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped tooltipped-w"
      aria-label="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-remove-close close js-ajax-error-dismiss"></a>
      Something went wrong with that request. Please try again.
    </div>

  </body>
</html>

