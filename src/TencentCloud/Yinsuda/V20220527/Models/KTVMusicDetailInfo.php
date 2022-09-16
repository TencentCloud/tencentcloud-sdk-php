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
 * 歌曲详细信息。
 *
 * @method KTVMusicBaseInfo getKTVMusicBaseInfo() 获取歌曲基础信息。
 * @method void setKTVMusicBaseInfo(KTVMusicBaseInfo $KTVMusicBaseInfo) 设置歌曲基础信息。
 * @method string getPlayToken() 获取播放凭证。
 * @method void setPlayToken(string $PlayToken) 设置播放凭证。
 * @method string getLyricsUrl() 获取歌词下载链接。
 * @method void setLyricsUrl(string $LyricsUrl) 设置歌词下载链接。
 * @method string getMidiUrl() 获取音高数据下载链接。
 * @method void setMidiUrl(string $MidiUrl) 设置音高数据下载链接。
 * @method array getChorusClipSet() 获取副歌片段信息。
 * @method void setChorusClipSet(array $ChorusClipSet) 设置副歌片段信息。
 * @method integer getPreludeInterval() 获取前奏间隔。
 * @method void setPreludeInterval(integer $PreludeInterval) 设置前奏间隔。
 * @method array getGenreSet() 获取歌曲流派列表。
 * @method void setGenreSet(array $GenreSet) 设置歌曲流派列表。
 * @method KTVBPMInfo getBPMInfo() 获取节拍信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBPMInfo(KTVBPMInfo $BPMInfo) 设置节拍信息。
注意：此字段可能返回 null，表示取不到有效值。
 */
class KTVMusicDetailInfo extends AbstractModel
{
    /**
     * @var KTVMusicBaseInfo 歌曲基础信息。
     */
    public $KTVMusicBaseInfo;

    /**
     * @var string 播放凭证。
     */
    public $PlayToken;

    /**
     * @var string 歌词下载链接。
     */
    public $LyricsUrl;

    /**
     * @var string 音高数据下载链接。
     */
    public $MidiUrl;

    /**
     * @var array 副歌片段信息。
     */
    public $ChorusClipSet;

    /**
     * @var integer 前奏间隔。
     */
    public $PreludeInterval;

    /**
     * @var array 歌曲流派列表。
     */
    public $GenreSet;

    /**
     * @var KTVBPMInfo 节拍信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BPMInfo;

    /**
     * @param KTVMusicBaseInfo $KTVMusicBaseInfo 歌曲基础信息。
     * @param string $PlayToken 播放凭证。
     * @param string $LyricsUrl 歌词下载链接。
     * @param string $MidiUrl 音高数据下载链接。
     * @param array $ChorusClipSet 副歌片段信息。
     * @param integer $PreludeInterval 前奏间隔。
     * @param array $GenreSet 歌曲流派列表。
     * @param KTVBPMInfo $BPMInfo 节拍信息。
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

        if (array_key_exists("PlayToken",$param) and $param["PlayToken"] !== null) {
            $this->PlayToken = $param["PlayToken"];
        }

        if (array_key_exists("LyricsUrl",$param) and $param["LyricsUrl"] !== null) {
            $this->LyricsUrl = $param["LyricsUrl"];
        }

        if (array_key_exists("MidiUrl",$param) and $param["MidiUrl"] !== null) {
            $this->MidiUrl = $param["MidiUrl"];
        }

        if (array_key_exists("ChorusClipSet",$param) and $param["ChorusClipSet"] !== null) {
            $this->ChorusClipSet = [];
            foreach ($param["ChorusClipSet"] as $key => $value){
                $obj = new ChorusClip();
                $obj->deserialize($value);
                array_push($this->ChorusClipSet, $obj);
            }
        }

        if (array_key_exists("PreludeInterval",$param) and $param["PreludeInterval"] !== null) {
            $this->PreludeInterval = $param["PreludeInterval"];
        }

        if (array_key_exists("GenreSet",$param) and $param["GenreSet"] !== null) {
            $this->GenreSet = $param["GenreSet"];
        }

        if (array_key_exists("BPMInfo",$param) and $param["BPMInfo"] !== null) {
            $this->BPMInfo = new KTVBPMInfo();
            $this->BPMInfo->deserialize($param["BPMInfo"]);
        }
    }
}
