<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getDiskType() 获取云硬盘类型。取值范围：<br><li>普通云硬盘：CLOUD_BASIC<br><li>高性能云硬盘：CLOUD_PREMIUM<br><li>SSD云硬盘：CLOUD_SSD。
 * @method void setDiskType(string $DiskType) 设置云硬盘类型。取值范围：<br><li>普通云硬盘：CLOUD_BASIC<br><li>高性能云硬盘：CLOUD_PREMIUM<br><li>SSD云硬盘：CLOUD_SSD。
 * @method integer getDiskSize() 获取云盘大小，取值范围： 普通云硬盘:10GB ~ 4000G；高性能云硬盘:50GB ~ 4000GB；SSD云硬盘:100GB ~ 4000GB，步长均为10GB。
 * @method void setDiskSize(integer $DiskSize) 设置云盘大小，取值范围： 普通云硬盘:10GB ~ 4000G；高性能云硬盘:50GB ~ 4000GB；SSD云硬盘:100GB ~ 4000GB，步长均为10GB。
 * @method string getDiskChargeType() 获取付费模式，目前只有预付费，即只能取值为PREPAID。
 * @method void setDiskChargeType(string $DiskChargeType) 设置付费模式，目前只有预付费，即只能取值为PREPAID。
 * @method DiskChargePrepaid getDiskChargePrepaid() 获取预付费相关参数设置，通过该参数可以指定包年包月云盘的购买时长，预付费云盘该参数必传。
 * @method void setDiskChargePrepaid(DiskChargePrepaid $DiskChargePrepaid) 设置预付费相关参数设置，通过该参数可以指定包年包月云盘的购买时长，预付费云盘该参数必传。
 * @method integer getDiskCount() 获取购买云盘的数量。不填则默认为1。
 * @method void setDiskCount(integer $DiskCount) 设置购买云盘的数量。不填则默认为1。
 * @method integer getProjectId() 获取云盘所属项目ID。
 * @method void setProjectId(integer $ProjectId) 设置云盘所属项目ID。
 */

/**
 *InquiryPriceCreateDisks请求参数结构体
 */
class InquiryPriceCreateDisksRequest extends AbstractModel
{
    /**
     * @var string 云硬盘类型。取值范围：<br><li>普通云硬盘：CLOUD_BASIC<br><li>高性能云硬盘：CLOUD_PREMIUM<br><li>SSD云硬盘：CLOUD_SSD。
     */
    public $DiskType;

    /**
     * @var integer 云盘大小，取值范围： 普通云硬盘:10GB ~ 4000G；高性能云硬盘:50GB ~ 4000GB；SSD云硬盘:100GB ~ 4000GB，步长均为10GB。
     */
    public $DiskSize;

    /**
     * @var string 付费模式，目前只有预付费，即只能取值为PREPAID。
     */
    public $DiskChargeType;

    /**
     * @var DiskChargePrepaid 预付费相关参数设置，通过该参数可以指定包年包月云盘的购买时长，预付费云盘该参数必传。
     */
    public $DiskChargePrepaid;

    /**
     * @var integer 购买云盘的数量。不填则默认为1。
     */
    public $DiskCount;

    /**
     * @var integer 云盘所属项目ID。
     */
    public $ProjectId;
    /**
     * @param string $DiskType 云硬盘类型。取值范围：<br><li>普通云硬盘：CLOUD_BASIC<br><li>高性能云硬盘：CLOUD_PREMIUM<br><li>SSD云硬盘：CLOUD_SSD。
     * @param integer $DiskSize 云盘大小，取值范围： 普通云硬盘:10GB ~ 4000G；高性能云硬盘:50GB ~ 4000GB；SSD云硬盘:100GB ~ 4000GB，步长均为10GB。
     * @param string $DiskChargeType 付费模式，目前只有预付费，即只能取值为PREPAID。
     * @param DiskChargePrepaid $DiskChargePrepaid 预付费相关参数设置，通过该参数可以指定包年包月云盘的购买时长，预付费云盘该参数必传。
     * @param integer $DiskCount 购买云盘的数量。不填则默认为1。
     * @param integer $ProjectId 云盘所属项目ID。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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

        if (array_key_exists("DiskChargeType",$param) and $param["DiskChargeType"] !== null) {
            $this->DiskChargeType = $param["DiskChargeType"];
        }

        if (array_key_exists("DiskChargePrepaid",$param) and $param["DiskChargePrepaid"] !== null) {
            $this->DiskChargePrepaid = new DiskChargePrepaid();
            $this->DiskChargePrepaid->deserialize($param["DiskChargePrepaid"]);
        }

        if (array_key_exists("DiskCount",$param) and $param["DiskCount"] !== null) {
            $this->DiskCount = $param["DiskCount"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}
