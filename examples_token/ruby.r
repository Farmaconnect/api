require 'net/http'

uri = URI('https://rest.farmaconnect.es/')

query = URI.encode_www_form({
    # Request parameters
    'includes' => '{string}',
    'excludes' => '{string}'
})
if query.length > 0
  if uri.query && uri.query.length > 0
    uri.query += '&' + query
  else
    uri.query = query
  end
end

request = Net::HTTP::Get.new(uri.request_uri)
# Request headers
request['TOKEN_KEY'] = '{subscription key}'
# Request body
request.body = "{body}"

response = Net::HTTP.start(uri.host, uri.port, :use_ssl => uri.scheme == 'https') do |http|
    http.request(request)
end

puts response.body