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
 * CreateProxyEndPoint请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群 ID。</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群 ID。</p>
 * @method string getUniqueVpcId() 获取<p>私有网络 ID。</p>
 * @method void setUniqueVpcId(string $UniqueVpcId) 设置<p>私有网络 ID。</p>
 * @method string getUniqueSubnetId() 获取<p>私有网络子网 ID。</p>
 * @method void setUniqueSubnetId(string $UniqueSubnetId) 设置<p>私有网络子网 ID。</p>
 * @method string getConnectionPoolType() 获取<p>连接池类型：SessionConnectionPool（会话级别连接池）。</p>
 * @method void setConnectionPoolType(string $ConnectionPoolType) 设置<p>连接池类型：SessionConnectionPool（会话级别连接池）。</p>
 * @method string getOpenConnectionPool() 获取<p>是否开启连接池。<br>yes：表示开启。<br>no：表示不开启。</p>
 * @method void setOpenConnectionPool(string $OpenConnectionPool) 设置<p>是否开启连接池。<br>yes：表示开启。<br>no：表示不开启。</p>
 * @method integer getConnectionPoolTimeOut() 获取<p>连接池阈值：单位（秒），可选范围：0 - 300秒。</p>
 * @method void setConnectionPoolTimeOut(integer $ConnectionPoolTimeOut) 设置<p>连接池阈值：单位（秒），可选范围：0 - 300秒。</p>
 * @method array getSecurityGroupIds() 获取<p>绑定的安全组 ID 数组。</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>绑定的安全组 ID 数组。</p>
 * @method string getDescription() 获取<p>描述说明。</p>
 * @method void setDescription(string $Description) 设置<p>描述说明。</p>
 * @method string getVip() 获取<p>想要绑定的 vip 信息，需与 UniqueVpcId 对应。</p>
 * @method void setVip(string $Vip) 设置<p>想要绑定的 vip 信息，需与 UniqueVpcId 对应。</p>
 * @method string getWeightMode() 获取<p>权重模式：<br>system：系统分配。<br>custom：自定义。</p>
 * @method void setWeightMode(string $WeightMode) 设置<p>权重模式：<br>system：系统分配。<br>custom：自定义。</p>
 * @method string getAutoAddRo() 获取<p>是否自动添加只读实例。<br>yes：表示自动添加只读实例。<br>no：表示不自动添加只读实例。</p>
 * @method void setAutoAddRo(string $AutoAddRo) 设置<p>是否自动添加只读实例。<br>yes：表示自动添加只读实例。<br>no：表示不自动添加只读实例。</p>
 * @method string getFailOver() 获取<p>是否开启故障转移。<br>yes：表示开启，开启后，当数据库代理出现故障时，连接地址将会路由到主实例。<br>no：表示不开启。<br>说明：<br>仅当 RwType 参数值为 READWRITE 时，才支持设置此项。</p>
 * @method void setFailOver(string $FailOver) 设置<p>是否开启故障转移。<br>yes：表示开启，开启后，当数据库代理出现故障时，连接地址将会路由到主实例。<br>no：表示不开启。<br>说明：<br>仅当 RwType 参数值为 READWRITE 时，才支持设置此项。</p>
 * @method string getConsistencyType() 获取<p>一致性类型：<br>eventual：最终一致性。<br>global：全局一致性。<br>session：会话一致性。<br>说明：<br>仅当 RwType 参数值为 READWRITE 时，才支持设置此项。</p>
 * @method void setConsistencyType(string $ConsistencyType) 设置<p>一致性类型：<br>eventual：最终一致性。<br>global：全局一致性。<br>session：会话一致性。<br>说明：<br>仅当 RwType 参数值为 READWRITE 时，才支持设置此项。</p>
 * @method string getRwType() 获取<p>读写属性：<br>READWRITE：表示读写分离。当此参数值为 READWRITE 时，才支持设置 FailOver、ConsistencyType 参数。<br>READONLY：表示只读。</p>
 * @method void setRwType(string $RwType) 设置<p>读写属性：<br>READWRITE：表示读写分离。当此参数值为 READWRITE 时，才支持设置 FailOver、ConsistencyType 参数。<br>READONLY：表示只读。</p>
 * @method integer getConsistencyTimeOut() 获取<p>一致性超时时间。取值范围：0 ~ 1000000（微秒）。设置为0时，表示若只读实例出现延迟导致一致性策略不满足时，请求将一直等待。</p>
 * @method void setConsistencyTimeOut(integer $ConsistencyTimeOut) 设置<p>一致性超时时间。取值范围：0 ~ 1000000（微秒）。设置为0时，表示若只读实例出现延迟导致一致性策略不满足时，请求将一直等待。</p>
 * @method boolean getTransSplit() 获取<p>是否开启事务拆分。开启后，在一个事务中拆分读和写到不同的实例上去执行。</p>
 * @method void setTransSplit(boolean $TransSplit) 设置<p>是否开启事务拆分。开启后，在一个事务中拆分读和写到不同的实例上去执行。</p>
 * @method string getAccessMode() 获取<p>接入模式：<br>nearby：就近访问。<br>balance：均衡分配。</p>
 * @method void setAccessMode(string $AccessMode) 设置<p>接入模式：<br>nearby：就近访问。<br>balance：均衡分配。</p>
 * @method array getInstanceWeights() 获取<p>实例权重。</p>
 * @method void setInstanceWeights(array $InstanceWeights) 设置<p>实例权重。</p>
 * @method string getLoadBalanceMode() 获取<p>负载均衡模式</p><p>枚举值：</p><ul><li>static： 静态负载</li><li>dynamic： 动态负载</li></ul>
 * @method void setLoadBalanceMode(string $LoadBalanceMode) 设置<p>负载均衡模式</p><p>枚举值：</p><ul><li>static： 静态负载</li><li>dynamic： 动态负载</li></ul>
 */
