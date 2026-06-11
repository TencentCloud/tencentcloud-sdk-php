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
 * @method string getTaskId() 获取<p>任务id</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务id</p>
 * @method string getTaskStatus() 获取<p>任务状态.<br>init：未执行<br>running：执行中，finished：已完成<br>,failed：失败<br>,stopping：停止中,stopped：已停止</p>
 * @method void setTaskStatus(string $TaskStatus) 设置<p>任务状态.<br>init：未执行<br>running：执行中，finished：已完成<br>,failed：失败<br>,stopping：停止中,stopped：已停止</p>
 * @method string getCreationTime() 获取<p>任务创建时间</p>
 * @method void setCreationTime(string $CreationTime) 设置<p>任务创建时间</p>
 * @method string getFinishTime() 获取<p>任务结束时间</p>
 * @method void setFinishTime(string $FinishTime) 设置<p>任务结束时间</p>
 * @method integer getFileTotalCount() 获取<p>文件总数</p>
 * @method void setFileTotalCount(integer $FileTotalCount) 设置<p>文件总数</p>
 * @method integer getFileSuccessedCount() 获取<p>处理成功文件数量</p>
 * @method void setFileSuccessedCount(integer $FileSuccessedCount) 设置<p>处理成功文件数量</p>
 * @method integer getFileFailedCount() 获取<p>当前已经失败的文件数</p>
 * @method void setFileFailedCount(integer $FileFailedCount) 设置<p>当前已经失败的文件数</p>
 * @method integer getFileTotalSize() 获取<p>文件容量，单位Byte</p>
 * @method void setFileTotalSize(integer $FileTotalSize) 设置<p>文件容量，单位Byte</p>
 * @method integer getFileSuccessedSize() 获取<p>已处理完成的文件容量，单位Byte</p>
 * @method void setFileSuccessedSize(integer $FileSuccessedSize) 设置<p>已处理完成的文件容量，单位Byte</p>
 * @method integer getFileFailedSize() 获取<p>已处理失败文件容量，单位Byte</p>
 * @method void setFileFailedSize(integer $FileFailedSize) 设置<p>已处理失败文件容量，单位Byte</p>
 * @method string getFileTotalList() 获取<p>总文件列表</p>
 * @method void setFileTotalList(string $FileTotalList) 设置<p>总文件列表</p>
 * @method string getFileSuccessedList() 获取<p>成功的文件列表</p>
 * @method void setFileSuccessedList(string $FileSuccessedList) 设置<p>成功的文件列表</p>
 * @method string getFileFailedList() 获取<p>失败文件的列表</p>
 * @method void setFileFailedList(string $FileFailedList) 设置<p>失败文件的列表</p>
 * @method string getFileSystemId() 获取<p>FileSystemId</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>FileSystemId</p>
 * @method string getTaskName() 获取<p>任务名称</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p>
 * @method string getTaskPath() 获取<p>任务路径</p>
 * @method void setTaskPath(string $TaskPath) 设置<p>任务路径</p>
 * @method string getType() 获取<p>任务类型,archive:表示沉降任务，restore：表示拉取任务</p>
 * @method void setType(string $Type) 设置<p>任务类型,archive:表示沉降任务，restore：表示拉取任务</p>
 * @method string getDataFlowId() 获取<p>数据流动Id</p>
 * @method void setDataFlowId(string $DataFlowId) 设置<p>数据流动Id</p>
 * @method boolean getIsOverwrite() 获取<p>当CFSTurbo内的文件和外置存储存在同名情况时，是否覆盖。</p><p>ture：覆盖</p><p>false：不覆盖（同时也不会释放热存数据）<br>为空时，默认为false</p>
 * @method void setIsOverwrite(boolean $IsOverwrite) 设置<p>当CFSTurbo内的文件和外置存储存在同名情况时，是否覆盖。</p><p>ture：覆盖</p><p>false：不覆盖（同时也不会释放热存数据）<br>为空时，默认为false</p>
 * @method string getListPath() 获取<p>【新增】数据清单文件路径，清单文件内每行一条待处理文件的完整路径。与 TaskPath 二选一。路径必须以 /cfs 开头，且必须为 CFS 文件系统内已存在的文件。示例值：/cfs/lists/archive_list.txt</p>
 * @method void setListPath(string $ListPath) 设置<p>【新增】数据清单文件路径，清单文件内每行一条待处理文件的完整路径。与 TaskPath 二选一。路径必须以 /cfs 开头，且必须为 CFS 文件系统内已存在的文件。示例值：/cfs/lists/archive_list.txt</p>
 */
