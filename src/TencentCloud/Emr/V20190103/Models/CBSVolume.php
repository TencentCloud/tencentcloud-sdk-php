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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cbs 存储卷
 *
 * @method string getVolumeName() 获取存储卷名称
 * @method void setVolumeName(string $VolumeName) 设置存储卷名称
 * @method string getDiskType() 获取 cbs 盘类型
 * @method void setDiskType(string $DiskType) 设置 cbs 盘类型
 * @method integer getDiskSize() 获取cbs 大小（GB）
 * @method void setDiskSize(integer $DiskSize) 设置cbs 大小（GB）
 * @method integer getDiskCount() 获取cbs 数量
 * @method void setDiskCount(integer $DiskCount) 设置cbs 数量
 */
class CBSVolume extends AbstractModel
{
    /**
     * @var string 存储卷名称
     */
    public $VolumeName;

    /**
     * @var string  cbs 盘类型
     */
    public $DiskType;

    /**
     * @var integer cbs 大小（GB）
     */
    public $DiskSize;

    /**
     * @var integer cbs 数量
     */
    public $DiskCount;

    /**
     * @param string $VolumeName 存储卷名称
     * @param string $DiskType  cbs 盘类型
     * @param integer $DiskSize cbs 大小（GB）
     * @param integer $DiskCount cbs 数量
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
        if (array_key_exists("VolumeName",$param) and $param["VolumeName"] !== null) {
            $this->VolumeName = $param["VolumeName"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }
    }
}
