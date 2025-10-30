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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 血缘Pair对象
 *
 * @method LineageResouce getSource() 获取来源
 * @method void setSource(LineageResouce $Source) 设置来源
 * @method LineageResouce getTarget() 获取目标
 * @method void setTarget(LineageResouce $Target) 设置目标
 * @method array getProcesses() 获取血缘加工过程
 * @method void setProcesses(array $Processes) 设置血缘加工过程
 */
class LineagePair extends AbstractModel
{
    /**
     * @var LineageResouce 来源
     */
    public $Source;

    /**
     * @var LineageResouce 目标
     */
    public $Target;

    /**
     * @var array 血缘加工过程
     */
    public $Processes;

    /**
     * @param LineageResouce $Source 来源
     * @param LineageResouce $Target 目标
     * @param array $Processes 血缘加工过程
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = new LineageResouce();
            $this->Source->deserialize($param["Source"]);
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = new LineageResouce();
            $this->Target->deserialize($param["Target"]);
        }

        if (array_key_exists("Processes",$param) and $param["Processes"] !== null) {
            $this->Processes = [];
            foreach ($param["Processes"] as $key => $value){
                $obj = new LineageProcess();
                $obj->deserialize($value);
                array_push($this->Processes, $obj);
            }
        }
    }
}
