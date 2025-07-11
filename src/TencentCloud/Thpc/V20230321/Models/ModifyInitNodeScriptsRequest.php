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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInitNodeScripts请求参数结构体
 *
 * @method string getClusterId() 获取集群ID。
 * @method void setClusterId(string $ClusterId) 设置集群ID。
 * @method array getInitNodeScripts() 获取节点初始化脚本信息列表。
 * @method void setInitNodeScripts(array $InitNodeScripts) 设置节点初始化脚本信息列表。
 */
class ModifyInitNodeScriptsRequest extends AbstractModel
{
    /**
     * @var string 集群ID。
     */
    public $ClusterId;

    /**
     * @var array 节点初始化脚本信息列表。
     */
    public $InitNodeScripts;

    /**
     * @param string $ClusterId 集群ID。
     * @param array $InitNodeScripts 节点初始化脚本信息列表。
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

        if (array_key_exists("InitNodeScripts",$param) and $param["InitNodeScripts"] !== null) {
            $this->InitNodeScripts = [];
            foreach ($param["InitNodeScripts"] as $key => $value){
                $obj = new NodeScript();
                $obj->deserialize($value);
                array_push($this->InitNodeScripts, $obj);
            }
        }
    }
}
