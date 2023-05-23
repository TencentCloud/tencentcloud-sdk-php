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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeDedicatedDCDBInstance请求参数结构体
 *
 * @method string getUpgradeType() 获取升级类型，取值为ADD，SPLIT和EXPAND。ADD-添加分片；SPLIT-切分某个分片；EXPAND-垂直扩容某个分片
 * @method void setUpgradeType(string $UpgradeType) 设置升级类型，取值为ADD，SPLIT和EXPAND。ADD-添加分片；SPLIT-切分某个分片；EXPAND-垂直扩容某个分片
 * @method string getInstanceId() 获取实例ID，形如 dcdbt-mlfjm74h
 * @method void setInstanceId(string $InstanceId) 设置实例ID，形如 dcdbt-mlfjm74h
 * @method AddShardConfig getAddShardConfig() 获取当UpgradeType取值为ADD时，添加分片的配置参数
 * @method void setAddShardConfig(AddShardConfig $AddShardConfig) 设置当UpgradeType取值为ADD时，添加分片的配置参数
 * @method ExpandShardConfig getExpandShardConfig() 获取当UpgradeType取值为EXPAND时，垂直扩容分片的配置参数
 * @method void setExpandShardConfig(ExpandShardConfig $ExpandShardConfig) 设置当UpgradeType取值为EXPAND时，垂直扩容分片的配置参数
 * @method SplitShardConfig getSplitShardConfig() 获取当UpgradeType取值为SPLIT时，切分分片的配置参数
 * @method void setSplitShardConfig(SplitShardConfig $SplitShardConfig) 设置当UpgradeType取值为SPLIT时，切分分片的配置参数
 * @method integer getSwitchAutoRetry() 获取错过切换时间窗口时，是否自动重试一次，0-否，1-是
 * @method void setSwitchAutoRetry(integer $SwitchAutoRetry) 设置错过切换时间窗口时，是否自动重试一次，0-否，1-是
 * @method string getSwitchStartTime() 获取切换时间窗口开始时间
 * @method void setSwitchStartTime(string $SwitchStartTime) 设置切换时间窗口开始时间
 * @method string getSwitchEndTime() 获取切换时间窗口结束时间
 * @method void setSwitchEndTime(string $SwitchEndTime) 设置切换时间窗口结束时间
 */
class UpgradeDedicatedDCDBInstanceRequest extends AbstractModel
{
    /**
     * @var string 升级类型，取值为ADD，SPLIT和EXPAND。ADD-添加分片；SPLIT-切分某个分片；EXPAND-垂直扩容某个分片
     */
    public $UpgradeType;

    /**
     * @var string 实例ID，形如 dcdbt-mlfjm74h
     */
    public $InstanceId;

    /**
     * @var AddShardConfig 当UpgradeType取值为ADD时，添加分片的配置参数
     */
    public $AddShardConfig;

    /**
     * @var ExpandShardConfig 当UpgradeType取值为EXPAND时，垂直扩容分片的配置参数
     */
    public $ExpandShardConfig;

    /**
     * @var SplitShardConfig 当UpgradeType取值为SPLIT时，切分分片的配置参数
     */
    public $SplitShardConfig;

    /**
     * @var integer 错过切换时间窗口时，是否自动重试一次，0-否，1-是
     */
    public $SwitchAutoRetry;

    /**
     * @var string 切换时间窗口开始时间
     */
    public $SwitchStartTime;

    /**
     * @var string 切换时间窗口结束时间
     */
    public $SwitchEndTime;

    /**
     * @param string $UpgradeType 升级类型，取值为ADD，SPLIT和EXPAND。ADD-添加分片；SPLIT-切分某个分片；EXPAND-垂直扩容某个分片
     * @param string $InstanceId 实例ID，形如 dcdbt-mlfjm74h
     * @param AddShardConfig $AddShardConfig 当UpgradeType取值为ADD时，添加分片的配置参数
     * @param ExpandShardConfig $ExpandShardConfig 当UpgradeType取值为EXPAND时，垂直扩容分片的配置参数
     * @param SplitShardConfig $SplitShardConfig 当UpgradeType取值为SPLIT时，切分分片的配置参数
     * @param integer $SwitchAutoRetry 错过切换时间窗口时，是否自动重试一次，0-否，1-是
     * @param string $SwitchStartTime 切换时间窗口开始时间
     * @param string $SwitchEndTime 切换时间窗口结束时间
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
        if (array_key_exists("UpgradeType",$param) and $param["UpgradeType"] !== null) {
            $this->UpgradeType = $param["UpgradeType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AddShardConfig",$param) and $param["AddShardConfig"] !== null) {
            $this->AddShardConfig = new AddShardConfig();
            $this->AddShardConfig->deserialize($param["AddShardConfig"]);
        }

        if (array_key_exists("ExpandShardConfig",$param) and $param["ExpandShardConfig"] !== null) {
            $this->ExpandShardConfig = new ExpandShardConfig();
            $this->ExpandShardConfig->deserialize($param["ExpandShardConfig"]);
        }

        if (array_key_exists("SplitShardConfig",$param) and $param["SplitShardConfig"] !== null) {
            $this->SplitShardConfig = new SplitShardConfig();
            $this->SplitShardConfig->deserialize($param["SplitShardConfig"]);
        }

        if (array_key_exists("SwitchAutoRetry",$param) and $param["SwitchAutoRetry"] !== null) {
            $this->SwitchAutoRetry = $param["SwitchAutoRetry"];
        }

        if (array_key_exists("SwitchStartTime",$param) and $param["SwitchStartTime"] !== null) {
            $this->SwitchStartTime = $param["SwitchStartTime"];
        }

        if (array_key_exists("SwitchEndTime",$param) and $param["SwitchEndTime"] !== null) {
            $this->SwitchEndTime = $param["SwitchEndTime"];
        }
    }
}
