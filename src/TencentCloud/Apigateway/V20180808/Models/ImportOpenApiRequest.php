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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportOpenApi请求参数结构体
 *
 * @method string getServiceId() 获取API所在的服务唯一ID。
 * @method void setServiceId(string $ServiceId) 设置API所在的服务唯一ID。
 * @method string getContent() 获取openAPI正文内容。
 * @method void setContent(string $Content) 设置openAPI正文内容。
 * @method string getEncodeType() 获取Content格式，只能是YAML或者JSON，默认是YAML。
 * @method void setEncodeType(string $EncodeType) 设置Content格式，只能是YAML或者JSON，默认是YAML。
 * @method string getContentVersion() 获取Content版本，默认是openAPI，目前只支持openAPI。
 * @method void setContentVersion(string $ContentVersion) 设置Content版本，默认是openAPI，目前只支持openAPI。
 */
class ImportOpenApiRequest extends AbstractModel
{
    /**
     * @var string API所在的服务唯一ID。
     */
    public $ServiceId;

    /**
     * @var string openAPI正文内容。
     */
    public $Content;

    /**
     * @var string Content格式，只能是YAML或者JSON，默认是YAML。
     */
    public $EncodeType;

    /**
     * @var string Content版本，默认是openAPI，目前只支持openAPI。
     */
    public $ContentVersion;

    /**
     * @param string $ServiceId API所在的服务唯一ID。
     * @param string $Content openAPI正文内容。
     * @param string $EncodeType Content格式，只能是YAML或者JSON，默认是YAML。
     * @param string $ContentVersion Content版本，默认是openAPI，目前只支持openAPI。
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("EncodeType",$param) and $param["EncodeType"] !== null) {
            $this->EncodeType = $param["EncodeType"];
        }

        if (array_key_exists("ContentVersion",$param) and $param["ContentVersion"] !== null) {
            $this->ContentVersion = $param["ContentVersion"];
        }
    }
}
