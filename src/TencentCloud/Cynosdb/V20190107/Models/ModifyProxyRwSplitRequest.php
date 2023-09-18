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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyProxyRwSplit请求参数结构体
 *
 * @method string getClusterId() 获取集群ID，例如cynosdbmysql-asd123
 * @method void setClusterId(string $ClusterId) 设置集群ID，例如cynosdbmysql-asd123
 * @method string getProxyGroupId() 获取数据库代理组ID，例如cynosdbmysql-proxy-qwe123
 * @method void setProxyGroupId(string $ProxyGroupId) 设置数据库代理组ID，例如cynosdbmysql-proxy-qwe123
 * @method string getConsistencyType() 获取一致性类型；“eventual"-最终一致性, "session"-会话一致性, "global"-全局一致性
 * @method void setConsistencyType(string $ConsistencyType) 设置一致性类型；“eventual"-最终一致性, "session"-会话一致性, "global"-全局一致性
 * @method string getConsistencyTimeOut() 获取一致性超时时间。
取值范围：0~1000000（微秒）,设置0则表示若只读实例出现延迟, 导致一致性策略不满足, 请求将一直等待。
 * @method void setConsistencyTimeOut(string $ConsistencyTimeOut) 设置一致性超时时间。
取值范围：0~1000000（微秒）,设置0则表示若只读实例出现延迟, 导致一致性策略不满足, 请求将一直等待。
 * @method string getWeightMode() 获取读写权重分配模式；系统自动分配："system"， 自定义："custom"
 * @method void setWeightMode(string $WeightMode) 设置读写权重分配模式；系统自动分配："system"， 自定义："custom"
 * @method array getInstanceWeights() 获取实例只读权重。
该参数必填。
 * @method void setInstanceWeights(array $InstanceWeights) 设置实例只读权重。
该参数必填。
 * @method string getFailOver() 获取是否开启故障转移，代理出现故障后，连接地址将路由到主实例，取值："yes" , "no"
 * @method void setFailOver(string $FailOver) 设置是否开启故障转移，代理出现故障后，连接地址将路由到主实例，取值："yes" , "no"
 * @method string getAutoAddRo() 获取是否自动添加只读实例，取值："yes" , "no"
 * @method void setAutoAddRo(string $AutoAddRo) 设置是否自动添加只读实例，取值："yes" , "no"
 * @method string getOpenRw() 获取是否打开读写分离。
该参数已废弃，请通过RwType设置读写属性。
 * @method void setOpenRw(string $OpenRw) 设置是否打开读写分离。
该参数已废弃，请通过RwType设置读写属性。
 * @method string getRwType() 获取读写类型：
READWRITE,READONLY
 * @method void setRwType(string $RwType) 设置读写类型：
READWRITE,READONLY
 * @method boolean getTransSplit() 获取事务拆分。
在一个事务中拆分读和写到不同的实例上去执行。
 * @method void setTransSplit(boolean $TransSplit) 设置事务拆分。
在一个事务中拆分读和写到不同的实例上去执行。
 * @method string getAccessMode() 获取连接模式：
nearby,balance
 * @method void setAccessMode(string $AccessMode) 设置连接模式：
nearby,balance
 * @method string getOpenConnectionPool() 获取是否打开连接池：
yes,no
 * @method void setOpenConnectionPool(string $OpenConnectionPool) 设置是否打开连接池：
yes,no
 * @method string getConnectionPoolType() 获取连接池类型：
SessionConnectionPool
 * @method void setConnectionPoolType(string $ConnectionPoolType) 设置连接池类型：
SessionConnectionPool
 * @method integer getConnectionPoolTimeOut() 获取连接池时间。
可选范围:0~300（秒）
 * @method void setConnectionPoolTimeOut(integer $ConnectionPoolTimeOut) 设置连接池时间。
可选范围:0~300（秒）
 */
class ModifyProxyRwSplitRequest extends AbstractModel
{
    /**
     * @var string 集群ID，例如cynosdbmysql-asd123
     */
    public $ClusterId;

    /**
     * @var string 数据库代理组ID，例如cynosdbmysql-proxy-qwe123
     */
    public $ProxyGroupId;

    /**
     * @var string 一致性类型；“eventual"-最终一致性, "session"-会话一致性, "global"-全局一致性
     */
    public $ConsistencyType;

    /**
     * @var string 一致性超时时间。
取值范围：0~1000000（微秒）,设置0则表示若只读实例出现延迟, 导致一致性策略不满足, 请求将一直等待。
     */
    public $ConsistencyTimeOut;

    /**
     * @var string 读写权重分配模式；系统自动分配："system"， 自定义："custom"
     */
    public $WeightMode;

    /**
     * @var array 实例只读权重。
该参数必填。
     */
    public $InstanceWeights;

    /**
     * @var string 是否开启故障转移，代理出现故障后，连接地址将路由到主实例，取值："yes" , "no"
     */
    public $FailOver;

    /**
     * @var string 是否自动添加只读实例，取值："yes" , "no"
     */
    public $AutoAddRo;

    /**
     * @var string 是否打开读写分离。
该参数已废弃，请通过RwType设置读写属性。
     */
    public $OpenRw;

    /**
     * @var string 读写类型：
READWRITE,READONLY
     */
    public $RwType;

    /**
     * @var boolean 事务拆分。
在一个事务中拆分读和写到不同的实例上去执行。
     */
    public $TransSplit;

    /**
     * @var string 连接模式：
nearby,balance
     */
    public $AccessMode;

    /**
     * @var string 是否打开连接池：
yes,no
     */
    public $OpenConnectionPool;

    /**
     * @var string 连接池类型：
SessionConnectionPool
     */
    public $ConnectionPoolType;

    /**
     * @var integer 连接池时间。
可选范围:0~300（秒）
     */
    public $ConnectionPoolTimeOut;

    /**
     * @param string $ClusterId 集群ID，例如cynosdbmysql-asd123
     * @param string $ProxyGroupId 数据库代理组ID，例如cynosdbmysql-proxy-qwe123
     * @param string $ConsistencyType 一致性类型；“eventual"-最终一致性, "session"-会话一致性, "global"-全局一致性
     * @param string $ConsistencyTimeOut 一致性超时时间。
取值范围：0~1000000（微秒）,设置0则表示若只读实例出现延迟, 导致一致性策略不满足, 请求将一直等待。
     * @param string $WeightMode 读写权重分配模式；系统自动分配："system"， 自定义："custom"
     * @param array $InstanceWeights 实例只读权重。
该参数必填。
     * @param string $FailOver 是否开启故障转移，代理出现故障后，连接地址将路由到主实例，取值："yes" , "no"
     * @param string $AutoAddRo 是否自动添加只读实例，取值："yes" , "no"
     * @param string $OpenRw 是否打开读写分离。
该参数已废弃，请通过RwType设置读写属性。
     * @param string $RwType 读写类型：
READWRITE,READONLY
     * @param boolean $TransSplit 事务拆分。
在一个事务中拆分读和写到不同的实例上去执行。
     * @param string $AccessMode 连接模式：
nearby,balance
     * @param string $OpenConnectionPool 是否打开连接池：
yes,no
     * @param string $ConnectionPoolType 连接池类型：
SessionConnectionPool
     * @param integer $ConnectionPoolTimeOut 连接池时间。
可选范围:0~300（秒）
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
    }
}
