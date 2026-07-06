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
 * DeleteAgent请求参数结构体
 *
 * @method string getAppId() 获取<p>应用Id</p>
 * @method void setAppId(string $AppId) 设置<p>应用Id</p>
 * @method string getAgentId() 获取<p>待删除AgentId</p>
 * @method void setAgentId(string $AgentId) 设置<p>待删除AgentId</p>
 * @method integer getCollaborationMode() 获取协作模式；0-Claw模式；1-Multi-Agent模式
 * @method void setCollaborationMode(integer $CollaborationMode) 设置协作模式；0-Claw模式；1-Multi-Agent模式
 */
class DeleteAgentRequest extends AbstractModel
{
    /**
     * @var string <p>应用Id</p>
     */
    public $AppId;

    /**
     * @var string <p>待删除AgentId</p>
     */
    public $AgentId;

    /**
     * @var integer 协作模式；0-Claw模式；1-Multi-Agent模式
     */
    public $CollaborationMode;

    /**
     * @param string $AppId <p>应用Id</p>
     * @param string $AgentId <p>待删除AgentId</p>
     * @param integer $CollaborationMode 协作模式；0-Claw模式；1-Multi-Agent模式
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("CollaborationMode",$param) and $param["CollaborationMode"] !== null) {
            $this->CollaborationMode = $param["CollaborationMode"];
        }
    }
}
