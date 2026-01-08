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
 * 语义搜索结果。
 *
 * @method string getFileId() 获取媒体文件唯一标识 ID。
 * @method void setFileId(string $FileId) 设置媒体文件唯一标识 ID。
 * @method float getScore() 获取视频在本次检索中的得分，得分越高和检索值越相似，取值范围[0,1]
 * @method void setScore(float $Score) 设置视频在本次检索中的得分，得分越高和检索值越相似，取值范围[0,1]
 * @method float getStartTimeOffset() 获取视频片段的开始时间，单位：秒
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置视频片段的开始时间，单位：秒
 * @method float getEndTimeOffset() 获取视频片段的结束时间，单位：秒
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置视频片段的结束时间，单位：秒
 */
class SemanticsSearchResult extends AbstractModel
{
    /**
     * @var string 媒体文件唯一标识 ID。
     */
    public $FileId;

    /**
     * @var float 视频在本次检索中的得分，得分越高和检索值越相似，取值范围[0,1]
     */
    public $Score;

    /**
     * @var float 视频片段的开始时间，单位：秒
     */
    public $StartTimeOffset;

    /**
     * @var float 视频片段的结束时间，单位：秒
     */
    public $EndTimeOffset;

    /**
     * @param string $FileId 媒体文件唯一标识 ID。
     * @param float $Score 视频在本次检索中的得分，得分越高和检索值越相似，取值范围[0,1]
     * @param float $StartTimeOffset 视频片段的开始时间，单位：秒
     * @param float $EndTimeOffset 视频片段的结束时间，单位：秒
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }
    }
}
