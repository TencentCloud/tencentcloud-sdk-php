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
 * @method string getStorageMode() 获取存储模式。取值有： <li>Permanent：永久存储，生成的视频文件将存储到云点播，可在事件通知中获取到 FileId；</li> <li>Temporary：临时存储，生成的视频文件不会存储到云点播，可在事件通知中获取到临时访问的 URL；</li>
默认值：Temporary
 * @method void setStorageMode(string $StorageMode) 设置存储模式。取值有： <li>Permanent：永久存储，生成的视频文件将存储到云点播，可在事件通知中获取到 FileId；</li> <li>Temporary：临时存储，生成的视频文件不会存储到云点播，可在事件通知中获取到临时访问的 URL；</li>
默认值：Temporary
 * @method string getMediaName() 获取输出媒体文件名，最长 64 个字符。缺省由系统指定生成文件名。
 * @method void setMediaName(string $MediaName) 设置输出媒体文件名，最长 64 个字符。缺省由系统指定生成文件名。
 * @method integer getClassId() 获取分类ID，用于对媒体进行分类管理，可通过 [创建分类](/document/product/266/7812) 接口，创建分类，获得分类 ID。
<li>默认值：0，表示其他分类。</li>
 * @method void setClassId(integer $ClassId) 设置分类ID，用于对媒体进行分类管理，可通过 [创建分类](/document/product/266/7812) 接口，创建分类，获得分类 ID。
<li>默认值：0，表示其他分类。</li>
 * @method string getExpireTime() 获取输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setExpireTime(string $ExpireTime) 设置输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method float getDuration() 获取生成视频的时长，单位：秒。<li>当 ModelName 是 Kling，可选值为 5、10，默认为 5；</li><li>当 ModelName 是 Jimeng，可选值为 5、10，默认为 5；</li><li>当 ModelName 是 Hailuo，可选值为 6、10，默认为 6；</li><li>当 ModelName 是 Vidu，可指定1-10；</li><li>当 ModelName 是 GV，可选值为 8，默认为 8；</li><li>当 ModelName 是 OS，可选值为 4、8、12，默认为 8；</li>
 * @method void setDuration(float $Duration) 设置生成视频的时长，单位：秒。<li>当 ModelName 是 Kling，可选值为 5、10，默认为 5；</li><li>当 ModelName 是 Jimeng，可选值为 5、10，默认为 5；</li><li>当 ModelName 是 Hailuo，可选值为 6、10，默认为 6；</li><li>当 ModelName 是 Vidu，可指定1-10；</li><li>当 ModelName 是 GV，可选值为 8，默认为 8；</li><li>当 ModelName 是 OS，可选值为 4、8、12，默认为 8；</li>
 * @method string getResolution() 获取生成视频的分辨率。
<li>当 ModelName 是 Kling，可选值为 720P、1080P，默认为 720P；</li>
<li>当 ModelName 是 Hailuo，可选值为 768P、1080P，默认为 768P；</li>
<li>当 ModelName 是 Jimeng，可选值为 1080P；</li>
<li>当 ModelName 是 Vidu，可选值为 720P、1080P，默认为 720P；</li>
<li>当 ModelName 是 GV，可选值为 720P、1080P，默认为 720P；</li>
<li>当 ModelName 是 OS，可选值为 720P；</li>
 * @method void setResolution(string $Resolution) 设置生成视频的分辨率。
<li>当 ModelName 是 Kling，可选值为 720P、1080P，默认为 720P；</li>
<li>当 ModelName 是 Hailuo，可选值为 768P、1080P，默认为 768P；</li>
<li>当 ModelName 是 Jimeng，可选值为 1080P；</li>
<li>当 ModelName 是 Vidu，可选值为 720P、1080P，默认为 720P；</li>
<li>当 ModelName 是 GV，可选值为 720P、1080P，默认为 720P；</li>
<li>当 ModelName 是 OS，可选值为 720P；</li>
 * @method string getAspectRatio() 获取指定所生成视频的宽高比。
<li>当 ModelName 是 Kling，当文生视频时，则可选值为 16:9、9:16、 1:1，默认为16:9；</li>
<li>当 ModelName 是 Jimeng，当文生视频时，则可选值为 16:9、4:3、1:1、3:4、9:16、21:9</li>
<li>当 ModelName 是 Vidu，当文生视频时和使用参考图片生成时，则可选值为 16:9、9:16、4:3、3:4、1:1，其中仅版本q2支持4:3、3:4</li>
<li>当 ModelName 是 GV，则可选值为 16:9、9:16，默认为 16:9；</li>
<li>当 ModelName 是 OS，当文生视频时，则可选值为 16:9、9:16，默认为 16:9；</li>
<li>当 ModelName 是 Hailuo，则暂不支持。</li>
 * @method void setAspectRatio(string $AspectRatio) 设置指定所生成视频的宽高比。
