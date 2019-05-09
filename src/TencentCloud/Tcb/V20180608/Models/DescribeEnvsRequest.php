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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getEnvId() 获取环境ID，如果传了这个参数则只返回该环境的相关信息
 * @method void setEnvId(string $EnvId) 设置环境ID，如果传了这个参数则只返回该环境的相关信息
 */

/**
 *DescribeEnvs请求参数结构体
 */
class DescribeEnvsRequest extends AbstractModel
{
    /**
     * @var string 环境ID，如果传了这个参数则只返回该环境的相关信息
     */
    public $EnvId;
    /**
     * @param string $EnvId 环境ID，如果传了这个参数则只返回该环境的相关信息
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }
    }
}
