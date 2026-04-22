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
 * OperateFlowRemarks请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method string getOperateType() 获取<p>操作类型，可取值如下:</p><ul><li>DELETE:  删除</li><li>ENABLE: 启用</li><li>DISABLE: 停用</li><li>COPY: 复制新建</li></ul>
 * @method void setOperateType(string $OperateType) 设置<p>操作类型，可取值如下:</p><ul><li>DELETE:  删除</li><li>ENABLE: 启用</li><li>DISABLE: 停用</li><li>COPY: 复制新建</li></ul>
 * @method string getFlowId() 获取<p>对应的合同流程id</p><p>目标合同为合同组时此参数不填</p>
 * @method void setFlowId(string $FlowId) 设置<p>对应的合同流程id</p><p>目标合同为合同组时此参数不填</p>
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method string getFlowGroupId() 获取<p>对应合同组id</p><p>目标合同为单份合同时此参数不填</p>
 * @method void setFlowGroupId(string $FlowGroupId) 设置<p>对应合同组id</p><p>目标合同为单份合同时此参数不填</p>
 * @method FlowRemarkItem getFlowItem() 获取<p>合同备注信息。</p><p>入参限制：当OperateType为UPDATE和DELETE时，通过该结构体进行对应备注操作，合同备注数量范围为 1 - 5个。</p>
 * @method void setFlowItem(FlowRemarkItem $FlowItem) 设置<p>合同备注信息。</p><p>入参限制：当OperateType为UPDATE和DELETE时，通过该结构体进行对应备注操作，合同备注数量范围为 1 - 5个。</p>
 * @method array getFlowItems() 获取<p>合同备注列表。</p><p>入参限制：当OperateType为CREATE时，通过该参数进行全量的合同备注创建。</p>
 * @method void setFlowItems(array $FlowItems) 设置<p>合同备注列表。</p><p>入参限制：当OperateType为CREATE时，通过该参数进行全量的合同备注创建。</p>
 */
class OperateFlowRemarksRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var string <p>操作类型，可取值如下:</p><ul><li>DELETE:  删除</li><li>ENABLE: 启用</li><li>DISABLE: 停用</li><li>COPY: 复制新建</li></ul>
     */
    public $OperateType;

    /**
     * @var string <p>对应的合同流程id</p><p>目标合同为合同组时此参数不填</p>
     */
    public $FlowId;

    /**
     * @var Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @var string <p>对应合同组id</p><p>目标合同为单份合同时此参数不填</p>
     */
    public $FlowGroupId;

    /**
     * @var FlowRemarkItem <p>合同备注信息。</p><p>入参限制：当OperateType为UPDATE和DELETE时，通过该结构体进行对应备注操作，合同备注数量范围为 1 - 5个。</p>
     */
    public $FlowItem;

    /**
     * @var array <p>合同备注列表。</p><p>入参限制：当OperateType为CREATE时，通过该参数进行全量的合同备注创建。</p>
     */
    public $FlowItems;

    /**
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param string $OperateType <p>操作类型，可取值如下:</p><ul><li>DELETE:  删除</li><li>ENABLE: 启用</li><li>DISABLE: 停用</li><li>COPY: 复制新建</li></ul>
     * @param string $FlowId <p>对应的合同流程id</p><p>目标合同为合同组时此参数不填</p>
     * @param Agent $Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     * @param string $FlowGroupId <p>对应合同组id</p><p>目标合同为单份合同时此参数不填</p>
     * @param FlowRemarkItem $FlowItem <p>合同备注信息。</p><p>入参限制：当OperateType为UPDATE和DELETE时，通过该结构体进行对应备注操作，合同备注数量范围为 1 - 5个。</p>
     * @param array $FlowItems <p>合同备注列表。</p><p>入参限制：当OperateType为CREATE时，通过该参数进行全量的合同备注创建。</p>
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

        if (array_key_exists("OperateType",$param) and $param["OperateType"] !== null) {
            $this->OperateType = $param["OperateType"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("FlowGroupId",$param) and $param["FlowGroupId"] !== null) {
            $this->FlowGroupId = $param["FlowGroupId"];
        }

        if (array_key_exists("FlowItem",$param) and $param["FlowItem"] !== null) {
            $this->FlowItem = new FlowRemarkItem();
            $this->FlowItem->deserialize($param["FlowItem"]);
        }

        if (array_key_exists("FlowItems",$param) and $param["FlowItems"] !== null) {
            $this->FlowItems = $param["FlowItems"];
        }
    }
}
