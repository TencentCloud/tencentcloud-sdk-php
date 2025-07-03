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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份下载限制参数
 *
 * @method string getLimitType() 获取限制类型
 * @method void setLimitType(string $LimitType) 设置限制类型
 * @method string getVpcComparisonSymbol() 获取该参数仅支持 In， 表示 LimitVpc 指定的vpc可以下载。默认为In
 * @method void setVpcComparisonSymbol(string $VpcComparisonSymbol) 设置该参数仅支持 In， 表示 LimitVpc 指定的vpc可以下载。默认为In
 * @method string getIpComparisonSymbol() 获取In: 指定的ip可以下载； NotIn: 指定的ip不可以下载
 * @method void setIpComparisonSymbol(string $IpComparisonSymbol) 设置In: 指定的ip可以下载； NotIn: 指定的ip不可以下载
 * @method array getLimitVpcs() 获取限制下载的vpc设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLimitVpcs(array $LimitVpcs) 设置限制下载的vpc设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLimitIps() 获取限制下载的ip设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLimitIps(array $LimitIps) 设置限制下载的ip设置
注意：此字段可能返回 null，表示取不到有效值。
 */
class BackupLimitRestriction extends AbstractModel
{
    /**
     * @var string 限制类型
     */
    public $LimitType;

    /**
     * @var string 该参数仅支持 In， 表示 LimitVpc 指定的vpc可以下载。默认为In
     */
    public $VpcComparisonSymbol;

    /**
     * @var string In: 指定的ip可以下载； NotIn: 指定的ip不可以下载
     */
    public $IpComparisonSymbol;

    /**
     * @var array 限制下载的vpc设置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LimitVpcs;

    /**
     * @var array 限制下载的ip设置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LimitIps;

    /**
     * @param string $LimitType 限制类型
     * @param string $VpcComparisonSymbol 该参数仅支持 In， 表示 LimitVpc 指定的vpc可以下载。默认为In
     * @param string $IpComparisonSymbol In: 指定的ip可以下载； NotIn: 指定的ip不可以下载
     * @param array $LimitVpcs 限制下载的vpc设置
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LimitIps 限制下载的ip设置
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
        if (array_key_exists("LimitType",$param) and $param["LimitType"] !== null) {
            $this->LimitType = $param["LimitType"];
        }

        if (array_key_exists("VpcComparisonSymbol",$param) and $param["VpcComparisonSymbol"] !== null) {
            $this->VpcComparisonSymbol = $param["VpcComparisonSymbol"];
        }

        if (array_key_exists("IpComparisonSymbol",$param) and $param["IpComparisonSymbol"] !== null) {
            $this->IpComparisonSymbol = $param["IpComparisonSymbol"];
        }

        if (array_key_exists("LimitVpcs",$param) and $param["LimitVpcs"] !== null) {
            $this->LimitVpcs = [];
            foreach ($param["LimitVpcs"] as $key => $value){
                $obj = new BackupLimitVpcItem();
                $obj->deserialize($value);
                array_push($this->LimitVpcs, $obj);
            }
        }

        if (array_key_exists("LimitIps",$param) and $param["LimitIps"] !== null) {
            $this->LimitIps = $param["LimitIps"];
        }
    }
}
