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
 * 订单子产品价格详情
 *
 * @method string getName() 获取子产品名称
 * @method void setName(string $Name) 设置子产品名称
 * @method float getDiscountValue() 获取折扣值，=100时表示无折扣，=85时表示8.5折
 * @method void setDiscountValue(float $DiscountValue) 设置折扣值，=100时表示无折扣，=85时表示8.5折
 * @method integer getTotalCost() 获取原价，折扣前价格，单位：分
 * @method void setTotalCost(integer $TotalCost) 设置原价，折扣前价格，单位：分
 * @method integer getRealTotalCost() 获取折后价，单位：分
 * @method void setRealTotalCost(integer $RealTotalCost) 设置折后价，单位：分
 */
class SubProductPriceDetail extends AbstractModel
{
    /**
     * @var string 子产品名称
     */
    public $Name;

    /**
     * @var float 折扣值，=100时表示无折扣，=85时表示8.5折
     */
    public $DiscountValue;

    /**
     * @var integer 原价，折扣前价格，单位：分
     */
    public $TotalCost;

    /**
     * @var integer 折后价，单位：分
     */
    public $RealTotalCost;

    /**
     * @param string $Name 子产品名称
     * @param float $DiscountValue 折扣值，=100时表示无折扣，=85时表示8.5折
     * @param integer $TotalCost 原价，折扣前价格，单位：分
     * @param integer $RealTotalCost 折后价，单位：分
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DiscountValue",$param) and $param["DiscountValue"] !== null) {
            $this->DiscountValue = $param["DiscountValue"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }
    }
}
