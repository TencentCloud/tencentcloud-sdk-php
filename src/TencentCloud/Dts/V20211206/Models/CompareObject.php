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
 * @method string getObjectMode() 获取迁移对象模式 all(所有迁移对象)，partial(部分对象迁移)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjectMode(string $ObjectMode) 设置迁移对象模式 all(所有迁移对象)，partial(部分对象迁移)
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getObjectItems() 获取迁移对象库表配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjectItems(array $ObjectItems) 设置迁移对象库表配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class CompareObject extends AbstractModel
{
    /**
     * @var string 迁移对象模式 all(所有迁移对象)，partial(部分对象迁移)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjectMode;

    /**
     * @var array 迁移对象库表配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjectItems;

    /**
     * @param string $ObjectMode 迁移对象模式 all(所有迁移对象)，partial(部分对象迁移)
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ObjectItems 迁移对象库表配置
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
    }
}
