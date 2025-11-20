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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例诊断历史事件
 *
 * @method string getDiagType() 获取诊断类型。支持值包括"高危账号","自增键耗尽","连接性检查","CPU利用率","死锁","全表扫描","高并发/压力请求","预编译语句过多","内存利用率","Metadata lock","磁盘超限","内存超限","只读锁","只读实例剔除","行锁","活跃会话","慢SQL","数据库快照","磁盘空间利用率","执行计划变化","主从切换","Table open cache命中率低","大表","事务未提交","事务导致复制延迟"等。
 * @method void setDiagType(string $DiagType) 设置诊断类型。支持值包括"高危账号","自增键耗尽","连接性检查","CPU利用率","死锁","全表扫描","高并发/压力请求","预编译语句过多","内存利用率","Metadata lock","磁盘超限","内存超限","只读锁","只读实例剔除","行锁","活跃会话","慢SQL","数据库快照","磁盘空间利用率","执行计划变化","主从切换","Table open cache命中率低","大表","事务未提交","事务导致复制延迟"等。
 * @method string getEndTime() 获取结束时间。
 * @method void setEndTime(string $EndTime) 设置结束时间。
 * @method string getStartTime() 获取开始时间。
 * @method void setStartTime(string $StartTime) 设置开始时间。
 * @method integer getEventId() 获取事件唯一ID 。
 * @method void setEventId(integer $EventId) 设置事件唯一ID 。
 * @method integer getSeverity() 获取严重程度。严重程度分为5级，按影响程度从高至低分别为：1：致命，2：严重，3：告警，4：提示，5：健康。
 * @method void setSeverity(integer $Severity) 设置严重程度。严重程度分为5级，按影响程度从高至低分别为：1：致命，2：严重，3：告警，4：提示，5：健康。
 * @method string getOutline() 获取诊断概要。
 * @method void setOutline(string $Outline) 设置诊断概要。
 * @method string getDiagItem() 获取诊断项说明。
 * @method void setDiagItem(string $DiagItem) 设置诊断项说明。
 * @method string getInstanceId() 获取实例 ID 。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID 。
 * @method string getMetric() 获取保留字段。
 * @method void setMetric(string $Metric) 设置保留字段。
 * @method string getRegion() 获取地域。
 * @method void setRegion(string $Region) 设置地域。
 * @method string getClusterId() 获取集群ID。
 * @method void setClusterId(string $ClusterId) 设置集群ID。
 * @method string getClusterName() 获取集群名称。
 * @method void setClusterName(string $ClusterName) 设置集群名称。
 * @method string getVip() 获取vip地址。
 * @method void setVip(string $Vip) 设置vip地址。
 * @method integer getVport() 获取vip端口。
 * @method void setVport(integer $Vport) 设置vip端口。
 */
class DiagHistoryEventItem extends AbstractModel
{
    /**
     * @var string 诊断类型。支持值包括"高危账号","自增键耗尽","连接性检查","CPU利用率","死锁","全表扫描","高并发/压力请求","预编译语句过多","内存利用率","Metadata lock","磁盘超限","内存超限","只读锁","只读实例剔除","行锁","活跃会话","慢SQL","数据库快照","磁盘空间利用率","执行计划变化","主从切换","Table open cache命中率低","大表","事务未提交","事务导致复制延迟"等。
     */
    public $DiagType;

    /**
     * @var string 结束时间。
     */
    public $EndTime;

    /**
     * @var string 开始时间。
     */
    public $StartTime;

    /**
     * @var integer 事件唯一ID 。
     */
    public $EventId;

    /**
     * @var integer 严重程度。严重程度分为5级，按影响程度从高至低分别为：1：致命，2：严重，3：告警，4：提示，5：健康。
     */
    public $Severity;

    /**
     * @var string 诊断概要。
     */
    public $Outline;

    /**
     * @var string 诊断项说明。
     */
    public $DiagItem;

    /**
     * @var string 实例 ID 。
     */
    public $InstanceId;

    /**
     * @var string 保留字段。
     */
    public $Metric;

    /**
     * @var string 地域。
     */
    public $Region;

    /**
     * @var string 集群ID。
     */
    public $ClusterId;

    /**
     * @var string 集群名称。
     */
    public $ClusterName;

    /**
     * @var string vip地址。
     */
    public $Vip;

    /**
     * @var integer vip端口。
     */
    public $Vport;

    /**
     * @param string $DiagType 诊断类型。支持值包括"高危账号","自增键耗尽","连接性检查","CPU利用率","死锁","全表扫描","高并发/压力请求","预编译语句过多","内存利用率","Metadata lock","磁盘超限","内存超限","只读锁","只读实例剔除","行锁","活跃会话","慢SQL","数据库快照","磁盘空间利用率","执行计划变化","主从切换","Table open cache命中率低","大表","事务未提交","事务导致复制延迟"等。
     * @param string $EndTime 结束时间。
     * @param string $StartTime 开始时间。
     * @param integer $EventId 事件唯一ID 。
     * @param integer $Severity 严重程度。严重程度分为5级，按影响程度从高至低分别为：1：致命，2：严重，3：告警，4：提示，5：健康。
     * @param string $Outline 诊断概要。
     * @param string $DiagItem 诊断项说明。
     * @param string $InstanceId 实例 ID 。
     * @param string $Metric 保留字段。
     * @param string $Region 地域。
     * @param string $ClusterId 集群ID。
     * @param string $ClusterName 集群名称。
     * @param string $Vip vip地址。
     * @param integer $Vport vip端口。
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
        if (array_key_exists("DiagType",$param) and $param["DiagType"] !== null) {
            $this->DiagType = $param["DiagType"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("Outline",$param) and $param["Outline"] !== null) {
            $this->Outline = $param["Outline"];
        }

        if (array_key_exists("DiagItem",$param) and $param["DiagItem"] !== null) {
            $this->DiagItem = $param["DiagItem"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }
    }
}
