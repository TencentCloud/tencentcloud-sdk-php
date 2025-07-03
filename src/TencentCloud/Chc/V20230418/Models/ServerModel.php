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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务器设备型号
 *
 * @method string getDevModel() 获取型号名称
 * @method void setDevModel(string $DevModel) 设置型号名称
 * @method string getDevNode() 获取节点数
 * @method void setDevNode(string $DevNode) 设置节点数
 * @method string getDevHeight() 获取设备高度
 * @method void setDevHeight(string $DevHeight) 设置设备高度
 * @method string getPowerEnergy() 获取功耗
 * @method void setPowerEnergy(string $PowerEnergy) 设置功耗
 * @method string getPowerportType() 获取电源接口型号
 * @method void setPowerportType(string $PowerportType) 设置电源接口型号
 * @method string getPowermoduleNum() 获取电源模块数量
 * @method void setPowermoduleNum(string $PowermoduleNum) 设置电源模块数量
 * @method string getInwindPosition() 获取进风口位置
 * @method void setInwindPosition(string $InwindPosition) 设置进风口位置
 * @method string getOutwindPosition() 获取出风口位置
 * @method void setOutwindPosition(string $OutwindPosition) 设置出风口位置
 * @method string getNetportPosition() 获取网卡接口位置
 * @method void setNetportPosition(string $NetportPosition) 设置网卡接口位置
 * @method string getDevWidth() 获取宽度
 * @method void setDevWidth(string $DevWidth) 设置宽度
 * @method string getDevDepth() 获取深度
 * @method void setDevDepth(string $DevDepth) 设置深度
 * @method string getDevWeight() 获取重量
 * @method void setDevWeight(string $DevWeight) 设置重量
 * @method string getPowerModule() 获取电源模块
 * @method void setPowerModule(string $PowerModule) 设置电源模块
 * @method string getPowermodulePosition() 获取电源模块位置
 * @method void setPowermodulePosition(string $PowermodulePosition) 设置电源模块位置
 * @method string getNetportType() 获取网络接口类型
 * @method void setNetportType(string $NetportType) 设置网络接口类型
 * @method string getNetSpeed() 获取网卡速率
 * @method void setNetSpeed(string $NetSpeed) 设置网卡速率
 * @method integer getCheckResult() 获取0 代表在当前园区没评估过，1 代表完全满足IDC准入标准 2 代表存在托管风险 3 代表不满足IDC准入标准
 * @method void setCheckResult(integer $CheckResult) 设置0 代表在当前园区没评估过，1 代表完全满足IDC准入标准 2 代表存在托管风险 3 代表不满足IDC准入标准
 * @method string getVersion() 获取版本号
 * @method void setVersion(string $Version) 设置版本号
 * @method string getModelVersion() 获取型号和版本的组合名称
 * @method void setModelVersion(string $ModelVersion) 设置型号和版本的组合名称
 */
class ServerModel extends AbstractModel
{
    /**
     * @var string 型号名称
     */
    public $DevModel;

    /**
     * @var string 节点数
     */
    public $DevNode;

    /**
     * @var string 设备高度
     */
    public $DevHeight;

    /**
     * @var string 功耗
     */
    public $PowerEnergy;

    /**
     * @var string 电源接口型号
     */
    public $PowerportType;

    /**
     * @var string 电源模块数量
     */
    public $PowermoduleNum;

    /**
     * @var string 进风口位置
     */
    public $InwindPosition;

    /**
     * @var string 出风口位置
     */
    public $OutwindPosition;

    /**
     * @var string 网卡接口位置
     */
    public $NetportPosition;

    /**
     * @var string 宽度
     */
    public $DevWidth;

    /**
     * @var string 深度
     */
    public $DevDepth;

    /**
     * @var string 重量
     */
    public $DevWeight;

    /**
     * @var string 电源模块
     */
    public $PowerModule;

    /**
     * @var string 电源模块位置
     */
    public $PowermodulePosition;

    /**
     * @var string 网络接口类型
     */
    public $NetportType;

    /**
     * @var string 网卡速率
     */
    public $NetSpeed;

