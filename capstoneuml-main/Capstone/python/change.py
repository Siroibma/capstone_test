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


def latest_change(filename, percent):
    df = pd.read_csv(filename)
    percent_change = int(percent) / 100

    print(df.head(3))
    
    if df.iloc[0, 1] - df.iloc[1, 1] > 0:
        percent_change = 1 - (df.iloc[0, 1] / df.iloc[1, 1])
        return percent_change
        
    elif df.iloc[0, 1] - df.iloc[1, 1] == 0:
        percent_change = 1 - (df.iloc[0, 1] / df.iloc[1, 1])
        return percent_change
    elif df.iloc[0, 1] - df.iloc[1, 1] < 0:
        percent_change = 1 - (df.iloc[0, 1] / df.iloc[1, 1])
        return percent_change

if __name__ == '__main__':
   latest_change(sys.argv[1], sys.argv[2])