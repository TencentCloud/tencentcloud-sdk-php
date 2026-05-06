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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAndroidInstanceAcceleratorToken请求参数结构体
 *
 * @method array getAndroidInstanceIds() 获取实例 ID 列表。每次请求的实例的上限为 500。
 * @method void setAndroidInstanceIds(array $AndroidInstanceIds) 设置实例 ID 列表。每次请求的实例的上限为 500。
 * @method string getUserIP() 获取用户IP，可以根据该 IP 选择就近加速点。如果不填，将自动选择就近加速点。
 * @method void setUserIP(string $UserIP) 设置用户IP，可以根据该 IP 选择就近加速点。如果不填，将自动选择就近加速点。
 * @method string getExpirationDuration() 获取有效期，默认为 12 小时，最长为 7 天，建议设置不要过长，否则泄漏风险越大。支持 s（秒）、m（分）、h（小时）、d（天）等单位，比如 1d、24h、86400s 都表示一天，1h2m3s 表示一小时两分三秒
 * @method void setExpirationDuration(string $ExpirationDuration) 设置有效期，默认为 12 小时，最长为 7 天，建议设置不要过长，否则泄漏风险越大。支持 s（秒）、m（分）、h（小时）、d（天）等单位，比如 1d、24h、86400s 都表示一天，1h2m3s 表示一小时两分三秒
 */
class CreateAndroidInstanceAcceleratorTokenRequest extends AbstractModel
{
    /**
     * @var array 实例 ID 列表。每次请求的实例的上限为 500。
     */
    public $AndroidInstanceIds;

    /**
     * @var string 用户IP，可以根据该 IP 选择就近加速点。如果不填，将自动选择就近加速点。
     */
    public $UserIP;

    /**
     * @var string 有效期，默认为 12 小时，最长为 7 天，建议设置不要过长，否则泄漏风险越大。支持 s（秒）、m（分）、h（小时）、d（天）等单位，比如 1d、24h、86400s 都表示一天，1h2m3s 表示一小时两分三秒
     */
    public $ExpirationDuration;

    /**
     * @param array $AndroidInstanceIds 实例 ID 列表。每次请求的实例的上限为 500。
     * @param string $UserIP 用户IP，可以根据该 IP 选择就近加速点。如果不填，将自动选择就近加速点。
     * @param string $ExpirationDuration 有效期，默认为 12 小时，最长为 7 天，建议设置不要过长，否则泄漏风险越大。支持 s（秒）、m（分）、h（小时）、d（天）等单位，比如 1d、24h、86400s 都表示一天，1h2m3s 表示一小时两分三秒
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
        if (array_key_exists("AndroidInstanceIds",$param) and $param["AndroidInstanceIds"] !== null) {
            $this->AndroidInstanceIds = $param["AndroidInstanceIds"];
        }

        if (array_key_exists("UserIP",$param) and $param["UserIP"] !== null) {
            $this->UserIP = $param["UserIP"];
        }

        if (array_key_exists("ExpirationDuration",$param) and $param["ExpirationDuration"] !== null) {
            $this->ExpirationDuration = $param["ExpirationDuration"];
        }
    }
}
