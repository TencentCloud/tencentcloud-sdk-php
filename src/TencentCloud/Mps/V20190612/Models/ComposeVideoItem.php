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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频编辑/合成任务 视频元素信息。
 *
 * @method ComposeSourceMedia getSourceMedia() 获取元素对应媒体信息。
 * @method void setSourceMedia(ComposeSourceMedia $SourceMedia) 设置元素对应媒体信息。
 * @method ComposeTrackTime getTrackTime() 获取元素在轨道时间轴上的时间信息，不填则紧跟上一个元素。
 * @method void setTrackTime(ComposeTrackTime $TrackTime) 设置元素在轨道时间轴上的时间信息，不填则紧跟上一个元素。
 * @method string getXPos() 获取元素中心点距离画布原点的水平位置。支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示元素 XPos 为画布宽度指定百分比的位置，如 10% 表示 XPos 为画布宽度的 10%。</li>
<li>当字符串以 px 结尾，表示元素 XPos 单位为像素，如 100px 表示 XPos 为100像素。</li>
默认：50%。
 * @method void setXPos(string $XPos) 设置元素中心点距离画布原点的水平位置。支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示元素 XPos 为画布宽度指定百分比的位置，如 10% 表示 XPos 为画布宽度的 10%。</li>
<li>当字符串以 px 结尾，表示元素 XPos 单位为像素，如 100px 表示 XPos 为100像素。</li>
默认：50%。
 * @method string getYPos() 获取元素中心点距离画布原点的垂直位置。支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示元素 YPos 为画布高度指定百分比的位置，如 10% 表示 YPos 为画布高度的 10%。</li>
<li>当字符串以 px 结尾，表示元素 YPos 单位为像素，如 100px 表示 YPos 为100像素。</li>
默认：50%。
 * @method void setYPos(string $YPos) 设置元素中心点距离画布原点的垂直位置。支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示元素 YPos 为画布高度指定百分比的位置，如 10% 表示 YPos 为画布高度的 10%。</li>
<li>当字符串以 px 结尾，表示元素 YPos 单位为像素，如 100px 表示 YPos 为100像素。</li>
默认：50%。
 * @method string getWidth() 获取视频片段的宽度。支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示元素 Width 为画布宽度的百分比大小，如 10% 表示 Width 为画布宽度的 10%。</li>
<li>当字符串以 px 结尾，表示元素 Width 单位为像素，如 100px 表示 Width 为100像素。</li>
为空（或0） 的场景：
<li>当 Width、Height 均为空，则 Width 和 Height 取源素材本身的 Width、Height。</li>
<li>当 Width 为空，Height 非空，则 Width 按源素材比例缩放。</li>
<li>当 Width 非空，Height 为空，则 Height 按源素材比例缩放。</li>
 * @method void setWidth(string $Width) 设置视频片段的宽度。支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示元素 Width 为画布宽度的百分比大小，如 10% 表示 Width 为画布宽度的 10%。</li>
<li>当字符串以 px 结尾，表示元素 Width 单位为像素，如 100px 表示 Width 为100像素。</li>
为空（或0） 的场景：
<li>当 Width、Height 均为空，则 Width 和 Height 取源素材本身的 Width、Height。</li>
<li>当 Width 为空，Height 非空，则 Width 按源素材比例缩放。</li>
<li>当 Width 非空，Height 为空，则 Height 按源素材比例缩放。</li>
 * @method string getHeight() 获取元素的高度。支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示元素 Height 为画布高度的百分比大小，如 10% 表示 Height 为画布高度的 10%。</li>
<li>当字符串以 px 结尾，表示元素 Height 单位为像素，如 100px 表示 Height 为100像素。</li>
为空（或0） 的场景：
<li>当 Width、Height 均为空，则 Width 和 Height 取源素材本身的 Width、Height。</li>
<li>当 Width 为空，Height 非空，则 Width 按源素材比例缩放。</li>
<li>当 Width 非空，Height 为空，则 Height 按源素材比例缩放。</li>
 * @method void setHeight(string $Height) 设置元素的高度。支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示元素 Height 为画布高度的百分比大小，如 10% 表示 Height 为画布高度的 10%。</li>
<li>当字符串以 px 结尾，表示元素 Height 单位为像素，如 100px 表示 Height 为100像素。</li>
为空（或0） 的场景：
<li>当 Width、Height 均为空，则 Width 和 Height 取源素材本身的 Width、Height。</li>
<li>当 Width 为空，Height 非空，则 Width 按源素材比例缩放。</li>
<li>当 Width 非空，Height 为空，则 Height 按源素材比例缩放。</li>
 * @method array getImageOperations() 获取对图像画面进行的操作，如图像旋转等。
 * @method void setImageOperations(array $ImageOperations) 设置对图像画面进行的操作，如图像旋转等。
 * @method array getAudioOperations() 获取对音频进行操作，如静音等。
 * @method void setAudioOperations(array $AudioOperations) 设置对音频进行操作，如静音等。
 */
class ComposeVideoItem extends AbstractModel
{
    /**
     * @var ComposeSourceMedia 元素对应媒体信息。
     */
    public $SourceMedia;

    /**
     * @var ComposeTrackTime 元素在轨道时间轴上的时间信息，不填则紧跟上一个元素。
     */
    public $TrackTime;

    /**
     * @var string 元素中心点距离画布原点的水平位置。支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示元素 XPos 为画布宽度指定百分比的位置，如 10% 表示 XPos 为画布宽度的 10%。</li>
<li>当字符串以 px 结尾，表示元素 XPos 单位为像素，如 100px 表示 XPos 为100像素。</li>
默认：50%。
     */
    public $XPos;

