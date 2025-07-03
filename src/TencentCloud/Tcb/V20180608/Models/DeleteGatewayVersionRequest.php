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
 * DeleteGatewayVersion请求参数结构体
 *
 * @method string getEnvId() 获取环境id
 * @method void setEnvId(string $EnvId) 设置环境id
 * @method string getGatewayId() 获取网关id
 * @method void setGatewayId(string $GatewayId) 设置网关id
 * @method string getVersionName() 获取版本名
 * @method void setVersionName(string $VersionName) 设置版本名
 * @method boolean getIsDeleteServer() 获取是否删除服务
 * @method void setIsDeleteServer(boolean $IsDeleteServer) 设置是否删除服务
 * @method boolean getIsDeleteImage() 获取是否删除镜像
 * @method void setIsDeleteImage(boolean $IsDeleteImage) 设置是否删除镜像
 * @method boolean getIsForce() 获取是否强制删除
 * @method void setIsForce(boolean $IsForce) 设置是否强制删除
 * @method string getOperatorRemark() 获取操作者记录
 * @method void setOperatorRemark(string $OperatorRemark) 设置操作者记录
 */
class DeleteGatewayVersionRequest extends AbstractModel
{
    /**
     * @var string 环境id
     */
    public $EnvId;

    /**
     * @var string 网关id
     */
    public $GatewayId;

    /**
     * @var string 版本名
     */
    public $VersionName;

    /**
     * @var boolean 是否删除服务
     */
    public $IsDeleteServer;

    /**
     * @var boolean 是否删除镜像
     */
    public $IsDeleteImage;

    /**
     * @var boolean 是否强制删除
     */
    public $IsForce;

    /**
     * @var string 操作者记录
     */
    public $OperatorRemark;

    /**
     * @param string $EnvId 环境id
     * @param string $GatewayId 网关id
     * @param string $VersionName 版本名
     * @param boolean $IsDeleteServer 是否删除服务
     * @param boolean $IsDeleteImage 是否删除镜像
     * @param boolean $IsForce 是否强制删除
     * @param string $OperatorRemark 操作者记录
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

        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
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

        if (array_key_exists("IsForce",$param) and $param["IsForce"] !== null) {
            $this->IsForce = $param["IsForce"];
        }

        if (array_key_exists("OperatorRemark",$param) and $param["OperatorRemark"] !== null) {
            $this->OperatorRemark = $param["OperatorRemark"];
        }
    }
}
