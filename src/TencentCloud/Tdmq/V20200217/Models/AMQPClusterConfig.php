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
 * AMQP集群配置
 *
 * @method integer getMaxTpsPerVHost() 获取单Vhost TPS上限
 * @method void setMaxTpsPerVHost(integer $MaxTpsPerVHost) 设置单Vhost TPS上限
 * @method integer getMaxConnNumPerVHost() 获取单Vhost客户端连接数上限
 * @method void setMaxConnNumPerVHost(integer $MaxConnNumPerVHost) 设置单Vhost客户端连接数上限
 * @method integer getMaxVHostNum() 获取最大Vhost数量
 * @method void setMaxVHostNum(integer $MaxVHostNum) 设置最大Vhost数量
 * @method integer getMaxExchangeNum() 获取最大exchange数量
 * @method void setMaxExchangeNum(integer $MaxExchangeNum) 设置最大exchange数量
 * @method integer getMaxQueueNum() 获取最大Queue数量
 * @method void setMaxQueueNum(integer $MaxQueueNum) 设置最大Queue数量
 * @method integer getMaxRetentionTime() 获取消息最大保留时间，以毫秒为单位
 * @method void setMaxRetentionTime(integer $MaxRetentionTime) 设置消息最大保留时间，以毫秒为单位
 * @method integer getUsedVHostNum() 获取已使用Vhost数量
 * @method void setUsedVHostNum(integer $UsedVHostNum) 设置已使用Vhost数量
 * @method integer getUsedExchangeNum() 获取已使用exchange数量
 * @method void setUsedExchangeNum(integer $UsedExchangeNum) 设置已使用exchange数量
 * @method integer getUsedQueueNum() 获取已使用queue数量
 * @method void setUsedQueueNum(integer $UsedQueueNum) 设置已使用queue数量
 */
class AMQPClusterConfig extends AbstractModel
{
    /**
     * @var integer 单Vhost TPS上限
     */
    public $MaxTpsPerVHost;

    /**
     * @var integer 单Vhost客户端连接数上限
     */
    public $MaxConnNumPerVHost;

    /**
     * @var integer 最大Vhost数量
     */
    public $MaxVHostNum;

    /**
     * @var integer 最大exchange数量
     */
    public $MaxExchangeNum;

    /**
     * @var integer 最大Queue数量
     */
    public $MaxQueueNum;

    /**
     * @var integer 消息最大保留时间，以毫秒为单位
     */
    public $MaxRetentionTime;

    /**
     * @var integer 已使用Vhost数量
     */
    public $UsedVHostNum;

    /**
     * @var integer 已使用exchange数量
     */
    public $UsedExchangeNum;

    /**
     * @var integer 已使用queue数量
     */
    public $UsedQueueNum;

    /**
     * @param integer $MaxTpsPerVHost 单Vhost TPS上限
     * @param integer $MaxConnNumPerVHost 单Vhost客户端连接数上限
     * @param integer $MaxVHostNum 最大Vhost数量
     * @param integer $MaxExchangeNum 最大exchange数量
     * @param integer $MaxQueueNum 最大Queue数量
     * @param integer $MaxRetentionTime 消息最大保留时间，以毫秒为单位
     * @param integer $UsedVHostNum 已使用Vhost数量
     * @param integer $UsedExchangeNum 已使用exchange数量
     * @param integer $UsedQueueNum 已使用queue数量
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
        if (array_key_exists("MaxTpsPerVHost",$param) and $param["MaxTpsPerVHost"] !== null) {
            $this->MaxTpsPerVHost = $param["MaxTpsPerVHost"];
        }

        if (array_key_exists("MaxConnNumPerVHost",$param) and $param["MaxConnNumPerVHost"] !== null) {
            $this->MaxConnNumPerVHost = $param["MaxConnNumPerVHost"];
        }

        if (array_key_exists("MaxVHostNum",$param) and $param["MaxVHostNum"] !== null) {
            $this->MaxVHostNum = $param["MaxVHostNum"];
        }

        if (array_key_exists("MaxExchangeNum",$param) and $param["MaxExchangeNum"] !== null) {
            $this->MaxExchangeNum = $param["MaxExchangeNum"];
        }

        if (array_key_exists("MaxQueueNum",$param) and $param["MaxQueueNum"] !== null) {
            $this->MaxQueueNum = $param["MaxQueueNum"];
        }

        if (array_key_exists("MaxRetentionTime",$param) and $param["MaxRetentionTime"] !== null) {
            $this->MaxRetentionTime = $param["MaxRetentionTime"];
        }

        if (array_key_exists("UsedVHostNum",$param) and $param["UsedVHostNum"] !== null) {
            $this->UsedVHostNum = $param["UsedVHostNum"];
        }

        if (array_key_exists("UsedExchangeNum",$param) and $param["UsedExchangeNum"] !== null) {
            $this->UsedExchangeNum = $param["UsedExchangeNum"];
        }

        if (array_key_exists("UsedQueueNum",$param) and $param["UsedQueueNum"] !== null) {
            $this->UsedQueueNum = $param["UsedQueueNum"];
        }
    }
}
