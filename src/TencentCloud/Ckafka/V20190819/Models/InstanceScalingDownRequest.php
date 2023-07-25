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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InstanceScalingDown请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method integer getUpgradeStrategy() 获取缩容模式  1:稳定变配 
2.高速变配
 * @method void setUpgradeStrategy(integer $UpgradeStrategy) 设置缩容模式  1:稳定变配 
2.高速变配
 * @method integer getDiskSize() 获取磁盘大小 单位 GB
 * @method void setDiskSize(integer $DiskSize) 设置磁盘大小 单位 GB
 * @method integer getBandWidth() 获取峰值带宽 单位 MB/s
 * @method void setBandWidth(integer $BandWidth) 设置峰值带宽 单位 MB/s
 * @method integer getPartition() 获取分区上限
 * @method void setPartition(integer $Partition) 设置分区上限
 */
class InstanceScalingDownRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var integer 缩容模式  1:稳定变配 
2.高速变配
     */
    public $UpgradeStrategy;

    /**
     * @var integer 磁盘大小 单位 GB
     */
    public $DiskSize;

    /**
     * @var integer 峰值带宽 单位 MB/s
     */
    public $BandWidth;

    /**
     * @var integer 分区上限
     */
    public $Partition;

    /**
     * @param string $InstanceId 实例id
     * @param integer $UpgradeStrategy 缩容模式  1:稳定变配 
2.高速变配
     * @param integer $DiskSize 磁盘大小 单位 GB
     * @param integer $BandWidth 峰值带宽 单位 MB/s
     * @param integer $Partition 分区上限
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

        if (array_key_exists("UpgradeStrategy",$param) and $param["UpgradeStrategy"] !== null) {
            $this->UpgradeStrategy = $param["UpgradeStrategy"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("BandWidth",$param) and $param["BandWidth"] !== null) {
            $this->BandWidth = $param["BandWidth"];
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }
    }
}
