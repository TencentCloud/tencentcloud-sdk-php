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
 * ModifyHostMetricConfig请求参数结构体
 *
 * @method string getTopicId() 获取指标日志主题id。
- 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。注意BizType 0:日志主题（默认值）， 1:指标主题
- 通过 [创建日志主题](https://cloud.tencent.com/document/product/614/56456) 获取日志主题Id。注意BizType 0:日志主题（默认值）， 1:指标主题
 * @method void setTopicId(string $TopicId) 设置指标日志主题id。
- 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。注意BizType 0:日志主题（默认值）， 1:指标主题
- 通过 [创建日志主题](https://cloud.tencent.com/document/product/614/56456) 获取日志主题Id。注意BizType 0:日志主题（默认值）， 1:指标主题
 * @method string getConfigId() 获取采集配置id
 * @method void setConfigId(string $ConfigId) 设置采集配置id
 * @method string getName() 获取名称。

- 长度不超过 64字符。
 * @method void setName(string $Name) 设置名称。

- 长度不超过 64字符。
 * @method array getMachineGroupIds() 获取机器组id列表。最多支持100个机器组。
 * @method void setMachineGroupIds(array $MachineGroupIds) 设置机器组id列表。最多支持100个机器组。
 * @method integer getInterval() 获取采集频率。单位:ms。 最小支持5000ms
 * @method void setInterval(integer $Interval) 设置采集频率。单位:ms。 最小支持5000ms
 * @method array getHostMetricItems() 获取采集项。支持"cpu"，"mem"，"net"，"disk"，"system"。**目前仅支持:所有采集项都需配置**。
- cpu：CPU
- mem：内存
- net：网络
- disk：磁盘
- system：系统

 * @method void setHostMetricItems(array $HostMetricItems) 设置采集项。支持"cpu"，"mem"，"net"，"disk"，"system"。**目前仅支持:所有采集项都需配置**。
- cpu：CPU
- mem：内存
- net：网络
- disk：磁盘
- system：系统
 */
class ModifyHostMetricConfigRequest extends AbstractModel
{
    /**
     * @var string 指标日志主题id。
- 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。注意BizType 0:日志主题（默认值）， 1:指标主题
- 通过 [创建日志主题](https://cloud.tencent.com/document/product/614/56456) 获取日志主题Id。注意BizType 0:日志主题（默认值）， 1:指标主题
     */
    public $TopicId;

    /**
     * @var string 采集配置id
     */
    public $ConfigId;

    /**
     * @var string 名称。

- 长度不超过 64字符。
     */
    public $Name;

    /**
     * @var array 机器组id列表。最多支持100个机器组。
     */
    public $MachineGroupIds;

    /**
     * @var integer 采集频率。单位:ms。 最小支持5000ms
     */
    public $Interval;

    /**
     * @var array 采集项。支持"cpu"，"mem"，"net"，"disk"，"system"。**目前仅支持:所有采集项都需配置**。
- cpu：CPU
- mem：内存
- net：网络
- disk：磁盘
- system：系统

     */
    public $HostMetricItems;

    /**
     * @param string $TopicId 指标日志主题id。
- 通过 [获取日志主题列表](https://cloud.tencent.com/document/product/614/56454) 获取日志主题Id。注意BizType 0:日志主题（默认值）， 1:指标主题
- 通过 [创建日志主题](https://cloud.tencent.com/document/product/614/56456) 获取日志主题Id。注意BizType 0:日志主题（默认值）， 1:指标主题
     * @param string $ConfigId 采集配置id
     * @param string $Name 名称。

- 长度不超过 64字符。
     * @param array $MachineGroupIds 机器组id列表。最多支持100个机器组。
     * @param integer $Interval 采集频率。单位:ms。 最小支持5000ms
     * @param array $HostMetricItems 采集项。支持"cpu"，"mem"，"net"，"disk"，"system"。**目前仅支持:所有采集项都需配置**。
- cpu：CPU
- mem：内存
- net：网络
- disk：磁盘
- system：系统
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MachineGroupIds",$param) and $param["MachineGroupIds"] !== null) {
            $this->MachineGroupIds = $param["MachineGroupIds"];
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
    }
}
