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
 * UpgradeHourDCDBInstance请求参数结构体
 *
 * @method string getInstanceId() 获取待升级的实例ID。形如：dcdbt-ow728lmc，可以通过 DescribeDCDBInstances 查询实例详情获得。
 * @method void setInstanceId(string $InstanceId) 设置待升级的实例ID。形如：dcdbt-ow728lmc，可以通过 DescribeDCDBInstances 查询实例详情获得。
 * @method string getUpgradeType() 获取升级类型，取值范围: 
<li> ADD: 新增分片 </li> 
 <li> EXPAND: 升级实例中的已有分片 </li> 
 <li> SPLIT: 将已有分片中的数据切分到新增分片上</li>
 * @method void setUpgradeType(string $UpgradeType) 设置升级类型，取值范围: 
<li> ADD: 新增分片 </li> 
 <li> EXPAND: 升级实例中的已有分片 </li> 
 <li> SPLIT: 将已有分片中的数据切分到新增分片上</li>
 * @method AddShardConfig getAddShardConfig() 获取新增分片配置，当UpgradeType为ADD时生效。
 * @method void setAddShardConfig(AddShardConfig $AddShardConfig) 设置新增分片配置，当UpgradeType为ADD时生效。
 * @method ExpandShardConfig getExpandShardConfig() 获取扩容分片配置，当UpgradeType为EXPAND时生效。
 * @method void setExpandShardConfig(ExpandShardConfig $ExpandShardConfig) 设置扩容分片配置，当UpgradeType为EXPAND时生效。
 * @method SplitShardConfig getSplitShardConfig() 获取切分分片配置，当UpgradeType为SPLIT时生效。
 * @method void setSplitShardConfig(SplitShardConfig $SplitShardConfig) 设置切分分片配置，当UpgradeType为SPLIT时生效。
 * @method string getSwitchStartTime() 获取切换开始时间，格式如: "2019-12-12 07:00:00"。开始时间必须在当前时间一个小时以后，3天以内。
 * @method void setSwitchStartTime(string $SwitchStartTime) 设置切换开始时间，格式如: "2019-12-12 07:00:00"。开始时间必须在当前时间一个小时以后，3天以内。
 * @method string getSwitchEndTime() 获取切换结束时间,  格式如: "2019-12-12 07:15:00"，结束时间必须大于开始时间。
 * @method void setSwitchEndTime(string $SwitchEndTime) 设置切换结束时间,  格式如: "2019-12-12 07:15:00"，结束时间必须大于开始时间。
 * @method integer getSwitchAutoRetry() 获取是否自动重试。 0：不自动重试  1：自动重试
 * @method void setSwitchAutoRetry(integer $SwitchAutoRetry) 设置是否自动重试。 0：不自动重试  1：自动重试
 * @method array getZones() 获取变更部署时指定的新可用区列表，第1个为主可用区，其余为从可用区
 * @method void setZones(array $Zones) 设置变更部署时指定的新可用区列表，第1个为主可用区，其余为从可用区
 */
class UpgradeHourDCDBInstanceRequest extends AbstractModel
{
    /**
     * @var string 待升级的实例ID。形如：dcdbt-ow728lmc，可以通过 DescribeDCDBInstances 查询实例详情获得。
     */
    public $InstanceId;

    /**
     * @var string 升级类型，取值范围: 
<li> ADD: 新增分片 </li> 
 <li> EXPAND: 升级实例中的已有分片 </li> 
 <li> SPLIT: 将已有分片中的数据切分到新增分片上</li>
     */
    public $UpgradeType;

    /**
     * @var AddShardConfig 新增分片配置，当UpgradeType为ADD时生效。
     */
    public $AddShardConfig;

    /**
     * @var ExpandShardConfig 扩容分片配置，当UpgradeType为EXPAND时生效。
     */
    public $ExpandShardConfig;

    /**
     * @var SplitShardConfig 切分分片配置，当UpgradeType为SPLIT时生效。
     */
    public $SplitShardConfig;

    /**
     * @var string 切换开始时间，格式如: "2019-12-12 07:00:00"。开始时间必须在当前时间一个小时以后，3天以内。
     */
    public $SwitchStartTime;

    /**
     * @var string 切换结束时间,  格式如: "2019-12-12 07:15:00"，结束时间必须大于开始时间。
     */
    public $SwitchEndTime;

    /**
     * @var integer 是否自动重试。 0：不自动重试  1：自动重试
     */
    public $SwitchAutoRetry;

    /**
     * @var array 变更部署时指定的新可用区列表，第1个为主可用区，其余为从可用区
     */
    public $Zones;

    /**
     * @param string $InstanceId 待升级的实例ID。形如：dcdbt-ow728lmc，可以通过 DescribeDCDBInstances 查询实例详情获得。
     * @param string $UpgradeType 升级类型，取值范围: 
<li> ADD: 新增分片 </li> 
 <li> EXPAND: 升级实例中的已有分片 </li> 
 <li> SPLIT: 将已有分片中的数据切分到新增分片上</li>
     * @param AddShardConfig $AddShardConfig 新增分片配置，当UpgradeType为ADD时生效。
     * @param ExpandShardConfig $ExpandShardConfig 扩容分片配置，当UpgradeType为EXPAND时生效。
     * @param SplitShardConfig $SplitShardConfig 切分分片配置，当UpgradeType为SPLIT时生效。
     * @param string $SwitchStartTime 切换开始时间，格式如: "2019-12-12 07:00:00"。开始时间必须在当前时间一个小时以后，3天以内。
     * @param string $SwitchEndTime 切换结束时间,  格式如: "2019-12-12 07:15:00"，结束时间必须大于开始时间。
     * @param integer $SwitchAutoRetry 是否自动重试。 0：不自动重试  1：自动重试
     * @param array $Zones 变更部署时指定的新可用区列表，第1个为主可用区，其余为从可用区
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

        if (array_key_exists("UpgradeType",$param) and $param["UpgradeType"] !== null) {
            $this->UpgradeType = $param["UpgradeType"];
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

        if (array_key_exists("SwitchStartTime",$param) and $param["SwitchStartTime"] !== null) {
            $this->SwitchStartTime = $param["SwitchStartTime"];
        }

        if (array_key_exists("SwitchEndTime",$param) and $param["SwitchEndTime"] !== null) {
            $this->SwitchEndTime = $param["SwitchEndTime"];
        }

        if (array_key_exists("SwitchAutoRetry",$param) and $param["SwitchAutoRetry"] !== null) {
            $this->SwitchAutoRetry = $param["SwitchAutoRetry"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }
    }
}
