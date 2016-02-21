deltax=12.5
deltay=255
ratio= 255/12.5
result = []
rad = 0
number=25
print("hello")
for i in range(1,number):	
	result.append(float(number-i**2.00/number))	
print(result)

#radius plus next radius faster in the middle 25**2 will be the largest value
#largest radius squared will give a range of numbers 1 to  625
#each of these values will be incrementented with larger and larger values
#no linear because the points will show much quicker when tangent to the gray
#the time will be fixed, so the radius needs to increase with larger values at first
#and smaller values as it gets closer to 25

