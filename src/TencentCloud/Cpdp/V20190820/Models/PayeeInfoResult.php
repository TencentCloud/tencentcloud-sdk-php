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
 * 收款用户信息结果
 *
 * @method string getPayeeId() 获取收款用户ID
 * @method void setPayeeId(string $PayeeId) 设置收款用户ID
 * @method string getOutUserId() 获取用户外部业务ID
 * @method void setOutUserId(string $OutUserId) 设置用户外部业务ID
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method integer getIdType() 获取证件类型
0:身份证
1:社会信用代码
 * @method void setIdType(integer $IdType) 设置证件类型
0:身份证
1:社会信用代码
 * @method string getIdNo() 获取证件号
 * @method void setIdNo(string $IdNo) 设置证件号
 * @method string getServiceProviderId() 获取服务商ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceProviderId(string $ServiceProviderId) 设置服务商ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 */
class PayeeInfoResult extends AbstractModel
{
    /**
     * @var string 收款用户ID
     */
    public $PayeeId;

    /**
     * @var string 用户外部业务ID
     */
    public $OutUserId;

    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var integer 证件类型
0:身份证
1:社会信用代码
     */
    public $IdType;

    /**
     * @var string 证件号
     */
    public $IdNo;

    /**
     * @var string 服务商ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceProviderId;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @param string $PayeeId 收款用户ID
     * @param string $OutUserId 用户外部业务ID
     * @param string $Name 姓名
     * @param integer $IdType 证件类型
0:身份证
1:社会信用代码
     * @param string $IdNo 证件号
     * @param string $ServiceProviderId 服务商ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注
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
        if (array_key_exists("PayeeId",$param) and $param["PayeeId"] !== null) {
            $this->PayeeId = $param["PayeeId"];
        }

        if (array_key_exists("OutUserId",$param) and $param["OutUserId"] !== null) {
            $this->OutUserId = $param["OutUserId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IdType",$param) and $param["IdType"] !== null) {
            $this->IdType = $param["IdType"];
        }

        if (array_key_exists("IdNo",$param) and $param["IdNo"] !== null) {
            $this->IdNo = $param["IdNo"];
        }

        if (array_key_exists("ServiceProviderId",$param) and $param["ServiceProviderId"] !== null) {
            $this->ServiceProviderId = $param["ServiceProviderId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
