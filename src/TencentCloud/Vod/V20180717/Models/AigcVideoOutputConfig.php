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
 * AIGC 生视频任务的输出媒体文件配置。
 *
 * @method string getStorageMode() 获取<p>存储模式</p><p>枚举值：</p><ul><li>Temporary： 临时存储，生成的视频文件不会存储到云点播，可在事件通知中获取到临时访问的 URL，有效期 7 天</li><li>Permanent： 永久存储，生成的视频文件将存储到云点播，可在事件通知中获取到 FileId</li></ul><p>默认值：Temporary</p>
 * @method void setStorageMode(string $StorageMode) 设置<p>存储模式</p><p>枚举值：</p><ul><li>Temporary： 临时存储，生成的视频文件不会存储到云点播，可在事件通知中获取到临时访问的 URL，有效期 7 天</li><li>Permanent： 永久存储，生成的视频文件将存储到云点播，可在事件通知中获取到 FileId</li></ul><p>默认值：Temporary</p>
 * @method string getMediaName() 获取<p>输出媒体文件名，最长 64 个字符。缺省由系统指定生成文件名。</p>
 * @method void setMediaName(string $MediaName) 设置<p>输出媒体文件名，最长 64 个字符。缺省由系统指定生成文件名。</p>
 * @method integer getClassId() 获取<p>分类ID，用于对媒体进行分类管理，可通过 <a href="/document/product/266/7812">创建分类</a> 接口，创建分类，获得分类 ID。</p><li>默认值：0，表示其他分类。</li>
 * @method void setClassId(integer $ClassId) 设置<p>分类ID，用于对媒体进行分类管理，可通过 <a href="/document/product/266/7812">创建分类</a> 接口，创建分类，获得分类 ID。</p><li>默认值：0，表示其他分类。</li>
 * @method string getExpireTime() 获取<p>输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
 * @method float getDuration() 获取<p>生成视频的时长，单位：秒。<li>当 ModelName 是 Kling，可选值为 5、10，默认为 5；</li><li>当 ModelName 是 Hailuo，可选值为 6、10，默认为 6；</li><li>当 ModelName 是 Vidu，可指定1-10；</li><li>当 ModelName 是 GV，可选值为 8，默认为 8；</li><li>当 ModelName 是 OS，可选值为 4、8、12，默认为 8；</li></p>
 * @method void setDuration(float $Duration) 设置<p>生成视频的时长，单位：秒。<li>当 ModelName 是 Kling，可选值为 5、10，默认为 5；</li><li>当 ModelName 是 Hailuo，可选值为 6、10，默认为 6；</li><li>当 ModelName 是 Vidu，可指定1-10；</li><li>当 ModelName 是 GV，可选值为 8，默认为 8；</li><li>当 ModelName 是 OS，可选值为 4、8、12，默认为 8；</li></p>
 * @method string getResolution() 获取<p>生成视频的分辨率。</p><li>当 ModelName 是 Kling，可选值为 720P、1080P，默认为 720P；</li><li>当 ModelName 是 Hailuo，可选值为 768P、1080P，默认为 768P；</li><li>当 ModelName 是 Vidu，可选值为 720P、1080P，默认为 720P；</li><li>当 ModelName 是 GV，可选值为 720P、1080P，默认为 720P；</li><li>当 ModelName 是 OS，可选值为 720P；</li>
 * @method void setResolution(string $Resolution) 设置<p>生成视频的分辨率。</p><li>当 ModelName 是 Kling，可选值为 720P、1080P，默认为 720P；</li><li>当 ModelName 是 Hailuo，可选值为 768P、1080P，默认为 768P；</li><li>当 ModelName 是 Vidu，可选值为 720P、1080P，默认为 720P；</li><li>当 ModelName 是 GV，可选值为 720P、1080P，默认为 720P；</li><li>当 ModelName 是 OS，可选值为 720P；</li>
 * @method string getAspectRatio() 获取<p>指定所生成视频的宽高比。</p><li>当 ModelName 是 Kling，当文生视频时，则可选值为 16:9、9:16、 1:1，默认为16:9；</li><li>当 ModelName 是 Vidu，当文生视频时和使用参考图片生成时，则可选值为 16:9、9:16、4:3、3:4、1:1，其中仅版本q2支持4:3、3:4</li><li>当 ModelName 是 GV，则可选值为 16:9、9:16，默认为 16:9；</li><li>当 ModelName 是 OS，当文生视频时，则可选值为 16:9、9:16，默认为 16:9；</li><li>当 ModelName 是 Hailuo，则暂不支持。</li>
 * @method void setAspectRatio(string $AspectRatio) 设置<p>指定所生成视频的宽高比。</p><li>当 ModelName 是 Kling，当文生视频时，则可选值为 16:9、9:16、 1:1，默认为16:9；</li><li>当 ModelName 是 Vidu，当文生视频时和使用参考图片生成时，则可选值为 16:9、9:16、4:3、3:4、1:1，其中仅版本q2支持4:3、3:4</li><li>当 ModelName 是 GV，则可选值为 16:9、9:16，默认为 16:9；</li><li>当 ModelName 是 OS，当文生视频时，则可选值为 16:9、9:16，默认为 16:9；</li><li>当 ModelName 是 Hailuo，则暂不支持。</li>
 * @method string getAudioGeneration() 获取<p>是否生成音频。支持的模型包括 GV、OS、Vidu。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li><br>默认值：Disabled</p>
 * @method void setAudioGeneration(string $AudioGeneration) 设置<p>是否生成音频。支持的模型包括 GV、OS、Vidu。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li><br>默认值：Disabled</p>
 * @method string getPersonGeneration() 获取<p>是否允许人物或人脸生成。取值有： <li>AllowAdult：允许生成成人；</li> <li>Disallowed：禁止在图片中包含人物或人脸；</li></p>
 * @method void setPersonGeneration(string $PersonGeneration) 设置<p>是否允许人物或人脸生成。取值有： <li>AllowAdult：允许生成成人；</li> <li>Disallowed：禁止在图片中包含人物或人脸；</li></p>
 * @method string getInputComplianceCheck() 获取<p>是否开启输入内容的合规性检查。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
 * @method void setInputComplianceCheck(string $InputComplianceCheck) 设置<p>是否开启输入内容的合规性检查。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
 * @method string getOutputComplianceCheck() 获取<p>是否开启输出内容的合规性检查。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
 * @method void setOutputComplianceCheck(string $OutputComplianceCheck) 设置<p>是否开启输出内容的合规性检查。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
 * @method string getEnhanceSwitch() 获取<p>是否启用视频增强。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li><br>说明：</p><ol><li>对于选择的分辨率超过模型可生成分辨率时，默认会启用增强。</li><li>对于模型可以直出的分辨率，也可以主动选择模型直出低分辨率，使用增强获得指定分辨率。</li></ol>
 * @method void setEnhanceSwitch(string $EnhanceSwitch) 设置<p>是否启用视频增强。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li><br>说明：</p><ol><li>对于选择的分辨率超过模型可生成分辨率时，默认会启用增强。</li><li>对于模型可以直出的分辨率，也可以主动选择模型直出低分辨率，使用增强获得指定分辨率。</li></ol>
 * @method string getOffPeak() 获取<p>是否开启错峰。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
 * @method void setOffPeak(string $OffPeak) 设置<p>是否开启错峰。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
 * @method string getFrameInterpolate() 获取<p>是否开启vidu智能插帧。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
 * @method void setFrameInterpolate(string $FrameInterpolate) 设置<p>是否开启vidu智能插帧。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
 * @method string getLogoAdd() 获取<p>是否开启图标水印。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li><br>目前支持的模型有 Vidu，其他模型暂不支持。</p>
 * @method void setLogoAdd(string $LogoAdd) 设置<p>是否开启图标水印。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li><br>目前支持的模型有 Vidu，其他模型暂不支持。</p>
 */
