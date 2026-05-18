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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 编排空间试运行记录
 *
 * @method string getStartTime() 获取<p>开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置<p>开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取<p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRecordId() 获取<p>试运行记录id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordId(integer $RecordId) 设置<p>试运行记录id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getJobId() 获取<p>开发侧提交的jobid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(integer $JobId) 设置<p>开发侧提交的jobid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionJobId() 获取<p>执行平台jobid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionJobId(string $ExecutionJobId) 设置<p>执行平台jobid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecordName() 获取<p>试运行记录名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordName(string $RecordName) 设置<p>试运行记录名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScriptContent() 获取<p>脚本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptContent(string $ScriptContent) 设置<p>脚本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeCost() 获取<p>耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeCost(integer $TimeCost) 设置<p>耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserUin() 获取<p>用户uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserUin(string $UserUin) 设置<p>用户uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取<p>主账户uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置<p>主账户uin</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubRecordList() 获取<p>子记录信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubRecordList(array $SubRecordList) 设置<p>子记录信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取<p>结果或日志地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置<p>结果或日志地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBucketName() 获取<p>结果或日志桶名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucketName(string $BucketName) 设置<p>结果或日志桶名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMessage() 获取<p>错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(string $ErrorMessage) 设置<p>错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getScriptContentTruncated() 获取<p>脚本内容是否被截断</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptContentTruncated(boolean $ScriptContentTruncated) 设置<p>脚本内容是否被截断</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TestRunningRecord extends AbstractModel
{
    /**
     * @var string <p>开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string <p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer <p>试运行记录id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordId;

    /**
     * @var integer <p>开发侧提交的jobid</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @var string <p>执行平台jobid</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionJobId;

    /**
     * @var string <p>试运行记录名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordName;

    /**
     * @var string <p>脚本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptContent;

    /**
     * @var string <p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer <p>耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeCost;

    /**
     * @var string <p>用户uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserUin;

    /**
     * @var string <p>主账户uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var array <p>子记录信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubRecordList;

    /**
     * @var string <p>结果或日志地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string <p>结果或日志桶名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BucketName;

    /**
     * @var string <p>错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var boolean <p>脚本内容是否被截断</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptContentTruncated;

    /**
     * @param string $StartTime <p>开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime <p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RecordId <p>试运行记录id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $JobId <p>开发侧提交的jobid</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionJobId <p>执行平台jobid</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecordName <p>试运行记录名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScriptContent <p>脚本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TimeCost <p>耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserUin <p>用户uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin <p>主账户uin</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubRecordList <p>子记录信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region <p>结果或日志地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BucketName <p>结果或日志桶名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMessage <p>错误信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ScriptContentTruncated <p>脚本内容是否被截断</p>
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("ExecutionJobId",$param) and $param["ExecutionJobId"] !== null) {
            $this->ExecutionJobId = $param["ExecutionJobId"];
        }

        if (array_key_exists("RecordName",$param) and $param["RecordName"] !== null) {
            $this->RecordName = $param["RecordName"];
        }

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TimeCost",$param) and $param["TimeCost"] !== null) {
            $this->TimeCost = $param["TimeCost"];
        }

        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("SubRecordList",$param) and $param["SubRecordList"] !== null) {
            $this->SubRecordList = [];
            foreach ($param["SubRecordList"] as $key => $value){
                $obj = new TestRunningSubRecord();
                $obj->deserialize($value);
                array_push($this->SubRecordList, $obj);
            }
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("ScriptContentTruncated",$param) and $param["ScriptContentTruncated"] !== null) {
            $this->ScriptContentTruncated = $param["ScriptContentTruncated"];
        }
    }
}
