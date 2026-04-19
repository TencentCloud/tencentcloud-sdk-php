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
namespace TencentCloud\Aiart\V20221229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitDrawPortraitJob请求参数结构体
 *
 * @method string getModelId() 获取<p>写真模型 ID。</p>
 * @method void setModelId(string $ModelId) 设置<p>写真模型 ID。</p>
 * @method string getStyleId() 获取<p>写真风格模板。<br>请在<a href="https://cloud.tencent.com/document/product/1668/105740"> AI 写真风格列表</a> 中选择期望的风格，传入风格编号。</p>
 * @method void setStyleId(string $StyleId) 设置<p>写真风格模板。<br>请在<a href="https://cloud.tencent.com/document/product/1668/105740"> AI 写真风格列表</a> 中选择期望的风格，传入风格编号。</p>
 * @method integer getImageNum() 获取<p>本次生成的图片数量，取值范围[1,4]</p>
 * @method void setImageNum(integer $ImageNum) 设置<p>本次生成的图片数量，取值范围[1,4]</p>
 * @method integer getLogoAdd() 获取<p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br> 0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图是 AI 生成的图片。</p>
 * @method void setLogoAdd(integer $LogoAdd) 设置<p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br> 0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图是 AI 生成的图片。</p>
 * @method LogoParam getLogoParam() 获取<p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。<br>示例值：{&quot;LogoUrl&quot;: &quot;https://cos.ap-guangzhou.myqcloud.com/logo.jpg&quot;, &quot;LogoRect&quot;: {&quot;X&quot;: 10, &quot;Y&quot;: 10, &quot;Width&quot;: 20, &quot;Height&quot;: 20}}</p>
 * @method void setLogoParam(LogoParam $LogoParam) 设置<p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。<br>示例值：{&quot;LogoUrl&quot;: &quot;https://cos.ap-guangzhou.myqcloud.com/logo.jpg&quot;, &quot;LogoRect&quot;: {&quot;X&quot;: 10, &quot;Y&quot;: 10, &quot;Width&quot;: 20, &quot;Height&quot;: 20}}</p>
 * @method string getDefinition() 获取<p>清晰度，单位为 px。<br>支持以下选项：<br>sd：基础版，分辨率512:640<br>hd：高清畅享版，分辨率1024:1280<br>hdpro：高清优享版，分辨率1024:1280（推荐）<br>uhd：超清版，分辨率2048:2560<br>不填默认为sd。</p>
 * @method void setDefinition(string $Definition) 设置<p>清晰度，单位为 px。<br>支持以下选项：<br>sd：基础版，分辨率512:640<br>hd：高清畅享版，分辨率1024:1280<br>hdpro：高清优享版，分辨率1024:1280（推荐）<br>uhd：超清版，分辨率2048:2560<br>不填默认为sd。</p>
 */
class SubmitDrawPortraitJobRequest extends AbstractModel
{
    /**
     * @var string <p>写真模型 ID。</p>
     */
    public $ModelId;

    /**
     * @var string <p>写真风格模板。<br>请在<a href="https://cloud.tencent.com/document/product/1668/105740"> AI 写真风格列表</a> 中选择期望的风格，传入风格编号。</p>
     */
    public $StyleId;

    /**
     * @var integer <p>本次生成的图片数量，取值范围[1,4]</p>
     */
    public $ImageNum;

    /**
     * @var integer <p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br> 0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图是 AI 生成的图片。</p>
     */
    public $LogoAdd;

    /**
     * @var LogoParam <p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。<br>示例值：{&quot;LogoUrl&quot;: &quot;https://cos.ap-guangzhou.myqcloud.com/logo.jpg&quot;, &quot;LogoRect&quot;: {&quot;X&quot;: 10, &quot;Y&quot;: 10, &quot;Width&quot;: 20, &quot;Height&quot;: 20}}</p>
     */
    public $LogoParam;

    /**
     * @var string <p>清晰度，单位为 px。<br>支持以下选项：<br>sd：基础版，分辨率512:640<br>hd：高清畅享版，分辨率1024:1280<br>hdpro：高清优享版，分辨率1024:1280（推荐）<br>uhd：超清版，分辨率2048:2560<br>不填默认为sd。</p>
     */
    public $Definition;

    /**
     * @param string $ModelId <p>写真模型 ID。</p>
     * @param string $StyleId <p>写真风格模板。<br>请在<a href="https://cloud.tencent.com/document/product/1668/105740"> AI 写真风格列表</a> 中选择期望的风格，传入风格编号。</p>
     * @param integer $ImageNum <p>本次生成的图片数量，取值范围[1,4]</p>
     * @param integer $LogoAdd <p>为生成结果图添加标识的开关，默认为1。<br>1：添加标识。<br> 0：不添加标识。<br>其他数值：默认按1处理。<br>建议您使用显著标识来提示结果图是 AI 生成的图片。</p>
     * @param LogoParam $LogoParam <p>标识内容设置。<br>默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。<br>示例值：{&quot;LogoUrl&quot;: &quot;https://cos.ap-guangzhou.myqcloud.com/logo.jpg&quot;, &quot;LogoRect&quot;: {&quot;X&quot;: 10, &quot;Y&quot;: 10, &quot;Width&quot;: 20, &quot;Height&quot;: 20}}</p>
     * @param string $Definition <p>清晰度，单位为 px。<br>支持以下选项：<br>sd：基础版，分辨率512:640<br>hd：高清畅享版，分辨率1024:1280<br>hdpro：高清优享版，分辨率1024:1280（推荐）<br>uhd：超清版，分辨率2048:2560<br>不填默认为sd。</p>
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
        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("StyleId",$param) and $param["StyleId"] !== null) {
            $this->StyleId = $param["StyleId"];
        }

        if (array_key_exists("ImageNum",$param) and $param["ImageNum"] !== null) {
            $this->ImageNum = $param["ImageNum"];
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("LogoParam",$param) and $param["LogoParam"] !== null) {
            $this->LogoParam = new LogoParam();
            $this->LogoParam->deserialize($param["LogoParam"]);
        }

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }
    }
}
