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
 * 核身文本信息。
 *
 * @method integer getErrCode() 获取<p>本次流程最终验证结果。</p><ul><li>取值范围：0为成功。</li><li>仅包含活体人脸核身结果，不包含意愿核身结果。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrCode(integer $ErrCode) 设置<p>本次流程最终验证结果。</p><ul><li>取值范围：0为成功。</li><li>仅包含活体人脸核身结果，不包含意愿核身结果。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrMsg() 获取<p>本次流程最终验证结果描述。</p><ul><li>仅描述用，文案更新时不会通知。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrMsg(string $ErrMsg) 设置<p>本次流程最终验证结果描述。</p><ul><li>仅描述用，文案更新时不会通知。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdCard() 获取<p>本次验证使用的身份证号。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdCard(string $IdCard) 设置<p>本次验证使用的身份证号。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUseIDType() 获取<p>用户认证时使用的证件号码类型。</p><ul><li>取值范围：<br>  0：二代身份证的证件号码。<br>  1：港澳台居住证的证件号码。<br>  2：其他（核验使用的证件号码非合法身份号码）。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUseIDType(integer $UseIDType) 设置<p>用户认证时使用的证件号码类型。</p><ul><li>取值范围：<br>  0：二代身份证的证件号码。<br>  1：港澳台居住证的证件号码。<br>  2：其他（核验使用的证件号码非合法身份号码）。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>本次验证使用的姓名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>本次验证使用的姓名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOcrNation() 获取<p>身份校验环节识别结果：民族。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrNation(string $OcrNation) 设置<p>身份校验环节识别结果：民族。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOcrAddress() 获取<p>身份校验环节识别结果：家庭住址。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrAddress(string $OcrAddress) 设置<p>身份校验环节识别结果：家庭住址。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOcrBirth() 获取<p>身份校验环节识别结果：生日。</p><ul><li>格式为：YYYY/M/D</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrBirth(string $OcrBirth) 设置<p>身份校验环节识别结果：生日。</p><ul><li>格式为：YYYY/M/D</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOcrAuthority() 获取<p>身份校验环节识别结果：签发机关。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrAuthority(string $OcrAuthority) 设置<p>身份校验环节识别结果：签发机关。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOcrValidDate() 获取<p>身份校验环节识别结果：有效日期。</p><ul><li>格式为：YYYY.MM.DD-YYYY.MM.DD。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrValidDate(string $OcrValidDate) 设置<p>身份校验环节识别结果：有效日期。</p><ul><li>格式为：YYYY.MM.DD-YYYY.MM.DD。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOcrName() 获取<p>身份校验环节识别结果：姓名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrName(string $OcrName) 设置<p>身份校验环节识别结果：姓名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOcrIdCard() 获取<p>身份校验环节识别结果：身份证号。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrIdCard(string $OcrIdCard) 设置<p>身份校验环节识别结果：身份证号。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOcrGender() 获取<p>身份校验环节识别结果：性别。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOcrGender(string $OcrGender) 设置<p>身份校验环节识别结果：性别。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdInfoFrom() 获取<p>身份校验环节采用的信息上传方式。</p><ul><li>取值有&quot;NFC&quot;、&quot;OCR&quot;、&quot;手动输入&quot;、&quot;其他&quot;</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdInfoFrom(string $IdInfoFrom) 设置<p>身份校验环节采用的信息上传方式。</p><ul><li>取值有&quot;NFC&quot;、&quot;OCR&quot;、&quot;手动输入&quot;、&quot;其他&quot;</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLiveStatus() 获取<p>本次流程最终活体结果。</p><ul><li>0为成功</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLiveStatus(integer $LiveStatus) 设置<p>本次流程最终活体结果。</p><ul><li>0为成功</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLiveMsg() 获取<p>本次流程最终活体结果描述。</p><ul><li>仅描述用，文案更新时不会通知。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLiveMsg(string $LiveMsg) 设置<p>本次流程最终活体结果描述。</p><ul><li>仅描述用，文案更新时不会通知。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getComparestatus() 获取<p>本次流程最终一比一结果。</p><ul><li>0为成功</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComparestatus(integer $Comparestatus) 设置<p>本次流程最终一比一结果。</p><ul><li>0为成功</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getComparemsg() 获取<p>本次流程最终一比一结果描述。</p><ul><li>仅描述用，文案更新时不会通知。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComparemsg(string $Comparemsg) 设置<p>本次流程最终一比一结果描述。</p><ul><li>仅描述用，文案更新时不会通知。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSim() 获取<p>本次流程活体一比一的分数。- 取值范围 [0.00, 100.00]。- 相似度大于等于70时才判断为同一人，阈值不支持自定义。- 阈值70的误通过率为万分之一。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSim(string $Sim) 设置<p>本次流程活体一比一的分数。- 取值范围 [0.00, 100.00]。- 相似度大于等于70时才判断为同一人，阈值不支持自定义。- 阈值70的误通过率为万分之一。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocation() 获取<p>地理位置经纬度。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocation(string $Location) 设置<p>地理位置经纬度。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtra() 获取<p>Auth接口带入额外信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtra(string $Extra) 设置<p>Auth接口带入额外信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLivenessDetail() 获取<p>本次流程进行的活体一比一流水。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLivenessDetail(array $LivenessDetail) 设置<p>本次流程进行的活体一比一流水。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLivenessInfoTag() 获取<p>描述当前请求活体阶段被拒绝的详细原因，该参数仅限PLUS版本核身服务返回。</p><ul><li>详情如下：<br>  01-用户全程闭眼<br>  02-用户未完成指定动作<br>  03-疑似翻拍攻击<br>  04-疑似合成攻击<br>  05-疑似黑产模版<br>  06-疑似存在水印<br>  07-反光校验未通过<br>  08-疑似中途换人<br>  09-人脸质量过差<br>  10-距离校验不通过<br>  11-疑似对抗样本攻击<br>  12-嘴巴区域疑似存在攻击痕迹<br>  13-眼睛区域疑似存在攻击痕迹<br>  14-眼睛或嘴巴被遮挡</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLivenessInfoTag(array $LivenessInfoTag) 设置<p>描述当前请求活体阶段被拒绝的详细原因，该参数仅限PLUS版本核身服务返回。</p><ul><li>详情如下：<br>  01-用户全程闭眼<br>  02-用户未完成指定动作<br>  03-疑似翻拍攻击<br>  04-疑似合成攻击<br>  05-疑似黑产模版<br>  06-疑似存在水印<br>  07-反光校验未通过<br>  08-疑似中途换人<br>  09-人脸质量过差<br>  10-距离校验不通过<br>  11-疑似对抗样本攻击<br>  12-嘴巴区域疑似存在攻击痕迹<br>  13-眼睛区域疑似存在攻击痕迹<br>  14-眼睛或嘴巴被遮挡</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMobile() 获取<p>手机号码。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMobile(string $Mobile) 设置<p>手机号码。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCompareLibType() 获取<p>本次流程最终比对库源类型。</p><ul><li>取值范围：<br>  权威库。<br>  业务方自有库（用户上传照片、客户的混合库、混合部署库）。<br>  二次验证库。<br>  人工审核库。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompareLibType(string $CompareLibType) 设置<p>本次流程最终比对库源类型。</p><ul><li>取值范围：<br>  权威库。<br>  业务方自有库（用户上传照片、客户的混合库、混合部署库）。<br>  二次验证库。<br>  人工审核库。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLivenessMode() 获取<p>本次流程最终活体类型。</p><ul><li>取值范围：<br>  0：未知<br>  1：数字活体<br>  2：动作活体<br>  3：静默活体<br>  4：一闪活体（动作+光线）<br>  5：远近活体</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLivenessMode(integer $LivenessMode) 设置<p>本次流程最终活体类型。</p><ul><li>取值范围：<br>  0：未知<br>  1：数字活体<br>  2：动作活体<br>  3：静默活体<br>  4：一闪活体（动作+光线）<br>  5：远近活体</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNFCRequestIds() 获取<p>nfc重复计费requestId列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNFCRequestIds(array $NFCRequestIds) 设置<p>nfc重复计费requestId列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNFCBillingCounts() 获取<p>nfc重复计费计数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNFCBillingCounts(integer $NFCBillingCounts) 设置<p>nfc重复计费计数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassNo() 获取<p>港澳台居住证通行证号码。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassNo(string $PassNo) 设置<p>港澳台居住证通行证号码。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVisaNum() 获取<p>港澳台居住证签发次数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVisaNum(string $VisaNum) 设置<p>港澳台居住证签发次数。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLivenessActionSequence() 获取<p>活体检测的动作顺序，多动作以“,”分隔。<br>输出格式如：“1,2”表示“张嘴+眨眼”。</p><ul><li>详细序列值含义如下：<br> 1：张嘴<br>2：眨眼<br>3：点头<br>4：摇头<br>5：静默<br>注：仅浮层H5产品返回</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLivenessActionSequence(string $LivenessActionSequence) 设置<p>活体检测的动作顺序，多动作以“,”分隔。<br>输出格式如：“1,2”表示“张嘴+眨眼”。</p><ul><li>详细序列值含义如下：<br> 1：张嘴<br>2：眨眼<br>3：点头<br>4：摇头<br>5：静默<br>注：仅浮层H5产品返回</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class DetectInfoText extends AbstractModel
{
    /**
     * @var integer <p>本次流程最终验证结果。</p><ul><li>取值范围：0为成功。</li><li>仅包含活体人脸核身结果，不包含意愿核身结果。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrCode;

    /**
     * @var string <p>本次流程最终验证结果描述。</p><ul><li>仅描述用，文案更新时不会通知。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrMsg;

    /**
     * @var string <p>本次验证使用的身份证号。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdCard;

    /**
     * @var integer <p>用户认证时使用的证件号码类型。</p><ul><li>取值范围：<br>  0：二代身份证的证件号码。<br>  1：港澳台居住证的证件号码。<br>  2：其他（核验使用的证件号码非合法身份号码）。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UseIDType;

    /**
     * @var string <p>本次验证使用的姓名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>身份校验环节识别结果：民族。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrNation;

    /**
     * @var string <p>身份校验环节识别结果：家庭住址。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrAddress;

    /**
     * @var string <p>身份校验环节识别结果：生日。</p><ul><li>格式为：YYYY/M/D</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrBirth;

    /**
     * @var string <p>身份校验环节识别结果：签发机关。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrAuthority;

    /**
     * @var string <p>身份校验环节识别结果：有效日期。</p><ul><li>格式为：YYYY.MM.DD-YYYY.MM.DD。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrValidDate;

    /**
     * @var string <p>身份校验环节识别结果：姓名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrName;

    /**
     * @var string <p>身份校验环节识别结果：身份证号。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrIdCard;

    /**
     * @var string <p>身份校验环节识别结果：性别。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OcrGender;

    /**
     * @var string <p>身份校验环节采用的信息上传方式。</p><ul><li>取值有&quot;NFC&quot;、&quot;OCR&quot;、&quot;手动输入&quot;、&quot;其他&quot;</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdInfoFrom;

    /**
     * @var integer <p>本次流程最终活体结果。</p><ul><li>0为成功</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LiveStatus;

    /**
     * @var string <p>本次流程最终活体结果描述。</p><ul><li>仅描述用，文案更新时不会通知。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LiveMsg;

    /**
     * @var integer <p>本次流程最终一比一结果。</p><ul><li>0为成功</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comparestatus;

    /**
     * @var string <p>本次流程最终一比一结果描述。</p><ul><li>仅描述用，文案更新时不会通知。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Comparemsg;

    /**
     * @var string <p>本次流程活体一比一的分数。- 取值范围 [0.00, 100.00]。- 相似度大于等于70时才判断为同一人，阈值不支持自定义。- 阈值70的误通过率为万分之一。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sim;

    /**
     * @var string <p>地理位置经纬度。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Location;

    /**
     * @var string <p>Auth接口带入额外信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Extra;

    /**
     * @var array <p>本次流程进行的活体一比一流水。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LivenessDetail;

    /**
     * @var array <p>描述当前请求活体阶段被拒绝的详细原因，该参数仅限PLUS版本核身服务返回。</p><ul><li>详情如下：<br>  01-用户全程闭眼<br>  02-用户未完成指定动作<br>  03-疑似翻拍攻击<br>  04-疑似合成攻击<br>  05-疑似黑产模版<br>  06-疑似存在水印<br>  07-反光校验未通过<br>  08-疑似中途换人<br>  09-人脸质量过差<br>  10-距离校验不通过<br>  11-疑似对抗样本攻击<br>  12-嘴巴区域疑似存在攻击痕迹<br>  13-眼睛区域疑似存在攻击痕迹<br>  14-眼睛或嘴巴被遮挡</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LivenessInfoTag;

    /**
     * @var string <p>手机号码。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mobile;

    /**
     * @var string <p>本次流程最终比对库源类型。</p><ul><li>取值范围：<br>  权威库。<br>  业务方自有库（用户上传照片、客户的混合库、混合部署库）。<br>  二次验证库。<br>  人工审核库。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompareLibType;

    /**
     * @var integer <p>本次流程最终活体类型。</p><ul><li>取值范围：<br>  0：未知<br>  1：数字活体<br>  2：动作活体<br>  3：静默活体<br>  4：一闪活体（动作+光线）<br>  5：远近活体</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LivenessMode;

    /**
     * @var array <p>nfc重复计费requestId列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NFCRequestIds;

    /**
     * @var integer <p>nfc重复计费计数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NFCBillingCounts;

    /**
     * @var string <p>港澳台居住证通行证号码。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PassNo;

    /**
     * @var string <p>港澳台居住证签发次数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VisaNum;

    /**
     * @var string <p>活体检测的动作顺序，多动作以“,”分隔。<br>输出格式如：“1,2”表示“张嘴+眨眼”。</p><ul><li>详细序列值含义如下：<br> 1：张嘴<br>2：眨眼<br>3：点头<br>4：摇头<br>5：静默<br>注：仅浮层H5产品返回</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LivenessActionSequence;

    /**
     * @param integer $ErrCode <p>本次流程最终验证结果。</p><ul><li>取值范围：0为成功。</li><li>仅包含活体人脸核身结果，不包含意愿核身结果。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrMsg <p>本次流程最终验证结果描述。</p><ul><li>仅描述用，文案更新时不会通知。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdCard <p>本次验证使用的身份证号。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UseIDType <p>用户认证时使用的证件号码类型。</p><ul><li>取值范围：<br>  0：二代身份证的证件号码。<br>  1：港澳台居住证的证件号码。<br>  2：其他（核验使用的证件号码非合法身份号码）。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>本次验证使用的姓名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OcrNation <p>身份校验环节识别结果：民族。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OcrAddress <p>身份校验环节识别结果：家庭住址。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OcrBirth <p>身份校验环节识别结果：生日。</p><ul><li>格式为：YYYY/M/D</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OcrAuthority <p>身份校验环节识别结果：签发机关。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OcrValidDate <p>身份校验环节识别结果：有效日期。</p><ul><li>格式为：YYYY.MM.DD-YYYY.MM.DD。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OcrName <p>身份校验环节识别结果：姓名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OcrIdCard <p>身份校验环节识别结果：身份证号。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OcrGender <p>身份校验环节识别结果：性别。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdInfoFrom <p>身份校验环节采用的信息上传方式。</p><ul><li>取值有&quot;NFC&quot;、&quot;OCR&quot;、&quot;手动输入&quot;、&quot;其他&quot;</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LiveStatus <p>本次流程最终活体结果。</p><ul><li>0为成功</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LiveMsg <p>本次流程最终活体结果描述。</p><ul><li>仅描述用，文案更新时不会通知。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Comparestatus <p>本次流程最终一比一结果。</p><ul><li>0为成功</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Comparemsg <p>本次流程最终一比一结果描述。</p><ul><li>仅描述用，文案更新时不会通知。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Sim <p>本次流程活体一比一的分数。- 取值范围 [0.00, 100.00]。- 相似度大于等于70时才判断为同一人，阈值不支持自定义。- 阈值70的误通过率为万分之一。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Location <p>地理位置经纬度。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Extra <p>Auth接口带入额外信息。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LivenessDetail <p>本次流程进行的活体一比一流水。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LivenessInfoTag <p>描述当前请求活体阶段被拒绝的详细原因，该参数仅限PLUS版本核身服务返回。</p><ul><li>详情如下：<br>  01-用户全程闭眼<br>  02-用户未完成指定动作<br>  03-疑似翻拍攻击<br>  04-疑似合成攻击<br>  05-疑似黑产模版<br>  06-疑似存在水印<br>  07-反光校验未通过<br>  08-疑似中途换人<br>  09-人脸质量过差<br>  10-距离校验不通过<br>  11-疑似对抗样本攻击<br>  12-嘴巴区域疑似存在攻击痕迹<br>  13-眼睛区域疑似存在攻击痕迹<br>  14-眼睛或嘴巴被遮挡</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mobile <p>手机号码。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CompareLibType <p>本次流程最终比对库源类型。</p><ul><li>取值范围：<br>  权威库。<br>  业务方自有库（用户上传照片、客户的混合库、混合部署库）。<br>  二次验证库。<br>  人工审核库。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LivenessMode <p>本次流程最终活体类型。</p><ul><li>取值范围：<br>  0：未知<br>  1：数字活体<br>  2：动作活体<br>  3：静默活体<br>  4：一闪活体（动作+光线）<br>  5：远近活体</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NFCRequestIds <p>nfc重复计费requestId列表。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NFCBillingCounts <p>nfc重复计费计数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PassNo <p>港澳台居住证通行证号码。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VisaNum <p>港澳台居住证签发次数。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LivenessActionSequence <p>活体检测的动作顺序，多动作以“,”分隔。<br>输出格式如：“1,2”表示“张嘴+眨眼”。</p><ul><li>详细序列值含义如下：<br> 1：张嘴<br>2：眨眼<br>3：点头<br>4：摇头<br>5：静默<br>注：仅浮层H5产品返回</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }

        if (array_key_exists("UseIDType",$param) and $param["UseIDType"] !== null) {
            $this->UseIDType = $param["UseIDType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OcrNation",$param) and $param["OcrNation"] !== null) {
            $this->OcrNation = $param["OcrNation"];
        }

        if (array_key_exists("OcrAddress",$param) and $param["OcrAddress"] !== null) {
            $this->OcrAddress = $param["OcrAddress"];
        }

        if (array_key_exists("OcrBirth",$param) and $param["OcrBirth"] !== null) {
            $this->OcrBirth = $param["OcrBirth"];
        }

        if (array_key_exists("OcrAuthority",$param) and $param["OcrAuthority"] !== null) {
            $this->OcrAuthority = $param["OcrAuthority"];
        }

        if (array_key_exists("OcrValidDate",$param) and $param["OcrValidDate"] !== null) {
            $this->OcrValidDate = $param["OcrValidDate"];
        }

        if (array_key_exists("OcrName",$param) and $param["OcrName"] !== null) {
            $this->OcrName = $param["OcrName"];
        }

        if (array_key_exists("OcrIdCard",$param) and $param["OcrIdCard"] !== null) {
            $this->OcrIdCard = $param["OcrIdCard"];
        }

        if (array_key_exists("OcrGender",$param) and $param["OcrGender"] !== null) {
            $this->OcrGender = $param["OcrGender"];
        }

        if (array_key_exists("IdInfoFrom",$param) and $param["IdInfoFrom"] !== null) {
            $this->IdInfoFrom = $param["IdInfoFrom"];
        }

        if (array_key_exists("LiveStatus",$param) and $param["LiveStatus"] !== null) {
            $this->LiveStatus = $param["LiveStatus"];
        }

        if (array_key_exists("LiveMsg",$param) and $param["LiveMsg"] !== null) {
            $this->LiveMsg = $param["LiveMsg"];
        }

        if (array_key_exists("Comparestatus",$param) and $param["Comparestatus"] !== null) {
            $this->Comparestatus = $param["Comparestatus"];
        }

        if (array_key_exists("Comparemsg",$param) and $param["Comparemsg"] !== null) {
            $this->Comparemsg = $param["Comparemsg"];
        }

        if (array_key_exists("Sim",$param) and $param["Sim"] !== null) {
            $this->Sim = $param["Sim"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }

        if (array_key_exists("LivenessDetail",$param) and $param["LivenessDetail"] !== null) {
            $this->LivenessDetail = [];
            foreach ($param["LivenessDetail"] as $key => $value){
                $obj = new DetectDetail();
                $obj->deserialize($value);
                array_push($this->LivenessDetail, $obj);
            }
        }

        if (array_key_exists("LivenessInfoTag",$param) and $param["LivenessInfoTag"] !== null) {
            $this->LivenessInfoTag = $param["LivenessInfoTag"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("CompareLibType",$param) and $param["CompareLibType"] !== null) {
            $this->CompareLibType = $param["CompareLibType"];
        }

        if (array_key_exists("LivenessMode",$param) and $param["LivenessMode"] !== null) {
            $this->LivenessMode = $param["LivenessMode"];
        }

        if (array_key_exists("NFCRequestIds",$param) and $param["NFCRequestIds"] !== null) {
            $this->NFCRequestIds = $param["NFCRequestIds"];
        }

        if (array_key_exists("NFCBillingCounts",$param) and $param["NFCBillingCounts"] !== null) {
            $this->NFCBillingCounts = $param["NFCBillingCounts"];
        }

        if (array_key_exists("PassNo",$param) and $param["PassNo"] !== null) {
            $this->PassNo = $param["PassNo"];
        }

        if (array_key_exists("VisaNum",$param) and $param["VisaNum"] !== null) {
            $this->VisaNum = $param["VisaNum"];
        }

        if (array_key_exists("LivenessActionSequence",$param) and $param["LivenessActionSequence"] !== null) {
            $this->LivenessActionSequence = $param["LivenessActionSequence"];
        }
    }
}
