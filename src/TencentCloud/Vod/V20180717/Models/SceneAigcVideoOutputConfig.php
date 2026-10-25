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
 * AIGC 场景化生视频任务的输出媒体文件配置。
 *
 * @method string getStorageMode() 获取<p>存储模式。取值有： <li>Permanent：永久存储，生成的图片文件将存储到云点播，可在事件通知中获取到 FileId；</li> <li>Temporary：临时存储，生成的图片文件不会存储到云点播，可在事件通知中获取到临时访问的 URL；</li><br>默认值：Temporary</p><p>当使用角色场景时，不支持指定为 Permanent。</p>
 * @method void setStorageMode(string $StorageMode) 设置<p>存储模式。取值有： <li>Permanent：永久存储，生成的图片文件将存储到云点播，可在事件通知中获取到 FileId；</li> <li>Temporary：临时存储，生成的图片文件不会存储到云点播，可在事件通知中获取到临时访问的 URL；</li><br>默认值：Temporary</p><p>当使用角色场景时，不支持指定为 Permanent。</p>
 * @method string getMediaName() 获取<p>输出文件名，最长 64 个字符。缺省由系统指定生成文件名。</p>
 * @method void setMediaName(string $MediaName) 设置<p>输出文件名，最长 64 个字符。缺省由系统指定生成文件名。</p>
 * @method integer getClassId() 获取<p>分类ID，用于对媒体进行分类管理，可通过 <a href="/document/product/266/7812">创建分类</a> 接口，创建分类，获得分类 ID。</p><li>默认值：0，表示其他分类。</li>
 * @method void setClassId(integer $ClassId) 设置<p>分类ID，用于对媒体进行分类管理，可通过 <a href="/document/product/266/7812">创建分类</a> 接口，创建分类，获得分类 ID。</p><li>默认值：0，表示其他分类。</li>
 * @method string getExpireTime() 获取<p>输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
 * @method string getAspectRatio() 获取<p>指定所生成视频的宽高比。输入格式为 W:H。</p><ul><li>当生商品图场景时，可选：16:9、9:16。</li><li>当角色场景时，可选：21:9、16:9、9:16、4:3、3:4、1:1。</li></ul>
 * @method void setAspectRatio(string $AspectRatio) 设置<p>指定所生成视频的宽高比。输入格式为 W:H。</p><ul><li>当生商品图场景时，可选：16:9、9:16。</li><li>当角色场景时，可选：21:9、16:9、9:16、4:3、3:4、1:1。</li></ul>
 * @method float getDuration() 获取<p>生成视频时长。</p><ul><li>当使用生商品图场景时，可选值4、6、8秒。</li><li>当使用角色场景时，可选值为4到15秒。</li></ul>
 * @method void setDuration(float $Duration) 设置<p>生成视频时长。</p><ul><li>当使用生商品图场景时，可选值4、6、8秒。</li><li>当使用角色场景时，可选值为4到15秒。</li></ul>
 * @method string getResolution() 获取<p>分辨率。仅当角色场景时有效。取值如下：</p><ul><li>当 Model 是 character_scene_standard 时，支持 480p、720p、1080p、4K；</li><li>当 Model 是 character_scene_mini 时，支持 480p、720p；</li><li>当 Model 是 character_scene_fast 时，支持 720p。</li></ul>
 * @method void setResolution(string $Resolution) 设置<p>分辨率。仅当角色场景时有效。取值如下：</p><ul><li>当 Model 是 character_scene_standard 时，支持 480p、720p、1080p、4K；</li><li>当 Model 是 character_scene_mini 时，支持 480p、720p；</li><li>当 Model 是 character_scene_fast 时，支持 720p。</li></ul>
 */
class SceneAigcVideoOutputConfig extends AbstractModel
{
    /**
     * @var string <p>存储模式。取值有： <li>Permanent：永久存储，生成的图片文件将存储到云点播，可在事件通知中获取到 FileId；</li> <li>Temporary：临时存储，生成的图片文件不会存储到云点播，可在事件通知中获取到临时访问的 URL；</li><br>默认值：Temporary</p><p>当使用角色场景时，不支持指定为 Permanent。</p>
     */
    public $StorageMode;

    /**
     * @var string <p>输出文件名，最长 64 个字符。缺省由系统指定生成文件名。</p>
     */
    public $MediaName;

    /**
     * @var integer <p>分类ID，用于对媒体进行分类管理，可通过 <a href="/document/product/266/7812">创建分类</a> 接口，创建分类，获得分类 ID。</p><li>默认值：0，表示其他分类。</li>
     */
    public $ClassId;

    /**
     * @var string <p>输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>指定所生成视频的宽高比。输入格式为 W:H。</p><ul><li>当生商品图场景时，可选：16:9、9:16。</li><li>当角色场景时，可选：21:9、16:9、9:16、4:3、3:4、1:1。</li></ul>
     */
    public $AspectRatio;

    /**
     * @var float <p>生成视频时长。</p><ul><li>当使用生商品图场景时，可选值4、6、8秒。</li><li>当使用角色场景时，可选值为4到15秒。</li></ul>
     */
    public $Duration;

    /**
     * @var string <p>分辨率。仅当角色场景时有效。取值如下：</p><ul><li>当 Model 是 character_scene_standard 时，支持 480p、720p、1080p、4K；</li><li>当 Model 是 character_scene_mini 时，支持 480p、720p；</li><li>当 Model 是 character_scene_fast 时，支持 720p。</li></ul>
     */
    public $Resolution;

    /**
     * @param string $StorageMode <p>存储模式。取值有： <li>Permanent：永久存储，生成的图片文件将存储到云点播，可在事件通知中获取到 FileId；</li> <li>Temporary：临时存储，生成的图片文件不会存储到云点播，可在事件通知中获取到临时访问的 URL；</li><br>默认值：Temporary</p><p>当使用角色场景时，不支持指定为 Permanent。</p>
     * @param string $MediaName <p>输出文件名，最长 64 个字符。缺省由系统指定生成文件名。</p>
     * @param integer $ClassId <p>分类ID，用于对媒体进行分类管理，可通过 <a href="/document/product/266/7812">创建分类</a> 接口，创建分类，获得分类 ID。</p><li>默认值：0，表示其他分类。</li>
     * @param string $ExpireTime <p>输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
     * @param string $AspectRatio <p>指定所生成视频的宽高比。输入格式为 W:H。</p><ul><li>当生商品图场景时，可选：16:9、9:16。</li><li>当角色场景时，可选：21:9、16:9、9:16、4:3、3:4、1:1。</li></ul>
     * @param float $Duration <p>生成视频时长。</p><ul><li>当使用生商品图场景时，可选值4、6、8秒。</li><li>当使用角色场景时，可选值为4到15秒。</li></ul>
     * @param string $Resolution <p>分辨率。仅当角色场景时有效。取值如下：</p><ul><li>当 Model 是 character_scene_standard 时，支持 480p、720p、1080p、4K；</li><li>当 Model 是 character_scene_mini 时，支持 480p、720p；</li><li>当 Model 是 character_scene_fast 时，支持 720p。</li></ul>
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
        if (array_key_exists("StorageMode",$param) and $param["StorageMode"] !== null) {
            $this->StorageMode = $param["StorageMode"];
        }

        if (array_key_exists("MediaName",$param) and $param["MediaName"] !== null) {
            $this->MediaName = $param["MediaName"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }
    }
}
