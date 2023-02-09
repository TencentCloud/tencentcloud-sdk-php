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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetWatermark请求参数结构体
 *
 * @method integer getSdkAppId() 获取低代码互动课堂的SdkAppId。

 * @method void setSdkAppId(integer $SdkAppId) 设置低代码互动课堂的SdkAppId。

 * @method string getTeacherUrl() 获取老师视频区域的水印参数地址，设置为空字符串表示删除
 * @method void setTeacherUrl(string $TeacherUrl) 设置老师视频区域的水印参数地址，设置为空字符串表示删除
 * @method string getBoardUrl() 获取白板视频区域的水印参数地址，设置为空字符串表示删除
 * @method void setBoardUrl(string $BoardUrl) 设置白板视频区域的水印参数地址，设置为空字符串表示删除
 * @method string getVideoUrl() 获取视频默认图片（在没有视频流的时候显示），设置为空字符串表示删除
 * @method void setVideoUrl(string $VideoUrl) 设置视频默认图片（在没有视频流的时候显示），设置为空字符串表示删除
 * @method float getBoardW() 获取白板区域水印的宽度，取值:0-100，默认为0，表示区域X方向的百分比
 * @method void setBoardW(float $BoardW) 设置白板区域水印的宽度，取值:0-100，默认为0，表示区域X方向的百分比
 * @method float getBoardH() 获取白板区域水印的高度，取值:0-100，默认为0, 表示区域Y方向的百分比
 * @method void setBoardH(float $BoardH) 设置白板区域水印的高度，取值:0-100，默认为0, 表示区域Y方向的百分比
 * @method float getBoardX() 获取白板区域水印X偏移, 取值:0-100, 表示区域X方向的百分比。比如50，则表示位于X轴中间
 * @method void setBoardX(float $BoardX) 设置白板区域水印X偏移, 取值:0-100, 表示区域X方向的百分比。比如50，则表示位于X轴中间
 * @method float getBoardY() 获取白板区域水印Y偏移, 取值:0-100, 表示区域X方向的百分比。比如50，则表示位于X轴中间
 * @method void setBoardY(float $BoardY) 设置白板区域水印Y偏移, 取值:0-100, 表示区域X方向的百分比。比如50，则表示位于X轴中间
 * @method float getTeacherW() 获取老师视频区域水印的宽度，取值:0-100，默认为0，表示区域X方向的百分比
 * @method void setTeacherW(float $TeacherW) 设置老师视频区域水印的宽度，取值:0-100，默认为0，表示区域X方向的百分比
 * @method float getTeacherH() 获取老师视频区域水印的高度，取值:0-100，默认为0, 表示区域Y方向的百分比
 * @method void setTeacherH(float $TeacherH) 设置老师视频区域水印的高度，取值:0-100，默认为0, 表示区域Y方向的百分比
 * @method float getTeacherX() 获取老师视频区域水印X偏移, 取值:0-100, 表示区域X方向的百分比。比如50，则表示位于X轴中间
 * @method void setTeacherX(float $TeacherX) 设置老师视频区域水印X偏移, 取值:0-100, 表示区域X方向的百分比。比如50，则表示位于X轴中间
 * @method float getTeacherY() 获取老师视频区域水印Y偏移, 取值:0-100, 表示区域X方向的百分比。比如50，则表示位于X轴中间
 * @method void setTeacherY(float $TeacherY) 设置老师视频区域水印Y偏移, 取值:0-100, 表示区域X方向的百分比。比如50，则表示位于X轴中间
 * @method string getText() 获取文字水印内容，设置为空字符串表示删除
 * @method void setText(string $Text) 设置文字水印内容，设置为空字符串表示删除
 * @method string getTextColor() 获取文字水印颜色
 * @method void setTextColor(string $TextColor) 设置文字水印颜色
 */
class SetWatermarkRequest extends AbstractModel
{
    /**
     * @var integer 低代码互动课堂的SdkAppId。

     */
    public $SdkAppId;

    /**
     * @var string 老师视频区域的水印参数地址，设置为空字符串表示删除
     */
    public $TeacherUrl;

    /**
     * @var string 白板视频区域的水印参数地址，设置为空字符串表示删除
     */
    public $BoardUrl;

    /**
     * @var string 视频默认图片（在没有视频流的时候显示），设置为空字符串表示删除
     */
    public $VideoUrl;

    /**
     * @var float 白板区域水印的宽度，取值:0-100，默认为0，表示区域X方向的百分比
     */
    public $BoardW;

