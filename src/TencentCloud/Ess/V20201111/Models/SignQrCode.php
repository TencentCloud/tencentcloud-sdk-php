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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 签署二维码的基本信息，用于创建二维码，用户可扫描该二维码进行签署操作。
 *
 * @method string getQrCodeId() 获取二维码ID，为32位字符串。
 * @method void setQrCodeId(string $QrCodeId) 设置二维码ID，为32位字符串。
 * @method string getQrCodeUrl() 获取二维码URL，可通过转换二维码的工具或代码组件将此URL转化为二维码，以便用户扫描进行流程签署。
 * @method void setQrCodeUrl(string $QrCodeUrl) 设置二维码URL，可通过转换二维码的工具或代码组件将此URL转化为二维码，以便用户扫描进行流程签署。
 * @method integer getExpiredTime() 获取二维码的有截止时间，格式为Unix标准时间戳（秒）。
一旦超过二维码的有效期限，该二维码将自动失效。
 * @method void setExpiredTime(integer $ExpiredTime) 设置二维码的有截止时间，格式为Unix标准时间戳（秒）。
一旦超过二维码的有效期限，该二维码将自动失效。
 * @method string getWeixinQrCodeUrl() 获取微信小程序二维码
 * @method void setWeixinQrCodeUrl(string $WeixinQrCodeUrl) 设置微信小程序二维码
 */
class SignQrCode extends AbstractModel
{
    /**
     * @var string 二维码ID，为32位字符串。
     */
    public $QrCodeId;

    /**
     * @var string 二维码URL，可通过转换二维码的工具或代码组件将此URL转化为二维码，以便用户扫描进行流程签署。
     */
    public $QrCodeUrl;

    /**
     * @var integer 二维码的有截止时间，格式为Unix标准时间戳（秒）。
一旦超过二维码的有效期限，该二维码将自动失效。
     */
    public $ExpiredTime;

    /**
     * @var string 微信小程序二维码
     */
    public $WeixinQrCodeUrl;

    /**
     * @param string $QrCodeId 二维码ID，为32位字符串。
     * @param string $QrCodeUrl 二维码URL，可通过转换二维码的工具或代码组件将此URL转化为二维码，以便用户扫描进行流程签署。
     * @param integer $ExpiredTime 二维码的有截止时间，格式为Unix标准时间戳（秒）。
一旦超过二维码的有效期限，该二维码将自动失效。
     * @param string $WeixinQrCodeUrl 微信小程序二维码
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
        if (array_key_exists("QrCodeId",$param) and $param["QrCodeId"] !== null) {
            $this->QrCodeId = $param["QrCodeId"];
        }

        if (array_key_exists("QrCodeUrl",$param) and $param["QrCodeUrl"] !== null) {
            $this->QrCodeUrl = $param["QrCodeUrl"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("WeixinQrCodeUrl",$param) and $param["WeixinQrCodeUrl"] !== null) {
            $this->WeixinQrCodeUrl = $param["WeixinQrCodeUrl"];
        }
    }
}
