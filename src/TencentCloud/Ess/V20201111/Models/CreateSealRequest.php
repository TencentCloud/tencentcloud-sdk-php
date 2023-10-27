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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSeal请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method string getSealName() 获取电子印章名字，1-50个中文字符
注:`同一企业下电子印章名字不能相同`
 * @method void setSealName(string $SealName) 设置电子印章名字，1-50个中文字符
注:`同一企业下电子印章名字不能相同`
 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
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
<li>**FINANCE**: 合财务专用章;</li>
<li>**PERSONNEL**: 人事专用章</li>
</ul>
注: `同企业下只能有一个公章, 重复创建会报错`
 * @method void setSealType(string $SealType) 设置电子印章类型 , 可选类型如下: 
<ul><li>**OFFICIAL**: (默认)公章</li>
<li>**CONTRACT**: 合同专用章;</li>
<li>**FINANCE**: 合财务专用章;</li>
<li>**PERSONNEL**: 人事专用章</li>
</ul>
注: `同企业下只能有一个公章, 重复创建会报错`
 * @method string getFileName() 获取电子印章图片文件名称，1-50个中文字符。
 * @method void setFileName(string $FileName) 设置电子印章图片文件名称，1-50个中文字符。
 * @method string getImage() 获取电子印章图片base64编码，大小不超过10M（原始图片不超过5M），只支持PNG或JPG图片格式

注: `通过图片创建的电子印章，需电子签平台人工审核`


 * @method void setImage(string $Image) 设置电子印章图片base64编码，大小不超过10M（原始图片不超过5M），只支持PNG或JPG图片格式

注: `通过图片创建的电子印章，需电子签平台人工审核`


 * @method integer getWidth() 获取电子印章宽度,单位px
参数不再启用，系统会设置印章大小为标准尺寸。
 * @method void setWidth(integer $Width) 设置电子印章宽度,单位px
参数不再启用，系统会设置印章大小为标准尺寸。
 * @method integer getHeight() 获取电子印章高度,单位px
参数不再启用，系统会设置印章大小为标准尺寸。
 * @method void setHeight(integer $Height) 设置电子印章高度,单位px
参数不再启用，系统会设置印章大小为标准尺寸。
 * @method string getColor() 获取电子印章印章颜色(默认红色RED),RED-红色

系统目前只支持红色印章创建。
 * @method void setColor(string $Color) 设置电子印章印章颜色(默认红色RED),RED-红色

系统目前只支持红色印章创建。
 * @method string getSealHorizontalText() 获取企业印章横向文字，最多可填15个汉字  (若超过印章最大宽度，优先压缩字间距，其次缩小字号)
横向文字的位置如下图中的"印章横向文字在这里"

