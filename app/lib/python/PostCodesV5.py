from postcodes import PostCoder
import json
import socket

def PostcodeInfo(Postcode):
	Postcode = Postcode.upper()
	pc = PostCoder()
	result = pc.get(Postcode)
		
	if str(result) != "None":
		location = result['geo']
		for key, value in location.items():
			if (key == "lat"):
				loc_lat = value
			if (key == "lng"):
				loc_long = value

		location = result['administrative']
		for key, value in location.items():
			if (key == "constituency"):
				for key1, value1 in value.items():
					if (key1 == "title"):
						loc_const = value1
			if (key == "district"):
				for key2, value2 in value.items():
					if (key2 == "title"):
						loc_dist = value2
					
		return(json.dumps({"Postcode": Postcode, "lat": loc_lat, "lng": loc_long, "const": loc_const, "coun": loc_dist, "IP": socket.gethostbyname(socket.gethostname())}, sort_keys=True))
		# write_to_file = Postcode + ", " + str(loc_lat) + ", " + str(loc_long) + ", " + str(loc_const) + ", " + str(loc_dist) + "\n"
	else:
		return(json.dumps({"Postcode": Postcode, "lat": "N/A"}))
		# write_to_file = "NOT FOUND: " + Postcode + "\n"
	# print write_to_file


print 'Search info about Postcode:'
Postcode = raw_input()
print PostcodeInfo(Postcode)