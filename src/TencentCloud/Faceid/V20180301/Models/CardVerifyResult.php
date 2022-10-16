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
 * 核身过程中，鉴伪或OCR单次结果。
 *
 * @method boolean getIsPass() 获取鉴伪或OCR是否成功
 * @method void setIsPass(boolean $IsPass) 设置鉴伪或OCR是否成功
 * @method FileInfo getCardVideo() 获取身份证鉴伪视频，仅开启证件视频鉴伪功能时返回，url链接有效期10分钟。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCardVideo(FileInfo $CardVideo) 设置身份证鉴伪视频，仅开启证件视频鉴伪功能时返回，url链接有效期10分钟。
注意：此字段可能返回 null，表示取不到有效值。
 * @method FileInfo getCardImage() 获取证件照图片，url链接有效期10分钟。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCardImage(FileInfo $CardImage) 设置证件照图片，url链接有效期10分钟。
注意：此字段可能返回 null，表示取不到有效值。
 * @method FileInfo getCardInfoOcrJson() 获取证件照的文字识别结果，如果鉴伪失败或者ocr失败则该参数为空。url链接有效期10分钟。格式为json文本信息。
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
- Birthday  string 生日
- ID string 证号
- Name string 名字
- Address string 地址
- Type string 证件类型

IdCardType为PhilippinesVoteID时：
- Birthday  string 生日
- Address string 地址
- LastName string 姓氏
- FirstName string 姓名
- VIN string VIN号
- CivilStatus string 婚姻状况
- Citizenship string 国籍
- PrecinctNo string 地区

IdCardType为PhilippinesDrivingLicense时：
- Sex string 性别
- Birthday  string 生日
- Name string 姓名
- Address string 地址
- LastName string 姓氏
- FirstName string 首姓名
- MiddleName string 中间姓名
- Nationality string 国籍
- LicenseNo string 证号
- ExpiresDate string 有效期
- AgencyCode string 机构代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCardInfoOcrJson(FileInfo $CardInfoOcrJson) 设置证件照的文字识别结果，如果鉴伪失败或者ocr失败则该参数为空。url链接有效期10分钟。格式为json文本信息。
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
- Birthday  string 生日
- ID string 证号
- Name string 名字
- Address string 地址
- Type string 证件类型

IdCardType为PhilippinesVoteID时：
- Birthday  string 生日
- Address string 地址
- LastName string 姓氏
- FirstName string 姓名
- VIN string VIN号
- CivilStatus string 婚姻状况
- Citizenship string 国籍
- PrecinctNo string 地区

IdCardType为PhilippinesDrivingLicense时：
- Sex string 性别
- Birthday  string 生日
- Name string 姓名
- Address string 地址
- LastName string 姓氏
- FirstName string 首姓名
- MiddleName string 中间姓名
- Nationality string 国籍
- LicenseNo string 证号
- ExpiresDate string 有效期
- AgencyCode string 机构代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取单次流程请求标示。
 * @method void setRequestId(string $RequestId) 设置单次流程请求标示。
 */
class CardVerifyResult extends AbstractModel
{
    /**
     * @var boolean 鉴伪或OCR是否成功
     */
    public $IsPass;

    /**
     * @var FileInfo 身份证鉴伪视频，仅开启证件视频鉴伪功能时返回，url链接有效期10分钟。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CardVideo;

    /**
     * @var FileInfo 证件照图片，url链接有效期10分钟。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CardImage;

    /**
     * @var FileInfo 证件照的文字识别结果，如果鉴伪失败或者ocr失败则该参数为空。url链接有效期10分钟。格式为json文本信息。
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
- Birthday  string 生日
- ID string 证号
- Name string 名字
- Address string 地址
- Type string 证件类型

IdCardType为PhilippinesVoteID时：
- Birthday  string 生日
- Address string 地址
- LastName string 姓氏
- FirstName string 姓名
- VIN string VIN号
- CivilStatus string 婚姻状况
- Citizenship string 国籍
- PrecinctNo string 地区

IdCardType为PhilippinesDrivingLicense时：
- Sex string 性别
- Birthday  string 生日
- Name string 姓名
- Address string 地址
- LastName string 姓氏
- FirstName string 首姓名
- MiddleName string 中间姓名
- Nationality string 国籍
- LicenseNo string 证号
- ExpiresDate string 有效期
- AgencyCode string 机构代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CardInfoOcrJson;

    /**
     * @var string 单次流程请求标示。
     */
    public $RequestId;

    /**
     * @param boolean $IsPass 鉴伪或OCR是否成功
     * @param FileInfo $CardVideo 身份证鉴伪视频，仅开启证件视频鉴伪功能时返回，url链接有效期10分钟。
注意：此字段可能返回 null，表示取不到有效值。
     * @param FileInfo $CardImage 证件照图片，url链接有效期10分钟。
注意：此字段可能返回 null，表示取不到有效值。
     * @param FileInfo $CardInfoOcrJson 证件照的文字识别结果，如果鉴伪失败或者ocr失败则该参数为空。url链接有效期10分钟。格式为json文本信息。
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
- Birthday  string 生日
- ID string 证号
- Name string 名字
- Address string 地址
- Type string 证件类型

IdCardType为PhilippinesVoteID时：
- Birthday  string 生日
- Address string 地址
- LastName string 姓氏
- FirstName string 姓名
- VIN string VIN号
- CivilStatus string 婚姻状况
- Citizenship string 国籍
- PrecinctNo string 地区

IdCardType为PhilippinesDrivingLicense时：
- Sex string 性别
- Birthday  string 生日
- Name string 姓名
- Address string 地址
- LastName string 姓氏
- FirstName string 首姓名
- MiddleName string 中间姓名
- Nationality string 国籍
- LicenseNo string 证号
- ExpiresDate string 有效期
- AgencyCode string 机构代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 单次流程请求标示。
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
        if (array_key_exists("IsPass",$param) and $param["IsPass"] !== null) {
            $this->IsPass = $param["IsPass"];
        }

        if (array_key_exists("CardVideo",$param) and $param["CardVideo"] !== null) {
            $this->CardVideo = new FileInfo();
            $this->CardVideo->deserialize($param["CardVideo"]);
        }

        if (array_key_exists("CardImage",$param) and $param["CardImage"] !== null) {
            $this->CardImage = new FileInfo();
            $this->CardImage->deserialize($param["CardImage"]);
        }

        if (array_key_exists("CardInfoOcrJson",$param) and $param["CardInfoOcrJson"] !== null) {
            $this->CardInfoOcrJson = new FileInfo();
            $this->CardInfoOcrJson->deserialize($param["CardInfoOcrJson"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
