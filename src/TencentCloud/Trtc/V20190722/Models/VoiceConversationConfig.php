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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI对话的任务参数。
 *
 * @method string getUserId() 获取<p>对话服务在TRTC房间使用的<a href="https://cloud.tencent.com/document/product/647/46351#userid">UserId</a>，注意这个userId不能与其他TRTC或者对话服务等已经使用的UserId重复，建议可以把房间ID作为userId的标识的一部分。</p>
 * @method void setUserId(string $UserId) 设置<p>对话服务在TRTC房间使用的<a href="https://cloud.tencent.com/document/product/647/46351#userid">UserId</a>，注意这个userId不能与其他TRTC或者对话服务等已经使用的UserId重复，建议可以把房间ID作为userId的标识的一部分。</p>
 * @method string getUserSig() 获取<p>对话服务加入TRTC房间的用户签名，当前 UserId 对应的验证签名，相当于登录密码，具体计算方法请参考TRTC计算<a href="https://cloud.tencent.com/document/product/647/45910#UserSig">UserSig</a>的方案。</p>
 * @method void setUserSig(string $UserSig) 设置<p>对话服务加入TRTC房间的用户签名，当前 UserId 对应的验证签名，相当于登录密码，具体计算方法请参考TRTC计算<a href="https://cloud.tencent.com/document/product/647/45910#UserSig">UserSig</a>的方案。</p>
 * @method array getTargetUserId() 获取<p>对话服务订阅的主播名，订阅指定真实用户的音频，只能填写一个订阅主播。</p>
 * @method void setTargetUserId(array $TargetUserId) 设置<p>对话服务订阅的主播名，订阅指定真实用户的音频，只能填写一个订阅主播。</p>
 * @method TranscriptionUserInfoParams getTTSPushRoomParams() 获取<p>回推机器人参数。</p>
 * @method void setTTSPushRoomParams(TranscriptionUserInfoParams $TTSPushRoomParams) 设置<p>回推机器人参数。</p>
 * @method integer getMaxIdleTime() 获取<p>参与对话的主播持续离开TRTC房间或切换成观众超过MaxIdleTime的时长，自动停止对话任务，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于 86400秒(24小时)。</p><p>单位：秒</p>
 * @method void setMaxIdleTime(integer $MaxIdleTime) 设置<p>参与对话的主播持续离开TRTC房间或切换成观众超过MaxIdleTime的时长，自动停止对话任务，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于 86400秒(24小时)。</p><p>单位：秒</p>
 * @method array getFilterBracketsContent() 获取<p>用于过滤LLM返回内容，不播放括号中的内容。1：中文括号（）2：英文括号() 3：中文方括号【】4：英文方括号[] 5：英文花括号{} 。默认值为空，表示不进行过滤。 示例值：1取值范围：[1, 5]。S2S 模式不支持填写该参数。</p>
 * @method void setFilterBracketsContent(array $FilterBracketsContent) 设置<p>用于过滤LLM返回内容，不播放括号中的内容。1：中文括号（）2：英文括号() 3：中文方括号【】4：英文方括号[] 5：英文花括号{} 。默认值为空，表示不进行过滤。 示例值：1取值范围：[1, 5]。S2S 模式不支持填写该参数。</p>
 * @method integer getSubtitleMode() 获取<p>字幕显示模式。S2S 模式不支持填写该参数。</p><p>枚举值：</p><ul><li>0： 尽快显示</li><li>1： 句子级别实时显示</li></ul>
 * @method void setSubtitleMode(integer $SubtitleMode) 设置<p>字幕显示模式。S2S 模式不支持填写该参数。</p><p>枚举值：</p><ul><li>0： 尽快显示</li><li>1： 句子级别实时显示</li></ul>
 * @method string getTurnDetectionMode() 获取<p>控制新一轮对话的触发方式，默认为&quot;auto&quot;。S2S 模式不支持填写该参数。</p><p>枚举值：</p><ul><li>&quot;auto&quot;： 后台自动识别断句触发LLM(基于静音时长)</li></ul>
 * @method void setTurnDetectionMode(string $TurnDetectionMode) 设置<p>控制新一轮对话的触发方式，默认为&quot;auto&quot;。S2S 模式不支持填写该参数。</p><p>枚举值：</p><ul><li>&quot;auto&quot;： 后台自动识别断句触发LLM(基于静音时长)</li></ul>
 */
class VoiceConversationConfig extends AbstractModel
{
    /**
     * @var string <p>对话服务在TRTC房间使用的<a href="https://cloud.tencent.com/document/product/647/46351#userid">UserId</a>，注意这个userId不能与其他TRTC或者对话服务等已经使用的UserId重复，建议可以把房间ID作为userId的标识的一部分。</p>
     */
    public $UserId;

    /**
     * @var string <p>对话服务加入TRTC房间的用户签名，当前 UserId 对应的验证签名，相当于登录密码，具体计算方法请参考TRTC计算<a href="https://cloud.tencent.com/document/product/647/45910#UserSig">UserSig</a>的方案。</p>
     */
    public $UserSig;

