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
 * ModifyMerchant请求参数结构体
 *
 * @method string getMerchantAppId() 获取进件成功后返给商户的AppId
 * @method void setMerchantAppId(string $MerchantAppId) 设置进件成功后返给商户的AppId
 * @method string getMerchantName() 获取收款商户名称
 * @method void setMerchantName(string $MerchantName) 设置收款商户名称
 * @method string getBusinessPayFlag() 获取B2B 支付标志。是否开通 B2B支付， 1:开通 0:不开通。
 * @method void setBusinessPayFlag(string $BusinessPayFlag) 设置B2B 支付标志。是否开通 B2B支付， 1:开通 0:不开通。
 */
class ModifyMerchantRequest extends AbstractModel
{
    /**
     * @var string 进件成功后返给商户的AppId
     */
    public $MerchantAppId;

    /**
     * @var string 收款商户名称
     */
    public $MerchantName;

    /**
     * @var string B2B 支付标志。是否开通 B2B支付， 1:开通 0:不开通。
     */
    public $BusinessPayFlag;

    /**
     * @param string $MerchantAppId 进件成功后返给商户的AppId
     * @param string $MerchantName 收款商户名称
     * @param string $BusinessPayFlag B2B 支付标志。是否开通 B2B支付， 1:开通 0:不开通。
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
        if (array_key_exists("MerchantAppId",$param) and $param["MerchantAppId"] !== null) {
            $this->MerchantAppId = $param["MerchantAppId"];
        }

        if (array_key_exists("MerchantName",$param) and $param["MerchantName"] !== null) {
            $this->MerchantName = $param["MerchantName"];
        }

        if (array_key_exists("BusinessPayFlag",$param) and $param["BusinessPayFlag"] !== null) {
            $this->BusinessPayFlag = $param["BusinessPayFlag"];
        }
    }
}
