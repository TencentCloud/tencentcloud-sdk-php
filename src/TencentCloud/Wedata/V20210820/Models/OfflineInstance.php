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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 离线实例
 *
 * @method string getCreateUin() 获取创建账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateUin(string $CreateUin) 设置创建账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperatorUin() 获取操作账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorUin(string $OperatorUin) 设置操作账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取主账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置主账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWorkspaceId() 获取项目Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkspaceId(string $WorkspaceId) 设置项目Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取任务Id
 * @method void setTaskId(string $TaskId) 设置任务Id
 * @method string getCurRunDate() 获取数据时间
 * @method void setCurRunDate(string $CurRunDate) 设置数据时间
 * @method string getIssueId() 获取下发时间
 * @method void setIssueId(string $IssueId) 设置下发时间
 * @method string getInlongTaskId() 获取资源组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInlongTaskId(string $InlongTaskId) 设置资源组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceGroup() 获取资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceGroup(string $ResourceGroup) 设置资源组
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskRunType() 获取实例类型
 * @method void setTaskRunType(integer $TaskRunType) 设置实例类型
 * @method string getState() 获取实例状态
 * @method void setState(string $State) 设置实例状态
 * @method string getStartTime() 获取开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取最后更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置最后更新时间
 * @method string getInstanceKey() 获取唯一key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceKey(string $InstanceKey) 设置唯一key
注意：此字段可能返回 null，表示取不到有效值。
 */
class OfflineInstance extends AbstractModel
{
    /**
     * @var string 创建账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateUin;

    /**
     * @var string 操作账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorUin;

    /**
     * @var string 主账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var string 账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 项目Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkspaceId;

    /**
     * @var string 任务Id
     */
    public $TaskId;

    /**
     * @var string 数据时间
     */
    public $CurRunDate;

    /**
     * @var string 下发时间
     */
    public $IssueId;

    /**
     * @var string 资源组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InlongTaskId;

    /**
     * @var string 资源组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceGroup;

    /**
     * @var integer 实例类型
     */
    public $TaskRunType;

    /**
     * @var string 实例状态
     */
    public $State;

    /**
     * @var string 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 最后更新时间
     */
    public $UpdateTime;

    /**
     * @var string 唯一key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceKey;

    /**
     * @param string $CreateUin 创建账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperatorUin 操作账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin 主账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId 账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WorkspaceId 项目Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 任务Id
     * @param string $CurRunDate 数据时间
     * @param string $IssueId 下发时间
     * @param string $InlongTaskId 资源组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceGroup 资源组
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskRunType 实例类型
     * @param string $State 实例状态
     * @param string $StartTime 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 最后更新时间
     * @param string $InstanceKey 唯一key
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
        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("OperatorUin",$param) and $param["OperatorUin"] !== null) {
            $this->OperatorUin = $param["OperatorUin"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("IssueId",$param) and $param["IssueId"] !== null) {
            $this->IssueId = $param["IssueId"];
        }

        if (array_key_exists("InlongTaskId",$param) and $param["InlongTaskId"] !== null) {
            $this->InlongTaskId = $param["InlongTaskId"];
        }

        if (array_key_exists("ResourceGroup",$param) and $param["ResourceGroup"] !== null) {
            $this->ResourceGroup = $param["ResourceGroup"];
        }

        if (array_key_exists("TaskRunType",$param) and $param["TaskRunType"] !== null) {
            $this->TaskRunType = $param["TaskRunType"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }
    }
}
