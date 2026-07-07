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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyModelRouterSecurityGroups请求参数结构体
 *
 * @method string getModelRouterId() 获取<p>模型路由实例ID</p>
 * @method void setModelRouterId(string $ModelRouterId) 设置<p>模型路由实例ID</p>
 * @method array getSecurityGroups() 获取<p>需要绑定的安全组ID列表</p>
 * @method void setSecurityGroups(array $SecurityGroups) 设置<p>需要绑定的安全组ID列表</p>
 */
class ModifyModelRouterSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string <p>模型路由实例ID</p>
     */
    public $ModelRouterId;

    /**
     * @var array <p>需要绑定的安全组ID列表</p>
     */
    public $SecurityGroups;

    /**
     * @param string $ModelRouterId <p>模型路由实例ID</p>
     * @param array $SecurityGroups <p>需要绑定的安全组ID列表</p>
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
        if (array_key_exists("ModelRouterId",$param) and $param["ModelRouterId"] !== null) {
            $this->ModelRouterId = $param["ModelRouterId"];
        }

        if (array_key_exists("SecurityGroups",$param) and $param["SecurityGroups"] !== null) {
            $this->SecurityGroups = $param["SecurityGroups"];
        }
    }
}
