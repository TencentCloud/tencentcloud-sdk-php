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
 * @method string getResolution() 获取生成视频的分辨率，分辨率与选择模型及设置的视频时长相关。 

不同模型支持的分辨率选项:
1. Kling 720P(默认), 1080P。
2. Hailuo 768P(默认), 1080P。
3. Vidu 720P(默认)，1080P。
4. GV 720P(默认),1080P。
5. OS 720P, 图片仅支持1280x720、720x1280，暂不支持指定。

注意：除模型可支持的分辨率外，还可以生成 2K、4K分辨率。
 * @method void setResolution(string $Resolution) 设置生成视频的分辨率，分辨率与选择模型及设置的视频时长相关。 

不同模型支持的分辨率选项:
1. Kling 720P(默认), 1080P。
2. Hailuo 768P(默认), 1080P。
3. Vidu 720P(默认)，1080P。
4. GV 720P(默认),1080P。
5. OS 720P, 图片仅支持1280x720、720x1280，暂不支持指定。

注意：除模型可支持的分辨率外，还可以生成 2K、4K分辨率。
 * @method string getAspectRatio() 获取指定所生成视频的宽高比。 

不同模型对于此参数的支持：
1. Kling 仅文生视频支持, 16:9(默认值)、9:16、 1:1。
2. Hailuo 暂不支持。
3. Vidu 仅文生和参考图生视频 支持[16:9、9:16、4:3、3:4、1:1]，其中仅q2支持4:3、3:4。
4. GV 16:9(默认值)、9:16。
5. OS 仅文生视频支持, 16:9(默认), 9:16。

注：关于具体模型支持的宽高比例，可查看具体模型官网介绍获取更完整描述。
 * @method void setAspectRatio(string $AspectRatio) 设置指定所生成视频的宽高比。 

不同模型对于此参数的支持：
1. Kling 仅文生视频支持, 16:9(默认值)、9:16、 1:1。
2. Hailuo 暂不支持。
3. Vidu 仅文生和参考图生视频 支持[16:9、9:16、4:3、3:4、1:1]，其中仅q2支持4:3、3:4。
4. GV 16:9(默认值)、9:16。
5. OS 仅文生视频支持, 16:9(默认), 9:16。

注：关于具体模型支持的宽高比例，可查看具体模型官网介绍获取更完整描述。
 * @method boolean getOffPeak() 获取错峰模型，目前仅支持Vidu模型。
错峰模式下提交的任务，会在48小时内生成，未能完成的任务会被自动取消。
 * @method void setOffPeak(boolean $OffPeak) 设置错峰模型，目前仅支持Vidu模型。
错峰模式下提交的任务，会在48小时内生成，未能完成的任务会被自动取消。
 */
class AigcVideoExtraParam extends AbstractModel
{
    /**
     * @var string 生成视频的分辨率，分辨率与选择模型及设置的视频时长相关。 

不同模型支持的分辨率选项:
1. Kling 720P(默认), 1080P。
2. Hailuo 768P(默认), 1080P。
3. Vidu 720P(默认)，1080P。
4. GV 720P(默认),1080P。
5. OS 720P, 图片仅支持1280x720、720x1280，暂不支持指定。

注意：除模型可支持的分辨率外，还可以生成 2K、4K分辨率。
     */
    public $Resolution;

    /**
     * @var string 指定所生成视频的宽高比。 

不同模型对于此参数的支持：
1. Kling 仅文生视频支持, 16:9(默认值)、9:16、 1:1。
2. Hailuo 暂不支持。
3. Vidu 仅文生和参考图生视频 支持[16:9、9:16、4:3、3:4、1:1]，其中仅q2支持4:3、3:4。
4. GV 16:9(默认值)、9:16。
5. OS 仅文生视频支持, 16:9(默认), 9:16。

注：关于具体模型支持的宽高比例，可查看具体模型官网介绍获取更完整描述。
     */
    public $AspectRatio;

    /**
     * @var boolean 错峰模型，目前仅支持Vidu模型。
错峰模式下提交的任务，会在48小时内生成，未能完成的任务会被自动取消。
     */
    public $OffPeak;

    /**
     * @param string $Resolution 生成视频的分辨率，分辨率与选择模型及设置的视频时长相关。 

不同模型支持的分辨率选项:
1. Kling 720P(默认), 1080P。
2. Hailuo 768P(默认), 1080P。
3. Vidu 720P(默认)，1080P。
4. GV 720P(默认),1080P。
5. OS 720P, 图片仅支持1280x720、720x1280，暂不支持指定。

注意：除模型可支持的分辨率外，还可以生成 2K、4K分辨率。
     * @param string $AspectRatio 指定所生成视频的宽高比。 

不同模型对于此参数的支持：
1. Kling 仅文生视频支持, 16:9(默认值)、9:16、 1:1。
2. Hailuo 暂不支持。
3. Vidu 仅文生和参考图生视频 支持[16:9、9:16、4:3、3:4、1:1]，其中仅q2支持4:3、3:4。
4. GV 16:9(默认值)、9:16。
5. OS 仅文生视频支持, 16:9(默认), 9:16。

注：关于具体模型支持的宽高比例，可查看具体模型官网介绍获取更完整描述。
     * @param boolean $OffPeak 错峰模型，目前仅支持Vidu模型。
错峰模式下提交的任务，会在48小时内生成，未能完成的任务会被自动取消。
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

        if (array_key_exists("OffPeak",$param) and $param["OffPeak"] !== null) {
            $this->OffPeak = $param["OffPeak"];
        }
    }
}
