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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 待查询的订单标识。OrderId 和 CustomOrderId 必须且只能填写一个。
 *
 * @method string getOrderId() 获取<p>订单 ID，与 CustomOrderId 二选一</p>
 * @method void setOrderId(string $OrderId) 设置<p>订单 ID，与 CustomOrderId 二选一</p>
 * @method string getCustomOrderId() 获取<p>自定义订单 ID，与 OrderId 二选一</p>
 * @method void setCustomOrderId(string $CustomOrderId) 设置<p>自定义订单 ID，与 OrderId 二选一</p>
 */
class BatchDescribeTWeSeeOrdersEntry extends AbstractModel
{
    /**
     * @var string <p>订单 ID，与 CustomOrderId 二选一</p>
     */
    public $OrderId;

    /**
     * @var string <p>自定义订单 ID，与 OrderId 二选一</p>
     */
    public $CustomOrderId;

    /**
     * @param string $OrderId <p>订单 ID，与 CustomOrderId 二选一</p>
     * @param string $CustomOrderId <p>自定义订单 ID，与 OrderId 二选一</p>
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
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("CustomOrderId",$param) and $param["CustomOrderId"] !== null) {
            $this->CustomOrderId = $param["CustomOrderId"];
        }
    }
}
