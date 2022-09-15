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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConditionsTemplateList请求参数结构体
 *
 * @method string getModule() 获取固定值，为"monitor"
 * @method void setModule(string $Module) 设置固定值，为"monitor"
 * @method string getViewName() 获取视图名，由 [DescribeAllNamespaces](https://cloud.tencent.com/document/product/248/48683) 获得。对于云产品监控，取接口出参的 QceNamespacesNew.N.Id，例如 cvm_device
 * @method void setViewName(string $ViewName) 设置视图名，由 [DescribeAllNamespaces](https://cloud.tencent.com/document/product/248/48683) 获得。对于云产品监控，取接口出参的 QceNamespacesNew.N.Id，例如 cvm_device
 * @method string getGroupName() 获取根据触发条件模板名称过滤查询
 * @method void setGroupName(string $GroupName) 设置根据触发条件模板名称过滤查询
 * @method string getGroupID() 获取根据触发条件模板ID过滤查询
 * @method void setGroupID(string $GroupID) 设置根据触发条件模板ID过滤查询
 * @method integer getLimit() 获取分页参数，每页返回的数量，取值1~100，默认20
 * @method void setLimit(integer $Limit) 设置分页参数，每页返回的数量，取值1~100，默认20
 * @method integer getOffset() 获取分页参数，页偏移量，从0开始计数，默认0
 * @method void setOffset(integer $Offset) 设置分页参数，页偏移量，从0开始计数，默认0
 * @method string getUpdateTimeOrder() 获取指定按更新时间的排序方式，asc=升序, desc=降序
 * @method void setUpdateTimeOrder(string $UpdateTimeOrder) 设置指定按更新时间的排序方式，asc=升序, desc=降序
 * @method string getPolicyCountOrder() 获取指定按绑定策略数目的排序方式，asc=升序, desc=降序
 * @method void setPolicyCountOrder(string $PolicyCountOrder) 设置指定按绑定策略数目的排序方式，asc=升序, desc=降序
 */
class DescribeConditionsTemplateListRequest extends AbstractModel
{
    /**
     * @var string 固定值，为"monitor"
     */
    public $Module;

    /**
     * @var string 视图名，由 [DescribeAllNamespaces](https://cloud.tencent.com/document/product/248/48683) 获得。对于云产品监控，取接口出参的 QceNamespacesNew.N.Id，例如 cvm_device
     */
    public $ViewName;

    /**
     * @var string 根据触发条件模板名称过滤查询
     */
    public $GroupName;

    /**
     * @var string 根据触发条件模板ID过滤查询
     */
    public $GroupID;

    /**
     * @var integer 分页参数，每页返回的数量，取值1~100，默认20
     */
    public $Limit;

    /**
     * @var integer 分页参数，页偏移量，从0开始计数，默认0
     */
    public $Offset;

    /**
     * @var string 指定按更新时间的排序方式，asc=升序, desc=降序
     */
    public $UpdateTimeOrder;

    /**
     * @var string 指定按绑定策略数目的排序方式，asc=升序, desc=降序
     */
    public $PolicyCountOrder;

    /**
     * @param string $Module 固定值，为"monitor"
     * @param string $ViewName 视图名，由 [DescribeAllNamespaces](https://cloud.tencent.com/document/product/248/48683) 获得。对于云产品监控，取接口出参的 QceNamespacesNew.N.Id，例如 cvm_device
     * @param string $GroupName 根据触发条件模板名称过滤查询
     * @param string $GroupID 根据触发条件模板ID过滤查询
     * @param integer $Limit 分页参数，每页返回的数量，取值1~100，默认20
     * @param integer $Offset 分页参数，页偏移量，从0开始计数，默认0
     * @param string $UpdateTimeOrder 指定按更新时间的排序方式，asc=升序, desc=降序
     * @param string $PolicyCountOrder 指定按绑定策略数目的排序方式，asc=升序, desc=降序
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupID",$param) and $param["GroupID"] !== null) {
            $this->GroupID = $param["GroupID"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("UpdateTimeOrder",$param) and $param["UpdateTimeOrder"] !== null) {
            $this->UpdateTimeOrder = $param["UpdateTimeOrder"];
        }

        if (array_key_exists("PolicyCountOrder",$param) and $param["PolicyCountOrder"] !== null) {
            $this->PolicyCountOrder = $param["PolicyCountOrder"];
        }
    }
}
