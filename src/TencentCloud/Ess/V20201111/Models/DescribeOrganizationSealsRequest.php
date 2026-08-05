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
 * DescribeOrganizationSeals请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method integer getLimit() 获取<p>指定分页每页返回的数据条数，如果不传默认为 20，单页最大支持 200。</p>
 * @method void setLimit(integer $Limit) 设置<p>指定分页每页返回的数据条数，如果不传默认为 20，单页最大支持 200。</p>
 * @method integer getOffset() 获取<p>指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0，最大 20000。</p>
 * @method void setOffset(integer $Offset) 设置<p>指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0，最大 20000。</p>
 * @method integer getInfoType() 获取<p>查询授权用户信息类型，取值如下：</p><ul> <li><b>0</b>：（默认）不返回授权用户信息</li> <li><b>1</b>：返回授权用户的信息</li> </ul>
 * @method void setInfoType(integer $InfoType) 设置<p>查询授权用户信息类型，取值如下：</p><ul> <li><b>0</b>：（默认）不返回授权用户信息</li> <li><b>1</b>：返回授权用户的信息</li> </ul>
 * @method string getSealId() 获取<p>印章id，是否查询特定的印章（没有输入返回所有）</p>
 * @method void setSealId(string $SealId) 设置<p>印章id，是否查询特定的印章（没有输入返回所有）</p>
 * @method array getSealTypes() 获取<p>印章种类列表（均为组织机构印章）。 若无特定需求，将展示所有类型的印章。 目前支持以下几种：<ul> <li><strong>OFFICIAL</strong>：企业公章；</li> <li><strong>CONTRACT</strong>：合同专用章；</li> <li><strong>FINANCE</strong>：财务专用章；</li> <li><strong>PERSONNEL</strong>：人事专用章；</li><li><strong>INVOICE</strong>：发票专用章；</li><li><strong>LEGAL_PERSON_SEAL</strong>：法定代表人章。</li> <li><strong>EMPLOYEE_QUALIFICATION_SEAL</strong>：员工执业章。</li><li><strong>OTHER</strong>其他类型印章</li> <li><strong>OTHER_xx</strong>其他印章子类型</li> </ul><br>注:  <code>1.为空时查询所有类型的印章。</code><br>注:  <code>2.OTHER_XX该类型为其他印章子类型，如需使用，请联系对接客服申请开通。具体可传入的子类型值，需在申请开通后由客服提供。</code></p>
 * @method void setSealTypes(array $SealTypes) 设置<p>印章种类列表（均为组织机构印章）。 若无特定需求，将展示所有类型的印章。 目前支持以下几种：<ul> <li><strong>OFFICIAL</strong>：企业公章；</li> <li><strong>CONTRACT</strong>：合同专用章；</li> <li><strong>FINANCE</strong>：财务专用章；</li> <li><strong>PERSONNEL</strong>：人事专用章；</li><li><strong>INVOICE</strong>：发票专用章；</li><li><strong>LEGAL_PERSON_SEAL</strong>：法定代表人章。</li> <li><strong>EMPLOYEE_QUALIFICATION_SEAL</strong>：员工执业章。</li><li><strong>OTHER</strong>其他类型印章</li> <li><strong>OTHER_xx</strong>其他印章子类型</li> </ul><br>注:  <code>1.为空时查询所有类型的印章。</code><br>注:  <code>2.OTHER_XX该类型为其他印章子类型，如需使用，请联系对接客服申请开通。具体可传入的子类型值，需在申请开通后由客服提供。</code></p>
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method array getSealStatuses() 获取<p>需查询的印章状态列表。</p><ul><li>空：（默认）仅查询启用状态的印章；</li><li><strong>ALL</strong>：查询所有状态的印章；</li><li><strong>CHECKING</strong>：查询待审核的印章；</li><li><strong>SUCCESS</strong>：查询启用状态的印章；</li><li><strong>FAIL</strong>：查询印章审核拒绝的印章；</li><li><strong>DISABLE</strong>：查询已停用的印章；</li><li><strong>STOPPED</strong>：查询已终止的印章；</li><li><strong>VOID</strong>：查询已作废的印章；</li><li><strong>INVALID</strong>：查询已失效的印章。</li></ul>
 * @method void setSealStatuses(array $SealStatuses) 设置<p>需查询的印章状态列表。</p><ul><li>空：（默认）仅查询启用状态的印章；</li><li><strong>ALL</strong>：查询所有状态的印章；</li><li><strong>CHECKING</strong>：查询待审核的印章；</li><li><strong>SUCCESS</strong>：查询启用状态的印章；</li><li><strong>FAIL</strong>：查询印章审核拒绝的印章；</li><li><strong>DISABLE</strong>：查询已停用的印章；</li><li><strong>STOPPED</strong>：查询已终止的印章；</li><li><strong>VOID</strong>：查询已作废的印章；</li><li><strong>INVALID</strong>：查询已失效的印章。</li></ul>
 */
class DescribeOrganizationSealsRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var integer <p>指定分页每页返回的数据条数，如果不传默认为 20，单页最大支持 200。</p>
     */
    public $Limit;

    /**
     * @var integer <p>指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0，最大 20000。</p>
     */
    public $Offset;

    /**
     * @var integer <p>查询授权用户信息类型，取值如下：</p><ul> <li><b>0</b>：（默认）不返回授权用户信息</li> <li><b>1</b>：返回授权用户的信息</li> </ul>
     */
    public $InfoType;

    /**
     * @var string <p>印章id，是否查询特定的印章（没有输入返回所有）</p>
     */
    public $SealId;

    /**
     * @var array <p>印章种类列表（均为组织机构印章）。 若无特定需求，将展示所有类型的印章。 目前支持以下几种：<ul> <li><strong>OFFICIAL</strong>：企业公章；</li> <li><strong>CONTRACT</strong>：合同专用章；</li> <li><strong>FINANCE</strong>：财务专用章；</li> <li><strong>PERSONNEL</strong>：人事专用章；</li><li><strong>INVOICE</strong>：发票专用章；</li><li><strong>LEGAL_PERSON_SEAL</strong>：法定代表人章。</li> <li><strong>EMPLOYEE_QUALIFICATION_SEAL</strong>：员工执业章。</li><li><strong>OTHER</strong>其他类型印章</li> <li><strong>OTHER_xx</strong>其他印章子类型</li> </ul><br>注:  <code>1.为空时查询所有类型的印章。</code><br>注:  <code>2.OTHER_XX该类型为其他印章子类型，如需使用，请联系对接客服申请开通。具体可传入的子类型值，需在申请开通后由客服提供。</code></p>
     */
    public $SealTypes;

    /**
     * @var Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @var array <p>需查询的印章状态列表。</p><ul><li>空：（默认）仅查询启用状态的印章；</li><li><strong>ALL</strong>：查询所有状态的印章；</li><li><strong>CHECKING</strong>：查询待审核的印章；</li><li><strong>SUCCESS</strong>：查询启用状态的印章；</li><li><strong>FAIL</strong>：查询印章审核拒绝的印章；</li><li><strong>DISABLE</strong>：查询已停用的印章；</li><li><strong>STOPPED</strong>：查询已终止的印章；</li><li><strong>VOID</strong>：查询已作废的印章；</li><li><strong>INVALID</strong>：查询已失效的印章。</li></ul>
     */
    public $SealStatuses;

    /**
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param integer $Limit <p>指定分页每页返回的数据条数，如果不传默认为 20，单页最大支持 200。</p>
     * @param integer $Offset <p>指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0，最大 20000。</p>
     * @param integer $InfoType <p>查询授权用户信息类型，取值如下：</p><ul> <li><b>0</b>：（默认）不返回授权用户信息</li> <li><b>1</b>：返回授权用户的信息</li> </ul>
     * @param string $SealId <p>印章id，是否查询特定的印章（没有输入返回所有）</p>
     * @param array $SealTypes <p>印章种类列表（均为组织机构印章）。 若无特定需求，将展示所有类型的印章。 目前支持以下几种：<ul> <li><strong>OFFICIAL</strong>：企业公章；</li> <li><strong>CONTRACT</strong>：合同专用章；</li> <li><strong>FINANCE</strong>：财务专用章；</li> <li><strong>PERSONNEL</strong>：人事专用章；</li><li><strong>INVOICE</strong>：发票专用章；</li><li><strong>LEGAL_PERSON_SEAL</strong>：法定代表人章。</li> <li><strong>EMPLOYEE_QUALIFICATION_SEAL</strong>：员工执业章。</li><li><strong>OTHER</strong>其他类型印章</li> <li><strong>OTHER_xx</strong>其他印章子类型</li> </ul><br>注:  <code>1.为空时查询所有类型的印章。</code><br>注:  <code>2.OTHER_XX该类型为其他印章子类型，如需使用，请联系对接客服申请开通。具体可传入的子类型值，需在申请开通后由客服提供。</code></p>
     * @param Agent $Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     * @param array $SealStatuses <p>需查询的印章状态列表。</p><ul><li>空：（默认）仅查询启用状态的印章；</li><li><strong>ALL</strong>：查询所有状态的印章；</li><li><strong>CHECKING</strong>：查询待审核的印章；</li><li><strong>SUCCESS</strong>：查询启用状态的印章；</li><li><strong>FAIL</strong>：查询印章审核拒绝的印章；</li><li><strong>DISABLE</strong>：查询已停用的印章；</li><li><strong>STOPPED</strong>：查询已终止的印章；</li><li><strong>VOID</strong>：查询已作废的印章；</li><li><strong>INVALID</strong>：查询已失效的印章。</li></ul>
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("InfoType",$param) and $param["InfoType"] !== null) {
            $this->InfoType = $param["InfoType"];
        }

        if (array_key_exists("SealId",$param) and $param["SealId"] !== null) {
            $this->SealId = $param["SealId"];
        }

        if (array_key_exists("SealTypes",$param) and $param["SealTypes"] !== null) {
            $this->SealTypes = $param["SealTypes"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("SealStatuses",$param) and $param["SealStatuses"] !== null) {
            $this->SealStatuses = $param["SealStatuses"];
        }
    }
}
