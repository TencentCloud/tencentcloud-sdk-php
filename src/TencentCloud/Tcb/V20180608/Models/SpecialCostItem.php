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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 1分钱计费详情
 *
 * @method string getReportDate() 获取上报日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReportDate(string $ReportDate) 设置上报日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取腾讯云uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置腾讯云uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnvId() 获取资源id:环境id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnvId(string $EnvId) 设置资源id:环境id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取上报任务状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置上报任务状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class SpecialCostItem extends AbstractModel
{
    /**
     * @var string 上报日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReportDate;

    /**
     * @var string 腾讯云uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 资源id:环境id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnvId;

    /**
     * @var string 上报任务状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param string $ReportDate 上报日期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 腾讯云uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnvId 资源id:环境id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 上报任务状态
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ReportDate",$param) and $param["ReportDate"] !== null) {
            $this->ReportDate = $param["ReportDate"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
