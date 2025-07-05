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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大屏主机3D图 列表
 *
 * @method string getRegion() 获取所有区域
 * @method void setRegion(string $Region) 设置所有区域
 * @method string getRegionName() 获取区域中文描述
 * @method void setRegionName(string $RegionName) 设置区域中文描述
 * @method array getMachines() 获取主机列表
 * @method void setMachines(array $Machines) 设置主机列表
 * @method integer getTotalCount() 获取此区域的主机总数
 * @method void setTotalCount(integer $TotalCount) 设置此区域的主机总数
 * @method integer getRiskCnt() 获取风险主机数量
 * @method void setRiskCnt(integer $RiskCnt) 设置风险主机数量
 * @method integer getAttackCnt() 获取潜在风险主机数
 * @method void setAttackCnt(integer $AttackCnt) 设置潜在风险主机数
 * @method integer getSafetyCnt() 获取无风险主机数
 * @method void setSafetyCnt(integer $SafetyCnt) 设置无风险主机数
 * @method integer getUnAgentOfflineCnt() 获取离线/未安装主机数
 * @method void setUnAgentOfflineCnt(integer $UnAgentOfflineCnt) 设置离线/未安装主机数
 * @method integer getIgnoreCnt() 获取省略展示多少主机，等于0时没有省略展示
 * @method void setIgnoreCnt(integer $IgnoreCnt) 设置省略展示多少主机，等于0时没有省略展示
 */
class ScreenRegionMachines extends AbstractModel
{
    /**
     * @var string 所有区域
     */
    public $Region;

    /**
     * @var string 区域中文描述
     */
    public $RegionName;

    /**
     * @var array 主机列表
     */
    public $Machines;

    /**
     * @var integer 此区域的主机总数
     */
    public $TotalCount;

    /**
     * @var integer 风险主机数量
     */
    public $RiskCnt;

    /**
     * @var integer 潜在风险主机数
     */
    public $AttackCnt;

    /**
     * @var integer 无风险主机数
     */
    public $SafetyCnt;

    /**
     * @var integer 离线/未安装主机数
     */
    public $UnAgentOfflineCnt;

    /**
     * @var integer 省略展示多少主机，等于0时没有省略展示
     */
    public $IgnoreCnt;

    /**
     * @param string $Region 所有区域
     * @param string $RegionName 区域中文描述
     * @param array $Machines 主机列表
     * @param integer $TotalCount 此区域的主机总数
     * @param integer $RiskCnt 风险主机数量
     * @param integer $AttackCnt 潜在风险主机数
     * @param integer $SafetyCnt 无风险主机数
     * @param integer $UnAgentOfflineCnt 离线/未安装主机数
     * @param integer $IgnoreCnt 省略展示多少主机，等于0时没有省略展示
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("Machines",$param) and $param["Machines"] !== null) {
            $this->Machines = [];
            foreach ($param["Machines"] as $key => $value){
                $obj = new ScreenMachine();
                $obj->deserialize($value);
                array_push($this->Machines, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RiskCnt",$param) and $param["RiskCnt"] !== null) {
            $this->RiskCnt = $param["RiskCnt"];
        }

        if (array_key_exists("AttackCnt",$param) and $param["AttackCnt"] !== null) {
            $this->AttackCnt = $param["AttackCnt"];
        }

        if (array_key_exists("SafetyCnt",$param) and $param["SafetyCnt"] !== null) {
            $this->SafetyCnt = $param["SafetyCnt"];
        }

        if (array_key_exists("UnAgentOfflineCnt",$param) and $param["UnAgentOfflineCnt"] !== null) {
            $this->UnAgentOfflineCnt = $param["UnAgentOfflineCnt"];
        }

        if (array_key_exists("IgnoreCnt",$param) and $param["IgnoreCnt"] !== null) {
            $this->IgnoreCnt = $param["IgnoreCnt"];
        }
    }
}
