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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAIGWCustomGuardrailHits请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关实例 ID</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关实例 ID</p>
 * @method integer getStartTime() 获取<p>查询起始时间，Unix 秒级时间戳</p>
 * @method void setStartTime(integer $StartTime) 设置<p>查询起始时间，Unix 秒级时间戳</p>
 * @method integer getEndTime() 获取<p>查询结束时间，Unix 秒级时间戳</p>
 * @method void setEndTime(integer $EndTime) 设置<p>查询结束时间，Unix 秒级时间戳</p>
 * @method integer getOffset() 获取<p>分页偏移量，最小 0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，最小 0</p>
 * @method integer getLimit() 获取<p>单页数量，范围 1～100，默认 20</p>
 * @method void setLimit(integer $Limit) 设置<p>单页数量，范围 1～100，默认 20</p>
 * @method array getFilters() 获取<p>审核记录过滤条件</p>
 * @method void setFilters(array $Filters) 设置<p>审核记录过滤条件</p>
 */
class DescribeAIGWCustomGuardrailHitsRequest extends AbstractModel
{
    /**
     * @var string <p>网关实例 ID</p>
     */
    public $GatewayId;

    /**
     * @var integer <p>查询起始时间，Unix 秒级时间戳</p>
     */
    public $StartTime;

    /**
     * @var integer <p>查询结束时间，Unix 秒级时间戳</p>
     */
    public $EndTime;

    /**
     * @var integer <p>分页偏移量，最小 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>单页数量，范围 1～100，默认 20</p>
     */
    public $Limit;

    /**
     * @var array <p>审核记录过滤条件</p>
     */
    public $Filters;

    /**
     * @param string $GatewayId <p>网关实例 ID</p>
     * @param integer $StartTime <p>查询起始时间，Unix 秒级时间戳</p>
     * @param integer $EndTime <p>查询结束时间，Unix 秒级时间戳</p>
     * @param integer $Offset <p>分页偏移量，最小 0</p>
     * @param integer $Limit <p>单页数量，范围 1～100，默认 20</p>
     * @param array $Filters <p>审核记录过滤条件</p>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
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
                $obj = new CustomGuardrailHitFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
