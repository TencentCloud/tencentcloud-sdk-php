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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分账结果响应对象
 *
 * @method array getOrders() 获取分账订单列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrders(array $Orders) 设置分账订单列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class DistributeQueryResult extends AbstractModel
{
    /**
     * @var array 分账订单列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Orders;

    /**
     * @param array $Orders 分账订单列表
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Orders",$param) and $param["Orders"] !== null) {
            $this->Orders = [];
            foreach ($param["Orders"] as $key => $value){
                $obj = new MultiApplyOrder();
                $obj->deserialize($value);
                array_push($this->Orders, $obj);
            }
        }
    }
}
