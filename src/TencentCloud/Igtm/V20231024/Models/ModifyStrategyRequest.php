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
 * @method string getInstanceId() 获取<p>实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id</p>
 * @method integer getStrategyId() 获取<p>策略id</p>
 * @method void setStrategyId(integer $StrategyId) 设置<p>策略id</p>
 * @method array getSource() 获取<p>解析线路，需要全量传参</p>
 * @method void setSource(array $Source) 设置<p>解析线路，需要全量传参</p>
 * @method array getMainAddressPoolSet() 获取<p>主力地址池集合，需要全量传参</p>
 * @method void setMainAddressPoolSet(array $MainAddressPoolSet) 设置<p>主力地址池集合，需要全量传参</p>
 * @method array getFallbackAddressPoolSet() 获取<p>兜底地址池集合，需要全量传参</p>
 * @method void setFallbackAddressPoolSet(array $FallbackAddressPoolSet) 设置<p>兜底地址池集合，需要全量传参</p>
 * @method string getStrategyName() 获取<p>策略名称，不允许重复</p>
 * @method void setStrategyName(string $StrategyName) 设置<p>策略名称，不允许重复</p>
 * @method string getIsEnabled() 获取<p>策略开启状态：ENABLED开启；DISABLED关闭</p>
 * @method void setIsEnabled(string $IsEnabled) 设置<p>策略开启状态：ENABLED开启；DISABLED关闭</p>
 * @method string getKeepDomainRecords() 获取<p>是否开启策略强制保留默认线路 disabled, enabled，默认不开启且只有一个策略能开启</p>
 * @method void setKeepDomainRecords(string $KeepDomainRecords) 设置<p>是否开启策略强制保留默认线路 disabled, enabled，默认不开启且只有一个策略能开启</p>
 * @method string getSwitchPoolType() 获取<p>调度模式：AUTO默认；STOP仅暂停不切换</p>
 * @method void setSwitchPoolType(string $SwitchPoolType) 设置<p>调度模式：AUTO默认；STOP仅暂停不切换</p>
 * @method boolean getKeepResource() 获取<p>是否保留资源</p><p>枚举值：</p><ul><li>false： 全量操作，会有删除逻辑</li><li>true： 不会删除原有资源</li></ul>
 * @method void setKeepResource(boolean $KeepResource) 设置<p>是否保留资源</p><p>枚举值：</p><ul><li>false： 全量操作，会有删除逻辑</li><li>true： 不会删除原有资源</li></ul>
 */
class ModifyStrategyRequest extends AbstractModel
{
    /**
     * @var string <p>实例id</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>策略id</p>
     */
    public $StrategyId;

    /**
     * @var array <p>解析线路，需要全量传参</p>
     */
    public $Source;

    /**
     * @var array <p>主力地址池集合，需要全量传参</p>
     */
    public $MainAddressPoolSet;

    /**
     * @var array <p>兜底地址池集合，需要全量传参</p>
     */
    public $FallbackAddressPoolSet;

    /**
     * @var string <p>策略名称，不允许重复</p>
     */
    public $StrategyName;

    /**
     * @var string <p>策略开启状态：ENABLED开启；DISABLED关闭</p>
     */
    public $IsEnabled;

    /**
     * @var string <p>是否开启策略强制保留默认线路 disabled, enabled，默认不开启且只有一个策略能开启</p>
     */
    public $KeepDomainRecords;

    /**
     * @var string <p>调度模式：AUTO默认；STOP仅暂停不切换</p>
     */
    public $SwitchPoolType;

    /**
     * @var boolean <p>是否保留资源</p><p>枚举值：</p><ul><li>false： 全量操作，会有删除逻辑</li><li>true： 不会删除原有资源</li></ul>
     */
    public $KeepResource;

    /**
     * @param string $InstanceId <p>实例id</p>
     * @param integer $StrategyId <p>策略id</p>
     * @param array $Source <p>解析线路，需要全量传参</p>
     * @param array $MainAddressPoolSet <p>主力地址池集合，需要全量传参</p>
     * @param array $FallbackAddressPoolSet <p>兜底地址池集合，需要全量传参</p>
     * @param string $StrategyName <p>策略名称，不允许重复</p>
     * @param string $IsEnabled <p>策略开启状态：ENABLED开启；DISABLED关闭</p>
     * @param string $KeepDomainRecords <p>是否开启策略强制保留默认线路 disabled, enabled，默认不开启且只有一个策略能开启</p>
     * @param string $SwitchPoolType <p>调度模式：AUTO默认；STOP仅暂停不切换</p>
     * @param boolean $KeepResource <p>是否保留资源</p><p>枚举值：</p><ul><li>false： 全量操作，会有删除逻辑</li><li>true： 不会删除原有资源</li></ul>
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

        if (array_key_exists("KeepResource",$param) and $param["KeepResource"] !== null) {
            $this->KeepResource = $param["KeepResource"];
        }
    }
}
