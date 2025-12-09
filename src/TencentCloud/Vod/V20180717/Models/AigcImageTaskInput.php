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
 * @method string getModelName() 获取模型名称。
 * @method void setModelName(string $ModelName) 设置模型名称。
 * @method string getModelVersion() 获取模型版本。
 * @method void setModelVersion(string $ModelVersion) 设置模型版本。
 * @method array getFileInfos() 获取AIGC生图任务输入文件信息。
 * @method void setFileInfos(array $FileInfos) 设置AIGC生图任务输入文件信息。
 * @method string getPrompt() 获取生成图片的提示词。最大支持1000字符，当 FileInfos 为空时，此参数必填。
 * @method void setPrompt(string $Prompt) 设置生成图片的提示词。最大支持1000字符，当 FileInfos 为空时，此参数必填。
 * @method string getNegativePrompt() 获取要阻止模型生成图片的提示词。最大支持1000字符。
 * @method void setNegativePrompt(string $NegativePrompt) 设置要阻止模型生成图片的提示词。最大支持1000字符。
 * @method string getEnhancePrompt() 获取是否自动优化提示词。开启时将自动优化传入的Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li> 
 * @method void setEnhancePrompt(string $EnhancePrompt) 设置是否自动优化提示词。开启时将自动优化传入的Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li> 
 * @method string getGenerationMode() 获取生成模式。取值有： <li>Standard：标准模式；</li> <li>Professional：高品质模式；</li> 
 * @method void setGenerationMode(string $GenerationMode) 设置生成模式。取值有： <li>Standard：标准模式；</li> <li>Professional：高品质模式；</li> 
 * @method AigcImageOutputConfig getOutputConfig() 获取AIGC 生图输出结果文件输出。
 * @method void setOutputConfig(AigcImageOutputConfig $OutputConfig) 设置AIGC 生图输出结果文件输出。
 */
class AigcImageTaskInput extends AbstractModel
{
    /**
     * @var string 模型名称。
     */
    public $ModelName;

    /**
     * @var string 模型版本。
     */
    public $ModelVersion;

    /**
     * @var array AIGC生图任务输入文件信息。
     */
    public $FileInfos;

    /**
     * @var string 生成图片的提示词。最大支持1000字符，当 FileInfos 为空时，此参数必填。
     */
    public $Prompt;

    /**
     * @var string 要阻止模型生成图片的提示词。最大支持1000字符。
     */
    public $NegativePrompt;

    /**
     * @var string 是否自动优化提示词。开启时将自动优化传入的Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li> 
     */
    public $EnhancePrompt;

    /**
     * @var string 生成模式。取值有： <li>Standard：标准模式；</li> <li>Professional：高品质模式；</li> 
     */
    public $GenerationMode;

    /**
     * @var AigcImageOutputConfig AIGC 生图输出结果文件输出。
     */
    public $OutputConfig;

    /**
     * @param string $ModelName 模型名称。
     * @param string $ModelVersion 模型版本。
     * @param array $FileInfos AIGC生图任务输入文件信息。
     * @param string $Prompt 生成图片的提示词。最大支持1000字符，当 FileInfos 为空时，此参数必填。
     * @param string $NegativePrompt 要阻止模型生成图片的提示词。最大支持1000字符。
     * @param string $EnhancePrompt 是否自动优化提示词。开启时将自动优化传入的Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li> 
     * @param string $GenerationMode 生成模式。取值有： <li>Standard：标准模式；</li> <li>Professional：高品质模式；</li> 
     * @param AigcImageOutputConfig $OutputConfig AIGC 生图输出结果文件输出。
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
    }
}
