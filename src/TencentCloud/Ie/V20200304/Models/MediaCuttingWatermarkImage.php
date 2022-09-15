<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒体剪切图像水印参数。
 *
 * @method string getSourceId() 获取水印源的ID，对应SourceInfoSet内的源。
注意1：对应的 MediaSourceInfo.Type需要为Image。
注意2：对于动图，只取第一帧图像作为水印源。
 * @method void setSourceId(string $SourceId) 设置水印源的ID，对应SourceInfoSet内的源。
注意1：对应的 MediaSourceInfo.Type需要为Image。
注意2：对于动图，只取第一帧图像作为水印源。
 * @method integer getPosX() 获取水印水平坐标，单位像素，默认：0。
 * @method void setPosX(integer $PosX) 设置水印水平坐标，单位像素，默认：0。
 * @method integer getPosY() 获取水印垂直坐标，单位像素，默认：0。
 * @method void setPosY(integer $PosY) 设置水印垂直坐标，单位像素，默认：0。
 * @method integer getWidth() 获取水印宽度，单位像素，默认：0。
 * @method void setWidth(integer $Width) 设置水印宽度，单位像素，默认：0。
 * @method integer getHeight() 获取水印高度，单位像素，默认：0。
注意：对于宽高符合以下规则：
1、Width>0 且 Height>0，按指定宽高拉伸；
2、Width=0 且 Height>0，以Height为基准等比缩放；
3、Width>0 且 Height=0，以Width为基准等比缩放；
4、Width=0 且 Height=0，采用源的宽高。
 * @method void setHeight(integer $Height) 设置水印高度，单位像素，默认：0。
注意：对于宽高符合以下规则：
1、Width>0 且 Height>0，按指定宽高拉伸；
2、Width=0 且 Height>0，以Height为基准等比缩放；
3、Width>0 且 Height=0，以Width为基准等比缩放；
4、Width=0 且 Height=0，采用源的宽高。
 * @method string getPosOriginType() 获取指定坐标原点，可选值：
<li>LeftTop：PosXY 表示水印左上点到图片左上点的相对位置</li>
<li>RightTop：PosXY 表示水印右上点到图片右上点的相对位置</li>
<li>LeftBottom：PosXY 表示水印左下点到图片左下点的相对位置</li>
<li>RightBottom：PosXY 表示水印右下点到图片右下点的相对位置</li>
<li>Center：PosXY 表示水印中心点到图片中心点的相对位置</li>
默认：LeftTop。
 * @method void setPosOriginType(string $PosOriginType) 设置指定坐标原点，可选值：
<li>LeftTop：PosXY 表示水印左上点到图片左上点的相对位置</li>
<li>RightTop：PosXY 表示水印右上点到图片右上点的相对位置</li>
<li>LeftBottom：PosXY 表示水印左下点到图片左下点的相对位置</li>
<li>RightBottom：PosXY 表示水印右下点到图片右下点的相对位置</li>
<li>Center：PosXY 表示水印中心点到图片中心点的相对位置</li>
默认：LeftTop。
 */
class MediaCuttingWatermarkImage extends AbstractModel
{
    /**
     * @var string 水印源的ID，对应SourceInfoSet内的源。
注意1：对应的 MediaSourceInfo.Type需要为Image。
注意2：对于动图，只取第一帧图像作为水印源。
     */
    public $SourceId;

    /**
     * @var integer 水印水平坐标，单位像素，默认：0。
     */
    public $PosX;

    /**
     * @var integer 水印垂直坐标，单位像素，默认：0。
     */
    public $PosY;

    /**
     * @var integer 水印宽度，单位像素，默认：0。
     */
    public $Width;

    /**
     * @var integer 水印高度，单位像素，默认：0。
注意：对于宽高符合以下规则：
1、Width>0 且 Height>0，按指定宽高拉伸；
2、Width=0 且 Height>0，以Height为基准等比缩放；
3、Width>0 且 Height=0，以Width为基准等比缩放；
4、Width=0 且 Height=0，采用源的宽高。
     */
    public $Height;

    /**
     * @var string 指定坐标原点，可选值：
<li>LeftTop：PosXY 表示水印左上点到图片左上点的相对位置</li>
<li>RightTop：PosXY 表示水印右上点到图片右上点的相对位置</li>
<li>LeftBottom：PosXY 表示水印左下点到图片左下点的相对位置</li>
<li>RightBottom：PosXY 表示水印右下点到图片右下点的相对位置</li>
<li>Center：PosXY 表示水印中心点到图片中心点的相对位置</li>
默认：LeftTop。
     */
    public $PosOriginType;

    /**
     * @param string $SourceId 水印源的ID，对应SourceInfoSet内的源。
注意1：对应的 MediaSourceInfo.Type需要为Image。
注意2：对于动图，只取第一帧图像作为水印源。
     * @param integer $PosX 水印水平坐标，单位像素，默认：0。
     * @param integer $PosY 水印垂直坐标，单位像素，默认：0。
     * @param integer $Width 水印宽度，单位像素，默认：0。
     * @param integer $Height 水印高度，单位像素，默认：0。
注意：对于宽高符合以下规则：
1、Width>0 且 Height>0，按指定宽高拉伸；
2、Width=0 且 Height>0，以Height为基准等比缩放；
3、Width>0 且 Height=0，以Width为基准等比缩放；
4、Width=0 且 Height=0，采用源的宽高。
     * @param string $PosOriginType 指定坐标原点，可选值：
<li>LeftTop：PosXY 表示水印左上点到图片左上点的相对位置</li>
<li>RightTop：PosXY 表示水印右上点到图片右上点的相对位置</li>
<li>LeftBottom：PosXY 表示水印左下点到图片左下点的相对位置</li>
<li>RightBottom：PosXY 表示水印右下点到图片右下点的相对位置</li>
<li>Center：PosXY 表示水印中心点到图片中心点的相对位置</li>
默认：LeftTop。
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
        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("PosX",$param) and $param["PosX"] !== null) {
            $this->PosX = $param["PosX"];
        }

        if (array_key_exists("PosY",$param) and $param["PosY"] !== null) {
            $this->PosY = $param["PosY"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("PosOriginType",$param) and $param["PosOriginType"] !== null) {
            $this->PosOriginType = $param["PosOriginType"];
        }
    }
}
