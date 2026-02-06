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
 * AIGC 场景化生图任务的输出媒体文件配置。
 *
 * @method string getStorageMode() 获取存储模式。取值有： <li>Permanent：永久存储，生成的图片文件将存储到云点播，可在事件通知中获取到 FileId；</li> <li>Temporary：临时存储，生成的图片文件不会存储到云点播，可在事件通知中获取到临时访问的 URL；</li>
默认值：Temporary
 * @method void setStorageMode(string $StorageMode) 设置存储模式。取值有： <li>Permanent：永久存储，生成的图片文件将存储到云点播，可在事件通知中获取到 FileId；</li> <li>Temporary：临时存储，生成的图片文件不会存储到云点播，可在事件通知中获取到临时访问的 URL；</li>
默认值：Temporary
 * @method string getMediaName() 获取输出文件名，最长 64 个字符。缺省由系统指定生成文件名。
 * @method void setMediaName(string $MediaName) 设置输出文件名，最长 64 个字符。缺省由系统指定生成文件名。
 * @method integer getClassId() 获取分类ID，用于对媒体进行分类管理，可通过 [创建分类](/document/product/266/7812) 接口，创建分类，获得分类 ID。
<li>默认值：0，表示其他分类。</li>
 * @method void setClassId(integer $ClassId) 设置分类ID，用于对媒体进行分类管理，可通过 [创建分类](/document/product/266/7812) 接口，创建分类，获得分类 ID。
<li>默认值：0，表示其他分类。</li>
 * @method string getExpireTime() 获取输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method void setExpireTime(string $ExpireTime) 设置输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
 * @method string getAspectRatio() 获取指定所生成图片的宽高比。输入格式为 W:H。
本字段在以下场景有效：
* 生商品图场景，可选值为：1:1、3:2、2:3、3:4、4:3、4:5、5:4、16:9、9:16、21:9
* AI扩图场景。可选值为：1:1、3:2、2:3、3:4、4:3、4:5、5:4、9:16、16:9、21:9，可以配合 ImageWidth 和 ImageHeight 使用，规则如下： 
    1. 仅指定 AspectRatio 时，根据原图输入进行自适应调整。
    2. 指定 AspectRatio 和 ImageWidth 时，ImageHeight  由两者计算得出，反亦是如此。
    3. 当AspectRatio、ImageWidth、ImageHeight 同时指定的时候，优先使用ImageWidth、ImageHeight。
 * @method void setAspectRatio(string $AspectRatio) 设置指定所生成图片的宽高比。输入格式为 W:H。
本字段在以下场景有效：
* 生商品图场景，可选值为：1:1、3:2、2:3、3:4、4:3、4:5、5:4、16:9、9:16、21:9
* AI扩图场景。可选值为：1:1、3:2、2:3、3:4、4:3、4:5、5:4、9:16、16:9、21:9，可以配合 ImageWidth 和 ImageHeight 使用，规则如下： 
    1. 仅指定 AspectRatio 时，根据原图输入进行自适应调整。
    2. 指定 AspectRatio 和 ImageWidth 时，ImageHeight  由两者计算得出，反亦是如此。
    3. 当AspectRatio、ImageWidth、ImageHeight 同时指定的时候，优先使用ImageWidth、ImageHeight。
 * @method ImageSceneAigcEncodeConfig getEncodeConfig() 获取输出图片编码格式参数。**仅AI换衣场景有效。**
 * @method void setEncodeConfig(ImageSceneAigcEncodeConfig $EncodeConfig) 设置输出图片编码格式参数。**仅AI换衣场景有效。**
 * @method integer getImageWidth() 获取输出图像宽度，**仅AI扩图场景有效**。
 * @method void setImageWidth(integer $ImageWidth) 设置输出图像宽度，**仅AI扩图场景有效**。
 * @method integer getImageHeight() 获取输出图像高度，**仅AI扩图场景有效**。
 * @method void setImageHeight(integer $ImageHeight) 设置输出图像高度，**仅AI扩图场景有效**。
 */
class SceneAigcImageOutputConfig extends AbstractModel
{
    /**
     * @var string 存储模式。取值有： <li>Permanent：永久存储，生成的图片文件将存储到云点播，可在事件通知中获取到 FileId；</li> <li>Temporary：临时存储，生成的图片文件不会存储到云点播，可在事件通知中获取到临时访问的 URL；</li>
默认值：Temporary
     */
    public $StorageMode;

