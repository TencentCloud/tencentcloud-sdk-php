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
 * ModifyStrategy请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method integer getStrategyId() 获取策略id
 * @method void setStrategyId(integer $StrategyId) 设置策略id
 * @method array getSource() 获取解析线路，需要全量传参
 * @method void setSource(array $Source) 设置解析线路，需要全量传参
 * @method array getMainAddressPoolSet() 获取主力地址池集合，需要全量传参
 * @method void setMainAddressPoolSet(array $MainAddressPoolSet) 设置主力地址池集合，需要全量传参
 * @method array getFallbackAddressPoolSet() 获取兜底地址池集合，需要全量传参
 * @method void setFallbackAddressPoolSet(array $FallbackAddressPoolSet) 设置兜底地址池集合，需要全量传参
 * @method string getStrategyName() 获取策略名称，不允许重复
 * @method void setStrategyName(string $StrategyName) 设置策略名称，不允许重复
 * @method string getIsEnabled() 获取策略开启状态：ENABLED开启；DISABLED关闭
 * @method void setIsEnabled(string $IsEnabled) 设置策略开启状态：ENABLED开启；DISABLED关闭
 * @method string getKeepDomainRecords() 获取是否开启策略强制保留默认线路 disabled, enabled，默认不开启且只有一个策略能开启
 * @method void setKeepDomainRecords(string $KeepDomainRecords) 设置是否开启策略强制保留默认线路 disabled, enabled，默认不开启且只有一个策略能开启
 * @method string getSwitchPoolType() 获取调度模式：AUTO默认；STOP仅暂停不切换
 * @method void setSwitchPoolType(string $SwitchPoolType) 设置调度模式：AUTO默认；STOP仅暂停不切换
 */
class ModifyStrategyRequest extends AbstractModel
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
     * @var array 解析线路，需要全量传参
     */
    public $Source;

    /**
     * @var array 主力地址池集合，需要全量传参
     */
    public $MainAddressPoolSet;

    /**
     * @var array 兜底地址池集合，需要全量传参
     */
    public $FallbackAddressPoolSet;

    /**
     * @var string 策略名称，不允许重复
     */
    public $StrategyName;

    /**
     * @var string 策略开启状态：ENABLED开启；DISABLED关闭
     */
    public $IsEnabled;

    /**
     * @var string 是否开启策略强制保留默认线路 disabled, enabled，默认不开启且只有一个策略能开启
     */
    public $KeepDomainRecords;

    /**
     * @var string 调度模式：AUTO默认；STOP仅暂停不切换
     */
    public $SwitchPoolType;

    /**
     * @param string $InstanceId 实例id
     * @param integer $StrategyId 策略id
     * @param array $Source 解析线路，需要全量传参
     * @param array $MainAddressPoolSet 主力地址池集合，需要全量传参
     * @param array $FallbackAddressPoolSet 兜底地址池集合，需要全量传参
     * @param string $StrategyName 策略名称，不允许重复
     * @param string $IsEnabled 策略开启状态：ENABLED开启；DISABLED关闭
     * @param string $KeepDomainRecords 是否开启策略强制保留默认线路 disabled, enabled，默认不开启且只有一个策略能开启
     * @param string $SwitchPoolType 调度模式：AUTO默认；STOP仅暂停不切换
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

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
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
    }
}
