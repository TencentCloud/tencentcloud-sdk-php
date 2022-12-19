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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预审核信息列表
 *
 * @method integer getTotalPeriod() 获取证书总年限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalPeriod(integer $TotalPeriod) 设置证书总年限
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNowPeriod() 获取证书当前年限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNowPeriod(integer $NowPeriod) 设置证书当前年限
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getManagerId() 获取证书预审核管理人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManagerId(string $ManagerId) 设置证书预审核管理人ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class PreAuditInfo extends AbstractModel
{
    /**
     * @var integer 证书总年限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalPeriod;

    /**
     * @var integer 证书当前年限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NowPeriod;

    /**
     * @var string 证书预审核管理人ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManagerId;

    /**
     * @param integer $TotalPeriod 证书总年限
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NowPeriod 证书当前年限
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ManagerId 证书预审核管理人ID
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
        if (array_key_exists("TotalPeriod",$param) and $param["TotalPeriod"] !== null) {
            $this->TotalPeriod = $param["TotalPeriod"];
        }

        if (array_key_exists("NowPeriod",$param) and $param["NowPeriod"] !== null) {
            $this->NowPeriod = $param["NowPeriod"];
        }

        if (array_key_exists("ManagerId",$param) and $param["ManagerId"] !== null) {
            $this->ManagerId = $param["ManagerId"];
        }
    }
}
