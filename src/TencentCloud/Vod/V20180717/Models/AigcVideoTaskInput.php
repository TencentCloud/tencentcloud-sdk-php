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
 * AIGC 生视频任务的输入。
 *
 * @method string getModelName() 获取<p>模型名称。</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称。</p>
 * @method string getModelVersion() 获取<p>模型版本。</p>
 * @method void setModelVersion(string $ModelVersion) 设置<p>模型版本。</p>
 * @method array getFileInfos() 获取<p>AIGC 生视频任务输入文件信息。</p>
 * @method void setFileInfos(array $FileInfos) 设置<p>AIGC 生视频任务输入文件信息。</p>
 * @method array getSubjectInfos() 获取<p>AIGC 任务固定主体输入信息。</p>
 * @method void setSubjectInfos(array $SubjectInfos) 设置<p>AIGC 任务固定主体输入信息。</p>
 * @method string getLastFrameFileId() 获取<p>用于作为尾帧画面来生成视频的媒体文件 ID。该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。</p>
 * @method void setLastFrameFileId(string $LastFrameFileId) 设置<p>用于作为尾帧画面来生成视频的媒体文件 ID。该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。</p>
 * @method string getLastFrameUrl() 获取<p>用于作为尾帧画面来生成视频的媒体文件 URL。说明：</p><ol><li>只支持模型 GV 、Kling、Vidu，其他模型暂不支持。当 ModelName 为 GV 时，如果指定该参数，则需同时指定 FileInfos 作为待生成视频的首帧。当 ModelName 为 Kling 、ModelVersion 为 2.1 并且指定输出分辨率 Resolution 为 1080P 时，才能指定该参数。当 ModelName 为 Vidu、ModelVersion 为 q2-pro、q2-turbo 时，才能指定该参数。</li><li>图片大小需小于5M。</li><li><ol start="3"><li>图片格式的取值为：jpeg，jpg, png, webp。</li></ol></li></ol>
 * @method void setLastFrameUrl(string $LastFrameUrl) 设置<p>用于作为尾帧画面来生成视频的媒体文件 URL。说明：</p><ol><li>只支持模型 GV 、Kling、Vidu，其他模型暂不支持。当 ModelName 为 GV 时，如果指定该参数，则需同时指定 FileInfos 作为待生成视频的首帧。当 ModelName 为 Kling 、ModelVersion 为 2.1 并且指定输出分辨率 Resolution 为 1080P 时，才能指定该参数。当 ModelName 为 Vidu、ModelVersion 为 q2-pro、q2-turbo 时，才能指定该参数。</li><li>图片大小需小于5M。</li><li><ol start="3"><li>图片格式的取值为：jpeg，jpg, png, webp。</li></ol></li></ol>
 * @method string getPrompt() 获取<p>生成视频的提示词。最大支持1000字符，当 FileInfos 为空时，此参数必填。</p>
 * @method void setPrompt(string $Prompt) 设置<p>生成视频的提示词。最大支持1000字符，当 FileInfos 为空时，此参数必填。</p>
 * @method string getNegativePrompt() 获取<p>要阻止模型生成视频的提示词。最大支持1000字符。</p>
 * @method void setNegativePrompt(string $NegativePrompt) 设置<p>要阻止模型生成视频的提示词。最大支持1000字符。</p>
 * @method string getEnhancePrompt() 获取<p>是否自动优化提示词。开启时将自动优化传入的Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
 * @method void setEnhancePrompt(string $EnhancePrompt) 设置<p>是否自动优化提示词。开启时将自动优化传入的Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
 * @method string getGenerationMode() 获取<p>生成模式。取值有： <li>Standard：标准模式；</li> <li>Professional：高品质模式；</li></p>
 * @method void setGenerationMode(string $GenerationMode) 设置<p>生成模式。取值有： <li>Standard：标准模式；</li> <li>Professional：高品质模式；</li></p>
 * @method AigcVideoOutputConfig getOutputConfig() 获取<p>AIGC 生图输出结果文件输出。</p>
 * @method void setOutputConfig(AigcVideoOutputConfig $OutputConfig) 设置<p>AIGC 生图输出结果文件输出。</p>
 * @method string getInputRegion() 获取<p>输入文件的区域信息。当文件url是国外地址时候，可选Oversea。默认Mainland。</p>
 * @method void setInputRegion(string $InputRegion) 设置<p>输入文件的区域信息。当文件url是国外地址时候，可选Oversea。默认Mainland。</p>
 * @method string getSceneType() 获取<p>场景类型。取值如下：<li>当 ModelName 为 Kling 时，取值 motion_control 表示动作控制；</li><li>其他 ModelName 暂不支持。</li></p>
 * @method void setSceneType(string $SceneType) 设置<p>场景类型。取值如下：<li>当 ModelName 为 Kling 时，取值 motion_control 表示动作控制；</li><li>其他 ModelName 暂不支持。</li></p>
 * @method integer getSeed() 获取<p>模型随机种子。</p>
 * @method void setSeed(integer $Seed) 设置<p>模型随机种子。</p>
 */
