from postcodes import PostCoder
import json
import csv
import string


def PostcodeRegion(Postcode):
	Postcode = Postcode.upper()
	pc = PostCoder()
	result = pc.get(Postcode)
		
	if str(result) != "None":
		# location = result['geo']
		# for key, value in location.items():
			# if (key == "lat"):
				# loc_lat = value
			# if (key == "lng"):
				# loc_long = value

		location = result['administrative']
		for key, value in location.items():
			# if (key == "constituency"):
				# for key1, value1 in value.items():
					# if (key1 == "title"):
						# loc_const = value1
			if (key == "district"):
				for key2, value2 in value.items():
					if (key2 == "title"):
						loc_dist = value2
					
		return(loc_dist)
	else:
		return("N/A")



def CrimeInfo(Postcode):
	Region = PostcodeRegion(Postcode)
	f = open('CrimeInfoOutput.csv', 'w')
	with open('localauthoritycrimedata.csv', 'rU') as g:
		reader = csv.reader(g)
		print "Crimes in " + Region + " in rolling year to 30/06/2011:"
		for row in reader:
			CrimeList = string.split(row[0],",")
			if CrimeList[1].decode("cp1251") == Region and CrimeList[0] == "30/06/2011":
				print CrimeList[5], CrimeList[6]
				f.write(Region + " " + CrimeList[0] + " " + CrimeList[5] + ": " + CrimeList[6] + "\n")
		
print 'Search info about Postcode:'
Postcode = raw_input()
CrimeInfo(Postcode)