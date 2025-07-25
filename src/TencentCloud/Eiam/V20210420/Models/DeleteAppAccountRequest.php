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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAppAccount请求参数结构体
 *
 * @method array getAccountIdList() 获取账号ID数组。
 * @method void setAccountIdList(array $AccountIdList) 设置账号ID数组。
 */
class DeleteAppAccountRequest extends AbstractModel
{
    /**
     * @var array 账号ID数组。
     */
    public $AccountIdList;

    /**
     * @param array $AccountIdList 账号ID数组。
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
        if (array_key_exists("AccountIdList",$param) and $param["AccountIdList"] !== null) {
            $this->AccountIdList = $param["AccountIdList"];
        }
    }
}
