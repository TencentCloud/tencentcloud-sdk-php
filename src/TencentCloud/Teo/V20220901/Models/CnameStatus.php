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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CNAME 状态
 *
 * @method string getRecordName() 获取记录名称。
 * @method void setRecordName(string $RecordName) 设置记录名称。
 * @method string getCname() 获取CNAME 地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCname(string $Cname) 设置CNAME 地址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取CNAME 状态信息，取值有：
<li>active：生效；</li>
<li>moved：不生效；</li>
 * @method void setStatus(string $Status) 设置CNAME 状态信息，取值有：
<li>active：生效；</li>
<li>moved：不生效；</li>
 */
class CnameStatus extends AbstractModel
{
    /**
     * @var string 记录名称。
     */
    public $RecordName;

    /**
     * @var string CNAME 地址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cname;

    /**
     * @var string CNAME 状态信息，取值有：
<li>active：生效；</li>
<li>moved：不生效；</li>
     */
    public $Status;

    /**
     * @param string $RecordName 记录名称。
     * @param string $Cname CNAME 地址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status CNAME 状态信息，取值有：
<li>active：生效；</li>
<li>moved：不生效；</li>
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
        if (array_key_exists("RecordName",$param) and $param["RecordName"] !== null) {
            $this->RecordName = $param["RecordName"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
