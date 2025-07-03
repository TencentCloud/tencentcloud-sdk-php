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
namespace TencentCloud\Smop\V20201203\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitTaskEvent返回参数结构体
 *
 * @method string getOrderId() 获取任务的唯一订单号
 * @method void setOrderId(string $OrderId) 设置任务的唯一订单号
 * @method integer getCode() 获取信息码。0表示成功，-1标识失败
 * @method void setCode(integer $Code) 设置信息码。0表示成功，-1标识失败
 * @method string getMessage() 获取提示信息
 * @method void setMessage(string $Message) 设置提示信息
 * @method array getData() 获取任务处理结果列表
 * @method void setData(array $Data) 设置任务处理结果列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class SubmitTaskEventResponse extends AbstractModel
{
    /**
     * @var string 任务的唯一订单号
     */
    public $OrderId;

    /**
     * @var integer 信息码。0表示成功，-1标识失败
     */
    public $Code;

    /**
     * @var string 提示信息
     */
    public $Message;

    /**
     * @var array 任务处理结果列表
     */
    public $Data;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $OrderId 任务的唯一订单号
     * @param integer $Code 信息码。0表示成功，-1标识失败
     * @param string $Message 提示信息
     * @param array $Data 任务处理结果列表
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
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new TaskEventData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
