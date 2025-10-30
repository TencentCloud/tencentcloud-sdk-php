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
 * 临时身份证信息返回
 *
 * @method ContentInfo getName() 获取姓名（人像面）
 * @method void setName(ContentInfo $Name) 设置姓名（人像面）
 * @method ContentInfo getSex() 获取性别（人像面）
 * @method void setSex(ContentInfo $Sex) 设置性别（人像面）
 * @method ContentInfo getNation() 获取民族（人像面）
 * @method void setNation(ContentInfo $Nation) 设置民族（人像面）
 * @method ContentInfo getBirth() 获取出生日期（人像面）
 * @method void setBirth(ContentInfo $Birth) 设置出生日期（人像面）
 * @method ContentInfo getAddress() 获取地址（人像面）
 * @method void setAddress(ContentInfo $Address) 设置地址（人像面）
 * @method ContentInfo getIdNum() 获取公民身份号码（人像面）
 * @method void setIdNum(ContentInfo $IdNum) 设置公民身份号码（人像面）
 * @method ContentInfo getAuthority() 获取发证机关（国徽面）
 * @method void setAuthority(ContentInfo $Authority) 设置发证机关（国徽面）
 * @method ContentInfo getValidDate() 获取证件有效期（国徽面）
 * @method void setValidDate(ContentInfo $ValidDate) 设置证件有效期（国徽面）
 * @method CardWarnInfo getWarnInfos() 获取WarnInfos，告警信息
 * @method void setWarnInfos(CardWarnInfo $WarnInfos) 设置WarnInfos，告警信息
 * @method ContentInfo getCardImage() 获取IdCard，裁剪后身份证照片的base64编码，请求 EnableCropImage 时返回；
 * @method void setCardImage(ContentInfo $CardImage) 设置IdCard，裁剪后身份证照片的base64编码，请求 EnableCropImage 时返回；
 * @method ContentInfo getPortraitImage() 获取Portrait，身份证头像照片的base64编码，请求 EnablePortrait 时返回；
 * @method void setPortraitImage(ContentInfo $PortraitImage) 设置Portrait，身份证头像照片的base64编码，请求 EnablePortrait 时返回；
 */
class TemporaryIDCardInfo extends AbstractModel
{
    /**
     * @var ContentInfo 姓名（人像面）
     */
    public $Name;

    /**
     * @var ContentInfo 性别（人像面）
     */
    public $Sex;

    /**
     * @var ContentInfo 民族（人像面）
     */
    public $Nation;

    /**
     * @var ContentInfo 出生日期（人像面）
     */
    public $Birth;

    /**
     * @var ContentInfo 地址（人像面）
     */
    public $Address;

    /**
     * @var ContentInfo 公民身份号码（人像面）
     */
    public $IdNum;

    /**
     * @var ContentInfo 发证机关（国徽面）
     */
    public $Authority;

    /**
     * @var ContentInfo 证件有效期（国徽面）
     */
    public $ValidDate;

    /**
     * @var CardWarnInfo WarnInfos，告警信息
     */
    public $WarnInfos;

    /**
     * @var ContentInfo IdCard，裁剪后身份证照片的base64编码，请求 EnableCropImage 时返回；
     */
    public $CardImage;

    /**
     * @var ContentInfo Portrait，身份证头像照片的base64编码，请求 EnablePortrait 时返回；
     */
    public $PortraitImage;

    /**
     * @param ContentInfo $Name 姓名（人像面）
     * @param ContentInfo $Sex 性别（人像面）
     * @param ContentInfo $Nation 民族（人像面）
     * @param ContentInfo $Birth 出生日期（人像面）
     * @param ContentInfo $Address 地址（人像面）
     * @param ContentInfo $IdNum 公民身份号码（人像面）
     * @param ContentInfo $Authority 发证机关（国徽面）
     * @param ContentInfo $ValidDate 证件有效期（国徽面）
     * @param CardWarnInfo $WarnInfos WarnInfos，告警信息
     * @param ContentInfo $CardImage IdCard，裁剪后身份证照片的base64编码，请求 EnableCropImage 时返回；
     * @param ContentInfo $PortraitImage Portrait，身份证头像照片的base64编码，请求 EnablePortrait 时返回；
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = new ContentInfo();
            $this->Name->deserialize($param["Name"]);
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = new ContentInfo();
            $this->Sex->deserialize($param["Sex"]);
        }

        if (array_key_exists("Nation",$param) and $param["Nation"] !== null) {
            $this->Nation = new ContentInfo();
            $this->Nation->deserialize($param["Nation"]);
        }

        if (array_key_exists("Birth",$param) and $param["Birth"] !== null) {
            $this->Birth = new ContentInfo();
            $this->Birth->deserialize($param["Birth"]);
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = new ContentInfo();
            $this->Address->deserialize($param["Address"]);
        }

        if (array_key_exists("IdNum",$param) and $param["IdNum"] !== null) {
            $this->IdNum = new ContentInfo();
            $this->IdNum->deserialize($param["IdNum"]);
        }

        if (array_key_exists("Authority",$param) and $param["Authority"] !== null) {
            $this->Authority = new ContentInfo();
            $this->Authority->deserialize($param["Authority"]);
        }

        if (array_key_exists("ValidDate",$param) and $param["ValidDate"] !== null) {
            $this->ValidDate = new ContentInfo();
            $this->ValidDate->deserialize($param["ValidDate"]);
        }

        if (array_key_exists("WarnInfos",$param) and $param["WarnInfos"] !== null) {
            $this->WarnInfos = new CardWarnInfo();
            $this->WarnInfos->deserialize($param["WarnInfos"]);
        }

        if (array_key_exists("CardImage",$param) and $param["CardImage"] !== null) {
            $this->CardImage = new ContentInfo();
            $this->CardImage->deserialize($param["CardImage"]);
        }

        if (array_key_exists("PortraitImage",$param) and $param["PortraitImage"] !== null) {
            $this->PortraitImage = new ContentInfo();
            $this->PortraitImage->deserialize($param["PortraitImage"]);
        }
    }
}
