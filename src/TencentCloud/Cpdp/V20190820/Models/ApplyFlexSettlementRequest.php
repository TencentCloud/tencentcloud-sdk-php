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
 * ApplyFlexSettlement请求参数结构体
 *
 * @method string getPayeeId() 获取收款用户ID
 * @method void setPayeeId(string $PayeeId) 设置收款用户ID
 * @method string getIncomeType() 获取收入类型
LABOR:劳务所得
OCCASION:偶然所得
 * @method void setIncomeType(string $IncomeType) 设置收入类型
LABOR:劳务所得
OCCASION:偶然所得
 * @method string getAmountBeforeTax() 获取税前金额
 * @method void setAmountBeforeTax(string $AmountBeforeTax) 设置税前金额
 * @method string getOutOrderId() 获取外部订单ID
 * @method void setOutOrderId(string $OutOrderId) 设置外部订单ID
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getEnvironment() 获取环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
 * @method void setEnvironment(string $Environment) 设置环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
 */
class ApplyFlexSettlementRequest extends AbstractModel
{
    /**
     * @var string 收款用户ID
     */
    public $PayeeId;

    /**
     * @var string 收入类型
LABOR:劳务所得
OCCASION:偶然所得
     */
    public $IncomeType;

    /**
     * @var string 税前金额
     */
    public $AmountBeforeTax;

    /**
     * @var string 外部订单ID
     */
    public $OutOrderId;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
     */
    public $Environment;

    /**
     * @param string $PayeeId 收款用户ID
     * @param string $IncomeType 收入类型
LABOR:劳务所得
OCCASION:偶然所得
     * @param string $AmountBeforeTax 税前金额
     * @param string $OutOrderId 外部订单ID
     * @param string $Remark 备注
     * @param string $Environment 环境类型
__release__:生产环境
__sandbox__:沙箱环境
__test__:测试环境
缺省默认为生产环境
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
        if (array_key_exists("PayeeId",$param) and $param["PayeeId"] !== null) {
            $this->PayeeId = $param["PayeeId"];
        }

        if (array_key_exists("IncomeType",$param) and $param["IncomeType"] !== null) {
            $this->IncomeType = $param["IncomeType"];
        }

        if (array_key_exists("AmountBeforeTax",$param) and $param["AmountBeforeTax"] !== null) {
            $this->AmountBeforeTax = $param["AmountBeforeTax"];
        }

        if (array_key_exists("OutOrderId",$param) and $param["OutOrderId"] !== null) {
            $this->OutOrderId = $param["OutOrderId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
