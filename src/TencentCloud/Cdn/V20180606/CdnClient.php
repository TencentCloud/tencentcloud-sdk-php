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

namespace TencentCloud\Cdn\V20180606;
use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Cdn\V20180606\Models as Models;

/**
* @method Models\DescribeCdnDataResponse DescribeCdnData(Models\DescribeCdnDataRequest $req) DescribeCdnData 用于查询 CDN 实时访问监控数据，支持以下指标查询：

+ 流量（单位为 byte）
+ 带宽（单位为 bps）
+ 请求数（单位为 次）
+ 流量命中率（单位为 %，小数点后保留两位）
+ 状态码 2xx 汇总及各 2 开头状态码明细（单位为 个）
+ 状态码 3xx 汇总及各 3 开头状态码明细（单位为 个）
+ 状态码 4xx 汇总及各 4 开头状态码明细（单位为 个）
+ 状态码 5xx 汇总及各 5 开头状态码明细（单位为 个）
* @method Models\DescribeCdnIpResponse DescribeCdnIp(Models\DescribeCdnIpRequest $req) DescribeCdnIp 用于查询 CDN IP 归属。
* @method Models\DescribeIpVisitResponse DescribeIpVisit(Models\DescribeIpVisitRequest $req) DescribeIpVisit 用于查询 5 分钟活跃用户数，及日活跃用户数明细

+ 5 分钟活跃用户数：根据日志中客户端 IP，5 分钟粒度去重统计
+ 日活跃用户数：根据日志中客户端 IP，按天粒度去重统计
* @method Models\DescribeMapInfoResponse DescribeMapInfo(Models\DescribeMapInfoRequest $req) DescribeMapInfo 用于查询省份对应的 ID，运营商对应的 ID 信息。
* @method Models\DescribeOriginDataResponse DescribeOriginData(Models\DescribeOriginDataRequest $req) DescribeOriginData 用于查询 CDN 实时回源监控数据，支持以下指标查询：

+ 回源流量（单位为 byte）
+ 回源带宽（单位为 bps）
+ 回源请求数（单位为 次）
+ 回源失败请求数（单位为 次）
+ 回源失败率（单位为 %，小数点后保留两位）
+ 回源状态码 2xx 汇总及各 2 开头回源状态码明细（单位为 个）
+ 回源状态码 3xx 汇总及各 3 开头回源状态码明细（单位为 个）
+ 回源状态码 4xx 汇总及各 4 开头回源状态码明细（单位为 个）
+ 回源状态码 5xx 汇总及各 5 开头回源状态码明细（单位为 个）
* @method Models\DescribePayTypeResponse DescribePayType(Models\DescribePayTypeRequest $req) DescribePayType 用于查询用户的计费类型，计费周期等信息。
* @method Models\DescribePurgeTasksResponse DescribePurgeTasks(Models\DescribePurgeTasksRequest $req) DescribePurgeTasks 用于查询刷新任务提交历史记录及执行进度。
* @method Models\DescribePushTasksResponse DescribePushTasks(Models\DescribePushTasksRequest $req) DescribePushTasks 用于查询预热任务提交历史记录及执行进度。（接口尚在批量公测中，暂未全量开放使用）
* @method Models\DisableCachesResponse DisableCaches(Models\DisableCachesRequest $req) DisableCaches 用于禁用 CDN 上指定 URL 的访问，禁用完成后，全网访问会直接返回 403。（接口尚在内测中，暂未全量开放使用）
* @method Models\EnableCachesResponse EnableCaches(Models\EnableCachesRequest $req) EnableCaches 用于解禁手工封禁的 URL，解禁成功后，全网生效时间约 5~10 分钟。（接口尚在内测中，暂未全量开放使用）
* @method Models\GetDisableRecordsResponse GetDisableRecords(Models\GetDisableRecordsRequest $req) GetDisableRecords 用户查询资源禁用历史，及 URL 当前状态。（接口尚在内测中，暂未全量开放使用）
* @method Models\ListTopDataResponse ListTopData(Models\ListTopDataRequest $req) ListTopData 通过入参 Metric 和 Filter 组合不同，可以查询以下排序数据：

+ 依据总流量、总请求数对访问 URL 排序，从大至小返回 TOP 1000 URL
+ 依据总流量、总请求数对客户端省份排序，从大至小返回省份列表
+ 依据总流量、总请求数对客户端运营商排序，从大至小返回运营商列表
+ 依据总流量、峰值带宽、总请求数、平均命中率、2XX/3XX/4XX/5XX 状态码对域名排序，从大至小返回域名列表
+ 依据总回源流量、回源峰值带宽、总回源请求数、平均回源失败率、2XX/3XX/4XX/5XX 回源状态码对域名排序，从大至小返回域名列表
* @method Models\PurgePathCacheResponse PurgePathCache(Models\PurgePathCacheRequest $req) PurgeUrlsCache 用于批量刷新目录缓存，一次提交将返回一个刷新任务id。
* @method Models\PurgeUrlsCacheResponse PurgeUrlsCache(Models\PurgeUrlsCacheRequest $req) PurgeUrlsCache 用于批量刷新Url，一次提交将返回一个刷新任务id。
* @method Models\PushUrlsCacheResponse PushUrlsCache(Models\PushUrlsCacheRequest $req) PushUrlsCache 用于将指定 URL 资源列表加载至 CDN 节点，默认情况下每次调用可提交 20 条 URL，每日一共可提交 1000 条。
 */

class CdnClient extends AbstractClient
{
    /**
     * @var string 产品默认域名
     */
    protected $endpoint = "cdn.tencentcloudapi.com";

    /**
     * @var string api版本号
     */
    protected $version = "2018-06-06";

    /**
     * CvmClient constructor.
     * @param Credential $credential 认证类实例
     * @param string $region 地域
     * @param ClientProfile $profile client配置
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("cdn")."\\"."V20180606\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
