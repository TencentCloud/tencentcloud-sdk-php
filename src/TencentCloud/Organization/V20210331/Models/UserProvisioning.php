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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户同步信息
 *
 * @method string getUserProvisioningId() 获取CAM 用户同步的状态。取值：

Enabled：CAM 用户同步已启用。
Disabled：CAM 用户同步未启用。
 * @method void setUserProvisioningId(string $UserProvisioningId) 设置CAM 用户同步的状态。取值：

Enabled：CAM 用户同步已启用。
Disabled：CAM 用户同步未启用。
 * @method string getDescription() 获取描述。
 * @method void setDescription(string $Description) 设置描述。
 * @method string getStatus() 获取CAM 用户同步的状态。取值：
Enabled：CAM 用户同步已启用。
Disabled：CAM 用户同步未启用。
 * @method void setStatus(string $Status) 设置CAM 用户同步的状态。取值：
Enabled：CAM 用户同步已启用。
Disabled：CAM 用户同步未启用。
 * @method string getPrincipalId() 获取CAM 用户同步的身份 ID。取值：
当PrincipalType取值为Group时，该值为CIC用户组 ID（g-********）。
当PrincipalType取值为User时，该值为CIC用户 ID（u-********）。
 * @method void setPrincipalId(string $PrincipalId) 设置CAM 用户同步的身份 ID。取值：
当PrincipalType取值为Group时，该值为CIC用户组 ID（g-********）。
当PrincipalType取值为User时，该值为CIC用户 ID（u-********）。
 * @method string getPrincipalName() 获取CAM 用户同步的身份名称。取值：
当PrincipalType取值为Group时，该值为CIC用户组名称。
当PrincipalType取值为User时，该值为CIC用户名称。
 * @method void setPrincipalName(string $PrincipalName) 设置CAM 用户同步的身份名称。取值：
当PrincipalType取值为Group时，该值为CIC用户组名称。
当PrincipalType取值为User时，该值为CIC用户名称。
 * @method string getPrincipalType() 获取CAM 用户同步的身份类型。取值：

User：表示该 CAM 用户同步的身份是CIC用户。
Group：表示该 CAM 用户同步的身份是CIC用户组。
 * @method void setPrincipalType(string $PrincipalType) 设置CAM 用户同步的身份类型。取值：

User：表示该 CAM 用户同步的身份是CIC用户。
Group：表示该 CAM 用户同步的身份是CIC用户组。
 * @method integer getTargetUin() 获取集团账号目标账号的UIN。
 * @method void setTargetUin(integer $TargetUin) 设置集团账号目标账号的UIN。
 * @method string getTargetName() 获取集团账号目标账号的名称。
 * @method void setTargetName(string $TargetName) 设置集团账号目标账号的名称。
 * @method string getDuplicationStrategy() 获取冲突策略。当CIC 用户同步到 CAM 时，如果 CAM 中存在同名用户时的处理策略。取值： KeepBoth：两者都保留。当CIC 用户被同步到 CAM 时，如果 CAM 已经存在同名用户，则对CIC 用户的用户名添加后缀_cic后尝试创建该用户名的 CAM 用户。 TakeOver：替换。当CIC 用户被同步到 CAM 时，如果 CAM 已经存在同名用户，则直接将已经存在的 CAM 用户替换为CIC 同步用户。
 * @method void setDuplicationStrategy(string $DuplicationStrategy) 设置冲突策略。当CIC 用户同步到 CAM 时，如果 CAM 中存在同名用户时的处理策略。取值： KeepBoth：两者都保留。当CIC 用户被同步到 CAM 时，如果 CAM 已经存在同名用户，则对CIC 用户的用户名添加后缀_cic后尝试创建该用户名的 CAM 用户。 TakeOver：替换。当CIC 用户被同步到 CAM 时，如果 CAM 已经存在同名用户，则直接将已经存在的 CAM 用户替换为CIC 同步用户。
 * @method string getDeletionStrategy() 获取删除策略。删除 CAM 用户同步时，对已同步的 CAM 用户的处理策略。取值： Delete：删除。删除 CAM 用户同步时，会删除从CIC 已经同步到 CAM 中的 CAM 用户。 Keep：保留。删除 RAM 用户同步时，会保留从CIC 已经同步到 CAM 中的 CAM 用户。
 * @method void setDeletionStrategy(string $DeletionStrategy) 设置删除策略。删除 CAM 用户同步时，对已同步的 CAM 用户的处理策略。取值： Delete：删除。删除 CAM 用户同步时，会删除从CIC 已经同步到 CAM 中的 CAM 用户。 Keep：保留。删除 RAM 用户同步时，会保留从CIC 已经同步到 CAM 中的 CAM 用户。
 * @method string getCreateTime() 获取创建时间。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
 * @method string getUpdateTime() 获取更新时间。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。
 * @method string getTargetType() 获取同步的集团账号目标账号的类型，ManagerUin管理账号;MemberUin成员账号
 * @method void setTargetType(string $TargetType) 设置同步的集团账号目标账号的类型，ManagerUin管理账号;MemberUin成员账号
 */
class UserProvisioning extends AbstractModel
{
    /**
     * @var string CAM 用户同步的状态。取值：

Enabled：CAM 用户同步已启用。
Disabled：CAM 用户同步未启用。
     */
    public $UserProvisioningId;

    /**
     * @var string 描述。
     */
    public $Description;

    /**
     * @var string CAM 用户同步的状态。取值：
Enabled：CAM 用户同步已启用。
Disabled：CAM 用户同步未启用。
     */
    public $Status;

