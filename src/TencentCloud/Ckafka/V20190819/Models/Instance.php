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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例对象
 *
 * @method string getInstanceId() 获取ckafka集群实例Id
 * @method void setInstanceId(string $InstanceId) 设置ckafka集群实例Id
 * @method string getInstanceName() 获取ckafka集群实例Name
 * @method void setInstanceName(string $InstanceName) 设置ckafka集群实例Name
 * @method integer getStatus() 获取实例的状态。0: 创建中，1: 运行中，2: 删除中,  3: 已删除,  5: 隔离中,  7: 升级中,  -1: 创建失败 
 * @method void setStatus(integer $Status) 设置实例的状态。0: 创建中，1: 运行中，2: 删除中,  3: 已删除,  5: 隔离中,  7: 升级中,  -1: 创建失败 
 * @method boolean getIfCommunity() 获取是否开源实例。开源：true，不开源：false
 * @method void setIfCommunity(boolean $IfCommunity) 设置是否开源实例。开源：true，不开源：false
 */
class Instance extends AbstractModel
{
    /**
     * @var string ckafka集群实例Id
     */
    public $InstanceId;

    /**
     * @var string ckafka集群实例Name
     */
    public $InstanceName;

    /**
     * @var integer 实例的状态。0: 创建中，1: 运行中，2: 删除中,  3: 已删除,  5: 隔离中,  7: 升级中,  -1: 创建失败 
     */
    public $Status;

    /**
     * @var boolean 是否开源实例。开源：true，不开源：false
     */
    public $IfCommunity;

    /**
     * @param string $InstanceId ckafka集群实例Id
     * @param string $InstanceName ckafka集群实例Name
     * @param integer $Status 实例的状态。0: 创建中，1: 运行中，2: 删除中,  3: 已删除,  5: 隔离中,  7: 升级中,  -1: 创建失败 
     * @param boolean $IfCommunity 是否开源实例。开源：true，不开源：false
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("IfCommunity",$param) and $param["IfCommunity"] !== null) {
            $this->IfCommunity = $param["IfCommunity"];
        }
    }
}
