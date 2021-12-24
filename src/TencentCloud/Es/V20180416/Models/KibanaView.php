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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kibana视图数据
 *
 * @method string getIp() 获取Kibana节点IP
 * @method void setIp(string $Ip) 设置Kibana节点IP
 * @method integer getDiskSize() 获取节点总磁盘大小
 * @method void setDiskSize(integer $DiskSize) 设置节点总磁盘大小
 * @method float getDiskUsage() 获取磁盘使用率
 * @method void setDiskUsage(float $DiskUsage) 设置磁盘使用率
 * @method integer getMemSize() 获取节点内存大小
 * @method void setMemSize(integer $MemSize) 设置节点内存大小
 * @method float getMemUsage() 获取内存使用率
 * @method void setMemUsage(float $MemUsage) 设置内存使用率
 * @method integer getCpuNum() 获取节点cpu个数
 * @method void setCpuNum(integer $CpuNum) 设置节点cpu个数
 * @method float getCpuUsage() 获取cpu使用率
 * @method void setCpuUsage(float $CpuUsage) 设置cpu使用率
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 */
class KibanaView extends AbstractModel
{
    /**
     * @var string Kibana节点IP
     */
    public $Ip;

    /**
     * @var integer 节点总磁盘大小
     */
    public $DiskSize;

    /**
     * @var float 磁盘使用率
     */
    public $DiskUsage;

    /**
     * @var integer 节点内存大小
     */
    public $MemSize;

    /**
     * @var float 内存使用率
     */
    public $MemUsage;

    /**
     * @var integer 节点cpu个数
     */
    public $CpuNum;

    /**
     * @var float cpu使用率
     */
    public $CpuUsage;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @param string $Ip Kibana节点IP
     * @param integer $DiskSize 节点总磁盘大小
     * @param float $DiskUsage 磁盘使用率
     * @param integer $MemSize 节点内存大小
     * @param float $MemUsage 内存使用率
     * @param integer $CpuNum 节点cpu个数
     * @param float $CpuUsage cpu使用率
     * @param string $Zone 可用区
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("MemUsage",$param) and $param["MemUsage"] !== null) {
            $this->MemUsage = $param["MemUsage"];
        }

        if (array_key_exists("CpuNum",$param) and $param["CpuNum"] !== null) {
            $this->CpuNum = $param["CpuNum"];
        }

        if (array_key_exists("CpuUsage",$param) and $param["CpuUsage"] !== null) {
            $this->CpuUsage = $param["CpuUsage"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
