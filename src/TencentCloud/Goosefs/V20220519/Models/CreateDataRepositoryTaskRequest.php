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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDataRepositoryTask请求参数结构体
 *
 * @method string getTaskType() 获取数据流通任务类型, FS_TO_COS(文件系统到COS Bucket),或者COS_TO_FS(COS Bucket到文件系统)
 * @method void setTaskType(string $TaskType) 设置数据流通任务类型, FS_TO_COS(文件系统到COS Bucket),或者COS_TO_FS(COS Bucket到文件系统)
 * @method string getBucket() 获取COS存储桶名
 * @method void setBucket(string $Bucket) 设置COS存储桶名
 * @method string getFileSystemId() 获取文件系统ID
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统ID
 * @method string getTaskPath() 获取对于FS_TO_COS, TaskPath是Bucket映射目录的相对路径, 对于COS_TO_FS是COS上的路径。如果置为空, 则表示全部数据
 * @method void setTaskPath(string $TaskPath) 设置对于FS_TO_COS, TaskPath是Bucket映射目录的相对路径, 对于COS_TO_FS是COS上的路径。如果置为空, 则表示全部数据
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getRepositoryType() 获取数据流通方式 MSP_AFM 手动加载  RAW_AFM 按需加载
 * @method void setRepositoryType(string $RepositoryType) 设置数据流通方式 MSP_AFM 手动加载  RAW_AFM 按需加载
 * @method string getTextLocation() 获取文件列表下载地址，以http开头
 * @method void setTextLocation(string $TextLocation) 设置文件列表下载地址，以http开头
 */
class CreateDataRepositoryTaskRequest extends AbstractModel
{
    /**
     * @var string 数据流通任务类型, FS_TO_COS(文件系统到COS Bucket),或者COS_TO_FS(COS Bucket到文件系统)
     */
    public $TaskType;

    /**
     * @var string COS存储桶名
     */
    public $Bucket;

    /**
     * @var string 文件系统ID
     */
    public $FileSystemId;

    /**
     * @var string 对于FS_TO_COS, TaskPath是Bucket映射目录的相对路径, 对于COS_TO_FS是COS上的路径。如果置为空, 则表示全部数据
     */
    public $TaskPath;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 数据流通方式 MSP_AFM 手动加载  RAW_AFM 按需加载
     */
    public $RepositoryType;

    /**
     * @var string 文件列表下载地址，以http开头
     */
    public $TextLocation;

    /**
     * @param string $TaskType 数据流通任务类型, FS_TO_COS(文件系统到COS Bucket),或者COS_TO_FS(COS Bucket到文件系统)
     * @param string $Bucket COS存储桶名
     * @param string $FileSystemId 文件系统ID
     * @param string $TaskPath 对于FS_TO_COS, TaskPath是Bucket映射目录的相对路径, 对于COS_TO_FS是COS上的路径。如果置为空, 则表示全部数据
     * @param string $TaskName 任务名称
     * @param string $RepositoryType 数据流通方式 MSP_AFM 手动加载  RAW_AFM 按需加载
     * @param string $TextLocation 文件列表下载地址，以http开头
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

        if (array_key_exists("RepositoryType",$param) and $param["RepositoryType"] !== null) {
            $this->RepositoryType = $param["RepositoryType"];
        }

        if (array_key_exists("TextLocation",$param) and $param["TextLocation"] !== null) {
            $this->TextLocation = $param["TextLocation"];
        }
    }
}
