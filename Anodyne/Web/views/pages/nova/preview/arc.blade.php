<h2 class="preview"><span class="icn-preview-header">{{ $_icons['preview']['arc'] }}</span>Application Review Center <small>Get everyone involved with social application review. <a class="icn-preview icn-preview-sm tooltip-top" title="Read More" data-icon="x" data-toggle="modal" data-target="#arcModal"></a></small></h2>

<div class="row">
	<div class="col-md-4">
		<h3>Set Rules</h3>
		<p>Define rules to run so the right users are automatically added to an application when it comes in.</p>
	</div>
	<div class="col-md-4">
		<h3>Comment</h3>
		<p>Engage in meaningful conversation about the application to make the best decision for your game.</p>
	</div>
	<div class="col-md-4">
		<h3>Vote</h3>
		<p>Any member of the review can vote <strong class="text-success">yes</strong> or <strong class="text-danger">no</strong> on an application to help you make your decision.</p>
	</div>

	<div class="col-md-4">
		<h3>Manage</h3>
		<p>Add or remove people and make sure everyone who should be involved in the review, is involved.</p>
	</div>
	<div class="col-md-4">
		<h3>History</h3>
		<p>See a complete history of any application, including how people voted and their comments.</p>
	</div>
	<div class="col-md-4">
		<h3>Respond</h3>
		<p>When a decision is made, respond directly to the applicant from the review and store it for later.</p>
	</div>
</div>

<div id="arcModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title">Getting Everyone Involved</h3>
			</div>
			<div class="modal-body">
				<p>The Application Review Center (ARC) is easily one of the biggest features of Nova 3. Up until now, application review has been a chore that required multiple emails/private messages between several players to come up with a decision about whether an applicant should be accepted to the game. Some RPGs go even farther and involve more than one or two people in a review, significantly weighing down the application process.</p>
				
				<p>Enter ARC.</p>
				
				<p>ARC is a revolutionary new social application review process that allows as many (or as few) players to help review an application, comment on it, vote on whether they think the player should be accepted, and give the decision makers more input on gathering the best writers for the game. And that's where ARC has the most impact: giving current players a stake in deciding the future direction of the game.</p>
				
				<h3>Application Rules</h3>
				
				<p>ARC's impact on applications starts from the moment a prospective player hits the submit button on the join form. Rules are run against every new application to determine who should be part of the review (though admins can go through and manually add users to a review as well). Behind-the-scenes, admins have the ability to create as many rules as they want to help determine who should be involved in the review of new character.</p>
				
				<p>When it comes to types of rules, there are only two: global rules and department rules. Global rules apply to every application that comes in the door. By default, Nova comes with a global rule to automatically add the assistant game manager (usually the Executive Officer) to each review. Department rules are only applied when the position being applied for is part of a specific department. This allows you to add specific people to an application only in situations where it impacts them (like applying for a position in their department).</p>
				
				<p>Where application rules really show their flexibility is in the options for who to include. You can create conditions for which users to pull in to a given review. For example, you can reference a user explicitly ("add John Doe to the review") or you can automatically pull in the active user(s) in a given position ("add the user of the character in position X to the review"). As an example, you could create a department rule for the Science department that adds the Chief Science Officer to any Science department application. If your current Chief Science Officers leaves and you get a new one, the new user is automatically used instead of the old user.</p>
				
				<h3>The Review</h3>
				
				<p>Once you're inside a review, there's an incredible amount of information at your fingertips, even as a simple reviewer. As a decision maker, you have even more at your disposal than you ever had previously. The review is the command center for evaluating new players to join the game.</p>
				
				<p>A premium has been placed on the interaction between members of the review. To highlight that priority, the comment box and voting panel are front and center. These two features create a "conversation" of sorts between everyone involved in the review to talk about the application, make suggestions for improvements, and come to a consensus on how the application should be handled. (Don't worry, admins, the final decision rests with you, but ARC gives players more input into the game than ever before.) In addition to commenting on an application, another primary feature of a review is voting. With a simple click, you can vote <em>yes</em> or <em>no</em> on an application. If at any point you change your mind, simply click the other button and your vote will be changed. A quick summary of the voting so far makes it clear how the members of the review feel when it comes to that particular applicant.</p>
				
				<p>Below the interactive pieces of the review is all the information you'll need to make your decision: the review history, the character bio, the user bio including experience and where they heard about the game (decision makers only), the sample post (unless you've chosen not to use a sample post), and several admin options for the review (decision makers only). Nothing changes about the actual process involved with reviewing an application, but now, all that back and forth over an application can be done without ever leaving Nova.</p>
				
				<h3>Admin Pieces</h3>
				
				<p>For privacy reasons, the user information is hidden from non-admin members of the review. Any information collected in the user form will be found here as well as their name, email address, gaming experience, and where they heard about the game. That isn't all though, the admin section contains several additional features to make managing the review easier.</p>
				
				<p>First is the ability to manually add users to a review. This is helpful if one of the reviewers is on LOA or has a conflict of interest. Once submitted, the added users will be emailed and notified they've been added to the review.</p>
				
				<p>To make interacting with the applicant easier, there's a simple form to send the applicant an email. This is especially useful if there are questions or tweaks need to be made to the application. To keep a record of these interactions, the email sent to the applicant is stored in the database as well and can be seen by everyone involved with the review.</p>
				
				<p>Finally, the final response to the application is handled from within ARC now instead of character management. Select the final decision (approve or reject) and fill out the fields as necessary and the decision will be logged as well as notifying the applicant of the final decision. Like emails to the applicant, the final decision is stored in the database and shown in the review history.</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>