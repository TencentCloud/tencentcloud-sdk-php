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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScaleInClusterMaster请求参数结构体
 *
 * @method string getClusterId() 获取集群实例ID
 * @method void setClusterId(string $ClusterId) 设置集群实例ID
 * @method array getScaleInMasters() 获取master缩容选项
 * @method void setScaleInMasters(array $ScaleInMasters) 设置master缩容选项
 */
class ScaleInClusterMasterRequest extends AbstractModel
{
    /**
     * @var string 集群实例ID
     */
    public $ClusterId;

    /**
     * @var array master缩容选项
     */
    public $ScaleInMasters;

    /**
     * @param string $ClusterId 集群实例ID
     * @param array $ScaleInMasters master缩容选项
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ScaleInMasters",$param) and $param["ScaleInMasters"] !== null) {
            $this->ScaleInMasters = [];
            foreach ($param["ScaleInMasters"] as $key => $value){
                $obj = new ScaleInMaster();
                $obj->deserialize($value);
                array_push($this->ScaleInMasters, $obj);
            }
        }
    }
}
