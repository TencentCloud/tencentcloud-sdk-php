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
 * 批量proxy接入点配置
 *
 * @method string getUniqueVpcId() 获取<p>vpc id</p>
 * @method void setUniqueVpcId(string $UniqueVpcId) 设置<p>vpc id</p>
 * @method string getUniqueSubnetId() 获取<p>子网ID</p>
 * @method void setUniqueSubnetId(string $UniqueSubnetId) 设置<p>子网ID</p>
 * @method array getSecurityGroupIds() 获取<p>安全组列表</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>安全组列表</p>
 * @method string getWeightMode() 获取<p>权重模式</p><p>枚举值：</p><ul><li>system： 系统分配</li><li>custom： 自定义</li></ul>
 * @method void setWeightMode(string $WeightMode) 设置<p>权重模式</p><p>枚举值：</p><ul><li>system： 系统分配</li><li>custom： 自定义</li></ul>
 * @method string getAutoAddRo() 获取<p>是否自动添加只读实例</p><p>枚举值：</p><ul><li>yes： 是</li><li>no： 否</li></ul>
 * @method void setAutoAddRo(string $AutoAddRo) 设置<p>是否自动添加只读实例</p><p>枚举值：</p><ul><li>yes： 是</li><li>no： 否</li></ul>
 * @method string getRwType() 获取<p>读写类型</p><p>枚举值：</p><ul><li>READWRITE： 读写</li><li>READONLY： 只读</li></ul>
 * @method void setRwType(string $RwType) 设置<p>读写类型</p><p>枚举值：</p><ul><li>READWRITE： 读写</li><li>READONLY： 只读</li></ul>
 * @method string getFailOver() 获取<p>是否开启故障转移</p><p>枚举值：</p><ul><li>yes： 是</li><li>no： 否</li></ul>
 * @method void setFailOver(string $FailOver) 设置<p>是否开启故障转移</p><p>枚举值：</p><ul><li>yes： 是</li><li>no： 否</li></ul>
 * @method integer getConsistencyTimeOut() 获取<p>一致性超时时间</p>
 * @method void setConsistencyTimeOut(integer $ConsistencyTimeOut) 设置<p>一致性超时时间</p>
 * @method string getConsistencyType() 获取<p>一致性类型。</p><p>枚举值：</p><ul><li>eventual： 最终一致性</li><li>global： 全局一致性</li><li>session： 会话一致性</li></ul><p>仅当 RwType 参数值为 READWRITE 时，才支持设置此项。</p>
 * @method void setConsistencyType(string $ConsistencyType) 设置<p>一致性类型。</p><p>枚举值：</p><ul><li>eventual： 最终一致性</li><li>global： 全局一致性</li><li>session： 会话一致性</li></ul><p>仅当 RwType 参数值为 READWRITE 时，才支持设置此项。</p>
 * @method boolean getTransSplit() 获取<p>是否开启事务拆分。</p><p>开启后，在一个事务中拆分读和写到不同的实例上去执行。</p>
 * @method void setTransSplit(boolean $TransSplit) 设置<p>是否开启事务拆分。</p><p>开启后，在一个事务中拆分读和写到不同的实例上去执行。</p>
 * @method string getAccessMode() 获取<p>接入模式</p><p>枚举值：</p><ul><li>nearby： 就近访问</li><li>balance： 均衡分配</li></ul>
 * @method void setAccessMode(string $AccessMode) 设置<p>接入模式</p><p>枚举值：</p><ul><li>nearby： 就近访问</li><li>balance： 均衡分配</li></ul>
 * @method array getInstanceWeights() 获取<p>实例及权重</p>
 * @method void setInstanceWeights(array $InstanceWeights) 设置<p>实例及权重</p>
 * @method string getDescription() 获取<p>描述信息</p>
 * @method void setDescription(string $Description) 设置<p>描述信息</p>
 * @method string getLoadBalanceMode() 获取<p>自动负载模式</p><p>枚举值：</p><ul><li>static： 静态</li><li>dynamic： 自适应</li></ul>
 * @method void setLoadBalanceMode(string $LoadBalanceMode) 设置<p>自动负载模式</p><p>枚举值：</p><ul><li>static： 静态</li><li>dynamic： 自适应</li></ul>
 * @method string getOpenConnectionPool() 获取<p>是否开启连接池</p><p>枚举值：</p><ul><li>yes： 打开</li><li>no： 不打开</li></ul>
 * @method void setOpenConnectionPool(string $OpenConnectionPool) 设置<p>是否开启连接池</p><p>枚举值：</p><ul><li>yes： 打开</li><li>no： 不打开</li></ul>
 * @method string getConnectionPoolType() 获取<p>连接池类型</p><p>枚举值：</p><ul><li>SessionConnectionPool： 会话级连接池</li><li>TransactionConnectionPool： 事物级连接池</li></ul>
 * @method void setConnectionPoolType(string $ConnectionPoolType) 设置<p>连接池类型</p><p>枚举值：</p><ul><li>SessionConnectionPool： 会话级连接池</li><li>TransactionConnectionPool： 事物级连接池</li></ul>
 * @method integer getConnectionPoolTimeOut() 获取<p>连接池阀值</p>
 * @method void setConnectionPoolTimeOut(integer $ConnectionPoolTimeOut) 设置<p>连接池阀值</p>
 */
