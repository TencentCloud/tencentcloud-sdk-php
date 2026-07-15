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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * agent 应用主题信息
 *
 * @method string getTopicId() 获取<p>日志主题id</p>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题id</p>
 * @method string getFlag() 获取<p>主题对应的标识</p><p>Langfuse类型对应一个trace标识的日志主题</p>
 * @method void setFlag(string $Flag) 设置<p>主题对应的标识</p><p>Langfuse类型对应一个trace标识的日志主题</p>
 */
class AgentTopicInfo extends AbstractModel
{
    /**
     * @var string <p>日志主题id</p>
     */
    public $TopicId;

    /**
     * @var string <p>主题对应的标识</p><p>Langfuse类型对应一个trace标识的日志主题</p>
     */
    public $Flag;

    /**
     * @param string $TopicId <p>日志主题id</p>
     * @param string $Flag <p>主题对应的标识</p><p>Langfuse类型对应一个trace标识的日志主题</p>
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

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }
    }
}
