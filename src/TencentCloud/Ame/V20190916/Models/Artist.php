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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Artist
 *
 * @method string getArtistName() 获取歌手名
 * @method void setArtistName(string $ArtistName) 设置歌手名
 */
class Artist extends AbstractModel
{
    /**
     * @var string 歌手名
     */
    public $ArtistName;

    /**
     * @param string $ArtistName 歌手名
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
        if (array_key_exists("ArtistName",$param) and $param["ArtistName"] !== null) {
            $this->ArtistName = $param["ArtistName"];
        }
    }
}
