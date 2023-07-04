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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteUserStore请求参数结构体
 *
 * @method string getUserPoolId() 获取用户池ID
 * @method void setUserPoolId(string $UserPoolId) 设置用户池ID
 */
class DeleteUserStoreRequest extends AbstractModel
{
    /**
     * @var string 用户池ID
     */
    public $UserPoolId;

    /**
     * @param string $UserPoolId 用户池ID
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
        if (array_key_exists("UserPoolId",$param) and $param["UserPoolId"] !== null) {
            $this->UserPoolId = $param["UserPoolId"];
        }
    }
}
