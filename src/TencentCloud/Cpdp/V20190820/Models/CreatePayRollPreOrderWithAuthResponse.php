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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePayRollPreOrderWithAuth返回参数结构体
 *
 * @method string getAuthNumber() 获取商户系统内部的商家核身单号，要求此参数只能由数字、大小写字母组成，在服务商内部唯一
 * @method void setAuthNumber(string $AuthNumber) 设置商户系统内部的商家核身单号，要求此参数只能由数字、大小写字母组成，在服务商内部唯一
 * @method integer getExpireTime() 获取Token有效时间，单位秒
 * @method void setExpireTime(integer $ExpireTime) 设置Token有效时间，单位秒
 * @method string getMerchantId() 获取微信服务商商户的商户号，由微信支付生成并下发
 * @method void setMerchantId(string $MerchantId) 设置微信服务商商户的商户号，由微信支付生成并下发
 * @method string getOpenId() 获取用户在商户对应appid下的唯一标识
 * @method void setOpenId(string $OpenId) 设置用户在商户对应appid下的唯一标识
 * @method string getSubMerchantId() 获取微信服务商下特约商户的商户号，由微信支付生成并下发
 * @method void setSubMerchantId(string $SubMerchantId) 设置微信服务商下特约商户的商户号，由微信支付生成并下发
 * @method string getToken() 获取Token值
 * @method void setToken(string $Token) 设置Token值
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreatePayRollPreOrderWithAuthResponse extends AbstractModel
{
    /**
     * @var string 商户系统内部的商家核身单号，要求此参数只能由数字、大小写字母组成，在服务商内部唯一
     */
    public $AuthNumber;

    /**
     * @var integer Token有效时间，单位秒
     */
    public $ExpireTime;

    /**
     * @var string 微信服务商商户的商户号，由微信支付生成并下发
     */
    public $MerchantId;

    /**
     * @var string 用户在商户对应appid下的唯一标识
     */
    public $OpenId;

    /**
     * @var string 微信服务商下特约商户的商户号，由微信支付生成并下发
     */
    public $SubMerchantId;

    /**
     * @var string Token值
     */
    public $Token;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $AuthNumber 商户系统内部的商家核身单号，要求此参数只能由数字、大小写字母组成，在服务商内部唯一
     * @param integer $ExpireTime Token有效时间，单位秒
     * @param string $MerchantId 微信服务商商户的商户号，由微信支付生成并下发
     * @param string $OpenId 用户在商户对应appid下的唯一标识
     * @param string $SubMerchantId 微信服务商下特约商户的商户号，由微信支付生成并下发
     * @param string $Token Token值
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AuthNumber",$param) and $param["AuthNumber"] !== null) {
            $this->AuthNumber = $param["AuthNumber"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("SubMerchantId",$param) and $param["SubMerchantId"] !== null) {
            $this->SubMerchantId = $param["SubMerchantId"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
