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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 演练人员组织
 *
 * @method string getTaskRole() 获取演练角色
 * @method void setTaskRole(string $TaskRole) 设置演练角色
 * @method string getTaskOperator() 获取负责人
 * @method void setTaskOperator(string $TaskOperator) 设置负责人
 */
class TaskOrg extends AbstractModel
{
    /**
     * @var string 演练角色
     */
    public $TaskRole;

    /**
     * @var string 负责人
     */
    public $TaskOperator;

    /**
     * @param string $TaskRole 演练角色
     * @param string $TaskOperator 负责人
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
        if (array_key_exists("TaskRole",$param) and $param["TaskRole"] !== null) {
            $this->TaskRole = $param["TaskRole"];
        }

        if (array_key_exists("TaskOperator",$param) and $param["TaskOperator"] !== null) {
            $this->TaskOperator = $param["TaskOperator"];
        }
    }
}
