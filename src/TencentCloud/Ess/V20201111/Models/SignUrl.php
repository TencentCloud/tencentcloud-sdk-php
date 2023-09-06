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
 * 流程签署二维码的签署信息，适用于客户系统整合二维码功能。
通过链接，用户可直接访问电子签名小程序并签署合同。
 *
 * @method string getAppSignUrl() 获取跳转至电子签名小程序签署的链接地址。
适用于客户端APP及小程序直接唤起电子签名小程序。
 * @method void setAppSignUrl(string $AppSignUrl) 设置跳转至电子签名小程序签署的链接地址。
适用于客户端APP及小程序直接唤起电子签名小程序。
 * @method string getEffectiveTime() 获取签署链接有效时间，格式类似"2022-08-05 15:55:01"
 * @method void setEffectiveTime(string $EffectiveTime) 设置签署链接有效时间，格式类似"2022-08-05 15:55:01"
 * @method string getHttpSignUrl() 获取跳转至电子签名小程序签署的链接地址，格式类似于https://essurl.cn/xxx。
打开此链接将会展示H5中间页面，随后唤起电子签名小程序以进行合同签署。
 * @method void setHttpSignUrl(string $HttpSignUrl) 设置跳转至电子签名小程序签署的链接地址，格式类似于https://essurl.cn/xxx。
打开此链接将会展示H5中间页面，随后唤起电子签名小程序以进行合同签署。
 */
class SignUrl extends AbstractModel
{
    /**
     * @var string 跳转至电子签名小程序签署的链接地址。
适用于客户端APP及小程序直接唤起电子签名小程序。
     */
    public $AppSignUrl;

    /**
     * @var string 签署链接有效时间，格式类似"2022-08-05 15:55:01"
     */
    public $EffectiveTime;

    /**
     * @var string 跳转至电子签名小程序签署的链接地址，格式类似于https://essurl.cn/xxx。
打开此链接将会展示H5中间页面，随后唤起电子签名小程序以进行合同签署。
     */
    public $HttpSignUrl;

    /**
     * @param string $AppSignUrl 跳转至电子签名小程序签署的链接地址。
适用于客户端APP及小程序直接唤起电子签名小程序。
     * @param string $EffectiveTime 签署链接有效时间，格式类似"2022-08-05 15:55:01"
     * @param string $HttpSignUrl 跳转至电子签名小程序签署的链接地址，格式类似于https://essurl.cn/xxx。
打开此链接将会展示H5中间页面，随后唤起电子签名小程序以进行合同签署。
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
        if (array_key_exists("AppSignUrl",$param) and $param["AppSignUrl"] !== null) {
            $this->AppSignUrl = $param["AppSignUrl"];
        }

        if (array_key_exists("EffectiveTime",$param) and $param["EffectiveTime"] !== null) {
            $this->EffectiveTime = $param["EffectiveTime"];
        }

        if (array_key_exists("HttpSignUrl",$param) and $param["HttpSignUrl"] !== null) {
            $this->HttpSignUrl = $param["HttpSignUrl"];
        }
    }
}
