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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务分组
 *
 * @method integer getTaskGroupId() 获取任务动作ID
 * @method void setTaskGroupId(integer $TaskGroupId) 设置任务动作ID
 * @method string getTaskGroupTitle() 获取分组标题
 * @method void setTaskGroupTitle(string $TaskGroupTitle) 设置分组标题
 * @method string getTaskGroupDescription() 获取分组描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskGroupDescription(string $TaskGroupDescription) 设置分组描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTaskGroupOrder() 获取任务分组顺序
 * @method void setTaskGroupOrder(integer $TaskGroupOrder) 设置任务分组顺序
 * @method integer getObjectTypeId() 获取对象类型ID
 * @method void setObjectTypeId(integer $ObjectTypeId) 设置对象类型ID
 * @method string getTaskGroupCreateTime() 获取任务分组创建时间
 * @method void setTaskGroupCreateTime(string $TaskGroupCreateTime) 设置任务分组创建时间
 * @method string getTaskGroupUpdateTime() 获取任务分组更新时间
 * @method void setTaskGroupUpdateTime(string $TaskGroupUpdateTime) 设置任务分组更新时间
 * @method array getTaskGroupActions() 获取动作分组动作列表
 * @method void setTaskGroupActions(array $TaskGroupActions) 设置动作分组动作列表
 * @method array getTaskGroupInstanceList() 获取实例列表
 * @method void setTaskGroupInstanceList(array $TaskGroupInstanceList) 设置实例列表
 * @method integer getTaskGroupMode() 获取执行模式。1 --- 顺序执行，2 --- 阶段执行
 * @method void setTaskGroupMode(integer $TaskGroupMode) 设置执行模式。1 --- 顺序执行，2 --- 阶段执行
 */
class TaskGroup extends AbstractModel
{
    /**
     * @var integer 任务动作ID
     */
    public $TaskGroupId;

    /**
     * @var string 分组标题
     */
    public $TaskGroupTitle;

    /**
     * @var string 分组描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskGroupDescription;

    /**
     * @var integer 任务分组顺序
     */
    public $TaskGroupOrder;

    /**
     * @var integer 对象类型ID
     */
    public $ObjectTypeId;

    /**
     * @var string 任务分组创建时间
     */
    public $TaskGroupCreateTime;

    /**
     * @var string 任务分组更新时间
     */
    public $TaskGroupUpdateTime;

    /**
     * @var array 动作分组动作列表
     */
    public $TaskGroupActions;

    /**
     * @var array 实例列表
     */
    public $TaskGroupInstanceList;

    /**
     * @var integer 执行模式。1 --- 顺序执行，2 --- 阶段执行
     */
    public $TaskGroupMode;

    /**
     * @param integer $TaskGroupId 任务动作ID
     * @param string $TaskGroupTitle 分组标题
     * @param string $TaskGroupDescription 分组描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TaskGroupOrder 任务分组顺序
     * @param integer $ObjectTypeId 对象类型ID
     * @param string $TaskGroupCreateTime 任务分组创建时间
     * @param string $TaskGroupUpdateTime 任务分组更新时间
     * @param array $TaskGroupActions 动作分组动作列表
     * @param array $TaskGroupInstanceList 实例列表
     * @param integer $TaskGroupMode 执行模式。1 --- 顺序执行，2 --- 阶段执行
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
        if (array_key_exists("TaskGroupId",$param) and $param["TaskGroupId"] !== null) {
            $this->TaskGroupId = $param["TaskGroupId"];
        }

        if (array_key_exists("TaskGroupTitle",$param) and $param["TaskGroupTitle"] !== null) {
            $this->TaskGroupTitle = $param["TaskGroupTitle"];
        }

        if (array_key_exists("TaskGroupDescription",$param) and $param["TaskGroupDescription"] !== null) {
            $this->TaskGroupDescription = $param["TaskGroupDescription"];
        }

        if (array_key_exists("TaskGroupOrder",$param) and $param["TaskGroupOrder"] !== null) {
            $this->TaskGroupOrder = $param["TaskGroupOrder"];
        }

        if (array_key_exists("ObjectTypeId",$param) and $param["ObjectTypeId"] !== null) {
            $this->ObjectTypeId = $param["ObjectTypeId"];
        }

        if (array_key_exists("TaskGroupCreateTime",$param) and $param["TaskGroupCreateTime"] !== null) {
            $this->TaskGroupCreateTime = $param["TaskGroupCreateTime"];
        }

        if (array_key_exists("TaskGroupUpdateTime",$param) and $param["TaskGroupUpdateTime"] !== null) {
            $this->TaskGroupUpdateTime = $param["TaskGroupUpdateTime"];
        }

        if (array_key_exists("TaskGroupActions",$param) and $param["TaskGroupActions"] !== null) {
            $this->TaskGroupActions = [];
            foreach ($param["TaskGroupActions"] as $key => $value){
                $obj = new TaskGroupAction();
                $obj->deserialize($value);
                array_push($this->TaskGroupActions, $obj);
            }
        }

        if (array_key_exists("TaskGroupInstanceList",$param) and $param["TaskGroupInstanceList"] !== null) {
            $this->TaskGroupInstanceList = $param["TaskGroupInstanceList"];
        }

        if (array_key_exists("TaskGroupMode",$param) and $param["TaskGroupMode"] !== null) {
            $this->TaskGroupMode = $param["TaskGroupMode"];
        }
    }
}
