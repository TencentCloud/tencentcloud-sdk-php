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
 * 单次比对结果描述
 *
 * @method string getErrorCode() 获取最终比对结果
 * @method void setErrorCode(string $ErrorCode) 设置最终比对结果
 * @method string getErrorMsg() 获取最终比对结果描述
 * @method void setErrorMsg(string $ErrorMsg) 设置最终比对结果描述
 * @method FileInfo getLiveData() 获取本次活体SDK生成的活体算法数据包
 * @method void setLiveData(FileInfo $LiveData) 设置本次活体SDK生成的活体算法数据包
 * @method FileInfo getLiveVideo() 获取本次用户活体验证过程的视频，url链接有效期10分钟。
 * @method void setLiveVideo(FileInfo $LiveVideo) 设置本次用户活体验证过程的视频，url链接有效期10分钟。
 * @method string getLiveErrorCode() 获取活体认证结果码
 * @method void setLiveErrorCode(string $LiveErrorCode) 设置活体认证结果码
 * @method string getLiveErrorMsg() 获取活体认证结果描述
 * @method void setLiveErrorMsg(string $LiveErrorMsg) 设置活体认证结果描述
 * @method FileInfo getBestFrame() 获取本次活体的最佳人像截图，url链接有效期10分钟。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBestFrame(FileInfo $BestFrame) 设置本次活体的最佳人像截图，url链接有效期10分钟。
注意：此字段可能返回 null，表示取不到有效值。
 * @method FileInfo getProfileImage() 获取证件照头像截图，url链接有效期10分钟。
 * @method void setProfileImage(FileInfo $ProfileImage) 设置证件照头像截图，url链接有效期10分钟。
 * @method string getCompareErrorCode() 获取人脸比对结果码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompareErrorCode(string $CompareErrorCode) 设置人脸比对结果码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCompareErrorMsg() 获取人脸比对结果描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompareErrorMsg(string $CompareErrorMsg) 设置人脸比对结果描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getSim() 获取相似度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSim(float $Sim) 设置相似度
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsNeedCharge() 获取该字段废弃
 * @method void setIsNeedCharge(boolean $IsNeedCharge) 设置该字段废弃
 * @method FileInfo getCardInfoInputJson() 获取用户编辑后的证件照信息，如果DisableChangeOcrResult为true禁用编辑无该值。url链接有效期10分钟。格式为json文本信息。
IdCardType为HK时：
- CnName string 中文姓名
- EnName string 英文姓名
- TelexCode string 中文姓名对应电码
- Sex string 性别 ：“男M”或“女F”
- Birthday string 出生日期
- Permanent int 永久性居民身份证。0：非永久； 1：永久； -1：未知。
- IdNum string 身份证号码
- Symbol string 证件符号，出生日期下的符号，例如"***AZ"
- FirstIssueDate string 首次签发日期
- CurrentIssueDate string 最近领用日期

IdCardType为ML时：
- Sex string 男：LELAKI 女：PEREMPUAN
- Birthday  string
- ID string
- Name string
- Address string
- Type string 证件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCardInfoInputJson(FileInfo $CardInfoInputJson) 设置用户编辑后的证件照信息，如果DisableChangeOcrResult为true禁用编辑无该值。url链接有效期10分钟。格式为json文本信息。
IdCardType为HK时：
- CnName string 中文姓名
- EnName string 英文姓名
- TelexCode string 中文姓名对应电码
- Sex string 性别 ：“男M”或“女F”
- Birthday string 出生日期
- Permanent int 永久性居民身份证。0：非永久； 1：永久； -1：未知。
- IdNum string 身份证号码
- Symbol string 证件符号，出生日期下的符号，例如"***AZ"
- FirstIssueDate string 首次签发日期
- CurrentIssueDate string 最近领用日期

IdCardType为ML时：
- Sex string 男：LELAKI 女：PEREMPUAN
- Birthday  string
- ID string
- Name string
- Address string
- Type string 证件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取本次认证的请求标识。
 * @method void setRequestId(string $RequestId) 设置本次认证的请求标识。
 */
class CompareResult extends AbstractModel
{
    /**
     * @var string 最终比对结果
     */
    public $ErrorCode;

    /**
     * @var string 最终比对结果描述
     */
    public $ErrorMsg;

    /**
     * @var FileInfo 本次活体SDK生成的活体算法数据包
     */
    public $LiveData;

    /**
     * @var FileInfo 本次用户活体验证过程的视频，url链接有效期10分钟。
     */
    public $LiveVideo;

    /**
     * @var string 活体认证结果码
     */
    public $LiveErrorCode;

    /**
     * @var string 活体认证结果描述
     */
    public $LiveErrorMsg;

    /**
     * @var FileInfo 本次活体的最佳人像截图，url链接有效期10分钟。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BestFrame;

    /**
     * @var FileInfo 证件照头像截图，url链接有效期10分钟。
     */
    public $ProfileImage;

