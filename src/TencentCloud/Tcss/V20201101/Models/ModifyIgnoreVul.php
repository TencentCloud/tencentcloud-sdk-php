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
 * 漏洞扫描新增和取消忽略漏洞入参
 *
 * @method string getPocID() 获取漏洞PocID
 * @method void setPocID(string $PocID) 设置漏洞PocID
 * @method array getImageIDs() 获取忽略的镜像ID，空表示全部
 * @method void setImageIDs(array $ImageIDs) 设置忽略的镜像ID，空表示全部
 * @method string getImageType() 获取当有镜像时
镜像类型: LOCAL 本地镜像 REGISTRY 仓库镜像
 * @method void setImageType(string $ImageType) 设置当有镜像时
镜像类型: LOCAL 本地镜像 REGISTRY 仓库镜像
 */
class ModifyIgnoreVul extends AbstractModel
{
    /**
     * @var string 漏洞PocID
     */
    public $PocID;

    /**
     * @var array 忽略的镜像ID，空表示全部
     */
    public $ImageIDs;

    /**
     * @var string 当有镜像时
镜像类型: LOCAL 本地镜像 REGISTRY 仓库镜像
     */
    public $ImageType;

    /**
     * @param string $PocID 漏洞PocID
     * @param array $ImageIDs 忽略的镜像ID，空表示全部
     * @param string $ImageType 当有镜像时
镜像类型: LOCAL 本地镜像 REGISTRY 仓库镜像
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
        if (array_key_exists("PocID",$param) and $param["PocID"] !== null) {
            $this->PocID = $param["PocID"];
        }

        if (array_key_exists("ImageIDs",$param) and $param["ImageIDs"] !== null) {
            $this->ImageIDs = $param["ImageIDs"];
        }

        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            $this->ImageType = $param["ImageType"];
        }
    }
}
