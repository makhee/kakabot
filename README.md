# 목적

Laravel + React 를 이용하여 무엇을 개발 할까.. 를 고민하고 만들어보자.


# 환경 설정

1. 서버 정보
    > NGINX 1.15
    
    > PHP 7.3

    > Laravel 5.7

    > Mysql 5.7

    > React 16.8

    > Node 10.15

2. 개발 환경

    Windows

    - VirtualBox 설치 : https://www.virtualbox.org/wiki/Downloads
    - Vagrant 설치 : https://www.vagrantup.com/downloads.html
    - 홈스테드 Vagrant Box 설치 (cmd 또는 powoershell)
       <pre> vagrant box add laravel/homestead 
       
       ==> box: Loading metadata for box 'laravel/homestead'
           box: URL: https://vagrantcloud.com/laravel/homestead
       This box can work with multiple providers! The providers that it
       can work with are listed below. Please review the list and choose
       the provider you will be working with.

       1) hyperv 
       2) parallels 
       3) virtualbox 
       4) vmware_desktop  
       
       Enter your choice: 3
       </pre>
       
    - 홈스테드 설치 (cmd 또는 powoershell) *https://github.com/laravel/homestead/releases* 에서 최신 버전 확인하여 {버전} 정보 변경.
        <pre>  
        // 작업 경로에 git clone 받기
        git clone https://github.com/laravel/homestead.git {workspace_path}<br>
        // 작업 경로로 이동
        cd {workspace_path}<br>
        // 최신버전의 브런치로 변경하여 소스 최신화
        git checkout {버전}<br>
        // 실행하여 홈스테드 설치완료
        init.bat 
        </pre>

    - 홈스테드 설정 (홈스테드 경로내 Homestead.yaml 파일)
        <pre>
        // 공유폴더 설정하기
        folders:
            - map: {workspace_path/project_name}
            to: /home/vagrant/{project_name}<br>
        // Nginx root 설정하기
        sites:
            - map: {domain_name}
            to: /home/vagrant/{project_name}/public
        </pre>

    - hosts파일 변경    
        <pre>192.168.10.10  {domain_name}</pre>

    - Vagrant 구동하기 (cmd 또는 powoershell)
        > vagrant up : 실행

        > vagrant reload --provision : 재실행 

        > vagrant halt : 중지
        
        > vagrant destroy --force : 삭제

        > vagrant ssh : ssh연결 // 인증서 생성 필요

    - 인증서 생성
        <pre>ssh-keygen -t rsa -b 4096 -C "{이메일}"<br>이후 상황 모두 엔터</pre>

    - Laravel 설치
        <pre>
        $ composer global require "laravel/installer"<br>
        $ cd /home/vargrant<br>
        $ laravel new {project_name}
        </pre>

    - Laravel 설치 확인
        > http(s)://{domain_name}
