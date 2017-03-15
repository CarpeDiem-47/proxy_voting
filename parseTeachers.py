from bs4 import BeautifulSoup
import re

soup = BeautifulSoup(open("D:\\Projects\proxy_voting\med.html"),"html.parser")
#D:\Projects\proxy_voting\parseTeachers.py
#="https://apps.fhict.nl/hellotalent/profile/I874073"
print("links")
for teacher in soup.find_all('a', {'class' : 'teacher'}):
    print('"'+teacher['href']+'",')
print("names:")
for teacher in soup.find_all('a', {'class' : 'teacher'}):
    print('"'+teacher.contents[0]+'",')