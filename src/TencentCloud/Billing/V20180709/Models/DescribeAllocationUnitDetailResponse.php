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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAllocationUnitDetail返回参数结构体
 *
 * @method integer getId() 获取分账单元ID
 * @method void setId(integer $Id) 设置分账单元ID
 * @method string getUin() 获取分账单元所属UIN
 * @method void setUin(string $Uin) 设置分账单元所属UIN
 * @method string getName() 获取分账单元名称
 * @method void setName(string $Name) 设置分账单元名称
 * @method integer getParentId() 获取分账单元父节点ID
 * @method void setParentId(integer $ParentId) 设置分账单元父节点ID
 * @method string getSourceName() 获取源组织名称
 * @method void setSourceName(string $SourceName) 设置源组织名称
 * @method string getSourceId() 获取源组织ID
 * @method void setSourceId(string $SourceId) 设置源组织ID
 * @method string getRemark() 获取备注说明
 * @method void setRemark(string $Remark) 设置备注说明
 * @method string getTreeNodeUniqKey() 获取分账单元标识
 * @method void setTreeNodeUniqKey(string $TreeNodeUniqKey) 设置分账单元标识
 * @method integer getRuleId() 获取若分账单元设置归集规则，返回归集规则ID，若无分账规则，则不返回
 * @method void setRuleId(integer $RuleId) 设置若分账单元设置归集规则，返回归集规则ID，若无分账规则，则不返回
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAllocationUnitDetailResponse extends AbstractModel
{
    /**
     * @var integer 分账单元ID
     */
    public $Id;

    /**
     * @var string 分账单元所属UIN
     */
    public $Uin;

    /**
     * @var string 分账单元名称
     */
    public $Name;

    /**
     * @var integer 分账单元父节点ID
     */
    public $ParentId;

    /**
     * @var string 源组织名称
     */
    public $SourceName;

    /**
     * @var string 源组织ID
     */
    public $SourceId;

    /**
     * @var string 备注说明
     */
    public $Remark;

    /**
     * @var string 分账单元标识
     */
    public $TreeNodeUniqKey;

    /**
     * @var integer 若分账单元设置归集规则，返回归集规则ID，若无分账规则，则不返回
     */
    public $RuleId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Id 分账单元ID
     * @param string $Uin 分账单元所属UIN
     * @param string $Name 分账单元名称
     * @param integer $ParentId 分账单元父节点ID
     * @param string $SourceName 源组织名称
     * @param string $SourceId 源组织ID
     * @param string $Remark 备注说明
     * @param string $TreeNodeUniqKey 分账单元标识
     * @param integer $RuleId 若分账单元设置归集规则，返回归集规则ID，若无分账规则，则不返回
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
