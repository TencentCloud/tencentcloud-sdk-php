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
 * AME 曲库歌曲基础信息。
 *
 * @method string getMusicId() 获取歌曲 Id。
 * @method void setMusicId(string $MusicId) 设置歌曲 Id。
 * @method string getName() 获取歌曲名称。
 * @method void setName(string $Name) 设置歌曲名称。
 * @method array getSingerSet() 获取歌手列表。
 * @method void setSingerSet(array $SingerSet) 设置歌手列表。
 */
class AMEMusicBaseInfo extends AbstractModel
{
    /**
     * @var string 歌曲 Id。
     */
    public $MusicId;

    /**
     * @var string 歌曲名称。
     */
    public $Name;

    /**
     * @var array 歌手列表。
     */
    public $SingerSet;

    /**
     * @param string $MusicId 歌曲 Id。
     * @param string $Name 歌曲名称。
     * @param array $SingerSet 歌手列表。
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
    }
}
