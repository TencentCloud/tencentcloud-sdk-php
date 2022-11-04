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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyResourcePools请求参数结构体
 *
 * @method string getInstanceId() 获取emr集群id
 * @method void setInstanceId(string $InstanceId) 设置emr集群id
 * @method string getKey() 获取取值范围：
<li>fair:代表公平调度标识</li>
<li>capacity:代表容量调度标识</li>
 * @method void setKey(string $Key) 设置取值范围：
<li>fair:代表公平调度标识</li>
<li>capacity:代表容量调度标识</li>
 */
class ModifyResourcePoolsRequest extends AbstractModel
{
    /**
     * @var string emr集群id
     */
    public $InstanceId;

    /**
     * @var string 取值范围：
<li>fair:代表公平调度标识</li>
<li>capacity:代表容量调度标识</li>
     */
    public $Key;

    /**
     * @param string $InstanceId emr集群id
     * @param string $Key 取值范围：
<li>fair:代表公平调度标识</li>
<li>capacity:代表容量调度标识</li>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }
    }
}
