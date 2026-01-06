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
 * 图片处理编排输出配置。
 *
 * @method string getAspectRatio() 获取输出图片的宽高比。可以配合ImageWidth 和 ImageHeight 使用，规则如下：

1. 仅指定 AspectRatio 时，根据原图输入进行自适应调整。
2. 指定 AspectRatio 和 ImageWidth 时，ImageHeight  由两者计算得出，反亦是如此。
3. 当AspectRatio、ImageWidth、ImageHeight 同时指定的时候，优先使用ImageWidth、ImageHeight。

可取值：1:1、3:2、2:3、3:4、4:3、4:5、5:4、9:16、16:9、21:9

支持该参数 ScheduleId: 30010(扩图)
 * @method void setAspectRatio(string $AspectRatio) 设置输出图片的宽高比。可以配合ImageWidth 和 ImageHeight 使用，规则如下：

1. 仅指定 AspectRatio 时，根据原图输入进行自适应调整。
2. 指定 AspectRatio 和 ImageWidth 时，ImageHeight  由两者计算得出，反亦是如此。
3. 当AspectRatio、ImageWidth、ImageHeight 同时指定的时候，优先使用ImageWidth、ImageHeight。

可取值：1:1、3:2、2:3、3:4、4:3、4:5、5:4、9:16、16:9、21:9

支持该参数 ScheduleId: 30010(扩图)
 * @method integer getImageHeight() 获取图片输出高度，单位：像素。
 * @method void setImageHeight(integer $ImageHeight) 设置图片输出高度，单位：像素。
 * @method integer getImageWidth() 获取图片输出宽度，单位：像素。
 * @method void setImageWidth(integer $ImageWidth) 设置图片输出宽度，单位：像素。
 * @method string getImageSize() 获取图片输出分辨率，取值：1K/2K/4K。
 * @method void setImageSize(string $ImageSize) 设置图片输出分辨率，取值：1K/2K/4K。
 */
class ImageProcessOutputConfig extends AbstractModel
{
    /**
     * @var string 输出图片的宽高比。可以配合ImageWidth 和 ImageHeight 使用，规则如下：

1. 仅指定 AspectRatio 时，根据原图输入进行自适应调整。
2. 指定 AspectRatio 和 ImageWidth 时，ImageHeight  由两者计算得出，反亦是如此。
3. 当AspectRatio、ImageWidth、ImageHeight 同时指定的时候，优先使用ImageWidth、ImageHeight。

可取值：1:1、3:2、2:3、3:4、4:3、4:5、5:4、9:16、16:9、21:9

支持该参数 ScheduleId: 30010(扩图)
     */
    public $AspectRatio;

    /**
     * @var integer 图片输出高度，单位：像素。
     */
    public $ImageHeight;

    /**
     * @var integer 图片输出宽度，单位：像素。
     */
    public $ImageWidth;

    /**
     * @var string 图片输出分辨率，取值：1K/2K/4K。
     */
    public $ImageSize;

    /**
     * @param string $AspectRatio 输出图片的宽高比。可以配合ImageWidth 和 ImageHeight 使用，规则如下：

1. 仅指定 AspectRatio 时，根据原图输入进行自适应调整。
2. 指定 AspectRatio 和 ImageWidth 时，ImageHeight  由两者计算得出，反亦是如此。
3. 当AspectRatio、ImageWidth、ImageHeight 同时指定的时候，优先使用ImageWidth、ImageHeight。

可取值：1:1、3:2、2:3、3:4、4:3、4:5、5:4、9:16、16:9、21:9

支持该参数 ScheduleId: 30010(扩图)
     * @param integer $ImageHeight 图片输出高度，单位：像素。
     * @param integer $ImageWidth 图片输出宽度，单位：像素。
     * @param string $ImageSize 图片输出分辨率，取值：1K/2K/4K。
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

        if (array_key_exists("ImageHeight",$param) and $param["ImageHeight"] !== null) {
            $this->ImageHeight = $param["ImageHeight"];
        }

        if (array_key_exists("ImageWidth",$param) and $param["ImageWidth"] !== null) {
            $this->ImageWidth = $param["ImageWidth"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }
    }
}
