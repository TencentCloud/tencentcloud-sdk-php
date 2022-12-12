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
 * @method integer getFilterDamDDoSStatus() 获取是否只获取安全加速实例。填写时，只能填写1或者0。当填写1时，表示返回安全加速实例。当填写0时，表示返回非安全加速实例。
 * @method void setFilterDamDDoSStatus(integer $FilterDamDDoSStatus) 设置是否只获取安全加速实例。填写时，只能填写1或者0。当填写1时，表示返回安全加速实例。当填写0时，表示返回非安全加速实例。
 * @method string getFilterStatus() 获取获取特定状态的资源，运行中填idle，攻击中填attacking，封堵中填blocking，试用资源填trial
 * @method void setFilterStatus(string $FilterStatus) 设置获取特定状态的资源，运行中填idle，攻击中填attacking，封堵中填blocking，试用资源填trial
 * @method string getFilterCname() 获取获取特定的实例Cname
 * @method void setFilterCname(string $FilterCname) 设置获取特定的实例Cname
 * @method array getFilterInstanceIdList() 获取批量查询实例ID对应的高防IP实例资源
 * @method void setFilterInstanceIdList(array $FilterInstanceIdList) 设置批量查询实例ID对应的高防IP实例资源
 * @method TagFilter getFilterTag() 获取标签搜索
 * @method void setFilterTag(TagFilter $FilterTag) 设置标签搜索
 * @method array getFilterPackType() 获取按照套餐类型进行过滤
 * @method void setFilterPackType(array $FilterPackType) 设置按照套餐类型进行过滤
 * @method integer getFilterConvoy() 获取重保护航搜索
 * @method void setFilterConvoy(integer $FilterConvoy) 设置重保护航搜索
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
     * @var integer 是否只获取安全加速实例。填写时，只能填写1或者0。当填写1时，表示返回安全加速实例。当填写0时，表示返回非安全加速实例。
     */
    public $FilterDamDDoSStatus;

    /**
     * @var string 获取特定状态的资源，运行中填idle，攻击中填attacking，封堵中填blocking，试用资源填trial
     */
    public $FilterStatus;

    /**
     * @var string 获取特定的实例Cname
     */
    public $FilterCname;

    /**
     * @var array 批量查询实例ID对应的高防IP实例资源
     */
    public $FilterInstanceIdList;

    /**
     * @var TagFilter 标签搜索
     */
    public $FilterTag;

    /**
     * @var array 按照套餐类型进行过滤
     */
    public $FilterPackType;

    /**
     * @var integer 重保护航搜索
     */
    public $FilterConvoy;

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
     * @param integer $FilterDamDDoSStatus 是否只获取安全加速实例。填写时，只能填写1或者0。当填写1时，表示返回安全加速实例。当填写0时，表示返回非安全加速实例。
     * @param string $FilterStatus 获取特定状态的资源，运行中填idle，攻击中填attacking，封堵中填blocking，试用资源填trial
     * @param string $FilterCname 获取特定的实例Cname
     * @param array $FilterInstanceIdList 批量查询实例ID对应的高防IP实例资源
     * @param TagFilter $FilterTag 标签搜索
     * @param array $FilterPackType 按照套餐类型进行过滤
     * @param integer $FilterConvoy 重保护航搜索
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

        if (array_key_exists("FilterDamDDoSStatus",$param) and $param["FilterDamDDoSStatus"] !== null) {
            $this->FilterDamDDoSStatus = $param["FilterDamDDoSStatus"];
        }

        if (array_key_exists("FilterStatus",$param) and $param["FilterStatus"] !== null) {
            $this->FilterStatus = $param["FilterStatus"];
        }

        if (array_key_exists("FilterCname",$param) and $param["FilterCname"] !== null) {
            $this->FilterCname = $param["FilterCname"];
        }

        if (array_key_exists("FilterInstanceIdList",$param) and $param["FilterInstanceIdList"] !== null) {
            $this->FilterInstanceIdList = $param["FilterInstanceIdList"];
        }

        if (array_key_exists("FilterTag",$param) and $param["FilterTag"] !== null) {
            $this->FilterTag = new TagFilter();
            $this->FilterTag->deserialize($param["FilterTag"]);
        }

        if (array_key_exists("FilterPackType",$param) and $param["FilterPackType"] !== null) {
            $this->FilterPackType = $param["FilterPackType"];
        }

        if (array_key_exists("FilterConvoy",$param) and $param["FilterConvoy"] !== null) {
            $this->FilterConvoy = $param["FilterConvoy"];
        }
    }
}
