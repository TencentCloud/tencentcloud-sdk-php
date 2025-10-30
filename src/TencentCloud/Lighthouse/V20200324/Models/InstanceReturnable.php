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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例可退还信息。
 *
 * @method string getInstanceId() 获取实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。
 * @method boolean getIsReturnable() 获取实例是否可退还。
 * @method void setIsReturnable(boolean $IsReturnable) 设置实例是否可退还。
 * @method integer getReturnFailCode() 获取实例退还失败错误码。取值:
0: 可以退还
1: 资源已退货。
2: 资源已到期
3: 资源购买超过5天不支持退款
4: 非预付费资源不支持退款
8: 退货数量超出限额
9: 涉及活动订单不支持退款
10: 资源不支持自助退，请走工单退款
11: 涉及推广奖励渠道订单，请提工单咨询
12: 根据业务侧产品规定，该资源不允许退款
 * @method void setReturnFailCode(integer $ReturnFailCode) 设置实例退还失败错误码。取值:
0: 可以退还
1: 资源已退货。
2: 资源已到期
3: 资源购买超过5天不支持退款
4: 非预付费资源不支持退款
8: 退货数量超出限额
9: 涉及活动订单不支持退款
10: 资源不支持自助退，请走工单退款
11: 涉及推广奖励渠道订单，请提工单咨询
12: 根据业务侧产品规定，该资源不允许退款
 * @method string getReturnFailMessage() 获取实例退还失败错误信息。
 * @method void setReturnFailMessage(string $ReturnFailMessage) 设置实例退还失败错误信息。
 */
class InstanceReturnable extends AbstractModel
{
    /**
     * @var string 实例 ID。
     */
    public $InstanceId;

    /**
     * @var boolean 实例是否可退还。
     */
    public $IsReturnable;

    /**
     * @var integer 实例退还失败错误码。取值:
0: 可以退还
1: 资源已退货。
2: 资源已到期
3: 资源购买超过5天不支持退款
4: 非预付费资源不支持退款
8: 退货数量超出限额
9: 涉及活动订单不支持退款
10: 资源不支持自助退，请走工单退款
11: 涉及推广奖励渠道订单，请提工单咨询
12: 根据业务侧产品规定，该资源不允许退款
     */
    public $ReturnFailCode;

    /**
     * @var string 实例退还失败错误信息。
     */
    public $ReturnFailMessage;

    /**
     * @param string $InstanceId 实例 ID。
     * @param boolean $IsReturnable 实例是否可退还。
     * @param integer $ReturnFailCode 实例退还失败错误码。取值:
0: 可以退还
1: 资源已退货。
2: 资源已到期
3: 资源购买超过5天不支持退款
4: 非预付费资源不支持退款
8: 退货数量超出限额
9: 涉及活动订单不支持退款
10: 资源不支持自助退，请走工单退款
11: 涉及推广奖励渠道订单，请提工单咨询
12: 根据业务侧产品规定，该资源不允许退款
     * @param string $ReturnFailMessage 实例退还失败错误信息。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("IsReturnable",$param) and $param["IsReturnable"] !== null) {
            $this->IsReturnable = $param["IsReturnable"];
        }

        if (array_key_exists("ReturnFailCode",$param) and $param["ReturnFailCode"] !== null) {
            $this->ReturnFailCode = $param["ReturnFailCode"];
        }

        if (array_key_exists("ReturnFailMessage",$param) and $param["ReturnFailMessage"] !== null) {
            $this->ReturnFailMessage = $param["ReturnFailMessage"];
        }
    }
}
