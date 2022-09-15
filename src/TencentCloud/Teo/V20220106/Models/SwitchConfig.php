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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 功能总开关
 *
 * @method string getWebSwitch() 获取Web类型的安全总开关生效范围，Waf，自定义规则，速率限制。
1. on 开启
2. off 关闭
 * @method void setWebSwitch(string $WebSwitch) 设置Web类型的安全总开关生效范围，Waf，自定义规则，速率限制。
1. on 开启
2. off 关闭
 */
class SwitchConfig extends AbstractModel
{
    /**
     * @var string Web类型的安全总开关生效范围，Waf，自定义规则，速率限制。
1. on 开启
2. off 关闭
     */
    public $WebSwitch;

    /**
     * @param string $WebSwitch Web类型的安全总开关生效范围，Waf，自定义规则，速率限制。
1. on 开启
2. off 关闭
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
        if (array_key_exists("WebSwitch",$param) and $param["WebSwitch"] !== null) {
            $this->WebSwitch = $param["WebSwitch"];
        }
    }
}
