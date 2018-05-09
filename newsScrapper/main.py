# import libraries
import urllib2
import bs4
import csv
from datetime import datetime
data = []

# specify the url
quote_page = 'https://www.washingtonpost.com/news/powerpost/?utm_term=.46e8da5f7e3b'

# query the website and return the html to the variable 'page'
page = urllib2.urlopen(quote_page)

# parse the html using beautiful soup and store in variable 'soup'
soup = bs4.BeautifulSoup(page, 'html.parser')

# Take out the <div> of name and get its value
name_box = soup.find_all(['h3'])


# print datetime.now()
for i in name_box:
    # name = name_box.text.strip() # strip() is used to remove starting and trailing
    # print i.text.strip()
    name = i.text.encode('utf-8').strip()
    data.append(name)
    # print data


# specify the url
quote_page = 'https://www.cnn.com/us'

# query the website and return the html to the variable 'page'
page = urllib2.urlopen(quote_page)

# parse the html using beautiful soup and store in variable 'soup'
soup = bs4.BeautifulSoup(page, 'html.parser')

# Take out the <div> of name and get its value
name_box = soup.find_all('h3', attrs={'class':'cd__headline'})


# print datetime.now()
for i in name_box:
    # name = name_box.text.strip() # strip() is used to remove starting and trailing
    # print i.text.strip()
    name = i.text.encode('utf-8').strip()
    data.append(name)
    # print data

# open a csv file with append, so old data will not be erased
# with open('index.csv', 'a') as csv_file:
#     writer = csv.writer(csv_file)
#     for name in data:
#         writer.writerow([name, datetime.now()])

with open('index.csv', 'a') as csv_file:
    writer = csv.writer(csv_file)
    # The for loop
    for name in data:
        writer.writerow([name, datetime.now()])

