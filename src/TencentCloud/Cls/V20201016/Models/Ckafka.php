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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CKafka的描述-需要投递到的kafka信息
 *
 * @method string getVip() 获取Ckafka 的 Vip
 * @method void setVip(string $Vip) 设置Ckafka 的 Vip
 * @method string getVport() 获取Ckafka 的 Vport
 * @method void setVport(string $Vport) 设置Ckafka 的 Vport
 * @method string getInstanceId() 获取Ckafka 的 InstanceId
 * @method void setInstanceId(string $InstanceId) 设置Ckafka 的 InstanceId
 * @method string getInstanceName() 获取Ckafka 的 InstanceName
 * @method void setInstanceName(string $InstanceName) 设置Ckafka 的 InstanceName
 * @method string getTopicId() 获取Ckafka 的 TopicId
 * @method void setTopicId(string $TopicId) 设置Ckafka 的 TopicId
 * @method string getTopicName() 获取Ckafka 的 TopicName
 * @method void setTopicName(string $TopicName) 设置Ckafka 的 TopicName
 */
class Ckafka extends AbstractModel
{
    /**
     * @var string Ckafka 的 Vip
     */
    public $Vip;

    /**
     * @var string Ckafka 的 Vport
     */
    public $Vport;

    /**
     * @var string Ckafka 的 InstanceId
     */
    public $InstanceId;

    /**
     * @var string Ckafka 的 InstanceName
     */
    public $InstanceName;

    /**
     * @var string Ckafka 的 TopicId
     */
    public $TopicId;

    /**
     * @var string Ckafka 的 TopicName
     */
    public $TopicName;

    /**
     * @param string $Vip Ckafka 的 Vip
     * @param string $Vport Ckafka 的 Vport
     * @param string $InstanceId Ckafka 的 InstanceId
     * @param string $InstanceName Ckafka 的 InstanceName
     * @param string $TopicId Ckafka 的 TopicId
     * @param string $TopicName Ckafka 的 TopicName
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
        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }
    }
}
