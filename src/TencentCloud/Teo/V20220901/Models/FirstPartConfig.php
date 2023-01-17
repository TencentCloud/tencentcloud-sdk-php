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
 * 慢速攻击的首段包配置。
 *
 * @method string getSwitch() 获取开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatTime() 获取首段包的统计时长，单位是秒，即期望首段包的统计时长是多少，默认5秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatTime(integer $StatTime) 设置首段包的统计时长，单位是秒，即期望首段包的统计时长是多少，默认5秒。
注意：此字段可能返回 null，表示取不到有效值。
 */
class FirstPartConfig extends AbstractModel
{
    /**
     * @var string 开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var integer 首段包的统计时长，单位是秒，即期望首段包的统计时长是多少，默认5秒。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatTime;

    /**
     * @param string $Switch 开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StatTime 首段包的统计时长，单位是秒，即期望首段包的统计时长是多少，默认5秒。
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

        if (array_key_exists("StatTime",$param) and $param["StatTime"] !== null) {
            $this->StatTime = $param["StatTime"];
        }
    }
}
