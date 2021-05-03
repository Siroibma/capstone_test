import csv
import plotly.express as px
import plotly
import pandas as pd
import requests
import sys
from alpha_vantage.timeseries import TimeSeries
import json
import plotly.graph_objs as go
import numpy as np
from twilio.rest import Client 


def user_messaging():
 
    account_sid = 'ACf44018909f37667ae6228c396c4e9d8b' 
    auth_token = '[AuthToken]' 
    client = Client(account_sid, auth_token) 
 
    message = client.messages.create(         
                              to='+19783970339' 
                          ) 
 
    print(message.sid)
