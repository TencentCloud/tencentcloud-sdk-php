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
 * 网络集群网络空间标签返回的结构体
 *
 * @method string getLabels() 获取网络空间标签
 * @method void setLabels(string $Labels) 设置网络空间标签
 * @method string getName() 获取网络空间名字
 * @method void setName(string $Name) 设置网络空间名字
 */
class NetworkClusterNamespaceLabelInfo extends AbstractModel
{
    /**
     * @var string 网络空间标签
     */
    public $Labels;

    /**
     * @var string 网络空间名字
     */
    public $Name;

    /**
     * @param string $Labels 网络空间标签
     * @param string $Name 网络空间名字
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
        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
