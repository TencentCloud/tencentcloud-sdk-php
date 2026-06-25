<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型路由网络服务信息
 *
 * @method string getCertId() 获取<p>证书ID</p>
 * @method void setCertId(string $CertId) 设置<p>证书ID</p>
 * @method integer getPort() 获取<p>监听端口</p>
 * @method void setPort(integer $Port) 设置<p>监听端口</p>
 * @method string getSchema() 获取<p>网络协议</p>
 * @method void setSchema(string $Schema) 设置<p>网络协议</p>
 */
class ServiceEndPoints extends AbstractModel
{
    /**
     * @var string <p>证书ID</p>
     */
    public $CertId;

    /**
     * @var integer <p>监听端口</p>
     */
    public $Port;

    /**
     * @var string <p>网络协议</p>
     */
    public $Schema;

    /**
     * @param string $CertId <p>证书ID</p>
     * @param integer $Port <p>监听端口</p>
     * @param string $Schema <p>网络协议</p>
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
        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Schema",$param) and $param["Schema"] !== null) {
            $this->Schema = $param["Schema"];
        }
    }
}
