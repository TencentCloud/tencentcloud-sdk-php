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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 计算仓库基础信息（对外 API 响应，DescribeWarehouses 列表结构）.
 *
 * @method string getWarehouseId() 获取<p>仓库 id（格式 "dlc-wh-xxxxxxxx"）.</p>
 * @method void setWarehouseId(string $WarehouseId) 设置<p>仓库 id（格式 "dlc-wh-xxxxxxxx"）.</p>
 * @method string getName() 获取<p>仓库名称，租户内唯一。</p>
 * @method void setName(string $Name) 设置<p>仓库名称，租户内唯一。</p>
 * @method string getCreatorSubUin() 获取<p>创建者子账号 UIN。</p>
 * @method void setCreatorSubUin(string $CreatorSubUin) 设置<p>创建者子账号 UIN。</p>
 * @method string getDescription() 获取<p>仓库描述信息。</p>
 * @method void setDescription(string $Description) 设置<p>仓库描述信息。</p>
 * @method string getState() 获取<p>fermion 合并后的单一状态。取值：STARTING / RUNNING / STOPPING / STOPPED / UPDATING / UNAVAILABLE / DESTROYING（销毁中，只读：不接受任何生命周期操作）。</p>
 * @method void setState(string $State) 设置<p>fermion 合并后的单一状态。取值：STARTING / RUNNING / STOPPING / STOPPED / UPDATING / UNAVAILABLE / DESTROYING（销毁中，只读：不接受任何生命周期操作）。</p>
 * @method string getPartitionCode() 获取<p>资源池编码.</p>
 * @method void setPartitionCode(string $PartitionCode) 设置<p>资源池编码.</p>
 * @method string getPartitionName() 获取<p>资源池展示名（解析不到时为空）.</p>
 * @method void setPartitionName(string $PartitionName) 设置<p>资源池展示名（解析不到时为空）.</p>
 * @method string getQueueName() 获取<p>资源组/队列名。</p>
 * @method void setQueueName(string $QueueName) 设置<p>资源组/队列名。</p>
 * @method integer getCreateTime() 获取<p>创建时间（毫秒时间戳）。</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>创建时间（毫秒时间戳）。</p>
 * @method integer getUpdateTime() 获取<p>最后更新时间（毫秒时间戳）。</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>最后更新时间（毫秒时间戳）。</p>
 * @method integer getActiveClusters() 获取<p>活跃集群数（describe 与 list 均返回）。集群明细等完整快照仅 DescribeWarehouseDetail 的 Observability 返回。</p>
 * @method void setActiveClusters(integer $ActiveClusters) 设置<p>活跃集群数（describe 与 list 均返回）。集群明细等完整快照仅 DescribeWarehouseDetail 的 Observability 返回。</p>
 * @method integer getMinClusters() 获取<p>最小集群数（即最小实例数下限；describe 与 list 均返回）.</p>
 * @method void setMinClusters(integer $MinClusters) 设置<p>最小集群数（即最小实例数下限；describe 与 list 均返回）.</p>
 * @method integer getMaxClusters() 获取<p>最大集群数（即最大实例数上限；describe 与 list 均返回）.</p>
 * @method void setMaxClusters(integer $MaxClusters) 设置<p>最大集群数（即最大实例数上限；describe 与 list 均返回）.</p>
 * @method string getRuntimeCode() 获取<p>运行时/镜像.</p>
 * @method void setRuntimeCode(string $RuntimeCode) 设置<p>运行时/镜像.</p>
 * @method string getRuntimeName() 获取<p>运行时展示名（如 Spark 3.5.5），与 RuntimeCode 配套；解析不到时为空.</p>
 * @method void setRuntimeName(string $RuntimeName) 设置<p>运行时展示名（如 Spark 3.5.5），与 RuntimeCode 配套；解析不到时为空.</p>
 * @method string getSysCatalogVersion() 获取<p>Catalog 版本码.</p>
 * @method void setSysCatalogVersion(string $SysCatalogVersion) 设置<p>Catalog 版本码.</p>
 * @method array getEnvVars() 获取<p>环境变量.</p>
 * @method void setEnvVars(array $EnvVars) 设置<p>环境变量.</p>
 * @method string getRuntimeConf() 获取<p>静态运行参数（RuntimeConf）：spark.* KV 的 JSON 字符串（如 "{\"spark.sql.shuffle.partitions\":\"400\"}"），spark-submit 时生效。</p>
 * @method void setRuntimeConf(string $RuntimeConf) 设置<p>静态运行参数（RuntimeConf）：spark.* KV 的 JSON 字符串（如 "{\"spark.sql.shuffle.partitions\":\"400\"}"），spark-submit 时生效。</p>
 * @method string getDynamicProperties() 获取<p>动态参数（DynamicProperties）：spark.* KV 的 JSON 字符串，运行期生效（会话级，openSession 弱注入，即改即生效）。</p>
 * @method void setDynamicProperties(string $DynamicProperties) 设置<p>动态参数（DynamicProperties）：spark.* KV 的 JSON 字符串，运行期生效（会话级，openSession 弱注入，即改即生效）。</p>
 */
