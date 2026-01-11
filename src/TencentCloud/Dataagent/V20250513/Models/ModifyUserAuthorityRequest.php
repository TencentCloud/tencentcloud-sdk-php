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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUserAuthority请求参数结构体
 *
 * @method integer getUseScope() 获取作用范围：1仅自己使用，2指定用户，0全员
 * @method void setUseScope(integer $UseScope) 设置作用范围：1仅自己使用，2指定用户，0全员
 * @method array getAuthorityUins() 获取可使用的用户列表，UseScope=0/1,取值为[]
 * @method void setAuthorityUins(array $AuthorityUins) 设置可使用的用户列表，UseScope=0/1,取值为[]
 */
class ModifyUserAuthorityRequest extends AbstractModel
{
    /**
     * @var integer 作用范围：1仅自己使用，2指定用户，0全员
     */
    public $UseScope;

    /**
     * @var array 可使用的用户列表，UseScope=0/1,取值为[]
     */
    public $AuthorityUins;

    /**
     * @param integer $UseScope 作用范围：1仅自己使用，2指定用户，0全员
     * @param array $AuthorityUins 可使用的用户列表，UseScope=0/1,取值为[]
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
        if (array_key_exists("UseScope",$param) and $param["UseScope"] !== null) {
            $this->UseScope = $param["UseScope"];
        }

        if (array_key_exists("AuthorityUins",$param) and $param["AuthorityUins"] !== null) {
            $this->AuthorityUins = $param["AuthorityUins"];
        }
    }
}
