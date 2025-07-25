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
 * BindOrganizationPolicySubAccount请求参数结构体
 *
 * @method integer getPolicyId() 获取策略ID。
 * @method void setPolicyId(integer $PolicyId) 设置策略ID。
 * @method array getOrgSubAccountUins() 获取组织管理员子账号Uin列表。最大5个
 * @method void setOrgSubAccountUins(array $OrgSubAccountUins) 设置组织管理员子账号Uin列表。最大5个
 */
class BindOrganizationPolicySubAccountRequest extends AbstractModel
{
    /**
     * @var integer 策略ID。
     */
    public $PolicyId;

    /**
     * @var array 组织管理员子账号Uin列表。最大5个
     */
    public $OrgSubAccountUins;

    /**
     * @param integer $PolicyId 策略ID。
     * @param array $OrgSubAccountUins 组织管理员子账号Uin列表。最大5个
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("OrgSubAccountUins",$param) and $param["OrgSubAccountUins"] !== null) {
            $this->OrgSubAccountUins = $param["OrgSubAccountUins"];
        }
    }
}
