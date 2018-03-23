from sklearn.externals import joblib
from flask import Flask, abort, jsonify, request, render_template
import numpy as np
import json

app = Flask(__name__)

prophet = joblib.load('CAC40/model.pkl')


@app.route('/api', methods=['GET'])
def get_delay():
    p = request.args['periode']
    future = prophet.make_future_dataframe(periods=10) 
    forecast = prophet.predict(future)
    # return a json value
    n,m = forecast.shape
    r = (forecast['yhat'][n-1] - forecast['yhat'][n-10-1])/forecast['yhat'][n-1]
    t=r*100
    return json.dumps({'rendement':t});