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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表示一条白名单记录。
 *
 * @method integer getWhitelistItemId() 获取白名单项的ID。
 * @method void setWhitelistItemId(integer $WhitelistItemId) 设置白名单项的ID。
 * @method integer getCustomerPolicyItemId() 获取客户检测项的ID。
 * @method void setCustomerPolicyItemId(integer $CustomerPolicyItemId) 设置客户检测项的ID。
 * @method string getName() 获取检测项的名称。
 * @method void setName(string $Name) 设置检测项的名称。
 * @method string getStandardName() 获取合规标准的名称。
 * @method void setStandardName(string $StandardName) 设置合规标准的名称。
 * @method integer getStandardId() 获取合规标准的ID。
 * @method void setStandardId(integer $StandardId) 设置合规标准的ID。
 * @method integer getAffectedAssetCount() 获取检测项影响的资产的数目。
 * @method void setAffectedAssetCount(integer $AffectedAssetCount) 设置检测项影响的资产的数目。
 * @method string getLastUpdateTime() 获取最后更新的时间
 * @method void setLastUpdateTime(string $LastUpdateTime) 设置最后更新的时间
 * @method string getInsertTime() 获取加入到白名单的时间
 * @method void setInsertTime(string $InsertTime) 设置加入到白名单的时间
 */
class ComplianceWhitelistItem extends AbstractModel
{
    /**
     * @var integer 白名单项的ID。
     */
    public $WhitelistItemId;

    /**
     * @var integer 客户检测项的ID。
     */
    public $CustomerPolicyItemId;

    /**
     * @var string 检测项的名称。
     */
    public $Name;

    /**
     * @var string 合规标准的名称。
     */
    public $StandardName;

    /**
     * @var integer 合规标准的ID。
     */
    public $StandardId;

    /**
     * @var integer 检测项影响的资产的数目。
     */
    public $AffectedAssetCount;

    /**
     * @var string 最后更新的时间
     */
    public $LastUpdateTime;

    /**
     * @var string 加入到白名单的时间
     */
    public $InsertTime;

    /**
     * @param integer $WhitelistItemId 白名单项的ID。
     * @param integer $CustomerPolicyItemId 客户检测项的ID。
     * @param string $Name 检测项的名称。
     * @param string $StandardName 合规标准的名称。
     * @param integer $StandardId 合规标准的ID。
     * @param integer $AffectedAssetCount 检测项影响的资产的数目。
     * @param string $LastUpdateTime 最后更新的时间
     * @param string $InsertTime 加入到白名单的时间
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
        if (array_key_exists("WhitelistItemId",$param) and $param["WhitelistItemId"] !== null) {
            $this->WhitelistItemId = $param["WhitelistItemId"];
        }

        if (array_key_exists("CustomerPolicyItemId",$param) and $param["CustomerPolicyItemId"] !== null) {
            $this->CustomerPolicyItemId = $param["CustomerPolicyItemId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("StandardName",$param) and $param["StandardName"] !== null) {
            $this->StandardName = $param["StandardName"];
        }

        if (array_key_exists("StandardId",$param) and $param["StandardId"] !== null) {
            $this->StandardId = $param["StandardId"];
        }

        if (array_key_exists("AffectedAssetCount",$param) and $param["AffectedAssetCount"] !== null) {
            $this->AffectedAssetCount = $param["AffectedAssetCount"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }
    }
}
