import numpy
from keras.utils import np_utils
from keras.models import model_from_json
import sys
from sklearn import metrics

#define params
json_model = sys.argv[1]
h5_model = sys.argv[2]
test_file = sys.argv[3]
file_out = sys.argv[4]
window_sizes = 19

# load testing dataset
ds = numpy.loadtxt(test_file, ndmin = 2, delimiter=",")
X1 = ds[:,0:window_sizes*20].reshape(len(ds),1,20,window_sizes)
Y1 = ds[:,window_sizes*20]
true_labels = numpy.asarray(Y1)

# load json and create model
json_file = open(json_model, 'r')
loaded_model_json = json_file.read()
json_file.close()
loaded_model = model_from_json(loaded_model_json)
loaded_model.load_weights(h5_model)
print("Loaded model from disk.")

# write out the prediction results
predictions = loaded_model.predict_classes(X1)
print(predictions)

f = open(file_out,'w')
for x in predictions:
	f.write(str(x) + '\n')
f.close()

