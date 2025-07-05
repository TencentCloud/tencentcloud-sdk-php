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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 歌曲详情。具体含义参考  [QQ音乐SDK](https://developer.y.qq.com/)
 *
 * @method integer getSongId() 获取歌曲id
 * @method void setSongId(integer $SongId) 设置歌曲id
 * @method string getSongMid() 获取歌曲mid
 * @method void setSongMid(string $SongMid) 设置歌曲mid
 * @method integer getVip() 获取歌曲是否为vip。1：vip歌曲； 0：普通歌曲。
 * @method void setVip(integer $Vip) 设置歌曲是否为vip。1：vip歌曲； 0：普通歌曲。
 */
class SongExt extends AbstractModel
{
    /**
     * @var integer 歌曲id
     */
    public $SongId;

    /**
     * @var string 歌曲mid
     */
    public $SongMid;

    /**
     * @var integer 歌曲是否为vip。1：vip歌曲； 0：普通歌曲。
     */
    public $Vip;

    /**
     * @param integer $SongId 歌曲id
     * @param string $SongMid 歌曲mid
     * @param integer $Vip 歌曲是否为vip。1：vip歌曲； 0：普通歌曲。
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
        if (array_key_exists("SongId",$param) and $param["SongId"] !== null) {
            $this->SongId = $param["SongId"];
        }

        if (array_key_exists("SongMid",$param) and $param["SongMid"] !== null) {
            $this->SongMid = $param["SongMid"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }
    }
}
