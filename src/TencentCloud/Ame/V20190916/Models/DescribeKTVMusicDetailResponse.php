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
 * DescribeKTVMusicDetail返回参数结构体
 *
 * @method KTVMusicBaseInfo getKTVMusicBaseInfo() 获取歌曲基础信息
 * @method void setKTVMusicBaseInfo(KTVMusicBaseInfo $KTVMusicBaseInfo) 设置歌曲基础信息
 * @method string getPlayToken() 获取播放凭证
 * @method void setPlayToken(string $PlayToken) 设置播放凭证
 * @method string getLyricsUrl() 获取歌词下载地址
 * @method void setLyricsUrl(string $LyricsUrl) 设置歌词下载地址
 * @method array getDefinitionInfoSet() 获取歌曲规格信息列表
 * @method void setDefinitionInfoSet(array $DefinitionInfoSet) 设置歌曲规格信息列表
 * @method string getMidiJsonUrl() 获取音高数据文件下载地址
 * @method void setMidiJsonUrl(string $MidiJsonUrl) 设置音高数据文件下载地址
 * @method array getChorusClipSet() 获取副歌片段数据列表
 * @method void setChorusClipSet(array $ChorusClipSet) 设置副歌片段数据列表
 * @method integer getPreludeInterval() 获取前奏间隔，单位：毫秒；注：若参数返回为0则无人声部分
 * @method void setPreludeInterval(integer $PreludeInterval) 设置前奏间隔，单位：毫秒；注：若参数返回为0则无人声部分
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeKTVMusicDetailResponse extends AbstractModel
{
    /**
     * @var KTVMusicBaseInfo 歌曲基础信息
     */
    public $KTVMusicBaseInfo;

    /**
     * @var string 播放凭证
     */
    public $PlayToken;

    /**
     * @var string 歌词下载地址
     */
    public $LyricsUrl;

    /**
     * @var array 歌曲规格信息列表
     */
    public $DefinitionInfoSet;

    /**
     * @var string 音高数据文件下载地址
     */
    public $MidiJsonUrl;

    /**
     * @var array 副歌片段数据列表
     */
    public $ChorusClipSet;

    /**
     * @var integer 前奏间隔，单位：毫秒；注：若参数返回为0则无人声部分
     */
    public $PreludeInterval;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param KTVMusicBaseInfo $KTVMusicBaseInfo 歌曲基础信息
     * @param string $PlayToken 播放凭证
     * @param string $LyricsUrl 歌词下载地址
     * @param array $DefinitionInfoSet 歌曲规格信息列表
     * @param string $MidiJsonUrl 音高数据文件下载地址
     * @param array $ChorusClipSet 副歌片段数据列表
     * @param integer $PreludeInterval 前奏间隔，单位：毫秒；注：若参数返回为0则无人声部分
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("DefinitionInfoSet",$param) and $param["DefinitionInfoSet"] !== null) {
            $this->DefinitionInfoSet = [];
            foreach ($param["DefinitionInfoSet"] as $key => $value){
                $obj = new KTVMusicDefinitionInfo();
                $obj->deserialize($value);
                array_push($this->DefinitionInfoSet, $obj);
            }
        }

        if (array_key_exists("MidiJsonUrl",$param) and $param["MidiJsonUrl"] !== null) {
            $this->MidiJsonUrl = $param["MidiJsonUrl"];
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
