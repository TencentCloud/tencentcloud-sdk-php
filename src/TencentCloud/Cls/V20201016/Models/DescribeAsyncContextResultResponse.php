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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAsyncContextResult返回参数结构体
 *
 * @method boolean getPrevOver() 获取上文日志是否已经返回
 * @method void setPrevOver(boolean $PrevOver) 设置上文日志是否已经返回
 * @method boolean getNextOver() 获取下文日志是否已经返回
 * @method void setNextOver(boolean $NextOver) 设置下文日志是否已经返回
 * @method array getResults() 获取日志内容
 * @method void setResults(array $Results) 设置日志内容
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAsyncContextResultResponse extends AbstractModel
{
    /**
     * @var boolean 上文日志是否已经返回
     */
    public $PrevOver;

    /**
     * @var boolean 下文日志是否已经返回
     */
    public $NextOver;

    /**
     * @var array 日志内容
     */
    public $Results;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $PrevOver 上文日志是否已经返回
     * @param boolean $NextOver 下文日志是否已经返回
     * @param array $Results 日志内容
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
        if (array_key_exists("PrevOver",$param) and $param["PrevOver"] !== null) {
            $this->PrevOver = $param["PrevOver"];
        }

        if (array_key_exists("NextOver",$param) and $param["NextOver"] !== null) {
            $this->NextOver = $param["NextOver"];
        }

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = [];
            foreach ($param["Results"] as $key => $value){
                $obj = new LogInfo();
                $obj->deserialize($value);
                array_push($this->Results, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
