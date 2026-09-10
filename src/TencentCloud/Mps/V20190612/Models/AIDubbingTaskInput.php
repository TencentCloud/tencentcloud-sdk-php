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
 * AI配音任务
 *
 * @method integer getDefinition() 获取<p>AI配音模板id。</p>
 * @method void setDefinition(integer $Definition) 设置<p>AI配音模板id。</p>
 * @method RawAIDubbingParameter getRawParameter() 获取<p>AI配音自定义参数，当 Definition 填 0 时有效。 该参数用于高度定制场景，建议您优先使用 Definition 指定配音参数。</p>
 * @method void setRawParameter(RawAIDubbingParameter $RawParameter) 设置<p>AI配音自定义参数，当 Definition 填 0 时有效。 该参数用于高度定制场景，建议您优先使用 Definition 指定配音参数。</p>
 * @method OverrideAIDubbingParameter getOverrideParameter() 获取<p>AI配音自定义参数，当 Definition 不填 0 时有效。 当填写了该结构中的部分配音参数时，将使用填写的参数覆盖AI配音模板中的参数。 该参数用于高度定制场景，建议您仅使用 Definition 指定配音参数。</p>
 * @method void setOverrideParameter(OverrideAIDubbingParameter $OverrideParameter) 设置<p>AI配音自定义参数，当 Definition 不填 0 时有效。 当填写了该结构中的部分配音参数时，将使用填写的参数覆盖AI配音模板中的参数。 该参数用于高度定制场景，建议您仅使用 Definition 指定配音参数。</p>
 * @method TaskOutputStorage getOutputStorage() 获取<p>文件的目标存储，不填则继承上层的 OutputStorage 值。</p>
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) 设置<p>文件的目标存储，不填则继承上层的 OutputStorage 值。</p>
 * @method MediaInputInfo getSrcSubtitleInfo() 获取<p>外部源字幕文件信息。</p>
 * @method void setSrcSubtitleInfo(MediaInputInfo $SrcSubtitleInfo) 设置<p>外部源字幕文件信息。</p>
 * @method array getDstSubtitleInfos() 获取<p>外部字幕文件信息，译文字幕。</p>
 * @method void setDstSubtitleInfos(array $DstSubtitleInfos) 设置<p>外部字幕文件信息，译文字幕。</p>
 * @method string getOutputObjectPath() 获取<p>文件的输出路径，可以为相对路径或者绝对路径。<br>若需定义输出路径，路径需以<code>.{format}</code>结尾。变量名请参考 <a href="https://cloud.tencent.com/document/product/862/37039">文件名变量说明</a>。<br>相对路径示例：</p><li>文件名_{变量名}.{format}</li><li>文件名.{format}</li>绝对路径示例：<li>/自定义路径/文件名_{变量名}.{format}</li><p><strong>注意</strong>：目前不支持<code>BatchProcessMedia</code>接口。</p>
 * @method void setOutputObjectPath(string $OutputObjectPath) 设置<p>文件的输出路径，可以为相对路径或者绝对路径。<br>若需定义输出路径，路径需以<code>.{format}</code>结尾。变量名请参考 <a href="https://cloud.tencent.com/document/product/862/37039">文件名变量说明</a>。<br>相对路径示例：</p><li>文件名_{变量名}.{format}</li><li>文件名.{format}</li>绝对路径示例：<li>/自定义路径/文件名_{变量名}.{format}</li><p><strong>注意</strong>：目前不支持<code>BatchProcessMedia</code>接口。</p>
 * @method string getExtendedParameter() 获取<p>AI配音扩展参数，序列化的 json 字符串。</p>
 * @method void setExtendedParameter(string $ExtendedParameter) 设置<p>AI配音扩展参数，序列化的 json 字符串。</p>
 * @method string getDramaId() 获取<p>关联剧集ID。<br>注意：配音模式为按角色智能配音时此值生效。</p>
 * @method void setDramaId(string $DramaId) 设置<p>关联剧集ID。<br>注意：配音模式为按角色智能配音时此值生效。</p>
 */
class AIDubbingTaskInput extends AbstractModel
{
    /**
     * @var integer <p>AI配音模板id。</p>
     */
    public $Definition;

    /**
     * @var RawAIDubbingParameter <p>AI配音自定义参数，当 Definition 填 0 时有效。 该参数用于高度定制场景，建议您优先使用 Definition 指定配音参数。</p>
     */
    public $RawParameter;

    /**
     * @var OverrideAIDubbingParameter <p>AI配音自定义参数，当 Definition 不填 0 时有效。 当填写了该结构中的部分配音参数时，将使用填写的参数覆盖AI配音模板中的参数。 该参数用于高度定制场景，建议您仅使用 Definition 指定配音参数。</p>
     */
    public $OverrideParameter;