![image](https://dyn.ess.tencent.cn/guide/capi/CreateSealByImage2.png)

 * @method void setSealHorizontalText(string $SealHorizontalText) 设置企业印章横向文字，最多可填15个汉字  (若超过印章最大宽度，优先压缩字间距，其次缩小字号)
横向文字的位置如下图中的"印章横向文字在这里"

![image](https://dyn.ess.tencent.cn/guide/capi/CreateSealByImage2.png)

 * @method string getSealChordText() 获取暂时不支持下弦文字设置
 * @method void setSealChordText(string $SealChordText) 设置暂时不支持下弦文字设置
 * @method string getSealCentralType() 获取系统生成的印章只支持STAR
 * @method void setSealCentralType(string $SealCentralType) 设置系统生成的印章只支持STAR
 * @method string getFileToken() 获取通过文件上传时，服务端生成的电子印章上传图片的token

 * @method void setFileToken(string $FileToken) 设置通过文件上传时，服务端生成的电子印章上传图片的token

 * @method string getSealStyle() 获取印章样式, 可以选择的样式如下: 
<ul><li>**circle**:(默认)圆形印章</li>
<li>**ellipse**:椭圆印章</li></ul>
 * @method void setSealStyle(string $SealStyle) 设置印章样式, 可以选择的样式如下: 
<ul><li>**circle**:(默认)圆形印章</li>
<li>**ellipse**:椭圆印章</li></ul>
 * @method string getSealSize() 获取印章尺寸取值描述, 可以选择的尺寸如下: 
<ul><li> **42_42**: 圆形企业公章直径42mm, 当SealStyle是圆形的时候才有效</li>
<li> **40_40**: 圆形企业印章直径40mm, 当SealStyle是圆形的时候才有效</li>
<li> **45_30**: 椭圆形印章45mm x 30mm, 当SealStyle是椭圆的时候才有效</li></ul>
 * @method void setSealSize(string $SealSize) 设置印章尺寸取值描述, 可以选择的尺寸如下: 
<ul><li> **42_42**: 圆形企业公章直径42mm, 当SealStyle是圆形的时候才有效</li>
<li> **40_40**: 圆形企业印章直径40mm, 当SealStyle是圆形的时候才有效</li>
<li> **45_30**: 椭圆形印章45mm x 30mm, 当SealStyle是椭圆的时候才有效</li></ul>
 */
class CreateSealRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var string 电子印章名字，1-50个中文字符
注:`同一企业下电子印章名字不能相同`
     */
    public $SealName;

    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

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
<li>**FINANCE**: 合财务专用章;</li>
<li>**PERSONNEL**: 人事专用章</li>
</ul>
注: `同企业下只能有一个公章, 重复创建会报错`
     */
    public $SealType;

    /**
     * @var string 电子印章图片文件名称，1-50个中文字符。
     */
    public $FileName;

    /**
     * @var string 电子印章图片base64编码，大小不超过10M（原始图片不超过5M），只支持PNG或JPG图片格式

注: `通过图片创建的电子印章，需电子签平台人工审核`


     */
    public $Image;

    /**
     * @var integer 电子印章宽度,单位px
参数不再启用，系统会设置印章大小为标准尺寸。
     */
    public $Width;

    /**
     * @var integer 电子印章高度,单位px
参数不再启用，系统会设置印章大小为标准尺寸。
     */
    public $Height;

    /**
     * @var string 电子印章印章颜色(默认红色RED),RED-红色

系统目前只支持红色印章创建。
     */
    public $Color;

    /**
     * @var string 企业印章横向文字，最多可填15个汉字  (若超过印章最大宽度，优先压缩字间距，其次缩小字号)
横向文字的位置如下图中的"印章横向文字在这里"

![image](https://dyn.ess.tencent.cn/guide/capi/CreateSealByImage2.png)

     */
    public $SealHorizontalText;

    /**
     * @var string 暂时不支持下弦文字设置
     */
    public $SealChordText;

    /**
     * @var string 系统生成的印章只支持STAR
     */
    public $SealCentralType;

    /**
     * @var string 通过文件上传时，服务端生成的电子印章上传图片的token

     */
    public $FileToken;

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
<li> **45_30**: 椭圆形印章45mm x 30mm, 当SealStyle是椭圆的时候才有效</li></ul>
     */
    public $SealSize;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param string $SealName 电子印章名字，1-50个中文字符
注:`同一企业下电子印章名字不能相同`
     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param string $GenerateSource 电子印章生成方式
<ul>
<li><strong>空值</strong>:(默认)使用上传的图片生成印章, 此时需要上传SealImage图片</li>
<li><strong>SealGenerateSourceSystem</strong>: 系统生成印章, 无需上传SealImage图片</li>
</ul>
     * @param string $SealType 电子印章类型 , 可选类型如下: 
<ul><li>**OFFICIAL**: (默认)公章</li>
<li>**CONTRACT**: 合同专用章;</li>
<li>**FINANCE**: 合财务专用章;</li>
<li>**PERSONNEL**: 人事专用章</li>
</ul>
注: `同企业下只能有一个公章, 重复创建会报错`
     * @param string $FileName 电子印章图片文件名称，1-50个中文字符。
     * @param string $Image 电子印章图片base64编码，大小不超过10M（原始图片不超过5M），只支持PNG或JPG图片格式

注: `通过图片创建的电子印章，需电子签平台人工审核`


     * @param integer $Width 电子印章宽度,单位px
参数不再启用，系统会设置印章大小为标准尺寸。
     * @param integer $Height 电子印章高度,单位px
参数不再启用，系统会设置印章大小为标准尺寸。
     * @param string $Color 电子印章印章颜色(默认红色RED),RED-红色

系统目前只支持红色印章创建。
     * @param string $SealHorizontalText 企业印章横向文字，最多可填15个汉字  (若超过印章最大宽度，优先压缩字间距，其次缩小字号)
横向文字的位置如下图中的"印章横向文字在这里"

![image](https://dyn.ess.tencent.cn/guide/capi/CreateSealByImage2.png)

     * @param string $SealChordText 暂时不支持下弦文字设置
     * @param string $SealCentralType 系统生成的印章只支持STAR
     * @param string $FileToken 通过文件上传时，服务端生成的电子印章上传图片的token

     * @param string $SealStyle 印章样式, 可以选择的样式如下: 
<ul><li>**circle**:(默认)圆形印章</li>
<li>**ellipse**:椭圆印章</li></ul>
     * @param string $SealSize 印章尺寸取值描述, 可以选择的尺寸如下: 
<ul><li> **42_42**: 圆形企业公章直径42mm, 当SealStyle是圆形的时候才有效</li>
<li> **40_40**: 圆形企业印章直径40mm, 当SealStyle是圆形的时候才有效</li>
<li> **45_30**: 椭圆形印章45mm x 30mm, 当SealStyle是椭圆的时候才有效</li></ul>
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

        if (array_key_exists("SealName",$param) and $param["SealName"] !== null) {
            $this->SealName = $param["SealName"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("GenerateSource",$param) and $param["GenerateSource"] !== null) {
            $this->GenerateSource = $param["GenerateSource"];
        }

        if (array_key_exists("SealType",$param) and $param["SealType"] !== null) {
            $this->SealType = $param["SealType"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }

        if (array_key_exists("SealHorizontalText",$param) and $param["SealHorizontalText"] !== null) {
            $this->SealHorizontalText = $param["SealHorizontalText"];
        }

        if (array_key_exists("SealChordText",$param) and $param["SealChordText"] !== null) {
            $this->SealChordText = $param["SealChordText"];
        }

        if (array_key_exists("SealCentralType",$param) and $param["SealCentralType"] !== null) {
            $this->SealCentralType = $param["SealCentralType"];
        }

        if (array_key_exists("FileToken",$param) and $param["FileToken"] !== null) {
            $this->FileToken = $param["FileToken"];
        }

        if (array_key_exists("SealStyle",$param) and $param["SealStyle"] !== null) {
            $this->SealStyle = $param["SealStyle"];
        }

        if (array_key_exists("SealSize",$param) and $param["SealSize"] !== null) {
            $this->SealSize = $param["SealSize"];
        }
    }
}
