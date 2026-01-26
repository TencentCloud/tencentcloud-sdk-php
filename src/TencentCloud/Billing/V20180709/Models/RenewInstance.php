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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源实例信息
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getProductCode() 获取产品编码
 * @method void setProductCode(string $ProductCode) 设置产品编码
 * @method string getSubProductCode() 获取子产品编码
 * @method void setSubProductCode(string $SubProductCode) 设置子产品编码
 * @method string getRegionCode() 获取地域编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionCode(string $RegionCode) 设置地域编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取实例状态：
NORMAL 正常，
ISOLATED 已隔离
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置实例状态：
NORMAL 正常，
ISOLATED 已隔离
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRenewFlag() 获取续费标识：
NOTIFY_AND_MANUAL_RENEW 手动续费，
NOTIFY_AND_AUTO_RENEW 自动续费，
DISABLE_NOTIFY_AND_MANUAL_RENEW 到期不续
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewFlag(string $RenewFlag) 设置续费标识：
NOTIFY_AND_MANUAL_RENEW 手动续费，
NOTIFY_AND_AUTO_RENEW 自动续费，
DISABLE_NOTIFY_AND_MANUAL_RENEW 到期不续
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取实例到期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置实例到期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取实例别名：用户在控制台为实例设置的名称，如果未设置，则默认为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置实例别名：用户在控制台为实例设置的名称，如果未设置，则默认为空
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductName() 获取产品名称：用户所采购的各类云产品，例如：云服务器 CVM
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductName(string $ProductName) 设置产品名称：用户所采购的各类云产品，例如：云服务器 CVM
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取项目名称：实例归属的项目，用户在控制台给实例自主分配项目，未分配则是默认项目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目名称：实例归属的项目，用户在控制台给实例自主分配项目，未分配则是默认项目
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRenewPeriod() 获取自动续费周期长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewPeriod(integer $RenewPeriod) 设置自动续费周期长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRenewPeriodUnit() 获取自动续费周期单位：y 年，m 月
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewPeriodUnit(string $RenewPeriodUnit) 设置自动续费周期单位：y 年，m 月
注意：此字段可能返回 null，表示取不到有效值。
 */
class RenewInstance extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 产品编码
     */
    public $ProductCode;

    /**
     * @var string 子产品编码
     */
    public $SubProductCode;

    /**
     * @var string 地域编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionCode;

    /**
     * @var string 实例状态：
NORMAL 正常，
ISOLATED 已隔离
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 续费标识：
NOTIFY_AND_MANUAL_RENEW 手动续费，
NOTIFY_AND_AUTO_RENEW 自动续费，
DISABLE_NOTIFY_AND_MANUAL_RENEW 到期不续
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewFlag;

    /**
     * @var string 实例到期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string 实例别名：用户在控制台为实例设置的名称，如果未设置，则默认为空
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 产品名称：用户所采购的各类云产品，例如：云服务器 CVM
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductName;

    /**
     * @var string 项目名称：实例归属的项目，用户在控制台给实例自主分配项目，未分配则是默认项目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @var integer 自动续费周期长度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewPeriod;

    /**
     * @var string 自动续费周期单位：y 年，m 月
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewPeriodUnit;

    /**
     * @param string $InstanceId 实例ID
     * @param string $ProductCode 产品编码
     * @param string $SubProductCode 子产品编码
     * @param string $RegionCode 地域编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 实例状态：
NORMAL 正常，
ISOLATED 已隔离
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RenewFlag 续费标识：
NOTIFY_AND_MANUAL_RENEW 手动续费，
NOTIFY_AND_AUTO_RENEW 自动续费，
DISABLE_NOTIFY_AND_MANUAL_RENEW 到期不续
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 实例到期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 实例别名：用户在控制台为实例设置的名称，如果未设置，则默认为空
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductName 产品名称：用户所采购的各类云产品，例如：云服务器 CVM
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 项目名称：实例归属的项目，用户在控制台给实例自主分配项目，未分配则是默认项目
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RenewPeriod 自动续费周期长度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RenewPeriodUnit 自动续费周期单位：y 年，m 月
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("SubProductCode",$param) and $param["SubProductCode"] !== null) {
            $this->SubProductCode = $param["SubProductCode"];
        }

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("RenewPeriod",$param) and $param["RenewPeriod"] !== null) {
            $this->RenewPeriod = $param["RenewPeriod"];
        }

        if (array_key_exists("RenewPeriodUnit",$param) and $param["RenewPeriodUnit"] !== null) {
            $this->RenewPeriodUnit = $param["RenewPeriodUnit"];
        }
    }
}
