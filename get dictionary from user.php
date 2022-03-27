#Task3:

print("Get a dynamic dictionary from user")
a={}
b=int(input("enter the range:"))
c=int(input("enter the range:"))
for i in range(b,c):
    key=input("enter the key to add in dictionary:")
    value=input("enter the value to add in dictionary:")
    a[key]=value
print(a)