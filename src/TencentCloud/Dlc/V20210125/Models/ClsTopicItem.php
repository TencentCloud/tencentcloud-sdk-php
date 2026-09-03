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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLS 日志主题条目
 *
 * @method string getTopicId() 获取<p>日志主题 ID</p>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题 ID</p>
 * @method string getTopicName() 获取<p>日志主题名称</p>
 * @method void setTopicName(string $TopicName) 设置<p>日志主题名称</p>
 */
class ClsTopicItem extends AbstractModel
{
    /**
     * @var string <p>日志主题 ID</p>
     */
    public $TopicId;

    /**
     * @var string <p>日志主题名称</p>
     */
    public $TopicName;

    /**
     * @param string $TopicId <p>日志主题 ID</p>
     * @param string $TopicName <p>日志主题名称</p>
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }
    }
}
