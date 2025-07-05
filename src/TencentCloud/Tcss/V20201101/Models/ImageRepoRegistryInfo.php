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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器安全镜像仓库列表
 *
 * @method integer getRegistryId() 获取仓库id
 * @method void setRegistryId(integer $RegistryId) 设置仓库id
 * @method string getName() 获取仓库名
 * @method void setName(string $Name) 设置仓库名
 * @method string getRegistryType() 获取仓库类型，列表：harbor、tcr
 * @method void setRegistryType(string $RegistryType) 设置仓库类型，列表：harbor、tcr
 * @method string getUrl() 获取仓库url
 * @method void setUrl(string $Url) 设置仓库url
 * @method string getNetType() 获取网络类型，列表：public
 * @method void setNetType(string $NetType) 设置网络类型，列表：public
 * @method string getRegistryRegion() 获取区域，列表：default
 * @method void setRegistryRegion(string $RegistryRegion) 设置区域，列表：default
 * @method string getRegistryVersion() 获取仓库版本
 * @method void setRegistryVersion(string $RegistryVersion) 设置仓库版本
 * @method string getConnectMsg() 获取仓库连接错误信息，待废弃，请使用ConnDetectException
 * @method void setConnectMsg(string $ConnectMsg) 设置仓库连接错误信息，待废弃，请使用ConnDetectException
 * @method string getConnDetectType() 获取联通性检测方式
 * @method void setConnDetectType(string $ConnDetectType) 设置联通性检测方式
 * @method integer getConnDetectHostCount() 获取联通性检测主机数
 * @method void setConnDetectHostCount(integer $ConnDetectHostCount) 设置联通性检测主机数
 * @method array getConnDetectDetail() 获取联通性检测详情
 * @method void setConnDetectDetail(array $ConnDetectDetail) 设置联通性检测详情
 * @method string getInstanceID() 获取tcr情况下的instance_id
 * @method void setInstanceID(string $InstanceID) 设置tcr情况下的instance_id
 * @method string getLatestSyncTime() 获取最近同步成功时间
 * @method void setLatestSyncTime(string $LatestSyncTime) 设置最近同步成功时间
 * @method string getSyncStatus() 获取同步状态
 * @method void setSyncStatus(string $SyncStatus) 设置同步状态
 * @method string getSyncFailReason() 获取同步失败原因
 * @method void setSyncFailReason(string $SyncFailReason) 设置同步失败原因
 * @method string getSyncSolution() 获取同步失败解决方案
 * @method void setSyncSolution(string $SyncSolution) 设置同步失败解决方案
 * @method string getSyncMessage() 获取同步失败信息
 * @method void setSyncMessage(string $SyncMessage) 设置同步失败信息
 * @method integer getSyncMode() 获取同步方式，0全量同步，1增量同步	
 * @method void setSyncMode(integer $SyncMode) 设置同步方式，0全量同步，1增量同步	
 */
class ImageRepoRegistryInfo extends AbstractModel
{
    /**
     * @var integer 仓库id
     */
    public $RegistryId;

    /**
     * @var string 仓库名
     */
    public $Name;

    /**
     * @var string 仓库类型，列表：harbor、tcr
     */
    public $RegistryType;

    /**
     * @var string 仓库url
     */
    public $Url;

    /**
     * @var string 网络类型，列表：public
     */
    public $NetType;

    /**
     * @var string 区域，列表：default
     */
    public $RegistryRegion;

    /**
     * @var string 仓库版本
     */
    public $RegistryVersion;

    /**
     * @var string 仓库连接错误信息，待废弃，请使用ConnDetectException
     */
    public $ConnectMsg;

    /**
     * @var string 联通性检测方式
     */
    public $ConnDetectType;

    /**
     * @var integer 联通性检测主机数
     */
    public $ConnDetectHostCount;

    /**
     * @var array 联通性检测详情
     */
    public $ConnDetectDetail;

