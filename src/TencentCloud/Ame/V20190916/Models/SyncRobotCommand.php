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
 * KTV 机器人初始化参数，在创建后自动完成相关初始化工作。
 *
 * @method string getCommand() 获取可同时传入多个指令，顺序执行。取值有：
<li>Play：播放</li>
<li>Pause：暂停</li>
<li>SwitchPrevious：上一首</li>
<li>SwitchNext：下一首</li>
<li>SetPlayMode：设置播放模式</li>
<li>Seek：调整播放进度</li>
<li>SetPlaylist：歌单变更</li>
<li>SetAudioParam：音频参数变更</li>
<li>SendMessage：发送自定义消息</li>
<li>SetDestroyMode：设置销毁模式</li>
<li><del>SetVolume：设置音量</del>（已废弃，请采用 SetRealVolume）</li>
<li>SetRealVolume：设置真实音量</li>
 * @method void setCommand(string $Command) 设置可同时传入多个指令，顺序执行。取值有：
<li>Play：播放</li>
<li>Pause：暂停</li>
<li>SwitchPrevious：上一首</li>
<li>SwitchNext：下一首</li>
<li>SetPlayMode：设置播放模式</li>
<li>Seek：调整播放进度</li>
<li>SetPlaylist：歌单变更</li>
<li>SetAudioParam：音频参数变更</li>
<li>SendMessage：发送自定义消息</li>
<li>SetDestroyMode：设置销毁模式</li>
<li><del>SetVolume：设置音量</del>（已废弃，请采用 SetRealVolume）</li>
<li>SetRealVolume：设置真实音量</li>
 * @method PlayCommandInput getPlayCommandInput() 获取播放参数。
 * @method void setPlayCommandInput(PlayCommandInput $PlayCommandInput) 设置播放参数。
 * @method SetPlaylistCommandInput getSetPlaylistCommandInput() 获取播放列表变更信息，当Command取SetPlaylist时，必填。
 * @method void setSetPlaylistCommandInput(SetPlaylistCommandInput $SetPlaylistCommandInput) 设置播放列表变更信息，当Command取SetPlaylist时，必填。
 * @method SeekCommandInput getSeekCommandInput() 获取播放进度，当Command取Seek时，必填。
 * @method void setSeekCommandInput(SeekCommandInput $SeekCommandInput) 设置播放进度，当Command取Seek时，必填。
 * @method SetAudioParamCommandInput getSetAudioParamCommandInput() 获取音频参数，当Command取SetAudioParam时，必填。
 * @method void setSetAudioParamCommandInput(SetAudioParamCommandInput $SetAudioParamCommandInput) 设置音频参数，当Command取SetAudioParam时，必填。
 * @method SendMessageCommandInput getSendMessageCommandInput() 获取自定义消息，当Command取SendMessage时，必填。
 * @method void setSendMessageCommandInput(SendMessageCommandInput $SendMessageCommandInput) 设置自定义消息，当Command取SendMessage时，必填。
 * @method SetPlayModeCommandInput getSetPlayModeCommandInput() 获取播放模式，当Command取SetPlayMode时，必填。
 * @method void setSetPlayModeCommandInput(SetPlayModeCommandInput $SetPlayModeCommandInput) 设置播放模式，当Command取SetPlayMode时，必填。
 * @method SetDestroyModeCommandInput getSetDestroyModeCommandInput() 获取销毁模式，当Command取SetDestroyMode时，必填。
 * @method void setSetDestroyModeCommandInput(SetDestroyModeCommandInput $SetDestroyModeCommandInput) 设置销毁模式，当Command取SetDestroyMode时，必填。
 * @method SetVolumeCommandInput getSetVolumeCommandInput() 获取<del>音量，当Command取SetVolume时，必填。</del>
（已废弃，请采用 SetRealVolumeCommandInput）
 * @method void setSetVolumeCommandInput(SetVolumeCommandInput $SetVolumeCommandInput) 设置<del>音量，当Command取SetVolume时，必填。</del>
（已废弃，请采用 SetRealVolumeCommandInput）
 * @method SetRealVolumeCommandInput getSetRealVolumeCommandInput() 获取真实音量，当Command取SetRealVolume时，必填。
 * @method void setSetRealVolumeCommandInput(SetRealVolumeCommandInput $SetRealVolumeCommandInput) 设置真实音量，当Command取SetRealVolume时，必填。
 */
class SyncRobotCommand extends AbstractModel
{
    /**
     * @var string 可同时传入多个指令，顺序执行。取值有：
<li>Play：播放</li>
<li>Pause：暂停</li>
<li>SwitchPrevious：上一首</li>
<li>SwitchNext：下一首</li>
<li>SetPlayMode：设置播放模式</li>
<li>Seek：调整播放进度</li>
<li>SetPlaylist：歌单变更</li>
<li>SetAudioParam：音频参数变更</li>
<li>SendMessage：发送自定义消息</li>
<li>SetDestroyMode：设置销毁模式</li>
<li><del>SetVolume：设置音量</del>（已废弃，请采用 SetRealVolume）</li>
<li>SetRealVolume：设置真实音量</li>
     */
    public $Command;

    /**
     * @var PlayCommandInput 播放参数。
     */
    public $PlayCommandInput;

    /**
     * @var SetPlaylistCommandInput 播放列表变更信息，当Command取SetPlaylist时，必填。
     */
    public $SetPlaylistCommandInput;

    /**
     * @var SeekCommandInput 播放进度，当Command取Seek时，必填。
     */
    public $SeekCommandInput;

