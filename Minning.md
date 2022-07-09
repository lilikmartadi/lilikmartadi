pkg update -y;

pkg install wget -y;

pkg install curl -y;

pkg install proot -y;

pkg install tar -y;

wget https://raw.githubusercontent.com/AndronixApp/AndronixOrigin/master/Installer/Ubuntu/ubuntu.sh -O ubuntu.sh && chmod +x ubuntu.sh && bash ubuntu.sh;

./start-ubuntu.sh;

su;

cd;

apt-get update && apt-get upgrade -y;

apt install git -y;

apt install proot -y;

apt-get install automake autoconf pkg-config libcurl4-openssl-dev libjansson-dev libssl-dev libgmp-dev zlib1g-dev make g++;

git clone https://github.com/tpruvot/cpuminer-multi;



cd cpuminer-multi;

./build-linux-arm.sh;

./cpuminer -a allium -o stratum+tcp://allium.sea.mine.zpool.ca:6433 -u D7Zwfs154Rgh4TqTgkV4B3r54uFxH4Mtcu -p c=DOGE -t 6

