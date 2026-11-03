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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述实例的网络连接信息。
 *
 * @method string getAddress() 获取<p>DNS域名</p>
 * @method void setAddress(string $Address) 设置<p>DNS域名</p>
 * @method string getIp() 获取<p>IP地址</p>
 * @method void setIp(string $Ip) 设置<p>IP地址</p>
 * @method integer getPort() 获取<p>连接Port地址</p>
 * @method void setPort(integer $Port) 设置<p>连接Port地址</p>
 * @method string getNetType() 获取<p>网络类型，1、inner（基础网络内网地址）；2、private（私有网络内网地址）；3、public（基础网络或私有网络的外网地址）；</p>
 * @method void setNetType(string $NetType) 设置<p>网络类型，1、inner（基础网络内网地址）；2、private（私有网络内网地址）；3、public（基础网络或私有网络的外网地址）；</p>
 * @method string getStatus() 获取<p>网络连接状态，1、initing（未开通）；2、opened（已开通）；3、closed（已关闭）；4、opening（开通中）；5、closing（关闭中）；</p>
 * @method void setStatus(string $Status) 设置<p>网络连接状态，1、initing（未开通）；2、opened（已开通）；3、closed（已关闭）；4、opening（开通中）；5、closing（关闭中）；</p>
 * @method string getVpcId() 获取<p>私有网络ID</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络ID</p>
 * @method string getSubnetId() 获取<p>子网ID</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网ID</p>
 * @method string getProtocolType() 获取<p>连接数据库的协议类型，当前支持：postgresql、mssql（MSSQL兼容语法）</p>
 * @method void setProtocolType(string $ProtocolType) 设置<p>连接数据库的协议类型，当前支持：postgresql、mssql（MSSQL兼容语法）</p>
 */
class DBInstanceNetInfo extends AbstractModel
{
    /**
     * @var string <p>DNS域名</p>
     */
    public $Address;

    /**
     * @var string <p>IP地址</p>
     */
    public $Ip;

    /**
     * @var integer <p>连接Port地址</p>
     */
    public $Port;

    /**
     * @var string <p>网络类型，1、inner（基础网络内网地址）；2、private（私有网络内网地址）；3、public（基础网络或私有网络的外网地址）；</p>
     */
    public $NetType;

    /**
     * @var string <p>网络连接状态，1、initing（未开通）；2、opened（已开通）；3、closed（已关闭）；4、opening（开通中）；5、closing（关闭中）；</p>
     */
    public $Status;

    /**
     * @var string <p>私有网络ID</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网ID</p>
     */
    public $SubnetId;

    /**
     * @var string <p>连接数据库的协议类型，当前支持：postgresql、mssql（MSSQL兼容语法）</p>
     */
    public $ProtocolType;

    /**
     * @param string $Address <p>DNS域名</p>
     * @param string $Ip <p>IP地址</p>
     * @param integer $Port <p>连接Port地址</p>
     * @param string $NetType <p>网络类型，1、inner（基础网络内网地址）；2、private（私有网络内网地址）；3、public（基础网络或私有网络的外网地址）；</p>
     * @param string $Status <p>网络连接状态，1、initing（未开通）；2、opened（已开通）；3、closed（已关闭）；4、opening（开通中）；5、closing（关闭中）；</p>
     * @param string $VpcId <p>私有网络ID</p>
     * @param string $SubnetId <p>子网ID</p>
     * @param string $ProtocolType <p>连接数据库的协议类型，当前支持：postgresql、mssql（MSSQL兼容语法）</p>
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
        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ProtocolType",$param) and $param["ProtocolType"] !== null) {
            $this->ProtocolType = $param["ProtocolType"];
        }
    }
}
