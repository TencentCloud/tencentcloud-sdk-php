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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 天御内容安全 策略基本信息。
 *
 * @method string getStrategyType() 获取<p>策略类型，可选值：<br>Text：文本ShortAudio：音频<br>Image:<br>图片。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyType(string $StrategyType) 设置<p>策略类型，可选值：<br>Text：文本ShortAudio：音频<br>Image:<br>图片。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBizType() 获取<p>策略标识（自动生成）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizType(string $BizType) 设置<p>策略标识（自动生成）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getStatus() 获取<p>策略开通状态。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(boolean $Status) 设置<p>策略开通状态。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStrategyConfig() 获取<p>策略配置。<br>json字符串。</p><p>具体取值方式如下：举例：色情：&quot;{"ability":{"asr_text":true,"audio":true},"asr_text_labels":{"porn":["OVR","Pornography","PornographyObscene"]},"audio_labels":{},"user_text_libs":["320fb40e-9305-4b00-a191-945c219b5cc0"]}&quot;    可选项： {     value: &#39;OVR&#39;,     text: t(&#39;低俗语音识别&#39;),     msg: t(&#39;示例：呻吟、娇喘、娇喘等性暗示相关的语音&#39;),   },   {     value: &#39;Pornography&#39;,     text: t(&#39;严重色情&#39;),     msg: t(&#39;性行为、性器官等相关描述&#39;),   },   {     value: &#39;PornographyObscene&#39;,     text: t(&#39;色情低俗&#39;),     msg: t(&#39;低俗行为、性暗示等相关描述&#39;),   }</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStrategyConfig(string $StrategyConfig) 设置<p>策略配置。<br>json字符串。</p><p>具体取值方式如下：举例：色情：&quot;{"ability":{"asr_text":true,"audio":true},"asr_text_labels":{"porn":["OVR","Pornography","PornographyObscene"]},"audio_labels":{},"user_text_libs":["320fb40e-9305-4b00-a191-945c219b5cc0"]}&quot;    可选项： {     value: &#39;OVR&#39;,     text: t(&#39;低俗语音识别&#39;),     msg: t(&#39;示例：呻吟、娇喘、娇喘等性暗示相关的语音&#39;),   },   {     value: &#39;Pornography&#39;,     text: t(&#39;严重色情&#39;),     msg: t(&#39;性行为、性器官等相关描述&#39;),   },   {     value: &#39;PornographyObscene&#39;,     text: t(&#39;色情低俗&#39;),     msg: t(&#39;低俗行为、性暗示等相关描述&#39;),   }</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CMSBizInfo extends AbstractModel
{
    /**
     * @var string <p>策略类型，可选值：<br>Text：文本ShortAudio：音频<br>Image:<br>图片。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyType;

    /**
     * @var string <p>策略标识（自动生成）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizType;

    /**
     * @var boolean <p>策略开通状态。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>策略配置。<br>json字符串。</p><p>具体取值方式如下：举例：色情：&quot;{"ability":{"asr_text":true,"audio":true},"asr_text_labels":{"porn":["OVR","Pornography","PornographyObscene"]},"audio_labels":{},"user_text_libs":["320fb40e-9305-4b00-a191-945c219b5cc0"]}&quot;    可选项： {     value: &#39;OVR&#39;,     text: t(&#39;低俗语音识别&#39;),     msg: t(&#39;示例：呻吟、娇喘、娇喘等性暗示相关的语音&#39;),   },   {     value: &#39;Pornography&#39;,     text: t(&#39;严重色情&#39;),     msg: t(&#39;性行为、性器官等相关描述&#39;),   },   {     value: &#39;PornographyObscene&#39;,     text: t(&#39;色情低俗&#39;),     msg: t(&#39;低俗行为、性暗示等相关描述&#39;),   }</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StrategyConfig;

    /**
     * @param string $StrategyType <p>策略类型，可选值：<br>Text：文本ShortAudio：音频<br>Image:<br>图片。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BizType <p>策略标识（自动生成）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Status <p>策略开通状态。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StrategyConfig <p>策略配置。<br>json字符串。</p><p>具体取值方式如下：举例：色情：&quot;{"ability":{"asr_text":true,"audio":true},"asr_text_labels":{"porn":["OVR","Pornography","PornographyObscene"]},"audio_labels":{},"user_text_libs":["320fb40e-9305-4b00-a191-945c219b5cc0"]}&quot;    可选项： {     value: &#39;OVR&#39;,     text: t(&#39;低俗语音识别&#39;),     msg: t(&#39;示例：呻吟、娇喘、娇喘等性暗示相关的语音&#39;),   },   {     value: &#39;Pornography&#39;,     text: t(&#39;严重色情&#39;),     msg: t(&#39;性行为、性器官等相关描述&#39;),   },   {     value: &#39;PornographyObscene&#39;,     text: t(&#39;色情低俗&#39;),     msg: t(&#39;低俗行为、性暗示等相关描述&#39;),   }</p>
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
        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StrategyConfig",$param) and $param["StrategyConfig"] !== null) {
            $this->StrategyConfig = $param["StrategyConfig"];
        }
    }
}
