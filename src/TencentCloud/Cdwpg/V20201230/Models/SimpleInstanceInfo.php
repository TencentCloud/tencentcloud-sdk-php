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
 * 集群信息
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
 * @method string getZone() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserVPCID() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserVPCID(string $UserVPCID) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserSubnetID() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserSubnetID(string $UserSubnetID) 设置1
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
 * @method integer getRenewFlag() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewFlag(integer $RenewFlag) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method ChargeProperties getChargeProperties() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChargeProperties(ChargeProperties $ChargeProperties) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResources() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResources(array $Resources) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 */
class SimpleInstanceInfo extends AbstractModel
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
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserVPCID;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserSubnetID;

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
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RenewFlag;

    /**
     * @var ChargeProperties 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChargeProperties;

    /**
     * @var array 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resources;

    /**
     * @var array 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

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
     * @param string $Zone 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserVPCID 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserSubnetID 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccessInfo 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RenewFlag 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param ChargeProperties $ChargeProperties 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Resources 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 1
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("UserVPCID",$param) and $param["UserVPCID"] !== null) {
            $this->UserVPCID = $param["UserVPCID"];
        }

        if (array_key_exists("UserSubnetID",$param) and $param["UserSubnetID"] !== null) {
            $this->UserSubnetID = $param["UserSubnetID"];
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

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("ChargeProperties",$param) and $param["ChargeProperties"] !== null) {
            $this->ChargeProperties = new ChargeProperties();
            $this->ChargeProperties->deserialize($param["ChargeProperties"]);
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new ResourceInfo();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
