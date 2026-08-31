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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警通知内容模版自定义标题颜色 key-value 匹配规则
 *
 * @method string getKey() 获取<p>通知内容模版自定义颜色 Label 匹配的 Key</p>
 * @method void setKey(string $Key) 设置<p>通知内容模版自定义颜色 Label 匹配的 Key</p>
 * @method string getValue() 获取<p>通知内容模版自定义颜色 Label 匹配的 Value</p>
 * @method void setValue(string $Value) 设置<p>通知内容模版自定义颜色 Label 匹配的 Value</p>
 * @method string getColor() 获取<p>通知内容模版自定义颜色</p>
 * @method void setColor(string $Color) 设置<p>通知内容模版自定义颜色</p>
 */
class RobotNoticeTitleColorRules extends AbstractModel
{
    /**
     * @var string <p>通知内容模版自定义颜色 Label 匹配的 Key</p>
     */
    public $Key;

    /**
     * @var string <p>通知内容模版自定义颜色 Label 匹配的 Value</p>
     */
    public $Value;

    /**
     * @var string <p>通知内容模版自定义颜色</p>
     */
    public $Color;

    /**
     * @param string $Key <p>通知内容模版自定义颜色 Label 匹配的 Key</p>
     * @param string $Value <p>通知内容模版自定义颜色 Label 匹配的 Value</p>
     * @param string $Color <p>通知内容模版自定义颜色</p>
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }
    }
}
