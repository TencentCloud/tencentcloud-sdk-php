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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLicenseList请求参数结构体
 *
 * @method array getFilters() 获取多个条件筛选时 LicenseStatus,DeadlineStatus,ResourceId,Keywords 取交集
<li> LicenseStatus 授权状态信息,0 未使用,1 部分使用, 2 已用完, 3 不可用  4 可使用</li>
<li> BuyTime 购买时间</li>
<li> LicenseType  授权类型, 0 专业版-按量计费, 1专业版-包年包月 , 2 旗舰版-包年包月</li>
<li>DeadlineStatus 到期状态 NotExpired 未过期, Expire 已过期(包含已销毁) NearExpiry 即将到期</li>
<li>ResourceId 资源ID</li>
<li>Keywords IP筛选</li>
<li>PayMode 付费模式 0 按量计费 , 1 包年包月</li>
<li>OrderStatus 订单状态 1 正常 2 隔离 3 销毁</li>
 * @method void setFilters(array $Filters) 设置多个条件筛选时 LicenseStatus,DeadlineStatus,ResourceId,Keywords 取交集
<li> LicenseStatus 授权状态信息,0 未使用,1 部分使用, 2 已用完, 3 不可用  4 可使用</li>
<li> BuyTime 购买时间</li>
<li> LicenseType  授权类型, 0 专业版-按量计费, 1专业版-包年包月 , 2 旗舰版-包年包月</li>
<li>DeadlineStatus 到期状态 NotExpired 未过期, Expire 已过期(包含已销毁) NearExpiry 即将到期</li>
<li>ResourceId 资源ID</li>
<li>Keywords IP筛选</li>
<li>PayMode 付费模式 0 按量计费 , 1 包年包月</li>
<li>OrderStatus 订单状态 1 正常 2 隔离 3 销毁</li>
 * @method integer getLimit() 获取限制条数,默认10.
 * @method void setLimit(integer $Limit) 设置限制条数,默认10.
 * @method integer getOffset() 获取偏移量,默认0.
 * @method void setOffset(integer $Offset) 设置偏移量,默认0.
 * @method array getTags() 获取标签筛选,平台标签能力,这里传入 标签键,标签值作为一个对象
 * @method void setTags(array $Tags) 设置标签筛选,平台标签能力,这里传入 标签键,标签值作为一个对象
 */
class DescribeLicenseListRequest extends AbstractModel
{
    /**
     * @var array 多个条件筛选时 LicenseStatus,DeadlineStatus,ResourceId,Keywords 取交集
<li> LicenseStatus 授权状态信息,0 未使用,1 部分使用, 2 已用完, 3 不可用  4 可使用</li>
<li> BuyTime 购买时间</li>
<li> LicenseType  授权类型, 0 专业版-按量计费, 1专业版-包年包月 , 2 旗舰版-包年包月</li>
<li>DeadlineStatus 到期状态 NotExpired 未过期, Expire 已过期(包含已销毁) NearExpiry 即将到期</li>
<li>ResourceId 资源ID</li>
<li>Keywords IP筛选</li>
<li>PayMode 付费模式 0 按量计费 , 1 包年包月</li>
<li>OrderStatus 订单状态 1 正常 2 隔离 3 销毁</li>
     */
    public $Filters;

    /**
     * @var integer 限制条数,默认10.
     */
    public $Limit;

    /**
     * @var integer 偏移量,默认0.
     */
    public $Offset;

    /**
     * @var array 标签筛选,平台标签能力,这里传入 标签键,标签值作为一个对象
     */
    public $Tags;

    /**
     * @param array $Filters 多个条件筛选时 LicenseStatus,DeadlineStatus,ResourceId,Keywords 取交集
<li> LicenseStatus 授权状态信息,0 未使用,1 部分使用, 2 已用完, 3 不可用  4 可使用</li>
<li> BuyTime 购买时间</li>
<li> LicenseType  授权类型, 0 专业版-按量计费, 1专业版-包年包月 , 2 旗舰版-包年包月</li>
<li>DeadlineStatus 到期状态 NotExpired 未过期, Expire 已过期(包含已销毁) NearExpiry 即将到期</li>
<li>ResourceId 资源ID</li>
<li>Keywords IP筛选</li>
<li>PayMode 付费模式 0 按量计费 , 1 包年包月</li>
<li>OrderStatus 订单状态 1 正常 2 隔离 3 销毁</li>
     * @param integer $Limit 限制条数,默认10.
     * @param integer $Offset 偏移量,默认0.
     * @param array $Tags 标签筛选,平台标签能力,这里传入 标签键,标签值作为一个对象
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
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
