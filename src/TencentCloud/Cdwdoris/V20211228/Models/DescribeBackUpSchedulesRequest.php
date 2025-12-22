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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackUpSchedules请求参数结构体
 *
 * @method integer getApplicationType() 获取任务类型
0-不限制，或使用TypeFilters过滤；
1-备份恢复（包括周期备份和一次性备份）；
2-数据迁移（包括跨集群迁移和cos迁移）
 * @method void setApplicationType(integer $ApplicationType) 设置任务类型
0-不限制，或使用TypeFilters过滤；
1-备份恢复（包括周期备份和一次性备份）；
2-数据迁移（包括跨集群迁移和cos迁移）
 * @method array getEncryptionFilters() 获取0-未加密；1-已加密
 * @method void setEncryptionFilters(array $EncryptionFilters) 设置0-未加密；1-已加密
 */
class DescribeBackUpSchedulesRequest extends AbstractModel
{
    /**
     * @var integer 任务类型
0-不限制，或使用TypeFilters过滤；
1-备份恢复（包括周期备份和一次性备份）；
2-数据迁移（包括跨集群迁移和cos迁移）
     */
    public $ApplicationType;

    /**
     * @var array 0-未加密；1-已加密
     */
    public $EncryptionFilters;

    /**
     * @param integer $ApplicationType 任务类型
0-不限制，或使用TypeFilters过滤；
1-备份恢复（包括周期备份和一次性备份）；
2-数据迁移（包括跨集群迁移和cos迁移）
     * @param array $EncryptionFilters 0-未加密；1-已加密
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
        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("EncryptionFilters",$param) and $param["EncryptionFilters"] !== null) {
            $this->EncryptionFilters = $param["EncryptionFilters"];
        }
    }
}
