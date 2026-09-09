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
 * 用户+Agent归属引用
 *
 * @method string getAgentId() 获取<p>claw agent 运行态标识</p>
 * @method void setAgentId(string $AgentId) 设置<p>claw agent 运行态标识</p>
 * @method string getUserId() 获取<p>归属用户标识</p>
 * @method void setUserId(string $UserId) 设置<p>归属用户标识</p>
 */
class UserAgentReference extends AbstractModel
{
    /**
     * @var string <p>claw agent 运行态标识</p>
     */
    public $AgentId;

    /**
     * @var string <p>归属用户标识</p>
     */
    public $UserId;

    /**
     * @param string $AgentId <p>claw agent 运行态标识</p>
     * @param string $UserId <p>归属用户标识</p>
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
        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
