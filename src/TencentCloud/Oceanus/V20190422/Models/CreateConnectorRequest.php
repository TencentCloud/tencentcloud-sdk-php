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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateConnector请求参数结构体
 *
 * @method string getResourceId() 获取资源id
 * @method void setResourceId(string $ResourceId) 设置资源id
 * @method string getWorkSpaceId() 获取空间
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置空间
 * @method integer getVersionId() 获取资源版本
 * @method void setVersionId(integer $VersionId) 设置资源版本
 * @method string getConnector() 获取连接器名称
 * @method void setConnector(string $Connector) 设置连接器名称
 * @method string getConnectionMethod() 获取连接方式
 * @method void setConnectionMethod(string $ConnectionMethod) 设置连接方式
 */
class CreateConnectorRequest extends AbstractModel
{
    /**
     * @var string 资源id
     */
    public $ResourceId;

    /**
     * @var string 空间
     */
    public $WorkSpaceId;

    /**
     * @var integer 资源版本
     */
    public $VersionId;

    /**
     * @var string 连接器名称
     */
    public $Connector;

    /**
     * @var string 连接方式
     */
    public $ConnectionMethod;

    /**
     * @param string $ResourceId 资源id
     * @param string $WorkSpaceId 空间
     * @param integer $VersionId 资源版本
     * @param string $Connector 连接器名称
     * @param string $ConnectionMethod 连接方式
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("Connector",$param) and $param["Connector"] !== null) {
            $this->Connector = $param["Connector"];
        }

        if (array_key_exists("ConnectionMethod",$param) and $param["ConnectionMethod"] !== null) {
            $this->ConnectionMethod = $param["ConnectionMethod"];
        }
    }
}
