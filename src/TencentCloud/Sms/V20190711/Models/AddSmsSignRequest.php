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
namespace TencentCloud\Sms\V20190711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddSmsSign请求参数结构体
 *
 * @method string getSignName() 获取<p>签名名称。<br>注：不能重复申请已通过或待审核的签名。</p>
 * @method void setSignName(string $SignName) 设置<p>签名名称。<br>注：不能重复申请已通过或待审核的签名。</p>
 * @method integer getSignType() 获取<p>签名类型。其中每种类型后面标注了其可选的 DocumentType（证明类型）：<br>0：公司，可选 DocumentType 有（0，1）。<br>1：APP，可选 DocumentType 有（0，1，2，3，4） 。<br>4：商标，可选 DocumentType 有（7）。<br>5：政府/机关事业单位/其他机构，可选 DocumentType 有（2，3）。<br>注1：必须按照对应关系选择证明类型，否则会审核失败。<br>注2：签名类型2（网站）、3（公众号）、6（小程序）已不再支持，具体可参考 <a href="https://cloud.tencent.com/document/product/382/116397">关于腾讯云短信签名申请规则更新的公告</a>。</p>
 * @method void setSignType(integer $SignType) 设置<p>签名类型。其中每种类型后面标注了其可选的 DocumentType（证明类型）：<br>0：公司，可选 DocumentType 有（0，1）。<br>1：APP，可选 DocumentType 有（0，1，2，3，4） 。<br>4：商标，可选 DocumentType 有（7）。<br>5：政府/机关事业单位/其他机构，可选 DocumentType 有（2，3）。<br>注1：必须按照对应关系选择证明类型，否则会审核失败。<br>注2：签名类型2（网站）、3（公众号）、6（小程序）已不再支持，具体可参考 <a href="https://cloud.tencent.com/document/product/382/116397">关于腾讯云短信签名申请规则更新的公告</a>。</p>
 * @method integer getDocumentType() 获取<p>证明类型：<br>0：三证合一。<br>1：企业营业执照。<br>2：组织机构代码证书。<br>3：社会信用代码证书。<br>4：应用后台管理截图（个人开发APP）。<br>7：商标注册书。<br>注：证明类型5（网站备案后台截图）、6（小程序设置页面截图）、8（公众号设置页面截图）已不再支持，具体可参考 <a href="https://cloud.tencent.com/document/product/382/116397">关于腾讯云短信签名申请规则更新的公告</a>。</p>
 * @method void setDocumentType(integer $DocumentType) 设置<p>证明类型：<br>0：三证合一。<br>1：企业营业执照。<br>2：组织机构代码证书。<br>3：社会信用代码证书。<br>4：应用后台管理截图（个人开发APP）。<br>7：商标注册书。<br>注：证明类型5（网站备案后台截图）、6（小程序设置页面截图）、8（公众号设置页面截图）已不再支持，具体可参考 <a href="https://cloud.tencent.com/document/product/382/116397">关于腾讯云短信签名申请规则更新的公告</a>。</p>
 * @method integer getInternational() 获取<p>是否国际/港澳台短信：<br>0：表示国内短信。<br>1：表示国际/港澳台短信。</p>
 * @method void setInternational(integer $International) 设置<p>是否国际/港澳台短信：<br>0：表示国内短信。<br>1：表示国际/港澳台短信。</p>
 * @method integer getUsedMethod() 获取<p>签名用途：<br>0：自用。<br>1：他用。</p>
 * @method void setUsedMethod(integer $UsedMethod) 设置<p>签名用途：<br>0：自用。<br>1：他用。</p>
 * @method string getProofImage() 获取<p>签名对应的资质证明图片需先进行 base64 编码格式转换，将转换后的字符串去掉前缀<code>data:image/jpeg;base64,</code>再赋值给该参数。</p>
 * @method void setProofImage(string $ProofImage) 设置<p>签名对应的资质证明图片需先进行 base64 编码格式转换，将转换后的字符串去掉前缀<code>data:image/jpeg;base64,</code>再赋值给该参数。</p>
 * @method string getCommissionImage() 获取<p>委托授权证明。选择 UsedMethod 为他用之后需要提交委托的授权证明。<br>图片需先进行 base64 编码格式转换，将转换后的字符串去掉前缀<code>data:image/jpeg;base64,</code>再赋值给该参数。<br>注：只有 UsedMethod 在选择为 1（他用）时，这个字段才会生效。</p>
 * @method void setCommissionImage(string $CommissionImage) 设置<p>委托授权证明。选择 UsedMethod 为他用之后需要提交委托的授权证明。<br>图片需先进行 base64 编码格式转换，将转换后的字符串去掉前缀<code>data:image/jpeg;base64,</code>再赋值给该参数。<br>注：只有 UsedMethod 在选择为 1（他用）时，这个字段才会生效。</p>
 * @method string getRemark() 获取<p>签名的申请备注。</p>
 * @method void setRemark(string $Remark) 设置<p>签名的申请备注。</p>
 * @method integer getQualificationId() 获取<p>已审核通过的国内短信的资质 ID。资质 ID 信息可前往国内短信的 <a href="https://console.cloud.tencent.com/smsv2/enterprise">实名资质管理</a> 页查看。<blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">说明</div>        <div class="rno-document-tip-desc"><ul><li>国内短信需填写资质ID，国际短信无需填写。</li></ul></div>    </div></blockquote></p>
 * @method void setQualificationId(integer $QualificationId) 设置<p>已审核通过的国内短信的资质 ID。资质 ID 信息可前往国内短信的 <a href="https://console.cloud.tencent.com/smsv2/enterprise">实名资质管理</a> 页查看。<blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">说明</div>        <div class="rno-document-tip-desc"><ul><li>国内短信需填写资质ID，国际短信无需填写。</li></ul></div>    </div></blockquote></p>
 */
