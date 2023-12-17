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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSealByImage请求参数结构体
 *
 * @method Agent getAgent() 获取关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
 * @method void setAgent(Agent $Agent) 设置关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
 * @method string getSealName() 获取电子印章名字，1-50个中文字符
注:`同一企业下电子印章名字不能相同`
 * @method void setSealName(string $SealName) 设置电子印章名字，1-50个中文字符
注:`同一企业下电子印章名字不能相同`
 * @method string getSealImage() 获取电子印章图片base64编码，大小不超过10M（原始图片不超过5M），只支持PNG或JPG图片格式

注: `通过图片创建的电子印章，需电子签平台人工审核`


 * @method void setSealImage(string $SealImage) 设置电子印章图片base64编码，大小不超过10M（原始图片不超过5M），只支持PNG或JPG图片格式

注: `通过图片创建的电子印章，需电子签平台人工审核`


 * @method UserInfo getOperator() 获取操作者的信息
 * @method void setOperator(UserInfo $Operator) 设置操作者的信息
 * @method string getGenerateSource() 获取电子印章生成方式
<ul>
<li><strong>空值</strong>:(默认)使用上传的图片生成印章, 此时需要上传SealImage图片</li>
<li><strong>SealGenerateSourceSystem</strong>: 系统生成印章, 无需上传SealImage图片</li>
</ul>
 * @method void setGenerateSource(string $GenerateSource) 设置电子印章生成方式
<ul>
<li><strong>空值</strong>:(默认)使用上传的图片生成印章, 此时需要上传SealImage图片</li>
<li><strong>SealGenerateSourceSystem</strong>: 系统生成印章, 无需上传SealImage图片</li>
</ul>
 * @method string getSealType() 获取电子印章类型 , 可选类型如下: 
<ul><li>**OFFICIAL**: (默认)公章</li>
<li>**CONTRACT**: 合同专用章;</li>
<li>**FINANCE**: 财务专用章;</li>
<li>**PERSONNEL**: 人事专用章</li>
<li>**INVOICE**: 发票专用章</li>
</ul>
注: `同企业下只能有一个公章, 重复创建会报错`
 * @method void setSealType(string $SealType) 设置电子印章类型 , 可选类型如下: 
<ul><li>**OFFICIAL**: (默认)公章</li>
<li>**CONTRACT**: 合同专用章;</li>
<li>**FINANCE**: 财务专用章;</li>
<li>**PERSONNEL**: 人事专用章</li>
<li>**INVOICE**: 发票专用章</li>
</ul>
注: `同企业下只能有一个公章, 重复创建会报错`
 * @method string getSealHorizontalText() 获取企业印章横向文字，最多可填15个汉字  (若超过印章最大宽度，优先压缩字间距，其次缩小字号)
横向文字的位置如下图中的"印章横向文字在这里"

