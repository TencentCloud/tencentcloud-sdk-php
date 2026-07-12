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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IdCardOCRVerification返回参数结构体
 *
 * @method string getResult() 获取<p>认证结果码，收费情况如下。</p><ul><li>收费结果码：<br>0: 姓名和身份证号一致。<br>-1: 姓名和身份证号不一致。</li><li>不收费结果码：<br>-2: 非法身份证号（长度、校验位等不正确）。<br>-3: 非法姓名（长度、格式等不正确）。<br>-4: 证件库服务异常。<br>-5: 证件库中无此身份证记录。<br>-6: 权威比对系统升级中，请稍后再试。<br>-7: 认证次数超过当日限制。</li></ul>
 * @method void setResult(string $Result) 设置<p>认证结果码，收费情况如下。</p><ul><li>收费结果码：<br>0: 姓名和身份证号一致。<br>-1: 姓名和身份证号不一致。</li><li>不收费结果码：<br>-2: 非法身份证号（长度、校验位等不正确）。<br>-3: 非法姓名（长度、格式等不正确）。<br>-4: 证件库服务异常。<br>-5: 证件库中无此身份证记录。<br>-6: 权威比对系统升级中，请稍后再试。<br>-7: 认证次数超过当日限制。</li></ul>
 * @method string getDescription() 获取<p>业务结果描述。</p>
 * @method void setDescription(string $Description) 设置<p>业务结果描述。</p>
 * @method string getName() 获取<p>用于验证的姓名。</p>
 * @method void setName(string $Name) 设置<p>用于验证的姓名。</p>
 * @method string getIdCard() 获取<p>用于验证的身份证号。</p>
 * @method void setIdCard(string $IdCard) 设置<p>用于验证的身份证号。</p>
 * @method string getSex() 获取<p>OCR得到的性别。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSex(string $Sex) 设置<p>OCR得到的性别。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNation() 获取<p>OCR得到的民族。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNation(string $Nation) 设置<p>OCR得到的民族。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBirth() 获取<p>OCR得到的生日。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBirth(string $Birth) 设置<p>OCR得到的生日。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddress() 获取<p>OCR得到的地址。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置<p>OCR得到的地址。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPortrait() 获取<p>身份证头像照片的base64编码</p>
 * @method void setPortrait(string $Portrait) 设置<p>身份证头像照片的base64编码</p>
 * @method string getWarnings() 获取<p>告警信息。</p><ul><li>Code 告警码列表和释义：<br>  &#39;-9101&#39;：身份证边框不完整告警。<br>  &#39;-9102&#39;：身份证复印件告警。<br>  &#39;-9103&#39;：身份证翻拍告警。<br>  &#39;-9105&#39;：身份证框内遮挡告警。&#39;<br>  &#39;-9104&#39;：临时身份证告警。<br>  &#39;-9106&#39;：身份证 PS 告警（疑似存在PS痕迹）。<br>  &#39;-9107&#39;：身份证反光告警。<br>  &#39;-9108&#39;：身份证复印件告警（仅黑白复印件）。<br>  &#39;-9109&#39;：身份证有效日期不合法告警。<br>  &#39;-8001&#39;：图片模糊告警。</li><li>多个会用“|” 隔开，如 &quot;-9101|-9106|-9104&quot;。</li></ul>
 * @method void setWarnings(string $Warnings) 设置<p>告警信息。</p><ul><li>Code 告警码列表和释义：<br>  &#39;-9101&#39;：身份证边框不完整告警。<br>  &#39;-9102&#39;：身份证复印件告警。<br>  &#39;-9103&#39;：身份证翻拍告警。<br>  &#39;-9105&#39;：身份证框内遮挡告警。&#39;<br>  &#39;-9104&#39;：临时身份证告警。<br>  &#39;-9106&#39;：身份证 PS 告警（疑似存在PS痕迹）。<br>  &#39;-9107&#39;：身份证反光告警。<br>  &#39;-9108&#39;：身份证复印件告警（仅黑白复印件）。<br>  &#39;-9109&#39;：身份证有效日期不合法告警。<br>  &#39;-8001&#39;：图片模糊告警。</li><li>多个会用“|” 隔开，如 &quot;-9101|-9106|-9104&quot;。</li></ul>
 * @method float getQuality() 获取<p>图片质量分数。</p><ul><li>当请求Config中配置图片模糊告警该参数才有意义。</li><li><ul><li>取值范围（0～100），目前默认阈值是50分，低于50分会触发模糊告警。</li></ul></li></ul>
 * @method void setQuality(float $Quality) 设置<p>图片质量分数。</p><ul><li>当请求Config中配置图片模糊告警该参数才有意义。</li><li><ul><li>取值范围（0～100），目前默认阈值是50分，低于50分会触发模糊告警。</li></ul></li></ul>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class IdCardOCRVerificationResponse extends AbstractModel
{
    /**
     * @var string <p>认证结果码，收费情况如下。</p><ul><li>收费结果码：<br>0: 姓名和身份证号一致。<br>-1: 姓名和身份证号不一致。</li><li>不收费结果码：<br>-2: 非法身份证号（长度、校验位等不正确）。<br>-3: 非法姓名（长度、格式等不正确）。<br>-4: 证件库服务异常。<br>-5: 证件库中无此身份证记录。<br>-6: 权威比对系统升级中，请稍后再试。<br>-7: 认证次数超过当日限制。</li></ul>
     */
    public $Result;

    /**
     * @var string <p>业务结果描述。</p>
     */
    public $Description;

    /**
     * @var string <p>用于验证的姓名。</p>
     */
    public $Name;

    /**
     * @var string <p>用于验证的身份证号。</p>
     */
    public $IdCard;

    /**
     * @var string <p>OCR得到的性别。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sex;

    /**
     * @var string <p>OCR得到的民族。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nation;

    /**
     * @var string <p>OCR得到的生日。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Birth;

    /**
     * @var string <p>OCR得到的地址。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var string <p>身份证头像照片的base64编码</p>
     */
    public $Portrait;

    /**
     * @var string <p>告警信息。</p><ul><li>Code 告警码列表和释义：<br>  &#39;-9101&#39;：身份证边框不完整告警。<br>  &#39;-9102&#39;：身份证复印件告警。<br>  &#39;-9103&#39;：身份证翻拍告警。<br>  &#39;-9105&#39;：身份证框内遮挡告警。&#39;<br>  &#39;-9104&#39;：临时身份证告警。<br>  &#39;-9106&#39;：身份证 PS 告警（疑似存在PS痕迹）。<br>  &#39;-9107&#39;：身份证反光告警。<br>  &#39;-9108&#39;：身份证复印件告警（仅黑白复印件）。<br>  &#39;-9109&#39;：身份证有效日期不合法告警。<br>  &#39;-8001&#39;：图片模糊告警。</li><li>多个会用“|” 隔开，如 &quot;-9101|-9106|-9104&quot;。</li></ul>
     */
    public $Warnings;

    /**
     * @var float <p>图片质量分数。</p><ul><li>当请求Config中配置图片模糊告警该参数才有意义。</li><li><ul><li>取值范围（0～100），目前默认阈值是50分，低于50分会触发模糊告警。</li></ul></li></ul>
     */
    public $Quality;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Result <p>认证结果码，收费情况如下。</p><ul><li>收费结果码：<br>0: 姓名和身份证号一致。<br>-1: 姓名和身份证号不一致。</li><li>不收费结果码：<br>-2: 非法身份证号（长度、校验位等不正确）。<br>-3: 非法姓名（长度、格式等不正确）。<br>-4: 证件库服务异常。<br>-5: 证件库中无此身份证记录。<br>-6: 权威比对系统升级中，请稍后再试。<br>-7: 认证次数超过当日限制。</li></ul>
     * @param string $Description <p>业务结果描述。</p>
     * @param string $Name <p>用于验证的姓名。</p>
     * @param string $IdCard <p>用于验证的身份证号。</p>
     * @param string $Sex <p>OCR得到的性别。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Nation <p>OCR得到的民族。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Birth <p>OCR得到的生日。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Address <p>OCR得到的地址。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Portrait <p>身份证头像照片的base64编码</p>
     * @param string $Warnings <p>告警信息。</p><ul><li>Code 告警码列表和释义：<br>  &#39;-9101&#39;：身份证边框不完整告警。<br>  &#39;-9102&#39;：身份证复印件告警。<br>  &#39;-9103&#39;：身份证翻拍告警。<br>  &#39;-9105&#39;：身份证框内遮挡告警。&#39;<br>  &#39;-9104&#39;：临时身份证告警。<br>  &#39;-9106&#39;：身份证 PS 告警（疑似存在PS痕迹）。<br>  &#39;-9107&#39;：身份证反光告警。<br>  &#39;-9108&#39;：身份证复印件告警（仅黑白复印件）。<br>  &#39;-9109&#39;：身份证有效日期不合法告警。<br>  &#39;-8001&#39;：图片模糊告警。</li><li>多个会用“|” 隔开，如 &quot;-9101|-9106|-9104&quot;。</li></ul>
     * @param float $Quality <p>图片质量分数。</p><ul><li>当请求Config中配置图片模糊告警该参数才有意义。</li><li><ul><li>取值范围（0～100），目前默认阈值是50分，低于50分会触发模糊告警。</li></ul></li></ul>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Nation",$param) and $param["Nation"] !== null) {
            $this->Nation = $param["Nation"];
        }

        if (array_key_exists("Birth",$param) and $param["Birth"] !== null) {
            $this->Birth = $param["Birth"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Portrait",$param) and $param["Portrait"] !== null) {
            $this->Portrait = $param["Portrait"];
        }

        if (array_key_exists("Warnings",$param) and $param["Warnings"] !== null) {
            $this->Warnings = $param["Warnings"];
        }

        if (array_key_exists("Quality",$param) and $param["Quality"] !== null) {
            $this->Quality = $param["Quality"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
