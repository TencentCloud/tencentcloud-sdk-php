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
 * @method string getServiceId() 获取 服务id,使用哪一套防护策略，就需要传哪一套服务id，模型会检测该服务id下的所有规则
 * @method void setServiceId(string $ServiceId) 设置 服务id,使用哪一套防护策略，就需要传哪一套服务id，模型会检测该服务id下的所有规则
 * @method ApiGuardContent getContent() 获取要审核的内容
 * @method void setContent(ApiGuardContent $Content) 设置要审核的内容
 * @method string getUserId() 获取标识用户的id，限速使用，不填，则限速会不生效
 * @method void setUserId(string $UserId) 设置标识用户的id，限速使用，不填，则限速会不生效
 * @method string getSessionId() 获取会话id
 * @method void setSessionId(string $SessionId) 设置会话id
 */
class DescribeQClawContentSecCheckRequest extends AbstractModel
{
    /**
     * @var string  服务id,使用哪一套防护策略，就需要传哪一套服务id，模型会检测该服务id下的所有规则
     */
    public $ServiceId;

    /**
     * @var ApiGuardContent 要审核的内容
     */
    public $Content;

    /**
     * @var string 标识用户的id，限速使用，不填，则限速会不生效
     */
    public $UserId;

    /**
     * @var string 会话id
     */
    public $SessionId;

    /**
     * @param string $ServiceId  服务id,使用哪一套防护策略，就需要传哪一套服务id，模型会检测该服务id下的所有规则
     * @param ApiGuardContent $Content 要审核的内容
     * @param string $UserId 标识用户的id，限速使用，不填，则限速会不生效
     * @param string $SessionId 会话id
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
    }
}
