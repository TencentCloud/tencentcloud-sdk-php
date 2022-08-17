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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReportConversion请求参数结构体
 *
 * @method string getSmsSdkAppId() 获取短信应用ID。在 [短信控制台](https://console.cloud.tencent.com/smsv2/app-manage)  添加应用后生成的实际 SdkAppId，示例如1400006666。
 * @method void setSmsSdkAppId(string $SmsSdkAppId) 设置短信应用ID。在 [短信控制台](https://console.cloud.tencent.com/smsv2/app-manage)  添加应用后生成的实际 SdkAppId，示例如1400006666。
 * @method string getSerialNo() 获取发送短信返回的流水号。
 * @method void setSerialNo(string $SerialNo) 设置发送短信返回的流水号。
 * @method integer getConversionTime() 获取用户回填时间，UNIX 时间戳（单位：秒）。
 * @method void setConversionTime(integer $ConversionTime) 设置用户回填时间，UNIX 时间戳（单位：秒）。
 */
class ReportConversionRequest extends AbstractModel
{
    /**
     * @var string 短信应用ID。在 [短信控制台](https://console.cloud.tencent.com/smsv2/app-manage)  添加应用后生成的实际 SdkAppId，示例如1400006666。
     */
    public $SmsSdkAppId;

    /**
     * @var string 发送短信返回的流水号。
     */
    public $SerialNo;

    /**
     * @var integer 用户回填时间，UNIX 时间戳（单位：秒）。
     */
    public $ConversionTime;

    /**
     * @param string $SmsSdkAppId 短信应用ID。在 [短信控制台](https://console.cloud.tencent.com/smsv2/app-manage)  添加应用后生成的实际 SdkAppId，示例如1400006666。
     * @param string $SerialNo 发送短信返回的流水号。
     * @param integer $ConversionTime 用户回填时间，UNIX 时间戳（单位：秒）。
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

        if (array_key_exists("SerialNo",$param) and $param["SerialNo"] !== null) {
            $this->SerialNo = $param["SerialNo"];
        }

        if (array_key_exists("ConversionTime",$param) and $param["ConversionTime"] !== null) {
            $this->ConversionTime = $param["ConversionTime"];
        }
    }
}
