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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NAT防火墙开关列表数据
 *
 * @method integer getId() 获取列表ID
 * @method void setId(integer $Id) 设置列表ID
 * @method string getSubnetId() 获取子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetName() 获取子网名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetName(string $SubnetName) 设置子网名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetCidr() 获取IPv4 CIDR
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetCidr(string $SubnetCidr) 设置IPv4 CIDR
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRouteId() 获取关联路由ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRouteId(string $RouteId) 设置关联路由ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRouteName() 获取关联路由名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRouteName(string $RouteName) 设置关联路由名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCvmNum() 获取云服务器个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCvmNum(integer $CvmNum) 设置云服务器个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取所属VPC ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置所属VPC ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcName() 获取所属VPC名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcName(string $VpcName) 设置所属VPC名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnable() 获取是否生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnable(integer $Enable) 设置是否生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取开关状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置开关状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNatId() 获取NAT网关ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNatId(string $NatId) 设置NAT网关ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNatName() 获取NAT网关名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNatName(string $NatName) 设置NAT网关名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNatInsId() 获取NAT防火墙实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNatInsId(string $NatInsId) 设置NAT防火墙实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNatInsName() 获取NAT防火墙实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNatInsName(string $NatInsName) 设置NAT防火墙实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAbnormal() 获取开关是否异常,0:正常,1:异常
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAbnormal(integer $Abnormal) 设置开关是否异常,0:正常,1:异常
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getORTableId() 获取nat防火墙出口路由表id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setORTableId(string $ORTableId) 设置nat防火墙出口路由表id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getORTableName() 获取nat防火墙出口路由表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setORTableName(string $ORTableName) 设置nat防火墙出口路由表名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOhavips() 获取出口Snat Ip列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOhavips(array $Ohavips) 设置出口Snat Ip列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class NatSwitchListData extends AbstractModel
{
    /**
     * @var integer 列表ID
     */
    public $Id;

    /**
     * @var string 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string 子网名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetName;

    /**
     * @var string IPv4 CIDR
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetCidr;

    /**
     * @var string 关联路由ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RouteId;

    /**
     * @var string 关联路由名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RouteName;

    /**
     * @var integer 云服务器个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CvmNum;

    /**
     * @var string 所属VPC ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 所属VPC名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcName;

    /**
     * @var integer 是否生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enable;

    /**
     * @var integer 开关状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string NAT网关ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NatId;

    /**
     * @var string NAT网关名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NatName;

    /**
     * @var string NAT防火墙实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NatInsId;

    /**
     * @var string NAT防火墙实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NatInsName;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var integer 开关是否异常,0:正常,1:异常
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Abnormal;

    /**
     * @var string nat防火墙出口路由表id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ORTableId;

    /**
     * @var string nat防火墙出口路由表名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ORTableName;

    /**
     * @var array 出口Snat Ip列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ohavips;

    /**
     * @param integer $Id 列表ID
     * @param string $SubnetId 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetName 子网名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetCidr IPv4 CIDR
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RouteId 关联路由ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RouteName 关联路由名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CvmNum 云服务器个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 所属VPC ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcName 所属VPC名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Enable 是否生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 开关状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NatId NAT网关ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NatName NAT网关名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NatInsId NAT防火墙实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NatInsName NAT防火墙实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Abnormal 开关是否异常,0:正常,1:异常
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ORTableId nat防火墙出口路由表id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ORTableName nat防火墙出口路由表名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Ohavips 出口Snat Ip列表
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("SubnetCidr",$param) and $param["SubnetCidr"] !== null) {
            $this->SubnetCidr = $param["SubnetCidr"];
        }

        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }

        if (array_key_exists("RouteName",$param) and $param["RouteName"] !== null) {
            $this->RouteName = $param["RouteName"];
        }

        if (array_key_exists("CvmNum",$param) and $param["CvmNum"] !== null) {
            $this->CvmNum = $param["CvmNum"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NatId",$param) and $param["NatId"] !== null) {
            $this->NatId = $param["NatId"];
        }

        if (array_key_exists("NatName",$param) and $param["NatName"] !== null) {
            $this->NatName = $param["NatName"];
        }

        if (array_key_exists("NatInsId",$param) and $param["NatInsId"] !== null) {
            $this->NatInsId = $param["NatInsId"];
        }

        if (array_key_exists("NatInsName",$param) and $param["NatInsName"] !== null) {
            $this->NatInsName = $param["NatInsName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Abnormal",$param) and $param["Abnormal"] !== null) {
            $this->Abnormal = $param["Abnormal"];
        }

        if (array_key_exists("ORTableId",$param) and $param["ORTableId"] !== null) {
            $this->ORTableId = $param["ORTableId"];
        }

        if (array_key_exists("ORTableName",$param) and $param["ORTableName"] !== null) {
            $this->ORTableName = $param["ORTableName"];
        }

        if (array_key_exists("Ohavips",$param) and $param["Ohavips"] !== null) {
            $this->Ohavips = $param["Ohavips"];
        }
    }
}
