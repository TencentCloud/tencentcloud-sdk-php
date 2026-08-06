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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJobs请求参数结构体
 *
 * @method array getJobIds() 获取<p>按照一个或者多个作业ID查询。作业ID形如：cql-11112222，每次请求的作业上限为100。参数不支持同时指定JobIds和Filters。</p>
 * @method void setJobIds(array $JobIds) 设置<p>按照一个或者多个作业ID查询。作业ID形如：cql-11112222，每次请求的作业上限为100。参数不支持同时指定JobIds和Filters。</p>
 * @method array getFilters() 获取<p>过滤条件，支持的 Filter.Name 为：作业名 Name、作业状态 Status、所属集群 ClusterId、作业id JobId、集群名称 ClusterName。 每次请求的 Filters 个数的上限为 5，Filter.Values 的个数上限为 5。参数不支持同时指定 JobIds 和 Filters。</p>
 * @method void setFilters(array $Filters) 设置<p>过滤条件，支持的 Filter.Name 为：作业名 Name、作业状态 Status、所属集群 ClusterId、作业id JobId、集群名称 ClusterName。 每次请求的 Filters 个数的上限为 5，Filter.Values 的个数上限为 5。参数不支持同时指定 JobIds 和 Filters。</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0</p>
 * @method integer getLimit() 获取<p>分页大小，默认为20，最大值为100</p>
 * @method void setLimit(integer $Limit) 设置<p>分页大小，默认为20，最大值为100</p>
 * @method string getWorkSpaceId() 获取<p>工作空间 SerialId</p>
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置<p>工作空间 SerialId</p>
 * @method array getExtraResult() 获取<p>查询额外的作业信息,例如 JobEventInfo</p>
 * @method void setExtraResult(array $ExtraResult) 设置<p>查询额外的作业信息,例如 JobEventInfo</p>
 * @method string getConnectorOptions() 获取<p>查询引用connector</p>
 * @method void setConnectorOptions(string $ConnectorOptions) 设置<p>查询引用connector</p>
 */
class DescribeJobsRequest extends AbstractModel
{
    /**
     * @var array <p>按照一个或者多个作业ID查询。作业ID形如：cql-11112222，每次请求的作业上限为100。参数不支持同时指定JobIds和Filters。</p>
     */
    public $JobIds;

    /**
     * @var array <p>过滤条件，支持的 Filter.Name 为：作业名 Name、作业状态 Status、所属集群 ClusterId、作业id JobId、集群名称 ClusterName。 每次请求的 Filters 个数的上限为 5，Filter.Values 的个数上限为 5。参数不支持同时指定 JobIds 和 Filters。</p>
     */
    public $Filters;

    /**
     * @var integer <p>偏移量，默认为0</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页大小，默认为20，最大值为100</p>
     */
    public $Limit;

    /**
     * @var string <p>工作空间 SerialId</p>
     */
    public $WorkSpaceId;

    /**
     * @var array <p>查询额外的作业信息,例如 JobEventInfo</p>
     */
    public $ExtraResult;

    /**
     * @var string <p>查询引用connector</p>
     */
    public $ConnectorOptions;

    /**
     * @param array $JobIds <p>按照一个或者多个作业ID查询。作业ID形如：cql-11112222，每次请求的作业上限为100。参数不支持同时指定JobIds和Filters。</p>
     * @param array $Filters <p>过滤条件，支持的 Filter.Name 为：作业名 Name、作业状态 Status、所属集群 ClusterId、作业id JobId、集群名称 ClusterName。 每次请求的 Filters 个数的上限为 5，Filter.Values 的个数上限为 5。参数不支持同时指定 JobIds 和 Filters。</p>
     * @param integer $Offset <p>偏移量，默认为0</p>
     * @param integer $Limit <p>分页大小，默认为20，最大值为100</p>
     * @param string $WorkSpaceId <p>工作空间 SerialId</p>
     * @param array $ExtraResult <p>查询额外的作业信息,例如 JobEventInfo</p>
     * @param string $ConnectorOptions <p>查询引用connector</p>
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
        if (array_key_exists("JobIds",$param) and $param["JobIds"] !== null) {
            $this->JobIds = $param["JobIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }

        if (array_key_exists("ExtraResult",$param) and $param["ExtraResult"] !== null) {
            $this->ExtraResult = $param["ExtraResult"];
        }

        if (array_key_exists("ConnectorOptions",$param) and $param["ConnectorOptions"] !== null) {
            $this->ConnectorOptions = $param["ConnectorOptions"];
        }
    }
}
