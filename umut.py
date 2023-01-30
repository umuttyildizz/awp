#!/usr/bin/env python
import sys

print sys.argv[1]
--------------
#!/usr/bin/env
f = open('/home/umut/Desktop/proje/results/aresservis.com-xss_simple_result', "r")
line = f.readline()
for c in line:
print (c, end='')


----------------
def main():
	file = open("/home/umut/Desktop/proje/results/aresservis.com-xss_simple_result", "r")
	lines = file.readlines()
	file.close()
	for line in lines:
	line = line.strip()
	print (line)

main()
---------

print(f.read())







---------
f=open("/home/umut/Desktop/proje/results/aresservis.com-xss_simple_result", "r")
for line in f:
	if "ares" in line:
		fw=open("/home/umut/Desktop/proje/results/aresservis.com-xss_simple_result_vulcheck", "r")
		fw.writelines(line)
		fw.close()
		print(line)
	else:
		break
	print("vulnerability yok")
f.close()
