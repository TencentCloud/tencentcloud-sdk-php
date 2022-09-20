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
 * DDoS黑白名单
 *
 * @method array getDDoSAllowBlockRules() 获取黑白名单数组。
 * @method void setDDoSAllowBlockRules(array $DDoSAllowBlockRules) 设置黑白名单数组。
 * @method string getSwitch() 获取开关标识防护是否清空，取值有：
<li>off ：关闭黑白名单；</li>
<li>on ：开启黑白名单，需填写UserAllowBlockIp参数。</li>
 * @method void setSwitch(string $Switch) 设置开关标识防护是否清空，取值有：
<li>off ：关闭黑白名单；</li>
<li>on ：开启黑白名单，需填写UserAllowBlockIp参数。</li>
 */
class DDoSAllowBlock extends AbstractModel
{
    /**
     * @var array 黑白名单数组。
     */
    public $DDoSAllowBlockRules;

    /**
     * @var string 开关标识防护是否清空，取值有：
<li>off ：关闭黑白名单；</li>
<li>on ：开启黑白名单，需填写UserAllowBlockIp参数。</li>
     */
    public $Switch;

    /**
     * @param array $DDoSAllowBlockRules 黑白名单数组。
     * @param string $Switch 开关标识防护是否清空，取值有：
<li>off ：关闭黑白名单；</li>
<li>on ：开启黑白名单，需填写UserAllowBlockIp参数。</li>
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
        if (array_key_exists("DDoSAllowBlockRules",$param) and $param["DDoSAllowBlockRules"] !== null) {
            $this->DDoSAllowBlockRules = [];
            foreach ($param["DDoSAllowBlockRules"] as $key => $value){
                $obj = new DDoSAllowBlockRule();
                $obj->deserialize($value);
                array_push($this->DDoSAllowBlockRules, $obj);
            }
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }
    }
}
