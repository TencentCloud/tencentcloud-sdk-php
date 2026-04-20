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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 共享订阅组
 *
 * @method string getInstanceId() 获取腾讯云MQTT实例ID
 * @method void setInstanceId(string $InstanceId) 设置腾讯云MQTT实例ID
 * @method string getSharedName() 获取共享订阅组名
 * @method void setSharedName(string $SharedName) 设置共享订阅组名
 * @method integer getLbStrategy() 获取共享组消费负载均衡策略 1.RANDOM 2.HASH_PARTITION
 * @method void setLbStrategy(integer $LbStrategy) 设置共享组消费负载均衡策略 1.RANDOM 2.HASH_PARTITION
 * @method integer getExpiryInterval() 获取HASH_PARTITION 策略下生效，表示Client掉线或新Client上线加入共享订阅组消费的延迟时间。
范围：0～600秒
 * @method void setExpiryInterval(integer $ExpiryInterval) 设置HASH_PARTITION 策略下生效，表示Client掉线或新Client上线加入共享订阅组消费的延迟时间。
范围：0～600秒
 * @method string getRemark() 获取备注，长度不超过128个字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注，长度不超过128个字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间，毫秒级时间戳 。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，毫秒级时间戳 。
 * @method integer getUpdateTime() 获取上次更新时间，毫秒级时间戳 。
 * @method void setUpdateTime(integer $UpdateTime) 设置上次更新时间，毫秒级时间戳 。
 */
class SharedGroup extends AbstractModel
{
    /**
     * @var string 腾讯云MQTT实例ID
     */
    public $InstanceId;

    /**
     * @var string 共享订阅组名
     */
    public $SharedName;

    /**
     * @var integer 共享组消费负载均衡策略 1.RANDOM 2.HASH_PARTITION
     */
    public $LbStrategy;

    /**
     * @var integer HASH_PARTITION 策略下生效，表示Client掉线或新Client上线加入共享订阅组消费的延迟时间。
范围：0～600秒
     */
    public $ExpiryInterval;

    /**
     * @var string 备注，长度不超过128个字符。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var integer 创建时间，毫秒级时间戳 。
     */
    public $CreateTime;

    /**
     * @var integer 上次更新时间，毫秒级时间戳 。
     */
    public $UpdateTime;

    /**
     * @param string $InstanceId 腾讯云MQTT实例ID
     * @param string $SharedName 共享订阅组名
     * @param integer $LbStrategy 共享组消费负载均衡策略 1.RANDOM 2.HASH_PARTITION
     * @param integer $ExpiryInterval HASH_PARTITION 策略下生效，表示Client掉线或新Client上线加入共享订阅组消费的延迟时间。
范围：0～600秒
     * @param string $Remark 备注，长度不超过128个字符。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间，毫秒级时间戳 。
     * @param integer $UpdateTime 上次更新时间，毫秒级时间戳 。
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

        if (array_key_exists("SharedName",$param) and $param["SharedName"] !== null) {
            $this->SharedName = $param["SharedName"];
        }

        if (array_key_exists("LbStrategy",$param) and $param["LbStrategy"] !== null) {
            $this->LbStrategy = $param["LbStrategy"];
        }

        if (array_key_exists("ExpiryInterval",$param) and $param["ExpiryInterval"] !== null) {
            $this->ExpiryInterval = $param["ExpiryInterval"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
