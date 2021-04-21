<?php namespace Tipoff\GoogleApi\Facades;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Facade;
use Tipoff\GoogleApi\DataTransferObjects\AccessToken;

/**
 * @see \Tipoff\GoogleApi\GoogleAuth
 *
 * @method static $this setIdentifier(string $identifier)
 * @method static $this setScopes(array $scopes)
 * @method static AccessToken accessToken($identifier = null)
 * @method static AccessToken makeAccessToken()
 * @method static AccessToken refreshAccessToken($refreshToken = null)
 * @method static AccessToken readAccessToken()
 * @method static void flushAccessToken()
 * @method static RedirectResponse redirect(?string $identifier = null, ?string $homeUrl = '/')
 * @method static string getAuthUrl()
 * @method static mixed routes()
 * @method static void useDriver(string $class)
 */
class GoogleOauth extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'google-oauth';
    }
}
