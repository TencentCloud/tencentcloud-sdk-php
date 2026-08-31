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
 * 告警通知内容模版自定义标题颜色
 *
 * @method string getDefault() 获取<p>通知内容模版自定义标题颜色默认颜色</p>
 * @method void setDefault(string $Default) 设置<p>通知内容模版自定义标题颜色默认颜色</p>
 * @method array getRules() 获取<p>通知内容模版自定义标题颜色规则，label 匹配设置颜色</p>
 * @method void setRules(array $Rules) 设置<p>通知内容模版自定义标题颜色规则，label 匹配设置颜色</p>
 */
class RobotNoticeTitleColor extends AbstractModel
{
    /**
     * @var string <p>通知内容模版自定义标题颜色默认颜色</p>
     */
    public $Default;

    /**
     * @var array <p>通知内容模版自定义标题颜色规则，label 匹配设置颜色</p>
     */
    public $Rules;

    /**
     * @param string $Default <p>通知内容模版自定义标题颜色默认颜色</p>
     * @param array $Rules <p>通知内容模版自定义标题颜色规则，label 匹配设置颜色</p>
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
        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new RobotNoticeTitleColorRules();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
