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
 * 托管规则
 *
 * @method array getWafGroupDetails() 获取托管规则组列表。
 * @method void setWafGroupDetails(array $WafGroupDetails) 设置托管规则组列表。
 * @method string getLevel() 获取规则组等级，取值有：
<li> loose：宽松；</li>
<li> normal：正常；</li>
<li> strict：严格；</li>
<li> stricter：超严格。</li>
 * @method void setLevel(string $Level) 设置规则组等级，取值有：
<li> loose：宽松；</li>
<li> normal：正常；</li>
<li> strict：严格；</li>
<li> stricter：超严格。</li>
 * @method string getAct() 获取保留字段。
 * @method void setAct(string $Act) 设置保留字段。
 * @method string getMode() 获取模式，取值有：
<li> block：阻断；</li>
<li> observe：观察。</li>
 * @method void setMode(string $Mode) 设置模式，取值有：
<li> block：阻断；</li>
<li> observe：观察。</li>
 * @method string getSwitch() 获取开关，取值有：
<li> on：开启；</li>
<li> off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置开关，取值有：
<li> on：开启；</li>
<li> off：关闭。</li>
 */
class WafGroupInfo extends AbstractModel
{
    /**
     * @var array 托管规则组列表。
     */
    public $WafGroupDetails;

    /**
     * @var string 规则组等级，取值有：
<li> loose：宽松；</li>
<li> normal：正常；</li>
<li> strict：严格；</li>
<li> stricter：超严格。</li>
     */
    public $Level;

    /**
     * @var string 保留字段。
     */
    public $Act;

    /**
     * @var string 模式，取值有：
<li> block：阻断；</li>
<li> observe：观察。</li>
     */
    public $Mode;

    /**
     * @var string 开关，取值有：
<li> on：开启；</li>
<li> off：关闭。</li>
     */
    public $Switch;

    /**
     * @param array $WafGroupDetails 托管规则组列表。
     * @param string $Level 规则组等级，取值有：
<li> loose：宽松；</li>
<li> normal：正常；</li>
<li> strict：严格；</li>
<li> stricter：超严格。</li>
     * @param string $Act 保留字段。
     * @param string $Mode 模式，取值有：
<li> block：阻断；</li>
<li> observe：观察。</li>
     * @param string $Switch 开关，取值有：
<li> on：开启；</li>
<li> off：关闭。</li>
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
        if (array_key_exists("WafGroupDetails",$param) and $param["WafGroupDetails"] !== null) {
            $this->WafGroupDetails = [];
            foreach ($param["WafGroupDetails"] as $key => $value){
                $obj = new WafGroupDetail();
                $obj->deserialize($value);
                array_push($this->WafGroupDetails, $obj);
            }
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Act",$param) and $param["Act"] !== null) {
            $this->Act = $param["Act"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }
    }
}
