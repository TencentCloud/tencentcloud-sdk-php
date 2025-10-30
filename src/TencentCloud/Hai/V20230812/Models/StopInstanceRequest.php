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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StopInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1721/101612) API获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1721/101612) API获取实例ID。
 * @method string getStopMode() 获取hai实例关机的模式，目前仅支持关机不收费：
STOP_CHARGE -- 关闭hai实例，释放计算资源，停止收取计算资源的费用。
注意：默认值为STOP_CHARGE
 * @method void setStopMode(string $StopMode) 设置hai实例关机的模式，目前仅支持关机不收费：
STOP_CHARGE -- 关闭hai实例，释放计算资源，停止收取计算资源的费用。
注意：默认值为STOP_CHARGE
 * @method boolean getDryRun() 获取默认为False，True代表只验证接口连通性
 * @method void setDryRun(boolean $DryRun) 设置默认为False，True代表只验证接口连通性
 */
class StopInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例ID。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1721/101612) API获取实例ID。
     */
    public $InstanceId;

    /**
     * @var string hai实例关机的模式，目前仅支持关机不收费：
STOP_CHARGE -- 关闭hai实例，释放计算资源，停止收取计算资源的费用。
注意：默认值为STOP_CHARGE
     */
    public $StopMode;

    /**
     * @var boolean 默认为False，True代表只验证接口连通性
     */
    public $DryRun;

    /**
     * @param string $InstanceId 实例ID。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1721/101612) API获取实例ID。
     * @param string $StopMode hai实例关机的模式，目前仅支持关机不收费：
STOP_CHARGE -- 关闭hai实例，释放计算资源，停止收取计算资源的费用。
注意：默认值为STOP_CHARGE
     * @param boolean $DryRun 默认为False，True代表只验证接口连通性
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

        if (array_key_exists("StopMode",$param) and $param["StopMode"] !== null) {
            $this->StopMode = $param["StopMode"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
