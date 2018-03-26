from sklearn.externals import joblib
from flask.ext.cors import CORS, cross_origin
from flask import Flask, abort, jsonify, request, render_template
import numpy as np
import json

app = Flask(__name__)
app.config['SECRET_KEY'] = 'the quick brown fox jumps over the lazy   dog'
app.config['CORS_HEADERS'] = 'Content-Type'
cors = CORS(app, resources={r"/api": {"origins": "http://localhost:8080"}})

prophet = joblib.load('CAC40/model.pkl')

@app.route('/')
def home():
    return render_template('index.php')

@app.route('/api', methods=['GET'])
@cross_origin(origin='localhost',headers=['Content- Type','Authorization'])
def get_delay():
	p=request.args.get('periode', 0, type=int)
	
	future = prophet.make_future_dataframe(periods=p) 
	forecast = prophet.predict(future)
	# return a json value
	n,m = forecast.shape
	r = (forecast['yhat'][n-1] - forecast['yhat'][n-p-1])/forecast['yhat'][n-p-1]
	t=r*100
	t = round(t, 2)
	forecast['yhat'][n-1] = round(forecast['yhat'][n-1], 2)
	forecast['yhat'][n-p-1] = round(forecast['yhat'][n-p-1], 2)
	return json.dumps({'act_prix': forecast['yhat'][n-p-1] ,'predict':forecast['yhat'][n-1],'rendement':t});

app.run(port=5000, debug=True)