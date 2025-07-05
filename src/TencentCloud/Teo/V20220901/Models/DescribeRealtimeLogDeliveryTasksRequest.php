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
 * DescribeRealtimeLogDeliveryTasks请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method integer getOffset() 获取分页查询偏移量。默认值：0。
 * @method void setOffset(integer $Offset) 设置分页查询偏移量。默认值：0。
 * @method integer getLimit() 获取分页查询限制数目。默认值：20，最大值：1000。
 * @method void setLimit(integer $Limit) 设置分页查询限制数目。默认值：20，最大值：1000。
 * @method array getFilters() 获取过滤条件，Filters.Values 的上限为 20。该参数不填写时，返回当前 zone-id 下所有实时日志投递任务信息。详细的过滤条件如下：
<li>task-id：按照实时日志投递任务 ID进行过滤。不支持模糊查询。</li>
<li>task-name：按照实时日志投递任务名称进行过滤。支持模糊查询，使用模糊查询时，仅支持填写一个实时日志投递任务名称。</li>
<li>entity-list：按照实时日志投递任务对应的实体进行过滤。不支持模糊查询。示例值：domain.example.com 或者 sid-2s69eb5wcms7。</li>
<li>task-type：按照实时日志投递任务类型进行过滤。不支持模糊查询。可选项如下：<br>   cls: 推送到腾讯云 CLS；<br>   custom_endpoint：推送到自定义 HTTP(S) 地址；<br>   s3：推送到 AWS S3 兼容存储桶地址。</li>
 * @method void setFilters(array $Filters) 设置过滤条件，Filters.Values 的上限为 20。该参数不填写时，返回当前 zone-id 下所有实时日志投递任务信息。详细的过滤条件如下：
<li>task-id：按照实时日志投递任务 ID进行过滤。不支持模糊查询。</li>
<li>task-name：按照实时日志投递任务名称进行过滤。支持模糊查询，使用模糊查询时，仅支持填写一个实时日志投递任务名称。</li>
<li>entity-list：按照实时日志投递任务对应的实体进行过滤。不支持模糊查询。示例值：domain.example.com 或者 sid-2s69eb5wcms7。</li>
<li>task-type：按照实时日志投递任务类型进行过滤。不支持模糊查询。可选项如下：<br>   cls: 推送到腾讯云 CLS；<br>   custom_endpoint：推送到自定义 HTTP(S) 地址；<br>   s3：推送到 AWS S3 兼容存储桶地址。</li>
 */
class DescribeRealtimeLogDeliveryTasksRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var integer 分页查询偏移量。默认值：0。
     */
    public $Offset;

    /**
     * @var integer 分页查询限制数目。默认值：20，最大值：1000。
     */
    public $Limit;

    /**
     * @var array 过滤条件，Filters.Values 的上限为 20。该参数不填写时，返回当前 zone-id 下所有实时日志投递任务信息。详细的过滤条件如下：
<li>task-id：按照实时日志投递任务 ID进行过滤。不支持模糊查询。</li>
<li>task-name：按照实时日志投递任务名称进行过滤。支持模糊查询，使用模糊查询时，仅支持填写一个实时日志投递任务名称。</li>
<li>entity-list：按照实时日志投递任务对应的实体进行过滤。不支持模糊查询。示例值：domain.example.com 或者 sid-2s69eb5wcms7。</li>
<li>task-type：按照实时日志投递任务类型进行过滤。不支持模糊查询。可选项如下：<br>   cls: 推送到腾讯云 CLS；<br>   custom_endpoint：推送到自定义 HTTP(S) 地址；<br>   s3：推送到 AWS S3 兼容存储桶地址。</li>
     */
    public $Filters;

    /**
     * @param string $ZoneId 站点 ID。
     * @param integer $Offset 分页查询偏移量。默认值：0。
     * @param integer $Limit 分页查询限制数目。默认值：20，最大值：1000。
     * @param array $Filters 过滤条件，Filters.Values 的上限为 20。该参数不填写时，返回当前 zone-id 下所有实时日志投递任务信息。详细的过滤条件如下：
<li>task-id：按照实时日志投递任务 ID进行过滤。不支持模糊查询。</li>
<li>task-name：按照实时日志投递任务名称进行过滤。支持模糊查询，使用模糊查询时，仅支持填写一个实时日志投递任务名称。</li>
<li>entity-list：按照实时日志投递任务对应的实体进行过滤。不支持模糊查询。示例值：domain.example.com 或者 sid-2s69eb5wcms7。</li>
<li>task-type：按照实时日志投递任务类型进行过滤。不支持模糊查询。可选项如下：<br>   cls: 推送到腾讯云 CLS；<br>   custom_endpoint：推送到自定义 HTTP(S) 地址；<br>   s3：推送到 AWS S3 兼容存储桶地址。</li>
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
