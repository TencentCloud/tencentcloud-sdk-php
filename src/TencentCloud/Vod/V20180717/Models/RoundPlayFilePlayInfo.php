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
 * 轮播节目播放信息
 *
 * @method string getItemId() 获取播单节目的 ID，由系统分配。
 * @method void setItemId(string $ItemId) 设置播单节目的 ID，由系统分配。
 * @method string getFileId() 获取媒体文件标识。
 * @method void setFileId(string $FileId) 设置媒体文件标识。
 * @method string getStartPlayTime() 获取启播时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method void setStartPlayTime(string $StartPlayTime) 设置启播时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
 * @method float getDuration() 获取播放时长，单位为秒。
 * @method void setDuration(float $Duration) 设置播放时长，单位为秒。
 * @method float getProgress() 获取播放进度，单位为秒。
 * @method void setProgress(float $Progress) 设置播放进度，单位为秒。
 */
class RoundPlayFilePlayInfo extends AbstractModel
{
    /**
     * @var string 播单节目的 ID，由系统分配。
     */
    public $ItemId;

    /**
     * @var string 媒体文件标识。
     */
    public $FileId;

    /**
     * @var string 启播时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
     */
    public $StartPlayTime;

    /**
     * @var float 播放时长，单位为秒。
     */
    public $Duration;

    /**
     * @var float 播放进度，单位为秒。
     */
    public $Progress;

    /**
     * @param string $ItemId 播单节目的 ID，由系统分配。
     * @param string $FileId 媒体文件标识。
     * @param string $StartPlayTime 启播时间，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#52)。
     * @param float $Duration 播放时长，单位为秒。
     * @param float $Progress 播放进度，单位为秒。
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("StartPlayTime",$param) and $param["StartPlayTime"] !== null) {
            $this->StartPlayTime = $param["StartPlayTime"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }
    }
}
