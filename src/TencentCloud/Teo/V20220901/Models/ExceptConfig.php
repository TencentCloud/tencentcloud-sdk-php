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
 * 例外规则，用于配置需要跳过特定场景的规则
 *
 * @method string getSwitch() 获取配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method array getExceptUserRules() 获取例外规则详情。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExceptUserRules(array $ExceptUserRules) 设置例外规则详情。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExceptConfig extends AbstractModel
{
    /**
     * @var string 配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $Switch;

    /**
     * @var array 例外规则详情。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExceptUserRules;

    /**
     * @param string $Switch 配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param array $ExceptUserRules 例外规则详情。如果为null，默认使用历史配置。
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("ExceptUserRules",$param) and $param["ExceptUserRules"] !== null) {
            $this->ExceptUserRules = [];
            foreach ($param["ExceptUserRules"] as $key => $value){
                $obj = new ExceptUserRule();
                $obj->deserialize($value);
                array_push($this->ExceptUserRules, $obj);
            }
        }
    }
}
