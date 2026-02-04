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
 * CreateAigcImageTask请求参数结构体
 *
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method string getModelName() 获取模型名称。取值：
<li>GEM：Gemini；</li>
<li>Qwen：千问。</li>
<li>Hunyuan：混元。</li>
<li>Vidu：生数。</li>
<li>Kling：可灵。</li>
 * @method void setModelName(string $ModelName) 设置模型名称。取值：
<li>GEM：Gemini；</li>
<li>Qwen：千问。</li>
<li>Hunyuan：混元。</li>
<li>Vidu：生数。</li>
<li>Kling：可灵。</li>
 * @method string getModelVersion() 获取模型版本。取值：
<li>当 ModelName 是 GEM，可选值为 2.5、3.0；</li>
<li>当 ModelName 是 Qwen，可选值为 0925；</li>
<li>当 ModelName 是 Hunyuan，可选值为 3.0；</li>
<li>当 ModelName 是 Vidu，可选值为 q2；</li>
<li>当 ModelName 是 Kling，可选值为 2.1；</li>
 * @method void setModelVersion(string $ModelVersion) 设置模型版本。取值：
<li>当 ModelName 是 GEM，可选值为 2.5、3.0；</li>
<li>当 ModelName 是 Qwen，可选值为 0925；</li>
<li>当 ModelName 是 Hunyuan，可选值为 3.0；</li>
<li>当 ModelName 是 Vidu，可选值为 q2；</li>
<li>当 ModelName 是 Kling，可选值为 2.1；</li>
 * @method array getFileInfos() 获取AIGC 生图任务的输入图片的文件信息。默认只支持指定1个。下列模型可传多张参考图：
* GEM 2.5：0～3张图片；
* GEM 3.0：0～14张图片；
* Vidu q2：0～7张图片，图片支持 png、jpeg、jpg、webp格式，图片像素不能小于 128x128，且比例需要小于1:4或4:1；
 * @method void setFileInfos(array $FileInfos) 设置AIGC 生图任务的输入图片的文件信息。默认只支持指定1个。下列模型可传多张参考图：
* GEM 2.5：0～3张图片；
* GEM 3.0：0～14张图片；
* Vidu q2：0～7张图片，图片支持 png、jpeg、jpg、webp格式，图片像素不能小于 128x128，且比例需要小于1:4或4:1；
 * @method string getPrompt() 获取生成图片的提示词。当 FileInfos 为空时，此参数必填。
 * @method void setPrompt(string $Prompt) 设置生成图片的提示词。当 FileInfos 为空时，此参数必填。
 * @method string getNegativePrompt() 获取要阻止模型生成图片的提示词。
 * @method void setNegativePrompt(string $NegativePrompt) 设置要阻止模型生成图片的提示词。
 * @method string getEnhancePrompt() 获取是否自动优化提示词。开启时将自动优化传入的 Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li> 
 * @method void setEnhancePrompt(string $EnhancePrompt) 设置是否自动优化提示词。开启时将自动优化传入的 Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li> 
 * @method AigcImageOutputConfig getOutputConfig() 获取生图任务的输出媒体文件配置。
 * @method void setOutputConfig(AigcImageOutputConfig $OutputConfig) 设置生图任务的输出媒体文件配置。
 * @method string getSessionId() 获取用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method void setSessionId(string $SessionId) 设置用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
 * @method string getSessionContext() 获取来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。
 * @method void setSessionContext(string $SessionContext) 设置来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。
 * @method integer getTasksPriority() 获取任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
 * @method void setTasksPriority(integer $TasksPriority) 设置任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
 * @method string getExtInfo() 获取保留字段，特殊用途时使用。
 * @method void setExtInfo(string $ExtInfo) 设置保留字段，特殊用途时使用。
 */
class CreateAigcImageTaskRequest extends AbstractModel
{
    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @var string 模型名称。取值：
<li>GEM：Gemini；</li>
<li>Qwen：千问。</li>
<li>Hunyuan：混元。</li>
<li>Vidu：生数。</li>
<li>Kling：可灵。</li>
     */
    public $ModelName;

    /**
     * @var string 模型版本。取值：
<li>当 ModelName 是 GEM，可选值为 2.5、3.0；</li>
<li>当 ModelName 是 Qwen，可选值为 0925；</li>
<li>当 ModelName 是 Hunyuan，可选值为 3.0；</li>
<li>当 ModelName 是 Vidu，可选值为 q2；</li>
<li>当 ModelName 是 Kling，可选值为 2.1；</li>
     */
    public $ModelVersion;

    /**
     * @var array AIGC 生图任务的输入图片的文件信息。默认只支持指定1个。下列模型可传多张参考图：
* GEM 2.5：0～3张图片；
* GEM 3.0：0～14张图片；
* Vidu q2：0～7张图片，图片支持 png、jpeg、jpg、webp格式，图片像素不能小于 128x128，且比例需要小于1:4或4:1；
     */
    public $FileInfos;

    /**
     * @var string 生成图片的提示词。当 FileInfos 为空时，此参数必填。
     */
    public $Prompt;

    /**
     * @var string 要阻止模型生成图片的提示词。
     */
    public $NegativePrompt;

    /**
     * @var string 是否自动优化提示词。开启时将自动优化传入的 Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li> 
     */
    public $EnhancePrompt;

    /**
     * @var AigcImageOutputConfig 生图任务的输出媒体文件配置。
     */
    public $OutputConfig;

    /**
     * @var string 用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     */
    public $SessionId;

    /**
     * @var string 来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。
     */
    public $SessionContext;

    /**
     * @var integer 任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
     */
    public $TasksPriority;

    /**
     * @var string 保留字段，特殊用途时使用。
     */
    public $ExtInfo;

    /**
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     * @param string $ModelName 模型名称。取值：
<li>GEM：Gemini；</li>
<li>Qwen：千问。</li>
<li>Hunyuan：混元。</li>
<li>Vidu：生数。</li>
<li>Kling：可灵。</li>
     * @param string $ModelVersion 模型版本。取值：
<li>当 ModelName 是 GEM，可选值为 2.5、3.0；</li>
<li>当 ModelName 是 Qwen，可选值为 0925；</li>
<li>当 ModelName 是 Hunyuan，可选值为 3.0；</li>
<li>当 ModelName 是 Vidu，可选值为 q2；</li>
<li>当 ModelName 是 Kling，可选值为 2.1；</li>
     * @param array $FileInfos AIGC 生图任务的输入图片的文件信息。默认只支持指定1个。下列模型可传多张参考图：
* GEM 2.5：0～3张图片；
* GEM 3.0：0～14张图片；
* Vidu q2：0～7张图片，图片支持 png、jpeg、jpg、webp格式，图片像素不能小于 128x128，且比例需要小于1:4或4:1；
     * @param string $Prompt 生成图片的提示词。当 FileInfos 为空时，此参数必填。
     * @param string $NegativePrompt 要阻止模型生成图片的提示词。
     * @param string $EnhancePrompt 是否自动优化提示词。开启时将自动优化传入的 Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li> 
     * @param AigcImageOutputConfig $OutputConfig 生图任务的输出媒体文件配置。
     * @param string $SessionId 用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。
     * @param string $SessionContext 来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。
     * @param integer $TasksPriority 任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。
     * @param string $ExtInfo 保留字段，特殊用途时使用。
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

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new AigcImageOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("ExtInfo",$param) and $param["ExtInfo"] !== null) {
            $this->ExtInfo = $param["ExtInfo"];
        }
    }
}
