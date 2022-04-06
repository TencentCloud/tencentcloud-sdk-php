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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CRM统计数据响应
 *
 * @method integer getLeadCnt() 获取新增线索
 * @method void setLeadCnt(integer $LeadCnt) 设置新增线索
 * @method integer getBuildCnt() 获取新增建档
 * @method void setBuildCnt(integer $BuildCnt) 设置新增建档
 * @method integer getInvitedCnt() 获取新增到店
 * @method void setInvitedCnt(integer $InvitedCnt) 设置新增到店
 * @method integer getOrderedCnt() 获取新增下订
 * @method void setOrderedCnt(integer $OrderedCnt) 设置新增下订
 * @method integer getDeliveredCnt() 获取新增成交
 * @method void setDeliveredCnt(integer $DeliveredCnt) 设置新增成交
 * @method integer getDefeatCnt() 获取新增战败
 * @method void setDefeatCnt(integer $DefeatCnt) 设置新增战败
 * @method integer getNewContactCnt() 获取新增好友
 * @method void setNewContactCnt(integer $NewContactCnt) 设置新增好友
 * @method string getStatisticalTime() 获取统计时间, 单位：天
 * @method void setStatisticalTime(string $StatisticalTime) 设置统计时间, 单位：天
 */
class CrmStatisticsData extends AbstractModel
{
    /**
     * @var integer 新增线索
     */
    public $LeadCnt;

    /**
     * @var integer 新增建档
     */
    public $BuildCnt;

    /**
     * @var integer 新增到店
     */
    public $InvitedCnt;

    /**
     * @var integer 新增下订
     */
    public $OrderedCnt;

    /**
     * @var integer 新增成交
     */
    public $DeliveredCnt;

    /**
     * @var integer 新增战败
     */
    public $DefeatCnt;

    /**
     * @var integer 新增好友
     */
    public $NewContactCnt;

    /**
     * @var string 统计时间, 单位：天
     */
    public $StatisticalTime;

    /**
     * @param integer $LeadCnt 新增线索
     * @param integer $BuildCnt 新增建档
     * @param integer $InvitedCnt 新增到店
     * @param integer $OrderedCnt 新增下订
     * @param integer $DeliveredCnt 新增成交
     * @param integer $DefeatCnt 新增战败
     * @param integer $NewContactCnt 新增好友
     * @param string $StatisticalTime 统计时间, 单位：天
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
        if (array_key_exists("LeadCnt",$param) and $param["LeadCnt"] !== null) {
            $this->LeadCnt = $param["LeadCnt"];
        }

        if (array_key_exists("BuildCnt",$param) and $param["BuildCnt"] !== null) {
            $this->BuildCnt = $param["BuildCnt"];
        }

        if (array_key_exists("InvitedCnt",$param) and $param["InvitedCnt"] !== null) {
            $this->InvitedCnt = $param["InvitedCnt"];
        }

        if (array_key_exists("OrderedCnt",$param) and $param["OrderedCnt"] !== null) {
            $this->OrderedCnt = $param["OrderedCnt"];
        }

        if (array_key_exists("DeliveredCnt",$param) and $param["DeliveredCnt"] !== null) {
            $this->DeliveredCnt = $param["DeliveredCnt"];
        }

        if (array_key_exists("DefeatCnt",$param) and $param["DefeatCnt"] !== null) {
            $this->DefeatCnt = $param["DefeatCnt"];
        }

        if (array_key_exists("NewContactCnt",$param) and $param["NewContactCnt"] !== null) {
            $this->NewContactCnt = $param["NewContactCnt"];
        }

        if (array_key_exists("StatisticalTime",$param) and $param["StatisticalTime"] !== null) {
            $this->StatisticalTime = $param["StatisticalTime"];
        }
    }
}
