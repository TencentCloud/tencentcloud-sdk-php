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
 * ModifyDiskExtraPerformance请求参数结构体
 *
 * @method integer getThroughputPerformance() 获取额外购买的云硬盘性能值，单位MiB/s。
 * @method void setThroughputPerformance(integer $ThroughputPerformance) 设置额外购买的云硬盘性能值，单位MiB/s。
 * @method string getDiskId() 获取需要购买额外性能值的云硬盘ID，可通过[DescribeDisks](/document/product/362/16315)接口查询。仅大小超过460GiB的增强型SSD（CLOUD_HSSD）和极速型SSD（CLOUD_TSSD）云硬盘才支持购买额外性能。
 * @method void setDiskId(string $DiskId) 设置需要购买额外性能值的云硬盘ID，可通过[DescribeDisks](/document/product/362/16315)接口查询。仅大小超过460GiB的增强型SSD（CLOUD_HSSD）和极速型SSD（CLOUD_TSSD）云硬盘才支持购买额外性能。
 */
class ModifyDiskExtraPerformanceRequest extends AbstractModel
{
    /**
     * @var integer 额外购买的云硬盘性能值，单位MiB/s。
     */
    public $ThroughputPerformance;

    /**
     * @var string 需要购买额外性能值的云硬盘ID，可通过[DescribeDisks](/document/product/362/16315)接口查询。仅大小超过460GiB的增强型SSD（CLOUD_HSSD）和极速型SSD（CLOUD_TSSD）云硬盘才支持购买额外性能。
     */
    public $DiskId;

    /**
     * @param integer $ThroughputPerformance 额外购买的云硬盘性能值，单位MiB/s。
     * @param string $DiskId 需要购买额外性能值的云硬盘ID，可通过[DescribeDisks](/document/product/362/16315)接口查询。仅大小超过460GiB的增强型SSD（CLOUD_HSSD）和极速型SSD（CLOUD_TSSD）云硬盘才支持购买额外性能。
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
        if (array_key_exists("ThroughputPerformance",$param) and $param["ThroughputPerformance"] !== null) {
            $this->ThroughputPerformance = $param["ThroughputPerformance"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }
    }
}
