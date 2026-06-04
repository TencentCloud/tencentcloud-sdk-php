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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Agent高级设置
 *
 * @method integer getMaxReasoningRound() 获取<p>最大推理轮数</p>
 * @method void setMaxReasoningRound(integer $MaxReasoningRound) 设置<p>最大推理轮数</p>
 */
class AgentAdvancedConfig extends AbstractModel
{
    /**
     * @var integer <p>最大推理轮数</p>
     */
    public $MaxReasoningRound;

    /**
     * @param integer $MaxReasoningRound <p>最大推理轮数</p>
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
        if (array_key_exists("MaxReasoningRound",$param) and $param["MaxReasoningRound"] !== null) {
            $this->MaxReasoningRound = $param["MaxReasoningRound"];
        }
    }
}
