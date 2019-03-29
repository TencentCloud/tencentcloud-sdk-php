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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method float getOriginalCost() 获取原始价格
 * @method void setOriginalCost(float $OriginalCost) 设置原始价格
 * @method float getDiscountCost() 获取折扣后价格
 * @method void setDiscountCost(float $DiscountCost) 设置折扣后价格
 * @method string getTimeUnit() 获取时间单位
 * @method void setTimeUnit(string $TimeUnit) 设置时间单位
 * @method integer getTimeSpan() 获取时间长度
 * @method void setTimeSpan(integer $TimeSpan) 设置时间长度
 */

/**
 *用于询价输出
 */
class InquiryPriceResult extends AbstractModel
{
    /**
     * @var float 原始价格
     */
    public $OriginalCost;

    /**
     * @var float 折扣后价格
     */
    public $DiscountCost;

    /**
     * @var string 时间单位
     */
    public $TimeUnit;

    /**
     * @var integer 时间长度
     */
    public $TimeSpan;
    /**
     * @param float $OriginalCost 原始价格
     * @param float $DiscountCost 折扣后价格
     * @param string $TimeUnit 时间单位
     * @param integer $TimeSpan 时间长度
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
        if (array_key_exists("OriginalCost",$param) and $param["OriginalCost"] !== null) {
            $this->OriginalCost = $param["OriginalCost"];
        }

        if (array_key_exists("DiscountCost",$param) and $param["DiscountCost"] !== null) {
            $this->DiscountCost = $param["DiscountCost"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }
    }
}
