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
namespace TencentCloud\Cloudstudio\V20230508\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateWorkspaceToken请求参数结构体
 *
 * @method string getSpaceKey() 获取工作空间 SpaceKey
 * @method void setSpaceKey(string $SpaceKey) 设置工作空间 SpaceKey
 * @method integer getTokenExpiredLimitSec() 获取token过期时间，单位是秒，默认 3600
 * @method void setTokenExpiredLimitSec(integer $TokenExpiredLimitSec) 设置token过期时间，单位是秒，默认 3600
 * @method array getPolicies() 获取token 授权策略，可选值为 workspace-run-only, all。默认为 all
 * @method void setPolicies(array $Policies) 设置token 授权策略，可选值为 workspace-run-only, all。默认为 all
 */
class CreateWorkspaceTokenRequest extends AbstractModel
{
    /**
     * @var string 工作空间 SpaceKey
     */
    public $SpaceKey;

    /**
     * @var integer token过期时间，单位是秒，默认 3600
     */
    public $TokenExpiredLimitSec;

    /**
     * @var array token 授权策略，可选值为 workspace-run-only, all。默认为 all
     */
    public $Policies;

    /**
     * @param string $SpaceKey 工作空间 SpaceKey
     * @param integer $TokenExpiredLimitSec token过期时间，单位是秒，默认 3600
     * @param array $Policies token 授权策略，可选值为 workspace-run-only, all。默认为 all
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
        if (array_key_exists("SpaceKey",$param) and $param["SpaceKey"] !== null) {
            $this->SpaceKey = $param["SpaceKey"];
        }

        if (array_key_exists("TokenExpiredLimitSec",$param) and $param["TokenExpiredLimitSec"] !== null) {
            $this->TokenExpiredLimitSec = $param["TokenExpiredLimitSec"];
        }

        if (array_key_exists("Policies",$param) and $param["Policies"] !== null) {
            $this->Policies = $param["Policies"];
        }
    }
}
