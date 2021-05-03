#!/usr/bin/python3.7
import csv
import requests
import pandas as pd
from alpha_vantage.timeseries import TimeSeries



key =


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


if __name__ == '__main__':
   stock_handler('AAPL')