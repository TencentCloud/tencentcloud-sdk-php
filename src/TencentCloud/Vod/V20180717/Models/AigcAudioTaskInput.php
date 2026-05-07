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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AIGC 生音效任务的输入。
 *
 * @method string getModelName() 获取<p>模型名称。</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称。</p>
 * @method string getModelVersion() 获取<p>模型版本。</p>
 * @method void setModelVersion(string $ModelVersion) 设置<p>模型版本。</p>
 * @method string getSceneType() 获取<p>场景类型。取值如下：<li>当 ModelName 为 Kling 时，取值 motion_control 表示动作控制；</li><li>其他 ModelName 暂不支持。</li></p>
 * @method void setSceneType(string $SceneType) 设置<p>场景类型。取值如下：<li>当 ModelName 为 Kling 时，取值 motion_control 表示动作控制；</li><li>其他 ModelName 暂不支持。</li></p>
 * @method string getPrompt() 获取<p>生成视频的提示词。最大支持1000字符，当 FileInfos 为空时，此参数必填。</p>
 * @method void setPrompt(string $Prompt) 设置<p>生成视频的提示词。最大支持1000字符，当 FileInfos 为空时，此参数必填。</p>
 * @method string getNegativePrompt() 获取<p>要阻止模型生成视频的提示词。最大支持1000字符。</p>
 * @method void setNegativePrompt(string $NegativePrompt) 设置<p>要阻止模型生成视频的提示词。最大支持1000字符。</p>
 * @method boolean getEnhancePrompt() 获取<p>是否自动优化提示词。开启时将自动优化传入的Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
 * @method void setEnhancePrompt(boolean $EnhancePrompt) 设置<p>是否自动优化提示词。开启时将自动优化传入的Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
 * @method AigcAudioOutputConfig getOutputConfig() 获取<p>AIGC 生图输出结果文件输出。</p>
 * @method void setOutputConfig(AigcAudioOutputConfig $OutputConfig) 设置<p>AIGC 生图输出结果文件输出。</p>
 * @method string getAdditionalParameters() 获取<p>额外参数</p>
 * @method void setAdditionalParameters(string $AdditionalParameters) 设置<p>额外参数</p>
 */
class AigcAudioTaskInput extends AbstractModel
{
    /**
     * @var string <p>模型名称。</p>
     */
    public $ModelName;

    /**
     * @var string <p>模型版本。</p>
     */
    public $ModelVersion;

    /**
     * @var string <p>场景类型。取值如下：<li>当 ModelName 为 Kling 时，取值 motion_control 表示动作控制；</li><li>其他 ModelName 暂不支持。</li></p>
     */
    public $SceneType;

    /**
     * @var string <p>生成视频的提示词。最大支持1000字符，当 FileInfos 为空时，此参数必填。</p>
     */
    public $Prompt;

    /**
     * @var string <p>要阻止模型生成视频的提示词。最大支持1000字符。</p>
     */
    public $NegativePrompt;

    /**
     * @var boolean <p>是否自动优化提示词。开启时将自动优化传入的Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
     */
    public $EnhancePrompt;

    /**
     * @var AigcAudioOutputConfig <p>AIGC 生图输出结果文件输出。</p>
     */
    public $OutputConfig;

    /**
     * @var string <p>额外参数</p>
     */
    public $AdditionalParameters;

    /**
     * @param string $ModelName <p>模型名称。</p>
     * @param string $ModelVersion <p>模型版本。</p>
     * @param string $SceneType <p>场景类型。取值如下：<li>当 ModelName 为 Kling 时，取值 motion_control 表示动作控制；</li><li>其他 ModelName 暂不支持。</li></p>
     * @param string $Prompt <p>生成视频的提示词。最大支持1000字符，当 FileInfos 为空时，此参数必填。</p>
     * @param string $NegativePrompt <p>要阻止模型生成视频的提示词。最大支持1000字符。</p>
     * @param boolean $EnhancePrompt <p>是否自动优化提示词。开启时将自动优化传入的Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
     * @param AigcAudioOutputConfig $OutputConfig <p>AIGC 生图输出结果文件输出。</p>
     * @param string $AdditionalParameters <p>额外参数</p>
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
        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("NegativePrompt",$param) and $param["NegativePrompt"] !== null) {
            $this->NegativePrompt = $param["NegativePrompt"];
        }

        if (array_key_exists("EnhancePrompt",$param) and $param["EnhancePrompt"] !== null) {
            $this->EnhancePrompt = $param["EnhancePrompt"];
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new AigcAudioOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }

        if (array_key_exists("AdditionalParameters",$param) and $param["AdditionalParameters"] !== null) {
            $this->AdditionalParameters = $param["AdditionalParameters"];
        }
    }
}
