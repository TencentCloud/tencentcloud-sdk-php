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
 * @method string getRoomId() 获取<p>数字人直播间 ID。</p>
 * @method void setRoomId(string $RoomId) 设置<p>数字人直播间 ID。</p>
 * @method string getName() 获取<p>数字人直播间名称。</p>
 * @method void setName(string $Name) 设置<p>数字人直播间名称。</p>
 * @method string getStatus() 获取<p>数字人直播间状态，<br>CLOSE - 未开播。<br>OPEN - 直播中。</p><p>枚举值：</p><ul><li>CLOSE： 未开播</li><li>OPEN： 直播中</li></ul>
 * @method void setStatus(string $Status) 设置<p>数字人直播间状态，<br>CLOSE - 未开播。<br>OPEN - 直播中。</p><p>枚举值：</p><ul><li>CLOSE： 未开播</li><li>OPEN： 直播中</li></ul>
 * @method string getAvatarKey() 获取<p>数字人形象 KEY。</p>
 * @method void setAvatarKey(string $AvatarKey) 设置<p>数字人形象 KEY。</p>
 * @method string getTimbreKey() 获取<p>音色 KEY。</p>
 * @method void setTimbreKey(string $TimbreKey) 设置<p>音色 KEY。</p>
 * @method string getAvatarImageUrl() 获取<p>数字人形象图片 URL。</p>
 * @method void setAvatarImageUrl(string $AvatarImageUrl) 设置<p>数字人形象图片 URL。</p>
 * @method string getBackgroundUrl() 获取<p>背景图片 URL。</p>
 * @method void setBackgroundUrl(string $BackgroundUrl) 设置<p>背景图片 URL。</p>
 * @method string getComment() 获取<p>推流目标描述。</p>
 * @method void setComment(string $Comment) 设置<p>推流目标描述。</p>
 * @method string getToUrl() 获取<p>目标推流地址。</p>
 * @method void setToUrl(string $ToUrl) 设置<p>目标推流地址。</p>
 * @method float getAnchorScale() 获取<p>主播大小，默认1.00。 取值范围(0, 15.00]。</p>
 * @method void setAnchorScale(float $AnchorScale) 设置<p>主播大小，默认1.00。 取值范围(0, 15.00]。</p>
 * @method integer getAnchorVerticalPos() 获取<p>主播纵向位置。默认-1贴底部。</p>
 * @method void setAnchorVerticalPos(integer $AnchorVerticalPos) 设置<p>主播纵向位置。默认-1贴底部。</p>
 * @method integer getAnchorHorizontalPos() 获取<p>主播横向位置。默认-1居中。</p>
 * @method void setAnchorHorizontalPos(integer $AnchorHorizontalPos) 设置<p>主播横向位置。默认-1居中。</p>
 * @method float getSpeechSpeed() 获取<p>语速（1.0为正常语速，范围[0.5-1.5]，值为0.5时播报语速最慢，值为1.5时播报语速最快。</p>
 * @method void setSpeechSpeed(float $SpeechSpeed) 设置<p>语速（1.0为正常语速，范围[0.5-1.5]，值为0.5时播报语速最慢，值为1.5时播报语速最快。</p>
 * @method integer getSpeechVolume() 获取<p>音量大小，范围[0，10]，对应音量大小。默认为0，代表正常音量，值越大音量越高。</p>
 * @method void setSpeechVolume(integer $SpeechVolume) 设置<p>音量大小，范围[0，10]，对应音量大小。默认为0，代表正常音量，值越大音量越高。</p>
 * @method string getCreateTime() 获取<p>直播间创建时间，UTC时间。<br>注意：UTC时间和北京时间相差八小时。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>直播间创建时间，UTC时间。<br>注意：UTC时间和北京时间相差八小时。</p>
 * @method string getUpdateTime() 获取<p>直播间最后更新时间，UTC时间。<br>注意：UTC时间和北京时间相差八小时。</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>直播间最后更新时间，UTC时间。<br>注意：UTC时间和北京时间相差八小时。</p>
 * @method string getRoomType() 获取<p>直播间类型。</p><p>枚举值：</p><ul><li>AIGC： AIGC直播</li></ul>
 * @method void setRoomType(string $RoomType) 设置<p>直播间类型。</p><p>枚举值：</p><ul><li>AIGC： AIGC直播</li></ul>
 * @method string getAvatarAigcImageUrl() 获取<p>通过AIGC生成的数字人形象图片 URL。</p>
 * @method void setAvatarAigcImageUrl(string $AvatarAigcImageUrl) 设置<p>通过AIGC生成的数字人形象图片 URL。</p>
 */
