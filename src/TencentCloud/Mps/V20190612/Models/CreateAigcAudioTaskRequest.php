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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAigcAudioTask请求参数结构体
 *
 * @method string getModelName() 获取<p>模型名称。生音乐当前支持的模型: GL、MiniMaxMusic。</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称。生音乐当前支持的模型: GL、MiniMaxMusic。</p>
 * @method string getModelVersion() 获取<p>指定模型特定版本号。默认使用系统当前所支持的模型稳定版本。<br>模型GL支持的版本号：3.0-clip、3.0-pro。<br>模型MiniMaxMusic支持的版本号：2.0、2.5、2.6。</p>
 * @method void setModelVersion(string $ModelVersion) 设置<p>指定模型特定版本号。默认使用系统当前所支持的模型稳定版本。<br>模型GL支持的版本号：3.0-clip、3.0-pro。<br>模型MiniMaxMusic支持的版本号：2.0、2.5、2.6。</p>
 * @method string getSceneType() 获取<p>指定场景生音频。音乐: music。</p>
 * @method void setSceneType(string $SceneType) 设置<p>指定场景生音频。音乐: music。</p>
 * @method string getPrompt() 获取<p>生成视频的描述。(注：最大支持2000字符)。当未传入图片时，此参数必填。</p>
 * @method void setPrompt(string $Prompt) 设置<p>生成视频的描述。(注：最大支持2000字符)。当未传入图片时，此参数必填。</p>
 * @method array getVideoInfos() 获取<p>参考视频信息。仅部分模型支持。</p>
 * @method void setVideoInfos(array $VideoInfos) 设置<p>参考视频信息。仅部分模型支持。</p>
 * @method array getAudioInfos() 获取<p>传入参考音频信息。</p><p>比如传入音频生成音乐时需要传入。</p>
 * @method void setAudioInfos(array $AudioInfos) 设置<p>传入参考音频信息。</p><p>比如传入音频生成音乐时需要传入。</p>
 * @method string getOutputAudioFormat() 获取<p>输出音频格式，默认不填。mp3、wav。</p>
 * @method void setOutputAudioFormat(string $OutputAudioFormat) 设置<p>输出音频格式，默认不填。mp3、wav。</p>
 * @method AigcStoreCosParam getStoreCosParam() 获取<p>文件结果指定存储Cos桶信息。 注意：需开通Cos，创建并授权MPS_QcsRole角色。</p>
 * @method void setStoreCosParam(AigcStoreCosParam $StoreCosParam) 设置<p>文件结果指定存储Cos桶信息。 注意：需开通Cos，创建并授权MPS_QcsRole角色。</p>
 * @method AigcAudioExtraParam getExtraParameters() 获取<p>用于传入要求的额外参数。</p>
 * @method void setExtraParameters(AigcAudioExtraParam $ExtraParameters) 设置<p>用于传入要求的额外参数。</p>
 * @method string getAdditionalParameters() 获取<p>用于传入一些模型需要的特殊场景参数，Json格式序列化成字符串。<br>示例MinimaxMusic模型传入歌词时：<br>{"lyric":{"小马在快乐奔跑，花儿在开放"}}</p><ol><li>MiniMaxMusic生纯音乐参数使用示例: &quot;AdditionalParameters&quot;:&quot;{"is_instrumental":true}&quot;</li></ol>
 * @method void setAdditionalParameters(string $AdditionalParameters) 设置<p>用于传入一些模型需要的特殊场景参数，Json格式序列化成字符串。<br>示例MinimaxMusic模型传入歌词时：<br>{"lyric":{"小马在快乐奔跑，花儿在开放"}}</p><ol><li>MiniMaxMusic生纯音乐参数使用示例: &quot;AdditionalParameters&quot;:&quot;{"is_instrumental":true}&quot;</li></ol>
 * @method string getOperator() 获取<p>接口操作者名称。</p>
 * @method void setOperator(string $Operator) 设置<p>接口操作者名称。</p>
 */
class CreateAigcAudioTaskRequest extends AbstractModel
{
    /**
     * @var string <p>模型名称。生音乐当前支持的模型: GL、MiniMaxMusic。</p>
     */
    public $ModelName;

