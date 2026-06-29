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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConditionsTemplateList请求参数结构体
 *
 * @method string getModule() 获取<p>固定值，为&quot;monitor&quot;</p>
 * @method void setModule(string $Module) 设置<p>固定值，为&quot;monitor&quot;</p>
 * @method string getViewName() 获取<p>视图名，由 <a href="https://cloud.tencent.com/document/product/248/48683">DescribeAllNamespaces</a> 获得。对于云产品监控，取接口出参的 QceNamespacesNew.N.Id，例如 cvm_device</p>
 * @method void setViewName(string $ViewName) 设置<p>视图名，由 <a href="https://cloud.tencent.com/document/product/248/48683">DescribeAllNamespaces</a> 获得。对于云产品监控，取接口出参的 QceNamespacesNew.N.Id，例如 cvm_device</p>
 * @method string getGroupName() 获取<p>根据触发条件模板名称过滤查询</p>
 * @method void setGroupName(string $GroupName) 设置<p>根据触发条件模板名称过滤查询</p>
 * @method string getGroupID() 获取<p>根据触发条件模板ID过滤查询</p>
 * @method void setGroupID(string $GroupID) 设置<p>根据触发条件模板ID过滤查询</p>
 * @method integer getLimit() 获取<p>分页参数，每页返回的数量，取值1~100，默认20</p>
 * @method void setLimit(integer $Limit) 设置<p>分页参数，每页返回的数量，取值1~100，默认20</p>
 * @method integer getOffset() 获取<p>分页参数，页偏移量，从0开始计数，默认0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页参数，页偏移量，从0开始计数，默认0</p>
 * @method string getUpdateTimeOrder() 获取<p>指定按更新时间的排序方式，asc=升序, desc=降序</p>
 * @method void setUpdateTimeOrder(string $UpdateTimeOrder) 设置<p>指定按更新时间的排序方式，asc=升序, desc=降序</p>
 * @method string getPolicyCountOrder() 获取<p>指定按绑定策略数目的排序方式，asc=升序, desc=降序</p>
 * @method void setPolicyCountOrder(string $PolicyCountOrder) 设置<p>指定按绑定策略数目的排序方式，asc=升序, desc=降序</p>
 */
class DescribeConditionsTemplateListRequest extends AbstractModel
{
    /**
     * @var string <p>固定值，为&quot;monitor&quot;</p>
     */
    public $Module;

    /**
     * @var string <p>视图名，由 <a href="https://cloud.tencent.com/document/product/248/48683">DescribeAllNamespaces</a> 获得。对于云产品监控，取接口出参的 QceNamespacesNew.N.Id，例如 cvm_device</p>
     */
    public $ViewName;

    /**
     * @var string <p>根据触发条件模板名称过滤查询</p>
     */
    public $GroupName;

    /**
     * @var string <p>根据触发条件模板ID过滤查询</p>
     */
    public $GroupID;

    /**
     * @var integer <p>分页参数，每页返回的数量，取值1~100，默认20</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页参数，页偏移量，从0开始计数，默认0</p>
     */
    public $Offset;

    /**
     * @var string <p>指定按更新时间的排序方式，asc=升序, desc=降序</p>
     */
    public $UpdateTimeOrder;

    /**
     * @var string <p>指定按绑定策略数目的排序方式，asc=升序, desc=降序</p>
     */
    public $PolicyCountOrder;

    /**
     * @param string $Module <p>固定值，为&quot;monitor&quot;</p>
     * @param string $ViewName <p>视图名，由 <a href="https://cloud.tencent.com/document/product/248/48683">DescribeAllNamespaces</a> 获得。对于云产品监控，取接口出参的 QceNamespacesNew.N.Id，例如 cvm_device</p>
     * @param string $GroupName <p>根据触发条件模板名称过滤查询</p>
     * @param string $GroupID <p>根据触发条件模板ID过滤查询</p>
     * @param integer $Limit <p>分页参数，每页返回的数量，取值1~100，默认20</p>
     * @param integer $Offset <p>分页参数，页偏移量，从0开始计数，默认0</p>
     * @param string $UpdateTimeOrder <p>指定按更新时间的排序方式，asc=升序, desc=降序</p>
     * @param string $PolicyCountOrder <p>指定按绑定策略数目的排序方式，asc=升序, desc=降序</p>
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
