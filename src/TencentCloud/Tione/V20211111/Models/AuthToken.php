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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 在线服务的 AuthToken 数据
 *
 * @method AuthTokenBase getBase() 获取AuthToken 基础信息
 * @method void setBase(AuthTokenBase $Base) 设置AuthToken 基础信息
 * @method array getLimits() 获取AuthToken 限流数组
 * @method void setLimits(array $Limits) 设置AuthToken 限流数组
 */
class AuthToken extends AbstractModel
{
    /**
     * @var AuthTokenBase AuthToken 基础信息
     */
    public $Base;

    /**
     * @var array AuthToken 限流数组
     */
    public $Limits;

    /**
     * @param AuthTokenBase $Base AuthToken 基础信息
     * @param array $Limits AuthToken 限流数组
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
        if (array_key_exists("Base",$param) and $param["Base"] !== null) {
            $this->Base = new AuthTokenBase();
            $this->Base->deserialize($param["Base"]);
        }

        if (array_key_exists("Limits",$param) and $param["Limits"] !== null) {
            $this->Limits = [];
            foreach ($param["Limits"] as $key => $value){
                $obj = new AuthTokenLimit();
                $obj->deserialize($value);
                array_push($this->Limits, $obj);
            }
        }
    }
}
