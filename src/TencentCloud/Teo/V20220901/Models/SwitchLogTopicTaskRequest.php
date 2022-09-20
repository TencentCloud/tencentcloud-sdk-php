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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SwitchLogTopicTask请求参数结构体
 *
 * @method string getTopicId() 获取推送任务的主题ID。
 * @method void setTopicId(string $TopicId) 设置推送任务的主题ID。
 * @method boolean getIsOpen() 获取是否开启推送，可选的动作有：
<li>true：开启推送任务；</li>
<li>false：关闭推送任务。</li>
 * @method void setIsOpen(boolean $IsOpen) 设置是否开启推送，可选的动作有：
<li>true：开启推送任务；</li>
<li>false：关闭推送任务。</li>
 */
class SwitchLogTopicTaskRequest extends AbstractModel
{
    /**
     * @var string 推送任务的主题ID。
     */
    public $TopicId;

    /**
     * @var boolean 是否开启推送，可选的动作有：
<li>true：开启推送任务；</li>
<li>false：关闭推送任务。</li>
     */
    public $IsOpen;

    /**
     * @param string $TopicId 推送任务的主题ID。
     * @param boolean $IsOpen 是否开启推送，可选的动作有：
<li>true：开启推送任务；</li>
<li>false：关闭推送任务。</li>
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

        if (array_key_exists("IsOpen",$param) and $param["IsOpen"] !== null) {
            $this->IsOpen = $param["IsOpen"];
        }
    }
}
