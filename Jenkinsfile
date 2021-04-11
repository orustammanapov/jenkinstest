pipeline {
    agent none
    stages {
        stage("Install Dependencies") {
            agent {
                docker "composer:latest"
            }
            steps {
                sh "composer install"
            }
        }
        stage("Run Tests") {
            agent {
                docker "php:7.1-fpm"
            }
            steps {
                sh "./vendor/bin/dep"
            }
        }
    }
}