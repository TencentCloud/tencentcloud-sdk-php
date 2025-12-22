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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主机指标采集配置
 *
 * @method string getConfigId() 获取采集配置 id
 * @method void setConfigId(string $ConfigId) 设置采集配置 id
 * @method string getName() 获取采集配置名称
 * @method void setName(string $Name) 设置采集配置名称
 * @method integer getInterval() 获取采集频率,单位ms
 * @method void setInterval(integer $Interval) 设置采集频率,单位ms
 * @method array getHostMetricItems() 获取采集项.
 * @method void setHostMetricItems(array $HostMetricItems) 设置采集项.
 * @method array getMachineGroupIds() 获取机器组 id 列表
 * @method void setMachineGroupIds(array $MachineGroupIds) 设置机器组 id 列表
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method integer getUpdateTime() 获取修改时间
 * @method void setUpdateTime(integer $UpdateTime) 设置修改时间
 */
class HostMetricConfig extends AbstractModel
{
    /**
     * @var string 采集配置 id
     */
    public $ConfigId;

    /**
     * @var string 采集配置名称
     */
    public $Name;

    /**
     * @var integer 采集频率,单位ms
     */
    public $Interval;

    /**
     * @var array 采集项.
     */
    public $HostMetricItems;

    /**
     * @var array 机器组 id 列表
     */
    public $MachineGroupIds;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 修改时间
     */
    public $UpdateTime;

    /**
     * @param string $ConfigId 采集配置 id
     * @param string $Name 采集配置名称
     * @param integer $Interval 采集频率,单位ms
     * @param array $HostMetricItems 采集项.
     * @param array $MachineGroupIds 机器组 id 列表
     * @param integer $CreateTime 创建时间
     * @param integer $UpdateTime 修改时间
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("HostMetricItems",$param) and $param["HostMetricItems"] !== null) {
            $this->HostMetricItems = [];
            foreach ($param["HostMetricItems"] as $key => $value){
                $obj = new HostMetricItem();
                $obj->deserialize($value);
                array_push($this->HostMetricItems, $obj);
            }
        }

        if (array_key_exists("MachineGroupIds",$param) and $param["MachineGroupIds"] !== null) {
            $this->MachineGroupIds = $param["MachineGroupIds"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
