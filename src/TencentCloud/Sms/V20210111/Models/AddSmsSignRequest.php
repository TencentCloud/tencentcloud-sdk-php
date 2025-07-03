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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddSmsSign请求参数结构体
 *
 * @method string getSignName() 获取签名名称。
注：不能重复申请已通过或待审核的签名。
 * @method void setSignName(string $SignName) 设置签名名称。
注：不能重复申请已通过或待审核的签名。
 * @method integer getSignType() 获取签名类型。其中每种类型后面标注了其可选的 DocumentType（证明类型）：
0：公司，可选 DocumentType 有（0，1）。
1：APP，可选 DocumentType 有（0，1，2，3，4） 。
4：商标，可选 DocumentType 有（7）。
5：政府/机关事业单位/其他机构，可选 DocumentType 有（2，3）。
注1：必须按照对应关系选择证明类型，否则会审核失败。
注2：签名类型2（网站）、3（公众号）、6（小程序）已不再支持，具体可参考 [关于腾讯云短信签名申请规则更新的公告](https://cloud.tencent.com/document/product/382/116397)。
 * @method void setSignType(integer $SignType) 设置签名类型。其中每种类型后面标注了其可选的 DocumentType（证明类型）：
0：公司，可选 DocumentType 有（0，1）。
1：APP，可选 DocumentType 有（0，1，2，3，4） 。
4：商标，可选 DocumentType 有（7）。
5：政府/机关事业单位/其他机构，可选 DocumentType 有（2，3）。
注1：必须按照对应关系选择证明类型，否则会审核失败。
注2：签名类型2（网站）、3（公众号）、6（小程序）已不再支持，具体可参考 [关于腾讯云短信签名申请规则更新的公告](https://cloud.tencent.com/document/product/382/116397)。
 * @method integer getDocumentType() 获取证明类型：
0：三证合一。
1：企业营业执照。
2：组织机构代码证书。
3：社会信用代码证书。
4：应用后台管理截图（个人开发APP）。
7：商标注册书。
注：证明类型5（网站备案后台截图）、6（小程序设置页面截图）、8（公众号设置页面截图）已不再支持，具体可参考 [关于腾讯云短信签名申请规则更新的公告](https://cloud.tencent.com/document/product/382/116397)。
 * @method void setDocumentType(integer $DocumentType) 设置证明类型：
0：三证合一。
1：企业营业执照。
2：组织机构代码证书。
3：社会信用代码证书。
4：应用后台管理截图（个人开发APP）。
7：商标注册书。
注：证明类型5（网站备案后台截图）、6（小程序设置页面截图）、8（公众号设置页面截图）已不再支持，具体可参考 [关于腾讯云短信签名申请规则更新的公告](https://cloud.tencent.com/document/product/382/116397)。
 * @method integer getInternational() 获取是否国际/港澳台短信：
0：表示国内短信。
1：表示国际/港澳台短信。
 * @method void setInternational(integer $International) 设置是否国际/港澳台短信：
0：表示国内短信。
1：表示国际/港澳台短信。
 * @method integer getSignPurpose() 获取签名用途：
0：自用。
1：他用。
 * @method void setSignPurpose(integer $SignPurpose) 设置签名用途：
0：自用。
1：他用。
 * @method string getProofImage() 获取签名对应的资质证明图片需先进行 base64 编码格式转换，将转换后的字符串去掉前缀`data:image/jpeg;base64,`再赋值给该参数。
 * @method void setProofImage(string $ProofImage) 设置签名对应的资质证明图片需先进行 base64 编码格式转换，将转换后的字符串去掉前缀`data:image/jpeg;base64,`再赋值给该参数。
 * @method string getCommissionImage() 获取委托授权证明。选择 SignPurpose 为他用之后需要提交委托的授权证明。
图片需先进行 base64 编码格式转换，将转换后的字符串去掉前缀`data:image/jpeg;base64,`再赋值给该参数。
注：只有 SignPurpose 在选择为 1（他用）时，这个字段才会生效。
 * @method void setCommissionImage(string $CommissionImage) 设置委托授权证明。选择 SignPurpose 为他用之后需要提交委托的授权证明。
图片需先进行 base64 编码格式转换，将转换后的字符串去掉前缀`data:image/jpeg;base64,`再赋值给该参数。
注：只有 SignPurpose 在选择为 1（他用）时，这个字段才会生效。
 * @method string getRemark() 获取签名的申请备注。
 * @method void setRemark(string $Remark) 设置签名的申请备注。
 * @method integer getQualificationId() 获取已审核通过的国内短信的资质 ID。资质 ID 信息可前往国内短信的 [实名资质管理](https://console.cloud.tencent.com/smsv2/enterprise) 页查看。<dx-alert infotype="notice" title="说明"><ul><li>国内短信需填写资质ID，国际短信无需填写。</li></ul></dx-alert>
 * @method void setQualificationId(integer $QualificationId) 设置已审核通过的国内短信的资质 ID。资质 ID 信息可前往国内短信的 [实名资质管理](https://console.cloud.tencent.com/smsv2/enterprise) 页查看。<dx-alert infotype="notice" title="说明"><ul><li>国内短信需填写资质ID，国际短信无需填写。</li></ul></dx-alert>
 */
class AddSmsSignRequest extends AbstractModel
{
    /**
     * @var string 签名名称。
注：不能重复申请已通过或待审核的签名。
     */
    public $SignName;

    /**
     * @var integer 签名类型。其中每种类型后面标注了其可选的 DocumentType（证明类型）：
0：公司，可选 DocumentType 有（0，1）。
1：APP，可选 DocumentType 有（0，1，2，3，4） 。
4：商标，可选 DocumentType 有（7）。
5：政府/机关事业单位/其他机构，可选 DocumentType 有（2，3）。
注1：必须按照对应关系选择证明类型，否则会审核失败。
注2：签名类型2（网站）、3（公众号）、6（小程序）已不再支持，具体可参考 [关于腾讯云短信签名申请规则更新的公告](https://cloud.tencent.com/document/product/382/116397)。
     */
    public $SignType;

    /**
     * @var integer 证明类型：
0：三证合一。
1：企业营业执照。
2：组织机构代码证书。
3：社会信用代码证书。
4：应用后台管理截图（个人开发APP）。
7：商标注册书。
注：证明类型5（网站备案后台截图）、6（小程序设置页面截图）、8（公众号设置页面截图）已不再支持，具体可参考 [关于腾讯云短信签名申请规则更新的公告](https://cloud.tencent.com/document/product/382/116397)。
     */
    public $DocumentType;

    /**
     * @var integer 是否国际/港澳台短信：
0：表示国内短信。
1：表示国际/港澳台短信。
     */
    public $International;

    /**
     * @var integer 签名用途：
0：自用。
1：他用。
     */
    public $SignPurpose;

    /**
     * @var string 签名对应的资质证明图片需先进行 base64 编码格式转换，将转换后的字符串去掉前缀`data:image/jpeg;base64,`再赋值给该参数。
     */
    public $ProofImage;

    /**
     * @var string 委托授权证明。选择 SignPurpose 为他用之后需要提交委托的授权证明。
图片需先进行 base64 编码格式转换，将转换后的字符串去掉前缀`data:image/jpeg;base64,`再赋值给该参数。
注：只有 SignPurpose 在选择为 1（他用）时，这个字段才会生效。
     */
    public $CommissionImage;

    /**
     * @var string 签名的申请备注。
     */
    public $Remark;

    /**
     * @var integer 已审核通过的国内短信的资质 ID。资质 ID 信息可前往国内短信的 [实名资质管理](https://console.cloud.tencent.com/smsv2/enterprise) 页查看。<dx-alert infotype="notice" title="说明"><ul><li>国内短信需填写资质ID，国际短信无需填写。</li></ul></dx-alert>
     */
    public $QualificationId;

    /**
     * @param string $SignName 签名名称。
注：不能重复申请已通过或待审核的签名。
     * @param integer $SignType 签名类型。其中每种类型后面标注了其可选的 DocumentType（证明类型）：
0：公司，可选 DocumentType 有（0，1）。
1：APP，可选 DocumentType 有（0，1，2，3，4） 。
4：商标，可选 DocumentType 有（7）。
5：政府/机关事业单位/其他机构，可选 DocumentType 有（2，3）。
注1：必须按照对应关系选择证明类型，否则会审核失败。
注2：签名类型2（网站）、3（公众号）、6（小程序）已不再支持，具体可参考 [关于腾讯云短信签名申请规则更新的公告](https://cloud.tencent.com/document/product/382/116397)。
     * @param integer $DocumentType 证明类型：
0：三证合一。
1：企业营业执照。
2：组织机构代码证书。
3：社会信用代码证书。
4：应用后台管理截图（个人开发APP）。
7：商标注册书。
注：证明类型5（网站备案后台截图）、6（小程序设置页面截图）、8（公众号设置页面截图）已不再支持，具体可参考 [关于腾讯云短信签名申请规则更新的公告](https://cloud.tencent.com/document/product/382/116397)。
     * @param integer $International 是否国际/港澳台短信：
0：表示国内短信。
1：表示国际/港澳台短信。
     * @param integer $SignPurpose 签名用途：
0：自用。
1：他用。
     * @param string $ProofImage 签名对应的资质证明图片需先进行 base64 编码格式转换，将转换后的字符串去掉前缀`data:image/jpeg;base64,`再赋值给该参数。
     * @param string $CommissionImage 委托授权证明。选择 SignPurpose 为他用之后需要提交委托的授权证明。
图片需先进行 base64 编码格式转换，将转换后的字符串去掉前缀`data:image/jpeg;base64,`再赋值给该参数。
注：只有 SignPurpose 在选择为 1（他用）时，这个字段才会生效。
     * @param string $Remark 签名的申请备注。
     * @param integer $QualificationId 已审核通过的国内短信的资质 ID。资质 ID 信息可前往国内短信的 [实名资质管理](https://console.cloud.tencent.com/smsv2/enterprise) 页查看。<dx-alert infotype="notice" title="说明"><ul><li>国内短信需填写资质ID，国际短信无需填写。</li></ul></dx-alert>
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

        if (array_key_exists("SignPurpose",$param) and $param["SignPurpose"] !== null) {
            $this->SignPurpose = $param["SignPurpose"];
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
