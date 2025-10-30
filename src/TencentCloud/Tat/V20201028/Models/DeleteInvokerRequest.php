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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteInvoker请求参数结构体
 *
 * @method string getInvokerId() 获取待删除的执行器ID。

可通过 [DescribeInvokers(查询执行器)](https://cloud.tencent.com/document/api/1340/61759) 接口获取。
 * @method void setInvokerId(string $InvokerId) 设置待删除的执行器ID。

可通过 [DescribeInvokers(查询执行器)](https://cloud.tencent.com/document/api/1340/61759) 接口获取。
 */
class DeleteInvokerRequest extends AbstractModel
{
    /**
     * @var string 待删除的执行器ID。

可通过 [DescribeInvokers(查询执行器)](https://cloud.tencent.com/document/api/1340/61759) 接口获取。
     */
    public $InvokerId;

    /**
     * @param string $InvokerId 待删除的执行器ID。

可通过 [DescribeInvokers(查询执行器)](https://cloud.tencent.com/document/api/1340/61759) 接口获取。
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
        if (array_key_exists("InvokerId",$param) and $param["InvokerId"] !== null) {
            $this->InvokerId = $param["InvokerId"];
        }
    }
}
