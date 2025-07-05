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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScreenHostInvasion返回参数结构体
 *
 * @method array getDefendAttackLog() 获取网络攻击事件列表
 * @method void setDefendAttackLog(array $DefendAttackLog) 设置网络攻击事件列表
 * @method array getInvasionEvents() 获取入侵检测事件列表
 * @method void setInvasionEvents(array $InvasionEvents) 设置入侵检测事件列表
 * @method array getVul() 获取漏洞事件列表
 * @method void setVul(array $Vul) 设置漏洞事件列表
 * @method array getBaseline() 获取基线事件列表
 * @method void setBaseline(array $Baseline) 设置基线事件列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeScreenHostInvasionResponse extends AbstractModel
{
    /**
     * @var array 网络攻击事件列表
     */
    public $DefendAttackLog;

    /**
     * @var array 入侵检测事件列表
     */
    public $InvasionEvents;

    /**
     * @var array 漏洞事件列表
     */
    public $Vul;

    /**
     * @var array 基线事件列表
     */
    public $Baseline;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DefendAttackLog 网络攻击事件列表
     * @param array $InvasionEvents 入侵检测事件列表
     * @param array $Vul 漏洞事件列表
     * @param array $Baseline 基线事件列表
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
        if (array_key_exists("DefendAttackLog",$param) and $param["DefendAttackLog"] !== null) {
            $this->DefendAttackLog = [];
            foreach ($param["DefendAttackLog"] as $key => $value){
                $obj = new ScreenDefendAttackLog();
                $obj->deserialize($value);
                array_push($this->DefendAttackLog, $obj);
            }
        }

        if (array_key_exists("InvasionEvents",$param) and $param["InvasionEvents"] !== null) {
            $this->InvasionEvents = [];
            foreach ($param["InvasionEvents"] as $key => $value){
                $obj = new ScreenInvasion();
                $obj->deserialize($value);
                array_push($this->InvasionEvents, $obj);
            }
        }

        if (array_key_exists("Vul",$param) and $param["Vul"] !== null) {
            $this->Vul = [];
            foreach ($param["Vul"] as $key => $value){
                $obj = new ScreenVulInfo();
                $obj->deserialize($value);
                array_push($this->Vul, $obj);
            }
        }

        if (array_key_exists("Baseline",$param) and $param["Baseline"] !== null) {
            $this->Baseline = [];
            foreach ($param["Baseline"] as $key => $value){
                $obj = new ScreenBaselineInfo();
                $obj->deserialize($value);
                array_push($this->Baseline, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
