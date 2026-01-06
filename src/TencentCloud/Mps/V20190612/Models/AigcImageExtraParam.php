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
 * 用于AIGC创作图片时用到的扩展参数信息。
 *
 * @method string getAspectRatio() 获取指定所生成视频的宽高比。

不同模型支持的宽高比:
1. GEM支持：1:1、3:2、2:3、3:4、4:3、4:5、5:4、9:16、16:9 和 21:9。

注：具体模型的宽高比参数，可查看相应模型官网获取更完整描述。
 * @method void setAspectRatio(string $AspectRatio) 设置指定所生成视频的宽高比。

不同模型支持的宽高比:
1. GEM支持：1:1、3:2、2:3、3:4、4:3、4:5、5:4、9:16、16:9 和 21:9。

注：具体模型的宽高比参数，可查看相应模型官网获取更完整描述。
 * @method string getResolution() 获取指定图片输出分辨率。

支持该参数的模型：
支持选择: 720P, 1080P, 2K, 4K。

 * @method void setResolution(string $Resolution) 设置指定图片输出分辨率。

支持该参数的模型：
支持选择: 720P, 1080P, 2K, 4K。
 */
class AigcImageExtraParam extends AbstractModel
{
    /**
     * @var string 指定所生成视频的宽高比。

不同模型支持的宽高比:
1. GEM支持：1:1、3:2、2:3、3:4、4:3、4:5、5:4、9:16、16:9 和 21:9。

注：具体模型的宽高比参数，可查看相应模型官网获取更完整描述。
     */
    public $AspectRatio;

    /**
     * @var string 指定图片输出分辨率。

支持该参数的模型：
支持选择: 720P, 1080P, 2K, 4K。

     */
    public $Resolution;

    /**
     * @param string $AspectRatio 指定所生成视频的宽高比。

不同模型支持的宽高比:
1. GEM支持：1:1、3:2、2:3、3:4、4:3、4:5、5:4、9:16、16:9 和 21:9。

注：具体模型的宽高比参数，可查看相应模型官网获取更完整描述。
     * @param string $Resolution 指定图片输出分辨率。

支持该参数的模型：
支持选择: 720P, 1080P, 2K, 4K。
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
        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }
    }
}
