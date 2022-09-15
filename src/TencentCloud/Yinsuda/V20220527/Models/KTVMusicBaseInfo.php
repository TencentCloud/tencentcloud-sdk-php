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
namespace TencentCloud\Yinsuda\V20220527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 歌曲基础信息。
 *
 * @method string getMusicId() 获取歌曲Id。
 * @method void setMusicId(string $MusicId) 设置歌曲Id。
 * @method string getName() 获取歌曲名称。
 * @method void setName(string $Name) 设置歌曲名称。
 * @method array getSingerSet() 获取歌手名称。
 * @method void setSingerSet(array $SingerSet) 设置歌手名称。
 * @method integer getDuration() 获取播放时长。
 * @method void setDuration(integer $Duration) 设置播放时长。
 * @method string getSingerImageUrl() 获取歌手图片链接。
 * @method void setSingerImageUrl(string $SingerImageUrl) 设置歌手图片链接。
 * @method MusicAlbumInfo getAlbumInfo() 获取专辑信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlbumInfo(MusicAlbumInfo $AlbumInfo) 设置专辑信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRightSet() 获取权益列表，取值有：
<li>Play：可播；</li>
<li>Sing：可唱。</li>
 * @method void setRightSet(array $RightSet) 设置权益列表，取值有：
<li>Play：可播；</li>
<li>Sing：可唱。</li>
 * @method string getRecommendType() 获取推荐类型，取值有：
<li>Featured：精选；</li>
<li>Other：其他。</li>
 * @method void setRecommendType(string $RecommendType) 设置推荐类型，取值有：
<li>Featured：精选；</li>
<li>Other：其他。</li>
 */
class KTVMusicBaseInfo extends AbstractModel
{
    /**
     * @var string 歌曲Id。
     */
    public $MusicId;

    /**
     * @var string 歌曲名称。
     */
    public $Name;

    /**
     * @var array 歌手名称。
     */
    public $SingerSet;

    /**
     * @var integer 播放时长。
     */
    public $Duration;

    /**
     * @var string 歌手图片链接。
     */
    public $SingerImageUrl;

    /**
     * @var MusicAlbumInfo 专辑信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlbumInfo;

    /**
     * @var array 权益列表，取值有：
<li>Play：可播；</li>
<li>Sing：可唱。</li>
     */
    public $RightSet;

    /**
     * @var string 推荐类型，取值有：
<li>Featured：精选；</li>
<li>Other：其他。</li>
     */
    public $RecommendType;

    /**
     * @param string $MusicId 歌曲Id。
     * @param string $Name 歌曲名称。
     * @param array $SingerSet 歌手名称。
     * @param integer $Duration 播放时长。
     * @param string $SingerImageUrl 歌手图片链接。
     * @param MusicAlbumInfo $AlbumInfo 专辑信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RightSet 权益列表，取值有：
<li>Play：可播；</li>
<li>Sing：可唱。</li>
     * @param string $RecommendType 推荐类型，取值有：
<li>Featured：精选；</li>
<li>Other：其他。</li>
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
        if (array_key_exists("MusicId",$param) and $param["MusicId"] !== null) {
            $this->MusicId = $param["MusicId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SingerSet",$param) and $param["SingerSet"] !== null) {
            $this->SingerSet = $param["SingerSet"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("SingerImageUrl",$param) and $param["SingerImageUrl"] !== null) {
            $this->SingerImageUrl = $param["SingerImageUrl"];
        }

        if (array_key_exists("AlbumInfo",$param) and $param["AlbumInfo"] !== null) {
            $this->AlbumInfo = new MusicAlbumInfo();
            $this->AlbumInfo->deserialize($param["AlbumInfo"]);
        }

        if (array_key_exists("RightSet",$param) and $param["RightSet"] !== null) {
            $this->RightSet = $param["RightSet"];
        }

        if (array_key_exists("RecommendType",$param) and $param["RecommendType"] !== null) {
            $this->RecommendType = $param["RecommendType"];
        }
    }
}
