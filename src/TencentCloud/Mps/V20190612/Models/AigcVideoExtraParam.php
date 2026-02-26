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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于AIGC创作视频时用到的扩展参数信息。
 *
 * @method string getResolution() 获取<p>生成视频的分辨率，分辨率与选择模型及设置的视频时长相关。 </p><p>不同模型支持的分辨率选项:</p><ol><li>Kling 720P(默认), 1080P。</li><li>Hailuo 768P(默认), 1080P。</li><li>Vidu 720P(默认)，1080P。</li><li>GV 720P(默认),1080P。</li><li>OS 720P, 图片仅支持1280x720、720x1280，暂不支持指定。</li></ol><p>注意：除模型可支持的分辨率外，还可以生成 2K、4K分辨率。</p>
 * @method void setResolution(string $Resolution) 设置<p>生成视频的分辨率，分辨率与选择模型及设置的视频时长相关。 </p><p>不同模型支持的分辨率选项:</p><ol><li>Kling 720P(默认), 1080P。</li><li>Hailuo 768P(默认), 1080P。</li><li>Vidu 720P(默认)，1080P。</li><li>GV 720P(默认),1080P。</li><li>OS 720P, 图片仅支持1280x720、720x1280，暂不支持指定。</li></ol><p>注意：除模型可支持的分辨率外，还可以生成 2K、4K分辨率。</p>
 * @method string getAspectRatio() 获取<p>指定所生成视频的宽高比。 </p><p>不同模型对于此参数的支持：</p><ol><li>Kling 仅文生视频支持, 16:9(默认值)、9:16、 1:1。</li><li>Hailuo 暂不支持。</li><li>Vidu 仅文生和参考图生视频 支持[16:9、9:16、4:3、3:4、1:1]，其中仅q2支持4:3、3:4。</li><li>GV 16:9(默认值)、9:16。</li><li>OS 仅文生视频支持, 16:9(默认), 9:16。</li></ol><p>注：关于具体模型支持的宽高比例，可查看具体模型官网介绍获取更完整描述。</p>
 * @method void setAspectRatio(string $AspectRatio) 设置<p>指定所生成视频的宽高比。 </p><p>不同模型对于此参数的支持：</p><ol><li>Kling 仅文生视频支持, 16:9(默认值)、9:16、 1:1。</li><li>Hailuo 暂不支持。</li><li>Vidu 仅文生和参考图生视频 支持[16:9、9:16、4:3、3:4、1:1]，其中仅q2支持4:3、3:4。</li><li>GV 16:9(默认值)、9:16。</li><li>OS 仅文生视频支持, 16:9(默认), 9:16。</li></ol><p>注：关于具体模型支持的宽高比例，可查看具体模型官网介绍获取更完整描述。</p>
 * @method integer getLogoAdd() 获取<p>是否添加图标水印。</p><ol><li>Hailuo 支持此参数。</li><li>Kling 支持此参数。</li><li>Vidu 支持此参数。</li></ol>
 * @method void setLogoAdd(integer $LogoAdd) 设置<p>是否添加图标水印。</p><ol><li>Hailuo 支持此参数。</li><li>Kling 支持此参数。</li><li>Vidu 支持此参数。</li></ol>
 * @method boolean getEnableAudio() 获取<p>为视频生成音频。接受的值包括 true 或 false。 </p><p>支持此参数的模型：</p><ol><li>GV，默认true。</li><li>OS，默认true。</li></ol>
 * @method void setEnableAudio(boolean $EnableAudio) 设置<p>为视频生成音频。接受的值包括 true 或 false。 </p><p>支持此参数的模型：</p><ol><li>GV，默认true。</li><li>OS，默认true。</li></ol>
 * @method boolean getOffPeak() 获取<p>错峰模型，目前仅支持Vidu模型。<br>错峰模式下提交的任务，会在48小时内生成，未能完成的任务会被自动取消。</p>
 * @method void setOffPeak(boolean $OffPeak) 设置<p>错峰模型，目前仅支持Vidu模型。<br>错峰模式下提交的任务，会在48小时内生成，未能完成的任务会被自动取消。</p>
 * @method boolean getEnableBgm() 获取<p>是否为生成的视频添加背景音乐。默认：false，可选值 true 、false。<br>注意：部分模型的版本支持。</p>
 * @method void setEnableBgm(boolean $EnableBgm) 设置<p>是否为生成的视频添加背景音乐。默认：false，可选值 true 、false。<br>注意：部分模型的版本支持。</p>
 */
