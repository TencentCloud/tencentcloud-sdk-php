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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeQClawContentSecCheck请求参数结构体
 *
 * @method string getServiceId() 获取<p>服务id,使用哪一套防护策略，就需要传哪一套服务id，模型会检测该服务id下的所有规则</p>
 * @method void setServiceId(string $ServiceId) 设置<p>服务id,使用哪一套防护策略，就需要传哪一套服务id，模型会检测该服务id下的所有规则</p>
 * @method ApiGuardContent getContent() 获取<p>要审核的内容</p>
 * @method void setContent(ApiGuardContent $Content) 设置<p>要审核的内容</p>
 * @method string getUserId() 获取<p>标识用户的id，限速使用，不填，则限速会不生效</p>
 * @method void setUserId(string $UserId) 设置<p>标识用户的id，限速使用，不填，则限速会不生效</p>
 * @method string getSessionId() 获取<p>会话id</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话id</p>
 * @method string getToolName() 获取<p>工具名称</p>
 * @method void setToolName(string $ToolName) 设置<p>工具名称</p>
 * @method string getToolArgs() 获取<p>工具执行的参数</p>
 * @method void setToolArgs(string $ToolArgs) 设置<p>工具执行的参数</p>
 */
class DescribeQClawContentSecCheckRequest extends AbstractModel
{
    /**
     * @var string <p>服务id,使用哪一套防护策略，就需要传哪一套服务id，模型会检测该服务id下的所有规则</p>
     */
    public $ServiceId;

    /**
     * @var ApiGuardContent <p>要审核的内容</p>
     */
    public $Content;

    /**
     * @var string <p>标识用户的id，限速使用，不填，则限速会不生效</p>
     */
    public $UserId;

    /**
     * @var string <p>会话id</p>
     */
    public $SessionId;

    /**
     * @var string <p>工具名称</p>
     */
    public $ToolName;

    /**
     * @var string <p>工具执行的参数</p>
     */
    public $ToolArgs;

    /**
     * @param string $ServiceId <p>服务id,使用哪一套防护策略，就需要传哪一套服务id，模型会检测该服务id下的所有规则</p>
     * @param ApiGuardContent $Content <p>要审核的内容</p>
     * @param string $UserId <p>标识用户的id，限速使用，不填，则限速会不生效</p>
     * @param string $SessionId <p>会话id</p>
     * @param string $ToolName <p>工具名称</p>
     * @param string $ToolArgs <p>工具执行的参数</p>
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = new ApiGuardContent();
            $this->Content->deserialize($param["Content"]);
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ToolName",$param) and $param["ToolName"] !== null) {
            $this->ToolName = $param["ToolName"];
        }

        if (array_key_exists("ToolArgs",$param) and $param["ToolArgs"] !== null) {
            $this->ToolArgs = $param["ToolArgs"];
        }
    }
}