class WarehouseInfo extends AbstractModel
{
    /**
     * @var string <p>仓库 id（格式 "dlc-wh-xxxxxxxx"）.</p>
     */
    public $WarehouseId;

    /**
     * @var string <p>仓库名称，租户内唯一。</p>
     */
    public $Name;

    /**
     * @var string <p>创建者子账号 UIN。</p>
     */
    public $CreatorSubUin;

    /**
     * @var string <p>仓库描述信息。</p>
     */
    public $Description;

    /**
     * @var string <p>fermion 合并后的单一状态。取值：STARTING / RUNNING / STOPPING / STOPPED / UPDATING / UNAVAILABLE / DESTROYING（销毁中，只读：不接受任何生命周期操作）。</p>
     */
    public $State;

    /**
     * @var string <p>资源池编码.</p>
     */
    public $PartitionCode;

    /**
     * @var string <p>资源池展示名（解析不到时为空）.</p>
     */
    public $PartitionName;

    /**
     * @var string <p>资源组/队列名。</p>
     */
    public $QueueName;

    /**
     * @var integer <p>创建时间（毫秒时间戳）。</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>最后更新时间（毫秒时间戳）。</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>活跃集群数（describe 与 list 均返回）。集群明细等完整快照仅 DescribeWarehouseDetail 的 Observability 返回。</p>
     */
    public $ActiveClusters;

    /**
     * @var integer <p>最小集群数（即最小实例数下限；describe 与 list 均返回）.</p>
     */
    public $MinClusters;

    /**
     * @var integer <p>最大集群数（即最大实例数上限；describe 与 list 均返回）.</p>
     */
    public $MaxClusters;

    /**
     * @var string <p>运行时/镜像.</p>
     */
    public $RuntimeCode;

    /**
     * @var string <p>运行时展示名（如 Spark 3.5.5），与 RuntimeCode 配套；解析不到时为空.</p>
     */
    public $RuntimeName;

    /**
     * @var string <p>Catalog 版本码.</p>
     */
    public $SysCatalogVersion;

    /**
     * @var array <p>环境变量.</p>
     */
    public $EnvVars;

    /**
     * @var string <p>静态运行参数（RuntimeConf）：spark.* KV 的 JSON 字符串（如 "{\"spark.sql.shuffle.partitions\":\"400\"}"），spark-submit 时生效。</p>
     */
    public $RuntimeConf;

    /**
     * @var string <p>动态参数（DynamicProperties）：spark.* KV 的 JSON 字符串，运行期生效（会话级，openSession 弱注入，即改即生效）。</p>
     */
    public $DynamicProperties;

