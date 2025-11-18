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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditInstanceList请求参数结构体
 *
 * @method integer getAuditSwitch() 获取指明待查询的实例为已开通审计或未开通审计。<ul><li>1：已开通审计功能。</li><li>0：未开通审计功能。</li></ul>
 * @method void setAuditSwitch(integer $AuditSwitch) 设置指明待查询的实例为已开通审计或未开通审计。<ul><li>1：已开通审计功能。</li><li>0：未开通审计功能。</li></ul>
 * @method array getFilters() 获取筛选条件。
 * @method void setFilters(array $Filters) 设置筛选条件。
 * @method integer getAuditMode() 获取审计类型，不传 默认全部，0 全审计，1 规则审计
 * @method void setAuditMode(integer $AuditMode) 设置审计类型，不传 默认全部，0 全审计，1 规则审计
 * @method integer getLimit() 获取每页显示数量。
 * @method void setLimit(integer $Limit) 设置每页显示数量。
 * @method integer getOffset() 获取分页偏移量。
 * @method void setOffset(integer $Offset) 设置分页偏移量。
 */
class DescribeAuditInstanceListRequest extends AbstractModel
{
    /**
     * @var integer 指明待查询的实例为已开通审计或未开通审计。<ul><li>1：已开通审计功能。</li><li>0：未开通审计功能。</li></ul>
     */
    public $AuditSwitch;

    /**
     * @var array 筛选条件。
     */
    public $Filters;

    /**
     * @var integer 审计类型，不传 默认全部，0 全审计，1 规则审计
     */
    public $AuditMode;

    /**
     * @var integer 每页显示数量。
     */
    public $Limit;

    /**
     * @var integer 分页偏移量。
     */
    public $Offset;

    /**
     * @param integer $AuditSwitch 指明待查询的实例为已开通审计或未开通审计。<ul><li>1：已开通审计功能。</li><li>0：未开通审计功能。</li></ul>
     * @param array $Filters 筛选条件。
     * @param integer $AuditMode 审计类型，不传 默认全部，0 全审计，1 规则审计
     * @param integer $Limit 每页显示数量。
     * @param integer $Offset 分页偏移量。
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
        if (array_key_exists("AuditSwitch",$param) and $param["AuditSwitch"] !== null) {
            $this->AuditSwitch = $param["AuditSwitch"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("AuditMode",$param) and $param["AuditMode"] !== null) {
            $this->AuditMode = $param["AuditMode"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
