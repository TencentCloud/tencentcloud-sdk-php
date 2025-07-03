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
 * 获取证书列表（DescribeCertificate）返回参数键为 DvAuthDetail 的内容。
 *
 * @method string getDvAuthKey() 获取证书域名验证记录Key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDvAuthKey(string $DvAuthKey) 设置证书域名验证记录Key
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDvAuthValue() 获取证书域名验证记录值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDvAuthValue(string $DvAuthValue) 设置证书域名验证记录值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDvAuthDomain() 获取证书域名验证域名值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDvAuthDomain(string $DvAuthDomain) 设置证书域名验证域名值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDvAuthPath() 获取证书域名验证文件路径， 仅FILE、FILE_PROXY使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDvAuthPath(string $DvAuthPath) 设置证书域名验证文件路径， 仅FILE、FILE_PROXY使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDvAuthKeySubDomain() 获取证书域名验证子域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDvAuthKeySubDomain(string $DvAuthKeySubDomain) 设置证书域名验证子域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDvAuths() 获取证书域名验证信息， 存在多个域名验证使用本字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDvAuths(array $DvAuths) 设置证书域名验证信息， 存在多个域名验证使用本字段
注意：此字段可能返回 null，表示取不到有效值。
 */
class DvAuthDetail extends AbstractModel
{
    /**
     * @var string 证书域名验证记录Key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DvAuthKey;

    /**
     * @var string 证书域名验证记录值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DvAuthValue;

    /**
     * @var string 证书域名验证域名值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DvAuthDomain;

    /**
     * @var string 证书域名验证文件路径， 仅FILE、FILE_PROXY使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DvAuthPath;

    /**
     * @var string 证书域名验证子域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DvAuthKeySubDomain;

    /**
     * @var array 证书域名验证信息， 存在多个域名验证使用本字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DvAuths;

    /**
     * @param string $DvAuthKey 证书域名验证记录Key
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DvAuthValue 证书域名验证记录值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DvAuthDomain 证书域名验证域名值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DvAuthPath 证书域名验证文件路径， 仅FILE、FILE_PROXY使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DvAuthKeySubDomain 证书域名验证子域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DvAuths 证书域名验证信息， 存在多个域名验证使用本字段
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
        if (array_key_exists("DvAuthKey",$param) and $param["DvAuthKey"] !== null) {
            $this->DvAuthKey = $param["DvAuthKey"];
        }

        if (array_key_exists("DvAuthValue",$param) and $param["DvAuthValue"] !== null) {
            $this->DvAuthValue = $param["DvAuthValue"];
        }

        if (array_key_exists("DvAuthDomain",$param) and $param["DvAuthDomain"] !== null) {
            $this->DvAuthDomain = $param["DvAuthDomain"];
        }

        if (array_key_exists("DvAuthPath",$param) and $param["DvAuthPath"] !== null) {
            $this->DvAuthPath = $param["DvAuthPath"];
        }

        if (array_key_exists("DvAuthKeySubDomain",$param) and $param["DvAuthKeySubDomain"] !== null) {
            $this->DvAuthKeySubDomain = $param["DvAuthKeySubDomain"];
        }

        if (array_key_exists("DvAuths",$param) and $param["DvAuths"] !== null) {
            $this->DvAuths = [];
            foreach ($param["DvAuths"] as $key => $value){
                $obj = new DvAuths();
                $obj->deserialize($value);
                array_push($this->DvAuths, $obj);
            }
        }
    }
}
