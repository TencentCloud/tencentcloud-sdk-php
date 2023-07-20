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
 * 试运行记录
 *
 * @method string getTaskSource() 获取任务来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskSource(string $TaskSource) 设置任务来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobId() 获取编排空间jobId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(string $JobId) 设置编排空间jobId
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRecordId() 获取任务提交记录Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordId(integer $RecordId) 设置任务提交记录Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSonRecordId() 获取子任务记录id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSonRecordId(integer $SonRecordId) 设置子任务记录id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取任务实例Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置任务实例Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取编排空间为任务id, 开发空间为脚本id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置编排空间为任务id, 开发空间为脚本id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemotePath() 获取脚本cos地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemotePath(string $RemotePath) 设置脚本cos地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScriptContent() 获取试运行内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptContent(string $ScriptContent) 设置试运行内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取任务提交时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置任务提交时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取任务启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置任务启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDuration() 获取运行时长(秒)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(string $Duration) 设置运行时长(秒)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取试运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置试运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取编排空间为任务名称，开发空间为脚本名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置编排空间为任务名称，开发空间为脚本名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubmitUserName() 获取试运行提交人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmitUserName(string $SubmitUserName) 设置试运行提交人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubmitUserId() 获取试运行提交人userId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmitUserId(string $SubmitUserId) 设置试运行提交人userId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskType() 获取任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(string $TaskType) 设置任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHasResultSet() 获取是否含有结果集
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasResultSet(boolean $HasResultSet) 设置是否含有结果集
注意：此字段可能返回 null，表示取不到有效值。
 */
class DrInstanceOpsDto extends AbstractModel
{
    /**
     * @var string 任务来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskSource;

    /**
     * @var string 编排空间jobId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @var integer 任务提交记录Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordId;

    /**
     * @var integer 子任务记录id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SonRecordId;

    /**
     * @var string 任务实例Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 编排空间为任务id, 开发空间为脚本id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 脚本cos地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemotePath;

    /**
     * @var string 试运行内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptContent;

    /**
     * @var string 任务提交时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 任务启动时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 运行时长(秒)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var string 试运行状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 编排空间为任务名称，开发空间为脚本名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string 试运行提交人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubmitUserName;

    /**
     * @var string 试运行提交人userId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubmitUserId;

    /**
     * @var string 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @var boolean 是否含有结果集
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasResultSet;

    /**
     * @param string $TaskSource 任务来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobId 编排空间jobId
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RecordId 任务提交记录Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SonRecordId 子任务记录id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 任务实例Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 编排空间为任务id, 开发空间为脚本id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RemotePath 脚本cos地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScriptContent 试运行内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 任务提交时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 任务启动时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Duration 运行时长(秒)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 试运行状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 编排空间为任务名称，开发空间为脚本名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubmitUserName 试运行提交人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubmitUserId 试运行提交人userId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskType 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HasResultSet 是否含有结果集
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
        if (array_key_exists("TaskSource",$param) and $param["TaskSource"] !== null) {
            $this->TaskSource = $param["TaskSource"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("SonRecordId",$param) and $param["SonRecordId"] !== null) {
            $this->SonRecordId = $param["SonRecordId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RemotePath",$param) and $param["RemotePath"] !== null) {
            $this->RemotePath = $param["RemotePath"];
        }

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("SubmitUserName",$param) and $param["SubmitUserName"] !== null) {
            $this->SubmitUserName = $param["SubmitUserName"];
        }

        if (array_key_exists("SubmitUserId",$param) and $param["SubmitUserId"] !== null) {
            $this->SubmitUserId = $param["SubmitUserId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("HasResultSet",$param) and $param["HasResultSet"] !== null) {
            $this->HasResultSet = $param["HasResultSet"];
        }
    }
}
