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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateUserAutoSignSealUrl返回参数结构体
 *
 * @method string getAppId() 获取<p>腾讯电子签小程序的AppId，用于其他小程序/APP等应用跳转至腾讯电子签小程序使用。</p>
 * @method void setAppId(string $AppId) 设置<p>腾讯电子签小程序的AppId，用于其他小程序/APP等应用跳转至腾讯电子签小程序使用。</p>
 * @method string getAppOriginalId() 获取<p>腾讯电子签小程序的原始Id，用于其他小程序/APP等应用跳转至腾讯电子签小程序使用。</p>
 * @method void setAppOriginalId(string $AppOriginalId) 设置<p>腾讯电子签小程序的原始Id，用于其他小程序/APP等应用跳转至腾讯电子签小程序使用。</p>
 * @method string getUrl() 获取<p>个人用户自动签的开通链接, 短链或者长链接形式。过期时间受 <code>ExpiredTime</code> 参数控制。</p>
 * @method void setUrl(string $Url) 设置<p>个人用户自动签的开通链接, 短链或者长链接形式。过期时间受 <code>ExpiredTime</code> 参数控制。</p>
 * @method string getPath() 获取<p>腾讯电子签小程序的跳转路径，用于其他小程序/APP等应用跳转至腾讯电子签小程序使用。</p>
 * @method void setPath(string $Path) 设置<p>腾讯电子签小程序的跳转路径，用于其他小程序/APP等应用跳转至腾讯电子签小程序使用。</p>
 * @method string getQrCode() 获取<p>base64格式的跳转二维码图片，可通过微信扫描后跳转到腾讯电子签小程序的开通界面。</p>
 * @method void setQrCode(string $QrCode) 设置<p>base64格式的跳转二维码图片，可通过微信扫描后跳转到腾讯电子签小程序的开通界面。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateUserAutoSignSealUrlResponse extends AbstractModel
{
    /**
     * @var string <p>腾讯电子签小程序的AppId，用于其他小程序/APP等应用跳转至腾讯电子签小程序使用。</p>
     */
    public $AppId;

    /**
     * @var string <p>腾讯电子签小程序的原始Id，用于其他小程序/APP等应用跳转至腾讯电子签小程序使用。</p>
     */
    public $AppOriginalId;

    /**
     * @var string <p>个人用户自动签的开通链接, 短链或者长链接形式。过期时间受 <code>ExpiredTime</code> 参数控制。</p>
     */
    public $Url;

    /**
     * @var string <p>腾讯电子签小程序的跳转路径，用于其他小程序/APP等应用跳转至腾讯电子签小程序使用。</p>
     */
    public $Path;

    /**
     * @var string <p>base64格式的跳转二维码图片，可通过微信扫描后跳转到腾讯电子签小程序的开通界面。</p>
     */
    public $QrCode;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AppId <p>腾讯电子签小程序的AppId，用于其他小程序/APP等应用跳转至腾讯电子签小程序使用。</p>
     * @param string $AppOriginalId <p>腾讯电子签小程序的原始Id，用于其他小程序/APP等应用跳转至腾讯电子签小程序使用。</p>
     * @param string $Url <p>个人用户自动签的开通链接, 短链或者长链接形式。过期时间受 <code>ExpiredTime</code> 参数控制。</p>
     * @param string $Path <p>腾讯电子签小程序的跳转路径，用于其他小程序/APP等应用跳转至腾讯电子签小程序使用。</p>
     * @param string $QrCode <p>base64格式的跳转二维码图片，可通过微信扫描后跳转到腾讯电子签小程序的开通界面。</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AppOriginalId",$param) and $param["AppOriginalId"] !== null) {
            $this->AppOriginalId = $param["AppOriginalId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("QrCode",$param) and $param["QrCode"] !== null) {
            $this->QrCode = $param["QrCode"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
