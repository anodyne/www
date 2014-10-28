<h2 class="preview"><span class="icn-preview-header">{{ $_icons['preview']['forms'] }}</span>Forms 2.0 <small>More forms, more power, more control. <a class="icn-preview icn-preview-sm tooltip-top" title="Read More" data-icon="x" data-toggle="modal" data-target="#formsModal"></a></small></h2>

<div class="row">
	<div class="col-md-4">
		<h3>Sections &amp; Tabs</h3>
		<p>Now, any form can have sections or tabs instead of just the character and specifications forms.</p>
	</div>
	<div class="col-md-4">
		<h3>Field Restrictions</h3>
		<p>Lock down any field in any form to a specific access role to keep users from changing things they shouldn't.</p>
	</div>
	<div class="col-md-4">
		<h3>Inline Help</h3>
		<p>Inline help is available for any field in any form to give your users a hand with filling out the form.</p>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<h3>Smarter Management</h3>
		<p>Drag-n-drop management, new dropdown values management, smart section/tab management and more.</p>
	</div>
	<div class="col-md-4">
		<h3>User Info Form</h3>
		<p>Collect as much or as little info about a user that you want with a brand-new user information form.</p>
	</div>
	<div class="col-md-4">
		<h3>Application Info Form</h3>
		<p>Curious where a user heard about your game or their experience? Get it all with the application info form!</p>
	</div>
</div>

<div id="formsModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title">A Whole New World of Forms</h3>
			</div>
			<div class="modal-body">
				<p>In Nova 1, we introduced dynamic forms that allowed you to change certain forms by adding, removing, or editing fields. This allowed you to make sure the join, specs, tour, and docking forms were setup exactly like you wanted. From everything we heard, you loved the feature and by Nova 2 weren't sure how you ever managed without it. In Nova 3, we're making some major changes to dynamic forms to make them smarter and better.</p>
				
				<h3>Under the Hood</h3>
				
				<p>The single largest change to dynamic forms in Nova 3 is that every form, field, section, tab, value, and data piece is pulled from the same location in the database. (In previous versions, each form had its own tables.) This provides for a highly efficient way of storing all the information so that updates to the dynamic forms happen in one place and for all the forms throughout the system. This means that if we roll out new features, all your forms get them, not just select forms.</p>
				
				<h3>Sections and Tabs Everywhere</h3>

				<p>In previous versions of Nova, sections were limited to only the character and specs forms; tabs were limited to the character form. In Nova 3, we've given you the ability to create sections and tabs in whatever form you want. Make your forms as simple or complex as you want, it's entirely up to you now.</p>
				
				<h3>Smarter Management</h3>

				<p>Everything about form management is better.</p>

				<dl>
					<dt>Drag-and-drop</dt>
					<dd>Changing the order of fields within a section or field values is as simple and clicking, dragging, and dropping. Nova will save your changes silently so once you let go of the mouse, you're done.</dd>
					
					<dt>Only see what you should</dt>
					<dd>Editing a text field versus a text area versus a dropdown menu will show you only the options that are applicable to that field.</dd>
					
					<dt>Whole new field values management</dt>
					<dd>Admittedly, we missed the mark with managing field values in the first iteration of dynamic forms. Now, it's simpler and more straightforward so you know exactly what's going on and how to make your changes.</dd>
					
					<dt>Red light, green light</dt>
					<dd>A brand-new automated process constantly evaluates your active fields, sections, and tabs to make sure that sections and tabs are active only if there are active fields in them. No more forgetting to turn off a section or tab when you make changes, Nova will do it for you.</dd>
				</dl>
				
				<h3>Field Restrictions</h3>
				
				<p>We've taken the level of control you have with forms to the next level by adding per-field access role restrictions. Now, you can set a field as being editable only by someone who has a certain access role (or above). Everyone else will simply see the content stored in the database or nothing at all.</p>
				
				<h3>Inline Help</h3>
				
				<p>Sometimes, a certain field's purpose may not be clear from the label, or it may require an explanation of what's required. Now, you can create inline help that will appear beneath the field to help users fill out the fields properly.</p>
				
				<h3>User Form</h3>
				
				<p>Nova has always had a character form, but we've never allowed you to collect information about the user in a highly dynamic way. In Nova 3, we've added a user form to collect anything you want from your players. Like currently, user information will only be shown to members of the game when they're logged in, so you don't have to worry about sharing something with the world that shouldn't be shared.</p>
				
				<h3>Application Info Form</h3>
				
				<p>Much like the new user form, Nova 3 allows a new level of control when it comes to collecting information from users on the join form. The next big way is the application info form that will allow admins to get information from applicants like their simming experience, where they heard about the game, and anything else a game master may think is important. The information will be stored in the database and accessible through ARC.</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>