import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.linear_model import LogisticRegression
import pickle

# Load the dataset
data = pd.read_csv('public/data_ukuran.csv')

# Feature columns
features = ['age', 'height', 'weight']

# Target column
target = 'ukuran'

# Split the data
X = data[features]
y = data[target]
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=42)

# Train the model
model = LogisticRegression()
model.fit(X_train, y_train)

# Save the model
with open('python_scripts/model.pkl', 'wb') as file:
    pickle.dump(model, file)