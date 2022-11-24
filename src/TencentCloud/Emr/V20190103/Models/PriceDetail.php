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
 * 价格详情
 *
 * @method string getResourceId() 获取节点ID
 * @method void setResourceId(string $ResourceId) 设置节点ID
 * @method string getFormula() 获取价格计算公式
 * @method void setFormula(string $Formula) 设置价格计算公式
 * @method float getOriginalCost() 获取原价
 * @method void setOriginalCost(float $OriginalCost) 设置原价
 * @method float getDiscountCost() 获取折扣价
 * @method void setDiscountCost(float $DiscountCost) 设置折扣价
 */
class PriceDetail extends AbstractModel
{
    /**
     * @var string 节点ID
     */
    public $ResourceId;

    /**
     * @var string 价格计算公式
     */
    public $Formula;

    /**
     * @var float 原价
     */
    public $OriginalCost;

    /**
     * @var float 折扣价
     */
    public $DiscountCost;

    /**
     * @param string $ResourceId 节点ID
     * @param string $Formula 价格计算公式
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Formula",$param) and $param["Formula"] !== null) {
            $this->Formula = $param["Formula"];
        }

        if (array_key_exists("OriginalCost",$param) and $param["OriginalCost"] !== null) {
            $this->OriginalCost = $param["OriginalCost"];
        }

        if (array_key_exists("DiscountCost",$param) and $param["DiscountCost"] !== null) {
            $this->DiscountCost = $param["DiscountCost"];
        }
    }
}
