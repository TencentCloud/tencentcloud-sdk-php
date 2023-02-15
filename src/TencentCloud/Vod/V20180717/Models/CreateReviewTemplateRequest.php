<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * CreateReviewTemplate请求参数结构体
 *
 * @method array getLabels() 获取需要返回的违规标签列表，可选值为：
<li>Porn：色情；</li>
<li>Terror：暴力；</li>
<li>Polity：不适宜的信息；</li>
<li>Illegal：违法；</li>
<li>Abuse：谩骂；</li>
<li>Ad：广告；</li>
<li>Moan：娇喘。</li>
 * @method void setLabels(array $Labels) 设置需要返回的违规标签列表，可选值为：
<li>Porn：色情；</li>
<li>Terror：暴力；</li>
<li>Polity：不适宜的信息；</li>
<li>Illegal：违法；</li>
<li>Abuse：谩骂；</li>
<li>Ad：广告；</li>
<li>Moan：娇喘。</li>
 * @method string getSubAppId() 获取<b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 * @method void setSubAppId(string $SubAppId) 设置<b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
 * @method string getName() 获取审核模板名称，长度限制：64 个字符。
 * @method void setName(string $Name) 设置审核模板名称，长度限制：64 个字符。
 * @method string getComment() 获取审核模板描述信息，长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置审核模板描述信息，长度限制：256 个字符。
 */
class CreateReviewTemplateRequest extends AbstractModel
{
    /**
     * @var array 需要返回的违规标签列表，可选值为：
<li>Porn：色情；</li>
<li>Terror：暴力；</li>
<li>Polity：不适宜的信息；</li>
<li>Illegal：违法；</li>
<li>Abuse：谩骂；</li>
<li>Ad：广告；</li>
<li>Moan：娇喘。</li>
     */
    public $Labels;

    /**
     * @var string <b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
     */
    public $SubAppId;

    /**
     * @var string 审核模板名称，长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var string 审核模板描述信息，长度限制：256 个字符。
     */
    public $Comment;

    /**
     * @param array $Labels 需要返回的违规标签列表，可选值为：
<li>Porn：色情；</li>
<li>Terror：暴力；</li>
<li>Polity：不适宜的信息；</li>
<li>Illegal：违法；</li>
<li>Abuse：谩骂；</li>
<li>Ad：广告；</li>
<li>Moan：娇喘。</li>
     * @param string $SubAppId <b>点播[子应用](/document/product/266/14574) ID。如果要访问子应用中的资源，则将该字段填写为子应用 ID；否则无需填写该字段。</b>
     * @param string $Name 审核模板名称，长度限制：64 个字符。
     * @param string $Comment 审核模板描述信息，长度限制：256 个字符。
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
        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
