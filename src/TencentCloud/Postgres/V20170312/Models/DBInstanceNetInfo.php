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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述实例的网络连接信息。
 *
 * @method string getAddress() 获取DNS域名
 * @method void setAddress(string $Address) 设置DNS域名
 * @method string getIp() 获取IP地址
 * @method void setIp(string $Ip) 设置IP地址
 * @method integer getPort() 获取连接Port地址
 * @method void setPort(integer $Port) 设置连接Port地址
 * @method string getNetType() 获取网络类型，1、inner（基础网络内网地址）；2、private（私有网络内网地址）；3、public（基础网络或私有网络的外网地址）；
 * @method void setNetType(string $NetType) 设置网络类型，1、inner（基础网络内网地址）；2、private（私有网络内网地址）；3、public（基础网络或私有网络的外网地址）；
 * @method string getStatus() 获取网络连接状态，1、initing（未开通）；2、opened（已开通）；3、closed（已关闭）；4、opening（开通中）；5、closing（关闭中）；
 * @method void setStatus(string $Status) 设置网络连接状态，1、initing（未开通）；2、opened（已开通）；3、closed（已关闭）；4、opening（开通中）；5、closing（关闭中）；
 * @method string getVpcId() 获取私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocolType() 获取连接数据库的协议类型，当前支持：postgresql、mssql（MSSQL兼容语法）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocolType(string $ProtocolType) 设置连接数据库的协议类型，当前支持：postgresql、mssql（MSSQL兼容语法）
注意：此字段可能返回 null，表示取不到有效值。
 */
class DBInstanceNetInfo extends AbstractModel
{
    /**
     * @var string DNS域名
     */
    public $Address;

    /**
     * @var string IP地址
     */
    public $Ip;

    /**
     * @var integer 连接Port地址
     */
    public $Port;

    /**
     * @var string 网络类型，1、inner（基础网络内网地址）；2、private（私有网络内网地址）；3、public（基础网络或私有网络的外网地址）；
     */
    public $NetType;

    /**
     * @var string 网络连接状态，1、initing（未开通）；2、opened（已开通）；3、closed（已关闭）；4、opening（开通中）；5、closing（关闭中）；
     */
    public $Status;

    /**
     * @var string 私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var string 连接数据库的协议类型，当前支持：postgresql、mssql（MSSQL兼容语法）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProtocolType;

    /**
     * @param string $Address DNS域名
     * @param string $Ip IP地址
     * @param integer $Port 连接Port地址
     * @param string $NetType 网络类型，1、inner（基础网络内网地址）；2、private（私有网络内网地址）；3、public（基础网络或私有网络的外网地址）；
     * @param string $Status 网络连接状态，1、initing（未开通）；2、opened（已开通）；3、closed（已关闭）；4、opening（开通中）；5、closing（关闭中）；
     * @param string $VpcId 私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 子网ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProtocolType 连接数据库的协议类型，当前支持：postgresql、mssql（MSSQL兼容语法）
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
