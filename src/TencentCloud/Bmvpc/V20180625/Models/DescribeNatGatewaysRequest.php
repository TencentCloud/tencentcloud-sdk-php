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
namespace TencentCloud\Bmvpc\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getNatId() 获取NAT网关ID，例如：nat-kdm476mp
 * @method void setNatId(string $NatId) 设置NAT网关ID，例如：nat-kdm476mp
 * @method string getNatName() 获取NAT名称
 * @method void setNatName(string $NatName) 设置NAT名称
 * @method string getSearchKey() 获取搜索字段
 * @method void setSearchKey(string $SearchKey) 设置搜索字段
 * @method string getVpcId() 获取私有网络ID，例如：vpc-kd7d06of
 * @method void setVpcId(string $VpcId) 设置私有网络ID，例如：vpc-kd7d06of
 * @method integer getOffset() 获取起始值
 * @method void setOffset(integer $Offset) 设置起始值
 * @method integer getLimit() 获取偏移值，默认值为 20
 * @method void setLimit(integer $Limit) 设置偏移值，默认值为 20
 */

/**
 *DescribeNatGateways请求参数结构体
 */
class DescribeNatGatewaysRequest extends AbstractModel
{
    /**
     * @var string NAT网关ID，例如：nat-kdm476mp
     */
    public $NatId;

    /**
     * @var string NAT名称
     */
    public $NatName;

    /**
     * @var string 搜索字段
     */
    public $SearchKey;

    /**
     * @var string 私有网络ID，例如：vpc-kd7d06of
     */
    public $VpcId;

    /**
     * @var integer 起始值
     */
    public $Offset;

    /**
     * @var integer 偏移值，默认值为 20
     */
    public $Limit;
    /**
     * @param string $NatId NAT网关ID，例如：nat-kdm476mp
     * @param string $NatName NAT名称
     * @param string $SearchKey 搜索字段
     * @param string $VpcId 私有网络ID，例如：vpc-kd7d06of
     * @param integer $Offset 起始值
     * @param integer $Limit 偏移值，默认值为 20
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("NatId",$param) and $param["NatId"] !== null) {
            $this->NatId = $param["NatId"];
        }

        if (array_key_exists("NatName",$param) and $param["NatName"] !== null) {
            $this->NatName = $param["NatName"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
