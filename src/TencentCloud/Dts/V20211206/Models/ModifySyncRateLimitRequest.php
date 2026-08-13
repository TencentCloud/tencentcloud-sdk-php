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
 * ModifySyncRateLimit请求参数结构体
 *
 * @method string getJobId() 获取<p>同步任务ID，可通过<a href="https://cloud.tencent.com/document/product/571/82103">DescribeSyncJobs</a>接口获取。</p>
 * @method void setJobId(string $JobId) 设置<p>同步任务ID，可通过<a href="https://cloud.tencent.com/document/product/571/82103">DescribeSyncJobs</a>接口获取。</p>
 * @method integer getDumpThread() 获取<p>同步任务全量导出线程数、有效值为 1-16</p>
 * @method void setDumpThread(integer $DumpThread) 设置<p>同步任务全量导出线程数、有效值为 1-16</p>
 * @method integer getDumpRps() 获取<p>同步任务全量导出的 Rps 限制、需要大于 0;对于mongodb最大值为20000，其他数据库最大值为50000000</p>
 * @method void setDumpRps(integer $DumpRps) 设置<p>同步任务全量导出的 Rps 限制、需要大于 0;对于mongodb最大值为20000，其他数据库最大值为50000000</p>
 * @method integer getLoadThread() 获取<p>同步任务全量导入线程数、有效值为 1-16</p>
 * @method void setLoadThread(integer $LoadThread) 设置<p>同步任务全量导入线程数、有效值为 1-16</p>
 * @method integer getSinkerThread() 获取<p>同步任务增量导入线程数、有效值为 1-128</p>
 * @method void setSinkerThread(integer $SinkerThread) 设置<p>同步任务增量导入线程数、有效值为 1-128</p>
 * @method integer getLoadRps() 获取<p>同步任务全量导入的Rps</p>
 * @method void setLoadRps(integer $LoadRps) 设置<p>同步任务全量导入的Rps</p>
 */
class ModifySyncRateLimitRequest extends AbstractModel
{
    /**
     * @var string <p>同步任务ID，可通过<a href="https://cloud.tencent.com/document/product/571/82103">DescribeSyncJobs</a>接口获取。</p>
     */
    public $JobId;

    /**
     * @var integer <p>同步任务全量导出线程数、有效值为 1-16</p>
     */
    public $DumpThread;

    /**
     * @var integer <p>同步任务全量导出的 Rps 限制、需要大于 0;对于mongodb最大值为20000，其他数据库最大值为50000000</p>
     */
    public $DumpRps;

    /**
     * @var integer <p>同步任务全量导入线程数、有效值为 1-16</p>
     */
    public $LoadThread;

    /**
     * @var integer <p>同步任务增量导入线程数、有效值为 1-128</p>
     */
    public $SinkerThread;

    /**
     * @var integer <p>同步任务全量导入的Rps</p>
     */
    public $LoadRps;

    /**
     * @param string $JobId <p>同步任务ID，可通过<a href="https://cloud.tencent.com/document/product/571/82103">DescribeSyncJobs</a>接口获取。</p>
     * @param integer $DumpThread <p>同步任务全量导出线程数、有效值为 1-16</p>
     * @param integer $DumpRps <p>同步任务全量导出的 Rps 限制、需要大于 0;对于mongodb最大值为20000，其他数据库最大值为50000000</p>
     * @param integer $LoadThread <p>同步任务全量导入线程数、有效值为 1-16</p>
     * @param integer $SinkerThread <p>同步任务增量导入线程数、有效值为 1-128</p>
     * @param integer $LoadRps <p>同步任务全量导入的Rps</p>
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

        if (array_key_exists("LoadThread",$param) and $param["LoadThread"] !== null) {
            $this->LoadThread = $param["LoadThread"];
        }

        if (array_key_exists("SinkerThread",$param) and $param["SinkerThread"] !== null) {
            $this->SinkerThread = $param["SinkerThread"];
        }

        if (array_key_exists("LoadRps",$param) and $param["LoadRps"] !== null) {
            $this->LoadRps = $param["LoadRps"];
        }
    }
}
