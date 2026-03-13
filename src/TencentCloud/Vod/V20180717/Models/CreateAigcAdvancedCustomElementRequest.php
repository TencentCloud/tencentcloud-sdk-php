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
 * CreateAigcAdvancedCustomElement请求参数结构体
 *
 * @method integer getSubAppId() 获取<p><b>点播<a href="https://cloud.tencent.com/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="https://cloud.tencent.com/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method string getElementName() 获取<p>主体名称，不能超过20个字符。</p>
 * @method void setElementName(string $ElementName) 设置<p>主体名称，不能超过20个字符。</p>
 * @method string getElementDescription() 获取<p>主体描述，不能超过100个字符。</p>
 * @method void setElementDescription(string $ElementDescription) 设置<p>主体描述，不能超过100个字符。</p>
 * @method string getReferenceType() 获取<p>主体参考方式。通过视频定制的主体和通过图片定制的主体的可用范围不同。</p><p>枚举值：</p><ul><li>video_refer： 视频角色主体，此时将参考element_video_list定义主体外表。</li><li>image_refer： 多图主体，此时将参考element_image_list定义主体外表。</li></ul>
 * @method void setReferenceType(string $ReferenceType) 设置<p>主体参考方式。通过视频定制的主体和通过图片定制的主体的可用范围不同。</p><p>枚举值：</p><ul><li>video_refer： 视频角色主体，此时将参考element_video_list定义主体外表。</li><li>image_refer： 多图主体，此时将参考element_image_list定义主体外表。</li></ul>
 * @method string getElementVoiceId() 获取<p>主体音色，可绑定音色库中已有音色。</p><ul><li>当前参数为空时，当前主体不绑定音色。</li><li>仅视频定制的主体支持绑定音色。</li></ul>
 * @method void setElementVoiceId(string $ElementVoiceId) 设置<p>主体音色，可绑定音色库中已有音色。</p><ul><li>当前参数为空时，当前主体不绑定音色。</li><li>仅视频定制的主体支持绑定音色。</li></ul>
 * @method string getElementVideoList() 获取<p>主体参考视频，可通过视频设定主体及其细节。</p><ul><li>可上传有声视频，有声视频包含人声则触发音色定制（定制+入音色库+与主体绑定）</li><li>参考视频时当前参数必填，参考图片时当前参数无效</li><li>用key:value承载，如下：<br><pre><code>{  &quot;refer_videos&quot;:[    {      &quot;video_url&quot;:&quot;video_url_1&quot;    }  ]}</code></pre>● 视频格式仅支持MP4/MOV<br>● 仅支持时长介于3s～8s之间、宽高比例需为16:9或9:16的1080P视频<br>● 至多仅支持上传1段视频，视频大小不超过200MB<br>● video_url参数值不得为空</li></ul>
 * @method void setElementVideoList(string $ElementVideoList) 设置<p>主体参考视频，可通过视频设定主体及其细节。</p><ul><li>可上传有声视频，有声视频包含人声则触发音色定制（定制+入音色库+与主体绑定）</li><li>参考视频时当前参数必填，参考图片时当前参数无效</li><li>用key:value承载，如下：<br><pre><code>{  &quot;refer_videos&quot;:[    {      &quot;video_url&quot;:&quot;video_url_1&quot;    }  ]}</code></pre>● 视频格式仅支持MP4/MOV<br>● 仅支持时长介于3s～8s之间、宽高比例需为16:9或9:16的1080P视频<br>● 至多仅支持上传1段视频，视频大小不超过200MB<br>● video_url参数值不得为空</li></ul>
 * @method string getElementImageList() 获取<p>主体参考图，可通过多张图片设定主体及其细节。</p><ul><li>包括正面参考图和其他角度或特写参考图，其中：<ul><li>至少包括1张正面参考图，由frontal_image参数定义。</li><li>需包括1～3张其他参考图，需与正面参考图有差异，由image_url参数定义。</li></ul></li><li>用key:value承载，如下：<br><pre><code>{  &quot;frontal_image&quot;:&quot;image_url_0&quot;,  &quot;refer_images&quot;:[    {      &quot;image_url&quot;:&quot;image_url_1&quot;    },    {      &quot;image_url&quot;:&quot;image_url_2&quot;    },    {      &quot;image_url&quot;:&quot;image_url_3&quot;    }  ]}</code></pre></li></ul>
 * @method void setElementImageList(string $ElementImageList) 设置<p>主体参考图，可通过多张图片设定主体及其细节。</p><ul><li>包括正面参考图和其他角度或特写参考图，其中：<ul><li>至少包括1张正面参考图，由frontal_image参数定义。</li><li>需包括1～3张其他参考图，需与正面参考图有差异，由image_url参数定义。</li></ul></li><li>用key:value承载，如下：<br><pre><code>{  &quot;frontal_image&quot;:&quot;image_url_0&quot;,  &quot;refer_images&quot;:[    {      &quot;image_url&quot;:&quot;image_url_1&quot;    },    {      &quot;image_url&quot;:&quot;image_url_2&quot;    },    {      &quot;image_url&quot;:&quot;image_url_3&quot;    }  ]}</code></pre></li></ul>
 * @method string getTagList() 获取<p>为主体配置标签，一个主体可以配置多个标签。</p><ul><li>用key:value承载，其中具体如下：</li></ul><p><pre><code>[  {        &quot;tag_id&quot;: &quot;o_101&quot;  }, {        &quot;tag_id&quot;: &quot;o_102&quot;    }]</code></pre></p>
 * @method void setTagList(string $TagList) 设置<p>为主体配置标签，一个主体可以配置多个标签。</p><ul><li>用key:value承载，其中具体如下：</li></ul><p><pre><code>[  {        &quot;tag_id&quot;: &quot;o_101&quot;  }, {        &quot;tag_id&quot;: &quot;o_102&quot;    }]</code></pre></p>
 * @method string getSessionId() 获取<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method void setSessionId(string $SessionId) 设置<p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
 * @method string getSessionContext() 获取<p>来源上下文，用于透传用户请求信息，任务完成回调将返回该字段值，最长 1000 个字符。</p>
 * @method void setSessionContext(string $SessionContext) 设置<p>来源上下文，用于透传用户请求信息，任务完成回调将返回该字段值，最长 1000 个字符。</p>
 * @method integer getTasksPriority() 获取<p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
 * @method void setTasksPriority(integer $TasksPriority) 设置<p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
 */