class CreateProxyEndPointRequest extends AbstractModel
{
    /**
     * @var string <p>集群 ID。</p>
     */
    public $ClusterId;

    /**
     * @var string <p>私有网络 ID。</p>
     */
    public $UniqueVpcId;

    /**
     * @var string <p>私有网络子网 ID。</p>
     */
    public $UniqueSubnetId;

    /**
     * @var string <p>连接池类型：SessionConnectionPool（会话级别连接池）。</p>
     */
    public $ConnectionPoolType;

    /**
     * @var string <p>是否开启连接池。<br>yes：表示开启。<br>no：表示不开启。</p>
     */
    public $OpenConnectionPool;

    /**
     * @var integer <p>连接池阈值：单位（秒），可选范围：0 - 300秒。</p>
     */
    public $ConnectionPoolTimeOut;

    /**
     * @var array <p>绑定的安全组 ID 数组。</p>
     */
    public $SecurityGroupIds;

    /**
     * @var string <p>描述说明。</p>
     */
    public $Description;

    /**
     * @var string <p>想要绑定的 vip 信息，需与 UniqueVpcId 对应。</p>
     */
    public $Vip;

    /**
     * @var string <p>权重模式：<br>system：系统分配。<br>custom：自定义。</p>
     */
    public $WeightMode;

    /**
     * @var string <p>是否自动添加只读实例。<br>yes：表示自动添加只读实例。<br>no：表示不自动添加只读实例。</p>
     */
    public $AutoAddRo;

    /**
     * @var string <p>是否开启故障转移。<br>yes：表示开启，开启后，当数据库代理出现故障时，连接地址将会路由到主实例。<br>no：表示不开启。<br>说明：<br>仅当 RwType 参数值为 READWRITE 时，才支持设置此项。</p>
     */
    public $FailOver;

    /**
     * @var string <p>一致性类型：<br>eventual：最终一致性。<br>global：全局一致性。<br>session：会话一致性。<br>说明：<br>仅当 RwType 参数值为 READWRITE 时，才支持设置此项。</p>
     */
    public $ConsistencyType;

    /**
     * @var string <p>读写属性：<br>READWRITE：表示读写分离。当此参数值为 READWRITE 时，才支持设置 FailOver、ConsistencyType 参数。<br>READONLY：表示只读。</p>
     */
    public $RwType;

    /**
     * @var integer <p>一致性超时时间。取值范围：0 ~ 1000000（微秒）。设置为0时，表示若只读实例出现延迟导致一致性策略不满足时，请求将一直等待。</p>
     */
    public $ConsistencyTimeOut;

    /**
     * @var boolean <p>是否开启事务拆分。开启后，在一个事务中拆分读和写到不同的实例上去执行。</p>
     */
    public $TransSplit;

    /**
     * @var string <p>接入模式：<br>nearby：就近访问。<br>balance：均衡分配。</p>
     */
    public $AccessMode;

    /**
     * @var array <p>实例权重。</p>
     */
    public $InstanceWeights;

    /**
     * @var string <p>负载均衡模式</p><p>枚举值：</p><ul><li>static： 静态负载</li><li>dynamic： 动态负载</li></ul>
     */
    public $LoadBalanceMode;

