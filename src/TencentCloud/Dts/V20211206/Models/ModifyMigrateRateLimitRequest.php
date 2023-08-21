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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMigrateRateLimit请求参数结构体
 *
 * @method string getJobId() 获取迁移任务ID
 * @method void setJobId(string $JobId) 设置迁移任务ID
 * @method integer getDumpThread() 获取迁移任务全量导出线程数、有效值为 1-16
 * @method void setDumpThread(integer $DumpThread) 设置迁移任务全量导出线程数、有效值为 1-16
 * @method integer getDumpRps() 获取迁移全量导出的 Rps 限制、需要大于 0
 * @method void setDumpRps(integer $DumpRps) 设置迁移全量导出的 Rps 限制、需要大于 0
 * @method integer getLoadThread() 获取迁移任务全量导入线程数、有效值为 1-16
 * @method void setLoadThread(integer $LoadThread) 设置迁移任务全量导入线程数、有效值为 1-16
 * @method integer getSinkerThread() 获取迁移任务增量导入线程数、有效值为 1-128
 * @method void setSinkerThread(integer $SinkerThread) 设置迁移任务增量导入线程数、有效值为 1-128
 * @method integer getLoadRps() 获取全量导入Rps限制
 * @method void setLoadRps(integer $LoadRps) 设置全量导入Rps限制
 */
class ModifyMigrateRateLimitRequest extends AbstractModel
{
    /**
     * @var string 迁移任务ID
     */
    public $JobId;

    /**
     * @var integer 迁移任务全量导出线程数、有效值为 1-16
     */
    public $DumpThread;

    /**
     * @var integer 迁移全量导出的 Rps 限制、需要大于 0
     */
    public $DumpRps;

    /**
     * @var integer 迁移任务全量导入线程数、有效值为 1-16
     */
    public $LoadThread;

    /**
     * @var integer 迁移任务增量导入线程数、有效值为 1-128
     */
    public $SinkerThread;

    /**
     * @var integer 全量导入Rps限制
     */
    public $LoadRps;

    /**
     * @param string $JobId 迁移任务ID
     * @param integer $DumpThread 迁移任务全量导出线程数、有效值为 1-16
     * @param integer $DumpRps 迁移全量导出的 Rps 限制、需要大于 0
     * @param integer $LoadThread 迁移任务全量导入线程数、有效值为 1-16
     * @param integer $SinkerThread 迁移任务增量导入线程数、有效值为 1-128
     * @param integer $LoadRps 全量导入Rps限制
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