class CreateAigcAdvancedCustomElementRequest extends AbstractModel
{
    /**
     * @var integer <p><b>点播<a href="https://cloud.tencent.com/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>主体名称，不能超过20个字符。</p>
     */
    public $ElementName;

    /**
     * @var string <p>主体描述，不能超过100个字符。</p>
     */
    public $ElementDescription;

    /**
     * @var string <p>主体参考方式。通过视频定制的主体和通过图片定制的主体的可用范围不同。</p><p>枚举值：</p><ul><li>video_refer： 视频角色主体，此时将参考element_video_list定义主体外表。</li><li>image_refer： 多图主体，此时将参考element_image_list定义主体外表。</li></ul>
     */
    public $ReferenceType;

    /**
     * @var string <p>主体音色，可绑定音色库中已有音色。</p><ul><li>当前参数为空时，当前主体不绑定音色。</li><li>仅视频定制的主体支持绑定音色。</li></ul>
     */
    public $ElementVoiceId;

    /**
     * @var string <p>主体参考视频，可通过视频设定主体及其细节。</p><ul><li>可上传有声视频，有声视频包含人声则触发音色定制（定制+入音色库+与主体绑定）</li><li>参考视频时当前参数必填，参考图片时当前参数无效</li><li>用key:value承载，如下：<br><pre><code>{  &quot;refer_videos&quot;:[    {      &quot;video_url&quot;:&quot;video_url_1&quot;    }  ]}</code></pre>● 视频格式仅支持MP4/MOV<br>● 仅支持时长介于3s～8s之间、宽高比例需为16:9或9:16的1080P视频<br>● 至多仅支持上传1段视频，视频大小不超过200MB<br>● video_url参数值不得为空</li></ul>
     */
    public $ElementVideoList;

    /**
     * @var string <p>主体参考图，可通过多张图片设定主体及其细节。</p><ul><li>包括正面参考图和其他角度或特写参考图，其中：<ul><li>至少包括1张正面参考图，由frontal_image参数定义。</li><li>需包括1～3张其他参考图，需与正面参考图有差异，由image_url参数定义。</li></ul></li><li>用key:value承载，如下：<br><pre><code>{  &quot;frontal_image&quot;:&quot;image_url_0&quot;,  &quot;refer_images&quot;:[    {      &quot;image_url&quot;:&quot;image_url_1&quot;    },    {      &quot;image_url&quot;:&quot;image_url_2&quot;    },    {      &quot;image_url&quot;:&quot;image_url_3&quot;    }  ]}</code></pre></li></ul>
     */
    public $ElementImageList;

    /**
     * @var string <p>为主体配置标签，一个主体可以配置多个标签。</p><ul><li>用key:value承载，其中具体如下：</li></ul><p><pre><code>[  {        &quot;tag_id&quot;: &quot;o_101&quot;  }, {        &quot;tag_id&quot;: &quot;o_102&quot;    }]</code></pre></p>
     */
    public $TagList;

