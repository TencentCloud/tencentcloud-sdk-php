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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用来描述需要投递到kafka topic的参数
 *
 * @method string getTopicName() 获取ckafka topic name
 * @method void setTopicName(string $TopicName) 设置ckafka topic name
 * @method string getResourceDescription() 获取ckafka资源qcs六段式
 * @method void setResourceDescription(string $ResourceDescription) 设置ckafka资源qcs六段式
 */
class CkafkaDeliveryParams extends AbstractModel
{
    /**
     * @var string ckafka topic name
     */
    public $TopicName;

    /**
     * @var string ckafka资源qcs六段式
     */
    public $ResourceDescription;

    /**
     * @param string $TopicName ckafka topic name
     * @param string $ResourceDescription ckafka资源qcs六段式
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("ResourceDescription",$param) and $param["ResourceDescription"] !== null) {
            $this->ResourceDescription = $param["ResourceDescription"];
        }
    }
}
