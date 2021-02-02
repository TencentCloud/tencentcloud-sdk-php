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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InvokeCommand请求参数结构体
 *
 * @method string getCommandId() 获取待触发的命令ID。
 * @method void setCommandId(string $CommandId) 设置待触发的命令ID。
 * @method array getInstanceIds() 获取待执行命令的实例ID列表。
 * @method void setInstanceIds(array $InstanceIds) 设置待执行命令的实例ID列表。
 */
class InvokeCommandRequest extends AbstractModel
{
    /**
     * @var string 待触发的命令ID。
     */
    public $CommandId;

    /**
     * @var array 待执行命令的实例ID列表。
     */
    public $InstanceIds;

    /**
     * @param string $CommandId 待触发的命令ID。
     * @param array $InstanceIds 待执行命令的实例ID列表。
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
        if (array_key_exists("CommandId",$param) and $param["CommandId"] !== null) {
            $this->CommandId = $param["CommandId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
