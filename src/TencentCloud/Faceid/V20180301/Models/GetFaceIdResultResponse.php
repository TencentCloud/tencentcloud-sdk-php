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
 * GetFaceIdResult返回参数结构体
 *
 * @method string getIdCard() 获取<p>身份证。</p>
 * @method void setIdCard(string $IdCard) 设置<p>身份证。</p>
 * @method string getName() 获取<p>姓名。</p>
 * @method void setName(string $Name) 设置<p>姓名。</p>
 * @method string getResult() 获取<p>业务核验结果。</p><ul><li>参考：https://cloud.tencent.com/document/product/1007/47912。</li></ul>
 * @method void setResult(string $Result) 设置<p>业务核验结果。</p><ul><li>参考：https://cloud.tencent.com/document/product/1007/47912。</li></ul>
 * @method string getDescription() 获取<p>业务核验描述。</p>
 * @method void setDescription(string $Description) 设置<p>业务核验描述。</p>
 * @method float getSimilarity() 获取<p>相似度。</p><ul><li>取值：0-100。</li><li>数值越大相似度越高。</li></ul>
 * @method void setSimilarity(float $Similarity) 设置<p>相似度。</p><ul><li>取值：0-100。</li><li>数值越大相似度越高。</li></ul>
 * @method string getVideoBase64() 获取<p>用户核验的视频base64。</p><ul><li>如果选择了使用cos，返回完整cos地址，如https://bucket.cos.ap-guangzhou.myqcloud.com/objectKey。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoBase64(string $VideoBase64) 设置<p>用户核验的视频base64。</p><ul><li>如果选择了使用cos，返回完整cos地址，如https://bucket.cos.ap-guangzhou.myqcloud.com/objectKey。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBestFrameBase64() 获取<p>用户核验视频的截帧base64。</p><ul><li>如果选择了使用cos，返回完整cos地址如https://bucket.cos.ap-guangzhou.myqcloud.com/objectKey。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBestFrameBase64(string $BestFrameBase64) 设置<p>用户核验视频的截帧base64。</p><ul><li>如果选择了使用cos，返回完整cos地址如https://bucket.cos.ap-guangzhou.myqcloud.com/objectKey。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtra() 获取<p>获取token时透传的信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtra(string $Extra) 设置<p>获取token时透传的信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceInfoTag() 获取<p>plus版：描述当前请求所在设备的风险标签。</p><ul><li>详情如下：<br>01-设备疑似被Root/设备疑似越狱。<br>02-设备疑似被注入。<br>03-设备疑似为模拟器。<br>04-设备疑似存在风险操作。<br>05-摄像头疑似被劫持。<br>06-疑似黑产设备。<br>null-无设备风险。</li><li>增强版：此字段不生效，默认为null。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceInfoTag(string $DeviceInfoTag) 设置<p>plus版：描述当前请求所在设备的风险标签。</p><ul><li>详情如下：<br>01-设备疑似被Root/设备疑似越狱。<br>02-设备疑似被注入。<br>03-设备疑似为模拟器。<br>04-设备疑似存在风险操作。<br>05-摄像头疑似被劫持。<br>06-疑似黑产设备。<br>null-无设备风险。</li><li>增强版：此字段不生效，默认为null。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskInfoTag() 获取<p>行为风险标签。</p><ul><li>仅错误码返回1007（设备疑似被劫持）时返回风险标签。</li><li>标签说明：<br>02：攻击风险</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskInfoTag(string $RiskInfoTag) 设置<p>行为风险标签。</p><ul><li>仅错误码返回1007（设备疑似被劫持）时返回风险标签。</li><li>标签说明：<br>02：攻击风险</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLivenessInfoTag() 获取<p>plus版：描述当前请求活体阶段被拒绝的详细原因。</p><ul><li>详情如下：<br>01-用户全程闭眼。<br>02-用户未完成指定动作。<br>03-疑似翻拍攻击。<br>04-疑似合成图片。<br>05-疑似合成视频。<br>06-疑似合成动作。<br>07-疑似黑产模板。<br>08-疑似存在水印。<br>09-反光校验未通过。<br>10-最佳帧校验未通过。<br>11-人脸质量过差。<br>12-人脸距离不匹配。<br>13-疑似对抗样本攻击。<br>null-无。</li><li>增强版：此字段不生效，默认为null。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLivenessInfoTag(string $LivenessInfoTag) 设置<p>plus版：描述当前请求活体阶段被拒绝的详细原因。</p><ul><li>详情如下：<br>01-用户全程闭眼。<br>02-用户未完成指定动作。<br>03-疑似翻拍攻击。<br>04-疑似合成图片。<br>05-疑似合成视频。<br>06-疑似合成动作。<br>07-疑似黑产模板。<br>08-疑似存在水印。<br>09-反光校验未通过。<br>10-最佳帧校验未通过。<br>11-人脸质量过差。<br>12-人脸距离不匹配。<br>13-疑似对抗样本攻击。<br>null-无。</li><li>增强版：此字段不生效，默认为null。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceInfoLevel() 获取<p>plus版：描述当前请求所在设备的风险等级，共4级。</p><ul><li>详情如下：<br>1 - 安全。<br>2 - 低风险。<br>3 - 中风险。<br>4 - 高危。<br>null - 未获取到风险等级。</li><li>增强版：此字段不生效，默认为null。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceInfoLevel(string $DeviceInfoLevel) 设置<p>plus版：描述当前请求所在设备的风险等级，共4级。</p><ul><li>详情如下：<br>1 - 安全。<br>2 - 低风险。<br>3 - 中风险。<br>4 - 高危。<br>null - 未获取到风险等级。</li><li>增强版：此字段不生效，默认为null。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Encryption getEncryption() 获取<p>敏感数据加密信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncryption(Encryption $Encryption) 设置<p>敏感数据加密信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEncryptedBody() 获取<p>加密后的数据。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncryptedBody(string $EncryptedBody) 设置<p>加密后的数据。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdCardFrontBase64() 获取<p>用户核验的身份证人像页base64</p>
 * @method void setIdCardFrontBase64(string $IdCardFrontBase64) 设置<p>用户核验的身份证人像页base64</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetFaceIdResultResponse extends AbstractModel
{
    /**
     * @var string <p>身份证。</p>
     */
    public $IdCard;

    /**
     * @var string <p>姓名。</p>
     */
    public $Name;

    /**
     * @var string <p>业务核验结果。</p><ul><li>参考：https://cloud.tencent.com/document/product/1007/47912。</li></ul>
     */
    public $Result;

    /**
     * @var string <p>业务核验描述。</p>
     */
    public $Description;

    /**
     * @var float <p>相似度。</p><ul><li>取值：0-100。</li><li>数值越大相似度越高。</li></ul>
     */
    public $Similarity;

    /**
     * @var string <p>用户核验的视频base64。</p><ul><li>如果选择了使用cos，返回完整cos地址，如https://bucket.cos.ap-guangzhou.myqcloud.com/objectKey。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoBase64;

    /**
     * @var string <p>用户核验视频的截帧base64。</p><ul><li>如果选择了使用cos，返回完整cos地址如https://bucket.cos.ap-guangzhou.myqcloud.com/objectKey。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BestFrameBase64;

    /**
     * @var string <p>获取token时透传的信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Extra;

    /**
     * @var string <p>plus版：描述当前请求所在设备的风险标签。</p><ul><li>详情如下：<br>01-设备疑似被Root/设备疑似越狱。<br>02-设备疑似被注入。<br>03-设备疑似为模拟器。<br>04-设备疑似存在风险操作。<br>05-摄像头疑似被劫持。<br>06-疑似黑产设备。<br>null-无设备风险。</li><li>增强版：此字段不生效，默认为null。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceInfoTag;

    /**
     * @var string <p>行为风险标签。</p><ul><li>仅错误码返回1007（设备疑似被劫持）时返回风险标签。</li><li>标签说明：<br>02：攻击风险</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskInfoTag;

    /**
     * @var string <p>plus版：描述当前请求活体阶段被拒绝的详细原因。</p><ul><li>详情如下：<br>01-用户全程闭眼。<br>02-用户未完成指定动作。<br>03-疑似翻拍攻击。<br>04-疑似合成图片。<br>05-疑似合成视频。<br>06-疑似合成动作。<br>07-疑似黑产模板。<br>08-疑似存在水印。<br>09-反光校验未通过。<br>10-最佳帧校验未通过。<br>11-人脸质量过差。<br>12-人脸距离不匹配。<br>13-疑似对抗样本攻击。<br>null-无。</li><li>增强版：此字段不生效，默认为null。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LivenessInfoTag;

    /**
     * @var string <p>plus版：描述当前请求所在设备的风险等级，共4级。</p><ul><li>详情如下：<br>1 - 安全。<br>2 - 低风险。<br>3 - 中风险。<br>4 - 高危。<br>null - 未获取到风险等级。</li><li>增强版：此字段不生效，默认为null。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceInfoLevel;

    /**
     * @var Encryption <p>敏感数据加密信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Encryption;

    /**
     * @var string <p>加密后的数据。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EncryptedBody;

    /**
     * @var string <p>用户核验的身份证人像页base64</p>
     */
    public $IdCardFrontBase64;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $IdCard <p>身份证。</p>
     * @param string $Name <p>姓名。</p>
     * @param string $Result <p>业务核验结果。</p><ul><li>参考：https://cloud.tencent.com/document/product/1007/47912。</li></ul>
     * @param string $Description <p>业务核验描述。</p>
     * @param float $Similarity <p>相似度。</p><ul><li>取值：0-100。</li><li>数值越大相似度越高。</li></ul>
     * @param string $VideoBase64 <p>用户核验的视频base64。</p><ul><li>如果选择了使用cos，返回完整cos地址，如https://bucket.cos.ap-guangzhou.myqcloud.com/objectKey。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BestFrameBase64 <p>用户核验视频的截帧base64。</p><ul><li>如果选择了使用cos，返回完整cos地址如https://bucket.cos.ap-guangzhou.myqcloud.com/objectKey。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Extra <p>获取token时透传的信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceInfoTag <p>plus版：描述当前请求所在设备的风险标签。</p><ul><li>详情如下：<br>01-设备疑似被Root/设备疑似越狱。<br>02-设备疑似被注入。<br>03-设备疑似为模拟器。<br>04-设备疑似存在风险操作。<br>05-摄像头疑似被劫持。<br>06-疑似黑产设备。<br>null-无设备风险。</li><li>增强版：此字段不生效，默认为null。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskInfoTag <p>行为风险标签。</p><ul><li>仅错误码返回1007（设备疑似被劫持）时返回风险标签。</li><li>标签说明：<br>02：攻击风险</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LivenessInfoTag <p>plus版：描述当前请求活体阶段被拒绝的详细原因。</p><ul><li>详情如下：<br>01-用户全程闭眼。<br>02-用户未完成指定动作。<br>03-疑似翻拍攻击。<br>04-疑似合成图片。<br>05-疑似合成视频。<br>06-疑似合成动作。<br>07-疑似黑产模板。<br>08-疑似存在水印。<br>09-反光校验未通过。<br>10-最佳帧校验未通过。<br>11-人脸质量过差。<br>12-人脸距离不匹配。<br>13-疑似对抗样本攻击。<br>null-无。</li><li>增强版：此字段不生效，默认为null。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceInfoLevel <p>plus版：描述当前请求所在设备的风险等级，共4级。</p><ul><li>详情如下：<br>1 - 安全。<br>2 - 低风险。<br>3 - 中风险。<br>4 - 高危。<br>null - 未获取到风险等级。</li><li>增强版：此字段不生效，默认为null。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Encryption $Encryption <p>敏感数据加密信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EncryptedBody <p>加密后的数据。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdCardFrontBase64 <p>用户核验的身份证人像页base64</p>
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
        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Similarity",$param) and $param["Similarity"] !== null) {
            $this->Similarity = $param["Similarity"];
        }

        if (array_key_exists("VideoBase64",$param) and $param["VideoBase64"] !== null) {
            $this->VideoBase64 = $param["VideoBase64"];
        }

        if (array_key_exists("BestFrameBase64",$param) and $param["BestFrameBase64"] !== null) {
            $this->BestFrameBase64 = $param["BestFrameBase64"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("DeviceInfoTag",$param) and $param["DeviceInfoTag"] !== null) {
            $this->DeviceInfoTag = $param["DeviceInfoTag"];
        }

        if (array_key_exists("RiskInfoTag",$param) and $param["RiskInfoTag"] !== null) {
            $this->RiskInfoTag = $param["RiskInfoTag"];
        }

        if (array_key_exists("LivenessInfoTag",$param) and $param["LivenessInfoTag"] !== null) {
            $this->LivenessInfoTag = $param["LivenessInfoTag"];
        }

        if (array_key_exists("DeviceInfoLevel",$param) and $param["DeviceInfoLevel"] !== null) {
            $this->DeviceInfoLevel = $param["DeviceInfoLevel"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = new Encryption();
            $this->Encryption->deserialize($param["Encryption"]);
        }

        if (array_key_exists("EncryptedBody",$param) and $param["EncryptedBody"] !== null) {
            $this->EncryptedBody = $param["EncryptedBody"];
        }

        if (array_key_exists("IdCardFrontBase64",$param) and $param["IdCardFrontBase64"] !== null) {
            $this->IdCardFrontBase64 = $param["IdCardFrontBase64"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
