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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 触发策略数组，每个策略里包含接口调用信息，挂断类型，通话标签，触发模式
 *
 * @method HttpCallbackConfig getInterfaceConfig() 获取<p>http 接口相关参数</p>
 * @method void setInterfaceConfig(HttpCallbackConfig $InterfaceConfig) 设置<p>http 接口相关参数</p>
 * @method array getHangupTypes() 获取<p>挂断类型</p>
 * @method void setHangupTypes(array $HangupTypes) 设置<p>挂断类型</p>
 * @method array getCallTags() 获取<p>通话标签</p>
 * @method void setCallTags(array $CallTags) 设置<p>通话标签</p>
 * @method string getTriggerMode() 获取<p>触发模式</p><p>枚举值：</p><ul><li>ONCE_PER_NUMBER： 每个号码仅第一次命中条件时触发</li><li>ALWAYS_ON_MATCH： 每次命中条件均触发</li></ul>
 * @method void setTriggerMode(string $TriggerMode) 设置<p>触发模式</p><p>枚举值：</p><ul><li>ONCE_PER_NUMBER： 每个号码仅第一次命中条件时触发</li><li>ALWAYS_ON_MATCH： 每次命中条件均触发</li></ul>
 */
class TriggerStrategyItem extends AbstractModel
{
    /**
     * @var HttpCallbackConfig <p>http 接口相关参数</p>
     */
    public $InterfaceConfig;

    /**
     * @var array <p>挂断类型</p>
     */
    public $HangupTypes;

    /**
     * @var array <p>通话标签</p>
     */
    public $CallTags;

    /**
     * @var string <p>触发模式</p><p>枚举值：</p><ul><li>ONCE_PER_NUMBER： 每个号码仅第一次命中条件时触发</li><li>ALWAYS_ON_MATCH： 每次命中条件均触发</li></ul>
     */
    public $TriggerMode;

    /**
     * @param HttpCallbackConfig $InterfaceConfig <p>http 接口相关参数</p>
     * @param array $HangupTypes <p>挂断类型</p>
     * @param array $CallTags <p>通话标签</p>
     * @param string $TriggerMode <p>触发模式</p><p>枚举值：</p><ul><li>ONCE_PER_NUMBER： 每个号码仅第一次命中条件时触发</li><li>ALWAYS_ON_MATCH： 每次命中条件均触发</li></ul>
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
        if (array_key_exists("InterfaceConfig",$param) and $param["InterfaceConfig"] !== null) {
            $this->InterfaceConfig = new HttpCallbackConfig();
            $this->InterfaceConfig->deserialize($param["InterfaceConfig"]);
        }

        if (array_key_exists("HangupTypes",$param) and $param["HangupTypes"] !== null) {
            $this->HangupTypes = $param["HangupTypes"];
        }

        if (array_key_exists("CallTags",$param) and $param["CallTags"] !== null) {
            $this->CallTags = [];
            foreach ($param["CallTags"] as $key => $value){
                $obj = new RetryTagItem();
                $obj->deserialize($value);
                array_push($this->CallTags, $obj);
            }
        }

        if (array_key_exists("TriggerMode",$param) and $param["TriggerMode"] !== null) {
            $this->TriggerMode = $param["TriggerMode"];
        }
    }
}
