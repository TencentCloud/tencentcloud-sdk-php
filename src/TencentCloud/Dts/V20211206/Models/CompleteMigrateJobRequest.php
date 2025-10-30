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
 * CompleteMigrateJob请求参数结构体
 *
 * @method string getJobId() 获取数据迁移任务ID，可通过[DescribeMigrationJobs](https://cloud.tencent.com/document/product/571/82084)接口获取。

 * @method void setJobId(string $JobId) 设置数据迁移任务ID，可通过[DescribeMigrationJobs](https://cloud.tencent.com/document/product/571/82084)接口获取。

 * @method string getCompleteMode() 获取完成任务的方式,仅支持旧版MySQL迁移任务。waitForSync-等待主从差距为0才停止,immediately-立即完成，不会等待主从差距一致。默认为waitForSync
 * @method void setCompleteMode(string $CompleteMode) 设置完成任务的方式,仅支持旧版MySQL迁移任务。waitForSync-等待主从差距为0才停止,immediately-立即完成，不会等待主从差距一致。默认为waitForSync
 */
class CompleteMigrateJobRequest extends AbstractModel
{
    /**
     * @var string 数据迁移任务ID，可通过[DescribeMigrationJobs](https://cloud.tencent.com/document/product/571/82084)接口获取。

     */
    public $JobId;

    /**
     * @var string 完成任务的方式,仅支持旧版MySQL迁移任务。waitForSync-等待主从差距为0才停止,immediately-立即完成，不会等待主从差距一致。默认为waitForSync
     */
    public $CompleteMode;

    /**
     * @param string $JobId 数据迁移任务ID，可通过[DescribeMigrationJobs](https://cloud.tencent.com/document/product/571/82084)接口获取。

     * @param string $CompleteMode 完成任务的方式,仅支持旧版MySQL迁移任务。waitForSync-等待主从差距为0才停止,immediately-立即完成，不会等待主从差距一致。默认为waitForSync
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

        if (array_key_exists("CompleteMode",$param) and $param["CompleteMode"] !== null) {
            $this->CompleteMode = $param["CompleteMode"];
        }
    }
}
