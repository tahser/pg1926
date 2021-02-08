List = []
values = True
print("Sayıları giriniz\n"
			"Listelemek için (q) yazınız")
while values:
		numbers = input()
		if numbers == "q":
				break
		else:
				List.append((int)(numbers))
print("Your list : ", List)
List.sort(reverse=True)

for i in List:
		if i % 2 == 1:
				print("En Büyük Tek Sayı: ", i)
				break
