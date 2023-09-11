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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNatSwitchList请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，分页用
 * @method void setOffset(integer $Offset) 设置偏移量，分页用
 * @method integer getLimit() 获取条数，分页用
 * @method void setLimit(integer $Limit) 设置条数，分页用
 * @method string getSearchValue() 获取搜索值
 * @method void setSearchValue(string $SearchValue) 设置搜索值
 * @method integer getStatus() 获取开关，1打开，0关闭
 * @method void setStatus(integer $Status) 设置开关，1打开，0关闭
 * @method string getVpcId() 获取筛选NAT防火墙子网开关所属VPC
 * @method void setVpcId(string $VpcId) 设置筛选NAT防火墙子网开关所属VPC
 * @method string getNatId() 获取筛选NAT防火墙子网开关所属NAT网关
 * @method void setNatId(string $NatId) 设置筛选NAT防火墙子网开关所属NAT网关
 * @method string getNatInsId() 获取筛选NAT防火墙子网开关所属NAT防火墙实例
 * @method void setNatInsId(string $NatInsId) 设置筛选NAT防火墙子网开关所属NAT防火墙实例
 * @method string getArea() 获取筛选NAT防火墙子网开关所属地域
 * @method void setArea(string $Area) 设置筛选NAT防火墙子网开关所属地域
 */
class DescribeNatSwitchListRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，分页用
     */
    public $Offset;

    /**
     * @var integer 条数，分页用
     */
    public $Limit;

    /**
     * @var string 搜索值
     */
    public $SearchValue;

    /**
     * @var integer 开关，1打开，0关闭
     */
    public $Status;

    /**
     * @var string 筛选NAT防火墙子网开关所属VPC
     */
    public $VpcId;

    /**
     * @var string 筛选NAT防火墙子网开关所属NAT网关
     */
    public $NatId;

    /**
     * @var string 筛选NAT防火墙子网开关所属NAT防火墙实例
     */
    public $NatInsId;

    /**
     * @var string 筛选NAT防火墙子网开关所属地域
     */
    public $Area;

    /**
     * @param integer $Offset 偏移量，分页用
     * @param integer $Limit 条数，分页用
     * @param string $SearchValue 搜索值
     * @param integer $Status 开关，1打开，0关闭
     * @param string $VpcId 筛选NAT防火墙子网开关所属VPC
     * @param string $NatId 筛选NAT防火墙子网开关所属NAT网关
     * @param string $NatInsId 筛选NAT防火墙子网开关所属NAT防火墙实例
     * @param string $Area 筛选NAT防火墙子网开关所属地域
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

        if (array_key_exists("SearchValue",$param) and $param["SearchValue"] !== null) {
            $this->SearchValue = $param["SearchValue"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("NatId",$param) and $param["NatId"] !== null) {
            $this->NatId = $param["NatId"];
        }

        if (array_key_exists("NatInsId",$param) and $param["NatInsId"] !== null) {
            $this->NatInsId = $param["NatInsId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