    /**
     * @var string 人脸比对结果码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompareErrorCode;

    /**
     * @var string 人脸比对结果描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompareErrorMsg;

    /**
     * @var float 相似度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sim;

    /**
     * @var boolean 该字段废弃
     */
    public $IsNeedCharge;

    /**
     * @var FileInfo 用户编辑后的证件照信息，如果DisableChangeOcrResult为true禁用编辑无该值。url链接有效期10分钟。格式为json文本信息。
IdCardType为HK时：
- CnName string 中文姓名
- EnName string 英文姓名
- TelexCode string 中文姓名对应电码
- Sex string 性别 ：“男M”或“女F”
- Birthday string 出生日期
- Permanent int 永久性居民身份证。0：非永久； 1：永久； -1：未知。
- IdNum string 身份证号码
- Symbol string 证件符号，出生日期下的符号，例如"***AZ"
- FirstIssueDate string 首次签发日期
- CurrentIssueDate string 最近领用日期

IdCardType为ML时：
- Sex string 男：LELAKI 女：PEREMPUAN
- Birthday  string
- ID string
- Name string
- Address string
- Type string 证件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CardInfoInputJson;

    /**
     * @var string 本次认证的请求标识。
     */
    public $RequestId;

    /**
     * @param string $ErrorCode 最终比对结果
     * @param string $ErrorMsg 最终比对结果描述
     * @param FileInfo $LiveData 本次活体SDK生成的活体算法数据包
     * @param FileInfo $LiveVideo 本次用户活体验证过程的视频，url链接有效期10分钟。
     * @param string $LiveErrorCode 活体认证结果码
     * @param string $LiveErrorMsg 活体认证结果描述
     * @param FileInfo $BestFrame 本次活体的最佳人像截图，url链接有效期10分钟。
注意：此字段可能返回 null，表示取不到有效值。
     * @param FileInfo $ProfileImage 证件照头像截图，url链接有效期10分钟。
     * @param string $CompareErrorCode 人脸比对结果码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CompareErrorMsg 人脸比对结果描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Sim 相似度
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsNeedCharge 该字段废弃
     * @param FileInfo $CardInfoInputJson 用户编辑后的证件照信息，如果DisableChangeOcrResult为true禁用编辑无该值。url链接有效期10分钟。格式为json文本信息。
IdCardType为HK时：
- CnName string 中文姓名
- EnName string 英文姓名
- TelexCode string 中文姓名对应电码
- Sex string 性别 ：“男M”或“女F”
- Birthday string 出生日期
- Permanent int 永久性居民身份证。0：非永久； 1：永久； -1：未知。
- IdNum string 身份证号码
- Symbol string 证件符号，出生日期下的符号，例如"***AZ"
- FirstIssueDate string 首次签发日期
- CurrentIssueDate string 最近领用日期

IdCardType为ML时：
- Sex string 男：LELAKI 女：PEREMPUAN
- Birthday  string
- ID string
- Name string
- Address string
- Type string 证件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 本次认证的请求标识。
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
        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("LiveData",$param) and $param["LiveData"] !== null) {
            $this->LiveData = new FileInfo();
            $this->LiveData->deserialize($param["LiveData"]);
        }

        if (array_key_exists("LiveVideo",$param) and $param["LiveVideo"] !== null) {
            $this->LiveVideo = new FileInfo();
            $this->LiveVideo->deserialize($param["LiveVideo"]);
        }

        if (array_key_exists("LiveErrorCode",$param) and $param["LiveErrorCode"] !== null) {
            $this->LiveErrorCode = $param["LiveErrorCode"];
        }

        if (array_key_exists("LiveErrorMsg",$param) and $param["LiveErrorMsg"] !== null) {
            $this->LiveErrorMsg = $param["LiveErrorMsg"];
        }

        if (array_key_exists("BestFrame",$param) and $param["BestFrame"] !== null) {
            $this->BestFrame = new FileInfo();
            $this->BestFrame->deserialize($param["BestFrame"]);
        }

        if (array_key_exists("ProfileImage",$param) and $param["ProfileImage"] !== null) {
            $this->ProfileImage = new FileInfo();
            $this->ProfileImage->deserialize($param["ProfileImage"]);
        }

        if (array_key_exists("CompareErrorCode",$param) and $param["CompareErrorCode"] !== null) {
            $this->CompareErrorCode = $param["CompareErrorCode"];
        }

        if (array_key_exists("CompareErrorMsg",$param) and $param["CompareErrorMsg"] !== null) {
            $this->CompareErrorMsg = $param["CompareErrorMsg"];
        }

        if (array_key_exists("Sim",$param) and $param["Sim"] !== null) {
            $this->Sim = $param["Sim"];
        }

        if (array_key_exists("IsNeedCharge",$param) and $param["IsNeedCharge"] !== null) {
            $this->IsNeedCharge = $param["IsNeedCharge"];
        }

        if (array_key_exists("CardInfoInputJson",$param) and $param["CardInfoInputJson"] !== null) {
            $this->CardInfoInputJson = new FileInfo();
            $this->CardInfoInputJson->deserialize($param["CardInfoInputJson"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
