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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云存 AI 任务输出视频文件元数据
 *
 * @method string getThumbnailFileName() 获取视频对应的缩略图的文件名称（含扩展名）
 * @method void setThumbnailFileName(string $ThumbnailFileName) 设置视频对应的缩略图的文件名称（含扩展名）
 * @method integer getDurationMilliSeconds() 获取视频时长（单位：毫秒）
 * @method void setDurationMilliSeconds(integer $DurationMilliSeconds) 设置视频时长（单位：毫秒）
 */
class CloudStorageAIServiceTaskVideoMetaInfo extends AbstractModel
{
    /**
     * @var string 视频对应的缩略图的文件名称（含扩展名）
     */
    public $ThumbnailFileName;

    /**
     * @var integer 视频时长（单位：毫秒）
     */
    public $DurationMilliSeconds;

    /**
     * @param string $ThumbnailFileName 视频对应的缩略图的文件名称（含扩展名）
     * @param integer $DurationMilliSeconds 视频时长（单位：毫秒）
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
        if (array_key_exists("ThumbnailFileName",$param) and $param["ThumbnailFileName"] !== null) {
            $this->ThumbnailFileName = $param["ThumbnailFileName"];
        }

        if (array_key_exists("DurationMilliSeconds",$param) and $param["DurationMilliSeconds"] !== null) {
            $this->DurationMilliSeconds = $param["DurationMilliSeconds"];
        }
    }
}
