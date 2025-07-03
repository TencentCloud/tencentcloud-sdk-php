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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceTagsByResourceIds请求参数结构体
 *
 * @method string getServiceType() 获取业务类型，示例 cvm 。资源所属业务名称（资源六段式中的第三段）
 * @method void setServiceType(string $ServiceType) 设置业务类型，示例 cvm 。资源所属业务名称（资源六段式中的第三段）
 * @method string getResourcePrefix() 获取资源前缀，示例 instance
 * @method void setResourcePrefix(string $ResourcePrefix) 设置资源前缀，示例 instance
 * @method array getResourceIds() 获取资源ID数组，大小不超过50
 * @method void setResourceIds(array $ResourceIds) 设置资源ID数组，大小不超过50
 * @method string getResourceRegion() 获取资源所在地域，示例：ap-guangzhou，不区分地域的资源该字段传空字符串，区分地域的资源必填
 * @method void setResourceRegion(string $ResourceRegion) 设置资源所在地域，示例：ap-guangzhou，不区分地域的资源该字段传空字符串，区分地域的资源必填
 * @method integer getOffset() 获取数据偏移量，默认为 0, 必须为Limit参数的整数倍
 * @method void setOffset(integer $Offset) 设置数据偏移量，默认为 0, 必须为Limit参数的整数倍
 * @method integer getLimit() 获取每页大小，默认为 15
 * @method void setLimit(integer $Limit) 设置每页大小，默认为 15
 * @method string getCategory() 获取标签类型。取值： Custom：自定义标签。 System：系统标签。 All：全部标签。 默认值：All。
 * @method void setCategory(string $Category) 设置标签类型。取值： Custom：自定义标签。 System：系统标签。 All：全部标签。 默认值：All。
 */
class DescribeResourceTagsByResourceIdsRequest extends AbstractModel
{
    /**
     * @var string 业务类型，示例 cvm 。资源所属业务名称（资源六段式中的第三段）
     */
    public $ServiceType;

    /**
     * @var string 资源前缀，示例 instance
     */
    public $ResourcePrefix;

    /**
     * @var array 资源ID数组，大小不超过50
     */
    public $ResourceIds;

    /**
     * @var string 资源所在地域，示例：ap-guangzhou，不区分地域的资源该字段传空字符串，区分地域的资源必填
     */
    public $ResourceRegion;

    /**
     * @var integer 数据偏移量，默认为 0, 必须为Limit参数的整数倍
     */
    public $Offset;

    /**
     * @var integer 每页大小，默认为 15
     */
    public $Limit;

    /**
     * @var string 标签类型。取值： Custom：自定义标签。 System：系统标签。 All：全部标签。 默认值：All。
     */
    public $Category;

    /**
     * @param string $ServiceType 业务类型，示例 cvm 。资源所属业务名称（资源六段式中的第三段）
     * @param string $ResourcePrefix 资源前缀，示例 instance
     * @param array $ResourceIds 资源ID数组，大小不超过50
     * @param string $ResourceRegion 资源所在地域，示例：ap-guangzhou，不区分地域的资源该字段传空字符串，区分地域的资源必填
     * @param integer $Offset 数据偏移量，默认为 0, 必须为Limit参数的整数倍
     * @param integer $Limit 每页大小，默认为 15
     * @param string $Category 标签类型。取值： Custom：自定义标签。 System：系统标签。 All：全部标签。 默认值：All。
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
        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ResourcePrefix",$param) and $param["ResourcePrefix"] !== null) {
            $this->ResourcePrefix = $param["ResourcePrefix"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }
    }
}
