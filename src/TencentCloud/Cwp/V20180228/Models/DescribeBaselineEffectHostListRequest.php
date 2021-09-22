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
 * DescribeBaselineEffectHostList请求参数结构体
 *
 * @method integer getLimit() 获取分页参数 最大100条
 * @method void setLimit(integer $Limit) 设置分页参数 最大100条
 * @method integer getOffset() 获取分页参数
 * @method void setOffset(integer $Offset) 设置分页参数
 * @method integer getBaselineId() 获取基线id
 * @method void setBaselineId(integer $BaselineId) 设置基线id
 * @method array getFilters() 获取过滤条件。
<li>AliasName- String- 主机别名</li>
<li>Status- Uint- 1已通过  0未通过 5检测中</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>AliasName- String- 主机别名</li>
<li>Status- Uint- 1已通过  0未通过 5检测中</li>
 * @method integer getStrategyId() 获取策略id
 * @method void setStrategyId(integer $StrategyId) 设置策略id
 * @method array getUuidList() 获取主机uuid数组
 * @method void setUuidList(array $UuidList) 设置主机uuid数组
 */
class DescribeBaselineEffectHostListRequest extends AbstractModel
{
    /**
     * @var integer 分页参数 最大100条
     */
    public $Limit;

    /**
     * @var integer 分页参数
     */
    public $Offset;

    /**
     * @var integer 基线id
     */
    public $BaselineId;

    /**
     * @var array 过滤条件。
<li>AliasName- String- 主机别名</li>
<li>Status- Uint- 1已通过  0未通过 5检测中</li>
     */
    public $Filters;

    /**
     * @var integer 策略id
     */
    public $StrategyId;

    /**
     * @var array 主机uuid数组
     */
    public $UuidList;

    /**
     * @param integer $Limit 分页参数 最大100条
     * @param integer $Offset 分页参数
     * @param integer $BaselineId 基线id
     * @param array $Filters 过滤条件。
<li>AliasName- String- 主机别名</li>
<li>Status- Uint- 1已通过  0未通过 5检测中</li>
     * @param integer $StrategyId 策略id
     * @param array $UuidList 主机uuid数组
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("BaselineId",$param) and $param["BaselineId"] !== null) {
            $this->BaselineId = $param["BaselineId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("UuidList",$param) and $param["UuidList"] !== null) {
            $this->UuidList = $param["UuidList"];
        }
    }
}
