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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RegisterClaimPolicy请求参数结构体
 *
 * @method integer getCptIndex() 获取Cpt索引
 * @method void setCptIndex(integer $CptIndex) 设置Cpt索引
 * @method string getPolicy() 获取披露策略
 * @method void setPolicy(string $Policy) 设置披露策略
 */
class RegisterClaimPolicyRequest extends AbstractModel
{
    /**
     * @var integer Cpt索引
     */
    public $CptIndex;

    /**
     * @var string 披露策略
     */
    public $Policy;

    /**
     * @param integer $CptIndex Cpt索引
     * @param string $Policy 披露策略
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
        if (array_key_exists("CptIndex",$param) and $param["CptIndex"] !== null) {
            $this->CptIndex = $param["CptIndex"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }
    }
}