    /**
     * @param string $ClusterId <p>集群 ID。</p>
     * @param string $UniqueVpcId <p>私有网络 ID。</p>
     * @param string $UniqueSubnetId <p>私有网络子网 ID。</p>
     * @param string $ConnectionPoolType <p>连接池类型：SessionConnectionPool（会话级别连接池）。</p>
     * @param string $OpenConnectionPool <p>是否开启连接池。<br>yes：表示开启。<br>no：表示不开启。</p>
     * @param integer $ConnectionPoolTimeOut <p>连接池阈值：单位（秒），可选范围：0 - 300秒。</p>
     * @param array $SecurityGroupIds <p>绑定的安全组 ID 数组。</p>
     * @param string $Description <p>描述说明。</p>
     * @param string $Vip <p>想要绑定的 vip 信息，需与 UniqueVpcId 对应。</p>
     * @param string $WeightMode <p>权重模式：<br>system：系统分配。<br>custom：自定义。</p>
     * @param string $AutoAddRo <p>是否自动添加只读实例。<br>yes：表示自动添加只读实例。<br>no：表示不自动添加只读实例。</p>
     * @param string $FailOver <p>是否开启故障转移。<br>yes：表示开启，开启后，当数据库代理出现故障时，连接地址将会路由到主实例。<br>no：表示不开启。<br>说明：<br>仅当 RwType 参数值为 READWRITE 时，才支持设置此项。</p>
     * @param string $ConsistencyType <p>一致性类型：<br>eventual：最终一致性。<br>global：全局一致性。<br>session：会话一致性。<br>说明：<br>仅当 RwType 参数值为 READWRITE 时，才支持设置此项。</p>
     * @param string $RwType <p>读写属性：<br>READWRITE：表示读写分离。当此参数值为 READWRITE 时，才支持设置 FailOver、ConsistencyType 参数。<br>READONLY：表示只读。</p>
     * @param integer $ConsistencyTimeOut <p>一致性超时时间。取值范围：0 ~ 1000000（微秒）。设置为0时，表示若只读实例出现延迟导致一致性策略不满足时，请求将一直等待。</p>
     * @param boolean $TransSplit <p>是否开启事务拆分。开启后，在一个事务中拆分读和写到不同的实例上去执行。</p>
     * @param string $AccessMode <p>接入模式：<br>nearby：就近访问。<br>balance：均衡分配。</p>
     * @param array $InstanceWeights <p>实例权重。</p>
     * @param string $LoadBalanceMode <p>负载均衡模式</p><p>枚举值：</p><ul><li>static： 静态负载</li><li>dynamic： 动态负载</li></ul>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("UniqueVpcId",$param) and $param["UniqueVpcId"] !== null) {
            $this->UniqueVpcId = $param["UniqueVpcId"];
        }

        if (array_key_exists("UniqueSubnetId",$param) and $param["UniqueSubnetId"] !== null) {
            $this->UniqueSubnetId = $param["UniqueSubnetId"];
        }

        if (array_key_exists("ConnectionPoolType",$param) and $param["ConnectionPoolType"] !== null) {
            $this->ConnectionPoolType = $param["ConnectionPoolType"];
        }

        if (array_key_exists("OpenConnectionPool",$param) and $param["OpenConnectionPool"] !== null) {
            $this->OpenConnectionPool = $param["OpenConnectionPool"];
        }

        if (array_key_exists("ConnectionPoolTimeOut",$param) and $param["ConnectionPoolTimeOut"] !== null) {
            $this->ConnectionPoolTimeOut = $param["ConnectionPoolTimeOut"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("WeightMode",$param) and $param["WeightMode"] !== null) {
            $this->WeightMode = $param["WeightMode"];
        }

        if (array_key_exists("AutoAddRo",$param) and $param["AutoAddRo"] !== null) {
            $this->AutoAddRo = $param["AutoAddRo"];
        }

        if (array_key_exists("FailOver",$param) and $param["FailOver"] !== null) {
            $this->FailOver = $param["FailOver"];
        }

        if (array_key_exists("ConsistencyType",$param) and $param["ConsistencyType"] !== null) {
            $this->ConsistencyType = $param["ConsistencyType"];
        }

        if (array_key_exists("RwType",$param) and $param["RwType"] !== null) {
            $this->RwType = $param["RwType"];
        }

        if (array_key_exists("ConsistencyTimeOut",$param) and $param["ConsistencyTimeOut"] !== null) {
            $this->ConsistencyTimeOut = $param["ConsistencyTimeOut"];
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

        if (array_key_exists("LoadBalanceMode",$param) and $param["LoadBalanceMode"] !== null) {
            $this->LoadBalanceMode = $param["LoadBalanceMode"];
        }
    }
}
