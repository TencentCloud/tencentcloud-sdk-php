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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EnableFlowLogs请求参数结构体
 *
 * @method array getFlowLogIds() 获取流日志Id。
 * @method void setFlowLogIds(array $FlowLogIds) 设置流日志Id。
 */
class EnableFlowLogsRequest extends AbstractModel
{
    /**
     * @var array 流日志Id。
     */
    public $FlowLogIds;

    /**
     * @param array $FlowLogIds 流日志Id。
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
        if (array_key_exists("FlowLogIds",$param) and $param["FlowLogIds"] !== null) {
            $this->FlowLogIds = $param["FlowLogIds"];
        }
    }
}
