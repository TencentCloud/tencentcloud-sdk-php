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
 * GetPayRollAuthResult请求参数结构体
 *
 * @method string getAuthNumber() 获取商户系统内部的商家核身单号，要求此参数只能由数字、大小写字母组成，在服务商内部唯一
 * @method void setAuthNumber(string $AuthNumber) 设置商户系统内部的商家核身单号，要求此参数只能由数字、大小写字母组成，在服务商内部唯一
 * @method string getSubMerchantId() 获取微信服务商下特约商户的商户号，由微信支付生成并下发
 * @method void setSubMerchantId(string $SubMerchantId) 设置微信服务商下特约商户的商户号，由微信支付生成并下发
 */
class GetPayRollAuthResultRequest extends AbstractModel
{
    /**
     * @var string 商户系统内部的商家核身单号，要求此参数只能由数字、大小写字母组成，在服务商内部唯一
     */
    public $AuthNumber;

    /**
     * @var string 微信服务商下特约商户的商户号，由微信支付生成并下发
     */
    public $SubMerchantId;

    /**
     * @param string $AuthNumber 商户系统内部的商家核身单号，要求此参数只能由数字、大小写字母组成，在服务商内部唯一
     * @param string $SubMerchantId 微信服务商下特约商户的商户号，由微信支付生成并下发
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

        if (array_key_exists("SubMerchantId",$param) and $param["SubMerchantId"] !== null) {
            $this->SubMerchantId = $param["SubMerchantId"];
        }
    }
}
