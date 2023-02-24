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
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigIntranetAddress(string $ConfigIntranetAddress) 设置config内网访问地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableConfigIntranet() 获取是否开启config内网clb
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableConfigIntranet(boolean $EnableConfigIntranet) 设置是否开启config内网clb
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInternetBandWidth() 获取客户端公网带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternetBandWidth(integer $InternetBandWidth) 设置客户端公网带宽
注意：此字段可能返回 null，表示取不到有效值。
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
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigIntranetAddress;

    /**
     * @var boolean 是否开启config内网clb
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableConfigIntranet;

    /**
     * @var integer 客户端公网带宽
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternetBandWidth;

    /**
     * @param string $EnvName 环境名
     * @param boolean $EnableConfigInternet 是否开启config公网
     * @param string $ConfigInternetServiceIp config公网ip
     * @param string $ConfigIntranetAddress config内网访问地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableConfigIntranet 是否开启config内网clb
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InternetBandWidth 客户端公网带宽
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
    }
}
