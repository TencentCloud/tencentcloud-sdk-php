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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 弹性伸缩策略
 *
 * @method integer getMinReplicas() 获取最小实例数（可以不传）
 * @method void setMinReplicas(integer $MinReplicas) 设置最小实例数（可以不传）
 * @method integer getMaxReplicas() 获取最大实例数（可以不传）
 * @method void setMaxReplicas(integer $MaxReplicas) 设置最大实例数（可以不传）
 * @method string getMetrics() 获取指标度量
CPU（CPU使用率，%）
MEMORY（内存使用率，%）
CPU_CORE_USED（CPU使用量，core）
MEMORY_SIZE_USED(内存使用量，MiB)
NETWORK_BANDWIDTH_RECEIVE(网络入带宽，MBps)
NETWORK_BANDWIDTH_TRANSMIT(网络出带宽，MBps)
NETWORK_TRAFFIC_RECEIVE(网络入流量，MiB/s)
NETWORK_TRAFFIC_TRANSMIT(网络出流量，MiB/s)
NETWORK_PACKETS_RECEIVE(网络入包量，Count/s)
NETWORK_PACKETS_TRANSMIT(网络出包量，Count/s)
FS_IOPS_WRITE(磁盘写次数，Count/s)
FS_IOPS_READ(磁盘读次数，Count/s)
FS_SIZE_WRITE(磁盘写大小，MiB/s)
FS_SIZE_READ(磁盘读大小，MiB/s)
 * @method void setMetrics(string $Metrics) 设置指标度量
CPU（CPU使用率，%）
MEMORY（内存使用率，%）
CPU_CORE_USED（CPU使用量，core）
MEMORY_SIZE_USED(内存使用量，MiB)
NETWORK_BANDWIDTH_RECEIVE(网络入带宽，MBps)
NETWORK_BANDWIDTH_TRANSMIT(网络出带宽，MBps)
NETWORK_TRAFFIC_RECEIVE(网络入流量，MiB/s)
NETWORK_TRAFFIC_TRANSMIT(网络出流量，MiB/s)
NETWORK_PACKETS_RECEIVE(网络入包量，Count/s)
NETWORK_PACKETS_TRANSMIT(网络出包量，Count/s)
FS_IOPS_WRITE(磁盘写次数，Count/s)
FS_IOPS_READ(磁盘读次数，Count/s)
FS_SIZE_WRITE(磁盘写大小，MiB/s)
FS_SIZE_READ(磁盘读大小，MiB/s)
 * @method integer getThreshold() 获取阈值（整数）
 * @method void setThreshold(integer $Threshold) 设置阈值（整数）
 * @method boolean getEnabled() 获取是否启用
 * @method void setEnabled(boolean $Enabled) 设置是否启用
 * @method float getDoubleThreshold() 获取阈值（小数，优先使用）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDoubleThreshold(float $DoubleThreshold) 设置阈值（小数，优先使用）
注意：此字段可能返回 null，表示取不到有效值。
 */
class HorizontalAutoscaler extends AbstractModel
{
    /**
     * @var integer 最小实例数（可以不传）
     */
    public $MinReplicas;

    /**
     * @var integer 最大实例数（可以不传）
     */
    public $MaxReplicas;

    /**
     * @var string 指标度量
CPU（CPU使用率，%）
MEMORY（内存使用率，%）
CPU_CORE_USED（CPU使用量，core）
MEMORY_SIZE_USED(内存使用量，MiB)
NETWORK_BANDWIDTH_RECEIVE(网络入带宽，MBps)
NETWORK_BANDWIDTH_TRANSMIT(网络出带宽，MBps)
NETWORK_TRAFFIC_RECEIVE(网络入流量，MiB/s)
NETWORK_TRAFFIC_TRANSMIT(网络出流量，MiB/s)
NETWORK_PACKETS_RECEIVE(网络入包量，Count/s)
NETWORK_PACKETS_TRANSMIT(网络出包量，Count/s)
FS_IOPS_WRITE(磁盘写次数，Count/s)
FS_IOPS_READ(磁盘读次数，Count/s)
FS_SIZE_WRITE(磁盘写大小，MiB/s)
FS_SIZE_READ(磁盘读大小，MiB/s)
     */
    public $Metrics;

    /**
     * @var integer 阈值（整数）
     */
    public $Threshold;

    /**
     * @var boolean 是否启用
     */
    public $Enabled;

    /**
     * @var float 阈值（小数，优先使用）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DoubleThreshold;

    /**
     * @param integer $MinReplicas 最小实例数（可以不传）
     * @param integer $MaxReplicas 最大实例数（可以不传）
     * @param string $Metrics 指标度量
CPU（CPU使用率，%）
MEMORY（内存使用率，%）
CPU_CORE_USED（CPU使用量，core）
MEMORY_SIZE_USED(内存使用量，MiB)
NETWORK_BANDWIDTH_RECEIVE(网络入带宽，MBps)
NETWORK_BANDWIDTH_TRANSMIT(网络出带宽，MBps)
NETWORK_TRAFFIC_RECEIVE(网络入流量，MiB/s)
NETWORK_TRAFFIC_TRANSMIT(网络出流量，MiB/s)
NETWORK_PACKETS_RECEIVE(网络入包量，Count/s)
NETWORK_PACKETS_TRANSMIT(网络出包量，Count/s)
FS_IOPS_WRITE(磁盘写次数，Count/s)
FS_IOPS_READ(磁盘读次数，Count/s)
FS_SIZE_WRITE(磁盘写大小，MiB/s)
FS_SIZE_READ(磁盘读大小，MiB/s)
     * @param integer $Threshold 阈值（整数）
     * @param boolean $Enabled 是否启用
     * @param float $DoubleThreshold 阈值（小数，优先使用）
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("MinReplicas",$param) and $param["MinReplicas"] !== null) {
            $this->MinReplicas = $param["MinReplicas"];
        }

        if (array_key_exists("MaxReplicas",$param) and $param["MaxReplicas"] !== null) {
            $this->MaxReplicas = $param["MaxReplicas"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = $param["Metrics"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("DoubleThreshold",$param) and $param["DoubleThreshold"] !== null) {
            $this->DoubleThreshold = $param["DoubleThreshold"];
        }
    }
}
