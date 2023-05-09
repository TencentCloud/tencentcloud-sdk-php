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
 * CreateDisks请求参数结构体
 *
 * @method string getZone() 获取可用区。可通过[DescribeZones](https://cloud.tencent.com/document/product/1207/57513)返回值中的Zone获取。
 * @method void setZone(string $Zone) 设置可用区。可通过[DescribeZones](https://cloud.tencent.com/document/product/1207/57513)返回值中的Zone获取。
 * @method integer getDiskSize() 获取云硬盘大小, 单位: GB。
 * @method void setDiskSize(integer $DiskSize) 设置云硬盘大小, 单位: GB。
 * @method string getDiskType() 获取云硬盘介质类型。取值: "CLOUD_PREMIUM"(高性能云盘), "CLOUD_SSD"(SSD云硬盘)。
 * @method void setDiskType(string $DiskType) 设置云硬盘介质类型。取值: "CLOUD_PREMIUM"(高性能云盘), "CLOUD_SSD"(SSD云硬盘)。
 * @method DiskChargePrepaid getDiskChargePrepaid() 获取云硬盘包年包月相关参数设置。
 * @method void setDiskChargePrepaid(DiskChargePrepaid $DiskChargePrepaid) 设置云硬盘包年包月相关参数设置。
 * @method string getDiskName() 获取云硬盘名称。最大长度60。
 * @method void setDiskName(string $DiskName) 设置云硬盘名称。最大长度60。
 * @method integer getDiskCount() 获取云硬盘个数。取值范围: [1, 30]。默认值: 1。
 * @method void setDiskCount(integer $DiskCount) 设置云硬盘个数。取值范围: [1, 30]。默认值: 1。
 * @method integer getDiskBackupQuota() 获取指定云硬盘备份点配额，不传时默认为不带备份点配额。目前只支持不带或设置1个云硬盘备份点配额。
 * @method void setDiskBackupQuota(integer $DiskBackupQuota) 设置指定云硬盘备份点配额，不传时默认为不带备份点配额。目前只支持不带或设置1个云硬盘备份点配额。
 * @method boolean getAutoVoucher() 获取是否自动使用代金券。默认不使用。
 * @method void setAutoVoucher(boolean $AutoVoucher) 设置是否自动使用代金券。默认不使用。
 * @method AutoMountConfiguration getAutoMountConfiguration() 获取自动挂载并初始化数据盘。
 * @method void setAutoMountConfiguration(AutoMountConfiguration $AutoMountConfiguration) 设置自动挂载并初始化数据盘。
 */
class CreateDisksRequest extends AbstractModel
{
    /**
     * @var string 可用区。可通过[DescribeZones](https://cloud.tencent.com/document/product/1207/57513)返回值中的Zone获取。
     */
    public $Zone;

    /**
     * @var integer 云硬盘大小, 单位: GB。
     */
    public $DiskSize;

    /**
     * @var string 云硬盘介质类型。取值: "CLOUD_PREMIUM"(高性能云盘), "CLOUD_SSD"(SSD云硬盘)。
     */
    public $DiskType;

    /**
     * @var DiskChargePrepaid 云硬盘包年包月相关参数设置。
     */
    public $DiskChargePrepaid;

    /**
     * @var string 云硬盘名称。最大长度60。
     */
    public $DiskName;

    /**
     * @var integer 云硬盘个数。取值范围: [1, 30]。默认值: 1。
     */
    public $DiskCount;

    /**
     * @var integer 指定云硬盘备份点配额，不传时默认为不带备份点配额。目前只支持不带或设置1个云硬盘备份点配额。
     */
    public $DiskBackupQuota;

    /**
     * @var boolean 是否自动使用代金券。默认不使用。
     */
    public $AutoVoucher;

    /**
     * @var AutoMountConfiguration 自动挂载并初始化数据盘。
     */
    public $AutoMountConfiguration;

    /**
     * @param string $Zone 可用区。可通过[DescribeZones](https://cloud.tencent.com/document/product/1207/57513)返回值中的Zone获取。
     * @param integer $DiskSize 云硬盘大小, 单位: GB。
     * @param string $DiskType 云硬盘介质类型。取值: "CLOUD_PREMIUM"(高性能云盘), "CLOUD_SSD"(SSD云硬盘)。
     * @param DiskChargePrepaid $DiskChargePrepaid 云硬盘包年包月相关参数设置。
     * @param string $DiskName 云硬盘名称。最大长度60。
     * @param integer $DiskCount 云硬盘个数。取值范围: [1, 30]。默认值: 1。
     * @param integer $DiskBackupQuota 指定云硬盘备份点配额，不传时默认为不带备份点配额。目前只支持不带或设置1个云硬盘备份点配额。
     * @param boolean $AutoVoucher 是否自动使用代金券。默认不使用。
     * @param AutoMountConfiguration $AutoMountConfiguration 自动挂载并初始化数据盘。
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
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

        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }

        if (array_key_exists("DiskBackupQuota",$param) and $param["DiskBackupQuota"] !== null) {
            $this->DiskBackupQuota = $param["DiskBackupQuota"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("AutoMountConfiguration",$param) and $param["AutoMountConfiguration"] !== null) {
            $this->AutoMountConfiguration = new AutoMountConfiguration();
            $this->AutoMountConfiguration->deserialize($param["AutoMountConfiguration"]);
        }
    }
}