class AigcVideoTaskInput extends AbstractModel
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
     * @var array <p>AIGC 生视频任务输入文件信息。</p>
     */
    public $FileInfos;

    /**
     * @var array <p>AIGC 任务固定主体输入信息。</p>
     */
    public $SubjectInfos;

    /**
     * @var string <p>用于作为尾帧画面来生成视频的媒体文件 ID。该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。</p>
     */
    public $LastFrameFileId;

    /**
     * @var string <p>用于作为尾帧画面来生成视频的媒体文件 URL。说明：</p><ol><li>只支持模型 GV 、Kling、Vidu，其他模型暂不支持。当 ModelName 为 GV 时，如果指定该参数，则需同时指定 FileInfos 作为待生成视频的首帧。当 ModelName 为 Kling 、ModelVersion 为 2.1 并且指定输出分辨率 Resolution 为 1080P 时，才能指定该参数。当 ModelName 为 Vidu、ModelVersion 为 q2-pro、q2-turbo 时，才能指定该参数。</li><li>图片大小需小于5M。</li><li><ol start="3"><li>图片格式的取值为：jpeg，jpg, png, webp。</li></ol></li></ol>
     */
    public $LastFrameUrl;

    /**
     * @var string <p>生成视频的提示词。最大支持1000字符，当 FileInfos 为空时，此参数必填。</p>
     */
    public $Prompt;

    /**
     * @var string <p>要阻止模型生成视频的提示词。最大支持1000字符。</p>
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
     * @var AigcVideoOutputConfig <p>AIGC 生图输出结果文件输出。</p>
     */
    public $OutputConfig;

    /**
     * @var string <p>输入文件的区域信息。当文件url是国外地址时候，可选Oversea。默认Mainland。</p>
     */
    public $InputRegion;

    /**
     * @var string <p>场景类型。取值如下：<li>当 ModelName 为 Kling 时，取值 motion_control 表示动作控制；</li><li>其他 ModelName 暂不支持。</li></p>
     */
    public $SceneType;

    /**
     * @var integer <p>模型随机种子。</p>
     */
    public $Seed;

    /**
     * @param string $ModelName <p>模型名称。</p>
     * @param string $ModelVersion <p>模型版本。</p>
     * @param array $FileInfos <p>AIGC 生视频任务输入文件信息。</p>
     * @param array $SubjectInfos <p>AIGC 任务固定主体输入信息。</p>
     * @param string $LastFrameFileId <p>用于作为尾帧画面来生成视频的媒体文件 ID。该文件在云点播上的全局唯一标识符，在上传成功后由云点播后台分配。可以在 <a href="/document/product/266/7830">视频上传完成事件通知</a> 或 <a href="https://console.cloud.tencent.com/vod/media">云点播控制台</a> 获取该字段。</p>
     * @param string $LastFrameUrl <p>用于作为尾帧画面来生成视频的媒体文件 URL。说明：</p><ol><li>只支持模型 GV 、Kling、Vidu，其他模型暂不支持。当 ModelName 为 GV 时，如果指定该参数，则需同时指定 FileInfos 作为待生成视频的首帧。当 ModelName 为 Kling 、ModelVersion 为 2.1 并且指定输出分辨率 Resolution 为 1080P 时，才能指定该参数。当 ModelName 为 Vidu、ModelVersion 为 q2-pro、q2-turbo 时，才能指定该参数。</li><li>图片大小需小于5M。</li><li><ol start="3"><li>图片格式的取值为：jpeg，jpg, png, webp。</li></ol></li></ol>
     * @param string $Prompt <p>生成视频的提示词。最大支持1000字符，当 FileInfos 为空时，此参数必填。</p>
     * @param string $NegativePrompt <p>要阻止模型生成视频的提示词。最大支持1000字符。</p>
     * @param string $EnhancePrompt <p>是否自动优化提示词。开启时将自动优化传入的Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
     * @param string $GenerationMode <p>生成模式。取值有： <li>Standard：标准模式；</li> <li>Professional：高品质模式；</li></p>
     * @param AigcVideoOutputConfig $OutputConfig <p>AIGC 生图输出结果文件输出。</p>
     * @param string $InputRegion <p>输入文件的区域信息。当文件url是国外地址时候，可选Oversea。默认Mainland。</p>
     * @param string $SceneType <p>场景类型。取值如下：<li>当 ModelName 为 Kling 时，取值 motion_control 表示动作控制；</li><li>其他 ModelName 暂不支持。</li></p>
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
                $obj = new AigcVideoTaskInputFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("SubjectInfos",$param) and $param["SubjectInfos"] !== null) {
            $this->SubjectInfos = [];
            foreach ($param["SubjectInfos"] as $key => $value){
                $obj = new AigcVideoTaskInputSubjectInfo();
                $obj->deserialize($value);
                array_push($this->SubjectInfos, $obj);
            }
        }

        if (array_key_exists("LastFrameFileId",$param) and $param["LastFrameFileId"] !== null) {
            $this->LastFrameFileId = $param["LastFrameFileId"];
        }

        if (array_key_exists("LastFrameUrl",$param) and $param["LastFrameUrl"] !== null) {
            $this->LastFrameUrl = $param["LastFrameUrl"];
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
            $this->OutputConfig = new AigcVideoOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }

        if (array_key_exists("InputRegion",$param) and $param["InputRegion"] !== null) {
            $this->InputRegion = $param["InputRegion"];
        }

        if (array_key_exists("SceneType",$param) and $param["SceneType"] !== null) {
            $this->SceneType = $param["SceneType"];
        }

        if (array_key_exists("Seed",$param) and $param["Seed"] !== null) {
            $this->Seed = $param["Seed"];
        }
    }
}