    /**
     * @var string <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     */
    public $SessionId;

    /**
     * @var string <p>来源上下文，用于透传用户请求信息，任务完成回调将返回该字段值，最长 1000 个字符。</p>
     */
    public $SessionContext;

    /**
     * @var integer <p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
     */
    public $TasksPriority;

    /**
     * @param integer $SubAppId <p><b>点播<a href="https://cloud.tencent.com/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param string $ElementName <p>主体名称，不能超过20个字符。</p>
     * @param string $ElementDescription <p>主体描述，不能超过100个字符。</p>
     * @param string $ReferenceType <p>主体参考方式。通过视频定制的主体和通过图片定制的主体的可用范围不同。</p><p>枚举值：</p><ul><li>video_refer： 视频角色主体，此时将参考element_video_list定义主体外表。</li><li>image_refer： 多图主体，此时将参考element_image_list定义主体外表。</li></ul>
     * @param string $ElementVoiceId <p>主体音色，可绑定音色库中已有音色。</p><ul><li>当前参数为空时，当前主体不绑定音色。</li><li>仅视频定制的主体支持绑定音色。</li></ul>
     * @param string $ElementVideoList <p>主体参考视频，可通过视频设定主体及其细节。</p><ul><li>可上传有声视频，有声视频包含人声则触发音色定制（定制+入音色库+与主体绑定）</li><li>参考视频时当前参数必填，参考图片时当前参数无效</li><li>用key:value承载，如下：<br><pre><code>{  &quot;refer_videos&quot;:[    {      &quot;video_url&quot;:&quot;video_url_1&quot;    }  ]}</code></pre>● 视频格式仅支持MP4/MOV<br>● 仅支持时长介于3s～8s之间、宽高比例需为16:9或9:16的1080P视频<br>● 至多仅支持上传1段视频，视频大小不超过200MB<br>● video_url参数值不得为空</li></ul>
     * @param string $ElementImageList <p>主体参考图，可通过多张图片设定主体及其细节。</p><ul><li>包括正面参考图和其他角度或特写参考图，其中：<ul><li>至少包括1张正面参考图，由frontal_image参数定义。</li><li>需包括1～3张其他参考图，需与正面参考图有差异，由image_url参数定义。</li></ul></li><li>用key:value承载，如下：<br><pre><code>{  &quot;frontal_image&quot;:&quot;image_url_0&quot;,  &quot;refer_images&quot;:[    {      &quot;image_url&quot;:&quot;image_url_1&quot;    },    {      &quot;image_url&quot;:&quot;image_url_2&quot;    },    {      &quot;image_url&quot;:&quot;image_url_3&quot;    }  ]}</code></pre></li></ul>
     * @param string $TagList <p>为主体配置标签，一个主体可以配置多个标签。</p><ul><li>用key:value承载，其中具体如下：</li></ul><p><pre><code>[  {        &quot;tag_id&quot;: &quot;o_101&quot;  }, {        &quot;tag_id&quot;: &quot;o_102&quot;    }]</code></pre></p>
     * @param string $SessionId <p>用于去重的识别码，如果三天内曾有过相同的识别码的请求，则本次的请求会返回错误。最长 50 个字符，不带或者带空字符串表示不做去重。</p>
     * @param string $SessionContext <p>来源上下文，用于透传用户请求信息，任务完成回调将返回该字段值，最长 1000 个字符。</p>
     * @param integer $TasksPriority <p>任务的优先级，数值越大优先级越高，取值范围是 -10 到 10，不填代表 0。</p>
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

        if (array_key_exists("ElementName",$param) and $param["ElementName"] !== null) {
            $this->ElementName = $param["ElementName"];
        }

        if (array_key_exists("ElementDescription",$param) and $param["ElementDescription"] !== null) {
            $this->ElementDescription = $param["ElementDescription"];
        }

        if (array_key_exists("ReferenceType",$param) and $param["ReferenceType"] !== null) {
            $this->ReferenceType = $param["ReferenceType"];
        }

        if (array_key_exists("ElementVoiceId",$param) and $param["ElementVoiceId"] !== null) {
            $this->ElementVoiceId = $param["ElementVoiceId"];
        }

        if (array_key_exists("ElementVideoList",$param) and $param["ElementVideoList"] !== null) {
            $this->ElementVideoList = $param["ElementVideoList"];
        }

        if (array_key_exists("ElementImageList",$param) and $param["ElementImageList"] !== null) {
            $this->ElementImageList = $param["ElementImageList"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = $param["TagList"];
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
    }
}
