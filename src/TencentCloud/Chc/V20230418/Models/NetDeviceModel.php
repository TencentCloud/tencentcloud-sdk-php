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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络设备型号详情
 *
 * @method string getVersion() 获取版本号
 * @method void setVersion(string $Version) 设置版本号
 * @method string getModelVersion() 获取型号和版本的组合名称
 * @method void setModelVersion(string $ModelVersion) 设置型号和版本的组合名称
 * @method string getDevModel() 获取型号名
 * @method void setDevModel(string $DevModel) 设置型号名
 * @method string getDevWidth() 获取宽度
 * @method void setDevWidth(string $DevWidth) 设置宽度
 * @method string getDevDepth() 获取深度
 * @method void setDevDepth(string $DevDepth) 设置深度
 * @method string getDevWeight() 获取重量
 * @method void setDevWeight(string $DevWeight) 设置重量
 * @method string getMountEar() 获取是否携带挂耳
 * @method void setMountEar(string $MountEar) 设置是否携带挂耳
 * @method string getAccordCCC() 获取是否符合CCC认证
 * @method void setAccordCCC(string $AccordCCC) 设置是否符合CCC认证
 * @method string getPassNetwork() 获取是否通过入网许可认证
 * @method void setPassNetwork(string $PassNetwork) 设置是否通过入网许可认证
 * @method string getPowerportType() 获取电源接口型号
 * @method void setPowerportType(string $PowerportType) 设置电源接口型号
 * @method string getPowerModule() 获取电源模块
 * @method void setPowerModule(string $PowerModule) 设置电源模块
 * @method string getPowermoduleNum() 获取电源模块数量
 * @method void setPowermoduleNum(string $PowermoduleNum) 设置电源模块数量
 * @method string getPowermodulePosition() 获取电源模块位置
 * @method void setPowermodulePosition(string $PowermodulePosition) 设置电源模块位置
 * @method string getHighVoltageAdapt() 获取高压直流自适应
 * @method void setHighVoltageAdapt(string $HighVoltageAdapt) 设置高压直流自适应
 * @method string getPowerEnergy() 获取实际工作功耗(W)
 * @method void setPowerEnergy(string $PowerEnergy) 设置实际工作功耗(W)
 * @method string getInwindPosition() 获取进风口位置
 * @method void setInwindPosition(string $InwindPosition) 设置进风口位置
 * @method string getOutwindPosition() 获取出风口位置
 * @method void setOutwindPosition(string $OutwindPosition) 设置出风口位置
 * @method string getBusinessPortPosition() 获取业务端口位置
 * @method void setBusinessPortPosition(string $BusinessPortPosition) 设置业务端口位置
 * @method string getLineManager() 获取带有理线器
 * @method void setLineManager(string $LineManager) 设置带有理线器
 * @method integer getCheckResult() 获取0 代表在当前园区没评估过，1 代表完全满足IDC准入标准  2 代表存在托管风险  3 代表不满足IDC准入标准
 * @method void setCheckResult(integer $CheckResult) 设置0 代表在当前园区没评估过，1 代表完全满足IDC准入标准  2 代表存在托管风险  3 代表不满足IDC准入标准
 * @method string getDevHeight() 获取设备高度
 * @method void setDevHeight(string $DevHeight) 设置设备高度
 */
class NetDeviceModel extends AbstractModel
{
    /**
     * @var string 版本号
     */
    public $Version;

    /**
     * @var string 型号和版本的组合名称
     */
    public $ModelVersion;

    /**
     * @var string 型号名
     */
    public $DevModel;

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
     * @var string 是否携带挂耳
     */
    public $MountEar;

    /**
     * @var string 是否符合CCC认证
     */
    public $AccordCCC;

    /**
     * @var string 是否通过入网许可认证
     */
    public $PassNetwork;

    /**
     * @var string 电源接口型号
     */
    public $PowerportType;

    /**
     * @var string 电源模块
     */
    public $PowerModule;

    /**
     * @var string 电源模块数量
     */
    public $PowermoduleNum;

    /**
     * @var string 电源模块位置
     */
    public $PowermodulePosition;

    /**
     * @var string 高压直流自适应
     */
    public $HighVoltageAdapt;

    /**
     * @var string 实际工作功耗(W)
     */
    public $PowerEnergy;

    /**
     * @var string 进风口位置
     */
    public $InwindPosition;

