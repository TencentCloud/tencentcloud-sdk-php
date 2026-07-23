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
 * 音画质检测异常结果信息。
 *
 * @method string getType() 获取<p>异常类型，取值范围：</p><li>Jitter：抖动；</li><li>Blur：模糊；</li><li>LowLighting：低光照；</li><li>HighLighting：过曝；</li><li>CrashScreen：花屏；</li><li>BlackWhiteEdge：黑白边；</li><li>SolidColorScreen：纯色屏；</li><li>Noise：噪点；</li><li>Mosaic：马赛克；</li><li>QRCode：二维码；</li><li>AppletCode：小程序码；</li><li>BarCode：条形码；</li><li>LowVoice：低音；</li><li>HighVoice：爆音；</li><li>NoVoice：静音；</li><li>LowEvaluation：无参考打分低于阈值。</li><li> LowColorfulness：色彩丰富度信息。</li><li> AudioVideoAsync：音画不同步。</li><li> AudioSubtitleAsync：音频与字幕不同步。</li><li> VideoAesthetic：视频美学评分低。</li><li> AudioDiscontinuity：音频不连续。</li><li> AudioVolume：音量信息。</li><li> AudioLoudnessJitter：音量变化剧烈。</li><li> BackgroundMusic：存在背景音乐。</li><li> AudioEvaluation：低音质。</li><li> AudioNoise：噪声。</li><li> AudioSpeechQuality：语音清晰度低。</li><li> AudioReverb：混响程度高。</li><li> AudioHighLoudness：响度失真。</li>
 * @method void setType(string $Type) 设置<p>异常类型，取值范围：</p><li>Jitter：抖动；</li><li>Blur：模糊；</li><li>LowLighting：低光照；</li><li>HighLighting：过曝；</li><li>CrashScreen：花屏；</li><li>BlackWhiteEdge：黑白边；</li><li>SolidColorScreen：纯色屏；</li><li>Noise：噪点；</li><li>Mosaic：马赛克；</li><li>QRCode：二维码；</li><li>AppletCode：小程序码；</li><li>BarCode：条形码；</li><li>LowVoice：低音；</li><li>HighVoice：爆音；</li><li>NoVoice：静音；</li><li>LowEvaluation：无参考打分低于阈值。</li><li> LowColorfulness：色彩丰富度信息。</li><li> AudioVideoAsync：音画不同步。</li><li> AudioSubtitleAsync：音频与字幕不同步。</li><li> VideoAesthetic：视频美学评分低。</li><li> AudioDiscontinuity：音频不连续。</li><li> AudioVolume：音量信息。</li><li> AudioLoudnessJitter：音量变化剧烈。</li><li> BackgroundMusic：存在背景音乐。</li><li> AudioEvaluation：低音质。</li><li> AudioNoise：噪声。</li><li> AudioSpeechQuality：语音清晰度低。</li><li> AudioReverb：混响程度高。</li><li> AudioHighLoudness：响度失真。</li>
 * @method array getSegmentSet() 获取<p>异常片段列表。<br><font color="red">注意：</font> 该列表最多仅展示前 100 个元素。如希望获得完整结果，请从 SegmentSetFileUrl 对应的文件中获取。</p>
 * @method void setSegmentSet(array $SegmentSet) 设置<p>异常片段列表。<br><font color="red">注意：</font> 该列表最多仅展示前 100 个元素。如希望获得完整结果，请从 SegmentSetFileUrl 对应的文件中获取。</p>
 * @method string getSegmentSetFileUrl() 获取<p>异常片段列表文件 URL。文件 内容 为  JSON，数据结构与 SegmentSet 字段一致。（文件不会永久存储，到达SegmentSetFileUrlExpireTime 时间点后文件将被删除）。</p>
 * @method void setSegmentSetFileUrl(string $SegmentSetFileUrl) 设置<p>异常片段列表文件 URL。文件 内容 为  JSON，数据结构与 SegmentSet 字段一致。（文件不会永久存储，到达SegmentSetFileUrlExpireTime 时间点后文件将被删除）。</p>
 * @method string getSegmentSetFileUrlExpireTime() 获取<p>异常片段列表文件 URL 失效时间，使用  <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 * @method void setSegmentSetFileUrlExpireTime(string $SegmentSetFileUrlExpireTime) 设置<p>异常片段列表文件 URL 失效时间，使用  <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
 */
