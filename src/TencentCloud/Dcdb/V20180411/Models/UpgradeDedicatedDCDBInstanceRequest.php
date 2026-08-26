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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeDedicatedDCDBInstance请求参数结构体
 *
 * @method string getUpgradeType() 获取<p>升级类型，取值为ADD，SPLIT和EXPAND。ADD-添加分片；SPLIT-切分某个分片；EXPAND-垂直扩容某个分片</p>
 * @method void setUpgradeType(string $UpgradeType) 设置<p>升级类型，取值为ADD，SPLIT和EXPAND。ADD-添加分片；SPLIT-切分某个分片；EXPAND-垂直扩容某个分片</p>
 * @method string getInstanceId() 获取<p>实例ID，形如 dcdbt-mlfjm74h</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID，形如 dcdbt-mlfjm74h</p>
 * @method AddShardConfig getAddShardConfig() 获取<p>当UpgradeType取值为ADD时，添加分片的配置参数</p>
 * @method void setAddShardConfig(AddShardConfig $AddShardConfig) 设置<p>当UpgradeType取值为ADD时，添加分片的配置参数</p>
 * @method ExpandShardConfig getExpandShardConfig() 获取<p>当UpgradeType取值为EXPAND时，垂直扩容分片的配置参数</p>
 * @method void setExpandShardConfig(ExpandShardConfig $ExpandShardConfig) 设置<p>当UpgradeType取值为EXPAND时，垂直扩容分片的配置参数</p>
 * @method SplitShardConfig getSplitShardConfig() 获取<p>当UpgradeType取值为SPLIT时，切分分片的配置参数</p>
 * @method void setSplitShardConfig(SplitShardConfig $SplitShardConfig) 设置<p>当UpgradeType取值为SPLIT时，切分分片的配置参数</p>
 * @method integer getSwitchAutoRetry() 获取<p>错过切换时间窗口时，是否自动重试一次，0-否，1-是</p>
 * @method void setSwitchAutoRetry(integer $SwitchAutoRetry) 设置<p>错过切换时间窗口时，是否自动重试一次，0-否，1-是</p>
 * @method string getSwitchStartTime() 获取<p>切换时间窗口开始时间</p>
 * @method void setSwitchStartTime(string $SwitchStartTime) 设置<p>切换时间窗口开始时间</p>
 * @method string getSwitchEndTime() 获取<p>切换时间窗口结束时间</p>
 * @method void setSwitchEndTime(string $SwitchEndTime) 设置<p>切换时间窗口结束时间</p>
 * @method integer getSwitchInterval() 获取<p>多个分片同时发起扩容，并发切换中的切换时间间隔，即当前分片切换开始时间和下一个分片的切换开始时间间隔，不传默认为1。</p><p>取值范围：[1, 180]</p><p>单位：秒</p>
 * @method void setSwitchInterval(integer $SwitchInterval) 设置<p>多个分片同时发起扩容，并发切换中的切换时间间隔，即当前分片切换开始时间和下一个分片的切换开始时间间隔，不传默认为1。</p><p>取值范围：[1, 180]</p><p>单位：秒</p>
 */
class UpgradeDedicatedDCDBInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>升级类型，取值为ADD，SPLIT和EXPAND。ADD-添加分片；SPLIT-切分某个分片；EXPAND-垂直扩容某个分片</p>
     */
    public $UpgradeType;

    /**
     * @var string <p>实例ID，形如 dcdbt-mlfjm74h</p>
     */
    public $InstanceId;

    /**
     * @var AddShardConfig <p>当UpgradeType取值为ADD时，添加分片的配置参数</p>
     */
    public $AddShardConfig;

    /**
     * @var ExpandShardConfig <p>当UpgradeType取值为EXPAND时，垂直扩容分片的配置参数</p>
     */
    public $ExpandShardConfig;

    /**
     * @var SplitShardConfig <p>当UpgradeType取值为SPLIT时，切分分片的配置参数</p>
     */
    public $SplitShardConfig;

    /**
     * @var integer <p>错过切换时间窗口时，是否自动重试一次，0-否，1-是</p>
     */
    public $SwitchAutoRetry;

    /**
     * @var string <p>切换时间窗口开始时间</p>
     */
    public $SwitchStartTime;

    /**
     * @var string <p>切换时间窗口结束时间</p>
     */
    public $SwitchEndTime;

    /**
     * @var integer <p>多个分片同时发起扩容，并发切换中的切换时间间隔，即当前分片切换开始时间和下一个分片的切换开始时间间隔，不传默认为1。</p><p>取值范围：[1, 180]</p><p>单位：秒</p>
     */
    public $SwitchInterval;

    /**
     * @param string $UpgradeType <p>升级类型，取值为ADD，SPLIT和EXPAND。ADD-添加分片；SPLIT-切分某个分片；EXPAND-垂直扩容某个分片</p>
     * @param string $InstanceId <p>实例ID，形如 dcdbt-mlfjm74h</p>
     * @param AddShardConfig $AddShardConfig <p>当UpgradeType取值为ADD时，添加分片的配置参数</p>
     * @param ExpandShardConfig $ExpandShardConfig <p>当UpgradeType取值为EXPAND时，垂直扩容分片的配置参数</p>
     * @param SplitShardConfig $SplitShardConfig <p>当UpgradeType取值为SPLIT时，切分分片的配置参数</p>
     * @param integer $SwitchAutoRetry <p>错过切换时间窗口时，是否自动重试一次，0-否，1-是</p>
     * @param string $SwitchStartTime <p>切换时间窗口开始时间</p>
     * @param string $SwitchEndTime <p>切换时间窗口结束时间</p>
     * @param integer $SwitchInterval <p>多个分片同时发起扩容，并发切换中的切换时间间隔，即当前分片切换开始时间和下一个分片的切换开始时间间隔，不传默认为1。</p><p>取值范围：[1, 180]</p><p>单位：秒</p>
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

        if (array_key_exists("SwitchInterval",$param) and $param["SwitchInterval"] !== null) {
            $this->SwitchInterval = $param["SwitchInterval"];
        }
    }
}
