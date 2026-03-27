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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExportTasks请求参数结构体
 *
 * @method string getLogType() 获取<p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志。</li></ul>
 * @method void setLogType(string $LogType) 设置<p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志。</li></ul>
 * @method integer getLimit() 获取<p>每页输出的任务列表大小。</p><ul><li>默认值：20。</li><li>取值范围：[1,100]。</li></ul>
 * @method void setLimit(integer $Limit) 设置<p>每页输出的任务列表大小。</p><ul><li>默认值：20。</li><li>取值范围：[1,100]。</li></ul>
 * @method integer getOffset() 获取<p>分页偏移量。</p><ul><li>默认值：0。</li><li>取值：Limit 整数倍。计算公式：offset=limit*(页码-1)。</li></ul>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量。</p><ul><li>默认值：0。</li><li>取值：Limit 整数倍。计算公式：offset=limit*(页码-1)。</li></ul>
 * @method string getInstanceId() 获取<p>指定查询的实例 ID。请登录<a href="https://console.cloud.tencent.com/redis">Redis 控制台</a>在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>指定查询的实例 ID。请登录<a href="https://console.cloud.tencent.com/redis">Redis 控制台</a>在实例列表复制实例 ID。</p>
 */
class DescribeExportTasksRequest extends AbstractModel
{
    /**
     * @var string <p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志。</li></ul>
     */
    public $LogType;

    /**
     * @var integer <p>每页输出的任务列表大小。</p><ul><li>默认值：20。</li><li>取值范围：[1,100]。</li></ul>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移量。</p><ul><li>默认值：0。</li><li>取值：Limit 整数倍。计算公式：offset=limit*(页码-1)。</li></ul>
     */
    public $Offset;

    /**
     * @var string <p>指定查询的实例 ID。请登录<a href="https://console.cloud.tencent.com/redis">Redis 控制台</a>在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @param string $LogType <p>日志类型。</p><p>枚举值：</p><ul><li>auditLog： 审计日志。</li></ul>
     * @param integer $Limit <p>每页输出的任务列表大小。</p><ul><li>默认值：20。</li><li>取值范围：[1,100]。</li></ul>
     * @param integer $Offset <p>分页偏移量。</p><ul><li>默认值：0。</li><li>取值：Limit 整数倍。计算公式：offset=limit*(页码-1)。</li></ul>
     * @param string $InstanceId <p>指定查询的实例 ID。请登录<a href="https://console.cloud.tencent.com/redis">Redis 控制台</a>在实例列表复制实例 ID。</p>
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
        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
