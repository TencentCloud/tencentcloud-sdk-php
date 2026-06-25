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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloudNativeAPIGatewayMCPTool请求参数结构体
 *
 * @method string getContentType() 获取<p>内容类型</p>
 * @method void setContentType(string $ContentType) 设置<p>内容类型</p>
 * @method string getDisplayName() 获取<p>展示名字</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>展示名字</p>
 * @method string getServiceId() 获取<p>服务 id</p>
 * @method void setServiceId(string $ServiceId) 设置<p>服务 id</p>
 */
class CreateCloudNativeAPIGatewayMCPToolRequest extends AbstractModel
{
    /**
     * @var string <p>内容类型</p>
     */
    public $ContentType;

    /**
     * @var string <p>展示名字</p>
     */
    public $DisplayName;

    /**
     * @var string <p>服务 id</p>
     */
    public $ServiceId;

    /**
     * @param string $ContentType <p>内容类型</p>
     * @param string $DisplayName <p>展示名字</p>
     * @param string $ServiceId <p>服务 id</p>
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
        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }
    }
}
