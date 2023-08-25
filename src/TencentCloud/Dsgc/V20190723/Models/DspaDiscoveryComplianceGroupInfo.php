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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合规组信息
 *
 * @method integer getComplianceGroupId() 获取合规组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComplianceGroupId(integer $ComplianceGroupId) 设置合规组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取合规组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置合规组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取合规组描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置合规组描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getComplianceGroupType() 获取合规组类型；0 默认合规组，1 系统合规组（除默认合规组外）, 2 自定义合规组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComplianceGroupType(integer $ComplianceGroupType) 设置合规组类型；0 默认合规组，1 系统合规组（除默认合规组外）, 2 自定义合规组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getComplianceGroupRules() 获取合规组对应的规则项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComplianceGroupRules(array $ComplianceGroupRules) 设置合规组对应的规则项
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevelGroupId() 获取合规组对应的分级组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevelGroupId(integer $LevelGroupId) 设置合规组对应的分级组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDisabled() 获取是否禁止使用（true，禁止使用，false，可以使用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisabled(boolean $Disabled) 设置是否禁止使用（true，禁止使用，false，可以使用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsAlias() 获取是否别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAlias(boolean $IsAlias) 设置是否别名
注意：此字段可能返回 null，表示取不到有效值。
 */
class DspaDiscoveryComplianceGroupInfo extends AbstractModel
{
    /**
     * @var integer 合规组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComplianceGroupId;

    /**
     * @var string 合规组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 合规组描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 合规组类型；0 默认合规组，1 系统合规组（除默认合规组外）, 2 自定义合规组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComplianceGroupType;

    /**
     * @var array 合规组对应的规则项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComplianceGroupRules;

    /**
     * @var integer 合规组对应的分级组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LevelGroupId;

    /**
     * @var boolean 是否禁止使用（true，禁止使用，false，可以使用）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Disabled;

    /**
     * @var boolean 是否别名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAlias;

    /**
     * @param integer $ComplianceGroupId 合规组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 合规组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 合规组描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ComplianceGroupType 合规组类型；0 默认合规组，1 系统合规组（除默认合规组外）, 2 自定义合规组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ComplianceGroupRules 合规组对应的规则项
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LevelGroupId 合规组对应的分级组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Disabled 是否禁止使用（true，禁止使用，false，可以使用）
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsAlias 是否别名
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
        if (array_key_exists("ComplianceGroupId",$param) and $param["ComplianceGroupId"] !== null) {
            $this->ComplianceGroupId = $param["ComplianceGroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ComplianceGroupType",$param) and $param["ComplianceGroupType"] !== null) {
            $this->ComplianceGroupType = $param["ComplianceGroupType"];
        }

        if (array_key_exists("ComplianceGroupRules",$param) and $param["ComplianceGroupRules"] !== null) {
            $this->ComplianceGroupRules = [];
            foreach ($param["ComplianceGroupRules"] as $key => $value){
                $obj = new DspaDiscoveryComplianceGroupRule();
                $obj->deserialize($value);
                array_push($this->ComplianceGroupRules, $obj);
            }
        }

        if (array_key_exists("LevelGroupId",$param) and $param["LevelGroupId"] !== null) {
            $this->LevelGroupId = $param["LevelGroupId"];
        }

        if (array_key_exists("Disabled",$param) and $param["Disabled"] !== null) {
            $this->Disabled = $param["Disabled"];
        }

        if (array_key_exists("IsAlias",$param) and $param["IsAlias"] !== null) {
            $this->IsAlias = $param["IsAlias"];
        }
    }
}
