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
 * 策略详情
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method integer getStrategyId() 获取策略id
 * @method void setStrategyId(integer $StrategyId) 设置策略id
 * @method string getName() 获取策略名
 * @method void setName(string $Name) 设置策略名
 * @method array getSource() 获取线路
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(array $Source) 设置线路
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMainAddressPoolSet() 获取主力地址池集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMainAddressPoolSet(array $MainAddressPoolSet) 设置主力地址池集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFallbackAddressPoolSet() 获取兜底地址池id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFallbackAddressPoolSet(array $FallbackAddressPoolSet) 设置兜底地址池id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKeepDomainRecords() 获取是否保留线路：enabled保留，disabled不保留，只保留默认线路
 * @method void setKeepDomainRecords(string $KeepDomainRecords) 设置是否保留线路：enabled保留，disabled不保留，只保留默认线路
 * @method integer getActivateMainPoolId() 获取生效主力地址池id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActivateMainPoolId(integer $ActivateMainPoolId) 设置生效主力地址池id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedOn() 获取创建时间
 * @method void setCreatedOn(string $CreatedOn) 设置创建时间
 * @method string getUpdatedOn() 获取更新时间
 * @method void setUpdatedOn(string $UpdatedOn) 设置更新时间
 * @method string getSwitchPoolType() 获取调度模式：AUTO默认；PAUSE仅暂停不切换
 * @method void setSwitchPoolType(string $SwitchPoolType) 设置调度模式：AUTO默认；PAUSE仅暂停不切换
 */
class StrategyDetail extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var integer 策略id
     */
    public $StrategyId;

    /**
     * @var string 策略名
     */
    public $Name;

    /**
     * @var array 线路
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var array 主力地址池集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MainAddressPoolSet;

    /**
     * @var array 兜底地址池id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FallbackAddressPoolSet;

    /**
     * @var string 是否保留线路：enabled保留，disabled不保留，只保留默认线路
     */
    public $KeepDomainRecords;

    /**
     * @var integer 生效主力地址池id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActivateMainPoolId;

    /**
     * @var string 创建时间
     */
    public $CreatedOn;

    /**
     * @var string 更新时间
     */
    public $UpdatedOn;

    /**
     * @var string 调度模式：AUTO默认；PAUSE仅暂停不切换
     */
    public $SwitchPoolType;

    /**
     * @param string $InstanceId 实例id
     * @param integer $StrategyId 策略id
     * @param string $Name 策略名
     * @param array $Source 线路
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MainAddressPoolSet 主力地址池集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FallbackAddressPoolSet 兜底地址池id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KeepDomainRecords 是否保留线路：enabled保留，disabled不保留，只保留默认线路
     * @param integer $ActivateMainPoolId 生效主力地址池id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedOn 创建时间
     * @param string $UpdatedOn 更新时间
     * @param string $SwitchPoolType 调度模式：AUTO默认；PAUSE仅暂停不切换
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

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
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

        if (array_key_exists("MainAddressPoolSet",$param) and $param["MainAddressPoolSet"] !== null) {
            $this->MainAddressPoolSet = [];
            foreach ($param["MainAddressPoolSet"] as $key => $value){
                $obj = new MainAddressPool();
                $obj->deserialize($value);
                array_push($this->MainAddressPoolSet, $obj);
            }
        }

        if (array_key_exists("FallbackAddressPoolSet",$param) and $param["FallbackAddressPoolSet"] !== null) {
            $this->FallbackAddressPoolSet = [];
            foreach ($param["FallbackAddressPoolSet"] as $key => $value){
                $obj = new MainAddressPool();
                $obj->deserialize($value);
                array_push($this->FallbackAddressPoolSet, $obj);
            }
        }

        if (array_key_exists("KeepDomainRecords",$param) and $param["KeepDomainRecords"] !== null) {
            $this->KeepDomainRecords = $param["KeepDomainRecords"];
        }

        if (array_key_exists("ActivateMainPoolId",$param) and $param["ActivateMainPoolId"] !== null) {
            $this->ActivateMainPoolId = $param["ActivateMainPoolId"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }

        if (array_key_exists("SwitchPoolType",$param) and $param["SwitchPoolType"] !== null) {
            $this->SwitchPoolType = $param["SwitchPoolType"];
        }
    }
}
