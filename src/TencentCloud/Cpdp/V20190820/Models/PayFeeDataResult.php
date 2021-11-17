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
 * pay_fee支付方式行业分类费率json数据
 *
 * @method string getOrganizationFee() 获取机构的分佣扣率扣率
 * @method void setOrganizationFee(string $OrganizationFee) 设置机构的分佣扣率扣率
 * @method string getPaymentClassificationLimit() 获取商户手续费封顶值，0为不限封顶
 * @method void setPaymentClassificationLimit(string $PaymentClassificationLimit) 设置商户手续费封顶值，0为不限封顶
 * @method string getOrganizationFeeType() 获取机构的分佣扣率类型(1按签约扣率，2按收单收益)
 * @method void setOrganizationFeeType(string $OrganizationFeeType) 设置机构的分佣扣率类型(1按签约扣率，2按收单收益)
 * @method string getPaymentClassificationMaxFee() 获取商户扣率最大值
 * @method void setPaymentClassificationMaxFee(string $PaymentClassificationMaxFee) 设置商户扣率最大值
 * @method string getPaymentClassificationMinFee() 获取商户扣率最小值
 * @method void setPaymentClassificationMinFee(string $PaymentClassificationMinFee) 设置商户扣率最小值
 * @method string getPaymentClassificationId() 获取行业会类编号
 * @method void setPaymentClassificationId(string $PaymentClassificationId) 设置行业会类编号
 * @method string getPaymentClassificationName() 获取行业分类名称
 * @method void setPaymentClassificationName(string $PaymentClassificationName) 设置行业分类名称
 */
class PayFeeDataResult extends AbstractModel
{
    /**
     * @var string 机构的分佣扣率扣率
     */
    public $OrganizationFee;

    /**
     * @var string 商户手续费封顶值，0为不限封顶
     */
    public $PaymentClassificationLimit;

    /**
     * @var string 机构的分佣扣率类型(1按签约扣率，2按收单收益)
     */
    public $OrganizationFeeType;

    /**
     * @var string 商户扣率最大值
     */
    public $PaymentClassificationMaxFee;

    /**
     * @var string 商户扣率最小值
     */
    public $PaymentClassificationMinFee;

    /**
     * @var string 行业会类编号
     */
    public $PaymentClassificationId;

    /**
     * @var string 行业分类名称
     */
    public $PaymentClassificationName;

    /**
     * @param string $OrganizationFee 机构的分佣扣率扣率
     * @param string $PaymentClassificationLimit 商户手续费封顶值，0为不限封顶
     * @param string $OrganizationFeeType 机构的分佣扣率类型(1按签约扣率，2按收单收益)
     * @param string $PaymentClassificationMaxFee 商户扣率最大值
     * @param string $PaymentClassificationMinFee 商户扣率最小值
     * @param string $PaymentClassificationId 行业会类编号
     * @param string $PaymentClassificationName 行业分类名称
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
        if (array_key_exists("OrganizationFee",$param) and $param["OrganizationFee"] !== null) {
            $this->OrganizationFee = $param["OrganizationFee"];
        }

        if (array_key_exists("PaymentClassificationLimit",$param) and $param["PaymentClassificationLimit"] !== null) {
            $this->PaymentClassificationLimit = $param["PaymentClassificationLimit"];
        }

        if (array_key_exists("OrganizationFeeType",$param) and $param["OrganizationFeeType"] !== null) {
            $this->OrganizationFeeType = $param["OrganizationFeeType"];
        }

        if (array_key_exists("PaymentClassificationMaxFee",$param) and $param["PaymentClassificationMaxFee"] !== null) {
            $this->PaymentClassificationMaxFee = $param["PaymentClassificationMaxFee"];
        }

        if (array_key_exists("PaymentClassificationMinFee",$param) and $param["PaymentClassificationMinFee"] !== null) {
            $this->PaymentClassificationMinFee = $param["PaymentClassificationMinFee"];
        }

        if (array_key_exists("PaymentClassificationId",$param) and $param["PaymentClassificationId"] !== null) {
            $this->PaymentClassificationId = $param["PaymentClassificationId"];
        }

        if (array_key_exists("PaymentClassificationName",$param) and $param["PaymentClassificationName"] !== null) {
            $this->PaymentClassificationName = $param["PaymentClassificationName"];
        }
    }
}
