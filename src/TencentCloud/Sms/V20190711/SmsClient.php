<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace TencentCloud\Sms\V20190711;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Sms\V20190711\Models as Models;

/**
* @method Models\AddSmsSignResponse AddSmsSign(Models\AddSmsSignRequest $req) 添加短信签名
* @method Models\AddSmsTemplateResponse AddSmsTemplate(Models\AddSmsTemplateRequest $req) 添加短信模板
* @method Models\CallbackStatusStatisticsResponse CallbackStatusStatistics(Models\CallbackStatusStatisticsRequest $req) 统计用户回执的数据。
* @method Models\DeleteSmsSignResponse DeleteSmsSign(Models\DeleteSmsSignRequest $req) 删除短信签名
* @method Models\DeleteSmsTemplateResponse DeleteSmsTemplate(Models\DeleteSmsTemplateRequest $req) 删除短信模板
* @method Models\ModifySmsSignResponse ModifySmsSign(Models\ModifySmsSignRequest $req) 修改短信签名
* @method Models\ModifySmsTemplateResponse ModifySmsTemplate(Models\ModifySmsTemplateRequest $req) 修改短信模板
* @method Models\PullSmsReplyStatusResponse PullSmsReplyStatus(Models\PullSmsReplyStatusRequest $req) 拉取短信回复状态。
* @method Models\PullSmsReplyStatusByPhoneNumberResponse PullSmsReplyStatusByPhoneNumber(Models\PullSmsReplyStatusByPhoneNumberRequest $req) 拉取单个号码短信回复状态。
* @method Models\PullSmsSendStatusResponse PullSmsSendStatus(Models\PullSmsSendStatusRequest $req) 拉取短信下发状态。
* @method Models\PullSmsSendStatusByPhoneNumberResponse PullSmsSendStatusByPhoneNumber(Models\PullSmsSendStatusByPhoneNumberRequest $req) 拉取单个号码短信下发状态。
* @method Models\SendSmsResponse SendSms(Models\SendSmsRequest $req) 短信发送接口，用户给用户发短信验证码、通知类短信或营销短信。


* @method Models\SendStatusStatisticsResponse SendStatusStatistics(Models\SendStatusStatisticsRequest $req) 统计用户发送短信的数据。
* @method Models\SmsPackagesStatisticsResponse SmsPackagesStatistics(Models\SmsPackagesStatisticsRequest $req) 用户套餐包信息统计。
 */

class SmsClient extends AbstractClient
{
    protected $endpoint = "sms.tencentcloudapi.com";

    protected $version = "2019-07-11";

    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("sms")."\\"."V20190711\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
