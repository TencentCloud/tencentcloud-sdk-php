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
 * 模板详情
 *
 * @method integer getId() 获取模板id
 * @method void setId(integer $Id) 设置模板id
 * @method string getName() 获取模板名称
 * @method void setName(string $Name) 设置模板名称
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getComplianceGroupType() 获取模板类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComplianceGroupType(integer $ComplianceGroupType) 设置模板类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevelGroupId() 获取模板分级方案id
 * @method void setLevelGroupId(integer $LevelGroupId) 设置模板分级方案id
 * @method string getLevelGroupName() 获取模板分级方案名称
 * @method void setLevelGroupName(string $LevelGroupName) 设置模板分级方案名称
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsAlias() 获取是否开启别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAlias(boolean $IsAlias) 设置是否开启别名
注意：此字段可能返回 null，表示取不到有效值。
 */
class ComplianceGroupDetail extends AbstractModel
{
    /**
     * @var integer 模板id
     */
    public $Id;

    /**
     * @var string 模板名称
     */
    public $Name;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 模板类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComplianceGroupType;

    /**
     * @var integer 模板分级方案id
     */
    public $LevelGroupId;

    /**
     * @var string 模板分级方案名称
     */
    public $LevelGroupName;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var boolean 是否开启别名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAlias;

    /**
     * @param integer $Id 模板id
     * @param string $Name 模板名称
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ComplianceGroupType 模板类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LevelGroupId 模板分级方案id
     * @param string $LevelGroupName 模板分级方案名称
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsAlias 是否开启别名
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ComplianceGroupType",$param) and $param["ComplianceGroupType"] !== null) {
            $this->ComplianceGroupType = $param["ComplianceGroupType"];
        }

        if (array_key_exists("LevelGroupId",$param) and $param["LevelGroupId"] !== null) {
            $this->LevelGroupId = $param["LevelGroupId"];
        }

        if (array_key_exists("LevelGroupName",$param) and $param["LevelGroupName"] !== null) {
            $this->LevelGroupName = $param["LevelGroupName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("IsAlias",$param) and $param["IsAlias"] !== null) {
            $this->IsAlias = $param["IsAlias"];
        }
    }
}
