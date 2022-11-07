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
 * 离线任务统计指标明细
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getInstanceId() 获取任务实例ID
 * @method void setInstanceId(string $InstanceId) 设置任务实例ID
 * @method string getCurRunDate() 获取实例数据运行时间
 * @method void setCurRunDate(string $CurRunDate) 设置实例数据运行时间
 * @method string getIssueDate() 获取实例实际下发时间
 * @method void setIssueDate(string $IssueDate) 设置实例实际下发时间
 * @method string getTaskState() 获取任务状态码。1 正在执行,2 成功,3 失败,4 等待终止,5 正在终止,6 已终止,7 终止失败,9 等待执行。
 * @method void setTaskState(string $TaskState) 设置任务状态码。1 正在执行,2 成功,3 失败,4 等待终止,5 正在终止,6 已终止,7 终止失败,9 等待执行。
 * @method integer getTotalReadRecords() 获取总读取条数
 * @method void setTotalReadRecords(integer $TotalReadRecords) 设置总读取条数
 * @method integer getTotalReadBytes() 获取总读取字节数
 * @method void setTotalReadBytes(integer $TotalReadBytes) 设置总读取字节数
 * @method integer getTotalWriteRecords() 获取总写入条数
 * @method void setTotalWriteRecords(integer $TotalWriteRecords) 设置总写入条数
 * @method integer getTotalWriteBytes() 获取总写入字节数
 * @method void setTotalWriteBytes(integer $TotalWriteBytes) 设置总写入字节数
 * @method integer getRecordSpeed() 获取写入速度（条/秒）
 * @method void setRecordSpeed(integer $RecordSpeed) 设置写入速度（条/秒）
 * @method float getByteSpeed() 获取吞吐（Byte/秒）
 * @method void setByteSpeed(float $ByteSpeed) 设置吞吐（Byte/秒）
 * @method integer getTotalErrorRecords() 获取脏数据条数
 * @method void setTotalErrorRecords(integer $TotalErrorRecords) 设置脏数据条数
 */
class TaskReportDetail extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 任务实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例数据运行时间
     */
    public $CurRunDate;

    /**
     * @var string 实例实际下发时间
     */
    public $IssueDate;

    /**
     * @var string 任务状态码。1 正在执行,2 成功,3 失败,4 等待终止,5 正在终止,6 已终止,7 终止失败,9 等待执行。
     */
    public $TaskState;

    /**
     * @var integer 总读取条数
     */
    public $TotalReadRecords;

    /**
     * @var integer 总读取字节数
     */
    public $TotalReadBytes;

    /**
     * @var integer 总写入条数
     */
    public $TotalWriteRecords;

    /**
     * @var integer 总写入字节数
     */
    public $TotalWriteBytes;

    /**
     * @var integer 写入速度（条/秒）
     */
    public $RecordSpeed;

    /**
     * @var float 吞吐（Byte/秒）
     */
    public $ByteSpeed;

    /**
     * @var integer 脏数据条数
     */
    public $TotalErrorRecords;

    /**
     * @param string $TaskId 任务ID
     * @param string $InstanceId 任务实例ID
     * @param string $CurRunDate 实例数据运行时间
     * @param string $IssueDate 实例实际下发时间
     * @param string $TaskState 任务状态码。1 正在执行,2 成功,3 失败,4 等待终止,5 正在终止,6 已终止,7 终止失败,9 等待执行。
     * @param integer $TotalReadRecords 总读取条数
     * @param integer $TotalReadBytes 总读取字节数
     * @param integer $TotalWriteRecords 总写入条数
     * @param integer $TotalWriteBytes 总写入字节数
     * @param integer $RecordSpeed 写入速度（条/秒）
     * @param float $ByteSpeed 吞吐（Byte/秒）
     * @param integer $TotalErrorRecords 脏数据条数
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("IssueDate",$param) and $param["IssueDate"] !== null) {
            $this->IssueDate = $param["IssueDate"];
        }

        if (array_key_exists("TaskState",$param) and $param["TaskState"] !== null) {
            $this->TaskState = $param["TaskState"];
        }

        if (array_key_exists("TotalReadRecords",$param) and $param["TotalReadRecords"] !== null) {
            $this->TotalReadRecords = $param["TotalReadRecords"];
        }

        if (array_key_exists("TotalReadBytes",$param) and $param["TotalReadBytes"] !== null) {
            $this->TotalReadBytes = $param["TotalReadBytes"];
        }

        if (array_key_exists("TotalWriteRecords",$param) and $param["TotalWriteRecords"] !== null) {
            $this->TotalWriteRecords = $param["TotalWriteRecords"];
        }

        if (array_key_exists("TotalWriteBytes",$param) and $param["TotalWriteBytes"] !== null) {
            $this->TotalWriteBytes = $param["TotalWriteBytes"];
        }

        if (array_key_exists("RecordSpeed",$param) and $param["RecordSpeed"] !== null) {
            $this->RecordSpeed = $param["RecordSpeed"];
        }

        if (array_key_exists("ByteSpeed",$param) and $param["ByteSpeed"] !== null) {
            $this->ByteSpeed = $param["ByteSpeed"];
        }

        if (array_key_exists("TotalErrorRecords",$param) and $param["TotalErrorRecords"] !== null) {
            $this->TotalErrorRecords = $param["TotalErrorRecords"];
        }
    }
}
