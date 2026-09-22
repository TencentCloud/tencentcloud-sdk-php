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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetServicePodLogs请求参数结构体
 *
 * @method string getServiceId() 获取<p>服务Id</p>
 * @method void setServiceId(string $ServiceId) 设置<p>服务Id</p>
 * @method string getPodName() 获取<p>Pod名称</p>
 * @method void setPodName(string $PodName) 设置<p>Pod名称</p>
 * @method string getTailLines() 获取<p>日志行数</p>
 * @method void setTailLines(string $TailLines) 设置<p>日志行数</p>
 */
class GetServicePodLogsRequest extends AbstractModel
{
    /**
     * @var string <p>服务Id</p>
     */
    public $ServiceId;

    /**
     * @var string <p>Pod名称</p>
     */
    public $PodName;

    /**
     * @var string <p>日志行数</p>
     */
    public $TailLines;

    /**
     * @param string $ServiceId <p>服务Id</p>
     * @param string $PodName <p>Pod名称</p>
     * @param string $TailLines <p>日志行数</p>
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("TailLines",$param) and $param["TailLines"] !== null) {
            $this->TailLines = $param["TailLines"];
        }
    }
}
