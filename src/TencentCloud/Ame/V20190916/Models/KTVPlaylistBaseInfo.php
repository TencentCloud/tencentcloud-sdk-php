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
 * 推荐歌单基础信息
 *
 * @method string getPlaylistId() 获取歌单Id
 * @method void setPlaylistId(string $PlaylistId) 设置歌单Id
 * @method string getTitle() 获取歌单标题
 * @method void setTitle(string $Title) 设置歌单标题
 * @method string getDescription() 获取歌单介绍
 * @method void setDescription(string $Description) 设置歌单介绍
 * @method integer getMusicNum() 获取歌曲数量
 * @method void setMusicNum(integer $MusicNum) 设置歌曲数量
 */
class KTVPlaylistBaseInfo extends AbstractModel
{
    /**
     * @var string 歌单Id
     */
    public $PlaylistId;

    /**
     * @var string 歌单标题
     */
    public $Title;

    /**
     * @var string 歌单介绍
     */
    public $Description;

    /**
     * @var integer 歌曲数量
     */
    public $MusicNum;

    /**
     * @param string $PlaylistId 歌单Id
     * @param string $Title 歌单标题
     * @param string $Description 歌单介绍
     * @param integer $MusicNum 歌曲数量
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
        if (array_key_exists("PlaylistId",$param) and $param["PlaylistId"] !== null) {
            $this->PlaylistId = $param["PlaylistId"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("MusicNum",$param) and $param["MusicNum"] !== null) {
            $this->MusicNum = $param["MusicNum"];
        }
    }
}
