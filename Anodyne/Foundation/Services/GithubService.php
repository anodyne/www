<?php namespace Anodyne\Foundation\Services;

use Github\Client;

class GithubService {

	protected $client;

	public function __construct(Client $client)
	{
		$this->client = $client;
	}

	public function currentRelease($user, $repo)
	{
		return $this->releases($user, $repo)[0];
	}

	public function releases($user, $repo)
	{
		return $this->client->api('repo')->releases()->all($user, $repo);
	}
	
}