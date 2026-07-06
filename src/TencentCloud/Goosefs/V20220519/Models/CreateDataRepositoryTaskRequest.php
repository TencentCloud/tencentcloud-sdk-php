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
 * CreateDataRepositoryTask请求参数结构体
 *
 * @method string getTaskType() 获取<p>数据流通任务类型, FS_TO_COS(文件系统到COS Bucket),或者COS_TO_FS(COS Bucket到文件系统)</p>
 * @method void setTaskType(string $TaskType) 设置<p>数据流通任务类型, FS_TO_COS(文件系统到COS Bucket),或者COS_TO_FS(COS Bucket到文件系统)</p>
 * @method string getBucket() 获取<p>COS存储桶名</p>
 * @method void setBucket(string $Bucket) 设置<p>COS存储桶名</p>
 * @method string getFileSystemId() 获取<p>文件系统ID</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>文件系统ID</p>
 * @method string getTaskPath() 获取<p>对于FS_TO_COS, TaskPath是Bucket映射目录的相对路径, 对于COS_TO_FS是COS上的路径。如果置为空, 则表示全部数据</p>
 * @method void setTaskPath(string $TaskPath) 设置<p>对于FS_TO_COS, TaskPath是Bucket映射目录的相对路径, 对于COS_TO_FS是COS上的路径。如果置为空, 则表示全部数据</p>
 * @method string getTaskName() 获取<p>任务名称</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p>
 * @method boolean getIsTaskPathAbsolute() 获取<p>任务路径是否表示绝对路径（暂时仅支持沉降使用）</p>
 * @method void setIsTaskPathAbsolute(boolean $IsTaskPathAbsolute) 设置<p>任务路径是否表示绝对路径（暂时仅支持沉降使用）</p>
 * @method string getRepositoryType() 获取<p>数据流通方式 MSP_AFM 手动加载  RAW_AFM 按需加载</p>
 * @method void setRepositoryType(string $RepositoryType) 设置<p>数据流通方式 MSP_AFM 手动加载  RAW_AFM 按需加载</p>
 * @method string getTextLocation() 获取<p>文件列表下载地址，以http开头</p>
 * @method void setTextLocation(string $TextLocation) 设置<p>文件列表下载地址，以http开头</p>
 * @method boolean getEnableDataFlowSubPath() 获取<p>是否开启自定义路径(暂时仅供预热使用)</p>
 * @method void setEnableDataFlowSubPath(boolean $EnableDataFlowSubPath) 设置<p>是否开启自定义路径(暂时仅供预热使用)</p>
 * @method string getDataFlowSubPath() 获取<p>自定义路径(暂时仅供预热使用)</p>
 * @method void setDataFlowSubPath(string $DataFlowSubPath) 设置<p>自定义路径(暂时仅供预热使用)</p>
 * @method boolean getEnableCustomDestPath() 获取<p>是否开启自定义目的路径（预热任务表示本地路径，沉降任务表示COS桶前缀）</p>
 * @method void setEnableCustomDestPath(boolean $EnableCustomDestPath) 设置<p>是否开启自定义目的路径（预热任务表示本地路径，沉降任务表示COS桶前缀）</p>
 * @method string getCustomDestPath() 获取<p>自定义目的路径（预热任务表示本地路径，沉降任务表示COS桶前缀）</p>
 * @method void setCustomDestPath(string $CustomDestPath) 设置<p>自定义目的路径（预热任务表示本地路径，沉降任务表示COS桶前缀）</p>
 */
class CreateDataRepositoryTaskRequest extends AbstractModel
{
    /**
     * @var string <p>数据流通任务类型, FS_TO_COS(文件系统到COS Bucket),或者COS_TO_FS(COS Bucket到文件系统)</p>
     */
    public $TaskType;

    /**
     * @var string <p>COS存储桶名</p>
     */
    public $Bucket;

    /**
     * @var string <p>文件系统ID</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>对于FS_TO_COS, TaskPath是Bucket映射目录的相对路径, 对于COS_TO_FS是COS上的路径。如果置为空, 则表示全部数据</p>
     */
    public $TaskPath;

    /**
     * @var string <p>任务名称</p>
     */
    public $TaskName;

    /**
     * @var boolean <p>任务路径是否表示绝对路径（暂时仅支持沉降使用）</p>
     */
    public $IsTaskPathAbsolute;

    /**
     * @var string <p>数据流通方式 MSP_AFM 手动加载  RAW_AFM 按需加载</p>
     */
    public $RepositoryType;

    /**
     * @var string <p>文件列表下载地址，以http开头</p>
     */
    public $TextLocation;

    /**
     * @var boolean <p>是否开启自定义路径(暂时仅供预热使用)</p>
     * @deprecated
     */
    public $EnableDataFlowSubPath;

    /**
     * @var string <p>自定义路径(暂时仅供预热使用)</p>
     * @deprecated
     */
    public $DataFlowSubPath;

    /**
     * @var boolean <p>是否开启自定义目的路径（预热任务表示本地路径，沉降任务表示COS桶前缀）</p>
     */
    public $EnableCustomDestPath;

    /**
     * @var string <p>自定义目的路径（预热任务表示本地路径，沉降任务表示COS桶前缀）</p>
     */
    public $CustomDestPath;

    /**
     * @param string $TaskType <p>数据流通任务类型, FS_TO_COS(文件系统到COS Bucket),或者COS_TO_FS(COS Bucket到文件系统)</p>
     * @param string $Bucket <p>COS存储桶名</p>
     * @param string $FileSystemId <p>文件系统ID</p>
     * @param string $TaskPath <p>对于FS_TO_COS, TaskPath是Bucket映射目录的相对路径, 对于COS_TO_FS是COS上的路径。如果置为空, 则表示全部数据</p>
     * @param string $TaskName <p>任务名称</p>
     * @param boolean $IsTaskPathAbsolute <p>任务路径是否表示绝对路径（暂时仅支持沉降使用）</p>
     * @param string $RepositoryType <p>数据流通方式 MSP_AFM 手动加载  RAW_AFM 按需加载</p>
     * @param string $TextLocation <p>文件列表下载地址，以http开头</p>
     * @param boolean $EnableDataFlowSubPath <p>是否开启自定义路径(暂时仅供预热使用)</p>
     * @param string $DataFlowSubPath <p>自定义路径(暂时仅供预热使用)</p>
     * @param boolean $EnableCustomDestPath <p>是否开启自定义目的路径（预热任务表示本地路径，沉降任务表示COS桶前缀）</p>
     * @param string $CustomDestPath <p>自定义目的路径（预热任务表示本地路径，沉降任务表示COS桶前缀）</p>
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

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("TaskPath",$param) and $param["TaskPath"] !== null) {
            $this->TaskPath = $param["TaskPath"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("IsTaskPathAbsolute",$param) and $param["IsTaskPathAbsolute"] !== null) {
            $this->IsTaskPathAbsolute = $param["IsTaskPathAbsolute"];
        }

        if (array_key_exists("RepositoryType",$param) and $param["RepositoryType"] !== null) {
            $this->RepositoryType = $param["RepositoryType"];
        }

        if (array_key_exists("TextLocation",$param) and $param["TextLocation"] !== null) {
            $this->TextLocation = $param["TextLocation"];
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
    }
}
