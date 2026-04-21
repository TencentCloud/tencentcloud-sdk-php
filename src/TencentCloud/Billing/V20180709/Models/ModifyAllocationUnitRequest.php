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
 * @method integer getId() 获取<p>所修改分账单元ID</p>
 * @method void setId(integer $Id) 设置<p>所修改分账单元ID</p>
 * @method string getName() 获取<p>修改后分账单元名称</p>
 * @method void setName(string $Name) 设置<p>修改后分账单元名称</p>
 * @method string getSourceName() 获取<p>修改后分账单元源组织名称</p>
 * @method void setSourceName(string $SourceName) 设置<p>修改后分账单元源组织名称</p>
 * @method string getSourceId() 获取<p>修改后分账单元源组织ID</p>
 * @method void setSourceId(string $SourceId) 设置<p>修改后分账单元源组织ID</p>
 * @method string getRemark() 获取<p>分账单元备注说明</p>
 * @method void setRemark(string $Remark) 设置<p>分账单元备注说明</p>
 * @method string getMonth() 获取<p>月份，不传默认当前月</p>
 * @method void setMonth(string $Month) 设置<p>月份，不传默认当前月</p>
 */
class ModifyAllocationUnitRequest extends AbstractModel
{
    /**
     * @var integer <p>所修改分账单元ID</p>
     */
    public $Id;

    /**
     * @var string <p>修改后分账单元名称</p>
     */
    public $Name;

    /**
     * @var string <p>修改后分账单元源组织名称</p>
     */
    public $SourceName;

    /**
     * @var string <p>修改后分账单元源组织ID</p>
     */
    public $SourceId;

    /**
     * @var string <p>分账单元备注说明</p>
     */
    public $Remark;

    /**
     * @var string <p>月份，不传默认当前月</p>
     */
    public $Month;

    /**
     * @param integer $Id <p>所修改分账单元ID</p>
     * @param string $Name <p>修改后分账单元名称</p>
     * @param string $SourceName <p>修改后分账单元源组织名称</p>
     * @param string $SourceId <p>修改后分账单元源组织ID</p>
     * @param string $Remark <p>分账单元备注说明</p>
     * @param string $Month <p>月份，不传默认当前月</p>
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
