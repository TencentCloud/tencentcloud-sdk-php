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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PluginConfigDTO
 *
 * @method boolean getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(boolean $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPluginName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPluginName(string $PluginName) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPluginID() 获取ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPluginID(string $PluginID) 设置ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevel() 获取优先级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(integer $Level) 设置优先级
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPluginFormValues() 获取表单配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPluginFormValues(array $PluginFormValues) 设置表单配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class PluginConfigDTO extends AbstractModel
{
    /**
     * @var boolean 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PluginName;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PluginID;

    /**
     * @var integer 优先级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var array 表单配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PluginFormValues;

    /**
     * @param boolean $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PluginName 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PluginID ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Level 优先级
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PluginFormValues 表单配置
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PluginName",$param) and $param["PluginName"] !== null) {
            $this->PluginName = $param["PluginName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("PluginID",$param) and $param["PluginID"] !== null) {
            $this->PluginID = $param["PluginID"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("PluginFormValues",$param) and $param["PluginFormValues"] !== null) {
            $this->PluginFormValues = [];
            foreach ($param["PluginFormValues"] as $key => $value){
                $obj = new PluginFormValueDTO();
                $obj->deserialize($value);
                array_push($this->PluginFormValues, $obj);
            }
        }
    }
}
