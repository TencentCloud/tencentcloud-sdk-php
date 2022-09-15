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
 * 结算结果
 *
 * @method string getOrderId() 获取订单ID
 * @method void setOrderId(string $OrderId) 设置订单ID
 * @method string getAmountBeforeTax() 获取税前金额
 * @method void setAmountBeforeTax(string $AmountBeforeTax) 设置税前金额
 * @method string getAmountAfterTax() 获取税后金额
 * @method void setAmountAfterTax(string $AmountAfterTax) 设置税后金额
 * @method string getTax() 获取税金
 * @method void setTax(string $Tax) 设置税金
 */
class ApplyFlexSettlementResult extends AbstractModel
{
    /**
     * @var string 订单ID
     */
    public $OrderId;

    /**
     * @var string 税前金额
     */
    public $AmountBeforeTax;

    /**
     * @var string 税后金额
     */
    public $AmountAfterTax;

    /**
     * @var string 税金
     */
    public $Tax;

    /**
     * @param string $OrderId 订单ID
     * @param string $AmountBeforeTax 税前金额
     * @param string $AmountAfterTax 税后金额
     * @param string $Tax 税金
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
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("AmountBeforeTax",$param) and $param["AmountBeforeTax"] !== null) {
            $this->AmountBeforeTax = $param["AmountBeforeTax"];
        }

        if (array_key_exists("AmountAfterTax",$param) and $param["AmountAfterTax"] !== null) {
            $this->AmountAfterTax = $param["AmountAfterTax"];
        }

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
        }
    }
}
