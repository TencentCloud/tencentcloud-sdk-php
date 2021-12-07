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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeValueAddedSrvInfo返回参数结构体
 *
 * @method integer getRegistryImageCnt() 获取仓库镜像未授权数量
 * @method void setRegistryImageCnt(integer $RegistryImageCnt) 设置仓库镜像未授权数量
 * @method integer getLocalImageCnt() 获取本地镜像未授权数量
 * @method void setLocalImageCnt(integer $LocalImageCnt) 设置本地镜像未授权数量
 * @method integer getUnusedAuthorizedCnt() 获取未使用的镜像安全扫描授权数
 * @method void setUnusedAuthorizedCnt(integer $UnusedAuthorizedCnt) 设置未使用的镜像安全扫描授权数
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeValueAddedSrvInfoResponse extends AbstractModel
{
    /**
     * @var integer 仓库镜像未授权数量
     */
    public $RegistryImageCnt;

    /**
     * @var integer 本地镜像未授权数量
     */
    public $LocalImageCnt;

    /**
     * @var integer 未使用的镜像安全扫描授权数
     */
    public $UnusedAuthorizedCnt;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $RegistryImageCnt 仓库镜像未授权数量
     * @param integer $LocalImageCnt 本地镜像未授权数量
     * @param integer $UnusedAuthorizedCnt 未使用的镜像安全扫描授权数
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("RegistryImageCnt",$param) and $param["RegistryImageCnt"] !== null) {
            $this->RegistryImageCnt = $param["RegistryImageCnt"];
        }

        if (array_key_exists("LocalImageCnt",$param) and $param["LocalImageCnt"] !== null) {
            $this->LocalImageCnt = $param["LocalImageCnt"];
        }

        if (array_key_exists("UnusedAuthorizedCnt",$param) and $param["UnusedAuthorizedCnt"] !== null) {
            $this->UnusedAuthorizedCnt = $param["UnusedAuthorizedCnt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
