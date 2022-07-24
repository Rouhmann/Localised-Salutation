import mysql.connector
from tabulate import tabulate
import configparser

config = configparser.ConfigParser()
config.read("Config.ini")

login = config['Database']['user']
pw = config['Database']['password']
DB = config['Database']['DB']
table = config['Database']['table']

cnx = mysql.connector.connect(user=login, password=pw, database=DB)
cursor = cnx.cursor(buffered=True)

query = ("SELECT * FROM " + table)

cursor.execute(query)
#conn.commit()
result=cursor.fetchall()

#Print table to check if it is loaded correctly
print(tabulate(result, headers=['Customer Number', 'First Name', "Last Name", "Language", "Business Field", "Revenue in Mil $"], tablefmt='psql'))

cursor.close()
cnx.close()



