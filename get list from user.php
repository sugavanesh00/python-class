#Task2:

print("Get a dynamic list from user")
list=[]
a=int(input("enter the range:"))
b=int(input("enter the range:"))
for i in range(a,b):
     c=int(input("enter the values to add in list:"))
     list.append(c)
print(list)