<li>当 ModelName 是 Kling，当文生视频时，则可选值为 16:9、9:16、 1:1，默认为16:9；</li>
<li>当 ModelName 是 Jimeng，当文生视频时，则可选值为 16:9、4:3、1:1、3:4、9:16、21:9</li>
<li>当 ModelName 是 Vidu，当文生视频时和使用参考图片生成时，则可选值为 16:9、9:16、4:3、3:4、1:1，其中仅版本q2支持4:3、3:4</li>
<li>当 ModelName 是 GV，则可选值为 16:9、9:16，默认为 16:9；</li>
<li>当 ModelName 是 OS，当文生视频时，则可选值为 16:9、9:16，默认为 16:9；</li>
<li>当 ModelName 是 Hailuo，则暂不支持。</li>
 * @method string getAudioGeneration() 获取是否生成音频。支持的模型包括 GV、OS。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li>
默认值：Enabled
 * @method void setAudioGeneration(string $AudioGeneration) 设置是否生成音频。支持的模型包括 GV、OS。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li>
默认值：Enabled
 * @method string getPersonGeneration() 获取是否允许人物或人脸生成。取值有： <li>AllowAdult：允许生成成人；</li> <li>Disallowed：禁止在图片中包含人物或人脸；</li> 
 * @method void setPersonGeneration(string $PersonGeneration) 设置是否允许人物或人脸生成。取值有： <li>AllowAdult：允许生成成人；</li> <li>Disallowed：禁止在图片中包含人物或人脸；</li> 
 * @method string getInputComplianceCheck() 获取是否开启输入内容的合规性检查。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li> 
 * @method void setInputComplianceCheck(string $InputComplianceCheck) 设置是否开启输入内容的合规性检查。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li> 
 * @method string getOutputComplianceCheck() 获取是否开启输出内容的合规性检查。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li> 
 * @method void setOutputComplianceCheck(string $OutputComplianceCheck) 设置是否开启输出内容的合规性检查。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li> 
 * @method string getEnhanceSwitch() 获取是否启用视频增强。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li> 
说明：
1. 对于选择的分辨率超过模型可生成分辨率时，默认会启用增强。
2. 对于模型可以直出的分辨率，也可以主动选择模型直出低分辨率，使用增强获得指定分辨率。
 * @method void setEnhanceSwitch(string $EnhanceSwitch) 设置是否启用视频增强。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li> 
说明：
1. 对于选择的分辨率超过模型可生成分辨率时，默认会启用增强。
2. 对于模型可以直出的分辨率，也可以主动选择模型直出低分辨率，使用增强获得指定分辨率。
 */
class AigcVideoOutputConfig extends AbstractModel
{
    /**
     * @var string 存储模式。取值有： <li>Permanent：永久存储，生成的视频文件将存储到云点播，可在事件通知中获取到 FileId；</li> <li>Temporary：临时存储，生成的视频文件不会存储到云点播，可在事件通知中获取到临时访问的 URL；</li>
默认值：Temporary
     */
    public $StorageMode;

    /**
     * @var string 输出媒体文件名，最长 64 个字符。缺省由系统指定生成文件名。
     */
    public $MediaName;

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
     * @var float 生成视频的时长，单位：秒。<li>当 ModelName 是 Kling，可选值为 5、10，默认为 5；</li><li>当 ModelName 是 Jimeng，可选值为 5、10，默认为 5；</li><li>当 ModelName 是 Hailuo，可选值为 6、10，默认为 6；</li><li>当 ModelName 是 Vidu，可指定1-10；</li><li>当 ModelName 是 GV，可选值为 8，默认为 8；</li><li>当 ModelName 是 OS，可选值为 4、8、12，默认为 8；</li>
     */
    public $Duration;

    /**
     * @var string 生成视频的分辨率。
<li>当 ModelName 是 Kling，可选值为 720P、1080P，默认为 720P；</li>
<li>当 ModelName 是 Hailuo，可选值为 768P、1080P，默认为 768P；</li>
<li>当 ModelName 是 Jimeng，可选值为 1080P；</li>
<li>当 ModelName 是 Vidu，可选值为 720P、1080P，默认为 720P；</li>
<li>当 ModelName 是 GV，可选值为 720P、1080P，默认为 720P；</li>
<li>当 ModelName 是 OS，可选值为 720P；</li>
     */
    public $Resolution;

    /**
     * @var string 指定所生成视频的宽高比。
<li>当 ModelName 是 Kling，当文生视频时，则可选值为 16:9、9:16、 1:1，默认为16:9；</li>
<li>当 ModelName 是 Jimeng，当文生视频时，则可选值为 16:9、4:3、1:1、3:4、9:16、21:9</li>
<li>当 ModelName 是 Vidu，当文生视频时和使用参考图片生成时，则可选值为 16:9、9:16、4:3、3:4、1:1，其中仅版本q2支持4:3、3:4</li>
<li>当 ModelName 是 GV，则可选值为 16:9、9:16，默认为 16:9；</li>
<li>当 ModelName 是 OS，当文生视频时，则可选值为 16:9、9:16，默认为 16:9；</li>
<li>当 ModelName 是 Hailuo，则暂不支持。</li>
     */
    public $AspectRatio;

