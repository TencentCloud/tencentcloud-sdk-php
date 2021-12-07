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
 * 表示一个合规标准的信息。
 *
 * @method integer getStandardId() 获取合规标准的ID
 * @method void setStandardId(integer $StandardId) 设置合规标准的ID
 * @method string getName() 获取合规标准的名称
 * @method void setName(string $Name) 设置合规标准的名称
 * @method integer getPolicyItemCount() 获取合规标准包含的数目
 * @method void setPolicyItemCount(integer $PolicyItemCount) 设置合规标准包含的数目
 * @method boolean getEnabled() 获取是否启用此标准
 * @method void setEnabled(boolean $Enabled) 设置是否启用此标准
 * @method string getDescription() 获取标准的描述
 * @method void setDescription(string $Description) 设置标准的描述
 */
class ComplianceBenchmarkStandard extends AbstractModel
{
    /**
     * @var integer 合规标准的ID
     */
    public $StandardId;

    /**
     * @var string 合规标准的名称
     */
    public $Name;

    /**
     * @var integer 合规标准包含的数目
     */
    public $PolicyItemCount;

    /**
     * @var boolean 是否启用此标准
     */
    public $Enabled;

    /**
     * @var string 标准的描述
     */
    public $Description;

    /**
     * @param integer $StandardId 合规标准的ID
     * @param string $Name 合规标准的名称
     * @param integer $PolicyItemCount 合规标准包含的数目
     * @param boolean $Enabled 是否启用此标准
     * @param string $Description 标准的描述
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
        if (array_key_exists("StandardId",$param) and $param["StandardId"] !== null) {
            $this->StandardId = $param["StandardId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PolicyItemCount",$param) and $param["PolicyItemCount"] !== null) {
            $this->PolicyItemCount = $param["PolicyItemCount"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
