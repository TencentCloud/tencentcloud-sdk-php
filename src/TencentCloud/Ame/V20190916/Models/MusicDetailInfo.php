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
 * 歌曲变更细节
 *
 * @method string getMusicId() 获取资源方音乐Id
 * @method void setMusicId(string $MusicId) 设置资源方音乐Id
 * @method string getAmeId() 获取资源方识别信息
 * @method void setAmeId(string $AmeId) 设置资源方识别信息
 * @method array getTags() 获取分类标签
 * @method void setTags(array $Tags) 设置分类标签
 * @method array getHitWords() 获取关键词
 * @method void setHitWords(array $HitWords) 设置关键词
 * @method integer getBpm() 获取节奏信息
 * @method void setBpm(integer $Bpm) 设置节奏信息
 * @method float getScore() 获取商业化权益
 * @method void setScore(float $Score) 设置商业化权益
 */
class MusicDetailInfo extends AbstractModel
{
    /**
     * @var string 资源方音乐Id
     */
    public $MusicId;

    /**
     * @var string 资源方识别信息
     */
    public $AmeId;

    /**
     * @var array 分类标签
     */
    public $Tags;

    /**
     * @var array 关键词
     */
    public $HitWords;

    /**
     * @var integer 节奏信息
     */
    public $Bpm;

    /**
     * @var float 商业化权益
     */
    public $Score;

    /**
     * @param string $MusicId 资源方音乐Id
     * @param string $AmeId 资源方识别信息
     * @param array $Tags 分类标签
     * @param array $HitWords 关键词
     * @param integer $Bpm 节奏信息
     * @param float $Score 商业化权益
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

        if (array_key_exists("AmeId",$param) and $param["AmeId"] !== null) {
            $this->AmeId = $param["AmeId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("HitWords",$param) and $param["HitWords"] !== null) {
            $this->HitWords = $param["HitWords"];
        }

        if (array_key_exists("Bpm",$param) and $param["Bpm"] !== null) {
            $this->Bpm = $param["Bpm"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }
    }
}
