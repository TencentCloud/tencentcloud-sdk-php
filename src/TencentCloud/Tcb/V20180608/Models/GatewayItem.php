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
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置用户appid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnvId() 获取环境id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvId(string $EnvId) 设置环境id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayId() 获取Gateway唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayId(string $GatewayId) 设置Gateway唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayName() 获取Gateway名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayName(string $GatewayName) 设置Gateway名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayType() 获取Gateway类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayType(string $GatewayType) 设置Gateway类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGatewayDesc() 获取Gateway描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGatewayDesc(string $GatewayDesc) 设置Gateway描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPackageVersion() 获取套餐版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageVersion(string $PackageVersion) 设置套餐版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPackageId() 获取套餐唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPackageId(integer $PackageId) 设置套餐唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取vpc唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置vpc唯一id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubnetIds() 获取子网id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetIds(array $SubnetIds) 设置子网id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取网关状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置网关状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getL5Addr() 获取l5地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setL5Addr(string $L5Addr) 设置l5地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsolateTime() 获取隔离时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolateTime(string $IsolateTime) 设置隔离时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取到期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置到期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取变更时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置变更时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAllowUncertified() 获取允许未登录访问
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowUncertified(integer $AllowUncertified) 设置允许未登录访问
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVersionNumLimit() 获取网关版本限额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionNumLimit(integer $VersionNumLimit) 设置网关版本限额
注意：此字段可能返回 null，表示取不到有效值。
 */
class GatewayItem extends AbstractModel
{
    /**
     * @var string 用户uin
     */
    public $Uin;

    /**
     * @var integer 用户appid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 环境id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvId;

    /**
     * @var string Gateway唯一id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayId;

    /**
     * @var string Gateway名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayName;

    /**
     * @var string Gateway类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayType;

    /**
     * @var string Gateway描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GatewayDesc;

    /**
     * @var string 套餐版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageVersion;

    /**
     * @var integer 套餐唯一id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PackageId;

    /**
     * @var string vpc唯一id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var array 子网id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetIds;

    /**
     * @var string 网关状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string l5地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $L5Addr;

    /**
     * @var string 地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 隔离时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolateTime;

    /**
     * @var string 到期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 变更时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer 允许未登录访问
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowUncertified;

    /**
     * @var integer 网关版本限额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionNumLimit;

    /**
     * @param string $Uin 用户uin
     * @param integer $AppId 用户appid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnvId 环境id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayId Gateway唯一id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayName Gateway名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayType Gateway类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GatewayDesc Gateway描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PackageVersion 套餐版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PackageId 套餐唯一id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId vpc唯一id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubnetIds 子网id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 网关状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $L5Addr l5地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsolateTime 隔离时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 到期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 变更时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AllowUncertified 允许未登录访问
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VersionNumLimit 网关版本限额
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
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

        if (array_key_exists("AllowUncertified",$param) and $param["AllowUncertified"] !== null) {
            $this->AllowUncertified = $param["AllowUncertified"];
        }

        if (array_key_exists("VersionNumLimit",$param) and $param["VersionNumLimit"] !== null) {
            $this->VersionNumLimit = $param["VersionNumLimit"];
        }
    }
}
