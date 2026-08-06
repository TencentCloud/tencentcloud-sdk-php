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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Kibana视图数据
 *
 * @method string getIp() 获取<p>Kibana节点IP</p>
 * @method void setIp(string $Ip) 设置<p>Kibana节点IP</p>
 * @method integer getDiskSize() 获取<p>节点总磁盘大小</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>节点总磁盘大小</p>
 * @method float getDiskUsage() 获取<p>磁盘使用率</p>
 * @method void setDiskUsage(float $DiskUsage) 设置<p>磁盘使用率</p>
 * @method integer getMemSize() 获取<p>节点内存大小</p>
 * @method void setMemSize(integer $MemSize) 设置<p>节点内存大小</p>
 * @method float getMemUsage() 获取<p>内存使用率</p>
 * @method void setMemUsage(float $MemUsage) 设置<p>内存使用率</p>
 * @method integer getCpuNum() 获取<p>节点cpu个数</p>
 * @method void setCpuNum(integer $CpuNum) 设置<p>节点cpu个数</p>
 * @method float getCpuUsage() 获取<p>cpu使用率</p>
 * @method void setCpuUsage(float $CpuUsage) 设置<p>cpu使用率</p>
 * @method string getZone() 获取<p>可用区</p>
 * @method void setZone(string $Zone) 设置<p>可用区</p>
 * @method string getNodeId() 获取<p>ts-0noqayxu-az6-hot-03222010-0</p>
 * @method void setNodeId(string $NodeId) 设置<p>ts-0noqayxu-az6-hot-03222010-0</p>
 * @method string getUserIp() 获取<p>客户侧Ip信息</p>
 * @method void setUserIp(string $UserIp) 设置<p>客户侧Ip信息</p>
 */
class KibanaView extends AbstractModel
{
    /**
     * @var string <p>Kibana节点IP</p>
     */
    public $Ip;

    /**
     * @var integer <p>节点总磁盘大小</p>
     */
    public $DiskSize;

    /**
     * @var float <p>磁盘使用率</p>
     */
    public $DiskUsage;

    /**
     * @var integer <p>节点内存大小</p>
     */
    public $MemSize;

    /**
     * @var float <p>内存使用率</p>
     */
    public $MemUsage;

    /**
     * @var integer <p>节点cpu个数</p>
     */
    public $CpuNum;

    /**
     * @var float <p>cpu使用率</p>
     */
    public $CpuUsage;

    /**
     * @var string <p>可用区</p>
     */
    public $Zone;

    /**
     * @var string <p>ts-0noqayxu-az6-hot-03222010-0</p>
     */
    public $NodeId;

    /**
     * @var string <p>客户侧Ip信息</p>
     */
    public $UserIp;

    /**
     * @param string $Ip <p>Kibana节点IP</p>
     * @param integer $DiskSize <p>节点总磁盘大小</p>
     * @param float $DiskUsage <p>磁盘使用率</p>
     * @param integer $MemSize <p>节点内存大小</p>
     * @param float $MemUsage <p>内存使用率</p>
     * @param integer $CpuNum <p>节点cpu个数</p>
     * @param float $CpuUsage <p>cpu使用率</p>
     * @param string $Zone <p>可用区</p>
     * @param string $NodeId <p>ts-0noqayxu-az6-hot-03222010-0</p>
     * @param string $UserIp <p>客户侧Ip信息</p>
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

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("UserIp",$param) and $param["UserIp"] !== null) {
            $this->UserIp = $param["UserIp"];
        }
    }
}
