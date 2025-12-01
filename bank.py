class BankAccount:
  
  def __init__(self, owner, balance):
    self.owner = owner
    self.balance = balance

  def deposit(self, amount):
    if amount > 0:
      self.balance += amount
    else:
        print("cant deposit negative")

  def withdraw(self, amount):
    if amount > 0 and self.balance > amount:
      self.balance -= amount
    else:
      print("cant withdraw negative or cant withdraw more than balance")

  def printInfo(self):
    print(self.balance)
    print(self.owner)






