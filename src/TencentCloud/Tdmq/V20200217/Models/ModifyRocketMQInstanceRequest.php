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
 * @method string getInstanceId() 获取<p>专享实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>专享实例ID</p>
 * @method string getName() 获取<p>实例名称</p>
 * @method void setName(string $Name) 设置<p>实例名称</p>
 * @method string getRemark() 获取<p>实例备注信息</p>
 * @method void setRemark(string $Remark) 设置<p>实例备注信息</p>
 * @method integer getMessageRetention() 获取<p>实例消息保留时间，小时为单位</p>
 * @method void setMessageRetention(integer $MessageRetention) 设置<p>实例消息保留时间，小时为单位</p>
 * @method boolean getEnableDeletionProtection() 获取<p>是否开启删除保护</p>
 * @method void setEnableDeletionProtection(boolean $EnableDeletionProtection) 设置<p>是否开启删除保护</p>
 * @method float getSendReceiveRatio() 获取<p>控制生产和消费消息的 TPS 占比，取值范围0～1，默认值为0.5</p>
 * @method void setSendReceiveRatio(float $SendReceiveRatio) 设置<p>控制生产和消费消息的 TPS 占比，取值范围0～1，默认值为0.5</p>
 * @method boolean getAclEnabled() 获取<p>是否开启ACL</p>
 * @method void setAclEnabled(boolean $AclEnabled) 设置<p>是否开启ACL</p>
 */
class ModifyRocketMQInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>专享实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $Name;

    /**
     * @var string <p>实例备注信息</p>
     */
    public $Remark;

    /**
     * @var integer <p>实例消息保留时间，小时为单位</p>
     */
    public $MessageRetention;

    /**
     * @var boolean <p>是否开启删除保护</p>
     */
    public $EnableDeletionProtection;

    /**
     * @var float <p>控制生产和消费消息的 TPS 占比，取值范围0～1，默认值为0.5</p>
     */
    public $SendReceiveRatio;

    /**
     * @var boolean <p>是否开启ACL</p>
     */
    public $AclEnabled;

    /**
     * @param string $InstanceId <p>专享实例ID</p>
     * @param string $Name <p>实例名称</p>
     * @param string $Remark <p>实例备注信息</p>
     * @param integer $MessageRetention <p>实例消息保留时间，小时为单位</p>
     * @param boolean $EnableDeletionProtection <p>是否开启删除保护</p>
     * @param float $SendReceiveRatio <p>控制生产和消费消息的 TPS 占比，取值范围0～1，默认值为0.5</p>
     * @param boolean $AclEnabled <p>是否开启ACL</p>
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

        if (array_key_exists("AclEnabled",$param) and $param["AclEnabled"] !== null) {
            $this->AclEnabled = $param["AclEnabled"];
        }
    }
}
