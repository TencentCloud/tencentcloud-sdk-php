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
 * @method string getSealName() 获取电子印章名字，1-50个中文字符。
 * @method void setSealName(string $SealName) 设置电子印章名字，1-50个中文字符。
 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method string getGenerateSource() 获取本接口支持上传图片印章及系统直接生成印章；
如果要使用系统生成印章，此值传：SealGenerateSourceSystem；
如果要使用图片上传请传字段 Image
 * @method void setGenerateSource(string $GenerateSource) 设置本接口支持上传图片印章及系统直接生成印章；
如果要使用系统生成印章，此值传：SealGenerateSourceSystem；
如果要使用图片上传请传字段 Image
 * @method string getSealType() 获取电子印章类型：
OFFICIAL-公章；
CONTRACT-合同专用章;
FINANCE-合财务专用章;
PERSONNEL-人事专用章.
 * @method void setSealType(string $SealType) 设置电子印章类型：
OFFICIAL-公章；
CONTRACT-合同专用章;
FINANCE-合财务专用章;
PERSONNEL-人事专用章.
 * @method string getFileName() 获取电子印章图片文件名称，1-50个中文字符。
 * @method void setFileName(string $FileName) 设置电子印章图片文件名称，1-50个中文字符。
 * @method string getImage() 获取电子印章图片base64编码
参数Image,FileToken或GenerateSource=SealGenerateSourceSystem三选一。
 * @method void setImage(string $Image) 设置电子印章图片base64编码
参数Image,FileToken或GenerateSource=SealGenerateSourceSystem三选一。
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
 * @method string getSealHorizontalText() 获取企业印章横向文字，最多可填15个汉字（若超过印章最大宽度，优先压缩字间距，其次缩小字号）
 * @method void setSealHorizontalText(string $SealHorizontalText) 设置企业印章横向文字，最多可填15个汉字（若超过印章最大宽度，优先压缩字间距，其次缩小字号）
 * @method string getSealChordText() 获取暂时不支持下弦文字设置
 * @method void setSealChordText(string $SealChordText) 设置暂时不支持下弦文字设置
 * @method string getSealCentralType() 获取系统生成的印章只支持STAR
 * @method void setSealCentralType(string $SealCentralType) 设置系统生成的印章只支持STAR
 * @method string getFileToken() 获取通过文件上传时，服务端生成的电子印章上传图片的token

 * @method void setFileToken(string $FileToken) 设置通过文件上传时，服务端生成的电子印章上传图片的token

 * @method string getSealStyle() 获取印章样式:

cycle:圆形印章;
ellipse:椭圆印章;
注：默认圆形印章
 * @method void setSealStyle(string $SealStyle) 设置印章样式:

cycle:圆形印章;
ellipse:椭圆印章;
注：默认圆形印章
 * @method string getSealSize() 获取印章尺寸取值描述：
42_42 圆形企业公章直径42mm；
40_40 圆形企业印章直径40mm；
45_30 椭圆形印章45mm x 30mm;
 * @method void setSealSize(string $SealSize) 设置印章尺寸取值描述：
42_42 圆形企业公章直径42mm；
40_40 圆形企业印章直径40mm；
45_30 椭圆形印章45mm x 30mm;
 */
class CreateSealRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var string 电子印章名字，1-50个中文字符。
     */
    public $SealName;

    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var string 本接口支持上传图片印章及系统直接生成印章；
如果要使用系统生成印章，此值传：SealGenerateSourceSystem；
如果要使用图片上传请传字段 Image
     */
    public $GenerateSource;

    /**
     * @var string 电子印章类型：
OFFICIAL-公章；
CONTRACT-合同专用章;
FINANCE-合财务专用章;
PERSONNEL-人事专用章.
     */
    public $SealType;

    /**
     * @var string 电子印章图片文件名称，1-50个中文字符。
     */
    public $FileName;

    /**
     * @var string 电子印章图片base64编码
参数Image,FileToken或GenerateSource=SealGenerateSourceSystem三选一。
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
     * @var string 企业印章横向文字，最多可填15个汉字（若超过印章最大宽度，优先压缩字间距，其次缩小字号）
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
     * @var string 印章样式:

cycle:圆形印章;
ellipse:椭圆印章;
注：默认圆形印章
     */
    public $SealStyle;

    /**
     * @var string 印章尺寸取值描述：
42_42 圆形企业公章直径42mm；
40_40 圆形企业印章直径40mm；
45_30 椭圆形印章45mm x 30mm;
     */
    public $SealSize;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param string $SealName 电子印章名字，1-50个中文字符。
     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param string $GenerateSource 本接口支持上传图片印章及系统直接生成印章；
如果要使用系统生成印章，此值传：SealGenerateSourceSystem；
如果要使用图片上传请传字段 Image
     * @param string $SealType 电子印章类型：
OFFICIAL-公章；
CONTRACT-合同专用章;
FINANCE-合财务专用章;
PERSONNEL-人事专用章.
     * @param string $FileName 电子印章图片文件名称，1-50个中文字符。
     * @param string $Image 电子印章图片base64编码
参数Image,FileToken或GenerateSource=SealGenerateSourceSystem三选一。
     * @param integer $Width 电子印章宽度,单位px
参数不再启用，系统会设置印章大小为标准尺寸。
     * @param integer $Height 电子印章高度,单位px
参数不再启用，系统会设置印章大小为标准尺寸。
     * @param string $Color 电子印章印章颜色(默认红色RED),RED-红色

系统目前只支持红色印章创建。
     * @param string $SealHorizontalText 企业印章横向文字，最多可填15个汉字（若超过印章最大宽度，优先压缩字间距，其次缩小字号）
     * @param string $SealChordText 暂时不支持下弦文字设置
     * @param string $SealCentralType 系统生成的印章只支持STAR
     * @param string $FileToken 通过文件上传时，服务端生成的电子印章上传图片的token

     * @param string $SealStyle 印章样式:

cycle:圆形印章;
ellipse:椭圆印章;
注：默认圆形印章
     * @param string $SealSize 印章尺寸取值描述：
42_42 圆形企业公章直径42mm；
40_40 圆形企业印章直径40mm；
45_30 椭圆形印章45mm x 30mm;
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
