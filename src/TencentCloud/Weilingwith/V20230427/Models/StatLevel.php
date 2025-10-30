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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 层级统计
 *
 * @method integer getTotal() 获取汇总数。在线（正常+故障） + 离线
 * @method void setTotal(integer $Total) 设置汇总数。在线（正常+故障） + 离线
 * @method integer getNormalSum() 获取正常数
 * @method void setNormalSum(integer $NormalSum) 设置正常数
 * @method integer getOfflineSum() 获取离线数
 * @method void setOfflineSum(integer $OfflineSum) 设置离线数
 * @method integer getFaultSum() 获取故障数
 * @method void setFaultSum(integer $FaultSum) 设置故障数
 * @method string getSpaceCode() 获取空间id
 * @method void setSpaceCode(string $SpaceCode) 设置空间id
 * @method array getStatDeviceTypeSet() 获取设备类型统计列表
 * @method void setStatDeviceTypeSet(array $StatDeviceTypeSet) 设置设备类型统计列表
 */
class StatLevel extends AbstractModel
{
    /**
     * @var integer 汇总数。在线（正常+故障） + 离线
     */
    public $Total;

    /**
     * @var integer 正常数
     */
    public $NormalSum;

    /**
     * @var integer 离线数
     */
    public $OfflineSum;

    /**
     * @var integer 故障数
     */
    public $FaultSum;

    /**
     * @var string 空间id
     */
    public $SpaceCode;

    /**
     * @var array 设备类型统计列表
     */
    public $StatDeviceTypeSet;

    /**
     * @param integer $Total 汇总数。在线（正常+故障） + 离线
     * @param integer $NormalSum 正常数
     * @param integer $OfflineSum 离线数
     * @param integer $FaultSum 故障数
     * @param string $SpaceCode 空间id
     * @param array $StatDeviceTypeSet 设备类型统计列表
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("NormalSum",$param) and $param["NormalSum"] !== null) {
            $this->NormalSum = $param["NormalSum"];
        }

        if (array_key_exists("OfflineSum",$param) and $param["OfflineSum"] !== null) {
            $this->OfflineSum = $param["OfflineSum"];
        }

        if (array_key_exists("FaultSum",$param) and $param["FaultSum"] !== null) {
            $this->FaultSum = $param["FaultSum"];
        }

        if (array_key_exists("SpaceCode",$param) and $param["SpaceCode"] !== null) {
            $this->SpaceCode = $param["SpaceCode"];
        }

        if (array_key_exists("StatDeviceTypeSet",$param) and $param["StatDeviceTypeSet"] !== null) {
            $this->StatDeviceTypeSet = [];
            foreach ($param["StatDeviceTypeSet"] as $key => $value){
                $obj = new StatDeviceType();
                $obj->deserialize($value);
                array_push($this->StatDeviceTypeSet, $obj);
            }
        }
    }
}
