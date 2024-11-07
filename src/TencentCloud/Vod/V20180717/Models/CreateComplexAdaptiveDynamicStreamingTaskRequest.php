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
 * CreateComplexAdaptiveDynamicStreamingTask请求参数结构体
 *
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。</b>
 * @method string getFileId() 获取主媒体文件的媒体 ID。
 * @method void setFileId(string $FileId) 设置主媒体文件的媒体 ID。
 * @method array getStreamParaSet() 获取自适应码流参数，最大支持8个。
 * @method void setStreamParaSet(array $StreamParaSet) 设置自适应码流参数，最大支持8个。
 * @method array getHeadTailSet() 获取片头片尾列表，支持多片头片尾，最大可支持 4 个。如果填写了该字段，AudioSet 和 SubtitleSet 中指定的媒体的起始时间将会自动调整，和主媒体保持同步。
 * @method void setHeadTailSet(array $HeadTailSet) 设置片头片尾列表，支持多片头片尾，最大可支持 4 个。如果填写了该字段，AudioSet 和 SubtitleSet 中指定的媒体的起始时间将会自动调整，和主媒体保持同步。
 * @method array getAudioSet() 获取多语言音频流参数，最大支持16个。每个数组元素对应自适应码流中的一条音频流。如果要将主媒体文件中的音频流添加到输出的自适应码流中，那么也需要在此处指定。数组中元素的顺序将决定自适应码流中的音频流顺序。如果输入的媒体文件同时带有视频流和音频流，那么视频流将被忽略。
 * @method void setAudioSet(array $AudioSet) 设置多语言音频流参数，最大支持16个。每个数组元素对应自适应码流中的一条音频流。如果要将主媒体文件中的音频流添加到输出的自适应码流中，那么也需要在此处指定。数组中元素的顺序将决定自适应码流中的音频流顺序。如果输入的媒体文件同时带有视频流和音频流，那么视频流将被忽略。
 * @method array getSubtitleSet() 获取多语言字幕参数，最大可支持16个。每个数组元素对应自适应码流中的一条字幕流。数组中元素的顺序将决定自适应码流中的字幕流顺序。
 * @method void setSubtitleSet(array $SubtitleSet) 设置多语言字幕参数，最大可支持16个。每个数组元素对应自适应码流中的一条字幕流。数组中元素的顺序将决定自适应码流中的字幕流顺序。
 */
class CreateComplexAdaptiveDynamicStreamingTaskRequest extends AbstractModel
{
    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。</b>
     */
    public $SubAppId;

    /**
     * @var string 主媒体文件的媒体 ID。
     */
    public $FileId;

    /**
     * @var array 自适应码流参数，最大支持8个。
     */
    public $StreamParaSet;

    /**
     * @var array 片头片尾列表，支持多片头片尾，最大可支持 4 个。如果填写了该字段，AudioSet 和 SubtitleSet 中指定的媒体的起始时间将会自动调整，和主媒体保持同步。
     */
    public $HeadTailSet;

    /**
     * @var array 多语言音频流参数，最大支持16个。每个数组元素对应自适应码流中的一条音频流。如果要将主媒体文件中的音频流添加到输出的自适应码流中，那么也需要在此处指定。数组中元素的顺序将决定自适应码流中的音频流顺序。如果输入的媒体文件同时带有视频流和音频流，那么视频流将被忽略。
     */
    public $AudioSet;

    /**
     * @var array 多语言字幕参数，最大可支持16个。每个数组元素对应自适应码流中的一条字幕流。数组中元素的顺序将决定自适应码流中的字幕流顺序。
     */
    public $SubtitleSet;

    /**
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。</b>
     * @param string $FileId 主媒体文件的媒体 ID。
     * @param array $StreamParaSet 自适应码流参数，最大支持8个。
     * @param array $HeadTailSet 片头片尾列表，支持多片头片尾，最大可支持 4 个。如果填写了该字段，AudioSet 和 SubtitleSet 中指定的媒体的起始时间将会自动调整，和主媒体保持同步。
     * @param array $AudioSet 多语言音频流参数，最大支持16个。每个数组元素对应自适应码流中的一条音频流。如果要将主媒体文件中的音频流添加到输出的自适应码流中，那么也需要在此处指定。数组中元素的顺序将决定自适应码流中的音频流顺序。如果输入的媒体文件同时带有视频流和音频流，那么视频流将被忽略。
     * @param array $SubtitleSet 多语言字幕参数，最大可支持16个。每个数组元素对应自适应码流中的一条字幕流。数组中元素的顺序将决定自适应码流中的字幕流顺序。
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("StreamParaSet",$param) and $param["StreamParaSet"] !== null) {
            $this->StreamParaSet = [];
            foreach ($param["StreamParaSet"] as $key => $value){
                $obj = new ComplexAdaptiveDynamicStreamingTaskStreamPara();
                $obj->deserialize($value);
                array_push($this->StreamParaSet, $obj);
            }
        }

        if (array_key_exists("HeadTailSet",$param) and $param["HeadTailSet"] !== null) {
            $this->HeadTailSet = [];
            foreach ($param["HeadTailSet"] as $key => $value){
                $obj = new HeadTailTaskInput();
                $obj->deserialize($value);
                array_push($this->HeadTailSet, $obj);
            }
        }

        if (array_key_exists("AudioSet",$param) and $param["AudioSet"] !== null) {
            $this->AudioSet = [];
            foreach ($param["AudioSet"] as $key => $value){
                $obj = new ComplexAdaptiveDynamicStreamingTaskAudioInput();
                $obj->deserialize($value);
                array_push($this->AudioSet, $obj);
            }
        }

        if (array_key_exists("SubtitleSet",$param) and $param["SubtitleSet"] !== null) {
            $this->SubtitleSet = [];
            foreach ($param["SubtitleSet"] as $key => $value){
                $obj = new ComplexAdaptiveDynamicStreamingTaskSubtitleInput();
                $obj->deserialize($value);
                array_push($this->SubtitleSet, $obj);
            }
        }
    }
}
