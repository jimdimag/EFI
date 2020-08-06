# Elevator Controls

# Road map to create app
-learn slim framework
-create function to randomly generate a car if no cars are in use
-create way to have the closest car go to the first floor when cars are in use.

-I know this was not the best approach to take to get this accomplished.  A few things that hampered this was the lack of knowledge of Slim.  I had to take a crash course to learn how to use it.  I was having a very hard time including a way to get the environmental variables, so I had to hard code them where they were needed.  Also, trying to use a separate template file to allow the user to use fields to change what floor they were going to, up or down, and which floor they were on was not working for me as well.  Had I used regular php files and not slim, I could have included all the markup in one spot and used a get command to get the info for the api.  Possibly running it through a js script to act when the button was clicked and then updated the api.