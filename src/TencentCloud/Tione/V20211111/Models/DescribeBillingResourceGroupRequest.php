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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillingResourceGroup请求参数结构体
 *
 * @method string getResourceGroupId() 获取<p>资源组id, 取值为创建资源组接口(CreateBillingResourceGroup)响应中的ResourceGroupId</p>
 * @method void setResourceGroupId(string $ResourceGroupId) 设置<p>资源组id, 取值为创建资源组接口(CreateBillingResourceGroup)响应中的ResourceGroupId</p>
 * @method string getTiProjectId() 获取<p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
 * @method void setTiProjectId(string $TiProjectId) 设置<p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
 * @method array getFilters() 获取<p>过滤条件<br>注意: </p><ol><li>Filter.Name 只支持以下枚举值:<br> InstanceId (资源组节点id)<br> InstanceStatus (资源组节点状态)</li><li>Filter.Values: 长度为1且Filter.Fuzzy=true时，支持模糊查询; 不为1时，精确查询</li><li>Filter.Negative: 是否取反，默认为false</li><li>Filter.Fuzzy: 是否模糊查询，默认为false</li><li>每次请求的Filters的上限为10，Filter.Values的上限为100</li></ol>
 * @method void setFilters(array $Filters) 设置<p>过滤条件<br>注意: </p><ol><li>Filter.Name 只支持以下枚举值:<br> InstanceId (资源组节点id)<br> InstanceStatus (资源组节点状态)</li><li>Filter.Values: 长度为1且Filter.Fuzzy=true时，支持模糊查询; 不为1时，精确查询</li><li>Filter.Negative: 是否取反，默认为false</li><li>Filter.Fuzzy: 是否模糊查询，默认为false</li><li>每次请求的Filters的上限为10，Filter.Values的上限为100</li></ol>
 * @method integer getOffset() 获取<p>分页查询起始位置，如：Limit为10，第一页Offset为0，第二页Offset为10...即每页左边为闭区间; 默认0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页查询起始位置，如：Limit为10，第一页Offset为0，第二页Offset为10...即每页左边为闭区间; 默认0</p>
 * @method integer getLimit() 获取<p>分页查询每页大小，默认20</p>
 * @method void setLimit(integer $Limit) 设置<p>分页查询每页大小，默认20</p>
 * @method string getOrder() 获取<p>排序方向; 枚举值: ASC | DESC；默认DESC</p>
 * @method void setOrder(string $Order) 设置<p>排序方向; 枚举值: ASC | DESC；默认DESC</p>
 * @method string getOrderField() 获取<p>排序字段; 枚举值: CreateTime (创建时间) ｜ ExpireTime (到期时间)；默认CreateTime</p>
 * @method void setOrderField(string $OrderField) 设置<p>排序字段; 枚举值: CreateTime (创建时间) ｜ ExpireTime (到期时间)；默认CreateTime</p>
 */
class DescribeBillingResourceGroupRequest extends AbstractModel
{
    /**
     * @var string <p>资源组id, 取值为创建资源组接口(CreateBillingResourceGroup)响应中的ResourceGroupId</p>
     */
    public $ResourceGroupId;

    /**
     * @var string <p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
     */
    public $TiProjectId;

    /**
     * @var array <p>过滤条件<br>注意: </p><ol><li>Filter.Name 只支持以下枚举值:<br> InstanceId (资源组节点id)<br> InstanceStatus (资源组节点状态)</li><li>Filter.Values: 长度为1且Filter.Fuzzy=true时，支持模糊查询; 不为1时，精确查询</li><li>Filter.Negative: 是否取反，默认为false</li><li>Filter.Fuzzy: 是否模糊查询，默认为false</li><li>每次请求的Filters的上限为10，Filter.Values的上限为100</li></ol>
     */
    public $Filters;

    /**
     * @var integer <p>分页查询起始位置，如：Limit为10，第一页Offset为0，第二页Offset为10...即每页左边为闭区间; 默认0</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页查询每页大小，默认20</p>
     */
    public $Limit;

    /**
     * @var string <p>排序方向; 枚举值: ASC | DESC；默认DESC</p>
     */
    public $Order;

    /**
     * @var string <p>排序字段; 枚举值: CreateTime (创建时间) ｜ ExpireTime (到期时间)；默认CreateTime</p>
     */
    public $OrderField;

    /**
     * @param string $ResourceGroupId <p>资源组id, 取值为创建资源组接口(CreateBillingResourceGroup)响应中的ResourceGroupId</p>
     * @param string $TiProjectId <p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
     * @param array $Filters <p>过滤条件<br>注意: </p><ol><li>Filter.Name 只支持以下枚举值:<br> InstanceId (资源组节点id)<br> InstanceStatus (资源组节点状态)</li><li>Filter.Values: 长度为1且Filter.Fuzzy=true时，支持模糊查询; 不为1时，精确查询</li><li>Filter.Negative: 是否取反，默认为false</li><li>Filter.Fuzzy: 是否模糊查询，默认为false</li><li>每次请求的Filters的上限为10，Filter.Values的上限为100</li></ol>
     * @param integer $Offset <p>分页查询起始位置，如：Limit为10，第一页Offset为0，第二页Offset为10...即每页左边为闭区间; 默认0</p>
     * @param integer $Limit <p>分页查询每页大小，默认20</p>
     * @param string $Order <p>排序方向; 枚举值: ASC | DESC；默认DESC</p>
     * @param string $OrderField <p>排序字段; 枚举值: CreateTime (创建时间) ｜ ExpireTime (到期时间)；默认CreateTime</p>
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
        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("TiProjectId",$param) and $param["TiProjectId"] !== null) {
            $this->TiProjectId = $param["TiProjectId"];
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

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }
    }
}
