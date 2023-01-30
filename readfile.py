#!/usr/bin/python
import os
import sys

x = sys.argv[1]	

sum = 0
toplam = 0
f=open("/home/umut/Desktop/proje/results/" + x + "-xss_simple_result", "r")
filecon = f.readlines()
fi = open("/home/umut/Desktop/proje/results/" + x + "-sqli-db", "w")
for line in filecon:
	if "vulnerability" in line:
		sum += 1
		line = line.split("\n")[0]
		fi.write(line.split('"')[1]+"#"+line.split('"')[3]+"#"+line+"\n")
if sum == 0:
	print("Kayit yok")
for line2 in filecon:
	if "SQL" in line2
		toplam +=1
		line2 = line2.split("\n")[0]
		fi.write(line2.split('"')[1]+"#"+line2.split('"')[3]+"#"+line2+"\n")
f.close()
fi.close()
