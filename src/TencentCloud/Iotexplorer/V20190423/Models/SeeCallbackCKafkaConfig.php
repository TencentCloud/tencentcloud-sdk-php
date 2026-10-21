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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TWeSee CKafka 回调配置
 *
 * @method string getInstanceId() 获取<p>CKafka 实例 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>CKafka 实例 ID</p>
 * @method string getTopic() 获取<p>CKafka 实例中的 Topic 名</p>
 * @method void setTopic(string $Topic) 设置<p>CKafka 实例中的 Topic 名</p>
 * @method string getRegion() 获取<p>CKafka 实例所在的地域</p>
 * @method void setRegion(string $Region) 设置<p>CKafka 实例所在的地域</p>
 */
class SeeCallbackCKafkaConfig extends AbstractModel
{
    /**
     * @var string <p>CKafka 实例 ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>CKafka 实例中的 Topic 名</p>
     */
    public $Topic;

    /**
     * @var string <p>CKafka 实例所在的地域</p>
     */
    public $Region;

    /**
     * @param string $InstanceId <p>CKafka 实例 ID</p>
     * @param string $Topic <p>CKafka 实例中的 Topic 名</p>
     * @param string $Region <p>CKafka 实例所在的地域</p>
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

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
