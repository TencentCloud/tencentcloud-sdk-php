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
 * 数字人直播间信息。
 *
 * @method string getRoomId() 获取数字人直播间 ID。
 * @method void setRoomId(string $RoomId) 设置数字人直播间 ID。
 * @method string getName() 获取数字人直播间名称。
 * @method void setName(string $Name) 设置数字人直播间名称。
 * @method string getStatus() 获取数字人直播间状态，
CLOSE - 未开播。
OPEN - 直播中。

 * @method void setStatus(string $Status) 设置数字人直播间状态，
CLOSE - 未开播。
OPEN - 直播中。

 * @method string getAvatarKey() 获取数字人形象 KEY。
 * @method void setAvatarKey(string $AvatarKey) 设置数字人形象 KEY。
 * @method string getTimbreKey() 获取音色 KEy。
 * @method void setTimbreKey(string $TimbreKey) 设置音色 KEy。
 * @method string getAvatarImageUrl() 获取数字人形象图片 URL。
 * @method void setAvatarImageUrl(string $AvatarImageUrl) 设置数字人形象图片 URL。
 * @method string getBackgroundUrl() 获取背景图片 URL。
 * @method void setBackgroundUrl(string $BackgroundUrl) 设置背景图片 URL。
 * @method string getComment() 获取推流目标描述。
 * @method void setComment(string $Comment) 设置推流目标描述。
 * @method string getToUrl() 获取目标推流地址。
 * @method void setToUrl(string $ToUrl) 设置目标推流地址。
 * @method float getAnchorScale() 获取主播大小，默认1.00。 取值范围(0, 15.00]。
 * @method void setAnchorScale(float $AnchorScale) 设置主播大小，默认1.00。 取值范围(0, 15.00]。
 * @method integer getAnchorVerticalPos() 获取主播纵向位置。默认-1贴底部。
 * @method void setAnchorVerticalPos(integer $AnchorVerticalPos) 设置主播纵向位置。默认-1贴底部。
 * @method integer getAnchorHorizontalPos() 获取主播横向位置。默认-1居中。
 * @method void setAnchorHorizontalPos(integer $AnchorHorizontalPos) 设置主播横向位置。默认-1居中。
 * @method float getSpeechSpeed() 获取语速（1.0为正常语速，范围[0.5-1.5]，值为0.5时播报语速最慢，值为1.5时播报语速最快。
 * @method void setSpeechSpeed(float $SpeechSpeed) 设置语速（1.0为正常语速，范围[0.5-1.5]，值为0.5时播报语速最慢，值为1.5时播报语速最快。
 * @method integer getSpeechVolume() 获取音量大小，范围[0，10]，对应音量大小。默认为0，代表正常音量，值越大音量越高。
 * @method void setSpeechVolume(integer $SpeechVolume) 设置音量大小，范围[0，10]，对应音量大小。默认为0，代表正常音量，值越大音量越高。
 * @method string getCreateTime() 获取直播间创建时间，UTC时间。
注意：UTC时间和北京时间相差八小时。
 * @method void setCreateTime(string $CreateTime) 设置直播间创建时间，UTC时间。
注意：UTC时间和北京时间相差八小时。
 * @method string getUpdateTime() 获取直播间最后更新时间，UTC时间。
注意：UTC时间和北京时间相差八小时。
 * @method void setUpdateTime(string $UpdateTime) 设置直播间最后更新时间，UTC时间。
注意：UTC时间和北京时间相差八小时。
 */
class AvatarRoomInfo extends AbstractModel
{
    /**
     * @var string 数字人直播间 ID。
     */
    public $RoomId;

    /**
     * @var string 数字人直播间名称。
     */
    public $Name;

    /**
     * @var string 数字人直播间状态，
CLOSE - 未开播。
OPEN - 直播中。

     */
    public $Status;

    /**
     * @var string 数字人形象 KEY。
     */
    public $AvatarKey;

    /**
     * @var string 音色 KEy。
     */
    public $TimbreKey;

    /**
     * @var string 数字人形象图片 URL。
     */
    public $AvatarImageUrl;

    /**
     * @var string 背景图片 URL。
     */
    public $BackgroundUrl;

    /**
     * @var string 推流目标描述。
     */
    public $Comment;

    /**
     * @var string 目标推流地址。
     */
    public $ToUrl;

    /**
     * @var float 主播大小，默认1.00。 取值范围(0, 15.00]。
     */
    public $AnchorScale;

    /**
     * @var integer 主播纵向位置。默认-1贴底部。
     */
    public $AnchorVerticalPos;

    /**
     * @var integer 主播横向位置。默认-1居中。
     */
    public $AnchorHorizontalPos;

    /**
     * @var float 语速（1.0为正常语速，范围[0.5-1.5]，值为0.5时播报语速最慢，值为1.5时播报语速最快。
     */
    public $SpeechSpeed;

    /**
     * @var integer 音量大小，范围[0，10]，对应音量大小。默认为0，代表正常音量，值越大音量越高。
     */
    public $SpeechVolume;

    /**
     * @var string 直播间创建时间，UTC时间。
注意：UTC时间和北京时间相差八小时。
     */
    public $CreateTime;

    /**
     * @var string 直播间最后更新时间，UTC时间。
注意：UTC时间和北京时间相差八小时。
     */
    public $UpdateTime;

    /**
     * @param string $RoomId 数字人直播间 ID。
     * @param string $Name 数字人直播间名称。
     * @param string $Status 数字人直播间状态，
CLOSE - 未开播。
OPEN - 直播中。

     * @param string $AvatarKey 数字人形象 KEY。
     * @param string $TimbreKey 音色 KEy。
     * @param string $AvatarImageUrl 数字人形象图片 URL。
     * @param string $BackgroundUrl 背景图片 URL。
     * @param string $Comment 推流目标描述。
     * @param string $ToUrl 目标推流地址。
     * @param float $AnchorScale 主播大小，默认1.00。 取值范围(0, 15.00]。
     * @param integer $AnchorVerticalPos 主播纵向位置。默认-1贴底部。
     * @param integer $AnchorHorizontalPos 主播横向位置。默认-1居中。
     * @param float $SpeechSpeed 语速（1.0为正常语速，范围[0.5-1.5]，值为0.5时播报语速最慢，值为1.5时播报语速最快。
     * @param integer $SpeechVolume 音量大小，范围[0，10]，对应音量大小。默认为0，代表正常音量，值越大音量越高。
     * @param string $CreateTime 直播间创建时间，UTC时间。
注意：UTC时间和北京时间相差八小时。
     * @param string $UpdateTime 直播间最后更新时间，UTC时间。
注意：UTC时间和北京时间相差八小时。
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AvatarKey",$param) and $param["AvatarKey"] !== null) {
            $this->AvatarKey = $param["AvatarKey"];
        }

        if (array_key_exists("TimbreKey",$param) and $param["TimbreKey"] !== null) {
            $this->TimbreKey = $param["TimbreKey"];
        }

        if (array_key_exists("AvatarImageUrl",$param) and $param["AvatarImageUrl"] !== null) {
            $this->AvatarImageUrl = $param["AvatarImageUrl"];
        }

        if (array_key_exists("BackgroundUrl",$param) and $param["BackgroundUrl"] !== null) {
            $this->BackgroundUrl = $param["BackgroundUrl"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("ToUrl",$param) and $param["ToUrl"] !== null) {
            $this->ToUrl = $param["ToUrl"];
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
