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
 * CreatePayMerchant请求参数结构体
 *
 * @method string getPlatformCode() 获取平台编号
 * @method void setPlatformCode(string $PlatformCode) 设置平台编号
 * @method string getChannelMerchantNo() 获取渠道方收款商户编号，由渠道方(银行)提 供。
 * @method void setChannelMerchantNo(string $ChannelMerchantNo) 设置渠道方收款商户编号，由渠道方(银行)提 供。
 * @method string getChannelCheckFlag() 获取是否需要向渠道进行 商户信息验证 1:验证
0:不验证
 * @method void setChannelCheckFlag(string $ChannelCheckFlag) 设置是否需要向渠道进行 商户信息验证 1:验证
0:不验证
 * @method string getMerchantName() 获取收款商户名称
 * @method void setMerchantName(string $MerchantName) 设置收款商户名称
 * @method string getBusinessPayFlag() 获取是否开通 B2B 支付 1:开通 0:不开通 缺省:1
 * @method void setBusinessPayFlag(string $BusinessPayFlag) 设置是否开通 B2B 支付 1:开通 0:不开通 缺省:1
 */
class CreatePayMerchantRequest extends AbstractModel
{
    /**
     * @var string 平台编号
     */
    public $PlatformCode;

    /**
     * @var string 渠道方收款商户编号，由渠道方(银行)提 供。
     */
    public $ChannelMerchantNo;

    /**
     * @var string 是否需要向渠道进行 商户信息验证 1:验证
0:不验证
     */
    public $ChannelCheckFlag;

    /**
     * @var string 收款商户名称
     */
    public $MerchantName;

    /**
     * @var string 是否开通 B2B 支付 1:开通 0:不开通 缺省:1
     */
    public $BusinessPayFlag;

    /**
     * @param string $PlatformCode 平台编号
     * @param string $ChannelMerchantNo 渠道方收款商户编号，由渠道方(银行)提 供。
     * @param string $ChannelCheckFlag 是否需要向渠道进行 商户信息验证 1:验证
0:不验证
     * @param string $MerchantName 收款商户名称
     * @param string $BusinessPayFlag 是否开通 B2B 支付 1:开通 0:不开通 缺省:1
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
        if (array_key_exists("PlatformCode",$param) and $param["PlatformCode"] !== null) {
            $this->PlatformCode = $param["PlatformCode"];
        }

        if (array_key_exists("ChannelMerchantNo",$param) and $param["ChannelMerchantNo"] !== null) {
            $this->ChannelMerchantNo = $param["ChannelMerchantNo"];
        }

        if (array_key_exists("ChannelCheckFlag",$param) and $param["ChannelCheckFlag"] !== null) {
            $this->ChannelCheckFlag = $param["ChannelCheckFlag"];
        }

        if (array_key_exists("MerchantName",$param) and $param["MerchantName"] !== null) {
            $this->MerchantName = $param["MerchantName"];
        }

        if (array_key_exists("BusinessPayFlag",$param) and $param["BusinessPayFlag"] !== null) {
            $this->BusinessPayFlag = $param["BusinessPayFlag"];
        }
    }
}
