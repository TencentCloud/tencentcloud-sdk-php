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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReplayMeta请求参数结构体
 *
 * @method string getAppId() 获取<p>应用id</p>
 * @method void setAppId(string $AppId) 设置<p>应用id</p>
 * @method string getReplayId() 获取<p>回放id</p>
 * @method void setReplayId(string $ReplayId) 设置<p>回放id</p>
 * @method string getSessionId() 获取<p>会话id</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话id</p>
 * @method boolean getIndexOnly() 获取<p>是否仅查询指定录制分片的轻量索引。默认false。为true时必须通过IndexSegmentIds指定1～16个分片ID，返回IndexEntries，不返回录制正文。</p>
 * @method void setIndexOnly(boolean $IndexOnly) 设置<p>是否仅查询指定录制分片的轻量索引。默认false。为true时必须通过IndexSegmentIds指定1～16个分片ID，返回IndexEntries，不返回录制正文。</p>
 * @method array getIndexSegmentIds() 获取<p>待查询索引的录制分片ID列表。仅在IndexOnly为true时使用，包含1～16个非负且不重复的分片ID。ProbeMissingIndex为true时仅允许指定一个分片ID。</p>
 * @method void setIndexSegmentIds(array $IndexSegmentIds) 设置<p>待查询索引的录制分片ID列表。仅在IndexOnly为true时使用，包含1～16个非负且不重复的分片ID。ProbeMissingIndex为true时仅允许指定一个分片ID。</p>
 * @method boolean getProbeMissingIndex() 获取<p>是否在录制分片缺少索引时进行受限兼容探测。默认false。为true时必须同时设置IndexOnly为true，且IndexSegmentIds仅包含一个分片ID。</p>
 * @method void setProbeMissingIndex(boolean $ProbeMissingIndex) 设置<p>是否在录制分片缺少索引时进行受限兼容探测。默认false。为true时必须同时设置IndexOnly为true，且IndexSegmentIds仅包含一个分片ID。</p>
 */
class DescribeReplayMetaRequest extends AbstractModel
{
    /**
     * @var string <p>应用id</p>
     */
    public $AppId;

    /**
     * @var string <p>回放id</p>
     */
    public $ReplayId;

    /**
     * @var string <p>会话id</p>
     */
    public $SessionId;

    /**
     * @var boolean <p>是否仅查询指定录制分片的轻量索引。默认false。为true时必须通过IndexSegmentIds指定1～16个分片ID，返回IndexEntries，不返回录制正文。</p>
     */
    public $IndexOnly;

    /**
     * @var array <p>待查询索引的录制分片ID列表。仅在IndexOnly为true时使用，包含1～16个非负且不重复的分片ID。ProbeMissingIndex为true时仅允许指定一个分片ID。</p>
     */
    public $IndexSegmentIds;

    /**
     * @var boolean <p>是否在录制分片缺少索引时进行受限兼容探测。默认false。为true时必须同时设置IndexOnly为true，且IndexSegmentIds仅包含一个分片ID。</p>
     */
    public $ProbeMissingIndex;

    /**
     * @param string $AppId <p>应用id</p>
     * @param string $ReplayId <p>回放id</p>
     * @param string $SessionId <p>会话id</p>
     * @param boolean $IndexOnly <p>是否仅查询指定录制分片的轻量索引。默认false。为true时必须通过IndexSegmentIds指定1～16个分片ID，返回IndexEntries，不返回录制正文。</p>
     * @param array $IndexSegmentIds <p>待查询索引的录制分片ID列表。仅在IndexOnly为true时使用，包含1～16个非负且不重复的分片ID。ProbeMissingIndex为true时仅允许指定一个分片ID。</p>
     * @param boolean $ProbeMissingIndex <p>是否在录制分片缺少索引时进行受限兼容探测。默认false。为true时必须同时设置IndexOnly为true，且IndexSegmentIds仅包含一个分片ID。</p>
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

        if (array_key_exists("ReplayId",$param) and $param["ReplayId"] !== null) {
            $this->ReplayId = $param["ReplayId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("IndexOnly",$param) and $param["IndexOnly"] !== null) {
            $this->IndexOnly = $param["IndexOnly"];
        }

        if (array_key_exists("IndexSegmentIds",$param) and $param["IndexSegmentIds"] !== null) {
            $this->IndexSegmentIds = $param["IndexSegmentIds"];
        }

        if (array_key_exists("ProbeMissingIndex",$param) and $param["ProbeMissingIndex"] !== null) {
            $this->ProbeMissingIndex = $param["ProbeMissingIndex"];
        }
    }
}
