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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大模型解析DNA解析配置
 *
 * @method string getSwitch() 获取<p>DNA解析任务开关</p><p>枚举值：</p><ul><li>ON： 开启DNA解析任务</li><li>OFF： 关闭DNA解析任务</li></ul><p>默认值：OFF</p>
 * @method void setSwitch(string $Switch) 设置<p>DNA解析任务开关</p><p>枚举值：</p><ul><li>ON： 开启DNA解析任务</li><li>OFF： 关闭DNA解析任务</li></ul><p>默认值：OFF</p>
 */
class LLMComprehendDNA extends AbstractModel
{
    /**
     * @var string <p>DNA解析任务开关</p><p>枚举值：</p><ul><li>ON： 开启DNA解析任务</li><li>OFF： 关闭DNA解析任务</li></ul><p>默认值：OFF</p>
     */
    public $Switch;

    /**
     * @param string $Switch <p>DNA解析任务开关</p><p>枚举值：</p><ul><li>ON： 开启DNA解析任务</li><li>OFF： 关闭DNA解析任务</li></ul><p>默认值：OFF</p>
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }
    }
}
