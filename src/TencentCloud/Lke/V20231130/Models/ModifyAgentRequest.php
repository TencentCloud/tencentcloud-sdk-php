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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAgent请求参数结构体
 *
 * @method string getAppBizId() 获取需要修改的应用ID
 * @method void setAppBizId(string $AppBizId) 设置需要修改的应用ID
 * @method Agent getAgent() 获取修改后的Agent的信息
 * @method void setAgent(Agent $Agent) 设置修改后的Agent的信息
 */
class ModifyAgentRequest extends AbstractModel
{
    /**
     * @var string 需要修改的应用ID
     */
    public $AppBizId;

    /**
     * @var Agent 修改后的Agent的信息
     */
    public $Agent;

    /**
     * @param string $AppBizId 需要修改的应用ID
     * @param Agent $Agent 修改后的Agent的信息
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
        if (array_key_exists("AppBizId",$param) and $param["AppBizId"] !== null) {
            $this->AppBizId = $param["AppBizId"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }
    }
}
