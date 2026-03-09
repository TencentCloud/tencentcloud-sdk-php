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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播录制信息
 *
 * @method string getDomain() 获取<p>直播录制域名</p>
 * @method void setDomain(string $Domain) 设置<p>直播录制域名</p>
 * @method string getPath() 获取<p>直播录制Path</p>
 * @method void setPath(string $Path) 设置<p>直播录制Path</p>
 * @method string getStreamId() 获取<p>直播录制流 ID。</p>
 * @method void setStreamId(string $StreamId) 设置<p>直播录制流 ID。</p>
 * @method string getRecordStartTime() 获取<p>录制起始时间，使用  <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setRecordStartTime(string $RecordStartTime) 设置<p>录制起始时间，使用  <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method string getRecordEndTime() 获取<p>录制结束时间，使用  <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setRecordEndTime(string $RecordEndTime) 设置<p>录制结束时间，使用  <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 */
class LiveRecordInfo extends AbstractModel
{
    /**
     * @var string <p>直播录制域名</p>
     */
    public $Domain;

    /**
     * @var string <p>直播录制Path</p>
     */
    public $Path;

    /**
     * @var string <p>直播录制流 ID。</p>
     */
    public $StreamId;

    /**
     * @var string <p>录制起始时间，使用  <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $RecordStartTime;

    /**
     * @var string <p>录制结束时间，使用  <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $RecordEndTime;

    /**
     * @param string $Domain <p>直播录制域名</p>
     * @param string $Path <p>直播录制Path</p>
     * @param string $StreamId <p>直播录制流 ID。</p>
     * @param string $RecordStartTime <p>录制起始时间，使用  <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     * @param string $RecordEndTime <p>录制结束时间，使用  <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("StreamId",$param) and $param["StreamId"] !== null) {
            $this->StreamId = $param["StreamId"];
        }

        if (array_key_exists("RecordStartTime",$param) and $param["RecordStartTime"] !== null) {
            $this->RecordStartTime = $param["RecordStartTime"];
        }

        if (array_key_exists("RecordEndTime",$param) and $param["RecordEndTime"] !== null) {
            $this->RecordEndTime = $param["RecordEndTime"];
        }
    }
}