![image](https://dyn.ess.tencent.cn/guide/capi/CreateSealByImage2.png)

 * @method void setSealHorizontalText(string $SealHorizontalText) 设置企业印章横向文字，最多可填15个汉字  (若超过印章最大宽度，优先压缩字间距，其次缩小字号)
横向文字的位置如下图中的"印章横向文字在这里"

![image](https://dyn.ess.tencent.cn/guide/capi/CreateSealByImage2.png)

 * @method string getSealStyle() 获取印章样式, 可以选择的样式如下: 
<ul><li>**circle**:(默认)圆形印章</li>
<li>**ellipse**:椭圆印章</li></ul>
 * @method void setSealStyle(string $SealStyle) 设置印章样式, 可以选择的样式如下: 
<ul><li>**circle**:(默认)圆形印章</li>
<li>**ellipse**:椭圆印章</li></ul>
 * @method string getSealSize() 获取印章尺寸取值描述, 可以选择的尺寸如下: 
<ul><li> **42_42**: 圆形企业公章直径42mm, 当SealStyle是圆形的时候才有效</li>
<li> **40_40**: 圆形企业印章直径40mm, 当SealStyle是圆形的时候才有效</li>
<li> **45_30**: 椭圆形印章45mm x 30mm, 当SealStyle是椭圆的时候才有效</li>
<li> **40_30**: 椭圆形印章40mm x 30mm, 当SealStyle是椭圆的时候才有效</li></ul>
 * @method void setSealSize(string $SealSize) 设置印章尺寸取值描述, 可以选择的尺寸如下: 
<ul><li> **42_42**: 圆形企业公章直径42mm, 当SealStyle是圆形的时候才有效</li>
<li> **40_40**: 圆形企业印章直径40mm, 当SealStyle是圆形的时候才有效</li>
<li> **45_30**: 椭圆形印章45mm x 30mm, 当SealStyle是椭圆的时候才有效</li>
<li> **40_30**: 椭圆形印章40mm x 30mm, 当SealStyle是椭圆的时候才有效</li></ul>
 * @method string getTaxIdentifyCode() 获取企业税号
注: `1.印章类型SealType是INVOICE类型时，此参数才会生效`
`2.印章类型SealType是INVOICE类型，且该字段没有传入值或传入空时，会取该企业对应的统一社会信用代码作为默认的企业税号`
 * @method void setTaxIdentifyCode(string $TaxIdentifyCode) 设置企业税号
注: `1.印章类型SealType是INVOICE类型时，此参数才会生效`
`2.印章类型SealType是INVOICE类型，且该字段没有传入值或传入空时，会取该企业对应的统一社会信用代码作为默认的企业税号`
 */
class CreateSealByImageRequest extends AbstractModel
{
    /**
     * @var Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
     */
    public $Agent;

    /**
     * @var string 电子印章名字，1-50个中文字符
注:`同一企业下电子印章名字不能相同`
     */
    public $SealName;

    /**
     * @var string 电子印章图片base64编码，大小不超过10M（原始图片不超过5M），只支持PNG或JPG图片格式

注: `通过图片创建的电子印章，需电子签平台人工审核`


     */
    public $SealImage;

    /**
     * @var UserInfo 操作者的信息
     * @deprecated
     */
    public $Operator;

    /**
     * @var string 电子印章生成方式
<ul>
<li><strong>空值</strong>:(默认)使用上传的图片生成印章, 此时需要上传SealImage图片</li>
<li><strong>SealGenerateSourceSystem</strong>: 系统生成印章, 无需上传SealImage图片</li>
</ul>
     */
    public $GenerateSource;

    /**
     * @var string 电子印章类型 , 可选类型如下: 
<ul><li>**OFFICIAL**: (默认)公章</li>
<li>**CONTRACT**: 合同专用章;</li>
<li>**FINANCE**: 财务专用章;</li>
<li>**PERSONNEL**: 人事专用章</li>
<li>**INVOICE**: 发票专用章</li>
</ul>
注: `同企业下只能有一个公章, 重复创建会报错`
     */
    public $SealType;

    /**
     * @var string 企业印章横向文字，最多可填15个汉字  (若超过印章最大宽度，优先压缩字间距，其次缩小字号)
横向文字的位置如下图中的"印章横向文字在这里"

![image](https://dyn.ess.tencent.cn/guide/capi/CreateSealByImage2.png)

     */
    public $SealHorizontalText;

    /**
     * @var string 印章样式, 可以选择的样式如下: 
<ul><li>**circle**:(默认)圆形印章</li>
<li>**ellipse**:椭圆印章</li></ul>
     */
    public $SealStyle;

    /**
     * @var string 印章尺寸取值描述, 可以选择的尺寸如下: 
<ul><li> **42_42**: 圆形企业公章直径42mm, 当SealStyle是圆形的时候才有效</li>
<li> **40_40**: 圆形企业印章直径40mm, 当SealStyle是圆形的时候才有效</li>
<li> **45_30**: 椭圆形印章45mm x 30mm, 当SealStyle是椭圆的时候才有效</li>
<li> **40_30**: 椭圆形印章40mm x 30mm, 当SealStyle是椭圆的时候才有效</li></ul>
     */
    public $SealSize;

    /**
     * @var string 企业税号
注: `1.印章类型SealType是INVOICE类型时，此参数才会生效`
`2.印章类型SealType是INVOICE类型，且该字段没有传入值或传入空时，会取该企业对应的统一社会信用代码作为默认的企业税号`
     */
    public $TaxIdentifyCode;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。

此接口下面信息必填。
<ul>
<li>渠道应用标识:  Agent.AppId</li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li>
</ul>
第三方平台子客企业和员工必须已经经过实名认证
     * @param string $SealName 电子印章名字，1-50个中文字符
注:`同一企业下电子印章名字不能相同`
     * @param string $SealImage 电子印章图片base64编码，大小不超过10M（原始图片不超过5M），只支持PNG或JPG图片格式

注: `通过图片创建的电子印章，需电子签平台人工审核`


     * @param UserInfo $Operator 操作者的信息
     * @param string $GenerateSource 电子印章生成方式
<ul>
<li><strong>空值</strong>:(默认)使用上传的图片生成印章, 此时需要上传SealImage图片</li>
<li><strong>SealGenerateSourceSystem</strong>: 系统生成印章, 无需上传SealImage图片</li>
</ul>
     * @param string $SealType 电子印章类型 , 可选类型如下: 
<ul><li>**OFFICIAL**: (默认)公章</li>
<li>**CONTRACT**: 合同专用章;</li>
<li>**FINANCE**: 财务专用章;</li>
<li>**PERSONNEL**: 人事专用章</li>
<li>**INVOICE**: 发票专用章</li>
</ul>
注: `同企业下只能有一个公章, 重复创建会报错`
     * @param string $SealHorizontalText 企业印章横向文字，最多可填15个汉字  (若超过印章最大宽度，优先压缩字间距，其次缩小字号)
横向文字的位置如下图中的"印章横向文字在这里"

![image](https://dyn.ess.tencent.cn/guide/capi/CreateSealByImage2.png)

     * @param string $SealStyle 印章样式, 可以选择的样式如下: 
<ul><li>**circle**:(默认)圆形印章</li>
<li>**ellipse**:椭圆印章</li></ul>
     * @param string $SealSize 印章尺寸取值描述, 可以选择的尺寸如下: 
<ul><li> **42_42**: 圆形企业公章直径42mm, 当SealStyle是圆形的时候才有效</li>
<li> **40_40**: 圆形企业印章直径40mm, 当SealStyle是圆形的时候才有效</li>
<li> **45_30**: 椭圆形印章45mm x 30mm, 当SealStyle是椭圆的时候才有效</li>
<li> **40_30**: 椭圆形印章40mm x 30mm, 当SealStyle是椭圆的时候才有效</li></ul>
     * @param string $TaxIdentifyCode 企业税号
注: `1.印章类型SealType是INVOICE类型时，此参数才会生效`
`2.印章类型SealType是INVOICE类型，且该字段没有传入值或传入空时，会取该企业对应的统一社会信用代码作为默认的企业税号`
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
        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("SealName",$param) and $param["SealName"] !== null) {
            $this->SealName = $param["SealName"];
        }

        if (array_key_exists("SealImage",$param) and $param["SealImage"] !== null) {
            $this->SealImage = $param["SealImage"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("GenerateSource",$param) and $param["GenerateSource"] !== null) {
            $this->GenerateSource = $param["GenerateSource"];
        }

        if (array_key_exists("SealType",$param) and $param["SealType"] !== null) {
            $this->SealType = $param["SealType"];
        }

        if (array_key_exists("SealHorizontalText",$param) and $param["SealHorizontalText"] !== null) {
            $this->SealHorizontalText = $param["SealHorizontalText"];
        }

        if (array_key_exists("SealStyle",$param) and $param["SealStyle"] !== null) {
            $this->SealStyle = $param["SealStyle"];
        }

        if (array_key_exists("SealSize",$param) and $param["SealSize"] !== null) {
            $this->SealSize = $param["SealSize"];
        }

        if (array_key_exists("TaxIdentifyCode",$param) and $param["TaxIdentifyCode"] !== null) {
            $this->TaxIdentifyCode = $param["TaxIdentifyCode"];
        }
    }
}
