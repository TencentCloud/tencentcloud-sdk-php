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
 * @method integer getTemplateGroupId() 获取经验库动作ID
 * @method void setTemplateGroupId(integer $TemplateGroupId) 设置经验库动作ID
 * @method array getTemplateGroupActions() 获取经验库动作分组动作列表
 * @method void setTemplateGroupActions(array $TemplateGroupActions) 设置经验库动作分组动作列表
 * @method string getTitle() 获取分组标题
 * @method void setTitle(string $Title) 设置分组标题
 * @method string getDescription() 获取分组描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置分组描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOrder() 获取分组顺序
 * @method void setOrder(integer $Order) 设置分组顺序
 * @method integer getMode() 获取执行模式。1 --- 顺序执行，2 --- 阶段执行
 * @method void setMode(integer $Mode) 设置执行模式。1 --- 顺序执行，2 --- 阶段执行
 * @method integer getObjectTypeId() 获取对象类型ID
 * @method void setObjectTypeId(integer $ObjectTypeId) 设置对象类型ID
 * @method string getCreateTime() 获取分组创建时间
 * @method void setCreateTime(string $CreateTime) 设置分组创建时间
 * @method string getUpdateTime() 获取分组更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置分组更新时间
 */
class TemplateGroup extends AbstractModel
{
    /**
     * @var integer 经验库动作ID
     */
    public $TemplateGroupId;

    /**
     * @var array 经验库动作分组动作列表
     */
    public $TemplateGroupActions;

    /**
     * @var string 分组标题
     */
    public $Title;

    /**
     * @var string 分组描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 分组顺序
     */
    public $Order;

    /**
     * @var integer 执行模式。1 --- 顺序执行，2 --- 阶段执行
     */
    public $Mode;

    /**
     * @var integer 对象类型ID
     */
    public $ObjectTypeId;

    /**
     * @var string 分组创建时间
     */
    public $CreateTime;

    /**
     * @var string 分组更新时间
     */
    public $UpdateTime;

    /**
     * @param integer $TemplateGroupId 经验库动作ID
     * @param array $TemplateGroupActions 经验库动作分组动作列表
     * @param string $Title 分组标题
     * @param string $Description 分组描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Order 分组顺序
     * @param integer $Mode 执行模式。1 --- 顺序执行，2 --- 阶段执行
     * @param integer $ObjectTypeId 对象类型ID
     * @param string $CreateTime 分组创建时间
     * @param string $UpdateTime 分组更新时间
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
        if (array_key_exists("TemplateGroupId",$param) and $param["TemplateGroupId"] !== null) {
            $this->TemplateGroupId = $param["TemplateGroupId"];
        }

        if (array_key_exists("TemplateGroupActions",$param) and $param["TemplateGroupActions"] !== null) {
            $this->TemplateGroupActions = [];
            foreach ($param["TemplateGroupActions"] as $key => $value){
                $obj = new TemplateGroupAction();
                $obj->deserialize($value);
                array_push($this->TemplateGroupActions, $obj);
            }
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("ObjectTypeId",$param) and $param["ObjectTypeId"] !== null) {
            $this->ObjectTypeId = $param["ObjectTypeId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
