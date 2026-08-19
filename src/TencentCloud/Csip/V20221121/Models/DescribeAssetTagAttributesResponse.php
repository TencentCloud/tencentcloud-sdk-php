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
 * DescribeAssetTagAttributes返回参数结构体
 *
 * @method array getFilterConditions() 获取<p>过滤条件</p>
 * @method void setFilterConditions(array $FilterConditions) 设置<p>过滤条件</p>
 * @method array getTaggingAttributes() 获取<p>打标策略通用属性</p>
 * @method void setTaggingAttributes(array $TaggingAttributes) 设置<p>打标策略通用属性</p>
 * @method array getTagKeyList() 获取<p>已有标签键列表</p>
 * @method void setTagKeyList(array $TagKeyList) 设置<p>已有标签键列表</p>
 * @method array getColorOptions() 获取<p>可选颜色列表</p>
 * @method void setColorOptions(array $ColorOptions) 设置<p>可选颜色列表</p>
 * @method array getAssetTypeList() 获取<p>资产类型列表</p>
 * @method void setAssetTypeList(array $AssetTypeList) 设置<p>资产类型列表</p>
 * @method array getTagTree() 获取<p>标签树</p>
 * @method void setTagTree(array $TagTree) 设置<p>标签树</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetTagAttributesResponse extends AbstractModel
{
    /**
     * @var array <p>过滤条件</p>
     */
    public $FilterConditions;

    /**
     * @var array <p>打标策略通用属性</p>
     */
    public $TaggingAttributes;

    /**
     * @var array <p>已有标签键列表</p>
     */
    public $TagKeyList;

    /**
     * @var array <p>可选颜色列表</p>
     */
    public $ColorOptions;

    /**
     * @var array <p>资产类型列表</p>
     */
    public $AssetTypeList;

    /**
     * @var array <p>标签树</p>
     */
    public $TagTree;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $FilterConditions <p>过滤条件</p>
     * @param array $TaggingAttributes <p>打标策略通用属性</p>
     * @param array $TagKeyList <p>已有标签键列表</p>
     * @param array $ColorOptions <p>可选颜色列表</p>
     * @param array $AssetTypeList <p>资产类型列表</p>
     * @param array $TagTree <p>标签树</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("FilterConditions",$param) and $param["FilterConditions"] !== null) {
            $this->FilterConditions = [];
            foreach ($param["FilterConditions"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->FilterConditions, $obj);
            }
        }

        if (array_key_exists("TaggingAttributes",$param) and $param["TaggingAttributes"] !== null) {
            $this->TaggingAttributes = [];
            foreach ($param["TaggingAttributes"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->TaggingAttributes, $obj);
            }
        }

        if (array_key_exists("TagKeyList",$param) and $param["TagKeyList"] !== null) {
            $this->TagKeyList = [];
            foreach ($param["TagKeyList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->TagKeyList, $obj);
            }
        }

        if (array_key_exists("ColorOptions",$param) and $param["ColorOptions"] !== null) {
            $this->ColorOptions = [];
            foreach ($param["ColorOptions"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->ColorOptions, $obj);
            }
        }

        if (array_key_exists("AssetTypeList",$param) and $param["AssetTypeList"] !== null) {
            $this->AssetTypeList = [];
            foreach ($param["AssetTypeList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->AssetTypeList, $obj);
            }
        }

        if (array_key_exists("TagTree",$param) and $param["TagTree"] !== null) {
            $this->TagTree = [];
            foreach ($param["TagTree"] as $key => $value){
                $obj = new AssetTagTreeNode();
                $obj->deserialize($value);
                array_push($this->TagTree, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
