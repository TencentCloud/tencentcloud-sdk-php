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
 * 智能译制结果信息
 *
 * @method string getVideoPath() 获取译制视频路径。
 * @method void setVideoPath(string $VideoPath) 设置译制视频路径。
 * @method string getSpeakerPath() 获取标记文件路径

 * @method void setSpeakerPath(string $SpeakerPath) 设置标记文件路径

 * @method string getVoiceId() 获取音色id
 * @method void setVoiceId(string $VoiceId) 设置音色id
 * @method TaskOutputStorage getOutputStorage() 获取译制视频存储位置。
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置译制视频存储位置。
 */
class AiAnalysisTaskDubbingOutput extends AbstractModel
{
    /**
     * @var string 译制视频路径。
     */
    public $VideoPath;

    /**
     * @var string 标记文件路径

     */
    public $SpeakerPath;

    /**
     * @var string 音色id
     */
    public $VoiceId;

    /**
     * @var TaskOutputStorage 译制视频存储位置。
     */
    public $OutputStorage;

    /**
     * @param string $VideoPath 译制视频路径。
     * @param string $SpeakerPath 标记文件路径

     * @param string $VoiceId 音色id
     * @param TaskOutputStorage $OutputStorage 译制视频存储位置。
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
        if (array_key_exists("VideoPath",$param) and $param["VideoPath"] !== null) {
            $this->VideoPath = $param["VideoPath"];
        }

        if (array_key_exists("SpeakerPath",$param) and $param["SpeakerPath"] !== null) {
            $this->SpeakerPath = $param["SpeakerPath"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }
    }
}
