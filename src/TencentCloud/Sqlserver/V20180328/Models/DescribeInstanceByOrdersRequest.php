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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceByOrders请求参数结构体
 *
 * @method array getDealNames() 获取订单号集合
 * @method void setDealNames(array $DealNames) 设置订单号集合
 */
class DescribeInstanceByOrdersRequest extends AbstractModel
{
    /**
     * @var array 订单号集合
     */
    public $DealNames;

    /**
     * @param array $DealNames 订单号集合
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
    }
}
