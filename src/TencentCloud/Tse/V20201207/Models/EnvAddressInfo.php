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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多环境网络信息
 *
 * @method string getEnvName() 获取环境名
 * @method void setEnvName(string $EnvName) 设置环境名
 * @method boolean getEnableConfigInternet() 获取是否开启config公网
 * @method void setEnableConfigInternet(boolean $EnableConfigInternet) 设置是否开启config公网
 * @method string getConfigInternetServiceIp() 获取config公网ip
 * @method void setConfigInternetServiceIp(string $ConfigInternetServiceIp) 设置config公网ip
 * @method string getConfigIntranetAddress() 获取config内网访问地址
 * @method void setConfigIntranetAddress(string $ConfigIntranetAddress) 设置config内网访问地址
 * @method boolean getEnableConfigIntranet() 获取是否开启config内网clb
 * @method void setEnableConfigIntranet(boolean $EnableConfigIntranet) 设置是否开启config内网clb
 * @method integer getInternetBandWidth() 获取客户端公网带宽
 * @method void setInternetBandWidth(integer $InternetBandWidth) 设置客户端公网带宽
 * @method CLBMultiRegion getCLBMultiRegion() 获取客户端公网CLB多可用区信息
 * @method void setCLBMultiRegion(CLBMultiRegion $CLBMultiRegion) 设置客户端公网CLB多可用区信息
 */
class EnvAddressInfo extends AbstractModel
{
    /**
     * @var string 环境名
     */
    public $EnvName;

    /**
     * @var boolean 是否开启config公网
     */
    public $EnableConfigInternet;

    /**
     * @var string config公网ip
     */
    public $ConfigInternetServiceIp;

    /**
     * @var string config内网访问地址
     */
    public $ConfigIntranetAddress;

    /**
     * @var boolean 是否开启config内网clb
     */
    public $EnableConfigIntranet;

    /**
     * @var integer 客户端公网带宽
     */
    public $InternetBandWidth;

    /**
     * @var CLBMultiRegion 客户端公网CLB多可用区信息
     */
    public $CLBMultiRegion;

    /**
     * @param string $EnvName 环境名
     * @param boolean $EnableConfigInternet 是否开启config公网
     * @param string $ConfigInternetServiceIp config公网ip
     * @param string $ConfigIntranetAddress config内网访问地址
     * @param boolean $EnableConfigIntranet 是否开启config内网clb
     * @param integer $InternetBandWidth 客户端公网带宽
     * @param CLBMultiRegion $CLBMultiRegion 客户端公网CLB多可用区信息
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
        if (array_key_exists("EnvName",$param) and $param["EnvName"] !== null) {
            $this->EnvName = $param["EnvName"];
        }

        if (array_key_exists("EnableConfigInternet",$param) and $param["EnableConfigInternet"] !== null) {
            $this->EnableConfigInternet = $param["EnableConfigInternet"];
        }

        if (array_key_exists("ConfigInternetServiceIp",$param) and $param["ConfigInternetServiceIp"] !== null) {
            $this->ConfigInternetServiceIp = $param["ConfigInternetServiceIp"];
        }

        if (array_key_exists("ConfigIntranetAddress",$param) and $param["ConfigIntranetAddress"] !== null) {
            $this->ConfigIntranetAddress = $param["ConfigIntranetAddress"];
        }

        if (array_key_exists("EnableConfigIntranet",$param) and $param["EnableConfigIntranet"] !== null) {
            $this->EnableConfigIntranet = $param["EnableConfigIntranet"];
        }

        if (array_key_exists("InternetBandWidth",$param) and $param["InternetBandWidth"] !== null) {
            $this->InternetBandWidth = $param["InternetBandWidth"];
        }

        if (array_key_exists("CLBMultiRegion",$param) and $param["CLBMultiRegion"] !== null) {
            $this->CLBMultiRegion = new CLBMultiRegion();
            $this->CLBMultiRegion->deserialize($param["CLBMultiRegion"]);
        }
    }
}
