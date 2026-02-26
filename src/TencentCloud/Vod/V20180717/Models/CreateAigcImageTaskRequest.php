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
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method string getModelName() 获取<p>模型名称。取值：</p><li>GEM：Gemini；</li><li>Qwen：千问。</li><li>Hunyuan：混元。</li><li>Vidu：生数。</li><li>Kling：可灵。</li>
 * @method void setModelName(string $ModelName) 设置<p>模型名称。取值：</p><li>GEM：Gemini；</li><li>Qwen：千问。</li><li>Hunyuan：混元。</li><li>Vidu：生数。</li><li>Kling：可灵。</li>
 * @method string getModelVersion() 获取<p>模型版本。取值：<li>当 ModelName 是 GEM，可选值为 2.5；</li><li>当 ModelName 是 Qwen，可选值为 0925；</li><li>当 ModelName 是 Hunyuan，可选值为 3.0；</li><li>当 ModelName 是 Vidu，可选值为 q2；</li><li>当 ModelName 是 Kling，可选值为 2.1；</li></p>
 * @method void setModelVersion(string $ModelVersion) 设置<p>模型版本。取值：<li>当 ModelName 是 GEM，可选值为 2.5；</li><li>当 ModelName 是 Qwen，可选值为 0925；</li><li>当 ModelName 是 Hunyuan，可选值为 3.0；</li><li>当 ModelName 是 Vidu，可选值为 q2；</li><li>当 ModelName 是 Kling，可选值为 2.1；</li></p>
 * @method array getFileInfos() 获取<p>AIGC 生图任务的输入图片的文件信息。默认只支持指定1个。下列模型可传多张参考图：<li>GEM 2.5：0～3张图片；</li><li>Vidu q2：0～7张图片，图片支持 png、jpeg、jpg、webp格式，图片像素不能小于 128x128，且比例需要小于1:4或4:1；</li></p>
 * @method void setFileInfos(array $FileInfos) 设置<p>AIGC 生图任务的输入图片的文件信息。默认只支持指定1个。下列模型可传多张参考图：<li>GEM 2.5：0～3张图片；</li><li>Vidu q2：0～7张图片，图片支持 png、jpeg、jpg、webp格式，图片像素不能小于 128x128，且比例需要小于1:4或4:1；</li></p>
 * @method string getPrompt() 获取<p>生成图片的提示词。当 FileInfos 为空时，此参数必填。</p>
 * @method void setPrompt(string $Prompt) 设置<p>生成图片的提示词。当 FileInfos 为空时，此参数必填。</p>
 * @method string getNegativePrompt() 获取<p>要阻止模型生成图片的提示词。</p>
 * @method void setNegativePrompt(string $NegativePrompt) 设置<p>要阻止模型生成图片的提示词。</p>
 * @method string getEnhancePrompt() 获取<p>是否自动优化提示词。开启时将自动优化传入的 Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
 * @method void setEnhancePrompt(string $EnhancePrompt) 设置<p>是否自动优化提示词。开启时将自动优化传入的 Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
 * @method AigcImageOutputConfig getOutputConfig() 获取<p>生图任务的输出媒体文件配置。</p>
 * @method void setOutputConfig(AigcImageOutputConfig $OutputConfig) 设置<p>生图任务的输出媒体文件配置。</p>
 * @method string getInputRegion() 获取<p>输入文件的区域信息。当文件url是国外地址时候，可选Oversea。默认Mainland。</p>
 * @method void setInputRegion(string $InputRegion) 设置<p>输入文件的区域信息。当文件url是国外地址时候，可选Oversea。默认Mainland。</p>
 * @method string getSessionId() 获取<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method void setSessionId(string $SessionId) 设置<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method string getSessionContext() 获取<p>来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。</p>
 * @method void setSessionContext(string $SessionContext) 设置<p>来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。</p>
 * @method integer getTasksPriority() 获取<p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
 * @method void setTasksPriority(integer $TasksPriority) 设置<p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
 * @method string getExtInfo() 获取<p>保留字段，特殊用途时使用。</p>
 * @method void setExtInfo(string $ExtInfo) 设置<p>保留字段，特殊用途时使用。</p>
 */
