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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网关信息
 *
 * @method string getUin() 获取用户uin
 * @method void setUin(string $Uin) 设置用户uin
 * @method integer getAppId() 获取用户appid
 * @method void setAppId(integer $AppId) 设置用户appid
 * @method string getWxAppId() 获取WxAppId
 * @method void setWxAppId(string $WxAppId) 设置WxAppId
 * @method string getEnvId() 获取环境id
 * @method void setEnvId(string $EnvId) 设置环境id
 * @method string getGatewayId() 获取Gateway唯一id
 * @method void setGatewayId(string $GatewayId) 设置Gateway唯一id
 * @method string getGatewayName() 获取Gateway名称
 * @method void setGatewayName(string $GatewayName) 设置Gateway名称
 * @method string getGatewayType() 获取Gateway类型
 * @method void setGatewayType(string $GatewayType) 设置Gateway类型
 * @method string getGatewayDesc() 获取Gateway描述
 * @method void setGatewayDesc(string $GatewayDesc) 设置Gateway描述
 * @method string getPackageVersion() 获取套餐版本
 * @method void setPackageVersion(string $PackageVersion) 设置套餐版本
 * @method integer getPackageId() 获取套餐唯一id
 * @method void setPackageId(integer $PackageId) 设置套餐唯一id
 * @method string getVpcId() 获取vpc唯一id
 * @method void setVpcId(string $VpcId) 设置vpc唯一id
 * @method array getSubnetIds() 获取子网id
 * @method void setSubnetIds(array $SubnetIds) 设置子网id
 * @method string getStatus() 获取网关状态
 * @method void setStatus(string $Status) 设置网关状态
 * @method string getL5Addr() 获取l5地址
 * @method void setL5Addr(string $L5Addr) 设置l5地址
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method boolean getCanRenew() 获取是否可以续费
 * @method void setCanRenew(boolean $CanRenew) 设置是否可以续费
 * @method integer getAutoRenewFlag() 获取自动续费标志
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标志
 * @method string getIsolateTime() 获取隔离时间
 * @method void setIsolateTime(string $IsolateTime) 设置隔离时间
 * @method string getExpireTime() 获取到期时间
 * @method void setExpireTime(string $ExpireTime) 设置到期时间
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取变更时间
 * @method void setUpdateTime(string $UpdateTime) 设置变更时间
 * @method boolean getCanDowngrade() 获取是否可以降配
 * @method void setCanDowngrade(boolean $CanDowngrade) 设置是否可以降配
 * @method integer getAllowUncertified() 获取允许未登录访问
 * @method void setAllowUncertified(integer $AllowUncertified) 设置允许未登录访问
 * @method integer getVersionNumLimit() 获取网关版本限额
 * @method void setVersionNumLimit(integer $VersionNumLimit) 设置网关版本限额
 * @method string getLongAccessId() 获取Donut接入ID
 * @method void setLongAccessId(string $LongAccessId) 设置Donut接入ID
 * @method string getAccessDomain() 获取Donut接入域名
 * @method void setAccessDomain(string $AccessDomain) 设置Donut接入域名
 * @method array getTags() 获取标签键值对
 * @method void setTags(array $Tags) 设置标签键值对
 */
class GatewayItem extends AbstractModel
{
    /**
     * @var string 用户uin
     */
    public $Uin;

    /**
     * @var integer 用户appid
     */
    public $AppId;

    /**
     * @var string WxAppId
     */
    public $WxAppId;

    /**
     * @var string 环境id
     */
    public $EnvId;

    /**
     * @var string Gateway唯一id
     */
    public $GatewayId;

    /**
     * @var string Gateway名称
     */
    public $GatewayName;

    /**
     * @var string Gateway类型
     */
    public $GatewayType;

    /**
     * @var string Gateway描述
     */
    public $GatewayDesc;

    /**
     * @var string 套餐版本
     */
    public $PackageVersion;

    /**
     * @var integer 套餐唯一id
     */
    public $PackageId;

    /**
     * @var string vpc唯一id
     */
    public $VpcId;

