
# Deployment Documentation

## Local Environment

### Setup
- To setup the local environment you first need to install docker desktop on your device and open it. Once thats done download the two files in the setup github branch those files being "docker-compose.yml" and "DockerFile" (make sure the DockerFile is a file extension, not a .txt). Put these downloaded files into a folder on your device and open this folder in terminal. Then run the command "docker compose up -d" to run the docker container. Once the docker container is running the local environment is setup. 

### How changes are made and committed 
- The changes to the kctennisblast theme are made through the themes php files and are not hard coded into the website to allows users to simply adjust factors such as logo, title, navbar etc. 
- To commit these changes follows these commands:
  - First make sure your in the right branch on your local machine, run "git switch <branch-name>" (in this case it will be 'development'.
  - Then add your changes to the local git: "git add ."
  - Then commit these changes: "git commit -m "Commit Message" - make sure the commit will follow the style "This commit will ... commit message"
  - The push to the github repo: "git push -u origin <branch-name>" (this branch will be developer)
 
### How changes are tested
- The changes in our development stage are tested in multiple stages to avoid issues.
- The first being our local environment, once user edit the theme can can double check on their localhost if the theme works as intended
- The second way to test our local environment is to have another user pull from the github and tests to see if the changes are in effect and if they are working as intended
- The final stage of testing is pushing the changes to the staging server,testing this time on the external environment.

## Deployment To Staging Environment
- The deploy the kctennisblast theme to our staging environment we use GitHub Actions. Using github actions we have a script that once content is added to the staging branch on the github repo, GitHub Actions will automatically push the changes to the theme onto the staging server.
- Once the theme has been pushed through to the staging, the theme is then tested on the external environment making sure all changes have properly carried over and there are no bugs.
- Once the theme is working, we will add the specific kctennisblast website content into the site, including pages, images, content, etc.


## Deployment To Production
- Once we are happy with the design of the staging site and have confirmed there are no errors, will we then export our database from our staging server.
- We will then push our kctennisblast-theme from our staging branch in GitHub, to our main branch in GitHub which will act as our production server branch.
- We will then import our downloaded database from the staging server onto the production 

## Integration Of Project Management And Communication Tools
- To manage our project we use a Trello board to help assign and split up tasks into easily achievable  goals.
- Discord is our teams preferred method of communication, we will put updates and messages regarding the project in our discord server. We have also added bots to the that will automatically track github commits and trello updates to keep team members aware of whats happening.
  
