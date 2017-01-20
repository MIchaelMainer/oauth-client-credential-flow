# OAuth2 Client Credential Flow

Quick example of how to connect to Microsoft's services using the client credential flow.


## Get Started

1. Register a new app with Microsoft at https://apps.dev.microsoft.com
2. Click "Generate new password" to create an application secret (client secret) and copy it to the clipboard
3. Hit "Save"
4. Paste the application secret into the [LoginController](https://github.com/cbales/oauth-client-credential-flow/blob/master/app/Http/Controllers/LoginController.php)
5. Insert your client ID (application ID)
6. Specify the Azure tenant you want to run against (such as "contoso" if your email is "jill@contoso.com"). If you're using a personal account, specify "common" as the tenant
7. Run ```composer install``` to install PHP packages
8. Run ```php artisan serve``` to start the server!


## Next Steps
The application will provide you with an access token that can be used to grab resources from Microsoft Graph. You can change the resource URL in the [LoginController](https://github.com/cbales/oauth-client-credential-flow/blob/master/app/Http/Controllers/LoginController.php) to specify another resource.

You can use this token to query against Graph like this:
```php
curl_setopt($curl, CURLOPT_HEADER, array('Authorization: bearer <token>'));
```

To see more uses of grabbing data from Graph, check out this [PHP Connect Sample](https://github.com/microsoftgraph/php-connect-sample)
