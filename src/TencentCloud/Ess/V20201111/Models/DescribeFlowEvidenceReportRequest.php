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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFlowEvidenceReport请求参数结构体
 *
 * @method UserInfo getOperator() 获取调用方用户信息，userId 必填
 * @method void setOperator(UserInfo $Operator) 设置调用方用户信息，userId 必填
 * @method string getReportId() 获取出证报告编号
 * @method void setReportId(string $ReportId) 设置出证报告编号
 */
class DescribeFlowEvidenceReportRequest extends AbstractModel
{
    /**
     * @var UserInfo 调用方用户信息，userId 必填
     */
    public $Operator;

    /**
     * @var string 出证报告编号
     */
    public $ReportId;

    /**
     * @param UserInfo $Operator 调用方用户信息，userId 必填
     * @param string $ReportId 出证报告编号
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("ReportId",$param) and $param["ReportId"] !== null) {
            $this->ReportId = $param["ReportId"];
        }
    }
}
