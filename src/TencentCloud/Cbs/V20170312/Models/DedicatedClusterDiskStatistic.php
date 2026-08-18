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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CDC 独享集群云硬盘统计信息。
 *
 * @method string getDiskType() 获取<p>硬盘介质类型。取值范围：<br>&lt;li&gt;CLOUD_BASIC：表示普通云硬盘<br>&lt;li&gt;CLOUD_PREMIUM：表示高性能云硬盘<br>&lt;li&gt;CLOUD_SSD：表示SSD云硬盘<br>&lt;li&gt;CLOUD_HSSD：表示增强型SSD云硬盘<br>&lt;li&gt;CLOUD_TSSD：表示极速型SSD云硬盘。</p>
 * @method void setDiskType(string $DiskType) 设置<p>硬盘介质类型。取值范围：<br>&lt;li&gt;CLOUD_BASIC：表示普通云硬盘<br>&lt;li&gt;CLOUD_PREMIUM：表示高性能云硬盘<br>&lt;li&gt;CLOUD_SSD：表示SSD云硬盘<br>&lt;li&gt;CLOUD_HSSD：表示增强型SSD云硬盘<br>&lt;li&gt;CLOUD_TSSD：表示极速型SSD云硬盘。</p>
 * @method integer getTotalDiskSize() 获取<p>云硬盘总容量。</p><p>单位：GiB</p>
 * @method void setTotalDiskSize(integer $TotalDiskSize) 设置<p>云硬盘总容量。</p><p>单位：GiB</p>
 * @method integer getUsedDiskSize() 获取<p>已使用的云硬盘容量。</p><p>单位：GiB</p>
 * @method void setUsedDiskSize(integer $UsedDiskSize) 设置<p>已使用的云硬盘容量。</p><p>单位：GiB</p>
 * @method integer getAvailableDiskSize() 获取<p>可用的云硬盘容量。</p><p>单位：GiB</p>
 * @method void setAvailableDiskSize(integer $AvailableDiskSize) 设置<p>可用的云硬盘容量。</p><p>单位：GiB</p>
 */
class DedicatedClusterDiskStatistic extends AbstractModel
{
    /**
     * @var string <p>硬盘介质类型。取值范围：<br>&lt;li&gt;CLOUD_BASIC：表示普通云硬盘<br>&lt;li&gt;CLOUD_PREMIUM：表示高性能云硬盘<br>&lt;li&gt;CLOUD_SSD：表示SSD云硬盘<br>&lt;li&gt;CLOUD_HSSD：表示增强型SSD云硬盘<br>&lt;li&gt;CLOUD_TSSD：表示极速型SSD云硬盘。</p>
     */
    public $DiskType;

    /**
     * @var integer <p>云硬盘总容量。</p><p>单位：GiB</p>
     */
    public $TotalDiskSize;

    /**
     * @var integer <p>已使用的云硬盘容量。</p><p>单位：GiB</p>
     */
    public $UsedDiskSize;

    /**
     * @var integer <p>可用的云硬盘容量。</p><p>单位：GiB</p>
     */
    public $AvailableDiskSize;

    /**
     * @param string $DiskType <p>硬盘介质类型。取值范围：<br>&lt;li&gt;CLOUD_BASIC：表示普通云硬盘<br>&lt;li&gt;CLOUD_PREMIUM：表示高性能云硬盘<br>&lt;li&gt;CLOUD_SSD：表示SSD云硬盘<br>&lt;li&gt;CLOUD_HSSD：表示增强型SSD云硬盘<br>&lt;li&gt;CLOUD_TSSD：表示极速型SSD云硬盘。</p>
     * @param integer $TotalDiskSize <p>云硬盘总容量。</p><p>单位：GiB</p>
     * @param integer $UsedDiskSize <p>已使用的云硬盘容量。</p><p>单位：GiB</p>
     * @param integer $AvailableDiskSize <p>可用的云硬盘容量。</p><p>单位：GiB</p>
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
        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("TotalDiskSize",$param) and $param["TotalDiskSize"] !== null) {
            $this->TotalDiskSize = $param["TotalDiskSize"];
        }

        if (array_key_exists("UsedDiskSize",$param) and $param["UsedDiskSize"] !== null) {
            $this->UsedDiskSize = $param["UsedDiskSize"];
        }

        if (array_key_exists("AvailableDiskSize",$param) and $param["AvailableDiskSize"] !== null) {
            $this->AvailableDiskSize = $param["AvailableDiskSize"];
        }
    }
}
