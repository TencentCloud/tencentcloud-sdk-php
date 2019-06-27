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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getPayMode() 获取付费模式
 * @method void setPayMode(string $PayMode) 设置付费模式
 * @method string getPayModeName() 获取付费模式名称
 * @method void setPayModeName(string $PayModeName) 设置付费模式名称
 * @method string getRealTotalCost() 获取实际花费
 * @method void setRealTotalCost(string $RealTotalCost) 设置实际花费
 * @method string getRealTotalCostRatio() 获取费用所占百分比，两位小数
 * @method void setRealTotalCostRatio(string $RealTotalCostRatio) 设置费用所占百分比，两位小数
 * @method array getDetail() 获取按交易类型汇总消费详情
 * @method void setDetail(array $Detail) 设置按交易类型汇总消费详情
 */

/**
 *按付费模式汇总消费详情
 */
class PayModeSummaryOverviewItem extends AbstractModel
{
    /**
     * @var string 付费模式
     */
    public $PayMode;

    /**
     * @var string 付费模式名称
     */
    public $PayModeName;

    /**
     * @var string 实际花费
     */
    public $RealTotalCost;

    /**
     * @var string 费用所占百分比，两位小数
     */
    public $RealTotalCostRatio;

    /**
     * @var array 按交易类型汇总消费详情
     */
    public $Detail;
    /**
     * @param string $PayMode 付费模式
     * @param string $PayModeName 付费模式名称
     * @param string $RealTotalCost 实际花费
     * @param string $RealTotalCostRatio 费用所占百分比，两位小数
     * @param array $Detail 按交易类型汇总消费详情
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PayModeName",$param) and $param["PayModeName"] !== null) {
            $this->PayModeName = $param["PayModeName"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("RealTotalCostRatio",$param) and $param["RealTotalCostRatio"] !== null) {
            $this->RealTotalCostRatio = $param["RealTotalCostRatio"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = [];
            foreach ($param["Detail"] as $key => $value){
                $obj = new ActionSummaryOverviewItem();
                $obj->deserialize($value);
                array_push($this->Detail, $obj);
            }
        }
    }
}