class ProxyEndPointItem extends AbstractModel
{
    /**
     * @var string <p>vpc id</p>
     */
    public $UniqueVpcId;

    /**
     * @var string <p>子网ID</p>
     */
    public $UniqueSubnetId;

    /**
     * @var array <p>安全组列表</p>
     */
    public $SecurityGroupIds;

    /**
     * @var string <p>权重模式</p><p>枚举值：</p><ul><li>system： 系统分配</li><li>custom： 自定义</li></ul>
     */
    public $WeightMode;

    /**
     * @var string <p>是否自动添加只读实例</p><p>枚举值：</p><ul><li>yes： 是</li><li>no： 否</li></ul>
     */
    public $AutoAddRo;

    /**
     * @var string <p>读写类型</p><p>枚举值：</p><ul><li>READWRITE： 读写</li><li>READONLY： 只读</li></ul>
     */
    public $RwType;

    /**
     * @var string <p>是否开启故障转移</p><p>枚举值：</p><ul><li>yes： 是</li><li>no： 否</li></ul>
     */
    public $FailOver;

    /**
     * @var integer <p>一致性超时时间</p>
     */
    public $ConsistencyTimeOut;

    /**
     * @var string <p>一致性类型。</p><p>枚举值：</p><ul><li>eventual： 最终一致性</li><li>global： 全局一致性</li><li>session： 会话一致性</li></ul><p>仅当 RwType 参数值为 READWRITE 时，才支持设置此项。</p>
     */
    public $ConsistencyType;

    /**
     * @var boolean <p>是否开启事务拆分。</p><p>开启后，在一个事务中拆分读和写到不同的实例上去执行。</p>
     */
    public $TransSplit;

    /**
     * @var string <p>接入模式</p><p>枚举值：</p><ul><li>nearby： 就近访问</li><li>balance： 均衡分配</li></ul>
     */
    public $AccessMode;

    /**
     * @var array <p>实例及权重</p>
     */
    public $InstanceWeights;

    /**
     * @var string <p>描述信息</p>
     */
    public $Description;

    /**
     * @var string <p>自动负载模式</p><p>枚举值：</p><ul><li>static： 静态</li><li>dynamic： 自适应</li></ul>
     */
    public $LoadBalanceMode;

    /**
     * @var string <p>是否开启连接池</p><p>枚举值：</p><ul><li>yes： 打开</li><li>no： 不打开</li></ul>
     */
    public $OpenConnectionPool;

    /**
     * @var string <p>连接池类型</p><p>枚举值：</p><ul><li>SessionConnectionPool： 会话级连接池</li><li>TransactionConnectionPool： 事物级连接池</li></ul>
     */
    public $ConnectionPoolType;

    /**
     * @var integer <p>连接池阀值</p>
     */
    public $ConnectionPoolTimeOut;

