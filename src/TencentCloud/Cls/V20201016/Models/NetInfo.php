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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Splunk投递任务-目标配置网络信息相关
 *
 * @method string getHost() 获取网络地址
 * @method void setHost(string $Host) 设置网络地址
 * @method integer getPort() 获取端口
 * @method void setPort(integer $Port) 设置端口
 * @method string getToken() 获取认证token
 * @method void setToken(string $Token) 设置认证token
 * @method integer getNetType() 获取网络类型;1：内网；2:外网
 * @method void setNetType(integer $NetType) 设置网络类型;1：内网；2:外网
 * @method string getVpcId() 获取所属网络；如果网络类型为内网，该字段必填
 * @method void setVpcId(string $VpcId) 设置所属网络；如果网络类型为内网，该字段必填
 * @method integer getVirtualGatewayType() 获取网络服务类型；如果网络类型为内网，该字段必填
- 0:云上cvm
- 3:云上专线网关
- 11:云联网
- 1025:云上clb
 * @method void setVirtualGatewayType(integer $VirtualGatewayType) 设置网络服务类型；如果网络类型为内网，该字段必填
- 0:云上cvm
- 3:云上专线网关
- 11:云联网
- 1025:云上clb
 * @method boolean getIsSSL() 获取认证机制，是否使用SSL，默认不使用
 * @method void setIsSSL(boolean $IsSSL) 设置认证机制，是否使用SSL，默认不使用
 */
class NetInfo extends AbstractModel
{
    /**
     * @var string 网络地址
     */
    public $Host;

    /**
     * @var integer 端口
     */
    public $Port;

    /**
     * @var string 认证token
     */
    public $Token;

    /**
     * @var integer 网络类型;1：内网；2:外网
     */
    public $NetType;

    /**
     * @var string 所属网络；如果网络类型为内网，该字段必填
     */
    public $VpcId;

    /**
     * @var integer 网络服务类型；如果网络类型为内网，该字段必填
- 0:云上cvm
- 3:云上专线网关
- 11:云联网
- 1025:云上clb
     */
    public $VirtualGatewayType;

    /**
     * @var boolean 认证机制，是否使用SSL，默认不使用
     */
    public $IsSSL;

    /**
     * @param string $Host 网络地址
     * @param integer $Port 端口
     * @param string $Token 认证token
     * @param integer $NetType 网络类型;1：内网；2:外网
     * @param string $VpcId 所属网络；如果网络类型为内网，该字段必填
     * @param integer $VirtualGatewayType 网络服务类型；如果网络类型为内网，该字段必填
- 0:云上cvm
- 3:云上专线网关
- 11:云联网
- 1025:云上clb
     * @param boolean $IsSSL 认证机制，是否使用SSL，默认不使用
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VirtualGatewayType",$param) and $param["VirtualGatewayType"] !== null) {
            $this->VirtualGatewayType = $param["VirtualGatewayType"];
        }

        if (array_key_exists("IsSSL",$param) and $param["IsSSL"] !== null) {
            $this->IsSSL = $param["IsSSL"];
        }
    }
}
