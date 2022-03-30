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
 * 任务分组动作
 *
 * @method integer getTemplateGroupActionId() 获取经验库分组动作ID
 * @method void setTemplateGroupActionId(integer $TemplateGroupActionId) 设置经验库分组动作ID
 * @method integer getActionId() 获取动作ID
 * @method void setActionId(integer $ActionId) 设置动作ID
 * @method integer getOrder() 获取分组动作顺序
 * @method void setOrder(integer $Order) 设置分组动作顺序
 * @method string getGeneralConfiguration() 获取分组动作通用配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGeneralConfiguration(string $GeneralConfiguration) 设置分组动作通用配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomConfiguration() 获取分组动作自定义配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomConfiguration(string $CustomConfiguration) 设置分组动作自定义配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取动作分组创建时间
 * @method void setCreateTime(string $CreateTime) 设置动作分组创建时间
 * @method string getUpdateTime() 获取动作分组更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置动作分组更新时间
 * @method string getActionTitle() 获取动作名称
 * @method void setActionTitle(string $ActionTitle) 设置动作名称
 * @method integer getRandomId() 获取自身随机id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRandomId(integer $RandomId) 设置自身随机id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRecoverId() 获取恢复动作id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecoverId(integer $RecoverId) 设置恢复动作id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExecuteId() 获取执行动作id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecuteId(integer $ExecuteId) 设置执行动作id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getActionApiType() 获取调用api类型，0:tat, 1:云api
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActionApiType(integer $ActionApiType) 设置调用api类型，0:tat, 1:云api
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getActionAttribute() 获取1:故障，2:恢复
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActionAttribute(integer $ActionAttribute) 设置1:故障，2:恢复
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActionType() 获取动作类型：平台和自定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActionType(string $ActionType) 设置动作类型：平台和自定义
注意：此字段可能返回 null，表示取不到有效值。
 */
class TemplateGroupAction extends AbstractModel
{
    /**
     * @var integer 经验库分组动作ID
     */
    public $TemplateGroupActionId;

    /**
     * @var integer 动作ID
     */
    public $ActionId;

    /**
     * @var integer 分组动作顺序
     */
    public $Order;

    /**
     * @var string 分组动作通用配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GeneralConfiguration;

    /**
     * @var string 分组动作自定义配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomConfiguration;

    /**
     * @var string 动作分组创建时间
     */
    public $CreateTime;

    /**
     * @var string 动作分组更新时间
     */
    public $UpdateTime;

    /**
     * @var string 动作名称
     */
    public $ActionTitle;

    /**
     * @var integer 自身随机id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RandomId;

    /**
     * @var integer 恢复动作id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecoverId;

    /**
     * @var integer 执行动作id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecuteId;

    /**
     * @var integer 调用api类型，0:tat, 1:云api
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActionApiType;

    /**
     * @var integer 1:故障，2:恢复
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActionAttribute;

    /**
     * @var string 动作类型：平台和自定义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActionType;

    /**
     * @param integer $TemplateGroupActionId 经验库分组动作ID
     * @param integer $ActionId 动作ID
     * @param integer $Order 分组动作顺序
     * @param string $GeneralConfiguration 分组动作通用配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomConfiguration 分组动作自定义配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 动作分组创建时间
     * @param string $UpdateTime 动作分组更新时间
     * @param string $ActionTitle 动作名称
     * @param integer $RandomId 自身随机id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RecoverId 恢复动作id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExecuteId 执行动作id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ActionApiType 调用api类型，0:tat, 1:云api
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ActionAttribute 1:故障，2:恢复
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActionType 动作类型：平台和自定义
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("TemplateGroupActionId",$param) and $param["TemplateGroupActionId"] !== null) {
            $this->TemplateGroupActionId = $param["TemplateGroupActionId"];
        }

        if (array_key_exists("ActionId",$param) and $param["ActionId"] !== null) {
            $this->ActionId = $param["ActionId"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("GeneralConfiguration",$param) and $param["GeneralConfiguration"] !== null) {
            $this->GeneralConfiguration = $param["GeneralConfiguration"];
        }

        if (array_key_exists("CustomConfiguration",$param) and $param["CustomConfiguration"] !== null) {
            $this->CustomConfiguration = $param["CustomConfiguration"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ActionTitle",$param) and $param["ActionTitle"] !== null) {
            $this->ActionTitle = $param["ActionTitle"];
        }

        if (array_key_exists("RandomId",$param) and $param["RandomId"] !== null) {
            $this->RandomId = $param["RandomId"];
        }

        if (array_key_exists("RecoverId",$param) and $param["RecoverId"] !== null) {
            $this->RecoverId = $param["RecoverId"];
        }

        if (array_key_exists("ExecuteId",$param) and $param["ExecuteId"] !== null) {
            $this->ExecuteId = $param["ExecuteId"];
        }

        if (array_key_exists("ActionApiType",$param) and $param["ActionApiType"] !== null) {
            $this->ActionApiType = $param["ActionApiType"];
        }

        if (array_key_exists("ActionAttribute",$param) and $param["ActionAttribute"] !== null) {
            $this->ActionAttribute = $param["ActionAttribute"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }
    }
}
