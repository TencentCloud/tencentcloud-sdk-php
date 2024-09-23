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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGlobalConfig返回参数结构体
 *
 * @method boolean getEnableResourceSchedule() 获取是否开启了资源调度功能
 * @method void setEnableResourceSchedule(boolean $EnableResourceSchedule) 设置是否开启了资源调度功能
 * @method string getActiveScheduler() 获取当前生效的资源调度器
 * @method void setActiveScheduler(string $ActiveScheduler) 设置当前生效的资源调度器
 * @method CapacityGlobalConfig getCapacityGlobalConfig() 获取公平调度器的信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCapacityGlobalConfig(CapacityGlobalConfig $CapacityGlobalConfig) 设置公平调度器的信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method FairGlobalConfig getFairGlobalConfig() 获取容量调度器的信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFairGlobalConfig(FairGlobalConfig $FairGlobalConfig) 设置容量调度器的信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheduler() 获取最新的资源调度器
 * @method void setScheduler(string $Scheduler) 设置最新的资源调度器
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeGlobalConfigResponse extends AbstractModel
{
    /**
     * @var boolean 是否开启了资源调度功能
     */
    public $EnableResourceSchedule;

    /**
     * @var string 当前生效的资源调度器
     */
    public $ActiveScheduler;

    /**
     * @var CapacityGlobalConfig 公平调度器的信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CapacityGlobalConfig;

    /**
     * @var FairGlobalConfig 容量调度器的信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FairGlobalConfig;

    /**
     * @var string 最新的资源调度器
     */
    public $Scheduler;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $EnableResourceSchedule 是否开启了资源调度功能
     * @param string $ActiveScheduler 当前生效的资源调度器
     * @param CapacityGlobalConfig $CapacityGlobalConfig 公平调度器的信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param FairGlobalConfig $FairGlobalConfig 容量调度器的信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Scheduler 最新的资源调度器
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
        if (array_key_exists("EnableResourceSchedule",$param) and $param["EnableResourceSchedule"] !== null) {
            $this->EnableResourceSchedule = $param["EnableResourceSchedule"];
        }

        if (array_key_exists("ActiveScheduler",$param) and $param["ActiveScheduler"] !== null) {
            $this->ActiveScheduler = $param["ActiveScheduler"];
        }

        if (array_key_exists("CapacityGlobalConfig",$param) and $param["CapacityGlobalConfig"] !== null) {
            $this->CapacityGlobalConfig = new CapacityGlobalConfig();
            $this->CapacityGlobalConfig->deserialize($param["CapacityGlobalConfig"]);
        }

        if (array_key_exists("FairGlobalConfig",$param) and $param["FairGlobalConfig"] !== null) {
            $this->FairGlobalConfig = new FairGlobalConfig();
            $this->FairGlobalConfig->deserialize($param["FairGlobalConfig"]);
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
