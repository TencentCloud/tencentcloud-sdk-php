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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源调度-容量调度器的全局设置
 *
 * @method boolean getEnableLabel() 获取是否开启了标签调度
 * @method void setEnableLabel(boolean $EnableLabel) 设置是否开启了标签调度
 * @method string getLabelDir() 获取如果开启了标签调度，标签信息存放的路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelDir(string $LabelDir) 设置如果开启了标签调度，标签信息存放的路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getQueueMappingOverride() 获取是否覆盖用户指定队列，为true表示覆盖。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueueMappingOverride(boolean $QueueMappingOverride) 设置是否覆盖用户指定队列，为true表示覆盖。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDefaultSettings() 获取高级设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultSettings(array $DefaultSettings) 设置高级设置
注意：此字段可能返回 null，表示取不到有效值。
 */
class CapacityGlobalConfig extends AbstractModel
{
    /**
     * @var boolean 是否开启了标签调度
     */
    public $EnableLabel;

    /**
     * @var string 如果开启了标签调度，标签信息存放的路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelDir;

    /**
     * @var boolean 是否覆盖用户指定队列，为true表示覆盖。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueueMappingOverride;

    /**
     * @var array 高级设置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultSettings;

    /**
     * @param boolean $EnableLabel 是否开启了标签调度
     * @param string $LabelDir 如果开启了标签调度，标签信息存放的路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $QueueMappingOverride 是否覆盖用户指定队列，为true表示覆盖。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DefaultSettings 高级设置
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
        if (array_key_exists("EnableLabel",$param) and $param["EnableLabel"] !== null) {
            $this->EnableLabel = $param["EnableLabel"];
        }

        if (array_key_exists("LabelDir",$param) and $param["LabelDir"] !== null) {
            $this->LabelDir = $param["LabelDir"];
        }

        if (array_key_exists("QueueMappingOverride",$param) and $param["QueueMappingOverride"] !== null) {
            $this->QueueMappingOverride = $param["QueueMappingOverride"];
        }

        if (array_key_exists("DefaultSettings",$param) and $param["DefaultSettings"] !== null) {
            $this->DefaultSettings = [];
            foreach ($param["DefaultSettings"] as $key => $value){
                $obj = new DefaultSetting();
                $obj->deserialize($value);
                array_push($this->DefaultSettings, $obj);
            }
        }
    }
}