    /**
     * @var string 出风口位置
     */
    public $OutwindPosition;

    /**
     * @var string 业务端口位置
     */
    public $BusinessPortPosition;

    /**
     * @var string 带有理线器
     */
    public $LineManager;

    /**
     * @var integer 0 代表在当前园区没评估过，1 代表完全满足IDC准入标准  2 代表存在托管风险  3 代表不满足IDC准入标准
     */
    public $CheckResult;

    /**
     * @var string 设备高度
     */
    public $DevHeight;

    /**
     * @param string $Version 版本号
     * @param string $ModelVersion 型号和版本的组合名称
     * @param string $DevModel 型号名
     * @param string $DevWidth 宽度
     * @param string $DevDepth 深度
     * @param string $DevWeight 重量
     * @param string $MountEar 是否携带挂耳
     * @param string $AccordCCC 是否符合CCC认证
     * @param string $PassNetwork 是否通过入网许可认证
     * @param string $PowerportType 电源接口型号
     * @param string $PowerModule 电源模块
     * @param string $PowermoduleNum 电源模块数量
     * @param string $PowermodulePosition 电源模块位置
     * @param string $HighVoltageAdapt 高压直流自适应
     * @param string $PowerEnergy 实际工作功耗(W)
     * @param string $InwindPosition 进风口位置
     * @param string $OutwindPosition 出风口位置
     * @param string $BusinessPortPosition 业务端口位置
     * @param string $LineManager 带有理线器
     * @param integer $CheckResult 0 代表在当前园区没评估过，1 代表完全满足IDC准入标准  2 代表存在托管风险  3 代表不满足IDC准入标准
     * @param string $DevHeight 设备高度
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("ModelVersion",$param) and $param["ModelVersion"] !== null) {
            $this->ModelVersion = $param["ModelVersion"];
        }

        if (array_key_exists("DevModel",$param) and $param["DevModel"] !== null) {
            $this->DevModel = $param["DevModel"];
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

        if (array_key_exists("MountEar",$param) and $param["MountEar"] !== null) {
            $this->MountEar = $param["MountEar"];
        }

        if (array_key_exists("AccordCCC",$param) and $param["AccordCCC"] !== null) {
            $this->AccordCCC = $param["AccordCCC"];
        }

        if (array_key_exists("PassNetwork",$param) and $param["PassNetwork"] !== null) {
            $this->PassNetwork = $param["PassNetwork"];
        }

        if (array_key_exists("PowerportType",$param) and $param["PowerportType"] !== null) {
            $this->PowerportType = $param["PowerportType"];
        }

        if (array_key_exists("PowerModule",$param) and $param["PowerModule"] !== null) {
            $this->PowerModule = $param["PowerModule"];
        }

        if (array_key_exists("PowermoduleNum",$param) and $param["PowermoduleNum"] !== null) {
            $this->PowermoduleNum = $param["PowermoduleNum"];
        }

        if (array_key_exists("PowermodulePosition",$param) and $param["PowermodulePosition"] !== null) {
            $this->PowermodulePosition = $param["PowermodulePosition"];
        }

        if (array_key_exists("HighVoltageAdapt",$param) and $param["HighVoltageAdapt"] !== null) {
            $this->HighVoltageAdapt = $param["HighVoltageAdapt"];
        }

        if (array_key_exists("PowerEnergy",$param) and $param["PowerEnergy"] !== null) {
            $this->PowerEnergy = $param["PowerEnergy"];
        }

        if (array_key_exists("InwindPosition",$param) and $param["InwindPosition"] !== null) {
            $this->InwindPosition = $param["InwindPosition"];
        }

        if (array_key_exists("OutwindPosition",$param) and $param["OutwindPosition"] !== null) {
            $this->OutwindPosition = $param["OutwindPosition"];
        }

        if (array_key_exists("BusinessPortPosition",$param) and $param["BusinessPortPosition"] !== null) {
            $this->BusinessPortPosition = $param["BusinessPortPosition"];
        }

        if (array_key_exists("LineManager",$param) and $param["LineManager"] !== null) {
            $this->LineManager = $param["LineManager"];
        }

        if (array_key_exists("CheckResult",$param) and $param["CheckResult"] !== null) {
            $this->CheckResult = $param["CheckResult"];
        }

        if (array_key_exists("DevHeight",$param) and $param["DevHeight"] !== null) {
            $this->DevHeight = $param["DevHeight"];
        }
    }
}
