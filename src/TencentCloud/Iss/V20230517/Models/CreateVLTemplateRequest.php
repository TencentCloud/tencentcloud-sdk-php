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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVLTemplate请求参数结构体
 *
 * @method string getAIModel() 获取<p>AI 模型</p><p>枚举值：</p><ul><li>ivc-vl-1.0： 视图大模型</li></ul>
 * @method void setAIModel(string $AIModel) 设置<p>AI 模型</p><p>枚举值：</p><ul><li>ivc-vl-1.0： 视图大模型</li></ul>
 * @method string getName() 获取<p>模板名称，仅支持中文/英文/数字/_/-，最长 32 个字符</p>
 * @method void setName(string $Name) 设置<p>模板名称，仅支持中文/英文/数字/_/-，最长 32 个字符</p>
 * @method string getPrompt() 获取<p>提示词，最大 2MB</p>
 * @method void setPrompt(string $Prompt) 设置<p>提示词，最大 2MB</p>
 * @method string getAnalysisMode() 获取<p>分析模式</p><p>枚举值：</p><ul><li>image： 图片模式</li><li>video： 视频模式</li></ul>
 * @method void setAnalysisMode(string $AnalysisMode) 设置<p>分析模式</p><p>枚举值：</p><ul><li>image： 图片模式</li><li>video： 视频模式</li></ul>
 * @method array getTimes() 获取<p>生效时段列表，最多 100 条</p>
 * @method void setTimes(array $Times) 设置<p>生效时段列表，最多 100 条</p>
 * @method string getDescribe() 获取<p>模板描述，最长 256 个字符</p>
 * @method void setDescribe(string $Describe) 设置<p>模板描述，最长 256 个字符</p>
 * @method ImageSceneInfo getImageConfig() 获取<p>图片场景配置（AnalysisMode=image 时必填）</p>
 * @method void setImageConfig(ImageSceneInfo $ImageConfig) 设置<p>图片场景配置（AnalysisMode=image 时必填）</p>
 */
class CreateVLTemplateRequest extends AbstractModel
{
    /**
     * @var string <p>AI 模型</p><p>枚举值：</p><ul><li>ivc-vl-1.0： 视图大模型</li></ul>
     */
    public $AIModel;

    /**
     * @var string <p>模板名称，仅支持中文/英文/数字/_/-，最长 32 个字符</p>
     */
    public $Name;

    /**
     * @var string <p>提示词，最大 2MB</p>
     */
    public $Prompt;

    /**
     * @var string <p>分析模式</p><p>枚举值：</p><ul><li>image： 图片模式</li><li>video： 视频模式</li></ul>
     */
    public $AnalysisMode;

    /**
     * @var array <p>生效时段列表，最多 100 条</p>
     */
    public $Times;

    /**
     * @var string <p>模板描述，最长 256 个字符</p>
     */
    public $Describe;

    /**
     * @var ImageSceneInfo <p>图片场景配置（AnalysisMode=image 时必填）</p>
     */
    public $ImageConfig;

    /**
     * @param string $AIModel <p>AI 模型</p><p>枚举值：</p><ul><li>ivc-vl-1.0： 视图大模型</li></ul>
     * @param string $Name <p>模板名称，仅支持中文/英文/数字/_/-，最长 32 个字符</p>
     * @param string $Prompt <p>提示词，最大 2MB</p>
     * @param string $AnalysisMode <p>分析模式</p><p>枚举值：</p><ul><li>image： 图片模式</li><li>video： 视频模式</li></ul>
     * @param array $Times <p>生效时段列表，最多 100 条</p>
     * @param string $Describe <p>模板描述，最长 256 个字符</p>
     * @param ImageSceneInfo $ImageConfig <p>图片场景配置（AnalysisMode=image 时必填）</p>
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
        if (array_key_exists("AIModel",$param) and $param["AIModel"] !== null) {
            $this->AIModel = $param["AIModel"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("AnalysisMode",$param) and $param["AnalysisMode"] !== null) {
            $this->AnalysisMode = $param["AnalysisMode"];
        }

        if (array_key_exists("Times",$param) and $param["Times"] !== null) {
            $this->Times = [];
            foreach ($param["Times"] as $key => $value){
                $obj = new EffectiveTime();
                $obj->deserialize($value);
                array_push($this->Times, $obj);
            }
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("ImageConfig",$param) and $param["ImageConfig"] !== null) {
            $this->ImageConfig = new ImageSceneInfo();
            $this->ImageConfig->deserialize($param["ImageConfig"]);
        }
    }
}
