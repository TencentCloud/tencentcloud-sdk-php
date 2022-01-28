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
 * 排行榜结构
 *
 * @method string getMusicId() 获取歌曲Id
 * @method void setMusicId(string $MusicId) 设置歌曲Id
 * @method string getName() 获取歌曲名称
 * @method void setName(string $Name) 设置歌曲名称
 * @method array getSingerInfoSet() 获取歌手名称列表
 * @method void setSingerInfoSet(array $SingerInfoSet) 设置歌手名称列表
 * @method array getLyricistSet() 获取歌词名称列表
 * @method void setLyricistSet(array $LyricistSet) 设置歌词名称列表
 * @method array getComposerSet() 获取作曲列表
 * @method void setComposerSet(array $ComposerSet) 设置作曲列表
 * @method array getTagSet() 获取标签列表
 * @method void setTagSet(array $TagSet) 设置标签列表
 * @method integer getDuration() 获取播放时长
 * @method void setDuration(integer $Duration) 设置播放时长
 */
class KTVMusicTopInfo extends AbstractModel
{
    /**
     * @var string 歌曲Id
     */
    public $MusicId;

    /**
     * @var string 歌曲名称
     */
    public $Name;

    /**
     * @var array 歌手名称列表
     */
    public $SingerInfoSet;

    /**
     * @var array 歌词名称列表
     */
    public $LyricistSet;

    /**
     * @var array 作曲列表
     */
    public $ComposerSet;

    /**
     * @var array 标签列表
     */
    public $TagSet;

    /**
     * @var integer 播放时长
     */
    public $Duration;

    /**
     * @param string $MusicId 歌曲Id
     * @param string $Name 歌曲名称
     * @param array $SingerInfoSet 歌手名称列表
     * @param array $LyricistSet 歌词名称列表
     * @param array $ComposerSet 作曲列表
     * @param array $TagSet 标签列表
     * @param integer $Duration 播放时长
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

        if (array_key_exists("SingerInfoSet",$param) and $param["SingerInfoSet"] !== null) {
            $this->SingerInfoSet = [];
            foreach ($param["SingerInfoSet"] as $key => $value){
                $obj = new KTVSingerBaseInfo();
                $obj->deserialize($value);
                array_push($this->SingerInfoSet, $obj);
            }
        }

        if (array_key_exists("LyricistSet",$param) and $param["LyricistSet"] !== null) {
            $this->LyricistSet = $param["LyricistSet"];
        }

        if (array_key_exists("ComposerSet",$param) and $param["ComposerSet"] !== null) {
            $this->ComposerSet = $param["ComposerSet"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = $param["TagSet"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }
    }
}
