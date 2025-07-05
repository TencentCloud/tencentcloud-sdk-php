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
 * 分账单元id和名称
 *
 * @method integer getNodeId() 获取分账单元ID
 * @method void setNodeId(integer $NodeId) 设置分账单元ID
 * @method string getTreeNodeUniqKeyName() 获取分账规则名称
 * @method void setTreeNodeUniqKeyName(string $TreeNodeUniqKeyName) 设置分账规则名称
 */
class AllocationUnit extends AbstractModel
{
    /**
     * @var integer 分账单元ID
     */
    public $NodeId;

    /**
     * @var string 分账规则名称
     */
    public $TreeNodeUniqKeyName;

    /**
     * @param integer $NodeId 分账单元ID
     * @param string $TreeNodeUniqKeyName 分账规则名称
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("TreeNodeUniqKeyName",$param) and $param["TreeNodeUniqKeyName"] !== null) {
            $this->TreeNodeUniqKeyName = $param["TreeNodeUniqKeyName"];
        }
    }
}
