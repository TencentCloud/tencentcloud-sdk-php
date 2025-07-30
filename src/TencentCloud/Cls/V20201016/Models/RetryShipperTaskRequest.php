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
 * RetryShipperTask请求参数结构体
 *
 * @method string getShipperId() 获取投递规则Id。

- 通过 [获取投递任务列表](https://cloud.tencent.com/document/product/614/58745)获取ShipperId。
 * @method void setShipperId(string $ShipperId) 设置投递规则Id。

- 通过 [获取投递任务列表](https://cloud.tencent.com/document/product/614/58745)获取ShipperId。
 * @method string getTaskId() 获取投递任务Id。

- 通过 [获取投递任务列表](https://cloud.tencent.com/document/product/614/58745) 获取TaskId。
 * @method void setTaskId(string $TaskId) 设置投递任务Id。

- 通过 [获取投递任务列表](https://cloud.tencent.com/document/product/614/58745) 获取TaskId。
 */
class RetryShipperTaskRequest extends AbstractModel
{
    /**
     * @var string 投递规则Id。

- 通过 [获取投递任务列表](https://cloud.tencent.com/document/product/614/58745)获取ShipperId。
     */
    public $ShipperId;

    /**
     * @var string 投递任务Id。

- 通过 [获取投递任务列表](https://cloud.tencent.com/document/product/614/58745) 获取TaskId。
     */
    public $TaskId;

    /**
     * @param string $ShipperId 投递规则Id。

- 通过 [获取投递任务列表](https://cloud.tencent.com/document/product/614/58745)获取ShipperId。
     * @param string $TaskId 投递任务Id。

- 通过 [获取投递任务列表](https://cloud.tencent.com/document/product/614/58745) 获取TaskId。
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
        if (array_key_exists("ShipperId",$param) and $param["ShipperId"] !== null) {
            $this->ShipperId = $param["ShipperId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