class CreateAigcImageTaskRequest extends AbstractModel
{
    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>模型名称。取值：</p><li>GEM：Gemini；</li><li>Qwen：千问。</li><li>Hunyuan：混元。</li><li>Vidu：生数。</li><li>Kling：可灵。</li>
     */
    public $ModelName;

    /**
     * @var string <p>模型版本。取值：<li>当 ModelName 是 GEM，可选值为 2.5；</li><li>当 ModelName 是 Qwen，可选值为 0925；</li><li>当 ModelName 是 Hunyuan，可选值为 3.0；</li><li>当 ModelName 是 Vidu，可选值为 q2；</li><li>当 ModelName 是 Kling，可选值为 2.1；</li></p>
     */
    public $ModelVersion;

    /**
     * @var array <p>AIGC 生图任务的输入图片的文件信息。默认只支持指定1个。下列模型可传多张参考图：<li>GEM 2.5：0～3张图片；</li><li>Vidu q2：0～7张图片，图片支持 png、jpeg、jpg、webp格式，图片像素不能小于 128x128，且比例需要小于1:4或4:1；</li></p>
     */
    public $FileInfos;

    /**
     * @var string <p>生成图片的提示词。当 FileInfos 为空时，此参数必填。</p>
     */
    public $Prompt;

    /**
     * @var string <p>要阻止模型生成图片的提示词。</p>
     */
    public $NegativePrompt;

    /**
     * @var string <p>是否自动优化提示词。开启时将自动优化传入的 Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
     */
    public $EnhancePrompt;

    /**
     * @var AigcImageOutputConfig <p>生图任务的输出媒体文件配置。</p>
     */
    public $OutputConfig;

    /**
     * @var string <p>输入文件的区域信息。当文件url是国外地址时候，可选Oversea。默认Mainland。</p>
     */
    public $InputRegion;

    /**
     * @var string <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     */
    public $SessionId;

    /**
     * @var string <p>来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。</p>
     */
    public $SessionContext;

    /**
     * @var integer <p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
     */
    public $TasksPriority;

    /**
     * @var string <p>保留字段，特殊用途时使用。</p>
     */
    public $ExtInfo;

    /**
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param string $ModelName <p>模型名称。取值：</p><li>GEM：Gemini；</li><li>Qwen：千问。</li><li>Hunyuan：混元。</li><li>Vidu：生数。</li><li>Kling：可灵。</li>
     * @param string $ModelVersion <p>模型版本。取值：<li>当 ModelName 是 GEM，可选值为 2.5；</li><li>当 ModelName 是 Qwen，可选值为 0925；</li><li>当 ModelName 是 Hunyuan，可选值为 3.0；</li><li>当 ModelName 是 Vidu，可选值为 q2；</li><li>当 ModelName 是 Kling，可选值为 2.1；</li></p>
     * @param array $FileInfos <p>AIGC 生图任务的输入图片的文件信息。默认只支持指定1个。下列模型可传多张参考图：<li>GEM 2.5：0～3张图片；</li><li>Vidu q2：0～7张图片，图片支持 png、jpeg、jpg、webp格式，图片像素不能小于 128x128，且比例需要小于1:4或4:1；</li></p>
     * @param string $Prompt <p>生成图片的提示词。当 FileInfos 为空时，此参数必填。</p>
     * @param string $NegativePrompt <p>要阻止模型生成图片的提示词。</p>
     * @param string $EnhancePrompt <p>是否自动优化提示词。开启时将自动优化传入的 Prompt，以提升生成质量。取值有： <li>Enabled：开启；</li> <li>Disabled：关闭；</li></p>
     * @param AigcImageOutputConfig $OutputConfig <p>生图任务的输出媒体文件配置。</p>
     * @param string $InputRegion <p>输入文件的区域信息。当文件url是国外地址时候，可选Oversea。默认Mainland。</p>
     * @param string $SessionId <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     * @param string $SessionContext <p>来源上下文，用于透传用户请求信息，音画质重生完成回调将返回该字段值，最长 1000 个字符。</p>
     * @param integer $TasksPriority <p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
     * @param string $ExtInfo <p>保留字段，特殊用途时使用。</p>
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

        if (array_key_exists("InputRegion",$param) and $param["InputRegion"] !== null) {
            $this->InputRegion = $param["InputRegion"];
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
