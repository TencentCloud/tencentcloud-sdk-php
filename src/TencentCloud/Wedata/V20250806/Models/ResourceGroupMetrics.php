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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源组监控指标
 *
 * @method integer getCpuNum() 获取资源组规格相关：cpu个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpuNum(integer $CpuNum) 设置资源组规格相关：cpu个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDiskVolume() 获取资源组规格相关：磁盘规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskVolume(integer $DiskVolume) 设置资源组规格相关：磁盘规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemSize() 获取资源组规格相关：内存大小，单位:G
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemSize(integer $MemSize) 设置资源组规格相关：内存大小，单位:G
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLifeCycle() 获取资源组生命周期, 单位：天
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLifeCycle(integer $LifeCycle) 设置资源组生命周期, 单位：天
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaximumConcurrency() 获取资源组规格相关：最高并发
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaximumConcurrency(integer $MaximumConcurrency) 设置资源组规格相关：最高并发
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取资源组状态

- 0 --- 初始化中
- 1 --- 运行中
- 2 --- 运行异常
- 3 --- 释放中
- 4 --- 已释放
- 5 --- 创建中
- 6 --- 创建失败
- 7 --- 更新中
- 8 --- 更新失败
- 9 --- 已到期
- 10 --- 释放失败
- 11 --- 使用中
- 12 --- 未使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置资源组状态

- 0 --- 初始化中
- 1 --- 运行中
- 2 --- 运行异常
- 3 --- 释放中
- 4 --- 已释放
- 5 --- 创建中
- 6 --- 创建失败
- 7 --- 更新中
- 8 --- 更新失败
- 9 --- 已到期
- 10 --- 释放失败
- 11 --- 使用中
- 12 --- 未使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMetricSnapshots() 获取指标详情
 * @method void setMetricSnapshots(array $MetricSnapshots) 设置指标详情
 */
class ResourceGroupMetrics extends AbstractModel
{
    /**
     * @var integer 资源组规格相关：cpu个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CpuNum;

    /**
     * @var integer 资源组规格相关：磁盘规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskVolume;

    /**
     * @var integer 资源组规格相关：内存大小，单位:G
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemSize;

    /**
     * @var integer 资源组生命周期, 单位：天
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LifeCycle;

    /**
     * @var integer 资源组规格相关：最高并发
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaximumConcurrency;

    /**
     * @var integer 资源组状态

- 0 --- 初始化中
- 1 --- 运行中
- 2 --- 运行异常
- 3 --- 释放中
- 4 --- 已释放
- 5 --- 创建中
- 6 --- 创建失败
- 7 --- 更新中
- 8 --- 更新失败
- 9 --- 已到期
- 10 --- 释放失败
- 11 --- 使用中
- 12 --- 未使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var array 指标详情
     */
    public $MetricSnapshots;

    /**
     * @param integer $CpuNum 资源组规格相关：cpu个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DiskVolume 资源组规格相关：磁盘规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MemSize 资源组规格相关：内存大小，单位:G
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LifeCycle 资源组生命周期, 单位：天
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaximumConcurrency 资源组规格相关：最高并发
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 资源组状态

- 0 --- 初始化中
- 1 --- 运行中
- 2 --- 运行异常
- 3 --- 释放中
- 4 --- 已释放
- 5 --- 创建中
- 6 --- 创建失败
- 7 --- 更新中
- 8 --- 更新失败
- 9 --- 已到期
- 10 --- 释放失败
- 11 --- 使用中
- 12 --- 未使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MetricSnapshots 指标详情
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
        if (array_key_exists("CpuNum",$param) and $param["CpuNum"] !== null) {
            $this->CpuNum = $param["CpuNum"];
        }

        if (array_key_exists("DiskVolume",$param) and $param["DiskVolume"] !== null) {
            $this->DiskVolume = $param["DiskVolume"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("LifeCycle",$param) and $param["LifeCycle"] !== null) {
            $this->LifeCycle = $param["LifeCycle"];
        }

        if (array_key_exists("MaximumConcurrency",$param) and $param["MaximumConcurrency"] !== null) {
            $this->MaximumConcurrency = $param["MaximumConcurrency"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MetricSnapshots",$param) and $param["MetricSnapshots"] !== null) {
            $this->MetricSnapshots = [];
            foreach ($param["MetricSnapshots"] as $key => $value){
                $obj = new MetricData();
                $obj->deserialize($value);
                array_push($this->MetricSnapshots, $obj);
            }
        }
    }
}
