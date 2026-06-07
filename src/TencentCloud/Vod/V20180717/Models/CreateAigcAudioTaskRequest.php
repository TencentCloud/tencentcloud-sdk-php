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
 * CreateAigcAudioTask请求参数结构体
 *
 * @method integer getSubAppId() 获取<p>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</p>
 * @method void setSubAppId(integer $SubAppId) 设置<p>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</p>
 * @method string getModelName() 获取<p>模型名称。</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称。</p>
 * @method string getModelVersion() 获取<p>指定模型特定版本号。默认使用系统当前所支持的模型稳定版本。</p>
 * @method void setModelVersion(string $ModelVersion) 设置<p>指定模型特定版本号。默认使用系统当前所支持的模型稳定版本。</p>
 * @method string getSceneType() 获取<p>指定场景，目前支持sfx（音效）、music（音乐）。</p>
 * @method void setSceneType(string $SceneType) 设置<p>指定场景，目前支持sfx（音效）、music（音乐）。</p>
 * @method string getPrompt() 获取<p>生成音频的描述</p>
 * @method void setPrompt(string $Prompt) 设置<p>生成音频的描述</p>
 * @method array getVideoInfos() 获取<p>参考视频信息</p>
 * @method void setVideoInfos(array $VideoInfos) 设置<p>参考视频信息</p>
 * @method array getAudioInfos() 获取<p>传入参考音频信息。</p><p>比如传入音频生成音乐时需要传入。</p>
 * @method void setAudioInfos(array $AudioInfos) 设置<p>传入参考音频信息。</p><p>比如传入音频生成音乐时需要传入。</p>
 * @method AigcAudioOutputConfig getOutputConfig() 获取<p>输出参数</p>
 * @method void setOutputConfig(AigcAudioOutputConfig $OutputConfig) 设置<p>输出参数</p>
 * @method string getAdditionalParameters() 获取<p>用于传入一些模型需要的特殊场景参数，Json格式序列化成字符串。<br>示例：<br>{"camera_control":{"type":"simple"}}</p>
 * @method void setAdditionalParameters(string $AdditionalParameters) 设置<p>用于传入一些模型需要的特殊场景参数，Json格式序列化成字符串。<br>示例：<br>{"camera_control":{"type":"simple"}}</p>
 */
class CreateAigcAudioTaskRequest extends AbstractModel
{
    /**
     * @var integer <p>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</p>
     */
    public $SubAppId;

    /**
     * @var string <p>模型名称。</p>
     */
    public $ModelName;

    /**
     * @var string <p>指定模型特定版本号。默认使用系统当前所支持的模型稳定版本。</p>
     */
    public $ModelVersion;

    /**
     * @var string <p>指定场景，目前支持sfx（音效）、music（音乐）。</p>
     */
    public $SceneType;

    /**
     * @var string <p>生成音频的描述</p>
     */
    public $Prompt;

    /**
     * @var array <p>参考视频信息</p>
     */
    public $VideoInfos;

    /**
     * @var array <p>传入参考音频信息。</p><p>比如传入音频生成音乐时需要传入。</p>
     */
    public $AudioInfos;

    /**
     * @var AigcAudioOutputConfig <p>输出参数</p>
     */
    public $OutputConfig;

    /**
     * @var string <p>用于传入一些模型需要的特殊场景参数，Json格式序列化成字符串。<br>示例：<br>{"camera_control":{"type":"simple"}}</p>
     */
    public $AdditionalParameters;

    /**
     * @param integer $SubAppId <p>点播应用 ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</p>
     * @param string $ModelName <p>模型名称。</p>
     * @param string $ModelVersion <p>指定模型特定版本号。默认使用系统当前所支持的模型稳定版本。</p>
     * @param string $SceneType <p>指定场景，目前支持sfx（音效）、music（音乐）。</p>
     * @param string $Prompt <p>生成音频的描述</p>
     * @param array $VideoInfos <p>参考视频信息</p>
     * @param array $AudioInfos <p>传入参考音频信息。</p><p>比如传入音频生成音乐时需要传入。</p>
     * @param AigcAudioOutputConfig $OutputConfig <p>输出参数</p>
     * @param string $AdditionalParameters <p>用于传入一些模型需要的特殊场景参数，Json格式序列化成字符串。<br>示例：<br>{"camera_control":{"type":"simple"}}</p>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
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

        if (array_key_exists("VideoInfos",$param) and $param["VideoInfos"] !== null) {
            $this->VideoInfos = [];
            foreach ($param["VideoInfos"] as $key => $value){
                $obj = new AigcAudioReferenceVideoInfo();
                $obj->deserialize($value);
                array_push($this->VideoInfos, $obj);
            }
        }

        if (array_key_exists("AudioInfos",$param) and $param["AudioInfos"] !== null) {
            $this->AudioInfos = [];
            foreach ($param["AudioInfos"] as $key => $value){
                $obj = new AigcAudioReferenceAudioInfo();
                $obj->deserialize($value);
                array_push($this->AudioInfos, $obj);
            }
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
