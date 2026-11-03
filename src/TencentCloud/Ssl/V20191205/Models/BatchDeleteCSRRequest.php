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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchDeleteCSR请求参数结构体
 *
 * @method array getCSRIds() 获取要删除的CSR Id标识。最多100个
 * @method void setCSRIds(array $CSRIds) 设置要删除的CSR Id标识。最多100个
 */
class BatchDeleteCSRRequest extends AbstractModel
{
    /**
     * @var array 要删除的CSR Id标识。最多100个
     */
    public $CSRIds;

    /**
     * @param array $CSRIds 要删除的CSR Id标识。最多100个
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
        if (array_key_exists("CSRIds",$param) and $param["CSRIds"] !== null) {
            $this->CSRIds = $param["CSRIds"];
        }
    }
}
