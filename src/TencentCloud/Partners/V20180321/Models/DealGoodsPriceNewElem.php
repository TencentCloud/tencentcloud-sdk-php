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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 订单价格详情
 *
 * @method integer getRealTotalCost() 获取<p>实付金额</p><p>单位：分</p><p>该金额与控制台展示金额一致，为订单实付价 - 代金券之后的结果</p>
 * @method void setRealTotalCost(integer $RealTotalCost) 设置<p>实付金额</p><p>单位：分</p><p>该金额与控制台展示金额一致，为订单实付价 - 代金券之后的结果</p>
 * @method integer getOriginalTotalCost() 获取<p>原始金额（不含折扣）</p><p>单位：分</p>
 * @method void setOriginalTotalCost(integer $OriginalTotalCost) 设置<p>原始金额（不含折扣）</p><p>单位：分</p>
 */
class DealGoodsPriceNewElem extends AbstractModel
{
    /**
     * @var integer <p>实付金额</p><p>单位：分</p><p>该金额与控制台展示金额一致，为订单实付价 - 代金券之后的结果</p>
     */
    public $RealTotalCost;

    /**
     * @var integer <p>原始金额（不含折扣）</p><p>单位：分</p>
     */
    public $OriginalTotalCost;

    /**
     * @param integer $RealTotalCost <p>实付金额</p><p>单位：分</p><p>该金额与控制台展示金额一致，为订单实付价 - 代金券之后的结果</p>
     * @param integer $OriginalTotalCost <p>原始金额（不含折扣）</p><p>单位：分</p>
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
