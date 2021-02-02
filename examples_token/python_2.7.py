import httplib, urllib, base64

headers = {
    # Request headers
    'TOKEN_KEY': '{subscription key}',
}

params = urllib.urlencode({
    # Request parameters
    'includes': '{string}',
    'excludes': '{string}',
})

try:
    conn = httplib.HTTPSConnection('rest.farmaconnect.es')
    conn.request("GET", "/", "{body}", headers)
    response = conn.getresponse()
    data = response.read()
    print(data)
    conn.close()
except Exception as e:
    print("[Errno {0}] {1}".format(e.errno, e.strerror))
