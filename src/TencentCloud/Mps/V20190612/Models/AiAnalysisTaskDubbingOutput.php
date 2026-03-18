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
 * @method string getVideoPath() 获取<p>译制视频路径。</p>
 * @method void setVideoPath(string $VideoPath) 设置<p>译制视频路径。</p>
 * @method string getSpeakerPath() 获取<p>标记文件路径</p>
 * @method void setSpeakerPath(string $SpeakerPath) 设置<p>标记文件路径</p>
 * @method string getVoiceId() 获取<p>音色id</p>
 * @method void setVoiceId(string $VoiceId) 设置<p>音色id</p>
 * @method TaskOutputStorage getOutputStorage() 获取<p>译制视频存储位置。</p>
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置<p>译制视频存储位置。</p>
 */
class AiAnalysisTaskDubbingOutput extends AbstractModel
{
    /**
     * @var string <p>译制视频路径。</p>
     */
    public $VideoPath;

    /**
     * @var string <p>标记文件路径</p>
     */
    public $SpeakerPath;

    /**
     * @var string <p>音色id</p>
     */
    public $VoiceId;

    /**
     * @var TaskOutputStorage <p>译制视频存储位置。</p>
     */
    public $OutputStorage;

    /**
     * @param string $VideoPath <p>译制视频路径。</p>
     * @param string $SpeakerPath <p>标记文件路径</p>
     * @param string $VoiceId <p>音色id</p>
     * @param TaskOutputStorage $OutputStorage <p>译制视频存储位置。</p>
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
