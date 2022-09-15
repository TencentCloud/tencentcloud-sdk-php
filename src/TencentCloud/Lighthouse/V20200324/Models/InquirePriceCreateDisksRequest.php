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
 * InquirePriceCreateDisks请求参数结构体
 *
 * @method integer getDiskSize() 获取云硬盘大小, 单位: GB。
 * @method void setDiskSize(integer $DiskSize) 设置云硬盘大小, 单位: GB。
 * @method string getDiskType() 获取云硬盘介质类型。取值: "CLOUD_PREMIUM"(高性能云盘), "CLOUD_SSD"(SSD云硬盘)。
 * @method void setDiskType(string $DiskType) 设置云硬盘介质类型。取值: "CLOUD_PREMIUM"(高性能云盘), "CLOUD_SSD"(SSD云硬盘)。
 * @method DiskChargePrepaid getDiskChargePrepaid() 获取新购云硬盘包年包月相关参数设置。
 * @method void setDiskChargePrepaid(DiskChargePrepaid $DiskChargePrepaid) 设置新购云硬盘包年包月相关参数设置。
 * @method integer getDiskCount() 获取云硬盘个数, 默认值: 1。
 * @method void setDiskCount(integer $DiskCount) 设置云硬盘个数, 默认值: 1。
 * @method integer getDiskBackupQuota() 获取指定云硬盘备份点配额，不传时默认为不带备份点配额。目前只支持不带或设置1个云硬盘备份点配额。
 * @method void setDiskBackupQuota(integer $DiskBackupQuota) 设置指定云硬盘备份点配额，不传时默认为不带备份点配额。目前只支持不带或设置1个云硬盘备份点配额。
 */
class InquirePriceCreateDisksRequest extends AbstractModel
{
    /**
     * @var integer 云硬盘大小, 单位: GB。
     */
    public $DiskSize;

    /**
     * @var string 云硬盘介质类型。取值: "CLOUD_PREMIUM"(高性能云盘), "CLOUD_SSD"(SSD云硬盘)。
     */
    public $DiskType;

    /**
     * @var DiskChargePrepaid 新购云硬盘包年包月相关参数设置。
     */
    public $DiskChargePrepaid;

    /**
     * @var integer 云硬盘个数, 默认值: 1。
     */
    public $DiskCount;

    /**
     * @var integer 指定云硬盘备份点配额，不传时默认为不带备份点配额。目前只支持不带或设置1个云硬盘备份点配额。
     */
    public $DiskBackupQuota;

    /**
     * @param integer $DiskSize 云硬盘大小, 单位: GB。
     * @param string $DiskType 云硬盘介质类型。取值: "CLOUD_PREMIUM"(高性能云盘), "CLOUD_SSD"(SSD云硬盘)。
     * @param DiskChargePrepaid $DiskChargePrepaid 新购云硬盘包年包月相关参数设置。
     * @param integer $DiskCount 云硬盘个数, 默认值: 1。
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
        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskChargePrepaid",$param) and $param["DiskChargePrepaid"] !== null) {
            $this->DiskChargePrepaid = new DiskChargePrepaid();
            $this->DiskChargePrepaid->deserialize($param["DiskChargePrepaid"]);
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }

        if (array_key_exists("DiskBackupQuota",$param) and $param["DiskBackupQuota"] !== null) {
            $this->DiskBackupQuota = $param["DiskBackupQuota"];
        }
    }
}
