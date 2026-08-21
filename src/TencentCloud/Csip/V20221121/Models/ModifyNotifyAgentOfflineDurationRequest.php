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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNotifyAgentOfflineDuration请求参数结构体
 *
 * @method string getDuration() 获取<p>离线时长，分钟级20-50m，步长10；小时级1-24h，步长1</p>
 * @method void setDuration(string $Duration) 设置<p>离线时长，分钟级20-50m，步长10；小时级1-24h，步长1</p>
 */
class ModifyNotifyAgentOfflineDurationRequest extends AbstractModel
{
    /**
     * @var string <p>离线时长，分钟级20-50m，步长10；小时级1-24h，步长1</p>
     */
    public $Duration;

    /**
     * @param string $Duration <p>离线时长，分钟级20-50m，步长10；小时级1-24h，步长1</p>
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
        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
