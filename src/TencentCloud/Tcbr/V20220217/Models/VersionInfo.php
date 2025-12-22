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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 版本信息
 *
 * @method string getVersionName() 获取版本名
 * @method void setVersionName(string $VersionName) 设置版本名
 * @method integer getFlowRatio() 获取流量比例
 * @method void setFlowRatio(integer $FlowRatio) 设置流量比例
 * @method string getStatus() 获取版本状态
 * @method void setStatus(string $Status) 设置版本状态
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method string getUpdatedTime() 获取更新时间
 * @method void setUpdatedTime(string $UpdatedTime) 设置更新时间
 * @method integer getBuildId() 获取构建Id
 * @method void setBuildId(integer $BuildId) 设置构建Id
 * @method string getUploadType() 获取上传方式
 * @method void setUploadType(string $UploadType) 设置上传方式
 * @method string getRemark() 获取操作标识
 * @method void setRemark(string $Remark) 设置操作标识
 * @method ObjectKV getUrlParam() 获取测试参数
 * @method void setUrlParam(ObjectKV $UrlParam) 设置测试参数
 * @method integer getPriority() 获取权重
 * @method void setPriority(integer $Priority) 设置权重
 * @method boolean getIsDefaultPriority() 获取是否默认
 * @method void setIsDefaultPriority(boolean $IsDefaultPriority) 设置是否默认
 * @method array getFlowParams() 获取流量参数
 * @method void setFlowParams(array $FlowParams) 设置流量参数
 * @method integer getMinReplicas() 获取最小副本数
 * @method void setMinReplicas(integer $MinReplicas) 设置最小副本数
 * @method integer getMaxReplicas() 获取最大副本数
 * @method void setMaxReplicas(integer $MaxReplicas) 设置最大副本数
 * @method string getRunId() 获取操作Id
 * @method void setRunId(string $RunId) 设置操作Id
 * @method integer getPercent() 获取百分比
 * @method void setPercent(integer $Percent) 设置百分比
 * @method integer getCurrentReplicas() 获取当前副本数
 * @method void setCurrentReplicas(integer $CurrentReplicas) 设置当前副本数
 * @method string getArchitecture() 获取架构类型
 * @method void setArchitecture(string $Architecture) 设置架构类型
 */
class VersionInfo extends AbstractModel
{
    /**
     * @var string 版本名
     */
    public $VersionName;

    /**
     * @var integer 流量比例
     */
    public $FlowRatio;

    /**
     * @var string 版本状态
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var string 更新时间
     */
    public $UpdatedTime;

    /**
     * @var integer 构建Id
     */
    public $BuildId;

    /**
     * @var string 上传方式
     */
    public $UploadType;

    /**
     * @var string 操作标识
     */
    public $Remark;

    /**
     * @var ObjectKV 测试参数
     */
    public $UrlParam;

    /**
     * @var integer 权重
     */
    public $Priority;

    /**
     * @var boolean 是否默认
     */
    public $IsDefaultPriority;

    /**
     * @var array 流量参数
     */
    public $FlowParams;

    /**
     * @var integer 最小副本数
     */
    public $MinReplicas;

    /**
     * @var integer 最大副本数
     */
    public $MaxReplicas;

    /**
     * @var string 操作Id
     */
    public $RunId;

    /**
     * @var integer 百分比
     */
    public $Percent;

    /**
     * @var integer 当前副本数
     */
    public $CurrentReplicas;

    /**
     * @var string 架构类型
     */
    public $Architecture;

    /**
     * @param string $VersionName 版本名
     * @param integer $FlowRatio 流量比例
     * @param string $Status 版本状态
     * @param string $CreatedTime 创建时间
     * @param string $UpdatedTime 更新时间
     * @param integer $BuildId 构建Id
     * @param string $UploadType 上传方式
     * @param string $Remark 操作标识
     * @param ObjectKV $UrlParam 测试参数
     * @param integer $Priority 权重
     * @param boolean $IsDefaultPriority 是否默认
     * @param array $FlowParams 流量参数
     * @param integer $MinReplicas 最小副本数
     * @param integer $MaxReplicas 最大副本数
     * @param string $RunId 操作Id
     * @param integer $Percent 百分比
     * @param integer $CurrentReplicas 当前副本数
     * @param string $Architecture 架构类型
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

        if (array_key_exists("FlowRatio",$param) and $param["FlowRatio"] !== null) {
            $this->FlowRatio = $param["FlowRatio"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
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
                $obj = new ObjectKVPriority();
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