    /**
     * @var SetAudioParamCommandInput 音频参数，当Command取SetAudioParam时，必填。
     */
    public $SetAudioParamCommandInput;

    /**
     * @var SendMessageCommandInput 自定义消息，当Command取SendMessage时，必填。
     */
    public $SendMessageCommandInput;

    /**
     * @var SetPlayModeCommandInput 播放模式，当Command取SetPlayMode时，必填。
     */
    public $SetPlayModeCommandInput;

    /**
     * @var SetDestroyModeCommandInput 销毁模式，当Command取SetDestroyMode时，必填。
     */
    public $SetDestroyModeCommandInput;

    /**
     * @var SetVolumeCommandInput <del>音量，当Command取SetVolume时，必填。</del>
（已废弃，请采用 SetRealVolumeCommandInput）
     */
    public $SetVolumeCommandInput;

    /**
     * @var SetRealVolumeCommandInput 真实音量，当Command取SetRealVolume时，必填。
     */
    public $SetRealVolumeCommandInput;

    /**
     * @param string $Command 可同时传入多个指令，顺序执行。取值有：
<li>Play：播放</li>
<li>Pause：暂停</li>
<li>SwitchPrevious：上一首</li>
<li>SwitchNext：下一首</li>
<li>SetPlayMode：设置播放模式</li>
<li>Seek：调整播放进度</li>
<li>SetPlaylist：歌单变更</li>
<li>SetAudioParam：音频参数变更</li>
<li>SendMessage：发送自定义消息</li>
<li>SetDestroyMode：设置销毁模式</li>
<li><del>SetVolume：设置音量</del>（已废弃，请采用 SetRealVolume）</li>
<li>SetRealVolume：设置真实音量</li>
     * @param PlayCommandInput $PlayCommandInput 播放参数。
     * @param SetPlaylistCommandInput $SetPlaylistCommandInput 播放列表变更信息，当Command取SetPlaylist时，必填。
     * @param SeekCommandInput $SeekCommandInput 播放进度，当Command取Seek时，必填。
     * @param SetAudioParamCommandInput $SetAudioParamCommandInput 音频参数，当Command取SetAudioParam时，必填。
     * @param SendMessageCommandInput $SendMessageCommandInput 自定义消息，当Command取SendMessage时，必填。
     * @param SetPlayModeCommandInput $SetPlayModeCommandInput 播放模式，当Command取SetPlayMode时，必填。
     * @param SetDestroyModeCommandInput $SetDestroyModeCommandInput 销毁模式，当Command取SetDestroyMode时，必填。
     * @param SetVolumeCommandInput $SetVolumeCommandInput <del>音量，当Command取SetVolume时，必填。</del>
（已废弃，请采用 SetRealVolumeCommandInput）
     * @param SetRealVolumeCommandInput $SetRealVolumeCommandInput 真实音量，当Command取SetRealVolume时，必填。
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
        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("PlayCommandInput",$param) and $param["PlayCommandInput"] !== null) {
            $this->PlayCommandInput = new PlayCommandInput();
            $this->PlayCommandInput->deserialize($param["PlayCommandInput"]);
        }

        if (array_key_exists("SetPlaylistCommandInput",$param) and $param["SetPlaylistCommandInput"] !== null) {
            $this->SetPlaylistCommandInput = new SetPlaylistCommandInput();
            $this->SetPlaylistCommandInput->deserialize($param["SetPlaylistCommandInput"]);
        }

        if (array_key_exists("SeekCommandInput",$param) and $param["SeekCommandInput"] !== null) {
            $this->SeekCommandInput = new SeekCommandInput();
            $this->SeekCommandInput->deserialize($param["SeekCommandInput"]);
        }

        if (array_key_exists("SetAudioParamCommandInput",$param) and $param["SetAudioParamCommandInput"] !== null) {
            $this->SetAudioParamCommandInput = new SetAudioParamCommandInput();
            $this->SetAudioParamCommandInput->deserialize($param["SetAudioParamCommandInput"]);
        }

        if (array_key_exists("SendMessageCommandInput",$param) and $param["SendMessageCommandInput"] !== null) {
            $this->SendMessageCommandInput = new SendMessageCommandInput();
            $this->SendMessageCommandInput->deserialize($param["SendMessageCommandInput"]);
        }

        if (array_key_exists("SetPlayModeCommandInput",$param) and $param["SetPlayModeCommandInput"] !== null) {
            $this->SetPlayModeCommandInput = new SetPlayModeCommandInput();
            $this->SetPlayModeCommandInput->deserialize($param["SetPlayModeCommandInput"]);
        }

        if (array_key_exists("SetDestroyModeCommandInput",$param) and $param["SetDestroyModeCommandInput"] !== null) {
            $this->SetDestroyModeCommandInput = new SetDestroyModeCommandInput();
            $this->SetDestroyModeCommandInput->deserialize($param["SetDestroyModeCommandInput"]);
        }

        if (array_key_exists("SetVolumeCommandInput",$param) and $param["SetVolumeCommandInput"] !== null) {
            $this->SetVolumeCommandInput = new SetVolumeCommandInput();
            $this->SetVolumeCommandInput->deserialize($param["SetVolumeCommandInput"]);
        }

        if (array_key_exists("SetRealVolumeCommandInput",$param) and $param["SetRealVolumeCommandInput"] !== null) {
            $this->SetRealVolumeCommandInput = new SetRealVolumeCommandInput();
            $this->SetRealVolumeCommandInput->deserialize($param["SetRealVolumeCommandInput"]);
        }
    }
}
