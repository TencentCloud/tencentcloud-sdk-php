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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单个视频切片审核结果
 *
 * @method VideoSegmentResult getResult() 获取<p>视频切片审核结果</p>
 * @method void setResult(VideoSegmentResult $Result) 设置<p>视频切片审核结果</p>
 * @method string getOffsetTime() 获取<p>视频切片的起始时间偏移</p>
 * @method void setOffsetTime(string $OffsetTime) 设置<p>视频切片的起始时间偏移</p>
 * @method string getCreatedAt() 获取<p>切片保存时间</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>切片保存时间</p>
 */
class VideoSegment extends AbstractModel
{
    /**
     * @var VideoSegmentResult <p>视频切片审核结果</p>
     */
    public $Result;

    /**
     * @var string <p>视频切片的起始时间偏移</p>
     */
    public $OffsetTime;

    /**
     * @var string <p>切片保存时间</p>
     */
    public $CreatedAt;

    /**
     * @param VideoSegmentResult $Result <p>视频切片审核结果</p>
     * @param string $OffsetTime <p>视频切片的起始时间偏移</p>
     * @param string $CreatedAt <p>切片保存时间</p>
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = new VideoSegmentResult();
            $this->Result->deserialize($param["Result"]);
        }

        if (array_key_exists("OffsetTime",$param) and $param["OffsetTime"] !== null) {
            $this->OffsetTime = $param["OffsetTime"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }
    }
}
