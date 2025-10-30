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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 磁盘规格
 *
 * @method integer getDiskCount() 获取磁盘个数
 * @method void setDiskCount(integer $DiskCount) 设置磁盘个数
 * @method integer getMaxDiskSize() 获取磁盘最大值
 * @method void setMaxDiskSize(integer $MaxDiskSize) 设置磁盘最大值
 * @method integer getMinDiskSize() 获取磁盘最小值
 * @method void setMinDiskSize(integer $MinDiskSize) 设置磁盘最小值
 * @method string getDiskType() 获取磁盘类型
 * @method void setDiskType(string $DiskType) 设置磁盘类型
 * @method string getDiskDesc() 获取磁盘类型详情
 * @method void setDiskDesc(string $DiskDesc) 设置磁盘类型详情
 * @method string getCvmClass() 获取机型类型
 * @method void setCvmClass(string $CvmClass) 设置机型类型
 */
class DiskSpecPlus extends AbstractModel
{
    /**
     * @var integer 磁盘个数
     */
    public $DiskCount;

    /**
     * @var integer 磁盘最大值
     */
    public $MaxDiskSize;

    /**
     * @var integer 磁盘最小值
     */
    public $MinDiskSize;

    /**
     * @var string 磁盘类型
     */
    public $DiskType;

    /**
     * @var string 磁盘类型详情
     */
    public $DiskDesc;

    /**
     * @var string 机型类型
     */
    public $CvmClass;

    /**
     * @param integer $DiskCount 磁盘个数
     * @param integer $MaxDiskSize 磁盘最大值
     * @param integer $MinDiskSize 磁盘最小值
     * @param string $DiskType 磁盘类型
     * @param string $DiskDesc 磁盘类型详情
     * @param string $CvmClass 机型类型
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
        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }

        if (array_key_exists("MaxDiskSize",$param) and $param["MaxDiskSize"] !== null) {
            $this->MaxDiskSize = $param["MaxDiskSize"];
        }

        if (array_key_exists("MinDiskSize",$param) and $param["MinDiskSize"] !== null) {
            $this->MinDiskSize = $param["MinDiskSize"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskDesc",$param) and $param["DiskDesc"] !== null) {
            $this->DiskDesc = $param["DiskDesc"];
        }

        if (array_key_exists("CvmClass",$param) and $param["CvmClass"] !== null) {
            $this->CvmClass = $param["CvmClass"];
        }
    }
}
