pipeline {
    agent none
    stages {
        stage("test php7.1") {
            agent {
                docker "php:7.1-fpm"
            }
            steps {
                sh "php --version"
            }
        }
        stage("build") {
            agent any
            steps {
                echo "Build stage test ..."
            }
        }
        stage("test") {
            agent any
            steps {
                echo "Test stage test ..."
            }
        }
        stage("deploy") {
            agent any
            steps {
                echo "Deploy stage test ..."
            }
        }
    }
}