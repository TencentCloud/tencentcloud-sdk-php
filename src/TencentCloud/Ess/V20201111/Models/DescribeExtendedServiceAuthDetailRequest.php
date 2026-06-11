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
 * DescribeExtendedServiceAuthDetail请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method string getExtendServiceType() 获取<p>要查询的扩展服务类型。<br>如下所示：</p><ul><li>OPEN_SERVER_SIGN：企业静默签署</li><li>BATCH_SIGN：批量签署</li></ul>
 * @method void setExtendServiceType(string $ExtendServiceType) 设置<p>要查询的扩展服务类型。<br>如下所示：</p><ul><li>OPEN_SERVER_SIGN：企业静默签署</li><li>BATCH_SIGN：批量签署</li></ul>
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method integer getLimit() 获取<p>指定每页返回的数据条数，和Offset参数配合使用。 注：<code>1.默认值为20，单页做大值为200。</code></p>
 * @method void setLimit(integer $Limit) 设置<p>指定每页返回的数据条数，和Offset参数配合使用。 注：<code>1.默认值为20，单页做大值为200。</code></p>
 * @method integer getOffset() 获取<p>查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用。 注：<code>1.offset从0开始，即第一页为0。</code> <code>2.默认从第一页返回。</code></p>
 * @method void setOffset(integer $Offset) 设置<p>查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用。 注：<code>1.offset从0开始，即第一页为0。</code> <code>2.默认从第一页返回。</code></p>
 * @method string getPartnerOrganizationName() 获取<p>查询指定的合作方企业的授权信息，当ExtendServiceType=OPEN_SERVER_SIGN：企业静默签署时有效</p>
 * @method void setPartnerOrganizationName(string $PartnerOrganizationName) 设置<p>查询指定的合作方企业的授权信息，当ExtendServiceType=OPEN_SERVER_SIGN：企业静默签署时有效</p>
 */
class DescribeExtendedServiceAuthDetailRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var string <p>要查询的扩展服务类型。<br>如下所示：</p><ul><li>OPEN_SERVER_SIGN：企业静默签署</li><li>BATCH_SIGN：批量签署</li></ul>
     */
    public $ExtendServiceType;

    /**
     * @var Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @var integer <p>指定每页返回的数据条数，和Offset参数配合使用。 注：<code>1.默认值为20，单页做大值为200。</code></p>
     */
    public $Limit;

    /**
     * @var integer <p>查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用。 注：<code>1.offset从0开始，即第一页为0。</code> <code>2.默认从第一页返回。</code></p>
     */
    public $Offset;

    /**
     * @var string <p>查询指定的合作方企业的授权信息，当ExtendServiceType=OPEN_SERVER_SIGN：企业静默签署时有效</p>
     */
    public $PartnerOrganizationName;

    /**
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param string $ExtendServiceType <p>要查询的扩展服务类型。<br>如下所示：</p><ul><li>OPEN_SERVER_SIGN：企业静默签署</li><li>BATCH_SIGN：批量签署</li></ul>
     * @param Agent $Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     * @param integer $Limit <p>指定每页返回的数据条数，和Offset参数配合使用。 注：<code>1.默认值为20，单页做大值为200。</code></p>
     * @param integer $Offset <p>查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用。 注：<code>1.offset从0开始，即第一页为0。</code> <code>2.默认从第一页返回。</code></p>
     * @param string $PartnerOrganizationName <p>查询指定的合作方企业的授权信息，当ExtendServiceType=OPEN_SERVER_SIGN：企业静默签署时有效</p>
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

        if (array_key_exists("ExtendServiceType",$param) and $param["ExtendServiceType"] !== null) {
            $this->ExtendServiceType = $param["ExtendServiceType"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("PartnerOrganizationName",$param) and $param["PartnerOrganizationName"] !== null) {
            $this->PartnerOrganizationName = $param["PartnerOrganizationName"];
        }
    }
}
