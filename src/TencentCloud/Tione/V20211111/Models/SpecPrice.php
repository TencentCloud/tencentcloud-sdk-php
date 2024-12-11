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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计费项询价结果
 *
 * @method string getSpecName() 获取计费项名称
 * @method void setSpecName(string $SpecName) 设置计费项名称
 * @method integer getTotalCost() 获取原价，单位：分。最大值42亿，超过则返回0
 * @method void setTotalCost(integer $TotalCost) 设置原价，单位：分。最大值42亿，超过则返回0
 * @method integer getRealTotalCost() 获取优惠后的价格，单位：分
 * @method void setRealTotalCost(integer $RealTotalCost) 设置优惠后的价格，单位：分
 * @method integer getSpecCount() 获取计费项数量
 * @method void setSpecCount(integer $SpecCount) 设置计费项数量
 */
class SpecPrice extends AbstractModel
{
    /**
     * @var string 计费项名称
     */
    public $SpecName;

    /**
     * @var integer 原价，单位：分。最大值42亿，超过则返回0
     */
    public $TotalCost;

    /**
     * @var integer 优惠后的价格，单位：分
     */
    public $RealTotalCost;

    /**
     * @var integer 计费项数量
     */
    public $SpecCount;

    /**
     * @param string $SpecName 计费项名称
     * @param integer $TotalCost 原价，单位：分。最大值42亿，超过则返回0
     * @param integer $RealTotalCost 优惠后的价格，单位：分
     * @param integer $SpecCount 计费项数量
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
        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("SpecCount",$param) and $param["SpecCount"] !== null) {
            $this->SpecCount = $param["SpecCount"];
        }
    }
}