    /**
     * @var integer 0 代表在当前园区没评估过，1 代表完全满足IDC准入标准 2 代表存在托管风险 3 代表不满足IDC准入标准
     */
    public $CheckResult;

    /**
     * @var string 版本号
     */
    public $Version;

    /**
     * @var string 型号和版本的组合名称
     */
    public $ModelVersion;

    /**
     * @param string $DevModel 型号名称
     * @param string $DevNode 节点数
     * @param string $DevHeight 设备高度
     * @param string $PowerEnergy 功耗
     * @param string $PowerportType 电源接口型号
     * @param string $PowermoduleNum 电源模块数量
     * @param string $InwindPosition 进风口位置
     * @param string $OutwindPosition 出风口位置
     * @param string $NetportPosition 网卡接口位置
     * @param string $DevWidth 宽度
     * @param string $DevDepth 深度
     * @param string $DevWeight 重量
     * @param string $PowerModule 电源模块
     * @param string $PowermodulePosition 电源模块位置
     * @param string $NetportType 网络接口类型
     * @param string $NetSpeed 网卡速率
     * @param integer $CheckResult 0 代表在当前园区没评估过，1 代表完全满足IDC准入标准 2 代表存在托管风险 3 代表不满足IDC准入标准
     * @param string $Version 版本号
     * @param string $ModelVersion 型号和版本的组合名称
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
        if (array_key_exists("DevModel",$param) and $param["DevModel"] !== null) {
            $this->DevModel = $param["DevModel"];
        }

        if (array_key_exists("DevNode",$param) and $param["DevNode"] !== null) {
            $this->DevNode = $param["DevNode"];
        }

        if (array_key_exists("DevHeight",$param) and $param["DevHeight"] !== null) {
            $this->DevHeight = $param["DevHeight"];
        }

        if (array_key_exists("PowerEnergy",$param) and $param["PowerEnergy"] !== null) {
            $this->PowerEnergy = $param["PowerEnergy"];
        }

        if (array_key_exists("PowerportType",$param) and $param["PowerportType"] !== null) {
            $this->PowerportType = $param["PowerportType"];
        }

        if (array_key_exists("PowermoduleNum",$param) and $param["PowermoduleNum"] !== null) {
            $this->PowermoduleNum = $param["PowermoduleNum"];
        }

        if (array_key_exists("InwindPosition",$param) and $param["InwindPosition"] !== null) {
            $this->InwindPosition = $param["InwindPosition"];
        }

        if (array_key_exists("OutwindPosition",$param) and $param["OutwindPosition"] !== null) {
            $this->OutwindPosition = $param["OutwindPosition"];
        }

        if (array_key_exists("NetportPosition",$param) and $param["NetportPosition"] !== null) {
            $this->NetportPosition = $param["NetportPosition"];
        }

        if (array_key_exists("DevWidth",$param) and $param["DevWidth"] !== null) {
            $this->DevWidth = $param["DevWidth"];
        }

        if (array_key_exists("DevDepth",$param) and $param["DevDepth"] !== null) {
            $this->DevDepth = $param["DevDepth"];
        }

        if (array_key_exists("DevWeight",$param) and $param["DevWeight"] !== null) {
            $this->DevWeight = $param["DevWeight"];
        }

        if (array_key_exists("PowerModule",$param) and $param["PowerModule"] !== null) {
            $this->PowerModule = $param["PowerModule"];
        }

        if (array_key_exists("PowermodulePosition",$param) and $param["PowermodulePosition"] !== null) {
            $this->PowermodulePosition = $param["PowermodulePosition"];
        }

        if (array_key_exists("NetportType",$param) and $param["NetportType"] !== null) {
            $this->NetportType = $param["NetportType"];
        }

        if (array_key_exists("NetSpeed",$param) and $param["NetSpeed"] !== null) {
            $this->NetSpeed = $param["NetSpeed"];
        }

        if (array_key_exists("CheckResult",$param) and $param["CheckResult"] !== null) {
            $this->CheckResult = $param["CheckResult"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }
    }
}
