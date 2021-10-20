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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于描述系统盘。
 *
 * @method string getDiskType() 获取硬盘类型。取值范围：
- LOCAL_BASIC：本地硬盘；
- CLOUD_PREMIUM：高性能云硬盘；
默认取值：CLOUD_BASIC。
 * @method void setDiskType(string $DiskType) 设置硬盘类型。取值范围：
- LOCAL_BASIC：本地硬盘；
- CLOUD_PREMIUM：高性能云硬盘；
默认取值：CLOUD_BASIC。
 * @method string getDiskId() 获取硬盘ID。此参数暂不可用。
 * @method void setDiskId(string $DiskId) 设置硬盘ID。此参数暂不可用。
 * @method integer getDiskSize() 获取硬盘容量大小。单位GB。
 * @method void setDiskSize(integer $DiskSize) 设置硬盘容量大小。单位GB。
 */
class SystemDisk extends AbstractModel
{
    /**
     * @var string 硬盘类型。取值范围：
- LOCAL_BASIC：本地硬盘；
- CLOUD_PREMIUM：高性能云硬盘；
默认取值：CLOUD_BASIC。
     */
    public $DiskType;

    /**
     * @var string 硬盘ID。此参数暂不可用。
     */
    public $DiskId;

    /**
     * @var integer 硬盘容量大小。单位GB。
     */
    public $DiskSize;

    /**
     * @param string $DiskType 硬盘类型。取值范围：
- LOCAL_BASIC：本地硬盘；
- CLOUD_PREMIUM：高性能云硬盘；
默认取值：CLOUD_BASIC。
     * @param string $DiskId 硬盘ID。此参数暂不可用。
     * @param integer $DiskSize 硬盘容量大小。单位GB。
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

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }
    }
}
