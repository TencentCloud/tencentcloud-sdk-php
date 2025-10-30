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
 * DeleteCompareTask请求参数结构体
 *
 * @method string getJobId() 获取迁移任务 Id，可通过[DescribeMigrationJobs](https://cloud.tencent.com/document/product/571/82084)接口获取。
 * @method void setJobId(string $JobId) 设置迁移任务 Id，可通过[DescribeMigrationJobs](https://cloud.tencent.com/document/product/571/82084)接口获取。
 * @method string getCompareTaskId() 获取对比任务 ID，形如：dts-8yv4w2i1-cmp-37skmii9。可通过[DescribeMigrationJobs](https://cloud.tencent.com/document/product/571/82084)接口获取。
 * @method void setCompareTaskId(string $CompareTaskId) 设置对比任务 ID，形如：dts-8yv4w2i1-cmp-37skmii9。可通过[DescribeMigrationJobs](https://cloud.tencent.com/document/product/571/82084)接口获取。
 */
class DeleteCompareTaskRequest extends AbstractModel
{
    /**
     * @var string 迁移任务 Id，可通过[DescribeMigrationJobs](https://cloud.tencent.com/document/product/571/82084)接口获取。
     */
    public $JobId;

    /**
     * @var string 对比任务 ID，形如：dts-8yv4w2i1-cmp-37skmii9。可通过[DescribeMigrationJobs](https://cloud.tencent.com/document/product/571/82084)接口获取。
     */
    public $CompareTaskId;

    /**
     * @param string $JobId 迁移任务 Id，可通过[DescribeMigrationJobs](https://cloud.tencent.com/document/product/571/82084)接口获取。
     * @param string $CompareTaskId 对比任务 ID，形如：dts-8yv4w2i1-cmp-37skmii9。可通过[DescribeMigrationJobs](https://cloud.tencent.com/document/product/571/82084)接口获取。
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

        if (array_key_exists("CompareTaskId",$param) and $param["CompareTaskId"] !== null) {
            $this->CompareTaskId = $param["CompareTaskId"];
        }
    }
}