class LifecycleDataTaskInfo extends AbstractModel
{
    /**
     * @var string <p>任务id</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务状态.<br>init：未执行<br>running：执行中，finished：已完成<br>,failed：失败<br>,stopping：停止中,stopped：已停止</p>
     */
    public $TaskStatus;

    /**
     * @var string <p>任务创建时间</p>
     */
    public $CreationTime;

    /**
     * @var string <p>任务结束时间</p>
     */
    public $FinishTime;

    /**
     * @var integer <p>文件总数</p>
     */
    public $FileTotalCount;

    /**
     * @var integer <p>处理成功文件数量</p>
     */
    public $FileSuccessedCount;

    /**
     * @var integer <p>当前已经失败的文件数</p>
     */
    public $FileFailedCount;

    /**
     * @var integer <p>文件容量，单位Byte</p>
     */
    public $FileTotalSize;

    /**
     * @var integer <p>已处理完成的文件容量，单位Byte</p>
     */
    public $FileSuccessedSize;

    /**
     * @var integer <p>已处理失败文件容量，单位Byte</p>
     */
    public $FileFailedSize;

    /**
     * @var string <p>总文件列表</p>
     */
    public $FileTotalList;

    /**
     * @var string <p>成功的文件列表</p>
     */
    public $FileSuccessedList;

    /**
     * @var string <p>失败文件的列表</p>
     */
    public $FileFailedList;

    /**
     * @var string <p>FileSystemId</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>任务名称</p>
     */
    public $TaskName;

    /**
     * @var string <p>任务路径</p>
     */
    public $TaskPath;

    /**
     * @var string <p>任务类型,archive:表示沉降任务，restore：表示拉取任务</p>
     */
    public $Type;

    /**
     * @var string <p>数据流动Id</p>
     */
    public $DataFlowId;

    /**
     * @var boolean <p>当CFSTurbo内的文件和外置存储存在同名情况时，是否覆盖。</p><p>ture：覆盖</p><p>false：不覆盖（同时也不会释放热存数据）<br>为空时，默认为false</p>
     */
    public $IsOverwrite;

    /**
     * @var string <p>【新增】数据清单文件路径，清单文件内每行一条待处理文件的完整路径。与 TaskPath 二选一。路径必须以 /cfs 开头，且必须为 CFS 文件系统内已存在的文件。示例值：/cfs/lists/archive_list.txt</p>
     */
    public $ListPath;

    /**
     * @param string $TaskId <p>任务id</p>
     * @param string $TaskStatus <p>任务状态.<br>init：未执行<br>running：执行中，finished：已完成<br>,failed：失败<br>,stopping：停止中,stopped：已停止</p>
     * @param string $CreationTime <p>任务创建时间</p>
     * @param string $FinishTime <p>任务结束时间</p>
     * @param integer $FileTotalCount <p>文件总数</p>
     * @param integer $FileSuccessedCount <p>处理成功文件数量</p>
     * @param integer $FileFailedCount <p>当前已经失败的文件数</p>
     * @param integer $FileTotalSize <p>文件容量，单位Byte</p>
     * @param integer $FileSuccessedSize <p>已处理完成的文件容量，单位Byte</p>
     * @param integer $FileFailedSize <p>已处理失败文件容量，单位Byte</p>
     * @param string $FileTotalList <p>总文件列表</p>
     * @param string $FileSuccessedList <p>成功的文件列表</p>
     * @param string $FileFailedList <p>失败文件的列表</p>
     * @param string $FileSystemId <p>FileSystemId</p>
     * @param string $TaskName <p>任务名称</p>
     * @param string $TaskPath <p>任务路径</p>
     * @param string $Type <p>任务类型,archive:表示沉降任务，restore：表示拉取任务</p>
     * @param string $DataFlowId <p>数据流动Id</p>
     * @param boolean $IsOverwrite <p>当CFSTurbo内的文件和外置存储存在同名情况时，是否覆盖。</p><p>ture：覆盖</p><p>false：不覆盖（同时也不会释放热存数据）<br>为空时，默认为false</p>
     * @param string $ListPath <p>【新增】数据清单文件路径，清单文件内每行一条待处理文件的完整路径。与 TaskPath 二选一。路径必须以 /cfs 开头，且必须为 CFS 文件系统内已存在的文件。示例值：/cfs/lists/archive_list.txt</p>
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

        if (array_key_exists("ListPath",$param) and $param["ListPath"] !== null) {
            $this->ListPath = $param["ListPath"];
        }
    }
}
