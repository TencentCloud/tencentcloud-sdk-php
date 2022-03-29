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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEdgeSnNodes请求参数结构体
 *
 * @method integer getEdgeUnitId() 获取边缘单元ID
 * @method void setEdgeUnitId(integer $EdgeUnitId) 设置边缘单元ID
 * @method string getNamePattern() 获取根据节点名称模糊匹配
 * @method void setNamePattern(string $NamePattern) 设置根据节点名称模糊匹配
 * @method string getSNPattern() 获取根据设备SN模糊匹配
 * @method void setSNPattern(string $SNPattern) 设置根据设备SN模糊匹配
 * @method string getRemarkPattern() 获取根据备注批次信息模糊匹配
 * @method void setRemarkPattern(string $RemarkPattern) 设置根据备注批次信息模糊匹配
 * @method integer getOffset() 获取默认0
 * @method void setOffset(integer $Offset) 设置默认0
 * @method integer getLimit() 获取默认20
 * @method void setLimit(integer $Limit) 设置默认20
 */
class DescribeEdgeSnNodesRequest extends AbstractModel
{
    /**
     * @var integer 边缘单元ID
     */
    public $EdgeUnitId;

    /**
     * @var string 根据节点名称模糊匹配
     */
    public $NamePattern;

    /**
     * @var string 根据设备SN模糊匹配
     */
    public $SNPattern;

    /**
     * @var string 根据备注批次信息模糊匹配
     */
    public $RemarkPattern;

    /**
     * @var integer 默认0
     */
    public $Offset;

    /**
     * @var integer 默认20
     */
    public $Limit;

    /**
     * @param integer $EdgeUnitId 边缘单元ID
     * @param string $NamePattern 根据节点名称模糊匹配
     * @param string $SNPattern 根据设备SN模糊匹配
     * @param string $RemarkPattern 根据备注批次信息模糊匹配
     * @param integer $Offset 默认0
     * @param integer $Limit 默认20
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
        if (array_key_exists("EdgeUnitId",$param) and $param["EdgeUnitId"] !== null) {
            $this->EdgeUnitId = $param["EdgeUnitId"];
        }

        if (array_key_exists("NamePattern",$param) and $param["NamePattern"] !== null) {
            $this->NamePattern = $param["NamePattern"];
        }

        if (array_key_exists("SNPattern",$param) and $param["SNPattern"] !== null) {
            $this->SNPattern = $param["SNPattern"];
        }

        if (array_key_exists("RemarkPattern",$param) and $param["RemarkPattern"] !== null) {
            $this->RemarkPattern = $param["RemarkPattern"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
