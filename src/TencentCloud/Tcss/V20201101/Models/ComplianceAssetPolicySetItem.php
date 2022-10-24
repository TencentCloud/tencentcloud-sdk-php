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
 * 资产+检查项ids 集合单元
 *
 * @method integer getCustomerAssetItemId() 获取资产ID
 * @method void setCustomerAssetItemId(integer $CustomerAssetItemId) 设置资产ID
 * @method array getCustomerPolicyItemIdSet() 获取需要忽略指定资产内的检查项ID列表，为空表示所有
 * @method void setCustomerPolicyItemIdSet(array $CustomerPolicyItemIdSet) 设置需要忽略指定资产内的检查项ID列表，为空表示所有
 */
class ComplianceAssetPolicySetItem extends AbstractModel
{
    /**
     * @var integer 资产ID
     */
    public $CustomerAssetItemId;

    /**
     * @var array 需要忽略指定资产内的检查项ID列表，为空表示所有
     */
    public $CustomerPolicyItemIdSet;

    /**
     * @param integer $CustomerAssetItemId 资产ID
     * @param array $CustomerPolicyItemIdSet 需要忽略指定资产内的检查项ID列表，为空表示所有
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
        if (array_key_exists("CustomerAssetItemId",$param) and $param["CustomerAssetItemId"] !== null) {
            $this->CustomerAssetItemId = $param["CustomerAssetItemId"];
        }

        if (array_key_exists("CustomerPolicyItemIdSet",$param) and $param["CustomerPolicyItemIdSet"] !== null) {
            $this->CustomerPolicyItemIdSet = $param["CustomerPolicyItemIdSet"];
        }
    }
}
