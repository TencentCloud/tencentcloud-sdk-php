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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义安全护栏能力限制
 *
 * @method integer getMaxHeaderAllowList() 获取<p>Header 白名单最大条数。</p>
 * @method void setMaxHeaderAllowList(integer $MaxHeaderAllowList) 设置<p>Header 白名单最大条数。</p>
 * @method integer getMaxKeywordsPerDirection() 获取<p>单方向关键词最大条数。</p>
 * @method void setMaxKeywordsPerDirection(integer $MaxKeywordsPerDirection) 设置<p>单方向关键词最大条数。</p>
 * @method integer getInlineBodyBytes() 获取<p>直接内联送审的 Body 上限，单位字节。</p>
 * @method void setInlineBodyBytes(integer $InlineBodyBytes) 设置<p>直接内联送审的 Body 上限，单位字节。</p>
 * @method integer getMaxAcceptedBodyBytes() 获取<p>可接受的请求 Body 上限，单位字节。</p>
 * @method void setMaxAcceptedBodyBytes(integer $MaxAcceptedBodyBytes) 设置<p>可接受的请求 Body 上限，单位字节。</p>
 * @method integer getTransferChunkBytes() 获取<p>超大请求 Body 默认分片大小，单位字节。</p>
 * @method void setTransferChunkBytes(integer $TransferChunkBytes) 设置<p>超大请求 Body 默认分片大小，单位字节。</p>
 * @method integer getMaxTransferChunkBytes() 获取<p>超大请求 Body 最大分片大小，单位字节。</p>
 * @method void setMaxTransferChunkBytes(integer $MaxTransferChunkBytes) 设置<p>超大请求 Body 最大分片大小，单位字节。</p>
 * @method integer getTransferTargetMaxChunks() 获取<p>分片传输目标最大分片数。</p>
 * @method void setTransferTargetMaxChunks(integer $TransferTargetMaxChunks) 设置<p>分片传输目标最大分片数。</p>
 * @method integer getMaxResponseBodyBytes() 获取<p>普通响应审核最大 Body 大小，单位字节。</p>
 * @method void setMaxResponseBodyBytes(integer $MaxResponseBodyBytes) 设置<p>普通响应审核最大 Body 大小，单位字节。</p>
 * @method integer getMaxStreamEventBytes() 获取<p>单个流式事件最大字节数，单位字节。</p>
 * @method void setMaxStreamEventBytes(integer $MaxStreamEventBytes) 设置<p>单个流式事件最大字节数，单位字节。</p>
 * @method integer getStreamRelayMaxConcurrentRequests() 获取<p>单数据面实例 Stream Relay 默认并发槽位。</p>
 * @method void setStreamRelayMaxConcurrentRequests(integer $StreamRelayMaxConcurrentRequests) 设置<p>单数据面实例 Stream Relay 默认并发槽位。</p>
 * @method integer getMinTimeoutMs() 获取<p>审核超时最小值，单位毫秒。</p>
 * @method void setMinTimeoutMs(integer $MinTimeoutMs) 设置<p>审核超时最小值，单位毫秒。</p>
 * @method integer getMaxTimeoutMs() 获取<p>审核超时最大值，单位毫秒。</p>
 * @method void setMaxTimeoutMs(integer $MaxTimeoutMs) 设置<p>审核超时最大值，单位毫秒。</p>
 * @method integer getDefaultTimeoutMs() 获取<p>审核超时默认值，单位毫秒。</p>
 * @method void setDefaultTimeoutMs(integer $DefaultTimeoutMs) 设置<p>审核超时默认值，单位毫秒。</p>
 */
class CustomGuardrailCapabilityLimits extends AbstractModel
{
    /**
     * @var integer <p>Header 白名单最大条数。</p>
     */
    public $MaxHeaderAllowList;

    /**
     * @var integer <p>单方向关键词最大条数。</p>
     */
    public $MaxKeywordsPerDirection;

    /**
     * @var integer <p>直接内联送审的 Body 上限，单位字节。</p>
     */
    public $InlineBodyBytes;

    /**
     * @var integer <p>可接受的请求 Body 上限，单位字节。</p>
     */
    public $MaxAcceptedBodyBytes;

    /**
     * @var integer <p>超大请求 Body 默认分片大小，单位字节。</p>
     */
    public $TransferChunkBytes;

    /**
     * @var integer <p>超大请求 Body 最大分片大小，单位字节。</p>
     */
    public $MaxTransferChunkBytes;

    /**
     * @var integer <p>分片传输目标最大分片数。</p>
     */
    public $TransferTargetMaxChunks;

    /**
     * @var integer <p>普通响应审核最大 Body 大小，单位字节。</p>
     */
    public $MaxResponseBodyBytes;

    /**
     * @var integer <p>单个流式事件最大字节数，单位字节。</p>
     */
    public $MaxStreamEventBytes;

