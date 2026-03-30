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
 * 视频流配置参数
 *
 * @method string getCodec() 获取<p>视频流的编码格式，可选值：</p><li>libx264：H.264 编码；</li><li>libx265：H.265 编码；</li><li>av1：AOMedia Video 1 编码；</li><li>H.266：H.266 编码。</li><font color="red">注意：</font><li> av1，H.266 编码容器目前只支持 mp4 ；</li><li> H.266 目前只支持恒定 CRF 码率控制方式。 </li>
 * @method void setCodec(string $Codec) 设置<p>视频流的编码格式，可选值：</p><li>libx264：H.264 编码；</li><li>libx265：H.265 编码；</li><li>av1：AOMedia Video 1 编码；</li><li>H.266：H.266 编码。</li><font color="red">注意：</font><li> av1，H.266 编码容器目前只支持 mp4 ；</li><li> H.266 目前只支持恒定 CRF 码率控制方式。 </li>
 * @method integer getFps() 获取<p>视频帧率，取值范围：[0, 100]，单位：Hz。<br>当取值为 0，表示帧率和原始视频保持一致。</p>
 * @method void setFps(integer $Fps) 设置<p>视频帧率，取值范围：[0, 100]，单位：Hz。<br>当取值为 0，表示帧率和原始视频保持一致。</p>
 * @method integer getBitrate() 获取<p>视频流的码率，取值范围：0 和 [128, 100000]，单位：kbps。<br>当取值为 0，表示由云点播自动设置码率。</p>
 * @method void setBitrate(integer $Bitrate) 设置<p>视频流的码率，取值范围：0 和 [128, 100000]，单位：kbps。<br>当取值为 0，表示由云点播自动设置码率。</p>
 * @method string getResolutionAdaptive() 获取<p>分辨率自适应，可选值：</p><li>open：开启，此时，Width 代表视频的长边，Height 表示视频的短边；</li><li>close：关闭，此时，Width 代表视频的宽度，Height 表示视频的高度。</li>默认值：open。
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) 设置<p>分辨率自适应，可选值：</p><li>open：开启，此时，Width 代表视频的长边，Height 表示视频的短边；</li><li>close：关闭，此时，Width 代表视频的宽度，Height 表示视频的高度。</li>默认值：open。
 * @method integer getWidth() 获取<p>视频流宽度（或长边）的最大值，取值范围：0 和 [128, 8192]，单位：px。</p><li>当 Width、Height 均为 0，则分辨率同源；</li><li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li><li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li><li>当 Width、Height 均非 0，则分辨率按用户指定。</li>默认值：0。
 * @method void setWidth(integer $Width) 设置<p>视频流宽度（或长边）的最大值，取值范围：0 和 [128, 8192]，单位：px。</p><li>当 Width、Height 均为 0，则分辨率同源；</li><li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li><li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li><li>当 Width、Height 均非 0，则分辨率按用户指定。</li>默认值：0。
 * @method integer getHeight() 获取<p>视频流高度（或短边）的最大值，取值范围：0 和 [128, 8192]，单位：px。</p><li>当 Width、Height 均为 0，则分辨率同源；</li><li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li><li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li><li>当 Width、Height 均非 0，则分辨率按用户指定。</li>默认值：0。
 * @method void setHeight(integer $Height) 设置<p>视频流高度（或短边）的最大值，取值范围：0 和 [128, 8192]，单位：px。</p><li>当 Width、Height 均为 0，则分辨率同源；</li><li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li><li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li><li>当 Width、Height 均非 0，则分辨率按用户指定。</li>默认值：0。
 * @method string getFillType() 获取<p>填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式：</p><li> stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“；</li><li>black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。</li><li>white：留白，保持视频宽高比不变，边缘剩余部分使用白色填充。</li><li>gauss：高斯模糊，保持视频宽高比不变，边缘剩余部分使用高斯模糊填充。</li>默认值：black 。
 * @method void setFillType(string $FillType) 设置<p>填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式：</p><li> stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“；</li><li>black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。</li><li>white：留白，保持视频宽高比不变，边缘剩余部分使用白色填充。</li><li>gauss：高斯模糊，保持视频宽高比不变，边缘剩余部分使用高斯模糊填充。</li>默认值：black 。
 * @method integer getVcrf() 获取<p>视频恒定码率控制因子，取值范围为[1, 51]。</p><p><font color="red">注意：</font></p><li>如果指定该参数，将使用 CRF 的码率控制方式做转码（视频码率将不再生效）；</li><li>当指定视频流编码格式为 H.266 时，该字段必填，推荐值为 28；</li><li>如果没有特殊需求，不建议指定该参数。</li>
 * @method void setVcrf(integer $Vcrf) 设置<p>视频恒定码率控制因子，取值范围为[1, 51]。</p><p><font color="red">注意：</font></p><li>如果指定该参数，将使用 CRF 的码率控制方式做转码（视频码率将不再生效）；</li><li>当指定视频流编码格式为 H.266 时，该字段必填，推荐值为 28；</li><li>如果没有特殊需求，不建议指定该参数。</li>
 * @method integer getGop() 获取<p>关键帧 I 帧之间的间隔，取值范围：0 和 [1, 100000]，单位：帧数。<br>当填 0 或不填时，系统将自动设置 gop 长度。</p>
 * @method void setGop(integer $Gop) 设置<p>关键帧 I 帧之间的间隔，取值范围：0 和 [1, 100000]，单位：帧数。<br>当填 0 或不填时，系统将自动设置 gop 长度。</p>
 * @method string getGopUnit() 获取<p>Gop数值单位。</p><p>枚举值：</p><ul><li>frame： 表示帧数。</li><li>second： 表示秒数。</li></ul><p>默认值：frame</p>
 * @method void setGopUnit(string $GopUnit) 设置<p>Gop数值单位。</p><p>枚举值：</p><ul><li>frame： 表示帧数。</li><li>second： 表示秒数。</li></ul><p>默认值：frame</p>
 * @method string getPreserveHDRSwitch() 获取<p>当原始视频为 HDR（High Dynamic Range）时，转码输出是否依然保持 HDR。取值范围：</p><li>ON: 如果原始文件是 HDR，则转码输出保持 HDR；否则转码输出为 SDR （Standard Dynamic Range）。</li><li>OFF: 无论原始文件是 HDR 还是 SDR，转码输出均为 SDR。</li>默认值：OFF。
 * @method void setPreserveHDRSwitch(string $PreserveHDRSwitch) 设置<p>当原始视频为 HDR（High Dynamic Range）时，转码输出是否依然保持 HDR。取值范围：</p><li>ON: 如果原始文件是 HDR，则转码输出保持 HDR；否则转码输出为 SDR （Standard Dynamic Range）。</li><li>OFF: 无论原始文件是 HDR 还是 SDR，转码输出均为 SDR。</li>默认值：OFF。
 * @method string getCodecTag() 获取<p>编码标签，仅当视频流的编码格式为 H.265 编码时有效，可选值：</p><li>hvc1 表示 hvc1 标签；</li><li>hev1 表示 hev1 标签。 </li>默认值：hvc1。
 * @method void setCodecTag(string $CodecTag) 设置<p>编码标签，仅当视频流的编码格式为 H.265 编码时有效，可选值：</p><li>hvc1 表示 hvc1 标签；</li><li>hev1 表示 hev1 标签。 </li>默认值：hvc1。
 * @method string getMode() 获取<p>码率控制模式。</p><p>枚举值：</p><ul><li>VBR： Variable Bit Rate，动态比特率，根据视频画面的复杂度动态调整输出的码率，使得画面质量更高，适用于存储场景和对画面质量要求较高的应用。</li><li>ABR： Average Bit Rate，平均比特率，尽量保持输出视频的平均码率稳定，但允许短期内的码率波动，适用于需要在保持一定画质的情况下尽量减少整体码率的场景。</li><li>CBR： Constant Bit Rate，恒定比特率，指视频编码时输出的码率保持恒定不变，不考虑画面复杂度的变化，适用于对网络带宽要求较为严格的场景，如直播等。</li><li>VCRF： 恒定质量因子，通过设定一个质量因子来控制视频质量，实现视频的恒定质量编码，码率会根据内容的复杂度自动调整，适用于希望保持一定画质的场景。</li></ul><p>默认值：VBR</p>
 * @method void setMode(string $Mode) 设置<p>码率控制模式。</p><p>枚举值：</p><ul><li>VBR： Variable Bit Rate，动态比特率，根据视频画面的复杂度动态调整输出的码率，使得画面质量更高，适用于存储场景和对画面质量要求较高的应用。</li><li>ABR： Average Bit Rate，平均比特率，尽量保持输出视频的平均码率稳定，但允许短期内的码率波动，适用于需要在保持一定画质的情况下尽量减少整体码率的场景。</li><li>CBR： Constant Bit Rate，恒定比特率，指视频编码时输出的码率保持恒定不变，不考虑画面复杂度的变化，适用于对网络带宽要求较为严格的场景，如直播等。</li><li>VCRF： 恒定质量因子，通过设定一个质量因子来控制视频质量，实现视频的恒定质量编码，码率会根据内容的复杂度自动调整，适用于希望保持一定画质的场景。</li></ul><p>默认值：VBR</p>
 * @method integer getBframes() 获取<p>参考帧之间的B帧数，默认为自动。</p><p>取值范围：[0, 16]</p>
 * @method void setBframes(integer $Bframes) 设置<p>参考帧之间的B帧数，默认为自动。</p><p>取值范围：[0, 16]</p>
 * @method integer getHlsTime() 获取<p>分片平均时长。0或不填表示自动，将根据视频的 GOP 等特征自动选择合适的分片时长。</p><p>取值范围：[0, 10]</p><p>单位：秒</p><p>只支持转码模板，暂不支持自适应码流模板。</p>
 * @method void setHlsTime(integer $HlsTime) 设置<p>分片平均时长。0或不填表示自动，将根据视频的 GOP 等特征自动选择合适的分片时长。</p><p>取值范围：[0, 10]</p><p>单位：秒</p><p>只支持转码模板，暂不支持自适应码流模板。</p>
 */
