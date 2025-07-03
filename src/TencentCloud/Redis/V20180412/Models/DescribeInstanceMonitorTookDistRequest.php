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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstanceMonitorTookDist请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
 * @method string getDate() 获取查询时间日期。
 * @method void setDate(string $Date) 设置查询时间日期。
 * @method integer getSpanType() 获取时间范围。
- 1：实时。
- 2：近30分钟。
- 3：近6小时。
- 4：近24小时。
 * @method void setSpanType(integer $SpanType) 设置时间范围。
- 1：实时。
- 2：近30分钟。
- 3：近6小时。
- 4：近24小时。
 */
class DescribeInstanceMonitorTookDistRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 查询时间日期。
     */
    public $Date;

    /**
     * @var integer 时间范围。
- 1：实时。
- 2：近30分钟。
- 3：近6小时。
- 4：近24小时。
     */
    public $SpanType;

    /**
     * @param string $InstanceId 实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
     * @param string $Date 查询时间日期。
     * @param integer $SpanType 时间范围。
- 1：实时。
- 2：近30分钟。
- 3：近6小时。
- 4：近24小时。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("SpanType",$param) and $param["SpanType"] !== null) {
            $this->SpanType = $param["SpanType"];
        }
    }
}
