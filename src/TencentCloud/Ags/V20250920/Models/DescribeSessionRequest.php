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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSession请求参数结构体
 *
 * @method string getSpaceId() 获取<p>会话所属空间 ID。</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>会话所属空间 ID。</p>
 * @method string getUserId() 获取<p>用户 ID。可通过调用方业务系统接口获取。</p>
 * @method void setUserId(string $UserId) 设置<p>用户 ID。可通过调用方业务系统接口获取。</p>
 * @method string getSessionId() 获取<p>会话 ID。可通过 CreateSession 或 DescribeSessions 接口获取。</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话 ID。可通过 CreateSession 或 DescribeSessions 接口获取。</p>
 * @method string getAgentId() 获取<p>Agent ID。可选。</p>
 * @method void setAgentId(string $AgentId) 设置<p>Agent ID。可选。</p>
 * @method integer getNumRecentEvents() 获取<p>返回最近事件数量，默认为 0，最大值为 200。</p>
 * @method void setNumRecentEvents(integer $NumRecentEvents) 设置<p>返回最近事件数量，默认为 0，最大值为 200。</p>
 * @method string getAfterTimestamp() 获取<p>事件起始时间，RFC3339 格式，最大长度 64 字符。</p>
 * @method void setAfterTimestamp(string $AfterTimestamp) 设置<p>事件起始时间，RFC3339 格式，最大长度 64 字符。</p>
 */
class DescribeSessionRequest extends AbstractModel
{
    /**
     * @var string <p>会话所属空间 ID。</p>
     */
    public $SpaceId;

    /**
     * @var string <p>用户 ID。可通过调用方业务系统接口获取。</p>
     */
    public $UserId;

    /**
     * @var string <p>会话 ID。可通过 CreateSession 或 DescribeSessions 接口获取。</p>
     */
    public $SessionId;

    /**
     * @var string <p>Agent ID。可选。</p>
     * @deprecated
     */
    public $AgentId;

    /**
     * @var integer <p>返回最近事件数量，默认为 0，最大值为 200。</p>
     */
    public $NumRecentEvents;

    /**
     * @var string <p>事件起始时间，RFC3339 格式，最大长度 64 字符。</p>
     */
    public $AfterTimestamp;

    /**
     * @param string $SpaceId <p>会话所属空间 ID。</p>
     * @param string $UserId <p>用户 ID。可通过调用方业务系统接口获取。</p>
     * @param string $SessionId <p>会话 ID。可通过 CreateSession 或 DescribeSessions 接口获取。</p>
     * @param string $AgentId <p>Agent ID。可选。</p>
     * @param integer $NumRecentEvents <p>返回最近事件数量，默认为 0，最大值为 200。</p>
     * @param string $AfterTimestamp <p>事件起始时间，RFC3339 格式，最大长度 64 字符。</p>
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("NumRecentEvents",$param) and $param["NumRecentEvents"] !== null) {
            $this->NumRecentEvents = $param["NumRecentEvents"];
        }

        if (array_key_exists("AfterTimestamp",$param) and $param["AfterTimestamp"] !== null) {
            $this->AfterTimestamp = $param["AfterTimestamp"];
        }
    }
}
