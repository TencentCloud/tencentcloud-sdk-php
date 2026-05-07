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
 * AIGC 音效任务的输出信息。
 *
 * @method array getAudioInfos() 获取<p>输出音频信息</p>
 * @method void setAudioInfos(array $AudioInfos) 设置<p>输出音频信息</p>
 * @method array getVideoInfos() 获取<p>输出视频信息</p>
 * @method void setVideoInfos(array $VideoInfos) 设置<p>输出视频信息</p>
 */
class AigcAudioTaskOutput extends AbstractModel
{
    /**
     * @var array <p>输出音频信息</p>
     */
    public $AudioInfos;

    /**
     * @var array <p>输出视频信息</p>
     */
    public $VideoInfos;

    /**
     * @param array $AudioInfos <p>输出音频信息</p>
     * @param array $VideoInfos <p>输出视频信息</p>
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
        if (array_key_exists("AudioInfos",$param) and $param["AudioInfos"] !== null) {
            $this->AudioInfos = [];
            foreach ($param["AudioInfos"] as $key => $value){
                $obj = new AigcAudioTaskOutputFileInfo();
                $obj->deserialize($value);
                array_push($this->AudioInfos, $obj);
            }
        }

        if (array_key_exists("VideoInfos",$param) and $param["VideoInfos"] !== null) {
            $this->VideoInfos = [];
            foreach ($param["VideoInfos"] as $key => $value){
                $obj = new AigcAudioTaskOutputFileInfo();
                $obj->deserialize($value);
                array_push($this->VideoInfos, $obj);
            }
        }
    }
}
