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
 * AIGC 生图任务的输出媒体文件配置。
 *
 * @method string getStorageMode() 获取<p>存储模式。取值有： <li>Permanent：永久存储，生成的图片文件将存储到云点播，可在事件通知中获取到 FileId；</li> <li>Temporary：临时存储，生成的图片文件不会存储到云点播，可在事件通知中获取到临时访问的 URL；</li><br>默认值：Temporary</p>
 * @method void setStorageMode(string $StorageMode) 设置<p>存储模式。取值有： <li>Permanent：永久存储，生成的图片文件将存储到云点播，可在事件通知中获取到 FileId；</li> <li>Temporary：临时存储，生成的图片文件不会存储到云点播，可在事件通知中获取到临时访问的 URL；</li><br>默认值：Temporary</p>
 * @method string getMediaName() 获取<p>输出文件名，最长 64 个字符。缺省由系统指定生成文件名。</p>
 * @method void setMediaName(string $MediaName) 设置<p>输出文件名，最长 64 个字符。缺省由系统指定生成文件名。</p>
 * @method integer getClassId() 获取<p>分类ID，用于对媒体进行分类管理，可通过 <a href="/document/product/266/7812">创建分类</a> 接口，创建分类，获得分类 ID。</p><li>默认值：0，表示其他分类。</li>
 * @method void setClassId(integer $ClassId) 设置<p>分类ID，用于对媒体进行分类管理，可通过 <a href="/document/product/266/7812">创建分类</a> 接口，创建分类，获得分类 ID。</p><li>默认值：0，表示其他分类。</li>
 * @method string getExpireTime() 获取<p>输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
 * @method string getResolution() 获取<p>生成图片的分辨率。各模型可选值：</p><ul><li>GG 2.5：1K、2K、4K，默认1K；</li><li>GG 3.0：1K、2K、4K，默认1K；</li><li>GG 3.1：512、1K、2K、4K，默认1K；</li><li>Kling 2.1：1k、2k，默认1k；</li><li>Kling 3.0：1k、2k，默认1k；</li><li>Kling 3.0-Omni：1k、2k、4k，默认1k；</li><li>SI 4.0：1K、2K、4K，默认1K；</li><li>SI 4.5：2K、4K，默认2K；</li><li>SI 5.0-lite：2K、3K，默认2K；</li><li>Vidu q2：1080p、2K、4K，默认1080p；</li><li>Hunyuan 3.0：宽、高均在 [512, 2048] 像素范围内，宽高乘积 ≤ 1024:1024 像素。示例：1024:1024；</li><li>Qwen 2.0：支持自由设置宽高，输出图像总像素需在512 * 512 至 2048 * 2048之间。默认分辨率为1024*1024；</li><li>Qwen 0925：不支持；</li></ul>
 * @method void setResolution(string $Resolution) 设置<p>生成图片的分辨率。各模型可选值：</p><ul><li>GG 2.5：1K、2K、4K，默认1K；</li><li>GG 3.0：1K、2K、4K，默认1K；</li><li>GG 3.1：512、1K、2K、4K，默认1K；</li><li>Kling 2.1：1k、2k，默认1k；</li><li>Kling 3.0：1k、2k，默认1k；</li><li>Kling 3.0-Omni：1k、2k、4k，默认1k；</li><li>SI 4.0：1K、2K、4K，默认1K；</li><li>SI 4.5：2K、4K，默认2K；</li><li>SI 5.0-lite：2K、3K，默认2K；</li><li>Vidu q2：1080p、2K、4K，默认1080p；</li><li>Hunyuan 3.0：宽、高均在 [512, 2048] 像素范围内，宽高乘积 ≤ 1024:1024 像素。示例：1024:1024；</li><li>Qwen 2.0：支持自由设置宽高，输出图像总像素需在512 * 512 至 2048 * 2048之间。默认分辨率为1024*1024；</li><li>Qwen 0925：不支持；</li></ul>
 * @method string getAspectRatio() 获取<p>指定所生成图片的宽高比。</p><ul><li>GG 2.5：1:1, 2:3, 3:2, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, 21:9；</li><li>GG 3.0：1:1, 2:3, 3:2, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, 21:9；</li><li>GG 3.1：1:1, 1:4, 1:8, 2:3, 3:2, 3:4, 4:1, 4:3, 4:5, 5:4, 8:1, 9:16, 16:9, 21:9；</li><li>Kling 2.1：16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9；</li><li>Kling 3.0：16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9；</li><li>Kling 3.0-Omni：16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9；</li><li>Vidu q2：16:9、9:16、1:1、3:4、4:3、21:9、2:3、3:2；</li><li>SI 4.0：<strong>不支持</strong>此参数，可通过prompt指定16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9；</li><li>SI 4.5：<strong>不支持</strong>此参数，可通过prompt指定16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9；</li><li>SI 5.0-lite：<strong>不支持</strong>此参数，可通过prompt指定16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9；</li><li>Hunyuan 3.0：不支持；</li><li>Qwen 2.0：不支持；</li><li>Qwen 0925：不支持；</li></ul>
 * @method void setAspectRatio(string $AspectRatio) 设置<p>指定所生成图片的宽高比。</p><ul><li>GG 2.5：1:1, 2:3, 3:2, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, 21:9；</li><li>GG 3.0：1:1, 2:3, 3:2, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, 21:9；</li><li>GG 3.1：1:1, 1:4, 1:8, 2:3, 3:2, 3:4, 4:1, 4:3, 4:5, 5:4, 8:1, 9:16, 16:9, 21:9；</li><li>Kling 2.1：16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9；</li><li>Kling 3.0：16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9；</li><li>Kling 3.0-Omni：16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9；</li><li>Vidu q2：16:9、9:16、1:1、3:4、4:3、21:9、2:3、3:2；</li><li>SI 4.0：<strong>不支持</strong>此参数，可通过prompt指定16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9；</li><li>SI 4.5：<strong>不支持</strong>此参数，可通过prompt指定16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9；</li><li>SI 5.0-lite：<strong>不支持</strong>此参数，可通过prompt指定16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9；</li><li>Hunyuan 3.0：不支持；</li><li>Qwen 2.0：不支持；</li><li>Qwen 0925：不支持；</li></ul>
 * @method string getPersonGeneration() 获取<p>是否允许人物或人脸生成。取值有： <li>AllowAdult：允许生成成人；</li> <li>Disallowed：禁止在图片中包含人物或人脸；</li></p>
 * @method void setPersonGeneration(string $PersonGeneration) 设置<p>是否允许人物或人脸生成。取值有： <li>AllowAdult：允许生成成人；</li> <li>Disallowed：禁止在图片中包含人物或人脸；</li></p>
 * @method string getInputComplianceCheck() 获取<p>是否开启输入内容的合规性检查。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
 * @method void setInputComplianceCheck(string $InputComplianceCheck) 设置<p>是否开启输入内容的合规性检查。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
 * @method string getOutputComplianceCheck() 获取<p>是否开启输出内容的合规性检查。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
 * @method void setOutputComplianceCheck(string $OutputComplianceCheck) 设置<p>是否开启输出内容的合规性检查。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
 */
