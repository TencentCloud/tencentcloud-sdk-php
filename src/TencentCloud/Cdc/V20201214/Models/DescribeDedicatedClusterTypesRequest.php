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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDedicatedClusterTypes请求参数结构体
 *
 * @method string getName() 获取<p>模糊匹配专用集群配置名称</p>
 * @method void setName(string $Name) 设置<p>模糊匹配专用集群配置名称</p>
 * @method array getDedicatedClusterTypeIds() 获取<p>待查询的专用集群配置id列表</p>
 * @method void setDedicatedClusterTypeIds(array $DedicatedClusterTypeIds) 设置<p>待查询的专用集群配置id列表</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0。关于<code>Offset</code>的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/15688">简介</a>中的相关小节。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。关于<code>Offset</code>的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/15688">简介</a>中的相关小节。</p>
 * @method integer getLimit() 获取<p>返回数量，默认为20，最大值为100。关于<code>Limit</code>的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/15688">简介</a>中的相关小节。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为20，最大值为100。关于<code>Limit</code>的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/15688">简介</a>中的相关小节。</p>
 * @method boolean getIsCompute() 获取<p>是否只查询计算规格类型</p>
 * @method void setIsCompute(boolean $IsCompute) 设置<p>是否只查询计算规格类型</p>
 */
class DescribeDedicatedClusterTypesRequest extends AbstractModel
{
    /**
     * @var string <p>模糊匹配专用集群配置名称</p>
     */
    public $Name;

    /**
     * @var array <p>待查询的专用集群配置id列表</p>
     */
    public $DedicatedClusterTypeIds;

    /**
     * @var integer <p>偏移量，默认为0。关于<code>Offset</code>的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/15688">简介</a>中的相关小节。</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认为20，最大值为100。关于<code>Limit</code>的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/15688">简介</a>中的相关小节。</p>
     */
    public $Limit;

    /**
     * @var boolean <p>是否只查询计算规格类型</p>
     */
    public $IsCompute;

    /**
     * @param string $Name <p>模糊匹配专用集群配置名称</p>
     * @param array $DedicatedClusterTypeIds <p>待查询的专用集群配置id列表</p>
     * @param integer $Offset <p>偏移量，默认为0。关于<code>Offset</code>的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/15688">简介</a>中的相关小节。</p>
     * @param integer $Limit <p>返回数量，默认为20，最大值为100。关于<code>Limit</code>的更进一步介绍请参考 API <a href="https://cloud.tencent.com/document/api/213/15688">简介</a>中的相关小节。</p>
     * @param boolean $IsCompute <p>是否只查询计算规格类型</p>
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