class VideoTemplateInfo extends AbstractModel
{
    /**
     * @var string <p>视频流的编码格式，可选值：</p><li>libx264：H.264 编码；</li><li>libx265：H.265 编码；</li><li>av1：AOMedia Video 1 编码；</li><li>H.266：H.266 编码。</li><font color="red">注意：</font><li> av1，H.266 编码容器目前只支持 mp4 ；</li><li> H.266 目前只支持恒定 CRF 码率控制方式。 </li>
     */
    public $Codec;

    /**
     * @var integer <p>视频帧率，取值范围：[0, 100]，单位：Hz。<br>当取值为 0，表示帧率和原始视频保持一致。</p>
     */
    public $Fps;

    /**
     * @var integer <p>视频流的码率，取值范围：0 和 [128, 100000]，单位：kbps。<br>当取值为 0，表示由云点播自动设置码率。</p>
     */
    public $Bitrate;

    /**
     * @var string <p>分辨率自适应，可选值：</p><li>open：开启，此时，Width 代表视频的长边，Height 表示视频的短边；</li><li>close：关闭，此时，Width 代表视频的宽度，Height 表示视频的高度。</li>默认值：open。
     */
    public $ResolutionAdaptive;

    /**
     * @var integer <p>视频流宽度（或长边）的最大值，取值范围：0 和 [128, 8192]，单位：px。</p><li>当 Width、Height 均为 0，则分辨率同源；</li><li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li><li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li><li>当 Width、Height 均非 0，则分辨率按用户指定。</li>默认值：0。
     */
    public $Width;

