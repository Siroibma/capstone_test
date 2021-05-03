import os
from twilio.rest import Client
from twilio.http.http_client import TwilioHttpClient

function test(numbers, mssg):
    proxy_client = TwilioHttpClient()
    proxy_client.session.proxies = {'https': os.environ['https_proxy']}





    client = Client(account_sid, auth_token, http_client=proxy_client)

    message = client.messages.create(
                              body=[Mssg],
                              to=[numbers]
                          )

    print(message.sid)