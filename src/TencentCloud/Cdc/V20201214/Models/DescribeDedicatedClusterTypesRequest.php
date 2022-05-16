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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDedicatedClusterTypes请求参数结构体
 *
 * @method string getName() 获取模糊匹配专用集群配置名称
 * @method void setName(string $Name) 设置模糊匹配专用集群配置名称
 * @method array getDedicatedClusterTypeIds() 获取待查询的专用集群配置id列表
 * @method void setDedicatedClusterTypeIds(array $DedicatedClusterTypeIds) 设置待查询的专用集群配置id列表
 * @method integer getOffset() 获取偏移量，默认为0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method boolean getIsCompute() 获取是否只查询计算规格类型
 * @method void setIsCompute(boolean $IsCompute) 设置是否只查询计算规格类型
 */
class DescribeDedicatedClusterTypesRequest extends AbstractModel
{
    /**
     * @var string 模糊匹配专用集群配置名称
     */
    public $Name;

    /**
     * @var array 待查询的专用集群配置id列表
     */
    public $DedicatedClusterTypeIds;

    /**
     * @var integer 偏移量，默认为0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     */
    public $Limit;

    /**
     * @var boolean 是否只查询计算规格类型
     */
    public $IsCompute;

    /**
     * @param string $Name 模糊匹配专用集群配置名称
     * @param array $DedicatedClusterTypeIds 待查询的专用集群配置id列表
     * @param integer $Offset 偏移量，默认为0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     * @param integer $Limit 返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     * @param boolean $IsCompute 是否只查询计算规格类型
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DedicatedClusterTypeIds",$param) and $param["DedicatedClusterTypeIds"] !== null) {
            $this->DedicatedClusterTypeIds = $param["DedicatedClusterTypeIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("IsCompute",$param) and $param["IsCompute"] !== null) {
            $this->IsCompute = $param["IsCompute"];
        }
    }
}
