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
 * 磁盘规格描述
 *
 * @method string getDiskType() 获取磁盘类型，例如“CLOUD_SSD", "LOCAL_SSD"等
 * @method void setDiskType(string $DiskType) 设置磁盘类型，例如“CLOUD_SSD", "LOCAL_SSD"等
 * @method string getDiskDesc() 获取磁盘类型说明，例如"云SSD", "本地SSD"等
 * @method void setDiskDesc(string $DiskDesc) 设置磁盘类型说明，例如"云SSD", "本地SSD"等
 * @method integer getMinDiskSize() 获取磁盘最小规格大小，单位G
 * @method void setMinDiskSize(integer $MinDiskSize) 设置磁盘最小规格大小，单位G
 * @method integer getMaxDiskSize() 获取磁盘最大规格大小，单位G
 * @method void setMaxDiskSize(integer $MaxDiskSize) 设置磁盘最大规格大小，单位G
 * @method integer getDiskCount() 获取磁盘数目
 * @method void setDiskCount(integer $DiskCount) 设置磁盘数目
 */
class DiskSpec extends AbstractModel
{
    /**
     * @var string 磁盘类型，例如“CLOUD_SSD", "LOCAL_SSD"等
     */
    public $DiskType;

    /**
     * @var string 磁盘类型说明，例如"云SSD", "本地SSD"等
     */
    public $DiskDesc;

    /**
     * @var integer 磁盘最小规格大小，单位G
     */
    public $MinDiskSize;

    /**
     * @var integer 磁盘最大规格大小，单位G
     */
    public $MaxDiskSize;

    /**
     * @var integer 磁盘数目
     */
    public $DiskCount;

    /**
     * @param string $DiskType 磁盘类型，例如“CLOUD_SSD", "LOCAL_SSD"等
     * @param string $DiskDesc 磁盘类型说明，例如"云SSD", "本地SSD"等
     * @param integer $MinDiskSize 磁盘最小规格大小，单位G
     * @param integer $MaxDiskSize 磁盘最大规格大小，单位G
     * @param integer $DiskCount 磁盘数目
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

        if (array_key_exists("DiskDesc",$param) and $param["DiskDesc"] !== null) {
            $this->DiskDesc = $param["DiskDesc"];
        }

        if (array_key_exists("MinDiskSize",$param) and $param["MinDiskSize"] !== null) {
            $this->MinDiskSize = $param["MinDiskSize"];
        }

        if (array_key_exists("MaxDiskSize",$param) and $param["MaxDiskSize"] !== null) {
            $this->MaxDiskSize = $param["MaxDiskSize"];
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }
    }
}
