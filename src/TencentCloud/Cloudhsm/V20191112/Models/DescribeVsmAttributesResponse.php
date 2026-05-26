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
namespace TencentCloud\Cloudhsm\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVsmAttributes返回参数结构体
 *
 * @method string getResourceId() 获取<p>资源Id</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源Id</p>
 * @method string getResourceName() 获取<p>资源名称</p>
 * @method void setResourceName(string $ResourceName) 设置<p>资源名称</p>
 * @method integer getStatus() 获取<p>资源状态，1表示资源为正常，2表示资源处于隔离状态</p>
 * @method void setStatus(integer $Status) 设置<p>资源状态，1表示资源为正常，2表示资源处于隔离状态</p>
 * @method string getVip() 获取<p>资源IP</p>
 * @method void setVip(string $Vip) 设置<p>资源IP</p>
 * @method string getVpcId() 获取<p>资源所属Vpc</p>
 * @method void setVpcId(string $VpcId) 设置<p>资源所属Vpc</p>
 * @method string getSubnetId() 获取<p>资源所属子网</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>资源所属子网</p>
 * @method string getModel() 获取<p>资源所属HSM的规格</p>
 * @method void setModel(string $Model) 设置<p>资源所属HSM的规格</p>
 * @method integer getVsmType() 获取<p>资源类型，17表示EVSM，33表示GVSM，49表示SVSM</p>
 * @method void setVsmType(integer $VsmType) 设置<p>资源类型，17表示EVSM，33表示GVSM，49表示SVSM</p>
 * @method integer getRegionId() 获取<p>地域Id，返回腾讯云地域代码，如广州为1，北京为8</p>
 * @method void setRegionId(integer $RegionId) 设置<p>地域Id，返回腾讯云地域代码，如广州为1，北京为8</p>
 * @method integer getZoneId() 获取<p>区域Id，返回腾讯云每个地域的可用区代码</p>
 * @method void setZoneId(integer $ZoneId) 设置<p>区域Id，返回腾讯云每个地域的可用区代码</p>
 * @method integer getExpireTime() 获取<p>资源过期时间，以时间戳形式展示。</p>
 * @method void setExpireTime(integer $ExpireTime) 设置<p>资源过期时间，以时间戳形式展示。</p>
 * @method array getSgList() 获取<p>安全组详情信息,如果未配置字段返回null</p>
 * @method void setSgList(array $SgList) 设置<p>安全组详情信息,如果未配置字段返回null</p>
 * @method string getSubnetName() 获取<p>子网名</p>
 * @method void setSubnetName(string $SubnetName) 设置<p>子网名</p>
 * @method string getRegionName() 获取<p>地域名</p>
 * @method void setRegionName(string $RegionName) 设置<p>地域名</p>
 * @method string getZoneName() 获取<p>区域名</p>
 * @method void setZoneName(string $ZoneName) 设置<p>区域名</p>
 * @method boolean getExpired() 获取<p>实例是否已经过期</p>
 * @method void setExpired(boolean $Expired) 设置<p>实例是否已经过期</p>
 * @method integer getRemainSeconds() 获取<p>为正数表示实例距离过期时间剩余秒数，为负数表示实例已经过期多少秒</p>
 * @method void setRemainSeconds(integer $RemainSeconds) 设置<p>为正数表示实例距离过期时间剩余秒数，为负数表示实例已经过期多少秒</p>
 * @method string getVpcName() 获取<p>私有虚拟网络名称</p>
 * @method void setVpcName(string $VpcName) 设置<p>私有虚拟网络名称</p>
 * @method string getVpcCidrBlock() 获取<p>VPC的IPv4 CIDR</p>
 * @method void setVpcCidrBlock(string $VpcCidrBlock) 设置<p>VPC的IPv4 CIDR</p>
 * @method string getSubnetCidrBlock() 获取<p>子网的CIDR</p>
 * @method void setSubnetCidrBlock(string $SubnetCidrBlock) 设置<p>子网的CIDR</p>
 * @method array getTags() 获取<p>资源所关联的标签Tag</p>
 * @method void setTags(array $Tags) 设置<p>资源所关联的标签Tag</p>
 * @method integer getRenewFlag() 获取<p>资源续费标识，0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>资源续费标识，0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
 * @method string getManufacturer() 获取<p>厂商</p>
 * @method void setManufacturer(string $Manufacturer) 设置<p>厂商</p>
 * @method integer getPqcFlag() 获取<p>0-关闭，1-开启</p>
 * @method void setPqcFlag(integer $PqcFlag) 设置<p>0-关闭，1-开启</p>
 * @method string getDeployEnv() 获取<p>环境</p><p>默认值：cloud</p><p>cloud或者cdc</p>
 * @method void setDeployEnv(string $DeployEnv) 设置<p>环境</p><p>默认值：cloud</p><p>cloud或者cdc</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVsmAttributesResponse extends AbstractModel
{
    /**
     * @var string <p>资源Id</p>
     */
    public $ResourceId;

    /**
     * @var string <p>资源名称</p>
     */
    public $ResourceName;

    /**
     * @var integer <p>资源状态，1表示资源为正常，2表示资源处于隔离状态</p>
     */
    public $Status;

    /**
     * @var string <p>资源IP</p>
     */
    public $Vip;

    /**
     * @var string <p>资源所属Vpc</p>
     */
    public $VpcId;

    /**
     * @var string <p>资源所属子网</p>
     */
    public $SubnetId;

    /**
     * @var string <p>资源所属HSM的规格</p>
     */
    public $Model;

    /**
     * @var integer <p>资源类型，17表示EVSM，33表示GVSM，49表示SVSM</p>
     */
    public $VsmType;

    /**
     * @var integer <p>地域Id，返回腾讯云地域代码，如广州为1，北京为8</p>
     */
    public $RegionId;

    /**
     * @var integer <p>区域Id，返回腾讯云每个地域的可用区代码</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>资源过期时间，以时间戳形式展示。</p>
     */
    public $ExpireTime;

    /**
     * @var array <p>安全组详情信息,如果未配置字段返回null</p>
     */
    public $SgList;

    /**
     * @var string <p>子网名</p>
     */
    public $SubnetName;

    /**
     * @var string <p>地域名</p>
     */
    public $RegionName;

    /**
     * @var string <p>区域名</p>
     */
    public $ZoneName;

    /**
     * @var boolean <p>实例是否已经过期</p>
     */
    public $Expired;

    /**
     * @var integer <p>为正数表示实例距离过期时间剩余秒数，为负数表示实例已经过期多少秒</p>
     */
    public $RemainSeconds;

    /**
     * @var string <p>私有虚拟网络名称</p>
     */
    public $VpcName;

    /**
     * @var string <p>VPC的IPv4 CIDR</p>
     */
    public $VpcCidrBlock;

    /**
     * @var string <p>子网的CIDR</p>
     */
    public $SubnetCidrBlock;

    /**
     * @var array <p>资源所关联的标签Tag</p>
     */
    public $Tags;

    /**
     * @var integer <p>资源续费标识，0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
     */
    public $RenewFlag;

    /**
     * @var string <p>厂商</p>
     */
    public $Manufacturer;

    /**
     * @var integer <p>0-关闭，1-开启</p>
     */
    public $PqcFlag;

    /**
     * @var string <p>环境</p><p>默认值：cloud</p><p>cloud或者cdc</p>
     */
    public $DeployEnv;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ResourceId <p>资源Id</p>
     * @param string $ResourceName <p>资源名称</p>
     * @param integer $Status <p>资源状态，1表示资源为正常，2表示资源处于隔离状态</p>
     * @param string $Vip <p>资源IP</p>
     * @param string $VpcId <p>资源所属Vpc</p>
     * @param string $SubnetId <p>资源所属子网</p>
     * @param string $Model <p>资源所属HSM的规格</p>
     * @param integer $VsmType <p>资源类型，17表示EVSM，33表示GVSM，49表示SVSM</p>
     * @param integer $RegionId <p>地域Id，返回腾讯云地域代码，如广州为1，北京为8</p>
     * @param integer $ZoneId <p>区域Id，返回腾讯云每个地域的可用区代码</p>
     * @param integer $ExpireTime <p>资源过期时间，以时间戳形式展示。</p>
     * @param array $SgList <p>安全组详情信息,如果未配置字段返回null</p>
     * @param string $SubnetName <p>子网名</p>
     * @param string $RegionName <p>地域名</p>
     * @param string $ZoneName <p>区域名</p>
     * @param boolean $Expired <p>实例是否已经过期</p>
     * @param integer $RemainSeconds <p>为正数表示实例距离过期时间剩余秒数，为负数表示实例已经过期多少秒</p>
     * @param string $VpcName <p>私有虚拟网络名称</p>
     * @param string $VpcCidrBlock <p>VPC的IPv4 CIDR</p>
     * @param string $SubnetCidrBlock <p>子网的CIDR</p>
     * @param array $Tags <p>资源所关联的标签Tag</p>
     * @param integer $RenewFlag <p>资源续费标识，0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
     * @param string $Manufacturer <p>厂商</p>
     * @param integer $PqcFlag <p>0-关闭，1-开启</p>
     * @param string $DeployEnv <p>环境</p><p>默认值：cloud</p><p>cloud或者cdc</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("VsmType",$param) and $param["VsmType"] !== null) {
            $this->VsmType = $param["VsmType"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("SgList",$param) and $param["SgList"] !== null) {
            $this->SgList = [];
            foreach ($param["SgList"] as $key => $value){
                $obj = new UsgRuleDetail();
                $obj->deserialize($value);
                array_push($this->SgList, $obj);
            }
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("Expired",$param) and $param["Expired"] !== null) {
            $this->Expired = $param["Expired"];
        }

        if (array_key_exists("RemainSeconds",$param) and $param["RemainSeconds"] !== null) {
            $this->RemainSeconds = $param["RemainSeconds"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("SubnetCidrBlock",$param) and $param["SubnetCidrBlock"] !== null) {
            $this->SubnetCidrBlock = $param["SubnetCidrBlock"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("Manufacturer",$param) and $param["Manufacturer"] !== null) {
            $this->Manufacturer = $param["Manufacturer"];
        }

        if (array_key_exists("PqcFlag",$param) and $param["PqcFlag"] !== null) {
            $this->PqcFlag = $param["PqcFlag"];
        }

        if (array_key_exists("DeployEnv",$param) and $param["DeployEnv"] !== null) {
            $this->DeployEnv = $param["DeployEnv"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
