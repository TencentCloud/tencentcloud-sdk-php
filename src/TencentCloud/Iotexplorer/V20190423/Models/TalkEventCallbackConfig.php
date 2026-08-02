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
 * 事件回调配置
 *
 * @method boolean getEnabled() 获取<p>是否开启</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否开启</p>
 * @method string getTopic() 获取<p>Topic 名称</p>
 * @method void setTopic(string $Topic) 设置<p>Topic 名称</p>
 */
class TalkEventCallbackConfig extends AbstractModel
{
    /**
     * @var boolean <p>是否开启</p>
     */
    public $Enabled;

    /**
     * @var string <p>Topic 名称</p>
     */
    public $Topic;

    /**
     * @param boolean $Enabled <p>是否开启</p>
     * @param string $Topic <p>Topic 名称</p>
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }
    }
}
