<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Award Nomination for {{ ucfirst($type) }}</h1>

		<p><strong>Nominator:</strong> {{ $fromName }} ({{ $fromEmail }})</p>

		<p><strong>Award:</strong> {{ $award }}</p>

		@if ($type == 'game')
			<p><strong>Game:</strong> {{ $gameName }}</p>
			
			@if ( ! empty($gameEmail))
				<p><strong>Game Contact:</strong> {{ $gameEmail}}</p>
			@endif

			<p><strong>URL:</strong> {{ $gameURL }}</p>
		@endif

		@if ($type == 'individual')
			<p><strong>Recipient:</strong> {{ $recipientName }} ({{ $recipientEmail }})</p>
		@endif

		<p><strong>Reason:</strong> {{ $reason }}</p>
	</body>
</html>