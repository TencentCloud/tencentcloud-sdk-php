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
 * @method integer getAuditSwitch() 获取<p>实例审计开启的状态。1-已开启审计；0-未开启审计。</p>
 * @method void setAuditSwitch(integer $AuditSwitch) 设置<p>实例审计开启的状态。1-已开启审计；0-未开启审计。</p>
 * @method array getFilters() 获取<p>查询实例列表的过滤条件。</p>
 * @method void setFilters(array $Filters) 设置<p>查询实例列表的过滤条件。</p>
 * @method integer getAuditMode() 获取<p>实例的审计规则模式。1-规则审计；0-全审计。</p>
 * @method void setAuditMode(integer $AuditMode) 设置<p>实例的审计规则模式。1-规则审计；0-全审计。</p>
 * @method integer getLimit() 获取<p>单次请求返回的数量。默认值为30，最大值为 20000。</p>
 * @method void setLimit(integer $Limit) 设置<p>单次请求返回的数量。默认值为30，最大值为 20000。</p>
 * @method integer getOffset() 获取<p>偏移量，默认值为 0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认值为 0。</p>
 */
class DescribeAuditInstanceListRequest extends AbstractModel
{
    /**
     * @var integer <p>实例审计开启的状态。1-已开启审计；0-未开启审计。</p>
     */
    public $AuditSwitch;

    /**
     * @var array <p>查询实例列表的过滤条件。</p>
     */
    public $Filters;

    /**
     * @var integer <p>实例的审计规则模式。1-规则审计；0-全审计。</p>
     */
    public $AuditMode;

    /**
     * @var integer <p>单次请求返回的数量。默认值为30，最大值为 20000。</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量，默认值为 0。</p>
     */
    public $Offset;

    /**
     * @param integer $AuditSwitch <p>实例审计开启的状态。1-已开启审计；0-未开启审计。</p>
     * @param array $Filters <p>查询实例列表的过滤条件。</p>
     * @param integer $AuditMode <p>实例的审计规则模式。1-规则审计；0-全审计。</p>
     * @param integer $Limit <p>单次请求返回的数量。默认值为30，最大值为 20000。</p>
     * @param integer $Offset <p>偏移量，默认值为 0。</p>
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
