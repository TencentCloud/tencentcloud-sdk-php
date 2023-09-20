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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOrganizationSeals请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method integer getLimit() 获取指定分页每页返回的数据条数，如果不传默认为 20，单页最大支持 200。
 * @method void setLimit(integer $Limit) 设置指定分页每页返回的数据条数，如果不传默认为 20，单页最大支持 200。
 * @method integer getOffset() 获取指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0，最大 20000。
 * @method void setOffset(integer $Offset) 设置指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0，最大 20000。
 * @method integer getInfoType() 获取查询信息类型，取值如下：
<ul>
<li>0不返回授权用户</li>
<li>1返回授权用户信息</li>
</ul>
 * @method void setInfoType(integer $InfoType) 设置查询信息类型，取值如下：
<ul>
<li>0不返回授权用户</li>
<li>1返回授权用户信息</li>
</ul>
 * @method string getSealId() 获取印章id（没有输入返回所有）
 * @method void setSealId(string $SealId) 设置印章id（没有输入返回所有）
 * @method array getSealTypes() 获取印章类型列表（都是组织机构印章）。
为空时查询所有类型的印章。
目前支持以下类型：
<ul>
<li>OFFICIAL：企业公章；</li>
<li>CONTRACT：合同专用章；</li>
<li>ORGANIZATION_SEAL：企业印章(图片上传创建)；</li>
<li>LEGAL_PERSON_SEAL：法定代表人章</li>
</ul>
 * @method void setSealTypes(array $SealTypes) 设置印章类型列表（都是组织机构印章）。
为空时查询所有类型的印章。
目前支持以下类型：
<ul>
<li>OFFICIAL：企业公章；</li>
<li>CONTRACT：合同专用章；</li>
<li>ORGANIZATION_SEAL：企业印章(图片上传创建)；</li>
<li>LEGAL_PERSON_SEAL：法定代表人章</li>
</ul>
 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method array getSealStatuses() 获取查询的印章状态列表。
<ul>
<li>空，只查询启用状态的印章；</li>
<li>ALL，查询所有状态的印章；</li>
<li>CHECKING，查询待审核的印章；</li>
<li>SUCCESS，查询启用状态的印章；</li>
<li>FAIL，查询印章审核拒绝的印章；</li>
<li>DISABLE，查询已停用的印章；</li>
<li>STOPPED，查询已终止的印章；</li>
<li>VOID，查询已作废的印章；</li>
<li>INVALID，查询已失效的印章；</li>
</ul>
 * @method void setSealStatuses(array $SealStatuses) 设置查询的印章状态列表。
<ul>
<li>空，只查询启用状态的印章；</li>
<li>ALL，查询所有状态的印章；</li>
<li>CHECKING，查询待审核的印章；</li>
<li>SUCCESS，查询启用状态的印章；</li>
<li>FAIL，查询印章审核拒绝的印章；</li>
<li>DISABLE，查询已停用的印章；</li>
<li>STOPPED，查询已终止的印章；</li>
<li>VOID，查询已作废的印章；</li>
<li>INVALID，查询已失效的印章；</li>
</ul>
 */
class DescribeOrganizationSealsRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var integer 指定分页每页返回的数据条数，如果不传默认为 20，单页最大支持 200。
     */
    public $Limit;

    /**
     * @var integer 指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0，最大 20000。
     */
    public $Offset;

    /**
     * @var integer 查询信息类型，取值如下：
<ul>
<li>0不返回授权用户</li>
<li>1返回授权用户信息</li>
</ul>
     */
    public $InfoType;

    /**
     * @var string 印章id（没有输入返回所有）
     */
    public $SealId;

    /**
     * @var array 印章类型列表（都是组织机构印章）。
为空时查询所有类型的印章。
目前支持以下类型：
<ul>
<li>OFFICIAL：企业公章；</li>
<li>CONTRACT：合同专用章；</li>
<li>ORGANIZATION_SEAL：企业印章(图片上传创建)；</li>
<li>LEGAL_PERSON_SEAL：法定代表人章</li>
</ul>
     */
    public $SealTypes;

    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var array 查询的印章状态列表。
<ul>
<li>空，只查询启用状态的印章；</li>
<li>ALL，查询所有状态的印章；</li>
<li>CHECKING，查询待审核的印章；</li>
<li>SUCCESS，查询启用状态的印章；</li>
<li>FAIL，查询印章审核拒绝的印章；</li>
<li>DISABLE，查询已停用的印章；</li>
<li>STOPPED，查询已终止的印章；</li>
<li>VOID，查询已作废的印章；</li>
<li>INVALID，查询已失效的印章；</li>
</ul>
     */
    public $SealStatuses;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param integer $Limit 指定分页每页返回的数据条数，如果不传默认为 20，单页最大支持 200。
     * @param integer $Offset 指定分页返回第几页的数据，如果不传默认返回第一页，页码从 0 开始，即首页为 0，最大 20000。
     * @param integer $InfoType 查询信息类型，取值如下：
<ul>
<li>0不返回授权用户</li>
<li>1返回授权用户信息</li>
</ul>
     * @param string $SealId 印章id（没有输入返回所有）
     * @param array $SealTypes 印章类型列表（都是组织机构印章）。
为空时查询所有类型的印章。
目前支持以下类型：
<ul>
<li>OFFICIAL：企业公章；</li>
<li>CONTRACT：合同专用章；</li>
<li>ORGANIZATION_SEAL：企业印章(图片上传创建)；</li>
<li>LEGAL_PERSON_SEAL：法定代表人章</li>
</ul>
     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param array $SealStatuses 查询的印章状态列表。
<ul>
<li>空，只查询启用状态的印章；</li>
<li>ALL，查询所有状态的印章；</li>
<li>CHECKING，查询待审核的印章；</li>
<li>SUCCESS，查询启用状态的印章；</li>
<li>FAIL，查询印章审核拒绝的印章；</li>
<li>DISABLE，查询已停用的印章；</li>
<li>STOPPED，查询已终止的印章；</li>
<li>VOID，查询已作废的印章；</li>
<li>INVALID，查询已失效的印章；</li>
</ul>
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
