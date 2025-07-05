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
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method string getExtendServiceType() 获取要查询的扩展服务类型。
如下所示：
<ul><li>OPEN_SERVER_SIGN：企业静默签署</li>
<li>BATCH_SIGN：批量签署</li>
</ul>

 * @method void setExtendServiceType(string $ExtendServiceType) 设置要查询的扩展服务类型。
如下所示：
<ul><li>OPEN_SERVER_SIGN：企业静默签署</li>
<li>BATCH_SIGN：批量签署</li>
</ul>

 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method integer getLimit() 获取指定每页返回的数据条数，和Offset参数配合使用。 注：`1.默认值为20，单页做大值为200。`	
 * @method void setLimit(integer $Limit) 设置指定每页返回的数据条数，和Offset参数配合使用。 注：`1.默认值为20，单页做大值为200。`	
 * @method integer getOffset() 获取查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用。 注：`1.offset从0开始，即第一页为0。` `2.默认从第一页返回。`	
 * @method void setOffset(integer $Offset) 设置查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用。 注：`1.offset从0开始，即第一页为0。` `2.默认从第一页返回。`	
 */
class DescribeExtendedServiceAuthDetailRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var string 要查询的扩展服务类型。
如下所示：
<ul><li>OPEN_SERVER_SIGN：企业静默签署</li>
<li>BATCH_SIGN：批量签署</li>
</ul>

     */
    public $ExtendServiceType;

    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var integer 指定每页返回的数据条数，和Offset参数配合使用。 注：`1.默认值为20，单页做大值为200。`	
     */
    public $Limit;

    /**
     * @var integer 查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用。 注：`1.offset从0开始，即第一页为0。` `2.默认从第一页返回。`	
     */
    public $Offset;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param string $ExtendServiceType 要查询的扩展服务类型。
如下所示：
<ul><li>OPEN_SERVER_SIGN：企业静默签署</li>
<li>BATCH_SIGN：批量签署</li>
</ul>

     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param integer $Limit 指定每页返回的数据条数，和Offset参数配合使用。 注：`1.默认值为20，单页做大值为200。`	
     * @param integer $Offset 查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用。 注：`1.offset从0开始，即第一页为0。` `2.默认从第一页返回。`	
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
    }
}
