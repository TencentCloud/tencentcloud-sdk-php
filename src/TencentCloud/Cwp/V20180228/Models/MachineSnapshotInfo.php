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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机器快照信息
 *
 * @method string getQuuid() 获取cvm id
 * @method void setQuuid(string $Quuid) 设置cvm id
 * @method string getHostName() 获取主机名称
 * @method void setHostName(string $HostName) 设置主机名称
 * @method string getHostIp() 获取主机ip
 * @method void setHostIp(string $HostIp) 设置主机ip
 * @method string getSnapshotName() 获取快照名称
 * @method void setSnapshotName(string $SnapshotName) 设置快照名称
 * @method string getCreateTime() 获取快照创建时间
 * @method void setCreateTime(string $CreateTime) 设置快照创建时间
 * @method string getDiskId() 获取磁盘id
 * @method void setDiskId(string $DiskId) 设置磁盘id
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method integer getRegionId() 获取地区id
 * @method void setRegionId(integer $RegionId) 设置地区id
 * @method string getSnapshotId() 获取快照id
 * @method void setSnapshotId(string $SnapshotId) 设置快照id
 */
class MachineSnapshotInfo extends AbstractModel
{
    /**
     * @var string cvm id
     */
    public $Quuid;

    /**
     * @var string 主机名称
     */
    public $HostName;

    /**
     * @var string 主机ip
     */
    public $HostIp;

    /**
     * @var string 快照名称
     */
    public $SnapshotName;

    /**
     * @var string 快照创建时间
     */
    public $CreateTime;

    /**
     * @var string 磁盘id
     */
    public $DiskId;

    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var integer 地区id
     */
    public $RegionId;

    /**
     * @var string 快照id
     */
    public $SnapshotId;

    /**
     * @param string $Quuid cvm id
     * @param string $HostName 主机名称
     * @param string $HostIp 主机ip
     * @param string $SnapshotName 快照名称
     * @param string $CreateTime 快照创建时间
     * @param string $DiskId 磁盘id
     * @param string $InstanceId 实例Id
     * @param integer $RegionId 地区id
     * @param string $SnapshotId 快照id
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("SnapshotName",$param) and $param["SnapshotName"] !== null) {
            $this->SnapshotName = $param["SnapshotName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }
    }
}
