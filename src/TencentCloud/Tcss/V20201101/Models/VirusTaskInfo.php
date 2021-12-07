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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 运行时文件查杀任务容器列表信息
 *
 * @method string getContainerName() 获取容器名称
 * @method void setContainerName(string $ContainerName) 设置容器名称
 * @method string getContainerId() 获取容器id
 * @method void setContainerId(string $ContainerId) 设置容器id
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getImageId() 获取镜像Id
 * @method void setImageId(string $ImageId) 设置镜像Id
 * @method string getHostName() 获取主机名称
 * @method void setHostName(string $HostName) 设置主机名称
 * @method string getHostIp() 获取主机ip
 * @method void setHostIp(string $HostIp) 设置主机ip
 * @method string getStatus() 获取扫描状态：
WAIT: 等待扫描
FAILED: 失败
SCANNING: 扫描中
FINISHED: 结束
CANCELING: 取消中
CANCELED: 已取消
CANCEL_FAILED： 取消失败
 * @method void setStatus(string $Status) 设置扫描状态：
WAIT: 等待扫描
FAILED: 失败
SCANNING: 扫描中
FINISHED: 结束
CANCELING: 取消中
CANCELED: 已取消
CANCEL_FAILED： 取消失败
 * @method string getStartTime() 获取检测开始时间
 * @method void setStartTime(string $StartTime) 设置检测开始时间
 * @method string getEndTime() 获取检测结束时间
 * @method void setEndTime(string $EndTime) 设置检测结束时间
 * @method integer getRiskCnt() 获取风险个数
 * @method void setRiskCnt(integer $RiskCnt) 设置风险个数
 * @method string getId() 获取事件id
 * @method void setId(string $Id) 设置事件id
 * @method string getErrorMsg() 获取错误原因:
SEND_SUCCESSED: 下发成功
SCAN_WAIT: agent排队扫描等待中
OFFLINE: 离线
SEND_FAILED:下发失败
TIMEOUT: 超时
LOW_AGENT_VERSION: 客户端版本过低
AGENT_NOT_FOUND: 镜像所属客户端版不存在
TOO_MANY: 任务过多
VALIDATION: 参数非法
INTERNAL: 服务内部错误
MISC: 其他错误
UNAUTH: 所在镜像未授权
SEND_CANCEL_SUCCESSED:下发成功
 * @method void setErrorMsg(string $ErrorMsg) 设置错误原因:
SEND_SUCCESSED: 下发成功
SCAN_WAIT: agent排队扫描等待中
OFFLINE: 离线
SEND_FAILED:下发失败
TIMEOUT: 超时
LOW_AGENT_VERSION: 客户端版本过低
AGENT_NOT_FOUND: 镜像所属客户端版不存在
TOO_MANY: 任务过多
VALIDATION: 参数非法
INTERNAL: 服务内部错误
MISC: 其他错误
UNAUTH: 所在镜像未授权
SEND_CANCEL_SUCCESSED:下发成功
 */
class VirusTaskInfo extends AbstractModel
{
    /**
     * @var string 容器名称
     */
    public $ContainerName;

    /**
     * @var string 容器id
     */
    public $ContainerId;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string 镜像Id
     */
    public $ImageId;

    /**
     * @var string 主机名称
     */
    public $HostName;

    /**
     * @var string 主机ip
     */
    public $HostIp;

    /**
     * @var string 扫描状态：
WAIT: 等待扫描
FAILED: 失败
SCANNING: 扫描中
FINISHED: 结束
CANCELING: 取消中
CANCELED: 已取消
CANCEL_FAILED： 取消失败
     */
    public $Status;

    /**
     * @var string 检测开始时间
     */
    public $StartTime;

    /**
     * @var string 检测结束时间
     */
    public $EndTime;

    /**
     * @var integer 风险个数
     */
    public $RiskCnt;

    /**
     * @var string 事件id
     */
    public $Id;

    /**
     * @var string 错误原因:
SEND_SUCCESSED: 下发成功
SCAN_WAIT: agent排队扫描等待中
OFFLINE: 离线
SEND_FAILED:下发失败
TIMEOUT: 超时
LOW_AGENT_VERSION: 客户端版本过低
AGENT_NOT_FOUND: 镜像所属客户端版不存在
TOO_MANY: 任务过多
VALIDATION: 参数非法
INTERNAL: 服务内部错误
MISC: 其他错误
UNAUTH: 所在镜像未授权
SEND_CANCEL_SUCCESSED:下发成功
     */
    public $ErrorMsg;

    /**
     * @param string $ContainerName 容器名称
     * @param string $ContainerId 容器id
     * @param string $ImageName 镜像名称
     * @param string $ImageId 镜像Id
     * @param string $HostName 主机名称
     * @param string $HostIp 主机ip
     * @param string $Status 扫描状态：
WAIT: 等待扫描
FAILED: 失败
SCANNING: 扫描中
FINISHED: 结束
CANCELING: 取消中
CANCELED: 已取消
CANCEL_FAILED： 取消失败
     * @param string $StartTime 检测开始时间
     * @param string $EndTime 检测结束时间
     * @param integer $RiskCnt 风险个数
     * @param string $Id 事件id
     * @param string $ErrorMsg 错误原因:
SEND_SUCCESSED: 下发成功
SCAN_WAIT: agent排队扫描等待中
OFFLINE: 离线
SEND_FAILED:下发失败
TIMEOUT: 超时
LOW_AGENT_VERSION: 客户端版本过低
AGENT_NOT_FOUND: 镜像所属客户端版不存在
TOO_MANY: 任务过多
VALIDATION: 参数非法
INTERNAL: 服务内部错误
MISC: 其他错误
UNAUTH: 所在镜像未授权
SEND_CANCEL_SUCCESSED:下发成功
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
        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RiskCnt",$param) and $param["RiskCnt"] !== null) {
            $this->RiskCnt = $param["RiskCnt"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }
    }
}
