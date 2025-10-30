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
 * 身份证ocr信息结果
 *
 * @method array getWarnCodes() 获取警告代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarnCodes(array $WarnCodes) 设置警告代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddress() 获取地址（人像面）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置地址（人像面）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthority() 获取发证机关（国徽面）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthority(string $Authority) 设置发证机关（国徽面）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBirth() 获取出生日期（人像面）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBirth(string $Birth) 设置出生日期（人像面）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdNum() 获取身份证号（人像面）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdNum(string $IdNum) 设置身份证号（人像面）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取名字（人像面）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名字（人像面）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNation() 获取民族（人像面）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNation(string $Nation) 设置民族（人像面）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSex() 获取性别（人像面）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSex(string $Sex) 设置性别（人像面）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValidDate() 获取证件有效期（国徽面）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValidDate(string $ValidDate) 设置证件有效期（国徽面）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取请求的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestId(string $RequestId) 设置请求的id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorCode() 获取错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCode(string $ErrorCode) 设置错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorMessage() 获取错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorMessage(string $ErrorMessage) 设置错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageUrl() 获取原图地址
 * @method void setImageUrl(string $ImageUrl) 设置原图地址
 * @method string getPortraitUrl() 获取身份证头像照片的地址（人像面）
 * @method void setPortraitUrl(string $PortraitUrl) 设置身份证头像照片的地址（人像面）
 * @method integer getIntErrorCode() 获取整型错误码
 * @method void setIntErrorCode(integer $IntErrorCode) 设置整型错误码
 */
class IDCardInfoResult extends AbstractModel
{
    /**
     * @var array 警告代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WarnCodes;

    /**
     * @var string 地址（人像面）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var string 发证机关（国徽面）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Authority;

    /**
     * @var string 出生日期（人像面）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Birth;

    /**
     * @var string 身份证号（人像面）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdNum;

    /**
     * @var string 名字（人像面）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 民族（人像面）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nation;

    /**
     * @var string 性别（人像面）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sex;

    /**
     * @var string 证件有效期（国徽面）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValidDate;

    /**
     * @var string 请求的id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestId;

    /**
     * @var string 错误码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCode;

    /**
     * @var string 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorMessage;

    /**
     * @var string 原图地址
     */
    public $ImageUrl;

    /**
     * @var string 身份证头像照片的地址（人像面）
     */
    public $PortraitUrl;

    /**
     * @var integer 整型错误码
     */
    public $IntErrorCode;

    /**
     * @param array $WarnCodes 警告代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Address 地址（人像面）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Authority 发证机关（国徽面）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Birth 出生日期（人像面）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdNum 身份证号（人像面）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 名字（人像面）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Nation 民族（人像面）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Sex 性别（人像面）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ValidDate 证件有效期（国徽面）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 请求的id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorCode 错误码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorMessage 错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageUrl 原图地址
     * @param string $PortraitUrl 身份证头像照片的地址（人像面）
     * @param integer $IntErrorCode 整型错误码
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
        if (array_key_exists("WarnCodes",$param) and $param["WarnCodes"] !== null) {
            $this->WarnCodes = $param["WarnCodes"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Authority",$param) and $param["Authority"] !== null) {
            $this->Authority = $param["Authority"];
        }

        if (array_key_exists("Birth",$param) and $param["Birth"] !== null) {
            $this->Birth = $param["Birth"];
        }

        if (array_key_exists("IdNum",$param) and $param["IdNum"] !== null) {
            $this->IdNum = $param["IdNum"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Nation",$param) and $param["Nation"] !== null) {
            $this->Nation = $param["Nation"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("ValidDate",$param) and $param["ValidDate"] !== null) {
            $this->ValidDate = $param["ValidDate"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("PortraitUrl",$param) and $param["PortraitUrl"] !== null) {
            $this->PortraitUrl = $param["PortraitUrl"];
        }

        if (array_key_exists("IntErrorCode",$param) and $param["IntErrorCode"] !== null) {
            $this->IntErrorCode = $param["IntErrorCode"];
        }
    }
}
