# Generating UUID and ApiTokens for Laravel Eloquent Models using Observers
Recently I needed to replace Eloquent's default auto-increment numeric ID with a UUID on a few of my models. 
This can be done in several ways, but after a good chat with the great people in the #Laravel channel on [PHPNL's Slack team](http://phpnl.nl), I decided to use [Laravel's Observers](https://laravel.com/docs/5.4/eloquent#observers). 
Also, I needed to generate API Tokens for certain models, so why not use the same solution.
 
This is an example repository.