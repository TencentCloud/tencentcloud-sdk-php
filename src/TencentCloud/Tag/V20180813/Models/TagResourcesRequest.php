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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TagResources请求参数结构体
 *
 * @method array getResourceList() 获取待绑定的云资源，用标准的资源六段式表示。正确的资源六段式请参考：[标准的资源六段式](https://cloud.tencent.com/document/product/598/10606)和[支持标签的云产品及资源描述方式](https://cloud.tencent.com/document/product/651/89122)。
N取值范围：0~9
 * @method void setResourceList(array $ResourceList) 设置待绑定的云资源，用标准的资源六段式表示。正确的资源六段式请参考：[标准的资源六段式](https://cloud.tencent.com/document/product/598/10606)和[支持标签的云产品及资源描述方式](https://cloud.tencent.com/document/product/651/89122)。
N取值范围：0~9
 * @method array getTags() 获取标签键和标签值。
如果指定多个标签，则会为指定资源同时创建并绑定该多个标签。
同一个资源上的同一个标签键只能对应一个标签值。如果您尝试添加已有标签键，则对应的标签值会更新为新值。
如果标签不存在会为您自动创建标签。
N取值范围：0~9
 * @method void setTags(array $Tags) 设置标签键和标签值。
如果指定多个标签，则会为指定资源同时创建并绑定该多个标签。
同一个资源上的同一个标签键只能对应一个标签值。如果您尝试添加已有标签键，则对应的标签值会更新为新值。
如果标签不存在会为您自动创建标签。
N取值范围：0~9
 */
class TagResourcesRequest extends AbstractModel
{
    /**
     * @var array 待绑定的云资源，用标准的资源六段式表示。正确的资源六段式请参考：[标准的资源六段式](https://cloud.tencent.com/document/product/598/10606)和[支持标签的云产品及资源描述方式](https://cloud.tencent.com/document/product/651/89122)。
N取值范围：0~9
     */
    public $ResourceList;

    /**
     * @var array 标签键和标签值。
如果指定多个标签，则会为指定资源同时创建并绑定该多个标签。
同一个资源上的同一个标签键只能对应一个标签值。如果您尝试添加已有标签键，则对应的标签值会更新为新值。
如果标签不存在会为您自动创建标签。
N取值范围：0~9
     */
    public $Tags;

    /**
     * @param array $ResourceList 待绑定的云资源，用标准的资源六段式表示。正确的资源六段式请参考：[标准的资源六段式](https://cloud.tencent.com/document/product/598/10606)和[支持标签的云产品及资源描述方式](https://cloud.tencent.com/document/product/651/89122)。
N取值范围：0~9
     * @param array $Tags 标签键和标签值。
如果指定多个标签，则会为指定资源同时创建并绑定该多个标签。
同一个资源上的同一个标签键只能对应一个标签值。如果您尝试添加已有标签键，则对应的标签值会更新为新值。
如果标签不存在会为您自动创建标签。
N取值范围：0~9
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
        if (array_key_exists("ResourceList",$param) and $param["ResourceList"] !== null) {
            $this->ResourceList = $param["ResourceList"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
