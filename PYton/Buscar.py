from   googlesearch import search

google_query =str(input("ingresa lo que desees buscar"))

for  i  in search (google_query, start=0, pause=2):
    print (i)