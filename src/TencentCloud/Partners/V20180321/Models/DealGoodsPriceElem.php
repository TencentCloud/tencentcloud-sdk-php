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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 订单价格详情
 *
 * @method integer getRealTotalCost() 获取实付金额（单位：分）
 * @method void setRealTotalCost(integer $RealTotalCost) 设置实付金额（单位：分）
 * @method integer getOriginalTotalCost() 获取订单实际金额（不含折扣，单位：分）
 * @method void setOriginalTotalCost(integer $OriginalTotalCost) 设置订单实际金额（不含折扣，单位：分）
 */
class DealGoodsPriceElem extends AbstractModel
{
    /**
     * @var integer 实付金额（单位：分）
     */
    public $RealTotalCost;

    /**
     * @var integer 订单实际金额（不含折扣，单位：分）
     */
    public $OriginalTotalCost;

    /**
     * @param integer $RealTotalCost 实付金额（单位：分）
     * @param integer $OriginalTotalCost 订单实际金额（不含折扣，单位：分）
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
        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("OriginalTotalCost",$param) and $param["OriginalTotalCost"] !== null) {
            $this->OriginalTotalCost = $param["OriginalTotalCost"];
        }
    }
}
