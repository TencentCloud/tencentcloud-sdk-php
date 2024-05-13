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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCdbProxy请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getUniqVpcId() 获取私有网络ID
 * @method void setUniqVpcId(string $UniqVpcId) 设置私有网络ID
 * @method string getUniqSubnetId() 获取私有子网ID
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置私有子网ID
 * @method array getProxyNodeCustom() 获取节点规格配置
备注：数据库代理支持的节点规格为：2C4000MB、4C8000MB、8C16000MB。
示例中参数说明：
NodeCount：节点个数。
Region：节点地域。
Zone：节点可用区。
Cpu：单个代理节点核数（单位：核）。
Mem：单个代理节点内存数（单位：MB）。
 * @method void setProxyNodeCustom(array $ProxyNodeCustom) 设置节点规格配置
备注：数据库代理支持的节点规格为：2C4000MB、4C8000MB、8C16000MB。
示例中参数说明：
NodeCount：节点个数。
Region：节点地域。
Zone：节点可用区。
Cpu：单个代理节点核数（单位：核）。
Mem：单个代理节点内存数（单位：MB）。
 * @method array getSecurityGroup() 获取安全组
 * @method void setSecurityGroup(array $SecurityGroup) 设置安全组
 * @method string getDesc() 获取描述
 * @method void setDesc(string $Desc) 设置描述
 * @method integer getConnectionPoolLimit() 获取连接池阈值
注意：如需使用数据库代理连接池能力，MySQL 8.0 主实例的内核小版本要大于等于 MySQL 8.0 20230630。
 * @method void setConnectionPoolLimit(integer $ConnectionPoolLimit) 设置连接池阈值
注意：如需使用数据库代理连接池能力，MySQL 8.0 主实例的内核小版本要大于等于 MySQL 8.0 20230630。
 * @method string getProxyVersion() 获取指定要购买的 proxy 内核版本。不填则默认发货最新版本的 proxy。
 * @method void setProxyVersion(string $ProxyVersion) 设置指定要购买的 proxy 内核版本。不填则默认发货最新版本的 proxy。
 */
class CreateCdbProxyRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 私有网络ID
     */
    public $UniqVpcId;

    /**
     * @var string 私有子网ID
     */
    public $UniqSubnetId;

    /**
     * @var array 节点规格配置
备注：数据库代理支持的节点规格为：2C4000MB、4C8000MB、8C16000MB。
示例中参数说明：
NodeCount：节点个数。
Region：节点地域。
Zone：节点可用区。
Cpu：单个代理节点核数（单位：核）。
Mem：单个代理节点内存数（单位：MB）。
     */
    public $ProxyNodeCustom;

    /**
     * @var array 安全组
     */
    public $SecurityGroup;

    /**
     * @var string 描述
     */
    public $Desc;

    /**
     * @var integer 连接池阈值
注意：如需使用数据库代理连接池能力，MySQL 8.0 主实例的内核小版本要大于等于 MySQL 8.0 20230630。
     */
    public $ConnectionPoolLimit;

    /**
     * @var string 指定要购买的 proxy 内核版本。不填则默认发货最新版本的 proxy。
     */
    public $ProxyVersion;

    /**
     * @param string $InstanceId 实例ID
     * @param string $UniqVpcId 私有网络ID
     * @param string $UniqSubnetId 私有子网ID
     * @param array $ProxyNodeCustom 节点规格配置
备注：数据库代理支持的节点规格为：2C4000MB、4C8000MB、8C16000MB。
示例中参数说明：
NodeCount：节点个数。
Region：节点地域。
Zone：节点可用区。
Cpu：单个代理节点核数（单位：核）。
Mem：单个代理节点内存数（单位：MB）。
     * @param array $SecurityGroup 安全组
     * @param string $Desc 描述
     * @param integer $ConnectionPoolLimit 连接池阈值
注意：如需使用数据库代理连接池能力，MySQL 8.0 主实例的内核小版本要大于等于 MySQL 8.0 20230630。
     * @param string $ProxyVersion 指定要购买的 proxy 内核版本。不填则默认发货最新版本的 proxy。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("ProxyNodeCustom",$param) and $param["ProxyNodeCustom"] !== null) {
            $this->ProxyNodeCustom = [];
            foreach ($param["ProxyNodeCustom"] as $key => $value){
                $obj = new ProxyNodeCustom();
                $obj->deserialize($value);
                array_push($this->ProxyNodeCustom, $obj);
            }
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("ConnectionPoolLimit",$param) and $param["ConnectionPoolLimit"] !== null) {
            $this->ConnectionPoolLimit = $param["ConnectionPoolLimit"];
        }

        if (array_key_exists("ProxyVersion",$param) and $param["ProxyVersion"] !== null) {
            $this->ProxyVersion = $param["ProxyVersion"];
        }
    }
}
