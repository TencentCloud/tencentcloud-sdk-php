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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主题占用Broker磁盘大小
 *
 * @method string getTopicName() 获取主题名称
 * @method void setTopicName(string $TopicName) 设置主题名称
 * @method string getTopicId() 获取主题Id
 * @method void setTopicId(string $TopicId) 设置主题Id
 * @method integer getDataSize() 获取主题占用Broker 容量大小
 * @method void setDataSize(integer $DataSize) 设置主题占用Broker 容量大小
 */
class BrokerTopicData extends AbstractModel
{
    /**
     * @var string 主题名称
     */
    public $TopicName;

    /**
     * @var string 主题Id
     */
    public $TopicId;

    /**
     * @var integer 主题占用Broker 容量大小
     */
    public $DataSize;

    /**
     * @param string $TopicName 主题名称
     * @param string $TopicId 主题Id
     * @param integer $DataSize 主题占用Broker 容量大小
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

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("DataSize",$param) and $param["DataSize"] !== null) {
            $this->DataSize = $param["DataSize"];
        }
    }
}