    /**
     * @var TaskOutputStorage <p>文件的目标存储，不填则继承上层的 OutputStorage 值。</p>
     */
    public $OutputStorage;

    /**
     * @var MediaInputInfo <p>外部源字幕文件信息。</p>
     */
    public $SrcSubtitleInfo;

    /**
     * @var array <p>外部字幕文件信息，译文字幕。</p>
     */
    public $DstSubtitleInfos;

    /**
     * @var string <p>文件的输出路径，可以为相对路径或者绝对路径。<br>若需定义输出路径，路径需以<code>.{format}</code>结尾。变量名请参考 <a href="https://cloud.tencent.com/document/product/862/37039">文件名变量说明</a>。<br>相对路径示例：</p><li>文件名_{变量名}.{format}</li><li>文件名.{format}</li>绝对路径示例：<li>/自定义路径/文件名_{变量名}.{format}</li><p><strong>注意</strong>：目前不支持<code>BatchProcessMedia</code>接口。</p>
     */
    public $OutputObjectPath;

    /**
     * @var string <p>AI配音扩展参数，序列化的 json 字符串。</p>
     */
    public $ExtendedParameter;

    /**
     * @var string <p>关联剧集ID。<br>注意：配音模式为按角色智能配音时此值生效。</p>
     */
    public $DramaId;

    /**
     * @param integer $Definition <p>AI配音模板id。</p>
     * @param RawAIDubbingParameter $RawParameter <p>AI配音自定义参数，当 Definition 填 0 时有效。 该参数用于高度定制场景，建议您优先使用 Definition 指定配音参数。</p>
     * @param OverrideAIDubbingParameter $OverrideParameter <p>AI配音自定义参数，当 Definition 不填 0 时有效。 当填写了该结构中的部分配音参数时，将使用填写的参数覆盖AI配音模板中的参数。 该参数用于高度定制场景，建议您仅使用 Definition 指定配音参数。</p>
     * @param TaskOutputStorage $OutputStorage <p>文件的目标存储，不填则继承上层的 OutputStorage 值。</p>
     * @param MediaInputInfo $SrcSubtitleInfo <p>外部源字幕文件信息。</p>
     * @param array $DstSubtitleInfos <p>外部字幕文件信息，译文字幕。</p>
     * @param string $OutputObjectPath <p>文件的输出路径，可以为相对路径或者绝对路径。<br>若需定义输出路径，路径需以<code>.{format}</code>结尾。变量名请参考 <a href="https://cloud.tencent.com/document/product/862/37039">文件名变量说明</a>。<br>相对路径示例：</p><li>文件名_{变量名}.{format}</li><li>文件名.{format}</li>绝对路径示例：<li>/自定义路径/文件名_{变量名}.{format}</li><p><strong>注意</strong>：目前不支持<code>BatchProcessMedia</code>接口。</p>
     * @param string $ExtendedParameter <p>AI配音扩展参数，序列化的 json 字符串。</p>
     * @param string $DramaId <p>关联剧集ID。<br>注意：配音模式为按角色智能配音时此值生效。</p>
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("RawParameter",$param) and $param["RawParameter"] !== null) {
            $this->RawParameter = new RawAIDubbingParameter();
            $this->RawParameter->deserialize($param["RawParameter"]);
        }

        if (array_key_exists("OverrideParameter",$param) and $param["OverrideParameter"] !== null) {
            $this->OverrideParameter = new OverrideAIDubbingParameter();
            $this->OverrideParameter->deserialize($param["OverrideParameter"]);
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("SrcSubtitleInfo",$param) and $param["SrcSubtitleInfo"] !== null) {
            $this->SrcSubtitleInfo = new MediaInputInfo();
            $this->SrcSubtitleInfo->deserialize($param["SrcSubtitleInfo"]);
        }

        if (array_key_exists("DstSubtitleInfos",$param) and $param["DstSubtitleInfos"] !== null) {
            $this->DstSubtitleInfos = [];
            foreach ($param["DstSubtitleInfos"] as $key => $value){
                $obj = new DstSubtitleInput();
                $obj->deserialize($value);
                array_push($this->DstSubtitleInfos, $obj);
            }
        }

        if (array_key_exists("OutputObjectPath",$param) and $param["OutputObjectPath"] !== null) {
            $this->OutputObjectPath = $param["OutputObjectPath"];
        }

        if (array_key_exists("ExtendedParameter",$param) and $param["ExtendedParameter"] !== null) {
            $this->ExtendedParameter = $param["ExtendedParameter"];
        }

        if (array_key_exists("DramaId",$param) and $param["DramaId"] !== null) {
            $this->DramaId = $param["DramaId"];
        }
    }
}
