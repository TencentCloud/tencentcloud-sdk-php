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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RabbitMQ集群规格信息
 *
 * @method string getSpecName() 获取集群规格名称
 * @method void setSpecName(string $SpecName) 设置集群规格名称
 * @method integer getNodeCount() 获取节点数量
 * @method void setNodeCount(integer $NodeCount) 设置节点数量
 * @method integer getMaxTps() 获取峰值tps
 * @method void setMaxTps(integer $MaxTps) 设置峰值tps
 * @method integer getMaxBandWidth() 获取峰值带宽。单位：mbps
 * @method void setMaxBandWidth(integer $MaxBandWidth) 设置峰值带宽。单位：mbps
 * @method integer getMaxStorage() 获取存储容量。单位：GB
 * @method void setMaxStorage(integer $MaxStorage) 设置存储容量。单位：GB
 * @method integer getPublicNetworkTps() 获取公网带宽tps。单位：Mbps
 * @method void setPublicNetworkTps(integer $PublicNetworkTps) 设置公网带宽tps。单位：Mbps
 */
class RabbitMQClusterSpecInfo extends AbstractModel
{
    /**
     * @var string 集群规格名称
     */
    public $SpecName;

    /**
     * @var integer 节点数量
     */
    public $NodeCount;

    /**
     * @var integer 峰值tps
     */
    public $MaxTps;

    /**
     * @var integer 峰值带宽。单位：mbps
     */
    public $MaxBandWidth;

    /**
     * @var integer 存储容量。单位：GB
     */
    public $MaxStorage;

    /**
     * @var integer 公网带宽tps。单位：Mbps
     */
    public $PublicNetworkTps;

    /**
     * @param string $SpecName 集群规格名称
     * @param integer $NodeCount 节点数量
     * @param integer $MaxTps 峰值tps
     * @param integer $MaxBandWidth 峰值带宽。单位：mbps
     * @param integer $MaxStorage 存储容量。单位：GB
     * @param integer $PublicNetworkTps 公网带宽tps。单位：Mbps
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
        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("MaxTps",$param) and $param["MaxTps"] !== null) {
            $this->MaxTps = $param["MaxTps"];
        }

        if (array_key_exists("MaxBandWidth",$param) and $param["MaxBandWidth"] !== null) {
            $this->MaxBandWidth = $param["MaxBandWidth"];
        }

        if (array_key_exists("MaxStorage",$param) and $param["MaxStorage"] !== null) {
            $this->MaxStorage = $param["MaxStorage"];
        }

        if (array_key_exists("PublicNetworkTps",$param) and $param["PublicNetworkTps"] !== null) {
            $this->PublicNetworkTps = $param["PublicNetworkTps"];
        }
    }
}
