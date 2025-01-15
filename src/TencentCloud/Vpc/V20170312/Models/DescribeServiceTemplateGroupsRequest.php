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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeServiceTemplateGroups请求参数结构体
 *
 * @method array getFilters() 获取过滤条件。
<li>service-template-group-name - String - （过滤条件）协议端口模板集合名称。</li>
<li>service-template-group-id - String - （过滤条件）协议端口模板集合实例ID，例如：ppmg-e6dy460g。</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>service-template-group-name - String - （过滤条件）协议端口模板集合名称。</li>
<li>service-template-group-id - String - （过滤条件）协议端口模板集合实例ID，例如：ppmg-e6dy460g。</li>
 * @method string getOffset() 获取偏移量，默认为0。
 * @method void setOffset(string $Offset) 设置偏移量，默认为0。
 * @method string getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(string $Limit) 设置返回数量，默认为20，最大值为100。
 * @method boolean getNeedMemberInfo() 获取是否获取协议端口模板成员标识。
 * @method void setNeedMemberInfo(boolean $NeedMemberInfo) 设置是否获取协议端口模板成员标识。
 * @method string getOrderField() 获取排序字段。支持：`ServiceTemplateGroupId ` `CreatedTime` `UpdateTime`。注意：该字段没有默认值。
 * @method void setOrderField(string $OrderField) 设置排序字段。支持：`ServiceTemplateGroupId ` `CreatedTime` `UpdateTime`。注意：该字段没有默认值。
 * @method string getOrderDirection() 获取排序方法。升序：`ASC`，倒序：`DESC`。注意：该字段没有默认值。
 * @method void setOrderDirection(string $OrderDirection) 设置排序方法。升序：`ASC`，倒序：`DESC`。注意：该字段没有默认值。
 * @method string getMemberOrderField() 获取协议端口成员排序字段。支持：`ServiceTemplateId ` `UpdateTime`。注意：该字段没有默认值。
 * @method void setMemberOrderField(string $MemberOrderField) 设置协议端口成员排序字段。支持：`ServiceTemplateId ` `UpdateTime`。注意：该字段没有默认值。
 * @method string getMemberOrderDirection() 获取协议端口成员排序方法。升序：`ASC`，倒序：`DESC`。注意：该字段没有默认值。
 * @method void setMemberOrderDirection(string $MemberOrderDirection) 设置协议端口成员排序方法。升序：`ASC`，倒序：`DESC`。注意：该字段没有默认值。
 */
class DescribeServiceTemplateGroupsRequest extends AbstractModel
{
    /**
     * @var array 过滤条件。
<li>service-template-group-name - String - （过滤条件）协议端口模板集合名称。</li>
<li>service-template-group-id - String - （过滤条件）协议端口模板集合实例ID，例如：ppmg-e6dy460g。</li>
     */
    public $Filters;

    /**
     * @var string 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var string 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var boolean 是否获取协议端口模板成员标识。
     */
    public $NeedMemberInfo;

    /**
     * @var string 排序字段。支持：`ServiceTemplateGroupId ` `CreatedTime` `UpdateTime`。注意：该字段没有默认值。
     */
    public $OrderField;

    /**
     * @var string 排序方法。升序：`ASC`，倒序：`DESC`。注意：该字段没有默认值。
     */
    public $OrderDirection;

    /**
     * @var string 协议端口成员排序字段。支持：`ServiceTemplateId ` `UpdateTime`。注意：该字段没有默认值。
     */
    public $MemberOrderField;

    /**
     * @var string 协议端口成员排序方法。升序：`ASC`，倒序：`DESC`。注意：该字段没有默认值。
     */
    public $MemberOrderDirection;

    /**
     * @param array $Filters 过滤条件。
<li>service-template-group-name - String - （过滤条件）协议端口模板集合名称。</li>
<li>service-template-group-id - String - （过滤条件）协议端口模板集合实例ID，例如：ppmg-e6dy460g。</li>
     * @param string $Offset 偏移量，默认为0。
     * @param string $Limit 返回数量，默认为20，最大值为100。
     * @param boolean $NeedMemberInfo 是否获取协议端口模板成员标识。
     * @param string $OrderField 排序字段。支持：`ServiceTemplateGroupId ` `CreatedTime` `UpdateTime`。注意：该字段没有默认值。
     * @param string $OrderDirection 排序方法。升序：`ASC`，倒序：`DESC`。注意：该字段没有默认值。
     * @param string $MemberOrderField 协议端口成员排序字段。支持：`ServiceTemplateId ` `UpdateTime`。注意：该字段没有默认值。
     * @param string $MemberOrderDirection 协议端口成员排序方法。升序：`ASC`，倒序：`DESC`。注意：该字段没有默认值。
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("NeedMemberInfo",$param) and $param["NeedMemberInfo"] !== null) {
            $this->NeedMemberInfo = $param["NeedMemberInfo"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }

        if (array_key_exists("MemberOrderField",$param) and $param["MemberOrderField"] !== null) {
            $this->MemberOrderField = $param["MemberOrderField"];
        }

        if (array_key_exists("MemberOrderDirection",$param) and $param["MemberOrderDirection"] !== null) {
            $this->MemberOrderDirection = $param["MemberOrderDirection"];
        }
    }
}
