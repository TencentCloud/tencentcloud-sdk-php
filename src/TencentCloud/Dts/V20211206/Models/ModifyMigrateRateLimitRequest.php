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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMigrateRateLimit请求参数结构体
 *
 * @method string getJobId() 获取<p>迁移任务 Id，可通过<a href="https://cloud.tencent.com/document/product/571/82084">DescribeMigrationJobs</a>接口获取。</p>
 * @method void setJobId(string $JobId) 设置<p>迁移任务 Id，可通过<a href="https://cloud.tencent.com/document/product/571/82084">DescribeMigrationJobs</a>接口获取。</p>
 * @method integer getDumpThread() 获取<p>迁移任务全量导出线程数、有效值为 1-16</p>
 * @method void setDumpThread(integer $DumpThread) 设置<p>迁移任务全量导出线程数、有效值为 1-16</p>
 * @method integer getDumpRps() 获取<p>迁移全量导出的 Rps 限制、需要大于 0</p>
 * @method void setDumpRps(integer $DumpRps) 设置<p>迁移全量导出的 Rps 限制、需要大于 0</p>
 * @method integer getDumpBps() 获取<p>全量导出Bps，单位MB/s，MongoDB专用，上限80</p>
 * @method void setDumpBps(integer $DumpBps) 设置<p>全量导出Bps，单位MB/s，MongoDB专用，上限80</p>
 * @method integer getLoadThread() 获取<p>迁移任务全量导入线程数、有效值为 1-16</p>
 * @method void setLoadThread(integer $LoadThread) 设置<p>迁移任务全量导入线程数、有效值为 1-16</p>
 * @method integer getSinkerThread() 获取<p>迁移任务增量导入线程数、有效值为 1-128</p>
 * @method void setSinkerThread(integer $SinkerThread) 设置<p>迁移任务增量导入线程数、有效值为 1-128</p>
 * @method integer getLoadRps() 获取<p>全量导入Rps限制</p>
 * @method void setLoadRps(integer $LoadRps) 设置<p>全量导入Rps限制</p>
 * @method integer getLoadBps() 获取<p>导入BPS，单位MB/s。目前仅对redis生效，表示目标库单分片流量限制大小</p>
 * @method void setLoadBps(integer $LoadBps) 设置<p>导入BPS，单位MB/s。目前仅对redis生效，表示目标库单分片流量限制大小</p>
 * @method integer getDstShardCount() 获取<p>目标库分片数，目前仅对redis生效</p>
 * @method void setDstShardCount(integer $DstShardCount) 设置<p>目标库分片数，目前仅对redis生效</p>
 * @method integer getSinkerRps() 获取<p>增量导入Rps，MongoDB专用，上限30000</p>
 * @method void setSinkerRps(integer $SinkerRps) 设置<p>增量导入Rps，MongoDB专用，上限30000</p>
 * @method integer getSinkerBps() 获取<p>增量导入Bps，单位MB/s，MongoDB专用，上限120</p>
 * @method void setSinkerBps(integer $SinkerBps) 设置<p>增量导入Bps，单位MB/s，MongoDB专用，上限120</p>
 */
class ModifyMigrateRateLimitRequest extends AbstractModel
{
    /**
     * @var string <p>迁移任务 Id，可通过<a href="https://cloud.tencent.com/document/product/571/82084">DescribeMigrationJobs</a>接口获取。</p>
     */
    public $JobId;

    /**
     * @var integer <p>迁移任务全量导出线程数、有效值为 1-16</p>
     */
    public $DumpThread;

    /**
     * @var integer <p>迁移全量导出的 Rps 限制、需要大于 0</p>
     */
    public $DumpRps;

    /**
     * @var integer <p>全量导出Bps，单位MB/s，MongoDB专用，上限80</p>
     */
    public $DumpBps;

    /**
     * @var integer <p>迁移任务全量导入线程数、有效值为 1-16</p>
     */
    public $LoadThread;

    /**
     * @var integer <p>迁移任务增量导入线程数、有效值为 1-128</p>
     */
    public $SinkerThread;

    /**
     * @var integer <p>全量导入Rps限制</p>
     */
    public $LoadRps;

    /**
     * @var integer <p>导入BPS，单位MB/s。目前仅对redis生效，表示目标库单分片流量限制大小</p>
     */
    public $LoadBps;

    /**
     * @var integer <p>目标库分片数，目前仅对redis生效</p>
     */
    public $DstShardCount;

    /**
     * @var integer <p>增量导入Rps，MongoDB专用，上限30000</p>
     */
    public $SinkerRps;

    /**
     * @var integer <p>增量导入Bps，单位MB/s，MongoDB专用，上限120</p>
     */
    public $SinkerBps;

    /**
     * @param string $JobId <p>迁移任务 Id，可通过<a href="https://cloud.tencent.com/document/product/571/82084">DescribeMigrationJobs</a>接口获取。</p>
     * @param integer $DumpThread <p>迁移任务全量导出线程数、有效值为 1-16</p>
     * @param integer $DumpRps <p>迁移全量导出的 Rps 限制、需要大于 0</p>
     * @param integer $DumpBps <p>全量导出Bps，单位MB/s，MongoDB专用，上限80</p>
     * @param integer $LoadThread <p>迁移任务全量导入线程数、有效值为 1-16</p>
     * @param integer $SinkerThread <p>迁移任务增量导入线程数、有效值为 1-128</p>
     * @param integer $LoadRps <p>全量导入Rps限制</p>
     * @param integer $LoadBps <p>导入BPS，单位MB/s。目前仅对redis生效，表示目标库单分片流量限制大小</p>
     * @param integer $DstShardCount <p>目标库分片数，目前仅对redis生效</p>
     * @param integer $SinkerRps <p>增量导入Rps，MongoDB专用，上限30000</p>
     * @param integer $SinkerBps <p>增量导入Bps，单位MB/s，MongoDB专用，上限120</p>
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("DumpThread",$param) and $param["DumpThread"] !== null) {
            $this->DumpThread = $param["DumpThread"];
        }

        if (array_key_exists("DumpRps",$param) and $param["DumpRps"] !== null) {
            $this->DumpRps = $param["DumpRps"];
        }

        if (array_key_exists("DumpBps",$param) and $param["DumpBps"] !== null) {
            $this->DumpBps = $param["DumpBps"];
        }

        if (array_key_exists("LoadThread",$param) and $param["LoadThread"] !== null) {
            $this->LoadThread = $param["LoadThread"];
        }

        if (array_key_exists("SinkerThread",$param) and $param["SinkerThread"] !== null) {
            $this->SinkerThread = $param["SinkerThread"];
        }

        if (array_key_exists("LoadRps",$param) and $param["LoadRps"] !== null) {
            $this->LoadRps = $param["LoadRps"];
        }

        if (array_key_exists("LoadBps",$param) and $param["LoadBps"] !== null) {
            $this->LoadBps = $param["LoadBps"];
        }

        if (array_key_exists("DstShardCount",$param) and $param["DstShardCount"] !== null) {
            $this->DstShardCount = $param["DstShardCount"];
        }

        if (array_key_exists("SinkerRps",$param) and $param["SinkerRps"] !== null) {
            $this->SinkerRps = $param["SinkerRps"];
        }

        if (array_key_exists("SinkerBps",$param) and $param["SinkerBps"] !== null) {
            $this->SinkerBps = $param["SinkerBps"];
        }
    }
}
