import random

# Function to roll a dice
def roll_dice():
    return random.randint(1, 6)

# Game setup
player1_name = input("Enter player 1's name: ")
player2_name = input("Enter player 2's name: ")

# Game loop
while True:
    input(f"\n{player1_name}, press Enter to roll the dice.")
    player1_roll = roll_dice()
    print(f"{player1_name} rolled a {player1_roll}!")

    input(f"\n{player2_name}, press Enter to roll the dice.")
    player2_roll = roll_dice()
    print(f"{player2_name} rolled a {player2_roll}!")

    if player1_roll > player2_roll:
        print(f"\n{player1_name} wins!")
    elif player1_roll < player2_roll:
        print(f"\n{player2_name} wins!")
    else:
        print("\nIt's a tie!")

    play_again = input("\nDo you want to play again? (yes/no): ")
    if play_again.lower() != 'yes':
        break

print("\nThanks for playing!")
