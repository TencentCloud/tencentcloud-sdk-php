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
 * 加速域名所对应的证书信息。
 *
 * @method string getMode() 获取配置证书的模式，取值有： <li>disable：不配置证书；</li> <li>eofreecert：配置 EdgeOne 免费证书；</li> <li>sslcert：配置 SSL 证书。</li>
 * @method void setMode(string $Mode) 设置配置证书的模式，取值有： <li>disable：不配置证书；</li> <li>eofreecert：配置 EdgeOne 免费证书；</li> <li>sslcert：配置 SSL 证书。</li>
 * @method array getList() 获取证书列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setList(array $List) 设置证书列表。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AccelerationDomainCertificate extends AbstractModel
{
    /**
     * @var string 配置证书的模式，取值有： <li>disable：不配置证书；</li> <li>eofreecert：配置 EdgeOne 免费证书；</li> <li>sslcert：配置 SSL 证书。</li>
     */
    public $Mode;

    /**
     * @var array 证书列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $List;

    /**
     * @param string $Mode 配置证书的模式，取值有： <li>disable：不配置证书；</li> <li>eofreecert：配置 EdgeOne 免费证书；</li> <li>sslcert：配置 SSL 证书。</li>
     * @param array $List 证书列表。
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new CertificateInfo();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }
    }
}
