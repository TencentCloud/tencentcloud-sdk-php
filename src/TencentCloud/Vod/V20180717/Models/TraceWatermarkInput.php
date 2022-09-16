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
 * 溯源水印参数
 *
 * @method string getSwitch() 获取溯源水印任务开关，此字段必填，可选值：
<li>ON：开启溯源水印；</li>
<li>OFF：关闭溯源水印。</li>
 * @method void setSwitch(string $Switch) 设置溯源水印任务开关，此字段必填，可选值：
<li>ON：开启溯源水印；</li>
<li>OFF：关闭溯源水印。</li>
 * @method integer getDefinition() 获取该字段已废弃，请勿使用。
 * @method void setDefinition(integer $Definition) 设置该字段已废弃，请勿使用。
 */
class TraceWatermarkInput extends AbstractModel
{
    /**
     * @var string 溯源水印任务开关，此字段必填，可选值：
<li>ON：开启溯源水印；</li>
<li>OFF：关闭溯源水印。</li>
     */
    public $Switch;

    /**
     * @var integer 该字段已废弃，请勿使用。
     */
    public $Definition;

    /**
     * @param string $Switch 溯源水印任务开关，此字段必填，可选值：
<li>ON：开启溯源水印；</li>
<li>OFF：关闭溯源水印。</li>
     * @param integer $Definition 该字段已废弃，请勿使用。
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

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }
    }
}