    /**
     * @var string 输出文件名，最长 64 个字符。缺省由系统指定生成文件名。
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
     * @var string 指定所生成图片的宽高比。输入格式为 W:H。
本字段在以下场景有效：
* 生商品图场景，可选值为：1:1、3:2、2:3、3:4、4:3、4:5、5:4、16:9、9:16、21:9
* AI扩图场景。可选值为：1:1、3:2、2:3、3:4、4:3、4:5、5:4、9:16、16:9、21:9，可以配合 ImageWidth 和 ImageHeight 使用，规则如下： 
    1. 仅指定 AspectRatio 时，根据原图输入进行自适应调整。
    2. 指定 AspectRatio 和 ImageWidth 时，ImageHeight  由两者计算得出，反亦是如此。
    3. 当AspectRatio、ImageWidth、ImageHeight 同时指定的时候，优先使用ImageWidth、ImageHeight。
     */
    public $AspectRatio;

    /**
     * @var ImageSceneAigcEncodeConfig 输出图片编码格式参数。**仅AI换衣场景有效。**
     */
    public $EncodeConfig;

    /**
     * @var integer 输出图像宽度，**仅AI扩图场景有效**。
     */
    public $ImageWidth;

    /**
     * @var integer 输出图像高度，**仅AI扩图场景有效**。
     */
    public $ImageHeight;

    /**
     * @param string $StorageMode 存储模式。取值有： <li>Permanent：永久存储，生成的图片文件将存储到云点播，可在事件通知中获取到 FileId；</li> <li>Temporary：临时存储，生成的图片文件不会存储到云点播，可在事件通知中获取到临时访问的 URL；</li>
默认值：Temporary
     * @param string $MediaName 输出文件名，最长 64 个字符。缺省由系统指定生成文件名。
     * @param integer $ClassId 分类ID，用于对媒体进行分类管理，可通过 [创建分类](/document/product/266/7812) 接口，创建分类，获得分类 ID。
<li>默认值：0，表示其他分类。</li>
     * @param string $ExpireTime 输出文件的过期时间，超过该时间文件将被删除，默认为永久不过期，格式按照 ISO 8601标准表示，详见 [ISO 日期格式说明](https://cloud.tencent.com/document/product/266/11732#I)。
     * @param string $AspectRatio 指定所生成图片的宽高比。输入格式为 W:H。
本字段在以下场景有效：
* 生商品图场景，可选值为：1:1、3:2、2:3、3:4、4:3、4:5、5:4、16:9、9:16、21:9
* AI扩图场景。可选值为：1:1、3:2、2:3、3:4、4:3、4:5、5:4、9:16、16:9、21:9，可以配合 ImageWidth 和 ImageHeight 使用，规则如下： 
    1. 仅指定 AspectRatio 时，根据原图输入进行自适应调整。
    2. 指定 AspectRatio 和 ImageWidth 时，ImageHeight  由两者计算得出，反亦是如此。
    3. 当AspectRatio、ImageWidth、ImageHeight 同时指定的时候，优先使用ImageWidth、ImageHeight。
     * @param ImageSceneAigcEncodeConfig $EncodeConfig 输出图片编码格式参数。**仅AI换衣场景有效。**
     * @param integer $ImageWidth 输出图像宽度，**仅AI扩图场景有效**。
     * @param integer $ImageHeight 输出图像高度，**仅AI扩图场景有效**。
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

        if (array_key_exists("AspectRatio",$param) and $param["AspectRatio"] !== null) {
            $this->AspectRatio = $param["AspectRatio"];
        }

        if (array_key_exists("EncodeConfig",$param) and $param["EncodeConfig"] !== null) {
            $this->EncodeConfig = new ImageSceneAigcEncodeConfig();
            $this->EncodeConfig->deserialize($param["EncodeConfig"]);
        }

        if (array_key_exists("ImageWidth",$param) and $param["ImageWidth"] !== null) {
            $this->ImageWidth = $param["ImageWidth"];
        }

        if (array_key_exists("ImageHeight",$param) and $param["ImageHeight"] !== null) {
            $this->ImageHeight = $param["ImageHeight"];
        }
    }
}
