# Laravel Lemonade Stand

A version of the classic video game coded in Laravel.

## Game Play - MVP

1. Game length defaults to 14 days

2. Game starts on day 1.

3. Each day:
  * The application generates a weather report.
  * The player chooses how many of each resource to purchase.
  * The player chooses how much to charge for a cup of lemonade.
  * At the end of the day, the application generates a sales report for the day.
  * When the sales report is displayed, the player is prompted to continue to the next day.

4. A running total of available resources is kept throughout the game.

5. The game ends after day 14 is complete.

6. The application remembers all completed games and lists the top 10 scores.
  * A score is the amount of money available after day 14.

7. Standard lemonade recipe:
  * 

8. Resources:
  * Lemons
    - Carries over to the next day
  * Sugar
    - Carries over to the next day
    - Sold as 4-lb (8-cup) bag
    - Costs: $2.00
    - Makes 16 cups
  * Cups
    - Carries over to the next day
  * Ice
    - Expires at the end of every day
    - Sold as 1-lb bag
    - Cost: $0.50
    - Makes 10 cups
  * Signs
    - Expire at the end of every day

9. Starting money: $20.00

10. Weather forecasts are given as conditions and temperature.

11. Conditions:
  * Hot and dry
  * Sunny
  * Partly Cloudy
  * Cloudy
  * Hazy
  * Windy
  * Rainy
  * Thunderstorms

12. Temperature:
  * Ranges between 60 - 100 degrees F.

13. Conditions and temperature affect sales.

14. Game ends if player is reduced to $0 or after 14 days.