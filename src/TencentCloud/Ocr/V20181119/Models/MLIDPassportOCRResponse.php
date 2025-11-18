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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MLIDPassportOCR返回参数结构体
 *
 * @method string getID() 获取护照ID（机读码区的解析结果）
 * @method void setID(string $ID) 设置护照ID（机读码区的解析结果）
 * @method string getName() 获取姓名（机读码区的解析结果）
 * @method void setName(string $Name) 设置姓名（机读码区的解析结果）
 * @method string getDateOfBirth() 获取出生日期（机读码区的解析结果）
 * @method void setDateOfBirth(string $DateOfBirth) 设置出生日期（机读码区的解析结果）
 * @method string getSex() 获取性别（F女，M男）（机读码区的解析结果）
 * @method void setSex(string $Sex) 设置性别（F女，M男）（机读码区的解析结果）
 * @method string getDateOfExpiration() 获取有效期（机读码区的解析结果）
 * @method void setDateOfExpiration(string $DateOfExpiration) 设置有效期（机读码区的解析结果）
 * @method string getIssuingCountry() 获取发行国（机读码区的解析结果）
 * @method void setIssuingCountry(string $IssuingCountry) 设置发行国（机读码区的解析结果）
 * @method string getNationality() 获取国家地区代码（机读码区的解析结果）
 * @method void setNationality(string $Nationality) 设置国家地区代码（机读码区的解析结果）
 * @method array getWarn() 获取该字段已废弃， 将固定返回空数组，不建议使用。

 * @method void setWarn(array $Warn) 设置该字段已废弃， 将固定返回空数组，不建议使用。

 * @method string getImage() 获取证件中的人像图片base64
 * @method void setImage(string $Image) 设置证件中的人像图片base64
 * @method string getAdvancedInfo() 获取该字段已废弃， 将固定返回"1"，不建议使用。

 * @method void setAdvancedInfo(string $AdvancedInfo) 设置该字段已废弃， 将固定返回"1"，不建议使用。

 * @method string getCodeSet() 获取最下方第一行 MRZ Code 序列
 * @method void setCodeSet(string $CodeSet) 设置最下方第一行 MRZ Code 序列
 * @method string getCodeCrc() 获取最下方第二行 MRZ Code 序列
 * @method void setCodeCrc(string $CodeCrc) 设置最下方第二行 MRZ Code 序列
 * @method string getSurname() 获取姓（机读码区的解析结果）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSurname(string $Surname) 设置姓（机读码区的解析结果）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGivenName() 获取名（机读码区的解析结果）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGivenName(string $GivenName) 设置名（机读码区的解析结果）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取类型（机读码区的解析结果）
 * @method void setType(string $Type) 设置类型（机读码区的解析结果）
 * @method PassportRecognizeInfos getPassportRecognizeInfos() 获取信息区证件内容
 * @method void setPassportRecognizeInfos(PassportRecognizeInfos $PassportRecognizeInfos) 设置信息区证件内容
 * @method array getWarnCardInfos() 获取该字段仅对国际站请求起作用，国内站该字段将固定返回空数组。国际站告警码如下：  告警码-9101 证件边框不完整告警-9102 证件复印件告警-9103 证件翻拍告警-9104 证件PS告警-9107 证件反光告警-9108 证件模糊告警-9109 告警能力未开通
 * @method void setWarnCardInfos(array $WarnCardInfos) 设置该字段仅对国际站请求起作用，国内站该字段将固定返回空数组。国际站告警码如下：  告警码-9101 证件边框不完整告警-9102 证件复印件告警-9103 证件翻拍告警-9104 证件PS告警-9107 证件反光告警-9108 证件模糊告警-9109 告警能力未开通
 * @method integer getCardCount() 获取输入图片中的卡证数量（仅请求曼谷地域[ap-bangkok]返回）
 * @method void setCardCount(integer $CardCount) 设置输入图片中的卡证数量（仅请求曼谷地域[ap-bangkok]返回）
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class MLIDPassportOCRResponse extends AbstractModel
{
    /**
     * @var string 护照ID（机读码区的解析结果）
     */
    public $ID;

    /**
     * @var string 姓名（机读码区的解析结果）
     */
    public $Name;

    /**
     * @var string 出生日期（机读码区的解析结果）
     */
    public $DateOfBirth;

    /**
     * @var string 性别（F女，M男）（机读码区的解析结果）
     */
    public $Sex;

    /**
     * @var string 有效期（机读码区的解析结果）
     */
    public $DateOfExpiration;

    /**
     * @var string 发行国（机读码区的解析结果）
     */
    public $IssuingCountry;

    /**
     * @var string 国家地区代码（机读码区的解析结果）
     */
    public $Nationality;

    /**
     * @var array 该字段已废弃， 将固定返回空数组，不建议使用。

     * @deprecated
     */
    public $Warn;

    /**
     * @var string 证件中的人像图片base64
     */
    public $Image;

    /**
     * @var string 该字段已废弃， 将固定返回"1"，不建议使用。

     * @deprecated
     */
    public $AdvancedInfo;

    /**
     * @var string 最下方第一行 MRZ Code 序列
     */
    public $CodeSet;

    /**
     * @var string 最下方第二行 MRZ Code 序列
     */
    public $CodeCrc;

    /**
     * @var string 姓（机读码区的解析结果）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Surname;

    /**
     * @var string 名（机读码区的解析结果）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GivenName;

    /**
     * @var string 类型（机读码区的解析结果）
     */
    public $Type;

    /**
     * @var PassportRecognizeInfos 信息区证件内容
     */
    public $PassportRecognizeInfos;

    /**
     * @var array 该字段仅对国际站请求起作用，国内站该字段将固定返回空数组。国际站告警码如下：  告警码-9101 证件边框不完整告警-9102 证件复印件告警-9103 证件翻拍告警-9104 证件PS告警-9107 证件反光告警-9108 证件模糊告警-9109 告警能力未开通
     */
    public $WarnCardInfos;

    /**
     * @var integer 输入图片中的卡证数量（仅请求曼谷地域[ap-bangkok]返回）
     */
    public $CardCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ID 护照ID（机读码区的解析结果）
     * @param string $Name 姓名（机读码区的解析结果）
     * @param string $DateOfBirth 出生日期（机读码区的解析结果）
     * @param string $Sex 性别（F女，M男）（机读码区的解析结果）
     * @param string $DateOfExpiration 有效期（机读码区的解析结果）
     * @param string $IssuingCountry 发行国（机读码区的解析结果）
     * @param string $Nationality 国家地区代码（机读码区的解析结果）
     * @param array $Warn 该字段已废弃， 将固定返回空数组，不建议使用。

     * @param string $Image 证件中的人像图片base64
     * @param string $AdvancedInfo 该字段已废弃， 将固定返回"1"，不建议使用。

     * @param string $CodeSet 最下方第一行 MRZ Code 序列
     * @param string $CodeCrc 最下方第二行 MRZ Code 序列
     * @param string $Surname 姓（机读码区的解析结果）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GivenName 名（机读码区的解析结果）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 类型（机读码区的解析结果）
     * @param PassportRecognizeInfos $PassportRecognizeInfos 信息区证件内容
     * @param array $WarnCardInfos 该字段仅对国际站请求起作用，国内站该字段将固定返回空数组。国际站告警码如下：  告警码-9101 证件边框不完整告警-9102 证件复印件告警-9103 证件翻拍告警-9104 证件PS告警-9107 证件反光告警-9108 证件模糊告警-9109 告警能力未开通
     * @param integer $CardCount 输入图片中的卡证数量（仅请求曼谷地域[ap-bangkok]返回）
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DateOfBirth",$param) and $param["DateOfBirth"] !== null) {
            $this->DateOfBirth = $param["DateOfBirth"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("DateOfExpiration",$param) and $param["DateOfExpiration"] !== null) {
            $this->DateOfExpiration = $param["DateOfExpiration"];
        }

        if (array_key_exists("IssuingCountry",$param) and $param["IssuingCountry"] !== null) {
            $this->IssuingCountry = $param["IssuingCountry"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("Warn",$param) and $param["Warn"] !== null) {
            $this->Warn = $param["Warn"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("AdvancedInfo",$param) and $param["AdvancedInfo"] !== null) {
            $this->AdvancedInfo = $param["AdvancedInfo"];
        }

        if (array_key_exists("CodeSet",$param) and $param["CodeSet"] !== null) {
            $this->CodeSet = $param["CodeSet"];
        }

        if (array_key_exists("CodeCrc",$param) and $param["CodeCrc"] !== null) {
            $this->CodeCrc = $param["CodeCrc"];
        }

        if (array_key_exists("Surname",$param) and $param["Surname"] !== null) {
            $this->Surname = $param["Surname"];
        }

        if (array_key_exists("GivenName",$param) and $param["GivenName"] !== null) {
            $this->GivenName = $param["GivenName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PassportRecognizeInfos",$param) and $param["PassportRecognizeInfos"] !== null) {
            $this->PassportRecognizeInfos = new PassportRecognizeInfos();
            $this->PassportRecognizeInfos->deserialize($param["PassportRecognizeInfos"]);
        }

        if (array_key_exists("WarnCardInfos",$param) and $param["WarnCardInfos"] !== null) {
            $this->WarnCardInfos = $param["WarnCardInfos"];
        }

        if (array_key_exists("CardCount",$param) and $param["CardCount"] !== null) {
            $this->CardCount = $param["CardCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
