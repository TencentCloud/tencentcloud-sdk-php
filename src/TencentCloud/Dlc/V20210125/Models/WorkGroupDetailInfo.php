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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作组详细信息
 *
 * @method integer getWorkGroupId() 获取工作组Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkGroupId(integer $WorkGroupId) 设置工作组Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkGroupName() 获取工作组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkGroupName(string $WorkGroupName) 设置工作组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取包含的信息类型。User：用户信息；DataAuth：数据权限；EngineAuth:引擎权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置包含的信息类型。User：用户信息；DataAuth：数据权限；EngineAuth:引擎权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method Users getUserInfo() 获取工作组上绑定的用户集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserInfo(Users $UserInfo) 设置工作组上绑定的用户集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method Policys getDataPolicyInfo() 获取数据权限集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataPolicyInfo(Policys $DataPolicyInfo) 设置数据权限集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method Policys getEnginePolicyInfo() 获取引擎权限集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnginePolicyInfo(Policys $EnginePolicyInfo) 设置引擎权限集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkGroupDescription() 获取工作组描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkGroupDescription(string $WorkGroupDescription) 设置工作组描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method Policys getRowFilterInfo() 获取行过滤信息集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRowFilterInfo(Policys $RowFilterInfo) 设置行过滤信息集合
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkGroupDetailInfo extends AbstractModel
{
    /**
     * @var integer 工作组Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkGroupId;

    /**
     * @var string 工作组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkGroupName;

    /**
     * @var string 包含的信息类型。User：用户信息；DataAuth：数据权限；EngineAuth:引擎权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var Users 工作组上绑定的用户集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserInfo;

    /**
     * @var Policys 数据权限集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataPolicyInfo;

    /**
     * @var Policys 引擎权限集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnginePolicyInfo;

    /**
     * @var string 工作组描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkGroupDescription;

    /**
     * @var Policys 行过滤信息集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RowFilterInfo;

    /**
     * @param integer $WorkGroupId 工作组Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkGroupName 工作组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 包含的信息类型。User：用户信息；DataAuth：数据权限；EngineAuth:引擎权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param Users $UserInfo 工作组上绑定的用户集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param Policys $DataPolicyInfo 数据权限集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param Policys $EnginePolicyInfo 引擎权限集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkGroupDescription 工作组描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param Policys $RowFilterInfo 行过滤信息集合
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
    }
}
