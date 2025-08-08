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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合规组信息
 *
 * @method integer getComplianceGroupId() 获取合规组ID
 * @method void setComplianceGroupId(integer $ComplianceGroupId) 设置合规组ID
 * @method string getName() 获取合规组名称
 * @method void setName(string $Name) 设置合规组名称
 * @method string getDescription() 获取合规组描述信息
 * @method void setDescription(string $Description) 设置合规组描述信息
 * @method integer getComplianceGroupType() 获取合规组类型；0 默认合规组，1 系统合规组（除默认合规组外）, 2 自定义合规组
 * @method void setComplianceGroupType(integer $ComplianceGroupType) 设置合规组类型；0 默认合规组，1 系统合规组（除默认合规组外）, 2 自定义合规组
 * @method array getComplianceGroupRules() 获取合规组对应的规则项
 * @method void setComplianceGroupRules(array $ComplianceGroupRules) 设置合规组对应的规则项
 * @method integer getLevelGroupId() 获取合规组对应的分级组ID
 * @method void setLevelGroupId(integer $LevelGroupId) 设置合规组对应的分级组ID
 * @method boolean getDisabled() 获取是否禁止使用（true，禁止使用，false，可以使用）
 * @method void setDisabled(boolean $Disabled) 设置是否禁止使用（true，禁止使用，false，可以使用）
 * @method boolean getIsAlias() 获取是否别名
 * @method void setIsAlias(boolean $IsAlias) 设置是否别名
 * @method integer getStatus() 获取1代表模板开启，0代表模板关闭
 * @method void setStatus(integer $Status) 设置1代表模板开启，0代表模板关闭
 * @method string getModifyTime() 获取模板最后修改时间
 * @method void setModifyTime(string $ModifyTime) 设置模板最后修改时间
 */
class DspaDiscoveryComplianceGroupInfo extends AbstractModel
{
    /**
     * @var integer 合规组ID
     */
    public $ComplianceGroupId;

    /**
     * @var string 合规组名称
     */
    public $Name;

    /**
     * @var string 合规组描述信息
     */
    public $Description;

    /**
     * @var integer 合规组类型；0 默认合规组，1 系统合规组（除默认合规组外）, 2 自定义合规组
     */
    public $ComplianceGroupType;

    /**
     * @var array 合规组对应的规则项
     */
    public $ComplianceGroupRules;

    /**
     * @var integer 合规组对应的分级组ID
     */
    public $LevelGroupId;

    /**
     * @var boolean 是否禁止使用（true，禁止使用，false，可以使用）
     */
    public $Disabled;

    /**
     * @var boolean 是否别名
     */
    public $IsAlias;

    /**
     * @var integer 1代表模板开启，0代表模板关闭
     */
    public $Status;

    /**
     * @var string 模板最后修改时间
     */
    public $ModifyTime;

    /**
     * @param integer $ComplianceGroupId 合规组ID
     * @param string $Name 合规组名称
     * @param string $Description 合规组描述信息
     * @param integer $ComplianceGroupType 合规组类型；0 默认合规组，1 系统合规组（除默认合规组外）, 2 自定义合规组
     * @param array $ComplianceGroupRules 合规组对应的规则项
     * @param integer $LevelGroupId 合规组对应的分级组ID
     * @param boolean $Disabled 是否禁止使用（true，禁止使用，false，可以使用）
     * @param boolean $IsAlias 是否别名
     * @param integer $Status 1代表模板开启，0代表模板关闭
     * @param string $ModifyTime 模板最后修改时间
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
