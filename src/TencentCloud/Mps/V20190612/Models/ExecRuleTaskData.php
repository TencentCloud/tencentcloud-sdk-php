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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 条件判断输出
 *
 * @method array getRearDriveIndex() 获取质检条件判断需要执行的节点索引。
 * @method void setRearDriveIndex(array $RearDriveIndex) 设置质检条件判断需要执行的节点索引。
 */
class ExecRuleTaskData extends AbstractModel
{
    /**
     * @var array 质检条件判断需要执行的节点索引。
     */
    public $RearDriveIndex;

    /**
     * @param array $RearDriveIndex 质检条件判断需要执行的节点索引。
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
        if (array_key_exists("RearDriveIndex",$param) and $param["RearDriveIndex"] !== null) {
            $this->RearDriveIndex = $param["RearDriveIndex"];
        }
    }
}
