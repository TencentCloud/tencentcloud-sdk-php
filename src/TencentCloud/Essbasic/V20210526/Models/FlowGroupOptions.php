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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合同组的配置项信息包括：在合同组签署过程中，是否需要对每个子合同进行独立的意愿确认。
 *
 * @method boolean getSelfOrganizationApproverSignEach() 获取发起方企业经办人（即签署人为发起方企业员工）是否需要对子合同进行独立的意愿确认：
fasle：发起方企业经办人签署时对所有子合同进行统一的意愿确认
true：发起方企业经办人签署时需要对子合同进行独立的意愿确认
默认为fasle。
 * @method void setSelfOrganizationApproverSignEach(boolean $SelfOrganizationApproverSignEach) 设置发起方企业经办人（即签署人为发起方企业员工）是否需要对子合同进行独立的意愿确认：
fasle：发起方企业经办人签署时对所有子合同进行统一的意愿确认
true：发起方企业经办人签署时需要对子合同进行独立的意愿确认
默认为fasle。
 * @method boolean getOtherApproverSignEach() 获取非发起方企业经办人（即：签署人为个人或者不为发起方企业的员工）是否需要对子合同进行独立的意愿确认：
fasle：非发起方企业经办人签署时对所有子合同进行统一的意愿确认
true：非发起方企业经办人签署时需要对子合同进行独立的意愿确认
默认为false。
 * @method void setOtherApproverSignEach(boolean $OtherApproverSignEach) 设置非发起方企业经办人（即：签署人为个人或者不为发起方企业的员工）是否需要对子合同进行独立的意愿确认：
fasle：非发起方企业经办人签署时对所有子合同进行统一的意愿确认
true：非发起方企业经办人签署时需要对子合同进行独立的意愿确认
默认为false。
 */
class FlowGroupOptions extends AbstractModel
{
    /**
     * @var boolean 发起方企业经办人（即签署人为发起方企业员工）是否需要对子合同进行独立的意愿确认：
fasle：发起方企业经办人签署时对所有子合同进行统一的意愿确认
true：发起方企业经办人签署时需要对子合同进行独立的意愿确认
默认为fasle。
     */
    public $SelfOrganizationApproverSignEach;

    /**
     * @var boolean 非发起方企业经办人（即：签署人为个人或者不为发起方企业的员工）是否需要对子合同进行独立的意愿确认：
fasle：非发起方企业经办人签署时对所有子合同进行统一的意愿确认
true：非发起方企业经办人签署时需要对子合同进行独立的意愿确认
默认为false。
     */
    public $OtherApproverSignEach;

    /**
     * @param boolean $SelfOrganizationApproverSignEach 发起方企业经办人（即签署人为发起方企业员工）是否需要对子合同进行独立的意愿确认：
fasle：发起方企业经办人签署时对所有子合同进行统一的意愿确认
true：发起方企业经办人签署时需要对子合同进行独立的意愿确认
默认为fasle。
     * @param boolean $OtherApproverSignEach 非发起方企业经办人（即：签署人为个人或者不为发起方企业的员工）是否需要对子合同进行独立的意愿确认：
fasle：非发起方企业经办人签署时对所有子合同进行统一的意愿确认
true：非发起方企业经办人签署时需要对子合同进行独立的意愿确认
默认为false。
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
        if (array_key_exists("SelfOrganizationApproverSignEach",$param) and $param["SelfOrganizationApproverSignEach"] !== null) {
            $this->SelfOrganizationApproverSignEach = $param["SelfOrganizationApproverSignEach"];
        }

        if (array_key_exists("OtherApproverSignEach",$param) and $param["OtherApproverSignEach"] !== null) {
            $this->OtherApproverSignEach = $param["OtherApproverSignEach"];
        }
    }
}