class AigcVideoOutputConfig extends AbstractModel
{
    /**
     * @var string <p>存储模式</p><p>枚举值：</p><ul><li>Temporary： 临时存储，生成的视频文件不会存储到云点播，可在事件通知中获取到临时访问的 URL，有效期 7 天</li><li>Permanent： 永久存储，生成的视频文件将存储到云点播，可在事件通知中获取到 FileId</li></ul><p>默认值：Temporary</p>
     */
    public $StorageMode;

    /**
     * @var string <p>输出媒体文件名，最长 64 个字符。缺省由系统指定生成文件名。</p>
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
     * @var float <p>生成视频的时长，单位：秒。<li>当 ModelName 是 Kling，可选值为 5、10，默认为 5；</li><li>当 ModelName 是 Hailuo，可选值为 6、10，默认为 6；</li><li>当 ModelName 是 Vidu，可指定1-10；</li><li>当 ModelName 是 GV，可选值为 8，默认为 8；</li><li>当 ModelName 是 OS，可选值为 4、8、12，默认为 8；</li></p>
     */
    public $Duration;

    /**
     * @var string <p>生成视频的分辨率。</p><li>当 ModelName 是 Kling，可选值为 720P、1080P，默认为 720P；</li><li>当 ModelName 是 Hailuo，可选值为 768P、1080P，默认为 768P；</li><li>当 ModelName 是 Vidu，可选值为 720P、1080P，默认为 720P；</li><li>当 ModelName 是 GV，可选值为 720P、1080P，默认为 720P；</li><li>当 ModelName 是 OS，可选值为 720P；</li>
     */
    public $Resolution;

