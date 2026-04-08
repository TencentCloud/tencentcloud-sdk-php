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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLiveAvatarRoom请求参数结构体
 *
 * @method string getRoomId() 获取<p>数字人直播间 ID。</p>
 * @method void setRoomId(string $RoomId) 设置<p>数字人直播间 ID。</p>
 * @method string getName() 获取<p>直播间名称。</p>
 * @method void setName(string $Name) 设置<p>直播间名称。</p>
 * @method string getAvatarKey() 获取<p>数字人形象KEY。</p>
 * @method void setAvatarKey(string $AvatarKey) 设置<p>数字人形象KEY。</p>
 * @method string getTimbreKey() 获取<p>音色KEY。</p>
 * @method void setTimbreKey(string $TimbreKey) 设置<p>音色KEY。</p>
 * @method string getBackgroundUrl() 获取<p>背景图片URL。</p>
 * @method void setBackgroundUrl(string $BackgroundUrl) 设置<p>背景图片URL。</p>
 * @method float getAnchorScale() 获取<p>主播大小，默认1.00。<br>取值范围(0, 15.00]。<br>精度：使用小数点后两位。</p>
 * @method void setAnchorScale(float $AnchorScale) 设置<p>主播大小，默认1.00。<br>取值范围(0, 15.00]。<br>精度：使用小数点后两位。</p>
 * @method integer getAnchorVerticalPos() 获取<p>主播纵向位置。默认-1贴底部。<br>左上角为原点，形象顶部离屏幕顶部的距离，最大不能使形象底部超出屏幕。<br>即该纵向位置最大为：数字人分辨率的高 - 形象高。</p>
 * @method void setAnchorVerticalPos(integer $AnchorVerticalPos) 设置<p>主播纵向位置。默认-1贴底部。<br>左上角为原点，形象顶部离屏幕顶部的距离，最大不能使形象底部超出屏幕。<br>即该纵向位置最大为：数字人分辨率的高 - 形象高。</p>
 * @method integer getAnchorHorizontalPos() 获取<p>主播横向位置。默认-1居中。<br>左上角为原点，形象左侧离左侧屏幕的距离。最大值不可使形象右侧超出右侧屏幕。<br>即最大值为：数字人分辨率的宽 - 形象宽。</p>
 * @method void setAnchorHorizontalPos(integer $AnchorHorizontalPos) 设置<p>主播横向位置。默认-1居中。<br>左上角为原点，形象左侧离左侧屏幕的距离。最大值不可使形象右侧超出右侧屏幕。<br>即最大值为：数字人分辨率的宽 - 形象宽。</p>
 * @method float getSpeechSpeed() 获取<p>语速（1.0为正常语速，范围[0.6-2.5]，值为0.6时播报语速最慢，值为2.5时播报语速最快。</p>
 * @method void setSpeechSpeed(float $SpeechSpeed) 设置<p>语速（1.0为正常语速，范围[0.6-2.5]，值为0.6时播报语速最慢，值为2.5时播报语速最快。</p>
 * @method integer getSpeechVolume() 获取<p>音量大小，范围[0，10]，对应音量大小。默认为5，代表正常音量，值越大音量越高。</p>
 * @method void setSpeechVolume(integer $SpeechVolume) 设置<p>音量大小，范围[0，10]，对应音量大小。默认为5，代表正常音量，值越大音量越高。</p>
 * @method string getOperator() 获取<p>操作者。</p>
 * @method void setOperator(string $Operator) 设置<p>操作者。</p>
 * @method string getRoomType() 获取<p>房间类型。AIGC：AIGC形象房间；PRESET：预设形象房间</p><p>枚举值：</p><ul><li>AIGC： AIGC形象房间</li><li>PRESET： 预设形象房间</li></ul>
 * @method void setRoomType(string $RoomType) 设置<p>房间类型。AIGC：AIGC形象房间；PRESET：预设形象房间</p><p>枚举值：</p><ul><li>AIGC： AIGC形象房间</li><li>PRESET： 预设形象房间</li></ul>
 */
class ModifyLiveAvatarRoomRequest extends AbstractModel
{
    /**
     * @var string <p>数字人直播间 ID。</p>
     */
    public $RoomId;

    /**
     * @var string <p>直播间名称。</p>
     */
    public $Name;

    /**
     * @var string <p>数字人形象KEY。</p>
     */
    public $AvatarKey;

    /**
     * @var string <p>音色KEY。</p>
     */
    public $TimbreKey;

    /**
     * @var string <p>背景图片URL。</p>
     */
    public $BackgroundUrl;

    /**
     * @var float <p>主播大小，默认1.00。<br>取值范围(0, 15.00]。<br>精度：使用小数点后两位。</p>
     */
    public $AnchorScale;

