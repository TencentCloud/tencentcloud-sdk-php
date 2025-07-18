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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检查项+资产ids 的集合单元
 *
 * @method integer getCustomerPolicyItemId() 获取检查项ID
 * @method void setCustomerPolicyItemId(integer $CustomerPolicyItemId) 设置检查项ID
 * @method array getCustomerAssetItemIdSet() 获取需要忽略指定检查项内的资产ID列表，为空表示所有
 * @method void setCustomerAssetItemIdSet(array $CustomerAssetItemIdSet) 设置需要忽略指定检查项内的资产ID列表，为空表示所有
 */
class CompliancePolicyAssetSetItem extends AbstractModel
{
    /**
     * @var integer 检查项ID
     */
    public $CustomerPolicyItemId;

    /**
     * @var array 需要忽略指定检查项内的资产ID列表，为空表示所有
     */
    public $CustomerAssetItemIdSet;

    /**
     * @param integer $CustomerPolicyItemId 检查项ID
     * @param array $CustomerAssetItemIdSet 需要忽略指定检查项内的资产ID列表，为空表示所有
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
        if (array_key_exists("CustomerPolicyItemId",$param) and $param["CustomerPolicyItemId"] !== null) {
            $this->CustomerPolicyItemId = $param["CustomerPolicyItemId"];
        }

        if (array_key_exists("CustomerAssetItemIdSet",$param) and $param["CustomerAssetItemIdSet"] !== null) {
            $this->CustomerAssetItemIdSet = $param["CustomerAssetItemIdSet"];
        }
    }
}