    /**
     * @var integer <p>视频流高度（或短边）的最大值，取值范围：0 和 [128, 8192]，单位：px。</p><li>当 Width、Height 均为 0，则分辨率同源；</li><li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li><li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li><li>当 Width、Height 均非 0，则分辨率按用户指定。</li>默认值：0。
     */
    public $Height;

    /**
     * @var string <p>填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式：</p><li> stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“；</li><li>black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。</li><li>white：留白，保持视频宽高比不变，边缘剩余部分使用白色填充。</li><li>gauss：高斯模糊，保持视频宽高比不变，边缘剩余部分使用高斯模糊填充。</li>默认值：black 。
     */
    public $FillType;

    /**
     * @var integer <p>视频恒定码率控制因子，取值范围为[1, 51]。</p><p><font color="red">注意：</font></p><li>如果指定该参数，将使用 CRF 的码率控制方式做转码（视频码率将不再生效）；</li><li>当指定视频流编码格式为 H.266 时，该字段必填，推荐值为 28；</li><li>如果没有特殊需求，不建议指定该参数。</li>
     */
    public $Vcrf;

    /**
     * @var integer <p>关键帧 I 帧之间的间隔，取值范围：0 和 [1, 100000]，单位：帧数。<br>当填 0 或不填时，系统将自动设置 gop 长度。</p>
     */
    public $Gop;

