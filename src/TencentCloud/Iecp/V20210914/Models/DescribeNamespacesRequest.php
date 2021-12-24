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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNamespaces请求参数结构体
 *
 * @method integer getEdgeUnitID() 获取IECP边缘单元ID
 * @method void setEdgeUnitID(integer $EdgeUnitID) 设置IECP边缘单元ID
 * @method string getNamePattern() 获取边缘节点名称模糊搜索串
 * @method void setNamePattern(string $NamePattern) 设置边缘节点名称模糊搜索串
 */
class DescribeNamespacesRequest extends AbstractModel
{
    /**
     * @var integer IECP边缘单元ID
     */
    public $EdgeUnitID;

    /**
     * @var string 边缘节点名称模糊搜索串
     */
    public $NamePattern;

    /**
     * @param integer $EdgeUnitID IECP边缘单元ID
     * @param string $NamePattern 边缘节点名称模糊搜索串
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
        if (array_key_exists("EdgeUnitID",$param) and $param["EdgeUnitID"] !== null) {
            $this->EdgeUnitID = $param["EdgeUnitID"];
        }

        if (array_key_exists("NamePattern",$param) and $param["NamePattern"] !== null) {
            $this->NamePattern = $param["NamePattern"];
        }
    }
}
