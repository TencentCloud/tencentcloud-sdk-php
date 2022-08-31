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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分账信息结果
 *
 * @method string getRecvId() 获取接收方企业ID
 * @method void setRecvId(string $RecvId) 设置接收方企业ID
 * @method integer getProfitShareFee() 获取分润金额（分）
 * @method void setProfitShareFee(integer $ProfitShareFee) 设置分润金额（分）
 * @method integer getRealProfitShareFee() 获取实际分账金额
 * @method void setRealProfitShareFee(integer $RealProfitShareFee) 设置实际分账金额
 * @method string getProfitShareStatus() 获取分账状态
 * @method void setProfitShareStatus(string $ProfitShareStatus) 设置分账状态
 * @method string getProfitFinishTime() 获取分账完成时间
 * @method void setProfitFinishTime(string $ProfitFinishTime) 设置分账完成时间
 * @method integer getProfitShareType() 获取分账类型
 * @method void setProfitShareType(integer $ProfitShareType) 设置分账类型
 */
class OpenBankProfitShareRespInfo extends AbstractModel
{
    /**
     * @var string 接收方企业ID
     */
    public $RecvId;

    /**
     * @var integer 分润金额（分）
     */
    public $ProfitShareFee;

    /**
     * @var integer 实际分账金额
     */
    public $RealProfitShareFee;

    /**
     * @var string 分账状态
     */
    public $ProfitShareStatus;

    /**
     * @var string 分账完成时间
     */
    public $ProfitFinishTime;

    /**
     * @var integer 分账类型
     */
    public $ProfitShareType;

    /**
     * @param string $RecvId 接收方企业ID
     * @param integer $ProfitShareFee 分润金额（分）
     * @param integer $RealProfitShareFee 实际分账金额
     * @param string $ProfitShareStatus 分账状态
     * @param string $ProfitFinishTime 分账完成时间
     * @param integer $ProfitShareType 分账类型
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
        if (array_key_exists("RecvId",$param) and $param["RecvId"] !== null) {
            $this->RecvId = $param["RecvId"];
        }

        if (array_key_exists("ProfitShareFee",$param) and $param["ProfitShareFee"] !== null) {
            $this->ProfitShareFee = $param["ProfitShareFee"];
        }

        if (array_key_exists("RealProfitShareFee",$param) and $param["RealProfitShareFee"] !== null) {
            $this->RealProfitShareFee = $param["RealProfitShareFee"];
        }

        if (array_key_exists("ProfitShareStatus",$param) and $param["ProfitShareStatus"] !== null) {
            $this->ProfitShareStatus = $param["ProfitShareStatus"];
        }

        if (array_key_exists("ProfitFinishTime",$param) and $param["ProfitFinishTime"] !== null) {
            $this->ProfitFinishTime = $param["ProfitFinishTime"];
        }

        if (array_key_exists("ProfitShareType",$param) and $param["ProfitShareType"] !== null) {
            $this->ProfitShareType = $param["ProfitShareType"];
        }
    }
}
