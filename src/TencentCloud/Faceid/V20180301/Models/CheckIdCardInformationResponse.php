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
 * CheckIdCardInformation返回参数结构体
 *
 * @method float getSim() 获取<p>相似度。- 取值范围 [0.00, 100.00]。- 推荐相似度大于等于70时可判断为同一人（采用固定阈值70，误通过率为万分之一，不支持调整阈值）。</p>
 * @method void setSim(float $Sim) 设置<p>相似度。- 取值范围 [0.00, 100.00]。- 推荐相似度大于等于70时可判断为同一人（采用固定阈值70，误通过率为万分之一，不支持调整阈值）。</p>
 * @method string getResult() 获取<p>业务错误码。- 成功情况返回Success。- 错误情况请参考下方错误码 列表中FailedOperation部分</p>
 * @method void setResult(string $Result) 设置<p>业务错误码。- 成功情况返回Success。- 错误情况请参考下方错误码 列表中FailedOperation部分</p>
 * @method string getDescription() 获取<p>业务结果描述。</p>
 * @method void setDescription(string $Description) 设置<p>业务结果描述。</p>
 * @method string getName() 获取<p>姓名。</p>
 * @method void setName(string $Name) 设置<p>姓名。</p>
 * @method string getSex() 获取<p>性别。</p>
 * @method void setSex(string $Sex) 设置<p>性别。</p>
 * @method string getNation() 获取<p>民族。</p>
 * @method void setNation(string $Nation) 设置<p>民族。</p>
 * @method string getBirth() 获取<p>出生日期。</p>
 * @method void setBirth(string $Birth) 设置<p>出生日期。</p>
 * @method string getAddress() 获取<p>地址。</p>
 * @method void setAddress(string $Address) 设置<p>地址。</p>
 * @method string getIdNum() 获取<p>身份证号。</p>
 * @method void setIdNum(string $IdNum) 设置<p>身份证号。</p>
 * @method string getPortrait() 获取<p>身份证头像照片的base64编码，如果抠图失败会拿整张身份证做比对并返回空。</p>
 * @method void setPortrait(string $Portrait) 设置<p>身份证头像照片的base64编码，如果抠图失败会拿整张身份证做比对并返回空。</p>
 * @method string getWarnings() 获取<p>告警信息。</p><ul><li><p>当在Config中配置了告警信息会停止人像比对，Result返回错误（FailedOperation.OcrWarningOccurred）并有此告警信息。</p></li><li><p>Code 告警码列表和释义：<br>&#39;-9101&#39;：身份证边框不完整告警。<br>&#39;-9102&#39;：身份证复印件告警。<br>&#39;-9103&#39;：身份证翻拍告警。<br>&#39;-9105&#39;：身份证框内遮挡告警。<br>&#39;-9104&#39;：临时身份证告警。<br>&#39;-9106&#39;：身份证 PS 告警（疑似存在PS痕迹）。<br>&#39;-8001&#39;：图片模糊告警。</p></li><li><p>多个会用“|” 隔开，如 &quot;-9101|-9106|-9104&quot;。</p></li></ul>
 * @method void setWarnings(string $Warnings) 设置<p>告警信息。</p><ul><li><p>当在Config中配置了告警信息会停止人像比对，Result返回错误（FailedOperation.OcrWarningOccurred）并有此告警信息。</p></li><li><p>Code 告警码列表和释义：<br>&#39;-9101&#39;：身份证边框不完整告警。<br>&#39;-9102&#39;：身份证复印件告警。<br>&#39;-9103&#39;：身份证翻拍告警。<br>&#39;-9105&#39;：身份证框内遮挡告警。<br>&#39;-9104&#39;：临时身份证告警。<br>&#39;-9106&#39;：身份证 PS 告警（疑似存在PS痕迹）。<br>&#39;-8001&#39;：图片模糊告警。</p></li><li><p>多个会用“|” 隔开，如 &quot;-9101|-9106|-9104&quot;。</p></li></ul>
 * @method float getQuality() 获取<p>图片质量分数。</p><ul><li>当请求Config中配置图片模糊告警该参数才有意义。</li><li>取值范围（0～100），目前默认阈值是50分，低于50分会触发模糊告警。</li></ul>
 * @method void setQuality(float $Quality) 设置<p>图片质量分数。</p><ul><li>当请求Config中配置图片模糊告警该参数才有意义。</li><li>取值范围（0～100），目前默认阈值是50分，低于50分会触发模糊告警。</li></ul>
 * @method Encryption getEncryption() 获取<p>敏感数据加密信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncryption(Encryption $Encryption) 设置<p>敏感数据加密信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEncryptedBody() 获取<p>加密后的数据。</p>
 * @method void setEncryptedBody(string $EncryptedBody) 设置<p>加密后的数据。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CheckIdCardInformationResponse extends AbstractModel
{
    /**
     * @var float <p>相似度。- 取值范围 [0.00, 100.00]。- 推荐相似度大于等于70时可判断为同一人（采用固定阈值70，误通过率为万分之一，不支持调整阈值）。</p>
     */
    public $Sim;

    /**
     * @var string <p>业务错误码。- 成功情况返回Success。- 错误情况请参考下方错误码 列表中FailedOperation部分</p>
     */
    public $Result;

    /**
     * @var string <p>业务结果描述。</p>
     */
    public $Description;

    /**
     * @var string <p>姓名。</p>
     */
    public $Name;

    /**
     * @var string <p>性别。</p>
     */
    public $Sex;

    /**
     * @var string <p>民族。</p>
     */
    public $Nation;

    /**
     * @var string <p>出生日期。</p>
     */
    public $Birth;

    /**
     * @var string <p>地址。</p>
     */
    public $Address;

    /**
     * @var string <p>身份证号。</p>
     */
    public $IdNum;

    /**
     * @var string <p>身份证头像照片的base64编码，如果抠图失败会拿整张身份证做比对并返回空。</p>
     */
    public $Portrait;

    /**
     * @var string <p>告警信息。</p><ul><li><p>当在Config中配置了告警信息会停止人像比对，Result返回错误（FailedOperation.OcrWarningOccurred）并有此告警信息。</p></li><li><p>Code 告警码列表和释义：<br>&#39;-9101&#39;：身份证边框不完整告警。<br>&#39;-9102&#39;：身份证复印件告警。<br>&#39;-9103&#39;：身份证翻拍告警。<br>&#39;-9105&#39;：身份证框内遮挡告警。<br>&#39;-9104&#39;：临时身份证告警。<br>&#39;-9106&#39;：身份证 PS 告警（疑似存在PS痕迹）。<br>&#39;-8001&#39;：图片模糊告警。</p></li><li><p>多个会用“|” 隔开，如 &quot;-9101|-9106|-9104&quot;。</p></li></ul>
     */
    public $Warnings;

    /**
     * @var float <p>图片质量分数。</p><ul><li>当请求Config中配置图片模糊告警该参数才有意义。</li><li>取值范围（0～100），目前默认阈值是50分，低于50分会触发模糊告警。</li></ul>
     */
    public $Quality;

    /**
     * @var Encryption <p>敏感数据加密信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Encryption;

    /**
     * @var string <p>加密后的数据。</p>
     */
    public $EncryptedBody;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $Sim <p>相似度。- 取值范围 [0.00, 100.00]。- 推荐相似度大于等于70时可判断为同一人（采用固定阈值70，误通过率为万分之一，不支持调整阈值）。</p>
     * @param string $Result <p>业务错误码。- 成功情况返回Success。- 错误情况请参考下方错误码 列表中FailedOperation部分</p>
     * @param string $Description <p>业务结果描述。</p>
     * @param string $Name <p>姓名。</p>
     * @param string $Sex <p>性别。</p>
     * @param string $Nation <p>民族。</p>
     * @param string $Birth <p>出生日期。</p>
     * @param string $Address <p>地址。</p>
     * @param string $IdNum <p>身份证号。</p>
     * @param string $Portrait <p>身份证头像照片的base64编码，如果抠图失败会拿整张身份证做比对并返回空。</p>
     * @param string $Warnings <p>告警信息。</p><ul><li><p>当在Config中配置了告警信息会停止人像比对，Result返回错误（FailedOperation.OcrWarningOccurred）并有此告警信息。</p></li><li><p>Code 告警码列表和释义：<br>&#39;-9101&#39;：身份证边框不完整告警。<br>&#39;-9102&#39;：身份证复印件告警。<br>&#39;-9103&#39;：身份证翻拍告警。<br>&#39;-9105&#39;：身份证框内遮挡告警。<br>&#39;-9104&#39;：临时身份证告警。<br>&#39;-9106&#39;：身份证 PS 告警（疑似存在PS痕迹）。<br>&#39;-8001&#39;：图片模糊告警。</p></li><li><p>多个会用“|” 隔开，如 &quot;-9101|-9106|-9104&quot;。</p></li></ul>
     * @param float $Quality <p>图片质量分数。</p><ul><li>当请求Config中配置图片模糊告警该参数才有意义。</li><li>取值范围（0～100），目前默认阈值是50分，低于50分会触发模糊告警。</li></ul>
     * @param Encryption $Encryption <p>敏感数据加密信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EncryptedBody <p>加密后的数据。</p>
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
        if (array_key_exists("Sim",$param) and $param["Sim"] !== null) {
            $this->Sim = $param["Sim"];
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

        if (array_key_exists("IdNum",$param) and $param["IdNum"] !== null) {
            $this->IdNum = $param["IdNum"];
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

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = new Encryption();
            $this->Encryption->deserialize($param["Encryption"]);
        }

        if (array_key_exists("EncryptedBody",$param) and $param["EncryptedBody"] !== null) {
            $this->EncryptedBody = $param["EncryptedBody"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
