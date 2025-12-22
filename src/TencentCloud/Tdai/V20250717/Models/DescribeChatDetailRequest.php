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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeChatDetail请求参数结构体
 *
 * @method string getInstanceId() 获取智能体ID
 * @method void setInstanceId(string $InstanceId) 设置智能体ID
 * @method string getChatId() 获取会话Id
 * @method void setChatId(string $ChatId) 设置会话Id
 * @method string getStreamingId() 获取流ID
 * @method void setStreamingId(string $StreamingId) 设置流ID
 * @method integer getBeginStreamingTokenId() 获取开始拉取的流式TokenID。0表示从该流最早的TokenID开始获取
 * @method void setBeginStreamingTokenId(integer $BeginStreamingTokenId) 设置开始拉取的流式TokenID。0表示从该流最早的TokenID开始获取
 * @method integer getTokenLimit() 获取单次获取的token数量，默认2000
 * @method void setTokenLimit(integer $TokenLimit) 设置单次获取的token数量，默认2000
 */
class DescribeChatDetailRequest extends AbstractModel
{
    /**
     * @var string 智能体ID
     */
    public $InstanceId;

    /**
     * @var string 会话Id
     */
    public $ChatId;

    /**
     * @var string 流ID
     */
    public $StreamingId;

    /**
     * @var integer 开始拉取的流式TokenID。0表示从该流最早的TokenID开始获取
     */
    public $BeginStreamingTokenId;

    /**
     * @var integer 单次获取的token数量，默认2000
     */
    public $TokenLimit;

    /**
     * @param string $InstanceId 智能体ID
     * @param string $ChatId 会话Id
     * @param string $StreamingId 流ID
     * @param integer $BeginStreamingTokenId 开始拉取的流式TokenID。0表示从该流最早的TokenID开始获取
     * @param integer $TokenLimit 单次获取的token数量，默认2000
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ChatId",$param) and $param["ChatId"] !== null) {
            $this->ChatId = $param["ChatId"];
        }

        if (array_key_exists("StreamingId",$param) and $param["StreamingId"] !== null) {
            $this->StreamingId = $param["StreamingId"];
        }

        if (array_key_exists("BeginStreamingTokenId",$param) and $param["BeginStreamingTokenId"] !== null) {
            $this->BeginStreamingTokenId = $param["BeginStreamingTokenId"];
        }

        if (array_key_exists("TokenLimit",$param) and $param["TokenLimit"] !== null) {
            $this->TokenLimit = $param["TokenLimit"];
        }
    }
}
