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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSCFAliasList请求参数结构体
 *
 * @method string getSCFRegion() 获取云函数所在地域
参数格式：腾讯云标准 Region，如 ap-guangzhou
 * @method void setSCFRegion(string $SCFRegion) 设置云函数所在地域
参数格式：腾讯云标准 Region，如 ap-guangzhou
 * @method string getNamespace() 获取命名空间名称
取值参考：通过 DescribeSCFNamespaceList 接口获取
 * @method void setNamespace(string $Namespace) 设置命名空间名称
取值参考：通过 DescribeSCFNamespaceList 接口获取
 * @method string getFunctionName() 获取函数名称
取值参考：通过 DescribeSCFFunctionList 接口获取
 * @method void setFunctionName(string $FunctionName) 设置函数名称
取值参考：通过 DescribeSCFFunctionList 接口获取
 * @method integer getLimit() 获取单页条数
取值范围：[1, 100]
默认值：20
 * @method void setLimit(integer $Limit) 设置单页条数
取值范围：[1, 100]
默认值：20
 * @method integer getOffset() 获取分页偏移量
取值范围：[0, +∞)
默认值：0
 * @method void setOffset(integer $Offset) 设置分页偏移量
取值范围：[0, +∞)
默认值：0
 */
class DescribeSCFAliasListRequest extends AbstractModel
{
    /**
     * @var string 云函数所在地域
参数格式：腾讯云标准 Region，如 ap-guangzhou
     */
    public $SCFRegion;

    /**
     * @var string 命名空间名称
取值参考：通过 DescribeSCFNamespaceList 接口获取
     */
    public $Namespace;

    /**
     * @var string 函数名称
取值参考：通过 DescribeSCFFunctionList 接口获取
     */
    public $FunctionName;

    /**
     * @var integer 单页条数
取值范围：[1, 100]
默认值：20
     */
    public $Limit;

    /**
     * @var integer 分页偏移量
取值范围：[0, +∞)
默认值：0
     */
    public $Offset;

    /**
     * @param string $SCFRegion 云函数所在地域
参数格式：腾讯云标准 Region，如 ap-guangzhou
     * @param string $Namespace 命名空间名称
取值参考：通过 DescribeSCFNamespaceList 接口获取
     * @param string $FunctionName 函数名称
取值参考：通过 DescribeSCFFunctionList 接口获取
     * @param integer $Limit 单页条数
取值范围：[1, 100]
默认值：20
     * @param integer $Offset 分页偏移量
取值范围：[0, +∞)
默认值：0
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
        if (array_key_exists("SCFRegion",$param) and $param["SCFRegion"] !== null) {
            $this->SCFRegion = $param["SCFRegion"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
