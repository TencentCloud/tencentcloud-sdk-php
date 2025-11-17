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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能体信息
 *
 * @method integer getAIAgentId() 获取智能体ID
 * @method void setAIAgentId(integer $AIAgentId) 设置智能体ID
 * @method string getAIAgentName() 获取智能体名称
 * @method void setAIAgentName(string $AIAgentName) 设置智能体名称
 */
class AIAgentInfo extends AbstractModel
{
    /**
     * @var integer 智能体ID
     */
    public $AIAgentId;

    /**
     * @var string 智能体名称
     */
    public $AIAgentName;

    /**
     * @param integer $AIAgentId 智能体ID
     * @param string $AIAgentName 智能体名称
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
        if (array_key_exists("AIAgentId",$param) and $param["AIAgentId"] !== null) {
            $this->AIAgentId = $param["AIAgentId"];
        }

        if (array_key_exists("AIAgentName",$param) and $param["AIAgentName"] !== null) {
            $this->AIAgentName = $param["AIAgentName"];
        }
    }
}