    /**
     * @var string <p>指定所生成视频的宽高比。</p><li>当 ModelName 是 Kling，当文生视频时，则可选值为 16:9、9:16、 1:1，默认为16:9；</li><li>当 ModelName 是 Vidu，当文生视频时和使用参考图片生成时，则可选值为 16:9、9:16、4:3、3:4、1:1，其中仅版本q2支持4:3、3:4</li><li>当 ModelName 是 GV，则可选值为 16:9、9:16，默认为 16:9；</li><li>当 ModelName 是 OS，当文生视频时，则可选值为 16:9、9:16，默认为 16:9；</li><li>当 ModelName 是 Hailuo，则暂不支持。</li>
     */
    public $AspectRatio;

    /**
     * @var string <p>是否生成音频。支持的模型包括 GV、OS、Vidu。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li><br>默认值：Disabled</p>
     */
    public $AudioGeneration;

    /**
     * @var string <p>是否允许人物或人脸生成。取值有： <li>AllowAdult：允许生成成人；</li> <li>Disallowed：禁止在图片中包含人物或人脸；</li></p>
     */
    public $PersonGeneration;

    /**
     * @var string <p>是否开启输入内容的合规性检查。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
     */
    public $InputComplianceCheck;

    /**
     * @var string <p>是否开启输出内容的合规性检查。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
     */
    public $OutputComplianceCheck;

    /**
     * @var string <p>是否启用视频增强。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li><br>说明：</p><ol><li>对于选择的分辨率超过模型可生成分辨率时，默认会启用增强。</li><li>对于模型可以直出的分辨率，也可以主动选择模型直出低分辨率，使用增强获得指定分辨率。</li></ol>
     */
    public $EnhanceSwitch;

    /**
     * @var string <p>是否开启错峰。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
     */
    public $OffPeak;

    /**
     * @var string <p>是否开启vidu智能插帧。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
     */
    public $FrameInterpolate;

    /**
     * @var string <p>是否开启图标水印。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li><br>目前支持的模型有 Vidu，其他模型暂不支持。</p>
     */
    public $LogoAdd;

