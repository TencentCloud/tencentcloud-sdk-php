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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCloudBaseRunServerVersion请求参数结构体
 *
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getServerName() 获取服务名称
 * @method void setServerName(string $ServerName) 设置服务名称
 * @method string getVersionName() 获取版本名称
 * @method void setVersionName(string $VersionName) 设置版本名称
 * @method boolean getIsDeleteServer() 获取是否删除服务，只有最后一个版本的时候，才生效。
 * @method void setIsDeleteServer(boolean $IsDeleteServer) 设置是否删除服务，只有最后一个版本的时候，才生效。
 * @method boolean getIsDeleteImage() 获取只有删除服务的时候，才会起作用
 * @method void setIsDeleteImage(boolean $IsDeleteImage) 设置只有删除服务的时候，才会起作用
 * @method string getOperatorRemark() 获取操作备注
 * @method void setOperatorRemark(string $OperatorRemark) 设置操作备注
 */
class DeleteCloudBaseRunServerVersionRequest extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string 服务名称
     */
    public $ServerName;

    /**
     * @var string 版本名称
     */
    public $VersionName;

    /**
     * @var boolean 是否删除服务，只有最后一个版本的时候，才生效。
     */
    public $IsDeleteServer;

    /**
     * @var boolean 只有删除服务的时候，才会起作用
     */
    public $IsDeleteImage;

    /**
     * @var string 操作备注
     */
    public $OperatorRemark;

    /**
     * @param string $EnvId 环境ID
     * @param string $ServerName 服务名称
     * @param string $VersionName 版本名称
     * @param boolean $IsDeleteServer 是否删除服务，只有最后一个版本的时候，才生效。
     * @param boolean $IsDeleteImage 只有删除服务的时候，才会起作用
     * @param string $OperatorRemark 操作备注
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("IsDeleteServer",$param) and $param["IsDeleteServer"] !== null) {
            $this->IsDeleteServer = $param["IsDeleteServer"];
        }

        if (array_key_exists("IsDeleteImage",$param) and $param["IsDeleteImage"] !== null) {
            $this->IsDeleteImage = $param["IsDeleteImage"];
        }

        if (array_key_exists("OperatorRemark",$param) and $param["OperatorRemark"] !== null) {
            $this->OperatorRemark = $param["OperatorRemark"];
        }
    }
}
