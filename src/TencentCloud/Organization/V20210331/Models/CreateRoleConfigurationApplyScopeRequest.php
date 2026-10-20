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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRoleConfigurationApplyScope请求参数结构体
 *
 * @method string getZoneId() 获取<p>用户目录</p>
 * @method void setZoneId(string $ZoneId) 设置<p>用户目录</p>
 * @method array getApplyScopeInfo() 获取<p>申请范围条目</p>
 * @method void setApplyScopeInfo(array $ApplyScopeInfo) 设置<p>申请范围条目</p>
 */
class CreateRoleConfigurationApplyScopeRequest extends AbstractModel
{
    /**
     * @var string <p>用户目录</p>
     */
    public $ZoneId;

    /**
     * @var array <p>申请范围条目</p>
     */
    public $ApplyScopeInfo;

    /**
     * @param string $ZoneId <p>用户目录</p>
     * @param array $ApplyScopeInfo <p>申请范围条目</p>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ApplyScopeInfo",$param) and $param["ApplyScopeInfo"] !== null) {
            $this->ApplyScopeInfo = [];
            foreach ($param["ApplyScopeInfo"] as $key => $value){
                $obj = new RoleAssignmentInfo();
                $obj->deserialize($value);
                array_push($this->ApplyScopeInfo, $obj);
            }
        }
    }
}
