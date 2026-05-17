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
 * DeleteCosPolicy请求参数结构体
 *
 * @method array getPolicyIdSet() 获取要删除的策略集合
 * @method void setPolicyIdSet(array $PolicyIdSet) 设置要删除的策略集合
 * @method integer getIsDeleteAll() 获取是否删除所有
 * @method void setIsDeleteAll(integer $IsDeleteAll) 设置是否删除所有
 */
class DeleteCosPolicyRequest extends AbstractModel
{
    /**
     * @var array 要删除的策略集合
     */
    public $PolicyIdSet;

    /**
     * @var integer 是否删除所有
     */
    public $IsDeleteAll;

    /**
     * @param array $PolicyIdSet 要删除的策略集合
     * @param integer $IsDeleteAll 是否删除所有
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
        if (array_key_exists("PolicyIdSet",$param) and $param["PolicyIdSet"] !== null) {
            $this->PolicyIdSet = $param["PolicyIdSet"];
        }

        if (array_key_exists("IsDeleteAll",$param) and $param["IsDeleteAll"] !== null) {
            $this->IsDeleteAll = $param["IsDeleteAll"];
        }
    }
}
