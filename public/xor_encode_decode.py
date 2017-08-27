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