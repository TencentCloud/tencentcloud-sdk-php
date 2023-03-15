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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScaleOutInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例唯一ID
 * @method void setInstanceId(string $InstanceId) 设置实例唯一ID
 * @method string getType() 获取节点类型，DATA：clickhouse节点，COMMON：为zookeeper节点
 * @method void setType(string $Type) 设置节点类型，DATA：clickhouse节点，COMMON：为zookeeper节点
 * @method integer getNodeCount() 获取调整clickhouse节点数量
 * @method void setNodeCount(integer $NodeCount) 设置调整clickhouse节点数量
 * @method string getScaleOutCluster() 获取v_cluster分组，	
新增扩容节点将加入到已选择的v_cluster分组中，提交同步VIP生效.
 * @method void setScaleOutCluster(string $ScaleOutCluster) 设置v_cluster分组，	
新增扩容节点将加入到已选择的v_cluster分组中，提交同步VIP生效.
 * @method integer getUserSubnetIPNum() 获取子网剩余ip数量，用于判断当前实例子网剩余ip数是否能扩容。需要根据实际填写
 * @method void setUserSubnetIPNum(integer $UserSubnetIPNum) 设置子网剩余ip数量，用于判断当前实例子网剩余ip数是否能扩容。需要根据实际填写
 * @method string getScaleOutNodeIp() 获取同步元数据节点IP （uip），扩容的时候必填
 * @method void setScaleOutNodeIp(string $ScaleOutNodeIp) 设置同步元数据节点IP （uip），扩容的时候必填
 * @method array getReduceShardInfo() 获取缩容节点shard的节点IP （uip），其中ha集群需要主副节点ip都传入以逗号分隔，缩容的时候必填
 * @method void setReduceShardInfo(array $ReduceShardInfo) 设置缩容节点shard的节点IP （uip），其中ha集群需要主副节点ip都传入以逗号分隔，缩容的时候必填
 */
class ScaleOutInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例唯一ID
     */
    public $InstanceId;

    /**
     * @var string 节点类型，DATA：clickhouse节点，COMMON：为zookeeper节点
     */
    public $Type;

    /**
     * @var integer 调整clickhouse节点数量
     */
    public $NodeCount;

    /**
     * @var string v_cluster分组，	
新增扩容节点将加入到已选择的v_cluster分组中，提交同步VIP生效.
     */
    public $ScaleOutCluster;

    /**
     * @var integer 子网剩余ip数量，用于判断当前实例子网剩余ip数是否能扩容。需要根据实际填写
     */
    public $UserSubnetIPNum;

    /**
     * @var string 同步元数据节点IP （uip），扩容的时候必填
     */
    public $ScaleOutNodeIp;

    /**
     * @var array 缩容节点shard的节点IP （uip），其中ha集群需要主副节点ip都传入以逗号分隔，缩容的时候必填
     */
    public $ReduceShardInfo;

    /**
     * @param string $InstanceId 实例唯一ID
     * @param string $Type 节点类型，DATA：clickhouse节点，COMMON：为zookeeper节点
     * @param integer $NodeCount 调整clickhouse节点数量
     * @param string $ScaleOutCluster v_cluster分组，	
新增扩容节点将加入到已选择的v_cluster分组中，提交同步VIP生效.
     * @param integer $UserSubnetIPNum 子网剩余ip数量，用于判断当前实例子网剩余ip数是否能扩容。需要根据实际填写
     * @param string $ScaleOutNodeIp 同步元数据节点IP （uip），扩容的时候必填
     * @param array $ReduceShardInfo 缩容节点shard的节点IP （uip），其中ha集群需要主副节点ip都传入以逗号分隔，缩容的时候必填
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("ScaleOutCluster",$param) and $param["ScaleOutCluster"] !== null) {
            $this->ScaleOutCluster = $param["ScaleOutCluster"];
        }

        if (array_key_exists("UserSubnetIPNum",$param) and $param["UserSubnetIPNum"] !== null) {
            $this->UserSubnetIPNum = $param["UserSubnetIPNum"];
        }

        if (array_key_exists("ScaleOutNodeIp",$param) and $param["ScaleOutNodeIp"] !== null) {
            $this->ScaleOutNodeIp = $param["ScaleOutNodeIp"];
        }

        if (array_key_exists("ReduceShardInfo",$param) and $param["ReduceShardInfo"] !== null) {
            $this->ReduceShardInfo = $param["ReduceShardInfo"];
        }
    }
}
