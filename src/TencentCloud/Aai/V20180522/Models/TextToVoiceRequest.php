<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Aai\V20180522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getText() 获取合成语音的源文本
 * @method void setText(string $Text) 设置合成语音的源文本
 * @method string getSessionId() 获取一次请求对应一个SessionId，会原样返回，建议传入类似于uuid的字符串防止重复
 * @method void setSessionId(string $SessionId) 设置一次请求对应一个SessionId，会原样返回，建议传入类似于uuid的字符串防止重复
 * @method integer getModelType() 获取模型类型，1-默认模型
 * @method void setModelType(integer $ModelType) 设置模型类型，1-默认模型
 * @method float getVolume() 获取音量大小，暂仅支持默认值1
 * @method void setVolume(float $Volume) 设置音量大小，暂仅支持默认值1
 * @method float getSpeed() 获取语速，暂仅支持默认值1
 * @method void setSpeed(float $Speed) 设置语速，暂仅支持默认值1
 * @method integer getProjectId() 获取用户自定义项目id，默认为0
 * @method void setProjectId(integer $ProjectId) 设置用户自定义项目id，默认为0
 * @method integer getVoiceType() 获取音色，1-默认音色
 * @method void setVoiceType(integer $VoiceType) 设置音色，1-默认音色
 * @method integer getPrimaryLanguage() 获取主语言类型<li>1-中文(包括粤语)，最大300字符</li><li>2-英文，最大支持600字符</li>
 * @method void setPrimaryLanguage(integer $PrimaryLanguage) 设置主语言类型<li>1-中文(包括粤语)，最大300字符</li><li>2-英文，最大支持600字符</li>
 * @method integer getSampleRate() 获取音频采样率：暂仅支持16k
 * @method void setSampleRate(integer $SampleRate) 设置音频采样率：暂仅支持16k
 */

/**
 *TextToVoice请求参数结构体
 */
class TextToVoiceRequest extends AbstractModel
{
    /**
     * @var string 合成语音的源文本
     */
    public $Text;

    /**
     * @var string 一次请求对应一个SessionId，会原样返回，建议传入类似于uuid的字符串防止重复
     */
    public $SessionId;

    /**
     * @var integer 模型类型，1-默认模型
     */
    public $ModelType;

    /**
     * @var float 音量大小，暂仅支持默认值1
     */
    public $Volume;

    /**
     * @var float 语速，暂仅支持默认值1
     */
    public $Speed;

    /**
     * @var integer 用户自定义项目id，默认为0
     */
    public $ProjectId;

    /**
     * @var integer 音色，1-默认音色
     */
    public $VoiceType;

    /**
     * @var integer 主语言类型<li>1-中文(包括粤语)，最大300字符</li><li>2-英文，最大支持600字符</li>
     */
    public $PrimaryLanguage;

    /**
     * @var integer 音频采样率：暂仅支持16k
     */
    public $SampleRate;
    /**
     * @param string $Text 合成语音的源文本
     * @param string $SessionId 一次请求对应一个SessionId，会原样返回，建议传入类似于uuid的字符串防止重复
     * @param integer $ModelType 模型类型，1-默认模型
     * @param float $Volume 音量大小，暂仅支持默认值1
     * @param float $Speed 语速，暂仅支持默认值1
     * @param integer $ProjectId 用户自定义项目id，默认为0
     * @param integer $VoiceType 音色，1-默认音色
     * @param integer $PrimaryLanguage 主语言类型<li>1-中文(包括粤语)，最大300字符</li><li>2-英文，最大支持600字符</li>
     * @param integer $SampleRate 音频采样率：暂仅支持16k
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }

        if (array_key_exists("Speed",$param) and $param["Speed"] !== null) {
            $this->Speed = $param["Speed"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("VoiceType",$param) and $param["VoiceType"] !== null) {
            $this->VoiceType = $param["VoiceType"];
        }

        if (array_key_exists("PrimaryLanguage",$param) and $param["PrimaryLanguage"] !== null) {
            $this->PrimaryLanguage = $param["PrimaryLanguage"];
        }

        if (array_key_exists("SampleRate",$param) and $param["SampleRate"] !== null) {
            $this->SampleRate = $param["SampleRate"];
        }
    }
}
