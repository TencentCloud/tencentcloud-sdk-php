<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getStreamId() 获取直播录制流 ID。
 * @method void setStreamId(string $StreamId) 设置直播录制流 ID。
 * @method string getRecordStartTime() 获取录制起始时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setRecordStartTime(string $RecordStartTime) 设置录制起始时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getRecordEndTime() 获取录制结束时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setRecordEndTime(string $RecordEndTime) 设置录制结束时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
 */
class LiveRecordInfo extends AbstractModel
{
    /**
     * @var string 直播录制流 ID。
     */
    public $StreamId;

    /**
     * @var string 录制起始时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $RecordStartTime;

    /**
     * @var string 录制结束时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $RecordEndTime;

    /**
     * @param string $StreamId 直播录制流 ID。
     * @param string $RecordStartTime 录制起始时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $RecordEndTime 录制结束时间，使用  [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#I)。
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
