<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendMultiGlobalSms请求参数结构体
 *
 * @method string getSmsSdkAppId() 获取<p>短信 SdkAppId，在 <a href="https://console.cloud.tencent.com/smsv2/app-manage">短信控制台</a>  添加应用后生成的实际 SdkAppId。</p>
 * @method void setSmsSdkAppId(string $SmsSdkAppId) 设置<p>短信 SdkAppId，在 <a href="https://console.cloud.tencent.com/smsv2/app-manage">短信控制台</a>  添加应用后生成的实际 SdkAppId。</p>
 * @method array getMultiSmsInfoSet() 获取<p>批量发送信息列表，单次请求最多支持200个号码且要求全为国际/港澳台号码。每个元素包含一个手机号码及其对应的模板、模板参数等信息。</p>
 * @method void setMultiSmsInfoSet(array $MultiSmsInfoSet) 设置<p>批量发送信息列表，单次请求最多支持200个号码且要求全为国际/港澳台号码。每个元素包含一个手机号码及其对应的模板、模板参数等信息。</p>
 */
class SendMultiGlobalSmsRequest extends AbstractModel
{
    /**
     * @var string <p>短信 SdkAppId，在 <a href="https://console.cloud.tencent.com/smsv2/app-manage">短信控制台</a>  添加应用后生成的实际 SdkAppId。</p>
     */
    public $SmsSdkAppId;

    /**
     * @var array <p>批量发送信息列表，单次请求最多支持200个号码且要求全为国际/港澳台号码。每个元素包含一个手机号码及其对应的模板、模板参数等信息。</p>
     */
    public $MultiSmsInfoSet;

    /**
     * @param string $SmsSdkAppId <p>短信 SdkAppId，在 <a href="https://console.cloud.tencent.com/smsv2/app-manage">短信控制台</a>  添加应用后生成的实际 SdkAppId。</p>
     * @param array $MultiSmsInfoSet <p>批量发送信息列表，单次请求最多支持200个号码且要求全为国际/港澳台号码。每个元素包含一个手机号码及其对应的模板、模板参数等信息。</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SmsSdkAppId",$param) and $param["SmsSdkAppId"] !== null) {
            $this->SmsSdkAppId = $param["SmsSdkAppId"];
        }

        if (array_key_exists("MultiSmsInfoSet",$param) and $param["MultiSmsInfoSet"] !== null) {
            $this->MultiSmsInfoSet = [];
            foreach ($param["MultiSmsInfoSet"] as $key => $value){
                $obj = new MultiSmsInfo();
                $obj->deserialize($value);
                array_push($this->MultiSmsInfoSet, $obj);
            }
        }
    }
}
