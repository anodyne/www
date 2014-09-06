@extends('layouts.nova')

@section('title')
	Nova
@stop

@section('content')
	<p>Built by <a href="{{ route('home') }}">Anodyne Productions</a>, Nova is the premier RPG management software. With an easy-to-use interface, a built-in mini-wiki, vastly improved messaging and posting systems, a wide array of developer tools and much more, Nova is all you need to help you stop managing your game and get back to playing it.</p>
				
	<hr>

	<a name="features"></a><h1>Features</h1>

	<div class="row">
		<div class="col-sm-6">
			<h2>Post Locking</h2>
			
			<p>Frustrated when an update you just made to a post gets wiped out because someone else was editing at the same time? No more. Never have your changes overwritten with a smart post locking system that locks and unlocks multi-author posts during editing.</p>
		</div>
		
		<div class="col-sm-6">
			<h2>Say Anything</h2>
			
			<p>Site messages in Nova can now contain previously disallowed HTML content meaning that just about anything you want to share can be done from right inside Nova without having to touch any files. Just copy and paste your code into the message!</p>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6 col-md-3">
			<h3>Find</h3>
			<p class="text-sm">Search your content to find what you're looking for.</p>
		</div>
		
		<div class="col-sm-6 col-md-3">
			<h3>Change</h3>
			<p class="text-sm">Customize Nova with powerful tools for developers.</p>
		</div>
		
		<div class="col-sm-6 col-md-3">
			<h3>Share</h3>
			<p class="text-sm">Collaborate with users through a built-in mini-wiki.</p>
		</div>
		
		<div class="col-sm-6 col-md-3">
			<h3>Gather</h3>
			<p class="text-sm">Forms help you get the data you want from users.</p>
		</div>
	</div>

	<hr>

	<h2>New in Nova 2.3</h2>

	<dl>
		<dt>Character Metadata Available on Manifests</dt>
	    <dd>Use the new character metadata setting for each manifest to tell Nova which fields to pull out of the character information and display on your manifest. You can choose as many fields as you want to display, so make the manifest show more of the information your users are looking for.</dd>
		
		<dt>Updates to Dynamic Forms</dt>
	    <dd>No one likes seeing blank fields on a bio, so we've updated the dynamic forms to only display fields that have something in them. This will make your forms cleaner and easier to read, especially for entries that don't have a lot of data. We've also added a much-requested feature of being able to show inline help for forms when in create or edit mode.</dd>
		
		<dt>More Sim Stats</dt>
	    <dd>Get a better view at the stats for your game over its entire lifetime now with the expansion of the sim stats. In addition to being able to see stats for the current and previous months, there are also new metrics for the overall lifetime of the game including total posts, average posts per month and more.</dd>
	</dl>

	<hr>

	<div class="visible-md visible-lg">
		<a name="download"></a><h1>Download</h1>

		<hr>
	</div>

	<a name="start"></a><h1>Getting Started</h1>

	<p>If you're new to Nova, it can be a little daunting to get started. Use these helpful guides to get up and running with Nova in no time!</p>

	<dl>
		<dt>Let There Be Nova!</dt>
		<dd>If you don't have a copy of Nova 3 installed already (and you aren't migrating from Nova 2 or SMS 2), you'll want to do a fresh install. Read through this guide before you start and then use it as step-by-step instructions as you go through the process of installing Nova for the first time.</dd>
		
		<dt>Upgrade from Nova 2</dt>
		<dd>There was a lot of stuff that changed between versions 2 and 3 of Nova, but never fear, we have a thorough guide available to walk you through the process so that you'll be up and running on the latest and greatest in no time at all. Make sure you read through the document before attempting to upgrade! <strong class="text-danger">Please note: if you are still running Nova 1, you will need to upgrade from Nova 1 to Nova 2 before upgrading to Nova 3.</strong></dd>
		
		<dt>Upgrade from SMS 2</dt>
		<dd>If you're still running a game off of SMS 2 and want to migrate up to Nova 2, use this thorough guide that explains everything you need to know including what will and won't be migrated. Read through this guide before you start and then use it as step-by-step instruction as you upgrade from SMS. <strong class="text-danger">Please note: Nova 3.0 will be the last version to provide an upgrade path from SMS!</strong></dd>
		
		<!--<dt>&ldquo;This year we put a &lsquo;12&rsquo; on the box.&rdquo;</dt>
		<dd>Unlike ENCOM charging for their latest OS, we provide updates for free. Learn how to get the updates and make sure your sim is running the latest and greatest version of Nova.</dd>
		
		<dt>I've Got Nova, Now What?!</dt>
		<dd>Getting up and running is only half the battle. If you aren't familiar with Nova's features or how to manage things, this guide will help you go from Nova novice to Nova ninja in no time!</dd>
		
		<dt>&ldquo;I&rsquo;ve made a lot of special modifications myself.&rdquo;</dt>
		<dd>Like Han Solo and the intrepid <em>Millenium Falcon</em>, your bucket-of-bolts Nova install can make the Kessel Run in less than 12 parsecs too with some skins, MODs, and rank sets. Find out where to find them and how to install them before you take on the Empire!</dd>-->
	</dl>

	<hr>

	<a name="help"></a><h1>Get Help</h1>

	<p>Let's face it, sometimes things happen and you don't know how to fix it or you don't know the answer to a question. We're here to help in those situations. We've worked hard to provide as many options for you to get the help you need. If you need help with one of our products, these are the ways to get in touch:</p>

	<dl>
		<dt><a href="http://forums.anodyne-productions.com">The Forums</a></dt>
		<dd>Our forums are the main way to get help with our products. You can also use the forms to ask questions, get direction and talk with other members of the community. (Requires registration)</dd>
		
		<dt><a href="http://help.anodyne-productions.com">Anodyne Help Center</a></dt>
		<dd>We've spent a great deal of time building an extensive user guide for Nova through AnodyneDocs. If you don't see something here that you think should be included, make sure to drop us a line and let us know.</dd>
		
		<dt><a href="#">Email</a></dt>
		<dd>We're happy to answer questions over email, but the best place to get help is on the forums. Not only is it quicker for us to help you that way, but it also benefits other members of the community that may be having similar issues or someone who may come along several months from now with the same issue.</dd>
		
		<dt><a href="https://twitter.com/anodyneprod" target="_blank">Twitter</a> &amp; <a href="http://facebook.com/anodyneproductions" target="_blank">Facebook</a></dt>
		<dd>Feel free to post on our wall or send us a tweet with any issues you may be having. The best place to get help will still be the forums, but if you've got a quick question, we're happy to answer it through social media.</dd>
	</dl>
@stop