class AigcVideoExtraParam extends AbstractModel
{
    /**
     * @var string <p>生成视频的分辨率，分辨率与选择模型及设置的视频时长相关。 </p><p>不同模型支持的分辨率选项:</p><ol><li>Kling 720P(默认), 1080P。</li><li>Hailuo 768P(默认), 1080P。</li><li>Vidu 720P(默认)，1080P。</li><li>GV 720P(默认),1080P。</li><li>OS 720P, 图片仅支持1280x720、720x1280，暂不支持指定。</li></ol><p>注意：除模型可支持的分辨率外，还可以生成 2K、4K分辨率。</p>
     */
    public $Resolution;

    /**
     * @var string <p>指定所生成视频的宽高比。 </p><p>不同模型对于此参数的支持：</p><ol><li>Kling 仅文生视频支持, 16:9(默认值)、9:16、 1:1。</li><li>Hailuo 暂不支持。</li><li>Vidu 仅文生和参考图生视频 支持[16:9、9:16、4:3、3:4、1:1]，其中仅q2支持4:3、3:4。</li><li>GV 16:9(默认值)、9:16。</li><li>OS 仅文生视频支持, 16:9(默认), 9:16。</li></ol><p>注：关于具体模型支持的宽高比例，可查看具体模型官网介绍获取更完整描述。</p>
     */
    public $AspectRatio;

    /**
     * @var integer <p>是否添加图标水印。</p><ol><li>Hailuo 支持此参数。</li><li>Kling 支持此参数。</li><li>Vidu 支持此参数。</li></ol>
     */
    public $LogoAdd;

    /**
     * @var boolean <p>为视频生成音频。接受的值包括 true 或 false。 </p><p>支持此参数的模型：</p><ol><li>GV，默认true。</li><li>OS，默认true。</li></ol>
     */
    public $EnableAudio;

    /**
     * @var boolean <p>错峰模型，目前仅支持Vidu模型。<br>错峰模式下提交的任务，会在48小时内生成，未能完成的任务会被自动取消。</p>
     */
    public $OffPeak;

    /**
     * @var boolean <p>是否为生成的视频添加背景音乐。默认：false，可选值 true 、false。<br>注意：部分模型的版本支持。</p>
     */
    public $EnableBgm;

    /**
     * @param string $Resolution <p>生成视频的分辨率，分辨率与选择模型及设置的视频时长相关。 </p><p>不同模型支持的分辨率选项:</p><ol><li>Kling 720P(默认), 1080P。</li><li>Hailuo 768P(默认), 1080P。</li><li>Vidu 720P(默认)，1080P。</li><li>GV 720P(默认),1080P。</li><li>OS 720P, 图片仅支持1280x720、720x1280，暂不支持指定。</li></ol><p>注意：除模型可支持的分辨率外，还可以生成 2K、4K分辨率。</p>
     * @param string $AspectRatio <p>指定所生成视频的宽高比。 </p><p>不同模型对于此参数的支持：</p><ol><li>Kling 仅文生视频支持, 16:9(默认值)、9:16、 1:1。</li><li>Hailuo 暂不支持。</li><li>Vidu 仅文生和参考图生视频 支持[16:9、9:16、4:3、3:4、1:1]，其中仅q2支持4:3、3:4。</li><li>GV 16:9(默认值)、9:16。</li><li>OS 仅文生视频支持, 16:9(默认), 9:16。</li></ol><p>注：关于具体模型支持的宽高比例，可查看具体模型官网介绍获取更完整描述。</p>
     * @param integer $LogoAdd <p>是否添加图标水印。</p><ol><li>Hailuo 支持此参数。</li><li>Kling 支持此参数。</li><li>Vidu 支持此参数。</li></ol>
     * @param boolean $EnableAudio <p>为视频生成音频。接受的值包括 true 或 false。 </p><p>支持此参数的模型：</p><ol><li>GV，默认true。</li><li>OS，默认true。</li></ol>
     * @param boolean $OffPeak <p>错峰模型，目前仅支持Vidu模型。<br>错峰模式下提交的任务，会在48小时内生成，未能完成的任务会被自动取消。</p>
     * @param boolean $EnableBgm <p>是否为生成的视频添加背景音乐。默认：false，可选值 true 、false。<br>注意：部分模型的版本支持。</p>
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
        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("EnableAudio",$param) and $param["EnableAudio"] !== null) {
            $this->EnableAudio = $param["EnableAudio"];
        }

        if (array_key_exists("OffPeak",$param) and $param["OffPeak"] !== null) {
            $this->OffPeak = $param["OffPeak"];
        }

        if (array_key_exists("EnableBgm",$param) and $param["EnableBgm"] !== null) {
            $this->EnableBgm = $param["EnableBgm"];
        }
    }
}
