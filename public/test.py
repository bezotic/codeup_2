# variables are just called in python. No need for var or semicolon 

my_variable = 10
my_name = 'richard'
variable = 'int: '
#print is python's version of echo for php
print variable + str(my_variable)
print my_name
print '============='

# Integers and bool's as variables

my_int = 3
my_float = 1.23
my_bool = True

print my_int
print my_float
print my_bool
print "==================="
print "Whitespace"
#Remember to indent when writing def which is python's function. end with colon

def spam():
	eggs = 12
	print 'print def spam() as an example'
	return eggs
print spam()

"""
This is how you do multi line comments
Escaping characters is done with '\'
Example 'There\s' a snake in my boot
"""
print "===================="
print "Basic Math"

addition = 200 + 500
subtraction = 500 - 2
multiplication = 100 * 20
division = 108 / 9
exponent = 10 ** 2
# modulo can be used to decide if an int is odd or even, divisible or not.. etc
modulo = 5 % 4

print "200 + 500 is: " + str(addition)
print "500 - 2 is: " + str(subtraction)
print "100 * 2 is: " + str(multiplication)
print " 108 / 9 is: " + str(division)
print "10 ** 2 is: " + str(exponent)
print "5 % 4 is: " + str(modulo)
print "================"

def isEven():
	if modulo % 2 == 0:
		print "divisible"
		return True
	else:
		print "odd number"
		return False
print isEven()

print '==============='
print 'Access by Index'

pet = 'cats'
total = len(pet)
print 'total characters in cats is: ' + str(total)
first_letter = pet[0]
print 'the first letter in cats is: ' + first_letter
print '=============='
print 'manipulating strings'
print pet.lower()
print pet.upper()

print '================'

somecode = 'listerijadkjfoisjakjdsdsk'
message = 'this is my message'

def str_xor(s1, s2):
 return "".join([chr(ord(c1) ^ ord(c2)) for (c1,c2) in zip(s1,s2)])

encoded = str_xor(message, somecode)
# encoded == '\x15\x1b\r\x15L\x07@J^MT\x03\n\x1d\x15\x05\x0c\x0f'
decoded = str_xor(encoded, somecode)
# decoded == 'this is my message'

print encoded

print decoded








