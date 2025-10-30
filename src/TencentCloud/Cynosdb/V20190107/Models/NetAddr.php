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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络信息
 *
 * @method string getVip() 获取内网ip
 * @method void setVip(string $Vip) 设置内网ip
 * @method integer getVport() 获取内网端口号
 * @method void setVport(integer $Vport) 设置内网端口号
 * @method string getWanDomain() 获取外网域名
 * @method void setWanDomain(string $WanDomain) 设置外网域名
 * @method integer getWanPort() 获取外网端口号
 * @method void setWanPort(integer $WanPort) 设置外网端口号
 * @method string getNetType() 获取网络类型（ro-只读,rw/ha-读写）
 * @method void setNetType(string $NetType) 设置网络类型（ro-只读,rw/ha-读写）
 * @method string getUniqSubnetId() 获取子网ID
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置子网ID
 * @method string getUniqVpcId() 获取私有网络ID
 * @method void setUniqVpcId(string $UniqVpcId) 设置私有网络ID
 * @method string getDescription() 获取描述信息
 * @method void setDescription(string $Description) 设置描述信息
 * @method string getWanIP() 获取外网IP
 * @method void setWanIP(string $WanIP) 设置外网IP
 * @method string getWanStatus() 获取外网状态
 * @method void setWanStatus(string $WanStatus) 设置外网状态
 * @method string getInstanceGroupId() 获取实例组ID
 * @method void setInstanceGroupId(string $InstanceGroupId) 设置实例组ID
 */
class NetAddr extends AbstractModel
{
    /**
     * @var string 内网ip
     */
    public $Vip;

    /**
     * @var integer 内网端口号
     */
    public $Vport;

    /**
     * @var string 外网域名
     */
    public $WanDomain;

    /**
     * @var integer 外网端口号
     */
    public $WanPort;

    /**
     * @var string 网络类型（ro-只读,rw/ha-读写）
     */
    public $NetType;

    /**
     * @var string 子网ID
     */
    public $UniqSubnetId;

    /**
     * @var string 私有网络ID
     */
    public $UniqVpcId;

    /**
     * @var string 描述信息
     */
    public $Description;

    /**
     * @var string 外网IP
     */
    public $WanIP;

    /**
     * @var string 外网状态
     */
    public $WanStatus;

    /**
     * @var string 实例组ID
     */
    public $InstanceGroupId;

    /**
     * @param string $Vip 内网ip
     * @param integer $Vport 内网端口号
     * @param string $WanDomain 外网域名
     * @param integer $WanPort 外网端口号
     * @param string $NetType 网络类型（ro-只读,rw/ha-读写）
     * @param string $UniqSubnetId 子网ID
     * @param string $UniqVpcId 私有网络ID
     * @param string $Description 描述信息
     * @param string $WanIP 外网IP
     * @param string $WanStatus 外网状态
     * @param string $InstanceGroupId 实例组ID
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
        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("WanDomain",$param) and $param["WanDomain"] !== null) {
            $this->WanDomain = $param["WanDomain"];
        }

        if (array_key_exists("WanPort",$param) and $param["WanPort"] !== null) {
            $this->WanPort = $param["WanPort"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("WanIP",$param) and $param["WanIP"] !== null) {
            $this->WanIP = $param["WanIP"];
        }

        if (array_key_exists("WanStatus",$param) and $param["WanStatus"] !== null) {
            $this->WanStatus = $param["WanStatus"];
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }
    }
}