    /**
     * @var integer <p>单数据面实例 Stream Relay 默认并发槽位。</p>
     */
    public $StreamRelayMaxConcurrentRequests;

    /**
     * @var integer <p>审核超时最小值，单位毫秒。</p>
     */
    public $MinTimeoutMs;

    /**
     * @var integer <p>审核超时最大值，单位毫秒。</p>
     */
    public $MaxTimeoutMs;

    /**
     * @var integer <p>审核超时默认值，单位毫秒。</p>
     */
    public $DefaultTimeoutMs;

    /**
     * @param integer $MaxHeaderAllowList <p>Header 白名单最大条数。</p>
     * @param integer $MaxKeywordsPerDirection <p>单方向关键词最大条数。</p>
     * @param integer $InlineBodyBytes <p>直接内联送审的 Body 上限，单位字节。</p>
     * @param integer $MaxAcceptedBodyBytes <p>可接受的请求 Body 上限，单位字节。</p>
     * @param integer $TransferChunkBytes <p>超大请求 Body 默认分片大小，单位字节。</p>
     * @param integer $MaxTransferChunkBytes <p>超大请求 Body 最大分片大小，单位字节。</p>
     * @param integer $TransferTargetMaxChunks <p>分片传输目标最大分片数。</p>
     * @param integer $MaxResponseBodyBytes <p>普通响应审核最大 Body 大小，单位字节。</p>
     * @param integer $MaxStreamEventBytes <p>单个流式事件最大字节数，单位字节。</p>
     * @param integer $StreamRelayMaxConcurrentRequests <p>单数据面实例 Stream Relay 默认并发槽位。</p>
     * @param integer $MinTimeoutMs <p>审核超时最小值，单位毫秒。</p>
     * @param integer $MaxTimeoutMs <p>审核超时最大值，单位毫秒。</p>
     * @param integer $DefaultTimeoutMs <p>审核超时默认值，单位毫秒。</p>
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
        if (array_key_exists("MaxHeaderAllowList",$param) and $param["MaxHeaderAllowList"] !== null) {
            $this->MaxHeaderAllowList = $param["MaxHeaderAllowList"];
        }

        if (array_key_exists("MaxKeywordsPerDirection",$param) and $param["MaxKeywordsPerDirection"] !== null) {
            $this->MaxKeywordsPerDirection = $param["MaxKeywordsPerDirection"];
        }

        if (array_key_exists("InlineBodyBytes",$param) and $param["InlineBodyBytes"] !== null) {
            $this->InlineBodyBytes = $param["InlineBodyBytes"];
        }

        if (array_key_exists("MaxAcceptedBodyBytes",$param) and $param["MaxAcceptedBodyBytes"] !== null) {
            $this->MaxAcceptedBodyBytes = $param["MaxAcceptedBodyBytes"];
        }

        if (array_key_exists("TransferChunkBytes",$param) and $param["TransferChunkBytes"] !== null) {
            $this->TransferChunkBytes = $param["TransferChunkBytes"];
        }

        if (array_key_exists("MaxTransferChunkBytes",$param) and $param["MaxTransferChunkBytes"] !== null) {
            $this->MaxTransferChunkBytes = $param["MaxTransferChunkBytes"];
        }

        if (array_key_exists("TransferTargetMaxChunks",$param) and $param["TransferTargetMaxChunks"] !== null) {
            $this->TransferTargetMaxChunks = $param["TransferTargetMaxChunks"];
        }

        if (array_key_exists("MaxResponseBodyBytes",$param) and $param["MaxResponseBodyBytes"] !== null) {
            $this->MaxResponseBodyBytes = $param["MaxResponseBodyBytes"];
        }

        if (array_key_exists("MaxStreamEventBytes",$param) and $param["MaxStreamEventBytes"] !== null) {
            $this->MaxStreamEventBytes = $param["MaxStreamEventBytes"];
        }

        if (array_key_exists("StreamRelayMaxConcurrentRequests",$param) and $param["StreamRelayMaxConcurrentRequests"] !== null) {
            $this->StreamRelayMaxConcurrentRequests = $param["StreamRelayMaxConcurrentRequests"];
        }

        if (array_key_exists("MinTimeoutMs",$param) and $param["MinTimeoutMs"] !== null) {
            $this->MinTimeoutMs = $param["MinTimeoutMs"];
        }

        if (array_key_exists("MaxTimeoutMs",$param) and $param["MaxTimeoutMs"] !== null) {
            $this->MaxTimeoutMs = $param["MaxTimeoutMs"];
        }

        if (array_key_exists("DefaultTimeoutMs",$param) and $param["DefaultTimeoutMs"] !== null) {
            $this->DefaultTimeoutMs = $param["DefaultTimeoutMs"];
        }
    }
}
