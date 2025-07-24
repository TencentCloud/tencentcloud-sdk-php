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
 * CreateMiniAppPrepareFlow返回参数结构体
 *
 * @method string getLongUrl() 获取H5跳转到电子签小程序链接, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序
 * @method void setLongUrl(string $LongUrl) 设置H5跳转到电子签小程序链接, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序
 * @method string getShortUrl() 获取H5跳转到电子签小程序链接的短链形式, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序
 * @method void setShortUrl(string $ShortUrl) 设置H5跳转到电子签小程序链接的短链形式, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序
 * @method string getMiniAppPath() 获取APP或小程序跳转电子签小程序链接, 一般用于客户小程序或者APP跳转过来, 打开后进入腾讯电子签小程序
 * @method void setMiniAppPath(string $MiniAppPath) 设置APP或小程序跳转电子签小程序链接, 一般用于客户小程序或者APP跳转过来, 打开后进入腾讯电子签小程序
 * @method string getFlowId() 获取创建的合同id（还未实际发起，也未扣费），每次调用会生成新的id，用户可以记录此字段对应后续在小程序发起的合同，若在小程序上未成功发起，则此字段无效。
 * @method void setFlowId(string $FlowId) 设置创建的合同id（还未实际发起，也未扣费），每次调用会生成新的id，用户可以记录此字段对应后续在小程序发起的合同，若在小程序上未成功发起，则此字段无效。
 * @method string getQrcodeUrl() 获取跳转至电子签小程序的二维码链接
 * @method void setQrcodeUrl(string $QrcodeUrl) 设置跳转至电子签小程序的二维码链接
 * @method string getWeixinQrcodeUrl() 获取直接跳转至电子签小程序的二维码链接，无需通过中转页。需要自行将其转换为二维码，使用微信扫码后可直接进入。
 * @method void setWeixinQrcodeUrl(string $WeixinQrcodeUrl) 设置直接跳转至电子签小程序的二维码链接，无需通过中转页。需要自行将其转换为二维码，使用微信扫码后可直接进入。
 * @method integer getExpiredOn() 获取链接过期时间，精确到秒，若在此过期时间前未使用，则链接失效。

 * @method void setExpiredOn(integer $ExpiredOn) 设置链接过期时间，精确到秒，若在此过期时间前未使用，则链接失效。

 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateMiniAppPrepareFlowResponse extends AbstractModel
{
    /**
     * @var string H5跳转到电子签小程序链接, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序
     */
    public $LongUrl;

    /**
     * @var string H5跳转到电子签小程序链接的短链形式, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序
     */
    public $ShortUrl;

    /**
     * @var string APP或小程序跳转电子签小程序链接, 一般用于客户小程序或者APP跳转过来, 打开后进入腾讯电子签小程序
     */
    public $MiniAppPath;

    /**
     * @var string 创建的合同id（还未实际发起，也未扣费），每次调用会生成新的id，用户可以记录此字段对应后续在小程序发起的合同，若在小程序上未成功发起，则此字段无效。
     */
    public $FlowId;

    /**
     * @var string 跳转至电子签小程序的二维码链接
     */
    public $QrcodeUrl;

    /**
     * @var string 直接跳转至电子签小程序的二维码链接，无需通过中转页。需要自行将其转换为二维码，使用微信扫码后可直接进入。
     */
    public $WeixinQrcodeUrl;

    /**
     * @var integer 链接过期时间，精确到秒，若在此过期时间前未使用，则链接失效。

     */
    public $ExpiredOn;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $LongUrl H5跳转到电子签小程序链接, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序
     * @param string $ShortUrl H5跳转到电子签小程序链接的短链形式, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序
     * @param string $MiniAppPath APP或小程序跳转电子签小程序链接, 一般用于客户小程序或者APP跳转过来, 打开后进入腾讯电子签小程序
     * @param string $FlowId 创建的合同id（还未实际发起，也未扣费），每次调用会生成新的id，用户可以记录此字段对应后续在小程序发起的合同，若在小程序上未成功发起，则此字段无效。
     * @param string $QrcodeUrl 跳转至电子签小程序的二维码链接
     * @param string $WeixinQrcodeUrl 直接跳转至电子签小程序的二维码链接，无需通过中转页。需要自行将其转换为二维码，使用微信扫码后可直接进入。
     * @param integer $ExpiredOn 链接过期时间，精确到秒，若在此过期时间前未使用，则链接失效。

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
        if (array_key_exists("LongUrl",$param) and $param["LongUrl"] !== null) {
            $this->LongUrl = $param["LongUrl"];
        }

        if (array_key_exists("ShortUrl",$param) and $param["ShortUrl"] !== null) {
            $this->ShortUrl = $param["ShortUrl"];
        }

        if (array_key_exists("MiniAppPath",$param) and $param["MiniAppPath"] !== null) {
            $this->MiniAppPath = $param["MiniAppPath"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("QrcodeUrl",$param) and $param["QrcodeUrl"] !== null) {
            $this->QrcodeUrl = $param["QrcodeUrl"];
        }

        if (array_key_exists("WeixinQrcodeUrl",$param) and $param["WeixinQrcodeUrl"] !== null) {
            $this->WeixinQrcodeUrl = $param["WeixinQrcodeUrl"];
        }

        if (array_key_exists("ExpiredOn",$param) and $param["ExpiredOn"] !== null) {
            $this->ExpiredOn = $param["ExpiredOn"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
