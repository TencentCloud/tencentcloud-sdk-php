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
 * DoDirectoryOperation请求参数结构体
 *
 * @method string getFileSystemId() 获取文件系统 ID。当前仅 Turbo 系列文件系统支持调用此接口，通用系列文件系统（含增强型）不支持调用。
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统 ID。当前仅 Turbo 系列文件系统支持调用此接口，通用系列文件系统（含增强型）不支持调用。
 * @method string getOpetationType() 获取create：创建目录，等同于mkdir。
check：确认目录是否存在，等同于stat。
move：对文件/目录进行重命名，等同于mv。
 * @method void setOpetationType(string $OpetationType) 设置create：创建目录，等同于mkdir。
check：确认目录是否存在，等同于stat。
move：对文件/目录进行重命名，等同于mv。
 * @method string getDirectoryPath() 获取目录的绝对路径  默认递归创建（即如果目录中有子目录不存在，则先创建出对应子目录）
 * @method void setDirectoryPath(string $DirectoryPath) 设置目录的绝对路径  默认递归创建（即如果目录中有子目录不存在，则先创建出对应子目录）
 * @method string getMode() 获取创建目录的权限，若不传，默认为0755。若OperationType为 check，此值无实际意义。
 * @method void setMode(string $Mode) 设置创建目录的权限，若不传，默认为0755。若OperationType为 check，此值无实际意义。
 * @method string getDestPath() 获取mv 操作的目标目录名称。路径必须以/cfs/开头
 * @method void setDestPath(string $DestPath) 设置mv 操作的目标目录名称。路径必须以/cfs/开头
 */
class DoDirectoryOperationRequest extends AbstractModel
{
    /**
     * @var string 文件系统 ID。当前仅 Turbo 系列文件系统支持调用此接口，通用系列文件系统（含增强型）不支持调用。
     */
    public $FileSystemId;

    /**
     * @var string create：创建目录，等同于mkdir。
check：确认目录是否存在，等同于stat。
move：对文件/目录进行重命名，等同于mv。
     */
    public $OpetationType;

    /**
     * @var string 目录的绝对路径  默认递归创建（即如果目录中有子目录不存在，则先创建出对应子目录）
     */
    public $DirectoryPath;

    /**
     * @var string 创建目录的权限，若不传，默认为0755。若OperationType为 check，此值无实际意义。
     */
    public $Mode;

    /**
     * @var string mv 操作的目标目录名称。路径必须以/cfs/开头
     */
    public $DestPath;

    /**
     * @param string $FileSystemId 文件系统 ID。当前仅 Turbo 系列文件系统支持调用此接口，通用系列文件系统（含增强型）不支持调用。
     * @param string $OpetationType create：创建目录，等同于mkdir。
check：确认目录是否存在，等同于stat。
move：对文件/目录进行重命名，等同于mv。
     * @param string $DirectoryPath 目录的绝对路径  默认递归创建（即如果目录中有子目录不存在，则先创建出对应子目录）
     * @param string $Mode 创建目录的权限，若不传，默认为0755。若OperationType为 check，此值无实际意义。
     * @param string $DestPath mv 操作的目标目录名称。路径必须以/cfs/开头
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("OpetationType",$param) and $param["OpetationType"] !== null) {
            $this->OpetationType = $param["OpetationType"];
        }

        if (array_key_exists("DirectoryPath",$param) and $param["DirectoryPath"] !== null) {
            $this->DirectoryPath = $param["DirectoryPath"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("DestPath",$param) and $param["DestPath"] !== null) {
            $this->DestPath = $param["DestPath"];
        }
    }
}
