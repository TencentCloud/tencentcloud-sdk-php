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
 * 画质重生目标参数
 *
 * @method string getMediaName() 获取输出文件名，最长 64 个字符。缺省由系统指定生成文件名。
 * @method void setMediaName(string $MediaName) 设置输出文件名，最长 64 个字符。缺省由系统指定生成文件名。
 * @method string getDescription() 获取描述信息，最长 128 个字符。缺省描述信息为空。
 * @method void setDescription(string $Description) 设置描述信息，最长 128 个字符。缺省描述信息为空。
 * @method integer getClassId() 获取分类ID，用于对媒体进行分类管理，可通过 [创建分类](/document/product/266/7812) 接口，创建分类，获得分类 ID。
<li>默认值：0，表示其他分类。</li>
 * @method void setClassId(integer $ClassId) 设置分类ID，用于对媒体进行分类管理，可通过 [创建分类](/document/product/266/7812) 接口，创建分类，获得分类 ID。
<li>默认值：0，表示其他分类。</li>
 * @method string getExpireTime() 获取输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setExpireTime(string $ExpireTime) 设置输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getContainer() 获取输出文件封装格式，可选值：mp4、flv、hls。默认mp4。
 * @method void setContainer(string $Container) 设置输出文件封装格式，可选值：mp4、flv、hls。默认mp4。
 * @method RebuildMediaTargetVideoStream getVideoStream() 获取输出的视频信息。
 * @method void setVideoStream(RebuildMediaTargetVideoStream $VideoStream) 设置输出的视频信息。
 * @method RebuildMediaTargetAudioStream getAudioStream() 获取输出的音频信息。
 * @method void setAudioStream(RebuildMediaTargetAudioStream $AudioStream) 设置输出的音频信息。
 * @method integer getRemoveVideo() 获取是否去除视频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>

默认值：0。
 * @method void setRemoveVideo(integer $RemoveVideo) 设置是否去除视频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>

默认值：0。
 * @method integer getRemoveAudio() 获取是否去除音频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>

默认值：0。
 * @method void setRemoveAudio(integer $RemoveAudio) 设置是否去除音频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>

默认值：0。
 */
class RebuildMediaTargetInfo extends AbstractModel
{
    /**
     * @var string 输出文件名，最长 64 个字符。缺省由系统指定生成文件名。
     */
    public $MediaName;

    /**
     * @var string 描述信息，最长 128 个字符。缺省描述信息为空。
     */
    public $Description;

    /**
     * @var integer 分类ID，用于对媒体进行分类管理，可通过 [创建分类](/document/product/266/7812) 接口，创建分类，获得分类 ID。
<li>默认值：0，表示其他分类。</li>
     */
    public $ClassId;

    /**
     * @var string 输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     */
    public $ExpireTime;

    /**
     * @var string 输出文件封装格式，可选值：mp4、flv、hls。默认mp4。
     */
    public $Container;

    /**
     * @var RebuildMediaTargetVideoStream 输出的视频信息。
     */
    public $VideoStream;

    /**
     * @var RebuildMediaTargetAudioStream 输出的音频信息。
     */
    public $AudioStream;

    /**
     * @var integer 是否去除视频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>

默认值：0。
     */
    public $RemoveVideo;

    /**
     * @var integer 是否去除音频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>

默认值：0。
     */
    public $RemoveAudio;

    /**
     * @param string $MediaName 输出文件名，最长 64 个字符。缺省由系统指定生成文件名。
     * @param string $Description 描述信息，最长 128 个字符。缺省描述信息为空。
     * @param integer $ClassId 分类ID，用于对媒体进行分类管理，可通过 [创建分类](/document/product/266/7812) 接口，创建分类，获得分类 ID。
<li>默认值：0，表示其他分类。</li>
     * @param string $ExpireTime 输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $Container 输出文件封装格式，可选值：mp4、flv、hls。默认mp4。
     * @param RebuildMediaTargetVideoStream $VideoStream 输出的视频信息。
     * @param RebuildMediaTargetAudioStream $AudioStream 输出的音频信息。
     * @param integer $RemoveVideo 是否去除视频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>

默认值：0。
     * @param integer $RemoveAudio 是否去除音频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>

默认值：0。
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
        if (array_key_exists("MediaName",$param) and $param["MediaName"] !== null) {
            $this->MediaName = $param["MediaName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("VideoStream",$param) and $param["VideoStream"] !== null) {
            $this->VideoStream = new RebuildMediaTargetVideoStream();
            $this->VideoStream->deserialize($param["VideoStream"]);
        }

        if (array_key_exists("AudioStream",$param) and $param["AudioStream"] !== null) {
            $this->AudioStream = new RebuildMediaTargetAudioStream();
            $this->AudioStream->deserialize($param["AudioStream"]);
        }

        if (array_key_exists("RemoveVideo",$param) and $param["RemoveVideo"] !== null) {
            $this->RemoveVideo = $param["RemoveVideo"];
        }

        if (array_key_exists("RemoveAudio",$param) and $param["RemoveAudio"] !== null) {
            $this->RemoveAudio = $param["RemoveAudio"];
        }
    }
}