    /**
     * @var string tcr情况下的instance_id
     */
    public $InstanceID;

    /**
     * @var string 最近同步成功时间
     */
    public $LatestSyncTime;

    /**
     * @var string 同步状态
     */
    public $SyncStatus;

    /**
     * @var string 同步失败原因
     */
    public $SyncFailReason;

    /**
     * @var string 同步失败解决方案
     */
    public $SyncSolution;

    /**
     * @var string 同步失败信息
     */
    public $SyncMessage;

    /**
     * @var integer 同步方式，0全量同步，1增量同步	
     */
    public $SyncMode;

    /**
     * @param integer $RegistryId 仓库id
     * @param string $Name 仓库名
     * @param string $RegistryType 仓库类型，列表：harbor、tcr
     * @param string $Url 仓库url
     * @param string $NetType 网络类型，列表：public
     * @param string $RegistryRegion 区域，列表：default
     * @param string $RegistryVersion 仓库版本
     * @param string $ConnectMsg 仓库连接错误信息，待废弃，请使用ConnDetectException
     * @param string $ConnDetectType 联通性检测方式
     * @param integer $ConnDetectHostCount 联通性检测主机数
     * @param array $ConnDetectDetail 联通性检测详情
     * @param string $InstanceID tcr情况下的instance_id
     * @param string $LatestSyncTime 最近同步成功时间
     * @param string $SyncStatus 同步状态
     * @param string $SyncFailReason 同步失败原因
     * @param string $SyncSolution 同步失败解决方案
     * @param string $SyncMessage 同步失败信息
     * @param integer $SyncMode 同步方式，0全量同步，1增量同步	
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RegistryType",$param) and $param["RegistryType"] !== null) {
            $this->RegistryType = $param["RegistryType"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("RegistryRegion",$param) and $param["RegistryRegion"] !== null) {
            $this->RegistryRegion = $param["RegistryRegion"];
        }

        if (array_key_exists("RegistryVersion",$param) and $param["RegistryVersion"] !== null) {
            $this->RegistryVersion = $param["RegistryVersion"];
        }

        if (array_key_exists("ConnectMsg",$param) and $param["ConnectMsg"] !== null) {
            $this->ConnectMsg = $param["ConnectMsg"];
        }

        if (array_key_exists("ConnDetectType",$param) and $param["ConnDetectType"] !== null) {
            $this->ConnDetectType = $param["ConnDetectType"];
        }

        if (array_key_exists("ConnDetectHostCount",$param) and $param["ConnDetectHostCount"] !== null) {
            $this->ConnDetectHostCount = $param["ConnDetectHostCount"];
        }

        if (array_key_exists("ConnDetectDetail",$param) and $param["ConnDetectDetail"] !== null) {
            $this->ConnDetectDetail = [];
            foreach ($param["ConnDetectDetail"] as $key => $value){
                $obj = new RegistryConnDetectResult();
                $obj->deserialize($value);
                array_push($this->ConnDetectDetail, $obj);
            }
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("LatestSyncTime",$param) and $param["LatestSyncTime"] !== null) {
            $this->LatestSyncTime = $param["LatestSyncTime"];
        }

        if (array_key_exists("SyncStatus",$param) and $param["SyncStatus"] !== null) {
            $this->SyncStatus = $param["SyncStatus"];
        }

        if (array_key_exists("SyncFailReason",$param) and $param["SyncFailReason"] !== null) {
            $this->SyncFailReason = $param["SyncFailReason"];
        }

        if (array_key_exists("SyncSolution",$param) and $param["SyncSolution"] !== null) {
            $this->SyncSolution = $param["SyncSolution"];
        }

        if (array_key_exists("SyncMessage",$param) and $param["SyncMessage"] !== null) {
            $this->SyncMessage = $param["SyncMessage"];
        }

        if (array_key_exists("SyncMode",$param) and $param["SyncMode"] !== null) {
            $this->SyncMode = $param["SyncMode"];
        }
    }
}
