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
 * 智能客户端过滤
 *
 * @method string getSwitch() 获取功能开关。
1. on 开启
2. off 关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置功能开关。
1. on 开启
2. off 关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAction() 获取执行动作 
1. monitor(观察)
2. alg(挑战)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(string $Action) 设置执行动作 
1. monitor(观察)
2. alg(挑战)
注意：此字段可能返回 null，表示取不到有效值。
 */
class RateLimitIntelligence extends AbstractModel
{
    /**
     * @var string 功能开关。
1. on 开启
2. off 关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var string 执行动作 
1. monitor(观察)
2. alg(挑战)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @param string $Switch 功能开关。
1. on 开启
2. off 关闭
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Action 执行动作 
1. monitor(观察)
2. alg(挑战)
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

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }
    }
}
