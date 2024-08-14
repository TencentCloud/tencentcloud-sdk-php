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
 * 用户同步任务状态信息。
 *
 * @method string getTaskId() 获取任务ID。
 * @method void setTaskId(string $TaskId) 设置任务ID。
 * @method integer getTargetUin() 获取授权的集团账号目标账号的UIN
 * @method void setTargetUin(integer $TargetUin) 设置授权的集团账号目标账号的UIN
 * @method string getTargetType() 获取同步的集团账号目标账号的类型，ManagerUin管理账号;MemberUin成员账号
 * @method void setTargetType(string $TargetType) 设置同步的集团账号目标账号的类型，ManagerUin管理账号;MemberUin成员账号
 * @method string getTaskType() 获取任务类型。StartProvisioning：用户同步，DeleteProvisioning：删除用户同步
 * @method void setTaskType(string $TaskType) 设置任务类型。StartProvisioning：用户同步，DeleteProvisioning：删除用户同步
 * @method string getTaskStatus() 获取任务状态：InProgress: 进行中，Failed: 失败 3:Success: 成功
 * @method void setTaskStatus(string $TaskStatus) 设置任务状态：InProgress: 进行中，Failed: 失败 3:Success: 成功
 * @method string getUserProvisioningId() 获取用户同步ID。
 * @method void setUserProvisioningId(string $UserProvisioningId) 设置用户同步ID。
 * @method string getPrincipalId() 获取 CAM 用户同步的身份 ID。取值： 当PrincipalType取值为Group时，该值为CIC 用户组 ID（g-********）。 当PrincipalType取值为User时，该值为CIC 用户 ID（u-********）。
 * @method void setPrincipalId(string $PrincipalId) 设置 CAM 用户同步的身份 ID。取值： 当PrincipalType取值为Group时，该值为CIC 用户组 ID（g-********）。 当PrincipalType取值为User时，该值为CIC 用户 ID（u-********）。
 * @method string getPrincipalType() 获取CAM 用户同步的身份类型。取值： User：表示该 CAM 用户同步的身份是CIC 用户。 Group：表示该 CAM 用户同步的身份是CIC 用户组。
 * @method void setPrincipalType(string $PrincipalType) 设置CAM 用户同步的身份类型。取值： User：表示该 CAM 用户同步的身份是CIC 用户。 Group：表示该 CAM 用户同步的身份是CIC 用户组。
 * @method string getPrincipalName() 获取用户或者用户组名称。
 * @method void setPrincipalName(string $PrincipalName) 设置用户或者用户组名称。
 * @method string getDuplicationStrategy() 获取冲突策略。KeepBoth:两者都保留;TakeOver:替换
 * @method void setDuplicationStrategy(string $DuplicationStrategy) 设置冲突策略。KeepBoth:两者都保留;TakeOver:替换
 * @method string getDeletionStrategy() 获取删除策略。Delete:删除;Keep:保留
 * @method void setDeletionStrategy(string $DeletionStrategy) 设置删除策略。Delete:删除;Keep:保留
 */
class UserProvisioningsTask extends AbstractModel
{
    /**
     * @var string 任务ID。
     */
    public $TaskId;

    /**
     * @var integer 授权的集团账号目标账号的UIN
     */
    public $TargetUin;

    /**
     * @var string 同步的集团账号目标账号的类型，ManagerUin管理账号;MemberUin成员账号
     */
    public $TargetType;

    /**
     * @var string 任务类型。StartProvisioning：用户同步，DeleteProvisioning：删除用户同步
     */
    public $TaskType;

    /**
     * @var string 任务状态：InProgress: 进行中，Failed: 失败 3:Success: 成功
     */
    public $TaskStatus;

    /**
     * @var string 用户同步ID。
     */
    public $UserProvisioningId;

    /**
     * @var string  CAM 用户同步的身份 ID。取值： 当PrincipalType取值为Group时，该值为CIC 用户组 ID（g-********）。 当PrincipalType取值为User时，该值为CIC 用户 ID（u-********）。
     */
    public $PrincipalId;

    /**
     * @var string CAM 用户同步的身份类型。取值： User：表示该 CAM 用户同步的身份是CIC 用户。 Group：表示该 CAM 用户同步的身份是CIC 用户组。
     */
    public $PrincipalType;

    /**
     * @var string 用户或者用户组名称。
     */
    public $PrincipalName;

    /**
     * @var string 冲突策略。KeepBoth:两者都保留;TakeOver:替换
     */
    public $DuplicationStrategy;

    /**
     * @var string 删除策略。Delete:删除;Keep:保留
     */
    public $DeletionStrategy;

    /**
     * @param string $TaskId 任务ID。
     * @param integer $TargetUin 授权的集团账号目标账号的UIN
     * @param string $TargetType 同步的集团账号目标账号的类型，ManagerUin管理账号;MemberUin成员账号
     * @param string $TaskType 任务类型。StartProvisioning：用户同步，DeleteProvisioning：删除用户同步
     * @param string $TaskStatus 任务状态：InProgress: 进行中，Failed: 失败 3:Success: 成功
     * @param string $UserProvisioningId 用户同步ID。
     * @param string $PrincipalId  CAM 用户同步的身份 ID。取值： 当PrincipalType取值为Group时，该值为CIC 用户组 ID（g-********）。 当PrincipalType取值为User时，该值为CIC 用户 ID（u-********）。
     * @param string $PrincipalType CAM 用户同步的身份类型。取值： User：表示该 CAM 用户同步的身份是CIC 用户。 Group：表示该 CAM 用户同步的身份是CIC 用户组。
     * @param string $PrincipalName 用户或者用户组名称。
     * @param string $DuplicationStrategy 冲突策略。KeepBoth:两者都保留;TakeOver:替换
     * @param string $DeletionStrategy 删除策略。Delete:删除;Keep:保留
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("UserProvisioningId",$param) and $param["UserProvisioningId"] !== null) {
            $this->UserProvisioningId = $param["UserProvisioningId"];
        }

        if (array_key_exists("PrincipalId",$param) and $param["PrincipalId"] !== null) {
            $this->PrincipalId = $param["PrincipalId"];
        }

        if (array_key_exists("PrincipalType",$param) and $param["PrincipalType"] !== null) {
            $this->PrincipalType = $param["PrincipalType"];
        }

        if (array_key_exists("PrincipalName",$param) and $param["PrincipalName"] !== null) {
            $this->PrincipalName = $param["PrincipalName"];
        }

        if (array_key_exists("DuplicationStrategy",$param) and $param["DuplicationStrategy"] !== null) {
            $this->DuplicationStrategy = $param["DuplicationStrategy"];
        }

        if (array_key_exists("DeletionStrategy",$param) and $param["DeletionStrategy"] !== null) {
            $this->DeletionStrategy = $param["DeletionStrategy"];
        }
    }
}
