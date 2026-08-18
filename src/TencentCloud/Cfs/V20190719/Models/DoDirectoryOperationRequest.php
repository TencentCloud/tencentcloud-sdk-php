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
 * @method string getFileSystemId() 获取<p>文件系统 ID。当前仅 Turbo 系列文件系统支持调用此接口，通用系列文件系统（含增强型）不支持调用。</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>文件系统 ID。当前仅 Turbo 系列文件系统支持调用此接口，通用系列文件系统（含增强型）不支持调用。</p>
 * @method string getOpetationType() 获取<p>create：创建目录，等同于mkdir。<br>check：确认目录是否存在，等同于stat。<br>move：对文件/目录进行重命名，等同于mv。</p>
 * @method void setOpetationType(string $OpetationType) 设置<p>create：创建目录，等同于mkdir。<br>check：确认目录是否存在，等同于stat。<br>move：对文件/目录进行重命名，等同于mv。</p>
 * @method string getDirectoryPath() 获取<p>系统会默认递归创建路径中的所有父级目录。路径必须从 /cfs/ 开始，代表文件存储实例内部的逻辑路径，而非本地挂载点路径。<br>示例：</p><ul><li><p>若操作为 create/check</p><ul><li>若挂载的是CFS根目录 /，需在挂载路径下创建/检查是否存在 test1/test2，则入参值为 /cfs/test1/test2</li><li>若挂载的是CFS子目录 /subdir，需在挂载路径下创建/检查是否存在 test1/test2，则入参值为 /cfs/subdir/test1/test2</li></ul></li><li><p>若操作为 move</p><ul><li>若挂载的是CFS根目录 /，需在挂载路径下移动 test1/test2 下的文件到 DestPath，则入参值为 /cfs/test1/test2</li><li>若挂载的是CFS子目录 /subdir，需在挂载路径下挂载路径下移动 test1/test2 下的文件到 DestPath，则入参值为 /cfs/subdir/test1/test2</li></ul></li></ul>
 * @method void setDirectoryPath(string $DirectoryPath) 设置<p>系统会默认递归创建路径中的所有父级目录。路径必须从 /cfs/ 开始，代表文件存储实例内部的逻辑路径，而非本地挂载点路径。<br>示例：</p><ul><li><p>若操作为 create/check</p><ul><li>若挂载的是CFS根目录 /，需在挂载路径下创建/检查是否存在 test1/test2，则入参值为 /cfs/test1/test2</li><li>若挂载的是CFS子目录 /subdir，需在挂载路径下创建/检查是否存在 test1/test2，则入参值为 /cfs/subdir/test1/test2</li></ul></li><li><p>若操作为 move</p><ul><li>若挂载的是CFS根目录 /，需在挂载路径下移动 test1/test2 下的文件到 DestPath，则入参值为 /cfs/test1/test2</li><li>若挂载的是CFS子目录 /subdir，需在挂载路径下挂载路径下移动 test1/test2 下的文件到 DestPath，则入参值为 /cfs/subdir/test1/test2</li></ul></li></ul>
 * @method string getMode() 获取<p>创建目录的权限，若不传，默认为0755。若OperationType为 check，此值无实际意义。</p>
 * @method void setMode(string $Mode) 设置<p>创建目录的权限，若不传，默认为0755。若OperationType为 check，此值无实际意义。</p>
 * @method string getDestPath() 获取<p>mv 操作的目标目录路径，必须以 /cfs/ 开头，代表文件存储实例内部的逻辑路径，而非本地挂载点路径。<br>示例：</p><ul><li>若挂载的是CFS根目录 /，需将 DirectoryPath 下的文件移动到挂载路径下的 test3/test4，则入参值为 /cfs/test3/test4</li><li>若挂载的是CFS子目录 /subdir，需将 DirectoryPath 下的文件移动到挂载路径下的 test3/test4，则入参值为 /cfs/subdir/ test3/test4</li></ul>
 * @method void setDestPath(string $DestPath) 设置<p>mv 操作的目标目录路径，必须以 /cfs/ 开头，代表文件存储实例内部的逻辑路径，而非本地挂载点路径。<br>示例：</p><ul><li>若挂载的是CFS根目录 /，需将 DirectoryPath 下的文件移动到挂载路径下的 test3/test4，则入参值为 /cfs/test3/test4</li><li>若挂载的是CFS子目录 /subdir，需将 DirectoryPath 下的文件移动到挂载路径下的 test3/test4，则入参值为 /cfs/subdir/ test3/test4</li></ul>
 */
