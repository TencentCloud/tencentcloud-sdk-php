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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCloudBaseGWAPI请求参数结构体
 *
 * @method string getServiceId() 获取服务ID
 * @method void setServiceId(string $ServiceId) 设置服务ID
 * @method string getPath() 获取API Path
 * @method void setPath(string $Path) 设置API Path
 * @method string getAPIId() 获取API ID
 * @method void setAPIId(string $APIId) 设置API ID
 * @method integer getType() 获取API类型
 * @method void setType(integer $Type) 设置API类型
 * @method string getName() 获取API Name
 * @method void setName(string $Name) 设置API Name
 * @method string getCustom() 获取自定义值字段（Type为2时，传递容器服务名表示需要删除JNSGW）
 * @method void setCustom(string $Custom) 设置自定义值字段（Type为2时，传递容器服务名表示需要删除JNSGW）
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 */
class DeleteCloudBaseGWAPIRequest extends AbstractModel
{
    /**
     * @var string 服务ID
     */
    public $ServiceId;

    /**
     * @var string API Path
     */
    public $Path;

    /**
     * @var string API ID
     */
    public $APIId;

    /**
     * @var integer API类型
     */
    public $Type;

    /**
     * @var string API Name
     */
    public $Name;

    /**
     * @var string 自定义值字段（Type为2时，传递容器服务名表示需要删除JNSGW）
     */
    public $Custom;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @param string $ServiceId 服务ID
     * @param string $Path API Path
     * @param string $APIId API ID
     * @param integer $Type API类型
     * @param string $Name API Name
     * @param string $Custom 自定义值字段（Type为2时，传递容器服务名表示需要删除JNSGW）
     * @param string $Domain 域名
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

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("APIId",$param) and $param["APIId"] !== null) {
            $this->APIId = $param["APIId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Custom",$param) and $param["Custom"] !== null) {
            $this->Custom = $param["Custom"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
