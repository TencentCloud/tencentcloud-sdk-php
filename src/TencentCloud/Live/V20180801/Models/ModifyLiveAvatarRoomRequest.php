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
 * @method string getRoomId() 获取数字人直播间 ID。
 * @method void setRoomId(string $RoomId) 设置数字人直播间 ID。
 * @method string getName() 获取直播间名称。
 * @method void setName(string $Name) 设置直播间名称。
 * @method string getAvatarKey() 获取数字人形象KEY。
 * @method void setAvatarKey(string $AvatarKey) 设置数字人形象KEY。
 * @method string getTimbreKey() 获取音色KEY。
 * @method void setTimbreKey(string $TimbreKey) 设置音色KEY。
 * @method string getBackgroundUrl() 获取背景图片URL。
 * @method void setBackgroundUrl(string $BackgroundUrl) 设置背景图片URL。
 * @method float getAnchorScale() 获取主播大小，默认1.00。
取值范围(0, 15.00]。
精度：使用小数点后两位。
 * @method void setAnchorScale(float $AnchorScale) 设置主播大小，默认1.00。
取值范围(0, 15.00]。
精度：使用小数点后两位。
 * @method integer getAnchorVerticalPos() 获取主播纵向位置。默认-1贴底部。
左上角为原点，形象顶部离屏幕顶部的距离，最大不能使形象底部超出屏幕。
即该纵向位置最大为：数字人分辨率的高 - 形象高。
 * @method void setAnchorVerticalPos(integer $AnchorVerticalPos) 设置主播纵向位置。默认-1贴底部。
左上角为原点，形象顶部离屏幕顶部的距离，最大不能使形象底部超出屏幕。
即该纵向位置最大为：数字人分辨率的高 - 形象高。
 * @method integer getAnchorHorizontalPos() 获取主播横向位置。默认-1居中。
左上角为原点，形象左侧离左侧屏幕的距离。最大值不可使形象右侧超出右侧屏幕。
即最大值为：数字人分辨率的宽 - 形象宽。
 * @method void setAnchorHorizontalPos(integer $AnchorHorizontalPos) 设置主播横向位置。默认-1居中。
左上角为原点，形象左侧离左侧屏幕的距离。最大值不可使形象右侧超出右侧屏幕。
即最大值为：数字人分辨率的宽 - 形象宽。
 * @method float getSpeechSpeed() 获取语速（1.0为正常语速，范围[0.6-2.5]，值为0.6时播报语速最慢，值为2.5时播报语速最快。
 * @method void setSpeechSpeed(float $SpeechSpeed) 设置语速（1.0为正常语速，范围[0.6-2.5]，值为0.6时播报语速最慢，值为2.5时播报语速最快。
 * @method integer getSpeechVolume() 获取音量大小，范围[0，10]，对应音量大小。默认为5，代表正常音量，值越大音量越高。
 * @method void setSpeechVolume(integer $SpeechVolume) 设置音量大小，范围[0，10]，对应音量大小。默认为5，代表正常音量，值越大音量越高。
 * @method string getOperator() 获取操作者。
 * @method void setOperator(string $Operator) 设置操作者。
 */
class ModifyLiveAvatarRoomRequest extends AbstractModel
{
    /**
     * @var string 数字人直播间 ID。
     */
    public $RoomId;

    /**
     * @var string 直播间名称。
     */
    public $Name;

    /**
     * @var string 数字人形象KEY。
     */
    public $AvatarKey;

    /**
     * @var string 音色KEY。
     */
    public $TimbreKey;

    /**
     * @var string 背景图片URL。
     */
    public $BackgroundUrl;

    /**
     * @var float 主播大小，默认1.00。
取值范围(0, 15.00]。
精度：使用小数点后两位。
     */
    public $AnchorScale;

    /**
     * @var integer 主播纵向位置。默认-1贴底部。
左上角为原点，形象顶部离屏幕顶部的距离，最大不能使形象底部超出屏幕。
即该纵向位置最大为：数字人分辨率的高 - 形象高。
     */
    public $AnchorVerticalPos;

    /**
     * @var integer 主播横向位置。默认-1居中。
左上角为原点，形象左侧离左侧屏幕的距离。最大值不可使形象右侧超出右侧屏幕。
即最大值为：数字人分辨率的宽 - 形象宽。
     */
    public $AnchorHorizontalPos;

    /**
     * @var float 语速（1.0为正常语速，范围[0.6-2.5]，值为0.6时播报语速最慢，值为2.5时播报语速最快。
     */
    public $SpeechSpeed;

    /**
     * @var integer 音量大小，范围[0，10]，对应音量大小。默认为5，代表正常音量，值越大音量越高。
     */
    public $SpeechVolume;

    /**
     * @var string 操作者。
     */
    public $Operator;

    /**
     * @param string $RoomId 数字人直播间 ID。
     * @param string $Name 直播间名称。
     * @param string $AvatarKey 数字人形象KEY。
     * @param string $TimbreKey 音色KEY。
     * @param string $BackgroundUrl 背景图片URL。
     * @param float $AnchorScale 主播大小，默认1.00。
取值范围(0, 15.00]。
精度：使用小数点后两位。
     * @param integer $AnchorVerticalPos 主播纵向位置。默认-1贴底部。
左上角为原点，形象顶部离屏幕顶部的距离，最大不能使形象底部超出屏幕。
即该纵向位置最大为：数字人分辨率的高 - 形象高。
     * @param integer $AnchorHorizontalPos 主播横向位置。默认-1居中。
左上角为原点，形象左侧离左侧屏幕的距离。最大值不可使形象右侧超出右侧屏幕。
即最大值为：数字人分辨率的宽 - 形象宽。
     * @param float $SpeechSpeed 语速（1.0为正常语速，范围[0.6-2.5]，值为0.6时播报语速最慢，值为2.5时播报语速最快。
     * @param integer $SpeechVolume 音量大小，范围[0，10]，对应音量大小。默认为5，代表正常音量，值越大音量越高。
     * @param string $Operator 操作者。
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
    }
}
