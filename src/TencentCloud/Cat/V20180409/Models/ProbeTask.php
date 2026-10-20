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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拨测任务
 *
 * @method string getName() 获取<p>任务名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>任务名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取<p>任务 ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务 ID</p>
 * @method integer getTaskType() 获取<p>拨测类型</p><li>1 = 页面浏览</li><li> 2 =文件上传 </li><li> 3 = 文件下载</li><li> 4 = 端口性能 </li><li> 5 = 网络质量 </li><li> 6 =流媒体 </li><p>即时拨测只支持页面浏览，网络质量，文件下载</p>
 * @method void setTaskType(integer $TaskType) 设置<p>拨测类型</p><li>1 = 页面浏览</li><li> 2 =文件上传 </li><li> 3 = 文件下载</li><li> 4 = 端口性能 </li><li> 5 = 网络质量 </li><li> 6 =流媒体 </li><p>即时拨测只支持页面浏览，网络质量，文件下载</p>
 * @method array getNodes() 获取<p>拨测节点列表</p>
 * @method void setNodes(array $Nodes) 设置<p>拨测节点列表</p>
 * @method integer getNodeIpType() 获取<p>拨测任务所选的拨测点IP类型，0-不限，1-IPv4，2-IPv6</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeIpType(integer $NodeIpType) 设置<p>拨测任务所选的拨测点IP类型，0-不限，1-IPv4，2-IPv6</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInterval() 获取<p>拨测间隔，单位为分钟</p>
 * @method void setInterval(integer $Interval) 设置<p>拨测间隔，单位为分钟</p>
 * @method string getParameters() 获取<p>拨测参数</p>
 * @method void setParameters(string $Parameters) 设置<p>拨测参数</p>
 * @method integer getStatus() 获取<p>任务状态</p><li>1 = 创建中</li><li> 2 = 运行中 </li><li> 3 = 运行异常 </li><li> 4 = 暂停中 </li><li> 5 = 暂停异常 </li><li> 6 = 任务暂停 </li><li> 7 = 任务删除中 </li><li> 8 = 任务删除异常 </li><li> 9 = 任务删除</li><li> 10 = 定时任务暂停中 </li>
 * @method void setStatus(integer $Status) 设置<p>任务状态</p><li>1 = 创建中</li><li> 2 = 运行中 </li><li> 3 = 运行异常 </li><li> 4 = 暂停中 </li><li> 5 = 暂停异常 </li><li> 6 = 任务暂停 </li><li> 7 = 任务删除中 </li><li> 8 = 任务删除异常 </li><li> 9 = 任务删除</li><li> 10 = 定时任务暂停中 </li>
 * @method string getTargetAddress() 获取<p>目标地址</p>
 * @method void setTargetAddress(string $TargetAddress) 设置<p>目标地址</p>
 * @method integer getPayMode() 获取<p>付费模式</p><li>1 = 试用版本</li><li> 2 = 付费版本 </li>
 * @method void setPayMode(integer $PayMode) 设置<p>付费模式</p><li>1 = 试用版本</li><li> 2 = 付费版本 </li>
 * @method integer getOrderState() 获取<p>订单状态</p><li>1 = 正常</li><li> 2 = 欠费 </li>
 * @method void setOrderState(integer $OrderState) 设置<p>订单状态</p><li>1 = 正常</li><li> 2 = 欠费 </li>
 * @method integer getTaskCategory() 获取<p>任务分类</p><li>1 = PC</li><li> 2 = Mobile </li>
 * @method void setTaskCategory(integer $TaskCategory) 设置<p>任务分类</p><li>1 = PC</li><li> 2 = Mobile </li>
 * @method string getCreatedAt() 获取<p>创建时间</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>创建时间</p>
 * @method string getCron() 获取<p>定时任务cron表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCron(string $Cron) 设置<p>定时任务cron表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCronState() 获取<p>定时任务启动状态</p><li>1 = 定时任务表达式生效</li><li> 2 = 定时任务表达式未生效（一般为任务手动暂停）</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCronState(integer $CronState) 设置<p>定时任务启动状态</p><li>1 = 定时任务表达式生效</li><li> 2 = 定时任务表达式未生效（一般为任务手动暂停）</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagInfoList() 获取<p>任务当前绑定的标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagInfoList(array $TagInfoList) 设置<p>任务当前绑定的标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSubSyncFlag() 获取<p>是否为同步账号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubSyncFlag(integer $SubSyncFlag) 设置<p>是否为同步账号</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProbeTask extends AbstractModel
{
    /**
     * @var string <p>任务名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>任务 ID</p>
     */
    public $TaskId;

    /**
     * @var integer <p>拨测类型</p><li>1 = 页面浏览</li><li> 2 =文件上传 </li><li> 3 = 文件下载</li><li> 4 = 端口性能 </li><li> 5 = 网络质量 </li><li> 6 =流媒体 </li><p>即时拨测只支持页面浏览，网络质量，文件下载</p>
     */
    public $TaskType;

    /**
     * @var array <p>拨测节点列表</p>
     */
    public $Nodes;

    /**
     * @var integer <p>拨测任务所选的拨测点IP类型，0-不限，1-IPv4，2-IPv6</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeIpType;

    /**
     * @var integer <p>拨测间隔，单位为分钟</p>
     */
    public $Interval;

    /**
     * @var string <p>拨测参数</p>
     */
    public $Parameters;

    /**
     * @var integer <p>任务状态</p><li>1 = 创建中</li><li> 2 = 运行中 </li><li> 3 = 运行异常 </li><li> 4 = 暂停中 </li><li> 5 = 暂停异常 </li><li> 6 = 任务暂停 </li><li> 7 = 任务删除中 </li><li> 8 = 任务删除异常 </li><li> 9 = 任务删除</li><li> 10 = 定时任务暂停中 </li>
     */
    public $Status;

    /**
     * @var string <p>目标地址</p>
     */
    public $TargetAddress;

    /**
     * @var integer <p>付费模式</p><li>1 = 试用版本</li><li> 2 = 付费版本 </li>
     */
    public $PayMode;

    /**
     * @var integer <p>订单状态</p><li>1 = 正常</li><li> 2 = 欠费 </li>
     */
    public $OrderState;

    /**
     * @var integer <p>任务分类</p><li>1 = PC</li><li> 2 = Mobile </li>
     */
    public $TaskCategory;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>定时任务cron表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cron;

    /**
     * @var integer <p>定时任务启动状态</p><li>1 = 定时任务表达式生效</li><li> 2 = 定时任务表达式未生效（一般为任务手动暂停）</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CronState;

    /**
     * @var array <p>任务当前绑定的标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagInfoList;

    /**
     * @var integer <p>是否为同步账号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubSyncFlag;

    /**
     * @param string $Name <p>任务名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId <p>任务 ID</p>
     * @param integer $TaskType <p>拨测类型</p><li>1 = 页面浏览</li><li> 2 =文件上传 </li><li> 3 = 文件下载</li><li> 4 = 端口性能 </li><li> 5 = 网络质量 </li><li> 6 =流媒体 </li><p>即时拨测只支持页面浏览，网络质量，文件下载</p>
     * @param array $Nodes <p>拨测节点列表</p>
     * @param integer $NodeIpType <p>拨测任务所选的拨测点IP类型，0-不限，1-IPv4，2-IPv6</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Interval <p>拨测间隔，单位为分钟</p>
     * @param string $Parameters <p>拨测参数</p>
     * @param integer $Status <p>任务状态</p><li>1 = 创建中</li><li> 2 = 运行中 </li><li> 3 = 运行异常 </li><li> 4 = 暂停中 </li><li> 5 = 暂停异常 </li><li> 6 = 任务暂停 </li><li> 7 = 任务删除中 </li><li> 8 = 任务删除异常 </li><li> 9 = 任务删除</li><li> 10 = 定时任务暂停中 </li>
     * @param string $TargetAddress <p>目标地址</p>
     * @param integer $PayMode <p>付费模式</p><li>1 = 试用版本</li><li> 2 = 付费版本 </li>
     * @param integer $OrderState <p>订单状态</p><li>1 = 正常</li><li> 2 = 欠费 </li>
     * @param integer $TaskCategory <p>任务分类</p><li>1 = PC</li><li> 2 = Mobile </li>
     * @param string $CreatedAt <p>创建时间</p>
     * @param string $Cron <p>定时任务cron表达式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CronState <p>定时任务启动状态</p><li>1 = 定时任务表达式生效</li><li> 2 = 定时任务表达式未生效（一般为任务手动暂停）</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagInfoList <p>任务当前绑定的标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SubSyncFlag <p>是否为同步账号</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = $param["Nodes"];
        }

        if (array_key_exists("NodeIpType",$param) and $param["NodeIpType"] !== null) {
            $this->NodeIpType = $param["NodeIpType"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TargetAddress",$param) and $param["TargetAddress"] !== null) {
            $this->TargetAddress = $param["TargetAddress"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("OrderState",$param) and $param["OrderState"] !== null) {
            $this->OrderState = $param["OrderState"];
        }

        if (array_key_exists("TaskCategory",$param) and $param["TaskCategory"] !== null) {
            $this->TaskCategory = $param["TaskCategory"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("Cron",$param) and $param["Cron"] !== null) {
            $this->Cron = $param["Cron"];
        }

        if (array_key_exists("CronState",$param) and $param["CronState"] !== null) {
            $this->CronState = $param["CronState"];
        }

        if (array_key_exists("TagInfoList",$param) and $param["TagInfoList"] !== null) {
            $this->TagInfoList = [];
            foreach ($param["TagInfoList"] as $key => $value){
                $obj = new KeyValuePair();
                $obj->deserialize($value);
                array_push($this->TagInfoList, $obj);
            }
        }

        if (array_key_exists("SubSyncFlag",$param) and $param["SubSyncFlag"] !== null) {
            $this->SubSyncFlag = $param["SubSyncFlag"];
        }
    }
}
