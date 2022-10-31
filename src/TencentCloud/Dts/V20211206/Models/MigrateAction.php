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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务操作信息，包含迁移任务的所有操作列表，及迁移任务在当前状态下允许的操作列表
 *
 * @method array getAllAction() 获取任务的所有操作列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllAction(array $AllAction) 设置任务的所有操作列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAllowedAction() 获取任务在当前状态下允许的操作列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowedAction(array $AllowedAction) 设置任务在当前状态下允许的操作列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class MigrateAction extends AbstractModel
{
    /**
     * @var array 任务的所有操作列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllAction;

    /**
     * @var array 任务在当前状态下允许的操作列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowedAction;

    /**
     * @param array $AllAction 任务的所有操作列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AllowedAction 任务在当前状态下允许的操作列表
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
        if (array_key_exists("AllAction",$param) and $param["AllAction"] !== null) {
            $this->AllAction = $param["AllAction"];
        }

        if (array_key_exists("AllowedAction",$param) and $param["AllowedAction"] !== null) {
            $this->AllowedAction = $param["AllowedAction"];
        }
    }
}
