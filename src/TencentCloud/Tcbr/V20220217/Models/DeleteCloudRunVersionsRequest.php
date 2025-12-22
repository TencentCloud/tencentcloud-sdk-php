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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCloudRunVersions请求参数结构体
 *
 * @method string getEnvId() 获取环境 Id
 * @method void setEnvId(string $EnvId) 设置环境 Id
 * @method boolean getIsDeleteServer() 获取是否删除服务，只有最后一个版本的时候才生效
 * @method void setIsDeleteServer(boolean $IsDeleteServer) 设置是否删除服务，只有最后一个版本的时候才生效
 * @method boolean getIsDeleteImage() 获取只有删除服务的时候，才生效
 * @method void setIsDeleteImage(boolean $IsDeleteImage) 设置只有删除服务的时候，才生效
 * @method array getSimpleVersions() 获取删除版本的信息
 * @method void setSimpleVersions(array $SimpleVersions) 设置删除版本的信息
 * @method string getOperatorRemark() 获取操作备注
 * @method void setOperatorRemark(string $OperatorRemark) 设置操作备注
 */
class DeleteCloudRunVersionsRequest extends AbstractModel
{
    /**
     * @var string 环境 Id
     */
    public $EnvId;

    /**
     * @var boolean 是否删除服务，只有最后一个版本的时候才生效
     */
    public $IsDeleteServer;

    /**
     * @var boolean 只有删除服务的时候，才生效
     */
    public $IsDeleteImage;

    /**
     * @var array 删除版本的信息
     */
    public $SimpleVersions;

    /**
     * @var string 操作备注
     */
    public $OperatorRemark;

    /**
     * @param string $EnvId 环境 Id
     * @param boolean $IsDeleteServer 是否删除服务，只有最后一个版本的时候才生效
     * @param boolean $IsDeleteImage 只有删除服务的时候，才生效
     * @param array $SimpleVersions 删除版本的信息
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

        if (array_key_exists("IsDeleteServer",$param) and $param["IsDeleteServer"] !== null) {
            $this->IsDeleteServer = $param["IsDeleteServer"];
        }

        if (array_key_exists("IsDeleteImage",$param) and $param["IsDeleteImage"] !== null) {
            $this->IsDeleteImage = $param["IsDeleteImage"];
        }

        if (array_key_exists("SimpleVersions",$param) and $param["SimpleVersions"] !== null) {
            $this->SimpleVersions = [];
            foreach ($param["SimpleVersions"] as $key => $value){
                $obj = new SimpleVersion();
                $obj->deserialize($value);
                array_push($this->SimpleVersions, $obj);
            }
        }

        if (array_key_exists("OperatorRemark",$param) and $param["OperatorRemark"] !== null) {
            $this->OperatorRemark = $param["OperatorRemark"];
        }
    }
}
