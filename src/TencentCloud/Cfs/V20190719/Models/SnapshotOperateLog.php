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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 快照操作日志
 *
 * @method string getAction() 获取操作类型
 * @method void setAction(string $Action) 设置操作类型
 * @method string getActionTime() 获取操作时间
 * @method void setActionTime(string $ActionTime) 设置操作时间
 * @method string getActionName() 获取操作名称
 * @method void setActionName(string $ActionName) 设置操作名称
 * @method string getOperator() 获取操作者
 * @method void setOperator(string $Operator) 设置操作者
 * @method integer getResult() 获取结果
 * @method void setResult(integer $Result) 设置结果
 */
class SnapshotOperateLog extends AbstractModel
{
    /**
     * @var string 操作类型
     */
    public $Action;

    /**
     * @var string 操作时间
     */
    public $ActionTime;

    /**
     * @var string 操作名称
     */
    public $ActionName;

    /**
     * @var string 操作者
     */
    public $Operator;

    /**
     * @var integer 结果
     */
    public $Result;

    /**
     * @param string $Action 操作类型
     * @param string $ActionTime 操作时间
     * @param string $ActionName 操作名称
     * @param string $Operator 操作者
     * @param integer $Result 结果
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("ActionTime",$param) and $param["ActionTime"] !== null) {
            $this->ActionTime = $param["ActionTime"];
        }

        if (array_key_exists("ActionName",$param) and $param["ActionName"] !== null) {
            $this->ActionName = $param["ActionName"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
    }
}
