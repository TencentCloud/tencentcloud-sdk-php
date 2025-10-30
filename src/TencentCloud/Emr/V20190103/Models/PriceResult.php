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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 询价结果
 *
 * @method float getOriginalCost() 获取原价
 * @method void setOriginalCost(float $OriginalCost) 设置原价
 * @method float getDiscountCost() 获取折扣价
 * @method void setDiscountCost(float $DiscountCost) 设置折扣价
 */
class PriceResult extends AbstractModel
{
    /**
     * @var float 原价
     */
    public $OriginalCost;

    /**
     * @var float 折扣价
     */
    public $DiscountCost;

    /**
     * @param float $OriginalCost 原价
     * @param float $DiscountCost 折扣价
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
        if (array_key_exists("OriginalCost",$param) and $param["OriginalCost"] !== null) {
            $this->OriginalCost = $param["OriginalCost"];
        }

        if (array_key_exists("DiscountCost",$param) and $param["DiscountCost"] !== null) {
            $this->DiscountCost = $param["DiscountCost"];
        }
    }
}
