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
 * ModifyModuleSecurityGroups请求参数结构体
 *
 * @method array getSecurityGroupIdSet() 获取安全组列表。不超过5个。
 * @method void setSecurityGroupIdSet(array $SecurityGroupIdSet) 设置安全组列表。不超过5个。
 * @method string getModuleId() 获取模块id。
 * @method void setModuleId(string $ModuleId) 设置模块id。
 */
class ModifyModuleSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var array 安全组列表。不超过5个。
     */
    public $SecurityGroupIdSet;

    /**
     * @var string 模块id。
     */
    public $ModuleId;

    /**
     * @param array $SecurityGroupIdSet 安全组列表。不超过5个。
     * @param string $ModuleId 模块id。
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
        if (array_key_exists("SecurityGroupIdSet",$param) and $param["SecurityGroupIdSet"] !== null) {
            $this->SecurityGroupIdSet = $param["SecurityGroupIdSet"];
        }

        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }
    }
}
