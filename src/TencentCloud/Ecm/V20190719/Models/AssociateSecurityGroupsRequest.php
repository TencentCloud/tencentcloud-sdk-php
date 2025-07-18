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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssociateSecurityGroups请求参数结构体
 *
 * @method array getSecurityGroupIds() 获取要绑定的安全组ID，类似esg-efil73jd，只支持绑定单个安全组。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置要绑定的安全组ID，类似esg-efil73jd，只支持绑定单个安全组。
 * @method array getInstanceIds() 获取被绑定的实例ID，类似ein-lesecurk，支持指定多个实例，每次请求批量实例的上限为100。
 * @method void setInstanceIds(array $InstanceIds) 设置被绑定的实例ID，类似ein-lesecurk，支持指定多个实例，每次请求批量实例的上限为100。
 */
class AssociateSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var array 要绑定的安全组ID，类似esg-efil73jd，只支持绑定单个安全组。
     */
    public $SecurityGroupIds;

    /**
     * @var array 被绑定的实例ID，类似ein-lesecurk，支持指定多个实例，每次请求批量实例的上限为100。
     */
    public $InstanceIds;

    /**
     * @param array $SecurityGroupIds 要绑定的安全组ID，类似esg-efil73jd，只支持绑定单个安全组。
     * @param array $InstanceIds 被绑定的实例ID，类似ein-lesecurk，支持指定多个实例，每次请求批量实例的上限为100。
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
        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
