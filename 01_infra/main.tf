provider "aws" {
  # profile = "terraform" terraform cloudではプロフィールを指定するとエラー
  region  = "ap-northeast-1"
}

resource "aws_instance" "dev-instance" {
  ami           = "ami-079cd5448deeace01"
  instance_type = "t2.micro"
}

# ---------------------------------------------
# Variables
# ---------------------------------------------
variable "project" {
  type = string
}

variable "environment" {
  type = string
}
