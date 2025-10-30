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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTWeSeeService请求参数结构体
 *
 * @method string getService() 获取服务类型
1.VideoSummary
2.ImageSummary
 * @method void setService(string $Service) 设置服务类型
1.VideoSummary
2.ImageSummary
 */
class CreateTWeSeeServiceRequest extends AbstractModel
{
    /**
     * @var string 服务类型
1.VideoSummary
2.ImageSummary
     */
    public $Service;

    /**
     * @param string $Service 服务类型
1.VideoSummary
2.ImageSummary
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
        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }
    }
}
