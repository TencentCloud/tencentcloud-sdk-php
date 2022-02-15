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
 * DescribeAssetImageRegistryDetail请求参数结构体
 *
 * @method integer getId() 获取仓库列表id
 * @method void setId(integer $Id) 设置仓库列表id
 * @method string getImageId() 获取镜像ID
 * @method void setImageId(string $ImageId) 设置镜像ID
 */
class DescribeAssetImageRegistryDetailRequest extends AbstractModel
{
    /**
     * @var integer 仓库列表id
     */
    public $Id;

    /**
     * @var string 镜像ID
     */
    public $ImageId;

    /**
     * @param integer $Id 仓库列表id
     * @param string $ImageId 镜像ID
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

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }
    }
}
