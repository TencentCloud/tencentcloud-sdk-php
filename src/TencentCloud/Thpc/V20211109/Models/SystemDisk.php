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
namespace TencentCloud\Thpc\V20211109\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了操作系统所在块设备即系统盘的信息
 *
 * @method string getDiskType() 获取系统盘类型。系统盘类型限制详见存储概述。取值范围：
LOCAL_BASIC：本地硬盘
LOCAL_SSD：本地SSD硬盘
CLOUD_BASIC：普通云硬盘
CLOUD_SSD：SSD云硬盘
CLOUD_PREMIUM：高性能云硬盘

默认取值：当前有库存的硬盘类型。
 * @method void setDiskType(string $DiskType) 设置系统盘类型。系统盘类型限制详见存储概述。取值范围：
LOCAL_BASIC：本地硬盘
LOCAL_SSD：本地SSD硬盘
CLOUD_BASIC：普通云硬盘
CLOUD_SSD：SSD云硬盘
CLOUD_PREMIUM：高性能云硬盘

默认取值：当前有库存的硬盘类型。
 * @method integer getDiskSize() 获取系统盘大小，单位：GB。默认值为 50
 * @method void setDiskSize(integer $DiskSize) 设置系统盘大小，单位：GB。默认值为 50
 */
class SystemDisk extends AbstractModel
{
    /**
     * @var string 系统盘类型。系统盘类型限制详见存储概述。取值范围：
LOCAL_BASIC：本地硬盘
LOCAL_SSD：本地SSD硬盘
CLOUD_BASIC：普通云硬盘
CLOUD_SSD：SSD云硬盘
CLOUD_PREMIUM：高性能云硬盘

默认取值：当前有库存的硬盘类型。
     */
    public $DiskType;

    /**
     * @var integer 系统盘大小，单位：GB。默认值为 50
     */
    public $DiskSize;

    /**
     * @param string $DiskType 系统盘类型。系统盘类型限制详见存储概述。取值范围：
LOCAL_BASIC：本地硬盘
LOCAL_SSD：本地SSD硬盘
CLOUD_BASIC：普通云硬盘
CLOUD_SSD：SSD云硬盘
CLOUD_PREMIUM：高性能云硬盘

默认取值：当前有库存的硬盘类型。
     * @param integer $DiskSize 系统盘大小，单位：GB。默认值为 50
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

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }
    }
}
