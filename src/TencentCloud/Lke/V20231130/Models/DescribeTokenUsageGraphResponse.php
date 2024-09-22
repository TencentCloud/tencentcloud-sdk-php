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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTokenUsageGraph返回参数结构体
 *
 * @method array getTotal() 获取总消耗
 * @method void setTotal(array $Total) 设置总消耗
 * @method array getInput() 获取输入消耗
 * @method void setInput(array $Input) 设置输入消耗
 * @method array getOutput() 获取输出消耗
 * @method void setOutput(array $Output) 设置输出消耗
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTokenUsageGraphResponse extends AbstractModel
{
    /**
     * @var array 总消耗
     */
    public $Total;

    /**
     * @var array 输入消耗
     */
    public $Input;

    /**
     * @var array 输出消耗
     */
    public $Output;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Total 总消耗
     * @param array $Input 输入消耗
     * @param array $Output 输出消耗
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = [];
            foreach ($param["Total"] as $key => $value){
                $obj = new Stat();
                $obj->deserialize($value);
                array_push($this->Total, $obj);
            }
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = [];
            foreach ($param["Input"] as $key => $value){
                $obj = new Stat();
                $obj->deserialize($value);
                array_push($this->Input, $obj);
            }
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = [];
            foreach ($param["Output"] as $key => $value){
                $obj = new Stat();
                $obj->deserialize($value);
                array_push($this->Output, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
