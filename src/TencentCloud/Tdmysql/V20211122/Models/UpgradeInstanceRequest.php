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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeInstance请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getSpecCode() 获取<p>实例规格码</p>
 * @method void setSpecCode(string $SpecCode) 设置<p>实例规格码</p>
 * @method integer getDisk() 获取<p>存储节点磁盘容量，单位GB</p>
 * @method void setDisk(integer $Disk) 设置<p>存储节点磁盘容量，单位GB</p>
 * @method integer getStorageNodeCpu() 获取<p>存储节点CPU核数</p>
 * @method void setStorageNodeCpu(integer $StorageNodeCpu) 设置<p>存储节点CPU核数</p>
 * @method integer getStorageNodeMem() 获取<p>存储节点内存大小</p>
 * @method void setStorageNodeMem(integer $StorageNodeMem) 设置<p>存储节点内存大小</p>
 * @method string getStorageType() 获取<p>磁盘类型，需要修改磁盘类型时传</p>
 * @method void setStorageType(string $StorageType) 设置<p>磁盘类型，需要修改磁盘类型时传</p>
 */
class UpgradeInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例规格码</p>
     */
    public $SpecCode;

    /**
     * @var integer <p>存储节点磁盘容量，单位GB</p>
     */
    public $Disk;

    /**
     * @var integer <p>存储节点CPU核数</p>
     */
    public $StorageNodeCpu;

    /**
     * @var integer <p>存储节点内存大小</p>
     */
    public $StorageNodeMem;

    /**
     * @var string <p>磁盘类型，需要修改磁盘类型时传</p>
     */
    public $StorageType;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $SpecCode <p>实例规格码</p>
     * @param integer $Disk <p>存储节点磁盘容量，单位GB</p>
     * @param integer $StorageNodeCpu <p>存储节点CPU核数</p>
     * @param integer $StorageNodeMem <p>存储节点内存大小</p>
     * @param string $StorageType <p>磁盘类型，需要修改磁盘类型时传</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            $this->Disk = $param["Disk"];
        }

        if (array_key_exists("StorageNodeCpu",$param) and $param["StorageNodeCpu"] !== null) {
            $this->StorageNodeCpu = $param["StorageNodeCpu"];
        }

        if (array_key_exists("StorageNodeMem",$param) and $param["StorageNodeMem"] !== null) {
            $this->StorageNodeMem = $param["StorageNodeMem"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }
    }
}
