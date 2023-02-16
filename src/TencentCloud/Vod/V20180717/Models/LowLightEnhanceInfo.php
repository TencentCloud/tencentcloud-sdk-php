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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 低光照增强控制
 *
 * @method string getSwitch() 获取低光照增强控制开关，可选值：
<li>ON：开启低光照增强；</li>
<li>OFF：关闭低光照增强。</li>
 * @method void setSwitch(string $Switch) 设置低光照增强控制开关，可选值：
<li>ON：开启低光照增强；</li>
<li>OFF：关闭低光照增强。</li>
 * @method string getType() 获取低光照增强类型，仅当低光照增强控制开关为 ON 时有效，可选值：
<li>normal：正常低光照增强；</li>
默认值：normal。
 * @method void setType(string $Type) 设置低光照增强类型，仅当低光照增强控制开关为 ON 时有效，可选值：
<li>normal：正常低光照增强；</li>
默认值：normal。
 */
class LowLightEnhanceInfo extends AbstractModel
{
    /**
     * @var string 低光照增强控制开关，可选值：
<li>ON：开启低光照增强；</li>
<li>OFF：关闭低光照增强。</li>
     */
    public $Switch;

    /**
     * @var string 低光照增强类型，仅当低光照增强控制开关为 ON 时有效，可选值：
<li>normal：正常低光照增强；</li>
默认值：normal。
     */
    public $Type;

    /**
     * @param string $Switch 低光照增强控制开关，可选值：
<li>ON：开启低光照增强；</li>
<li>OFF：关闭低光照增强。</li>
     * @param string $Type 低光照增强类型，仅当低光照增强控制开关为 ON 时有效，可选值：
<li>normal：正常低光照增强；</li>
默认值：normal。
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