class AigcImageOutputConfig extends AbstractModel
{
    /**
     * @var string <p>存储模式。取值有： <li>Permanent：永久存储，生成的图片文件将存储到云点播，可在事件通知中获取到 FileId；</li> <li>Temporary：临时存储，生成的图片文件不会存储到云点播，可在事件通知中获取到临时访问的 URL；</li><br>默认值：Temporary</p>
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
     * @var string <p>生成图片的分辨率。各模型可选值：</p><ul><li>GG 2.5：1K、2K、4K，默认1K；</li><li>GG 3.0：1K、2K、4K，默认1K；</li><li>GG 3.1：512、1K、2K、4K，默认1K；</li><li>Kling 2.1：1k、2k，默认1k；</li><li>Kling 3.0：1k、2k，默认1k；</li><li>Kling 3.0-Omni：1k、2k、4k，默认1k；</li><li>SI 4.0：1K、2K、4K，默认1K；</li><li>SI 4.5：2K、4K，默认2K；</li><li>SI 5.0-lite：2K、3K，默认2K；</li><li>Vidu q2：1080p、2K、4K，默认1080p；</li><li>Hunyuan 3.0：宽、高均在 [512, 2048] 像素范围内，宽高乘积 ≤ 1024:1024 像素。示例：1024:1024；</li><li>Qwen 2.0：支持自由设置宽高，输出图像总像素需在512 * 512 至 2048 * 2048之间。默认分辨率为1024*1024；</li><li>Qwen 0925：不支持；</li></ul>
     */
    public $Resolution;