    /**
     * @var string CAM 用户同步的身份 ID。取值：
当PrincipalType取值为Group时，该值为CIC用户组 ID（g-********）。
当PrincipalType取值为User时，该值为CIC用户 ID（u-********）。
     */
    public $PrincipalId;

    /**
     * @var string CAM 用户同步的身份名称。取值：
当PrincipalType取值为Group时，该值为CIC用户组名称。
当PrincipalType取值为User时，该值为CIC用户名称。
     */
    public $PrincipalName;

    /**
     * @var string CAM 用户同步的身份类型。取值：

User：表示该 CAM 用户同步的身份是CIC用户。
Group：表示该 CAM 用户同步的身份是CIC用户组。
     */
    public $PrincipalType;

    /**
     * @var integer 集团账号目标账号的UIN。
     */
    public $TargetUin;

    /**
     * @var string 集团账号目标账号的名称。
     */
    public $TargetName;

    /**
     * @var string 冲突策略。当CIC 用户同步到 CAM 时，如果 CAM 中存在同名用户时的处理策略。取值： KeepBoth：两者都保留。当CIC 用户被同步到 CAM 时，如果 CAM 已经存在同名用户，则对CIC 用户的用户名添加后缀_cic后尝试创建该用户名的 CAM 用户。 TakeOver：替换。当CIC 用户被同步到 CAM 时，如果 CAM 已经存在同名用户，则直接将已经存在的 CAM 用户替换为CIC 同步用户。
     */
    public $DuplicationStrategy;

    /**
     * @var string 删除策略。删除 CAM 用户同步时，对已同步的 CAM 用户的处理策略。取值： Delete：删除。删除 CAM 用户同步时，会删除从CIC 已经同步到 CAM 中的 CAM 用户。 Keep：保留。删除 RAM 用户同步时，会保留从CIC 已经同步到 CAM 中的 CAM 用户。
     */
    public $DeletionStrategy;

    /**
     * @var string 创建时间。
     */
    public $CreateTime;

    /**
     * @var string 更新时间。
     */
    public $UpdateTime;

    /**
     * @var string 同步的集团账号目标账号的类型，ManagerUin管理账号;MemberUin成员账号
     */
    public $TargetType;

    /**
     * @param string $UserProvisioningId CAM 用户同步的状态。取值：

Enabled：CAM 用户同步已启用。
Disabled：CAM 用户同步未启用。
     * @param string $Description 描述。
     * @param string $Status CAM 用户同步的状态。取值：
Enabled：CAM 用户同步已启用。
Disabled：CAM 用户同步未启用。
     * @param string $PrincipalId CAM 用户同步的身份 ID。取值：
当PrincipalType取值为Group时，该值为CIC用户组 ID（g-********）。
当PrincipalType取值为User时，该值为CIC用户 ID（u-********）。
     * @param string $PrincipalName CAM 用户同步的身份名称。取值：
当PrincipalType取值为Group时，该值为CIC用户组名称。
当PrincipalType取值为User时，该值为CIC用户名称。
     * @param string $PrincipalType CAM 用户同步的身份类型。取值：

User：表示该 CAM 用户同步的身份是CIC用户。
Group：表示该 CAM 用户同步的身份是CIC用户组。
     * @param integer $TargetUin 集团账号目标账号的UIN。
     * @param string $TargetName 集团账号目标账号的名称。
     * @param string $DuplicationStrategy 冲突策略。当CIC 用户同步到 CAM 时，如果 CAM 中存在同名用户时的处理策略。取值： KeepBoth：两者都保留。当CIC 用户被同步到 CAM 时，如果 CAM 已经存在同名用户，则对CIC 用户的用户名添加后缀_cic后尝试创建该用户名的 CAM 用户。 TakeOver：替换。当CIC 用户被同步到 CAM 时，如果 CAM 已经存在同名用户，则直接将已经存在的 CAM 用户替换为CIC 同步用户。
     * @param string $DeletionStrategy 删除策略。删除 CAM 用户同步时，对已同步的 CAM 用户的处理策略。取值： Delete：删除。删除 CAM 用户同步时，会删除从CIC 已经同步到 CAM 中的 CAM 用户。 Keep：保留。删除 RAM 用户同步时，会保留从CIC 已经同步到 CAM 中的 CAM 用户。
     * @param string $CreateTime 创建时间。
     * @param string $UpdateTime 更新时间。
     * @param string $TargetType 同步的集团账号目标账号的类型，ManagerUin管理账号;MemberUin成员账号
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
        if (array_key_exists("UserProvisioningId",$param) and $param["UserProvisioningId"] !== null) {
            $this->UserProvisioningId = $param["UserProvisioningId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PrincipalId",$param) and $param["PrincipalId"] !== null) {
            $this->PrincipalId = $param["PrincipalId"];
        }

        if (array_key_exists("PrincipalName",$param) and $param["PrincipalName"] !== null) {
            $this->PrincipalName = $param["PrincipalName"];
        }

        if (array_key_exists("PrincipalType",$param) and $param["PrincipalType"] !== null) {
            $this->PrincipalType = $param["PrincipalType"];
        }

        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }

        if (array_key_exists("DuplicationStrategy",$param) and $param["DuplicationStrategy"] !== null) {
            $this->DuplicationStrategy = $param["DuplicationStrategy"];
        }

        if (array_key_exists("DeletionStrategy",$param) and $param["DeletionStrategy"] !== null) {
            $this->DeletionStrategy = $param["DeletionStrategy"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }
    }
}
