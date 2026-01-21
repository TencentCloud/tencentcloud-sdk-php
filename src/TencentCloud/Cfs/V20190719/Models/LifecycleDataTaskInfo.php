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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 生命周期任务
 *
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getTaskStatus() 获取任务状态.
init：未执行
running：执行中，finished：已完成
,failed：失败
,stopping：停止中,stopped：已停止
 * @method void setTaskStatus(string $TaskStatus) 设置任务状态.
init：未执行
running：执行中，finished：已完成
,failed：失败
,stopping：停止中,stopped：已停止
 * @method string getCreationTime() 获取任务创建时间
 * @method void setCreationTime(string $CreationTime) 设置任务创建时间
 * @method string getFinishTime() 获取任务结束时间
 * @method void setFinishTime(string $FinishTime) 设置任务结束时间
 * @method integer getFileTotalCount() 获取文件总数
 * @method void setFileTotalCount(integer $FileTotalCount) 设置文件总数
 * @method integer getFileSuccessedCount() 获取处理成功文件数量
 * @method void setFileSuccessedCount(integer $FileSuccessedCount) 设置处理成功文件数量
 * @method integer getFileFailedCount() 获取当前已经失败的文件数
 * @method void setFileFailedCount(integer $FileFailedCount) 设置当前已经失败的文件数
 * @method integer getFileTotalSize() 获取文件容量，单位Byte


 * @method void setFileTotalSize(integer $FileTotalSize) 设置文件容量，单位Byte


 * @method integer getFileSuccessedSize() 获取已处理完成的文件容量，单位Byte


 * @method void setFileSuccessedSize(integer $FileSuccessedSize) 设置已处理完成的文件容量，单位Byte


 * @method integer getFileFailedSize() 获取已处理失败文件容量，单位Byte

 * @method void setFileFailedSize(integer $FileFailedSize) 设置已处理失败文件容量，单位Byte

 * @method string getFileTotalList() 获取总文件列表
 * @method void setFileTotalList(string $FileTotalList) 设置总文件列表
 * @method string getFileSuccessedList() 获取成功的文件列表
 * @method void setFileSuccessedList(string $FileSuccessedList) 设置成功的文件列表
 * @method string getFileFailedList() 获取失败文件的列表
 * @method void setFileFailedList(string $FileFailedList) 设置失败文件的列表
 * @method string getFileSystemId() 获取FileSystemId
 * @method void setFileSystemId(string $FileSystemId) 设置FileSystemId
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getTaskPath() 获取任务路径
 * @method void setTaskPath(string $TaskPath) 设置任务路径
 * @method string getType() 获取任务类型,archive:表示沉降任务，restore：表示拉取任务
 * @method void setType(string $Type) 设置任务类型,archive:表示沉降任务，restore：表示拉取任务
 * @method string getDataFlowId() 获取数据流动Id
 * @method void setDataFlowId(string $DataFlowId) 设置数据流动Id
 * @method boolean getIsOverwrite() 获取当CFSTurbo内的文件和外置存储存在同名情况时，是否覆盖。

ture：覆盖

false：不覆盖（同时也不会释放热存数据）
为空时，默认为false
 * @method void setIsOverwrite(boolean $IsOverwrite) 设置当CFSTurbo内的文件和外置存储存在同名情况时，是否覆盖。

ture：覆盖

false：不覆盖（同时也不会释放热存数据）
为空时，默认为false
 */
class LifecycleDataTaskInfo extends AbstractModel
{
    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 任务状态.
init：未执行
running：执行中，finished：已完成
,failed：失败
,stopping：停止中,stopped：已停止
     */
    public $TaskStatus;

    /**
     * @var string 任务创建时间
     */
    public $CreationTime;

    /**
     * @var string 任务结束时间
     */
    public $FinishTime;

    /**
     * @var integer 文件总数
     */
    public $FileTotalCount;

    /**
     * @var integer 处理成功文件数量
     */
    public $FileSuccessedCount;

    /**
     * @var integer 当前已经失败的文件数
     */
    public $FileFailedCount;

    /**
     * @var integer 文件容量，单位Byte


     */
    public $FileTotalSize;

    /**
     * @var integer 已处理完成的文件容量，单位Byte


     */
    public $FileSuccessedSize;

