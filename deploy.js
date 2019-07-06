var FtpDeploy = require('ftp-deploy');
var ftpDeploy = new FtpDeploy();
 
var config = {
    user: "user",                   // NOTE that this was username in 1.x 
    password: "password",           // optional, prompted if none given
    host: "ftp.someserver.com",
    port: 21,
    localRoot: __dirname + '/',
    remoteRoot: '/',
    include: ['*', '**/*'],      // this would upload everything except dot files
    deleteRemote: false,              // delete ALL existing files at destination before uploading, if true
    forcePasv: true                 // Passive mode is forced (EPSV command is not sent)
}
 
// use with callback
ftpDeploy.deploy(config, function(err, res) {
    if (err) console.log(err)
    else console.log('finished:', res);
});