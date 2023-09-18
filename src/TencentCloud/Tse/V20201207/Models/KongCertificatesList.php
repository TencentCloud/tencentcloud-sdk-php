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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * kong证书列表
 *
 * @method integer getTotal() 获取证书列表总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotal(integer $Total) 设置证书列表总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCertificatesList() 获取无
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificatesList(array $CertificatesList) 设置无
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPages() 获取证书列表总页数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPages(integer $Pages) 设置证书列表总页数
注意：此字段可能返回 null，表示取不到有效值。
 */
class KongCertificatesList extends AbstractModel
{
    /**
     * @var integer 证书列表总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Total;

    /**
     * @var array 无
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CertificatesList;

    /**
     * @var integer 证书列表总页数
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $Pages;

    /**
     * @param integer $Total 证书列表总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CertificatesList 无
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Pages 证书列表总页数
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("CertificatesList",$param) and $param["CertificatesList"] !== null) {
            $this->CertificatesList = [];
            foreach ($param["CertificatesList"] as $key => $value){
                $obj = new KongCertificatesPreview();
                $obj->deserialize($value);
                array_push($this->CertificatesList, $obj);
            }
        }

        if (array_key_exists("Pages",$param) and $param["Pages"] !== null) {
            $this->Pages = $param["Pages"];
        }
    }
}
