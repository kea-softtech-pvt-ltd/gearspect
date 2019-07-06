var FtpDeploy = require('ftp-deploy');
var ftpDeploy = new FtpDeploy();
 console.log(process.env, __dirname)
var config = {
    username: process.env.FTPUSERNAME,
    password: process.env.FTPPASS,
    host: process.env.FTPHOST,
    port: 21,
    localRoot: __dirname + "/gearspect",
    remoteRoot: "/home/tourdekonkan/gearspect.keasofttech.com/",
    include: ['*']
}
    
ftpDeploy.deploy(config, function(err) {
    if (err) console.log(err)
    else console.log('finished');
});