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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预置定时任务动作
 *
 * @method string getTriggerName() 获取定时预置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerName(string $TriggerName) 设置定时预置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTriggerProvisionedConcurrencyNum() 获取定时预置并发数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerProvisionedConcurrencyNum(integer $TriggerProvisionedConcurrencyNum) 设置定时预置并发数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerCronConfig() 获取设置定时触发器的时间配置，cron表达式。Cron 表达式有七个必需字段，按空格分隔。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerCronConfig(string $TriggerCronConfig) 设置设置定时触发器的时间配置，cron表达式。Cron 表达式有七个必需字段，按空格分隔。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProvisionedType() 获取预置类型 Default
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProvisionedType(string $ProvisionedType) 设置预置类型 Default
注意：此字段可能返回 null，表示取不到有效值。
 */
class TriggerAction extends AbstractModel
{
    /**
     * @var string 定时预置名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerName;

    /**
     * @var integer 定时预置并发数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerProvisionedConcurrencyNum;

    /**
     * @var string 设置定时触发器的时间配置，cron表达式。Cron 表达式有七个必需字段，按空格分隔。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerCronConfig;

    /**
     * @var string 预置类型 Default
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProvisionedType;

    /**
     * @param string $TriggerName 定时预置名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TriggerProvisionedConcurrencyNum 定时预置并发数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerCronConfig 设置定时触发器的时间配置，cron表达式。Cron 表达式有七个必需字段，按空格分隔。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProvisionedType 预置类型 Default
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
        if (array_key_exists("TriggerName",$param) and $param["TriggerName"] !== null) {
            $this->TriggerName = $param["TriggerName"];
        }

        if (array_key_exists("TriggerProvisionedConcurrencyNum",$param) and $param["TriggerProvisionedConcurrencyNum"] !== null) {
            $this->TriggerProvisionedConcurrencyNum = $param["TriggerProvisionedConcurrencyNum"];
        }

        if (array_key_exists("TriggerCronConfig",$param) and $param["TriggerCronConfig"] !== null) {
            $this->TriggerCronConfig = $param["TriggerCronConfig"];
        }

        if (array_key_exists("ProvisionedType",$param) and $param["ProvisionedType"] !== null) {
            $this->ProvisionedType = $param["ProvisionedType"];
        }
    }
}
