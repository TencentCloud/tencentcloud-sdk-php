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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeClusterInstances请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID（请登录 <a href="https://console.cloud.tencent.com/tke2">TKE 控制台</a> 获取集群 ID ）</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID（请登录 <a href="https://console.cloud.tencent.com/tke2">TKE 控制台</a> 获取集群 ID ）</p>
 * @method string getOperation() 获取<p>create 表示开始一次升级任务<br>pause 表示停止任务<br>resume表示继续任务<br>abort表示终止任务</p>
 * @method void setOperation(string $Operation) 设置<p>create 表示开始一次升级任务<br>pause 表示停止任务<br>resume表示继续任务<br>abort表示终止任务</p>
 * @method string getUpgradeType() 获取<p>升级类型，只有Operation是create需要设置<br>reset 大版本重装升级<br>hot 小版本热升级<br>major 大版本原地升级</p>
 * @method void setUpgradeType(string $UpgradeType) 设置<p>升级类型，只有Operation是create需要设置<br>reset 大版本重装升级<br>hot 小版本热升级<br>major 大版本原地升级</p>
 * @method array getInstanceIds() 获取<p>需要升级的节点列表，可以通过控制台或 <a href="https://cloud.tencent.com/document/api/457/50366">查询待升级节点接口</a> 获取</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>需要升级的节点列表，可以通过控制台或 <a href="https://cloud.tencent.com/document/api/457/50366">查询待升级节点接口</a> 获取</p>
 * @method UpgradeNodeResetParam getResetParam() 获取<p>当节点重新加入集群时候所使用的参数，参考添加已有节点接口</p>
 * @method void setResetParam(UpgradeNodeResetParam $ResetParam) 设置<p>当节点重新加入集群时候所使用的参数，参考添加已有节点接口</p>
 * @method boolean getSkipPreCheck() 获取<p>是否忽略节点升级前检查，默认值 false</p>
 * @method void setSkipPreCheck(boolean $SkipPreCheck) 设置<p>是否忽略节点升级前检查，默认值 false</p>
 * @method float getMaxNotReadyPercent() 获取<p>最大可容忍的不可用Pod百分比，如果设置 0 表示不做校验</p><p>取值范围：[0, 100]</p><p>默认值：20</p>
 * @method void setMaxNotReadyPercent(float $MaxNotReadyPercent) 设置<p>最大可容忍的不可用Pod百分比，如果设置 0 表示不做校验</p><p>取值范围：[0, 100]</p><p>默认值：20</p>
 * @method boolean getUpgradeRunTime() 获取<p>是否升级节点运行时，默认false不升级</p>
 * @method void setUpgradeRunTime(boolean $UpgradeRunTime) 设置<p>是否升级节点运行时，默认false不升级</p>
 * @method integer getConcurrent() 获取<p>支持多个节点并行升级，默认值为 1，最大并行数为15</p>
 * @method void setConcurrent(integer $Concurrent) 设置<p>支持多个节点并行升级，默认值为 1，最大并行数为15</p>
 */
class UpgradeClusterInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID（请登录 <a href="https://console.cloud.tencent.com/tke2">TKE 控制台</a> 获取集群 ID ）</p>
     */
    public $ClusterId;

    /**
     * @var string <p>create 表示开始一次升级任务<br>pause 表示停止任务<br>resume表示继续任务<br>abort表示终止任务</p>
     */
    public $Operation;

    /**
     * @var string <p>升级类型，只有Operation是create需要设置<br>reset 大版本重装升级<br>hot 小版本热升级<br>major 大版本原地升级</p>
     */
    public $UpgradeType;

    /**
     * @var array <p>需要升级的节点列表，可以通过控制台或 <a href="https://cloud.tencent.com/document/api/457/50366">查询待升级节点接口</a> 获取</p>
     */
    public $InstanceIds;

    /**
     * @var UpgradeNodeResetParam <p>当节点重新加入集群时候所使用的参数，参考添加已有节点接口</p>
     */
    public $ResetParam;

    /**
     * @var boolean <p>是否忽略节点升级前检查，默认值 false</p>
     */
    public $SkipPreCheck;

    /**
     * @var float <p>最大可容忍的不可用Pod百分比，如果设置 0 表示不做校验</p><p>取值范围：[0, 100]</p><p>默认值：20</p>
     */
    public $MaxNotReadyPercent;

    /**
     * @var boolean <p>是否升级节点运行时，默认false不升级</p>
     */
    public $UpgradeRunTime;

    /**
     * @var integer <p>支持多个节点并行升级，默认值为 1，最大并行数为15</p>
     */
    public $Concurrent;

    /**
     * @param string $ClusterId <p>集群ID（请登录 <a href="https://console.cloud.tencent.com/tke2">TKE 控制台</a> 获取集群 ID ）</p>
     * @param string $Operation <p>create 表示开始一次升级任务<br>pause 表示停止任务<br>resume表示继续任务<br>abort表示终止任务</p>
     * @param string $UpgradeType <p>升级类型，只有Operation是create需要设置<br>reset 大版本重装升级<br>hot 小版本热升级<br>major 大版本原地升级</p>
     * @param array $InstanceIds <p>需要升级的节点列表，可以通过控制台或 <a href="https://cloud.tencent.com/document/api/457/50366">查询待升级节点接口</a> 获取</p>
     * @param UpgradeNodeResetParam $ResetParam <p>当节点重新加入集群时候所使用的参数，参考添加已有节点接口</p>
     * @param boolean $SkipPreCheck <p>是否忽略节点升级前检查，默认值 false</p>
     * @param float $MaxNotReadyPercent <p>最大可容忍的不可用Pod百分比，如果设置 0 表示不做校验</p><p>取值范围：[0, 100]</p><p>默认值：20</p>
     * @param boolean $UpgradeRunTime <p>是否升级节点运行时，默认false不升级</p>
     * @param integer $Concurrent <p>支持多个节点并行升级，默认值为 1，最大并行数为15</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("UpgradeType",$param) and $param["UpgradeType"] !== null) {
            $this->UpgradeType = $param["UpgradeType"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ResetParam",$param) and $param["ResetParam"] !== null) {
            $this->ResetParam = new UpgradeNodeResetParam();
            $this->ResetParam->deserialize($param["ResetParam"]);
        }

        if (array_key_exists("SkipPreCheck",$param) and $param["SkipPreCheck"] !== null) {
            $this->SkipPreCheck = $param["SkipPreCheck"];
        }

        if (array_key_exists("MaxNotReadyPercent",$param) and $param["MaxNotReadyPercent"] !== null) {
            $this->MaxNotReadyPercent = $param["MaxNotReadyPercent"];
        }

        if (array_key_exists("UpgradeRunTime",$param) and $param["UpgradeRunTime"] !== null) {
            $this->UpgradeRunTime = $param["UpgradeRunTime"];
        }

        if (array_key_exists("Concurrent",$param) and $param["Concurrent"] !== null) {
            $this->Concurrent = $param["Concurrent"];
        }
    }
}
