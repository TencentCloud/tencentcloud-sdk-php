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
 * 机器选取规则
 *
 * @method integer getTaskGroupInstancesExecuteMode() 获取<p>实例选取模式</p><p>枚举值：</p><ul><li>1： 全部注入</li><li>2： 随机选取指定比例注入</li><li>3： 随机选取指定数量注入</li></ul>
 * @method void setTaskGroupInstancesExecuteMode(integer $TaskGroupInstancesExecuteMode) 设置<p>实例选取模式</p><p>枚举值：</p><ul><li>1： 全部注入</li><li>2： 随机选取指定比例注入</li><li>3： 随机选取指定数量注入</li></ul>
 * @method integer getTaskGroupInstancesExecutePercent() 获取<p>按比例选取模式下选取比例</p>
 * @method void setTaskGroupInstancesExecutePercent(integer $TaskGroupInstancesExecutePercent) 设置<p>按比例选取模式下选取比例</p>
 * @method integer getTaskGroupInstancesExecuteNum() 获取<p>按数量选取模式下选取数量</p>
 * @method void setTaskGroupInstancesExecuteNum(integer $TaskGroupInstancesExecuteNum) 设置<p>按数量选取模式下选取数量</p>
 */
class TaskGroupInstancesExecuteRules extends AbstractModel
{
    /**
     * @var integer <p>实例选取模式</p><p>枚举值：</p><ul><li>1： 全部注入</li><li>2： 随机选取指定比例注入</li><li>3： 随机选取指定数量注入</li></ul>
     */
    public $TaskGroupInstancesExecuteMode;

    /**
     * @var integer <p>按比例选取模式下选取比例</p>
     */
    public $TaskGroupInstancesExecutePercent;

    /**
     * @var integer <p>按数量选取模式下选取数量</p>
     */
    public $TaskGroupInstancesExecuteNum;

    /**
     * @param integer $TaskGroupInstancesExecuteMode <p>实例选取模式</p><p>枚举值：</p><ul><li>1： 全部注入</li><li>2： 随机选取指定比例注入</li><li>3： 随机选取指定数量注入</li></ul>
     * @param integer $TaskGroupInstancesExecutePercent <p>按比例选取模式下选取比例</p>
     * @param integer $TaskGroupInstancesExecuteNum <p>按数量选取模式下选取数量</p>
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
        if (array_key_exists("TaskGroupInstancesExecuteMode",$param) and $param["TaskGroupInstancesExecuteMode"] !== null) {
            $this->TaskGroupInstancesExecuteMode = $param["TaskGroupInstancesExecuteMode"];
        }

        if (array_key_exists("TaskGroupInstancesExecutePercent",$param) and $param["TaskGroupInstancesExecutePercent"] !== null) {
            $this->TaskGroupInstancesExecutePercent = $param["TaskGroupInstancesExecutePercent"];
        }

        if (array_key_exists("TaskGroupInstancesExecuteNum",$param) and $param["TaskGroupInstancesExecuteNum"] !== null) {
            $this->TaskGroupInstancesExecuteNum = $param["TaskGroupInstancesExecuteNum"];
        }
    }
}
