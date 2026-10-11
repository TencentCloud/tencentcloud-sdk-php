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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 字段关联的字典维度信息，仅返回类型为DICT（字典维度）的维度关联
 *
 * @method string getDictCodeId() 获取关联的标准字典代码ID
 * @method void setDictCodeId(string $DictCodeId) 设置关联的标准字典代码ID
 * @method array getDictItems() 获取字典项列表（key-value映射）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDictItems(array $DictItems) 设置字典项列表（key-value映射）
注意：此字段可能返回 null，表示取不到有效值。
 */
class DictDimensionInfo extends AbstractModel
{
    /**
     * @var string 关联的标准字典代码ID
     */
    public $DictCodeId;

    /**
     * @var array 字典项列表（key-value映射）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DictItems;

    /**
     * @param string $DictCodeId 关联的标准字典代码ID
     * @param array $DictItems 字典项列表（key-value映射）
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
        if (array_key_exists("DictCodeId",$param) and $param["DictCodeId"] !== null) {
            $this->DictCodeId = $param["DictCodeId"];
        }

        if (array_key_exists("DictItems",$param) and $param["DictItems"] !== null) {
            $this->DictItems = [];
            foreach ($param["DictItems"] as $key => $value){
                $obj = new DictItem();
                $obj->deserialize($value);
                array_push($this->DictItems, $obj);
            }
        }
    }
}
