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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBCustomImages请求参数结构体
 *
 * @method array getFilters() 获取<p>支持镜像过滤的选项</p><p>取值参考：</p><ul><li>image-id,按镜像 ID 过滤    </li><li>os-type,按操作系统类型过滤(linux / windows)</li><li>image-type，按镜像类型过滤（PUBLIC_IMAGE（公共镜像）/ PRIVATE_IMAGE（私有镜像））</li><li>architecture，按架构过滤（x86_64 / arm64）</li></ul>
 * @method void setFilters(array $Filters) 设置<p>支持镜像过滤的选项</p><p>取值参考：</p><ul><li>image-id,按镜像 ID 过滤    </li><li>os-type,按操作系统类型过滤(linux / windows)</li><li>image-type，按镜像类型过滤（PUBLIC_IMAGE（公共镜像）/ PRIVATE_IMAGE（私有镜像））</li><li>architecture，按架构过滤（x86_64 / arm64）</li></ul>
 * @method integer getOffset() 获取<p>偏移量</p><p>默认值：0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p><p>默认值：0</p>
 * @method integer getLimit() 获取<p>返回数量</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
 */
class DescribeDBCustomImagesRequest extends AbstractModel
{
    /**
     * @var array <p>支持镜像过滤的选项</p><p>取值参考：</p><ul><li>image-id,按镜像 ID 过滤    </li><li>os-type,按操作系统类型过滤(linux / windows)</li><li>image-type，按镜像类型过滤（PUBLIC_IMAGE（公共镜像）/ PRIVATE_IMAGE（私有镜像））</li><li>architecture，按架构过滤（x86_64 / arm64）</li></ul>
     */
    public $Filters;

    /**
     * @var integer <p>偏移量</p><p>默认值：0</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
     */
    public $Limit;

    /**
     * @param array $Filters <p>支持镜像过滤的选项</p><p>取值参考：</p><ul><li>image-id,按镜像 ID 过滤    </li><li>os-type,按操作系统类型过滤(linux / windows)</li><li>image-type，按镜像类型过滤（PUBLIC_IMAGE（公共镜像）/ PRIVATE_IMAGE（私有镜像））</li><li>architecture，按架构过滤（x86_64 / arm64）</li></ul>
     * @param integer $Offset <p>偏移量</p><p>默认值：0</p>
     * @param integer $Limit <p>返回数量</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
