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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主题实例
 *
 * @method string getTopicName() 获取主题名称。
 * @method void setTopicName(string $TopicName) 设置主题名称。
 * @method integer getPulsarTopicType() 获取0: 非持久非分区
1: 非持久分区
2: 持久非分区
3: 持久分区
 * @method void setPulsarTopicType(integer $PulsarTopicType) 设置0: 非持久非分区
1: 非持久分区
2: 持久非分区
3: 持久分区
 */
class Topic_Simplification extends AbstractModel
{
    /**
     * @var string 主题名称。
     */
    public $TopicName;

    /**
     * @var integer 0: 非持久非分区
1: 非持久分区
2: 持久非分区
3: 持久分区
     */
    public $PulsarTopicType;

    /**
     * @param string $TopicName 主题名称。
     * @param integer $PulsarTopicType 0: 非持久非分区
1: 非持久分区
2: 持久非分区
3: 持久分区
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

        if (array_key_exists("PulsarTopicType",$param) and $param["PulsarTopicType"] !== null) {
            $this->PulsarTopicType = $param["PulsarTopicType"];
        }
    }
}
