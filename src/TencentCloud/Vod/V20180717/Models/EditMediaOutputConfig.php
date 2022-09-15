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
 * 编辑视频的结果文件输出。
 *
 * @method string getMediaName() 获取输出文件名，最长 64 个字符。缺省由系统指定生成文件名。
 * @method void setMediaName(string $MediaName) 设置输出文件名，最长 64 个字符。缺省由系统指定生成文件名。
 * @method string getType() 获取输出文件格式，可选值：mp4、hls。默认是 mp4。
 * @method void setType(string $Type) 设置输出文件格式，可选值：mp4、hls。默认是 mp4。
 * @method integer getClassId() 获取分类ID，用于对媒体进行分类管理，可通过 [创建分类](/document/product/266/7812) 接口，创建分类，获得分类 ID。
<li>默认值：0，表示其他分类。</li>
 * @method void setClassId(integer $ClassId) 设置分类ID，用于对媒体进行分类管理，可通过 [创建分类](/document/product/266/7812) 接口，创建分类，获得分类 ID。
<li>默认值：0，表示其他分类。</li>
 * @method string getExpireTime() 获取输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setExpireTime(string $ExpireTime) 设置输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method EditMediaVideoStream getVideoStream() 获取输出的视频信息。
 * @method void setVideoStream(EditMediaVideoStream $VideoStream) 设置输出的视频信息。
 * @method EditMediaTEHDConfig getTEHDConfig() 获取极速高清转码参数。
 * @method void setTEHDConfig(EditMediaTEHDConfig $TEHDConfig) 设置极速高清转码参数。
 */
class EditMediaOutputConfig extends AbstractModel
{
    /**
     * @var string 输出文件名，最长 64 个字符。缺省由系统指定生成文件名。
     */
    public $MediaName;

    /**
     * @var string 输出文件格式，可选值：mp4、hls。默认是 mp4。
     */
    public $Type;

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
     * @var EditMediaVideoStream 输出的视频信息。
     */
    public $VideoStream;

    /**
     * @var EditMediaTEHDConfig 极速高清转码参数。
     */
    public $TEHDConfig;

    /**
     * @param string $MediaName 输出文件名，最长 64 个字符。缺省由系统指定生成文件名。
     * @param string $Type 输出文件格式，可选值：mp4、hls。默认是 mp4。
     * @param integer $ClassId 分类ID，用于对媒体进行分类管理，可通过 [创建分类](/document/product/266/7812) 接口，创建分类，获得分类 ID。
<li>默认值：0，表示其他分类。</li>
     * @param string $ExpireTime 输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param EditMediaVideoStream $VideoStream 输出的视频信息。
     * @param EditMediaTEHDConfig $TEHDConfig 极速高清转码参数。
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("VideoStream",$param) and $param["VideoStream"] !== null) {
            $this->VideoStream = new EditMediaVideoStream();
            $this->VideoStream->deserialize($param["VideoStream"]);
        }

        if (array_key_exists("TEHDConfig",$param) and $param["TEHDConfig"] !== null) {
            $this->TEHDConfig = new EditMediaTEHDConfig();
            $this->TEHDConfig->deserialize($param["TEHDConfig"]);
        }
    }
}
