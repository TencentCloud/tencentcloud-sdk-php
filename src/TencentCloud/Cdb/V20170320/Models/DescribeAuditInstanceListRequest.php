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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditInstanceList请求参数结构体
 *
 * @method integer getAuditSwitch() 获取实例审计开启的状态。1-已开启审计；0-未开启审计。
 * @method void setAuditSwitch(integer $AuditSwitch) 设置实例审计开启的状态。1-已开启审计；0-未开启审计。
 * @method array getFilters() 获取查询实例列表的过滤条件。
 * @method void setFilters(array $Filters) 设置查询实例列表的过滤条件。
 * @method integer getAuditMode() 获取实例的审计规则模式。1-规则审计；0-全审计。
 * @method void setAuditMode(integer $AuditMode) 设置实例的审计规则模式。1-规则审计；0-全审计。
 * @method integer getLimit() 获取单次请求返回的数量。默认值为30，最大值为 20000。
 * @method void setLimit(integer $Limit) 设置单次请求返回的数量。默认值为30，最大值为 20000。
 * @method integer getOffset() 获取偏移量，默认值为 0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认值为 0。
 */
class DescribeAuditInstanceListRequest extends AbstractModel
{
    /**
     * @var integer 实例审计开启的状态。1-已开启审计；0-未开启审计。
     */
    public $AuditSwitch;

    /**
     * @var array 查询实例列表的过滤条件。
     */
    public $Filters;

    /**
     * @var integer 实例的审计规则模式。1-规则审计；0-全审计。
     */
    public $AuditMode;

    /**
     * @var integer 单次请求返回的数量。默认值为30，最大值为 20000。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认值为 0。
     */
    public $Offset;

    /**
     * @param integer $AuditSwitch 实例审计开启的状态。1-已开启审计；0-未开启审计。
     * @param array $Filters 查询实例列表的过滤条件。
     * @param integer $AuditMode 实例的审计规则模式。1-规则审计；0-全审计。
     * @param integer $Limit 单次请求返回的数量。默认值为30，最大值为 20000。
     * @param integer $Offset 偏移量，默认值为 0。
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
                $obj = new AuditInstanceFilters();
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