    /**
     * @var string 元素中心点距离画布原点的垂直位置。支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示元素 YPos 为画布高度指定百分比的位置，如 10% 表示 YPos 为画布高度的 10%。</li>
<li>当字符串以 px 结尾，表示元素 YPos 单位为像素，如 100px 表示 YPos 为100像素。</li>
默认：50%。
     */
    public $YPos;

    /**
     * @var string 视频片段的宽度。支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示元素 Width 为画布宽度的百分比大小，如 10% 表示 Width 为画布宽度的 10%。</li>
<li>当字符串以 px 结尾，表示元素 Width 单位为像素，如 100px 表示 Width 为100像素。</li>
为空（或0） 的场景：
<li>当 Width、Height 均为空，则 Width 和 Height 取源素材本身的 Width、Height。</li>
<li>当 Width 为空，Height 非空，则 Width 按源素材比例缩放。</li>
<li>当 Width 非空，Height 为空，则 Height 按源素材比例缩放。</li>
     */
    public $Width;

    /**
     * @var string 元素的高度。支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示元素 Height 为画布高度的百分比大小，如 10% 表示 Height 为画布高度的 10%。</li>
<li>当字符串以 px 结尾，表示元素 Height 单位为像素，如 100px 表示 Height 为100像素。</li>
为空（或0） 的场景：
<li>当 Width、Height 均为空，则 Width 和 Height 取源素材本身的 Width、Height。</li>
<li>当 Width 为空，Height 非空，则 Width 按源素材比例缩放。</li>
<li>当 Width 非空，Height 为空，则 Height 按源素材比例缩放。</li>
     */
    public $Height;

    /**
     * @var array 对图像画面进行的操作，如图像旋转等。
     */
    public $ImageOperations;

    /**
     * @var array 对音频进行操作，如静音等。
     */
    public $AudioOperations;

    /**
     * @param ComposeSourceMedia $SourceMedia 元素对应媒体信息。
     * @param ComposeTrackTime $TrackTime 元素在轨道时间轴上的时间信息，不填则紧跟上一个元素。
     * @param string $XPos 元素中心点距离画布原点的水平位置。支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示元素 XPos 为画布宽度指定百分比的位置，如 10% 表示 XPos 为画布宽度的 10%。</li>
<li>当字符串以 px 结尾，表示元素 XPos 单位为像素，如 100px 表示 XPos 为100像素。</li>
默认：50%。
     * @param string $YPos 元素中心点距离画布原点的垂直位置。支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示元素 YPos 为画布高度指定百分比的位置，如 10% 表示 YPos 为画布高度的 10%。</li>
<li>当字符串以 px 结尾，表示元素 YPos 单位为像素，如 100px 表示 YPos 为100像素。</li>
默认：50%。
     * @param string $Width 视频片段的宽度。支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示元素 Width 为画布宽度的百分比大小，如 10% 表示 Width 为画布宽度的 10%。</li>
<li>当字符串以 px 结尾，表示元素 Width 单位为像素，如 100px 表示 Width 为100像素。</li>
为空（或0） 的场景：
<li>当 Width、Height 均为空，则 Width 和 Height 取源素材本身的 Width、Height。</li>
<li>当 Width 为空，Height 非空，则 Width 按源素材比例缩放。</li>
<li>当 Width 非空，Height 为空，则 Height 按源素材比例缩放。</li>
     * @param string $Height 元素的高度。支持 %、px 两种格式：
<li>当字符串以 % 结尾，表示元素 Height 为画布高度的百分比大小，如 10% 表示 Height 为画布高度的 10%。</li>
<li>当字符串以 px 结尾，表示元素 Height 单位为像素，如 100px 表示 Height 为100像素。</li>
为空（或0） 的场景：
<li>当 Width、Height 均为空，则 Width 和 Height 取源素材本身的 Width、Height。</li>
<li>当 Width 为空，Height 非空，则 Width 按源素材比例缩放。</li>
<li>当 Width 非空，Height 为空，则 Height 按源素材比例缩放。</li>
     * @param array $ImageOperations 对图像画面进行的操作，如图像旋转等。
     * @param array $AudioOperations 对音频进行操作，如静音等。
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
        if (array_key_exists("SourceMedia",$param) and $param["SourceMedia"] !== null) {
            $this->SourceMedia = new ComposeSourceMedia();
            $this->SourceMedia->deserialize($param["SourceMedia"]);
        }

        if (array_key_exists("TrackTime",$param) and $param["TrackTime"] !== null) {
            $this->TrackTime = new ComposeTrackTime();
            $this->TrackTime->deserialize($param["TrackTime"]);
        }

        if (array_key_exists("XPos",$param) and $param["XPos"] !== null) {
            $this->XPos = $param["XPos"];
        }

        if (array_key_exists("YPos",$param) and $param["YPos"] !== null) {
            $this->YPos = $param["YPos"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("ImageOperations",$param) and $param["ImageOperations"] !== null) {
            $this->ImageOperations = [];
            foreach ($param["ImageOperations"] as $key => $value){
                $obj = new ComposeImageOperation();
                $obj->deserialize($value);
                array_push($this->ImageOperations, $obj);
            }
        }

        if (array_key_exists("AudioOperations",$param) and $param["AudioOperations"] !== null) {
            $this->AudioOperations = [];
            foreach ($param["AudioOperations"] as $key => $value){
                $obj = new ComposeAudioOperation();
                $obj->deserialize($value);
                array_push($this->AudioOperations, $obj);
            }
        }
    }
}