class AddSmsSignRequest extends AbstractModel
{
    /**
     * @var string <p>签名名称。<br>注：不能重复申请已通过或待审核的签名。</p>
     */
    public $SignName;

    /**
     * @var integer <p>签名类型。其中每种类型后面标注了其可选的 DocumentType（证明类型）：<br>0：公司，可选 DocumentType 有（0，1）。<br>1：APP，可选 DocumentType 有（0，1，2，3，4） 。<br>4：商标，可选 DocumentType 有（7）。<br>5：政府/机关事业单位/其他机构，可选 DocumentType 有（2，3）。<br>注1：必须按照对应关系选择证明类型，否则会审核失败。<br>注2：签名类型2（网站）、3（公众号）、6（小程序）已不再支持，具体可参考 <a href="https://cloud.tencent.com/document/product/382/116397">关于腾讯云短信签名申请规则更新的公告</a>。</p>
     */
    public $SignType;

    /**
     * @var integer <p>证明类型：<br>0：三证合一。<br>1：企业营业执照。<br>2：组织机构代码证书。<br>3：社会信用代码证书。<br>4：应用后台管理截图（个人开发APP）。<br>7：商标注册书。<br>注：证明类型5（网站备案后台截图）、6（小程序设置页面截图）、8（公众号设置页面截图）已不再支持，具体可参考 <a href="https://cloud.tencent.com/document/product/382/116397">关于腾讯云短信签名申请规则更新的公告</a>。</p>
     */
    public $DocumentType;

    /**
     * @var integer <p>是否国际/港澳台短信：<br>0：表示国内短信。<br>1：表示国际/港澳台短信。</p>
     */
    public $International;

    /**
     * @var integer <p>签名用途：<br>0：自用。<br>1：他用。</p>
     */
    public $UsedMethod;

    /**
     * @var string <p>签名对应的资质证明图片需先进行 base64 编码格式转换，将转换后的字符串去掉前缀<code>data:image/jpeg;base64,</code>再赋值给该参数。</p>
     */
    public $ProofImage;

    /**
     * @var string <p>委托授权证明。选择 UsedMethod 为他用之后需要提交委托的授权证明。<br>图片需先进行 base64 编码格式转换，将转换后的字符串去掉前缀<code>data:image/jpeg;base64,</code>再赋值给该参数。<br>注：只有 UsedMethod 在选择为 1（他用）时，这个字段才会生效。</p>
     */
    public $CommissionImage;

    /**
     * @var string <p>签名的申请备注。</p>
     */
    public $Remark;

