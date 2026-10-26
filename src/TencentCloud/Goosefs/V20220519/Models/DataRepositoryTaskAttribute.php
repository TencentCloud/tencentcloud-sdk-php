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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据流通任务属性
 *
 * @method string getTaskType() 获取<p>数据流通任务类型, FS_TO_COS(文件系统到COS Bucket),或者Bucket到文件系统(COS_TO_FS)</p>
 * @method void setTaskType(string $TaskType) 设置<p>数据流通任务类型, FS_TO_COS(文件系统到COS Bucket),或者Bucket到文件系统(COS_TO_FS)</p>
 * @method string getBucket() 获取<p>bucket名</p>
 * @method void setBucket(string $Bucket) 设置<p>bucket名</p>
 * @method string getTaskPath() 获取<p>bucket路径</p>
 * @method void setTaskPath(string $TaskPath) 设置<p>bucket路径</p>
 * @method integer getTotalCapacity() 获取<p>总的容量(单位Byte)</p>
 * @method void setTotalCapacity(integer $TotalCapacity) 设置<p>总的容量(单位Byte)</p>
 * @method integer getFinishedCapacity() 获取<p>已完成的数据量(单位Byte)</p>
 * @method void setFinishedCapacity(integer $FinishedCapacity) 设置<p>已完成的数据量(单位Byte)</p>
 * @method string getTaskCreateTime() 获取<p>任务创建时间</p>
 * @method void setTaskCreateTime(string $TaskCreateTime) 设置<p>任务创建时间</p>
 * @method string getTaskStartTime() 获取<p>任务开始执行时间</p>
 * @method void setTaskStartTime(string $TaskStartTime) 设置<p>任务开始执行时间</p>
 * @method string getTaskEndTime() 获取<p>任务结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskEndTime(string $TaskEndTime) 设置<p>任务结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskStatus() 获取<p>INIT(任务初始化中) RUNNING(任务执行中) SUCCESS(任务已完成) FAIL(任务失败)</p>
 * @method void setTaskStatus(string $TaskStatus) 设置<p>INIT(任务初始化中) RUNNING(任务执行中) SUCCESS(任务已完成) FAIL(任务失败)</p>
 * @method string getTaskId() 获取<p>任务ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务ID</p>
 * @method string getTaskName() 获取<p>任务名</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名</p>
 * @method string getTaskFailMsg() 获取<p>任务失败原因</p>
 * @method void setTaskFailMsg(string $TaskFailMsg) 设置<p>任务失败原因</p>
 * @method integer getTotalFileNumber() 获取<p>总共的文件个数</p>
 * @method void setTotalFileNumber(integer $TotalFileNumber) 设置<p>总共的文件个数</p>
 * @method integer getFinishedFileNumber() 获取<p>已完成的文件个数</p>
 * @method void setFinishedFileNumber(integer $FinishedFileNumber) 设置<p>已完成的文件个数</p>
 * @method string getTextLocation() 获取<p>列表地址</p>
 * @method void setTextLocation(string $TextLocation) 设置<p>列表地址</p>
 * @method string getRepositoryType() 获取<p>执行器类型</p>
 * @method void setRepositoryType(string $RepositoryType) 设置<p>执行器类型</p>
 * @method boolean getEnableDataFlowSubPath() 获取<p>是否自定义路径</p>
 * @method void setEnableDataFlowSubPath(boolean $EnableDataFlowSubPath) 设置<p>是否自定义路径</p>
 * @method string getDataFlowSubPath() 获取<p>自定义路径</p>
 * @method void setDataFlowSubPath(string $DataFlowSubPath) 设置<p>自定义路径</p>
 * @method boolean getEnableCustomDestPath() 获取<p>是否支持自定义目的路径（沉降表示桶前缀，预热表示本地路径）</p>
 * @method void setEnableCustomDestPath(boolean $EnableCustomDestPath) 设置<p>是否支持自定义目的路径（沉降表示桶前缀，预热表示本地路径）</p>
 * @method string getCustomDestPath() 获取<p>自定义目的路径（沉降表示桶前缀，预热表示本地路径）</p>
 * @method void setCustomDestPath(string $CustomDestPath) 设置<p>自定义目的路径（沉降表示桶前缀，预热表示本地路径）</p>
 * @method boolean getIsTaskPathAbsolute() 获取<p>任务路径是否表示绝对路径（暂时仅支持沉降使用）</p>
 * @method void setIsTaskPathAbsolute(boolean $IsTaskPathAbsolute) 设置<p>任务路径是否表示绝对路径（暂时仅支持沉降使用）</p>
 * @method string getOutputBucket() 获取<p>任务内容输出桶</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputBucket(string $OutputBucket) 设置<p>任务内容输出桶</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutputPrefix() 获取<p>任务内容输出桶前缀</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputPrefix(string $OutputPrefix) 设置<p>任务内容输出桶前缀</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableCustomSrcPath() 获取<p>是否支持自定义数据源路径(暂时仅支持清单过滤使用)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableCustomSrcPath(boolean $EnableCustomSrcPath) 设置<p>是否支持自定义数据源路径(暂时仅支持清单过滤使用)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomSrcPath() 获取<p>自定义数据源路径(暂时仅支持清单过滤使用)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomSrcPath(string $CustomSrcPath) 设置<p>自定义数据源路径(暂时仅支持清单过滤使用)</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataRepositoryTaskAttribute extends AbstractModel
{
    /**
     * @var string <p>数据流通任务类型, FS_TO_COS(文件系统到COS Bucket),或者Bucket到文件系统(COS_TO_FS)</p>
     */
    public $TaskType;

    /**
     * @var string <p>bucket名</p>
     */
    public $Bucket;

    /**
     * @var string <p>bucket路径</p>
     */
    public $TaskPath;

    /**
     * @var integer <p>总的容量(单位Byte)</p>
     */
    public $TotalCapacity;

    /**
     * @var integer <p>已完成的数据量(单位Byte)</p>
     */
    public $FinishedCapacity;

    /**
     * @var string <p>任务创建时间</p>
     */
    public $TaskCreateTime;

    /**
     * @var string <p>任务开始执行时间</p>
     */
    public $TaskStartTime;

    /**
     * @var string <p>任务结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskEndTime;

    /**
     * @var string <p>INIT(任务初始化中) RUNNING(任务执行中) SUCCESS(任务已完成) FAIL(任务失败)</p>
     */
    public $TaskStatus;

    /**
     * @var string <p>任务ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务名</p>
     */
    public $TaskName;

    /**
     * @var string <p>任务失败原因</p>
     */
    public $TaskFailMsg;

    /**
     * @var integer <p>总共的文件个数</p>
     */
    public $TotalFileNumber;

    /**
     * @var integer <p>已完成的文件个数</p>
     */
    public $FinishedFileNumber;

    /**
     * @var string <p>列表地址</p>
     */
    public $TextLocation;

    /**
     * @var string <p>执行器类型</p>
     */
    public $RepositoryType;

    /**
     * @var boolean <p>是否自定义路径</p>
     * @deprecated
     */
    public $EnableDataFlowSubPath;

    /**
     * @var string <p>自定义路径</p>
     * @deprecated
     */
    public $DataFlowSubPath;

    /**
     * @var boolean <p>是否支持自定义目的路径（沉降表示桶前缀，预热表示本地路径）</p>
     */
    public $EnableCustomDestPath;

    /**
     * @var string <p>自定义目的路径（沉降表示桶前缀，预热表示本地路径）</p>
     */
    public $CustomDestPath;

    /**
     * @var boolean <p>任务路径是否表示绝对路径（暂时仅支持沉降使用）</p>
     */
    public $IsTaskPathAbsolute;

    /**
     * @var string <p>任务内容输出桶</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputBucket;

    /**
     * @var string <p>任务内容输出桶前缀</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputPrefix;

    /**
     * @var boolean <p>是否支持自定义数据源路径(暂时仅支持清单过滤使用)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableCustomSrcPath;

    /**
     * @var string <p>自定义数据源路径(暂时仅支持清单过滤使用)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomSrcPath;

    /**
     * @param string $TaskType <p>数据流通任务类型, FS_TO_COS(文件系统到COS Bucket),或者Bucket到文件系统(COS_TO_FS)</p>
     * @param string $Bucket <p>bucket名</p>
     * @param string $TaskPath <p>bucket路径</p>
     * @param integer $TotalCapacity <p>总的容量(单位Byte)</p>
     * @param integer $FinishedCapacity <p>已完成的数据量(单位Byte)</p>
     * @param string $TaskCreateTime <p>任务创建时间</p>
     * @param string $TaskStartTime <p>任务开始执行时间</p>
     * @param string $TaskEndTime <p>任务结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskStatus <p>INIT(任务初始化中) RUNNING(任务执行中) SUCCESS(任务已完成) FAIL(任务失败)</p>
     * @param string $TaskId <p>任务ID</p>
     * @param string $TaskName <p>任务名</p>
     * @param string $TaskFailMsg <p>任务失败原因</p>
     * @param integer $TotalFileNumber <p>总共的文件个数</p>
     * @param integer $FinishedFileNumber <p>已完成的文件个数</p>
     * @param string $TextLocation <p>列表地址</p>
     * @param string $RepositoryType <p>执行器类型</p>
     * @param boolean $EnableDataFlowSubPath <p>是否自定义路径</p>
     * @param string $DataFlowSubPath <p>自定义路径</p>
     * @param boolean $EnableCustomDestPath <p>是否支持自定义目的路径（沉降表示桶前缀，预热表示本地路径）</p>
     * @param string $CustomDestPath <p>自定义目的路径（沉降表示桶前缀，预热表示本地路径）</p>
     * @param boolean $IsTaskPathAbsolute <p>任务路径是否表示绝对路径（暂时仅支持沉降使用）</p>
     * @param string $OutputBucket <p>任务内容输出桶</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutputPrefix <p>任务内容输出桶前缀</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableCustomSrcPath <p>是否支持自定义数据源路径(暂时仅支持清单过滤使用)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomSrcPath <p>自定义数据源路径(暂时仅支持清单过滤使用)</p>
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("TaskPath",$param) and $param["TaskPath"] !== null) {
            $this->TaskPath = $param["TaskPath"];
        }

        if (array_key_exists("TotalCapacity",$param) and $param["TotalCapacity"] !== null) {
            $this->TotalCapacity = $param["TotalCapacity"];
        }

        if (array_key_exists("FinishedCapacity",$param) and $param["FinishedCapacity"] !== null) {
            $this->FinishedCapacity = $param["FinishedCapacity"];
        }

        if (array_key_exists("TaskCreateTime",$param) and $param["TaskCreateTime"] !== null) {
            $this->TaskCreateTime = $param["TaskCreateTime"];
        }

        if (array_key_exists("TaskStartTime",$param) and $param["TaskStartTime"] !== null) {
            $this->TaskStartTime = $param["TaskStartTime"];
        }

        if (array_key_exists("TaskEndTime",$param) and $param["TaskEndTime"] !== null) {
            $this->TaskEndTime = $param["TaskEndTime"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskFailMsg",$param) and $param["TaskFailMsg"] !== null) {
            $this->TaskFailMsg = $param["TaskFailMsg"];
        }

        if (array_key_exists("TotalFileNumber",$param) and $param["TotalFileNumber"] !== null) {
            $this->TotalFileNumber = $param["TotalFileNumber"];
        }

        if (array_key_exists("FinishedFileNumber",$param) and $param["FinishedFileNumber"] !== null) {
            $this->FinishedFileNumber = $param["FinishedFileNumber"];
        }

        if (array_key_exists("TextLocation",$param) and $param["TextLocation"] !== null) {
            $this->TextLocation = $param["TextLocation"];
        }

        if (array_key_exists("RepositoryType",$param) and $param["RepositoryType"] !== null) {
            $this->RepositoryType = $param["RepositoryType"];
        }

        if (array_key_exists("EnableDataFlowSubPath",$param) and $param["EnableDataFlowSubPath"] !== null) {
            $this->EnableDataFlowSubPath = $param["EnableDataFlowSubPath"];
        }

        if (array_key_exists("DataFlowSubPath",$param) and $param["DataFlowSubPath"] !== null) {
            $this->DataFlowSubPath = $param["DataFlowSubPath"];
        }

        if (array_key_exists("EnableCustomDestPath",$param) and $param["EnableCustomDestPath"] !== null) {
            $this->EnableCustomDestPath = $param["EnableCustomDestPath"];
        }

        if (array_key_exists("CustomDestPath",$param) and $param["CustomDestPath"] !== null) {
            $this->CustomDestPath = $param["CustomDestPath"];
        }

        if (array_key_exists("IsTaskPathAbsolute",$param) and $param["IsTaskPathAbsolute"] !== null) {
            $this->IsTaskPathAbsolute = $param["IsTaskPathAbsolute"];
        }

        if (array_key_exists("OutputBucket",$param) and $param["OutputBucket"] !== null) {
            $this->OutputBucket = $param["OutputBucket"];
        }

        if (array_key_exists("OutputPrefix",$param) and $param["OutputPrefix"] !== null) {
            $this->OutputPrefix = $param["OutputPrefix"];
        }

        if (array_key_exists("EnableCustomSrcPath",$param) and $param["EnableCustomSrcPath"] !== null) {
            $this->EnableCustomSrcPath = $param["EnableCustomSrcPath"];
        }

        if (array_key_exists("CustomSrcPath",$param) and $param["CustomSrcPath"] !== null) {
            $this->CustomSrcPath = $param["CustomSrcPath"];
        }
    }
}
