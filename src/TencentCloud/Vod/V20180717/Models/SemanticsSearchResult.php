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
 * @method string getFileId() 获取<p>媒体文件唯一标识 ID。</p>
 * @method void setFileId(string $FileId) 设置<p>媒体文件唯一标识 ID。</p>
 * @method string getTitle() 获取<p>智能媒资为当前片段生成的标题</p>
 * @method void setTitle(string $Title) 设置<p>智能媒资为当前片段生成的标题</p>
 * @method float getScore() 获取<p>视频在本次检索中的得分，得分越高和检索值越相似，取值范围[0,1]</p>
 * @method void setScore(float $Score) 设置<p>视频在本次检索中的得分，得分越高和检索值越相似，取值范围[0,1]</p>
 * @method float getStartTimeOffset() 获取<p>视频片段的开始时间，单位：秒</p>
 * @method void setStartTimeOffset(float $StartTimeOffset) 设置<p>视频片段的开始时间，单位：秒</p>
 * @method float getEndTimeOffset() 获取<p>视频片段的结束时间，单位：秒</p>
 * @method void setEndTimeOffset(float $EndTimeOffset) 设置<p>视频片段的结束时间，单位：秒</p>
 */
class SemanticsSearchResult extends AbstractModel
{
    /**
     * @var string <p>媒体文件唯一标识 ID。</p>
     */
    public $FileId;

    /**
     * @var string <p>智能媒资为当前片段生成的标题</p>
     */
    public $Title;

    /**
     * @var float <p>视频在本次检索中的得分，得分越高和检索值越相似，取值范围[0,1]</p>
     */
    public $Score;

    /**
     * @var float <p>视频片段的开始时间，单位：秒</p>
     */
    public $StartTimeOffset;

    /**
     * @var float <p>视频片段的结束时间，单位：秒</p>
     */
    public $EndTimeOffset;

    /**
     * @param string $FileId <p>媒体文件唯一标识 ID。</p>
     * @param string $Title <p>智能媒资为当前片段生成的标题</p>
     * @param float $Score <p>视频在本次检索中的得分，得分越高和检索值越相似，取值范围[0,1]</p>
     * @param float $StartTimeOffset <p>视频片段的开始时间，单位：秒</p>
     * @param float $EndTimeOffset <p>视频片段的结束时间，单位：秒</p>
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

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
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
