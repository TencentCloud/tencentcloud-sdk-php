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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetFaceIdResult返回参数结构体
 *
 * @method string getIdCard() 获取身份证
 * @method void setIdCard(string $IdCard) 设置身份证
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method string getResult() 获取业务核验结果，参考https://cloud.tencent.com/document/product/1007/47912
 * @method void setResult(string $Result) 设置业务核验结果，参考https://cloud.tencent.com/document/product/1007/47912
 * @method string getDescription() 获取业务核验描述
 * @method void setDescription(string $Description) 设置业务核验描述
 * @method float getSimilarity() 获取相似度，0-100，数值越大相似度越高
 * @method void setSimilarity(float $Similarity) 设置相似度，0-100，数值越大相似度越高
 * @method string getVideoBase64() 获取用户核验的视频base64，如果选择了使用cos，返回完整cos地址如https://bucket.cos.ap-guangzhou.myqcloud.com/objectKey
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoBase64(string $VideoBase64) 设置用户核验的视频base64，如果选择了使用cos，返回完整cos地址如https://bucket.cos.ap-guangzhou.myqcloud.com/objectKey
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBestFrameBase64() 获取用户核验视频的截帧base64，如果选择了使用cos，返回完整cos地址如https://bucket.cos.ap-guangzhou.myqcloud.com/objectKey
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBestFrameBase64(string $BestFrameBase64) 设置用户核验视频的截帧base64，如果选择了使用cos，返回完整cos地址如https://bucket.cos.ap-guangzhou.myqcloud.com/objectKey
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtra() 获取获取token时透传的信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtra(string $Extra) 设置获取token时透传的信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceInfoTag() 获取plus版：描述当前请求所在设备的风险标签，详情如下：
01-设备疑似被Root/设备疑似越狱
02-设备疑似被注入
03-设备疑似为模拟器
04-设备疑似存在风险操作
05-摄像头疑似被劫持
06-疑似黑产设备
null-无设备风险
增强版：此字段不生效，默认为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceInfoTag(string $DeviceInfoTag) 设置plus版：描述当前请求所在设备的风险标签，详情如下：
01-设备疑似被Root/设备疑似越狱
02-设备疑似被注入
03-设备疑似为模拟器
04-设备疑似存在风险操作
05-摄像头疑似被劫持
06-疑似黑产设备
null-无设备风险
增强版：此字段不生效，默认为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskInfoTag() 获取行为风险标签，仅错误码返回1007（设备疑似被劫持）时返回风险标签。标签说明：
02：攻击风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskInfoTag(string $RiskInfoTag) 设置行为风险标签，仅错误码返回1007（设备疑似被劫持）时返回风险标签。标签说明：
02：攻击风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLivenessInfoTag() 获取plus版：描述当前请求活体阶段被拒绝的详细原因，详情如下：
01-用户全程闭眼
02-用户未完成指定动作
03-疑似翻拍攻击
04-疑似合成图片
05-疑似合成视频
06-疑似合成动作
07-疑似黑产模版
08-疑似存在水印
09-反光校验未通过
10-最佳帧校验未通过
11-人脸质量过差
12-人脸距离不匹配
13-疑似对抗样本攻击
null-无
增强版：此字段不生效，默认为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLivenessInfoTag(string $LivenessInfoTag) 设置plus版：描述当前请求活体阶段被拒绝的详细原因，详情如下：
01-用户全程闭眼
02-用户未完成指定动作
03-疑似翻拍攻击
04-疑似合成图片
05-疑似合成视频
06-疑似合成动作
07-疑似黑产模版
08-疑似存在水印
09-反光校验未通过
10-最佳帧校验未通过
11-人脸质量过差
12-人脸距离不匹配
13-疑似对抗样本攻击
null-无
增强版：此字段不生效，默认为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceInfoLevel() 获取plus版：描述当前请求所在设备的风险等级，共4级，详情如下：
1 - 安全
2 - 低风险
3 - 中风险
4 - 高危
null - 未获取到风险等级
增强版：此字段不生效，默认为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceInfoLevel(string $DeviceInfoLevel) 设置plus版：描述当前请求所在设备的风险等级，共4级，详情如下：
1 - 安全
2 - 低风险
3 - 中风险
4 - 高危
null - 未获取到风险等级
增强版：此字段不生效，默认为null
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetFaceIdResultResponse extends AbstractModel
{
    /**
     * @var string 身份证
     */
    public $IdCard;

    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var string 业务核验结果，参考https://cloud.tencent.com/document/product/1007/47912
     */
    public $Result;

    /**
     * @var string 业务核验描述
     */
    public $Description;

    /**
     * @var float 相似度，0-100，数值越大相似度越高
     */
    public $Similarity;

    /**
     * @var string 用户核验的视频base64，如果选择了使用cos，返回完整cos地址如https://bucket.cos.ap-guangzhou.myqcloud.com/objectKey
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoBase64;

    /**
     * @var string 用户核验视频的截帧base64，如果选择了使用cos，返回完整cos地址如https://bucket.cos.ap-guangzhou.myqcloud.com/objectKey
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BestFrameBase64;

    /**
     * @var string 获取token时透传的信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Extra;

    /**
     * @var string plus版：描述当前请求所在设备的风险标签，详情如下：
01-设备疑似被Root/设备疑似越狱
02-设备疑似被注入
03-设备疑似为模拟器
04-设备疑似存在风险操作
05-摄像头疑似被劫持
06-疑似黑产设备
null-无设备风险
增强版：此字段不生效，默认为null
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceInfoTag;

    /**
     * @var string 行为风险标签，仅错误码返回1007（设备疑似被劫持）时返回风险标签。标签说明：
02：攻击风险
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskInfoTag;

    /**
     * @var string plus版：描述当前请求活体阶段被拒绝的详细原因，详情如下：
01-用户全程闭眼
02-用户未完成指定动作
03-疑似翻拍攻击
04-疑似合成图片
05-疑似合成视频
06-疑似合成动作
07-疑似黑产模版
08-疑似存在水印
09-反光校验未通过
10-最佳帧校验未通过
11-人脸质量过差
12-人脸距离不匹配
13-疑似对抗样本攻击
null-无
增强版：此字段不生效，默认为null
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LivenessInfoTag;

    /**
     * @var string plus版：描述当前请求所在设备的风险等级，共4级，详情如下：
1 - 安全
2 - 低风险
3 - 中风险
4 - 高危
null - 未获取到风险等级
增强版：此字段不生效，默认为null
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceInfoLevel;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $IdCard 身份证
     * @param string $Name 姓名
     * @param string $Result 业务核验结果，参考https://cloud.tencent.com/document/product/1007/47912
     * @param string $Description 业务核验描述
     * @param float $Similarity 相似度，0-100，数值越大相似度越高
     * @param string $VideoBase64 用户核验的视频base64，如果选择了使用cos，返回完整cos地址如https://bucket.cos.ap-guangzhou.myqcloud.com/objectKey
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BestFrameBase64 用户核验视频的截帧base64，如果选择了使用cos，返回完整cos地址如https://bucket.cos.ap-guangzhou.myqcloud.com/objectKey
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Extra 获取token时透传的信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceInfoTag plus版：描述当前请求所在设备的风险标签，详情如下：
01-设备疑似被Root/设备疑似越狱
02-设备疑似被注入
03-设备疑似为模拟器
04-设备疑似存在风险操作
05-摄像头疑似被劫持
06-疑似黑产设备
null-无设备风险
增强版：此字段不生效，默认为null
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskInfoTag 行为风险标签，仅错误码返回1007（设备疑似被劫持）时返回风险标签。标签说明：
02：攻击风险
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LivenessInfoTag plus版：描述当前请求活体阶段被拒绝的详细原因，详情如下：
01-用户全程闭眼
02-用户未完成指定动作
03-疑似翻拍攻击
04-疑似合成图片
05-疑似合成视频
06-疑似合成动作
07-疑似黑产模版
08-疑似存在水印
09-反光校验未通过
10-最佳帧校验未通过
11-人脸质量过差
12-人脸距离不匹配
13-疑似对抗样本攻击
null-无
增强版：此字段不生效，默认为null
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceInfoLevel plus版：描述当前请求所在设备的风险等级，共4级，详情如下：
1 - 安全
2 - 低风险
3 - 中风险
4 - 高危
null - 未获取到风险等级
增强版：此字段不生效，默认为null
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