    /**
     * @param string $WarehouseId <p>仓库 id（格式 "dlc-wh-xxxxxxxx"）.</p>
     * @param string $Name <p>仓库名称，租户内唯一。</p>
     * @param string $CreatorSubUin <p>创建者子账号 UIN。</p>
     * @param string $Description <p>仓库描述信息。</p>
     * @param string $State <p>fermion 合并后的单一状态。取值：STARTING / RUNNING / STOPPING / STOPPED / UPDATING / UNAVAILABLE / DESTROYING（销毁中，只读：不接受任何生命周期操作）。</p>
     * @param string $PartitionCode <p>资源池编码.</p>
     * @param string $PartitionName <p>资源池展示名（解析不到时为空）.</p>
     * @param string $QueueName <p>资源组/队列名。</p>
     * @param integer $CreateTime <p>创建时间（毫秒时间戳）。</p>
     * @param integer $UpdateTime <p>最后更新时间（毫秒时间戳）。</p>
     * @param integer $ActiveClusters <p>活跃集群数（describe 与 list 均返回）。集群明细等完整快照仅 DescribeWarehouseDetail 的 Observability 返回。</p>
     * @param integer $MinClusters <p>最小集群数（即最小实例数下限；describe 与 list 均返回）.</p>
     * @param integer $MaxClusters <p>最大集群数（即最大实例数上限；describe 与 list 均返回）.</p>
     * @param string $RuntimeCode <p>运行时/镜像.</p>
     * @param string $RuntimeName <p>运行时展示名（如 Spark 3.5.5），与 RuntimeCode 配套；解析不到时为空.</p>
     * @param string $SysCatalogVersion <p>Catalog 版本码.</p>
     * @param array $EnvVars <p>环境变量.</p>
     * @param string $RuntimeConf <p>静态运行参数（RuntimeConf）：spark.* KV 的 JSON 字符串（如 "{\"spark.sql.shuffle.partitions\":\"400\"}"），spark-submit 时生效。</p>
     * @param string $DynamicProperties <p>动态参数（DynamicProperties）：spark.* KV 的 JSON 字符串，运行期生效（会话级，openSession 弱注入，即改即生效）。</p>
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
        if (array_key_exists("WarehouseId",$param) and $param["WarehouseId"] !== null) {
            $this->WarehouseId = $param["WarehouseId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CreatorSubUin",$param) and $param["CreatorSubUin"] !== null) {
            $this->CreatorSubUin = $param["CreatorSubUin"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("PartitionCode",$param) and $param["PartitionCode"] !== null) {
            $this->PartitionCode = $param["PartitionCode"];
        }

        if (array_key_exists("PartitionName",$param) and $param["PartitionName"] !== null) {
            $this->PartitionName = $param["PartitionName"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ActiveClusters",$param) and $param["ActiveClusters"] !== null) {
            $this->ActiveClusters = $param["ActiveClusters"];
        }

        if (array_key_exists("MinClusters",$param) and $param["MinClusters"] !== null) {
            $this->MinClusters = $param["MinClusters"];
        }

        if (array_key_exists("MaxClusters",$param) and $param["MaxClusters"] !== null) {
            $this->MaxClusters = $param["MaxClusters"];
        }

        if (array_key_exists("RuntimeCode",$param) and $param["RuntimeCode"] !== null) {
            $this->RuntimeCode = $param["RuntimeCode"];
        }

        if (array_key_exists("RuntimeName",$param) and $param["RuntimeName"] !== null) {
            $this->RuntimeName = $param["RuntimeName"];
        }

        if (array_key_exists("SysCatalogVersion",$param) and $param["SysCatalogVersion"] !== null) {
            $this->SysCatalogVersion = $param["SysCatalogVersion"];
        }

        if (array_key_exists("EnvVars",$param) and $param["EnvVars"] !== null) {
            $this->EnvVars = [];
            foreach ($param["EnvVars"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->EnvVars, $obj);
            }
        }

        if (array_key_exists("RuntimeConf",$param) and $param["RuntimeConf"] !== null) {
            $this->RuntimeConf = $param["RuntimeConf"];
        }

        if (array_key_exists("DynamicProperties",$param) and $param["DynamicProperties"] !== null) {
            $this->DynamicProperties = $param["DynamicProperties"];
        }
    }
}
