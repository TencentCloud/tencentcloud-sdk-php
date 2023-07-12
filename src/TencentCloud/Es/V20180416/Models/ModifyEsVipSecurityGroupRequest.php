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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEsVipSecurityGroup请求参数结构体
 *
 * @method string getInstanceId() 获取es集群的实例id
 * @method void setInstanceId(string $InstanceId) 设置es集群的实例id
 * @method array getSecurityGroupIds() 获取安全组id列表
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组id列表
 */
class ModifyEsVipSecurityGroupRequest extends AbstractModel
{
    /**
     * @var string es集群的实例id
     */
    public $InstanceId;

    /**
     * @var array 安全组id列表
     */
    public $SecurityGroupIds;

    /**
     * @param string $InstanceId es集群的实例id
     * @param array $SecurityGroupIds 安全组id列表
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
