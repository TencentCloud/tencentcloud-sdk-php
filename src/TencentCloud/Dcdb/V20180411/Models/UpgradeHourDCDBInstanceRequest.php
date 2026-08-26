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
 * UpgradeHourDCDBInstance请求参数结构体
 *
 * @method string getInstanceId() 获取<p>待升级的实例ID。形如：dcdbt-ow728lmc，可以通过 DescribeDCDBInstances 查询实例详情获得。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>待升级的实例ID。形如：dcdbt-ow728lmc，可以通过 DescribeDCDBInstances 查询实例详情获得。</p>
 * @method string getUpgradeType() 获取<p>升级类型，取值范围: </p><li> ADD: 新增分片 </li>  <li> EXPAND: 升级实例中的已有分片 </li>  <li> SPLIT: 将已有分片中的数据切分到新增分片上</li>
 * @method void setUpgradeType(string $UpgradeType) 设置<p>升级类型，取值范围: </p><li> ADD: 新增分片 </li>  <li> EXPAND: 升级实例中的已有分片 </li>  <li> SPLIT: 将已有分片中的数据切分到新增分片上</li>
 * @method AddShardConfig getAddShardConfig() 获取<p>新增分片配置，当UpgradeType为ADD时生效。</p>
 * @method void setAddShardConfig(AddShardConfig $AddShardConfig) 设置<p>新增分片配置，当UpgradeType为ADD时生效。</p>
 * @method ExpandShardConfig getExpandShardConfig() 获取<p>扩容分片配置，当UpgradeType为EXPAND时生效。</p>
 * @method void setExpandShardConfig(ExpandShardConfig $ExpandShardConfig) 设置<p>扩容分片配置，当UpgradeType为EXPAND时生效。</p>
 * @method SplitShardConfig getSplitShardConfig() 获取<p>切分分片配置，当UpgradeType为SPLIT时生效。</p>
 * @method void setSplitShardConfig(SplitShardConfig $SplitShardConfig) 设置<p>切分分片配置，当UpgradeType为SPLIT时生效。</p>
 * @method string getSwitchStartTime() 获取<p>切换开始时间，格式如: &quot;2019-12-12 07:00:00&quot;。开始时间必须在当前时间一个小时以后，3天以内。</p>
 * @method void setSwitchStartTime(string $SwitchStartTime) 设置<p>切换开始时间，格式如: &quot;2019-12-12 07:00:00&quot;。开始时间必须在当前时间一个小时以后，3天以内。</p>
 * @method string getSwitchEndTime() 获取<p>切换结束时间,  格式如: &quot;2019-12-12 07:15:00&quot;，结束时间必须大于开始时间。</p>
 * @method void setSwitchEndTime(string $SwitchEndTime) 设置<p>切换结束时间,  格式如: &quot;2019-12-12 07:15:00&quot;，结束时间必须大于开始时间。</p>
 * @method integer getSwitchAutoRetry() 获取<p>是否自动重试。 0：不自动重试  1：自动重试</p>
 * @method void setSwitchAutoRetry(integer $SwitchAutoRetry) 设置<p>是否自动重试。 0：不自动重试  1：自动重试</p>
 * @method array getZones() 获取<p>变更部署时指定的新可用区列表，第1个为主可用区，其余为从可用区</p>
 * @method void setZones(array $Zones) 设置<p>变更部署时指定的新可用区列表，第1个为主可用区，其余为从可用区</p>
 * @method integer getSwitchInterval() 获取<p>多个分片同时发起扩容，并发切换中的切换时间间隔，即当前分片切换开始时间和下一个分片的切换开始时间间隔，不传默认为1。</p><p>取值范围：[1, 180]</p><p>单位：秒</p>
 * @method void setSwitchInterval(integer $SwitchInterval) 设置<p>多个分片同时发起扩容，并发切换中的切换时间间隔，即当前分片切换开始时间和下一个分片的切换开始时间间隔，不传默认为1。</p><p>取值范围：[1, 180]</p><p>单位：秒</p>
 */
class UpgradeHourDCDBInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>待升级的实例ID。形如：dcdbt-ow728lmc，可以通过 DescribeDCDBInstances 查询实例详情获得。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>升级类型，取值范围: </p><li> ADD: 新增分片 </li>  <li> EXPAND: 升级实例中的已有分片 </li>  <li> SPLIT: 将已有分片中的数据切分到新增分片上</li>
     */
    public $UpgradeType;

    /**
     * @var AddShardConfig <p>新增分片配置，当UpgradeType为ADD时生效。</p>
     */
    public $AddShardConfig;

    /**
     * @var ExpandShardConfig <p>扩容分片配置，当UpgradeType为EXPAND时生效。</p>
     */
    public $ExpandShardConfig;

    /**
     * @var SplitShardConfig <p>切分分片配置，当UpgradeType为SPLIT时生效。</p>
     */
    public $SplitShardConfig;

    /**
     * @var string <p>切换开始时间，格式如: &quot;2019-12-12 07:00:00&quot;。开始时间必须在当前时间一个小时以后，3天以内。</p>
     */
    public $SwitchStartTime;

    /**
     * @var string <p>切换结束时间,  格式如: &quot;2019-12-12 07:15:00&quot;，结束时间必须大于开始时间。</p>
     */
    public $SwitchEndTime;

    /**
     * @var integer <p>是否自动重试。 0：不自动重试  1：自动重试</p>
     */
    public $SwitchAutoRetry;

    /**
     * @var array <p>变更部署时指定的新可用区列表，第1个为主可用区，其余为从可用区</p>
     */
    public $Zones;

    /**
     * @var integer <p>多个分片同时发起扩容，并发切换中的切换时间间隔，即当前分片切换开始时间和下一个分片的切换开始时间间隔，不传默认为1。</p><p>取值范围：[1, 180]</p><p>单位：秒</p>
     */
    public $SwitchInterval;

    /**
     * @param string $InstanceId <p>待升级的实例ID。形如：dcdbt-ow728lmc，可以通过 DescribeDCDBInstances 查询实例详情获得。</p>
     * @param string $UpgradeType <p>升级类型，取值范围: </p><li> ADD: 新增分片 </li>  <li> EXPAND: 升级实例中的已有分片 </li>  <li> SPLIT: 将已有分片中的数据切分到新增分片上</li>
     * @param AddShardConfig $AddShardConfig <p>新增分片配置，当UpgradeType为ADD时生效。</p>
     * @param ExpandShardConfig $ExpandShardConfig <p>扩容分片配置，当UpgradeType为EXPAND时生效。</p>
     * @param SplitShardConfig $SplitShardConfig <p>切分分片配置，当UpgradeType为SPLIT时生效。</p>
     * @param string $SwitchStartTime <p>切换开始时间，格式如: &quot;2019-12-12 07:00:00&quot;。开始时间必须在当前时间一个小时以后，3天以内。</p>
     * @param string $SwitchEndTime <p>切换结束时间,  格式如: &quot;2019-12-12 07:15:00&quot;，结束时间必须大于开始时间。</p>
     * @param integer $SwitchAutoRetry <p>是否自动重试。 0：不自动重试  1：自动重试</p>
     * @param array $Zones <p>变更部署时指定的新可用区列表，第1个为主可用区，其余为从可用区</p>
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

        if (array_key_exists("SwitchInterval",$param) and $param["SwitchInterval"] !== null) {
            $this->SwitchInterval = $param["SwitchInterval"];
        }
    }
}