    /**
     * @var float 白板区域水印的高度，取值:0-100，默认为0, 表示区域Y方向的百分比
     */
    public $BoardH;

    /**
     * @var float 白板区域水印X偏移, 取值:0-100, 表示区域X方向的百分比。比如50，则表示位于X轴中间
     */
    public $BoardX;

    /**
     * @var float 白板区域水印Y偏移, 取值:0-100, 表示区域X方向的百分比。比如50，则表示位于X轴中间
     */
    public $BoardY;

    /**
     * @var float 老师视频区域水印的宽度，取值:0-100，默认为0，表示区域X方向的百分比
     */
    public $TeacherW;

    /**
     * @var float 老师视频区域水印的高度，取值:0-100，默认为0, 表示区域Y方向的百分比
     */
    public $TeacherH;

    /**
     * @var float 老师视频区域水印X偏移, 取值:0-100, 表示区域X方向的百分比。比如50，则表示位于X轴中间
     */
    public $TeacherX;

    /**
     * @var float 老师视频区域水印Y偏移, 取值:0-100, 表示区域X方向的百分比。比如50，则表示位于X轴中间
     */
    public $TeacherY;

    /**
     * @var string 文字水印内容，设置为空字符串表示删除
     */
    public $Text;

    /**
     * @var string 文字水印颜色
     */
    public $TextColor;

    /**
     * @param integer $SdkAppId 低代码互动课堂的SdkAppId。

     * @param string $TeacherUrl 老师视频区域的水印参数地址，设置为空字符串表示删除
     * @param string $BoardUrl 白板视频区域的水印参数地址，设置为空字符串表示删除
     * @param string $VideoUrl 视频默认图片（在没有视频流的时候显示），设置为空字符串表示删除
     * @param float $BoardW 白板区域水印的宽度，取值:0-100，默认为0，表示区域X方向的百分比
     * @param float $BoardH 白板区域水印的高度，取值:0-100，默认为0, 表示区域Y方向的百分比
     * @param float $BoardX 白板区域水印X偏移, 取值:0-100, 表示区域X方向的百分比。比如50，则表示位于X轴中间
     * @param float $BoardY 白板区域水印Y偏移, 取值:0-100, 表示区域X方向的百分比。比如50，则表示位于X轴中间
     * @param float $TeacherW 老师视频区域水印的宽度，取值:0-100，默认为0，表示区域X方向的百分比
     * @param float $TeacherH 老师视频区域水印的高度，取值:0-100，默认为0, 表示区域Y方向的百分比
     * @param float $TeacherX 老师视频区域水印X偏移, 取值:0-100, 表示区域X方向的百分比。比如50，则表示位于X轴中间
     * @param float $TeacherY 老师视频区域水印Y偏移, 取值:0-100, 表示区域X方向的百分比。比如50，则表示位于X轴中间
     * @param string $Text 文字水印内容，设置为空字符串表示删除
     * @param string $TextColor 文字水印颜色
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("TeacherUrl",$param) and $param["TeacherUrl"] !== null) {
            $this->TeacherUrl = $param["TeacherUrl"];
        }

        if (array_key_exists("BoardUrl",$param) and $param["BoardUrl"] !== null) {
            $this->BoardUrl = $param["BoardUrl"];
        }

        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("BoardW",$param) and $param["BoardW"] !== null) {
            $this->BoardW = $param["BoardW"];
        }

        if (array_key_exists("BoardH",$param) and $param["BoardH"] !== null) {
            $this->BoardH = $param["BoardH"];
        }

        if (array_key_exists("BoardX",$param) and $param["BoardX"] !== null) {
            $this->BoardX = $param["BoardX"];
        }

        if (array_key_exists("BoardY",$param) and $param["BoardY"] !== null) {
            $this->BoardY = $param["BoardY"];
        }

        if (array_key_exists("TeacherW",$param) and $param["TeacherW"] !== null) {
            $this->TeacherW = $param["TeacherW"];
        }

        if (array_key_exists("TeacherH",$param) and $param["TeacherH"] !== null) {
            $this->TeacherH = $param["TeacherH"];
        }

        if (array_key_exists("TeacherX",$param) and $param["TeacherX"] !== null) {
            $this->TeacherX = $param["TeacherX"];
        }

        if (array_key_exists("TeacherY",$param) and $param["TeacherY"] !== null) {
            $this->TeacherY = $param["TeacherY"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("TextColor",$param) and $param["TextColor"] !== null) {
            $this->TextColor = $param["TextColor"];
        }
    }
}
