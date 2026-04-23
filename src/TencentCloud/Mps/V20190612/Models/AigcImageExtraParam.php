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
 * @method string getAspectRatio() 获取<p>指定所生成视频的宽高比。</p><p>不同模型支持的宽高比:</p><ol><li>GEM支持：1:1、3:2、2:3、3:4、4:3、4:5、5:4、9:16、16:9 和 21:9。</li></ol><p>注：具体模型的宽高比参数，可查看相应模型官网获取更完整描述。</p>
 * @method void setAspectRatio(string $AspectRatio) 设置<p>指定所生成视频的宽高比。</p><p>不同模型支持的宽高比:</p><ol><li>GEM支持：1:1、3:2、2:3、3:4、4:3、4:5、5:4、9:16、16:9 和 21:9。</li></ol><p>注：具体模型的宽高比参数，可查看相应模型官网获取更完整描述。</p>
 * @method string getResolution() 获取<p>指定图片输出分辨率。</p><p>支持该参数的模型：<br>支持选择: 720P, 1080P, 2K, 4K。</p>
 * @method void setResolution(string $Resolution) 设置<p>指定图片输出分辨率。</p><p>支持该参数的模型：<br>支持选择: 720P, 1080P, 2K, 4K。</p>
 * @method integer getLogoAdd() 获取<p>是否添加图标水印。默认不加。1-添加，0-不添加。</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
 * @method void setLogoAdd(integer $LogoAdd) 设置<p>是否添加图标水印。默认不加。1-添加，0-不添加。</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
 */
class AigcImageExtraParam extends AbstractModel
{
    /**
     * @var string <p>指定所生成视频的宽高比。</p><p>不同模型支持的宽高比:</p><ol><li>GEM支持：1:1、3:2、2:3、3:4、4:3、4:5、5:4、9:16、16:9 和 21:9。</li></ol><p>注：具体模型的宽高比参数，可查看相应模型官网获取更完整描述。</p>
     */
    public $AspectRatio;

    /**
     * @var string <p>指定图片输出分辨率。</p><p>支持该参数的模型：<br>支持选择: 720P, 1080P, 2K, 4K。</p>
     */
    public $Resolution;

    /**
     * @var integer <p>是否添加图标水印。默认不加。1-添加，0-不添加。</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
     */
    public $LogoAdd;

    /**
     * @param string $AspectRatio <p>指定所生成视频的宽高比。</p><p>不同模型支持的宽高比:</p><ol><li>GEM支持：1:1、3:2、2:3、3:4、4:3、4:5、5:4、9:16、16:9 和 21:9。</li></ol><p>注：具体模型的宽高比参数，可查看相应模型官网获取更完整描述。</p>
     * @param string $Resolution <p>指定图片输出分辨率。</p><p>支持该参数的模型：<br>支持选择: 720P, 1080P, 2K, 4K。</p>
     * @param integer $LogoAdd <p>是否添加图标水印。默认不加。1-添加，0-不添加。</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
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

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }
    }
}
