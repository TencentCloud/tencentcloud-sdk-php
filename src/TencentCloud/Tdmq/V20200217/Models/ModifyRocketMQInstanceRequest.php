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
 * ModifyRocketMQInstance请求参数结构体
 *
 * @method string getInstanceId() 获取专享实例ID
 * @method void setInstanceId(string $InstanceId) 设置专享实例ID
 * @method string getName() 获取实例名称
 * @method void setName(string $Name) 设置实例名称
 * @method string getRemark() 获取实例备注信息
 * @method void setRemark(string $Remark) 设置实例备注信息
 * @method integer getMessageRetention() 获取实例消息保留时间，小时为单位
 * @method void setMessageRetention(integer $MessageRetention) 设置实例消息保留时间，小时为单位
 * @method boolean getEnableDeletionProtection() 获取是否开启删除保护
 * @method void setEnableDeletionProtection(boolean $EnableDeletionProtection) 设置是否开启删除保护
 * @method float getSendReceiveRatio() 获取控制生产和消费消息的 TPS 占比，取值范围0～1，默认值为0.5
 * @method void setSendReceiveRatio(float $SendReceiveRatio) 设置控制生产和消费消息的 TPS 占比，取值范围0～1，默认值为0.5
 */
class ModifyRocketMQInstanceRequest extends AbstractModel
{
    /**
     * @var string 专享实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $Name;

    /**
     * @var string 实例备注信息
     */
    public $Remark;

    /**
     * @var integer 实例消息保留时间，小时为单位
     */
    public $MessageRetention;

    /**
     * @var boolean 是否开启删除保护
     */
    public $EnableDeletionProtection;

    /**
     * @var float 控制生产和消费消息的 TPS 占比，取值范围0～1，默认值为0.5
     */
    public $SendReceiveRatio;

    /**
     * @param string $InstanceId 专享实例ID
     * @param string $Name 实例名称
     * @param string $Remark 实例备注信息
     * @param integer $MessageRetention 实例消息保留时间，小时为单位
     * @param boolean $EnableDeletionProtection 是否开启删除保护
     * @param float $SendReceiveRatio 控制生产和消费消息的 TPS 占比，取值范围0～1，默认值为0.5
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("MessageRetention",$param) and $param["MessageRetention"] !== null) {
            $this->MessageRetention = $param["MessageRetention"];
        }

        if (array_key_exists("EnableDeletionProtection",$param) and $param["EnableDeletionProtection"] !== null) {
            $this->EnableDeletionProtection = $param["EnableDeletionProtection"];
        }

        if (array_key_exists("SendReceiveRatio",$param) and $param["SendReceiveRatio"] !== null) {
            $this->SendReceiveRatio = $param["SendReceiveRatio"];
        }
    }
}
