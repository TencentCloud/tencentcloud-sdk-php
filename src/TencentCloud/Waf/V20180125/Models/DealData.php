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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计费下单响应实体
 *
 * @method array getDealNames() 获取订单号列表，元素个数与请求包的goods数组的元素个数一致，商品详情与订单按顺序对应
 * @method void setDealNames(array $DealNames) 设置订单号列表，元素个数与请求包的goods数组的元素个数一致，商品详情与订单按顺序对应
 * @method string getBigDealId() 获取大订单号，一个大订单号下可以有多个子订单，说明是同一次下单[{},{}]
 * @method void setBigDealId(string $BigDealId) 设置大订单号，一个大订单号下可以有多个子订单，说明是同一次下单[{},{}]
 */
class DealData extends AbstractModel
{
    /**
     * @var array 订单号列表，元素个数与请求包的goods数组的元素个数一致，商品详情与订单按顺序对应
     */
    public $DealNames;

    /**
     * @var string 大订单号，一个大订单号下可以有多个子订单，说明是同一次下单[{},{}]
     */
    public $BigDealId;

    /**
     * @param array $DealNames 订单号列表，元素个数与请求包的goods数组的元素个数一致，商品详情与订单按顺序对应
     * @param string $BigDealId 大订单号，一个大订单号下可以有多个子订单，说明是同一次下单[{},{}]
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
        if (array_key_exists("DealNames",$param) and $param["DealNames"] !== null) {
            $this->DealNames = $param["DealNames"];
        }

        if (array_key_exists("BigDealId",$param) and $param["BigDealId"] !== null) {
            $this->BigDealId = $param["BigDealId"];
        }
    }
}
