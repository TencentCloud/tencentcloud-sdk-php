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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RabbitMQ集群规格信息
 *
 * @method string getSpecName() 获取集群规格名称
 * @method void setSpecName(string $SpecName) 设置集群规格名称
 * @method integer getMaxTps() 获取峰值tps
 * @method void setMaxTps(integer $MaxTps) 设置峰值tps
 * @method integer getMaxQueueNum() 获取最大队列数
 * @method void setMaxQueueNum(integer $MaxQueueNum) 设置最大队列数
 * @method integer getMaxExchangeNum() 获取最大交换机数
 * @method void setMaxExchangeNum(integer $MaxExchangeNum) 设置最大交换机数
 * @method integer getMaxVhostNum() 获取最大vhost数
 * @method void setMaxVhostNum(integer $MaxVhostNum) 设置最大vhost数
 * @method integer getMaxConnNum() 获取最大连接数
 * @method void setMaxConnNum(integer $MaxConnNum) 设置最大连接数
 * @method integer getMaxUserNum() 获取最大用户数
 * @method void setMaxUserNum(integer $MaxUserNum) 设置最大用户数
 * @method integer getMaxBandWidth() 获取峰值带宽，已废弃
 * @method void setMaxBandWidth(integer $MaxBandWidth) 设置峰值带宽，已废弃
 * @method integer getPublicNetworkTps() 获取公网带宽，已废弃
 * @method void setPublicNetworkTps(integer $PublicNetworkTps) 设置公网带宽，已废弃
 */
class RabbitMQClusterSpecInfo extends AbstractModel
{
    /**
     * @var string 集群规格名称
     */
    public $SpecName;

    /**
     * @var integer 峰值tps
     */
    public $MaxTps;

    /**
     * @var integer 最大队列数
     */
    public $MaxQueueNum;

    /**
     * @var integer 最大交换机数
     */
    public $MaxExchangeNum;

    /**
     * @var integer 最大vhost数
     */
    public $MaxVhostNum;

    /**
     * @var integer 最大连接数
     */
    public $MaxConnNum;

    /**
     * @var integer 最大用户数
     */
    public $MaxUserNum;

    /**
     * @var integer 峰值带宽，已废弃
     */
    public $MaxBandWidth;

    /**
     * @var integer 公网带宽，已废弃
     */
    public $PublicNetworkTps;

    /**
     * @param string $SpecName 集群规格名称
     * @param integer $MaxTps 峰值tps
     * @param integer $MaxQueueNum 最大队列数
     * @param integer $MaxExchangeNum 最大交换机数
     * @param integer $MaxVhostNum 最大vhost数
     * @param integer $MaxConnNum 最大连接数
     * @param integer $MaxUserNum 最大用户数
     * @param integer $MaxBandWidth 峰值带宽，已废弃
     * @param integer $PublicNetworkTps 公网带宽，已废弃
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

        if (array_key_exists("MaxTps",$param) and $param["MaxTps"] !== null) {
            $this->MaxTps = $param["MaxTps"];
        }

        if (array_key_exists("MaxQueueNum",$param) and $param["MaxQueueNum"] !== null) {
            $this->MaxQueueNum = $param["MaxQueueNum"];
        }

        if (array_key_exists("MaxExchangeNum",$param) and $param["MaxExchangeNum"] !== null) {
            $this->MaxExchangeNum = $param["MaxExchangeNum"];
        }

        if (array_key_exists("MaxVhostNum",$param) and $param["MaxVhostNum"] !== null) {
            $this->MaxVhostNum = $param["MaxVhostNum"];
        }

        if (array_key_exists("MaxConnNum",$param) and $param["MaxConnNum"] !== null) {
            $this->MaxConnNum = $param["MaxConnNum"];
        }

        if (array_key_exists("MaxUserNum",$param) and $param["MaxUserNum"] !== null) {
            $this->MaxUserNum = $param["MaxUserNum"];
        }

        if (array_key_exists("MaxBandWidth",$param) and $param["MaxBandWidth"] !== null) {
            $this->MaxBandWidth = $param["MaxBandWidth"];
        }

        if (array_key_exists("PublicNetworkTps",$param) and $param["PublicNetworkTps"] !== null) {
            $this->PublicNetworkTps = $param["PublicNetworkTps"];
        }
    }
}
