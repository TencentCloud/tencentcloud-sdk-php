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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImages请求参数结构体
 *
 * @method integer getPageNumber() 获取<p>拉取页号</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>拉取页号</p>
 * @method integer getPageSize() 获取<p>每页拉取个数</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页拉取个数</p>
 * @method array getFilters() 获取<p>Name取值：[&quot;ImageID&quot;,&quot;Name&quot;,&quot;ImageType&quot;,&quot;ImageState&quot;,&quot;Region&quot;,&quot;InstanceType&quot;]<br>注意：filter中没有ImageID或ImageState过滤条件，后台默认不返回INVISIBLE的镜像信息</p>
 * @method void setFilters(array $Filters) 设置<p>Name取值：[&quot;ImageID&quot;,&quot;Name&quot;,&quot;ImageType&quot;,&quot;ImageState&quot;,&quot;Region&quot;,&quot;InstanceType&quot;]<br>注意：filter中没有ImageID或ImageState过滤条件，后台默认不返回INVISIBLE的镜像信息</p>
 */
class DescribeImagesRequest extends AbstractModel
{
    /**
     * @var integer <p>拉取页号</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页拉取个数</p>
     */
    public $PageSize;

    /**
     * @var array <p>Name取值：[&quot;ImageID&quot;,&quot;Name&quot;,&quot;ImageType&quot;,&quot;ImageState&quot;,&quot;Region&quot;,&quot;InstanceType&quot;]<br>注意：filter中没有ImageID或ImageState过滤条件，后台默认不返回INVISIBLE的镜像信息</p>
     */
    public $Filters;

    /**
     * @param integer $PageNumber <p>拉取页号</p>
     * @param integer $PageSize <p>每页拉取个数</p>
     * @param array $Filters <p>Name取值：[&quot;ImageID&quot;,&quot;Name&quot;,&quot;ImageType&quot;,&quot;ImageState&quot;,&quot;Region&quot;,&quot;InstanceType&quot;]<br>注意：filter中没有ImageID或ImageState过滤条件，后台默认不返回INVISIBLE的镜像信息</p>
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
