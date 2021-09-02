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
 * 独立网关信息
 *
 * @method string getGatewayName() 获取独立网关名称
 * @method void setGatewayName(string $GatewayName) 设置独立网关名称
 * @method float getCPU() 获取CPU核心数
 * @method void setCPU(float $CPU) 设置CPU核心数
 * @method integer getMem() 获取内存大小，单位MB
 * @method void setMem(integer $Mem) 设置内存大小，单位MB
 * @method string getPackageVersion() 获取套餐包版本名称
 * @method void setPackageVersion(string $PackageVersion) 设置套餐包版本名称
 * @method string getGatewayAlias() 获取网关别名
 * @method void setGatewayAlias(string $GatewayAlias) 设置网关别名
 * @method string getVpcId() 获取私有网络ID
 * @method void setVpcId(string $VpcId) 设置私有网络ID
 * @method array getSubnetIds() 获取子网ID列表
 * @method void setSubnetIds(array $SubnetIds) 设置子网ID列表
 * @method string getGatewayDesc() 获取网关描述
 * @method void setGatewayDesc(string $GatewayDesc) 设置网关描述
 * @method string getGateWayStatus() 获取网关状态
 * @method void setGateWayStatus(string $GateWayStatus) 设置网关状态
 * @method BackendServiceInfo getServiceInfo() 获取服务信息
 * @method void setServiceInfo(BackendServiceInfo $ServiceInfo) 设置服务信息
 * @method string getPublicClbIp() 获取公网CLBIP
 * @method void setPublicClbIp(string $PublicClbIp) 设置公网CLBIP
 * @method string getInternalClbIp() 获取内网CLBIP
 * @method void setInternalClbIp(string $InternalClbIp) 设置内网CLBIP
 */
class StandaloneGatewayInfo extends AbstractModel
{
    /**
     * @var string 独立网关名称
     */
    public $GatewayName;

    /**
     * @var float CPU核心数
     */
    public $CPU;

    /**
     * @var integer 内存大小，单位MB
     */
    public $Mem;

    /**
     * @var string 套餐包版本名称
     */
    public $PackageVersion;

    /**
     * @var string 网关别名
     */
    public $GatewayAlias;

    /**
     * @var string 私有网络ID
     */
    public $VpcId;

    /**
     * @var array 子网ID列表
     */
    public $SubnetIds;

    /**
     * @var string 网关描述
     */
    public $GatewayDesc;

    /**
     * @var string 网关状态
     */
    public $GateWayStatus;

    /**
     * @var BackendServiceInfo 服务信息
     */
    public $ServiceInfo;

    /**
     * @var string 公网CLBIP
     */
    public $PublicClbIp;

    /**
     * @var string 内网CLBIP
     */
    public $InternalClbIp;

    /**
     * @param string $GatewayName 独立网关名称
     * @param float $CPU CPU核心数
     * @param integer $Mem 内存大小，单位MB
     * @param string $PackageVersion 套餐包版本名称
     * @param string $GatewayAlias 网关别名
     * @param string $VpcId 私有网络ID
     * @param array $SubnetIds 子网ID列表
     * @param string $GatewayDesc 网关描述
     * @param string $GateWayStatus 网关状态
     * @param BackendServiceInfo $ServiceInfo 服务信息
     * @param string $PublicClbIp 公网CLBIP
     * @param string $InternalClbIp 内网CLBIP
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
        if (array_key_exists("GatewayName",$param) and $param["GatewayName"] !== null) {
            $this->GatewayName = $param["GatewayName"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("PackageVersion",$param) and $param["PackageVersion"] !== null) {
            $this->PackageVersion = $param["PackageVersion"];
        }

        if (array_key_exists("GatewayAlias",$param) and $param["GatewayAlias"] !== null) {
            $this->GatewayAlias = $param["GatewayAlias"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("GatewayDesc",$param) and $param["GatewayDesc"] !== null) {
            $this->GatewayDesc = $param["GatewayDesc"];
        }

        if (array_key_exists("GateWayStatus",$param) and $param["GateWayStatus"] !== null) {
            $this->GateWayStatus = $param["GateWayStatus"];
        }

        if (array_key_exists("ServiceInfo",$param) and $param["ServiceInfo"] !== null) {
            $this->ServiceInfo = new BackendServiceInfo();
            $this->ServiceInfo->deserialize($param["ServiceInfo"]);
        }

        if (array_key_exists("PublicClbIp",$param) and $param["PublicClbIp"] !== null) {
            $this->PublicClbIp = $param["PublicClbIp"];
        }

        if (array_key_exists("InternalClbIp",$param) and $param["InternalClbIp"] !== null) {
            $this->InternalClbIp = $param["InternalClbIp"];
        }
    }
}
