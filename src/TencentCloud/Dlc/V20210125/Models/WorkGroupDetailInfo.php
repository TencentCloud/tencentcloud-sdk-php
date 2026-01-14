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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作组详细信息
 *
 * @method integer getWorkGroupId() 获取工作组Id
 * @method void setWorkGroupId(integer $WorkGroupId) 设置工作组Id
 * @method string getWorkGroupName() 获取工作组名称
 * @method void setWorkGroupName(string $WorkGroupName) 设置工作组名称
 * @method string getType() 获取包含的信息类型。User：用户信息；DataAuth：数据权限；EngineAuth:引擎权限
 * @method void setType(string $Type) 设置包含的信息类型。User：用户信息；DataAuth：数据权限；EngineAuth:引擎权限
 * @method Users getUserInfo() 获取工作组上绑定的用户集合
 * @method void setUserInfo(Users $UserInfo) 设置工作组上绑定的用户集合
 * @method Policys getDataPolicyInfo() 获取数据权限集合
 * @method void setDataPolicyInfo(Policys $DataPolicyInfo) 设置数据权限集合
 * @method Policys getEnginePolicyInfo() 获取引擎权限集合
 * @method void setEnginePolicyInfo(Policys $EnginePolicyInfo) 设置引擎权限集合
 * @method string getWorkGroupDescription() 获取工作组描述信息
 * @method void setWorkGroupDescription(string $WorkGroupDescription) 设置工作组描述信息
 * @method Policys getRowFilterInfo() 获取行过滤信息集合
 * @method void setRowFilterInfo(Policys $RowFilterInfo) 设置行过滤信息集合
 * @method Policy getCatalogPolicyInfo() 获取数据目录权限集
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogPolicyInfo(Policy $CatalogPolicyInfo) 设置数据目录权限集
注意：此字段可能返回 null，表示取不到有效值。
 * @method Policys getDataCatalogPolicyInfo() 获取数据目录权限
 * @method void setDataCatalogPolicyInfo(Policys $DataCatalogPolicyInfo) 设置数据目录权限
 * @method Policys getModelPolicyInfo() 获取模型权限
 * @method void setModelPolicyInfo(Policys $ModelPolicyInfo) 设置模型权限
 */
class WorkGroupDetailInfo extends AbstractModel
{
    /**
     * @var integer 工作组Id
     */
    public $WorkGroupId;

    /**
     * @var string 工作组名称
     */
    public $WorkGroupName;

    /**
     * @var string 包含的信息类型。User：用户信息；DataAuth：数据权限；EngineAuth:引擎权限
     */
    public $Type;

    /**
     * @var Users 工作组上绑定的用户集合
     */
    public $UserInfo;

    /**
     * @var Policys 数据权限集合
     */
    public $DataPolicyInfo;

    /**
     * @var Policys 引擎权限集合
     */
    public $EnginePolicyInfo;

    /**
     * @var string 工作组描述信息
     */
    public $WorkGroupDescription;

    /**
     * @var Policys 行过滤信息集合
     */
    public $RowFilterInfo;

    /**
     * @var Policy 数据目录权限集
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CatalogPolicyInfo;

    /**
     * @var Policys 数据目录权限
     */
    public $DataCatalogPolicyInfo;

    /**
     * @var Policys 模型权限
     */
    public $ModelPolicyInfo;

    /**
     * @param integer $WorkGroupId 工作组Id
     * @param string $WorkGroupName 工作组名称
     * @param string $Type 包含的信息类型。User：用户信息；DataAuth：数据权限；EngineAuth:引擎权限
     * @param Users $UserInfo 工作组上绑定的用户集合
     * @param Policys $DataPolicyInfo 数据权限集合
     * @param Policys $EnginePolicyInfo 引擎权限集合
     * @param string $WorkGroupDescription 工作组描述信息
     * @param Policys $RowFilterInfo 行过滤信息集合
     * @param Policy $CatalogPolicyInfo 数据目录权限集
注意：此字段可能返回 null，表示取不到有效值。
     * @param Policys $DataCatalogPolicyInfo 数据目录权限
     * @param Policys $ModelPolicyInfo 模型权限
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
        if (array_key_exists("WorkGroupId",$param) and $param["WorkGroupId"] !== null) {
            $this->WorkGroupId = $param["WorkGroupId"];
        }

        if (array_key_exists("WorkGroupName",$param) and $param["WorkGroupName"] !== null) {
            $this->WorkGroupName = $param["WorkGroupName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = new Users();
            $this->UserInfo->deserialize($param["UserInfo"]);
        }

        if (array_key_exists("DataPolicyInfo",$param) and $param["DataPolicyInfo"] !== null) {
            $this->DataPolicyInfo = new Policys();
            $this->DataPolicyInfo->deserialize($param["DataPolicyInfo"]);
        }

        if (array_key_exists("EnginePolicyInfo",$param) and $param["EnginePolicyInfo"] !== null) {
            $this->EnginePolicyInfo = new Policys();
            $this->EnginePolicyInfo->deserialize($param["EnginePolicyInfo"]);
        }

        if (array_key_exists("WorkGroupDescription",$param) and $param["WorkGroupDescription"] !== null) {
            $this->WorkGroupDescription = $param["WorkGroupDescription"];
        }

        if (array_key_exists("RowFilterInfo",$param) and $param["RowFilterInfo"] !== null) {
            $this->RowFilterInfo = new Policys();
            $this->RowFilterInfo->deserialize($param["RowFilterInfo"]);
        }

        if (array_key_exists("CatalogPolicyInfo",$param) and $param["CatalogPolicyInfo"] !== null) {
            $this->CatalogPolicyInfo = new Policy();
            $this->CatalogPolicyInfo->deserialize($param["CatalogPolicyInfo"]);
        }

        if (array_key_exists("DataCatalogPolicyInfo",$param) and $param["DataCatalogPolicyInfo"] !== null) {
            $this->DataCatalogPolicyInfo = new Policys();
            $this->DataCatalogPolicyInfo->deserialize($param["DataCatalogPolicyInfo"]);
        }

        if (array_key_exists("ModelPolicyInfo",$param) and $param["ModelPolicyInfo"] !== null) {
            $this->ModelPolicyInfo = new Policys();
            $this->ModelPolicyInfo->deserialize($param["ModelPolicyInfo"]);
        }
    }
}
