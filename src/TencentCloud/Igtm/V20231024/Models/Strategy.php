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
namespace TencentCloud\Igtm\V20231024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地址池
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getName() 获取策略名
 * @method void setName(string $Name) 设置策略名
 * @method array getSource() 获取地址来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(array $Source) 设置地址来源
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStrategyId() 获取策略id
 * @method void setStrategyId(integer $StrategyId) 设置策略id
 * @method string getStatus() 获取健康状态：ok健康、warn风险、down故障
 * @method void setStatus(string $Status) 设置健康状态：ok健康、warn风险、down故障
 * @method integer getActivateMainPoolId() 获取生效的主力池id，null则为未知
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivateMainPoolId(integer $ActivateMainPoolId) 设置生效的主力池id，null则为未知
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getActivateLevel() 获取当前生效地址池所在级数，为0则代表兜底生效，null则为未知
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivateLevel(integer $ActivateLevel) 设置当前生效地址池所在级数，为0则代表兜底生效，null则为未知
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActivePoolType() 获取当前生效地址池集合类型：main主力；fallback兜底
 * @method void setActivePoolType(string $ActivePoolType) 设置当前生效地址池集合类型：main主力；fallback兜底
 * @method string getActiveTrafficStrategy() 获取当前生效地址池流量策略：all解析所有；weight负载均衡
 * @method void setActiveTrafficStrategy(string $ActiveTrafficStrategy) 设置当前生效地址池流量策略：all解析所有；weight负载均衡
 * @method integer getMonitorNum() 获取监控器数量
 * @method void setMonitorNum(integer $MonitorNum) 设置监控器数量
 * @method string getIsEnabled() 获取是否开启：ENABLED开启；DISABLED关闭
 * @method void setIsEnabled(string $IsEnabled) 设置是否开启：ENABLED开启；DISABLED关闭
 * @method string getKeepDomainRecords() 获取是否保留线路：enabled保留，disabled不保留，只保留默认线路
 * @method void setKeepDomainRecords(string $KeepDomainRecords) 设置是否保留线路：enabled保留，disabled不保留，只保留默认线路
 * @method string getSwitchPoolType() 获取调度模式：AUTO默认；PAUSE仅暂停不切换
 * @method void setSwitchPoolType(string $SwitchPoolType) 设置调度模式：AUTO默认；PAUSE仅暂停不切换
 * @method string getCreatedOn() 获取创建时间
 * @method void setCreatedOn(string $CreatedOn) 设置创建时间
 * @method string getUpdatedOn() 获取更新时间
 * @method void setUpdatedOn(string $UpdatedOn) 设置更新时间
 */
class Strategy extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 策略名
     */
    public $Name;

    /**
     * @var array 地址来源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var integer 策略id
     */
    public $StrategyId;

    /**
     * @var string 健康状态：ok健康、warn风险、down故障
     */
    public $Status;

    /**
     * @var integer 生效的主力池id，null则为未知
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivateMainPoolId;

    /**
     * @var integer 当前生效地址池所在级数，为0则代表兜底生效，null则为未知
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivateLevel;

    /**
     * @var string 当前生效地址池集合类型：main主力；fallback兜底
     */
    public $ActivePoolType;

    /**
     * @var string 当前生效地址池流量策略：all解析所有；weight负载均衡
     */
    public $ActiveTrafficStrategy;

    /**
     * @var integer 监控器数量
     */
    public $MonitorNum;

    /**
     * @var string 是否开启：ENABLED开启；DISABLED关闭
     */
    public $IsEnabled;

    /**
     * @var string 是否保留线路：enabled保留，disabled不保留，只保留默认线路
     */
    public $KeepDomainRecords;

    /**
     * @var string 调度模式：AUTO默认；PAUSE仅暂停不切换
     */
    public $SwitchPoolType;

    /**
     * @var string 创建时间
     */
    public $CreatedOn;

    /**
     * @var string 更新时间
     */
    public $UpdatedOn;

    /**
     * @param string $InstanceId 实例id
     * @param string $Name 策略名
     * @param array $Source 地址来源
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StrategyId 策略id
     * @param string $Status 健康状态：ok健康、warn风险、down故障
     * @param integer $ActivateMainPoolId 生效的主力池id，null则为未知
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ActivateLevel 当前生效地址池所在级数，为0则代表兜底生效，null则为未知
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActivePoolType 当前生效地址池集合类型：main主力；fallback兜底
     * @param string $ActiveTrafficStrategy 当前生效地址池流量策略：all解析所有；weight负载均衡
     * @param integer $MonitorNum 监控器数量
     * @param string $IsEnabled 是否开启：ENABLED开启；DISABLED关闭
     * @param string $KeepDomainRecords 是否保留线路：enabled保留，disabled不保留，只保留默认线路
     * @param string $SwitchPoolType 调度模式：AUTO默认；PAUSE仅暂停不切换
     * @param string $CreatedOn 创建时间
     * @param string $UpdatedOn 更新时间
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = [];
            foreach ($param["Source"] as $key => $value){
                $obj = new Source();
                $obj->deserialize($value);
                array_push($this->Source, $obj);
            }
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ActivateMainPoolId",$param) and $param["ActivateMainPoolId"] !== null) {
            $this->ActivateMainPoolId = $param["ActivateMainPoolId"];
        }

        if (array_key_exists("ActivateLevel",$param) and $param["ActivateLevel"] !== null) {
            $this->ActivateLevel = $param["ActivateLevel"];
        }

        if (array_key_exists("ActivePoolType",$param) and $param["ActivePoolType"] !== null) {
            $this->ActivePoolType = $param["ActivePoolType"];
        }

        if (array_key_exists("ActiveTrafficStrategy",$param) and $param["ActiveTrafficStrategy"] !== null) {
            $this->ActiveTrafficStrategy = $param["ActiveTrafficStrategy"];
        }

        if (array_key_exists("MonitorNum",$param) and $param["MonitorNum"] !== null) {
            $this->MonitorNum = $param["MonitorNum"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("KeepDomainRecords",$param) and $param["KeepDomainRecords"] !== null) {
            $this->KeepDomainRecords = $param["KeepDomainRecords"];
        }

        if (array_key_exists("SwitchPoolType",$param) and $param["SwitchPoolType"] !== null) {
            $this->SwitchPoolType = $param["SwitchPoolType"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }
    }
}
