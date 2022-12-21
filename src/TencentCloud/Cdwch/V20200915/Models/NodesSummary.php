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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点角色描述信息
 *
 * @method string getSpec() 获取机型，如 S1
 * @method void setSpec(string $Spec) 设置机型，如 S1
 * @method integer getNodeSize() 获取节点数目
 * @method void setNodeSize(integer $NodeSize) 设置节点数目
 * @method integer getCore() 获取cpu核数，单位个
 * @method void setCore(integer $Core) 设置cpu核数，单位个
 * @method integer getMemory() 获取内存大小，单位G
 * @method void setMemory(integer $Memory) 设置内存大小，单位G
 * @method integer getDisk() 获取磁盘大小，单位G
 * @method void setDisk(integer $Disk) 设置磁盘大小，单位G
 * @method string getDiskType() 获取磁盘类型
 * @method void setDiskType(string $DiskType) 设置磁盘类型
 * @method string getDiskDesc() 获取磁盘描述
 * @method void setDiskDesc(string $DiskDesc) 设置磁盘描述
 */
class NodesSummary extends AbstractModel
{
    /**
     * @var string 机型，如 S1
     */
    public $Spec;

    /**
     * @var integer 节点数目
     */
    public $NodeSize;

    /**
     * @var integer cpu核数，单位个
     */
    public $Core;

    /**
     * @var integer 内存大小，单位G
     */
    public $Memory;

    /**
     * @var integer 磁盘大小，单位G
     */
    public $Disk;

    /**
     * @var string 磁盘类型
     */
    public $DiskType;

    /**
     * @var string 磁盘描述
     */
    public $DiskDesc;

    /**
     * @param string $Spec 机型，如 S1
     * @param integer $NodeSize 节点数目
     * @param integer $Core cpu核数，单位个
     * @param integer $Memory 内存大小，单位G
     * @param integer $Disk 磁盘大小，单位G
     * @param string $DiskType 磁盘类型
     * @param string $DiskDesc 磁盘描述
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
        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("NodeSize",$param) and $param["NodeSize"] !== null) {
            $this->NodeSize = $param["NodeSize"];
        }

        if (array_key_exists("Core",$param) and $param["Core"] !== null) {
            $this->Core = $param["Core"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            $this->Disk = $param["Disk"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskDesc",$param) and $param["DiskDesc"] !== null) {
            $this->DiskDesc = $param["DiskDesc"];
        }
    }
}
