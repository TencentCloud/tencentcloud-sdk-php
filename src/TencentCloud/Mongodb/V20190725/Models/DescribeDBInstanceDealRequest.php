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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstanceDeal请求参数结构体
 *
 * @method string getDealId() 获取订单 ID。
- 按量计费实例，请通过 [CreateDBInstanceHour](https://cloud.tencent.com/document/product/240/38570) 接口输出的参数**DealId**获取。。
- 包年包月计费实例，请通过 [CreateDBInstance](https://cloud.tencent.com/document/product/240/38571) 接口输出的参数**DealId**获取。
 * @method void setDealId(string $DealId) 设置订单 ID。
- 按量计费实例，请通过 [CreateDBInstanceHour](https://cloud.tencent.com/document/product/240/38570) 接口输出的参数**DealId**获取。。
- 包年包月计费实例，请通过 [CreateDBInstance](https://cloud.tencent.com/document/product/240/38571) 接口输出的参数**DealId**获取。
 */
class DescribeDBInstanceDealRequest extends AbstractModel
{
    /**
     * @var string 订单 ID。
- 按量计费实例，请通过 [CreateDBInstanceHour](https://cloud.tencent.com/document/product/240/38570) 接口输出的参数**DealId**获取。。
- 包年包月计费实例，请通过 [CreateDBInstance](https://cloud.tencent.com/document/product/240/38571) 接口输出的参数**DealId**获取。
     */
    public $DealId;

    /**
     * @param string $DealId 订单 ID。
- 按量计费实例，请通过 [CreateDBInstanceHour](https://cloud.tencent.com/document/product/240/38570) 接口输出的参数**DealId**获取。。
- 包年包月计费实例，请通过 [CreateDBInstance](https://cloud.tencent.com/document/product/240/38571) 接口输出的参数**DealId**获取。
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
        if (array_key_exists("DealId",$param) and $param["DealId"] !== null) {
            $this->DealId = $param["DealId"];
        }
    }
}
