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
 * DescribeSingleSignOnEmployees请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。使用此接口时，必须填写userId。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。使用此接口时，必须填写userId。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method string getSsoApplicationId() 获取单点登录应用号的id,获取位置如下图![image](https://qcloudimg.tencent-cloud.cn/raw/9e61aaf390a5f90ea7606fe29b9a65fd.png)
 * @method void setSsoApplicationId(string $SsoApplicationId) 设置单点登录应用号的id,获取位置如下图![image](https://qcloudimg.tencent-cloud.cn/raw/9e61aaf390a5f90ea7606fe29b9a65fd.png)
 * @method array getOpenIds() 获取需要删除的单点登录员工的唯一Id 值.不能超过 200 个。
如果传递了 openIds，limit 和 offset 参数无效，
 * @method void setOpenIds(array $OpenIds) 设置需要删除的单点登录员工的唯一Id 值.不能超过 200 个。
如果传递了 openIds，limit 和 offset 参数无效，
 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method integer getLimit() 获取指定分页每页返回的数据条数，单页最大支持 200。如果不传， 则默认是 20.
 * @method void setLimit(integer $Limit) 设置指定分页每页返回的数据条数，单页最大支持 200。如果不传， 则默认是 20.
 * @method integer getOffset() 获取OFFSET 用于指定查询结果的偏移量，如果不传默认偏移为0,最大20000。 分页参数, 需要limit, offset 配合使用 例如: 您希望得到第三页的数据, 且每页限制最多10条 您可以使用 LIMIT 10 OFFSET 20	
 * @method void setOffset(integer $Offset) 设置OFFSET 用于指定查询结果的偏移量，如果不传默认偏移为0,最大20000。 分页参数, 需要limit, offset 配合使用 例如: 您希望得到第三页的数据, 且每页限制最多10条 您可以使用 LIMIT 10 OFFSET 20	
 */
class DescribeSingleSignOnEmployeesRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息。使用此接口时，必须填写userId。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var string 单点登录应用号的id,获取位置如下图![image](https://qcloudimg.tencent-cloud.cn/raw/9e61aaf390a5f90ea7606fe29b9a65fd.png)
     */
    public $SsoApplicationId;

    /**
     * @var array 需要删除的单点登录员工的唯一Id 值.不能超过 200 个。
如果传递了 openIds，limit 和 offset 参数无效，
     */
    public $OpenIds;

    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var integer 指定分页每页返回的数据条数，单页最大支持 200。如果不传， 则默认是 20.
     */
    public $Limit;

    /**
     * @var integer OFFSET 用于指定查询结果的偏移量，如果不传默认偏移为0,最大20000。 分页参数, 需要limit, offset 配合使用 例如: 您希望得到第三页的数据, 且每页限制最多10条 您可以使用 LIMIT 10 OFFSET 20	
     */
    public $Offset;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息。使用此接口时，必须填写userId。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param string $SsoApplicationId 单点登录应用号的id,获取位置如下图![image](https://qcloudimg.tencent-cloud.cn/raw/9e61aaf390a5f90ea7606fe29b9a65fd.png)
     * @param array $OpenIds 需要删除的单点登录员工的唯一Id 值.不能超过 200 个。
如果传递了 openIds，limit 和 offset 参数无效，
     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param integer $Limit 指定分页每页返回的数据条数，单页最大支持 200。如果不传， 则默认是 20.
     * @param integer $Offset OFFSET 用于指定查询结果的偏移量，如果不传默认偏移为0,最大20000。 分页参数, 需要limit, offset 配合使用 例如: 您希望得到第三页的数据, 且每页限制最多10条 您可以使用 LIMIT 10 OFFSET 20	
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

        if (array_key_exists("SsoApplicationId",$param) and $param["SsoApplicationId"] !== null) {
            $this->SsoApplicationId = $param["SsoApplicationId"];
        }

        if (array_key_exists("OpenIds",$param) and $param["OpenIds"] !== null) {
            $this->OpenIds = $param["OpenIds"];
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
