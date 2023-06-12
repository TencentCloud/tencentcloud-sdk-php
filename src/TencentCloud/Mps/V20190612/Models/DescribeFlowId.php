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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Event管理的Flow列表
 *
 * @method string getFlowId() 获取FlowId，唯一标识一个flow。
 * @method void setFlowId(string $FlowId) 设置FlowId，唯一标识一个flow。
 * @method string getRegion() 获取flow所在的区域名称。
 * @method void setRegion(string $Region) 设置flow所在的区域名称。
 */
class DescribeFlowId extends AbstractModel
{
    /**
     * @var string FlowId，唯一标识一个flow。
     */
    public $FlowId;

    /**
     * @var string flow所在的区域名称。
     */
    public $Region;

    /**
     * @param string $FlowId FlowId，唯一标识一个flow。
     * @param string $Region flow所在的区域名称。
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
