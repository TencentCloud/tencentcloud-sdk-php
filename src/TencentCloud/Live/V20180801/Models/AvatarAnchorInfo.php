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
 * 数字人主播信息。
 *
 * @method string getAnchorName() 获取主播昵称。同一个主播可以存在多个数字人ID。
 * @method void setAnchorName(string $AnchorName) 设置主播昵称。同一个主播可以存在多个数字人ID。
 * @method string getAnchorId() 获取主播 ID。用于标识主播形象。同一个主播ID可存在竖屏和横屏两种数字人。
 * @method void setAnchorId(string $AnchorId) 设置主播 ID。用于标识主播形象。同一个主播ID可存在竖屏和横屏两种数字人。
 * @method string getAnchorGender() 获取主播性别。male-男性，femal-女性。
 * @method void setAnchorGender(string $AnchorGender) 设置主播性别。male-男性，femal-女性。
 * @method string getPoseImage() 获取形象图片。
 * @method void setPoseImage(string $PoseImage) 设置形象图片。
 * @method string getPoseImageResolution() 获取主播形象图片的分辨率。
 * @method void setPoseImageResolution(string $PoseImageResolution) 设置主播形象图片的分辨率。
 * @method string getReferenceVideoSegmentUrl() 获取形象预览视频段。
 * @method void setReferenceVideoSegmentUrl(string $ReferenceVideoSegmentUrl) 设置形象预览视频段。
 * @method AvatarImageInfo getHorizontalAvatar() 获取横屏数字人信息。
 * @method void setHorizontalAvatar(AvatarImageInfo $HorizontalAvatar) 设置横屏数字人信息。
 * @method AvatarImageInfo getVerticalAvatar() 获取竖屏数字人信息。
 * @method void setVerticalAvatar(AvatarImageInfo $VerticalAvatar) 设置竖屏数字人信息。
 * @method string getSuggestTimbreKey() 获取推荐音色。
 * @method void setSuggestTimbreKey(string $SuggestTimbreKey) 设置推荐音色。
 */
class AvatarAnchorInfo extends AbstractModel
{
    /**
     * @var string 主播昵称。同一个主播可以存在多个数字人ID。
     */
    public $AnchorName;

    /**
     * @var string 主播 ID。用于标识主播形象。同一个主播ID可存在竖屏和横屏两种数字人。
     */
    public $AnchorId;

    /**
     * @var string 主播性别。male-男性，femal-女性。
     */
    public $AnchorGender;

    /**
     * @var string 形象图片。
     */
    public $PoseImage;

    /**
     * @var string 主播形象图片的分辨率。
     */
    public $PoseImageResolution;

    /**
     * @var string 形象预览视频段。
     */
    public $ReferenceVideoSegmentUrl;

    /**
     * @var AvatarImageInfo 横屏数字人信息。
     */
    public $HorizontalAvatar;

    /**
     * @var AvatarImageInfo 竖屏数字人信息。
     */
    public $VerticalAvatar;

    /**
     * @var string 推荐音色。
     */
    public $SuggestTimbreKey;

    /**
     * @param string $AnchorName 主播昵称。同一个主播可以存在多个数字人ID。
     * @param string $AnchorId 主播 ID。用于标识主播形象。同一个主播ID可存在竖屏和横屏两种数字人。
     * @param string $AnchorGender 主播性别。male-男性，femal-女性。
     * @param string $PoseImage 形象图片。
     * @param string $PoseImageResolution 主播形象图片的分辨率。
     * @param string $ReferenceVideoSegmentUrl 形象预览视频段。
     * @param AvatarImageInfo $HorizontalAvatar 横屏数字人信息。
     * @param AvatarImageInfo $VerticalAvatar 竖屏数字人信息。
     * @param string $SuggestTimbreKey 推荐音色。
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
        if (array_key_exists("AnchorName",$param) and $param["AnchorName"] !== null) {
            $this->AnchorName = $param["AnchorName"];
        }

        if (array_key_exists("AnchorId",$param) and $param["AnchorId"] !== null) {
            $this->AnchorId = $param["AnchorId"];
        }

        if (array_key_exists("AnchorGender",$param) and $param["AnchorGender"] !== null) {
            $this->AnchorGender = $param["AnchorGender"];
        }

        if (array_key_exists("PoseImage",$param) and $param["PoseImage"] !== null) {
            $this->PoseImage = $param["PoseImage"];
        }

        if (array_key_exists("PoseImageResolution",$param) and $param["PoseImageResolution"] !== null) {
            $this->PoseImageResolution = $param["PoseImageResolution"];
        }

        if (array_key_exists("ReferenceVideoSegmentUrl",$param) and $param["ReferenceVideoSegmentUrl"] !== null) {
            $this->ReferenceVideoSegmentUrl = $param["ReferenceVideoSegmentUrl"];
        }

        if (array_key_exists("HorizontalAvatar",$param) and $param["HorizontalAvatar"] !== null) {
            $this->HorizontalAvatar = new AvatarImageInfo();
            $this->HorizontalAvatar->deserialize($param["HorizontalAvatar"]);
        }

        if (array_key_exists("VerticalAvatar",$param) and $param["VerticalAvatar"] !== null) {
            $this->VerticalAvatar = new AvatarImageInfo();
            $this->VerticalAvatar->deserialize($param["VerticalAvatar"]);
        }

        if (array_key_exists("SuggestTimbreKey",$param) and $param["SuggestTimbreKey"] !== null) {
            $this->SuggestTimbreKey = $param["SuggestTimbreKey"];
        }
    }
}
