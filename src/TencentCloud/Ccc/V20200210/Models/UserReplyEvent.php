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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户发言事件
 *
 * @method string getASRTranscript() 获取<p>ASR语音识别引擎将用户语音转换成的原始文本结果</p>
 * @method void setASRTranscript(string $ASRTranscript) 设置<p>ASR语音识别引擎将用户语音转换成的原始文本结果</p>
 * @method string getMatchedIntent() 获取<p>命中画布中该对话节点配置的回复分类</p>
 * @method void setMatchedIntent(string $MatchedIntent) 设置<p>命中画布中该对话节点配置的回复分类</p>
 * @method string getExtractedSlots() 获取<p>本轮收集到的词槽列表（TagType 为 2 或 3），json 序列化后的字符串。数组元素含 TagName（词槽名）、TagValue（词槽值）、TagType（词槽类型，2 表示必填词槽，3 表示选填词槽）三个字段；无词槽时为空字符串。</p>
 * @method void setExtractedSlots(string $ExtractedSlots) 设置<p>本轮收集到的词槽列表（TagType 为 2 或 3），json 序列化后的字符串。数组元素含 TagName（词槽名）、TagValue（词槽值）、TagType（词槽类型，2 表示必填词槽，3 表示选填词槽）三个字段；无词槽时为空字符串。</p>
 * @method string getBranchType() 获取<p>用户回复命中的分支类型</p><p>枚举值：</p><ul><li>Intent： 用户意图</li><li>Fallback： 兜底分支</li><li>NoResponse： 无响应跳转分支</li><li>SlotCollectionSuccess： 词槽收集完成跳转分支</li><li>SlotCollectionFail： 词槽收集失败跳转分支</li><li>GlobalIntent： 全局节点意图</li><li>LogicAnd： 逻辑判断节点 and</li><li>LogicOr： 逻辑判断节点 or</li><li>DTMFSuccess： DTMF 收号成功</li><li>DTMFFail： DTMF 收号失败</li><li>DTMFNavigation： DTMF 导航</li><li>DTMFExtension： DTMF 分机</li><li>DTMFCollection： DTMF 收号</li><li>TransferAgentFail： 转接智能体节点失败</li><li>Other： 其他分支类型</li></ul>
 * @method void setBranchType(string $BranchType) 设置<p>用户回复命中的分支类型</p><p>枚举值：</p><ul><li>Intent： 用户意图</li><li>Fallback： 兜底分支</li><li>NoResponse： 无响应跳转分支</li><li>SlotCollectionSuccess： 词槽收集完成跳转分支</li><li>SlotCollectionFail： 词槽收集失败跳转分支</li><li>GlobalIntent： 全局节点意图</li><li>LogicAnd： 逻辑判断节点 and</li><li>LogicOr： 逻辑判断节点 or</li><li>DTMFSuccess： DTMF 收号成功</li><li>DTMFFail： DTMF 收号失败</li><li>DTMFNavigation： DTMF 导航</li><li>DTMFExtension： DTMF 分机</li><li>DTMFCollection： DTMF 收号</li><li>TransferAgentFail： 转接智能体节点失败</li><li>Other： 其他分支类型</li></ul>
 */
class UserReplyEvent extends AbstractModel
{
    /**
     * @var string <p>ASR语音识别引擎将用户语音转换成的原始文本结果</p>
     */
    public $ASRTranscript;

    /**
     * @var string <p>命中画布中该对话节点配置的回复分类</p>
     */
    public $MatchedIntent;

    /**
     * @var string <p>本轮收集到的词槽列表（TagType 为 2 或 3），json 序列化后的字符串。数组元素含 TagName（词槽名）、TagValue（词槽值）、TagType（词槽类型，2 表示必填词槽，3 表示选填词槽）三个字段；无词槽时为空字符串。</p>
     */
    public $ExtractedSlots;

    /**
     * @var string <p>用户回复命中的分支类型</p><p>枚举值：</p><ul><li>Intent： 用户意图</li><li>Fallback： 兜底分支</li><li>NoResponse： 无响应跳转分支</li><li>SlotCollectionSuccess： 词槽收集完成跳转分支</li><li>SlotCollectionFail： 词槽收集失败跳转分支</li><li>GlobalIntent： 全局节点意图</li><li>LogicAnd： 逻辑判断节点 and</li><li>LogicOr： 逻辑判断节点 or</li><li>DTMFSuccess： DTMF 收号成功</li><li>DTMFFail： DTMF 收号失败</li><li>DTMFNavigation： DTMF 导航</li><li>DTMFExtension： DTMF 分机</li><li>DTMFCollection： DTMF 收号</li><li>TransferAgentFail： 转接智能体节点失败</li><li>Other： 其他分支类型</li></ul>
     */
    public $BranchType;

    /**
     * @param string $ASRTranscript <p>ASR语音识别引擎将用户语音转换成的原始文本结果</p>
     * @param string $MatchedIntent <p>命中画布中该对话节点配置的回复分类</p>
     * @param string $ExtractedSlots <p>本轮收集到的词槽列表（TagType 为 2 或 3），json 序列化后的字符串。数组元素含 TagName（词槽名）、TagValue（词槽值）、TagType（词槽类型，2 表示必填词槽，3 表示选填词槽）三个字段；无词槽时为空字符串。</p>
     * @param string $BranchType <p>用户回复命中的分支类型</p><p>枚举值：</p><ul><li>Intent： 用户意图</li><li>Fallback： 兜底分支</li><li>NoResponse： 无响应跳转分支</li><li>SlotCollectionSuccess： 词槽收集完成跳转分支</li><li>SlotCollectionFail： 词槽收集失败跳转分支</li><li>GlobalIntent： 全局节点意图</li><li>LogicAnd： 逻辑判断节点 and</li><li>LogicOr： 逻辑判断节点 or</li><li>DTMFSuccess： DTMF 收号成功</li><li>DTMFFail： DTMF 收号失败</li><li>DTMFNavigation： DTMF 导航</li><li>DTMFExtension： DTMF 分机</li><li>DTMFCollection： DTMF 收号</li><li>TransferAgentFail： 转接智能体节点失败</li><li>Other： 其他分支类型</li></ul>
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
        if (array_key_exists("ASRTranscript",$param) and $param["ASRTranscript"] !== null) {
            $this->ASRTranscript = $param["ASRTranscript"];
        }

        if (array_key_exists("MatchedIntent",$param) and $param["MatchedIntent"] !== null) {
            $this->MatchedIntent = $param["MatchedIntent"];
        }

        if (array_key_exists("ExtractedSlots",$param) and $param["ExtractedSlots"] !== null) {
            $this->ExtractedSlots = $param["ExtractedSlots"];
        }

        if (array_key_exists("BranchType",$param) and $param["BranchType"] !== null) {
            $this->BranchType = $param["BranchType"];
        }
    }
}
