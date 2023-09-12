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
 * CreateConsumerGroup请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getConsumerGroup() 获取消费组名称
 * @method void setConsumerGroup(string $ConsumerGroup) 设置消费组名称
 * @method integer getMaxRetryTimes() 获取最大重试次数
 * @method void setMaxRetryTimes(integer $MaxRetryTimes) 设置最大重试次数
 * @method boolean getConsumeEnable() 获取是否开启消费
 * @method void setConsumeEnable(boolean $ConsumeEnable) 设置是否开启消费
 * @method boolean getConsumeMessageOrderly() 获取顺序投递：true
并发投递：false
 * @method void setConsumeMessageOrderly(boolean $ConsumeMessageOrderly) 设置顺序投递：true
并发投递：false
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 */
class CreateConsumerGroupRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 消费组名称
     */
    public $ConsumerGroup;

    /**
     * @var integer 最大重试次数
     */
    public $MaxRetryTimes;

    /**
     * @var boolean 是否开启消费
     */
    public $ConsumeEnable;

    /**
     * @var boolean 顺序投递：true
并发投递：false
     */
    public $ConsumeMessageOrderly;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @param string $InstanceId 实例ID
     * @param string $ConsumerGroup 消费组名称
     * @param integer $MaxRetryTimes 最大重试次数
     * @param boolean $ConsumeEnable 是否开启消费
     * @param boolean $ConsumeMessageOrderly 顺序投递：true
并发投递：false
     * @param string $Remark 备注
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

        if (array_key_exists("ConsumerGroup",$param) and $param["ConsumerGroup"] !== null) {
            $this->ConsumerGroup = $param["ConsumerGroup"];
        }

        if (array_key_exists("MaxRetryTimes",$param) and $param["MaxRetryTimes"] !== null) {
            $this->MaxRetryTimes = $param["MaxRetryTimes"];
        }

        if (array_key_exists("ConsumeEnable",$param) and $param["ConsumeEnable"] !== null) {
            $this->ConsumeEnable = $param["ConsumeEnable"];
        }

        if (array_key_exists("ConsumeMessageOrderly",$param) and $param["ConsumeMessageOrderly"] !== null) {
            $this->ConsumeMessageOrderly = $param["ConsumeMessageOrderly"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
