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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 精简集群信息
 *
 * @method integer getID() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(integer $ID) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRegionId() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionId(integer $RegionId) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionDesc() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionDesc(string $RegionDesc) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getZoneId() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(integer $ZoneId) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZoneDesc() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneDesc(string $ZoneDesc) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccessInfo() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessInfo(string $AccessInfo) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayMode() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayMode(string $PayMode) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRenewFlag() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewFlag(boolean $RenewFlag) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceSimpleInfoNew extends AbstractModel
{
    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionId;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionDesc;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneDesc;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessInfo;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayMode;

    /**
     * @var boolean 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewFlag;

    /**
     * @param integer $ID 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RegionId 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionDesc 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ZoneId 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ZoneDesc 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccessInfo 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayMode 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $RenewFlag 1
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionDesc",$param) and $param["RegionDesc"] !== null) {
            $this->RegionDesc = $param["RegionDesc"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneDesc",$param) and $param["ZoneDesc"] !== null) {
            $this->ZoneDesc = $param["ZoneDesc"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("AccessInfo",$param) and $param["AccessInfo"] !== null) {
            $this->AccessInfo = $param["AccessInfo"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
