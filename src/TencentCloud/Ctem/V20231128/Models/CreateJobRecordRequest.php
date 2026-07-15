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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateJobRecord请求参数结构体
 *
 * @method integer getCustomerId() 获取<p>企业ID</p>
 * @method void setCustomerId(integer $CustomerId) 设置<p>企业ID</p>
 * @method string getTaskType() 获取<p>任务类型：即时任务</p>
 * @method void setTaskType(string $TaskType) 设置<p>任务类型：即时任务</p>
 * @method string getScanType() 获取<p>资产收集、漏洞信息、弱口令、目录爆破、暗网泄露、Github泄露、文库网盘泄露、敏感信息泄露，其中资产收集必包含，多个用英文逗号隔离，例如：资产收集,漏洞信息</p>
 * @method void setScanType(string $ScanType) 设置<p>资产收集、漏洞信息、弱口令、目录爆破、暗网泄露、Github泄露、文库网盘泄露、敏感信息泄露，其中资产收集必包含，多个用英文逗号隔离，例如：资产收集,漏洞信息</p>
 * @method integer getQps() 获取<p>qps设置</p>
 * @method void setQps(integer $Qps) 设置<p>qps设置</p>
 * @method boolean getIsIncludeFullScan() 获取<p>是否包含完整扫描</p>
 * @method void setIsIncludeFullScan(boolean $IsIncludeFullScan) 设置<p>是否包含完整扫描</p>
 * @method integer getPortScanQps() 获取<p>端口扫描 QPS，默认 100，下限 10，保守值 200，上限 5000</p><p>默认值：100</p>
 * @method void setPortScanQps(integer $PortScanQps) 设置<p>端口扫描 QPS，默认 100，下限 10，保守值 200，上限 5000</p><p>默认值：100</p>
 * @method integer getSingleIPTaskLimit() 获取<p>单 IP 任务并发数，默认 1，下限 1，保守值 3，上限 10</p><p>默认值：1</p>
 * @method void setSingleIPTaskLimit(integer $SingleIPTaskLimit) 设置<p>单 IP 任务并发数，默认 1，下限 1，保守值 3，上限 10</p><p>默认值：1</p>
 * @method boolean getHighRiskAck() 获取<p>任一速率超过保守值时必须为 true，否则参数错误</p>
 * @method void setHighRiskAck(boolean $HighRiskAck) 设置<p>任一速率超过保守值时必须为 true，否则参数错误</p>
 * @method array getScanRateAckChecklist() 获取<p>知情同意勾选清单，用于审计回放</p>
 * @method void setScanRateAckChecklist(array $ScanRateAckChecklist) 设置<p>知情同意勾选清单，用于审计回放</p>
 * @method ScanPriorityReq getScanPriority() 获取<p>扫描优先级配置</p>
 * @method void setScanPriority(ScanPriorityReq $ScanPriority) 设置<p>扫描优先级配置</p>
 */
class CreateJobRecordRequest extends AbstractModel
{
    /**
     * @var integer <p>企业ID</p>
     */
    public $CustomerId;

    /**
     * @var string <p>任务类型：即时任务</p>
     */
    public $TaskType;

    /**
     * @var string <p>资产收集、漏洞信息、弱口令、目录爆破、暗网泄露、Github泄露、文库网盘泄露、敏感信息泄露，其中资产收集必包含，多个用英文逗号隔离，例如：资产收集,漏洞信息</p>
     */
    public $ScanType;

    /**
     * @var integer <p>qps设置</p>
     */
    public $Qps;

    /**
     * @var boolean <p>是否包含完整扫描</p>
     */
    public $IsIncludeFullScan;

    /**
     * @var integer <p>端口扫描 QPS，默认 100，下限 10，保守值 200，上限 5000</p><p>默认值：100</p>
     */
    public $PortScanQps;

    /**
     * @var integer <p>单 IP 任务并发数，默认 1，下限 1，保守值 3，上限 10</p><p>默认值：1</p>
     */
    public $SingleIPTaskLimit;

    /**
     * @var boolean <p>任一速率超过保守值时必须为 true，否则参数错误</p>
     */
    public $HighRiskAck;

    /**
     * @var array <p>知情同意勾选清单，用于审计回放</p>
     */
    public $ScanRateAckChecklist;

    /**
     * @var ScanPriorityReq <p>扫描优先级配置</p>
     */
    public $ScanPriority;

    /**
     * @param integer $CustomerId <p>企业ID</p>
     * @param string $TaskType <p>任务类型：即时任务</p>
     * @param string $ScanType <p>资产收集、漏洞信息、弱口令、目录爆破、暗网泄露、Github泄露、文库网盘泄露、敏感信息泄露，其中资产收集必包含，多个用英文逗号隔离，例如：资产收集,漏洞信息</p>
     * @param integer $Qps <p>qps设置</p>
     * @param boolean $IsIncludeFullScan <p>是否包含完整扫描</p>
     * @param integer $PortScanQps <p>端口扫描 QPS，默认 100，下限 10，保守值 200，上限 5000</p><p>默认值：100</p>
     * @param integer $SingleIPTaskLimit <p>单 IP 任务并发数，默认 1，下限 1，保守值 3，上限 10</p><p>默认值：1</p>
     * @param boolean $HighRiskAck <p>任一速率超过保守值时必须为 true，否则参数错误</p>
     * @param array $ScanRateAckChecklist <p>知情同意勾选清单，用于审计回放</p>
     * @param ScanPriorityReq $ScanPriority <p>扫描优先级配置</p>
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
        if (array_key_exists("CustomerId",$param) and $param["CustomerId"] !== null) {
            $this->CustomerId = $param["CustomerId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ScanType",$param) and $param["ScanType"] !== null) {
            $this->ScanType = $param["ScanType"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("IsIncludeFullScan",$param) and $param["IsIncludeFullScan"] !== null) {
            $this->IsIncludeFullScan = $param["IsIncludeFullScan"];
        }

        if (array_key_exists("PortScanQps",$param) and $param["PortScanQps"] !== null) {
            $this->PortScanQps = $param["PortScanQps"];
        }

        if (array_key_exists("SingleIPTaskLimit",$param) and $param["SingleIPTaskLimit"] !== null) {
            $this->SingleIPTaskLimit = $param["SingleIPTaskLimit"];
        }

        if (array_key_exists("HighRiskAck",$param) and $param["HighRiskAck"] !== null) {
            $this->HighRiskAck = $param["HighRiskAck"];
        }

        if (array_key_exists("ScanRateAckChecklist",$param) and $param["ScanRateAckChecklist"] !== null) {
            $this->ScanRateAckChecklist = $param["ScanRateAckChecklist"];
        }

        if (array_key_exists("ScanPriority",$param) and $param["ScanPriority"] !== null) {
            $this->ScanPriority = new ScanPriorityReq();
            $this->ScanPriority->deserialize($param["ScanPriority"]);
        }
    }
}
