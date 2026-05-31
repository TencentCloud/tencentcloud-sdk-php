<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主包Token总结
 *
 * @method integer getCycleSeq() 获取套餐包当前计费周期序号
 * @method void setCycleSeq(integer $CycleSeq) 设置套餐包当前计费周期序号
 * @method string getCycleStartTime() 获取套餐包计费周期开始时间（RFC3339）
 * @method void setCycleStartTime(string $CycleStartTime) 设置套餐包计费周期开始时间（RFC3339）
 * @method string getCycleEndTime() 获取套餐包当前计费周期结束时间（RFC3339）
 * @method void setCycleEndTime(string $CycleEndTime) 设置套餐包当前计费周期结束时间（RFC3339）
 * @method array getBillingItems() 获取按计费项分组的 token 汇总列表
 * @method void setBillingItems(array $BillingItems) 设置按计费项分组的 token 汇总列表
 */
class TokenSummary extends AbstractModel
{
    /**
     * @var integer 套餐包当前计费周期序号
     */
    public $CycleSeq;

    /**
     * @var string 套餐包计费周期开始时间（RFC3339）
     */
    public $CycleStartTime;

    /**
     * @var string 套餐包当前计费周期结束时间（RFC3339）
     */
    public $CycleEndTime;

    /**
     * @var array 按计费项分组的 token 汇总列表
     */
    public $BillingItems;

    /**
     * @param integer $CycleSeq 套餐包当前计费周期序号
     * @param string $CycleStartTime 套餐包计费周期开始时间（RFC3339）
     * @param string $CycleEndTime 套餐包当前计费周期结束时间（RFC3339）
     * @param array $BillingItems 按计费项分组的 token 汇总列表
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
        if (array_key_exists("CycleSeq",$param) and $param["CycleSeq"] !== null) {
            $this->CycleSeq = $param["CycleSeq"];
        }

        if (array_key_exists("CycleStartTime",$param) and $param["CycleStartTime"] !== null) {
            $this->CycleStartTime = $param["CycleStartTime"];
        }

        if (array_key_exists("CycleEndTime",$param) and $param["CycleEndTime"] !== null) {
            $this->CycleEndTime = $param["CycleEndTime"];
        }

        if (array_key_exists("BillingItems",$param) and $param["BillingItems"] !== null) {
            $this->BillingItems = [];
            foreach ($param["BillingItems"] as $key => $value){
                $obj = new TokenSummaryBillingItem();
                $obj->deserialize($value);
                array_push($this->BillingItems, $obj);
            }
        }
    }
}