    /**
     * @var string <p>指定所生成图片的宽高比。</p><ul><li>GG 2.5：1:1, 2:3, 3:2, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, 21:9；</li><li>GG 3.0：1:1, 2:3, 3:2, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, 21:9；</li><li>GG 3.1：1:1, 1:4, 1:8, 2:3, 3:2, 3:4, 4:1, 4:3, 4:5, 5:4, 8:1, 9:16, 16:9, 21:9；</li><li>Kling 2.1：16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9；</li><li>Kling 3.0：16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9；</li><li>Kling 3.0-Omni：16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9；</li><li>Vidu q2：16:9、9:16、1:1、3:4、4:3、21:9、2:3、3:2；</li><li>SI 4.0：<strong>不支持</strong>此参数，可通过prompt指定16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9；</li><li>SI 4.5：<strong>不支持</strong>此参数，可通过prompt指定16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9；</li><li>SI 5.0-lite：<strong>不支持</strong>此参数，可通过prompt指定16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9；</li><li>Hunyuan 3.0：不支持；</li><li>Qwen 2.0：不支持；</li><li>Qwen 0925：不支持；</li></ul>
     */
    public $AspectRatio;

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
     * @param string $StorageMode <p>存储模式。取值有： <li>Permanent：永久存储，生成的图片文件将存储到云点播，可在事件通知中获取到 FileId；</li> <li>Temporary：临时存储，生成的图片文件不会存储到云点播，可在事件通知中获取到临时访问的 URL；</li><br>默认值：Temporary</p>
     * @param string $MediaName <p>输出文件名，最长 64 个字符。缺省由系统指定生成文件名。</p>
     * @param integer $ClassId <p>分类ID，用于对媒体进行分类管理，可通过 <a href="/document/product/266/7812">创建分类</a> 接口，创建分类，获得分类 ID。</p><li>默认值：0，表示其他分类。</li>
     * @param string $ExpireTime <p>输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
     * @param string $Resolution <p>生成图片的分辨率。各模型可选值：</p><ul><li>GG 2.5：1K、2K、4K，默认1K；</li><li>GG 3.0：1K、2K、4K，默认1K；</li><li>GG 3.1：512、1K、2K、4K，默认1K；</li><li>Kling 2.1：1k、2k，默认1k；</li><li>Kling 3.0：1k、2k，默认1k；</li><li>Kling 3.0-Omni：1k、2k、4k，默认1k；</li><li>SI 4.0：1K、2K、4K，默认1K；</li><li>SI 4.5：2K、4K，默认2K；</li><li>SI 5.0-lite：2K、3K，默认2K；</li><li>Vidu q2：1080p、2K、4K，默认1080p；</li><li>Hunyuan 3.0：宽、高均在 [512, 2048] 像素范围内，宽高乘积 ≤ 1024:1024 像素。示例：1024:1024；</li><li>Qwen 2.0：支持自由设置宽高，输出图像总像素需在512 * 512 至 2048 * 2048之间。默认分辨率为1024*1024；</li><li>Qwen 0925：不支持；</li></ul>
     * @param string $AspectRatio <p>指定所生成图片的宽高比。</p><ul><li>GG 2.5：1:1, 2:3, 3:2, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, 21:9；</li><li>GG 3.0：1:1, 2:3, 3:2, 3:4, 4:3, 4:5, 5:4, 9:16, 16:9, 21:9；</li><li>GG 3.1：1:1, 1:4, 1:8, 2:3, 3:2, 3:4, 4:1, 4:3, 4:5, 5:4, 8:1, 9:16, 16:9, 21:9；</li><li>Kling 2.1：16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9；</li><li>Kling 3.0：16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9；</li><li>Kling 3.0-Omni：16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9；</li><li>Vidu q2：16:9、9:16、1:1、3:4、4:3、21:9、2:3、3:2；</li><li>SI 4.0：<strong>不支持</strong>此参数，可通过prompt指定16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9；</li><li>SI 4.5：<strong>不支持</strong>此参数，可通过prompt指定16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9；</li><li>SI 5.0-lite：<strong>不支持</strong>此参数，可通过prompt指定16:9, 9:16, 1:1, 4:3, 3:4, 3:2, 2:3, 21:9；</li><li>Hunyuan 3.0：不支持；</li><li>Qwen 2.0：不支持；</li><li>Qwen 0925：不支持；</li></ul>
     * @param string $PersonGeneration <p>是否允许人物或人脸生成。取值有： <li>AllowAdult：允许生成成人；</li> <li>Disallowed：禁止在图片中包含人物或人脸；</li></p>
     * @param string $InputComplianceCheck <p>是否开启输入内容的合规性检查。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
     * @param string $OutputComplianceCheck <p>是否开启输出内容的合规性检查。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
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

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
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
    }
}
