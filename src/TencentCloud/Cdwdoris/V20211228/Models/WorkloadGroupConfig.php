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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源组相关配置
 *
 * @method string getWorkloadGroupName() 获取<p>资源组名称</p>
 * @method void setWorkloadGroupName(string $WorkloadGroupName) 设置<p>资源组名称</p>
 * @method integer getCpuShare() 获取<p>CPU权重</p>
 * @method void setCpuShare(integer $CpuShare) 设置<p>CPU权重</p>
 * @method integer getMemoryLimit() 获取<p>内存限制，所有资源组的内存限制值之和应该小于等于100</p>
 * @method void setMemoryLimit(integer $MemoryLimit) 设置<p>内存限制，所有资源组的内存限制值之和应该小于等于100</p>
 * @method boolean getEnableMemoryOverCommit() 获取<p>是否允许超配分配</p>
 * @method void setEnableMemoryOverCommit(boolean $EnableMemoryOverCommit) 设置<p>是否允许超配分配</p>
 * @method string getCpuHardLimit() 获取<p>cpu硬限制</p>
 * @method void setCpuHardLimit(string $CpuHardLimit) 设置<p>cpu硬限制</p>
 * @method integer getMinCpuPercent() 获取<p>4.1+ 新增；默认值为 0（不预留），根据业务可设为 5/10</p>
 * @method void setMinCpuPercent(integer $MinCpuPercent) 设置<p>4.1+ 新增；默认值为 0（不预留），根据业务可设为 5/10</p>
 * @method integer getMinMemoryPercent() 获取<p>4.1+ 新增；默认值为 0（不预留），根据业务可设为 5/10</p>
 * @method void setMinMemoryPercent(integer $MinMemoryPercent) 设置<p>4.1+ 新增；默认值为 0（不预留），根据业务可设为 5/10</p>
 * @method integer getMaxConcurrencyNum() 获取<p>2.1+ 新增；不传走内核默认（Integer.MAX_VALUE=2147483647），建议按业务并发量配置</p>
 * @method void setMaxConcurrencyNum(integer $MaxConcurrencyNum) 设置<p>2.1+ 新增；不传走内核默认（Integer.MAX_VALUE=2147483647），建议按业务并发量配置</p>
 * @method integer getMaxQueueSize() 获取<p>2.1+ 新增；0=不排队，建议为 MaxConcurrencyNum 的 50%</p>
 * @method void setMaxQueueSize(integer $MaxQueueSize) 设置<p>2.1+ 新增；0=不排队，建议为 MaxConcurrencyNum 的 50%</p>
 * @method integer getQueueTimeout() 获取<p>2.1+ 新增；单位 ms，建议 5000（5s）</p>
 * @method void setQueueTimeout(integer $QueueTimeout) 设置<p>2.1+ 新增；单位 ms，建议 5000（5s）</p>
 */
class WorkloadGroupConfig extends AbstractModel
{
    /**
     * @var string <p>资源组名称</p>
     */
    public $WorkloadGroupName;

    /**
     * @var integer <p>CPU权重</p>
     */
    public $CpuShare;

    /**
     * @var integer <p>内存限制，所有资源组的内存限制值之和应该小于等于100</p>
     */
    public $MemoryLimit;

    /**
     * @var boolean <p>是否允许超配分配</p>
     */
    public $EnableMemoryOverCommit;

    /**
     * @var string <p>cpu硬限制</p>
     */
    public $CpuHardLimit;

    /**
     * @var integer <p>4.1+ 新增；默认值为 0（不预留），根据业务可设为 5/10</p>
     */
    public $MinCpuPercent;

    /**
     * @var integer <p>4.1+ 新增；默认值为 0（不预留），根据业务可设为 5/10</p>
     */
    public $MinMemoryPercent;

    /**
     * @var integer <p>2.1+ 新增；不传走内核默认（Integer.MAX_VALUE=2147483647），建议按业务并发量配置</p>
     */
    public $MaxConcurrencyNum;

    /**
     * @var integer <p>2.1+ 新增；0=不排队，建议为 MaxConcurrencyNum 的 50%</p>
     */
    public $MaxQueueSize;

    /**
     * @var integer <p>2.1+ 新增；单位 ms，建议 5000（5s）</p>
     */
    public $QueueTimeout;

    /**
     * @param string $WorkloadGroupName <p>资源组名称</p>
     * @param integer $CpuShare <p>CPU权重</p>
     * @param integer $MemoryLimit <p>内存限制，所有资源组的内存限制值之和应该小于等于100</p>
     * @param boolean $EnableMemoryOverCommit <p>是否允许超配分配</p>
     * @param string $CpuHardLimit <p>cpu硬限制</p>
     * @param integer $MinCpuPercent <p>4.1+ 新增；默认值为 0（不预留），根据业务可设为 5/10</p>
     * @param integer $MinMemoryPercent <p>4.1+ 新增；默认值为 0（不预留），根据业务可设为 5/10</p>
     * @param integer $MaxConcurrencyNum <p>2.1+ 新增；不传走内核默认（Integer.MAX_VALUE=2147483647），建议按业务并发量配置</p>
     * @param integer $MaxQueueSize <p>2.1+ 新增；0=不排队，建议为 MaxConcurrencyNum 的 50%</p>
     * @param integer $QueueTimeout <p>2.1+ 新增；单位 ms，建议 5000（5s）</p>
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
        if (array_key_exists("WorkloadGroupName",$param) and $param["WorkloadGroupName"] !== null) {
            $this->WorkloadGroupName = $param["WorkloadGroupName"];
        }

        if (array_key_exists("CpuShare",$param) and $param["CpuShare"] !== null) {
            $this->CpuShare = $param["CpuShare"];
        }

        if (array_key_exists("MemoryLimit",$param) and $param["MemoryLimit"] !== null) {
            $this->MemoryLimit = $param["MemoryLimit"];
        }

        if (array_key_exists("EnableMemoryOverCommit",$param) and $param["EnableMemoryOverCommit"] !== null) {
            $this->EnableMemoryOverCommit = $param["EnableMemoryOverCommit"];
        }

        if (array_key_exists("CpuHardLimit",$param) and $param["CpuHardLimit"] !== null) {
            $this->CpuHardLimit = $param["CpuHardLimit"];
        }

        if (array_key_exists("MinCpuPercent",$param) and $param["MinCpuPercent"] !== null) {
            $this->MinCpuPercent = $param["MinCpuPercent"];
        }

        if (array_key_exists("MinMemoryPercent",$param) and $param["MinMemoryPercent"] !== null) {
            $this->MinMemoryPercent = $param["MinMemoryPercent"];
        }

        if (array_key_exists("MaxConcurrencyNum",$param) and $param["MaxConcurrencyNum"] !== null) {
            $this->MaxConcurrencyNum = $param["MaxConcurrencyNum"];
        }

        if (array_key_exists("MaxQueueSize",$param) and $param["MaxQueueSize"] !== null) {
            $this->MaxQueueSize = $param["MaxQueueSize"];
        }

        if (array_key_exists("QueueTimeout",$param) and $param["QueueTimeout"] !== null) {
            $this->QueueTimeout = $param["QueueTimeout"];
        }
    }
}
