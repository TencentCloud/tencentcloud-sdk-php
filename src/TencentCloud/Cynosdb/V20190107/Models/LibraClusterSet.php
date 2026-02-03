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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * libra集群信息
 *
 * @method integer getAppId() 获取用户id
 * @method void setAppId(integer $AppId) 设置用户id
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getDbVersion() 获取数据库版本
 * @method void setDbVersion(string $DbVersion) 设置数据库版本
 * @method array getInstanceSet() 获取实例信息
 * @method void setInstanceSet(array $InstanceSet) 设置实例信息
 * @method integer getPayMode() 获取付费模式
 * @method void setPayMode(integer $PayMode) 设置付费模式
 * @method string getPeriodEndTime() 获取到期时间
 * @method void setPeriodEndTime(string $PeriodEndTime) 设置到期时间
 * @method integer getProjectID() 获取项目id
 * @method void setProjectID(integer $ProjectID) 设置项目id
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method integer getRenewFlag() 获取自动续费标识，1为自动续费，0为到期不续
 * @method void setRenewFlag(integer $RenewFlag) 设置自动续费标识，1为自动续费，0为到期不续
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getStatusDesc() 获取状态描述
 * @method void setStatusDesc(string $StatusDesc) 设置状态描述
 * @method integer getStorage() 获取存储大小
 * @method void setStorage(integer $Storage) 设置存储大小
 * @method integer getUsedStorage() 获取使用容量
 * @method void setUsedStorage(integer $UsedStorage) 设置使用容量
 * @method string getVip() 获取vip地址
 * @method void setVip(string $Vip) 设置vip地址
 * @method integer getVport() 获取vport端口
 * @method void setVport(integer $Vport) 设置vport端口
 */
class LibraClusterSet extends AbstractModel
{
    /**
     * @var integer 用户id
     */
    public $AppId;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 数据库版本
     */
    public $DbVersion;

    /**
     * @var array 实例信息
     */
    public $InstanceSet;

    /**
     * @var integer 付费模式
     */
    public $PayMode;

    /**
     * @var string 到期时间
     */
    public $PeriodEndTime;

    /**
     * @var integer 项目id
     */
    public $ProjectID;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var integer 自动续费标识，1为自动续费，0为到期不续
     */
    public $RenewFlag;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 状态描述
     */
    public $StatusDesc;

    /**
     * @var integer 存储大小
     */
    public $Storage;

    /**
     * @var integer 使用容量
     */
    public $UsedStorage;

    /**
     * @var string vip地址
     */
    public $Vip;

    /**
     * @var integer vport端口
     */
    public $Vport;

    /**
     * @param integer $AppId 用户id
     * @param string $ClusterId 集群ID
     * @param string $ClusterName 集群名称
     * @param string $CreateTime 创建时间
     * @param string $DbVersion 数据库版本
     * @param array $InstanceSet 实例信息
     * @param integer $PayMode 付费模式
     * @param string $PeriodEndTime 到期时间
     * @param integer $ProjectID 项目id
     * @param string $Region 地域
     * @param integer $RenewFlag 自动续费标识，1为自动续费，0为到期不续
     * @param string $Status 状态
     * @param string $StatusDesc 状态描述
     * @param integer $Storage 存储大小
     * @param integer $UsedStorage 使用容量
     * @param string $Vip vip地址
     * @param integer $Vport vport端口
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DbVersion",$param) and $param["DbVersion"] !== null) {
            $this->DbVersion = $param["DbVersion"];
        }

        if (array_key_exists("InstanceSet",$param) and $param["InstanceSet"] !== null) {
            $this->InstanceSet = [];
            foreach ($param["InstanceSet"] as $key => $value){
                $obj = new LibraInstanceSet();
                $obj->deserialize($value);
                array_push($this->InstanceSet, $obj);
            }
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PeriodEndTime",$param) and $param["PeriodEndTime"] !== null) {
            $this->PeriodEndTime = $param["PeriodEndTime"];
        }

        if (array_key_exists("ProjectID",$param) and $param["ProjectID"] !== null) {
            $this->ProjectID = $param["ProjectID"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("UsedStorage",$param) and $param["UsedStorage"] !== null) {
            $this->UsedStorage = $param["UsedStorage"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }
    }
}
