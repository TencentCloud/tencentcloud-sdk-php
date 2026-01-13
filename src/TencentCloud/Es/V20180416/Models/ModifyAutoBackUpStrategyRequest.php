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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAutoBackUpStrategy请求参数结构体
 *
 * @method string getInstanceId() 获取实例名称
 * @method void setInstanceId(string $InstanceId) 设置实例名称
 * @method string getStrategyName() 获取当前策略名称
 * @method void setStrategyName(string $StrategyName) 设置当前策略名称
 * @method CosBackup getCosBackup() 获取策略信息
 * @method void setCosBackup(CosBackup $CosBackup) 设置策略信息
 */
class ModifyAutoBackUpStrategyRequest extends AbstractModel
{
    /**
     * @var string 实例名称
     */
    public $InstanceId;

    /**
     * @var string 当前策略名称
     */
    public $StrategyName;

    /**
     * @var CosBackup 策略信息
     */
    public $CosBackup;

    /**
     * @param string $InstanceId 实例名称
     * @param string $StrategyName 当前策略名称
     * @param CosBackup $CosBackup 策略信息
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("CosBackup",$param) and $param["CosBackup"] !== null) {
            $this->CosBackup = new CosBackup();
            $this->CosBackup->deserialize($param["CosBackup"]);
        }
    }
}
