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
- To commit these changes follows these commands
- - First
