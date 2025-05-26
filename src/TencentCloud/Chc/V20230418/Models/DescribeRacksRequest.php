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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRacks请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。
 * @method array getFilters() 获取过滤条件

rack-id
按照机架id进行过滤。
类型：String
必选：否

rack-name
按照机架名称进行过滤。
类型：String
必选：否

idc-id
按照机房id进行过滤。
类型：String
必选：否

idc-unit-id
按照机房管理单元id过滤
类型： String
必选： 否

is-power-on
按照是否开电进行过滤，支持传入 0 和 1。1 代表开电，0 代表关电
类型： String
必选： 否

hosting-type
按照托管类型进行过滤。支持传入 CUSTOMER_MIX 代表客户混合，CUSTOMER_ONLY 代表客户独享 ，NOT_INIT 代表未初始化
类型： String
必选： 否


 * @method void setFilters(array $Filters) 设置过滤条件

rack-id
按照机架id进行过滤。
类型：String
必选：否

rack-name
按照机架名称进行过滤。
类型：String
必选：否

idc-id
按照机房id进行过滤。
类型：String
必选：否

idc-unit-id
按照机房管理单元id过滤
类型： String
必选： 否

is-power-on
按照是否开电进行过滤，支持传入 0 和 1。1 代表开电，0 代表关电
类型： String
必选： 否

hosting-type
按照托管类型进行过滤。支持传入 CUSTOMER_MIX 代表客户混合，CUSTOMER_ONLY 代表客户独享 ，NOT_INIT 代表未初始化
类型： String
必选： 否


 * @method string getDstService() 获取传入目标服务，返回允许进行此服务的机架列表；可以和Filters一起使用。允许的值：('rackPowerOn', 'rackPowerOff')
 * @method void setDstService(string $DstService) 设置传入目标服务，返回允许进行此服务的机架列表；可以和Filters一起使用。允许的值：('rackPowerOn', 'rackPowerOff')
 * @method string getRackName() 获取机架名称关键字实现模糊搜索
 * @method void setRackName(string $RackName) 设置机架名称关键字实现模糊搜索
 */
class DescribeRacksRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。
     */
    public $Limit;

    /**
     * @var array 过滤条件

rack-id
按照机架id进行过滤。
类型：String
必选：否

rack-name
按照机架名称进行过滤。
类型：String
必选：否

idc-id
按照机房id进行过滤。
类型：String
必选：否

idc-unit-id
按照机房管理单元id过滤
类型： String
必选： 否

is-power-on
按照是否开电进行过滤，支持传入 0 和 1。1 代表开电，0 代表关电
类型： String
必选： 否

hosting-type
按照托管类型进行过滤。支持传入 CUSTOMER_MIX 代表客户混合，CUSTOMER_ONLY 代表客户独享 ，NOT_INIT 代表未初始化
类型： String
必选： 否


     */
    public $Filters;

    /**
     * @var string 传入目标服务，返回允许进行此服务的机架列表；可以和Filters一起使用。允许的值：('rackPowerOn', 'rackPowerOff')
     */
    public $DstService;

    /**
     * @var string 机架名称关键字实现模糊搜索
     */
    public $RackName;

    /**
     * @param integer $Offset 偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。
     * @param integer $Limit 返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。
     * @param array $Filters 过滤条件

rack-id
按照机架id进行过滤。
类型：String
必选：否

rack-name
按照机架名称进行过滤。
类型：String
必选：否

idc-id
按照机房id进行过滤。
类型：String
必选：否

idc-unit-id
按照机房管理单元id过滤
类型： String
必选： 否

is-power-on
按照是否开电进行过滤，支持传入 0 和 1。1 代表开电，0 代表关电
类型： String
必选： 否

hosting-type
按照托管类型进行过滤。支持传入 CUSTOMER_MIX 代表客户混合，CUSTOMER_ONLY 代表客户独享 ，NOT_INIT 代表未初始化
类型： String
必选： 否


     * @param string $DstService 传入目标服务，返回允许进行此服务的机架列表；可以和Filters一起使用。允许的值：('rackPowerOn', 'rackPowerOff')
     * @param string $RackName 机架名称关键字实现模糊搜索
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("DstService",$param) and $param["DstService"] !== null) {
            $this->DstService = $param["DstService"];
        }

        if (array_key_exists("RackName",$param) and $param["RackName"] !== null) {
            $this->RackName = $param["RackName"];
        }
    }
}
