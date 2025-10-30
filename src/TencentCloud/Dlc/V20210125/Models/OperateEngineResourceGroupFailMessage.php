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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 操作资源组，返回的操作失败信息
 *
 * @method string getEngineResourceGroupName() 获取引擎资源组名称
 * @method void setEngineResourceGroupName(string $EngineResourceGroupName) 设置引擎资源组名称
 * @method string getFailMessage() 获取操作失败的提示信息
 * @method void setFailMessage(string $FailMessage) 设置操作失败的提示信息
 */
class OperateEngineResourceGroupFailMessage extends AbstractModel
{
    /**
     * @var string 引擎资源组名称
     */
    public $EngineResourceGroupName;

    /**
     * @var string 操作失败的提示信息
     */
    public $FailMessage;

    /**
     * @param string $EngineResourceGroupName 引擎资源组名称
     * @param string $FailMessage 操作失败的提示信息
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
        if (array_key_exists("EngineResourceGroupName",$param) and $param["EngineResourceGroupName"] !== null) {
            $this->EngineResourceGroupName = $param["EngineResourceGroupName"];
        }

        if (array_key_exists("FailMessage",$param) and $param["FailMessage"] !== null) {
            $this->FailMessage = $param["FailMessage"];
        }
    }
}
