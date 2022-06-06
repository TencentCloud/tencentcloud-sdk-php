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
 * 冻结订单列表
 *
 * @method array getList() 获取列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setList(array $List) 设置列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCount() 获取总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCount(integer $Count) 设置总数
注意：此字段可能返回 null，表示取不到有效值。
 */
class FreezeOrders extends AbstractModel
{
    /**
     * @var array 列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $List;

    /**
     * @var integer 总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Count;

    /**
     * @param array $List 列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Count 总数
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
        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new FreezeOrderResult();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
