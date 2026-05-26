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
 * GetWxNFCResult返回参数结构体
 *
 * @method string getResultCode() 获取<p>NFC计费结果码，NFC识读成功一次则计费一次（同一个NFC请求重复拉取结果不会重复计费）。计费结果码取值范围：<br>  0：识读成功，计费<br>-1：识读失败，不计费</p>
 * @method void setResultCode(string $ResultCode) 设置<p>NFC计费结果码，NFC识读成功一次则计费一次（同一个NFC请求重复拉取结果不会重复计费）。计费结果码取值范围：<br>  0：识读成功，计费<br>-1：识读失败，不计费</p>
 * @method string getIdNum() 获取<p>身份证号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdNum(string $IdNum) 设置<p>身份证号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>姓名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>姓名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPicture() 获取<p>证件中的人像照片</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPicture(string $Picture) 设置<p>证件中的人像照片</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdCardFrontImg() 获取<p>身份类证件正面照片（人像面）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdCardFrontImg(string $IdCardFrontImg) 设置<p>身份类证件正面照片（人像面）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdCardBackImg() 获取<p>身份类证件背面照片（国徽面）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdCardBackImg(string $IdCardBackImg) 设置<p>身份类证件背面照片（国徽面）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBirthDate() 获取<p>出生日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBirthDate(string $BirthDate) 设置<p>出生日期</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBeginTime() 获取<p>有效期起始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBeginTime(string $BeginTime) 设置<p>有效期起始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取<p>有效期结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置<p>有效期结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddress() 获取<p>住址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置<p>住址</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNation() 获取<p>民族</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNation(string $Nation) 设置<p>民族</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSex() 获取<p>性别</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSex(string $Sex) 设置<p>性别</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdType() 获取<p>证件类型</p><p>枚举值：</p><ul><li>01： 身份证</li><li>03： 中国护照</li><li>06： 港澳通行证</li><li>07： 台胞证</li><li>08： 外国护照</li><li>13： 外国人永久居留证</li><li>14： 港澳台居民居住证</li><li>15： 回乡证</li><li>16： 大陆居民来往台湾通行证</li><li>99： 其他证件</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdType(string $IdType) 设置<p>证件类型</p><p>枚举值：</p><ul><li>01： 身份证</li><li>03： 中国护照</li><li>06： 港澳通行证</li><li>07： 台胞证</li><li>08： 外国护照</li><li>13： 外国人永久居留证</li><li>14： 港澳台居民居住证</li><li>15： 回乡证</li><li>16： 大陆居民来往台湾通行证</li><li>99： 其他证件</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnName() 获取<p>英文姓名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnName(string $EnName) 设置<p>英文姓名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSigningOrganization() 获取<p>签发机关</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSigningOrganization(string $SigningOrganization) 设置<p>签发机关</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOtherIdNum() 获取<p>港澳台居民居住证，通行证号码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOtherIdNum(string $OtherIdNum) 设置<p>港澳台居民居住证，通行证号码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNationality() 获取<p>旅行证件国籍</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNationality(string $Nationality) 设置<p>旅行证件国籍</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPersonalNumber() 获取<p>旅行证件机读区第二行 29~42 位</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPersonalNumber(string $PersonalNumber) 设置<p>旅行证件机读区第二行 29~42 位</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCheckMRTD() 获取<p>证件的验真结果</p><ul><li>JSON格式如下： {&quot;result_issuer &quot;:&quot;签发者证书合法性验证结果 &quot;,&quot;result_paper&quot;:&quot;证件安全对象合法性验证结果 &quot;,&quot;result_data&quot; :&quot;防数据篡改验证结果 &quot;,&quot;result_chip&quot; :&quot;防证书件芯片被复制验证结果&quot;} 。 - 取值范围： 0:验证通过，1: 验证不通过，2: 未验证，3:部分通过，当4项核验结果都为0时，表示证件为真。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckMRTD(string $CheckMRTD) 设置<p>证件的验真结果</p><ul><li>JSON格式如下： {&quot;result_issuer &quot;:&quot;签发者证书合法性验证结果 &quot;,&quot;result_paper&quot;:&quot;证件安全对象合法性验证结果 &quot;,&quot;result_data&quot; :&quot;防数据篡改验证结果 &quot;,&quot;result_chip&quot; :&quot;防证书件芯片被复制验证结果&quot;} 。 - 取值范围： 0:验证通过，1: 验证不通过，2: 未验证，3:部分通过，当4项核验结果都为0时，表示证件为真。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetWxNFCResultResponse extends AbstractModel
{
    /**
     * @var string <p>NFC计费结果码，NFC识读成功一次则计费一次（同一个NFC请求重复拉取结果不会重复计费）。计费结果码取值范围：<br>  0：识读成功，计费<br>-1：识读失败，不计费</p>
     */
    public $ResultCode;

    /**
     * @var string <p>身份证号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdNum;

    /**
     * @var string <p>姓名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>证件中的人像照片</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Picture;

    /**
     * @var string <p>身份类证件正面照片（人像面）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdCardFrontImg;

    /**
     * @var string <p>身份类证件背面照片（国徽面）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdCardBackImg;

    /**
     * @var string <p>出生日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BirthDate;

    /**
     * @var string <p>有效期起始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BeginTime;

    /**
     * @var string <p>有效期结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string <p>住址</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var string <p>民族</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nation;

    /**
     * @var string <p>性别</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sex;

    /**
     * @var string <p>证件类型</p><p>枚举值：</p><ul><li>01： 身份证</li><li>03： 中国护照</li><li>06： 港澳通行证</li><li>07： 台胞证</li><li>08： 外国护照</li><li>13： 外国人永久居留证</li><li>14： 港澳台居民居住证</li><li>15： 回乡证</li><li>16： 大陆居民来往台湾通行证</li><li>99： 其他证件</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdType;

    /**
     * @var string <p>英文姓名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnName;

    /**
     * @var string <p>签发机关</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SigningOrganization;

    /**
     * @var string <p>港澳台居民居住证，通行证号码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OtherIdNum;

    /**
     * @var string <p>旅行证件国籍</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nationality;

    /**
     * @var string <p>旅行证件机读区第二行 29~42 位</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PersonalNumber;

    /**
     * @var string <p>证件的验真结果</p><ul><li>JSON格式如下： {&quot;result_issuer &quot;:&quot;签发者证书合法性验证结果 &quot;,&quot;result_paper&quot;:&quot;证件安全对象合法性验证结果 &quot;,&quot;result_data&quot; :&quot;防数据篡改验证结果 &quot;,&quot;result_chip&quot; :&quot;防证书件芯片被复制验证结果&quot;} 。 - 取值范围： 0:验证通过，1: 验证不通过，2: 未验证，3:部分通过，当4项核验结果都为0时，表示证件为真。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckMRTD;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ResultCode <p>NFC计费结果码，NFC识读成功一次则计费一次（同一个NFC请求重复拉取结果不会重复计费）。计费结果码取值范围：<br>  0：识读成功，计费<br>-1：识读失败，不计费</p>
     * @param string $IdNum <p>身份证号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>姓名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Picture <p>证件中的人像照片</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdCardFrontImg <p>身份类证件正面照片（人像面）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdCardBackImg <p>身份类证件背面照片（国徽面）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BirthDate <p>出生日期</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BeginTime <p>有效期起始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime <p>有效期结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Address <p>住址</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Nation <p>民族</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Sex <p>性别</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdType <p>证件类型</p><p>枚举值：</p><ul><li>01： 身份证</li><li>03： 中国护照</li><li>06： 港澳通行证</li><li>07： 台胞证</li><li>08： 外国护照</li><li>13： 外国人永久居留证</li><li>14： 港澳台居民居住证</li><li>15： 回乡证</li><li>16： 大陆居民来往台湾通行证</li><li>99： 其他证件</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnName <p>英文姓名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SigningOrganization <p>签发机关</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OtherIdNum <p>港澳台居民居住证，通行证号码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Nationality <p>旅行证件国籍</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PersonalNumber <p>旅行证件机读区第二行 29~42 位</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CheckMRTD <p>证件的验真结果</p><ul><li>JSON格式如下： {&quot;result_issuer &quot;:&quot;签发者证书合法性验证结果 &quot;,&quot;result_paper&quot;:&quot;证件安全对象合法性验证结果 &quot;,&quot;result_data&quot; :&quot;防数据篡改验证结果 &quot;,&quot;result_chip&quot; :&quot;防证书件芯片被复制验证结果&quot;} 。 - 取值范围： 0:验证通过，1: 验证不通过，2: 未验证，3:部分通过，当4项核验结果都为0时，表示证件为真。</li></ul>
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
        if (array_key_exists("ResultCode",$param) and $param["ResultCode"] !== null) {
            $this->ResultCode = $param["ResultCode"];
        }

        if (array_key_exists("IdNum",$param) and $param["IdNum"] !== null) {
            $this->IdNum = $param["IdNum"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Picture",$param) and $param["Picture"] !== null) {
            $this->Picture = $param["Picture"];
        }

        if (array_key_exists("IdCardFrontImg",$param) and $param["IdCardFrontImg"] !== null) {
            $this->IdCardFrontImg = $param["IdCardFrontImg"];
        }

        if (array_key_exists("IdCardBackImg",$param) and $param["IdCardBackImg"] !== null) {
            $this->IdCardBackImg = $param["IdCardBackImg"];
        }

        if (array_key_exists("BirthDate",$param) and $param["BirthDate"] !== null) {
            $this->BirthDate = $param["BirthDate"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Nation",$param) and $param["Nation"] !== null) {
            $this->Nation = $param["Nation"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("IdType",$param) and $param["IdType"] !== null) {
            $this->IdType = $param["IdType"];
        }

        if (array_key_exists("EnName",$param) and $param["EnName"] !== null) {
            $this->EnName = $param["EnName"];
        }

        if (array_key_exists("SigningOrganization",$param) and $param["SigningOrganization"] !== null) {
            $this->SigningOrganization = $param["SigningOrganization"];
        }

        if (array_key_exists("OtherIdNum",$param) and $param["OtherIdNum"] !== null) {
            $this->OtherIdNum = $param["OtherIdNum"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("PersonalNumber",$param) and $param["PersonalNumber"] !== null) {
            $this->PersonalNumber = $param["PersonalNumber"];
        }

        if (array_key_exists("CheckMRTD",$param) and $param["CheckMRTD"] !== null) {
            $this->CheckMRTD = $param["CheckMRTD"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
