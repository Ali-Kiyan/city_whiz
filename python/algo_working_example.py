#!/usr/bin/env python3.5

import json
import random
import threading

def gen():

	with open('data.json', 'w') as f:
		x = [random.random() for i in range(6)]
		y=[i for i in range(6)]
		for i in range(1,6,2):
			if x[i]>0.5:
				y[i]='left'
			else:
				y[i]='right'
		#data2 = {}
		#for i in range(3):
			#data2=[]
			#print(data2)

		data = {
			'stations':{
				'1':{
				   'station' : 'oxford circus',
				   'lines' : {
				   		'circle':{
							'section':[x[0],1-x[0]],
							'cars':[x[1],1-x[1]]
							},
				   },
				   'recomendation':y[1],
			   },
			   '2':{
		   		   'station' : 'bond street',
		   		   'lines' : {
		   		   		'circle':{
							'section':[x[2],1-x[2]],
		   					'cars':[x[3],1-x[3]]
							},
		   		   },
				  'recomendation':y[3],
				},
				'3':{
 		   		   'station' : 'marble arch',
 		   		   'lines' : {
 		   		   		'circle':{
 							'section':[x[4],1-x[4]],
 		   					'cars':[x[5],1-x[5]]
 							},
 		   		   },
				  'recomendation':y[5],
 				},
			},
		}
		json.dump(data, f)
		print(x)

def app():
	threading.Timer(5.0, app).start()
	gen()

if __name__ == "__main__":
	app()
