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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 扩展信息参数
 *
 * @method boolean getParentTask() 获取父任务信息获取标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentTask(boolean $ParentTask) 设置父任务信息获取标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventListener() 获取生产事件获取标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventListener(string $EventListener) 设置生产事件获取标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDlcResourceConfig() 获取Dlc相关配置获取标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDlcResourceConfig(string $DlcResourceConfig) 设置Dlc相关配置获取标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScript() 获取脚本信息获取标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScript(string $Script) 设置脚本信息获取标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOfflineSyncTask() 获取离线任务信息获取标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOfflineSyncTask(string $OfflineSyncTask) 设置离线任务信息获取标识
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExtResourceFlagDto extends AbstractModel
{
    /**
     * @var boolean 父任务信息获取标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentTask;

    /**
     * @var string 生产事件获取标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventListener;

    /**
     * @var string Dlc相关配置获取标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DlcResourceConfig;

    /**
     * @var string 脚本信息获取标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Script;

    /**
     * @var string 离线任务信息获取标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OfflineSyncTask;

    /**
     * @param boolean $ParentTask 父任务信息获取标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventListener 生产事件获取标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DlcResourceConfig Dlc相关配置获取标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Script 脚本信息获取标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OfflineSyncTask 离线任务信息获取标识
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
        if (array_key_exists("ParentTask",$param) and $param["ParentTask"] !== null) {
            $this->ParentTask = $param["ParentTask"];
        }

        if (array_key_exists("EventListener",$param) and $param["EventListener"] !== null) {
            $this->EventListener = $param["EventListener"];
        }

        if (array_key_exists("DlcResourceConfig",$param) and $param["DlcResourceConfig"] !== null) {
            $this->DlcResourceConfig = $param["DlcResourceConfig"];
        }

        if (array_key_exists("Script",$param) and $param["Script"] !== null) {
            $this->Script = $param["Script"];
        }

        if (array_key_exists("OfflineSyncTask",$param) and $param["OfflineSyncTask"] !== null) {
            $this->OfflineSyncTask = $param["OfflineSyncTask"];
        }
    }
}
