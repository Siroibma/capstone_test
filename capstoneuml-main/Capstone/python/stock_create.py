#!/usr/bin/python
# -*- coding: utf-8 -*-
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


key = 'VG7VFW3TBRFINU4E'


# Function Name: stock_handler
# parameters: symbol(stock)
# Purpose: Given a symbol(stock symbol specifically) this function accesses the alphavantage api
# and generates a table based off the information given
# Known Issues: None at the moment

def stock_handler(symbol):
    base_url = 'https://www.alphavantage.co/query?'

    params = {
        'function': 'TIME_SERIES_DAILY',
        'symbol': symbol,
        'datatype': 'csv',
        'apikey': key,
        }

    response = requests.get(base_url, params=params)

    with open('stock.csv', 'wb') as file:
        file.write(response.content)

    df = pd.read_csv('stock.csv')
    df.set_index('timestamp', inplace=True)
    df = pd.read_csv('stock.csv')

    fig = px.line(df, x='timestamp', y='high')
    fig.show()


if __name__ == '__main__':
   stock_handler(sys.argv[1])