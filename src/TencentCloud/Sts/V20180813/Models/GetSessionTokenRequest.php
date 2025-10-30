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
namespace TencentCloud\Sts\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetSessionToken请求参数结构体
 *
 * @method string getSerialNumber() 获取MFA序列号，与进行调用的CAM用户关联的MFA设备的标识号。格式qcs::cam:uin/${ownerUin}::mfa/${mfaType}。mfaType支持softToken（软token）
 * @method void setSerialNumber(string $SerialNumber) 设置MFA序列号，与进行调用的CAM用户关联的MFA设备的标识号。格式qcs::cam:uin/${ownerUin}::mfa/${mfaType}。mfaType支持softToken（软token）
 * @method string getTokenCode() 获取mfa身份验证码。
 * @method void setTokenCode(string $TokenCode) 设置mfa身份验证码。
 * @method integer getDurationSeconds() 获取指定临时证书的有效期，单位：秒，默认1800秒，主账号最长可设定有效期为7200秒，子账号最长可设定有效期为129600秒。
 * @method void setDurationSeconds(integer $DurationSeconds) 设置指定临时证书的有效期，单位：秒，默认1800秒，主账号最长可设定有效期为7200秒，子账号最长可设定有效期为129600秒。
 */
class GetSessionTokenRequest extends AbstractModel
{
    /**
     * @var string MFA序列号，与进行调用的CAM用户关联的MFA设备的标识号。格式qcs::cam:uin/${ownerUin}::mfa/${mfaType}。mfaType支持softToken（软token）
     */
    public $SerialNumber;

    /**
     * @var string mfa身份验证码。
     */
    public $TokenCode;

    /**
     * @var integer 指定临时证书的有效期，单位：秒，默认1800秒，主账号最长可设定有效期为7200秒，子账号最长可设定有效期为129600秒。
     */
    public $DurationSeconds;

    /**
     * @param string $SerialNumber MFA序列号，与进行调用的CAM用户关联的MFA设备的标识号。格式qcs::cam:uin/${ownerUin}::mfa/${mfaType}。mfaType支持softToken（软token）
     * @param string $TokenCode mfa身份验证码。
     * @param integer $DurationSeconds 指定临时证书的有效期，单位：秒，默认1800秒，主账号最长可设定有效期为7200秒，子账号最长可设定有效期为129600秒。
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
        if (array_key_exists("SerialNumber",$param) and $param["SerialNumber"] !== null) {
            $this->SerialNumber = $param["SerialNumber"];
        }

        if (array_key_exists("TokenCode",$param) and $param["TokenCode"] !== null) {
            $this->TokenCode = $param["TokenCode"];
        }

        if (array_key_exists("DurationSeconds",$param) and $param["DurationSeconds"] !== null) {
            $this->DurationSeconds = $param["DurationSeconds"];
        }
    }
}
