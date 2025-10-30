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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用详情
 *
 * @method string getAppType() 获取应用类型；knowledge_qa-知识问答管理；summary-知识摘要；classifys-知识标签提取
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppType(string $AppType) 设置应用类型；knowledge_qa-知识问答管理；summary-知识摘要；classifys-知识标签提取
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppTypeDesc() 获取应用类型描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppTypeDesc(string $AppTypeDesc) 设置应用类型描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppBizId() 获取应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppBizId(string $AppBizId) 设置应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAvatar() 获取应用头像
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvatar(string $Avatar) 设置应用头像
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDesc() 获取应用描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDesc(string $Desc) 设置应用描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppStatus() 获取应用状态，1：未上线，2：运行中，3：停用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppStatus(integer $AppStatus) 设置应用状态，1：未上线，2：运行中，3：停用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppStatusDesc() 获取状态说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppStatusDesc(string $AppStatusDesc) 设置状态说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperator() 获取最后修改人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperator(string $Operator) 设置最后修改人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelName() 获取模型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelName(string $ModelName) 设置模型名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelAliasName() 获取生成模型别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelAliasName(string $ModelAliasName) 设置生成模型别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPattern() 获取应用模式 standard:标准模式, agent: agent模式，single_workflow：单工作流模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPattern(string $Pattern) 设置应用模式 standard:标准模式, agent: agent模式，single_workflow：单工作流模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getThoughtModelAliasName() 获取思考模型别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThoughtModelAliasName(string $ThoughtModelAliasName) 设置思考模型别名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPermissionIds() 获取权限位信息
 * @method void setPermissionIds(array $PermissionIds) 设置权限位信息
 * @method string getCreator() 获取创建人昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreator(string $Creator) 设置创建人昵称
注意：此字段可能返回 null，表示取不到有效值。
 */
class AppInfo extends AbstractModel
{
    /**
     * @var string 应用类型；knowledge_qa-知识问答管理；summary-知识摘要；classifys-知识标签提取
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppType;

    /**
     * @var string 应用类型描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppTypeDesc;

    /**
     * @var string 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppBizId;

    /**
     * @var string 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 应用头像
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Avatar;

    /**
     * @var string 应用描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Desc;

    /**
     * @var integer 应用状态，1：未上线，2：运行中，3：停用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppStatus;

    /**
     * @var string 状态说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppStatusDesc;

    /**
     * @var string 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 最后修改人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operator;

    /**
     * @var string 模型名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelName;

    /**
     * @var string 生成模型别名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelAliasName;

    /**
     * @var string 应用模式 standard:标准模式, agent: agent模式，single_workflow：单工作流模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pattern;

    /**
     * @var string 思考模型别名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThoughtModelAliasName;

    /**
     * @var array 权限位信息
     */
    public $PermissionIds;

    /**
     * @var string 创建人昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Creator;

    /**
     * @param string $AppType 应用类型；knowledge_qa-知识问答管理；summary-知识摘要；classifys-知识标签提取
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppTypeDesc 应用类型描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppBizId 应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Avatar 应用头像
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Desc 应用描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppStatus 应用状态，1：未上线，2：运行中，3：停用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppStatusDesc 状态说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Operator 最后修改人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelName 模型名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelAliasName 生成模型别名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Pattern 应用模式 standard:标准模式, agent: agent模式，single_workflow：单工作流模式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ThoughtModelAliasName 思考模型别名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PermissionIds 权限位信息
     * @param string $Creator 创建人昵称
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
        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("AppTypeDesc",$param) and $param["AppTypeDesc"] !== null) {
            $this->AppTypeDesc = $param["AppTypeDesc"];
        }

        if (array_key_exists("AppBizId",$param) and $param["AppBizId"] !== null) {
            $this->AppBizId = $param["AppBizId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("AppStatus",$param) and $param["AppStatus"] !== null) {
            $this->AppStatus = $param["AppStatus"];
        }

        if (array_key_exists("AppStatusDesc",$param) and $param["AppStatusDesc"] !== null) {
            $this->AppStatusDesc = $param["AppStatusDesc"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ModelAliasName",$param) and $param["ModelAliasName"] !== null) {
            $this->ModelAliasName = $param["ModelAliasName"];
        }

        if (array_key_exists("Pattern",$param) and $param["Pattern"] !== null) {
            $this->Pattern = $param["Pattern"];
        }

        if (array_key_exists("ThoughtModelAliasName",$param) and $param["ThoughtModelAliasName"] !== null) {
            $this->ThoughtModelAliasName = $param["ThoughtModelAliasName"];
        }

        if (array_key_exists("PermissionIds",$param) and $param["PermissionIds"] !== null) {
            $this->PermissionIds = $param["PermissionIds"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }
    }
}
