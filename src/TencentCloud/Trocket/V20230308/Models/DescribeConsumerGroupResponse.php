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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConsumerGroup返回参数结构体
 *
 * @method integer getConsumerNum() 获取在线消费者数量
 * @method void setConsumerNum(integer $ConsumerNum) 设置在线消费者数量
 * @method integer getTps() 获取TPS
 * @method void setTps(integer $Tps) 设置TPS
 * @method integer getConsumerLag() 获取消息堆积数量
 * @method void setConsumerLag(integer $ConsumerLag) 设置消息堆积数量
 * @method string getConsumeType() 获取消费者类型
 * @method void setConsumeType(string $ConsumeType) 设置消费者类型
 * @method integer getCreatedTime() 获取创建时间，秒为单位
 * @method void setCreatedTime(integer $CreatedTime) 设置创建时间，秒为单位
 * @method boolean getConsumeMessageOrderly() 获取顺序投递：true
并发投递：false
 * @method void setConsumeMessageOrderly(boolean $ConsumeMessageOrderly) 设置顺序投递：true
并发投递：false
 * @method boolean getConsumeEnable() 获取是否开启消费
 * @method void setConsumeEnable(boolean $ConsumeEnable) 设置是否开启消费
 * @method integer getMaxRetryTimes() 获取最大重试次数
 * @method void setMaxRetryTimes(integer $MaxRetryTimes) 设置最大重试次数
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeConsumerGroupResponse extends AbstractModel
{
    /**
     * @var integer 在线消费者数量
     */
    public $ConsumerNum;

    /**
     * @var integer TPS
     */
    public $Tps;

    /**
     * @var integer 消息堆积数量
     */
    public $ConsumerLag;

    /**
     * @var string 消费者类型
     */
    public $ConsumeType;

    /**
     * @var integer 创建时间，秒为单位
     */
    public $CreatedTime;

    /**
     * @var boolean 顺序投递：true
并发投递：false
     */
    public $ConsumeMessageOrderly;

    /**
     * @var boolean 是否开启消费
     */
    public $ConsumeEnable;

    /**
     * @var integer 最大重试次数
     */
    public $MaxRetryTimes;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ConsumerNum 在线消费者数量
     * @param integer $Tps TPS
     * @param integer $ConsumerLag 消息堆积数量
     * @param string $ConsumeType 消费者类型
     * @param integer $CreatedTime 创建时间，秒为单位
     * @param boolean $ConsumeMessageOrderly 顺序投递：true
并发投递：false
     * @param boolean $ConsumeEnable 是否开启消费
     * @param integer $MaxRetryTimes 最大重试次数
     * @param string $Remark 备注
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ConsumerNum",$param) and $param["ConsumerNum"] !== null) {
            $this->ConsumerNum = $param["ConsumerNum"];
        }

        if (array_key_exists("Tps",$param) and $param["Tps"] !== null) {
            $this->Tps = $param["Tps"];
        }

        if (array_key_exists("ConsumerLag",$param) and $param["ConsumerLag"] !== null) {
            $this->ConsumerLag = $param["ConsumerLag"];
        }

        if (array_key_exists("ConsumeType",$param) and $param["ConsumeType"] !== null) {
            $this->ConsumeType = $param["ConsumeType"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ConsumeMessageOrderly",$param) and $param["ConsumeMessageOrderly"] !== null) {
            $this->ConsumeMessageOrderly = $param["ConsumeMessageOrderly"];
        }

        if (array_key_exists("ConsumeEnable",$param) and $param["ConsumeEnable"] !== null) {
            $this->ConsumeEnable = $param["ConsumeEnable"];
        }

        if (array_key_exists("MaxRetryTimes",$param) and $param["MaxRetryTimes"] !== null) {
            $this->MaxRetryTimes = $param["MaxRetryTimes"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
