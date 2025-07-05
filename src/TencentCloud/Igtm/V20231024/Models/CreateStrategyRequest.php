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
 * CreateStrategy请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getStrategyName() 获取策略名称，不允许重复
 * @method void setStrategyName(string $StrategyName) 设置策略名称，不允许重复
 * @method array getSource() 获取解析线路
 * @method void setSource(array $Source) 设置解析线路
 * @method array getMainAddressPoolSet() 获取主力地址池集合，最多允许配置四级
 * @method void setMainAddressPoolSet(array $MainAddressPoolSet) 设置主力地址池集合，最多允许配置四级
 * @method array getFallbackAddressPoolSet() 获取兜底地址池集合，只允许配置一级，且地址池数量为1
 * @method void setFallbackAddressPoolSet(array $FallbackAddressPoolSet) 设置兜底地址池集合，只允许配置一级，且地址池数量为1
 * @method string getKeepDomainRecords() 获取是否开启策略强制保留默认线路 disabled, enabled，默认不开启且只有一个策略能开启
 * @method void setKeepDomainRecords(string $KeepDomainRecords) 设置是否开启策略强制保留默认线路 disabled, enabled，默认不开启且只有一个策略能开启
 * @method string getSwitchPoolType() 获取策略调度模式：AUTO默认切换；STOP仅暂停不切换
 * @method void setSwitchPoolType(string $SwitchPoolType) 设置策略调度模式：AUTO默认切换；STOP仅暂停不切换
 */
class CreateStrategyRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 策略名称，不允许重复
     */
    public $StrategyName;

    /**
     * @var array 解析线路
     */
    public $Source;

    /**
     * @var array 主力地址池集合，最多允许配置四级
     */
    public $MainAddressPoolSet;

    /**
     * @var array 兜底地址池集合，只允许配置一级，且地址池数量为1
     */
    public $FallbackAddressPoolSet;

    /**
     * @var string 是否开启策略强制保留默认线路 disabled, enabled，默认不开启且只有一个策略能开启
     */
    public $KeepDomainRecords;

    /**
     * @var string 策略调度模式：AUTO默认切换；STOP仅暂停不切换
     */
    public $SwitchPoolType;

    /**
     * @param string $InstanceId 实例id
     * @param string $StrategyName 策略名称，不允许重复
     * @param array $Source 解析线路
     * @param array $MainAddressPoolSet 主力地址池集合，最多允许配置四级
     * @param array $FallbackAddressPoolSet 兜底地址池集合，只允许配置一级，且地址池数量为1
     * @param string $KeepDomainRecords 是否开启策略强制保留默认线路 disabled, enabled，默认不开启且只有一个策略能开启
     * @param string $SwitchPoolType 策略调度模式：AUTO默认切换；STOP仅暂停不切换
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

        if (array_key_exists("SwitchPoolType",$param) and $param["SwitchPoolType"] !== null) {
            $this->SwitchPoolType = $param["SwitchPoolType"];
        }
    }
}