    /**
     * @var integer 已处理失败文件容量，单位Byte

     */
    public $FileFailedSize;

    /**
     * @var string 总文件列表
     */
    public $FileTotalList;

    /**
     * @var string 成功的文件列表
     */
    public $FileSuccessedList;

    /**
     * @var string 失败文件的列表
     */
    public $FileFailedList;

    /**
     * @var string FileSystemId
     */
    public $FileSystemId;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 任务路径
     */
    public $TaskPath;

    /**
     * @var string 任务类型,archive:表示沉降任务，restore：表示拉取任务
     */
    public $Type;

    /**
     * @var string 数据流动Id
     */
    public $DataFlowId;

    /**
     * @var boolean 当CFSTurbo内的文件和外置存储存在同名情况时，是否覆盖。

ture：覆盖

false：不覆盖（同时也不会释放热存数据）
为空时，默认为false
     */
    public $IsOverwrite;

    /**
     * @param string $TaskId 任务id
     * @param string $TaskStatus 任务状态.
init：未执行
running：执行中，finished：已完成
,failed：失败
,stopping：停止中,stopped：已停止
     * @param string $CreationTime 任务创建时间
     * @param string $FinishTime 任务结束时间
     * @param integer $FileTotalCount 文件总数
     * @param integer $FileSuccessedCount 处理成功文件数量
     * @param integer $FileFailedCount 当前已经失败的文件数
     * @param integer $FileTotalSize 文件容量，单位Byte


     * @param integer $FileSuccessedSize 已处理完成的文件容量，单位Byte


     * @param integer $FileFailedSize 已处理失败文件容量，单位Byte

     * @param string $FileTotalList 总文件列表
     * @param string $FileSuccessedList 成功的文件列表
     * @param string $FileFailedList 失败文件的列表
     * @param string $FileSystemId FileSystemId
     * @param string $TaskName 任务名称
     * @param string $TaskPath 任务路径
     * @param string $Type 任务类型,archive:表示沉降任务，restore：表示拉取任务
     * @param string $DataFlowId 数据流动Id
     * @param boolean $IsOverwrite 当CFSTurbo内的文件和外置存储存在同名情况时，是否覆盖。

ture：覆盖

false：不覆盖（同时也不会释放热存数据）
为空时，默认为false
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

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("FileTotalCount",$param) and $param["FileTotalCount"] !== null) {
            $this->FileTotalCount = $param["FileTotalCount"];
        }

        if (array_key_exists("FileSuccessedCount",$param) and $param["FileSuccessedCount"] !== null) {
            $this->FileSuccessedCount = $param["FileSuccessedCount"];
        }

        if (array_key_exists("FileFailedCount",$param) and $param["FileFailedCount"] !== null) {
            $this->FileFailedCount = $param["FileFailedCount"];
        }

        if (array_key_exists("FileTotalSize",$param) and $param["FileTotalSize"] !== null) {
            $this->FileTotalSize = $param["FileTotalSize"];
        }

        if (array_key_exists("FileSuccessedSize",$param) and $param["FileSuccessedSize"] !== null) {
            $this->FileSuccessedSize = $param["FileSuccessedSize"];
        }

        if (array_key_exists("FileFailedSize",$param) and $param["FileFailedSize"] !== null) {
            $this->FileFailedSize = $param["FileFailedSize"];
        }

        if (array_key_exists("FileTotalList",$param) and $param["FileTotalList"] !== null) {
            $this->FileTotalList = $param["FileTotalList"];
        }

        if (array_key_exists("FileSuccessedList",$param) and $param["FileSuccessedList"] !== null) {
            $this->FileSuccessedList = $param["FileSuccessedList"];
        }

        if (array_key_exists("FileFailedList",$param) and $param["FileFailedList"] !== null) {
            $this->FileFailedList = $param["FileFailedList"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskPath",$param) and $param["TaskPath"] !== null) {
            $this->TaskPath = $param["TaskPath"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("DataFlowId",$param) and $param["DataFlowId"] !== null) {
            $this->DataFlowId = $param["DataFlowId"];
        }

        if (array_key_exists("IsOverwrite",$param) and $param["IsOverwrite"] !== null) {
            $this->IsOverwrite = $param["IsOverwrite"];
        }
    }
}