    /**
     * @var string <p>Gop数值单位。</p><p>枚举值：</p><ul><li>frame： 表示帧数。</li><li>second： 表示秒数。</li></ul><p>默认值：frame</p>
     */
    public $GopUnit;

    /**
     * @var string <p>当原始视频为 HDR（High Dynamic Range）时，转码输出是否依然保持 HDR。取值范围：</p><li>ON: 如果原始文件是 HDR，则转码输出保持 HDR；否则转码输出为 SDR （Standard Dynamic Range）。</li><li>OFF: 无论原始文件是 HDR 还是 SDR，转码输出均为 SDR。</li>默认值：OFF。
     */
    public $PreserveHDRSwitch;

    /**
     * @var string <p>编码标签，仅当视频流的编码格式为 H.265 编码时有效，可选值：</p><li>hvc1 表示 hvc1 标签；</li><li>hev1 表示 hev1 标签。 </li>默认值：hvc1。
     */
    public $CodecTag;

    /**
     * @var string <p>码率控制模式。</p><p>枚举值：</p><ul><li>VBR： Variable Bit Rate，动态比特率，根据视频画面的复杂度动态调整输出的码率，使得画面质量更高，适用于存储场景和对画面质量要求较高的应用。</li><li>ABR： Average Bit Rate，平均比特率，尽量保持输出视频的平均码率稳定，但允许短期内的码率波动，适用于需要在保持一定画质的情况下尽量减少整体码率的场景。</li><li>CBR： Constant Bit Rate，恒定比特率，指视频编码时输出的码率保持恒定不变，不考虑画面复杂度的变化，适用于对网络带宽要求较为严格的场景，如直播等。</li><li>VCRF： 恒定质量因子，通过设定一个质量因子来控制视频质量，实现视频的恒定质量编码，码率会根据内容的复杂度自动调整，适用于希望保持一定画质的场景。</li></ul><p>默认值：VBR</p>
     */
    public $Mode;

    /**
     * @var integer <p>参考帧之间的B帧数，默认为自动。</p><p>取值范围：[0, 16]</p>
     */
    public $Bframes;

    /**
     * @var integer <p>分片平均时长。0或不填表示自动，将根据视频的 GOP 等特征自动选择合适的分片时长。</p><p>取值范围：[0, 10]</p><p>单位：秒</p><p>只支持转码模板，暂不支持自适应码流模板。</p>
     */
    public $HlsTime;

