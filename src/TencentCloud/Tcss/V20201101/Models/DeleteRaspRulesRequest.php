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
 * DeleteRaspRules请求参数结构体
 *
 * @method array getIDs() 获取待删除的规则ID数组 (最大100条)
 * @method void setIDs(array $IDs) 设置待删除的规则ID数组 (最大100条)
 */
class DeleteRaspRulesRequest extends AbstractModel
{
    /**
     * @var array 待删除的规则ID数组 (最大100条)
     */
    public $IDs;

    /**
     * @param array $IDs 待删除的规则ID数组 (最大100条)
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
        if (array_key_exists("IDs",$param) and $param["IDs"] !== null) {
            $this->IDs = $param["IDs"];
        }
    }
}