class AvatarRoomInfo extends AbstractModel
{
    /**
     * @var string <p>数字人直播间 ID。</p>
     */
    public $RoomId;

    /**
     * @var string <p>数字人直播间名称。</p>
     */
    public $Name;

    /**
     * @var string <p>数字人直播间状态，<br>CLOSE - 未开播。<br>OPEN - 直播中。</p><p>枚举值：</p><ul><li>CLOSE： 未开播</li><li>OPEN： 直播中</li></ul>
     */
    public $Status;

    /**
     * @var string <p>数字人形象 KEY。</p>
     */
    public $AvatarKey;

    /**
     * @var string <p>音色 KEY。</p>
     */
    public $TimbreKey;

    /**
     * @var string <p>数字人形象图片 URL。</p>
     */
    public $AvatarImageUrl;

    /**
     * @var string <p>背景图片 URL。</p>
     */
    public $BackgroundUrl;

    /**
     * @var string <p>推流目标描述。</p>
     */
    public $Comment;

    /**
     * @var string <p>目标推流地址。</p>
     */
    public $ToUrl;

    /**
     * @var float <p>主播大小，默认1.00。 取值范围(0, 15.00]。</p>
     */
    public $AnchorScale;

    /**
     * @var integer <p>主播纵向位置。默认-1贴底部。</p>
     */
    public $AnchorVerticalPos;

    /**
     * @var integer <p>主播横向位置。默认-1居中。</p>
     */
    public $AnchorHorizontalPos;

    /**
     * @var float <p>语速（1.0为正常语速，范围[0.5-1.5]，值为0.5时播报语速最慢，值为1.5时播报语速最快。</p>
     */
    public $SpeechSpeed;

    /**
     * @var integer <p>音量大小，范围[0，10]，对应音量大小。默认为0，代表正常音量，值越大音量越高。</p>
     */
    public $SpeechVolume;

    /**
     * @var string <p>直播间创建时间，UTC时间。<br>注意：UTC时间和北京时间相差八小时。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>直播间最后更新时间，UTC时间。<br>注意：UTC时间和北京时间相差八小时。</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>直播间类型。</p><p>枚举值：</p><ul><li>AIGC： AIGC直播</li></ul>
     */
    public $RoomType;

    /**
     * @var string <p>通过AIGC生成的数字人形象图片 URL。</p>
     */
    public $AvatarAigcImageUrl;

    /**
     * @param string $RoomId <p>数字人直播间 ID。</p>
     * @param string $Name <p>数字人直播间名称。</p>
     * @param string $Status <p>数字人直播间状态，<br>CLOSE - 未开播。<br>OPEN - 直播中。</p><p>枚举值：</p><ul><li>CLOSE： 未开播</li><li>OPEN： 直播中</li></ul>
     * @param string $AvatarKey <p>数字人形象 KEY。</p>
     * @param string $TimbreKey <p>音色 KEY。</p>
     * @param string $AvatarImageUrl <p>数字人形象图片 URL。</p>
     * @param string $BackgroundUrl <p>背景图片 URL。</p>
     * @param string $Comment <p>推流目标描述。</p>
     * @param string $ToUrl <p>目标推流地址。</p>
     * @param float $AnchorScale <p>主播大小，默认1.00。 取值范围(0, 15.00]。</p>
     * @param integer $AnchorVerticalPos <p>主播纵向位置。默认-1贴底部。</p>
     * @param integer $AnchorHorizontalPos <p>主播横向位置。默认-1居中。</p>
     * @param float $SpeechSpeed <p>语速（1.0为正常语速，范围[0.5-1.5]，值为0.5时播报语速最慢，值为1.5时播报语速最快。</p>
     * @param integer $SpeechVolume <p>音量大小，范围[0，10]，对应音量大小。默认为0，代表正常音量，值越大音量越高。</p>
     * @param string $CreateTime <p>直播间创建时间，UTC时间。<br>注意：UTC时间和北京时间相差八小时。</p>
     * @param string $UpdateTime <p>直播间最后更新时间，UTC时间。<br>注意：UTC时间和北京时间相差八小时。</p>
     * @param string $RoomType <p>直播间类型。</p><p>枚举值：</p><ul><li>AIGC： AIGC直播</li></ul>
     * @param string $AvatarAigcImageUrl <p>通过AIGC生成的数字人形象图片 URL。</p>
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

        if (array_key_exists("RoomType",$param) and $param["RoomType"] !== null) {
            $this->RoomType = $param["RoomType"];
        }

        if (array_key_exists("AvatarAigcImageUrl",$param) and $param["AvatarAigcImageUrl"] !== null) {
            $this->AvatarAigcImageUrl = $param["AvatarAigcImageUrl"];
        }
    }
}
