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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了数据盘的信息
 *
 * @method integer getDiskSize() 获取数据盘大小。单位GB。
 * @method void setDiskSize(integer $DiskSize) 设置数据盘大小。单位GB。
 * @method string getDiskType() 获取数据盘类型，取值范围：
- LOCAL_BASIC：本地硬盘
- CLOUD_PREMIUM：高性能云硬盘

默认取值： LOCAL_BASIC。
 * @method void setDiskType(string $DiskType) 设置数据盘类型，取值范围：
- LOCAL_BASIC：本地硬盘
- CLOUD_PREMIUM：高性能云硬盘

默认取值： LOCAL_BASIC。
 */
class DataDisk extends AbstractModel
{
    /**
     * @var integer 数据盘大小。单位GB。
     */
    public $DiskSize;

    /**
     * @var string 数据盘类型，取值范围：
- LOCAL_BASIC：本地硬盘
- CLOUD_PREMIUM：高性能云硬盘

默认取值： LOCAL_BASIC。
     */
    public $DiskType;

    /**
     * @param integer $DiskSize 数据盘大小。单位GB。
     * @param string $DiskType 数据盘类型，取值范围：
- LOCAL_BASIC：本地硬盘
- CLOUD_PREMIUM：高性能云硬盘

默认取值： LOCAL_BASIC。
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
    }
}
