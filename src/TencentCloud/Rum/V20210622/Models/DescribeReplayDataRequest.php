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
 * DescribeReplayData请求参数结构体
 *
 * @method string getAppId() 获取<p>应用id</p>
 * @method void setAppId(string $AppId) 设置<p>应用id</p>
 * @method string getReplayId() 获取<p>回放id</p>
 * @method void setReplayId(string $ReplayId) 设置<p>回放id</p>
 * @method string getSessionId() 获取<p>session id</p>
 * @method void setSessionId(string $SessionId) 设置<p>session id</p>
 * @method integer getSegmentId() 获取<p>segment id</p>
 * @method void setSegmentId(integer $SegmentId) 设置<p>segment id</p>
 * @method integer getMaxDecodedBytes() 获取<p>单个录制分片解压后的最大允许字节数</p><p>取值范围：[1, 8388608]</p><p>单位：字节（Byte）</p>
 * @method void setMaxDecodedBytes(integer $MaxDecodedBytes) 设置<p>单个录制分片解压后的最大允许字节数</p><p>取值范围：[1, 8388608]</p><p>单位：字节（Byte）</p>
 */
class DescribeReplayDataRequest extends AbstractModel
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
     * @var string <p>session id</p>
     */
    public $SessionId;

    /**
     * @var integer <p>segment id</p>
     */
    public $SegmentId;

    /**
     * @var integer <p>单个录制分片解压后的最大允许字节数</p><p>取值范围：[1, 8388608]</p><p>单位：字节（Byte）</p>
     */
    public $MaxDecodedBytes;

    /**
     * @param string $AppId <p>应用id</p>
     * @param string $ReplayId <p>回放id</p>
     * @param string $SessionId <p>session id</p>
     * @param integer $SegmentId <p>segment id</p>
     * @param integer $MaxDecodedBytes <p>单个录制分片解压后的最大允许字节数</p><p>取值范围：[1, 8388608]</p><p>单位：字节（Byte）</p>
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

        if (array_key_exists("SegmentId",$param) and $param["SegmentId"] !== null) {
            $this->SegmentId = $param["SegmentId"];
        }

        if (array_key_exists("MaxDecodedBytes",$param) and $param["MaxDecodedBytes"] !== null) {
            $this->MaxDecodedBytes = $param["MaxDecodedBytes"];
        }
    }
}
