import re
pattern = str("^[a-zA-Z0-9]+[-_]?[a-zA-Z0-9]+[@][a-zA-Z0-9]+[.]+[a-zA-Z]+[a-zA-Z]")
length = int(input("Eleman Sayısı : "))
mail = input("Test edilecek mail adresi : ")
def deneme_last(denemeMail):
		if not re.match(pattern, denemeMail):
				print("Mail adresiniz yanlıştır.")

		elif not pattern:
				print("@ işareti giriniz")

		else:
				print("Mail adresiniz doğrulanmıştır.")

def deneme_email(denemeMail, denemeLength):
		x = mail.replace("@", " ")
		y = x.replace(".", " ")
		z = y.split()
		loop = True
		while loop:
				if denemeLength == 1:
						if len(z) == 2:
								deneme_last(mail)
								break
						else:
								print("Mail adresiniz yanlıştır.")
								break

				elif denemeLength == 2:
						if len(z) == 3:
								deneme_last(mail)
								break
						else:
								print("Mail adresiniz yanlıştır.")
								break

				elif denemeLength == 3:
						if len(z) == 4:
								deneme_last(mail)
								break
						else:
								print("Mail adresiniz yanlıştır.")
								break

				else:
						print("Geçersiz uzunluk!")
						correct = False
						break
deneme_email(mail, length)
