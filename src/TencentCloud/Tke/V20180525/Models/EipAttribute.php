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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用以帮助用户自动创建EIP的配置
 *
 * @method string getDeletePolicy() 获取容器实例删除后，EIP是否释放。
Never表示不释放，其他任意值（包括空字符串）表示释放。
 * @method void setDeletePolicy(string $DeletePolicy) 设置容器实例删除后，EIP是否释放。
Never表示不释放，其他任意值（包括空字符串）表示释放。
 * @method string getInternetServiceProvider() 获取EIP线路类型。默认值：BGP。
已开通静态单线IP白名单的用户，可选值：
CMCC：中国移动
CTCC：中国电信
CUCC：中国联通
注意：仅部分地域支持静态单线IP。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternetServiceProvider(string $InternetServiceProvider) 设置EIP线路类型。默认值：BGP。
已开通静态单线IP白名单的用户，可选值：
CMCC：中国移动
CTCC：中国电信
CUCC：中国联通
注意：仅部分地域支持静态单线IP。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInternetMaxBandwidthOut() 获取EIP出带宽上限，单位：Mbps。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) 设置EIP出带宽上限，单位：Mbps。
注意：此字段可能返回 null，表示取不到有效值。
 */
class EipAttribute extends AbstractModel
{
    /**
     * @var string 容器实例删除后，EIP是否释放。
Never表示不释放，其他任意值（包括空字符串）表示释放。
     */
    public $DeletePolicy;

    /**
     * @var string EIP线路类型。默认值：BGP。
已开通静态单线IP白名单的用户，可选值：
CMCC：中国移动
CTCC：中国电信
CUCC：中国联通
注意：仅部分地域支持静态单线IP。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternetServiceProvider;

    /**
     * @var integer EIP出带宽上限，单位：Mbps。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InternetMaxBandwidthOut;

    /**
     * @param string $DeletePolicy 容器实例删除后，EIP是否释放。
Never表示不释放，其他任意值（包括空字符串）表示释放。
     * @param string $InternetServiceProvider EIP线路类型。默认值：BGP。
已开通静态单线IP白名单的用户，可选值：
CMCC：中国移动
CTCC：中国电信
CUCC：中国联通
注意：仅部分地域支持静态单线IP。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InternetMaxBandwidthOut EIP出带宽上限，单位：Mbps。
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
        if (array_key_exists("DeletePolicy",$param) and $param["DeletePolicy"] !== null) {
            $this->DeletePolicy = $param["DeletePolicy"];
        }

        if (array_key_exists("InternetServiceProvider",$param) and $param["InternetServiceProvider"] !== null) {
            $this->InternetServiceProvider = $param["InternetServiceProvider"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }
    }
}
