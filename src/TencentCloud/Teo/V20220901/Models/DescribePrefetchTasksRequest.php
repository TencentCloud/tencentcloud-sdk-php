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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrefetchTasks请求参数结构体
 *
 * @method string getZoneId() 获取站点ID。此参数将于2024年05月30日后由可选改为必填，详见公告：[【腾讯云 EdgeOne】云 API 变更通知](https://cloud.tencent.com/document/product/1552/104902)。
 * @method void setZoneId(string $ZoneId) 设置站点ID。此参数将于2024年05月30日后由可选改为必填，详见公告：[【腾讯云 EdgeOne】云 API 变更通知](https://cloud.tencent.com/document/product/1552/104902)。
 * @method string getStartTime() 获取查询起始时间，时间与 job-id 必填一个。
 * @method void setStartTime(string $StartTime) 设置查询起始时间，时间与 job-id 必填一个。
 * @method string getEndTime() 获取查询结束时间，时间与 job-id 必填一个。
 * @method void setEndTime(string $EndTime) 设置查询结束时间，时间与 job-id 必填一个。
 * @method integer getOffset() 获取分页查询偏移量，默认为 0。
 * @method void setOffset(integer $Offset) 设置分页查询偏移量，默认为 0。
 * @method integer getLimit() 获取分页查询限制数目，默认值：20，上限：1000。
 * @method void setLimit(integer $Limit) 设置分页查询限制数目，默认值：20，上限：1000。
 * @method array getFilters() 获取过滤条件，Filters.Values 的上限为 20。详细的过滤条件如下：<li>job-id：按照任务 ID 进行过滤。job-id 形如：1379afjk91u32h，暂不支持多值，不支持模糊查询；</li><li>target：按照目标资源信息进行过滤。target 形如：http://www.qq.com/1.txt，暂不支持多值，不支持模糊查询；</li><li>domains：按照域名行过滤。domains 形如：www.qq.com，不支持模糊查询；</li><li>statuses：按照任务状态进行过滤，不支持模糊查询。可选项：<br>   processing：处理中<br>   success：成功<br>   failed：失败<br>   timeout：超时<br>   canceled：已取消<br>   invalid：无效。即源站响应非 2xx 状态码，请检查源站服务。</li>
 * @method void setFilters(array $Filters) 设置过滤条件，Filters.Values 的上限为 20。详细的过滤条件如下：<li>job-id：按照任务 ID 进行过滤。job-id 形如：1379afjk91u32h，暂不支持多值，不支持模糊查询；</li><li>target：按照目标资源信息进行过滤。target 形如：http://www.qq.com/1.txt，暂不支持多值，不支持模糊查询；</li><li>domains：按照域名行过滤。domains 形如：www.qq.com，不支持模糊查询；</li><li>statuses：按照任务状态进行过滤，不支持模糊查询。可选项：<br>   processing：处理中<br>   success：成功<br>   failed：失败<br>   timeout：超时<br>   canceled：已取消<br>   invalid：无效。即源站响应非 2xx 状态码，请检查源站服务。</li>
 */
class DescribePrefetchTasksRequest extends AbstractModel
{
    /**
     * @var string 站点ID。此参数将于2024年05月30日后由可选改为必填，详见公告：[【腾讯云 EdgeOne】云 API 变更通知](https://cloud.tencent.com/document/product/1552/104902)。
     */
    public $ZoneId;

    /**
     * @var string 查询起始时间，时间与 job-id 必填一个。
     */
    public $StartTime;

    /**
     * @var string 查询结束时间，时间与 job-id 必填一个。
     */
    public $EndTime;

    /**
     * @var integer 分页查询偏移量，默认为 0。
     */
    public $Offset;

    /**
     * @var integer 分页查询限制数目，默认值：20，上限：1000。
     */
    public $Limit;

    /**
     * @var array 过滤条件，Filters.Values 的上限为 20。详细的过滤条件如下：<li>job-id：按照任务 ID 进行过滤。job-id 形如：1379afjk91u32h，暂不支持多值，不支持模糊查询；</li><li>target：按照目标资源信息进行过滤。target 形如：http://www.qq.com/1.txt，暂不支持多值，不支持模糊查询；</li><li>domains：按照域名行过滤。domains 形如：www.qq.com，不支持模糊查询；</li><li>statuses：按照任务状态进行过滤，不支持模糊查询。可选项：<br>   processing：处理中<br>   success：成功<br>   failed：失败<br>   timeout：超时<br>   canceled：已取消<br>   invalid：无效。即源站响应非 2xx 状态码，请检查源站服务。</li>
     */
    public $Filters;

    /**
     * @param string $ZoneId 站点ID。此参数将于2024年05月30日后由可选改为必填，详见公告：[【腾讯云 EdgeOne】云 API 变更通知](https://cloud.tencent.com/document/product/1552/104902)。
     * @param string $StartTime 查询起始时间，时间与 job-id 必填一个。
     * @param string $EndTime 查询结束时间，时间与 job-id 必填一个。
     * @param integer $Offset 分页查询偏移量，默认为 0。
     * @param integer $Limit 分页查询限制数目，默认值：20，上限：1000。
     * @param array $Filters 过滤条件，Filters.Values 的上限为 20。详细的过滤条件如下：<li>job-id：按照任务 ID 进行过滤。job-id 形如：1379afjk91u32h，暂不支持多值，不支持模糊查询；</li><li>target：按照目标资源信息进行过滤。target 形如：http://www.qq.com/1.txt，暂不支持多值，不支持模糊查询；</li><li>domains：按照域名行过滤。domains 形如：www.qq.com，不支持模糊查询；</li><li>statuses：按照任务状态进行过滤，不支持模糊查询。可选项：<br>   processing：处理中<br>   success：成功<br>   failed：失败<br>   timeout：超时<br>   canceled：已取消<br>   invalid：无效。即源站响应非 2xx 状态码，请检查源站服务。</li>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
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
                $obj = new AdvancedFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
