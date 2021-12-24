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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTP探测配置
 *
 * @method string getPath() 获取请求路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置请求路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取请求端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置请求端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHost() 获取请求地址，默认Pod的IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHost(string $Host) 设置请求地址，默认Pod的IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScheme() 获取请求模式  HTTP|HTTPS，默认HTTP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScheme(string $Scheme) 设置请求模式  HTTP|HTTPS，默认HTTP
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHeaders() 获取HTTP的请求头
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaders(array $Headers) 设置HTTP的请求头
注意：此字段可能返回 null，表示取不到有效值。
 */
class HttpProbe extends AbstractModel
{
    /**
     * @var string 请求路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var integer 请求端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 请求地址，默认Pod的IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Host;

    /**
     * @var string 请求模式  HTTP|HTTPS，默认HTTP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scheme;

    /**
     * @var array HTTP的请求头
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Headers;

    /**
     * @param string $Path 请求路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port 请求端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Host 请求地址，默认Pod的IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Scheme 请求模式  HTTP|HTTPS，默认HTTP
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Headers HTTP的请求头
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Scheme",$param) and $param["Scheme"] !== null) {
            $this->Scheme = $param["Scheme"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new HttpHeader();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }
    }
}