class QualityInspectResultItem extends AbstractModel
{
    /**
     * @var string <p>异常类型，取值范围：</p><li>Jitter：抖动；</li><li>Blur：模糊；</li><li>LowLighting：低光照；</li><li>HighLighting：过曝；</li><li>CrashScreen：花屏；</li><li>BlackWhiteEdge：黑白边；</li><li>SolidColorScreen：纯色屏；</li><li>Noise：噪点；</li><li>Mosaic：马赛克；</li><li>QRCode：二维码；</li><li>AppletCode：小程序码；</li><li>BarCode：条形码；</li><li>LowVoice：低音；</li><li>HighVoice：爆音；</li><li>NoVoice：静音；</li><li>LowEvaluation：无参考打分低于阈值。</li><li> LowColorfulness：色彩丰富度信息。</li><li> AudioVideoAsync：音画不同步。</li><li> AudioSubtitleAsync：音频与字幕不同步。</li><li> VideoAesthetic：视频美学评分低。</li><li> AudioDiscontinuity：音频不连续。</li><li> AudioVolume：音量信息。</li><li> AudioLoudnessJitter：音量变化剧烈。</li><li> BackgroundMusic：存在背景音乐。</li><li> AudioEvaluation：低音质。</li><li> AudioNoise：噪声。</li><li> AudioSpeechQuality：语音清晰度低。</li><li> AudioReverb：混响程度高。</li><li> AudioHighLoudness：响度失真。</li>
     */
    public $Type;

    /**
     * @var array <p>异常片段列表。<br><font color="red">注意：</font> 该列表最多仅展示前 100 个元素。如希望获得完整结果，请从 SegmentSetFileUrl 对应的文件中获取。</p>
     */
    public $SegmentSet;

    /**
     * @var string <p>异常片段列表文件 URL。文件 内容 为  JSON，数据结构与 SegmentSet 字段一致。（文件不会永久存储，到达SegmentSetFileUrlExpireTime 时间点后文件将被删除）。</p>
     */
    public $SegmentSetFileUrl;

    /**
     * @var string <p>异常片段列表文件 URL 失效时间，使用  <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
     */
    public $SegmentSetFileUrlExpireTime;

    /**
     * @param string $Type <p>异常类型，取值范围：</p><li>Jitter：抖动；</li><li>Blur：模糊；</li><li>LowLighting：低光照；</li><li>HighLighting：过曝；</li><li>CrashScreen：花屏；</li><li>BlackWhiteEdge：黑白边；</li><li>SolidColorScreen：纯色屏；</li><li>Noise：噪点；</li><li>Mosaic：马赛克；</li><li>QRCode：二维码；</li><li>AppletCode：小程序码；</li><li>BarCode：条形码；</li><li>LowVoice：低音；</li><li>HighVoice：爆音；</li><li>NoVoice：静音；</li><li>LowEvaluation：无参考打分低于阈值。</li><li> LowColorfulness：色彩丰富度信息。</li><li> AudioVideoAsync：音画不同步。</li><li> AudioSubtitleAsync：音频与字幕不同步。</li><li> VideoAesthetic：视频美学评分低。</li><li> AudioDiscontinuity：音频不连续。</li><li> AudioVolume：音量信息。</li><li> AudioLoudnessJitter：音量变化剧烈。</li><li> BackgroundMusic：存在背景音乐。</li><li> AudioEvaluation：低音质。</li><li> AudioNoise：噪声。</li><li> AudioSpeechQuality：语音清晰度低。</li><li> AudioReverb：混响程度高。</li><li> AudioHighLoudness：响度失真。</li>
     * @param array $SegmentSet <p>异常片段列表。<br><font color="red">注意：</font> 该列表最多仅展示前 100 个元素。如希望获得完整结果，请从 SegmentSetFileUrl 对应的文件中获取。</p>
     * @param string $SegmentSetFileUrl <p>异常片段列表文件 URL。文件 内容 为  JSON，数据结构与 SegmentSet 字段一致。（文件不会永久存储，到达SegmentSetFileUrlExpireTime 时间点后文件将被删除）。</p>
     * @param string $SegmentSetFileUrlExpireTime <p>异常片段列表文件 URL 失效时间，使用  <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式</a>。</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new QualityInspectItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }

        if (array_key_exists("SegmentSetFileUrl",$param) and $param["SegmentSetFileUrl"] !== null) {
            $this->SegmentSetFileUrl = $param["SegmentSetFileUrl"];
        }

        if (array_key_exists("SegmentSetFileUrlExpireTime",$param) and $param["SegmentSetFileUrlExpireTime"] !== null) {
            $this->SegmentSetFileUrlExpireTime = $param["SegmentSetFileUrlExpireTime"];
        }
    }
}