    /**
     * @var array <p>对话服务订阅的主播名，订阅指定真实用户的音频，只能填写一个订阅主播。</p>
     */
    public $TargetUserId;

    /**
     * @var TranscriptionUserInfoParams <p>回推机器人参数。</p>
     */
    public $TTSPushRoomParams;

    /**
     * @var integer <p>参与对话的主播持续离开TRTC房间或切换成观众超过MaxIdleTime的时长，自动停止对话任务，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于 86400秒(24小时)。</p><p>单位：秒</p>
     */
    public $MaxIdleTime;

    /**
     * @var array <p>用于过滤LLM返回内容，不播放括号中的内容。1：中文括号（）2：英文括号() 3：中文方括号【】4：英文方括号[] 5：英文花括号{} 。默认值为空，表示不进行过滤。 示例值：1取值范围：[1, 5]。S2S 模式不支持填写该参数。</p>
     */
    public $FilterBracketsContent;

    /**
     * @var integer <p>字幕显示模式。S2S 模式不支持填写该参数。</p><p>枚举值：</p><ul><li>0： 尽快显示</li><li>1： 句子级别实时显示</li></ul>
     */
    public $SubtitleMode;

    /**
     * @var string <p>控制新一轮对话的触发方式，默认为&quot;auto&quot;。S2S 模式不支持填写该参数。</p><p>枚举值：</p><ul><li>&quot;auto&quot;： 后台自动识别断句触发LLM(基于静音时长)</li></ul>
     */
    public $TurnDetectionMode;

    /**
     * @param string $UserId <p>对话服务在TRTC房间使用的<a href="https://cloud.tencent.com/document/product/647/46351#userid">UserId</a>，注意这个userId不能与其他TRTC或者对话服务等已经使用的UserId重复，建议可以把房间ID作为userId的标识的一部分。</p>
     * @param string $UserSig <p>对话服务加入TRTC房间的用户签名，当前 UserId 对应的验证签名，相当于登录密码，具体计算方法请参考TRTC计算<a href="https://cloud.tencent.com/document/product/647/45910#UserSig">UserSig</a>的方案。</p>
     * @param array $TargetUserId <p>对话服务订阅的主播名，订阅指定真实用户的音频，只能填写一个订阅主播。</p>
     * @param TranscriptionUserInfoParams $TTSPushRoomParams <p>回推机器人参数。</p>
     * @param integer $MaxIdleTime <p>参与对话的主播持续离开TRTC房间或切换成观众超过MaxIdleTime的时长，自动停止对话任务，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于 86400秒(24小时)。</p><p>单位：秒</p>
     * @param array $FilterBracketsContent <p>用于过滤LLM返回内容，不播放括号中的内容。1：中文括号（）2：英文括号() 3：中文方括号【】4：英文方括号[] 5：英文花括号{} 。默认值为空，表示不进行过滤。 示例值：1取值范围：[1, 5]。S2S 模式不支持填写该参数。</p>
     * @param integer $SubtitleMode <p>字幕显示模式。S2S 模式不支持填写该参数。</p><p>枚举值：</p><ul><li>0： 尽快显示</li><li>1： 句子级别实时显示</li></ul>
     * @param string $TurnDetectionMode <p>控制新一轮对话的触发方式，默认为&quot;auto&quot;。S2S 模式不支持填写该参数。</p><p>枚举值：</p><ul><li>&quot;auto&quot;： 后台自动识别断句触发LLM(基于静音时长)</li></ul>
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserSig",$param) and $param["UserSig"] !== null) {
            $this->UserSig = $param["UserSig"];
        }

        if (array_key_exists("TargetUserId",$param) and $param["TargetUserId"] !== null) {
            $this->TargetUserId = $param["TargetUserId"];
        }

        if (array_key_exists("TTSPushRoomParams",$param) and $param["TTSPushRoomParams"] !== null) {
            $this->TTSPushRoomParams = new TranscriptionUserInfoParams();
            $this->TTSPushRoomParams->deserialize($param["TTSPushRoomParams"]);
        }

        if (array_key_exists("MaxIdleTime",$param) and $param["MaxIdleTime"] !== null) {
            $this->MaxIdleTime = $param["MaxIdleTime"];
        }

        if (array_key_exists("FilterBracketsContent",$param) and $param["FilterBracketsContent"] !== null) {
            $this->FilterBracketsContent = $param["FilterBracketsContent"];
        }

        if (array_key_exists("SubtitleMode",$param) and $param["SubtitleMode"] !== null) {
            $this->SubtitleMode = $param["SubtitleMode"];
        }

        if (array_key_exists("TurnDetectionMode",$param) and $param["TurnDetectionMode"] !== null) {
            $this->TurnDetectionMode = $param["TurnDetectionMode"];
        }
    }
}
