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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDiskDiscount请求参数结构体
 *
 * @method string getDiskType() 获取云硬盘类型, 取值: "CLOUD_PREMIUM"。
 * @method void setDiskType(string $DiskType) 设置云硬盘类型, 取值: "CLOUD_PREMIUM"。
 * @method integer getDiskSize() 获取云硬盘大小。
 * @method void setDiskSize(integer $DiskSize) 设置云硬盘大小。
 * @method integer getDiskBackupQuota() 获取指定云硬盘备份点配额，不传时默认为不带备份点配额。目前只支持不带或设置1个云硬盘备份点配额。
 * @method void setDiskBackupQuota(integer $DiskBackupQuota) 设置指定云硬盘备份点配额，不传时默认为不带备份点配额。目前只支持不带或设置1个云硬盘备份点配额。
 */
class DescribeDiskDiscountRequest extends AbstractModel
{
    /**
     * @var string 云硬盘类型, 取值: "CLOUD_PREMIUM"。
     */
    public $DiskType;

    /**
     * @var integer 云硬盘大小。
     */
    public $DiskSize;

    /**
     * @var integer 指定云硬盘备份点配额，不传时默认为不带备份点配额。目前只支持不带或设置1个云硬盘备份点配额。
     */
    public $DiskBackupQuota;

    /**
     * @param string $DiskType 云硬盘类型, 取值: "CLOUD_PREMIUM"。
     * @param integer $DiskSize 云硬盘大小。
     * @param integer $DiskBackupQuota 指定云硬盘备份点配额，不传时默认为不带备份点配额。目前只支持不带或设置1个云硬盘备份点配额。
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

        if (array_key_exists("DiskBackupQuota",$param) and $param["DiskBackupQuota"] !== null) {
            $this->DiskBackupQuota = $param["DiskBackupQuota"];
        }
    }
}
