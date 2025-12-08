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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEnvironmentAttributes返回参数结构体
 *
 * @method integer getMsgTTL() 获取未消费消息过期时间，单位：秒，最大1296000（15天）。
 * @method void setMsgTTL(integer $MsgTTL) 设置未消费消息过期时间，单位：秒，最大1296000（15天）。
 * @method integer getRateInByte() 获取消费速率限制，单位：byte/秒，0：不限速。
 * @method void setRateInByte(integer $RateInByte) 设置消费速率限制，单位：byte/秒，0：不限速。
 * @method integer getRateInSize() 获取消费速率限制，单位：个数/秒，0：不限速。
 * @method void setRateInSize(integer $RateInSize) 设置消费速率限制，单位：个数/秒，0：不限速。
 * @method integer getRetentionHours() 获取已消费消息保存策略，单位：小时，0：消费完马上删除。
 * @method void setRetentionHours(integer $RetentionHours) 设置已消费消息保存策略，单位：小时，0：消费完马上删除。
 * @method integer getRetentionSize() 获取已消费消息保存策略，单位：G，0：消费完马上删除。
 * @method void setRetentionSize(integer $RetentionSize) 设置已消费消息保存策略，单位：G，0：消费完马上删除。
 * @method string getEnvironmentId() 获取环境（命名空间）名称。
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境（命名空间）名称。
 * @method integer getReplicas() 获取副本数。
 * @method void setReplicas(integer $Replicas) 设置副本数。
 * @method string getRemark() 获取备注。
 * @method void setRemark(string $Remark) 设置备注。
 * @method integer getSubscriptionExpirationTime() 获取离线订阅过期自动清理时间
 * @method void setSubscriptionExpirationTime(integer $SubscriptionExpirationTime) 设置离线订阅过期自动清理时间
 * @method boolean getSubscriptionExpirationTimeEnable() 获取离线订阅过期自动清理时间开关
 * @method void setSubscriptionExpirationTimeEnable(boolean $SubscriptionExpirationTimeEnable) 设置离线订阅过期自动清理时间开关
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEnvironmentAttributesResponse extends AbstractModel
{
    /**
     * @var integer 未消费消息过期时间，单位：秒，最大1296000（15天）。
     */
    public $MsgTTL;

    /**
     * @var integer 消费速率限制，单位：byte/秒，0：不限速。
     */
    public $RateInByte;

    /**
     * @var integer 消费速率限制，单位：个数/秒，0：不限速。
     */
    public $RateInSize;

    /**
     * @var integer 已消费消息保存策略，单位：小时，0：消费完马上删除。
     */
    public $RetentionHours;

    /**
     * @var integer 已消费消息保存策略，单位：G，0：消费完马上删除。
     */
    public $RetentionSize;

    /**
     * @var string 环境（命名空间）名称。
     */
    public $EnvironmentId;

    /**
     * @var integer 副本数。
     */
    public $Replicas;

    /**
     * @var string 备注。
     */
    public $Remark;

    /**
     * @var integer 离线订阅过期自动清理时间
     */
    public $SubscriptionExpirationTime;

    /**
     * @var boolean 离线订阅过期自动清理时间开关
     */
    public $SubscriptionExpirationTimeEnable;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $MsgTTL 未消费消息过期时间，单位：秒，最大1296000（15天）。
     * @param integer $RateInByte 消费速率限制，单位：byte/秒，0：不限速。
     * @param integer $RateInSize 消费速率限制，单位：个数/秒，0：不限速。
     * @param integer $RetentionHours 已消费消息保存策略，单位：小时，0：消费完马上删除。
     * @param integer $RetentionSize 已消费消息保存策略，单位：G，0：消费完马上删除。
     * @param string $EnvironmentId 环境（命名空间）名称。
     * @param integer $Replicas 副本数。
     * @param string $Remark 备注。
     * @param integer $SubscriptionExpirationTime 离线订阅过期自动清理时间
     * @param boolean $SubscriptionExpirationTimeEnable 离线订阅过期自动清理时间开关
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("MsgTTL",$param) and $param["MsgTTL"] !== null) {
            $this->MsgTTL = $param["MsgTTL"];
        }

        if (array_key_exists("RateInByte",$param) and $param["RateInByte"] !== null) {
            $this->RateInByte = $param["RateInByte"];
        }

        if (array_key_exists("RateInSize",$param) and $param["RateInSize"] !== null) {
            $this->RateInSize = $param["RateInSize"];
        }

        if (array_key_exists("RetentionHours",$param) and $param["RetentionHours"] !== null) {
            $this->RetentionHours = $param["RetentionHours"];
        }

        if (array_key_exists("RetentionSize",$param) and $param["RetentionSize"] !== null) {
            $this->RetentionSize = $param["RetentionSize"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SubscriptionExpirationTime",$param) and $param["SubscriptionExpirationTime"] !== null) {
            $this->SubscriptionExpirationTime = $param["SubscriptionExpirationTime"];
        }

        if (array_key_exists("SubscriptionExpirationTimeEnable",$param) and $param["SubscriptionExpirationTimeEnable"] !== null) {
            $this->SubscriptionExpirationTimeEnable = $param["SubscriptionExpirationTimeEnable"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
