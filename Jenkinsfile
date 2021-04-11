pipeline {
    agent none
    stages {
        stage("Install Dependencies") {
            agent { dockerfile true }
            steps {
                sh "composer install"
            }
        }
        stage("Run Tests") {
            agent {
                docker "php:7.4-fpm"
            }
            steps {
                sh "./vendor/bin/dep"
            }
        }
    }
}