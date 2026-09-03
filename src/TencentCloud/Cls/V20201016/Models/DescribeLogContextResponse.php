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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogContext返回参数结构体
 *
 * @method array getLogContextInfos() 获取<p>日志上下文信息集合</p>
 * @method void setLogContextInfos(array $LogContextInfos) 设置<p>日志上下文信息集合</p>
 * @method boolean getPrevOver() 获取<p>上文日志是否已经返回完成（当PrevOver为false，表示有上文日志还未全部返回）。</p>
 * @method void setPrevOver(boolean $PrevOver) 设置<p>上文日志是否已经返回完成（当PrevOver为false，表示有上文日志还未全部返回）。</p>
 * @method boolean getNextOver() 获取<p>下文日志是否已经返回完成（当NextOver为false，表示有下文日志还未全部返回）。</p>
 * @method void setNextOver(boolean $NextOver) 设置<p>下文日志是否已经返回完成（当NextOver为false，表示有下文日志还未全部返回）。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLogContextResponse extends AbstractModel
{
    /**
     * @var array <p>日志上下文信息集合</p>
     */
    public $LogContextInfos;

    /**
     * @var boolean <p>上文日志是否已经返回完成（当PrevOver为false，表示有上文日志还未全部返回）。</p>
     */
    public $PrevOver;

    /**
     * @var boolean <p>下文日志是否已经返回完成（当NextOver为false，表示有下文日志还未全部返回）。</p>
     */
    public $NextOver;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $LogContextInfos <p>日志上下文信息集合</p>
     * @param boolean $PrevOver <p>上文日志是否已经返回完成（当PrevOver为false，表示有上文日志还未全部返回）。</p>
     * @param boolean $NextOver <p>下文日志是否已经返回完成（当NextOver为false，表示有下文日志还未全部返回）。</p>
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
        if (array_key_exists("LogContextInfos",$param) and $param["LogContextInfos"] !== null) {
            $this->LogContextInfos = [];
            foreach ($param["LogContextInfos"] as $key => $value){
                $obj = new LogContextInfo();
                $obj->deserialize($value);
                array_push($this->LogContextInfos, $obj);
            }
        }

        if (array_key_exists("PrevOver",$param) and $param["PrevOver"] !== null) {
            $this->PrevOver = $param["PrevOver"];
        }

        if (array_key_exists("NextOver",$param) and $param["NextOver"] !== null) {
            $this->NextOver = $param["NextOver"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
