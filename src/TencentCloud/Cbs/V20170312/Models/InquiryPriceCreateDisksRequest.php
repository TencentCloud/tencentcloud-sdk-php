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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceCreateDisks请求参数结构体
 *
 * @method string getDiskChargeType() 获取云硬盘计费类型： <ul>   <li>PREPAID：预付费，即包年包月</li>   <li>POSTPAID_BY_HOUR：按小时后付费</li> </ul>
 * @method void setDiskChargeType(string $DiskChargeType) 设置云硬盘计费类型： <ul>   <li>PREPAID：预付费，即包年包月</li>   <li>POSTPAID_BY_HOUR：按小时后付费</li> </ul>
 * @method string getDiskType() 获取硬盘介质类型。取值范围： <ul>   <li>CLOUD_PREMIUM：表示高性能云硬盘</li>   <li>CLOUD_SSD：表示SSD云硬盘</li>   <li>CLOUD_HSSD：表示增强型SSD云硬盘</li>   <li>CLOUD_TSSD：表示极速型SSD云硬盘</li> </ul>
 * @method void setDiskType(string $DiskType) 设置硬盘介质类型。取值范围： <ul>   <li>CLOUD_PREMIUM：表示高性能云硬盘</li>   <li>CLOUD_SSD：表示SSD云硬盘</li>   <li>CLOUD_HSSD：表示增强型SSD云硬盘</li>   <li>CLOUD_TSSD：表示极速型SSD云硬盘</li> </ul>
 * @method integer getDiskSize() 获取云硬盘大小，单位为GiB。云盘大小取值范围参见云硬盘[产品分类](/document/product/362/2353)的说明。
 * @method void setDiskSize(integer $DiskSize) 设置云硬盘大小，单位为GiB。云盘大小取值范围参见云硬盘[产品分类](/document/product/362/2353)的说明。
 * @method integer getProjectId() 获取云硬盘所属项目ID。该参数可以通过调用[DescribeProject](https://cloud.tencent.com/document/api/651/78725) 的返回值中的 projectId 字段来获取。不填为默认项目。
 * @method void setProjectId(integer $ProjectId) 设置云硬盘所属项目ID。该参数可以通过调用[DescribeProject](https://cloud.tencent.com/document/api/651/78725) 的返回值中的 projectId 字段来获取。不填为默认项目。
 * @method integer getDiskCount() 获取购买云硬盘的数量。不填则默认为1。
 * @method void setDiskCount(integer $DiskCount) 设置购买云硬盘的数量。不填则默认为1。
 * @method integer getThroughputPerformance() 获取额外购买的云硬盘性能值，单位MiB/s。仅大小超过460GiB的增强型SSD（CLOUD_HSSD）和极速型SSD（CLOUD_TSSD）云硬盘才支持购买额外性能。
 * @method void setThroughputPerformance(integer $ThroughputPerformance) 设置额外购买的云硬盘性能值，单位MiB/s。仅大小超过460GiB的增强型SSD（CLOUD_HSSD）和极速型SSD（CLOUD_TSSD）云硬盘才支持购买额外性能。
 * @method DiskChargePrepaid getDiskChargePrepaid() 获取预付费模式，即包年包月相关参数设置。通过该参数指定包年包月云盘的购买时长、是否设置自动续费等属性。<br>创建预付费云盘该参数必传，创建按小时后付费云盘无需传该参数。
 * @method void setDiskChargePrepaid(DiskChargePrepaid $DiskChargePrepaid) 设置预付费模式，即包年包月相关参数设置。通过该参数指定包年包月云盘的购买时长、是否设置自动续费等属性。<br>创建预付费云盘该参数必传，创建按小时后付费云盘无需传该参数。
 * @method integer getDiskBackupQuota() 获取指定云硬盘备份点配额。
 * @method void setDiskBackupQuota(integer $DiskBackupQuota) 设置指定云硬盘备份点配额。
 */
class InquiryPriceCreateDisksRequest extends AbstractModel
{
    /**
     * @var string 云硬盘计费类型： <ul>   <li>PREPAID：预付费，即包年包月</li>   <li>POSTPAID_BY_HOUR：按小时后付费</li> </ul>
     */
    public $DiskChargeType;

    /**
     * @var string 硬盘介质类型。取值范围： <ul>   <li>CLOUD_PREMIUM：表示高性能云硬盘</li>   <li>CLOUD_SSD：表示SSD云硬盘</li>   <li>CLOUD_HSSD：表示增强型SSD云硬盘</li>   <li>CLOUD_TSSD：表示极速型SSD云硬盘</li> </ul>
     */
    public $DiskType;

    /**
     * @var integer 云硬盘大小，单位为GiB。云盘大小取值范围参见云硬盘[产品分类](/document/product/362/2353)的说明。
     */
    public $DiskSize;

    /**
     * @var integer 云硬盘所属项目ID。该参数可以通过调用[DescribeProject](https://cloud.tencent.com/document/api/651/78725) 的返回值中的 projectId 字段来获取。不填为默认项目。
     */
    public $ProjectId;

    /**
     * @var integer 购买云硬盘的数量。不填则默认为1。
     */
    public $DiskCount;

    /**
     * @var integer 额外购买的云硬盘性能值，单位MiB/s。仅大小超过460GiB的增强型SSD（CLOUD_HSSD）和极速型SSD（CLOUD_TSSD）云硬盘才支持购买额外性能。
     */
    public $ThroughputPerformance;

    /**
     * @var DiskChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数指定包年包月云盘的购买时长、是否设置自动续费等属性。<br>创建预付费云盘该参数必传，创建按小时后付费云盘无需传该参数。
     */
    public $DiskChargePrepaid;

    /**
     * @var integer 指定云硬盘备份点配额。
     */
    public $DiskBackupQuota;

    /**
     * @param string $DiskChargeType 云硬盘计费类型： <ul>   <li>PREPAID：预付费，即包年包月</li>   <li>POSTPAID_BY_HOUR：按小时后付费</li> </ul>
     * @param string $DiskType 硬盘介质类型。取值范围： <ul>   <li>CLOUD_PREMIUM：表示高性能云硬盘</li>   <li>CLOUD_SSD：表示SSD云硬盘</li>   <li>CLOUD_HSSD：表示增强型SSD云硬盘</li>   <li>CLOUD_TSSD：表示极速型SSD云硬盘</li> </ul>
     * @param integer $DiskSize 云硬盘大小，单位为GiB。云盘大小取值范围参见云硬盘[产品分类](/document/product/362/2353)的说明。
     * @param integer $ProjectId 云硬盘所属项目ID。该参数可以通过调用[DescribeProject](https://cloud.tencent.com/document/api/651/78725) 的返回值中的 projectId 字段来获取。不填为默认项目。
     * @param integer $DiskCount 购买云硬盘的数量。不填则默认为1。
     * @param integer $ThroughputPerformance 额外购买的云硬盘性能值，单位MiB/s。仅大小超过460GiB的增强型SSD（CLOUD_HSSD）和极速型SSD（CLOUD_TSSD）云硬盘才支持购买额外性能。
     * @param DiskChargePrepaid $DiskChargePrepaid 预付费模式，即包年包月相关参数设置。通过该参数指定包年包月云盘的购买时长、是否设置自动续费等属性。<br>创建预付费云盘该参数必传，创建按小时后付费云盘无需传该参数。
     * @param integer $DiskBackupQuota 指定云硬盘备份点配额。
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
        if (array_key_exists("DiskChargeType",$param) and $param["DiskChargeType"] !== null) {
            $this->DiskChargeType = $param["DiskChargeType"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }

        if (array_key_exists("ThroughputPerformance",$param) and $param["ThroughputPerformance"] !== null) {
            $this->ThroughputPerformance = $param["ThroughputPerformance"];
        }

        if (array_key_exists("DiskChargePrepaid",$param) and $param["DiskChargePrepaid"] !== null) {
            $this->DiskChargePrepaid = new DiskChargePrepaid();
            $this->DiskChargePrepaid->deserialize($param["DiskChargePrepaid"]);
        }

        if (array_key_exists("DiskBackupQuota",$param) and $param["DiskBackupQuota"] !== null) {
            $this->DiskBackupQuota = $param["DiskBackupQuota"];
        }
    }
}