class DoDirectoryOperationRequest extends AbstractModel
{
    /**
     * @var string <p>文件系统 ID。当前仅 Turbo 系列文件系统支持调用此接口，通用系列文件系统（含增强型）不支持调用。</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>create：创建目录，等同于mkdir。<br>check：确认目录是否存在，等同于stat。<br>move：对文件/目录进行重命名，等同于mv。</p>
     */
    public $OpetationType;

    /**
     * @var string <p>系统会默认递归创建路径中的所有父级目录。路径必须从 /cfs/ 开始，代表文件存储实例内部的逻辑路径，而非本地挂载点路径。<br>示例：</p><ul><li><p>若操作为 create/check</p><ul><li>若挂载的是CFS根目录 /，需在挂载路径下创建/检查是否存在 test1/test2，则入参值为 /cfs/test1/test2</li><li>若挂载的是CFS子目录 /subdir，需在挂载路径下创建/检查是否存在 test1/test2，则入参值为 /cfs/subdir/test1/test2</li></ul></li><li><p>若操作为 move</p><ul><li>若挂载的是CFS根目录 /，需在挂载路径下移动 test1/test2 下的文件到 DestPath，则入参值为 /cfs/test1/test2</li><li>若挂载的是CFS子目录 /subdir，需在挂载路径下挂载路径下移动 test1/test2 下的文件到 DestPath，则入参值为 /cfs/subdir/test1/test2</li></ul></li></ul>
     */
    public $DirectoryPath;

    /**
     * @var string <p>创建目录的权限，若不传，默认为0755。若OperationType为 check，此值无实际意义。</p>
     */
    public $Mode;

    /**
     * @var string <p>mv 操作的目标目录路径，必须以 /cfs/ 开头，代表文件存储实例内部的逻辑路径，而非本地挂载点路径。<br>示例：</p><ul><li>若挂载的是CFS根目录 /，需将 DirectoryPath 下的文件移动到挂载路径下的 test3/test4，则入参值为 /cfs/test3/test4</li><li>若挂载的是CFS子目录 /subdir，需将 DirectoryPath 下的文件移动到挂载路径下的 test3/test4，则入参值为 /cfs/subdir/ test3/test4</li></ul>
     */
    public $DestPath;

    /**
     * @param string $FileSystemId <p>文件系统 ID。当前仅 Turbo 系列文件系统支持调用此接口，通用系列文件系统（含增强型）不支持调用。</p>
     * @param string $OpetationType <p>create：创建目录，等同于mkdir。<br>check：确认目录是否存在，等同于stat。<br>move：对文件/目录进行重命名，等同于mv。</p>
     * @param string $DirectoryPath <p>系统会默认递归创建路径中的所有父级目录。路径必须从 /cfs/ 开始，代表文件存储实例内部的逻辑路径，而非本地挂载点路径。<br>示例：</p><ul><li><p>若操作为 create/check</p><ul><li>若挂载的是CFS根目录 /，需在挂载路径下创建/检查是否存在 test1/test2，则入参值为 /cfs/test1/test2</li><li>若挂载的是CFS子目录 /subdir，需在挂载路径下创建/检查是否存在 test1/test2，则入参值为 /cfs/subdir/test1/test2</li></ul></li><li><p>若操作为 move</p><ul><li>若挂载的是CFS根目录 /，需在挂载路径下移动 test1/test2 下的文件到 DestPath，则入参值为 /cfs/test1/test2</li><li>若挂载的是CFS子目录 /subdir，需在挂载路径下挂载路径下移动 test1/test2 下的文件到 DestPath，则入参值为 /cfs/subdir/test1/test2</li></ul></li></ul>
     * @param string $Mode <p>创建目录的权限，若不传，默认为0755。若OperationType为 check，此值无实际意义。</p>
     * @param string $DestPath <p>mv 操作的目标目录路径，必须以 /cfs/ 开头，代表文件存储实例内部的逻辑路径，而非本地挂载点路径。<br>示例：</p><ul><li>若挂载的是CFS根目录 /，需将 DirectoryPath 下的文件移动到挂载路径下的 test3/test4，则入参值为 /cfs/test3/test4</li><li>若挂载的是CFS子目录 /subdir，需将 DirectoryPath 下的文件移动到挂载路径下的 test3/test4，则入参值为 /cfs/subdir/ test3/test4</li></ul>
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
