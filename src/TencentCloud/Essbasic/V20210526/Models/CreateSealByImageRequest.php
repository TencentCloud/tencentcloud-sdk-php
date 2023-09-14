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
 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method string getSealName() 获取印章名称，最大长度不超过50字符
 * @method void setSealName(string $SealName) 设置印章名称，最大长度不超过50字符
 * @method string getSealImage() 获取印章图片base64，大小不超过10M（原始图片不超过7.6M）
 * @method void setSealImage(string $SealImage) 设置印章图片base64，大小不超过10M（原始图片不超过7.6M）
 * @method UserInfo getOperator() 获取操作者的信息
 * @method void setOperator(UserInfo $Operator) 设置操作者的信息
 * @method string getGenerateSource() 获取本接口支持上传图片印章及系统直接生成印章； 如果要使用系统生成印章，此值传：SealGenerateSourceSystem； 如果要使用图片上传请传字段 SealImage
 * @method void setGenerateSource(string $GenerateSource) 设置本接口支持上传图片印章及系统直接生成印章； 如果要使用系统生成印章，此值传：SealGenerateSourceSystem； 如果要使用图片上传请传字段 SealImage
 * @method string getSealType() 获取电子印章类型：
<ul><li>OFFICIAL-公章</li>
<li>CONTRACT-合同专用章;</li>
<li>FINANCE-合财务专用章;</li>
<li>PERSONNEL-人事专用章
</li>
<li>默认：OFFICIAL</li>
</ul>
 * @method void setSealType(string $SealType) 设置电子印章类型：
<ul><li>OFFICIAL-公章</li>
<li>CONTRACT-合同专用章;</li>
<li>FINANCE-合财务专用章;</li>
<li>PERSONNEL-人事专用章
</li>
<li>默认：OFFICIAL</li>
</ul>
 * @method string getSealHorizontalText() 获取企业印章横向文字，最多可填15个汉字（若超过印章最大宽度，优先压缩字间距，其次缩小字号
 * @method void setSealHorizontalText(string $SealHorizontalText) 设置企业印章横向文字，最多可填15个汉字（若超过印章最大宽度，优先压缩字间距，其次缩小字号
 * @method string getSealStyle() 获取印章样式:

<ul><li>cycle:圆形印章</li>
<li>ellipse:椭圆印章</li>
<li> 注：默认圆形印章</li></ul>
 * @method void setSealStyle(string $SealStyle) 设置印章样式:

<ul><li>cycle:圆形印章</li>
<li>ellipse:椭圆印章</li>
<li> 注：默认圆形印章</li></ul>
 * @method string getSealSize() 获取印章尺寸取值描述：<ul><li> 42_42 圆形企业公章直径42mm</li>
<li> 40_40 圆形企业印章直径40mm</li>
<li> 45_30 椭圆形印章45mm x 30mm</li>
</ul>
 * @method void setSealSize(string $SealSize) 设置印章尺寸取值描述：<ul><li> 42_42 圆形企业公章直径42mm</li>
<li> 40_40 圆形企业印章直径40mm</li>
<li> 45_30 椭圆形印章45mm x 30mm</li>
</ul>
 */
class CreateSealByImageRequest extends AbstractModel
{
    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var string 印章名称，最大长度不超过50字符
     */
    public $SealName;

    /**
     * @var string 印章图片base64，大小不超过10M（原始图片不超过7.6M）
     */
    public $SealImage;

    /**
     * @var UserInfo 操作者的信息
     * @deprecated
     */
    public $Operator;

    /**
     * @var string 本接口支持上传图片印章及系统直接生成印章； 如果要使用系统生成印章，此值传：SealGenerateSourceSystem； 如果要使用图片上传请传字段 SealImage
     */
    public $GenerateSource;

    /**
     * @var string 电子印章类型：
<ul><li>OFFICIAL-公章</li>
<li>CONTRACT-合同专用章;</li>
<li>FINANCE-合财务专用章;</li>
<li>PERSONNEL-人事专用章
</li>
<li>默认：OFFICIAL</li>
</ul>
     */
    public $SealType;

    /**
     * @var string 企业印章横向文字，最多可填15个汉字（若超过印章最大宽度，优先压缩字间距，其次缩小字号
     */
    public $SealHorizontalText;

    /**
     * @var string 印章样式:

<ul><li>cycle:圆形印章</li>
<li>ellipse:椭圆印章</li>
<li> 注：默认圆形印章</li></ul>
     */
    public $SealStyle;

    /**
     * @var string 印章尺寸取值描述：<ul><li> 42_42 圆形企业公章直径42mm</li>
<li> 40_40 圆形企业印章直径40mm</li>
<li> 45_30 椭圆形印章45mm x 30mm</li>
</ul>
     */
    public $SealSize;

    /**
     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param string $SealName 印章名称，最大长度不超过50字符
     * @param string $SealImage 印章图片base64，大小不超过10M（原始图片不超过7.6M）
     * @param UserInfo $Operator 操作者的信息
     * @param string $GenerateSource 本接口支持上传图片印章及系统直接生成印章； 如果要使用系统生成印章，此值传：SealGenerateSourceSystem； 如果要使用图片上传请传字段 SealImage
     * @param string $SealType 电子印章类型：
<ul><li>OFFICIAL-公章</li>
<li>CONTRACT-合同专用章;</li>
<li>FINANCE-合财务专用章;</li>
<li>PERSONNEL-人事专用章
</li>
<li>默认：OFFICIAL</li>
</ul>
     * @param string $SealHorizontalText 企业印章横向文字，最多可填15个汉字（若超过印章最大宽度，优先压缩字间距，其次缩小字号
     * @param string $SealStyle 印章样式:

<ul><li>cycle:圆形印章</li>
<li>ellipse:椭圆印章</li>
<li> 注：默认圆形印章</li></ul>
     * @param string $SealSize 印章尺寸取值描述：<ul><li> 42_42 圆形企业公章直径42mm</li>
<li> 40_40 圆形企业印章直径40mm</li>
<li> 45_30 椭圆形印章45mm x 30mm</li>
</ul>
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
    }
}
