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
 * DescribeAllocationUnitDetail返回参数结构体
 *
 * @method integer getId() 获取<p>分账单元ID</p>
 * @method void setId(integer $Id) 设置<p>分账单元ID</p>
 * @method string getUin() 获取<p>分账单元所属UIN</p>
 * @method void setUin(string $Uin) 设置<p>分账单元所属UIN</p>
 * @method string getName() 获取<p>分账单元名称</p>
 * @method void setName(string $Name) 设置<p>分账单元名称</p>
 * @method integer getParentId() 获取<p>分账单元父节点ID</p>
 * @method void setParentId(integer $ParentId) 设置<p>分账单元父节点ID</p>
 * @method string getSourceName() 获取<p>源组织名称</p>
 * @method void setSourceName(string $SourceName) 设置<p>源组织名称</p>
 * @method string getSourceId() 获取<p>源组织ID</p>
 * @method void setSourceId(string $SourceId) 设置<p>源组织ID</p>
 * @method string getRemark() 获取<p>备注说明</p>
 * @method void setRemark(string $Remark) 设置<p>备注说明</p>
 * @method string getTreeNodeUniqKey() 获取<p>分账单元标识</p>
 * @method void setTreeNodeUniqKey(string $TreeNodeUniqKey) 设置<p>分账单元标识</p>
 * @method integer getRuleId() 获取<p>若分账单元设置归集规则，返回归集规则ID，若无分账规则，则不返回</p>
 * @method void setRuleId(integer $RuleId) 设置<p>若分账单元设置归集规则，返回归集规则ID，若无分账规则，则不返回</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAllocationUnitDetailResponse extends AbstractModel
{
    /**
     * @var integer <p>分账单元ID</p>
     */
    public $Id;

    /**
     * @var string <p>分账单元所属UIN</p>
     */
    public $Uin;

    /**
     * @var string <p>分账单元名称</p>
     */
    public $Name;

    /**
     * @var integer <p>分账单元父节点ID</p>
     */
    public $ParentId;

    /**
     * @var string <p>源组织名称</p>
     */
    public $SourceName;

    /**
     * @var string <p>源组织ID</p>
     */
    public $SourceId;

    /**
     * @var string <p>备注说明</p>
     */
    public $Remark;

    /**
     * @var string <p>分账单元标识</p>
     */
    public $TreeNodeUniqKey;

    /**
     * @var integer <p>若分账单元设置归集规则，返回归集规则ID，若无分账规则，则不返回</p>
     */
    public $RuleId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Id <p>分账单元ID</p>
     * @param string $Uin <p>分账单元所属UIN</p>
     * @param string $Name <p>分账单元名称</p>
     * @param integer $ParentId <p>分账单元父节点ID</p>
     * @param string $SourceName <p>源组织名称</p>
     * @param string $SourceId <p>源组织ID</p>
     * @param string $Remark <p>备注说明</p>
     * @param string $TreeNodeUniqKey <p>分账单元标识</p>
     * @param integer $RuleId <p>若分账单元设置归集规则，返回归集规则ID，若无分账规则，则不返回</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
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

        if (array_key_exists("TreeNodeUniqKey",$param) and $param["TreeNodeUniqKey"] !== null) {
            $this->TreeNodeUniqKey = $param["TreeNodeUniqKey"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
