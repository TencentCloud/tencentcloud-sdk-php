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
 * @method integer getTotalCount() 获取函数日志的总数
 * @method void setTotalCount(integer $TotalCount) 设置函数日志的总数
 * @method array getData() 获取函数日志信息
 * @method void setData(array $Data) 设置函数日志信息
 * @method LogSearchContext getSearchContext() 获取日志服务分页参数
 * @method void setSearchContext(LogSearchContext $SearchContext) 设置日志服务分页参数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *GetFunctionLogs返回参数结构体
 */
class GetFunctionLogsResponse extends AbstractModel
{
    /**
     * @var integer 函数日志的总数
     */
    public $TotalCount;

    /**
     * @var array 函数日志信息
     */
    public $Data;

    /**
     * @var LogSearchContext 日志服务分页参数
     */
    public $SearchContext;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param integer $TotalCount 函数日志的总数
     * @param array $Data 函数日志信息
     * @param LogSearchContext $SearchContext 日志服务分页参数
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new FunctionLog();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("SearchContext",$param) and $param["SearchContext"] !== null) {
            $this->SearchContext = new LogSearchContext();
            $this->SearchContext->deserialize($param["SearchContext"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
