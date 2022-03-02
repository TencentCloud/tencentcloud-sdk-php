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
namespace TencentCloud\Tdcpg\V20211118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群的连接点信息，包含访问数据库的相关网络信息
 *
 * @method string getEndpointId() 获取连接点ID，集群内唯一
 * @method void setEndpointId(string $EndpointId) 设置连接点ID，集群内唯一
 * @method string getClusterId() 获取连接点所属的集群ID
 * @method void setClusterId(string $ClusterId) 设置连接点所属的集群ID
 * @method string getEndpointName() 获取连接点名字，默认和连接点ID一致
 * @method void setEndpointName(string $EndpointName) 设置连接点名字，默认和连接点ID一致
 * @method string getEndpointType() 获取连接点类型
 - RW : 读写
 - RO : 只读
 * @method void setEndpointType(string $EndpointType) 设置连接点类型
 - RW : 读写
 - RO : 只读
 * @method string getVpcId() 获取私有网络VPC实例ID
 * @method void setVpcId(string $VpcId) 设置私有网络VPC实例ID
 * @method string getSubnetId() 获取私有网络VPC下子网实例ID
 * @method void setSubnetId(string $SubnetId) 设置私有网络VPC下子网实例ID
 * @method string getPrivateIp() 获取私有网络VPC下用于访问数据库的IP
 * @method void setPrivateIp(string $PrivateIp) 设置私有网络VPC下用于访问数据库的IP
 * @method integer getPrivatePort() 获取私有网络VPC下用于访问数据库的端口
 * @method void setPrivatePort(integer $PrivatePort) 设置私有网络VPC下用于访问数据库的端口
 * @method string getWanIp() 获取公共网络用户访问数据库的IP
 * @method void setWanIp(string $WanIp) 设置公共网络用户访问数据库的IP
 * @method integer getWanPort() 获取公共网络用户访问数据库的端口
 * @method void setWanPort(integer $WanPort) 设置公共网络用户访问数据库的端口
 * @method string getWanDomain() 获取公共网络用户访问数据库的域名
 * @method void setWanDomain(string $WanDomain) 设置公共网络用户访问数据库的域名
 */
class Endpoint extends AbstractModel
{
    /**
     * @var string 连接点ID，集群内唯一
     */
    public $EndpointId;

    /**
     * @var string 连接点所属的集群ID
     */
    public $ClusterId;

    /**
     * @var string 连接点名字，默认和连接点ID一致
     */
    public $EndpointName;

    /**
     * @var string 连接点类型
 - RW : 读写
 - RO : 只读
     */
    public $EndpointType;

    /**
     * @var string 私有网络VPC实例ID
     */
    public $VpcId;

    /**
     * @var string 私有网络VPC下子网实例ID
     */
    public $SubnetId;

    /**
     * @var string 私有网络VPC下用于访问数据库的IP
     */
    public $PrivateIp;

    /**
     * @var integer 私有网络VPC下用于访问数据库的端口
     */
    public $PrivatePort;

    /**
     * @var string 公共网络用户访问数据库的IP
     */
    public $WanIp;

    /**
     * @var integer 公共网络用户访问数据库的端口
     */
    public $WanPort;

    /**
     * @var string 公共网络用户访问数据库的域名
     */
    public $WanDomain;

    /**
     * @param string $EndpointId 连接点ID，集群内唯一
     * @param string $ClusterId 连接点所属的集群ID
     * @param string $EndpointName 连接点名字，默认和连接点ID一致
     * @param string $EndpointType 连接点类型
 - RW : 读写
 - RO : 只读
     * @param string $VpcId 私有网络VPC实例ID
     * @param string $SubnetId 私有网络VPC下子网实例ID
     * @param string $PrivateIp 私有网络VPC下用于访问数据库的IP
     * @param integer $PrivatePort 私有网络VPC下用于访问数据库的端口
     * @param string $WanIp 公共网络用户访问数据库的IP
     * @param integer $WanPort 公共网络用户访问数据库的端口
     * @param string $WanDomain 公共网络用户访问数据库的域名
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
        if (array_key_exists("EndpointId",$param) and $param["EndpointId"] !== null) {
            $this->EndpointId = $param["EndpointId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("EndpointName",$param) and $param["EndpointName"] !== null) {
            $this->EndpointName = $param["EndpointName"];
        }

        if (array_key_exists("EndpointType",$param) and $param["EndpointType"] !== null) {
            $this->EndpointType = $param["EndpointType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("PrivatePort",$param) and $param["PrivatePort"] !== null) {
            $this->PrivatePort = $param["PrivatePort"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("WanPort",$param) and $param["WanPort"] !== null) {
            $this->WanPort = $param["WanPort"];
        }

        if (array_key_exists("WanDomain",$param) and $param["WanDomain"] !== null) {
            $this->WanDomain = $param["WanDomain"];
        }
    }
}
