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
 * DescribeScreenGeneralStat返回参数结构体
 *
 * @method array getMachines() 获取name 的值: 在线，关机/离线,未安装，
value : 表示对应的数量
 * @method void setMachines(array $Machines) 设置name 的值: 在线，关机/离线,未安装，
value : 表示对应的数量
 * @method array getProtection() 获取name 的值: 旗舰版，专业版，基础版
value : 表示对应的数量
 * @method void setProtection(array $Protection) 设置name 的值: 旗舰版，专业版，基础版
value : 表示对应的数量
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeScreenGeneralStatResponse extends AbstractModel
{
    /**
     * @var array name 的值: 在线，关机/离线,未安装，
value : 表示对应的数量
     */
    public $Machines;

    /**
     * @var array name 的值: 旗舰版，专业版，基础版
value : 表示对应的数量
     */
    public $Protection;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Machines name 的值: 在线，关机/离线,未安装，
value : 表示对应的数量
     * @param array $Protection name 的值: 旗舰版，专业版，基础版
value : 表示对应的数量
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
        if (array_key_exists("Machines",$param) and $param["Machines"] !== null) {
            $this->Machines = [];
            foreach ($param["Machines"] as $key => $value){
                $obj = new ScreenNameValue();
                $obj->deserialize($value);
                array_push($this->Machines, $obj);
            }
        }

        if (array_key_exists("Protection",$param) and $param["Protection"] !== null) {
            $this->Protection = [];
            foreach ($param["Protection"] as $key => $value){
                $obj = new ScreenNameValue();
                $obj->deserialize($value);
                array_push($this->Protection, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
