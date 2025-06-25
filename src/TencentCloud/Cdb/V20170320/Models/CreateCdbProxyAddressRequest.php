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
 * CreateCdbProxyAddress请求参数结构体
 *
 * @method string getProxyGroupId() 获取代理组 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
 * @method void setProxyGroupId(string $ProxyGroupId) 设置代理组 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
 * @method string getWeightMode() 获取权重分配模式，
系统自动分配："system"， 自定义："custom"
 * @method void setWeightMode(string $WeightMode) 设置权重分配模式，
系统自动分配："system"， 自定义："custom"
 * @method boolean getIsKickOut() 获取是否开启延迟剔除，取值："true" | "false"
 * @method void setIsKickOut(boolean $IsKickOut) 设置是否开启延迟剔除，取值："true" | "false"
 * @method integer getMinCount() 获取最小保留数量，最小取值：0
 * @method void setMinCount(integer $MinCount) 设置最小保留数量，最小取值：0
 * @method integer getMaxDelay() 获取延迟剔除阈值，最小取值：1，范围：1 - 10000，整数。
 * @method void setMaxDelay(integer $MaxDelay) 设置延迟剔除阈值，最小取值：1，范围：1 - 10000，整数。
 * @method boolean getFailOver() 获取是否开启故障转移，取值："true" | "false"
 * @method void setFailOver(boolean $FailOver) 设置是否开启故障转移，取值："true" | "false"
 * @method boolean getAutoAddRo() 获取是否自动添加RO，取值："true" | "false"
 * @method void setAutoAddRo(boolean $AutoAddRo) 设置是否自动添加RO，取值："true" | "false"
 * @method boolean getReadOnly() 获取是否是只读，取值："true" | "false"
 * @method void setReadOnly(boolean $ReadOnly) 设置是否是只读，取值："true" | "false"
 * @method boolean getTransSplit() 获取是否开启事务分离，取值："true" | "false"
 * @method void setTransSplit(boolean $TransSplit) 设置是否开启事务分离，取值："true" | "false"
 * @method array getProxyAllocation() 获取读写权重分配
 * @method void setProxyAllocation(array $ProxyAllocation) 设置读写权重分配
 * @method string getUniqVpcId() 获取私有网络 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method void setUniqVpcId(string $UniqVpcId) 设置私有网络 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method string getUniqSubnetId() 获取私有子网 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置私有子网 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method boolean getConnectionPool() 获取是否开启连接池。默认关闭。
注意：如需使用数据库代理连接池能力，MySQL 8.0 主实例的内核小版本要大于等于 MySQL 8.0 20230630。
 * @method void setConnectionPool(boolean $ConnectionPool) 设置是否开启连接池。默认关闭。
注意：如需使用数据库代理连接池能力，MySQL 8.0 主实例的内核小版本要大于等于 MySQL 8.0 20230630。
 * @method string getDesc() 获取描述
 * @method void setDesc(string $Desc) 设置描述
 * @method string getVip() 获取IP 地址。不填则默认为所选 VPC 下支持的随机一个 IP。
 * @method void setVip(string $Vip) 设置IP 地址。不填则默认为所选 VPC 下支持的随机一个 IP。
 * @method integer getVPort() 获取端口。默认值3306。
 * @method void setVPort(integer $VPort) 设置端口。默认值3306。
 * @method array getSecurityGroup() 获取安全组
 * @method void setSecurityGroup(array $SecurityGroup) 设置安全组
 * @method string getConnectionPoolType() 获取连接池类型。可选值 transaction（事务级别连接池），connection（会话级别连接池），ConnectionPool 为 true 时生效。默认值：connection。
 * @method void setConnectionPoolType(string $ConnectionPoolType) 设置连接池类型。可选值 transaction（事务级别连接池），connection（会话级别连接池），ConnectionPool 为 true 时生效。默认值：connection。
 * @method boolean getAutoLoadBalance() 获取是否开启自适应负载均衡。默认关闭。
 * @method void setAutoLoadBalance(boolean $AutoLoadBalance) 设置是否开启自适应负载均衡。默认关闭。
 * @method string getAccessMode() 获取接入模式。nearBy - 就近访问，balance - 均衡分配，默认值：nearBy。
 * @method void setAccessMode(string $AccessMode) 设置接入模式。nearBy - 就近访问，balance - 均衡分配，默认值：nearBy。
 */
class CreateCdbProxyAddressRequest extends AbstractModel
{
    /**
     * @var string 代理组 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
     */
    public $ProxyGroupId;

    /**
     * @var string 权重分配模式，
系统自动分配："system"， 自定义："custom"
     */
    public $WeightMode;

    /**
     * @var boolean 是否开启延迟剔除，取值："true" | "false"
     */
    public $IsKickOut;

    /**
     * @var integer 最小保留数量，最小取值：0
     */
    public $MinCount;

    /**
     * @var integer 延迟剔除阈值，最小取值：1，范围：1 - 10000，整数。
     */
    public $MaxDelay;

    /**
     * @var boolean 是否开启故障转移，取值："true" | "false"
     */
    public $FailOver;

    /**
     * @var boolean 是否自动添加RO，取值："true" | "false"
     */
    public $AutoAddRo;

    /**
     * @var boolean 是否是只读，取值："true" | "false"
     */
    public $ReadOnly;

    /**
     * @var boolean 是否开启事务分离，取值："true" | "false"
     */
    public $TransSplit;

