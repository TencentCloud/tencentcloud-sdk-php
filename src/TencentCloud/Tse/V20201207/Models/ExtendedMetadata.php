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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务扩展元数据
 *
 * @method string getType() 获取<p>枚举类型</p>
 * @method void setType(string $Type) 设置<p>枚举类型</p>
 * @method AgentSkill getAgentSkill() 获取<p>agent参数</p>
 * @method void setAgentSkill(AgentSkill $AgentSkill) 设置<p>agent参数</p>
 */
class ExtendedMetadata extends AbstractModel
{
    /**
     * @var string <p>枚举类型</p>
     */
    public $Type;

    /**
     * @var AgentSkill <p>agent参数</p>
     */
    public $AgentSkill;

    /**
     * @param string $Type <p>枚举类型</p>
     * @param AgentSkill $AgentSkill <p>agent参数</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AgentSkill",$param) and $param["AgentSkill"] !== null) {
            $this->AgentSkill = new AgentSkill();
            $this->AgentSkill->deserialize($param["AgentSkill"]);
        }
    }
}
