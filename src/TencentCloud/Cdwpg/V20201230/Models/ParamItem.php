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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ParamItem 信息
 *
 * @method string getNodeType() 获取节点类型, cn/dn
 * @method void setNodeType(string $NodeType) 设置节点类型, cn/dn
 * @method string getNodeName() 获取节点名
 * @method void setNodeName(string $NodeName) 设置节点名
 * @method integer getTotalCount() 获取参数个数
 * @method void setTotalCount(integer $TotalCount) 设置参数个数
 * @method array getDetails() 获取参数信息
 * @method void setDetails(array $Details) 设置参数信息
 */
class ParamItem extends AbstractModel
{
    /**
     * @var string 节点类型, cn/dn
     */
    public $NodeType;

    /**
     * @var string 节点名
     */
    public $NodeName;

    /**
     * @var integer 参数个数
     */
    public $TotalCount;

    /**
     * @var array 参数信息
     */
    public $Details;

    /**
     * @param string $NodeType 节点类型, cn/dn
     * @param string $NodeName 节点名
     * @param integer $TotalCount 参数个数
     * @param array $Details 参数信息
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
        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new ParamDetail();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }
    }
}
