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
 * 匹配歌曲信息。
 *
 * @method KTVMusicBaseInfo getKTVMusicBaseInfo() 获取匹配到的歌曲基础信息。
 * @method void setKTVMusicBaseInfo(KTVMusicBaseInfo $KTVMusicBaseInfo) 设置匹配到的歌曲基础信息。
 * @method KTVMatchRule getMatchRule() 获取命中规则。
 * @method void setMatchRule(KTVMatchRule $MatchRule) 设置命中规则。
 * @method AMEMusicBaseInfo getAMEMusicBaseInfo() 获取AME 歌曲基础信息，仅在使用音速达歌曲 Id 匹配 AME 曲库时有效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAMEMusicBaseInfo(AMEMusicBaseInfo $AMEMusicBaseInfo) 设置AME 歌曲基础信息，仅在使用音速达歌曲 Id 匹配 AME 曲库时有效。
注意：此字段可能返回 null，表示取不到有效值。
 */
class KTVMatchMusic extends AbstractModel
{
    /**
     * @var KTVMusicBaseInfo 匹配到的歌曲基础信息。
     */
    public $KTVMusicBaseInfo;

    /**
     * @var KTVMatchRule 命中规则。
     */
    public $MatchRule;

    /**
     * @var AMEMusicBaseInfo AME 歌曲基础信息，仅在使用音速达歌曲 Id 匹配 AME 曲库时有效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AMEMusicBaseInfo;

    /**
     * @param KTVMusicBaseInfo $KTVMusicBaseInfo 匹配到的歌曲基础信息。
     * @param KTVMatchRule $MatchRule 命中规则。
     * @param AMEMusicBaseInfo $AMEMusicBaseInfo AME 歌曲基础信息，仅在使用音速达歌曲 Id 匹配 AME 曲库时有效。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("KTVMusicBaseInfo",$param) and $param["KTVMusicBaseInfo"] !== null) {
            $this->KTVMusicBaseInfo = new KTVMusicBaseInfo();
            $this->KTVMusicBaseInfo->deserialize($param["KTVMusicBaseInfo"]);
        }

        if (array_key_exists("MatchRule",$param) and $param["MatchRule"] !== null) {
            $this->MatchRule = new KTVMatchRule();
            $this->MatchRule->deserialize($param["MatchRule"]);
        }

        if (array_key_exists("AMEMusicBaseInfo",$param) and $param["AMEMusicBaseInfo"] !== null) {
            $this->AMEMusicBaseInfo = new AMEMusicBaseInfo();
            $this->AMEMusicBaseInfo->deserialize($param["AMEMusicBaseInfo"]);
        }
    }
}