    /**
     * @var integer <p>已审核通过的国内短信的资质 ID。资质 ID 信息可前往国内短信的 <a href="https://console.cloud.tencent.com/smsv2/enterprise">实名资质管理</a> 页查看。<blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">说明</div>        <div class="rno-document-tip-desc"><ul><li>国内短信需填写资质ID，国际短信无需填写。</li></ul></div>    </div></blockquote></p>
     */
    public $QualificationId;

    /**
     * @param string $SignName <p>签名名称。<br>注：不能重复申请已通过或待审核的签名。</p>
     * @param integer $SignType <p>签名类型。其中每种类型后面标注了其可选的 DocumentType（证明类型）：<br>0：公司，可选 DocumentType 有（0，1）。<br>1：APP，可选 DocumentType 有（0，1，2，3，4） 。<br>4：商标，可选 DocumentType 有（7）。<br>5：政府/机关事业单位/其他机构，可选 DocumentType 有（2，3）。<br>注1：必须按照对应关系选择证明类型，否则会审核失败。<br>注2：签名类型2（网站）、3（公众号）、6（小程序）已不再支持，具体可参考 <a href="https://cloud.tencent.com/document/product/382/116397">关于腾讯云短信签名申请规则更新的公告</a>。</p>
     * @param integer $DocumentType <p>证明类型：<br>0：三证合一。<br>1：企业营业执照。<br>2：组织机构代码证书。<br>3：社会信用代码证书。<br>4：应用后台管理截图（个人开发APP）。<br>7：商标注册书。<br>注：证明类型5（网站备案后台截图）、6（小程序设置页面截图）、8（公众号设置页面截图）已不再支持，具体可参考 <a href="https://cloud.tencent.com/document/product/382/116397">关于腾讯云短信签名申请规则更新的公告</a>。</p>
     * @param integer $International <p>是否国际/港澳台短信：<br>0：表示国内短信。<br>1：表示国际/港澳台短信。</p>
     * @param integer $UsedMethod <p>签名用途：<br>0：自用。<br>1：他用。</p>
     * @param string $ProofImage <p>签名对应的资质证明图片需先进行 base64 编码格式转换，将转换后的字符串去掉前缀<code>data:image/jpeg;base64,</code>再赋值给该参数。</p>
     * @param string $CommissionImage <p>委托授权证明。选择 UsedMethod 为他用之后需要提交委托的授权证明。<br>图片需先进行 base64 编码格式转换，将转换后的字符串去掉前缀<code>data:image/jpeg;base64,</code>再赋值给该参数。<br>注：只有 UsedMethod 在选择为 1（他用）时，这个字段才会生效。</p>
     * @param string $Remark <p>签名的申请备注。</p>
     * @param integer $QualificationId <p>已审核通过的国内短信的资质 ID。资质 ID 信息可前往国内短信的 <a href="https://console.cloud.tencent.com/smsv2/enterprise">实名资质管理</a> 页查看。<blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">说明</div>        <div class="rno-document-tip-desc"><ul><li>国内短信需填写资质ID，国际短信无需填写。</li></ul></div>    </div></blockquote></p>
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
        if (array_key_exists("SignName",$param) and $param["SignName"] !== null) {
            $this->SignName = $param["SignName"];
        }

        if (array_key_exists("SignType",$param) and $param["SignType"] !== null) {
            $this->SignType = $param["SignType"];
        }

        if (array_key_exists("DocumentType",$param) and $param["DocumentType"] !== null) {
            $this->DocumentType = $param["DocumentType"];
        }

        if (array_key_exists("International",$param) and $param["International"] !== null) {
            $this->International = $param["International"];
        }

        if (array_key_exists("UsedMethod",$param) and $param["UsedMethod"] !== null) {
            $this->UsedMethod = $param["UsedMethod"];
        }

        if (array_key_exists("ProofImage",$param) and $param["ProofImage"] !== null) {
            $this->ProofImage = $param["ProofImage"];
        }

        if (array_key_exists("CommissionImage",$param) and $param["CommissionImage"] !== null) {
            $this->CommissionImage = $param["CommissionImage"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("QualificationId",$param) and $param["QualificationId"] !== null) {
            $this->QualificationId = $param["QualificationId"];
        }
    }
}