    /**
     * @var integer <p>主播纵向位置。默认-1贴底部。<br>左上角为原点，形象顶部离屏幕顶部的距离，最大不能使形象底部超出屏幕。<br>即该纵向位置最大为：数字人分辨率的高 - 形象高。</p>
     */
    public $AnchorVerticalPos;

    /**
     * @var integer <p>主播横向位置。默认-1居中。<br>左上角为原点，形象左侧离左侧屏幕的距离。最大值不可使形象右侧超出右侧屏幕。<br>即最大值为：数字人分辨率的宽 - 形象宽。</p>
     */
    public $AnchorHorizontalPos;

    /**
     * @var float <p>语速（1.0为正常语速，范围[0.6-2.5]，值为0.6时播报语速最慢，值为2.5时播报语速最快。</p>
     */
    public $SpeechSpeed;

    /**
     * @var integer <p>音量大小，范围[0，10]，对应音量大小。默认为5，代表正常音量，值越大音量越高。</p>
     */
    public $SpeechVolume;

    /**
     * @var string <p>操作者。</p>
     */
    public $Operator;

    /**
     * @var string <p>房间类型。AIGC：AIGC形象房间；PRESET：预设形象房间</p><p>枚举值：</p><ul><li>AIGC： AIGC形象房间</li><li>PRESET： 预设形象房间</li></ul>
     */
    public $RoomType;

    /**
     * @param string $RoomId <p>数字人直播间 ID。</p>
     * @param string $Name <p>直播间名称。</p>
     * @param string $AvatarKey <p>数字人形象KEY。</p>
     * @param string $TimbreKey <p>音色KEY。</p>
     * @param string $BackgroundUrl <p>背景图片URL。</p>
     * @param float $AnchorScale <p>主播大小，默认1.00。<br>取值范围(0, 15.00]。<br>精度：使用小数点后两位。</p>
     * @param integer $AnchorVerticalPos <p>主播纵向位置。默认-1贴底部。<br>左上角为原点，形象顶部离屏幕顶部的距离，最大不能使形象底部超出屏幕。<br>即该纵向位置最大为：数字人分辨率的高 - 形象高。</p>
     * @param integer $AnchorHorizontalPos <p>主播横向位置。默认-1居中。<br>左上角为原点，形象左侧离左侧屏幕的距离。最大值不可使形象右侧超出右侧屏幕。<br>即最大值为：数字人分辨率的宽 - 形象宽。</p>
     * @param float $SpeechSpeed <p>语速（1.0为正常语速，范围[0.6-2.5]，值为0.6时播报语速最慢，值为2.5时播报语速最快。</p>
     * @param integer $SpeechVolume <p>音量大小，范围[0，10]，对应音量大小。默认为5，代表正常音量，值越大音量越高。</p>
     * @param string $Operator <p>操作者。</p>
     * @param string $RoomType <p>房间类型。AIGC：AIGC形象房间；PRESET：预设形象房间</p><p>枚举值：</p><ul><li>AIGC： AIGC形象房间</li><li>PRESET： 预设形象房间</li></ul>
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
        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("AvatarKey",$param) and $param["AvatarKey"] !== null) {
            $this->AvatarKey = $param["AvatarKey"];
        }

        if (array_key_exists("TimbreKey",$param) and $param["TimbreKey"] !== null) {
            $this->TimbreKey = $param["TimbreKey"];
        }

        if (array_key_exists("BackgroundUrl",$param) and $param["BackgroundUrl"] !== null) {
            $this->BackgroundUrl = $param["BackgroundUrl"];
        }

        if (array_key_exists("AnchorScale",$param) and $param["AnchorScale"] !== null) {
            $this->AnchorScale = $param["AnchorScale"];
        }

        if (array_key_exists("AnchorVerticalPos",$param) and $param["AnchorVerticalPos"] !== null) {
            $this->AnchorVerticalPos = $param["AnchorVerticalPos"];
        }

        if (array_key_exists("AnchorHorizontalPos",$param) and $param["AnchorHorizontalPos"] !== null) {
            $this->AnchorHorizontalPos = $param["AnchorHorizontalPos"];
        }

        if (array_key_exists("SpeechSpeed",$param) and $param["SpeechSpeed"] !== null) {
            $this->SpeechSpeed = $param["SpeechSpeed"];
        }

        if (array_key_exists("SpeechVolume",$param) and $param["SpeechVolume"] !== null) {
            $this->SpeechVolume = $param["SpeechVolume"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("RoomType",$param) and $param["RoomType"] !== null) {
            $this->RoomType = $param["RoomType"];
        }
    }
}
