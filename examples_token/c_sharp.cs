using System;
using System.Net.Http.Headers;
using System.Text;
using System.Net.Http;
using System.Web;

namespace CSHttpClientSample
{
    static class Program
    {
        static void Main()
        {
            MakeRequest();
            Console.WriteLine("Hit ENTER to exit...");
            Console.ReadLine();
        }
        
        static async void MakeRequest()
        {
            var client = new HttpClient();
            var queryString = HttpUtility.ParseQueryString(string.Empty);

            // Request headers
            client.DefaultRequestHeaders.Add("TOKEN_KEY", "{subscription key}");

            // Request parameters
            queryString["includes"] = "{string}";
            queryString["excludes"] = "{string}";
            var uri = "https://rest.farmaconnect.es/";

            var response = await client.GetAsync(uri);
        }
    }
}	