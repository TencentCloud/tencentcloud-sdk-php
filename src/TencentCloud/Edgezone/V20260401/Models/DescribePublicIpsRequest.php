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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePublicIps请求参数结构体
 *
 * @method array getNetworkInstanceId() 获取按公网实例 ID 过滤（子串匹配，多个值取并集）
 * @method void setNetworkInstanceId(array $NetworkInstanceId) 设置按公网实例 ID 过滤（子串匹配，多个值取并集）
 * @method string getZoneId() 获取按可用区/机房过滤
 * @method void setZoneId(string $ZoneId) 设置按可用区/机房过滤
 * @method array getIp() 获取按 IP 过滤（子串匹配，多个值取并集）
 * @method void setIp(array $Ip) 设置按 IP 过滤（子串匹配，多个值取并集）
 * @method array getState() 获取按状态过滤，可选值：`InUse`、`Unbound`（多个值取并集）
 * @method void setState(array $State) 设置按状态过滤，可选值：`InUse`、`Unbound`（多个值取并集）
 * @method array getType() 获取按 IP 版本过滤，可选值：`Ipv4`、`Ipv6`（多个值取并集）
 * @method void setType(array $Type) 设置按 IP 版本过滤，可选值：`Ipv4`、`Ipv6`（多个值取并集）
 * @method string getOrderByCreateTime() 获取按创建时间排序，可选值：`asc`、`desc`（默认 `desc`）
 * @method void setOrderByCreateTime(string $OrderByCreateTime) 设置按创建时间排序，可选值：`asc`、`desc`（默认 `desc`）
 * @method string getOrderByUpdateTime() 获取按更新时间排序，可选值：`asc`、`desc`（优先级高于创建时间排序）
 * @method void setOrderByUpdateTime(string $OrderByUpdateTime) 设置按更新时间排序，可选值：`asc`、`desc`（优先级高于创建时间排序）
 * @method integer getOffset() 获取分页偏移量，默认 0
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认 0
 * @method integer getLimit() 获取每页数量，默认 20，最大 100
 * @method void setLimit(integer $Limit) 设置每页数量，默认 20，最大 100
 */
class DescribePublicIpsRequest extends AbstractModel
{
    /**
     * @var array 按公网实例 ID 过滤（子串匹配，多个值取并集）
     */
    public $NetworkInstanceId;

    /**
     * @var string 按可用区/机房过滤
     */
    public $ZoneId;

    /**
     * @var array 按 IP 过滤（子串匹配，多个值取并集）
     */
    public $Ip;

    /**
     * @var array 按状态过滤，可选值：`InUse`、`Unbound`（多个值取并集）
     */
    public $State;

    /**
     * @var array 按 IP 版本过滤，可选值：`Ipv4`、`Ipv6`（多个值取并集）
     */
    public $Type;

    /**
     * @var string 按创建时间排序，可选值：`asc`、`desc`（默认 `desc`）
     */
    public $OrderByCreateTime;

    /**
     * @var string 按更新时间排序，可选值：`asc`、`desc`（优先级高于创建时间排序）
     */
    public $OrderByUpdateTime;

    /**
     * @var integer 分页偏移量，默认 0
     */
    public $Offset;

    /**
     * @var integer 每页数量，默认 20，最大 100
     */
    public $Limit;

    /**
     * @param array $NetworkInstanceId 按公网实例 ID 过滤（子串匹配，多个值取并集）
     * @param string $ZoneId 按可用区/机房过滤
     * @param array $Ip 按 IP 过滤（子串匹配，多个值取并集）
     * @param array $State 按状态过滤，可选值：`InUse`、`Unbound`（多个值取并集）
     * @param array $Type 按 IP 版本过滤，可选值：`Ipv4`、`Ipv6`（多个值取并集）
     * @param string $OrderByCreateTime 按创建时间排序，可选值：`asc`、`desc`（默认 `desc`）
     * @param string $OrderByUpdateTime 按更新时间排序，可选值：`asc`、`desc`（优先级高于创建时间排序）
     * @param integer $Offset 分页偏移量，默认 0
     * @param integer $Limit 每页数量，默认 20，最大 100
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
        if (array_key_exists("NetworkInstanceId",$param) and $param["NetworkInstanceId"] !== null) {
            $this->NetworkInstanceId = $param["NetworkInstanceId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("OrderByCreateTime",$param) and $param["OrderByCreateTime"] !== null) {
            $this->OrderByCreateTime = $param["OrderByCreateTime"];
        }

        if (array_key_exists("OrderByUpdateTime",$param) and $param["OrderByUpdateTime"] !== null) {
            $this->OrderByUpdateTime = $param["OrderByUpdateTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
