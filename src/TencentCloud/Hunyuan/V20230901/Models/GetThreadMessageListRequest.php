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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetThreadMessageList请求参数结构体
 *
 * @method string getThreadID() 获取会话 ID
 * @method void setThreadID(string $ThreadID) 设置会话 ID
 * @method integer getLimit() 获取返回的消息条数，1 - 100 条
 * @method void setLimit(integer $Limit) 设置返回的消息条数，1 - 100 条
 * @method string getOrder() 获取排序方式，按创建时间升序（asc）或降序（desc），默认为 desc
 * @method void setOrder(string $Order) 设置排序方式，按创建时间升序（asc）或降序（desc），默认为 desc
 */
class GetThreadMessageListRequest extends AbstractModel
{
    /**
     * @var string 会话 ID
     */
    public $ThreadID;

    /**
     * @var integer 返回的消息条数，1 - 100 条
     */
    public $Limit;

    /**
     * @var string 排序方式，按创建时间升序（asc）或降序（desc），默认为 desc
     */
    public $Order;

    /**
     * @param string $ThreadID 会话 ID
     * @param integer $Limit 返回的消息条数，1 - 100 条
     * @param string $Order 排序方式，按创建时间升序（asc）或降序（desc），默认为 desc
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
        if (array_key_exists("ThreadID",$param) and $param["ThreadID"] !== null) {
            $this->ThreadID = $param["ThreadID"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
