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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCosAuditBucketMonitorStatus请求参数结构体
 *
 * @method array getBucketNameSet() 获取存储桶集合
 * @method void setBucketNameSet(array $BucketNameSet) 设置存储桶集合
 * @method integer getMonitorStatus() 获取0 关闭 1 开启
 * @method void setMonitorStatus(integer $MonitorStatus) 设置0 关闭 1 开启
 */
class ModifyCosAuditBucketMonitorStatusRequest extends AbstractModel
{
    /**
     * @var array 存储桶集合
     */
    public $BucketNameSet;

    /**
     * @var integer 0 关闭 1 开启
     */
    public $MonitorStatus;

    /**
     * @param array $BucketNameSet 存储桶集合
     * @param integer $MonitorStatus 0 关闭 1 开启
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
        if (array_key_exists("BucketNameSet",$param) and $param["BucketNameSet"] !== null) {
            $this->BucketNameSet = $param["BucketNameSet"];
        }

        if (array_key_exists("MonitorStatus",$param) and $param["MonitorStatus"] !== null) {
            $this->MonitorStatus = $param["MonitorStatus"];
        }
    }
}
