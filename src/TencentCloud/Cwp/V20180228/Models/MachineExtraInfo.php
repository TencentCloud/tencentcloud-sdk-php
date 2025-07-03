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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务器基础信息
 *
 * @method string getWanIP() 获取公网IP
 * @method void setWanIP(string $WanIP) 设置公网IP
 * @method string getPrivateIP() 获取内网IP
 * @method void setPrivateIP(string $PrivateIP) 设置内网IP
 * @method integer getNetworkType() 获取网络类型，1:vpc网络 2:基础网络 3:非腾讯云网络
 * @method void setNetworkType(integer $NetworkType) 设置网络类型，1:vpc网络 2:基础网络 3:非腾讯云网络
 * @method string getNetworkName() 获取网络名，vpc网络情况下会返回vpc_id
 * @method void setNetworkName(string $NetworkName) 设置网络名，vpc网络情况下会返回vpc_id
 * @method string getInstanceID() 获取实例ID
 * @method void setInstanceID(string $InstanceID) 设置实例ID
 * @method string getHostName() 获取主机名
 * @method void setHostName(string $HostName) 设置主机名
 */
class MachineExtraInfo extends AbstractModel
{
    /**
     * @var string 公网IP
     */
    public $WanIP;

    /**
     * @var string 内网IP
     */
    public $PrivateIP;

    /**
     * @var integer 网络类型，1:vpc网络 2:基础网络 3:非腾讯云网络
     */
    public $NetworkType;

    /**
     * @var string 网络名，vpc网络情况下会返回vpc_id
     */
    public $NetworkName;

    /**
     * @var string 实例ID
     */
    public $InstanceID;

    /**
     * @var string 主机名
     */
    public $HostName;

    /**
     * @param string $WanIP 公网IP
     * @param string $PrivateIP 内网IP
     * @param integer $NetworkType 网络类型，1:vpc网络 2:基础网络 3:非腾讯云网络
     * @param string $NetworkName 网络名，vpc网络情况下会返回vpc_id
     * @param string $InstanceID 实例ID
     * @param string $HostName 主机名
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
        if (array_key_exists("WanIP",$param) and $param["WanIP"] !== null) {
            $this->WanIP = $param["WanIP"];
        }

        if (array_key_exists("PrivateIP",$param) and $param["PrivateIP"] !== null) {
            $this->PrivateIP = $param["PrivateIP"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("NetworkName",$param) and $param["NetworkName"] !== null) {
            $this->NetworkName = $param["NetworkName"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }
    }
}
