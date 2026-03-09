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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 雪碧图
 *
 * @method integer getHeight() 获取<p>雪碧图小图的高度。</p>
 * @method void setHeight(integer $Height) 设置<p>雪碧图小图的高度。</p>
 * @method integer getWidth() 获取<p>雪碧图小图的宽度。</p>
 * @method void setWidth(integer $Width) 设置<p>雪碧图小图的宽度。</p>
 * @method integer getTotalCount() 获取<p>雪碧图小图的总数量。</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>雪碧图小图的总数量。</p>
 * @method array getImageUrlSet() 获取<p>截取雪碧图输出的地址。</p>
 * @method void setImageUrlSet(array $ImageUrlSet) 设置<p>截取雪碧图输出的地址。</p>
 * @method string getWebVttUrl() 获取<p>雪碧图子图位置与时间关系的 WebVtt 文件地址。WebVtt 文件表明了各个雪碧图小图对应的时间点，以及在雪碧大图里的坐标位置，一般被播放器用于实现预览。</p>
 * @method void setWebVttUrl(string $WebVttUrl) 设置<p>雪碧图子图位置与时间关系的 WebVtt 文件地址。WebVtt 文件表明了各个雪碧图小图对应的时间点，以及在雪碧大图里的坐标位置，一般被播放器用于实现预览。</p>
 */
class MediaImageSpriteInfo extends AbstractModel
{
    /**
     * @var integer <p>雪碧图小图的高度。</p>
     */
    public $Height;

    /**
     * @var integer <p>雪碧图小图的宽度。</p>
     */
    public $Width;

    /**
     * @var integer <p>雪碧图小图的总数量。</p>
     */
    public $TotalCount;

    /**
     * @var array <p>截取雪碧图输出的地址。</p>
     */
    public $ImageUrlSet;

    /**
     * @var string <p>雪碧图子图位置与时间关系的 WebVtt 文件地址。WebVtt 文件表明了各个雪碧图小图对应的时间点，以及在雪碧大图里的坐标位置，一般被播放器用于实现预览。</p>
     */
    public $WebVttUrl;

    /**
     * @param integer $Height <p>雪碧图小图的高度。</p>
     * @param integer $Width <p>雪碧图小图的宽度。</p>
     * @param integer $TotalCount <p>雪碧图小图的总数量。</p>
     * @param array $ImageUrlSet <p>截取雪碧图输出的地址。</p>
     * @param string $WebVttUrl <p>雪碧图子图位置与时间关系的 WebVtt 文件地址。WebVtt 文件表明了各个雪碧图小图对应的时间点，以及在雪碧大图里的坐标位置，一般被播放器用于实现预览。</p>
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
        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ImageUrlSet",$param) and $param["ImageUrlSet"] !== null) {
            $this->ImageUrlSet = $param["ImageUrlSet"];
        }

        if (array_key_exists("WebVttUrl",$param) and $param["WebVttUrl"] !== null) {
            $this->WebVttUrl = $param["WebVttUrl"];
        }
    }
}
