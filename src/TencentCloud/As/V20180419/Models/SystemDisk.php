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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 启动配置的系统盘配置信息。若不指定该参数，则按照系统默认值进行分配。
 *
 * @method string getDiskType() 获取系统盘类型。系统盘类型限制详见[云硬盘类型](https://cloud.tencent.com/document/product/362/2353)。取值范围
<li>LOCAL_BASIC：本地硬盘</li>
<li>LOCAL_SSD：本地SSD硬盘</li>
<li>CLOUD_BASIC：普通云硬盘</li>
<li>CLOUD_PREMIUM：高性能云硬盘</li>
<li>CLOUD_SSD：SSD云硬盘</li>
<li>CLOUD_BSSD：通用型SSD云硬盘</li>
<li>CLOUD_HSSD：增强型SSD云硬盘</li>
<li>CLOUD_TSSD：极速型SSD云硬盘</li>
<li>默认取值：CLOUD_PREMIUM。</li>
 * @method void setDiskType(string $DiskType) 设置系统盘类型。系统盘类型限制详见[云硬盘类型](https://cloud.tencent.com/document/product/362/2353)。取值范围
<li>LOCAL_BASIC：本地硬盘</li>
<li>LOCAL_SSD：本地SSD硬盘</li>
<li>CLOUD_BASIC：普通云硬盘</li>
<li>CLOUD_PREMIUM：高性能云硬盘</li>
<li>CLOUD_SSD：SSD云硬盘</li>
<li>CLOUD_BSSD：通用型SSD云硬盘</li>
<li>CLOUD_HSSD：增强型SSD云硬盘</li>
<li>CLOUD_TSSD：极速型SSD云硬盘</li>
<li>默认取值：CLOUD_PREMIUM。</li>
 * @method integer getDiskSize() 获取系统盘大小，单位：GB。默认值为 50
 * @method void setDiskSize(integer $DiskSize) 设置系统盘大小，单位：GB。默认值为 50
 */
class SystemDisk extends AbstractModel
{
    /**
     * @var string 系统盘类型。系统盘类型限制详见[云硬盘类型](https://cloud.tencent.com/document/product/362/2353)。取值范围
<li>LOCAL_BASIC：本地硬盘</li>
<li>LOCAL_SSD：本地SSD硬盘</li>
<li>CLOUD_BASIC：普通云硬盘</li>
<li>CLOUD_PREMIUM：高性能云硬盘</li>
<li>CLOUD_SSD：SSD云硬盘</li>
<li>CLOUD_BSSD：通用型SSD云硬盘</li>
<li>CLOUD_HSSD：增强型SSD云硬盘</li>
<li>CLOUD_TSSD：极速型SSD云硬盘</li>
<li>默认取值：CLOUD_PREMIUM。</li>
     */
    public $DiskType;

    /**
     * @var integer 系统盘大小，单位：GB。默认值为 50
     */
    public $DiskSize;

    /**
     * @param string $DiskType 系统盘类型。系统盘类型限制详见[云硬盘类型](https://cloud.tencent.com/document/product/362/2353)。取值范围
<li>LOCAL_BASIC：本地硬盘</li>
<li>LOCAL_SSD：本地SSD硬盘</li>
<li>CLOUD_BASIC：普通云硬盘</li>
<li>CLOUD_PREMIUM：高性能云硬盘</li>
<li>CLOUD_SSD：SSD云硬盘</li>
<li>CLOUD_BSSD：通用型SSD云硬盘</li>
<li>CLOUD_HSSD：增强型SSD云硬盘</li>
<li>CLOUD_TSSD：极速型SSD云硬盘</li>
<li>默认取值：CLOUD_PREMIUM。</li>
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
