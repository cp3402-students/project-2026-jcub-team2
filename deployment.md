- Local environment setup
- How changes are made and committed
- How changes are tested
- Deployment to staging
- Deployment to production
- Integration of project management and communication tools


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

## Deployment To Production

## Integration Of Project Management And Communication Tools
- To manage our project we use a Trello board to help assign and split up tasks into easily achievable  goals.
- Discord
- 
