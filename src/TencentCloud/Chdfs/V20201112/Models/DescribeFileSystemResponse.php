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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFileSystem返回参数结构体
 *
 * @method FileSystem getFileSystem() 获取文件系统
 * @method void setFileSystem(FileSystem $FileSystem) 设置文件系统
 * @method integer getCapacityUsed() 获取文件系统已使用容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCapacityUsed(integer $CapacityUsed) 设置文件系统已使用容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getArchiveCapacityUsed() 获取已使用COS归档存储容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArchiveCapacityUsed(integer $ArchiveCapacityUsed) 设置已使用COS归档存储容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStandardCapacityUsed() 获取已使用COS标准存储容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStandardCapacityUsed(integer $StandardCapacityUsed) 设置已使用COS标准存储容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDegradeCapacityUsed() 获取已使用COS低频存储容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDegradeCapacityUsed(integer $DegradeCapacityUsed) 设置已使用COS低频存储容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeepArchiveCapacityUsed() 获取已使用COS深度归档存储容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeepArchiveCapacityUsed(integer $DeepArchiveCapacityUsed) 设置已使用COS深度归档存储容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIntelligentCapacityUsed() 获取已使用COS智能分层存储容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIntelligentCapacityUsed(integer $IntelligentCapacityUsed) 设置已使用COS智能分层存储容量（byte）
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
    public $CapacityUsed;

    /**
     * @var integer 已使用COS归档存储容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ArchiveCapacityUsed;

    /**
     * @var integer 已使用COS标准存储容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StandardCapacityUsed;

    /**
     * @var integer 已使用COS低频存储容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DegradeCapacityUsed;

    /**
     * @var integer 已使用COS深度归档存储容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeepArchiveCapacityUsed;

    /**
     * @var integer 已使用COS智能分层存储容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IntelligentCapacityUsed;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param FileSystem $FileSystem 文件系统
     * @param integer $CapacityUsed 文件系统已使用容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ArchiveCapacityUsed 已使用COS归档存储容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StandardCapacityUsed 已使用COS标准存储容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DegradeCapacityUsed 已使用COS低频存储容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeepArchiveCapacityUsed 已使用COS深度归档存储容量（byte）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IntelligentCapacityUsed 已使用COS智能分层存储容量（byte）
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
        if (array_key_exists("FileSystem",$param) and $param["FileSystem"] !== null) {
            $this->FileSystem = new FileSystem();
            $this->FileSystem->deserialize($param["FileSystem"]);
        }

        if (array_key_exists("CapacityUsed",$param) and $param["CapacityUsed"] !== null) {
            $this->CapacityUsed = $param["CapacityUsed"];
        }

        if (array_key_exists("ArchiveCapacityUsed",$param) and $param["ArchiveCapacityUsed"] !== null) {
            $this->ArchiveCapacityUsed = $param["ArchiveCapacityUsed"];
        }

        if (array_key_exists("StandardCapacityUsed",$param) and $param["StandardCapacityUsed"] !== null) {
            $this->StandardCapacityUsed = $param["StandardCapacityUsed"];
        }

        if (array_key_exists("DegradeCapacityUsed",$param) and $param["DegradeCapacityUsed"] !== null) {
            $this->DegradeCapacityUsed = $param["DegradeCapacityUsed"];
        }

        if (array_key_exists("DeepArchiveCapacityUsed",$param) and $param["DeepArchiveCapacityUsed"] !== null) {
            $this->DeepArchiveCapacityUsed = $param["DeepArchiveCapacityUsed"];
        }

        if (array_key_exists("IntelligentCapacityUsed",$param) and $param["IntelligentCapacityUsed"] !== null) {
            $this->IntelligentCapacityUsed = $param["IntelligentCapacityUsed"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
