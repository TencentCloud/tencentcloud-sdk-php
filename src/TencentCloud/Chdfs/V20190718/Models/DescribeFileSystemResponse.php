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
namespace TencentCloud\Chdfs\V20190718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFileSystem返回参数结构体
 *
 * @method FileSystem getFileSystem() 获取文件系统
 * @method void setFileSystem(FileSystem $FileSystem) 设置文件系统
 * @method integer getFileSystemCapacityUsed() 获取文件系统已使用容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSystemCapacityUsed(integer $FileSystemCapacityUsed) 设置文件系统已使用容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCapacityUsed() 获取已使用容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCapacityUsed(integer $CapacityUsed) 设置已使用容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeFileSystemResponse extends AbstractModel
{
    /**
     * @var FileSystem 文件系统
     */
    public $FileSystem;

    /**
     * @var integer 文件系统已使用容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSystemCapacityUsed;

    /**
     * @var integer 已使用容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CapacityUsed;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param FileSystem $FileSystem 文件系统
     * @param integer $FileSystemCapacityUsed 文件系统已使用容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CapacityUsed 已使用容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists('FileSystem',$param) and $param['FileSystem'] !== null) {
            $this->FileSystem = new FileSystem();
            $this->FileSystem->deserialize($param['FileSystem']);
        }

        if (array_key_exists('FileSystemCapacityUsed',$param) and $param['FileSystemCapacityUsed'] !== null) {
            $this->FileSystemCapacityUsed = $param['FileSystemCapacityUsed'];
        }

        if (array_key_exists('CapacityUsed',$param) and $param['CapacityUsed'] !== null) {
            $this->CapacityUsed = $param['CapacityUsed'];
        }

        if (array_key_exists('RequestId',$param) and $param['RequestId'] !== null) {
            $this->RequestId = $param['RequestId'];
        }
    }
}
