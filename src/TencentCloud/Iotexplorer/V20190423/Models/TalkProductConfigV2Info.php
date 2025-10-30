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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * twetalk连接配置信息。
 *
 * @method integer getUin() 获取UIN
 * @method void setUin(integer $Uin) 设置UIN
 * @method integer getAppId() 获取APPID
 * @method void setAppId(integer $AppId) 设置APPID
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getDeviceName() 获取设备名称
 * @method void setDeviceName(string $DeviceName) 设置设备名称
 * @method string getConfigName() 获取配置名称
 * @method void setConfigName(string $ConfigName) 设置配置名称
 * @method string getTargetLanguage() 获取语言，默认zh；zh-中文；en-英文
 * @method void setTargetLanguage(string $TargetLanguage) 设置语言，默认zh；zh-中文；en-英文
 * @method TalkBasicConfigInfo getBasicConfig() 获取基础配置
 * @method void setBasicConfig(TalkBasicConfigInfo $BasicConfig) 设置基础配置
 * @method TalkSTTConfigInfo getSTTConfig() 获取语音识别配置
 * @method void setSTTConfig(TalkSTTConfigInfo $STTConfig) 设置语音识别配置
 * @method TalkLLMConfigInfo getLLMConfig() 获取大模型配置
 * @method void setLLMConfig(TalkLLMConfigInfo $LLMConfig) 设置大模型配置
 * @method TalkTTSConfigInfo getTTSConfig() 获取语音合成配置
 * @method void setTTSConfig(TalkTTSConfigInfo $TTSConfig) 设置语音合成配置
 * @method TalkConversationConfigInfo getConversationConfig() 获取会话配置
 * @method void setConversationConfig(TalkConversationConfigInfo $ConversationConfig) 设置会话配置
 * @method integer getVersion() 获取版本号
 * @method void setVersion(integer $Version) 设置版本号
 * @method integer getCreateTime() 获取创建时间，秒级时间戳
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，秒级时间戳
 * @method integer getUpdateTime() 获取更新时间，秒级时间戳
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间，秒级时间戳
 */
class TalkProductConfigV2Info extends AbstractModel
{
    /**
     * @var integer UIN
     */
    public $Uin;

    /**
     * @var integer APPID
     */
    public $AppId;

    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 设备名称
     */
    public $DeviceName;

    /**
     * @var string 配置名称
     */
    public $ConfigName;

    /**
     * @var string 语言，默认zh；zh-中文；en-英文
     */
    public $TargetLanguage;

    /**
     * @var TalkBasicConfigInfo 基础配置
     */
    public $BasicConfig;

    /**
     * @var TalkSTTConfigInfo 语音识别配置
     */
    public $STTConfig;

    /**
     * @var TalkLLMConfigInfo 大模型配置
     */
    public $LLMConfig;

    /**
     * @var TalkTTSConfigInfo 语音合成配置
     */
    public $TTSConfig;

    /**
     * @var TalkConversationConfigInfo 会话配置
     */
    public $ConversationConfig;

    /**
     * @var integer 版本号
     */
    public $Version;

    /**
     * @var integer 创建时间，秒级时间戳
     */
    public $CreateTime;

    /**
     * @var integer 更新时间，秒级时间戳
     */
    public $UpdateTime;

    /**
     * @param integer $Uin UIN
     * @param integer $AppId APPID
     * @param string $ProductId 产品ID
     * @param string $DeviceName 设备名称
     * @param string $ConfigName 配置名称
     * @param string $TargetLanguage 语言，默认zh；zh-中文；en-英文
     * @param TalkBasicConfigInfo $BasicConfig 基础配置
     * @param TalkSTTConfigInfo $STTConfig 语音识别配置
     * @param TalkLLMConfigInfo $LLMConfig 大模型配置
     * @param TalkTTSConfigInfo $TTSConfig 语音合成配置
     * @param TalkConversationConfigInfo $ConversationConfig 会话配置
     * @param integer $Version 版本号
     * @param integer $CreateTime 创建时间，秒级时间戳
     * @param integer $UpdateTime 更新时间，秒级时间戳
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("TargetLanguage",$param) and $param["TargetLanguage"] !== null) {
            $this->TargetLanguage = $param["TargetLanguage"];
        }

        if (array_key_exists("BasicConfig",$param) and $param["BasicConfig"] !== null) {
            $this->BasicConfig = new TalkBasicConfigInfo();
            $this->BasicConfig->deserialize($param["BasicConfig"]);
        }

        if (array_key_exists("STTConfig",$param) and $param["STTConfig"] !== null) {
            $this->STTConfig = new TalkSTTConfigInfo();
            $this->STTConfig->deserialize($param["STTConfig"]);
        }

        if (array_key_exists("LLMConfig",$param) and $param["LLMConfig"] !== null) {
            $this->LLMConfig = new TalkLLMConfigInfo();
            $this->LLMConfig->deserialize($param["LLMConfig"]);
        }

        if (array_key_exists("TTSConfig",$param) and $param["TTSConfig"] !== null) {
            $this->TTSConfig = new TalkTTSConfigInfo();
            $this->TTSConfig->deserialize($param["TTSConfig"]);
        }

        if (array_key_exists("ConversationConfig",$param) and $param["ConversationConfig"] !== null) {
            $this->ConversationConfig = new TalkConversationConfigInfo();
            $this->ConversationConfig->deserialize($param["ConversationConfig"]);
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
