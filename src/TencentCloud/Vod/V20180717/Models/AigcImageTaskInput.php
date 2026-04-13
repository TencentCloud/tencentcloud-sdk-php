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
 * AIGC 生图任务的输入。
 *
 * @method string getModelName() 获取<p>模型名称。</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称。</p>
 * @method string getModelVersion() 获取<p>模型版本。</p>
 * @method void setModelVersion(string $ModelVersion) 设置<p>模型版本。</p>
 * @method array getFileInfos() 获取<p>AIGC生图任务输入文件信息。</p>
 * @method void setFileInfos(array $FileInfos) 设置<p>AIGC生图任务输入文件信息。</p>
 * @method string getPrompt() 获取<p>生成图片的提示词。最大支持1000字符，当 FileInfos 为空时，此参数必填。</p>
 * @method void setPrompt(string $Prompt) 设置<p>生成图片的提示词。最大支持1000字符，当 FileInfos 为空时，此参数必填。</p>
 * @method string getNegativePrompt() 获取<p>要阻止模型生成图片的提示词。最大支持1000字符。</p>
 * @method void setNegativePrompt(string $NegativePrompt) 设置<p>要阻止模型生成图片的提示词。最大支持1000字符。</p>
 * @method string getEnhancePrompt() 获取<p>是否自动优化提示词。开启时将自动优化传入的Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
 * @method void setEnhancePrompt(string $EnhancePrompt) 设置<p>是否自动优化提示词。开启时将自动优化传入的Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
 * @method string getGenerationMode() 获取<p>生成模式。取值有： <li>Standard：标准模式；</li> <li>Professional：高品质模式；</li></p>
 * @method void setGenerationMode(string $GenerationMode) 设置<p>生成模式。取值有： <li>Standard：标准模式；</li> <li>Professional：高品质模式；</li></p>
 * @method AigcImageOutputConfig getOutputConfig() 获取<p>AIGC 生图输出结果文件输出。</p>
 * @method void setOutputConfig(AigcImageOutputConfig $OutputConfig) 设置<p>AIGC 生图输出结果文件输出。</p>
 * @method integer getSeed() 获取<p>模型随机种子。</p>
 * @method void setSeed(integer $Seed) 设置<p>模型随机种子。</p>
 */
class AigcImageTaskInput extends AbstractModel
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
     * @var array <p>AIGC生图任务输入文件信息。</p>
     */
    public $FileInfos;

    /**
     * @var string <p>生成图片的提示词。最大支持1000字符，当 FileInfos 为空时，此参数必填。</p>
     */
    public $Prompt;

    /**
     * @var string <p>要阻止模型生成图片的提示词。最大支持1000字符。</p>
     */
    public $NegativePrompt;

    /**
     * @var string <p>是否自动优化提示词。开启时将自动优化传入的Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
     */
    public $EnhancePrompt;

    /**
     * @var string <p>生成模式。取值有： <li>Standard：标准模式；</li> <li>Professional：高品质模式；</li></p>
     */
    public $GenerationMode;

    /**
     * @var AigcImageOutputConfig <p>AIGC 生图输出结果文件输出。</p>
     */
    public $OutputConfig;

    /**
     * @var integer <p>模型随机种子。</p>
     */
    public $Seed;

    /**
     * @param string $ModelName <p>模型名称。</p>
     * @param string $ModelVersion <p>模型版本。</p>
     * @param array $FileInfos <p>AIGC生图任务输入文件信息。</p>
     * @param string $Prompt <p>生成图片的提示词。最大支持1000字符，当 FileInfos 为空时，此参数必填。</p>
     * @param string $NegativePrompt <p>要阻止模型生成图片的提示词。最大支持1000字符。</p>
     * @param string $EnhancePrompt <p>是否自动优化提示词。开启时将自动优化传入的Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
     * @param string $GenerationMode <p>生成模式。取值有： <li>Standard：标准模式；</li> <li>Professional：高品质模式；</li></p>
     * @param AigcImageOutputConfig $OutputConfig <p>AIGC 生图输出结果文件输出。</p>
     * @param integer $Seed <p>模型随机种子。</p>
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

        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new AigcImageTaskInputFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
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

        if (array_key_exists("GenerationMode",$param) and $param["GenerationMode"] !== null) {
            $this->GenerationMode = $param["GenerationMode"];
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new AigcImageOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }

        if (array_key_exists("Seed",$param) and $param["Seed"] !== null) {
            $this->Seed = $param["Seed"];
        }
    }
}
