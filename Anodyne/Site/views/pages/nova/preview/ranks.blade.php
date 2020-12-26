<h2 class="preview"><span class="icn-preview-header">{{ $_icons['preview']['ranks'] }}</span>Ranks Redux <small>A reimagined rank system that's as easy as it is powerful. <a class="icn-preview icn-preview-sm tooltip-top" title="Read More" data-icon="x" data-toggle="modal" data-target="#rankModal"></a></small></h2>

<div class="row">
	<div class="col-md-4">
		<h3>Rank Groups</h3>
		<p>Organize your ranks into logical groups that make finding and selecting them easier than ever.</p>
	</div>
	<div class="col-md-4">
		<h3>Rank Info</h3>
		<p>Stop duplicating information! Rank info lets you use the same information for multiple ranks.</p>
	</div>
	<div class="col-md-4">
		<h3>Rank Items</h3>
		<p>Rank items tie groups, info and images together to make Nova's new rank mangement a breeze.</p>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<h3>New Images</h3>
		<p><a href="https://kuro-rpg.net" target="_blank">Kuro-RPG</a> has developed a whole new set of rank images made up of multiple images for Nova 3.</p>
	</div>
	<div class="col-md-4">
		<h3>Live Preview</h3>
		<p>Wonder what your new rank will look like? Pick your images and Nova will show you a preview as you go.</p>
	</div>
	<div class="col-md-4">
		<h3>Easy Duplication</h3>
		<p>Duplicate any rank group, pick a new base image and you're off and running with a whole new rank set.</p>
	</div>
</div>

<div id="rankModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title">A New Rank System</h3>
			</div>
			<div class="modal-body">
				<p>The chorus of mumbled cursings toward the rank system in Nova haven't gone unnoticed. For years, we've looked to address the problem, but every idea was either A) too tough to implement, B) even more complicated than the current system, or C) not flexible enough for the various situations it needed to be able to handle. Truth be told, we'd given up on fixing the rank system, hoping instead that an epiphany would strike in the middle of the night. In fact, the inspiration for the new rank system came from outside Anodyne when Kuro-chan from Kuro-RPG approached with an innovative idea that piqued our interest.</p>

				<p>Since the initial release of SMS in 2005, ranks have been handled the same way: a single record in a single database table that references a single image. It's simple, straightforward and works. As genres were introduced, the concept had to expand a little to be able to handle the extra weight of some of the genres, but generally, stayed the same. Unfortunately, there have been a host of problems with ranks on both the user experience side as well as the technical side.</p>

				<p>On the user side of things, confusion abounded when it came to adding new ranks. There was the ever ambiguous class option (for editing and creating), the trick of setting the proper name and order to get a preview image on rank management and the poor user experience design when it came to actually editing the ranks themselves. All of these problems have added up to create a headache for admins, so much that some have told us they just don't try to mess around with ranks because it's too confusing. We can't say we blame them!</p>

				<p>Technically speaking, the biggest issue was file size. For the DS9 genre, each rank set weighed in at a hefty 363 images. Shipping with two full rank sets, that meant that the DS9 genre contained over 700 rank images, which in turn drove the size of the download up. In addition, using so many images meant that it was less efficient for the browser to cache the images since there were so many of them and they were constantly changing depending on the rank set being displayed.</p>

				<p>Given these problems, something needed to be done and it was Kuro-chan who sparked the change. He approached us early on in Nova 3's development with the idea to start using <em>multiple</em> images for each rank instead of just one. The idea immediately set off a wave of ideas and a new rank system developed pretty quickly from there.</p>

				<p>Ranks in Nova 3 are made up of two images: a base image (the collar) and a rank image (the pips). Using CSS styles, we're able to lay the base down and then the pips over top of the the base. Technically speaking, this makes caching images in the browser a lot more meaningful since the same base is used for a wide range of ranks.</p>

				<p>From the user perspective, we've greatly increased the flexibility of ranks. Previously, we provided only the rank colors that we felt were necessary, but nothing else. With the new system of ranks, we're able to provide significantly more colors and use only what we need. How many more? Nova 3's DS9 genre ships with 17 rank colors (17 cadet colors and the same 17 colors for standard duty uniforms as well). Then there are the pips themselves. Previously, they were tied to a single image, but now they're separate, so we don't just ship with the standard pips. No, now we ship with a much wider range for games that want to use other pips.</p>

				<p>But we didn't stop there, we took the opportunity to overhaul ranks in Nova 3 to make everything easier. In Nova 3, ranks are made up of three distinct components now: a group, an info record, and a rank record.</p>

				<h3>Rank Groups</h3>

				<p>Rank groups replace the confusing class option. All the class really was was a way to organize ranks together, but when you put them in to a dropdown menu, there wasn't a good way to actually indicate there was a different (hence Nova's showing a preview of the rank image). Rank groups allow you to organize ranks in a meaningful way that makes it clear exactly what ranks belong where. For the DS9 genre, Nova comes with two groups for admiralty ranks (naval and marine), six groups for naval ranks (command, operations, sciences, aerospace operations, intelligence and diplomatic corps) and one group for marine ranks. When you see a rank dropdown in Nova 3, the ranks are displayed within those groups so it's clear what you're selecting.</p>

				<p>Managing rank groups is dead simple (including drag-and-drop reordering) and even provides killer duplicate functionality. Not sure why you'd want to duplicate a rank group? Take the example of wanting to create a new set of ranks for your Marine Black Ops department. Instead of using the traditional green Marine ranks, you want the Marine pips on a black collar. With the old way, you'd have to find those images and upload all them to each of the rank sets then create each rank separately. In Nova 3, simply click the duplicate button and you'll be prompted to provide a name (in this case Marine Black Ops) and a new base image. Hit Submit and Nova goes out, duplicates any ranks in the group you want to duplicate and changes the base collar. In a few clicks, you've managed to create an entirely new group of ranks that's available to use immediately.</p>

				<h3>Rank Info</h3>

				<p>There's certain rank information that almost never changes, and if it does change, it changes for a lot of ranks, not just one. With that in mind, we've moved the basic information about ranks into info records. An info record contains the rank's name (Captain), short name (CAPT) and order in relation to other ranks. (There's a group option, but that's done more for presentation reasons for managing info records.) That means that if you want to change Captain to Fleet Captain, you change it once and anything that uses that info record changes instead of having to change multiple versions of the same rank just with a different image.</p>

				<p>We've taken full advantage of this in Nova 3 to provide naval rank rates, marine rank rates and a new aerospace operations rank rates (Air Force enlisted ranks). Want to do something beyond that? Just add a new rank info record and it's available to use on your rank records immediately.</p>

				<h3>Ranks</h3>

				<p>The rank record pulls all the information together. Each rank has a group ID, an info ID, and information about the images to use. When you manage a rank record, you'll see an info dropdown, a group dropdown and tabs with base images and pip images. The base and pip images are pulled directly from the server, so you don't have to manage those images in another place; Nova just knows where to pull them from and shows you what's available. On top of that, we've created a live preview so when you select a new base or pip image, the preview changes to show you what your rank will look like.</p>

				<p>Managing ranks in Nova 3 is dead simple and provides the ultimate flexibility and ease of use. Bet you never thought you'd hear that about rank management, did you?</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>