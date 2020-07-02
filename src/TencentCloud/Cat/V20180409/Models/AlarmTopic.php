<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警主题
 *
 * @method string getTopicId() 获取主题的ID
 * @method void setTopicId(string $TopicId) 设置主题的ID
 * @method string getTopicName() 获取主题的名称
 * @method void setTopicName(string $TopicName) 设置主题的名称
 */
class AlarmTopic extends AbstractModel
{
    /**
     * @var string 主题的ID
     */
    public $TopicId;

    /**
     * @var string 主题的名称
     */
    public $TopicName;

    /**
     * @param string $TopicId 主题的ID
     * @param string $TopicName 主题的名称
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
        if (array_key_exists('TopicId',$param) and $param['TopicId'] !== null) {
            $this->TopicId = $param['TopicId'];
        }

        if (array_key_exists('TopicName',$param) and $param['TopicName'] !== null) {
            $this->TopicName = $param['TopicName'];
        }
    }
}
