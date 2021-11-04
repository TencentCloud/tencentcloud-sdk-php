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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceGroupNew请求参数结构体
 *
 * @method string getQueryType() 获取查询类型 网络结构-vpc，业务识别-resource ，资源标签-tag
 * @method void setQueryType(string $QueryType) 设置查询类型 网络结构-vpc，业务识别-resource ，资源标签-tag
 * @method string getGroupId() 获取资产组id  全部传0
 * @method void setGroupId(string $GroupId) 设置资产组id  全部传0
 * @method string getShowType() 获取all  包含子组 own自己
 * @method void setShowType(string $ShowType) 设置all  包含子组 own自己
 */
class DescribeResourceGroupNewRequest extends AbstractModel
{
    /**
     * @var string 查询类型 网络结构-vpc，业务识别-resource ，资源标签-tag
     */
    public $QueryType;

    /**
     * @var string 资产组id  全部传0
     */
    public $GroupId;

    /**
     * @var string all  包含子组 own自己
     */
    public $ShowType;

    /**
     * @param string $QueryType 查询类型 网络结构-vpc，业务识别-resource ，资源标签-tag
     * @param string $GroupId 资产组id  全部传0
     * @param string $ShowType all  包含子组 own自己
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
        if (array_key_exists("QueryType",$param) and $param["QueryType"] !== null) {
            $this->QueryType = $param["QueryType"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ShowType",$param) and $param["ShowType"] !== null) {
            $this->ShowType = $param["ShowType"];
        }
    }
}
