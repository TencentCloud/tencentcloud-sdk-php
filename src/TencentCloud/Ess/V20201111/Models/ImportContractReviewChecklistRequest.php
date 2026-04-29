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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportContractReviewChecklist请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method string getName() 获取<p>导入的合同审查清单名称</p>
 * @method void setName(string $Name) 设置<p>导入的合同审查清单名称</p>
 * @method array getCategories() 获取<p>导入的合同审查清单审查点列表</p>
 * @method void setCategories(array $Categories) 设置<p>导入的合同审查清单审查点列表</p>
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method string getChecklistID() 获取<p>如果传值，则更新对应的合同审查清单，否则创建新的合同审查清单</p>
 * @method void setChecklistID(string $ChecklistID) 设置<p>如果传值，则更新对应的合同审查清单，否则创建新的合同审查清单</p>
 * @method boolean getEnabled() 获取<p>设置为true则启动清单，否则禁用清单</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>设置为true则启动清单，否则禁用清单</p>
 */
class ImportContractReviewChecklistRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var string <p>导入的合同审查清单名称</p>
     */
    public $Name;

    /**
     * @var array <p>导入的合同审查清单审查点列表</p>
     */
    public $Categories;

    /**
     * @var Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @var string <p>如果传值，则更新对应的合同审查清单，否则创建新的合同审查清单</p>
     */
    public $ChecklistID;

    /**
     * @var boolean <p>设置为true则启动清单，否则禁用清单</p>
     */
    public $Enabled;

    /**
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param string $Name <p>导入的合同审查清单名称</p>
     * @param array $Categories <p>导入的合同审查清单审查点列表</p>
     * @param Agent $Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     * @param string $ChecklistID <p>如果传值，则更新对应的合同审查清单，否则创建新的合同审查清单</p>
     * @param boolean $Enabled <p>设置为true则启动清单，否则禁用清单</p>
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Categories",$param) and $param["Categories"] !== null) {
            $this->Categories = [];
            foreach ($param["Categories"] as $key => $value){
                $obj = new ChecklistCategory();
                $obj->deserialize($value);
                array_push($this->Categories, $obj);
            }
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("ChecklistID",$param) and $param["ChecklistID"] !== null) {
            $this->ChecklistID = $param["ChecklistID"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
