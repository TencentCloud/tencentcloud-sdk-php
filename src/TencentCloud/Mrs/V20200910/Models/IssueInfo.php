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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 签发信息
 *
 * @method string getCertNumber() 获取编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertNumber(string $CertNumber) 设置编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIssuedAuthority() 获取签发机构
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIssuedAuthority(string $IssuedAuthority) 设置签发机构
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIssuedDate() 获取签发日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIssuedDate(string $IssuedDate) 设置签发日期
注意：此字段可能返回 null，表示取不到有效值。
 */
class IssueInfo extends AbstractModel
{
    /**
     * @var string 编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertNumber;

    /**
     * @var string 签发机构
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IssuedAuthority;

    /**
     * @var string 签发日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IssuedDate;

    /**
     * @param string $CertNumber 编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IssuedAuthority 签发机构
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IssuedDate 签发日期
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
        if (array_key_exists("CertNumber",$param) and $param["CertNumber"] !== null) {
            $this->CertNumber = $param["CertNumber"];
        }

        if (array_key_exists("IssuedAuthority",$param) and $param["IssuedAuthority"] !== null) {
            $this->IssuedAuthority = $param["IssuedAuthority"];
        }

        if (array_key_exists("IssuedDate",$param) and $param["IssuedDate"] !== null) {
            $this->IssuedDate = $param["IssuedDate"];
        }
    }
}
