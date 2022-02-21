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
 * 云企付-分润信息
 *
 * @method string getRecvId() 获取分润接收方，渠道商户号ID
 * @method void setRecvId(string $RecvId) 设置分润接收方，渠道商户号ID
 * @method integer getProfitShareFee() 获取分润金额，单位分
 * @method void setProfitShareFee(integer $ProfitShareFee) 设置分润金额，单位分
 */
class OpenBankProfitShareInfo extends AbstractModel
{
    /**
     * @var string 分润接收方，渠道商户号ID
     */
    public $RecvId;

    /**
     * @var integer 分润金额，单位分
     */
    public $ProfitShareFee;

    /**
     * @param string $RecvId 分润接收方，渠道商户号ID
     * @param integer $ProfitShareFee 分润金额，单位分
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
    }
}
