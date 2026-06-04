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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 记忆配置
 *
 * @method boolean getEnabled() 获取是否开启长记忆
 * @method void setEnabled(boolean $Enabled) 设置是否开启长记忆
 * @method integer getLongMemoryDay() 获取长记忆时长
 * @method void setLongMemoryDay(integer $LongMemoryDay) 设置长记忆时长
 * @method ModelDetailInfo getModel() 获取模型配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModel(ModelDetailInfo $Model) 设置模型配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPromptContent() 获取prompt内容
 * @method void setPromptContent(string $PromptContent) 设置prompt内容
 * @method integer getPromptMode() 获取提示词模式。枚举值: 1:自定义
 * @method void setPromptMode(integer $PromptMode) 设置提示词模式。枚举值: 1:自定义
 */
class AppMemoryConfig extends AbstractModel
{
    /**
     * @var boolean 是否开启长记忆
     */
    public $Enabled;

    /**
     * @var integer 长记忆时长
     */
    public $LongMemoryDay;

    /**
     * @var ModelDetailInfo 模型配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Model;

    /**
     * @var string prompt内容
     */
    public $PromptContent;

    /**
     * @var integer 提示词模式。枚举值: 1:自定义
     */
    public $PromptMode;

    /**
     * @param boolean $Enabled 是否开启长记忆
     * @param integer $LongMemoryDay 长记忆时长
     * @param ModelDetailInfo $Model 模型配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PromptContent prompt内容
     * @param integer $PromptMode 提示词模式。枚举值: 1:自定义
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("LongMemoryDay",$param) and $param["LongMemoryDay"] !== null) {
            $this->LongMemoryDay = $param["LongMemoryDay"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = new ModelDetailInfo();
            $this->Model->deserialize($param["Model"]);
        }

        if (array_key_exists("PromptContent",$param) and $param["PromptContent"] !== null) {
            $this->PromptContent = $param["PromptContent"];
        }

        if (array_key_exists("PromptMode",$param) and $param["PromptMode"] !== null) {
            $this->PromptMode = $param["PromptMode"];
        }
    }
}