    /**
     * @var array 子网id
     */
    public $SubnetIds;

    /**
     * @var string 网关状态
     */
    public $Status;

    /**
     * @var string l5地址
     */
    public $L5Addr;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var boolean 是否可以续费
     */
    public $CanRenew;

    /**
     * @var integer 自动续费标志
     */
    public $AutoRenewFlag;

    /**
     * @var string 隔离时间
     */
    public $IsolateTime;

    /**
     * @var string 到期时间
     */
    public $ExpireTime;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 变更时间
     */
    public $UpdateTime;

    /**
     * @var boolean 是否可以降配
     */
    public $CanDowngrade;

    /**
     * @var integer 允许未登录访问
     */
    public $AllowUncertified;

    /**
     * @var integer 网关版本限额
     */
    public $VersionNumLimit;

    /**
     * @var string Donut接入ID
     */
    public $LongAccessId;

    /**
     * @var string Donut接入域名
     */
    public $AccessDomain;

    /**
     * @var array 标签键值对
     */
    public $Tags;

    /**
     * @param string $Uin 用户uin
     * @param integer $AppId 用户appid
     * @param string $WxAppId WxAppId
     * @param string $EnvId 环境id
     * @param string $GatewayId Gateway唯一id
     * @param string $GatewayName Gateway名称
     * @param string $GatewayType Gateway类型
     * @param string $GatewayDesc Gateway描述
     * @param string $PackageVersion 套餐版本
     * @param integer $PackageId 套餐唯一id
     * @param string $VpcId vpc唯一id
     * @param array $SubnetIds 子网id
     * @param string $Status 网关状态
     * @param string $L5Addr l5地址
     * @param string $Region 地域
     * @param boolean $CanRenew 是否可以续费
     * @param integer $AutoRenewFlag 自动续费标志
     * @param string $IsolateTime 隔离时间
     * @param string $ExpireTime 到期时间
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 变更时间
     * @param boolean $CanDowngrade 是否可以降配
     * @param integer $AllowUncertified 允许未登录访问
     * @param integer $VersionNumLimit 网关版本限额
     * @param string $LongAccessId Donut接入ID
     * @param string $AccessDomain Donut接入域名
     * @param array $Tags 标签键值对
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("WxAppId",$param) and $param["WxAppId"] !== null) {
            $this->WxAppId = $param["WxAppId"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("GatewayName",$param) and $param["GatewayName"] !== null) {
            $this->GatewayName = $param["GatewayName"];
        }

        if (array_key_exists("GatewayType",$param) and $param["GatewayType"] !== null) {
            $this->GatewayType = $param["GatewayType"];
        }

        if (array_key_exists("GatewayDesc",$param) and $param["GatewayDesc"] !== null) {
            $this->GatewayDesc = $param["GatewayDesc"];
        }

        if (array_key_exists("PackageVersion",$param) and $param["PackageVersion"] !== null) {
            $this->PackageVersion = $param["PackageVersion"];
        }

        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("L5Addr",$param) and $param["L5Addr"] !== null) {
            $this->L5Addr = $param["L5Addr"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CanRenew",$param) and $param["CanRenew"] !== null) {
            $this->CanRenew = $param["CanRenew"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CanDowngrade",$param) and $param["CanDowngrade"] !== null) {
            $this->CanDowngrade = $param["CanDowngrade"];
        }

        if (array_key_exists("AllowUncertified",$param) and $param["AllowUncertified"] !== null) {
            $this->AllowUncertified = $param["AllowUncertified"];
        }

        if (array_key_exists("VersionNumLimit",$param) and $param["VersionNumLimit"] !== null) {
            $this->VersionNumLimit = $param["VersionNumLimit"];
        }

        if (array_key_exists("LongAccessId",$param) and $param["LongAccessId"] !== null) {
            $this->LongAccessId = $param["LongAccessId"];
        }

        if (array_key_exists("AccessDomain",$param) and $param["AccessDomain"] !== null) {
            $this->AccessDomain = $param["AccessDomain"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