    /**
     * @var array 读写权重分配
     */
    public $ProxyAllocation;

    /**
     * @var string 私有网络 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     */
    public $UniqVpcId;

    /**
     * @var string 私有子网 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     */
    public $UniqSubnetId;

    /**
     * @var boolean 是否开启连接池。默认关闭。
注意：如需使用数据库代理连接池能力，MySQL 8.0 主实例的内核小版本要大于等于 MySQL 8.0 20230630。
     */
    public $ConnectionPool;

    /**
     * @var string 描述
     */
    public $Desc;

    /**
     * @var string IP 地址。不填则默认为所选 VPC 下支持的随机一个 IP。
     */
    public $Vip;

    /**
     * @var integer 端口。默认值3306。
     */
    public $VPort;

    /**
     * @var array 安全组
     */
    public $SecurityGroup;

    /**
     * @var string 连接池类型。可选值 transaction（事务级别连接池），connection（会话级别连接池），ConnectionPool 为 true 时生效。默认值：connection。
     */
    public $ConnectionPoolType;

    /**
     * @var boolean 是否开启自适应负载均衡。默认关闭。
     */
    public $AutoLoadBalance;

    /**
     * @var string 接入模式。nearBy - 就近访问，balance - 均衡分配，默认值：nearBy。
     */
    public $AccessMode;

    /**
     * @param string $ProxyGroupId 代理组 ID。可通过 [DescribeCdbProxyInfo](https://cloud.tencent.com/document/api/236/90585) 接口获取。
     * @param string $WeightMode 权重分配模式，
系统自动分配："system"， 自定义："custom"
     * @param boolean $IsKickOut 是否开启延迟剔除，取值："true" | "false"
     * @param integer $MinCount 最小保留数量，最小取值：0
     * @param integer $MaxDelay 延迟剔除阈值，最小取值：1，范围：1 - 10000，整数。
     * @param boolean $FailOver 是否开启故障转移，取值："true" | "false"
     * @param boolean $AutoAddRo 是否自动添加RO，取值："true" | "false"
     * @param boolean $ReadOnly 是否是只读，取值："true" | "false"
     * @param boolean $TransSplit 是否开启事务分离，取值："true" | "false"
     * @param array $ProxyAllocation 读写权重分配
     * @param string $UniqVpcId 私有网络 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     * @param string $UniqSubnetId 私有子网 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     * @param boolean $ConnectionPool 是否开启连接池。默认关闭。
注意：如需使用数据库代理连接池能力，MySQL 8.0 主实例的内核小版本要大于等于 MySQL 8.0 20230630。
     * @param string $Desc 描述
     * @param string $Vip IP 地址。不填则默认为所选 VPC 下支持的随机一个 IP。
     * @param integer $VPort 端口。默认值3306。
     * @param array $SecurityGroup 安全组
     * @param string $ConnectionPoolType 连接池类型。可选值 transaction（事务级别连接池），connection（会话级别连接池），ConnectionPool 为 true 时生效。默认值：connection。
     * @param boolean $AutoLoadBalance 是否开启自适应负载均衡。默认关闭。
     * @param string $AccessMode 接入模式。nearBy - 就近访问，balance - 均衡分配，默认值：nearBy。
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
        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("WeightMode",$param) and $param["WeightMode"] !== null) {
            $this->WeightMode = $param["WeightMode"];
        }

        if (array_key_exists("IsKickOut",$param) and $param["IsKickOut"] !== null) {
            $this->IsKickOut = $param["IsKickOut"];
        }

        if (array_key_exists("MinCount",$param) and $param["MinCount"] !== null) {
            $this->MinCount = $param["MinCount"];
        }

        if (array_key_exists("MaxDelay",$param) and $param["MaxDelay"] !== null) {
            $this->MaxDelay = $param["MaxDelay"];
        }

        if (array_key_exists("FailOver",$param) and $param["FailOver"] !== null) {
            $this->FailOver = $param["FailOver"];
        }

        if (array_key_exists("AutoAddRo",$param) and $param["AutoAddRo"] !== null) {
            $this->AutoAddRo = $param["AutoAddRo"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }

        if (array_key_exists("TransSplit",$param) and $param["TransSplit"] !== null) {
            $this->TransSplit = $param["TransSplit"];
        }

        if (array_key_exists("ProxyAllocation",$param) and $param["ProxyAllocation"] !== null) {
            $this->ProxyAllocation = [];
            foreach ($param["ProxyAllocation"] as $key => $value){
                $obj = new ProxyAllocation();
                $obj->deserialize($value);
                array_push($this->ProxyAllocation, $obj);
            }
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("ConnectionPool",$param) and $param["ConnectionPool"] !== null) {
            $this->ConnectionPool = $param["ConnectionPool"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VPort",$param) and $param["VPort"] !== null) {
            $this->VPort = $param["VPort"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("ConnectionPoolType",$param) and $param["ConnectionPoolType"] !== null) {
            $this->ConnectionPoolType = $param["ConnectionPoolType"];
        }

        if (array_key_exists("AutoLoadBalance",$param) and $param["AutoLoadBalance"] !== null) {
            $this->AutoLoadBalance = $param["AutoLoadBalance"];
        }

        if (array_key_exists("AccessMode",$param) and $param["AccessMode"] !== null) {
            $this->AccessMode = $param["AccessMode"];
        }
    }
}
