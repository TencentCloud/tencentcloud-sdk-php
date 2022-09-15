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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySiteInfo请求参数结构体
 *
 * @method string getSiteId() 获取机房ID
 * @method void setSiteId(string $SiteId) 设置机房ID
 * @method string getName() 获取站点名称
 * @method void setName(string $Name) 设置站点名称
 * @method string getDescription() 获取站点描述
 * @method void setDescription(string $Description) 设置站点描述
 * @method string getNote() 获取注意事项
 * @method void setNote(string $Note) 设置注意事项
 * @method string getCountry() 获取站点所在国家
 * @method void setCountry(string $Country) 设置站点所在国家
 * @method string getProvince() 获取站点所在省份
 * @method void setProvince(string $Province) 设置站点所在省份
 * @method string getCity() 获取站点所在城市
 * @method void setCity(string $City) 设置站点所在城市
 * @method string getPostalCode() 获取站点所在地区的邮编
 * @method void setPostalCode(string $PostalCode) 设置站点所在地区的邮编
 * @method string getAddressLine() 获取站点所在地区的详细地址信息
 * @method void setAddressLine(string $AddressLine) 设置站点所在地区的详细地址信息
 */
class ModifySiteInfoRequest extends AbstractModel
{
    /**
     * @var string 机房ID
     */
    public $SiteId;

    /**
     * @var string 站点名称
     */
    public $Name;

    /**
     * @var string 站点描述
     */
    public $Description;

    /**
     * @var string 注意事项
     */
    public $Note;

    /**
     * @var string 站点所在国家
     */
    public $Country;

    /**
     * @var string 站点所在省份
     */
    public $Province;

    /**
     * @var string 站点所在城市
     */
    public $City;

    /**
     * @var string 站点所在地区的邮编
     */
    public $PostalCode;

    /**
     * @var string 站点所在地区的详细地址信息
     */
    public $AddressLine;

    /**
     * @param string $SiteId 机房ID
     * @param string $Name 站点名称
     * @param string $Description 站点描述
     * @param string $Note 注意事项
     * @param string $Country 站点所在国家
     * @param string $Province 站点所在省份
     * @param string $City 站点所在城市
     * @param string $PostalCode 站点所在地区的邮编
     * @param string $AddressLine 站点所在地区的详细地址信息
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
        if (array_key_exists("SiteId",$param) and $param["SiteId"] !== null) {
            $this->SiteId = $param["SiteId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("City",$param) and $param["City"] !== null) {
            $this->City = $param["City"];
        }

        if (array_key_exists("PostalCode",$param) and $param["PostalCode"] !== null) {
            $this->PostalCode = $param["PostalCode"];
        }

        if (array_key_exists("AddressLine",$param) and $param["AddressLine"] !== null) {
            $this->AddressLine = $param["AddressLine"];
        }
    }
}
