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
 * CreateSeal请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method string getSealName() 获取<p>电子印章名字，1-50个中文字符<br>注:<code>同一企业下电子印章名字不能相同</code></p>
 * @method void setSealName(string $SealName) 设置<p>电子印章名字，1-50个中文字符<br>注:<code>同一企业下电子印章名字不能相同</code></p>
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method string getGenerateSource() 获取<p>电子印章生成方式</p><ul><li><strong>空值</strong>:(默认)使用上传的图片生成印章, 此时需要上传SealImage图片</li><li><strong>SealGenerateSourceSystem</strong>: 系统生成印章, 无需上传SealImage图片</li></ul>
 * @method void setGenerateSource(string $GenerateSource) 设置<p>电子印章生成方式</p><ul><li><strong>空值</strong>:(默认)使用上传的图片生成印章, 此时需要上传SealImage图片</li><li><strong>SealGenerateSourceSystem</strong>: 系统生成印章, 无需上传SealImage图片</li></ul>
 * @method string getSealType() 获取<p>电子印章类型 , 可选类型如下: <ul><li><strong>OFFICIAL</strong>: (默认)公章</li><li><strong>CONTRACT</strong>: 合同专用章;</li><li><strong>FINANCE</strong>: 财务专用章;</li><li><strong>PERSONNEL</strong>: 人事专用章</li><li><strong>INVOICE</strong>: 发票专用章</li><li><strong>OTHER</strong>: 其他</li></ul>注: 同企业下只能有<font color="red">一个</font>公章, 重复创建会报错</p>
 * @method void setSealType(string $SealType) 设置<p>电子印章类型 , 可选类型如下: <ul><li><strong>OFFICIAL</strong>: (默认)公章</li><li><strong>CONTRACT</strong>: 合同专用章;</li><li><strong>FINANCE</strong>: 财务专用章;</li><li><strong>PERSONNEL</strong>: 人事专用章</li><li><strong>INVOICE</strong>: 发票专用章</li><li><strong>OTHER</strong>: 其他</li></ul>注: 同企业下只能有<font color="red">一个</font>公章, 重复创建会报错</p>
 * @method string getFileName() 获取<p>电子印章图片文件名称，1-50个中文字符。</p>
 * @method void setFileName(string $FileName) 设置<p>电子印章图片文件名称，1-50个中文字符。</p>
 * @method string getImage() 获取<p>电子印章图片base64编码，大小不超过10M（原始图片不超过5M），只支持PNG或JPG图片格式</p><p>注: <code>通过图片创建的电子印章，需电子签平台人工审核</code></p>
 * @method void setImage(string $Image) 设置<p>电子印章图片base64编码，大小不超过10M（原始图片不超过5M），只支持PNG或JPG图片格式</p><p>注: <code>通过图片创建的电子印章，需电子签平台人工审核</code></p>
 * @method integer getWidth() 获取<p>电子印章宽度,单位px<br>参数不再启用，系统会设置印章大小为标准尺寸。</p>
 * @method void setWidth(integer $Width) 设置<p>电子印章宽度,单位px<br>参数不再启用，系统会设置印章大小为标准尺寸。</p>
 * @method integer getHeight() 获取<p>电子印章高度,单位px<br>参数不再启用，系统会设置印章大小为标准尺寸。</p>
 * @method void setHeight(integer $Height) 设置<p>电子印章高度,单位px<br>参数不再启用，系统会设置印章大小为标准尺寸。</p>
 * @method string getColor() 获取<p>电子印章印章颜色(默认红色RED),RED-红色</p><p>系统目前只支持红色印章创建。</p>
 * @method void setColor(string $Color) 设置<p>电子印章印章颜色(默认红色RED),RED-红色</p><p>系统目前只支持红色印章创建。</p>
 * @method string getSealHorizontalText() 获取<p>企业印章横向文字，最多可填15个汉字  (若超过印章最大宽度，优先压缩字间距，其次缩小字号)<br>横向文字的位置如下图中的&quot;印章横向文字在这里&quot;</p><p><img src="https://dyn.ess.tencent.cn/guide/capi/CreateSealByImage2.png" alt="image"></p>
 * @method void setSealHorizontalText(string $SealHorizontalText) 设置<p>企业印章横向文字，最多可填15个汉字  (若超过印章最大宽度，优先压缩字间距，其次缩小字号)<br>横向文字的位置如下图中的&quot;印章横向文字在这里&quot;</p><p><img src="https://dyn.ess.tencent.cn/guide/capi/CreateSealByImage2.png" alt="image"></p>
 * @method string getSealChordText() 获取<p>暂时不支持下弦文字设置</p>
 * @method void setSealChordText(string $SealChordText) 设置<p>暂时不支持下弦文字设置</p>
 * @method string getSealCentralType() 获取<p>系统生成的印章只支持：STAR</p>
 * @method void setSealCentralType(string $SealCentralType) 设置<p>系统生成的印章只支持：STAR</p>
 * @method string getFileToken() 获取<p>通过文件上传时，服务端生成的电子印章上传图片的token</p>
 * @method void setFileToken(string $FileToken) 设置<p>通过文件上传时，服务端生成的电子印章上传图片的token</p>
 * @method string getSealStyle() 获取<p>印章样式, 可以选择的样式如下: </p><ul><li>**circle**:(默认)圆形印章</li><li>**ellipse**:椭圆印章</li></ul>
 * @method void setSealStyle(string $SealStyle) 设置<p>印章样式, 可以选择的样式如下: </p><ul><li>**circle**:(默认)圆形印章</li><li>**ellipse**:椭圆印章</li></ul>
 * @method string getSealSize() 获取<p>印章尺寸取值描述, 可以选择的尺寸如下: <ul><li> <strong>38_38</strong>: 圆形企业公章直径38mm, 当SealStyle是圆形的时候才有效</li> <li> <strong>40_40</strong>: 圆形企业公章直径40mm, 当SealStyle是圆形的时候才有效</li> <li> <strong>42_42</strong>（默认）: 圆形企业公章直径42mm, 当SealStyle是圆形的时候才有效</li> <li> <strong>45_45</strong>: 圆形企业印章直径45mm, 当SealStyle是圆形的时候才有效</li> <li> <strong>50_50</strong>: 圆形企业印章直径50mm, 当SealStyle是圆形的时候才有效</li> <li> <strong>58_58</strong>: 圆形企业印章直径58mm, 当SealStyle是圆形的时候才有效</li>  <li> <strong>40_30</strong>: 椭圆形印章40mm x 30mm, 当SealStyle是椭圆的时候才有效</li> <li> <strong>45_30</strong>: 椭圆形印章45mm x 30mm, 当SealStyle是椭圆的时候才有效</li> </ul></p>
 * @method void setSealSize(string $SealSize) 设置<p>印章尺寸取值描述, 可以选择的尺寸如下: <ul><li> <strong>38_38</strong>: 圆形企业公章直径38mm, 当SealStyle是圆形的时候才有效</li> <li> <strong>40_40</strong>: 圆形企业公章直径40mm, 当SealStyle是圆形的时候才有效</li> <li> <strong>42_42</strong>（默认）: 圆形企业公章直径42mm, 当SealStyle是圆形的时候才有效</li> <li> <strong>45_45</strong>: 圆形企业印章直径45mm, 当SealStyle是圆形的时候才有效</li> <li> <strong>50_50</strong>: 圆形企业印章直径50mm, 当SealStyle是圆形的时候才有效</li> <li> <strong>58_58</strong>: 圆形企业印章直径58mm, 当SealStyle是圆形的时候才有效</li>  <li> <strong>40_30</strong>: 椭圆形印章40mm x 30mm, 当SealStyle是椭圆的时候才有效</li> <li> <strong>45_30</strong>: 椭圆形印章45mm x 30mm, 当SealStyle是椭圆的时候才有效</li> </ul></p>
 * @method string getTaxIdentifyCode() 获取<p>企业税号<br>注:</p><ul><li>1.印章类型SealType是INVOICE类型时，此参数才会生效</li><li>2.印章类型SealType是INVOICE类型，且该字段没有传入值或传入空时，会取该企业对应的统一社会信用代码作为默认的企业税号（<font color="red">如果是通过授权书授权方式认证的企业，此参数必传不能为空</font>）</li></ul>
 * @method void setTaxIdentifyCode(string $TaxIdentifyCode) 设置<p>企业税号<br>注:</p><ul><li>1.印章类型SealType是INVOICE类型时，此参数才会生效</li><li>2.印章类型SealType是INVOICE类型，且该字段没有传入值或传入空时，会取该企业对应的统一社会信用代码作为默认的企业税号（<font color="red">如果是通过授权书授权方式认证的企业，此参数必传不能为空</font>）</li></ul>
 * @method string getSealDescription() 获取<p>印章描述内容</p>
 * @method void setSealDescription(string $SealDescription) 设置<p>印章描述内容</p>
 * @method array getOptions() 获取<p>个性化配置字段，默认不传。</p>
 * @method void setOptions(array $Options) 设置<p>个性化配置字段，默认不传。</p>
 */
class CreateSealRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var string <p>电子印章名字，1-50个中文字符<br>注:<code>同一企业下电子印章名字不能相同</code></p>
     */
    public $SealName;

    /**
     * @var Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @var string <p>电子印章生成方式</p><ul><li><strong>空值</strong>:(默认)使用上传的图片生成印章, 此时需要上传SealImage图片</li><li><strong>SealGenerateSourceSystem</strong>: 系统生成印章, 无需上传SealImage图片</li></ul>
     */
    public $GenerateSource;

    /**
     * @var string <p>电子印章类型 , 可选类型如下: <ul><li><strong>OFFICIAL</strong>: (默认)公章</li><li><strong>CONTRACT</strong>: 合同专用章;</li><li><strong>FINANCE</strong>: 财务专用章;</li><li><strong>PERSONNEL</strong>: 人事专用章</li><li><strong>INVOICE</strong>: 发票专用章</li><li><strong>OTHER</strong>: 其他</li></ul>注: 同企业下只能有<font color="red">一个</font>公章, 重复创建会报错</p>
     */
    public $SealType;

    /**
     * @var string <p>电子印章图片文件名称，1-50个中文字符。</p>
     */
    public $FileName;

    /**
     * @var string <p>电子印章图片base64编码，大小不超过10M（原始图片不超过5M），只支持PNG或JPG图片格式</p><p>注: <code>通过图片创建的电子印章，需电子签平台人工审核</code></p>
     */
    public $Image;

    /**
     * @var integer <p>电子印章宽度,单位px<br>参数不再启用，系统会设置印章大小为标准尺寸。</p>
     */
    public $Width;

    /**
     * @var integer <p>电子印章高度,单位px<br>参数不再启用，系统会设置印章大小为标准尺寸。</p>
     */
    public $Height;

    /**
     * @var string <p>电子印章印章颜色(默认红色RED),RED-红色</p><p>系统目前只支持红色印章创建。</p>
     */
    public $Color;

    /**
     * @var string <p>企业印章横向文字，最多可填15个汉字  (若超过印章最大宽度，优先压缩字间距，其次缩小字号)<br>横向文字的位置如下图中的&quot;印章横向文字在这里&quot;</p><p><img src="https://dyn.ess.tencent.cn/guide/capi/CreateSealByImage2.png" alt="image"></p>
     */
    public $SealHorizontalText;

    /**
     * @var string <p>暂时不支持下弦文字设置</p>
     */
    public $SealChordText;

    /**
     * @var string <p>系统生成的印章只支持：STAR</p>
     */
    public $SealCentralType;

    /**
     * @var string <p>通过文件上传时，服务端生成的电子印章上传图片的token</p>
     */
    public $FileToken;

    /**
     * @var string <p>印章样式, 可以选择的样式如下: </p><ul><li>**circle**:(默认)圆形印章</li><li>**ellipse**:椭圆印章</li></ul>
     */
    public $SealStyle;

    /**
     * @var string <p>印章尺寸取值描述, 可以选择的尺寸如下: <ul><li> <strong>38_38</strong>: 圆形企业公章直径38mm, 当SealStyle是圆形的时候才有效</li> <li> <strong>40_40</strong>: 圆形企业公章直径40mm, 当SealStyle是圆形的时候才有效</li> <li> <strong>42_42</strong>（默认）: 圆形企业公章直径42mm, 当SealStyle是圆形的时候才有效</li> <li> <strong>45_45</strong>: 圆形企业印章直径45mm, 当SealStyle是圆形的时候才有效</li> <li> <strong>50_50</strong>: 圆形企业印章直径50mm, 当SealStyle是圆形的时候才有效</li> <li> <strong>58_58</strong>: 圆形企业印章直径58mm, 当SealStyle是圆形的时候才有效</li>  <li> <strong>40_30</strong>: 椭圆形印章40mm x 30mm, 当SealStyle是椭圆的时候才有效</li> <li> <strong>45_30</strong>: 椭圆形印章45mm x 30mm, 当SealStyle是椭圆的时候才有效</li> </ul></p>
     */
    public $SealSize;

    /**
     * @var string <p>企业税号<br>注:</p><ul><li>1.印章类型SealType是INVOICE类型时，此参数才会生效</li><li>2.印章类型SealType是INVOICE类型，且该字段没有传入值或传入空时，会取该企业对应的统一社会信用代码作为默认的企业税号（<font color="red">如果是通过授权书授权方式认证的企业，此参数必传不能为空</font>）</li></ul>
     */
    public $TaxIdentifyCode;

    /**
     * @var string <p>印章描述内容</p>
     */
    public $SealDescription;

    /**
     * @var array <p>个性化配置字段，默认不传。</p>
     */
    public $Options;

    /**
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param string $SealName <p>电子印章名字，1-50个中文字符<br>注:<code>同一企业下电子印章名字不能相同</code></p>
     * @param Agent $Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     * @param string $GenerateSource <p>电子印章生成方式</p><ul><li><strong>空值</strong>:(默认)使用上传的图片生成印章, 此时需要上传SealImage图片</li><li><strong>SealGenerateSourceSystem</strong>: 系统生成印章, 无需上传SealImage图片</li></ul>
     * @param string $SealType <p>电子印章类型 , 可选类型如下: <ul><li><strong>OFFICIAL</strong>: (默认)公章</li><li><strong>CONTRACT</strong>: 合同专用章;</li><li><strong>FINANCE</strong>: 财务专用章;</li><li><strong>PERSONNEL</strong>: 人事专用章</li><li><strong>INVOICE</strong>: 发票专用章</li><li><strong>OTHER</strong>: 其他</li></ul>注: 同企业下只能有<font color="red">一个</font>公章, 重复创建会报错</p>
     * @param string $FileName <p>电子印章图片文件名称，1-50个中文字符。</p>
     * @param string $Image <p>电子印章图片base64编码，大小不超过10M（原始图片不超过5M），只支持PNG或JPG图片格式</p><p>注: <code>通过图片创建的电子印章，需电子签平台人工审核</code></p>
     * @param integer $Width <p>电子印章宽度,单位px<br>参数不再启用，系统会设置印章大小为标准尺寸。</p>
     * @param integer $Height <p>电子印章高度,单位px<br>参数不再启用，系统会设置印章大小为标准尺寸。</p>
     * @param string $Color <p>电子印章印章颜色(默认红色RED),RED-红色</p><p>系统目前只支持红色印章创建。</p>
     * @param string $SealHorizontalText <p>企业印章横向文字，最多可填15个汉字  (若超过印章最大宽度，优先压缩字间距，其次缩小字号)<br>横向文字的位置如下图中的&quot;印章横向文字在这里&quot;</p><p><img src="https://dyn.ess.tencent.cn/guide/capi/CreateSealByImage2.png" alt="image"></p>
     * @param string $SealChordText <p>暂时不支持下弦文字设置</p>
     * @param string $SealCentralType <p>系统生成的印章只支持：STAR</p>
     * @param string $FileToken <p>通过文件上传时，服务端生成的电子印章上传图片的token</p>
     * @param string $SealStyle <p>印章样式, 可以选择的样式如下: </p><ul><li>**circle**:(默认)圆形印章</li><li>**ellipse**:椭圆印章</li></ul>
     * @param string $SealSize <p>印章尺寸取值描述, 可以选择的尺寸如下: <ul><li> <strong>38_38</strong>: 圆形企业公章直径38mm, 当SealStyle是圆形的时候才有效</li> <li> <strong>40_40</strong>: 圆形企业公章直径40mm, 当SealStyle是圆形的时候才有效</li> <li> <strong>42_42</strong>（默认）: 圆形企业公章直径42mm, 当SealStyle是圆形的时候才有效</li> <li> <strong>45_45</strong>: 圆形企业印章直径45mm, 当SealStyle是圆形的时候才有效</li> <li> <strong>50_50</strong>: 圆形企业印章直径50mm, 当SealStyle是圆形的时候才有效</li> <li> <strong>58_58</strong>: 圆形企业印章直径58mm, 当SealStyle是圆形的时候才有效</li>  <li> <strong>40_30</strong>: 椭圆形印章40mm x 30mm, 当SealStyle是椭圆的时候才有效</li> <li> <strong>45_30</strong>: 椭圆形印章45mm x 30mm, 当SealStyle是椭圆的时候才有效</li> </ul></p>
     * @param string $TaxIdentifyCode <p>企业税号<br>注:</p><ul><li>1.印章类型SealType是INVOICE类型时，此参数才会生效</li><li>2.印章类型SealType是INVOICE类型，且该字段没有传入值或传入空时，会取该企业对应的统一社会信用代码作为默认的企业税号（<font color="red">如果是通过授权书授权方式认证的企业，此参数必传不能为空</font>）</li></ul>
     * @param string $SealDescription <p>印章描述内容</p>
     * @param array $Options <p>个性化配置字段，默认不传。</p>
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

        if (array_key_exists("TaxIdentifyCode",$param) and $param["TaxIdentifyCode"] !== null) {
            $this->TaxIdentifyCode = $param["TaxIdentifyCode"];
        }

        if (array_key_exists("SealDescription",$param) and $param["SealDescription"] !== null) {
            $this->SealDescription = $param["SealDescription"];
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = [];
            foreach ($param["Options"] as $key => $value){
                $obj = new Option();
                $obj->deserialize($value);
                array_push($this->Options, $obj);
            }
        }
    }
}
