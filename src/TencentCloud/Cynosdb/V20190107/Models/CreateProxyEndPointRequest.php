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
 * CreateProxyEndPoint请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getUniqueVpcId() 获取私有网络ID，默认与集群私有网络ID保持一致
 * @method void setUniqueVpcId(string $UniqueVpcId) 设置私有网络ID，默认与集群私有网络ID保持一致
 * @method string getUniqueSubnetId() 获取私有网络子网ID，默认与集群子网ID保持一致
 * @method void setUniqueSubnetId(string $UniqueSubnetId) 设置私有网络子网ID，默认与集群子网ID保持一致
 * @method string getConnectionPoolType() 获取连接池类型：SessionConnectionPool(会话级别连接池 )
 * @method void setConnectionPoolType(string $ConnectionPoolType) 设置连接池类型：SessionConnectionPool(会话级别连接池 )
 * @method string getOpenConnectionPool() 获取是否开启连接池,yes-开启，no-不开启
 * @method void setOpenConnectionPool(string $OpenConnectionPool) 设置是否开启连接池,yes-开启，no-不开启
 * @method integer getConnectionPoolTimeOut() 获取连接池阈值：单位（秒）
 * @method void setConnectionPoolTimeOut(integer $ConnectionPoolTimeOut) 设置连接池阈值：单位（秒）
 * @method array getSecurityGroupIds() 获取绑定的安全组ID数组
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置绑定的安全组ID数组
 * @method string getDescription() 获取描述说明
 * @method void setDescription(string $Description) 设置描述说明
 * @method string getVip() 获取想要绑定的vip信息，需与UniqueVpcId对应。
 * @method void setVip(string $Vip) 设置想要绑定的vip信息，需与UniqueVpcId对应。
 * @method string getWeightMode() 获取权重模式：
system-系统分配，custom-自定义
 * @method void setWeightMode(string $WeightMode) 设置权重模式：
system-系统分配，custom-自定义
 * @method string getAutoAddRo() 获取是否自动添加只读实例，yes-是，no-不自动添加
 * @method void setAutoAddRo(string $AutoAddRo) 设置是否自动添加只读实例，yes-是，no-不自动添加
 * @method string getFailOver() 获取是否开启故障转移。
yes：开启
no：不开启。
数据库代理出现故障时，链接地址将会路由到主实例
 * @method void setFailOver(string $FailOver) 设置是否开启故障转移。
yes：开启
no：不开启。
数据库代理出现故障时，链接地址将会路由到主实例
 * @method string getConsistencyType() 获取一致性类型：
eventual,global,session
 * @method void setConsistencyType(string $ConsistencyType) 设置一致性类型：
eventual,global,session
 * @method string getRwType() 获取读写属性：
READWRITE,READONLY
 * @method void setRwType(string $RwType) 设置读写属性：
READWRITE,READONLY
 * @method integer getConsistencyTimeOut() 获取一致性超时时间。取值范围：0~1000000（微秒）,设置0则表示若只读实例出现延迟, 导致一致性策略不满足, 请求将一直等待
 * @method void setConsistencyTimeOut(integer $ConsistencyTimeOut) 设置一致性超时时间。取值范围：0~1000000（微秒）,设置0则表示若只读实例出现延迟, 导致一致性策略不满足, 请求将一直等待
 * @method boolean getTransSplit() 获取是否开启事务拆分。在一个事务中拆分读和写到不同的实例上去执行
 * @method void setTransSplit(boolean $TransSplit) 设置是否开启事务拆分。在一个事务中拆分读和写到不同的实例上去执行
 * @method string getAccessMode() 获取连接模式：
nearby,balance
 * @method void setAccessMode(string $AccessMode) 设置连接模式：
nearby,balance
 * @method array getInstanceWeights() 获取实例权重
 * @method void setInstanceWeights(array $InstanceWeights) 设置实例权重
 */
class CreateProxyEndPointRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 私有网络ID，默认与集群私有网络ID保持一致
     */
    public $UniqueVpcId;

    /**
     * @var string 私有网络子网ID，默认与集群子网ID保持一致
     */
    public $UniqueSubnetId;

    /**
     * @var string 连接池类型：SessionConnectionPool(会话级别连接池 )
     */
    public $ConnectionPoolType;

    /**
     * @var string 是否开启连接池,yes-开启，no-不开启
     */
    public $OpenConnectionPool;

    /**
     * @var integer 连接池阈值：单位（秒）
     */
    public $ConnectionPoolTimeOut;

    /**
     * @var array 绑定的安全组ID数组
     */
    public $SecurityGroupIds;

    /**
     * @var string 描述说明
     */
    public $Description;

    /**
     * @var string 想要绑定的vip信息，需与UniqueVpcId对应。
     */
    public $Vip;

    /**
     * @var string 权重模式：
system-系统分配，custom-自定义
     */
    public $WeightMode;

    /**
     * @var string 是否自动添加只读实例，yes-是，no-不自动添加
     */
    public $AutoAddRo;

    /**
     * @var string 是否开启故障转移。
yes：开启
no：不开启。
数据库代理出现故障时，链接地址将会路由到主实例
     */
    public $FailOver;

    /**
     * @var string 一致性类型：
eventual,global,session
     */
    public $ConsistencyType;

    /**
     * @var string 读写属性：
READWRITE,READONLY
     */
    public $RwType;

    /**
     * @var integer 一致性超时时间。取值范围：0~1000000（微秒）,设置0则表示若只读实例出现延迟, 导致一致性策略不满足, 请求将一直等待
     */
    public $ConsistencyTimeOut;

    /**
     * @var boolean 是否开启事务拆分。在一个事务中拆分读和写到不同的实例上去执行
     */
    public $TransSplit;

    /**
     * @var string 连接模式：
nearby,balance
     */
    public $AccessMode;

    /**
     * @var array 实例权重
     */
    public $InstanceWeights;

    /**
     * @param string $ClusterId 集群ID
     * @param string $UniqueVpcId 私有网络ID，默认与集群私有网络ID保持一致
     * @param string $UniqueSubnetId 私有网络子网ID，默认与集群子网ID保持一致
     * @param string $ConnectionPoolType 连接池类型：SessionConnectionPool(会话级别连接池 )
     * @param string $OpenConnectionPool 是否开启连接池,yes-开启，no-不开启
     * @param integer $ConnectionPoolTimeOut 连接池阈值：单位（秒）
     * @param array $SecurityGroupIds 绑定的安全组ID数组
     * @param string $Description 描述说明
     * @param string $Vip 想要绑定的vip信息，需与UniqueVpcId对应。
     * @param string $WeightMode 权重模式：
system-系统分配，custom-自定义
     * @param string $AutoAddRo 是否自动添加只读实例，yes-是，no-不自动添加
     * @param string $FailOver 是否开启故障转移。
yes：开启
no：不开启。
数据库代理出现故障时，链接地址将会路由到主实例
     * @param string $ConsistencyType 一致性类型：
eventual,global,session
     * @param string $RwType 读写属性：
READWRITE,READONLY
     * @param integer $ConsistencyTimeOut 一致性超时时间。取值范围：0~1000000（微秒）,设置0则表示若只读实例出现延迟, 导致一致性策略不满足, 请求将一直等待
     * @param boolean $TransSplit 是否开启事务拆分。在一个事务中拆分读和写到不同的实例上去执行
     * @param string $AccessMode 连接模式：
nearby,balance
     * @param array $InstanceWeights 实例权重
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
    }
}
