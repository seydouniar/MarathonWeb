import flask
app = flask.Flask(__name__)
#-------- MODEL GOES HERE -----------#
#-------- ROUTES GO HERE -----------#
if __name__ == '__main__':
'''Connects to the server'''
HOST = '127.0.0.1'
PORT = 4000      #make sure this is an integer
app.run(HOST, PORT)