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
 * @method string getStartTime() 获取开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRecordId() 获取试运行记录id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordId(integer $RecordId) 设置试运行记录id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getJobId() 获取开发侧提交的jobid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(integer $JobId) 设置开发侧提交的jobid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionJobId() 获取执行平台jobid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionJobId(string $ExecutionJobId) 设置执行平台jobid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecordName() 获取试运行记录名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordName(string $RecordName) 设置试运行记录名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScriptContent() 获取脚本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptContent(string $ScriptContent) 设置脚本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeCost() 获取耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeCost(integer $TimeCost) 设置耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserUin() 获取用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserUin(string $UserUin) 设置用户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerUin() 获取主账户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUin(string $OwnerUin) 设置主账户uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubRecordList() 获取子记录信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubRecordList(array $SubRecordList) 设置子记录信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取结果或日志地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置结果或日志地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBucketName() 获取结果或日志桶名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucketName(string $BucketName) 设置结果或日志桶名
注意：此字段可能返回 null，表示取不到有效值。
 */
class TestRunningRecord extends AbstractModel
{
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
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 试运行记录id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordId;

    /**
     * @var integer 开发侧提交的jobid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @var string 执行平台jobid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionJobId;

    /**
     * @var string 试运行记录名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordName;

    /**
     * @var string 脚本内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptContent;

    /**
     * @var string 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 耗时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeCost;

    /**
     * @var string 用户uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserUin;

    /**
     * @var string 主账户uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUin;

    /**
     * @var array 子记录信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubRecordList;

    /**
     * @var string 结果或日志地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 结果或日志桶名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BucketName;

    /**
     * @param string $StartTime 开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RecordId 试运行记录id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $JobId 开发侧提交的jobid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionJobId 执行平台jobid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecordName 试运行记录名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScriptContent 脚本内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TimeCost 耗时
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserUin 用户uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerUin 主账户uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubRecordList 子记录信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 结果或日志地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BucketName 结果或日志桶名
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
    }
}
