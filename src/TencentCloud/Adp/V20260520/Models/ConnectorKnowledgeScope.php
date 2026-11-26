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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 连接器知识范围
 *
 * @method boolean getEnabled() 获取<p>是否启用知识范围</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否启用知识范围</p>
 * @method array getResourceList() 获取<p>已选资源列表，Enabled 为 true 时至少 1 项</p>
 * @method void setResourceList(array $ResourceList) 设置<p>已选资源列表，Enabled 为 true 时至少 1 项</p>
 */
class ConnectorKnowledgeScope extends AbstractModel
{
    /**
     * @var boolean <p>是否启用知识范围</p>
     */
    public $Enabled;

    /**
     * @var array <p>已选资源列表，Enabled 为 true 时至少 1 项</p>
     */
    public $ResourceList;

    /**
     * @param boolean $Enabled <p>是否启用知识范围</p>
     * @param array $ResourceList <p>已选资源列表，Enabled 为 true 时至少 1 项</p>
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("ResourceList",$param) and $param["ResourceList"] !== null) {
            $this->ResourceList = [];
            foreach ($param["ResourceList"] as $key => $value){
                $obj = new ConnectorResource();
                $obj->deserialize($value);
                array_push($this->ResourceList, $obj);
            }
        }
    }
}
