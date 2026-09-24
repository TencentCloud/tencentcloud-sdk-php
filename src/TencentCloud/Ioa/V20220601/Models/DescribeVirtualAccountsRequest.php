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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVirtualAccounts请求参数结构体
 *
 * @method integer getVirtualGroupId() 获取<p>账户虚拟组Id(只支持32位)</p>
 * @method void setVirtualGroupId(integer $VirtualGroupId) 设置<p>账户虚拟组Id(只支持32位)</p>
 * @method string getDomainInstanceId() 获取管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
 * @method void setDomainInstanceId(string $DomainInstanceId) 设置管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
 * @method Condition getCondition() 获取<p>滤条件、分页参数</p><li>UserName - String - 是否必填：否 - 操作符: eq,like  - 排序支持：否- 按用户名称过滤。</li><li>UserId - String - 是否必填：否 - 操作符: eq,like  - 排序支持：否- 按用户账号过滤。</li><li>Phone - String - 是否必填：否 - 操作符: eq,like  - 排序支持：否- 按电话过滤。</li>
 * @method void setCondition(Condition $Condition) 设置<p>滤条件、分页参数</p><li>UserName - String - 是否必填：否 - 操作符: eq,like  - 排序支持：否- 按用户名称过滤。</li><li>UserId - String - 是否必填：否 - 操作符: eq,like  - 排序支持：否- 按用户账号过滤。</li><li>Phone - String - 是否必填：否 - 操作符: eq,like  - 排序支持：否- 按电话过滤。</li>
 */
class DescribeVirtualAccountsRequest extends AbstractModel
{
    /**
     * @var integer <p>账户虚拟组Id(只支持32位)</p>
     */
    public $VirtualGroupId;

    /**
     * @var string 管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
     */
    public $DomainInstanceId;

    /**
     * @var Condition <p>滤条件、分页参数</p><li>UserName - String - 是否必填：否 - 操作符: eq,like  - 排序支持：否- 按用户名称过滤。</li><li>UserId - String - 是否必填：否 - 操作符: eq,like  - 排序支持：否- 按用户账号过滤。</li><li>Phone - String - 是否必填：否 - 操作符: eq,like  - 排序支持：否- 按电话过滤。</li>
     */
    public $Condition;

    /**
     * @param integer $VirtualGroupId <p>账户虚拟组Id(只支持32位)</p>
     * @param string $DomainInstanceId 管理域实例ID，用于CAM管理域权限分配。若企业未进行管理域的划分，可直接传入根域"1"，此时表示针对当前企业的全部设备和账号进行接口CRUD，具体CRUD的影响范围限制于相应接口的入参。
     * @param Condition $Condition <p>滤条件、分页参数</p><li>UserName - String - 是否必填：否 - 操作符: eq,like  - 排序支持：否- 按用户名称过滤。</li><li>UserId - String - 是否必填：否 - 操作符: eq,like  - 排序支持：否- 按用户账号过滤。</li><li>Phone - String - 是否必填：否 - 操作符: eq,like  - 排序支持：否- 按电话过滤。</li>
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
        if (array_key_exists("VirtualGroupId",$param) and $param["VirtualGroupId"] !== null) {
            $this->VirtualGroupId = $param["VirtualGroupId"];
        }

        if (array_key_exists("DomainInstanceId",$param) and $param["DomainInstanceId"] !== null) {
            $this->DomainInstanceId = $param["DomainInstanceId"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = new Condition();
            $this->Condition->deserialize($param["Condition"]);
        }
    }
}
