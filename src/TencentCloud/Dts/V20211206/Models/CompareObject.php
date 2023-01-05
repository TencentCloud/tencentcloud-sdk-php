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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 一致性对比对象配置
 *
 * @method string getObjectMode() 获取对象模式 整实例-all,部分对象-partial
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjectMode(string $ObjectMode) 设置对象模式 整实例-all,部分对象-partial
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getObjectItems() 获取对象列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjectItems(array $ObjectItems) 设置对象列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAdvancedObjects() 获取高级对象类型，如account(账号),index(索引),shardkey(片建，后面可能会调整),schema(库表结构)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvancedObjects(array $AdvancedObjects) 设置高级对象类型，如account(账号),index(索引),shardkey(片建，后面可能会调整),schema(库表结构)
注意：此字段可能返回 null，表示取不到有效值。
 */
class CompareObject extends AbstractModel
{
    /**
     * @var string 对象模式 整实例-all,部分对象-partial
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjectMode;

    /**
     * @var array 对象列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjectItems;

    /**
     * @var array 高级对象类型，如account(账号),index(索引),shardkey(片建，后面可能会调整),schema(库表结构)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvancedObjects;

    /**
     * @param string $ObjectMode 对象模式 整实例-all,部分对象-partial
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ObjectItems 对象列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AdvancedObjects 高级对象类型，如account(账号),index(索引),shardkey(片建，后面可能会调整),schema(库表结构)
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
        if (array_key_exists("ObjectMode",$param) and $param["ObjectMode"] !== null) {
            $this->ObjectMode = $param["ObjectMode"];
        }

        if (array_key_exists("ObjectItems",$param) and $param["ObjectItems"] !== null) {
            $this->ObjectItems = [];
            foreach ($param["ObjectItems"] as $key => $value){
                $obj = new CompareObjectItem();
                $obj->deserialize($value);
                array_push($this->ObjectItems, $obj);
            }
        }

        if (array_key_exists("AdvancedObjects",$param) and $param["AdvancedObjects"] !== null) {
            $this->AdvancedObjects = $param["AdvancedObjects"];
        }
    }
}
