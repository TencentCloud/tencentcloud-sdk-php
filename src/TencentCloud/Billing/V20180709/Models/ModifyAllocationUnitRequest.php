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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAllocationUnit请求参数结构体
 *
 * @method integer getId() 获取所修改分账单元ID
 * @method void setId(integer $Id) 设置所修改分账单元ID
 * @method string getName() 获取修改后分账单元名称
 * @method void setName(string $Name) 设置修改后分账单元名称
 * @method string getSourceName() 获取修改后分账单元源组织名称
 * @method void setSourceName(string $SourceName) 设置修改后分账单元源组织名称
 * @method string getSourceId() 获取修改后分账单元源组织ID
 * @method void setSourceId(string $SourceId) 设置修改后分账单元源组织ID
 * @method string getRemark() 获取分账单元备注说明
 * @method void setRemark(string $Remark) 设置分账单元备注说明
 * @method string getMonth() 获取月份，不传默认当前月
 * @method void setMonth(string $Month) 设置月份，不传默认当前月
 */
class ModifyAllocationUnitRequest extends AbstractModel
{
    /**
     * @var integer 所修改分账单元ID
     */
    public $Id;

    /**
     * @var string 修改后分账单元名称
     */
    public $Name;

    /**
     * @var string 修改后分账单元源组织名称
     */
    public $SourceName;

    /**
     * @var string 修改后分账单元源组织ID
     */
    public $SourceId;

    /**
     * @var string 分账单元备注说明
     */
    public $Remark;

    /**
     * @var string 月份，不传默认当前月
     */
    public $Month;

    /**
     * @param integer $Id 所修改分账单元ID
     * @param string $Name 修改后分账单元名称
     * @param string $SourceName 修改后分账单元源组织名称
     * @param string $SourceId 修改后分账单元源组织ID
     * @param string $Remark 分账单元备注说明
     * @param string $Month 月份，不传默认当前月
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }
    }
}
