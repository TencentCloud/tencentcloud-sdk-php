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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDocument请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>本合同的发起人，<a href="https://qcloudimg.tencent-cloud.cn/raw/f850cfbe163a1cb38439a9f551c2505c.png" target="_blank">点击查看合同发起人展示的位置</a></p><p>注：支持填入集团子公司经办人 userId代发合同。</p>
 * @method void setOperator(UserInfo $Operator) 设置<p>本合同的发起人，<a href="https://qcloudimg.tencent-cloud.cn/raw/f850cfbe163a1cb38439a9f551c2505c.png" target="_blank">点击查看合同发起人展示的位置</a></p><p>注：支持填入集团子公司经办人 userId代发合同。</p>
 * @method string getTemplateId() 获取<p>用户配置的合同模板ID，会基于此模板创建合同文档，为32位字符串。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/253071cc2f7becb063c7cf71b37b7861.png">点击查看模板Id在控制台上的位置</a></p>
 * @method void setTemplateId(string $TemplateId) 设置<p>用户配置的合同模板ID，会基于此模板创建合同文档，为32位字符串。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/253071cc2f7becb063c7cf71b37b7861.png">点击查看模板Id在控制台上的位置</a></p>
 * @method string getFlowId() 获取<p>合同流程ID，为32位字符串。<br>此接口的合同流程ID需要由<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateFlow">创建签署流程</a>接口创建得到。</p>
 * @method void setFlowId(string $FlowId) 设置<p>合同流程ID，为32位字符串。<br>此接口的合同流程ID需要由<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateFlow">创建签署流程</a>接口创建得到。</p>
 * @method array getFileNames() 获取<p>文件名列表，单个文件名最大长度200个字符，暂时仅支持单文件发起。设置后流程对应的文件名称当前设置的值。</p>
 * @method void setFileNames(array $FileNames) 设置<p>文件名列表，单个文件名最大长度200个字符，暂时仅支持单文件发起。设置后流程对应的文件名称当前设置的值。</p>
 * @method array getFormFields() 获取<p>电子文档的填写控件的填充内容。具体方式可以参考<a href="https://qian.tencent.com/developers/companyApis/dataTypes/#formfield">FormField</a>结构体的定义。</p><ul><li>支持自动签传递印章，可通过指定自动签控件id，指定印章id来完成</li><li>附件控件支持传入图片、文件资源id，并将内容合成到合同文件中。支持的文件类型有doc、docx、xls、xlsx、html、jpg、jpeg、png、bmp、txt、pdf。需要注意如果传入的资源类型都是图片类型，图片资源会放置在合同文件的末尾，如果传入的资源有非图片类型资源，会将资源放置在附件控件所在页面的下一页。</li></ul>注：只有在控制台编辑模板时，<font color="red">归属给发起方</font>的填写控件（如下图）才能在创建文档的时候进行内容填充。![image](https://qcloudimg.tencent-cloud.cn/raw/a54a76a58c454593d06d8e9883ecc9b3.png)
 * @method void setFormFields(array $FormFields) 设置<p>电子文档的填写控件的填充内容。具体方式可以参考<a href="https://qian.tencent.com/developers/companyApis/dataTypes/#formfield">FormField</a>结构体的定义。</p><ul><li>支持自动签传递印章，可通过指定自动签控件id，指定印章id来完成</li><li>附件控件支持传入图片、文件资源id，并将内容合成到合同文件中。支持的文件类型有doc、docx、xls、xlsx、html、jpg、jpeg、png、bmp、txt、pdf。需要注意如果传入的资源类型都是图片类型，图片资源会放置在合同文件的末尾，如果传入的资源有非图片类型资源，会将资源放置在附件控件所在页面的下一页。</li></ul>注：只有在控制台编辑模板时，<font color="red">归属给发起方</font>的填写控件（如下图）才能在创建文档的时候进行内容填充。![image](https://qcloudimg.tencent-cloud.cn/raw/a54a76a58c454593d06d8e9883ecc9b3.png)
 * @method boolean getNeedPreview() 获取<p>是否为预览模式，取值如下：<ul><li> <strong>false</strong>：非预览模式（默认），会产生合同流程并返回合同流程编号FlowId。</li> <li> <strong>true</strong>：预览模式，不产生合同流程，不返回合同流程编号FlowId，而是返回预览链接PreviewUrl，有效期为300秒，用于查看真实发起后合同的样子。 <font color="red">注意： 1.以预览模式创建的合同仅供查看，因此参与方无法进行签署操作;；2.以预览模式调用该接口返回的FlowId为临时Flowld，无法用于发起和拉取信息。</font> </li></ul></p><p><strong>注1</strong>: <code>当使用的模板中存在动态表格控件时，预览结果中没有动态表格的填写内容，动态表格合成完后会触发文档合成完成的回调通知</code><br><strong>注2</strong>: 预览服务按照合同份额 1:2的比例赠送预览次数。例如：购买 100 份合同，将赠送 200 次合同预览额度。当赠送的预览额度使用完后，如需继续使用预览服务，则需要单独购买预览服务额度。</p>
 * @method void setNeedPreview(boolean $NeedPreview) 设置<p>是否为预览模式，取值如下：<ul><li> <strong>false</strong>：非预览模式（默认），会产生合同流程并返回合同流程编号FlowId。</li> <li> <strong>true</strong>：预览模式，不产生合同流程，不返回合同流程编号FlowId，而是返回预览链接PreviewUrl，有效期为300秒，用于查看真实发起后合同的样子。 <font color="red">注意： 1.以预览模式创建的合同仅供查看，因此参与方无法进行签署操作;；2.以预览模式调用该接口返回的FlowId为临时Flowld，无法用于发起和拉取信息。</font> </li></ul></p><p><strong>注1</strong>: <code>当使用的模板中存在动态表格控件时，预览结果中没有动态表格的填写内容，动态表格合成完后会触发文档合成完成的回调通知</code><br><strong>注2</strong>: 预览服务按照合同份额 1:2的比例赠送预览次数。例如：购买 100 份合同，将赠送 200 次合同预览额度。当赠送的预览额度使用完后，如需继续使用预览服务，则需要单独购买预览服务额度。</p>
 * @method integer getPreviewType() 获取<p>预览模式下产生的预览链接类型 <ul><li> <strong>0</strong> :(默认) 文件流 ,点开后下载预览的合同PDF文件 </li><li> <strong>1</strong> :H5链接 ,点开后在浏览器中展示合同的样子。</li></ul>注: <code>1.此参数在NeedPreview 为true时有效</code></p>
 * @method void setPreviewType(integer $PreviewType) 设置<p>预览模式下产生的预览链接类型 <ul><li> <strong>0</strong> :(默认) 文件流 ,点开后下载预览的合同PDF文件 </li><li> <strong>1</strong> :H5链接 ,点开后在浏览器中展示合同的样子。</li></ul>注: <code>1.此参数在NeedPreview 为true时有效</code></p>
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method string getClientToken() 获取<p>该字段已不再使用</p>
 * @method void setClientToken(string $ClientToken) 设置<p>该字段已不再使用</p>
 */
class CreateDocumentRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>本合同的发起人，<a href="https://qcloudimg.tencent-cloud.cn/raw/f850cfbe163a1cb38439a9f551c2505c.png" target="_blank">点击查看合同发起人展示的位置</a></p><p>注：支持填入集团子公司经办人 userId代发合同。</p>
     */
    public $Operator;

    /**
     * @var string <p>用户配置的合同模板ID，会基于此模板创建合同文档，为32位字符串。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/253071cc2f7becb063c7cf71b37b7861.png">点击查看模板Id在控制台上的位置</a></p>
     */
    public $TemplateId;

    /**
     * @var string <p>合同流程ID，为32位字符串。<br>此接口的合同流程ID需要由<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateFlow">创建签署流程</a>接口创建得到。</p>
     */
    public $FlowId;

    /**
     * @var array <p>文件名列表，单个文件名最大长度200个字符，暂时仅支持单文件发起。设置后流程对应的文件名称当前设置的值。</p>
     */
    public $FileNames;

    /**
     * @var array <p>电子文档的填写控件的填充内容。具体方式可以参考<a href="https://qian.tencent.com/developers/companyApis/dataTypes/#formfield">FormField</a>结构体的定义。</p><ul><li>支持自动签传递印章，可通过指定自动签控件id，指定印章id来完成</li><li>附件控件支持传入图片、文件资源id，并将内容合成到合同文件中。支持的文件类型有doc、docx、xls、xlsx、html、jpg、jpeg、png、bmp、txt、pdf。需要注意如果传入的资源类型都是图片类型，图片资源会放置在合同文件的末尾，如果传入的资源有非图片类型资源，会将资源放置在附件控件所在页面的下一页。</li></ul>注：只有在控制台编辑模板时，<font color="red">归属给发起方</font>的填写控件（如下图）才能在创建文档的时候进行内容填充。![image](https://qcloudimg.tencent-cloud.cn/raw/a54a76a58c454593d06d8e9883ecc9b3.png)
     */
    public $FormFields;

    /**
     * @var boolean <p>是否为预览模式，取值如下：<ul><li> <strong>false</strong>：非预览模式（默认），会产生合同流程并返回合同流程编号FlowId。</li> <li> <strong>true</strong>：预览模式，不产生合同流程，不返回合同流程编号FlowId，而是返回预览链接PreviewUrl，有效期为300秒，用于查看真实发起后合同的样子。 <font color="red">注意： 1.以预览模式创建的合同仅供查看，因此参与方无法进行签署操作;；2.以预览模式调用该接口返回的FlowId为临时Flowld，无法用于发起和拉取信息。</font> </li></ul></p><p><strong>注1</strong>: <code>当使用的模板中存在动态表格控件时，预览结果中没有动态表格的填写内容，动态表格合成完后会触发文档合成完成的回调通知</code><br><strong>注2</strong>: 预览服务按照合同份额 1:2的比例赠送预览次数。例如：购买 100 份合同，将赠送 200 次合同预览额度。当赠送的预览额度使用完后，如需继续使用预览服务，则需要单独购买预览服务额度。</p>
     */
    public $NeedPreview;

    /**
     * @var integer <p>预览模式下产生的预览链接类型 <ul><li> <strong>0</strong> :(默认) 文件流 ,点开后下载预览的合同PDF文件 </li><li> <strong>1</strong> :H5链接 ,点开后在浏览器中展示合同的样子。</li></ul>注: <code>1.此参数在NeedPreview 为true时有效</code></p>
     */
    public $PreviewType;

    /**
     * @var Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @var string <p>该字段已不再使用</p>
     */
    public $ClientToken;

    /**
     * @param UserInfo $Operator <p>本合同的发起人，<a href="https://qcloudimg.tencent-cloud.cn/raw/f850cfbe163a1cb38439a9f551c2505c.png" target="_blank">点击查看合同发起人展示的位置</a></p><p>注：支持填入集团子公司经办人 userId代发合同。</p>
     * @param string $TemplateId <p>用户配置的合同模板ID，会基于此模板创建合同文档，为32位字符串。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/253071cc2f7becb063c7cf71b37b7861.png">点击查看模板Id在控制台上的位置</a></p>
     * @param string $FlowId <p>合同流程ID，为32位字符串。<br>此接口的合同流程ID需要由<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateFlow">创建签署流程</a>接口创建得到。</p>
     * @param array $FileNames <p>文件名列表，单个文件名最大长度200个字符，暂时仅支持单文件发起。设置后流程对应的文件名称当前设置的值。</p>
     * @param array $FormFields <p>电子文档的填写控件的填充内容。具体方式可以参考<a href="https://qian.tencent.com/developers/companyApis/dataTypes/#formfield">FormField</a>结构体的定义。</p><ul><li>支持自动签传递印章，可通过指定自动签控件id，指定印章id来完成</li><li>附件控件支持传入图片、文件资源id，并将内容合成到合同文件中。支持的文件类型有doc、docx、xls、xlsx、html、jpg、jpeg、png、bmp、txt、pdf。需要注意如果传入的资源类型都是图片类型，图片资源会放置在合同文件的末尾，如果传入的资源有非图片类型资源，会将资源放置在附件控件所在页面的下一页。</li></ul>注：只有在控制台编辑模板时，<font color="red">归属给发起方</font>的填写控件（如下图）才能在创建文档的时候进行内容填充。![image](https://qcloudimg.tencent-cloud.cn/raw/a54a76a58c454593d06d8e9883ecc9b3.png)
     * @param boolean $NeedPreview <p>是否为预览模式，取值如下：<ul><li> <strong>false</strong>：非预览模式（默认），会产生合同流程并返回合同流程编号FlowId。</li> <li> <strong>true</strong>：预览模式，不产生合同流程，不返回合同流程编号FlowId，而是返回预览链接PreviewUrl，有效期为300秒，用于查看真实发起后合同的样子。 <font color="red">注意： 1.以预览模式创建的合同仅供查看，因此参与方无法进行签署操作;；2.以预览模式调用该接口返回的FlowId为临时Flowld，无法用于发起和拉取信息。</font> </li></ul></p><p><strong>注1</strong>: <code>当使用的模板中存在动态表格控件时，预览结果中没有动态表格的填写内容，动态表格合成完后会触发文档合成完成的回调通知</code><br><strong>注2</strong>: 预览服务按照合同份额 1:2的比例赠送预览次数。例如：购买 100 份合同，将赠送 200 次合同预览额度。当赠送的预览额度使用完后，如需继续使用预览服务，则需要单独购买预览服务额度。</p>
     * @param integer $PreviewType <p>预览模式下产生的预览链接类型 <ul><li> <strong>0</strong> :(默认) 文件流 ,点开后下载预览的合同PDF文件 </li><li> <strong>1</strong> :H5链接 ,点开后在浏览器中展示合同的样子。</li></ul>注: <code>1.此参数在NeedPreview 为true时有效</code></p>
     * @param Agent $Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     * @param string $ClientToken <p>该字段已不再使用</p>
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("FileNames",$param) and $param["FileNames"] !== null) {
            $this->FileNames = $param["FileNames"];
        }

        if (array_key_exists("FormFields",$param) and $param["FormFields"] !== null) {
            $this->FormFields = [];
            foreach ($param["FormFields"] as $key => $value){
                $obj = new FormField();
                $obj->deserialize($value);
                array_push($this->FormFields, $obj);
            }
        }

        if (array_key_exists("NeedPreview",$param) and $param["NeedPreview"] !== null) {
            $this->NeedPreview = $param["NeedPreview"];
        }

        if (array_key_exists("PreviewType",$param) and $param["PreviewType"] !== null) {
            $this->PreviewType = $param["PreviewType"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }
    }
}
