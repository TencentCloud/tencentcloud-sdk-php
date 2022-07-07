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
 * 订单汇总结果
 *
 * @method string getSummaryId() 获取汇总ID
 * @method void setSummaryId(string $SummaryId) 设置汇总ID
 * @method string getPayeeId() 获取收款账户ID
 * @method void setPayeeId(string $PayeeId) 设置收款账户ID
 * @method string getName() 获取收款账户名称
 * @method void setName(string $Name) 设置收款账户名称
 * @method string getIncomeType() 获取收入类型
 * @method void setIncomeType(string $IncomeType) 设置收入类型
 * @method string getSummaryAmount() 获取汇总金额
 * @method void setSummaryAmount(string $SummaryAmount) 设置汇总金额
 * @method string getSummaryTime() 获取汇总日期
 * @method void setSummaryTime(string $SummaryTime) 设置汇总日期
 * @method integer getSummaryCount() 获取汇总记录数量
 * @method void setSummaryCount(integer $SummaryCount) 设置汇总记录数量
 * @method string getOutUserId() 获取外部用户ID
 * @method void setOutUserId(string $OutUserId) 设置外部用户ID
 */
class OrderSummaryResult extends AbstractModel
{
    /**
     * @var string 汇总ID
     */
    public $SummaryId;

    /**
     * @var string 收款账户ID
     */
    public $PayeeId;

    /**
     * @var string 收款账户名称
     */
    public $Name;

    /**
     * @var string 收入类型
     */
    public $IncomeType;

    /**
     * @var string 汇总金额
     */
    public $SummaryAmount;

    /**
     * @var string 汇总日期
     */
    public $SummaryTime;

    /**
     * @var integer 汇总记录数量
     */
    public $SummaryCount;

    /**
     * @var string 外部用户ID
     */
    public $OutUserId;

    /**
     * @param string $SummaryId 汇总ID
     * @param string $PayeeId 收款账户ID
     * @param string $Name 收款账户名称
     * @param string $IncomeType 收入类型
     * @param string $SummaryAmount 汇总金额
     * @param string $SummaryTime 汇总日期
     * @param integer $SummaryCount 汇总记录数量
     * @param string $OutUserId 外部用户ID
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
        if (array_key_exists("SummaryId",$param) and $param["SummaryId"] !== null) {
            $this->SummaryId = $param["SummaryId"];
        }

        if (array_key_exists("PayeeId",$param) and $param["PayeeId"] !== null) {
            $this->PayeeId = $param["PayeeId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IncomeType",$param) and $param["IncomeType"] !== null) {
            $this->IncomeType = $param["IncomeType"];
        }

        if (array_key_exists("SummaryAmount",$param) and $param["SummaryAmount"] !== null) {
            $this->SummaryAmount = $param["SummaryAmount"];
        }

        if (array_key_exists("SummaryTime",$param) and $param["SummaryTime"] !== null) {
            $this->SummaryTime = $param["SummaryTime"];
        }

        if (array_key_exists("SummaryCount",$param) and $param["SummaryCount"] !== null) {
            $this->SummaryCount = $param["SummaryCount"];
        }

        if (array_key_exists("OutUserId",$param) and $param["OutUserId"] !== null) {
            $this->OutUserId = $param["OutUserId"];
        }
    }
}
