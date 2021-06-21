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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeListBGPIPInstances请求参数结构体
 *
 * @method integer getOffset() 获取页起始偏移，取值为(页码-1)*一页条数
 * @method void setOffset(integer $Offset) 设置页起始偏移，取值为(页码-1)*一页条数
 * @method integer getLimit() 获取一页条数，当Limit=0时，默认一页条数为20;最大取值为100
 * @method void setLimit(integer $Limit) 设置一页条数，当Limit=0时，默认一页条数为20;最大取值为100
 * @method string getFilterIp() 获取IP搜索
 * @method void setFilterIp(string $FilterIp) 设置IP搜索
 * @method string getFilterInstanceId() 获取资产实例ID搜索，例如，bgpip-00000001
 * @method void setFilterInstanceId(string $FilterInstanceId) 设置资产实例ID搜索，例如，bgpip-00000001
 * @method integer getFilterLine() 获取高防IP线路搜索，取值为[
1：BGP线路
2：电信
3：联通
4：移动
99：第三方合作线路
]
 * @method void setFilterLine(integer $FilterLine) 设置高防IP线路搜索，取值为[
1：BGP线路
2：电信
3：联通
4：移动
99：第三方合作线路
]
 * @method string getFilterRegion() 获取地域搜索，例如，ap-guangzhou
 * @method void setFilterRegion(string $FilterRegion) 设置地域搜索，例如，ap-guangzhou
 * @method string getFilterName() 获取名称搜索
 * @method void setFilterName(string $FilterName) 设置名称搜索
 * @method integer getFilterEipType() 获取是否只获取高防弹性公网IP实例。填写时，只能填写1或者0。当填写1时，表示返回高防弹性公网IP实例。当填写0时，表示返回非高防弹性公网IP实例。
 * @method void setFilterEipType(integer $FilterEipType) 设置是否只获取高防弹性公网IP实例。填写时，只能填写1或者0。当填写1时，表示返回高防弹性公网IP实例。当填写0时，表示返回非高防弹性公网IP实例。
 * @method array getFilterEipEipAddressStatus() 获取高防弹性公网IP实例的绑定状态搜索条件，取值范围 [BINDING、 BIND、UNBINDING、UNBIND]。该搜索条件只在FilterEipType=1时才有效。
 * @method void setFilterEipEipAddressStatus(array $FilterEipEipAddressStatus) 设置高防弹性公网IP实例的绑定状态搜索条件，取值范围 [BINDING、 BIND、UNBINDING、UNBIND]。该搜索条件只在FilterEipType=1时才有效。
 */
class DescribeListBGPIPInstancesRequest extends AbstractModel
{
    /**
     * @var integer 页起始偏移，取值为(页码-1)*一页条数
     */
    public $Offset;

    /**
     * @var integer 一页条数，当Limit=0时，默认一页条数为20;最大取值为100
     */
    public $Limit;

    /**
     * @var string IP搜索
     */
    public $FilterIp;

    /**
     * @var string 资产实例ID搜索，例如，bgpip-00000001
     */
    public $FilterInstanceId;

    /**
     * @var integer 高防IP线路搜索，取值为[
1：BGP线路
2：电信
3：联通
4：移动
99：第三方合作线路
]
     */
    public $FilterLine;

    /**
     * @var string 地域搜索，例如，ap-guangzhou
     */
    public $FilterRegion;

    /**
     * @var string 名称搜索
     */
    public $FilterName;

    /**
     * @var integer 是否只获取高防弹性公网IP实例。填写时，只能填写1或者0。当填写1时，表示返回高防弹性公网IP实例。当填写0时，表示返回非高防弹性公网IP实例。
     */
    public $FilterEipType;

    /**
     * @var array 高防弹性公网IP实例的绑定状态搜索条件，取值范围 [BINDING、 BIND、UNBINDING、UNBIND]。该搜索条件只在FilterEipType=1时才有效。
     */
    public $FilterEipEipAddressStatus;

    /**
     * @param integer $Offset 页起始偏移，取值为(页码-1)*一页条数
     * @param integer $Limit 一页条数，当Limit=0时，默认一页条数为20;最大取值为100
     * @param string $FilterIp IP搜索
     * @param string $FilterInstanceId 资产实例ID搜索，例如，bgpip-00000001
     * @param integer $FilterLine 高防IP线路搜索，取值为[
1：BGP线路
2：电信
3：联通
4：移动
99：第三方合作线路
]
     * @param string $FilterRegion 地域搜索，例如，ap-guangzhou
     * @param string $FilterName 名称搜索
     * @param integer $FilterEipType 是否只获取高防弹性公网IP实例。填写时，只能填写1或者0。当填写1时，表示返回高防弹性公网IP实例。当填写0时，表示返回非高防弹性公网IP实例。
     * @param array $FilterEipEipAddressStatus 高防弹性公网IP实例的绑定状态搜索条件，取值范围 [BINDING、 BIND、UNBINDING、UNBIND]。该搜索条件只在FilterEipType=1时才有效。
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("FilterIp",$param) and $param["FilterIp"] !== null) {
            $this->FilterIp = $param["FilterIp"];
        }

        if (array_key_exists("FilterInstanceId",$param) and $param["FilterInstanceId"] !== null) {
            $this->FilterInstanceId = $param["FilterInstanceId"];
        }

        if (array_key_exists("FilterLine",$param) and $param["FilterLine"] !== null) {
            $this->FilterLine = $param["FilterLine"];
        }

        if (array_key_exists("FilterRegion",$param) and $param["FilterRegion"] !== null) {
            $this->FilterRegion = $param["FilterRegion"];
        }

        if (array_key_exists("FilterName",$param) and $param["FilterName"] !== null) {
            $this->FilterName = $param["FilterName"];
        }

        if (array_key_exists("FilterEipType",$param) and $param["FilterEipType"] !== null) {
            $this->FilterEipType = $param["FilterEipType"];
        }

        if (array_key_exists("FilterEipEipAddressStatus",$param) and $param["FilterEipEipAddressStatus"] !== null) {
            $this->FilterEipEipAddressStatus = $param["FilterEipEipAddressStatus"];
        }
    }
}
