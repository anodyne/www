<h2 class="preview"><span class="icn-preview-header">{{ $_icons['preview']['setup'] }}</span>Grand Setup Central <small>Get up and running in no time. 1... 2... Done. <a class="icn-preview icn-preview-sm tooltip-top" title="Read More" data-icon="x" data-toggle="modal" data-target="#setupModal"></a></small></h2>

<div class="row">
	<div class="col-md-4">
		<h3>All In One Place</h3>
		<p>We've re-thought how you get up and running with Nova and put everything you need in once place.</p>
	</div>
	<div class="col-md-4">
		<h3>It Reads Your Mind</h3>
		<p>You'll think Nova is reading your mind when it knows what you want to do without you having to tell it.</p>
	</div>
	<div class="col-md-4">
		<h3>Migrations</h3>
		<p>Powerful developer tools make installing and updating Nova and 3rd-party modules easier than ever.</p>
	</div>
</div>

<div id="setupModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title">Up and Running</h3>
			</div>
			<div class="modal-body">
				<p>Nova's install, update, and upgrade components have always been spread around the system without any thoughtful organization, a problem which has caused some missed components to get pushed out the door without being properly updated. In Nova 3, we've organized all the install, update, upgrade, and utility functionality into a single module that will handle anything and everything related to setup.</p>
				
				<p>The setup module is infinitely smarter than anything that's come before it. Like Nova 2, if you don't have a database connection set up, Nova will walk you through the process. Once that's done though, everything changes. Instead of relying on you to know what it should do, Nova makes a series of assumptions based on the database you point it toward.</p>

				<dl>
					<dt>If your database is empty...</dt>
					<dd>... then Nova will only let you do a fresh install since there's nothing to update and nothing to upgrade from.</dd>
					
					<dt>If there are Nova 3 tables in the database...</dt>
					<dd>... (and yes, Nova knows if they're Nova 3 tables) then Nova will automatically check to see if there's an update for you to do. If there is, you'll be able to do that right there. If there isn't, then you get access to the array of utility options (genre management, adding new tables, adding new fields, and running queries against the database).</dd>
					
					<dt>If there are Nova 2 tables in the database...</dt>
					<dd>... (right again, Nova knows if they're Nova 2 versus Nova 3 tables) then Nova will prompt you to do an upgrade from Nova 2. (You'll also have the option of doing a fresh install, but again, Nova _assumes_ you want to keep your old data.)</dd>
					
					<dt>If there are Nova 1 tables in the database...</dt>
					<dd>... (three for three, Nova knows the difference between version 1, version 2, and version 3 tables) then Nova will give you the unfortunate news that you're out of luck and need to upgrade from Nova 1 to Nova 2 and then you can upgrade to Nova 3. (We will not be providing a direct upgrade option from SMS or Nova 1. By the time Nova 3 ships, there's no reason people shouldn't be on at least Nova 2!)</dd>
				</dl>
				
				<h3>Migrations</h3>

				<p>Utilizing functionality from Nova 3's new core framework, we're able to provide a brand-new way of installing the system that improves the update process as well as providing built-in uninstall abilities. Additionally, third-party developers can take advantage of migrations in their own modules to provide install/uninstall abilities through QuickInstall (more information on that will be available through AnodyneDocs).</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>