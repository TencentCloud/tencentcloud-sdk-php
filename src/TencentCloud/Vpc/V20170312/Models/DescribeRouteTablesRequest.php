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
 * DescribeRouteTables请求参数结构体
 *
 * @method array getFilters() 获取过滤条件，参数不支持同时指定RouteTableIds和Filters。
<li>route-table-id - String - （过滤条件）路由表实例ID。</li>
<li>route-table-name - String - （过滤条件）路由表名称。</li>
<li>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。</li>
<li>association.main - String - （过滤条件）是否主路由表。</li>
<li>tag-key - String -是否必填：否 - （过滤条件）按照标签键进行过滤。</li>
<li>tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。使用请参考示例2。</li>
<li>next-hop-type - String - 是否必填：否 - （过滤条件）按下一跳类型进行过滤。使用next-hop-type进行过滤时，必须同时携带route-table-id与vpc-id。
目前我们支持的类型有：
LOCAL: 本地路由
CVM：公网网关类型的云服务器；
VPN：VPN网关；
DIRECTCONNECT：专线网关；
PEERCONNECTION：对等连接；
HAVIP：高可用虚拟IP；
NAT：NAT网关; 
NORMAL_CVM：普通云服务器；
EIP：云服务器的公网IP；
CCN：云联网；
LOCAL_GATEWAY：本地网关。
</li>
 * @method void setFilters(array $Filters) 设置过滤条件，参数不支持同时指定RouteTableIds和Filters。
<li>route-table-id - String - （过滤条件）路由表实例ID。</li>
<li>route-table-name - String - （过滤条件）路由表名称。</li>
<li>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。</li>
<li>association.main - String - （过滤条件）是否主路由表。</li>
<li>tag-key - String -是否必填：否 - （过滤条件）按照标签键进行过滤。</li>
<li>tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。使用请参考示例2。</li>
<li>next-hop-type - String - 是否必填：否 - （过滤条件）按下一跳类型进行过滤。使用next-hop-type进行过滤时，必须同时携带route-table-id与vpc-id。
目前我们支持的类型有：
LOCAL: 本地路由
CVM：公网网关类型的云服务器；
VPN：VPN网关；
DIRECTCONNECT：专线网关；
PEERCONNECTION：对等连接；
HAVIP：高可用虚拟IP；
NAT：NAT网关; 
NORMAL_CVM：普通云服务器；
EIP：云服务器的公网IP；
CCN：云联网；
LOCAL_GATEWAY：本地网关。
</li>
 * @method array getRouteTableIds() 获取路由表实例ID，例如：rtb-azd4dt1c。
 * @method void setRouteTableIds(array $RouteTableIds) 设置路由表实例ID，例如：rtb-azd4dt1c。
 * @method string getOffset() 获取偏移量。
 * @method void setOffset(string $Offset) 设置偏移量。
 * @method string getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(string $Limit) 设置返回数量，默认为20，最大值为100。
 * @method boolean getNeedRouterInfo() 获取是否需要获取路由策略信息，默认获取，当控制台不需要拉取路由策略信息时，改为False。
 * @method void setNeedRouterInfo(boolean $NeedRouterInfo) 设置是否需要获取路由策略信息，默认获取，当控制台不需要拉取路由策略信息时，改为False。
 */
class DescribeRouteTablesRequest extends AbstractModel
{
    /**
     * @var array 过滤条件，参数不支持同时指定RouteTableIds和Filters。
<li>route-table-id - String - （过滤条件）路由表实例ID。</li>
<li>route-table-name - String - （过滤条件）路由表名称。</li>
<li>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。</li>
<li>association.main - String - （过滤条件）是否主路由表。</li>
<li>tag-key - String -是否必填：否 - （过滤条件）按照标签键进行过滤。</li>
<li>tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。使用请参考示例2。</li>
<li>next-hop-type - String - 是否必填：否 - （过滤条件）按下一跳类型进行过滤。使用next-hop-type进行过滤时，必须同时携带route-table-id与vpc-id。
目前我们支持的类型有：
LOCAL: 本地路由
CVM：公网网关类型的云服务器；
VPN：VPN网关；
DIRECTCONNECT：专线网关；
PEERCONNECTION：对等连接；
HAVIP：高可用虚拟IP；
NAT：NAT网关; 
NORMAL_CVM：普通云服务器；
EIP：云服务器的公网IP；
CCN：云联网；
LOCAL_GATEWAY：本地网关。
</li>
     */
    public $Filters;

    /**
     * @var array 路由表实例ID，例如：rtb-azd4dt1c。
     */
    public $RouteTableIds;

    /**
     * @var string 偏移量。
     */
    public $Offset;

    /**
     * @var string 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var boolean 是否需要获取路由策略信息，默认获取，当控制台不需要拉取路由策略信息时，改为False。
     */
    public $NeedRouterInfo;

    /**
     * @param array $Filters 过滤条件，参数不支持同时指定RouteTableIds和Filters。
<li>route-table-id - String - （过滤条件）路由表实例ID。</li>
<li>route-table-name - String - （过滤条件）路由表名称。</li>
<li>vpc-id - String - （过滤条件）VPC实例ID，形如：vpc-f49l6u0z。</li>
<li>association.main - String - （过滤条件）是否主路由表。</li>
<li>tag-key - String -是否必填：否 - （过滤条件）按照标签键进行过滤。</li>
<li>tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。使用请参考示例2。</li>
<li>next-hop-type - String - 是否必填：否 - （过滤条件）按下一跳类型进行过滤。使用next-hop-type进行过滤时，必须同时携带route-table-id与vpc-id。
目前我们支持的类型有：
LOCAL: 本地路由
CVM：公网网关类型的云服务器；
VPN：VPN网关；
DIRECTCONNECT：专线网关；
PEERCONNECTION：对等连接；
HAVIP：高可用虚拟IP；
NAT：NAT网关; 
NORMAL_CVM：普通云服务器；
EIP：云服务器的公网IP；
CCN：云联网；
LOCAL_GATEWAY：本地网关。
</li>
     * @param array $RouteTableIds 路由表实例ID，例如：rtb-azd4dt1c。
     * @param string $Offset 偏移量。
     * @param string $Limit 返回数量，默认为20，最大值为100。
     * @param boolean $NeedRouterInfo 是否需要获取路由策略信息，默认获取，当控制台不需要拉取路由策略信息时，改为False。
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

        if (array_key_exists("RouteTableIds",$param) and $param["RouteTableIds"] !== null) {
            $this->RouteTableIds = $param["RouteTableIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("NeedRouterInfo",$param) and $param["NeedRouterInfo"] !== null) {
            $this->NeedRouterInfo = $param["NeedRouterInfo"];
        }
    }
}
