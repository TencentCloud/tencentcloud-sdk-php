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
 * @method Models\AddSmsSignResponse AddSmsSign(Models\AddSmsSignRequest $req) 添加短信签名，申请之前请先认证参阅 [腾讯云短信签名审核标准](https://cloud.tencent.com/document/product/382/39022)。
>⚠️注意：个人认证用户不支持使用 API 申请短信签名，请参阅了解 [实名认证基本介绍](https://cloud.tencent.com/document/product/378/3629)，如果为个人认证请登录控制台申请短信签名，具体操作请参阅 [创建短信签名](https://cloud.tencent.com/document/product/382/36136#Sign)。
 * @method Models\AddSmsTemplateResponse AddSmsTemplate(Models\AddSmsTemplateRequest $req) 添加短信模版，申请之前请先认证参阅 [腾讯云短信正文模版审核标准](https://cloud.tencent.com/document/product/382/39023)。
>⚠️注意：个人认证用户不支持使用 API 申请短信正文模版，请参阅了解 [实名认证基本介绍](https://cloud.tencent.com/document/product/378/3629)，如果为个人认证请登录控制台申请短信正文模版，具体操作请参阅 [创建短信正文模版](https://cloud.tencent.com/document/product/382/36136#Template)。
 * @method Models\CallbackStatusStatisticsResponse CallbackStatusStatistics(Models\CallbackStatusStatisticsRequest $req) 统计用户回执的数据。
 * @method Models\DeleteSmsSignResponse DeleteSmsSign(Models\DeleteSmsSignRequest $req) >⚠️注意：个人认证用户不支持使用 API 删除短信签名，请参阅了解 [实名认证基本介绍](https://cloud.tencent.com/document/product/378/3629)，请登录控制台删除短信签名，具体操作请参阅 [短信签名操作](https://cloud.tencent.com/document/product/382/36136#Sign) 中查看删除短信签名须知。
 * @method Models\DeleteSmsTemplateResponse DeleteSmsTemplate(Models\DeleteSmsTemplateRequest $req) >⚠️注意：个人认证用户不支持使用 API 删除短信正文模版，请参阅了解 [实名认证基本介绍](https://cloud.tencent.com/document/product/378/3629)，请登录控制台删除短信正文模版，具体操作请参阅 [短信正文模版操作](https://cloud.tencent.com/document/product/382/36136#Template) 中查看删除短信正文模版须知。
 * @method Models\DescribeSmsSignListResponse DescribeSmsSignList(Models\DescribeSmsSignListRequest $req) >⚠️注意：个人认证用户不支持使用 API 查询短信签名，请参阅了解 [实名认证基本介绍](https://cloud.tencent.com/document/product/378/3629)。
 * @method Models\DescribeSmsTemplateListResponse DescribeSmsTemplateList(Models\DescribeSmsTemplateListRequest $req) >⚠️注意：个人认证用户不支持使用 API 查询短信正文模版，请参阅了解 [实名认证基本介绍](https://cloud.tencent.com/document/product/378/3629)。
 * @method Models\ModifySmsSignResponse ModifySmsSign(Models\ModifySmsSignRequest $req) 修改短信签名，修改之前请先认证参阅 [腾讯云短信签名审核标准](https://cloud.tencent.com/document/product/382/39022)。
>- ⚠️注意：个人认证用户不支持使用 API 修改短信签名，请参阅了解 [实名认证基本介绍](https://cloud.tencent.com/document/product/378/3629)，如果为个人认证请登录控制台修改短信签名。
>- 修改短信签名，仅当签名为待审核或已拒绝状态时，才能进行修改，已审核通过的签名不支持修改。
 * @method Models\ModifySmsTemplateResponse ModifySmsTemplate(Models\ModifySmsTemplateRequest $req) 修改短信正文模版，修改之前请先认真参阅 [腾讯云短信正文模版审核标准](https://cloud.tencent.com/document/product/382/39023)。
>- ⚠️注意：个人认证用户不支持使用 API 修改短信正文模版，请参阅了解 [实名认证基本介绍](https://cloud.tencent.com/document/product/378/3629)，如果为个人认证请登录控制台修改短信正文模版。
>- 修改短信签名，仅当正文模版为待审核或已拒绝状态时，才能进行修改，已审核通过的正文模版不支持修改。
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
    /**
     * @var string
     */
    protected $endpoint = "sms.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $version = "2019-07-11";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
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