    /**
     * @param string $StorageMode <p>存储模式</p><p>枚举值：</p><ul><li>Temporary： 临时存储，生成的视频文件不会存储到云点播，可在事件通知中获取到临时访问的 URL，有效期 7 天</li><li>Permanent： 永久存储，生成的视频文件将存储到云点播，可在事件通知中获取到 FileId</li></ul><p>默认值：Temporary</p>
     * @param string $MediaName <p>输出媒体文件名，最长 64 个字符。缺省由系统指定生成文件名。</p>
     * @param integer $ClassId <p>分类ID，用于对媒体进行分类管理，可通过 <a href="/document/product/266/7812">创建分类</a> 接口，创建分类，获得分类 ID。</p><li>默认值：0，表示其他分类。</li>
     * @param string $ExpireTime <p>输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
     * @param float $Duration <p>生成视频的时长，单位：秒。<li>当 ModelName 是 Kling，可选值为 5、10，默认为 5；</li><li>当 ModelName 是 Hailuo，可选值为 6、10，默认为 6；</li><li>当 ModelName 是 Vidu，可指定1-10；</li><li>当 ModelName 是 GV，可选值为 8，默认为 8；</li><li>当 ModelName 是 OS，可选值为 4、8、12，默认为 8；</li></p>
     * @param string $Resolution <p>生成视频的分辨率。</p><li>当 ModelName 是 Kling，可选值为 720P、1080P，默认为 720P；</li><li>当 ModelName 是 Hailuo，可选值为 768P、1080P，默认为 768P；</li><li>当 ModelName 是 Vidu，可选值为 720P、1080P，默认为 720P；</li><li>当 ModelName 是 GV，可选值为 720P、1080P，默认为 720P；</li><li>当 ModelName 是 OS，可选值为 720P；</li>
     * @param string $AspectRatio <p>指定所生成视频的宽高比。</p><li>当 ModelName 是 Kling，当文生视频时，则可选值为 16:9、9:16、 1:1，默认为16:9；</li><li>当 ModelName 是 Vidu，当文生视频时和使用参考图片生成时，则可选值为 16:9、9:16、4:3、3:4、1:1，其中仅版本q2支持4:3、3:4</li><li>当 ModelName 是 GV，则可选值为 16:9、9:16，默认为 16:9；</li><li>当 ModelName 是 OS，当文生视频时，则可选值为 16:9、9:16，默认为 16:9；</li><li>当 ModelName 是 Hailuo，则暂不支持。</li>
     * @param string $AudioGeneration <p>是否生成音频。支持的模型包括 GV、OS、Vidu。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li><br>默认值：Disabled</p>
     * @param string $PersonGeneration <p>是否允许人物或人脸生成。取值有： <li>AllowAdult：允许生成成人；</li> <li>Disallowed：禁止在图片中包含人物或人脸；</li></p>
     * @param string $InputComplianceCheck <p>是否开启输入内容的合规性检查。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
     * @param string $OutputComplianceCheck <p>是否开启输出内容的合规性检查。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
     * @param string $EnhanceSwitch <p>是否启用视频增强。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li><br>说明：</p><ol><li>对于选择的分辨率超过模型可生成分辨率时，默认会启用增强。</li><li>对于模型可以直出的分辨率，也可以主动选择模型直出低分辨率，使用增强获得指定分辨率。</li></ol>
     * @param string $OffPeak <p>是否开启错峰。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
     * @param string $FrameInterpolate <p>是否开启vidu智能插帧。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
     * @param string $LogoAdd <p>是否开启图标水印。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li><br>目前支持的模型有 Vidu，其他模型暂不支持。</p>
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

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
        }

        if (array_key_exists("AudioGeneration",$param) and $param["AudioGeneration"] !== null) {
            $this->AudioGeneration = $param["AudioGeneration"];
        }

        if (array_key_exists("PersonGeneration",$param) and $param["PersonGeneration"] !== null) {
            $this->PersonGeneration = $param["PersonGeneration"];
        }

        if (array_key_exists("InputComplianceCheck",$param) and $param["InputComplianceCheck"] !== null) {
            $this->InputComplianceCheck = $param["InputComplianceCheck"];
        }

        if (array_key_exists("OutputComplianceCheck",$param) and $param["OutputComplianceCheck"] !== null) {
            $this->OutputComplianceCheck = $param["OutputComplianceCheck"];
        }

        if (array_key_exists("EnhanceSwitch",$param) and $param["EnhanceSwitch"] !== null) {
            $this->EnhanceSwitch = $param["EnhanceSwitch"];
        }

        if (array_key_exists("OffPeak",$param) and $param["OffPeak"] !== null) {
            $this->OffPeak = $param["OffPeak"];
        }

        if (array_key_exists("FrameInterpolate",$param) and $param["FrameInterpolate"] !== null) {
            $this->FrameInterpolate = $param["FrameInterpolate"];
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }
    }
}
