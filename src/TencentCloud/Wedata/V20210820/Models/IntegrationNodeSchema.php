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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集成节点schema
 *
 * @method string getId() 获取schema id
 * @method void setId(string $Id) 设置schema id
 * @method string getName() 获取schema名称
 * @method void setName(string $Name) 设置schema名称
 * @method string getType() 获取schema类型
 * @method void setType(string $Type) 设置schema类型
 * @method string getValue() 获取schema值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置schema值
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProperties() 获取schema拓展属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProperties(array $Properties) 设置schema拓展属性
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlias() 获取schema别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlias(string $Alias) 设置schema别名
注意：此字段可能返回 null，表示取不到有效值。
 */
class IntegrationNodeSchema extends AbstractModel
{
    /**
     * @var string schema id
     */
    public $Id;

    /**
     * @var string schema名称
     */
    public $Name;

    /**
     * @var string schema类型
     */
    public $Type;

    /**
     * @var string schema值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var array schema拓展属性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Properties;

    /**
     * @var string schema别名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Alias;

    /**
     * @param string $Id schema id
     * @param string $Name schema名称
     * @param string $Type schema类型
     * @param string $Value schema值
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Properties schema拓展属性
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Alias schema别名
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new RecordField();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }
    }
}
