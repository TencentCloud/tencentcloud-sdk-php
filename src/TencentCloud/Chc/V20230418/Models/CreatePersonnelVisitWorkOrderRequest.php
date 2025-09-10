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
 * CreatePersonnelVisitWorkOrder请求参数结构体
 *
 * @method array getPersonnelSet() 获取到访人员信息
 * @method void setPersonnelSet(array $PersonnelSet) 设置到访人员信息
 * @method integer getIdcId() 获取机房 ID
 * @method void setIdcId(integer $IdcId) 设置机房 ID
 * @method array getIdcUnitIdSet() 获取机房管理单元列表
 * @method void setIdcUnitIdSet(array $IdcUnitIdSet) 设置机房管理单元列表
 * @method string getEnterStartTime() 获取到访开始时间
 * @method void setEnterStartTime(string $EnterStartTime) 设置到访开始时间
 * @method string getEnterEndTime() 获取到访结束时间
 * @method void setEnterEndTime(string $EnterEndTime) 设置到访结束时间
 * @method array getVisitReason() 获取到访原因，映射关系：IT_OPERATION IT运维 OTHER 其他
 * @method void setVisitReason(array $VisitReason) 设置到访原因，映射关系：IT_OPERATION IT运维 OTHER 其他
 * @method string getVisitRemark() 获取到访说明
 * @method void setVisitRemark(string $VisitRemark) 设置到访说明
 * @method array getCarSet() 获取到访人员车辆信息
 * @method void setCarSet(array $CarSet) 设置到访人员车辆信息
 */
class CreatePersonnelVisitWorkOrderRequest extends AbstractModel
{
    /**
     * @var array 到访人员信息
     */
    public $PersonnelSet;

    /**
     * @var integer 机房 ID
     */
    public $IdcId;

    /**
     * @var array 机房管理单元列表
     */
    public $IdcUnitIdSet;

    /**
     * @var string 到访开始时间
     */
    public $EnterStartTime;

    /**
     * @var string 到访结束时间
     */
    public $EnterEndTime;

    /**
     * @var array 到访原因，映射关系：IT_OPERATION IT运维 OTHER 其他
     */
    public $VisitReason;

    /**
     * @var string 到访说明
     */
    public $VisitRemark;

    /**
     * @var array 到访人员车辆信息
     */
    public $CarSet;

    /**
     * @param array $PersonnelSet 到访人员信息
     * @param integer $IdcId 机房 ID
     * @param array $IdcUnitIdSet 机房管理单元列表
     * @param string $EnterStartTime 到访开始时间
     * @param string $EnterEndTime 到访结束时间
     * @param array $VisitReason 到访原因，映射关系：IT_OPERATION IT运维 OTHER 其他
     * @param string $VisitRemark 到访说明
     * @param array $CarSet 到访人员车辆信息
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
        if (array_key_exists("PersonnelSet",$param) and $param["PersonnelSet"] !== null) {
            $this->PersonnelSet = [];
            foreach ($param["PersonnelSet"] as $key => $value){
                $obj = new Personnel();
                $obj->deserialize($value);
                array_push($this->PersonnelSet, $obj);
            }
        }

        if (array_key_exists("IdcId",$param) and $param["IdcId"] !== null) {
            $this->IdcId = $param["IdcId"];
        }

        if (array_key_exists("IdcUnitIdSet",$param) and $param["IdcUnitIdSet"] !== null) {
            $this->IdcUnitIdSet = $param["IdcUnitIdSet"];
        }

        if (array_key_exists("EnterStartTime",$param) and $param["EnterStartTime"] !== null) {
            $this->EnterStartTime = $param["EnterStartTime"];
        }

        if (array_key_exists("EnterEndTime",$param) and $param["EnterEndTime"] !== null) {
            $this->EnterEndTime = $param["EnterEndTime"];
        }

        if (array_key_exists("VisitReason",$param) and $param["VisitReason"] !== null) {
            $this->VisitReason = $param["VisitReason"];
        }

        if (array_key_exists("VisitRemark",$param) and $param["VisitRemark"] !== null) {
            $this->VisitRemark = $param["VisitRemark"];
        }

        if (array_key_exists("CarSet",$param) and $param["CarSet"] !== null) {
            $this->CarSet = [];
            foreach ($param["CarSet"] as $key => $value){
                $obj = new PersonnelVisitCar();
                $obj->deserialize($value);
                array_push($this->CarSet, $obj);
            }
        }
    }
}
