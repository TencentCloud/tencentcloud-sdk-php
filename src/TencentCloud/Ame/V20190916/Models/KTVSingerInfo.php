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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播互动歌曲的歌手信息。
 *
 * @method string getSingerId() 获取歌手id
 * @method void setSingerId(string $SingerId) 设置歌手id
 * @method string getName() 获取歌手名
 * @method void setName(string $Name) 设置歌手名
 * @method string getGender() 获取歌手性别: 男，女，组合
 * @method void setGender(string $Gender) 设置歌手性别: 男，女，组合
 * @method string getArea() 获取地区: 大陆，港台，欧美，日本
 * @method void setArea(string $Area) 设置地区: 大陆，港台，欧美，日本
 * @method integer getMusicCount() 获取歌曲数
 * @method void setMusicCount(integer $MusicCount) 设置歌曲数
 * @method integer getPlayCount() 获取歌曲总播放次数
 * @method void setPlayCount(integer $PlayCount) 设置歌曲总播放次数
 */
class KTVSingerInfo extends AbstractModel
{
    /**
     * @var string 歌手id
     */
    public $SingerId;

    /**
     * @var string 歌手名
     */
    public $Name;

    /**
     * @var string 歌手性别: 男，女，组合
     */
    public $Gender;

    /**
     * @var string 地区: 大陆，港台，欧美，日本
     */
    public $Area;

    /**
     * @var integer 歌曲数
     */
    public $MusicCount;

    /**
     * @var integer 歌曲总播放次数
     */
    public $PlayCount;

    /**
     * @param string $SingerId 歌手id
     * @param string $Name 歌手名
     * @param string $Gender 歌手性别: 男，女，组合
     * @param string $Area 地区: 大陆，港台，欧美，日本
     * @param integer $MusicCount 歌曲数
     * @param integer $PlayCount 歌曲总播放次数
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
        if (array_key_exists("SingerId",$param) and $param["SingerId"] !== null) {
            $this->SingerId = $param["SingerId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("MusicCount",$param) and $param["MusicCount"] !== null) {
            $this->MusicCount = $param["MusicCount"];
        }

        if (array_key_exists("PlayCount",$param) and $param["PlayCount"] !== null) {
            $this->PlayCount = $param["PlayCount"];
        }
    }
}
