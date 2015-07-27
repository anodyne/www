@extends('layouts.nova')

@section('title')
	Nova NextGen
@stop

@section('content')
	<h1>Nova NextGen</h1>

	<div class="row">
		<div class="col-md-9">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
				<li><a href="#vision" data-toggle="tab">The Vision</a></li>
				<li><a href="#installing" data-toggle="tab">Installing the Preview Release</a></li>
			</ul>

			<div class="tab-content">
				<div id="overview" class="tab-pane active">
					<p>Over the last couple of years, there have been a lot of promises about the next generation of Nova, but to date, little evidence to back those promises up. The last thing we want is for this to feel like "vaporware" that we talk and talk about, but never happens. Believe us when we say, we're committed to getting the next generation of Nova into your hands, but we won't do it until we feel it's the best product it can possibly be. That involves a lot of time and effort though and we don't want to leave people empty-handed, so we've created this preview site to show you what's coming.</p>

					<p>Our development is being governed by two principles: <em>make it smarter</em> and <em>make it better</em>. Those are certainly subjective principles to be guided by, but we've come to view our role as curators of features now. Ultimately, we have the final say over what does and does not go into Nova. At the end of the day, we're the ones who have to be satisfied with the product, so our goal is to make sure that every new feature added either makes Nova smarter or better. If an existing feature doesn't meet our standards, we tear it apart and re-build it until it does, even if the end user will never notice the change. At the end of the day, it's about building a product we're proud of and something you'll love using.</p>
				</div>

				<div id="vision" class="tab-pane">
					<dl>
						<dt><a href="http://anodyne-productions.com/news/post/nova-nextgen-change-is-coming">Change Is Coming</a></dt>
						<dd>Major versions are a necessity, but why do we make a bigger deal out of major releases?</dd>

						<dt><a href="http://anodyne-productions.com/news/post/nova-nextgen-a-new-foundation">A New Foundation</a></dt>
						<dd>For years, Nova has been built on top of CodeIgniter, but that's changing. Learn about Nova's new foundation.</dd>

						<dt><a href="http://anodyne-productions.com/news/post/nova-nextgen-nova-is-broken">Nova Is Broken</a></dt>
						<dd>Not just missing features, but the very philosophy Nova is developed with is out-dated and broken. Let's fix it.</dd>

						<dt><a href="http://anodyne-productions.com/news/post/nova-nextgen-a-new-file-structure">A New File Structure</a></dt>
						<dd>Let's talk about a new look to the file structure of Nova and how it'll make things easier for everyone.</dd>

						<dt><a href="http://anodyne-productions.com/news/post/nova-nextgen-site-themes">Site Themes</a></dt>
						<dd>The way themeing works in NextGen will be very different from other versions of Nova. Find out more.</dd>

						<dt><a href="http://anodyne-productions.com/news/post/nova-nextgen-application-review-center">Application Review Center</a></dt>
						<dd>We're social with everything else, so why not application review too? Find out more about Nova's social application review feature.</dd>

						<dt><a href="http://anodyne-productions.com/news/post/nova-nextgen-manifests">Manifests</a></dt>
						<dd>Gone are the days of rigid manifests that you have no control over. Borrowing an idea from Microsoft SharePoint, you can build your manifests to show what you want.</dd>

						<dt><a href="http://anodyne-productions.com/news/post/nova-nextgen-access-control">Access Control</a></dt>
						<dd>Control what people can and can't do even better than before.</dd>

						<dt><a href="http://anodyne-productions.com/news/post/nova-nextgen-ranks-redux">Ranks Redux</a></dt>
						<dd>Ranks have been in need of a total rebuild for years. This new way of handling ranks is easy and powerful.</dd>

						<dt><a href="http://anodyne-productions.com/news/post/nova-nextgen-dynamic-forms-2-0">Dynamic Forms 2.0</a></dt>
						<dd>Dynamic forms have been awesome in Nova, but we want them to be even better.</dd>

						<dt><a href="http://anodyne-productions.com/news/post/nova-nextgen-pages">Pages</a></dt>
						<dd>A dynamic and robust system needs an equally dynamic and robust page system so you can create and manage pages without using code.</dd>

						<dt><a href="http://anodyne-productions.com/news/post/nova-nextgen-storytelling">Storytelling</a></dt>
						<dd>Missions, mission posts, and personal logs are going away. Learn about one of Nova NextGen's pillar features: storytelling.</dd>

						<dt><a href="http://anodyne-productions.com/news/post/nova-nextgen-developers">Developers</a></dt>
						<dd>Developers will have some fun new things to play with when NextGen arrives.</dd>

						<dt><a href="http://anodyne-productions.com/news/post/nova-nextgen-trimming-the-fat">Trimming the Fat</a></dt>
						<dd>What doesn't get put in is almost more important than what does get put in. Lots of stuff is coming out. Find out more.</dd>

						<dt><a href="http://anodyne-productions.com/news/post/nova-nextgen-whats-next">What's Next?</a></dt>
					</dl>
				</div>

				<div id="installing" class="tab-pane">
					{{ alert('warning', "Nova NextGen is provided \"as-is\" and doesn't have any support for it. You're free to ask questions in the forums, but understand that Anodyne will not provide walkthroughs and support for Nova NextGen at this time.") }}

					<p>Nova NextGen can be run from any web server running PHP 5.5 or higher with a MySQL, PostgreSQL, or SQLite database. You can also install Nova NextGen on a local server if you're running one, so long as it has PHP and a database.</p>

					<ol>
						<li>Upload Nova NextGen to your server (or if it's a local server, copy the files to the location where you want it)</li>
						<li>Navigate to <code>http://&lt;yoursite&gt;</code> and you'll be automatically redirected to the Setup Center</li>
						<li>You may be prompted to make certain directories writable in order to continue. Laravel requires having the ability to create files for logging, caching, and other framework operations. You'll need to make the <code>config</code>, <code>storage</code>, and <code>nova/bootstrap/cache</code> directories (as well as all their sub-directories) writable by the web server (777).</li>
						<li>Select the option to do a Fresh Install of Nova NextGen and follow the prompts</li>
					</ol>

					<p>Once Nova NextGen is installed, you'll be re-directed to a basic front page with some links to move around a few different places in the system, including being able to log in and use some of the admin features. In future preview releases, you'll be able to use more of the system as it's built.</p>

					<p><em>Theme developers:</em> Much of the structure for themes is in place now. You can look through the <code>nova/views</code> directory to see what's there and read more in the Site Themes overview of the Nova NextGen Vision series.</p>

					<p><em>Extension developers:</em> There hasn't been any work done on extensions yet, but in future preview releases we'll have more stuff for you to play with.</p>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			<p><a href="{{ $_ENV['FS_URL'] }}nova/nova-nextgen-preview-2.zip" class="btn btn-primary btn-lg btn-block">{{ $_icons['download'] }} Preview Release 2</a></p>

			<h3>What's in PR2?</h3>

			<ul>
				<li class="text-sm text-danger"><strong>New PHP requirement: PHP 5.5</strong></li>
				<li class="text-sm">Logging in and resetting passwords</li>
				<li class="text-sm">Page Manager</li>
				<li class="text-sm">Additional Page Content Manager</li>
				<li class="text-sm">Menu Manager</li>
			</ul>

			<h3>Coming in PR3</h3>

			<ul>
				<li class="text-sm">Dynamic forms</li>
				<li class="text-sm">Access control
					<ul>
						<li class="text-sm">Roles</li>
						<li class="text-sm">Permissions</li>
						<li class="text-sm">Updates to menus</li>
						<li class="text-sm">Updates to pages</li>
					</ul>
				</li>
				<li class="text-sm">Further theme refinements for fringe cases and more advanced theme options</li>
				<li class="text-sm">Support for classic main/sub menu navigation in themes</li>
			</ul>
		</div>
	</div>
@stop