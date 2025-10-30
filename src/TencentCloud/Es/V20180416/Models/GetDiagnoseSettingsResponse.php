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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetDiagnoseSettings返回参数结构体
 *
 * @method array getDiagnoseJobMetas() 获取智能运维诊断项和元信息
 * @method void setDiagnoseJobMetas(array $DiagnoseJobMetas) 设置智能运维诊断项和元信息
 * @method integer getStatus() 获取0：开启智能运维；-1：关闭智能运维
 * @method void setStatus(integer $Status) 设置0：开启智能运维；-1：关闭智能运维
 * @method string getCronTime() 获取智能运维每天定时巡检时间
 * @method void setCronTime(string $CronTime) 设置智能运维每天定时巡检时间
 * @method integer getCount() 获取智能运维当天已手动触发诊断次数
 * @method void setCount(integer $Count) 设置智能运维当天已手动触发诊断次数
 * @method integer getMaxCount() 获取智能运维每天最大可手动触发次数
 * @method void setMaxCount(integer $MaxCount) 设置智能运维每天最大可手动触发次数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetDiagnoseSettingsResponse extends AbstractModel
{
    /**
     * @var array 智能运维诊断项和元信息
     */
    public $DiagnoseJobMetas;

    /**
     * @var integer 0：开启智能运维；-1：关闭智能运维
     */
    public $Status;

    /**
     * @var string 智能运维每天定时巡检时间
     */
    public $CronTime;

    /**
     * @var integer 智能运维当天已手动触发诊断次数
     */
    public $Count;

    /**
     * @var integer 智能运维每天最大可手动触发次数
     */
    public $MaxCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DiagnoseJobMetas 智能运维诊断项和元信息
     * @param integer $Status 0：开启智能运维；-1：关闭智能运维
     * @param string $CronTime 智能运维每天定时巡检时间
     * @param integer $Count 智能运维当天已手动触发诊断次数
     * @param integer $MaxCount 智能运维每天最大可手动触发次数
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("DiagnoseJobMetas",$param) and $param["DiagnoseJobMetas"] !== null) {
            $this->DiagnoseJobMetas = [];
            foreach ($param["DiagnoseJobMetas"] as $key => $value){
                $obj = new DiagnoseJobMeta();
                $obj->deserialize($value);
                array_push($this->DiagnoseJobMetas, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CronTime",$param) and $param["CronTime"] !== null) {
            $this->CronTime = $param["CronTime"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("MaxCount",$param) and $param["MaxCount"] !== null) {
            $this->MaxCount = $param["MaxCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
