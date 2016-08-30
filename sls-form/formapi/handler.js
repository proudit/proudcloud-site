'use strict';

var aws = require('aws-sdk');
var ses = new aws.SES({apiVersion: '2010-12-01',
                        region: 'us-east-1' });

module.exports.handler = function(event, context, cb) {
console.log('Received event:', JSON.stringify(event, null, 2));

                   var eParams = {
                        Destination: {
                            ToAddresses: ["info@proudit.jp"]
                        },
                        Message: {
                            Body: {
                                Text: {
                                    Data: "会社名：" + event.body.company + "\n"
                                    + "お名前：" + event.body.name + "\n"
                                    + "電話番号：" + event.body.tel + "\n"
                                    + "メールアドレス：" + event.body.email + "\n"
                                    + "問い合わせ内容：" + event.body.type + "\n"
                                    + "ご質問内容：" + "\n" + event.body.question + "\n"
                                }
                            },
                            Subject: {
                                Data: "ProudCloudのフォームから問い合わせがありました。"
                            }
                        },
                        Source: "info@proudit.jp"
                     };

                        console.log('===SENDING EMAIL===');
                        ses.sendEmail(eParams, function(err, data){
                            if(err){
                                console.log("===EMAIL ERR===");
                                console.log(err);
                                context.done(null, 'ERR'); 
                            }else {
                                console.log("===EMAIL SENT===");
                                console.log(data);
                                context.done(null, 'SUCCESS');
                            }
                });
                console.log("EMAIL CODE END");
};
