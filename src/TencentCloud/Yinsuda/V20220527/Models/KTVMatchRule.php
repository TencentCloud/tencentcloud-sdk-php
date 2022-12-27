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
 * 歌曲匹配规则。
 *
 * @method string getAMEMusicId() 获取AME 曲库 Id。
 * @method void setAMEMusicId(string $AMEMusicId) 设置AME 曲库 Id。
 * @method KTVMatchRuleMusicInfo getMusicInfo() 获取歌曲匹配信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMusicInfo(KTVMatchRuleMusicInfo $MusicInfo) 设置歌曲匹配信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMusicIdToMatchAME() 获取音速达歌曲 Id，用于匹配 AME 曲库歌曲。
 * @method void setMusicIdToMatchAME(string $MusicIdToMatchAME) 设置音速达歌曲 Id，用于匹配 AME 曲库歌曲。
 */
class KTVMatchRule extends AbstractModel
{
    /**
     * @var string AME 曲库 Id。
     */
    public $AMEMusicId;

    /**
     * @var KTVMatchRuleMusicInfo 歌曲匹配信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MusicInfo;

    /**
     * @var string 音速达歌曲 Id，用于匹配 AME 曲库歌曲。
     */
    public $MusicIdToMatchAME;

    /**
     * @param string $AMEMusicId AME 曲库 Id。
     * @param KTVMatchRuleMusicInfo $MusicInfo 歌曲匹配信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MusicIdToMatchAME 音速达歌曲 Id，用于匹配 AME 曲库歌曲。
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
        if (array_key_exists("AMEMusicId",$param) and $param["AMEMusicId"] !== null) {
            $this->AMEMusicId = $param["AMEMusicId"];
        }

        if (array_key_exists("MusicInfo",$param) and $param["MusicInfo"] !== null) {
            $this->MusicInfo = new KTVMatchRuleMusicInfo();
            $this->MusicInfo->deserialize($param["MusicInfo"]);
        }

        if (array_key_exists("MusicIdToMatchAME",$param) and $param["MusicIdToMatchAME"] !== null) {
            $this->MusicIdToMatchAME = $param["MusicIdToMatchAME"];
        }
    }
}
