a = int(input("enter the mark:"))
if a>=0 and a<=100:
    print("valid mark")
else:
    print("invalid mark")
if a>=50:
    print("Pass")    
if a>=90:
    print("Grade A")    
elif a>=80:
    print("Grade B")
elif a>=70:
    print("Grade C")
elif a>=60:
    print("Grade D")
elif a>=50:
    print("Grade E")
else:
    print("Fail")
