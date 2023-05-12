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
 * Bot扩展处置方式，多处置动作组合。
 *
 * @method string getAction() 获取处置动作，取值有：
<li>monitor：观察；</li>
<li>alg：JavaScript挑战；</li>
<li>captcha：托管挑战；</li>
<li>random：随机，按照ExtendActions分配处置动作和比例；</li>
<li>silence：静默；</li>
<li>shortdelay：短时响应；</li>
<li>longdelay：长时响应。</li>
 * @method void setAction(string $Action) 设置处置动作，取值有：
<li>monitor：观察；</li>
<li>alg：JavaScript挑战；</li>
<li>captcha：托管挑战；</li>
<li>random：随机，按照ExtendActions分配处置动作和比例；</li>
<li>silence：静默；</li>
<li>shortdelay：短时响应；</li>
<li>longdelay：长时响应。</li>
 * @method integer getPercent() 获取处置方式的触发概率，范围0-100。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPercent(integer $Percent) 设置处置方式的触发概率，范围0-100。
注意：此字段可能返回 null，表示取不到有效值。
 */
class BotExtendAction extends AbstractModel
{
    /**
     * @var string 处置动作，取值有：
<li>monitor：观察；</li>
<li>alg：JavaScript挑战；</li>
<li>captcha：托管挑战；</li>
<li>random：随机，按照ExtendActions分配处置动作和比例；</li>
<li>silence：静默；</li>
<li>shortdelay：短时响应；</li>
<li>longdelay：长时响应。</li>
     */
    public $Action;

    /**
     * @var integer 处置方式的触发概率，范围0-100。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Percent;

    /**
     * @param string $Action 处置动作，取值有：
<li>monitor：观察；</li>
<li>alg：JavaScript挑战；</li>
<li>captcha：托管挑战；</li>
<li>random：随机，按照ExtendActions分配处置动作和比例；</li>
<li>silence：静默；</li>
<li>shortdelay：短时响应；</li>
<li>longdelay：长时响应。</li>
     * @param integer $Percent 处置方式的触发概率，范围0-100。
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }
    }
}
