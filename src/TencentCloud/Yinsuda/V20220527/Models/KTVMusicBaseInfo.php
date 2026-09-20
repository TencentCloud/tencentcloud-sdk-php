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
namespace TencentCloud\Yinsuda\V20220527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 歌曲基础信息。
 *
 * @method string getMusicId() 获取<p>歌曲Id。</p>
 * @method void setMusicId(string $MusicId) 设置<p>歌曲Id。</p>
 * @method string getName() 获取<p>歌曲名称。</p>
 * @method void setName(string $Name) 设置<p>歌曲名称。</p>
 * @method array getSingerSet() 获取<p>歌手名称。</p>
 * @method void setSingerSet(array $SingerSet) 设置<p>歌手名称。</p>
 * @method integer getDuration() 获取<p>播放时长。</p><p>单位：秒</p>
 * @method void setDuration(integer $Duration) 设置<p>播放时长。</p><p>单位：秒</p>
 * @method string getSingerImageUrl() 获取<p>歌手图片链接。</p>
 * @method void setSingerImageUrl(string $SingerImageUrl) 设置<p>歌手图片链接。</p>
 * @method MusicAlbumInfo getAlbumInfo() 获取<p>专辑信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlbumInfo(MusicAlbumInfo $AlbumInfo) 设置<p>专辑信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRightSet() 获取<p>权益列表，取值有：</p><li>Play：可播；</li><li>Sing：可唱。</li>
 * @method void setRightSet(array $RightSet) 设置<p>权益列表，取值有：</p><li>Play：可播；</li><li>Sing：可唱。</li>
 * @method string getRecommendType() 获取<p>推荐类型，取值有：</p><li>Featured：精选；</li><li>Other：其他。</li>
 * @method void setRecommendType(string $RecommendType) 设置<p>推荐类型，取值有：</p><li>Featured：精选；</li><li>Other：其他。</li>
 */
class KTVMusicBaseInfo extends AbstractModel
{
    /**
     * @var string <p>歌曲Id。</p>
     */
    public $MusicId;

    /**
     * @var string <p>歌曲名称。</p>
     */
    public $Name;

    /**
     * @var array <p>歌手名称。</p>
     */
    public $SingerSet;

    /**
     * @var integer <p>播放时长。</p><p>单位：秒</p>
     */
    public $Duration;

    /**
     * @var string <p>歌手图片链接。</p>
     */
    public $SingerImageUrl;

    /**
     * @var MusicAlbumInfo <p>专辑信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlbumInfo;

    /**
     * @var array <p>权益列表，取值有：</p><li>Play：可播；</li><li>Sing：可唱。</li>
     */
    public $RightSet;

    /**
     * @var string <p>推荐类型，取值有：</p><li>Featured：精选；</li><li>Other：其他。</li>
     */
    public $RecommendType;

    /**
     * @param string $MusicId <p>歌曲Id。</p>
     * @param string $Name <p>歌曲名称。</p>
     * @param array $SingerSet <p>歌手名称。</p>
     * @param integer $Duration <p>播放时长。</p><p>单位：秒</p>
     * @param string $SingerImageUrl <p>歌手图片链接。</p>
     * @param MusicAlbumInfo $AlbumInfo <p>专辑信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RightSet <p>权益列表，取值有：</p><li>Play：可播；</li><li>Sing：可唱。</li>
     * @param string $RecommendType <p>推荐类型，取值有：</p><li>Featured：精选；</li><li>Other：其他。</li>
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
