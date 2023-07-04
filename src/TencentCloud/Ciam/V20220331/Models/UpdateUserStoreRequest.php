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
 * UpdateUserStore请求参数结构体
 *
 * @method string getUserPoolId() 获取用户池ID
 * @method void setUserPoolId(string $UserPoolId) 设置用户池ID
 * @method string getUserPoolName() 获取用户池名字
 * @method void setUserPoolName(string $UserPoolName) 设置用户池名字
 * @method string getUserPoolDesc() 获取用户池描述
 * @method void setUserPoolDesc(string $UserPoolDesc) 设置用户池描述
 * @method string getUserPoolLogo() 获取用户池logo
 * @method void setUserPoolLogo(string $UserPoolLogo) 设置用户池logo
 */
class UpdateUserStoreRequest extends AbstractModel
{
    /**
     * @var string 用户池ID
     */
    public $UserPoolId;

    /**
     * @var string 用户池名字
     */
    public $UserPoolName;

    /**
     * @var string 用户池描述
     */
    public $UserPoolDesc;

    /**
     * @var string 用户池logo
     */
    public $UserPoolLogo;

    /**
     * @param string $UserPoolId 用户池ID
     * @param string $UserPoolName 用户池名字
     * @param string $UserPoolDesc 用户池描述
     * @param string $UserPoolLogo 用户池logo
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

        if (array_key_exists("UserPoolName",$param) and $param["UserPoolName"] !== null) {
            $this->UserPoolName = $param["UserPoolName"];
        }

        if (array_key_exists("UserPoolDesc",$param) and $param["UserPoolDesc"] !== null) {
            $this->UserPoolDesc = $param["UserPoolDesc"];
        }

        if (array_key_exists("UserPoolLogo",$param) and $param["UserPoolLogo"] !== null) {
            $this->UserPoolLogo = $param["UserPoolLogo"];
        }
    }
}
