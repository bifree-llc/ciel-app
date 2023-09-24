provider "aws" {
  profile = "terraform"
  region  = "ap-northeast-1"
}

resource "aws_instance" "dev-instance" {
  ami           = "ami-079cd5448deeace01"
  instance_type = "t2.micro"
}