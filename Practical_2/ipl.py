import pandas as pd
import numpy as np
import matplotlib.pyplot as plt 

df = pd.read_csv('penguins.csv')

print(df)

print(df.head())

plt2 = df['bill_length_mm']
plt.hist(plt2)
plt.show()