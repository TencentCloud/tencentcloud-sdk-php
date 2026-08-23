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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像关联资产数
 *
 * @method integer getId() 获取<p>镜像id</p>
 * @method void setId(integer $Id) 设置<p>镜像id</p>
 * @method integer getHostCount() 获取<p>镜像关联主机数</p>
 * @method void setHostCount(integer $HostCount) 设置<p>镜像关联主机数</p>
 * @method integer getContainerCount() 获取<p>镜像关联容器数</p>
 * @method void setContainerCount(integer $ContainerCount) 设置<p>镜像关联容器数</p>
 * @method string getOwnerAccountName() 获取<p>镜像所属账号名</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) 设置<p>镜像所属账号名</p>
 * @method integer getOwnerAppId() 获取<p>镜像所属账号appid</p>
 * @method void setOwnerAppId(integer $OwnerAppId) 设置<p>镜像所属账号appid</p>
 * @method string getOwnerUin() 获取<p>镜像所属账号uin</p>
 * @method void setOwnerUin(string $OwnerUin) 设置<p>镜像所属账号uin</p>
 */
class ImageAssociatedAssetCount extends AbstractModel
{
    /**
     * @var integer <p>镜像id</p>
     */
    public $Id;

    /**
     * @var integer <p>镜像关联主机数</p>
     */
    public $HostCount;

    /**
     * @var integer <p>镜像关联容器数</p>
     */
    public $ContainerCount;

    /**
     * @var string <p>镜像所属账号名</p>
     */
    public $OwnerAccountName;

    /**
     * @var integer <p>镜像所属账号appid</p>
     */
    public $OwnerAppId;

    /**
     * @var string <p>镜像所属账号uin</p>
     */
    public $OwnerUin;

    /**
     * @param integer $Id <p>镜像id</p>
     * @param integer $HostCount <p>镜像关联主机数</p>
     * @param integer $ContainerCount <p>镜像关联容器数</p>
     * @param string $OwnerAccountName <p>镜像所属账号名</p>
     * @param integer $OwnerAppId <p>镜像所属账号appid</p>
     * @param string $OwnerUin <p>镜像所属账号uin</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("ContainerCount",$param) and $param["ContainerCount"] !== null) {
            $this->ContainerCount = $param["ContainerCount"];
        }

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }
    }
}
