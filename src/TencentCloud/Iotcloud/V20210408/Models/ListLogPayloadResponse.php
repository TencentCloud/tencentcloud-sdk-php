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
namespace TencentCloud\Iotcloud\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListLogPayload返回参数结构体
 *
 * @method string getContext() 获取日志上下文
 * @method void setContext(string $Context) 设置日志上下文
 * @method boolean getListover() 获取是否还有日志，如有仍有日志，下次查询的请求带上当前请求返回的Context
 * @method void setListover(boolean $Listover) 设置是否还有日志，如有仍有日志，下次查询的请求带上当前请求返回的Context
 * @method array getResults() 获取日志列表
 * @method void setResults(array $Results) 设置日志列表
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class ListLogPayloadResponse extends AbstractModel
{
    /**
     * @var string 日志上下文
     */
    public $Context;

    /**
     * @var boolean 是否还有日志，如有仍有日志，下次查询的请求带上当前请求返回的Context
     */
    public $Listover;

    /**
     * @var array 日志列表
     */
    public $Results;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Context 日志上下文
     * @param boolean $Listover 是否还有日志，如有仍有日志，下次查询的请求带上当前请求返回的Context
     * @param array $Results 日志列表
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Listover",$param) and $param["Listover"] !== null) {
            $this->Listover = $param["Listover"];
        }

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = [];
            foreach ($param["Results"] as $key => $value){
                $obj = new PayloadLogItem();
                $obj->deserialize($value);
                array_push($this->Results, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