    /**
     * @param string $Codec <p>视频流的编码格式，可选值：</p><li>libx264：H.264 编码；</li><li>libx265：H.265 编码；</li><li>av1：AOMedia Video 1 编码；</li><li>H.266：H.266 编码。</li><font color="red">注意：</font><li> av1，H.266 编码容器目前只支持 mp4 ；</li><li> H.266 目前只支持恒定 CRF 码率控制方式。 </li>
     * @param integer $Fps <p>视频帧率，取值范围：[0, 100]，单位：Hz。<br>当取值为 0，表示帧率和原始视频保持一致。</p>
     * @param integer $Bitrate <p>视频流的码率，取值范围：0 和 [128, 100000]，单位：kbps。<br>当取值为 0，表示由云点播自动设置码率。</p>
     * @param string $ResolutionAdaptive <p>分辨率自适应，可选值：</p><li>open：开启，此时，Width 代表视频的长边，Height 表示视频的短边；</li><li>close：关闭，此时，Width 代表视频的宽度，Height 表示视频的高度。</li>默认值：open。
     * @param integer $Width <p>视频流宽度（或长边）的最大值，取值范围：0 和 [128, 8192]，单位：px。</p><li>当 Width、Height 均为 0，则分辨率同源；</li><li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li><li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li><li>当 Width、Height 均非 0，则分辨率按用户指定。</li>默认值：0。
     * @param integer $Height <p>视频流高度（或短边）的最大值，取值范围：0 和 [128, 8192]，单位：px。</p><li>当 Width、Height 均为 0，则分辨率同源；</li><li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li><li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li><li>当 Width、Height 均非 0，则分辨率按用户指定。</li>默认值：0。
     * @param string $FillType <p>填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式：</p><li> stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“；</li><li>black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。</li><li>white：留白，保持视频宽高比不变，边缘剩余部分使用白色填充。</li><li>gauss：高斯模糊，保持视频宽高比不变，边缘剩余部分使用高斯模糊填充。</li>默认值：black 。
     * @param integer $Vcrf <p>视频恒定码率控制因子，取值范围为[1, 51]。</p><p><font color="red">注意：</font></p><li>如果指定该参数，将使用 CRF 的码率控制方式做转码（视频码率将不再生效）；</li><li>当指定视频流编码格式为 H.266 时，该字段必填，推荐值为 28；</li><li>如果没有特殊需求，不建议指定该参数。</li>
     * @param integer $Gop <p>关键帧 I 帧之间的间隔，取值范围：0 和 [1, 100000]，单位：帧数。<br>当填 0 或不填时，系统将自动设置 gop 长度。</p>
     * @param string $GopUnit <p>Gop数值单位。</p><p>枚举值：</p><ul><li>frame： 表示帧数。</li><li>second： 表示秒数。</li></ul><p>默认值：frame</p>
     * @param string $PreserveHDRSwitch <p>当原始视频为 HDR（High Dynamic Range）时，转码输出是否依然保持 HDR。取值范围：</p><li>ON: 如果原始文件是 HDR，则转码输出保持 HDR；否则转码输出为 SDR （Standard Dynamic Range）。</li><li>OFF: 无论原始文件是 HDR 还是 SDR，转码输出均为 SDR。</li>默认值：OFF。
     * @param string $CodecTag <p>编码标签，仅当视频流的编码格式为 H.265 编码时有效，可选值：</p><li>hvc1 表示 hvc1 标签；</li><li>hev1 表示 hev1 标签。 </li>默认值：hvc1。
     * @param string $Mode <p>码率控制模式。</p><p>枚举值：</p><ul><li>VBR： Variable Bit Rate，动态比特率，根据视频画面的复杂度动态调整输出的码率，使得画面质量更高，适用于存储场景和对画面质量要求较高的应用。</li><li>ABR： Average Bit Rate，平均比特率，尽量保持输出视频的平均码率稳定，但允许短期内的码率波动，适用于需要在保持一定画质的情况下尽量减少整体码率的场景。</li><li>CBR： Constant Bit Rate，恒定比特率，指视频编码时输出的码率保持恒定不变，不考虑画面复杂度的变化，适用于对网络带宽要求较为严格的场景，如直播等。</li><li>VCRF： 恒定质量因子，通过设定一个质量因子来控制视频质量，实现视频的恒定质量编码，码率会根据内容的复杂度自动调整，适用于希望保持一定画质的场景。</li></ul><p>默认值：VBR</p>
     * @param integer $Bframes <p>参考帧之间的B帧数，默认为自动。</p><p>取值范围：[0, 16]</p>
     * @param integer $HlsTime <p>分片平均时长。0或不填表示自动，将根据视频的 GOP 等特征自动选择合适的分片时长。</p><p>取值范围：[0, 10]</p><p>单位：秒</p><p>只支持转码模板，暂不支持自适应码流模板。</p>
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
        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("ResolutionAdaptive",$param) and $param["ResolutionAdaptive"] !== null) {
            $this->ResolutionAdaptive = $param["ResolutionAdaptive"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("FillType",$param) and $param["FillType"] !== null) {
            $this->FillType = $param["FillType"];
        }

        if (array_key_exists("Vcrf",$param) and $param["Vcrf"] !== null) {
            $this->Vcrf = $param["Vcrf"];
        }

        if (array_key_exists("Gop",$param) and $param["Gop"] !== null) {
            $this->Gop = $param["Gop"];
        }

        if (array_key_exists("GopUnit",$param) and $param["GopUnit"] !== null) {
            $this->GopUnit = $param["GopUnit"];
        }

        if (array_key_exists("PreserveHDRSwitch",$param) and $param["PreserveHDRSwitch"] !== null) {
            $this->PreserveHDRSwitch = $param["PreserveHDRSwitch"];
        }

        if (array_key_exists("CodecTag",$param) and $param["CodecTag"] !== null) {
            $this->CodecTag = $param["CodecTag"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Bframes",$param) and $param["Bframes"] !== null) {
            $this->Bframes = $param["Bframes"];
        }

        if (array_key_exists("HlsTime",$param) and $param["HlsTime"] !== null) {
            $this->HlsTime = $param["HlsTime"];
        }
    }
}
