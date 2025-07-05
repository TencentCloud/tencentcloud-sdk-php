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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频编辑/合成任务  媒体素材源信息。
 *
 * @method string getFileId() 获取媒体对应的素材ID，即 FileInfos 列表中对应素材的 ID。
 * @method void setFileId(string $FileId) 设置媒体对应的素材ID，即 FileInfos 列表中对应素材的 ID。
 * @method string getStartTime() 获取媒体位于素材的起始时间，时间点支持 s、% 两种格式：
<li>当字符串以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒；</li>
<li>当字符串以 % 结尾，表示时间点为素材时长的百分比大小，如10%表示时间点为素材第10% 的时刻。</li>
默认：0s
 * @method void setStartTime(string $StartTime) 设置媒体位于素材的起始时间，时间点支持 s、% 两种格式：
<li>当字符串以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒；</li>
<li>当字符串以 % 结尾，表示时间点为素材时长的百分比大小，如10%表示时间点为素材第10% 的时刻。</li>
默认：0s
 * @method string getEndTime() 获取媒体位于素材的结束时间，和 StartTime 构成媒体在源素材的时间区间，时间点支持 s、% 两种格式：
<li>当字符串以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒；</li>
<li>当字符串以 % 结尾，表示时间点为素材时长的百分比大小，如10%表示时间点为素材第10%的时间。</li>
默认：如果对应轨道时长有设置，则默认轨道时长，否则为素材时长，无时长的素材默认为 1 秒。
注意：至少需要大于 StartTime 0.02 秒。

 * @method void setEndTime(string $EndTime) 设置媒体位于素材的结束时间，和 StartTime 构成媒体在源素材的时间区间，时间点支持 s、% 两种格式：
<li>当字符串以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒；</li>
<li>当字符串以 % 结尾，表示时间点为素材时长的百分比大小，如10%表示时间点为素材第10%的时间。</li>
默认：如果对应轨道时长有设置，则默认轨道时长，否则为素材时长，无时长的素材默认为 1 秒。
注意：至少需要大于 StartTime 0.02 秒。
 */
class ComposeSourceMedia extends AbstractModel
{
    /**
     * @var string 媒体对应的素材ID，即 FileInfos 列表中对应素材的 ID。
     */
    public $FileId;

    /**
     * @var string 媒体位于素材的起始时间，时间点支持 s、% 两种格式：
<li>当字符串以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒；</li>
<li>当字符串以 % 结尾，表示时间点为素材时长的百分比大小，如10%表示时间点为素材第10% 的时刻。</li>
默认：0s
     */
    public $StartTime;

    /**
     * @var string 媒体位于素材的结束时间，和 StartTime 构成媒体在源素材的时间区间，时间点支持 s、% 两种格式：
<li>当字符串以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒；</li>
<li>当字符串以 % 结尾，表示时间点为素材时长的百分比大小，如10%表示时间点为素材第10%的时间。</li>
默认：如果对应轨道时长有设置，则默认轨道时长，否则为素材时长，无时长的素材默认为 1 秒。
注意：至少需要大于 StartTime 0.02 秒。

     */
    public $EndTime;

    /**
     * @param string $FileId 媒体对应的素材ID，即 FileInfos 列表中对应素材的 ID。
     * @param string $StartTime 媒体位于素材的起始时间，时间点支持 s、% 两种格式：
<li>当字符串以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒；</li>
<li>当字符串以 % 结尾，表示时间点为素材时长的百分比大小，如10%表示时间点为素材第10% 的时刻。</li>
默认：0s
     * @param string $EndTime 媒体位于素材的结束时间，和 StartTime 构成媒体在源素材的时间区间，时间点支持 s、% 两种格式：
<li>当字符串以 s 结尾，表示时间点单位为秒，如 3.5s 表示时间点为第3.5秒；</li>
<li>当字符串以 % 结尾，表示时间点为素材时长的百分比大小，如10%表示时间点为素材第10%的时间。</li>
默认：如果对应轨道时长有设置，则默认轨道时长，否则为素材时长，无时长的素材默认为 1 秒。
注意：至少需要大于 StartTime 0.02 秒。
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
