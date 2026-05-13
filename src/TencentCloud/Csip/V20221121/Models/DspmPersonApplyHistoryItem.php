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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 访客申请记录
 *
 * @method string getAssetId() 获取资产id
 * @method void setAssetId(string $AssetId) 设置资产id
 * @method string getPersonName() 获取姓名
 * @method void setPersonName(string $PersonName) 设置姓名
 * @method string getPhone() 获取手机号
 * @method void setPhone(string $Phone) 设置手机号
 * @method string getValidateFrom() 获取访问权限生效时间。
 * @method void setValidateFrom(string $ValidateFrom) 设置访问权限生效时间。
 * @method string getValidateTo() 获取访问权限失效时间。
 * @method void setValidateTo(string $ValidateTo) 设置访问权限失效时间。
 * @method integer getValidatePeriod() 获取访问权限有效时间。单位毫秒。
 * @method void setValidatePeriod(integer $ValidatePeriod) 设置访问权限有效时间。单位毫秒。
 * @method DspmDbAccountPrivilege getPrivilege() 获取权限信息。
 * @method void setPrivilege(DspmDbAccountPrivilege $Privilege) 设置权限信息。
 * @method integer getValidStatus() 获取是否有效。0-无效；1-有效。
 * @method void setValidStatus(integer $ValidStatus) 设置是否有效。0-无效；1-有效。
 */
class DspmPersonApplyHistoryItem extends AbstractModel
{
    /**
     * @var string 资产id
     */
    public $AssetId;

    /**
     * @var string 姓名
     */
    public $PersonName;

    /**
     * @var string 手机号
     */
    public $Phone;

    /**
     * @var string 访问权限生效时间。
     */
    public $ValidateFrom;

    /**
     * @var string 访问权限失效时间。
     */
    public $ValidateTo;

    /**
     * @var integer 访问权限有效时间。单位毫秒。
     */
    public $ValidatePeriod;

    /**
     * @var DspmDbAccountPrivilege 权限信息。
     */
    public $Privilege;

    /**
     * @var integer 是否有效。0-无效；1-有效。
     */
    public $ValidStatus;

    /**
     * @param string $AssetId 资产id
     * @param string $PersonName 姓名
     * @param string $Phone 手机号
     * @param string $ValidateFrom 访问权限生效时间。
     * @param string $ValidateTo 访问权限失效时间。
     * @param integer $ValidatePeriod 访问权限有效时间。单位毫秒。
     * @param DspmDbAccountPrivilege $Privilege 权限信息。
     * @param integer $ValidStatus 是否有效。0-无效；1-有效。
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("PersonName",$param) and $param["PersonName"] !== null) {
            $this->PersonName = $param["PersonName"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("ValidateFrom",$param) and $param["ValidateFrom"] !== null) {
            $this->ValidateFrom = $param["ValidateFrom"];
        }

        if (array_key_exists("ValidateTo",$param) and $param["ValidateTo"] !== null) {
            $this->ValidateTo = $param["ValidateTo"];
        }

        if (array_key_exists("ValidatePeriod",$param) and $param["ValidatePeriod"] !== null) {
            $this->ValidatePeriod = $param["ValidatePeriod"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = new DspmDbAccountPrivilege();
            $this->Privilege->deserialize($param["Privilege"]);
        }

        if (array_key_exists("ValidStatus",$param) and $param["ValidStatus"] !== null) {
            $this->ValidStatus = $param["ValidStatus"];
        }
    }
}
