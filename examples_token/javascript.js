const KEY = '111111-2222-3333-4444-5555555555';
const URL = 'https://rest.farmaconnect.es/';

const SETTING =
{
    method: 'GET', 
    mode: 'cors', 
    cache: 'no-cache',
    headers: 
    {
      'Content-Type': 'application/json',
      'TOKEN_KEY':KEY
    }
}

const REQUEST_TOKEN = async () =>
{
    const RESPONSE = await fetch( URL, SETTING );

    return RESPONSE.json();
}