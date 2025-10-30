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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务判断条件
 *
 * @method string getId() 获取判断条件id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置判断条件id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConditions() 获取判断条件配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditions(array $Conditions) 设置判断条件配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLinker() 获取条件列表的链接符号，取值如下：

- &&：逻辑与
- ||：逻辑或
 * @method void setLinker(string $Linker) 设置条件列表的链接符号，取值如下：

- &&：逻辑与
- ||：逻辑或
 * @method array getRearDriveIndexs() 获取满足判断条件执行节点索引；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRearDriveIndexs(array $RearDriveIndexs) 设置满足判断条件执行节点索引；
注意：此字段可能返回 null，表示取不到有效值。
 */
class Rules extends AbstractModel
{
    /**
     * @var string 判断条件id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var array 判断条件配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Conditions;

    /**
     * @var string 条件列表的链接符号，取值如下：

- &&：逻辑与
- ||：逻辑或
     */
    public $Linker;

    /**
     * @var array 满足判断条件执行节点索引；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RearDriveIndexs;

    /**
     * @param string $Id 判断条件id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Conditions 判断条件配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Linker 条件列表的链接符号，取值如下：

- &&：逻辑与
- ||：逻辑或
     * @param array $RearDriveIndexs 满足判断条件执行节点索引；
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new RuleConditionItem();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("Linker",$param) and $param["Linker"] !== null) {
            $this->Linker = $param["Linker"];
        }

        if (array_key_exists("RearDriveIndexs",$param) and $param["RearDriveIndexs"] !== null) {
            $this->RearDriveIndexs = $param["RearDriveIndexs"];
        }
    }
}
