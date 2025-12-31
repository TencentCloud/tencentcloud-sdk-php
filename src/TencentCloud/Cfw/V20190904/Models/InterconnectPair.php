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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 接入防火墙的互联集合对
 *
 * @method array getGroupA() 获取集合A
 * @method void setGroupA(array $GroupA) 设置集合A
 * @method array getGroupB() 获取集合B
 * @method void setGroupB(array $GroupB) 设置集合B
 * @method string getInterconnectMode() 获取互联模式："CrossConnect": 交叉互联（组A内每个实例和组B内每个实例互联），"FullMesh": 全互联（组A实际和组B内容一致，相当于组内两两互联）
 * @method void setInterconnectMode(string $InterconnectMode) 设置互联模式："CrossConnect": 交叉互联（组A内每个实例和组B内每个实例互联），"FullMesh": 全互联（组A实际和组B内容一致，相当于组内两两互联）
 */
class InterconnectPair extends AbstractModel
{
    /**
     * @var array 集合A
     */
    public $GroupA;

    /**
     * @var array 集合B
     */
    public $GroupB;

    /**
     * @var string 互联模式："CrossConnect": 交叉互联（组A内每个实例和组B内每个实例互联），"FullMesh": 全互联（组A实际和组B内容一致，相当于组内两两互联）
     */
    public $InterconnectMode;

    /**
     * @param array $GroupA 集合A
     * @param array $GroupB 集合B
     * @param string $InterconnectMode 互联模式："CrossConnect": 交叉互联（组A内每个实例和组B内每个实例互联），"FullMesh": 全互联（组A实际和组B内容一致，相当于组内两两互联）
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
        if (array_key_exists("GroupA",$param) and $param["GroupA"] !== null) {
            $this->GroupA = [];
            foreach ($param["GroupA"] as $key => $value){
                $obj = new AccessInstanceInfo();
                $obj->deserialize($value);
                array_push($this->GroupA, $obj);
            }
        }

        if (array_key_exists("GroupB",$param) and $param["GroupB"] !== null) {
            $this->GroupB = [];
            foreach ($param["GroupB"] as $key => $value){
                $obj = new AccessInstanceInfo();
                $obj->deserialize($value);
                array_push($this->GroupB, $obj);
            }
        }

        if (array_key_exists("InterconnectMode",$param) and $param["InterconnectMode"] !== null) {
            $this->InterconnectMode = $param["InterconnectMode"];
        }
    }
}
