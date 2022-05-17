# Developer-Files

## Deploy Instructions

- install docker and enable wsl2

- run `docker image build -t php8 .`

- run `docker run -it --rm -p 80:80 -p 443:443 --name php8site -v "$PWD":/var/www/html php8`

- open localhost

## Example

- Below is how it should look when the mouse is over the vocab which shoes the popup

<img src="/images/screenshot-definition-popover.png">