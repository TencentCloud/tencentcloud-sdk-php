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
 * 人员到访工单基本信息
 *
 * @method string getIdcName() 获取机房名称
 * @method void setIdcName(string $IdcName) 设置机房名称
 * @method array getVisitReason() 获取到访原因。到访原因，映射关系：DEVICE_MAINTENANCE 设备维护 DEVICE_MOVE 设备收货上下架 CHECK 盘点 OTHER 其他
 * @method void setVisitReason(array $VisitReason) 设置到访原因。到访原因，映射关系：DEVICE_MAINTENANCE 设备维护 DEVICE_MOVE 设备收货上下架 CHECK 盘点 OTHER 其他
 * @method string getVisitRemark() 获取到访原因
 * @method void setVisitRemark(string $VisitRemark) 设置到访原因
 * @method string getEnterStartTime() 获取到访结束时间
 * @method void setEnterStartTime(string $EnterStartTime) 设置到访结束时间
 * @method string getEnterEndTime() 获取到访开始时间
 * @method void setEnterEndTime(string $EnterEndTime) 设置到访开始时间
 * @method array getIdcUnitNameList() 获取机房管理单元列表
 * @method void setIdcUnitNameList(array $IdcUnitNameList) 设置机房管理单元列表
 */
class PersonnelVisitBaseInfo extends AbstractModel
{
    /**
     * @var string 机房名称
     */
    public $IdcName;

    /**
     * @var array 到访原因。到访原因，映射关系：DEVICE_MAINTENANCE 设备维护 DEVICE_MOVE 设备收货上下架 CHECK 盘点 OTHER 其他
     */
    public $VisitReason;

    /**
     * @var string 到访原因
     */
    public $VisitRemark;

    /**
     * @var string 到访结束时间
     */
    public $EnterStartTime;

    /**
     * @var string 到访开始时间
     */
    public $EnterEndTime;

    /**
     * @var array 机房管理单元列表
     */
    public $IdcUnitNameList;

    /**
     * @param string $IdcName 机房名称
     * @param array $VisitReason 到访原因。到访原因，映射关系：DEVICE_MAINTENANCE 设备维护 DEVICE_MOVE 设备收货上下架 CHECK 盘点 OTHER 其他
     * @param string $VisitRemark 到访原因
     * @param string $EnterStartTime 到访结束时间
     * @param string $EnterEndTime 到访开始时间
     * @param array $IdcUnitNameList 机房管理单元列表
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
        if (array_key_exists("IdcName",$param) and $param["IdcName"] !== null) {
            $this->IdcName = $param["IdcName"];
        }

        if (array_key_exists("VisitReason",$param) and $param["VisitReason"] !== null) {
            $this->VisitReason = $param["VisitReason"];
        }

        if (array_key_exists("VisitRemark",$param) and $param["VisitRemark"] !== null) {
            $this->VisitRemark = $param["VisitRemark"];
        }

        if (array_key_exists("EnterStartTime",$param) and $param["EnterStartTime"] !== null) {
            $this->EnterStartTime = $param["EnterStartTime"];
        }

        if (array_key_exists("EnterEndTime",$param) and $param["EnterEndTime"] !== null) {
            $this->EnterEndTime = $param["EnterEndTime"];
        }

        if (array_key_exists("IdcUnitNameList",$param) and $param["IdcUnitNameList"] !== null) {
            $this->IdcUnitNameList = $param["IdcUnitNameList"];
        }
    }
}
