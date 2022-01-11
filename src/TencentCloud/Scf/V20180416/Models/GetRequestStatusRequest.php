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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetRequestStatus请求参数结构体
 *
 * @method string getFunctionName() 获取函数名称
 * @method void setFunctionName(string $FunctionName) 设置函数名称
 * @method string getFunctionRequestId() 获取需要查询状态的请求 id
 * @method void setFunctionRequestId(string $FunctionRequestId) 设置需要查询状态的请求 id
 * @method string getNamespace() 获取函数的所在的命名空间
 * @method void setNamespace(string $Namespace) 设置函数的所在的命名空间
 * @method string getStartTime() 获取查询的开始时间，例如：2017-05-16 20:00:00，不填默认为当前时间 - 15min
 * @method void setStartTime(string $StartTime) 设置查询的开始时间，例如：2017-05-16 20:00:00，不填默认为当前时间 - 15min
 * @method string getEndTime() 获取查询的结束时间，例如：2017-05-16 20:59:59。StartTime 为空时，EndTime 默认为当前时间；StartTime 有值时，需要同时传 EndTime。EndTime 需要晚于 StartTime。
 * @method void setEndTime(string $EndTime) 设置查询的结束时间，例如：2017-05-16 20:59:59。StartTime 为空时，EndTime 默认为当前时间；StartTime 有值时，需要同时传 EndTime。EndTime 需要晚于 StartTime。
 */
class GetRequestStatusRequest extends AbstractModel
{
    /**
     * @var string 函数名称
     */
    public $FunctionName;

    /**
     * @var string 需要查询状态的请求 id
     */
    public $FunctionRequestId;

    /**
     * @var string 函数的所在的命名空间
     */
    public $Namespace;

    /**
     * @var string 查询的开始时间，例如：2017-05-16 20:00:00，不填默认为当前时间 - 15min
     */
    public $StartTime;

    /**
     * @var string 查询的结束时间，例如：2017-05-16 20:59:59。StartTime 为空时，EndTime 默认为当前时间；StartTime 有值时，需要同时传 EndTime。EndTime 需要晚于 StartTime。
     */
    public $EndTime;

    /**
     * @param string $FunctionName 函数名称
     * @param string $FunctionRequestId 需要查询状态的请求 id
     * @param string $Namespace 函数的所在的命名空间
     * @param string $StartTime 查询的开始时间，例如：2017-05-16 20:00:00，不填默认为当前时间 - 15min
     * @param string $EndTime 查询的结束时间，例如：2017-05-16 20:59:59。StartTime 为空时，EndTime 默认为当前时间；StartTime 有值时，需要同时传 EndTime。EndTime 需要晚于 StartTime。
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("FunctionRequestId",$param) and $param["FunctionRequestId"] !== null) {
            $this->FunctionRequestId = $param["FunctionRequestId"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
