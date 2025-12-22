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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群基础信息
 *
 * @method string getClusterId() 获取集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterType() 获取集群类型，EMR/CDW等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterType(string $ClusterType) 设置集群类型，EMR/CDW等
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterName(string $ClusterName) 设置集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionCn() 获取地域中文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionCn(string $RegionCn) 设置地域中文
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionEn() 获取地域英文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionEn(string $RegionEn) 设置地域英文
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionArea() 获取地区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionArea(string $RegionArea) 设置地区
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUsed() 获取集群是否使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsed(boolean $Used) 设置集群是否使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取集群状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置集群状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusInfo() 获取集群状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusInfo(string $StatusInfo) 设置集群状态信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageType() 获取集群存储类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageType(string $StorageType) 设置集群存储类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComputeType() 获取集群计算类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComputeType(string $ComputeType) 设置集群计算类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterResource() 获取集群资源量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterResource(string $ClusterResource) 设置集群资源量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChargeType() 获取集群付费方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeType(string $ChargeType) 设置集群付费方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取集群创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置集群创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtraConf() 获取额外配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraConf(string $ExtraConf) 设置额外配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRangerUserName() 获取ranger账号名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRangerUserName(string $RangerUserName) 设置ranger账号名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCdwUserName() 获取cdw账号（用于展示）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCdwUserName(string $CdwUserName) 设置cdw账号（用于展示）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTimestamp() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTimestamp(integer $CreateTimestamp) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTimestamp() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTimestamp(integer $UpdateTimestamp) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaseClusterInfo extends AbstractModel
{
    /**
     * @var string 集群id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @var string 集群类型，EMR/CDW等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterType;

    /**
     * @var string 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterName;

    /**
     * @var string 地域中文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionCn;

    /**
     * @var string 地域英文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionEn;

    /**
     * @var string 地区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionArea;

    /**
     * @var boolean 集群是否使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Used;

    /**
     * @var integer 集群状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 集群状态信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusInfo;

    /**
     * @var string 集群存储类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageType;

    /**
     * @var string 集群计算类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComputeType;

    /**
     * @var string 集群资源量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterResource;

    /**
     * @var string 集群付费方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeType;

    /**
     * @var string 集群创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 额外配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraConf;

    /**
     * @var string ranger账号名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RangerUserName;

    /**
     * @var string cdw账号（用于展示）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CdwUserName;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTimestamp;

    /**
     * @var integer 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTimestamp;

    /**
     * @param string $ClusterId 集群id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterType 集群类型，EMR/CDW等
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 集群名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionCn 地域中文
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionEn 地域英文
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionArea 地区
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Used 集群是否使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 集群状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusInfo 集群状态信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageType 集群存储类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ComputeType 集群计算类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterResource 集群资源量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChargeType 集群付费方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 集群创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtraConf 额外配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RangerUserName ranger账号名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CdwUserName cdw账号（用于展示）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTimestamp 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTimestamp 修改时间
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("RegionCn",$param) and $param["RegionCn"] !== null) {
            $this->RegionCn = $param["RegionCn"];
        }

        if (array_key_exists("RegionEn",$param) and $param["RegionEn"] !== null) {
            $this->RegionEn = $param["RegionEn"];
        }

        if (array_key_exists("RegionArea",$param) and $param["RegionArea"] !== null) {
            $this->RegionArea = $param["RegionArea"];
        }

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = $param["Used"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusInfo",$param) and $param["StatusInfo"] !== null) {
            $this->StatusInfo = $param["StatusInfo"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("ComputeType",$param) and $param["ComputeType"] !== null) {
            $this->ComputeType = $param["ComputeType"];
        }

        if (array_key_exists("ClusterResource",$param) and $param["ClusterResource"] !== null) {
            $this->ClusterResource = $param["ClusterResource"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExtraConf",$param) and $param["ExtraConf"] !== null) {
            $this->ExtraConf = $param["ExtraConf"];
        }

        if (array_key_exists("RangerUserName",$param) and $param["RangerUserName"] !== null) {
            $this->RangerUserName = $param["RangerUserName"];
        }

        if (array_key_exists("CdwUserName",$param) and $param["CdwUserName"] !== null) {
            $this->CdwUserName = $param["CdwUserName"];
        }

        if (array_key_exists("CreateTimestamp",$param) and $param["CreateTimestamp"] !== null) {
            $this->CreateTimestamp = $param["CreateTimestamp"];
        }

        if (array_key_exists("UpdateTimestamp",$param) and $param["UpdateTimestamp"] !== null) {
            $this->UpdateTimestamp = $param["UpdateTimestamp"];
        }
    }
}
