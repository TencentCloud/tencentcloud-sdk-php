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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pod PVC存储方式描述
 *
 * @method integer getDiskSize() 获取磁盘大小，单位为GB。
 * @method void setDiskSize(integer $DiskSize) 设置磁盘大小，单位为GB。
 * @method string getDiskType() 获取磁盘类型。CLOUD_PREMIUM;CLOUD_SSD
 * @method void setDiskType(string $DiskType) 设置磁盘类型。CLOUD_PREMIUM;CLOUD_SSD
 * @method integer getDiskNum() 获取磁盘数量
 * @method void setDiskNum(integer $DiskNum) 设置磁盘数量
 * @method integer getExtraPerformance() 获取云盘额外性能
 * @method void setExtraPerformance(integer $ExtraPerformance) 设置云盘额外性能
 */
class PersistentVolumeContext extends AbstractModel
{
    /**
     * @var integer 磁盘大小，单位为GB。
     */
    public $DiskSize;

    /**
     * @var string 磁盘类型。CLOUD_PREMIUM;CLOUD_SSD
     */
    public $DiskType;

    /**
     * @var integer 磁盘数量
     */
    public $DiskNum;

    /**
     * @var integer 云盘额外性能
     */
    public $ExtraPerformance;

    /**
     * @param integer $DiskSize 磁盘大小，单位为GB。
     * @param string $DiskType 磁盘类型。CLOUD_PREMIUM;CLOUD_SSD
     * @param integer $DiskNum 磁盘数量
     * @param integer $ExtraPerformance 云盘额外性能
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
        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskNum",$param) and $param["DiskNum"] !== null) {
            $this->DiskNum = $param["DiskNum"];
        }

        if (array_key_exists("ExtraPerformance",$param) and $param["ExtraPerformance"] !== null) {
            $this->ExtraPerformance = $param["ExtraPerformance"];
        }
    }
}
