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
 * ModifyCloudBaseRunServerVersion请求参数结构体
 *
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getServerName() 获取服务名称
 * @method void setServerName(string $ServerName) 设置服务名称
 * @method string getVersionName() 获取版本名称
 * @method void setVersionName(string $VersionName) 设置版本名称
 * @method string getEnvParams() 获取环境变量
 * @method void setEnvParams(string $EnvParams) 设置环境变量
 * @method string getMinNum() 获取最小副本数
 * @method void setMinNum(string $MinNum) 设置最小副本数
 * @method string getMaxNum() 获取最大副本数
 * @method void setMaxNum(string $MaxNum) 设置最大副本数
 * @method string getContainerPort() 获取端口
 * @method void setContainerPort(string $ContainerPort) 设置端口
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getCustomLogs() 获取日志采集路径
 * @method void setCustomLogs(string $CustomLogs) 设置日志采集路径
 * @method boolean getIsResetRemark() 获取是否重设备注
 * @method void setIsResetRemark(boolean $IsResetRemark) 设置是否重设备注
 * @method boolean getBasicModify() 获取修改基础信息
 * @method void setBasicModify(boolean $BasicModify) 设置修改基础信息
 * @method string getOperatorRemark() 获取操作备注
 * @method void setOperatorRemark(string $OperatorRemark) 设置操作备注
 */
class ModifyCloudBaseRunServerVersionRequest extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string 服务名称
     */
    public $ServerName;

    /**
     * @var string 版本名称
     */
    public $VersionName;

    /**
     * @var string 环境变量
     */
    public $EnvParams;

    /**
     * @var string 最小副本数
     */
    public $MinNum;

    /**
     * @var string 最大副本数
     */
    public $MaxNum;

    /**
     * @var string 端口
     */
    public $ContainerPort;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 日志采集路径
     */
    public $CustomLogs;

    /**
     * @var boolean 是否重设备注
     */
    public $IsResetRemark;

    /**
     * @var boolean 修改基础信息
     */
    public $BasicModify;

    /**
     * @var string 操作备注
     */
    public $OperatorRemark;

    /**
     * @param string $EnvId 环境ID
     * @param string $ServerName 服务名称
     * @param string $VersionName 版本名称
     * @param string $EnvParams 环境变量
     * @param string $MinNum 最小副本数
     * @param string $MaxNum 最大副本数
     * @param string $ContainerPort 端口
     * @param string $Remark 备注
     * @param string $CustomLogs 日志采集路径
     * @param boolean $IsResetRemark 是否重设备注
     * @param boolean $BasicModify 修改基础信息
     * @param string $OperatorRemark 操作备注
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("EnvParams",$param) and $param["EnvParams"] !== null) {
            $this->EnvParams = $param["EnvParams"];
        }

        if (array_key_exists("MinNum",$param) and $param["MinNum"] !== null) {
            $this->MinNum = $param["MinNum"];
        }

        if (array_key_exists("MaxNum",$param) and $param["MaxNum"] !== null) {
            $this->MaxNum = $param["MaxNum"];
        }

        if (array_key_exists("ContainerPort",$param) and $param["ContainerPort"] !== null) {
            $this->ContainerPort = $param["ContainerPort"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CustomLogs",$param) and $param["CustomLogs"] !== null) {
            $this->CustomLogs = $param["CustomLogs"];
        }

        if (array_key_exists("IsResetRemark",$param) and $param["IsResetRemark"] !== null) {
            $this->IsResetRemark = $param["IsResetRemark"];
        }

        if (array_key_exists("BasicModify",$param) and $param["BasicModify"] !== null) {
            $this->BasicModify = $param["BasicModify"];
        }

        if (array_key_exists("OperatorRemark",$param) and $param["OperatorRemark"] !== null) {
            $this->OperatorRemark = $param["OperatorRemark"];
        }
    }
}
