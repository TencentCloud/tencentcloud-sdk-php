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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基线扫描的子任务，按检测资产维度拆分（一台主机或一个集群对应一条子任务）。
 *
 * @method integer getID() 获取<p>子任务 ID。</p>
 * @method void setID(integer $ID) 设置<p>子任务 ID。</p>
 * @method integer getTaskID() 获取<p>所属主任务 ID（对应 BaselineMainTask.ID）。</p>
 * @method void setTaskID(integer $TaskID) 设置<p>所属主任务 ID（对应 BaselineMainTask.ID）。</p>
 * @method string getStatus() 获取<p>子任务执行结果。取值：</p><ul><li>SUCCESS：成功</li><li>FAILED：失败</li><li>USER_CANCELED：用户取消</li><li>CHECKING：检测中</li><li>UNKNOWN：未知状态</li></ul>
 * @method void setStatus(string $Status) 设置<p>子任务执行结果。取值：</p><ul><li>SUCCESS：成功</li><li>FAILED：失败</li><li>USER_CANCELED：用户取消</li><li>CHECKING：检测中</li><li>UNKNOWN：未知状态</li></ul>
 * @method integer getAppid() 获取<p>子任务所属租户 Appid。</p>
 * @method void setAppid(integer $Appid) 设置<p>子任务所属租户 Appid。</p>
 * @method string getStartTime() 获取<p>子任务开始执行时间。</p>
 * @method void setStartTime(string $StartTime) 设置<p>子任务开始执行时间。</p>
 * @method string getFinishTime() 获取<p>子任务结束时间，未结束时为空。</p>
 * @method void setFinishTime(string $FinishTime) 设置<p>子任务结束时间，未结束时为空。</p>
 * @method string getCheckAssetType() 获取<p>检测资产大类，区分主机基线与容器集群基线。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：容器集群</li></ul>
 * @method void setCheckAssetType(string $CheckAssetType) 设置<p>检测资产大类，区分主机基线与容器集群基线。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：容器集群</li></ul>
 * @method BaselineHostAsset getHostAsset() 获取<p>CheckAssetType=HOST 时返回的主机资产信息，CLUSTER 时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostAsset(BaselineHostAsset $HostAsset) 设置<p>CheckAssetType=HOST 时返回的主机资产信息，CLUSTER 时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrCode() 获取<p>状态码：失败时返回失败码（如 AGENT_OFFLINE、SCAN_TIMEOUT、CLIENT_SCAN_FAILED 等），检测中时返回检测状态，成功或用户取消时为空。</p>
 * @method void setErrCode(string $ErrCode) 设置<p>状态码：失败时返回失败码（如 AGENT_OFFLINE、SCAN_TIMEOUT、CLIENT_SCAN_FAILED 等），检测中时返回检测状态，成功或用户取消时为空。</p>
 * @method string getErrMessage() 获取<p>失败时的详细原因描述，成功、用户取消或检测中时为空。</p>
 * @method void setErrMessage(string $ErrMessage) 设置<p>失败时的详细原因描述，成功、用户取消或检测中时为空。</p>
 * @method string getSolution() 获取<p>失败时的解决方案建议，成功、用户取消或检测中时为空。</p>
 * @method void setSolution(string $Solution) 设置<p>失败时的解决方案建议，成功、用户取消或检测中时为空。</p>
 * @method BaselineClusterAsset getClusterAsset() 获取<p>CheckAssetType=CLUSTER 时返回的集群资产信息，HOST 时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterAsset(BaselineClusterAsset $ClusterAsset) 设置<p>CheckAssetType=CLUSTER 时返回的集群资产信息，HOST 时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaselineSubTask extends AbstractModel
{
    /**
     * @var integer <p>子任务 ID。</p>
     */
    public $ID;

    /**
     * @var integer <p>所属主任务 ID（对应 BaselineMainTask.ID）。</p>
     */
    public $TaskID;

    /**
     * @var string <p>子任务执行结果。取值：</p><ul><li>SUCCESS：成功</li><li>FAILED：失败</li><li>USER_CANCELED：用户取消</li><li>CHECKING：检测中</li><li>UNKNOWN：未知状态</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>子任务所属租户 Appid。</p>
     */
    public $Appid;

    /**
     * @var string <p>子任务开始执行时间。</p>
     */
    public $StartTime;

    /**
     * @var string <p>子任务结束时间，未结束时为空。</p>
     */
    public $FinishTime;

    /**
     * @var string <p>检测资产大类，区分主机基线与容器集群基线。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：容器集群</li></ul>
     */
    public $CheckAssetType;

    /**
     * @var BaselineHostAsset <p>CheckAssetType=HOST 时返回的主机资产信息，CLUSTER 时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostAsset;

    /**
     * @var string <p>状态码：失败时返回失败码（如 AGENT_OFFLINE、SCAN_TIMEOUT、CLIENT_SCAN_FAILED 等），检测中时返回检测状态，成功或用户取消时为空。</p>
     */
    public $ErrCode;

    /**
     * @var string <p>失败时的详细原因描述，成功、用户取消或检测中时为空。</p>
     */
    public $ErrMessage;

    /**
     * @var string <p>失败时的解决方案建议，成功、用户取消或检测中时为空。</p>
     */
    public $Solution;

    /**
     * @var BaselineClusterAsset <p>CheckAssetType=CLUSTER 时返回的集群资产信息，HOST 时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterAsset;

    /**
     * @param integer $ID <p>子任务 ID。</p>
     * @param integer $TaskID <p>所属主任务 ID（对应 BaselineMainTask.ID）。</p>
     * @param string $Status <p>子任务执行结果。取值：</p><ul><li>SUCCESS：成功</li><li>FAILED：失败</li><li>USER_CANCELED：用户取消</li><li>CHECKING：检测中</li><li>UNKNOWN：未知状态</li></ul>
     * @param integer $Appid <p>子任务所属租户 Appid。</p>
     * @param string $StartTime <p>子任务开始执行时间。</p>
     * @param string $FinishTime <p>子任务结束时间，未结束时为空。</p>
     * @param string $CheckAssetType <p>检测资产大类，区分主机基线与容器集群基线。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：容器集群</li></ul>
     * @param BaselineHostAsset $HostAsset <p>CheckAssetType=HOST 时返回的主机资产信息，CLUSTER 时为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrCode <p>状态码：失败时返回失败码（如 AGENT_OFFLINE、SCAN_TIMEOUT、CLIENT_SCAN_FAILED 等），检测中时返回检测状态，成功或用户取消时为空。</p>
     * @param string $ErrMessage <p>失败时的详细原因描述，成功、用户取消或检测中时为空。</p>
     * @param string $Solution <p>失败时的解决方案建议，成功、用户取消或检测中时为空。</p>
     * @param BaselineClusterAsset $ClusterAsset <p>CheckAssetType=CLUSTER 时返回的集群资产信息，HOST 时为空。</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("TaskID",$param) and $param["TaskID"] !== null) {
            $this->TaskID = $param["TaskID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("CheckAssetType",$param) and $param["CheckAssetType"] !== null) {
            $this->CheckAssetType = $param["CheckAssetType"];
        }

        if (array_key_exists("HostAsset",$param) and $param["HostAsset"] !== null) {
            $this->HostAsset = new BaselineHostAsset();
            $this->HostAsset->deserialize($param["HostAsset"]);
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrMessage",$param) and $param["ErrMessage"] !== null) {
            $this->ErrMessage = $param["ErrMessage"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("ClusterAsset",$param) and $param["ClusterAsset"] !== null) {
            $this->ClusterAsset = new BaselineClusterAsset();
            $this->ClusterAsset->deserialize($param["ClusterAsset"]);
        }
    }
}