    /**
     * @var string 是否生成音频。支持的模型包括 GV、OS。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li>
默认值：Enabled
     */
    public $AudioGeneration;

    /**
     * @var string 是否允许人物或人脸生成。取值有： <li>AllowAdult：允许生成成人；</li> <li>Disallowed：禁止在图片中包含人物或人脸；</li> 
     */
    public $PersonGeneration;

    /**
     * @var string 是否开启输入内容的合规性检查。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li> 
     */
    public $InputComplianceCheck;

    /**
     * @var string 是否开启输出内容的合规性检查。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li> 
     */
    public $OutputComplianceCheck;

    /**
     * @var string 是否启用视频增强。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li> 
说明：
1. 对于选择的分辨率超过模型可生成分辨率时，默认会启用增强。
2. 对于模型可以直出的分辨率，也可以主动选择模型直出低分辨率，使用增强获得指定分辨率。
     */
    public $EnhanceSwitch;

    /**
     * @param string $StorageMode 存储模式。取值有： <li>Permanent：永久存储，生成的视频文件将存储到云点播，可在事件通知中获取到 FileId；</li> <li>Temporary：临时存储，生成的视频文件不会存储到云点播，可在事件通知中获取到临时访问的 URL；</li>
默认值：Temporary
     * @param string $MediaName 输出媒体文件名，最长 64 个字符。缺省由系统指定生成文件名。
     * @param integer $ClassId 分类ID，用于对媒体进行分类管理，可通过 [创建分类](/document/product/266/7812) 接口，创建分类，获得分类 ID。
<li>默认值：0，表示其他分类。</li>
     * @param string $ExpireTime 输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param float $Duration 生成视频的时长，单位：秒。<li>当 ModelName 是 Kling，可选值为 5、10，默认为 5；</li><li>当 ModelName 是 Jimeng，可选值为 5、10，默认为 5；</li><li>当 ModelName 是 Hailuo，可选值为 6、10，默认为 6；</li><li>当 ModelName 是 Vidu，可指定1-10；</li><li>当 ModelName 是 GV，可选值为 8，默认为 8；</li><li>当 ModelName 是 OS，可选值为 4、8、12，默认为 8；</li>
     * @param string $Resolution 生成视频的分辨率。
<li>当 ModelName 是 Kling，可选值为 720P、1080P，默认为 720P；</li>
<li>当 ModelName 是 Hailuo，可选值为 768P、1080P，默认为 768P；</li>
<li>当 ModelName 是 Jimeng，可选值为 1080P；</li>
<li>当 ModelName 是 Vidu，可选值为 720P、1080P，默认为 720P；</li>
<li>当 ModelName 是 GV，可选值为 720P、1080P，默认为 720P；</li>
<li>当 ModelName 是 OS，可选值为 720P；</li>
     * @param string $AspectRatio 指定所生成视频的宽高比。
<li>当 ModelName 是 Kling，当文生视频时，则可选值为 16:9、9:16、 1:1，默认为16:9；</li>
<li>当 ModelName 是 Jimeng，当文生视频时，则可选值为 16:9、4:3、1:1、3:4、9:16、21:9</li>
<li>当 ModelName 是 Vidu，当文生视频时和使用参考图片生成时，则可选值为 16:9、9:16、4:3、3:4、1:1，其中仅版本q2支持4:3、3:4</li>
<li>当 ModelName 是 GV，则可选值为 16:9、9:16，默认为 16:9；</li>
<li>当 ModelName 是 OS，当文生视频时，则可选值为 16:9、9:16，默认为 16:9；</li>
<li>当 ModelName 是 Hailuo，则暂不支持。</li>
     * @param string $AudioGeneration 是否生成音频。支持的模型包括 GV、OS。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li>
默认值：Enabled
     * @param string $PersonGeneration 是否允许人物或人脸生成。取值有： <li>AllowAdult：允许生成成人；</li> <li>Disallowed：禁止在图片中包含人物或人脸；</li> 
     * @param string $InputComplianceCheck 是否开启输入内容的合规性检查。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li> 
     * @param string $OutputComplianceCheck 是否开启输出内容的合规性检查。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li> 
     * @param string $EnhanceSwitch 是否启用视频增强。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li> 
说明：
1. 对于选择的分辨率超过模型可生成分辨率时，默认会启用增强。
2. 对于模型可以直出的分辨率，也可以主动选择模型直出低分辨率，使用增强获得指定分辨率。
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
    }
}
