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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作空间集群组信息
 *
 * @method string getClusterId() 获取clusterGroup 的 SerialId
 * @method void setClusterId(string $ClusterId) 设置clusterGroup 的 SerialId
 * @method string getName() 获取集群名称
 * @method void setName(string $Name) 设置集群名称
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method string getZone() 获取区
 * @method void setZone(string $Zone) 设置区
 * @method integer getAppId() 获取账号 APPID
 * @method void setAppId(integer $AppId) 设置账号 APPID
 * @method string getOwnerUin() 获取主账号 UIN
 * @method void setOwnerUin(string $OwnerUin) 设置主账号 UIN
 * @method string getCreatorUin() 获取创建账号 UIN
 * @method void setCreatorUin(string $CreatorUin) 设置创建账号 UIN
 * @method integer getCuNum() 获取CU 数量
 * @method void setCuNum(integer $CuNum) 设置CU 数量
 * @method integer getCuMem() 获取CU 内存规格
 * @method void setCuMem(integer $CuMem) 设置CU 内存规格
 * @method integer getStatus() 获取集群状态, 1 未初始化,，3 初始化中，2 运行中
 * @method void setStatus(integer $Status) 设置集群状态, 1 未初始化,，3 初始化中，2 运行中
 * @method string getStatusDesc() 获取状态描述
 * @method void setStatusDesc(string $StatusDesc) 设置状态描述
 * @method string getCreateTime() 获取集群创建时间
 * @method void setCreateTime(string $CreateTime) 设置集群创建时间
 * @method string getUpdateTime() 获取最后一次操作集群的时间
 * @method void setUpdateTime(string $UpdateTime) 设置最后一次操作集群的时间
 * @method string getRemark() 获取描述
 * @method void setRemark(string $Remark) 设置描述
 * @method integer getNetEnvironmentType() 获取网络
 * @method void setNetEnvironmentType(integer $NetEnvironmentType) 设置网络
 * @method integer getFreeCuNum() 获取空闲 CU
 * @method void setFreeCuNum(integer $FreeCuNum) 设置空闲 CU
 * @method float getFreeCu() 获取细粒度资源下的空闲CU
 * @method void setFreeCu(float $FreeCu) 设置细粒度资源下的空闲CU
 * @method float getRunningCu() 获取运行中CU
 * @method void setRunningCu(float $RunningCu) 设置运行中CU
 * @method integer getPayMode() 获取付费模式
 * @method void setPayMode(integer $PayMode) 设置付费模式
 */
class ClusterGroupSetItem extends AbstractModel
{
    /**
     * @var string clusterGroup 的 SerialId
     */
    public $ClusterId;

    /**
     * @var string 集群名称
     */
    public $Name;

    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var string 区
     */
    public $Zone;

    /**
     * @var integer 账号 APPID
     */
    public $AppId;

    /**
     * @var string 主账号 UIN
     */
    public $OwnerUin;

    /**
     * @var string 创建账号 UIN
     */
    public $CreatorUin;

    /**
     * @var integer CU 数量
     */
    public $CuNum;

    /**
     * @var integer CU 内存规格
     */
    public $CuMem;

    /**
     * @var integer 集群状态, 1 未初始化,，3 初始化中，2 运行中
     */
    public $Status;

    /**
     * @var string 状态描述
     */
    public $StatusDesc;

    /**
     * @var string 集群创建时间
     */
    public $CreateTime;

    /**
     * @var string 最后一次操作集群的时间
     */
    public $UpdateTime;

    /**
     * @var string 描述
     */
    public $Remark;

    /**
     * @var integer 网络
     */
    public $NetEnvironmentType;

    /**
     * @var integer 空闲 CU
     */
    public $FreeCuNum;

    /**
     * @var float 细粒度资源下的空闲CU
     */
    public $FreeCu;

    /**
     * @var float 运行中CU
     */
    public $RunningCu;

    /**
     * @var integer 付费模式
     */
    public $PayMode;

    /**
     * @param string $ClusterId clusterGroup 的 SerialId
     * @param string $Name 集群名称
     * @param string $Region 地域
     * @param string $Zone 区
     * @param integer $AppId 账号 APPID
     * @param string $OwnerUin 主账号 UIN
     * @param string $CreatorUin 创建账号 UIN
     * @param integer $CuNum CU 数量
     * @param integer $CuMem CU 内存规格
     * @param integer $Status 集群状态, 1 未初始化,，3 初始化中，2 运行中
     * @param string $StatusDesc 状态描述
     * @param string $CreateTime 集群创建时间
     * @param string $UpdateTime 最后一次操作集群的时间
     * @param string $Remark 描述
     * @param integer $NetEnvironmentType 网络
     * @param integer $FreeCuNum 空闲 CU
     * @param float $FreeCu 细粒度资源下的空闲CU
     * @param float $RunningCu 运行中CU
     * @param integer $PayMode 付费模式
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("CuNum",$param) and $param["CuNum"] !== null) {
            $this->CuNum = $param["CuNum"];
        }

        if (array_key_exists("CuMem",$param) and $param["CuMem"] !== null) {
            $this->CuMem = $param["CuMem"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("NetEnvironmentType",$param) and $param["NetEnvironmentType"] !== null) {
            $this->NetEnvironmentType = $param["NetEnvironmentType"];
        }

        if (array_key_exists("FreeCuNum",$param) and $param["FreeCuNum"] !== null) {
            $this->FreeCuNum = $param["FreeCuNum"];
        }

        if (array_key_exists("FreeCu",$param) and $param["FreeCu"] !== null) {
            $this->FreeCu = $param["FreeCu"];
        }

        if (array_key_exists("RunningCu",$param) and $param["RunningCu"] !== null) {
            $this->RunningCu = $param["RunningCu"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }
    }
}
