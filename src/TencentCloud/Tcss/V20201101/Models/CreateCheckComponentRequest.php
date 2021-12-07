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
 * CreateCheckComponent请求参数结构体
 *
 * @method array getClusterInfoList() 获取要安装的集群列表信息
 * @method void setClusterInfoList(array $ClusterInfoList) 设置要安装的集群列表信息
 */
class CreateCheckComponentRequest extends AbstractModel
{
    /**
     * @var array 要安装的集群列表信息
     */
    public $ClusterInfoList;

    /**
     * @param array $ClusterInfoList 要安装的集群列表信息
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
        if (array_key_exists("ClusterInfoList",$param) and $param["ClusterInfoList"] !== null) {
            $this->ClusterInfoList = [];
            foreach ($param["ClusterInfoList"] as $key => $value){
                $obj = new ClusterCreateComponentItem();
                $obj->deserialize($value);
                array_push($this->ClusterInfoList, $obj);
            }
        }
    }
}