    /**
     * @param string $UniqueVpcId <p>vpc id</p>
     * @param string $UniqueSubnetId <p>子网ID</p>
     * @param array $SecurityGroupIds <p>安全组列表</p>
     * @param string $WeightMode <p>权重模式</p><p>枚举值：</p><ul><li>system： 系统分配</li><li>custom： 自定义</li></ul>
     * @param string $AutoAddRo <p>是否自动添加只读实例</p><p>枚举值：</p><ul><li>yes： 是</li><li>no： 否</li></ul>
     * @param string $RwType <p>读写类型</p><p>枚举值：</p><ul><li>READWRITE： 读写</li><li>READONLY： 只读</li></ul>
     * @param string $FailOver <p>是否开启故障转移</p><p>枚举值：</p><ul><li>yes： 是</li><li>no： 否</li></ul>
     * @param integer $ConsistencyTimeOut <p>一致性超时时间</p>
     * @param string $ConsistencyType <p>一致性类型。</p><p>枚举值：</p><ul><li>eventual： 最终一致性</li><li>global： 全局一致性</li><li>session： 会话一致性</li></ul><p>仅当 RwType 参数值为 READWRITE 时，才支持设置此项。</p>
     * @param boolean $TransSplit <p>是否开启事务拆分。</p><p>开启后，在一个事务中拆分读和写到不同的实例上去执行。</p>
     * @param string $AccessMode <p>接入模式</p><p>枚举值：</p><ul><li>nearby： 就近访问</li><li>balance： 均衡分配</li></ul>
     * @param array $InstanceWeights <p>实例及权重</p>
     * @param string $Description <p>描述信息</p>
     * @param string $LoadBalanceMode <p>自动负载模式</p><p>枚举值：</p><ul><li>static： 静态</li><li>dynamic： 自适应</li></ul>
     * @param string $OpenConnectionPool <p>是否开启连接池</p><p>枚举值：</p><ul><li>yes： 打开</li><li>no： 不打开</li></ul>
     * @param string $ConnectionPoolType <p>连接池类型</p><p>枚举值：</p><ul><li>SessionConnectionPool： 会话级连接池</li><li>TransactionConnectionPool： 事物级连接池</li></ul>
     * @param integer $ConnectionPoolTimeOut <p>连接池阀值</p>
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
        if (array_key_exists("UniqueVpcId",$param) and $param["UniqueVpcId"] !== null) {
            $this->UniqueVpcId = $param["UniqueVpcId"];
        }

        if (array_key_exists("UniqueSubnetId",$param) and $param["UniqueSubnetId"] !== null) {
            $this->UniqueSubnetId = $param["UniqueSubnetId"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("WeightMode",$param) and $param["WeightMode"] !== null) {
            $this->WeightMode = $param["WeightMode"];
        }

        if (array_key_exists("AutoAddRo",$param) and $param["AutoAddRo"] !== null) {
            $this->AutoAddRo = $param["AutoAddRo"];
        }

        if (array_key_exists("RwType",$param) and $param["RwType"] !== null) {
            $this->RwType = $param["RwType"];
        }

        if (array_key_exists("FailOver",$param) and $param["FailOver"] !== null) {
            $this->FailOver = $param["FailOver"];
        }

        if (array_key_exists("ConsistencyTimeOut",$param) and $param["ConsistencyTimeOut"] !== null) {
            $this->ConsistencyTimeOut = $param["ConsistencyTimeOut"];
        }

        if (array_key_exists("ConsistencyType",$param) and $param["ConsistencyType"] !== null) {
            $this->ConsistencyType = $param["ConsistencyType"];
        }

        if (array_key_exists("TransSplit",$param) and $param["TransSplit"] !== null) {
            $this->TransSplit = $param["TransSplit"];
        }

        if (array_key_exists("AccessMode",$param) and $param["AccessMode"] !== null) {
            $this->AccessMode = $param["AccessMode"];
        }

        if (array_key_exists("InstanceWeights",$param) and $param["InstanceWeights"] !== null) {
            $this->InstanceWeights = [];
            foreach ($param["InstanceWeights"] as $key => $value){
                $obj = new ProxyInstanceWeight();
                $obj->deserialize($value);
                array_push($this->InstanceWeights, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("LoadBalanceMode",$param) and $param["LoadBalanceMode"] !== null) {
            $this->LoadBalanceMode = $param["LoadBalanceMode"];
        }

        if (array_key_exists("OpenConnectionPool",$param) and $param["OpenConnectionPool"] !== null) {
            $this->OpenConnectionPool = $param["OpenConnectionPool"];
        }

        if (array_key_exists("ConnectionPoolType",$param) and $param["ConnectionPoolType"] !== null) {
            $this->ConnectionPoolType = $param["ConnectionPoolType"];
        }

        if (array_key_exists("ConnectionPoolTimeOut",$param) and $param["ConnectionPoolTimeOut"] !== null) {
            $this->ConnectionPoolTimeOut = $param["ConnectionPoolTimeOut"];
        }
    }
}
