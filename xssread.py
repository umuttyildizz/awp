#!/usr/bin/python
import os
import sys

x = sys.argv[1]	

sum = 0
toplam = 0
f=open("/home/umut/Desktop/proje/results/" + x + "-xss_simple_result", "r")
filecon = f.readlines()
fi = open("/home/umut/Desktop/proje/results/" + x + "-xss-simple-db", "w")
for line in filecon:
	if "A Cross Site Scripting" in line:
		sum += 1
		line = line.split("\n")[0]
#####		fi.write(line+"#"+line.split('"')[1]+"#"+line.split('"')[3]+"\n")
		fi.write(line.split('"')[1]+"#"+line.split('"')[3]+"#"+line+"\n")

f.close()
fi.close()
