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
 * 云原生实例详情
 *
 * @method integer getID() 获取ID值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(integer $ID) 设置ID值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceType() 获取cdwpg-cn或者其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置cdwpg-cn或者其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceName() 获取cdwpg-cn或者其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceName(string $InstanceName) 设置cdwpg-cn或者其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取Running
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置Running
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusDesc() 获取运行中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusDesc(string $StatusDesc) 设置运行中
注意：此字段可能返回 null，表示取不到有效值。
 * @method InstanceStateInfo getInstanceStateInfo() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceStateInfo(InstanceStateInfo $InstanceStateInfo) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceID() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceID(string $InstanceID) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取2022-09-05 20:00:01
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置2022-09-05 20:00:01
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取ap-chongqing
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置ap-chongqing
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZone() 获取ap
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZone(string $Zone) 设置ap
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionDesc() 获取region
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionDesc(string $RegionDesc) 设置region
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZoneDesc() 获取zone
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneDesc(string $ZoneDesc) 设置zone
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取v3
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置v3
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCharset() 获取字符集
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCharset(string $Charset) 设置字符集
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCNNodes() 获取CN节点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCNNodes(array $CNNodes) 设置CN节点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDNNodes() 获取DN节点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDNNodes(array $DNNodes) 设置DN节点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRegionId() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionId(integer $RegionId) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getZoneId() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneId(integer $ZoneId) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayMode() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayMode(string $PayMode) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getRenewFlag() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRenewFlag(boolean $RenewFlag) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAccessDetails() 获取访问信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessDetails(array $AccessDetails) 设置访问信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceInfo extends AbstractModel
{
    /**
     * @var integer ID值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var string cdwpg-cn或者其他
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var string cdwpg-cn或者其他
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceName;

    /**
     * @var string Running
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 运行中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusDesc;

    /**
     * @var InstanceStateInfo 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceStateInfo;

    /**
     * @var string -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceID;

    /**
     * @var string 2022-09-05 20:00:01
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string ap-chongqing
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string ap
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Zone;

    /**
     * @var string region
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionDesc;

    /**
     * @var string zone
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneDesc;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string v3
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string 字符集
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Charset;

    /**
     * @var array CN节点列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CNNodes;

    /**
     * @var array DN节点列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DNNodes;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionId;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneId;

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
    public $ExpireTime;

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
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var array 访问信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessDetails;

    /**
     * @param integer $ID ID值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceType cdwpg-cn或者其他
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceName cdwpg-cn或者其他
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status Running
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusDesc 运行中
注意：此字段可能返回 null，表示取不到有效值。
     * @param InstanceStateInfo $InstanceStateInfo 无
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceID -
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 2022-09-05 20:00:01
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region ap-chongqing
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Zone ap
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionDesc region
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ZoneDesc zone
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version v3
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Charset 字符集
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CNNodes CN节点列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DNNodes DN节点列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RegionId 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ZoneId 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayMode 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $RenewFlag 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AccessDetails 访问信息
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

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("InstanceStateInfo",$param) and $param["InstanceStateInfo"] !== null) {
            $this->InstanceStateInfo = new InstanceStateInfo();
            $this->InstanceStateInfo->deserialize($param["InstanceStateInfo"]);
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("RegionDesc",$param) and $param["RegionDesc"] !== null) {
            $this->RegionDesc = $param["RegionDesc"];
        }

        if (array_key_exists("ZoneDesc",$param) and $param["ZoneDesc"] !== null) {
            $this->ZoneDesc = $param["ZoneDesc"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Charset",$param) and $param["Charset"] !== null) {
            $this->Charset = $param["Charset"];
        }

        if (array_key_exists("CNNodes",$param) and $param["CNNodes"] !== null) {
            $this->CNNodes = [];
            foreach ($param["CNNodes"] as $key => $value){
                $obj = new InstanceNodeGroup();
                $obj->deserialize($value);
                array_push($this->CNNodes, $obj);
            }
        }

        if (array_key_exists("DNNodes",$param) and $param["DNNodes"] !== null) {
            $this->DNNodes = [];
            foreach ($param["DNNodes"] as $key => $value){
                $obj = new InstanceNodeGroup();
                $obj->deserialize($value);
                array_push($this->DNNodes, $obj);
            }
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AccessDetails",$param) and $param["AccessDetails"] !== null) {
            $this->AccessDetails = [];
            foreach ($param["AccessDetails"] as $key => $value){
                $obj = new AccessInfo();
                $obj->deserialize($value);
                array_push($this->AccessDetails, $obj);
            }
        }
    }
}
