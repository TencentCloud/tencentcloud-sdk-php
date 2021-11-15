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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 版本的列表
 *
 * @method string getVersionName() 获取版本名称
 * @method void setVersionName(string $VersionName) 设置版本名称
 * @method string getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFlowRatio() 获取流量占比
 * @method void setFlowRatio(integer $FlowRatio) 设置流量占比
 * @method string getCreatedTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedTime(string $UpdatedTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBuildId() 获取构建ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuildId(integer $BuildId) 设置构建ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUploadType() 获取构建方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUploadType(string $UploadType) 设置构建方式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method ObjectKV getUrlParam() 获取url中的参数路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrlParam(ObjectKV $UrlParam) 设置url中的参数路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPriority() 获取优先级（数值越小，优先级越高）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPriority(integer $Priority) 设置优先级（数值越小，优先级越高）
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsDefaultPriority() 获取是否是默认兜底版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDefaultPriority(boolean $IsDefaultPriority) 设置是否是默认兜底版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFlowParams() 获取KV Params
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowParams(array $FlowParams) 设置KV Params
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinReplicas() 获取最小副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinReplicas(integer $MinReplicas) 设置最小副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxReplicas() 获取最大副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxReplicas(integer $MaxReplicas) 设置最大副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunId() 获取操作记录id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunId(string $RunId) 设置操作记录id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPercent() 获取进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPercent(integer $Percent) 设置进度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCurrentReplicas() 获取当前副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrentReplicas(integer $CurrentReplicas) 设置当前副本数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getArchitecture() 获取Monolithic，Microservice
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setArchitecture(string $Architecture) 设置Monolithic，Microservice
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudBaseRunServerVersionItem extends AbstractModel
{
    /**
     * @var string 版本名称
     */
    public $VersionName;

    /**
     * @var string 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 流量占比
     */
    public $FlowRatio;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedTime;

    /**
     * @var integer 构建ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuildId;

    /**
     * @var string 构建方式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UploadType;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var ObjectKV url中的参数路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UrlParam;

    /**
     * @var integer 优先级（数值越小，优先级越高）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Priority;

    /**
     * @var boolean 是否是默认兜底版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDefaultPriority;

    /**
     * @var array KV Params
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowParams;

    /**
     * @var integer 最小副本数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinReplicas;

    /**
     * @var integer 最大副本数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxReplicas;

    /**
     * @var string 操作记录id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunId;

    /**
     * @var integer 进度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Percent;

    /**
     * @var integer 当前副本数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrentReplicas;

    /**
     * @var string Monolithic，Microservice
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Architecture;

    /**
     * @param string $VersionName 版本名称
     * @param string $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FlowRatio 流量占比
     * @param string $CreatedTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BuildId 构建ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UploadType 构建方式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param ObjectKV $UrlParam url中的参数路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Priority 优先级（数值越小，优先级越高）
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsDefaultPriority 是否是默认兜底版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FlowParams KV Params
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinReplicas 最小副本数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxReplicas 最大副本数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunId 操作记录id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Percent 进度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CurrentReplicas 当前副本数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Architecture Monolithic，Microservice
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
        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FlowRatio",$param) and $param["FlowRatio"] !== null) {
            $this->FlowRatio = $param["FlowRatio"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("BuildId",$param) and $param["BuildId"] !== null) {
            $this->BuildId = $param["BuildId"];
        }

        if (array_key_exists("UploadType",$param) and $param["UploadType"] !== null) {
            $this->UploadType = $param["UploadType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("UrlParam",$param) and $param["UrlParam"] !== null) {
            $this->UrlParam = new ObjectKV();
            $this->UrlParam->deserialize($param["UrlParam"]);
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("IsDefaultPriority",$param) and $param["IsDefaultPriority"] !== null) {
            $this->IsDefaultPriority = $param["IsDefaultPriority"];
        }

        if (array_key_exists("FlowParams",$param) and $param["FlowParams"] !== null) {
            $this->FlowParams = [];
            foreach ($param["FlowParams"] as $key => $value){
                $obj = new CloudBaseRunKVPriority();
                $obj->deserialize($value);
                array_push($this->FlowParams, $obj);
            }
        }

        if (array_key_exists("MinReplicas",$param) and $param["MinReplicas"] !== null) {
            $this->MinReplicas = $param["MinReplicas"];
        }

        if (array_key_exists("MaxReplicas",$param) and $param["MaxReplicas"] !== null) {
            $this->MaxReplicas = $param["MaxReplicas"];
        }

        if (array_key_exists("RunId",$param) and $param["RunId"] !== null) {
            $this->RunId = $param["RunId"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("CurrentReplicas",$param) and $param["CurrentReplicas"] !== null) {
            $this->CurrentReplicas = $param["CurrentReplicas"];
        }

        if (array_key_exists("Architecture",$param) and $param["Architecture"] !== null) {
            $this->Architecture = $param["Architecture"];
        }
    }
}
