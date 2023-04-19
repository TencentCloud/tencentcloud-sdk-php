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
 * DescribeFlowTemplates请求参数结构体
 *
 * @method UserInfo getOperator() 获取调用方用户信息，userId 必填
 * @method void setOperator(UserInfo $Operator) 设置调用方用户信息，userId 必填
 * @method Agent getAgent() 获取代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 * @method void setAgent(Agent $Agent) 设置代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 * @method integer getOffset() 获取查询偏移位置，默认0
 * @method void setOffset(integer $Offset) 设置查询偏移位置，默认0
 * @method integer getLimit() 获取查询个数，默认20，最大200
 * @method void setLimit(integer $Limit) 设置查询个数，默认20，最大200
 * @method array getFilters() 获取搜索条件，具体参考Filter结构体。本接口取值：template-id：按照【 **模板唯一标识** 】进行过滤
 * @method void setFilters(array $Filters) 设置搜索条件，具体参考Filter结构体。本接口取值：template-id：按照【 **模板唯一标识** 】进行过滤
 * @method string getApplicationId() 获取这个参数跟下面的IsChannel参数配合使用。
IsChannel=false时，ApplicationId参数不起任何作用。
IsChannel=true时，ApplicationId为空，查询所有第三方应用集成平台企业模板列表；ApplicationId不为空，查询指定应用下的模板列表
ApplicationId为空，查询所有应用下的模板列表
 * @method void setApplicationId(string $ApplicationId) 设置这个参数跟下面的IsChannel参数配合使用。
IsChannel=false时，ApplicationId参数不起任何作用。
IsChannel=true时，ApplicationId为空，查询所有第三方应用集成平台企业模板列表；ApplicationId不为空，查询指定应用下的模板列表
ApplicationId为空，查询所有应用下的模板列表
 * @method boolean getIsChannel() 获取默认为false，查询SaaS模板库列表；
为true，查询第三方应用集成平台企业模板库管理列表
 * @method void setIsChannel(boolean $IsChannel) 设置默认为false，查询SaaS模板库列表；
为true，查询第三方应用集成平台企业模板库管理列表
 * @method integer getContentType() 获取查询内容：0-模板列表及详情（默认），1-仅模板列表
 * @method void setContentType(integer $ContentType) 设置查询内容：0-模板列表及详情（默认），1-仅模板列表
 * @method OrganizationInfo getOrganization() 获取暂未开放
 * @method void setOrganization(OrganizationInfo $Organization) 设置暂未开放
 * @method integer getGenerateSource() 获取暂未开放
 * @method void setGenerateSource(integer $GenerateSource) 设置暂未开放
 */
class DescribeFlowTemplatesRequest extends AbstractModel
{
    /**
     * @var UserInfo 调用方用户信息，userId 必填
     */
    public $Operator;

    /**
     * @var Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
     */
    public $Agent;

    /**
     * @var integer 查询偏移位置，默认0
     */
    public $Offset;

    /**
     * @var integer 查询个数，默认20，最大200
     */
    public $Limit;

    /**
     * @var array 搜索条件，具体参考Filter结构体。本接口取值：template-id：按照【 **模板唯一标识** 】进行过滤
     */
    public $Filters;

    /**
     * @var string 这个参数跟下面的IsChannel参数配合使用。
IsChannel=false时，ApplicationId参数不起任何作用。
IsChannel=true时，ApplicationId为空，查询所有第三方应用集成平台企业模板列表；ApplicationId不为空，查询指定应用下的模板列表
ApplicationId为空，查询所有应用下的模板列表
     */
    public $ApplicationId;

    /**
     * @var boolean 默认为false，查询SaaS模板库列表；
为true，查询第三方应用集成平台企业模板库管理列表
     */
    public $IsChannel;

    /**
     * @var integer 查询内容：0-模板列表及详情（默认），1-仅模板列表
     */
    public $ContentType;

    /**
     * @var OrganizationInfo 暂未开放
     */
    public $Organization;

    /**
     * @var integer 暂未开放
     */
    public $GenerateSource;

    /**
     * @param UserInfo $Operator 调用方用户信息，userId 必填
     * @param Agent $Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
     * @param integer $Offset 查询偏移位置，默认0
     * @param integer $Limit 查询个数，默认20，最大200
     * @param array $Filters 搜索条件，具体参考Filter结构体。本接口取值：template-id：按照【 **模板唯一标识** 】进行过滤
     * @param string $ApplicationId 这个参数跟下面的IsChannel参数配合使用。
IsChannel=false时，ApplicationId参数不起任何作用。
IsChannel=true时，ApplicationId为空，查询所有第三方应用集成平台企业模板列表；ApplicationId不为空，查询指定应用下的模板列表
ApplicationId为空，查询所有应用下的模板列表
     * @param boolean $IsChannel 默认为false，查询SaaS模板库列表；
为true，查询第三方应用集成平台企业模板库管理列表
     * @param integer $ContentType 查询内容：0-模板列表及详情（默认），1-仅模板列表
     * @param OrganizationInfo $Organization 暂未开放
     * @param integer $GenerateSource 暂未开放
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

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("IsChannel",$param) and $param["IsChannel"] !== null) {
            $this->IsChannel = $param["IsChannel"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("Organization",$param) and $param["Organization"] !== null) {
            $this->Organization = new OrganizationInfo();
            $this->Organization->deserialize($param["Organization"]);
        }

        if (array_key_exists("GenerateSource",$param) and $param["GenerateSource"] !== null) {
            $this->GenerateSource = $param["GenerateSource"];
        }
    }
}
