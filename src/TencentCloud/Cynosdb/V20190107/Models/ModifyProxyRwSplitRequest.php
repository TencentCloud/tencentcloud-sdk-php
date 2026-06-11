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
 * ModifyProxyRwSplit请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID，例如cynosdbmysql-asd123</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID，例如cynosdbmysql-asd123</p>
 * @method string getProxyGroupId() 获取<p>数据库代理组ID，例如cynosdbmysql-proxy-qwe123</p>
 * @method void setProxyGroupId(string $ProxyGroupId) 设置<p>数据库代理组ID，例如cynosdbmysql-proxy-qwe123</p>
 * @method string getConsistencyType() 获取<p>一致性类型；“eventual&quot;-最终一致性, &quot;session&quot;-会话一致性, &quot;global&quot;-全局一致性</p>
 * @method void setConsistencyType(string $ConsistencyType) 设置<p>一致性类型；“eventual&quot;-最终一致性, &quot;session&quot;-会话一致性, &quot;global&quot;-全局一致性</p>
 * @method string getConsistencyTimeOut() 获取<p>一致性超时时间。<br>取值范围：0~1000000（微秒）,设置0则表示若只读实例出现延迟, 导致一致性策略不满足, 请求将一直等待。</p>
 * @method void setConsistencyTimeOut(string $ConsistencyTimeOut) 设置<p>一致性超时时间。<br>取值范围：0~1000000（微秒）,设置0则表示若只读实例出现延迟, 导致一致性策略不满足, 请求将一直等待。</p>
 * @method string getWeightMode() 获取<p>读写权重分配模式；系统自动分配：&quot;system&quot;， 自定义：&quot;custom&quot;</p>
 * @method void setWeightMode(string $WeightMode) 设置<p>读写权重分配模式；系统自动分配：&quot;system&quot;， 自定义：&quot;custom&quot;</p>
 * @method array getInstanceWeights() 获取<p>实例只读权重。</p>
 * @method void setInstanceWeights(array $InstanceWeights) 设置<p>实例只读权重。</p>
 * @method string getFailOver() 获取<p>是否开启故障转移，代理出现故障后，连接地址将路由到主实例，取值：&quot;yes&quot; , &quot;no&quot;</p>
 * @method void setFailOver(string $FailOver) 设置<p>是否开启故障转移，代理出现故障后，连接地址将路由到主实例，取值：&quot;yes&quot; , &quot;no&quot;</p>
 * @method string getAutoAddRo() 获取<p>是否自动添加只读实例，取值：&quot;yes&quot; , &quot;no&quot;</p>
 * @method void setAutoAddRo(string $AutoAddRo) 设置<p>是否自动添加只读实例，取值：&quot;yes&quot; , &quot;no&quot;</p>
 * @method string getOpenRw() 获取<p>是否打开读写分离。<br>该参数已废弃，请通过RwType设置读写属性。</p>
 * @method void setOpenRw(string $OpenRw) 设置<p>是否打开读写分离。<br>该参数已废弃，请通过RwType设置读写属性。</p>
 * @method string getRwType() 获取<p>读写类型：<br>READWRITE,READONLY</p>
 * @method void setRwType(string $RwType) 设置<p>读写类型：<br>READWRITE,READONLY</p>
 * @method boolean getTransSplit() 获取<p>事务拆分。<br>在一个事务中拆分读和写到不同的实例上去执行。</p>
 * @method void setTransSplit(boolean $TransSplit) 设置<p>事务拆分。<br>在一个事务中拆分读和写到不同的实例上去执行。</p>
 * @method string getAccessMode() 获取<p>连接模式：<br>nearby,balance</p>
 * @method void setAccessMode(string $AccessMode) 设置<p>连接模式：<br>nearby,balance</p>
 * @method string getOpenConnectionPool() 获取<p>是否打开连接池：<br>yes,no</p>
 * @method void setOpenConnectionPool(string $OpenConnectionPool) 设置<p>是否打开连接池：<br>yes,no</p>
 * @method string getConnectionPoolType() 获取<p>连接池类型：<br>SessionConnectionPool</p>
 * @method void setConnectionPoolType(string $ConnectionPoolType) 设置<p>连接池类型：<br>SessionConnectionPool</p>
 * @method integer getConnectionPoolTimeOut() 获取<p>连接池时间。<br>可选范围:0~300（秒）</p>
 * @method void setConnectionPoolTimeOut(integer $ConnectionPoolTimeOut) 设置<p>连接池时间。<br>可选范围:0~300（秒）</p>
 * @method boolean getApNodeAsRoNode() 获取<p>是否将libra节点当作普通RO节点</p>
 * @method void setApNodeAsRoNode(boolean $ApNodeAsRoNode) 设置<p>是否将libra节点当作普通RO节点</p>
 * @method boolean getApQueryToOtherNode() 获取<p>libra节点故障，是否转发给其他节点</p>
 * @method void setApQueryToOtherNode(boolean $ApQueryToOtherNode) 设置<p>libra节点故障，是否转发给其他节点</p>
 * @method string getLoadBalanceMode() 获取<p>负载均衡模式</p><p>枚举值：</p><ul><li>static： 静态负载</li><li>dynamic： 动态负载</li></ul>
 * @method void setLoadBalanceMode(string $LoadBalanceMode) 设置<p>负载均衡模式</p><p>枚举值：</p><ul><li>static： 静态负载</li><li>dynamic： 动态负载</li></ul>
 */
class ModifyProxyRwSplitRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID，例如cynosdbmysql-asd123</p>
     */
    public $ClusterId;

    /**
     * @var string <p>数据库代理组ID，例如cynosdbmysql-proxy-qwe123</p>
     */
    public $ProxyGroupId;

    /**
     * @var string <p>一致性类型；“eventual&quot;-最终一致性, &quot;session&quot;-会话一致性, &quot;global&quot;-全局一致性</p>
     */
    public $ConsistencyType;

    /**
     * @var string <p>一致性超时时间。<br>取值范围：0~1000000（微秒）,设置0则表示若只读实例出现延迟, 导致一致性策略不满足, 请求将一直等待。</p>
     */
    public $ConsistencyTimeOut;

    /**
     * @var string <p>读写权重分配模式；系统自动分配：&quot;system&quot;， 自定义：&quot;custom&quot;</p>
     */
    public $WeightMode;

    /**
     * @var array <p>实例只读权重。</p>
     */
    public $InstanceWeights;

    /**
     * @var string <p>是否开启故障转移，代理出现故障后，连接地址将路由到主实例，取值：&quot;yes&quot; , &quot;no&quot;</p>
     */
    public $FailOver;

    /**
     * @var string <p>是否自动添加只读实例，取值：&quot;yes&quot; , &quot;no&quot;</p>
     */
    public $AutoAddRo;

    /**
     * @var string <p>是否打开读写分离。<br>该参数已废弃，请通过RwType设置读写属性。</p>
     */
    public $OpenRw;

    /**
     * @var string <p>读写类型：<br>READWRITE,READONLY</p>
     */
    public $RwType;

    /**
     * @var boolean <p>事务拆分。<br>在一个事务中拆分读和写到不同的实例上去执行。</p>
     */
    public $TransSplit;

    /**
     * @var string <p>连接模式：<br>nearby,balance</p>
     */
    public $AccessMode;

    /**
     * @var string <p>是否打开连接池：<br>yes,no</p>
     */
    public $OpenConnectionPool;

    /**
     * @var string <p>连接池类型：<br>SessionConnectionPool</p>
     */
    public $ConnectionPoolType;

    /**
     * @var integer <p>连接池时间。<br>可选范围:0~300（秒）</p>
     */
    public $ConnectionPoolTimeOut;

    /**
     * @var boolean <p>是否将libra节点当作普通RO节点</p>
     */
    public $ApNodeAsRoNode;

    /**
     * @var boolean <p>libra节点故障，是否转发给其他节点</p>
     */
    public $ApQueryToOtherNode;

    /**
     * @var string <p>负载均衡模式</p><p>枚举值：</p><ul><li>static： 静态负载</li><li>dynamic： 动态负载</li></ul>
     */
    public $LoadBalanceMode;

    /**
     * @param string $ClusterId <p>集群ID，例如cynosdbmysql-asd123</p>
     * @param string $ProxyGroupId <p>数据库代理组ID，例如cynosdbmysql-proxy-qwe123</p>
     * @param string $ConsistencyType <p>一致性类型；“eventual&quot;-最终一致性, &quot;session&quot;-会话一致性, &quot;global&quot;-全局一致性</p>
     * @param string $ConsistencyTimeOut <p>一致性超时时间。<br>取值范围：0~1000000（微秒）,设置0则表示若只读实例出现延迟, 导致一致性策略不满足, 请求将一直等待。</p>
     * @param string $WeightMode <p>读写权重分配模式；系统自动分配：&quot;system&quot;， 自定义：&quot;custom&quot;</p>
     * @param array $InstanceWeights <p>实例只读权重。</p>
     * @param string $FailOver <p>是否开启故障转移，代理出现故障后，连接地址将路由到主实例，取值：&quot;yes&quot; , &quot;no&quot;</p>
     * @param string $AutoAddRo <p>是否自动添加只读实例，取值：&quot;yes&quot; , &quot;no&quot;</p>
     * @param string $OpenRw <p>是否打开读写分离。<br>该参数已废弃，请通过RwType设置读写属性。</p>
     * @param string $RwType <p>读写类型：<br>READWRITE,READONLY</p>
     * @param boolean $TransSplit <p>事务拆分。<br>在一个事务中拆分读和写到不同的实例上去执行。</p>
     * @param string $AccessMode <p>连接模式：<br>nearby,balance</p>
     * @param string $OpenConnectionPool <p>是否打开连接池：<br>yes,no</p>
     * @param string $ConnectionPoolType <p>连接池类型：<br>SessionConnectionPool</p>
     * @param integer $ConnectionPoolTimeOut <p>连接池时间。<br>可选范围:0~300（秒）</p>
     * @param boolean $ApNodeAsRoNode <p>是否将libra节点当作普通RO节点</p>
     * @param boolean $ApQueryToOtherNode <p>libra节点故障，是否转发给其他节点</p>
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

        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("ConsistencyType",$param) and $param["ConsistencyType"] !== null) {
            $this->ConsistencyType = $param["ConsistencyType"];
        }

        if (array_key_exists("ConsistencyTimeOut",$param) and $param["ConsistencyTimeOut"] !== null) {
            $this->ConsistencyTimeOut = $param["ConsistencyTimeOut"];
        }

        if (array_key_exists("WeightMode",$param) and $param["WeightMode"] !== null) {
            $this->WeightMode = $param["WeightMode"];
        }

        if (array_key_exists("InstanceWeights",$param) and $param["InstanceWeights"] !== null) {
            $this->InstanceWeights = [];
            foreach ($param["InstanceWeights"] as $key => $value){
                $obj = new ProxyInstanceWeight();
                $obj->deserialize($value);
                array_push($this->InstanceWeights, $obj);
            }
        }

        if (array_key_exists("FailOver",$param) and $param["FailOver"] !== null) {
            $this->FailOver = $param["FailOver"];
        }

        if (array_key_exists("AutoAddRo",$param) and $param["AutoAddRo"] !== null) {
            $this->AutoAddRo = $param["AutoAddRo"];
        }

        if (array_key_exists("OpenRw",$param) and $param["OpenRw"] !== null) {
            $this->OpenRw = $param["OpenRw"];
        }

        if (array_key_exists("RwType",$param) and $param["RwType"] !== null) {
            $this->RwType = $param["RwType"];
        }

        if (array_key_exists("TransSplit",$param) and $param["TransSplit"] !== null) {
            $this->TransSplit = $param["TransSplit"];
        }

        if (array_key_exists("AccessMode",$param) and $param["AccessMode"] !== null) {
            $this->AccessMode = $param["AccessMode"];
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

        if (array_key_exists("ApNodeAsRoNode",$param) and $param["ApNodeAsRoNode"] !== null) {
            $this->ApNodeAsRoNode = $param["ApNodeAsRoNode"];
        }

        if (array_key_exists("ApQueryToOtherNode",$param) and $param["ApQueryToOtherNode"] !== null) {
            $this->ApQueryToOtherNode = $param["ApQueryToOtherNode"];
        }

        if (array_key_exists("LoadBalanceMode",$param) and $param["LoadBalanceMode"] !== null) {
            $this->LoadBalanceMode = $param["LoadBalanceMode"];
        }
    }
}
