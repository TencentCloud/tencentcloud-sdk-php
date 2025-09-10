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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 声纹查询数据
 *
 * @method string getVoicePrintId() 获取声纹ID
 * @method void setVoicePrintId(string $VoicePrintId) 设置声纹ID
 * @method integer getAppId() 获取应用id
 * @method void setAppId(integer $AppId) 设置应用id
 * @method string getVoicePrintMetaInfo() 获取和声纹绑定的MetaInfo
 * @method void setVoicePrintMetaInfo(string $VoicePrintMetaInfo) 设置和声纹绑定的MetaInfo
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method integer getAudioFormat() 获取音频格式,当前只有0(代表wav)
 * @method void setAudioFormat(integer $AudioFormat) 设置音频格式,当前只有0(代表wav)
 * @method string getAudioName() 获取音频名称
 * @method void setAudioName(string $AudioName) 设置音频名称
 * @method integer getReqTimestamp() 获取请求毫秒时间戳
 * @method void setReqTimestamp(integer $ReqTimestamp) 设置请求毫秒时间戳
 */
class VoicePrintInfo extends AbstractModel
{
    /**
     * @var string 声纹ID
     */
    public $VoicePrintId;

    /**
     * @var integer 应用id
     */
    public $AppId;

    /**
     * @var string 和声纹绑定的MetaInfo
     */
    public $VoicePrintMetaInfo;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 音频格式,当前只有0(代表wav)
     */
    public $AudioFormat;

    /**
     * @var string 音频名称
     */
    public $AudioName;

    /**
     * @var integer 请求毫秒时间戳
     */
    public $ReqTimestamp;

    /**
     * @param string $VoicePrintId 声纹ID
     * @param integer $AppId 应用id
     * @param string $VoicePrintMetaInfo 和声纹绑定的MetaInfo
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param integer $AudioFormat 音频格式,当前只有0(代表wav)
     * @param string $AudioName 音频名称
     * @param integer $ReqTimestamp 请求毫秒时间戳
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
        if (array_key_exists("VoicePrintId",$param) and $param["VoicePrintId"] !== null) {
            $this->VoicePrintId = $param["VoicePrintId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("VoicePrintMetaInfo",$param) and $param["VoicePrintMetaInfo"] !== null) {
            $this->VoicePrintMetaInfo = $param["VoicePrintMetaInfo"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AudioFormat",$param) and $param["AudioFormat"] !== null) {
            $this->AudioFormat = $param["AudioFormat"];
        }

        if (array_key_exists("AudioName",$param) and $param["AudioName"] !== null) {
            $this->AudioName = $param["AudioName"];
        }

        if (array_key_exists("ReqTimestamp",$param) and $param["ReqTimestamp"] !== null) {
            $this->ReqTimestamp = $param["ReqTimestamp"];
        }
    }
}