    /**
     * @var string <p>指定模型特定版本号。默认使用系统当前所支持的模型稳定版本。<br>模型GL支持的版本号：3.0-clip、3.0-pro。<br>模型MiniMaxMusic支持的版本号：2.0、2.5、2.6。</p>
     */
    public $ModelVersion;

    /**
     * @var string <p>指定场景生音频。音乐: music。</p>
     */
    public $SceneType;

    /**
     * @var string <p>生成视频的描述。(注：最大支持2000字符)。当未传入图片时，此参数必填。</p>
     */
    public $Prompt;

    /**
     * @var array <p>参考视频信息。仅部分模型支持。</p>
     */
    public $VideoInfos;

    /**
     * @var array <p>传入参考音频信息。</p><p>比如传入音频生成音乐时需要传入。</p>
     */
    public $AudioInfos;

    /**
     * @var string <p>输出音频格式，默认不填。mp3、wav。</p>
     */
    public $OutputAudioFormat;

    /**
     * @var AigcStoreCosParam <p>文件结果指定存储Cos桶信息。 注意：需开通Cos，创建并授权MPS_QcsRole角色。</p>
     */
    public $StoreCosParam;

    /**
     * @var AigcAudioExtraParam <p>用于传入要求的额外参数。</p>
     */
    public $ExtraParameters;

    /**
     * @var string <p>用于传入一些模型需要的特殊场景参数，Json格式序列化成字符串。<br>示例MinimaxMusic模型传入歌词时：<br>{"lyric":{"小马在快乐奔跑，花儿在开放"}}</p><ol><li>MiniMaxMusic生纯音乐参数使用示例: &quot;AdditionalParameters&quot;:&quot;{"is_instrumental":true}&quot;</li></ol>
     */
    public $AdditionalParameters;

    /**
     * @var string <p>接口操作者名称。</p>
     */
    public $Operator;

    /**
     * @param string $ModelName <p>模型名称。生音乐当前支持的模型: GL、MiniMaxMusic。</p>
     * @param string $ModelVersion <p>指定模型特定版本号。默认使用系统当前所支持的模型稳定版本。<br>模型GL支持的版本号：3.0-clip、3.0-pro。<br>模型MiniMaxMusic支持的版本号：2.0、2.5、2.6。</p>
     * @param string $SceneType <p>指定场景生音频。音乐: music。</p>
     * @param string $Prompt <p>生成视频的描述。(注：最大支持2000字符)。当未传入图片时，此参数必填。</p>
     * @param array $VideoInfos <p>参考视频信息。仅部分模型支持。</p>
     * @param array $AudioInfos <p>传入参考音频信息。</p><p>比如传入音频生成音乐时需要传入。</p>
     * @param string $OutputAudioFormat <p>输出音频格式，默认不填。mp3、wav。</p>
     * @param AigcStoreCosParam $StoreCosParam <p>文件结果指定存储Cos桶信息。 注意：需开通Cos，创建并授权MPS_QcsRole角色。</p>
     * @param AigcAudioExtraParam $ExtraParameters <p>用于传入要求的额外参数。</p>
     * @param string $AdditionalParameters <p>用于传入一些模型需要的特殊场景参数，Json格式序列化成字符串。<br>示例MinimaxMusic模型传入歌词时：<br>{"lyric":{"小马在快乐奔跑，花儿在开放"}}</p><ol><li>MiniMaxMusic生纯音乐参数使用示例: &quot;AdditionalParameters&quot;:&quot;{"is_instrumental":true}&quot;</li></ol>
     * @param string $Operator <p>接口操作者名称。</p>
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

        if (array_key_exists("OutputAudioFormat",$param) and $param["OutputAudioFormat"] !== null) {
            $this->OutputAudioFormat = $param["OutputAudioFormat"];
        }

        if (array_key_exists("StoreCosParam",$param) and $param["StoreCosParam"] !== null) {
            $this->StoreCosParam = new AigcStoreCosParam();
            $this->StoreCosParam->deserialize($param["StoreCosParam"]);
        }

        if (array_key_exists("ExtraParameters",$param) and $param["ExtraParameters"] !== null) {
            $this->ExtraParameters = new AigcAudioExtraParam();
            $this->ExtraParameters->deserialize($param["ExtraParameters"]);
        }

        if (array_key_exists("AdditionalParameters",$param) and $param["AdditionalParameters"] !== null) {
            $this->AdditionalParameters = $param["AdditionalParameters"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
