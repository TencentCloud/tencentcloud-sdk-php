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
 * 用户详细信息
 *
 * @method string getUserId() 获取用户Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置用户Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取返回的信息类型，Group：返回的当前用户的工作组信息；DataAuth：返回的当前用户的数据权限信息；EngineAuth：返回的当前用户的引擎权限信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置返回的信息类型，Group：返回的当前用户的工作组信息；DataAuth：返回的当前用户的数据权限信息；EngineAuth：返回的当前用户的引擎权限信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserType() 获取用户类型：ADMIN：管理员 COMMON：一般用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserType(string $UserType) 设置用户类型：ADMIN：管理员 COMMON：一般用户
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserDescription() 获取用户描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserDescription(string $UserDescription) 设置用户描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method Policys getDataPolicyInfo() 获取数据权限信息集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataPolicyInfo(Policys $DataPolicyInfo) 设置数据权限信息集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method Policys getEnginePolicyInfo() 获取引擎权限集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnginePolicyInfo(Policys $EnginePolicyInfo) 设置引擎权限集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method WorkGroups getWorkGroupInfo() 获取绑定到该用户的工作组集合信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkGroupInfo(WorkGroups $WorkGroupInfo) 设置绑定到该用户的工作组集合信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserAlias() 获取用户别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserAlias(string $UserAlias) 设置用户别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method Policys getRowFilterInfo() 获取行过滤集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRowFilterInfo(Policys $RowFilterInfo) 设置行过滤集合
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserDetailInfo extends AbstractModel
{
    /**
     * @var string 用户Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 返回的信息类型，Group：返回的当前用户的工作组信息；DataAuth：返回的当前用户的数据权限信息；EngineAuth：返回的当前用户的引擎权限信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 用户类型：ADMIN：管理员 COMMON：一般用户
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserType;

    /**
     * @var string 用户描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserDescription;

    /**
     * @var Policys 数据权限信息集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataPolicyInfo;

    /**
     * @var Policys 引擎权限集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnginePolicyInfo;

    /**
     * @var WorkGroups 绑定到该用户的工作组集合信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkGroupInfo;

    /**
     * @var string 用户别名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserAlias;

    /**
     * @var Policys 行过滤集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RowFilterInfo;

    /**
     * @param string $UserId 用户Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 返回的信息类型，Group：返回的当前用户的工作组信息；DataAuth：返回的当前用户的数据权限信息；EngineAuth：返回的当前用户的引擎权限信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserType 用户类型：ADMIN：管理员 COMMON：一般用户
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserDescription 用户描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param Policys $DataPolicyInfo 数据权限信息集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param Policys $EnginePolicyInfo 引擎权限集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param WorkGroups $WorkGroupInfo 绑定到该用户的工作组集合信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserAlias 用户别名
注意：此字段可能返回 null，表示取不到有效值。
     * @param Policys $RowFilterInfo 行过滤集合
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("UserDescription",$param) and $param["UserDescription"] !== null) {
            $this->UserDescription = $param["UserDescription"];
        }

        if (array_key_exists("DataPolicyInfo",$param) and $param["DataPolicyInfo"] !== null) {
            $this->DataPolicyInfo = new Policys();
            $this->DataPolicyInfo->deserialize($param["DataPolicyInfo"]);
        }

        if (array_key_exists("EnginePolicyInfo",$param) and $param["EnginePolicyInfo"] !== null) {
            $this->EnginePolicyInfo = new Policys();
            $this->EnginePolicyInfo->deserialize($param["EnginePolicyInfo"]);
        }

        if (array_key_exists("WorkGroupInfo",$param) and $param["WorkGroupInfo"] !== null) {
            $this->WorkGroupInfo = new WorkGroups();
            $this->WorkGroupInfo->deserialize($param["WorkGroupInfo"]);
        }

        if (array_key_exists("UserAlias",$param) and $param["UserAlias"] !== null) {
            $this->UserAlias = $param["UserAlias"];
        }

        if (array_key_exists("RowFilterInfo",$param) and $param["RowFilterInfo"] !== null) {
            $this->RowFilterInfo = new Policys();
            $this->RowFilterInfo->deserialize($param["RowFilterInfo"]);
        }
    }
}
