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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateOrModifyCloudNativeAPIGatewayIPRestriction请求参数结构体
 *
 * @method string getGatewayId() 获取网关ID
 * @method void setGatewayId(string $GatewayId) 设置网关ID
 * @method string getSourceType() 获取访问控制插件绑定的资源类型：route|service
 * @method void setSourceType(string $SourceType) 设置访问控制插件绑定的资源类型：route|service
 * @method string getSourceId() 获取路由或服务的id
 * @method void setSourceId(string $SourceId) 设置路由或服务的id
 * @method boolean getEnabled() 获取是否启用插件
 * @method void setEnabled(boolean $Enabled) 设置是否启用插件
 * @method string getRestrictionType() 获取访问控制类型：whiteList｜blackList
 * @method void setRestrictionType(string $RestrictionType) 设置访问控制类型：whiteList｜blackList
 * @method array getAddressList() 获取cidr｜ip
 * @method void setAddressList(array $AddressList) 设置cidr｜ip
 */
class CreateOrModifyCloudNativeAPIGatewayIPRestrictionRequest extends AbstractModel
{
    /**
     * @var string 网关ID
     */
    public $GatewayId;

    /**
     * @var string 访问控制插件绑定的资源类型：route|service
     */
    public $SourceType;

    /**
     * @var string 路由或服务的id
     */
    public $SourceId;

    /**
     * @var boolean 是否启用插件
     */
    public $Enabled;

    /**
     * @var string 访问控制类型：whiteList｜blackList
     */
    public $RestrictionType;

    /**
     * @var array cidr｜ip
     */
    public $AddressList;

    /**
     * @param string $GatewayId 网关ID
     * @param string $SourceType 访问控制插件绑定的资源类型：route|service
     * @param string $SourceId 路由或服务的id
     * @param boolean $Enabled 是否启用插件
     * @param string $RestrictionType 访问控制类型：whiteList｜blackList
     * @param array $AddressList cidr｜ip
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("RestrictionType",$param) and $param["RestrictionType"] !== null) {
            $this->RestrictionType = $param["RestrictionType"];
        }

        if (array_key_exists("AddressList",$param) and $param["AddressList"] !== null) {
            $this->AddressList = $param["AddressList"];
        }
    }
}
