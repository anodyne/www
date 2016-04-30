@extends('layouts.nova')

@section('title')
	Nova NextGen
@stop

@section('content')
	<h1>Nova NextGen</h1>

	<div class="row">
		<div class="col-md-9">
			<p>We're really excited to get Nova NextGen into your hands! However, for the sake of both of our sanities, let's make a few things clear.</p>

			<ul>
				<li><strong>This is alpha software.</strong> It has bugs, it's missing features, and things <em>will</em> break.</li>
				<li>Upgrading from a preview release to subsequent preview releases isn't supported. You will need to do a fresh install every time a new preview release is released.</li>
				<li>The take-home message is that <strong>you should not use this in production</strong>. These preview releases are solely intended to gather feedback from our community of users and developers.</li>
			</ul>

			<hr class="partial-split">

			<ul class="nav nav-pills">
				<li class="active"><a href="#faq" data-toggle="pill">FAQs</a></li>
				<li><a href="#vision" data-toggle="pill">The Vision</a></li>
				<li><a href="#installing" data-toggle="pill">Installation</a></li>
				<li><a href="#features" data-toggle="pill">Included Features</a></li>
			</ul>

			<div class="tab-content">
				<div id="installing" class="tab-pane">
					{{ alert('warning', "Nova NextGen is provided \"as-is\" and doesn't have any support for it. You're free to ask questions in the forums, but understand that Anodyne will not provide walkthroughs and support for Nova NextGen at this time.") }}

					<p>Nova NextGen can be run from any web server running PHP 5.5.9 or higher with a MySQL, PostgreSQL, or SQLite database. You can also install Nova NextGen on a local server if you're running one, so long as it has PHP and a database.</p>

					<ol>
						<li>If you have Preview Release 1 or 2 installed, you will need to first uninstall it in order to do a fresh install of Preview Release 3</li>
						<li>Upload Nova NextGen to your server (or if it's a local server, copy the files to the location where you want it)</li>
						<li>Navigate to <code>http://&lt;yoursite&gt;</code> and you'll be automatically redirected to the Setup Center</li>
						<li>You may be prompted to make certain directories writable in order to continue. Laravel requires having the ability to create files for logging, caching, and other framework operations. You'll need to make the <code>config</code>, <code>storage</code>, and <code>nova/bootstrap/cache</code> directories (as well as all their sub-directories) writable by the web server (775).</li>
						<li>Select the option to do a Fresh Install of Nova NextGen and follow the prompts</li>
					</ol>

					<p>Once Nova NextGen is installed, you'll be re-directed to the home page with links to move around to several different places in the system, including being able to log in and use some of the admin features. In future preview releases, you'll be able to use more of the system as it's built.</p>

					<p><em>Theme developers:</em> The theme structure and supporting tools are pretty much finalized now. As such, you can start to play around with building your themes. You can look through the <code>nova/resources/views</code> directory to see what's there and read more in the Site Themes overview of the Nova NextGen Vision series.</p>

					<p><em>Extension developers:</em> Basic work has started on extensions and you're able to now create extensions and play around with them. In the future, we'll provide more complete documentation around extension development.</p>
				</div>

				<div id="features" class="tab-pane">
					<p class="text-muted"><em>Gray text indicates features coming in the next preview release.</em></p>

					<ul>
						<li>New application structure</li>
						<li>New flexible and responsive themeing system</li>
						<li>Robust extension architecture</li>
						<li>Logging in and resetting passwords</li>
						<li>Page Manager</li>
						<li>Additional Page Content Manager</li>
						<li>Menu Manager</li>
						<li>Dynamic forms</li>
						<li>Access control (roles and permissions)</li>
						<li class="text-muted">User management</li>
						<li class="text-muted">User preferences</li>
						<li class="text-muted">Notifications</li>
					</ul>
				</div>

				<div id="faq" class="tab-pane active">
					<h3>What Is &rdquo;Nova NextGen&ldquo;?</h3>

					<p>There's been some confusion lately about what exactly Nova NextGen <em>is</em>.</p>

					<p>Simply put, Nova NextGen is Nova 3.</p>

					<p>Over the last few years, there's been a lot of talk about Nova 3. Those conversations have gone through a lot of evolutions, as has the philosophy behind Nova 3. To avoid confusion with previous talk about Nova 3, we chose the term <em>Nova NextGen</em> to highlight what our thinking on the next generation of Nova has become. This is purely a marketing term. The final release will still be Nova 3, we just wanted to differentiate what we're talking about now from what's been talked about in the past.</p>

					<h3>What Are the Preview Releases?</h3>

					<p>Developing software like Nova NextGen is a lengthy process that takes a lot of time and effort. We didn't want to leave people empty handed though while they waited for us to finish working. In order to get Nova NextGen (even in its early stages) into your hands, we've chosen to release these preview releases to give you a preview of what's coming when Nova 3 is released.</p>

					<h3>What's the Timeline for Nova 3?</h3>

					<p>Our development is being governed by two principles: <em>make it smarter</em> and <em>make it better</em>. Our goal is to make sure that every new feature added either makes Nova smarter or better. If an existing feature doesn't meet that standard, we tear it apart and re-build it until it does, even if you'll never notice the change. At the end of the day, it's about building a product we're proud of and something you'll love using.</p>

					<p>Believe us when we say, we're committed to getting the next generation of Nova into your hands, but we won't do so until we feel it's the best product it can possibly be. That involves a lot of time and effort, so at this stage, there is no timeline on when Nova 3 will be completed.</p>

					<h3>Where is <em>Feature X</em>?</h3>

					<p>Nova NextGen is being developed in milestones. Instead of trying to tackle lots of things at once, we're biting off small chunks of functionality and working on the entire system piece-by-piece. If you don't see a feature in the preview releases, it's likely it's been slated for work in a future milestone. If you have specific questions about a feature, feel free to post on the <a href="http://forums.anodyne-productions.com">forums</a>.</p>
				</div>

				<div id="vision" class="tab-pane">
					<dl>
						<dt><a href="https://medium.com/@anodyne/change-is-coming-ac512a37ec48">Change Is Coming</a></dt>
						<dd>Major versions are a necessity, but why do we make a bigger deal out of major releases?</dd>

						<dt><a href="https://medium.com/@anodyne/a-new-foundation-644b038d5d98">A New Foundation</a></dt>
						<dd>For years, Nova has been built on top of CodeIgniter, but that's changing. Learn about Nova's new foundation.</dd>

						<dt><a href="https://medium.com/@anodyne/nova-is-broken-96e6e1b519a1">Nova Is Broken</a></dt>
						<dd>Not just missing features, but the very philosophy Nova is developed with is out-dated and broken. Let's fix it.</dd>

						<dt><a href="https://medium.com/@anodyne/a-new-file-structure-429ee17cba22">A New File Structure</a></dt>
						<dd>Let's talk about a new look to the file structure of Nova and how it'll make things easier for everyone.</dd>

						<dt><a href="https://medium.com/@anodyne/site-themes-f4ce7ec474c0">Site Themes</a></dt>
						<dd>The way themeing works in NextGen will be very different from other versions of Nova. Find out more.</dd>

						<dt><a href="https://medium.com/@anodyne/application-review-center-6ef666631f5b">Application Review Center</a></dt>
						<dd>We're social with everything else, so why not application review too? Find out more about Nova's social application review feature.</dd>

						<dt><a href="https://medium.com/@anodyne/manifests-db08aae7d560">Manifests</a></dt>
						<dd>Gone are the days of rigid manifests that you have no control over. Borrowing an idea from Microsoft SharePoint, you can build your manifests to show what you want.</dd>

						<dt><a href="https://medium.com/@anodyne/access-control-934a460f5bd6">Access Control</a></dt>
						<dd>Control what people can and can't do even better than before.</dd>

						<dt><a href="https://medium.com/@anodyne/ranks-redux-d87343d832e6">Ranks Redux</a></dt>
						<dd>Ranks have been in need of a total rebuild for years. This new way of handling ranks is easy and powerful.</dd>

						<dt><a href="https://medium.com/@anodyne/dynamic-forms-2-0-1303956d0195">Dynamic Forms 2.0</a></dt>
						<dd>Dynamic forms have been awesome in Nova, but we want them to be even better.</dd>

						<dt><a href="https://medium.com/@anodyne/pages-b61ff5a8b3b2">Pages</a></dt>
						<dd>A dynamic and robust system needs an equally dynamic and robust page system so you can create and manage pages without using code.</dd>

						<dt><a href="https://medium.com/@anodyne/storytelling-2c65977d3000">Storytelling</a></dt>
						<dd>Missions, mission posts, and personal logs are going away. Learn about one of Nova NextGen's pillar features: storytelling.</dd>

						<dt><a href="https://medium.com/@anodyne/developers-fc2d97e35992">Developers</a></dt>
						<dd>Developers will have some fun new things to play with when NextGen arrives.</dd>

						<dt><a href="https://medium.com/@anodyne/trimming-the-fat-98cb19c56f7">Trimming the Fat</a></dt>
						<dd>What doesn't get put in is almost more important than what does get put in. Lots of stuff is coming out. Find out more.</dd>

						<dt><a href="https://medium.com/@anodyne/whats-next-4f4f6676fa5d">What's Next?</a></dt>
					</dl>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			<p><a href="{{ $_ENV['FS_URL'] }}nova/nova-nextgen-preview-3.zip" class="btn btn-primary btn-lg btn-block">{{ $_icons['download'] }} Preview Release 3</a></p>

			<h3>Requirements</h3>

			<ul>
				<li>PHP 5.5+</li>
				<li>MySQL, sqlite, or PostgreSQL</li>
				<li>Modern browser
					<ul>
						<li class="text-sm">Google Chrome 37+</li>
						<li class="text-sm">Mozilla Firefox 32+</li>
						<li class="text-sm">Internet Explorer 10+</li>
				</li>
			</ul>
		</div>
	</div>
@stop