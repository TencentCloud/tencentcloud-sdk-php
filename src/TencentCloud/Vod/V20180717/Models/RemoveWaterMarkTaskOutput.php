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
 * 智能去除水印任务的输出。
 *
 * @method string getFileId() 获取视频 ID。
 * @method void setFileId(string $FileId) 设置视频 ID。
 * @method MediaMetaData getMetaData() 获取元信息。包括大小、时长、视频流信息、音频流信息等。
 * @method void setMetaData(MediaMetaData $MetaData) 设置元信息。包括大小、时长、视频流信息、音频流信息等。
 */
class RemoveWaterMarkTaskOutput extends AbstractModel
{
    /**
     * @var string 视频 ID。
     */
    public $FileId;

    /**
     * @var MediaMetaData 元信息。包括大小、时长、视频流信息、音频流信息等。
     */
    public $MetaData;

    /**
     * @param string $FileId 视频 ID。
     * @param MediaMetaData $MetaData 元信息。包括大小、时长、视频流信息、音频流信息等。
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

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }
    }
}
