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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskStatus请求参数结构体
 *
 * @method string getTaskId() 获取请求ID，即接口返回的 RequestId 参数。
 * @method void setTaskId(string $TaskId) 设置请求ID，即接口返回的 RequestId 参数。
 * @method string getDealName() 获取订单ID。
注意：参数TaskId和DealName必须传一个。
 * @method void setDealName(string $DealName) 设置订单ID。
注意：参数TaskId和DealName必须传一个。
 */
class DescribeTaskStatusRequest extends AbstractModel
{
    /**
     * @var string 请求ID，即接口返回的 RequestId 参数。
     */
    public $TaskId;

    /**
     * @var string 订单ID。
注意：参数TaskId和DealName必须传一个。
     */
    public $DealName;

    /**
     * @param string $TaskId 请求ID，即接口返回的 RequestId 参数。
     * @param string $DealName 订单ID。
注意：参数TaskId和DealName必须传一个。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }
    }
}
